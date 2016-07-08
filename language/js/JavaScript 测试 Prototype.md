 JavaScript - 测试 Prototype  
测试 JavaScript 框架库 - Prototype

 

#### 引用 Prototype

 如需测试 JavaScript 库，您需要在网页中引用它。

 为了引用某个库，请使用 <script> 标签，其 src 属性设置为库的 URL：

  
#### 引用 Prototype

 
```
 <!DOCTYPE html>

 <html>

 <head>

 <script

 src="http://apps.bdimg.com/libs/prototype/1.7.1.0/prototype.js">

 </script>

 </head>

 <body>

 </body>

 </html>


```
 

 



#### Prototype 描述

 Prototype 提供的函数可使 HTML DOM 编程更容易。

 与 jQuery 类似，Prototype 也有自己的 $() 函数。

 $() 函数接受 HTML DOM 元素的 id 值（或 DOM 元素），并会向 DOM 对象添加新的功能。

 与 jQuery 不同，Prototype 没有用以取代 window.onload() 的 ready() 方法。相反，Prototype 会向浏览器及 HTML DOM 添加扩展。

 在 JavaScript 中，您可以分配一个函数以处理窗口加载事件：

  
#### JavaScript 方式：

 
```
 function myFunction()

 {

 var obj=document.getElementById("h01");

 obj.innerHTML="Hello Prototype";

 }

 onload=myFunction;


```
 

 等价的 Prototype 是不同的：

  
#### Prototype 方式：

 
```
 function myFunction()

 {

 $("h01").insert("Hello Prototype!");

 }

 Event.observe(window,"load",myFunction);


```
 

 Event.observe() 接受三个参数： 

 
您希望处理的 HTML DOM 或 BOM（浏览器对象模型）对象
 您希望处理的事件
 您希望调用的函数
 


#### 测试 Prototype

  请试一下下面这个例子：

  
#### Example

 
```
 <!DOCTYPE html>

 <html>

 <script

 src="http://apps.bdimg.com/libs/prototype/1.7.1.0/prototype.js">

 </script>

 <script>

 function myFunction()

 {

 $("h01").insert("Hello Prototype!");

 }

 Event.observe(window,"load",myFunction);

 </script>

 </head>

 <body>

 <h1 id="h01"></h1>

 </body>

 </html> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjs_lib_prototype) 

  请再试一下这个例子：

  
#### Example

 
```
 <!DOCTYPE html>

 <html>

 <script

 src="http://apps.bdimg.com/libs/prototype/1.7.1.0/prototype.js">

 </script>

 <script>

 function myFunction()

 {

 $("h01").writeAttribute("style","color:red").insert("Hello Prototype!");

 }

 Event.observe(window,"load",myFunction);

 </script>

 </head>

 <body>

 <h1 id="h01"></h1>

 </body>

 </html> 


```
 

[测试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjs_lib_prototype2) 

  正如您在上面的例子中看到的，与 jQuery 相同，Prototype 允许链式语法。

  链接（Chaining）是一种在同一对象上执行多个任务的便捷方法。

 

