
 在上一篇里面介绍了gevent的最主要的功能，先来来了解一下gevent里面一些更加高级的功能。 

 


#### 事件

 
 事件是一种可以让greenlet进行异步通信的手段。 

 
 



 

```
import gevent
from gevent.event import AsyncResult

a = AsyncResult()

def setter():
    """
    After 3 seconds set wake all threads waiting on the value of
    a.
    """
    gevent.sleep(3)
    a.set()

def waiter():
    """
    After 3 seconds the get call will unblock.
    """
    a.get() # blocking
    print 'I live!'

gevent.joinall([
    gevent.spawn(setter),
    gevent.spawn(waiter),
])
```
 
 AsyncResult 是 event对象的扩展能够让你来发送值并且带有一定延迟。这种功能被成为feature或deferred，当它拿到一个未来的值的引用时，能够在任意安排好的时间内让它起作用。 

 


#### 队列

 
 



 
 队列是一个有序的数据集合，通常有 put/get 的操作，这样能让队列在有在有greenletJ进行操作的时候能够进行安全的管理。 

 
 例如，如果greenlet从队列中取出了一项数据，那么这份数据就不能被另一个greenlet取出。 

 
 



 

```
import gevent
from gevent.queue import Queue

tasks = Queue()

def worker(n):
    while not tasks.empty():
        task = tasks.get()
        print('Worker %s got task %s' % (n, task))
        gevent.sleep(0)

    print('Quitting time!')

def boss():
    for i in xrange(1,25):
        tasks.put_nowait(i)

gevent.spawn(boss).join()

gevent.joinall([
    gevent.spawn(worker, 'steve'),
    gevent.spawn(worker, 'john'),
    gevent.spawn(worker, 'nancy'),
])
```
 
 
 



 
 执行的结果如下： 

 

```
Worker steve got task 1
Worker john got task 2
Worker nancy got task 3
Worker steve got task 4
Worker nancy got task 5
Worker john got task 6
Worker steve got task 7
Worker john got task 8
Worker nancy got task 9
Worker steve got task 10
Worker nancy got task 11
Worker john got task 12
Worker steve got task 13
Worker john got task 14
Worker nancy got task 15
Worker steve got task 16
Worker nancy got task 17
Worker john got task 18
Worker steve got task 19
Worker john got task 20
Worker nancy got task 21
Worker steve got task 22
Worker nancy got task 23
Worker john got task 24
Quitting time!
Quitting time!
Quitting time!
```
 队列的 put/get 操作在需要的情况下也可以阻塞程序的执行。 
 put 和 get 操作都有非阻塞的副本，就是 put_nowait 和 get_nowait。 

 
 在下面代码的例子里，运行一个叫boss的方法，同时运行worker方法，并且对队列有一个限制：队列的子项不能超过3个。这个限制意味着 put 操作在队列里面有足够空间之前会阻塞。相反，如果队列里没有任何子项，get操作会阻塞，同时也需要超时的机制，当一个操作在阻塞超过一定时间后会抛出异常。 

 

```
import gevent
from gevent.queue import Queue, Empty

tasks = Queue(maxsize=3)

def worker(n):
    try:
        while True:
            task = tasks.get(timeout=1) # decrements queue size by 1
            print('Worker %s got task %s' % (n, task))
            gevent.sleep(0)
    except Empty:
        print('Quitting time!')

def boss():
    """
    Boss will wait to hand out work until a individual worker is
    free since the maxsize of the task queue is 3.
    """

    for i in xrange(1,10):
        tasks.put(i)
    print('Assigned all work in iteration 1')

    for i in xrange(10,20):
        tasks.put(i)
    print('Assigned all work in iteration 2')

gevent.joinall([
    gevent.spawn(boss),
    gevent.spawn(worker, 'steve'),
    gevent.spawn(worker, 'john'),
    gevent.spawn(worker, 'bob'),
])
```
 代码的执行结果如下： 

```
Worker steve got task 1
Worker john got task 2
Worker bob got task 3
Worker steve got task 4
Worker bob got task 5
Worker john got task 6
Assigned all work in iteration 1
Worker steve got task 7
Worker john got task 8
Worker bob got task 9
Worker steve got task 10
Worker bob got task 11
Worker john got task 12
Worker steve got task 13
Worker john got task 14
Worker bob got task 15
Worker steve got task 16
Worker bob got task 17
Worker john got task 18
Assigned all work in iteration 2
Worker steve got task 19
Quitting time!
Quitting time!
Quitting time!
```
 


#### 组和池

 
 组是一个由greenlet组成的集合，并且能够被统一管理。 

 

```
import gevent
from gevent.pool import Group

def talk(msg):
    for i in xrange(3):
        print(msg)

g1 = gevent.spawn(talk, 'bar')
g2 = gevent.spawn(talk, 'foo')
g3 = gevent.spawn(talk, 'fizz')

group = Group()
group.add(g1)
group.add(g2)
group.join()

group.add(g3)
group.join()
```
 这在管理一组异步任务的时候会很有用。 
 Group还提供了一个API来分配成组的greenlet任务，并且通过不同的方法来获取结果。 

 

```
import gevent
from gevent import getcurrent
from gevent.pool import Group

group = Group()

def hello_from(n):
    print('Size of group', len(group))
    print('Hello from Greenlet %s' % id(getcurrent()))

group.map(hello_from, xrange(3))

def intensive(n):
    gevent.sleep(3 - n)
    return 'task', n

print('Ordered')

ogroup = Group()
for i in ogroup.imap(intensive, xrange(3)):
    print(i)

print('Unordered')

igroup = Group()
for i in igroup.imap_unordered(intensive, xrange(3)):
    print(i)

```
 执行结果如下： 

```
Size of group 3
Hello from Greenlet 10769424
Size of group 3
Hello from Greenlet 10770544
Size of group 3
Hello from Greenlet 10772304
Ordered
('task', 0)
('task', 1)
('task', 2)
Unordered
('task', 2)
('task', 1)
('task', 0)
```
 池是用来处理当拥有动态数量的greenlet需要进行并发管理（限制并发数）时使用的。 
 这在处理大量的网络和IO操作的时候是非常需要的。 

 

```
import gevent
from gevent.pool import Pool

pool = Pool(2)

def hello_from(n):
    print('Size of pool', len(pool))

pool.map(hello_from, xrange(3))
```
 

```
Size of pool 2
Size of pool 2
Size of pool 1
```
 经常在创建gevent驱动程序的时候，整个服务需要围绕一个池的结构来执行。 


#### 锁和信号量

 
 信号量是低级别的同步机制，能够让greenlet在执行的时候互相协调并且限制其并发数。信号量暴露了两个方法，acquire 和 release。如果信号量范围变成0，那么它会阻塞住直到另一个greenlet释放它的获得物。 

 

```
from gevent import sleep
from gevent.pool import Pool
from gevent.coros import BoundedSemaphore

sem = BoundedSemaphore(2)

def worker1(n):
    sem.acquire()
    print('Worker %i acquired semaphore' % n)
    sleep(0)
    sem.release()
    print('Worker %i released semaphore' % n)

def worker2(n):
    with sem:
        print('Worker %i acquired semaphore' % n)
        sleep(0)
    print('Worker %i released semaphore' % n)

pool = Pool()
pool.map(worker1, xrange(0,2))
pool.map(worker2, xrange(3,6))
```
 一下是代码的执行结果： 

```
Worker 0 acquired semaphore
Worker 1 acquired semaphore
Worker 0 released semaphore
Worker 1 released semaphore
Worker 3 acquired semaphore
Worker 4 acquired semaphore
Worker 3 released semaphore
Worker 4 released semaphore
Worker 5 acquired semaphore
Worker 5 released semaphore
```
  如果把信号量的数量限制为1那么它就成为了锁。它经常会在多个greenlet访问相同资源的时候用到。 


#### 本地线程

 
 Gevent还能够让你给gevent上下文来指定那些数据是本地的。 

 

```
import gevent
from gevent.local import local

stash = local()

def f1():
    stash.x = 1
    print(stash.x)

def f2():
    stash.y = 2
    print(stash.y)

    try:
        stash.x
    except AttributeError:
        print("x is not local to f2")

g1 = gevent.spawn(f1)
g2 = gevent.spawn(f2)

gevent.joinall([g1, g2])
```
  以下是执行结果： 

```
1
2
x is not local to f2
```
  很多集成了gevent的框架把HTTP的session对象存在gevent 本地线程里面。比如下面的例子： 

```
from werkzeug.local import LocalProxy
from werkzeug.wrappers import Request
from contextlib import contextmanager

from gevent.wsgi import WSGIServer

_requests = local()
request = LocalProxy(lambda: _requests.request)

@contextmanager
def sessionmanager(environ):
    _requests.request = Request(environ)
    yield
    _requests.request = None

def logic():
    return "Hello " + request.remote_addr

def application(environ, start_response):
    status = '200 OK'

    with sessionmanager(environ):
        body = logic()

    headers = [
        ('Content-Type', 'text/html')
    ]

    start_response(status, headers)
    return [body]

WSGIServer(('', 8000), application).serve_forever()
```
 


####  子进程

 
 在gevent 1.0版本中，gevent.subprocess 这个库被添加上。这个库能够让子进程相互协调地执行。 

 

```
import gevent
from gevent.subprocess import Popen, PIPE

def cron():
    while True:
        print "cron"
        gevent.sleep(0.2)

g = gevent.spawn(cron)
sub = Popen(['sleep 1; uname'], stdout=PIPE, shell=True)
out, err = sub.communicate()
g.kill()
print out.rstrip()
```
  执行结果： 

```
cron
cron
cron
cron
cron
Linux
```



