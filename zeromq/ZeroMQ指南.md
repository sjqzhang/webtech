
			 




本文是阅读[http://zguide2.zeromq.org/page:all#toc65](http://zguide2.zeromq.org/page:all#toc65)的笔记。



 




第三章用实际的示例探讨了请求-回应模式的高级用法。本章将探讨可靠性的问题，在ZeroMQ的核心请求-应答模式上创建可靠的消息模式。本章主要关注用户空间的模式，它们可以帮助你设计ZeroMQ应用程序。



1 “可靠”是什么？

要理解“可靠”是什么，需要考察其反面：故障。如果我们可以处理某些类型的故障，则对这些故障是可靠的。以下是分布式应用中可能的故障，大体按照可能性降序排列：



应用程序代码最可能导致故障。程序可能崩溃退出、冻结而不响应输入、对于输入来说运行得太慢、耗尽内存等等。


系统代码——比如说使用ZeroMQ编写的代理——可能会死掉。系统代码应该比应用代码可靠得多，但是还是可能会崩溃，特别是在试图适应慢速的客户端而耗尽内存的时候。

消息队列可能会溢出，特别是在试图处理慢速客户端的系统代码中。队列溢出的时候就会开始丢弃消息。


网络可能发生临时故障，导致间歇性的消息丢失。这种错误会隐藏在ZeroMQ应用之后，因为ZeroMQ会在网络强制断开后自动重新连接。

硬件可能会发生故障，影响到机器中所有运行着的进程。

网络可能发生外在故障，比如说某个端口或者交换器可能会死掉，导致相应部分的网络不可访问。

整个数据中心可能遭遇闪电、地震、火灾，或者更常见的电源或者制冷故障。



让软件系统对上述各种故障情况完全可靠是非常困难、开销巨大的，这超出了本文档的考虑范围。因为应对前5种故障涵盖了99.9%的可靠性需求，所以我们只考虑它们。


2 可靠性设计

简单地说，可靠就是“在代码冻结或者崩溃的时候合理地工作”。来看看如何让ZeroMQ的每种核心消息模式在代码死掉的时候是可靠的：




请求-应答：如果服务器（在处理请求的过程中）死掉，则客户端可以感知到，因为它收不到答案了。这时候客户端可以放弃、稍后重试、联系另一个服务器等等。对于客户端死掉，我们暂时不予考虑。


发布-订阅：如果客户端死掉（已经取得了一些数据），服务器是感知不到的。发布-订阅模式中客户端不会向服务器发送任何信息。但是客户端可以在带外与服务器联系，比如说通过请求-应答模式要求“重发我错过了的消息”。服务器死掉的情况超出了当前考虑范围。订阅者也可以自检，确认自己没有运行得太慢，如果是运行得太慢，可以采取一些措施（比如说警告操作者，然后退出）。


管线：如果（工作中的）工作者死掉，任务发生器是感知不到的。管线模式跟发布-订阅模式一样，是单向工作的。但是下游的收集器可以检测到某个任务没有完成，发送一个消息给发生器：“请重发任务324!”。如果任务发生器或者收集器死掉，则上游发出批量工作的客户端可以重发批量工作。这可能不那么优雅，但是通常情况下，系统代码不死掉就足够了。


本章主要关注请求-应答模式，后续章节会涵盖可靠的发布-订阅和管线模式。



基本的请求-应答模式（REQ客户端套接字阻塞地send/recv消息到一个REP服务器套接字）处理大部分常见故障的能力很差。如果服务器在处理请求的过程中崩溃，则客户端会无限挂起。如果请求或者回应在网络中丢失，客户端也会无限挂起。



ZeroMQ很好，它会自动重连对端、进行消息负载均衡等等。但是对于真实的世界它还不够好。只有在相同进程中的两个线程里使用，不会有网络或者单独的服务器进程死掉的情况下，才可以信任基本的请求-应答模式。



粗略地说，有三种将客户端连接到服务器的方式，每种都需要特别的方式来处理可靠性：




多个客户端直接与单个服务器通信。使用场合：客户端需要与单个公知的服务器通信。需要处理的典型故障类型：服务器崩溃和重启、网络断开。


多个客户端与单个分发工作到多个服务器的队列设备通信。使用场合：分发工作负载到工作者。需要处理的典型故障类型：工作者崩溃和重启、工作者忙循环、工作者过载、队列设备崩溃和重启、网络断开。


多个客户端与多个服务器通信，没有中间设备。使用场合：像名字解析这样的分布式服务。需要处理的典型故障类型：服务崩溃和重启、服务忙循环、服务过载、网络断开。



2.1 客户端可靠性(延迟模式)(Lazy Pirate
Pattern)
对客户端稍作修改就可以得到一个简单的可靠请求-应答模式：



轮询REQ套接字，只在确定有应答到达的时候才进行接收操作

如果在超时时间内没有应答到达，则多次重发请求

如果多次请求之后还是没有应答，则放弃事务



如果使用REQ套接字的时候试图超越严格的发送-接收模式，则会发生错误（REQ套接字实现了一个小的有限状态机，强制要求发送-接收轮回，所以错误码的名字是EFSM）。这让REQ不能用于这个模式，因为我们可能要在收到回应之前多次发送请求。最好的暴力解决方案是在出错时关闭、重新打开REQ套接字。





客户端代码


```c

#if defined(_DEBUG)


#pragma
comment(lib,"libzmqd.lib")


#pragma
comment(lib,"czmqd.lib")


#else


#pragma
comment(lib,"libzmq.lib")


#pragma
comment(lib,"czmq.lib")


#endif


#include <stdint.h>


#if defined(WIN32)

typedef int64_t ssize_t;


#endif


#include <zmq.h>


#include <czmq.h>


#include <stdio.h>


#define Request_Timeout
2500


#define Request_Retries
3


#define Server_EndPoint
"tcp://localhost:6666"

int main(void){




zctx_t* ctx = zctx_new();


printf("试图连接到服务器...\n");

void* client =
zsocket_new(ctx,ZMQ_REQ);


assert(client);


zsocket_connect(client,Server_EndPoint);

int seq = 0;

int retry_left = Request_Retries;

while((retry_left > 0)
&&
!zctx_interrupted){

char request[10];

sprintf_s(request,10,"%d",++seq);



zstr_send(client,request);

bool continue_retry
= true;



while(continue_retry){


zmq_pollitem_t items[] =
{{client,0,ZMQ_POLLIN,0}};



int rc = zmq_poll(items,1,Request_Timeout *
ZMQ_POLL_MSEC);



// 被中断

if (rc == -1){

break;


}

if (items[0].revents & ZMQ_POLLIN){

char* reply =
zstr_recv(client);

// 被中断

if (reply == NULL){

break;


}

else if (atoi(reply) == seq){


printf("收到正确的回应: %s\n",reply);


retry_left = Request_Retries;


continue_retry = false;


free(reply);


}

else{


printf("错误的回应: %s\n",reply);


free(reply);


}


}

else if (--retry_left ==
0){


printf("服务器好像离线了,放弃\n");

break;


}

// 回应超时,断开连接后重新连接,重发请求

else{


printf("服务器回应超时,重新连接到服务器...");


fflush(stdout);


zsocket_destroy(ctx,client);




client =
zsocket_new(ctx,ZMQ_REQ);


assert(client);


zsocket_connect(client,Server_EndPoint);




printf("OK\n重发请求:
%s...",request);


fflush(stdout);




zstr_send(client,request);


printf("OK\n");


}


}


}


zsocket_destroy(ctx,client);


zctx_destroy(&ctx);



return 0;


}




```




服务器代码

```c

#if defined(_DEBUG)


#pragma
comment(lib,"libzmqd.lib")


#pragma
comment(lib,"czmqd.lib")


#else


#pragma
comment(lib,"libzmq.lib")


#pragma
comment(lib,"czmq.lib")


#endif


#include <stdint.h>


#if defined(WIN32)

typedef int64_t ssize_t;


#endif


#include <zmq.h>


#include <czmq.h>


#include <stdio.h>

int main(void){


srand((unsigned int)time(NULL));




zctx_t* ctx = zctx_new();



void* server =
zsocket_new(ctx,ZMQ_REP);

zsocket_bind(server,"tcp://*:6666");

int cycles = 0;

while(true){

char* request =
zstr_recv(server);


cycles++;

if ((cycles > 3)
&&
(randof(3) == 0)){


printf("服务器崩溃\n");

break;


}

else if ((cycles > 3)
&&
(randof(3) == 0)){


printf("服务器过载\n");


zclock_sleep(2000);


}


printf("收到请求: %s\n",request);


zclock_sleep(1000);


zstr_send(server,request);


free(request);


}


zsocket_destroy(ctx,server);


zctx_destroy(&ctx);



return 0;


}

```








只在客户端处理故障可用于多个客户端与单个服务器通信的情况。它可以处理服务器崩溃，但是只有重启同一个服务器之后才能恢复。如果发生永久错误（比如说服务器硬件电源故障），则无法恢复。因为服务器的应用代码是任何体系中最大的故障源，所以依赖单个服务器并不是好主意。


优缺点

优点：易于理解和实现

优点：可以与现有的客户端和服务器应用代码配合工作

优点：ZeroMQ会自动重新连接，直到可以正常工作

缺点：不能将故障转移到备份/替换服务器


2.2 基本可靠队列(Simple Pirate
Pattern)
第二种模式使用队列设备，让客户端可以透明地与多个服务器通信(这里的服务器可以更精确地称作“工作者”)。



工作者是无状态的，或者有一些我们不知道的共享状态，比如说，共享的数据库。队列设备让工作者可以上线和下线，而客户端不必了解这些。一个工作者死掉之后，另一个工作者会接替它。这个拓扑结构很简单，只是有一个缺点：中央的队列设备是一个单点故障源。





队列设备


```c
#if defined(_DEBUG)


#pragma
comment(lib,"libzmqd.lib")


#pragma
comment(lib,"czmqd.lib")


#else


#pragma
comment(lib,"libzmq.lib")


#pragma
comment(lib,"czmq.lib")


#endif


#include <stdint.h>


#if defined(WIN32)

typedef int64_t ssize_t;


#endif


#include <zmq.h>


#include <czmq.h>


#include <stdio.h>


#define LRU_READY "\001"

int main(void){




zctx_t* ctx = zctx_new();

void* frontend =
zsocket_new(ctx,ZMQ_ROUTER);

void* backend =
zsocket_new(ctx,ZMQ_ROUTER);


zsocket_bind(frontend,"tcp://*:5555");


zsocket_bind(backend,"tcp://*:5556");


zlist_t* workers = zlist_new();

while(true){


zmq_pollitem_t items[] = {


{backend,0,ZMQ_POLLIN,0},


{frontend,0,ZMQ_POLLIN,0},


};

int rc = zmq_poll(items,((zlist_size(workers)
> 0) ? 2 : 1),-1);

if (rc == -1) break;

// 后端回应或者就绪通知

if (items[0].revents & ZMQ_POLLIN){


zmsg_t* msg = zmsg_recv(backend);

if (msg == NULL) break;


zframe_t* p_addr = zmsg_unwrap(msg);

char* psz =
zframe_strdup(p_addr);


zlist_append(workers,p_addr);


zframe_t* p_data = zmsg_first(msg);



// 就绪通知

if
(memcmp(zframe_data(p_data),LRU_READY,1) == 0){


printf("工作者[%s]就绪\n",psz);


zmsg_destroy(&msg);


}

// 回应

else{


printf("工作者[%s]应答\n",psz);


zmsg_send(&msg,frontend);


}


free(psz);


}

// 从前端接收请求,通过后端发送给工作者

if (items[1].revents & ZMQ_POLLIN){


zmsg_t* msg = zmsg_recv(frontend);

if (msg){


zmsg_wrap(msg,(zframe_t*)zlist_pop(workers));


zmsg_send(&msg,backend);


}


}


}

while(zlist_size(workers)
> 0){


zframe_t* p_addr = (zframe_t*)zlist_pop(workers);


zframe_destroy(&p_addr);


}




zsocket_destroy(ctx,frontend);


zsocket_destroy(ctx,backend);


zctx_destroy(&ctx);



return 0;


}

```







工作者


```c
#if defined(_DEBUG)


#pragma
comment(lib,"libzmqd.lib")


#pragma
comment(lib,"czmqd.lib")


#else


#pragma
comment(lib,"libzmq.lib")


#pragma
comment(lib,"czmq.lib")


#endif


#include <stdint.h>


#if defined(WIN32)

typedef int64_t ssize_t;


#endif


#include <zmq.h>


#include <czmq.h>


#include <stdio.h>


#define LRU_READY "\001"

int main(void){




srandom((unsigned int)time(NULL));




zctx_t* ctx = zctx_new();

void* worker =
zsocket_new(ctx,ZMQ_REQ);

char identity[10];


snprintf(identity,10,"X-X",randof(0x10000),randof(0x10000));


zsocket_set_identity(worker,identity);


zsocket_connect(worker,"tcp://localhost:5556");


zframe_t* p_ready = zframe_new(LRU_READY,1);


zframe_send(&p_ready,worker,0);

int cycles = 0;

while(true){


zmsg_t* p_req = zmsg_recv(worker);


cycles++;

if ((cycles > 3)
&&
(randof(3) == 0)){


printf("服务器崩溃\n");

break;


}

else if ((cycles > 3)
&&
(randof(3) == 0)){


printf("服务器过载\n");


zclock_sleep(2000);


}


zframe_t* p_data = zmsg_last(p_req);

char* psz =
zframe_strdup(p_data);


printf("收到请求: %s\n",psz);


free(psz);




zclock_sleep(1000);


zmsg_send(&p_req,worker);


}


zsocket_destroy(ctx,worker);


zctx_destroy(&ctx);



return 0;


}



```





工作者使用了前一节的服务器代码，但是进行了改进，使之适合于LRU模式（使用REQ套接字和“就绪”通知）。



要进行测试，以任意次序启动多个工作者和客户端（使用前一小节的客户端程序），以及一个队列设备。这个模式适合于任意数量的客户端和工作者。


2.3 健壮的可靠队列(Paranoid Pirate
Pattern)
基本的可靠队列工作得很好，但是还是有其缺点：




对于队列崩溃和重启是不健壮的。客户端可以恢复，但是工作者不能恢复。虽然ZeroMQ会自动进行套接字重连，但是队列重新启动之后工作者不会发送“就绪”通知，所以对于队列来说，工作者是不存在的。修正这个问题需要从队列到工作者的心跳，这样工作者就可以检测到队列设备离线了。


队列没有检测工作者故障，如果工作者在空闲时死掉，队列只有向其发送一个请求后才可以将死掉的工作者移出工作者队列。客户端需要进行不必要的等待和重试。这不是致命的问题，但还是不太好的。解决这个问题需要从工作者到队列的心跳，这样队列就可以在任何阶段检测到工作者离线。


我们将解决上述两个问题的模式称作Paranoid Pirate Pattern。


前面我们在工作者中使用REQ套接字，但是对于Paranoid Pirate
Pattern，我们使用DEALER套接字。DEALER套接字可以在任何时候发送和接收消息，而不用像REQ套接字那样遵循固定的发送/接收步骤。DEALER套接字的缺点是我们必须自己做信封管理（请参看第三章）。





队列设备

```c

#if defined(_DEBUG)


#pragma
comment(lib,"libzmqd.lib")


#pragma
comment(lib,"czmqd.lib")


#else


#pragma
comment(lib,"libzmq.lib")


#pragma
comment(lib,"czmq.lib")


#endif


#include <stdint.h>


#if defined(WIN32)

typedef int64_t ssize_t;


#endif


#include <zmq.h>


#include <czmq.h>


#include <stdio.h>


#define Heartbeat_Timeout
3


#define Heartbeat_Interval
1000


#define PPP_Ready "\001"


#define PPP_Heartbeat
"\002"

struct ppqueue_context{

void* frontend;

void* backend;


zlist_t* worker_list;

bool polling_front;


int64_t last_heartbeat;


};

static int OnBackendReply(zloop_t* p_loop,zmq_pollitem_t* p_item,void*
p_arg);

static int OnFrontendRequest(zloop_t* p_loop,zmq_pollitem_t* p_item,void*
p_arg);

static int OnCheckAliveTimer(zloop_t* p_loop,zmq_pollitem_t* p_item,void*
p_arg);

class CWorker{

public:


CWorker(zframe_t*);

~CWorker();

void
Add2List(zlist_t*
p_worker_list);



static zframe_t* GetNextWorkerAddr(zlist_t* p_worker_list);

static void
DeleteTimeoutedWorker(zlist_t*
p_worker_list);

public:


zframe_t* m_addr;

char* m_pszId;


int64_t m_expire_at;


};

//---------------------------------------------------------------------------------------



CWorker::CWorker(zframe_t*
p_addr){


m_addr = p_addr;


m_pszId = zframe_strdup(p_addr);


m_expire_at = zclock_time()
+ Heartbeat_Timeout * Heartbeat_Interval;


}


CWorker::~CWorker(){


zframe_destroy(&m_addr);


free(m_pszId);


}

// 将自身添加到链表中

void CWorker::Add2List(zlist_t*
p_worker_list){




CWorker* p_worker = (CWorker*)zlist_first(p_worker_list);

// 删除链表中已有的相同地址的工作者对象

while(p_worker != NULL){

if
(streq(m_pszId,p_worker->m_pszId)){


zlist_remove(p_worker_list,p_worker);

delete p_worker;

break;


}

else{


p_worker = (CWorker*)zlist_next(p_worker_list);


}


}


zlist_append(p_worker_list,this);


}

// 取得下一个可用工作者的地址帧


zframe_t* CWorker::GetNextWorkerAddr(zlist_t* p_worker_list){


CWorker* p_worker = (CWorker*)zlist_pop(p_worker_list);


assert(p_worker != NULL);


zframe_t* p_addr = p_worker->m_addr;


p_worker->m_addr = NULL;

delete p_worker;

return p_addr;


}

// 从链表中删除超时的工作者

void CWorker::DeleteTimeoutedWorker(zlist_t* p_worker_list){




CWorker* p_worker = (CWorker*)zlist_first(p_worker_list);

// 注: 链表中的工作者按照超时时间从小到大排列

while(p_worker != NULL){

if (zclock_time() < p_worker->m_expire_at){

break;


}

else{


printf("工作者[%s]好像出问题了哦\n",p_worker->m_pszId);


zlist_remove(p_worker_list,p_worker);

delete p_worker;


p_worker = (CWorker*)zlist_first(p_worker_list);


}


}


}

//----------------------------------------------------------------------------------------------

// 处理后端收到的就绪通知/心跳/回应

static int OnBackendReply(zloop_t* p_loop,zmq_pollitem_t* p_item,void*
p_arg){




ppqueue_context* p_ctx = (ppqueue_context*)p_arg;


ppqueue_context& ctx
= *p_ctx;


assert(p_item->socket == ctx.backend);




zmsg_t* msg = zmsg_recv(ctx.backend);

if (msg == NULL) return 0;


zframe_t* p_addr = zmsg_unwrap(msg);

char* psz =
zframe_strdup(p_addr);

// 新建工作者,添加到链表中(更新工作者状态)


(new
CWorker(p_addr))->Add2List(ctx.worker_list);



// 就绪通知/心跳

if (zmsg_size(msg) == 1){


zframe_t* p_data = zmsg_first(msg);

if
(memcmp(zframe_data(p_data),PPP_Ready,1) == 0){


printf("工作者[%s]就绪\n",psz);


zmsg_destroy(&msg);


}

else if
(memcmp(zframe_data(p_data),PPP_Heartbeat,1) == 0){


printf("工作者[%s]心跳\n",psz);


zmsg_destroy(&msg);


}

else{


assert(false);


}


}

// 回应

else{


printf("工作者[%s]应答\n",psz);


zmsg_send(&msg,ctx.frontend);


}


free(psz);

// 开始轮询前端

if (!ctx.polling_front){


zmq_pollitem_t poll_front =
{ctx.frontend,0,ZMQ_POLLIN,0};



zloop_poller(p_loop,&poll_front,OnFrontendRequest,p_arg);



ctx.polling_front = true;


printf("-------------
开始轮询前端\n");


}

return 0;


}

// 处理前端收到的请求

static int OnFrontendRequest(zloop_t* p_loop,zmq_pollitem_t* p_item,void*
p_arg){


ppqueue_context* p_ctx = (ppqueue_context*)p_arg;


ppqueue_context& ctx
= *p_ctx;




zmsg_t* msg = zmsg_recv(ctx.frontend);



if (msg){


zmsg_push(msg,CWorker::GetNextWorkerAddr(ctx.worker_list));


zmsg_send(&msg,ctx.backend);


//
没有工作者了,停止轮询前端


if ((zlist_size(ctx.worker_list) == 0)
&& ctx.polling_front){


zmq_pollitem_t poll_front = {ctx.frontend,0,ZMQ_POLLIN,0};


zloop_poller_end(p_loop,&poll_front);


ctx.polling_front = false;


printf("============== 停止轮询前端\n");


}


}

return 0;


}

// 检查工作者超时

static int OnCheckAliveTimer(zloop_t* p_loop,zmq_pollitem_t*,void*
p_arg){




ppqueue_context* p_ctx = (ppqueue_context*)p_arg;


ppqueue_context& ctx
= *p_ctx;



// 检测工作者超时


CWorker::DeleteTimeoutedWorker(ctx.worker_list);

// 没有工作者了,停止轮询前端

if
((zlist_size(ctx.worker_list) ==
0) &&
ctx.polling_front){


zmq_pollitem_t poll_front =
{ctx.frontend,0,ZMQ_POLLIN,0};



zloop_poller_end(p_loop,&poll_front);


ctx.polling_front = false;


printf("==============
停止轮询前端\n");


}

// 给每个工作者发送心跳

if (ctx.last_heartbeat
+ Heartbeat_Interval <=
zclock_time()){




zframe_t* p_heartbeat = zframe_new(PPP_Heartbeat,1);




CWorker* p_worker = (CWorker*)zlist_first(ctx.worker_list);



while(p_worker != NULL){


zframe_send(&p_worker->m_addr,ctx.backend,ZFRAME_MORE
| ZFRAME_REUSE);


zframe_send(&p_heartbeat,ctx.backend,ZFRAME_REUSE);



p_worker = (CWorker*)zlist_next(ctx.worker_list);


}


ctx.last_heartbeat =
zclock_time();


}

return 0;


}

int main(void){




zctx_t* ctx = zctx_new();

void* frontend =
zsocket_new(ctx,ZMQ_ROUTER);

void* backend =
zsocket_new(ctx,ZMQ_ROUTER);


zsocket_bind(frontend,"tcp://*:5555");


zsocket_bind(backend,"tcp://*:5556");

//--------------------------------------


zlist_t* workers = zlist_new();


ppqueue_context ppctx;


ppctx.frontend = frontend;


ppctx.backend = backend;


ppctx.worker_list = workers;


ppctx.polling_front = false;


ppctx.last_heartbeat = 0;

//--------------------------------------


zloop_t* p_loop = zloop_new();


zmq_pollitem_t poll_back =
{backend,0,ZMQ_POLLIN,0};


zloop_poller(p_loop,&poll_back,OnBackendReply,&ppctx);



zloop_timer(p_loop,Heartbeat_Interval,0,OnCheckAliveTimer,&ppctx);


zloop_start(p_loop);

//--------------------------------------

while(zlist_size(workers)
> 0){


CWorker* p_worker = (CWorker*)zlist_pop(workers);

delete p_worker;


}




zsocket_destroy(ctx,frontend);


zsocket_destroy(ctx,backend);


zloop_destroy(&p_loop);


zctx_destroy(&ctx);



return 0;


}



```





工作者


```c
#if defined(_DEBUG)


#pragma
comment(lib,"libzmqd.lib")


#pragma
comment(lib,"czmqd.lib")


#else


#pragma
comment(lib,"libzmq.lib")


#pragma
comment(lib,"czmq.lib")


#endif


#include <stdint.h>


#if defined(WIN32)

typedef int64_t ssize_t;


#endif


#include <zmq.h>


#include <czmq.h>


#include <stdio.h>


#define Heartbeat_Timeout
3


#define Heartbeat_Interval
1000


#define Retry_Delay_Init
1000


#define Retry_Delay_Max
32000


#define PPP_Ready "\001"


#define PPP_Heartbeat
"\002"

static void*
create_worker(zctx_t* ctx);

static int OnDataReceived(zloop_t* p_loop,zmq_pollitem_t* p_item,void*
p_arg);

static int OnCheckAliveTimer(zloop_t* p_loop,zmq_pollitem_t* p_item,void*
p_arg);

struct ppworker_context{




zctx_t* ctx;

void* worker; //
套接字


int64_t queue_expire_at; //
队列设备在什么时候心跳超时


int64_t last_send_heartbeat;//
上次发送心跳的时间


uint64_t req_count; // 已经收到的请求数

int retry_delay; // 重试延时


};

int main(void){




srand((unsigned int)time(NULL));


zctx_t* ctx = zctx_new();

void* worker =
create_worker(ctx);


zloop_t* p_loop = zloop_new();


ppworker_context worker_ctx;


worker_ctx.ctx = ctx;


worker_ctx.worker = worker;


worker_ctx.last_send_heartbeat =
0;


worker_ctx.queue_expire_at =
zclock_time() + Heartbeat_Timeout
* Heartbeat_Interval;


worker_ctx.req_count = 0;


worker_ctx.retry_delay =
Retry_Delay_Init;




zmq_pollitem_t check_req =
{worker,0,ZMQ_POLLIN,0};


zloop_poller(p_loop,&check_req,OnDataReceived,&worker_ctx);



zloop_timer(p_loop,Heartbeat_Interval,0,OnCheckAliveTimer,&worker_ctx);


zloop_start(p_loop);


zsocket_destroy(ctx,worker_ctx.worker);


zloop_destroy(&p_loop);


zctx_destroy(&ctx);



return 0;


}

// 创建工作者,发送就绪通知

static void*
create_worker(zctx_t* ctx){

void* worker =
zsocket_new(ctx,ZMQ_DEALER);

char identity[10];


snprintf(identity,10,"X-X",randof(0x10000),randof(0x10000));


zsocket_set_identity(worker,identity);


zsocket_connect(worker,"tcp://localhost:5556");


zframe_t* p_ready = zframe_new(PPP_Ready,1);


zframe_send(&p_ready,worker,0);

return worker;


}

// 收到请求或者队列设备的心跳

static int OnDataReceived(zloop_t* p_loop,zmq_pollitem_t* p_item,void*
p_arg){


ppworker_context* p_ctx = (ppworker_context*)p_arg;


ppworker_context& ctx
= *p_ctx;


zmsg_t* p_msg = zmsg_recv(ctx.worker);

if (p_msg == NULL){

return 0;


}


size_t frame_cnt =
zmsg_size(p_msg);

// 队列设备的心跳

if (frame_cnt == 1){




zframe_t* p_heartbeat = zmsg_first(p_msg);



if ((zframe_size(p_heartbeat)
== 1)
&&
(memcmp(zframe_data(p_heartbeat),PPP_Heartbeat,1) == 0)){


ctx.queue_expire_at = zclock_time()
+ Heartbeat_Timeout * Heartbeat_Interval;



if (ctx.retry_delay
>
Retry_Delay_Init){


ctx.retry_delay =
Retry_Delay_Init;


printf("队列设备恢复\n");


}

else{


printf("队列设备心跳\n");


}


}

else{


assert(false);


}


zmsg_destroy(&p_msg);


}

// 请求

else if (frame_cnt == 3){




ctx.req_count++;

// 返回-1会导致zloop循环退出

if ((ctx.req_count > 3)
&&
(randof(3) == 0)){


zmsg_destroy(&p_msg);


printf("服务器崩溃\n");

return -1;


}

else if ((ctx.req_count > 3)
&&
(randof(3) == 0)){


printf("服务器过载\n");


zclock_sleep(2000);


}


zframe_t* p_data = zmsg_last(p_msg);

char* psz =
zframe_strdup(p_data);


printf("收到请求: %s\n",psz);


free(psz);


zclock_sleep(1000);


zmsg_send(&p_msg,ctx.worker);



// 从队列设备收到了请求,所以设备是激活的


ctx.queue_expire_at = zclock_time()
+ Heartbeat_Timeout * Heartbeat_Interval;


ctx.retry_delay =
Retry_Delay_Init;


}

else{


assert(false);


zmsg_destroy(&p_msg);


}

return 0;


}

// 定时器

static int OnCheckAliveTimer(zloop_t* p_loop,zmq_pollitem_t* p_item,void*
p_arg){


ppworker_context* p_ctx = (ppworker_context*)p_arg;


ppworker_context& ctx
= *p_ctx;

// 检测队列设备心跳超时

if (zclock_time() >=
ctx.queue_expire_at){




printf("队列设备好像出问题了哦.
%d毫秒之后尝试重新连接\n",ctx.retry_delay);




zmq_pollitem_t check_req =
{ctx.worker,0,ZMQ_POLLIN,0};


zloop_poller_end(p_loop,&check_req);


zsocket_destroy(ctx.ctx,ctx.worker);


zclock_sleep(ctx.retry_delay);



if (ctx.retry_delay
<
Retry_Delay_Max){


ctx.retry_delay *= 2;


}


ctx.worker =
create_worker(ctx.ctx);


check_req.socket = ctx.worker;


zloop_poller(p_loop,&check_req,OnDataReceived,&ctx);



ctx.last_send_heartbeat = 0;


ctx.queue_expire_at = zclock_time()
+ Heartbeat_Timeout * Heartbeat_Interval;


ctx.req_count = 0;


}

// 发送心跳

if (zclock_time() >=
ctx.last_send_heartbeat +
Heartbeat_Interval){


zframe_t* p_heartbeat = zframe_new(PPP_Heartbeat,1);


zframe_send(&p_heartbeat,ctx.worker,0);



}

return 0;


}



```





代码注解

跟前面一样，代码包含故障模拟，这使得(a)很难调试；(b)对重用很危险。如果想要调试，请禁止故障模拟。

心跳不容易做对，下一小节会对心跳进行详细讨论。

工作者使用与Lazy
Pirate客户端程序类似的策略来进行重新连接，但是有两个不同：(a)重新连接延时呈指数级增加；(b)永不放弃重试


2.4 心跳
写Paranoid
Pirate示例的时候，花了5个小时才让队列到工作者的心跳能够正确工作，而其他部分的代码可能只需要10分钟就搞定了。相对于其好处来说，心跳常常带来更多麻烦。心跳很容易导致“假故障(false
failures)”，比如说，对端决定断开连接，因为没有正确地发送心跳。理解和实现心跳的时候需要考虑以下几点：



心跳不是请求-应答。心跳在两个方向上异步流动。两端都可以确定对方“死掉了”，停止与对方的通信。


首先让心跳可以正确工作，然后再加入消息流的其他部分。可以这样来证明心跳能够正确工作：以任意次序启动、停止和重启各方，模拟程序冻结等等。


主循环基于zmq_poll的时候，请使用另一个定时器来触发心跳。不要使用poll循环，因为这会导致发送太多心跳（让网络过载），或者太少心跳（让对端断开连接）。zhelpers包提供了返回毫秒表示的系统时间的s_clock()函数，可以使用这个函数来计算下次发送心跳的时间。


主循环(zmq_poll)应该使用心跳间隔作为其超时。显然，不能使用无限作为超时值，而太小的值则会浪费CPU时间（进行了过多不必要的检测）。


使用简单的跟踪，比如说打印到控制台，来让心跳能够正确工作。一些跟踪消息流的技巧：使用zmsg、zframe等提供的dump函数；递增地标记消息，这样就可以看到是否有间隙了（序号不连续）。



真实应用中，心跳必须是可以配置的，并且通常需要与对端协商。某些对端需要短间隔的心跳，比如说10秒；而有些对端则要求长间隔的心跳，比如说30秒。

如果对不同的对端有不同的心跳间隔，则poll的超时值应该是这些间隔值中最小的那个。


你可能想尝试为心跳使用一个单独的套接字会话。这好像很不错：可以分离不同的会话，也就是将同步的请求-应答与异步的心跳分离开来。但实际上这并不好。首先，如果在发送数据，则没必要发送心跳了。第二，套接字可能因为网络异常而阻塞。你需要了解数据套接字是因为死掉了而没有活动，而不是因为太忙，所以需要数据套接字上的心跳。最后，两个套接字也比一个套接字复杂。


我们没有进行客户端到队列的心跳。可以做这个心跳，但是那没有什么好处，只是会增加复杂性。


3 协议
如果你细心观察，则会发现Paranoid Pirate与Simple
Pirate是不兼容的，因为心跳。实际上这里我们缺少一个需要写下来的协议。没有规范地进行实验很好玩，但是对于真实的应用，这可不是一个好的基础。如果想用另一种语言来写一个工作者的时候会发生什么：需要阅读代码来看看是怎么工作的吗？如果因为某些原因需要修改协议的时候又会发生什么？协议可能很简单，但是不会很清晰；如果要成功，则会更加复杂。


对于公知的ZeroMQ协议有一个专门的Wiki：[http://rfc.zeromq.org](http://rfc.zeromq.org/)。


4 面向服务的可靠队列(总管模式)
前面的Paranoid Pirate示例程序使用的规范位于[http://rfc.zeromq.org/spec:7](http://rfc.zeromq.org/spec:7)。设计复杂体系就应该是这样的：先写出协议，然后编写实现协议的软件。


Majordomo
Protocol(MDP)扩展和改进了PPP。MDP加入了“服务名”概念，要求客户端发送请求时指定服务名，工作者注册特定的服务。加入服务名把Paranoid
Pirate队列变成了面向服务的代理。


Majordomo分成两个部分：客户端和工作者端，所以我们需要两个API。客户端API如下：





工作者API如下：






工作者API与客户端API有点对称，但是工作者会话有点不同。首次调用mdwrk_recv()的时候传入一个空的回应，后续调用的时候传入当前回应，取得一个新的请求。(mdwrk_recv的功能是发送上一个请求的回应，取得下一个请求)


客户端和工作者API的构建比较简单，因为可以重用前面的代码。


客户端
工作者
关于代码的注解：




API是单线程的。这意味着工作者不会在后台发送心跳。这就实现了我们想要的行为：如果工作者应用程序卡住，心跳会停止，代理将不再向工作者发送请求。

工作者API不进行指数级回退，不值得增加这种额外的复杂性。


API没有进行错误报告。如果发生非预期的事情，则触发断言（或者异常）。对于参考实现这很好，可以立即显示出协议错误，但真实环境中的API应该对无效消息是健壮的。



你可能在想，对端消失然后重新上线时ZeroMQ会自动重新连接，为什么工作者API要手动关闭套接字然后打开一个新的套接字呢？要理解这一点，请回头看看Simple
Pirate和Paranoid
Pirate模式中的工作者。虽然在代理死掉然后重新启动的时候ZeroMQ会自动让工作者重新连接，但是这不能在代理中重新注册工作者。我想有两个解决方案。最简单的就是这里我们使用的方案：工作者使用心跳监视连接，如果确定代理死掉了，则关闭套接字然后重新打开一个新的套接字。另一种方案是让代理怀疑未知的工作者：收到未知工作者的心跳时要求工作者重新注册。这要求协议支持。


总管代理

现在来设计总管代理。其核心结构是一系列队列(设备)，每种服务一个。我们在(提供特定服务的)工作者出现的时候创建队列(可以在工作者消失的时候删除队列，但是现在请忘记这一点，那会变复杂的)。此外，我们还为每种服务维持一个工作者队列。


关于代码的注解：




Majordomo协议让我们用一个套接字处理客户端和工作者。这方便了代理的部署和管理：代理只使用一个ZeroMQ端点，而不是像大多数设备那样需要两个端点。

代理正确实现了MDP/0.1，包括在收到无效命令、心跳等的时候断开连接。


可以扩展到运行多个线程，每个线程管理一个套接字和一系列客户端与工作者。这对于划分大的体系比较有用。示例的C代码已经简单组织了一个代理类。

主故障转移或者活动-活动代理可靠性模型比较简单(A primary-fail-over or live-live
reliability model is
easy)，因为除了服务的存在之外，代理没有状态。如果代理没有启动运行，则由客户端和工作者负责选择另外的代理。


示例的心跳时间是5秒，主要是为了减少启用跟踪时的输出信息量。对于大多数LAN应用，实际值应该比这个小。然而任何重试延时应该足够大，以便让服务能够重启，比如说至少10秒。


5 异步总管模式
上面实现Majordomo的方式是简单的。客户端就是原来的Simple
Pirate，只是封装成了API。在一台机器中启动一个客户端、一个代理和一个工作者的时候，程序可以在大约14秒内处理100000个请求。这主要得益于使用了消息帧复制。但真正的问题在于网络来回时间。ZeroMQ禁止了Nagle算法，但是网络来回还是比较慢。



我们用简单的测试程序来测量一下网络来回的开销。程序会发送一批消息，第一种方法在发送完每个消息后等待回应，第二种方法在发送完所有消息后才等待所有回应。两种方法做了同样的工作，但是结果大不相同。


在我的开发机器中，程序输出为：






注意：客户端线程在开始工作之前会稍微暂停一会儿。这是为了绕过router套接字的一个特征：发送消息给还未连接的对端时，消息会被丢弃。这个示例没有使用LRU机制，如果没有这个sleep，并且工作者线程启动连接太慢，则router套接字可能会丢弃消息，对测试造成影响。


这个简单测试中同步方式比异步方式慢20倍。下面来看看能否将这种改进应用到Majordomo中让它更快。


首先，修改客户端API，使之有单独的发送和接收方法：





只要几分钟的工作就可以把同步的客户端API改成异步的：


这是相应的客户端测试程序：



代理设备和工作者程序保持不变，因为我们没有修改协议。我们立即就可以看到性能改进。这是执行100K个请求-应答循环的同步客户端的情况：





这是使用单个工作者的异步客户端的情况：





两倍快，不太坏。如果启动10个工作者，则结果为：






程序不是完全异步的，因为工作者以严格的LRU模式取得消息。如果有更多工作者，会有良好的扩展性。在我的测试机器中，增加到8个工作者之后就没有更快了：4核只能这么快了。但是我们只花了几分钟的时间就取得了吞吐量的4倍改进。代理设备还没有优化呢。代理设备的大部分时间用于复制消息帧，而没有做零拷贝。我们只用了很小的代价就可以每秒进行25000个请求/回应调用。



然而异步总管模式并不是完美无缺的。它有一个根本的缺点，就是需要大量工作才可以正确应对代理设备崩溃的情况。mdcliapi2的代码没有在发生故障后试图重新连接。正确的重新连接需要：



对每个请求进行编号，而回应有相匹配的编号，这就要求修改协议了。

客户端API跟踪每个进行中的请求，比如说，跟踪哪些请求还没有收到回应。

在故障转移的情况下，客户端API需要重发进行中的请求给代理设备。



异步总管模式不是一个突破，但是它却展示了：性能通常意味着复杂性。是否值得增加复杂性来提高性能？这取决于使用场合。对于每个会话只使用一次的名字查询服务，不值得。对于处理成千上万个客户端的Web前端，可能是值得的。


6 服务发现

现在我们有了一个面向服务的代理，但是还没有办法得知某特定服务是否可用。我们知道某请求失败了，但是不知道为什么失败。如果能够询问代理“echo服务是否正在运行”就好了。最明显的解决方法是修改MDP/Client协议，加入询问代理的命令：“服务X正在运行吗？”。但是最好让MDP/Client保持简单，加入服务发现会让它跟MDP/Worker一样复杂。



另外一种方法是像Email那样，返回不能投递的请求。这可以用于异步的世界，但是也会增加复杂性。我们需要区分返回的请求和回应，需要进行正确的处理。



我们来试着使用已经拥有的代码，在MDP之上增加一些东西，而不是进行修改：让服务发现本身作为一个服务。甚至可以有多种管理服务，如“禁用服务X”、“提供统计信息”等。我们需要一个通用的可扩展方案，不会影响协议或者现有的应用。


这就是建立在MDP之上的MMI(Majordomo Management Interface)：[http://rfc.zeromq.org/spec:8](http://rfc.zeromq.org/spec:8)。如果你仔细阅读过前面的代码，就会发现我们的代理设备已经实现了MMI。下面是使用服务发现的应用程序：



代理设备会检查服务名，会直接处理以"mmi."开头的服务，而不是将请求传递给一个工作者。试着在有和没有工作者的时候运行上面的程序，应该可以看到状态报告分别为200或者404。示例代码的MMI实现是很脆弱的。比如说，工作者消失之后服务仍然为“存在”状态。实际上，如果没有工作者，代理应该在某可配置的超时时间之后移除服务。


7 幂等服务（Idempotent Services）

幂等性(Idempotency)的含义是可以安全地重复一个操作。检查时钟是幂等的，而借出信用卡不是幂等的。虽然客户端到服务器的很多使用情况是幂等的，但是有些情况却不是幂等的。一些幂等的使用情况如下：




无状态的任务分配。比如说，服务器是无状态的、纯粹根据请求提供的状态计算出回应的工作者的管线模式。这种情况下多次执行同一个请求是安全的。

将逻辑地址转换成用于绑定或者连接的端点的名字服务。这种情况下多次执行相同的查询请求是安全的。


以下是非幂等的使用情况：



日志服务。我们不想多次记录相同的日志信息。

任何影响下游节点的服务。比如说，发送信息给其他节点。如果服务多次收到相同的请求，则下游节点会得到重复的信息。

任何以非幂等方式修改共享数据的服务。比如说，处理银行账户借贷的服务显然不是幂等的。



如果服务器应用程序不是幂等的，则我们需要仔细考虑程序可能在什么时候崩溃。如果应用在空闲或者处理请求的时候挂掉，这通常没什么问题。我们可以使用数据库事务来确保借入和贷出总是同时完成，或者同时没有完成。然而，服务器在发送回应的时候挂掉则是个问题，因为服务器认为已经完成了工作。



网络在回应返回到客户端的过程中挂掉时也会有同样的问题。客户端会认为服务器死掉了，会重发请求，服务器则会两次做同样的工作，这不是我们想要的。


检测和避免重复请求的方法通常是：



客户端必须使用唯一的客户端标识和唯一的消息序号来标记每个请求。

在发回回应之前，服务器将回应存储起来，使用客户端标识和消息序号作为关键字。

得到某请求的时候，服务器首先检查是否有特定客户端标识和消息序号的回应。如果有，则只需要重发回应就可以了。


8 断开的可靠性(泰坦尼克模式)(Titanic
pattern)

如果客户端和工作者只是偶然连接(比如说Email系统)，则不能在客户端和工作者之间使用无状态网络，而需要将状态置于中间层。



这就是泰坦尼克模式。这个模式中我们将消息写入到磁盘中，确保消息不会丢失，无论客户端和工作者是怎样偶发地连接。跟服务发现一样，我们会在MDP之上来实现泰坦尼克模式，而不是扩展MDP。泰坦尼克模式可以在一个特别的工作者中实现射后不理(fire-and-forget)可靠性，而不是在中介中实现。其优点是：



更简单，因为进行了分治(divide and conquer)：中介处理消息路由，工作者处理可靠性。

让我们可以混合使用不同语言编写的中介和工作者。

我们可以独立地发展射后不理(fire-and-forget)技术。


唯一的缺点是需要在中介和硬盘之间增加一个层次。





泰坦尼克既是工作者，也是客户端。泰坦尼克和客户端之间的会话过程为：



客户端：请接受我的这个请求。 泰坦尼克：好的，完毕。

客户端：有给我的回应吗？ 泰坦尼克：有，这就是。 或者 现在还没有。

客户端：好的，现在你可以清除那个请求了。 泰坦尼克：好的，完毕。


泰坦尼克与中介和工作者之间的会话过程如下：



泰坦尼克：中介，是否有echo服务？ 中介：有。

泰坦尼克：echo，请为我处理这个请求。 echo：好的，给你结果。

泰坦尼克：OK



你可以推演一下上述过程以及可能的故障情形。如果工作者在处理请求的过程中当机，泰坦尼克会无限次地重试。如果回应在某处丢失，泰坦尼克也会重试。如果请求已经处理完成，但是客户端没有得到回应，则客户端会再次请求回应。如果泰坦尼克在处理某请求或者回应的过程中当机，客户端会重试。只要完整地将请求提交到了安全存储中，则工作不会丢失。



我们需要一种让客户端获取回应的方法。有很多客户端请求相同的服务，客户端可能消失，再次出现的时候有不同的标识。以下是一种简单、安全、合理的方案：



泰坦尼克将请求排队之后为请求生成一个UUID，把这个UUID返回给客户端。

客户端要求回应的时候必须提供请求的UUID。


这要求客户端能够安全地存储请求的UUID，但是不需要身份验证。



客户端如何与泰坦尼克通信？一种方法是使用单个服务，给它发送三种不同类型的请求。另一种方法看起来简单一些，就是使用三种服务：



titanic.request 存储请求消息，返回其UUID。

titanic.reply 给定请求的UUID，获取回应。

titanic.close 确认回应已经存储和处理。


这个协议的规范，即“泰坦尼克服务协议(Titanic Service Protocol)”(TSP)位于[http://rfc.zeromq.org/spec:9](http://rfc.zeromq.org/spec:9)。


客户端程序
当然真实的应用可以将上述代码封装到某种类型的框架中形成TSP API，让客户端应用只需要少量代码。


泰坦尼克中介

要测试上述代码，可以先后启动mdbroker、titanic和ticlient，然后任意启动mdworker。你应该能够看到客户端可以正确地得到回应并且退出。


关于代码的注解：



通过使用MMI，我们只向貌似在运行的服务发送请求，这工作得很好。


我们使用inproc连接来从titanic.request服务向主分发器发送请求数据。这让分发器不用扫描磁盘目录、加载所有请求文件并且按照日期/时间进行排序。



这个例子的重点不是性能(肯定是很差的)，而是它多么完美地实现了可靠性。要验证这一点，先启动mdbroker和titanic程序，然后启动ticlient，最后启动提供echo服务的mdworker。可以停止和重启除了客户端之外的任何部分，而不会有请求、回应丢失的情况。


关于在真实应用中使用泰坦尼克模式的性能提升建议：



为所有数据使用单个磁盘文件，而不是多个文件。与多个小文件相比，操作系统通常能够更好地处理少量大文件。

将磁盘文件组织成一个环形缓冲区，这样新的请求可以持续写入。单个线程可以全速地进行磁盘文件写入。


将索引保存在内存中，启动的时候从磁盘缓冲区重建索引，这可以避免将索引保存到磁盘中所需的寻道时间。可能需要在保存每个消息之后执行fsync；或者，如果想在系统故障的时候丢失最后M个消息，则可以每N毫秒执行一次fsync。

使用固态驱动器而不是传统硬盘。


预先分配整个文件，或者将其分配到大的块中，让环形缓冲区在必要的时候可以增长或者收缩。这可以避免碎片，保证多数读写操作是连续的。



我不建议将消息存储到数据库或者“快速”的关键字/值存储中，除非你特别喜欢某特定的数据库，并且不用担心性能问题。因为相对于磁盘文件来说，你将为这种抽象多付出10到1000倍的开销。



如果想让泰坦尼克模式更加可靠，可以将请求复制到第二个服务器中。第二个服务器离主服务器足够远，可以在主服务器遭受核武器攻击的时候免受影响，并且延迟不是太大。



如果想让泰坦尼克模式更快，但是可靠性稍差，可以只在内存中存储请求和回应。这样可以得到断开的网络功能，但是在泰坦尼克服务器崩溃的时候无法恢复。


9 高可用对(二星模式)
9.1 概述

二星模式使用两个服务器形成主从高可用对。任何时刻其中一个服务器从客户端应用接受连接（主服务器），另一个则不接受连接（从服务器）。两个服务器相互监测。如果主服务器从网络上消失，则一定时间后从服务器会成为主服务器。


二星模式是Pieter Hintjens和Martin
Sustrik为iMatix的OpenAMQ服务器开发的，其设计目标是：



提供一个直接的高可用性方案

足够简单，易于理解和使用

在且仅在必要的时候是故障转移可靠的





假设有一个二星对正在运行，以下是会导致故障转移的不同情形：



运行主服务器的硬件发生致命问题(如电源故障、火灾等)，主服务器消失。应用了解到这种情况，重新连接到后备服务器。

主服务器所在网段崩溃（可能因为路由器遭遇尖峰电压），应用重新连接到后备服务器。

主服务器崩溃或者被操作员杀死，没有自动重新启动。





从故障转移恢复的过程如下：



操作员重启主服务器，修复导致其消失的问题。

操作员停止后备服务器，这使得对应用的影响最小化。

应用重新连接到了主服务器之后，操作员重新启动后备服务器。


恢复过程是手动操作。痛苦的经历告诉我们，自动恢复是不可取的，原因是：




故障转移会让服务中断10到30秒。如果恢复过程又要中断服务10到30秒，最好是在非尖峰时刻进行，那时候网络上没什么用户。


紧急状况下最好让修复工作可预测。自动恢复为系统管理员带来了不确定性，如果不再次检查，就不能确定哪个服务器当前正承受负载。

你可以得到


如果主服务器正在(再次)运行，而后备服务器发生故障，则二星模式会转移回主服务器。这也就是恢复的过程。


二星模式的停止过程可以是以下任何一种：



停止被动服务器，然后停止活动的服务器。

以任意次序停止两个服务器，但是期间间隔一些时间。



如果先停止活动的服务器然后停止被动服务器，期间间隔时间大于故障转移时间，则应用会断开连接、然后重新连接、然后再次断开连接，这会扰乱用户。


9.2 详细需求
我们对高可用体系的需求：



故障转移意味着对灾难性系统故障(如硬件故障、火灾、意外事件等)提供保险。要确保对通常的服务器崩溃有简单的恢复方法。

故障转移时间应该小于60秒，最好是小于10秒。


故障转移应该是自动的，但是恢复必须是手动的。我们要让应用程序自动切换到后备服务器，但是不想让它自动切换回主服务器，除非操作员已经修复了问题，确定当前是再次中断应用的好时机。

客户端应用的语义应该简单，容易被开发者理解。最好是隐藏在客户端API之中。

对网络架构师有明确的指令，可以避免导致脑裂问题的设计。脑裂是指二星对中的两个服务器都认为自己是主服务器。

应该可以执行计划中的停止和重新启动，而不用停止客户端应用(虽然可能需要重新连接)。

操作员在任何时刻都可以监测两个服务器的情况。

应该可以使用高速的专用网络连接两个服务器。也就是故障转移同步必须能够使用特定的IP路由。


我们有如下假设：



单个后备服务器就提供了足够的保证，不需要多级后备。

主和后备服务器对应用负载有同等的处理能力，我们不在两个服务器之间进行负载平衡。

有足够的预算，可以让一台服务器在大多数时候不做什么事情。


我们不打算实现：



使用后备服务器进行负载均衡。二星模式中的后备服务器是非活动的，直到主服务器离线，不会做有用的工作。

不以任何方式处理消息持久化或者事务。

任何方式的网络探测。二星对是手动显式定义的，应用程序了解其定义（至少在其配置数据中)。

在服务器之间复制状态或者消息。故障转移的时候应用程序必须重建所有服务器端的状态。


二星模式中的主要术语：



主(Primary)：通常作为主服务器(master)的服务器。


后备(Backup)：通常作为从服务器(slave)的服务器。主服务器消失、客户端应用连接到后备服务器的时候后备服务器会成为主服务器。

主(master)：二星对中的主服务器是当前接受客户端连接的服务器，最多只有一个主服务器。


从(slave)：主服务器消失的时候会接替其工作的服务器。注意：正常工作时二星对中的primary就是master，backup就是slave，而故障转移后则角色互换。


要配置二星对，需要：



将后备服务器的位置告知主服务器。

将主服务器的位置告知后备服务器。

可选地，调节故障转移响应时间，两个服务器中的配置应该是相同的。



要调节的主要参数是服务器检查对端状态的频率，以及激活故障转移的速度。我们的示例中默认的故障转移时间是2000毫秒。如果减小这个值，则后备服务器能够更快地取代主服务器，但是可能会在主服务器能够恢复的情况下就取代了它。比如说，你可能将主服务器包装到Shell脚本中，在服务器崩溃的时候自动重新启动。这种情况下故障转移超时应该大于重启主服务器所需的时间。


要让客户端正确配合二星对，必须：



得知两个服务器的地址。

试图连接主服务器，如果失败，再尝试后备服务器。

检测连接故障，通常使用心跳。

试图重新连接到主服务器，然后是后备服务器，重试之间的时间间隔要大于故障转移超时。

在服务器中重建所需的状态。

如果要求消息是可靠的，则要重发故障转移中丢失的消息。


这些工作并不简单，我们通常将这些工作封装到API中，对最终的客户端应用隐藏。


二星模式的主要限制：



一个服务器进程不能属于多个二星对。

一个主服务器只能有单个后备服务器。

后备服务器在从模式下不能做有用的工作。

后备服务器必须能够承担所有应用负载。

不能在任意时刻修改故障转移配置。

客户端应用必须做一些工作才能得益于故障转移。


9.3 防止脑裂(Preventing Split-Brain
Syndrome)

脑裂是指在某时刻集群中的不同部分都认为自己是主服务器。其原因是应用不能相互了解对方。二星模式有一个基于三方确认机制(服务器在收到应用连接和不能看到对端服务器之前不会决定成为主服务器)的脑裂检测和排除算法。



然而网络设计可能会欺骗这个算法。分布在两个建筑物之内是二星对的典型情况，每个建筑内有一些应用，两个建筑之间有单个网络链路。切断这个链路会创建两个客户端应用集合，每个是二星对的一半，两个故障转移服务器都被激活。



要阻止这种脑裂情况，必须使用一个专用的网络链路连接二星对，只要把它们接入同一个交换机就可以了，或者，在两台机器间直接使用交叉线缆连接。



不能将二星体系划分成两个孤岛，每个带有一个应用集合。这可能是一种常用的网络体系，但是这种情况下我们需要使用联合(federation)，而不是高可用性故障转移。


9.4 二星模式的实现
服务器代码如下：


客户端代码如下：


要进行测试，以任意次序启动服务器和客户端：






可以通过杀死主服务器测试故障转移，通过重启主服务器、杀死后备服务器测试恢复。注意：是客户端的投票触发故障转移和恢复的。



二星模式由一个有限状态机驱动。绿色的状态可以接受用户请求，粉红色的状态拒绝用户请求。事件就是对端状态(通知)，所以“对端激活”的意思是对方告诉它是激活的。“客户端请求”的意思是收到客户端请求。“客户端投票”的意思是收到客户端请求，并且对端在两个心跳时间内是不活动的。






注意：服务器使用PUB-SUB套接字来交换状态。这里不能使用其他类型的套接字组合。PUSH和DEALER会在没有对端接收消息的时候阻塞。PAIR在对端消失后重新上线时不会自动重新连接。ROUTER套接字在发送消息之前必须知道对端的地址。


9.5 二星反应器

二星模式比较有用和通用，可以封装成一个可重用的反应器类。反应器可以自动运行，在有消息需要处理的时候调用我们的代码。这比把二星代码复制粘贴到每个需要这种能力的服务器中要好得多。


C语言的bstar接口
C语言的bstar实现
使用bstar的二星服务器
10 无中介可靠性(自由模式)							
		

