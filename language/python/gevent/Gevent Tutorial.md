



    






    
        
gevent For the Working Python Developer
        
#### Written by the Gevent Community


        
```

        gevent is a concurrency library based around [libev](http://software.schmorp.de/pkg/libev.html).  It provides a clean API for a variety of concurrency and network related tasks.
        
```

    

    


[Introduction](#introduction)
[Contributors](#contributors)





[Core](#core)
[Greenlets](#greenlets)

[Synchronous &amp; Asynchronous Execution](#synchronous-asynchronous-execution)

[Determinism](#determinism)

[Spawning Greenlets](#spawning-greenlets)

[Greenlet State](#greenlet-state)

[Program Shutdown](#program-shutdown)

[Timeouts](#timeouts)

[Monkeypatching](#monkeypatching)





[Data Structures](#data-structures)
[Events](#events)

[Queues](#queues)

[Groups and Pools](#groups-and-pools)

[Locks and Semaphores](#locks-and-semaphores)

[Thread Locals](#thread-locals)

[Subprocess](#subprocess)

[Actors](#actors)





[Real World Applications](#real-world-applications)
[Gevent ZeroMQ](#gevent-zeromq)

[Simple Servers](#simple-servers)

[WSGI Servers](#wsgi-servers)

[Streaming Servers](#streaming-servers)

[Long Polling](#long-polling)

[Websockets](#websockets)

[Chat Server](#chat-server)









#### <span id="introduction" ></span>Introduction

The structure of this tutorial assumes an intermediate level
knowledge of Python but not much else. No knowledge of
concurrency is expected. The goal is to give you
the tools you need to get going with gevent, help you tame
your existing concurrency problems and start writing asynchronous
applications today.



#### <span id="contributors" ></span>Contributors

In chronological order of contribution:
[Stephen Diehl](http://www.stephendiehl.com)
[Jérémy Bethmont](https://github.com/jerem)
[sww](https://github.com/sww)
[Bruno Bigras](https://github.com/brunoqc)
[David Ripton](https://github.com/dripton)
[Travis Cline](https://github.com/traviscline)
[Boris Feld](https://github.com/Lothiraldan)
[youngsterxyf](https://github.com/youngsterxyf)
[Eddie Hebert](https://github.com/ehebert)
[Alexis Metaireau](http://notmyidea.org)
[Daniel Velkov](https://github.com/djv)


Also thanks to Denis Bilenko for writing gevent and guidance in
constructing this tutorial.


This is a collaborative document published under MIT license.
Have something to add? See a typo? Fork and issue a
pull request [Github](https://github.com/sdiehl/gevent-tutorial).
Any and all contributions are welcome.


This page is also available in
[Japanese](http://methane.github.com/gevent-tutorial-ja),
[Chinese](http://xlambda.com/gevent-tutorial/),
[Spanish](http://ovnicraft.github.io/gevent/) and
[Italian](http://pbertera.github.io/gevent-tutorial-it/).



#### <span id="core" ></span>Core


#### <span id="greenlets" ></span>Greenlets

The primary pattern used in gevent is the 

#### Greenlet

, a
lightweight coroutine provided to Python as a C extension module.
Greenlets all run inside of the OS process for the main
program but are scheduled cooperatively.



```

Only one greenlet is ever running at any given time.



```

This differs from any of the real parallelism constructs provided by
multiprocessing or threading libraries which do spin processes
and POSIX threads which are scheduled by the operating system and
are truly parallel.



#### <span id="synchronous-asynchronous-execution" ></span>Synchronous &amp; Asynchronous Execution

The core idea of concurrency is that a larger task can be broken down
into a collection of subtasks which are scheduled to run simultaneously
or asynchronously, instead of one at a time or synchronously. A
switch between the two subtasks is known as a context switch.


A context switch in gevent is done through yielding. In this 
example we have two contexts which yield to each other through invoking
gevent.sleep(0).



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







```

Running in foo
Explicit context to bar
Explicit context switch to foo again
Implicit context switch back to bar

```

It is illuminating to visualize the control flow of the program or walk
through it with a debugger to see the context switches as they occur.


![http://sdiehl.github.io/gevent-tutorial/flow.gif](http://sdiehl.github.io/gevent-tutorial/flow.gif)


The real power of gevent comes when we use it for network and IO
bound functions which can be cooperatively scheduled. Gevent has
taken care of all the details to ensure that your network
libraries will implicitly yield their greenlet contexts whenever
possible. I cannot stress enough what a powerful idiom this is.
But maybe an example will illustrate.


In this case the select() function is normally a blocking
call that polls on various file descriptors.



```

import time
import gevent
from gevent import select

start = time.time()
tic = lambda: 'at %1.1f seconds' % (time.time() - start)

def gr1():
    # Busy waits for a second, but we don't want to stick around...
    print('Started Polling: %s' % tic())
    select.select([], [], [], 2)
    print('Ended Polling: %s' % tic())

def gr2():
    # Busy waits for a second, but we don't want to stick around...
    print('Started Polling: %s' % tic())
    select.select([], [], [], 2)
    print('Ended Polling: %s' % tic())

def gr3():
    print("Hey lets do some stuff while the greenlets poll, %s" % tic())
    gevent.sleep(1)

gevent.joinall([
    gevent.spawn(gr1),
    gevent.spawn(gr2),
    gevent.spawn(gr3),
])

```







```

Started Polling: at 0.0 seconds
Started Polling: at 0.0 seconds
Hey lets do some stuff while the greenlets poll, at 0.0 seconds
Ended Polling: at 2.0 seconds
Ended Polling: at 2.0 seconds

```

Another somewhat synthetic example defines a task function
which is non-deterministic
(i.e. its output is not guaranteed to give the same result for
the same inputs). In this case the side effect of running the
function is that the task pauses its execution for a random
number of seconds.



```

import gevent
import random

def task(pid):
    """
    Some non-deterministic task
    """
    gevent.sleep(random.randint(0,2)*0.001)
    print('Task %s done' % pid)

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







```

Synchronous:
Task 1 done
Task 2 done
Task 3 done
Task 4 done
Task 5 done
Task 6 done
Task 7 done
Task 8 done
Task 9 done
Asynchronous:
Task 0 done
Task 2 done
Task 8 done
Task 6 done
Task 4 done
Task 7 done
Task 5 done
Task 1 done
Task 3 done
Task 9 done

```

In the synchronous case all the tasks are run sequentially,
which results in the main programming blocking (
i.e. pausing the execution of the main program )
while each task executes.


The important parts of the program are the
gevent.spawn which wraps up the given function
inside of a Greenlet thread. The list of initialized greenlets
are stored in the array threads which is passed to
the gevent.joinall function which blocks the current
program to run all the given greenlets. The execution will step
forward only when all the greenlets terminate.


The important fact to notice is that the order of execution in
the async case is essentially random and that the total execution
time in the async case is much less than the sync case. In fact
the maximum time for the synchronous case to complete is when
each tasks pauses for 0.002 seconds resulting in a 0.02 seconds for the
whole queue. In the async case the maximum runtime is roughly 0.002
seconds since none of the tasks block the execution of the
others.


In a more common use case, asynchronously fetching data from a server,
the runtime of fetch() will differ between
requests, depending on the load on the remote server at the time of the request.



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

    print('Process %s: %s' % (pid, datetime))
    return json_result['datetime']

def synchronous():
    for i in range(1,10):
        fetch(i)

def asynchronous():
    threads = []
    for i in range(1,10):
        threads.append(gevent.spawn(fetch, i))
    gevent.joinall(threads)

print('Synchronous:')
synchronous()

print('Asynchronous:')
asynchronous()


```



#### <span id="determinism" ></span>Determinism

As mentioned previously, greenlets are deterministic. Given the same
configuration of greenlets and the same set of inputs, they always
produce the same output. For example, let's spread a task across a
multiprocessing pool and compare its results to the one of a gevent pool.



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

print(run1 == run2 == run3 == run4)

# Deterministic Gevent Pool

from gevent.pool import Pool

p = Pool(10)
run1 = [a for a in p.imap_unordered(echo, xrange(10))]
run2 = [a for a in p.imap_unordered(echo, xrange(10))]
run3 = [a for a in p.imap_unordered(echo, xrange(10))]
run4 = [a for a in p.imap_unordered(echo, xrange(10))]

print(run1 == run2 == run3 == run4)


```



```

False
True

```


Even though gevent is normally deterministic, sources of
non-determinism can creep into your program when you begin to
interact with outside services such as sockets and files. Thus
even though green threads are a form of "deterministic
concurrency", they still can experience some of the same problems
that POSIX threads and processes experience.


The perennial problem involved with concurrency is known as a
race condition. Simply put, a race condition occurs when two concurrent threads
/ processes depend on some shared resource but also attempt to
modify this value. This results in resources which values become
time-dependent on the execution order. This is a problem, and in
general one should very much try to avoid race conditions since
they result in a globally non-deterministic program behavior.


The best approach to this is to simply avoid all global state at all
times. Global state and import-time side effects will always come
back to bite you!



#### <span id="spawning-greenlets" ></span>Spawning Greenlets

gevent provides a few wrappers around Greenlet initialization.
Some of the most common patterns are:



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

# Wrapper for creating and running a new Greenlet from the named
# function foo, with the passed arguments
thread2 = gevent.spawn(foo, "I live!", 2)

# Lambda expressions
thread3 = gevent.spawn(lambda x: (x+1), 2)

threads = [thread1, thread2, thread3]

# Block until all threads complete.
gevent.joinall(threads)

```







```

Hello
I live!

```

In addition to using the base Greenlet class, you may also subclass
Greenlet class and override the _run method.



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







```

Hi there!

```


#### <span id="greenlet-state" ></span>Greenlet State

Like any other segment of code, Greenlets can fail in various
ways. A greenlet may fail to throw an exception, fail to halt or
consume too many system resources.


The internal state of a greenlet is generally a time-dependent
parameter. There are a number of flags on greenlets which let
you monitor the state of the thread:




started -- Boolean, indicates whether the Greenlet has been started


ready() -- Boolean, indicates whether the Greenlet has halted


successful() -- Boolean, indicates whether the Greenlet has halted and not thrown an exception


value -- arbitrary, the value returned by the Greenlet


exception -- exception, uncaught exception instance thrown inside the greenlet



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

# The exception raised in fail, will not propagate outside the
# greenlet. A stack trace will be printed to stdout but it
# will not unwind the stack of the parent.

print(loser.exception)

# It is possible though to raise the exception again outside
# raise loser.exception
# or with
# loser.get()

```







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


#### <span id="program-shutdown" ></span>Program Shutdown

Greenlets that fail to yield when the main program receives a
SIGQUIT may hold the program's execution longer than expected.
This results in so called "zombie processes" which need to be
killed from outside of the Python interpreter.


A common pattern is to listen SIGQUIT events on the main program
and to invoke gevent.shutdown before exit.



```

import gevent
import signal

def run_forever():
    gevent.sleep(1000)

if __name__ == '__main__':
    gevent.signal(signal.SIGQUIT, gevent.kill)
    thread = gevent.spawn(run_forever)
    thread.join()


```



#### <span id="timeouts" ></span>Timeouts

Timeouts are a constraint on the runtime of a block of code or a
Greenlet.



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
    print('Could not complete')



```


They can also be used with a context manager, in a with statement.



```

import gevent
from gevent import Timeout

time_to_wait = 5 # seconds

class TooLong(Exception):
    pass

with Timeout(time_to_wait, TooLong):
    gevent.sleep(10)


```


In addition, gevent also provides timeout arguments for a
variety of Greenlet and data stucture related calls. For example:



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







```

Thread 1 timed out
Thread 2 timed out
Thread 3 timed out

```


#### <span id="monkeypatching" ></span>Monkeypatching

Alas we come to dark corners of Gevent. I've avoided mentioning
monkey patching up until now to try and motivate the powerful
coroutine patterns, but the time has come to discuss the dark arts
of monkey-patching. If you noticed above we invoked the command
monkey.patch_socket(). This is a purely side-effectful command to
modify the standard library's socket library.



```

import socket
print(socket.socket)

print("After monkey patch")
from gevent import monkey
monkey.patch_socket()
print(socket.socket)

import select
print(select.select)
monkey.patch_select()
print("After monkey patch")
print(select.select)


```



```

class 'socket.socket'
After monkey patch
class 'gevent.socket.socket'

built-in function select
After monkey patch
function select at 0x1924de8


```


Python's runtime allows for most objects to be modified at runtime
including modules, classes, and even functions. This is generally an
astoudingly bad idea since it creates an "implicit side-effect" that is
most often extremely difficult to debug if problems occur, nevertheless
in extreme situations where a library needs to alter the fundamental
behavior of Python itself monkey patches can be used. In this case gevent
is capable of patching most of the blocking system calls in the standard
library including those in socket, ssl, threading and
select modules to instead behave cooperatively.


For example, the Redis python bindings normally uses regular tcp
sockets to communicate with the redis-server instance. Simply
by invoking gevent.monkey.patch_all() we can make the redis
bindings schedule requests cooperatively and work with the rest
of our gevent stack.


This lets us integrate libraries that would not normally work with
gevent without ever writing a single line of code. While monkey-patching
is still evil, in this case it is a "useful evil".



#### <span id="data-structures" ></span>Data Structures


#### <span id="events" ></span>Events

Events are a form of asynchronous communication between
Greenlets.



```

import gevent
from gevent.event import Event

'''
Illustrates the use of events
'''

evt = Event()

def setter():
    '''After 3 seconds, wake all threads waiting on the value of evt'''
    print('A: Hey wait for me, I have to do something')
    gevent.sleep(3)
    print("Ok, I'm done")
    evt.set()

def waiter():
    '''After 3 seconds the get call will unblock'''
    print("I'll wait for you")
    evt.wait()  # blocking
    print("It's about time")

def main():
    gevent.joinall([
        gevent.spawn(setter),
        gevent.spawn(waiter),
        gevent.spawn(waiter),
        gevent.spawn(waiter),
        gevent.spawn(waiter),
        gevent.spawn(waiter)
    ])

if __name__ == '__main__': main()



```


An extension of the Event object is the AsyncResult which
allows you to send a value along with the wakeup call. This is
sometimes called a future or a deferred, since it holds a
reference to a future value that can be set on an arbitrary time
schedule.



```

import gevent
from gevent.event import AsyncResult
a = AsyncResult()

def setter():
    """
    After 3 seconds set the result of a.
    """
    gevent.sleep(3)
    a.set('Hello!')

def waiter():
    """
    After 3 seconds the get call will unblock after the setter
    puts a value into the AsyncResult.
    """
    print(a.get())

gevent.joinall([
    gevent.spawn(setter),
    gevent.spawn(waiter),
])



```



#### <span id="queues" ></span>Queues

Queues are ordered sets of data that have the usual put / get
operations but are written in a way such that they can be safely
manipulated across Greenlets.


For example if one Greenlet grabs an item off of the queue, the
same item will not be grabbed by another Greenlet executing
simultaneously.



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

Queues can also block on either put or get as the need arises.


Each of the put and get operations has a non-blocking
counterpart, put_nowait and
get_nowait which will not block, but instead raise
either gevent.queue.Empty or
gevent.queue.Full if the operation is not possible.


In this example we have the boss running simultaneously to the
workers and have a restriction on the Queue preventing it from containing
more than three elements. This restriction means that the put
operation will block until there is space on the queue.
Conversely the get operation will block if there are
no elements on the queue to fetch, it also takes a timeout
argument to allow for the queue to exit with the exception
gevent.queue.Empty if no work can be found within the
time frame of the Timeout.



```

import gevent
from gevent.queue import Queue, Empty

tasks = Queue(maxsize=3)

def worker(name):
    try:
        while True:
            task = tasks.get(timeout=1) # decrements queue size by 1
            print('Worker %s got task %s' % (name, task))
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


#### <span id="groups-and-pools" ></span>Groups and Pools

A group is a collection of running greenlets which are managed
and scheduled together as group. It also doubles as parallel
dispatcher that mirrors the Python multiprocessing library.



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







```

bar
bar
bar
foo
foo
foo
fizz
fizz
fizz

```

This is very useful for managing groups of asynchronous tasks.


As mentioned above, Group also provides an API for dispatching
jobs to grouped greenlets and collecting their results in various
ways.



```

import gevent
from gevent import getcurrent
from gevent.pool import Group

group = Group()

def hello_from(n):
    print('Size of group %s' % len(group))
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







```

Size of group 3
Hello from Greenlet 21803728
Size of group 3
Hello from Greenlet 21804208
Size of group 3
Hello from Greenlet 21805168
Ordered
('task', 0)
('task', 1)
('task', 2)
Unordered
('task', 2)
('task', 1)
('task', 0)

```

A pool is a structure designed for handling dynamic numbers of
greenlets which need to be concurrency-limited.  This is often
desirable in cases where one wants to do many network or IO bound
tasks in parallel.



```

import gevent
from gevent.pool import Pool

pool = Pool(2)

def hello_from(n):
    print('Size of pool %s' % len(pool))

pool.map(hello_from, xrange(3))

```







```

Size of pool 2
Size of pool 2
Size of pool 1

```

Often when building gevent driven services one will center the
entire service around a pool structure. An example might be a
class which polls on various sockets.



```

from gevent.pool import Pool

class SocketPool(object):

    def __init__(self):
        self.pool = Pool(1000)
        self.pool.start()

    def listen(self, socket):
        while True:
            socket.recv()

    def add_handler(self, socket):
        if self.pool.full():
            raise Exception("At maximum pool size")
        else:
            self.pool.spawn(self.listen, socket)

    def shutdown(self):
        self.pool.kill()



```



#### <span id="locks-and-semaphores" ></span>Locks and Semaphores

A semaphore is a low level synchronization primitive that allows
greenlets to coordinate and limit concurrent access or execution. A
semaphore exposes two methods, acquire and release The
difference between the number of times a semaphore has been
acquired and released is called the bound of the semaphore. If a
semaphore bound reaches 0 it will block until another greenlet
releases its acquisition.



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

A semaphore with bound of 1 is known as a Lock. it provides
exclusive execution to one greenlet. They are often used to
ensure that resources are only in use at one time in the context
of a program.



#### <span id="thread-locals" ></span>Thread Locals

Gevent also allows you to specify data which is local to the
greenlet context. Internally, this is implemented as a global
lookup which addresses a private namespace keyed by the
greenlet's getcurrent() value.



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







```

1
2
x is not local to f2

```

Many web frameworks that use gevent store HTTP session
objects inside gevent thread locals. For example, using the
Werkzeug utility library and its proxy object we can create
Flask-style request objects.



```

from gevent.local import local
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


Flask's system is a bit more sophisticated than this example, but the
idea of using thread locals as local session storage is nonetheless the
same.



#### <span id="subprocess" ></span>Subprocess

As of gevent 1.0, gevent.subprocess -- a patched version of Python's
subprocess module -- has been added. It supports cooperative waiting on
subprocesses.



```


import gevent
from gevent.subprocess import Popen, PIPE

def cron():
    while True:
        print("cron")
        gevent.sleep(0.2)

g = gevent.spawn(cron)
sub = Popen(['sleep 1; uname'], stdout=PIPE, shell=True)
out, err = sub.communicate()
g.kill()
print(out.rstrip())

```



```


cron
cron
cron
cron
cron
Linux


```


Many people also want to use gevent and multiprocessing together. One of
the most obvious challenges is that inter-process communication provided by
multiprocessing is not cooperative by default. Since
multiprocessing.Connection-based objects (such as Pipe) expose their
underlying file descriptors, gevent.socket.wait_read and wait_write can
be used to cooperatively wait for ready-to-read/ready-to-write events before
actually reading/writing:



```


import gevent
from multiprocessing import Process, Pipe
from gevent.socket import wait_read, wait_write

# To Process
a, b = Pipe()

# From Process
c, d = Pipe()

def relay():
    for i in xrange(10):
        msg = b.recv()
        c.send(msg + " in " + str(i))

def put_msg():
    for i in xrange(10):
        wait_write(a.fileno())
        a.send('hi')

def get_msg():
    for i in xrange(10):
        wait_read(d.fileno())
        print(d.recv())

if __name__ == '__main__':
    proc = Process(target=relay)
    proc.start()

    g1 = gevent.spawn(get_msg)
    g2 = gevent.spawn(put_msg)
    gevent.joinall([g1, g2], timeout=1)


```


Note, however, that the combination of multiprocessing and gevent brings
along certain OS-dependent pitfalls, among others:



After [forking](http://linux.die.net/man/2/fork) on POSIX-compliant systems
gevent's state in the child is ill-posed. One side effect is that greenlets
spawned before multiprocessing.Process creation run in both, parent and
child process.


a.send() in put_msg() above might still block the calling thread
non-cooperatively: a ready-to-write event only ensures that one byte can be
written. The underlying buffer might be full before the attempted write is
complete.

The wait_write() / wait_read()-based approach as indicated above does
not work on Windows (IOError: 3 is not a socket (files are not supported)),
because Windows cannot watch pipes for events.


The Python package [gipc](http://pypi.python.org/pypi/gipc) overcomes these
challenges for you in a largely transparent fashion on both, POSIX-compliant and
Windows systems. It provides gevent-aware multiprocessing.Process-based
child processes and gevent-cooperative inter-process communication based on
pipes.



#### <span id="actors" ></span>Actors

The actor model is a higher level concurrency model popularized
by the language Erlang. In short the main idea is that you have a
collection of independent Actors which have an inbox from which
they receive messages from other Actors. The main loop inside the
Actor iterates through its messages and takes action according to
its desired behavior.


Gevent does not have a primitive Actor type, but we can define
one very simply using a Queue inside of a subclassed Greenlet.



```

import gevent
from gevent.queue import Queue

class Actor(gevent.Greenlet):

    def __init__(self):
        self.inbox = Queue()
        Greenlet.__init__(self)

    def receive(self, message):
        """
        Define in your subclass.
        """
        raise NotImplemented()

    def _run(self):
        self.running = True

        while self.running:
            message = self.inbox.get()
            self.receive(message)



```


In a use case:



```

import gevent
from gevent.queue import Queue
from gevent import Greenlet

class Pinger(Actor):
    def receive(self, message):
        print(message)
        pong.inbox.put('ping')
        gevent.sleep(0)

class Ponger(Actor):
    def receive(self, message):
        print(message)
        ping.inbox.put('pong')
        gevent.sleep(0)

ping = Pinger()
pong = Ponger()

ping.start()
pong.start()

ping.inbox.put('start')
gevent.joinall([ping, pong])


```



#### <span id="real-world-applications" ></span>Real World Applications


#### <span id="gevent-zeromq" ></span>Gevent ZeroMQ

[ZeroMQ](http://www.zeromq.org/) is described by its authors as
"a socket library that acts as a concurrency framework". It is a
very powerful messaging layer for building concurrent and
distributed applications.


ZeroMQ provides a variety of socket primitives, the simplest of
which being a Request-Response socket pair. A socket has two
methods of interest send and recv, both of which are
normally blocking operations. But this is remedied by a briliant
library by [Travis Cline](https://github.com/traviscline) which
uses gevent.socket to poll ZeroMQ sockets in a non-blocking
manner.  You can install gevent-zeromq from PyPi via:  pip install
gevent-zeromq



```

# Note: Remember to ``pip install pyzmq gevent_zeromq``
import gevent
from gevent_zeromq import zmq

# Global Context
context = zmq.Context()

def server():
    server_socket = context.socket(zmq.REQ)
    server_socket.bind("tcp://127.0.0.1:5000")

    for request in range(1,10):
        server_socket.send("Hello")
        print('Switched to Server for %s' % request)
        # Implicit context switch occurs here
        server_socket.recv()

def client():
    client_socket = context.socket(zmq.REP)
    client_socket.connect("tcp://127.0.0.1:5000")

    for request in range(1,10):

        client_socket.recv()
        print('Switched to Client for %s' % request)
        # Implicit context switch occurs here
        client_socket.send("World")

publisher = gevent.spawn(server)
client    = gevent.spawn(client)

gevent.joinall([publisher, client])


```







```

Switched to Server for 1
Switched to Client for 1
Switched to Server for 2
Switched to Client for 2
Switched to Server for 3
Switched to Client for 3
Switched to Server for 4
Switched to Client for 4
Switched to Server for 5
Switched to Client for 5
Switched to Server for 6
Switched to Client for 6
Switched to Server for 7
Switched to Client for 7
Switched to Server for 8
Switched to Client for 8
Switched to Server for 9
Switched to Client for 9

```


#### <span id="simple-servers" ></span>Simple Servers


```


# On Unix: Access with ``$ nc 127.0.0.1 5000``
# On Window: Access with ``$ telnet 127.0.0.1 5000``

from gevent.server import StreamServer

def handle(socket, address):
    socket.send("Hello from a telnet!\n")
    for i in range(5):
        socket.send(str(i) + '\n')
    socket.close()

server = StreamServer(('127.0.0.1', 5000), handle)
server.serve_forever()


```



#### <span id="wsgi-servers" ></span>WSGI Servers

Gevent provides two WSGI servers for serving content over HTTP.
Henceforth called wsgi and pywsgi:



gevent.wsgi.WSGIServer

gevent.pywsgi.WSGIServer


In earlier versions of gevent before 1.0.x, gevent used libevent
instead of libev. Libevent included a fast HTTP server which was
used by gevent's wsgi server.


In gevent 1.0.x there is no http server included. Instead
gevent.wsgi is now an alias for the pure Python server in
gevent.pywsgi.



#### <span id="streaming-servers" ></span>Streaming Servers



#### If you are using gevent 1.0.x, this section does not apply




For those familiar with streaming HTTP services, the core idea is
that in the headers we do not specify a length of the content. We
instead hold the connection open and flush chunks down the pipe,
prefixing each with a hex digit indicating the length of the
chunk. The stream is closed when a size zero chunk is sent.



```
HTTP/1.1 200 OK
Content-Type: text/plain
Transfer-Encoding: chunked

8
<p>Hello

9
World</p>

0

```

The above HTTP connection could not be created in wsgi
because streaming is not supported. It would instead have to
buffered.



```

from gevent.wsgi import WSGIServer

def application(environ, start_response):
    status = '200 OK'
    body = '<p>Hello World</p>'

    headers = [
        ('Content-Type', 'text/html')
    ]

    start_response(status, headers)
    return [body]

WSGIServer(('', 8000), application).serve_forever()



```


Using pywsgi we can however write our handler as a generator and
yield the result chunk by chunk.



```

from gevent.pywsgi import WSGIServer

def application(environ, start_response):
    status = '200 OK'

    headers = [
        ('Content-Type', 'text/html')
    ]

    start_response(status, headers)
    yield "<p>Hello"
    yield "World</p>"

WSGIServer(('', 8000), application).serve_forever()



```


But regardless, performance on Gevent servers is phenomenal
compared to other Python servers. libev is a very vetted technology
and its derivative servers are known to perform well at scale.


To benchmark, try Apache Benchmark ab or see this
[Benchmark of Python WSGI Servers](http://nichol.as/benchmark-of-python-web-servers)
for comparison with other servers.



```

$ ab -n 10000 -c 100 http://127.0.0.1:8000/


```



#### <span id="long-polling" ></span>Long Polling


```

import gevent
from gevent.queue import Queue, Empty
from gevent.pywsgi import WSGIServer
import simplejson as json

data_source = Queue()

def producer():
    while True:
        data_source.put_nowait('Hello World')
        gevent.sleep(1)

def ajax_endpoint(environ, start_response):
    status = '200 OK'
    headers = [
        ('Content-Type', 'application/json')
    ]

    start_response(status, headers)

    while True:
        try:
            datum = data_source.get(timeout=5)
            yield json.dumps(datum) + '\n'
        except Empty:
            pass

gevent.spawn(producer)

WSGIServer(('', 8000), ajax_endpoint).serve_forever()



```



#### <span id="websockets" ></span>Websockets

Websocket example which requires [gevent-websocket](https://bitbucket.org/Jeffrey/gevent-websocket/src).



```

# Simple gevent-websocket server
import json
import random

from gevent import pywsgi, sleep
from geventwebsocket.handler import WebSocketHandler

class WebSocketApp(object):
    '''Send random data to the websocket'''

    def __call__(self, environ, start_response):
        ws = environ['wsgi.websocket']
        x = 0
        while True:
            data = json.dumps({'x': x, 'y': random.randint(1, 5)})
            ws.send(data)
            x += 1
            sleep(0.5)

server = pywsgi.WSGIServer(("", 10000), WebSocketApp(),
    handler_class=WebSocketHandler)
server.serve_forever()


```


HTML Page:



```
<html>
    <head>
        <title>Minimal websocket application</title>
        <script type="text/javascript" src="http://sdiehl.github.io/gevent-tutorial/jquery.min.js"></script>
        <script type="text/javascript">
        $(function() {
            // Open up a connection to our server
            var ws = new WebSocket("ws://localhost:10000/");

            // What do we do when we get a message?
            ws.onmessage = function(evt) {
                $("#placeholder").append('<p>' + evt.data + '</p>')
            }
            // Just update our conn_status field with the connection status
            ws.onopen = function(evt) {
                $('#conn_status').html('<b>Connected</b>');
            }
            ws.onerror = function(evt) {
                $('#conn_status').html('<b>Error</b>');
            }
            ws.onclose = function(evt) {
                $('#conn_status').html('<b>Closed</b>');
            }
        });
    </script>
    </head>
    <body>
        <h1>WebSocket Example</h1>
        <div id="conn_status">Not Connected</div>
        <div id="placeholder" style="width:600px;height:300px;"></div>
    </body>
</html>

```


#### <span id="chat-server" ></span>Chat Server

The final motivating example, a realtime chat room. This example
requires [Flask](http://flask.pocoo.org/) ( but not necessarily so, you could use Django,
Pyramid, etc ). The corresponding Javascript and HTML files can
be found [here](https://github.com/sdiehl/minichat).



```

# Micro gevent chatroom.
# ----------------------

from flask import Flask, render_template, request

from gevent import queue
from gevent.pywsgi import WSGIServer

import simplejson as json

app = Flask(__name__)
app.debug = True

rooms = {
    'topic1': Room(),
    'topic2': Room(),
}

users = {}

class Room(object):

    def __init__(self):
        self.users = set()
        self.messages = []

    def backlog(self, size=25):
        return self.messages[-size:]

    def subscribe(self, user):
        self.users.add(user)

    def add(self, message):
        for user in self.users:
            print(user)
            user.queue.put_nowait(message)
        self.messages.append(message)

class User(object):

    def __init__(self):
        self.queue = queue.Queue()

@app.route('/')
def choose_name():
    return render_template('choose.html')

@app.route('/<uid>')
def main(uid):
    return render_template('main.html',
        uid=uid,
        rooms=rooms.keys()
    )

@app.route('/<room>/<uid>')
def join(room, uid):
    user = users.get(uid, None)

    if not user:
        users[uid] = user = User()

    active_room = rooms[room]
    active_room.subscribe(user)
    print('subscribe %s %s' % (active_room, user))

    messages = active_room.backlog()

    return render_template('room.html',
        room=room, uid=uid, messages=messages)

@app.route("/put/<room>/<uid>", methods=["POST"])
def put(room, uid):
    user = users[uid]
    room = rooms[room]

    message = request.form['message']
    room.add(':'.join([uid, message]))

    return ''

@app.route("/poll/<uid>", methods=["POST"])
def poll(uid):
    try:
        msg = users[uid].queue.get(timeout=10)
    except queue.Empty:
        msg = []
    return json.dumps(msg)

if __name__ == "__main__":
    http = WSGIServer(('', 5000), app)
    http.serve_forever()


```









