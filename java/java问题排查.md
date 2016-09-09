线上有一个功能，只要用户一使用马上FGC飚的很高而且一直不能回收内存。
利用这个case来总结一下线上如何来排查问题找到代码BUG并修复的。

### 1. Java heap dump日志分析

一般分析内存溢出分析哪些应用占用内存比较多情况有用
jmap -dump:format=b,file=path pid 默认将堆全部dump下来
jmap -dump:live,format=b,file=path pid 只dump还存活的没gc掉的对象
如果发现fgc不直不掉的话就需要用这个来dump一把,打开的软件Eclipse Mat

### 2. Java JVM GC日志分析
$jstat -gcutil pid <ms>动态观察jvm内存使用情况
E  eden区，所有新对象在这里面产生。这里面很快就被minor gc
S0 幸存者O区E区gc不掉的会被放进到这个区
S1 幸存者1区
S0区gc剩下的对象进入到这个区
这三个区合起来叫young 区。
O  old区经过多次minor gc不掉的会放到这个区。只有fullgc才能回收
一般线上是92%开始full gc
P perm区方法区。如果用了AOP就会有变化一般不会有变化
YGC 从JVM启动到目前minor gc次数
YGCT minor gc所消耗的时间
FCG 如果0区一直gc不掉会不断做gc
FGCT full gc所消耗的时间

###3. Java thread dump日志分析

$jstack pid 打印当前运行的java线程栈信息
jstack 出来的日志分析
1,死锁  Deadlock(重要)
2,等待资源 Waiting on condition (重要)
3,等待获取监视器waiting on monitor entry
4,阻塞Blocked
5,执行中Runnable
6,暂停Suspended
7,对象等待中Object.wait()或TIMED_WAITING
8,停止Parked

"Xmemcached-Reactor-15" prio=10 tid=0x00002aaac15ad000 nid=0x2256 runnable [0x0000000043077000]
   java.lang.Thread.State: RUNNABLE
"Xmemcached-Reactor-15" 线程名称。用户自己的程序最好是线程名称
prio=10 线程优先级默认是5
tid=0x00002aaac15ad000 唯一标识 
0x2256 对应系统线程的id和top出来看到的pid是对应的（十进制转16进制）

RUNNABLE线程状态

###4. JVM crash日志分析
Jvm crash时会在工作目录下产生一个日志文件，也可以通过参数指定。如-XX:ErrorFile=/home/admin/hs_error_%p.log
导致crash的原因有多种：
1、Jvm本身的Bug
2、应用程序有bug
什么情况不会生成error文件？

linux内核在发生OOM的时候会强制kill一些进程，可以在/var/log/messages中查找，也可以在/var/log/kernel中看到。

###5. 常用的分析命令

top -H -P $PID  动态的看到java线程的消耗情况
top -H -b -n 1 -p $PID 打印一次java线程情况

jstack $PID 打印当前运行的java线程栈信息（建议打印2，3次）

jstat -gcutil $PID <毫秒数>  动态的观察jvm内存各区情况，主要看下FGC与YGC的使用情况!
jmap -dump:format=b,file=./heapdump.bin $PID  dump java的堆栈信息，会影响线上的性能