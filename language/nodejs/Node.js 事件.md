 
#### Node.js 事件

  Node.js 所有的异步I/O 操作在完成时都会发送一个事件到事件队列。

 Node.js里面的许多对象都会分发事件：一个net.Server对象会在每次有新连接时分发一个事件， 一个fs.readStream对象会在文件被打开的时候发出一个事件。 所有这些产生事件的对象都是 events.EventEmitter 的实例。 你可以通过require("events");来访问该模块。

 下面我们用一个简单的例子说明 EventEmitter 的用法： 
```

//event.js 
var EventEmitter = require('events').EventEmitter; 
var event = new EventEmitter(); 
event.on('some_event', function() { 
	console.log('some_event occured.'); 
}); 
setTimeout(function() { 
	event.emit('some_event'); 
}, 1000); 

```
  运行这段代码，1秒后控制台输出了 'some_event occured'。其原理是 event 对象 注册了事件 some_event 的一个监听器，然后我们通过 setTimeout 在1000毫秒以后向 event 对象发送事件 some_event，此时会调用some_event 的监听器。 

 

#### EventEmitter介绍

 events 模块只提供了一个对象： events.EventEmitter。EventEmitter 的核心就 是事件发射与事件监听器功能的封装。

 EventEmitter 的每个事件由一个事件名和若干个参 数组成，事件名是一个字符串，通常表达一定的语义。对于每个事件，EventEmitter 支持 若干个事件监听器。

 当事件发射时，注册到这个事件的事件监听器被依次调用，事件参数作 为回调函数参数传递。

  让我们以下面的例子解释这个过程：

 
```

var events = require('events'); 
var emitter = new events.EventEmitter(); 
emitter.on('someEvent', function(arg1, arg2) { 
	console.log('listener1', arg1, arg2); 
}); 
emitter.on('someEvent', function(arg1, arg2) { 
	console.log('listener2', arg1, arg2); 
}); 
emitter.emit('someEvent', 'byvoid', 1991); 

```
  运行的结果是：

 
```

listener1 byvoid 1991 
listener2 byvoid 1991 

```
  以上例子中，emitter 为事件 someEvent 注册了两个事件监听器，然后发射了 someEvent 事件。运行结果中可以看到两个事件监听器回调函数被先后调用。 这就是EventEmitter最简单的用法。 

 
#### EventEmitter常用的API

  EventEmitter.on(event, listener)、emitter.addListener(event, listener) 为指定事件注册一个监听器，接受一个字 符串 event 和一个回调函数 listener。

  



```

server.on('connection', function (stream) {
  console.log('someone connected!');
});

```
 EventEmitter.emit(event, [arg1], [arg2], [...]) 发射 event 事件，传 递若干可选参数到事件监听器的参数表。   EventEmitter.once(event, listener) 为指定事件注册一个单次监听器，即 监听器最多只会触发一次，触发后立刻解除该监听器。 

 
```

server.once('connection', function (stream) {
  console.log('Ah, we have our first user!');
});

```
  EventEmitter.removeListener(event, listener) 移除指定事件的某个监听 器，listener 必须是该事件已经注册过的监听器。 

 
```

var callback = function(stream) {
  console.log('someone connected!');
};
server.on('connection', callback);
// ...
server.removeListener('connection', callback);

```
  EventEmitter.removeAllListeners([event]) 移除所有事件的所有监听器， 如果指定 event，则移除指定事件的所有监听器。 

 

#### error 事件

  EventEmitter 定义了一个特殊的事件 error，它包含了"错误"的语义，我们在遇到 异常的时候通常会发射 error 事件。

 当 error 被发射时，EventEmitter 规定如果没有响 应的监听器，Node.js 会把它当作异常，退出程序并打印调用栈。

 我们一般要为会发射 error 事件的对象设置监听器，避免遇到错误后整个程序崩溃。例如：

 
```

var events = require('events'); 
var emitter = newevents.EventEmitter(); 
emitter.emit('error'); 

```
  运行时会显示以下错误：

 
```

node.js:201 
throw e; // process.nextTick error, or 'error' event on first tick 
^ 
Error: Uncaught, unspecified 'error' event. 
at EventEmitter.emit (events.js:50:15) 
at Object.<anonymous> (/home/byvoid/error.js:5:9) 
at Module._compile (module.js:441:26) 
at Object..js (module.js:459:10) 
at Module.load (module.js:348:31) 
at Function._load (module.js:308:12) 
at Array.0 (module.js:479:10) 
at EventEmitter._tickCallback (node.js:192:40) 

```
 

#### 继承 EventEmitter

  大多数时候我们不会直接使用 EventEmitter，而是在对象中继承它。包括 fs、net、 http 在内的，只要是支持事件响应的核心模块都是 EventEmitter 的子类。

  为什么要这样做呢？原因有两点：

 首先，具有某个实体功能的对象实现事件符合语义， 事件的监听和发射应该是一个对象的方法。

 其次JavaScript 的对象机制是基于原型的，支持 部分多重继承，继承 EventEmitter 不会打乱对象原有的继承关系。

 

