 JavaScript - 测试 jQuery  
测试 JavaScript 框架库 - jQuery

 

#### 引用 jQuery

 如需测试 JavaScript 库，您需要在网页中引用它。

 为了引用某个库，请使用 <script> 标签，其 src 属性设置为库的 URL：

  
#### 引用 jQuery

 
```
 <!DOCTYPE html>

 <html>

 <head>

 <script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js">

 </script>

 </head>

 <body>

 </body>

 </html>


```
 

 



#### jQuery 描述

 主要的 jQuery 函数是 $() 函数（jQuery 函数）。如果您向该函数传递 DOM 对象，它会返回 jQuery 对象，带有向其添加的 jQuery 功能。

 jQuery 允许您通过 CSS 选择器来选取元素。

 在 JavaScript 中，您可以分配一个函数以处理窗口加载事件：

  
#### JavaScript 方式：

 
```
 function myFunction()

 {

 var obj=document.getElementById("h01");

 obj.innerHTML="Hello jQuery";

 }

 onload=myFunction;


```
 

 等价的 jQuery 是不同的：

  
#### jQuery 方式：

 
```
 function myFunction()

 {

 $("#h01").html("Hello jQuery");

 }

 $(document).ready(myFunction);


```
 

 上面代码的最后一行，HTML DOM 文档对象被传递到 jQuery ：$(document)。

 当您向 jQuery 传递 DOM 对象时，jQuery 会返回以 HTML DOM 对象包装的 jQuery 对象。

 jQuery 函数会返回新的 jQuery 对象，其中的 ready() 是一个方法。

 由于在 JavaScript 中函数就是变量，因此可以把 myFunction 作为变量传递给 jQuery 的 ready 方法。

 

| jQuery 返回 jQuery 对象，与已传递的 DOM 对象不同。jQuery 对象拥有的属性和方法，与 DOM 对象的不同。您不能在 jQuery 对象上使用 HTML DOM 的属性和方法。|





#### 测试 jQuery

  请试一下下面这个例子：

  
#### 实例

 
```
 <!DOCTYPE html>

 <html>

 <head>

 <script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js">

 </script>

 <script>

 function myFunction()

 {

 $("#h01").html("Hello jQuery")

 }

 $(document).ready(myFunction);

 </script>

 </head>

 <body>

 <h1 id="h01"></h1>

 </body>

 </html> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjs_lib_jquery) 

  请再试一下这个例子：

  
#### 实例

 
```
 <!DOCTYPE html>

 <html>

<head>

 <script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js">

 </script>

 <script>

 function myFunction()

 {

 $("#h01").attr("style","color:red").html("Hello jQuery")

 }

 $(document).ready(myFunction);

 </script>

 </head>

 <body>

 <h1 id="h01"></h1>

 </body>

 </html> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjs_lib_jquery2) 

 正如您在上面的例子中看到的，jQuery 允许链接（链式语法）。

 链接（Chaining）是一种在同一对象上执行多个任务的便捷方法。

 需要学习更多内容吗？W3School 为您提供了非常棒的 [jQuery 教程](http://www.w3cschool.cc/jquery/)。

 

