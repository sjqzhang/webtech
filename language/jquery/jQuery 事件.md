 jQuery 事件  
jQuery 是为事件处理特别设计的。

 

#### 什么是事件？

 页面对不同访问者的响应叫做事件。

 事件处理程序指的是当 HTML 中发生某些事件时所调用的方法。

 实例：

 
在元素上移动鼠标。
 选取单选按钮
 点击元素
 
在事件中经常使用术语"触发"（或"激发"）例如： "当您按下按键时触发 keypress 事件"。

 常见 DOM 事件：

 

|鼠标事件|键盘事件|表单事件|文档/窗口事件|
|:--|:--|:--|:--|
|click|keypress|submit|load|
|dblclick|keydown|change|resize|
|mouseenter|keyup|focus|scroll|
|mouseleave| |blur|unload|





#### jQuery 事件方法语法

 在 jQuery 中，大多数 DOM 事件都有一个等效的 jQuery 方法。

 页面中指定一个点击事件：

 
```
  $("p").click(); 

 


```
 下一步是定义什么时间触发事件。您可以通过一个事件函数实现：

 
```
  $("p").click(function(){

   // action goes here!!

 }); 

 


```
 



#### 常用的 jQuery 事件方法

 $(document).ready()

 $(document).ready() 方法允许我们在文档完全加载完后执行函数。该事件方法在 [jQuery 语法](http://www.w3cschool.cc/jquery/jquery-syntax.html) 章节中已经提到过。 

 click()

 click() 方法是当按钮点击事件被触发时会调用一个函数。

 该函数在用户点击 HTMl 元素时执行。

 在下面的实例中，当点击事件在某个 <p> 元素上触发时，隐藏当前的 <p> 元素：

  
#### 实例

 
```
 $("p").click(function(){

   $(this).hide();

 }); 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_click) 

 dblclick()

 当双击元素时，会发生 dblclick 事件。

 dblclick() 方法触发 dblclick 事件，或规定当发生 dblclick 事件时运行的函数：

  
#### 实例

 
```
 $("p").dblclick(function(){

   $(this).hide();

 }); 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_dblclick) 

 mouseenter()

 当鼠标指针穿过元素时，会发生 mouseenter 事件。

 mouseenter() 方法触发 mouseenter 事件，或规定当发生 mouseenter 事件时运行的函数：

  
#### 实例

 
```
 $("#p1").mouseenter(function(){

   alert("You entered p1!");

 }); 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_mouseenter) 

 mouseleave()

 当鼠标指针离开元素时，会发生 mouseleave 事件。

 mouseleave() 方法触发 mouseleave 事件，或规定当发生 mouseleave 事件时运行的函数：

  
#### 实例

 
```
 $("#p1").mouseleave(function(){

   alert("Bye! You now leave p1!");

 }); 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_mouseleave) 

 mousedown()

 当鼠标指针移动到元素上方，并按下鼠标按键时，会发生 mousedown 事件。

 mousedown() 方法触发 mousedown 事件，或规定当发生 mousedown 事件时运行的函数：

  
#### 实例

 
```
 $("#p1").mousedown(function(){

   alert("Mouse down over p1!");

 }); 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_mousedown) 

 mouseup()

 当在元素上松开鼠标按钮时，会发生 mouseup 事件。

 mouseup() 方法触发 mouseup 事件，或规定当发生 mouseup 事件时运行的函数：

  
#### 实例

 
```
 $("#p1").mouseup(function(){

   alert("Mouse up over p1!");

 }); 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_mouseup) 

 hover()

 hover()方法用于模拟光标悬停事件。

 当鼠标移动到元素上时，会触发指定的第一个函数(mouseenter);当鼠标移出这个元素时，会触发指定的第二个函数(mouseleave)。

  
#### 实例

 
```
 $("#p1").hover(function(){

   alert("You entered p1!");

   },

   function(){

   alert("Bye! You now leave p1!");

 }); 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_hover) 

 focus()

 当元素获得焦点时，发生 focus 事件。

 当通过鼠标点击选中元素或通过 tab 键定位到元素时，该元素就会获得焦点。

 focus() 方法触发 focus 事件，或规定当发生 focus 事件时运行的函数：

  
#### 实例

 
```
 $("input").focus(function(){

   $(this).css("background-color","#cccccc");

 }); 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_focus_blur) 

 blur()

 当元素失去焦点时，发生 blur 事件。

 blur() 方法触发 blur 事件，或规定当发生 blur 事件时运行的函数：

  
#### 实例

 
```
 $("input").blur(function(){

   $(this).css("background-color","#ffffff");

 }); 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_focus_blur) 

 




