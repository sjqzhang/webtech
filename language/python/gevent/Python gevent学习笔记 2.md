
     在上一篇里了解了gevent应用的IO模型概念之后，接下来开始真正了解gevent的使用。 

 


#### Greenlet

 
     在gevent里面最多应用到的就是greenlet，一个轻量级的协程实现。在任何时间点，只有一个greenlet处于运行状态。Greenlet与multiprocessing 和 threading这两个库提供的真正的并行结构的区别在于这两个库会真正的切换进程，POSIX线程是由操作系统来负责调度，并且它们是真正并行的。 

 


#### 同步和异步

 
     应对并发的主要思路就是将一个大的任务分解成一个子任务的集合并且能够让它并行或者异步地执行，而不是一次执行一个或者同步执行。在两个子任务中的切换被称为上下文切换。 

 
     gevent里面的上下文切换是非常平滑的。在下面的例子程序中，我们可以看到两个上下文通过调用 gevent.sleep()来互相切换。 

 

```
import gevent

def foo():
    print('Running in foo')
    gevent.sleep(0)
    print('Explicit context switch to foo again')

def bar():
    print('Explicit context to bar')
    gevent.sleep(0)
    print('Implicit context switch back to bar')

gevent.joinall([
    gevent.spawn(foo),
    gevent.spawn(bar),
])
```
     这段程序的执行结果如下： 

```
Running in foo
Explicit context to bar
Explicit context switch to foo again
Implicit context switch back to bar
```
     从这个执行结果可以看出这个程序的执行过程，在这里的两个函数是交替执行的。 
     gevent的真正威力是在处理网络和带有IO阻塞的功能时能够这些任务协调地运行。gevent来实现了这些具体的细节来保证在需要的时候greenlet上下文进行切换。在这里用一个例子来说明。 

 

```
import time
import gevent
from gevent import select

start = time.time()
tic = lambda: 'at %1.1f seconds' % (time.time() - start)

def gr1():
    # Busy waits for a second, but we don't want to stick around...
    print('Started Polling: ', tic())
    select.select([], [], [], 2)
    print('Ended Polling: ', tic())

def gr2():
    # Busy waits for a second, but we don't want to stick around...
    print('Started Polling: ', tic())
    select.select([], [], [], 2)
    print('Ended Polling: ', tic())

def gr3():
    print("Hey lets do some stuff while the greenlets poll, at", tic())
    gevent.sleep(1)

gevent.joinall([
    gevent.spawn(gr1),
    gevent.spawn(gr2),
    gevent.spawn(gr3),
])
```
 
 在上面的例子里，select() 通常是一个阻塞的调用。 

 程序的执行结果如下： 

```
Started Polling:  at 0.0 seconds
Started Polling:  at 0.0 seconds
Hey lets do some stuff while the greenlets poll, at at 0.0 seconds
Ended Polling:  at 2.0 seconds
Ended Polling:  at 2.0 seconds
```
 
 接下来一个例子中可以看到gevent是安排各个任务的执行的。 

 

```
import gevent
import random

def task(pid):
    """
    Some non-deterministic task
    """
    gevent.sleep(random.randint(0,2)*0.001)
    print('Task', pid, 'done')

def synchronous():
    for i in range(1,10):
        task(i)

def asynchronous():
    threads = [gevent.spawn(task, i) for i in xrange(10)]
    gevent.joinall(threads)

print('Synchronous:')
synchronous()

print('Asynchronous:')
asynchronous()
```
 执行结果如下： 

```
root@master:~# python two.py 
Synchronous:
('Task', 1, 'done')
('Task', 2, 'done')
('Task', 3, 'done')
('Task', 4, 'done')
('Task', 5, 'done')
('Task', 6, 'done')
('Task', 7, 'done')
('Task', 8, 'done')
('Task', 9, 'done')
Asynchronous:
('Task', 0, 'done')
('Task', 9, 'done')
('Task', 7, 'done')
('Task', 3, 'done')
('Task', 6, 'done')
('Task', 5, 'done')
('Task', 4, 'done')
('Task', 1, 'done')
('Task', 2, 'done')
('Task', 8, 'done')
```
 在同步的情况下，任务是按顺序执行的，在执行各个任务的时候会阻塞主线程。 
 而gevent.spawn 的重要功能就是封装了greenlet里面的函数。初始化的greenlet放在了threads这个list里面，被传递给了 gevent.joinall 这个函数，它会阻塞当前的程序来执行所有的greenlet。 

 
 在异步执行的情况下，所有任务的执行顺序是完全随机的。每一个greenlet的都不会阻塞其他greenlet的执行。 

 
 在有时候需要异步地从服务器获取数据，gevent可以通过判断从服务器的数据载入情况来处理请求。 

 

```
import gevent.monkey
gevent.monkey.patch_socket()

import gevent
import urllib2
import simplejson as json

def fetch(pid):
    response = urllib2.urlopen('http://json-time.appspot.com/time.json')
    result = response.read()
    json_result = json.loads(result)
    datetime = json_result['datetime']

    print 'Process ', pid, datetime
    return json_result['datetime']

def synchronous():
    for i in range(1,10):
        fetch(i)

def asynchronous():
    threads = []
    for i in range(1,10):
        threads.append(gevent.spawn(fetch, i))
    gevent.joinall(threads)

print 'Synchronous:'
synchronous()

print 'Asynchronous:'
asynchronous()
```
 


#### 确定性

 
 就像之前说的，greenlet是确定的。给每个greenlet相同的配置和相同的输入，得到的输出是相同的。我们可以用python 的多进程池和gevent池来作比较。下面的例子可以说明这个特点： 

 

```
import time

def echo(i):
    time.sleep(0.001)
    return i

# Non Deterministic Process Pool

from multiprocessing.pool import Pool

p = Pool(10)
run1 = [a for a in p.imap_unordered(echo, xrange(10))]
run2 = [a for a in p.imap_unordered(echo, xrange(10))]
run3 = [a for a in p.imap_unordered(echo, xrange(10))]
run4 = [a for a in p.imap_unordered(echo, xrange(10))]

print( run1 == run2 == run3 == run4 )

# Deterministic Gevent Pool

from gevent.pool import Pool

p = Pool(10)
run1 = [a for a in p.imap_unordered(echo, xrange(10))]
run2 = [a for a in p.imap_unordered(echo, xrange(10))]
run3 = [a for a in p.imap_unordered(echo, xrange(10))]
run4 = [a for a in p.imap_unordered(echo, xrange(10))]

print( run1 == run2 == run3 == run4 )
```
 下面是执行结果： 

```
False
True
```
  从上面的例子可以看出，执行同一个函数，产生的greenlet是相同的，而产生的process是不同的。 
  在处理并发编程的时候会碰到一些问题，比如竞争资源的问题。最简单的情况，当有两个线程或进程访问同一资源并且修改这个资源的时候，就会引发资源竞争的问题。那么这个资源最终的值就会取决于那个线程或进程是最后执行的。这是个问题，总之，在处理全局的程序不确定行为的时候，需要尽量避免资源竞争的问题 

 
  最好的方法就是在任何时候尽量避免使用全局的状态。全局状态是经常会坑你的！ 

 


#### 产生Greenlet

 
 在gevent里面封装了一些初始化greenlet的方法，下面是几个最常用的例子： 

 

```
import gevent
from gevent import Greenlet

def foo(message, n):
    """
    Each thread will be passed the message, and n arguments
    in its initialization.
    """
    gevent.sleep(n)
    print(message)

# Initialize a new Greenlet instance running the named function
# foo
thread1 = Greenlet.spawn(foo, "Hello", 1)

# Wrapper for creating and runing a new Greenlet from the named 
# function foo, with the passed arguments
thread2 = gevent.spawn(foo, "I live!", 2)

# Lambda expressions
thread3 = gevent.spawn(lambda x: (x+1), 2)

threads = [thread1, thread2, thread3]

# Block until all threads complete.
gevent.joinall(threads)
```
 在上面的程序里使用 spawn 方法来产生greenlet。还有一种初始化greenlet的方法，就是创建Greenlet的子类，并且重写 _run 方法。 

```
import gevent
from gevent import Greenlet

class MyGreenlet(Greenlet):

    def __init__(self, message, n):
        Greenlet.__init__(self)
        self.message = message
        self.n = n

    def _run(self):
        print(self.message)
        gevent.sleep(self.n)

g = MyGreenlet("Hi there!", 3)
g.start()
g.join()
```
 


#### Greenlet 的状态

 
 就像其他的代码一样，greenlet在执行的时候也会出错。Greenlet有可能会无法抛出异常，停止失败，或者消耗了太多的系统资源。 

 
 greenlet的内部状态通常是一个依赖时间的参数。greenlet有一些标记来让你能够监控greenlet的状态。 

 

 started -- 标志greenlet是否已经启动 
 
  ready -- 标志greenlet是否已经被终止 
 
  successful() -- 标志greenlet是否已经被终止，并且没有抛出异常 
 
  value -- 由greenlet返回的值 
 
  exception -- 在greenlet里面没有被捕获的异常 
 


```
import gevent

def win():
    return 'You win!'

def fail():
    raise Exception('You fail at failing.')

winner = gevent.spawn(win)
loser = gevent.spawn(fail)

print(winner.started) # True
print(loser.started)  # True

# Exceptions raised in the Greenlet, stay inside the Greenlet.
try:
    gevent.joinall([winner, loser])
except Exception as e:
    print('This will never be reached')

print(winner.value) # 'You win!'
print(loser.value)  # None

print(winner.ready()) # True
print(loser.ready())  # True

print(winner.successful()) # True
print(loser.successful())  # False

# The exception raised in fail, will not propogate outside the
# greenlet. A stack trace will be printed to stdout but it
# will not unwind the stack of the parent.

print(loser.exception)

# It is possible though to raise the exception again outside
# raise loser.exception
# or with
# loser.get()
```
  这段代码的执行结果如下： 

```
True
True
You win!
None
True
True
True
False
You fail at failing.
```
 


#### 终止程序

 
 在主程序收到一个SIGQUIT 之后会阻塞程序的执行让Greenlet无法继续执行。这会导致僵尸进程的产生，需要在操作系统中将这些僵尸进程清除掉。 

 

```
import gevent
import signal

def run_forever():
    gevent.sleep(1000)

if __name__ == '__main__':
    gevent.signal(signal.SIGQUIT, gevent.shutdown)
    thread = gevent.spawn(run_forever)
    thread.join()
```
 


#### 超时

 
 gevent提供了对与代码运行时的时间限制功能，也就是超时功能。 

 

```
import gevent
from gevent import Timeout

seconds = 10

timeout = Timeout(seconds)
timeout.start()

def wait():
    gevent.sleep(10)

try:
    gevent.spawn(wait).join()
except Timeout:
    print 'Could not complete'
```
 也可以通过用with 上下文的方法来实现超时的功能： 

```
import gevent
from gevent import Timeout

time_to_wait = 5 # seconds

class TooLong(Exception):
    pass

with Timeout(time_to_wait, TooLong):
    gevent.sleep(10)
```
 gevent还提供了一些超时的参数以应对不同的状况： 

```
import gevent
from gevent import Timeout

def wait():
    gevent.sleep(2)

timer = Timeout(1).start()
thread1 = gevent.spawn(wait)

try:
    thread1.join(timeout=timer)
except Timeout:
    print('Thread 1 timed out')

# --

timer = Timeout.start_new(1)
thread2 = gevent.spawn(wait)

try:
    thread2.get(timeout=timer)
except Timeout:
    print('Thread 2 timed out')

# --

try:
    gevent.with_timeout(1, wait)
except Timeout:
    print('Thread 3 timed out')
```
 运行结果如下： 

```
Thread 1 timed out
Thread 2 timed out
Thread 3 timed out
```
 


#### Monkeypatching

 
 现在这是gevent里面的一个难点。下面一个例子里可能看到 monkey.patch_socket() 能够在运行时里面修改基础库socket： 

 

```
import socket
print( socket.socket )

print "After monkey patch"
from gevent import monkey
monkey.patch_socket()
print( socket.socket )

import select
print select.select
monkey.patch_select()
print "After monkey patch"
print( select.select )
```
  运行结果如下： 

```
class 'socket.socket'
After monkey patch
class 'gevent.socket.socket'

built-in function select
After monkey patch
function select at 0x1924de8
```
  Python的运行时里面允许能够大部分的对象都是可以修改的，包括模块，类和方法。这通常是一个坏主意，然而在极端的情况下，当有一个库需要加入一些Python基本的功能的时候，monkey patch就能派上用场了。在上面的例子里，gevent能够改变基础库里的一些使用IO阻塞模型的库比如socket，ssl，threading等等并且把它们改成协程的执行方式。

