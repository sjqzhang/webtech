 JavaScript 简介  
JavaScript 是互联网上最流行的脚本语言，这门语言可用于 HTML 和 web，更可广泛用于服务器、PC、笔记本电脑、平板电脑和智能手机等设备。

 

#### JavaScript 是脚本语言

 JavaScript 是一种轻量级的编程语言。

 JavaScript 是可插入 HTML 页面的编程代码。

 JavaScript 插入 HTML 页面后，可由所有的现代浏览器执行。

 JavaScript 很容易学习。

 

#### 您将学到什么

 下面是您将在本教程中学到的主要内容。

 

#### JavaScript：直接写入 HTML 输出流

  
#### 实例

 
```
 document.write("<h1>这是一个标题</h1>");

document.write("<p>这是一个段落。</p>"); 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjs_intro_document_write) 

 



|  您只能在 HTML 输出中使用 document.write。如果您在文档加载后使用该方法，会覆盖整个文档。 |





#### JavaScript：对事件的反应

  
#### 实例

 
```
 <button type="button" onclick="alert('欢迎!')">点我!</button>


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjs_intro_alert) 

 alert() 函数在 JavaScript 中并不常用，但它对于代码测试非常方便。


 


 onclick 事件只是您即将在本教程中学到的众多事件之一。 

 

#### JavaScript：改变 HTML 内容

 使用 JavaScript 来处理 HTML 内容是非常强大的功能。

  
#### 实例

 
```
 x=document.getElementById("demo")  //查找元素

 x.innerHTML="Hello JavaScript";    //改变内容 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjs_intro_inner_html) 

 您会经常看到 

#### document.getElementById("



#### some id



#### ")

。这个方法是 HTML DOM 中定义的。

 DOM (

#### D

ocument 

#### O

bject 

#### M

odel)（文档对象模型）是用于访问 HTML 元素的正式 W3C 标准。 

 您将在本教程的多个章节中学到有关 HTML DOM 的知识。

 

#### JavaScript：改变 HTML 图像

 本例会动态地改变 HTML <image> 的来源（src）：

  
#### 点亮灯泡

  ![http://www.w3cschool.cc/images/pic_bulboff.gif](http://www.w3cschool.cc/images/pic_bulboff.gif)点击灯泡就可以打开或关闭这盏灯

 

 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjs_lightbulb) 

 JavaScript 能够改变任意 HTML 元素的大多数属性，而不仅仅是图片。

 

#### JavaScript：改变 HTML 样式

 改变 HTML 元素的样式，属于改变 HTML 属性的变种。

  
#### 实例

 
```
 x=document.getElementById("demo")  //找到元素 

x.style.color="#ff0000";           //改变样式


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjs_intro_style) 

 



#### JavaScript：验证输入

 JavaScript 常用于验证用户的输入。

  
#### 实例

 
```
 if isNaN(x) {alert("不是数字")};


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjs_intro_validate) 

 



#### 您知道吗？

 

|  JavaScript 与 Java 是两种完全不同的语言，无论在概念上还是设计上。 Java（由 Sun 发明）是更复杂的编程语言。ECMA-262 是 JavaScript 标准的官方名称。 JavaScript 由 Brendan Eich 发明。它于 1995 年出现在 Netscape 中（该浏览器已停止更新），并于 1997 年被 ECMA（一个标准协会）采纳。 |



