 
#### Node.js 全局对象

  JavaScript 中有一个特殊的对象，称为全局对象（Global Object），它及其所有属性都可 以在程序的任何地方访问，即全局变量。

  在浏览器JavaScript 中，通常window 是全局对象， 而Node.js 中的全局对象是 global，所有全局变量（除了 global 本身以外）都是 global 对象的属性。


 我们在Node.js 中能够直接访问到对象通常都是 global 的属性，如 console、process 等，下面逐一介绍。

 

#### 全局对象与全局变量

  global 最根本的作用是作为全局变量的宿主。按照ECMAScript 的定义，满足以下条 件的变量是全局变量： 

 
在最外层定义的变量；

 全局对象的属性；

 隐式定义的变量（未定义直接赋值的变量）。


 当你定义一个全局变量时，这个变量同时也会成为全局对象的属性，反之亦然。需要注 意的是，在Node.js 中你不可能在最外层定义变量，因为所有用户代码都是属于当前模块的， 而模块本身不是最外层上下文。

 

#### 注意：

 永远使用var 定义变量以避免引入全局变量，因为全局变量会污染 命名空间，提高代码的耦合风险。

 

#### process

  process 是一个全局变量，即 global 对象的属性。

 它用于描述当前Node.js 进程状态 的对象，提供了一个与操作系统的简单接口。通常在你写本地命令行程序的时候，少不了要 和它打交道。下面将会介绍process 对象的一些最常用的成员方法。

  process.argv是命令行参数数组，第一个元素是 node，第二个元素是脚本文件名， 从第三个元素开始每个元素是一个运行参数。

 
```

console.log(process.argv); 

```
  将以上代码存储为argv.js，通过以下命令运行： 

 
```

$ node argv.js 1991 name=byvoid --v "Carbo Kuo" 
[ 'node', 
'/home/byvoid/argv.js', 
'1991', 
'name=byvoid', 
'--v', 
'Carbo Kuo' ]

```
 



#### process.stdout

是标准输出流，通常我们使用的 console.log() 向标准输出打印 字符，而 process.stdout.write() 函数提供了更底层的接口。

 

#### process.stdin

是标准输入流，初始时它是被暂停的，要想从标准输入读取数据， 你必须恢复流，并手动编写流的事件响应函数。
 

```

process.stdin.resume(); 
process.stdin.on('data', function(data) { 
process.stdout.write('read from console: ' + data.toString()); 
}); 

```
 


#### process.nextTick(callback)

的功能是为事件循环设置一项任务，Node.js 会在 下次事件循环调响应时调用 callback。 
   初学者很可能不理解这个函数的作用，有什么任务不能在当下执行完，需要交给下次事 件循环响应来做呢？

 我们讨论过，Node.js 适合I/O 密集型的应用，而不是计算密集型的应用， 因为一个Node.js 进程只有一个线程，因此在任何时刻都只有一个事件在执行。

 如果这个事 件占用大量的CPU 时间，执行事件循环中的下一个事件就需要等待很久，因此Node.js 的一 个编程原则就是尽量缩短每个事件的执行时间。process.nextTick() 提供了一个这样的 工具，可以把复杂的工作拆散，变成一个个较小的事件。

 
```

functiondoSomething(args, callback) { 
	somethingComplicated(args); 
	callback(); 
} 
doSomething(functiononEnd() { 
	compute(); 
}); 

```
  我们假设compute() 和somethingComplicated() 是两个较为耗时的函数，以上 的程序在调用 doSomething() 时会先执行somethingComplicated()，然后立即调用 回调函数，在 onEnd() 中又会执行 compute()。下面用process.nextTick() 改写上 面的程序： 

 
```

functiondoSomething(args, callback) { 
	somethingComplicated(args); 
	process.nextTick(callback); 
} 
doSomething(functiononEnd() { 
	compute(); 
}); 

```
  改写后的程序会把上面耗时的操作拆分为两个事件，减少每个事件的执行时间，提高事 件响应速度。 

 

#### 注意：

 不要使用setTimeout(fn,0)代替process.nextTick(callback)， 前者比后者效率要低得多。

  我们探讨了process对象常用的几个成员，除此之外process还展示了process.platform、 process.pid、process.execPath、process.memoryUsage() 等方法，以及POSIX 进程信号响应机制。有兴趣的读者可以访问http://nodejs.org/api/process.html 了解详细 内容。 


 




#### console

  console 用于提供控制台标准输出，它是由Internet Explorer 的JScript 引擎提供的调试 工具，后来逐渐成为浏览器的事实标准。


Node.js 沿用了这个标准，提供与习惯行为一致的 console 对象，用于向标准输出流（stdout）或标准错误流（stderr）输出字符。  console.log()：向标准输出流打印字符并以换行符结束。


console.log 接受若干 个参数，如果只有一个参数，则输出这个参数的字符串形式。如果有多个参数，则 以类似于C 语言 printf() 命令的格式输出。


第一个参数是一个字符串，如果没有 参数，只打印一个换行。

 
```

console.log('Hello world'); 
console.log('byvoid%diovyb'); 
console.log('byvoid%diovyb', 1991); 

```
  运行结果为： 

 
```

Hello world 
byvoid%diovyb 
byvoid1991iovyb 

```
 
console.error()：与console.log() 用法相同，只是向标准错误流输出。
 console.trace()：向标准错误流输出当前的调用栈。
 

```

console.trace();

```
  运行结果为：

 
```

Trace: 
at Object.<anonymous> (/home/byvoid/consoletrace.js:1:71) 
at Module._compile (module.js:441:26) 
at Object..js (module.js:459:10) 
at Module.load (module.js:348:31) 
at Function._load (module.js:308:12) 
at Array.0 (module.js:479:10) 
at EventEmitter._tickCallback (node.js:192:40)

```
 

