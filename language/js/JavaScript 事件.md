 JavaScript 事件  
HTML 事件是发生在 HTML 元素上的事情。

 当在 HTML 页面中使用 JavaScript 时， JavaScript 可以触发这些事件。

 

#### HTML 事件

  HTML 事件可以是浏览器行为，也可以是用户行为。

 以下是 HTML 事件的实例：

 
 HTML 页面完成加载
  HTML input 字段改变时
  HTML 按钮被点击
 
通常，当事件发生时，你可以做些事情。

 在事件触发时 JavaScript 可以执行一些代码。

 HTML 元素中可以添加事件属性，使用 JavaScript 代码来添加 HTML 元素。

 单引号:

 
```
  <some-HTML-element some-event=

#### '



#### some JavaScript



#### '

>

 


```
 双引号:

 
```
  <some-HTML-element some-event=

#### "



#### some JavaScript



#### "

>

 


```
 在以下实例中，按钮元素中添加了 onclick 属性 (并加上代码):

  
#### 实例

 
```
 <button onclick='getElementById("demo").innerHTML=Date()'>The time is?</button>





```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjs_event_onclick1) 

 以上实例中，JavaScript 代码将修改 id="demo" 元素的内容。

 在下一个实例中，代码将修改自身元素的内容 (使用 

#### this

.innerHTML): 

  
#### 实例

 
```
 <button onclick="this.innerHTML=Date()">The time is?</button>





```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjs_event_onclick) 

 



| JavaScript代码通常是几行代码。比较常见的是通过事件属性来调用：|



 
#### 实例

 
```
 <button onclick="displayDate()">The time is?</button>


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjs_events1) 

 



#### 常见的HTML事件

 下面是一些常见的HTML事件的列表:

 

|事件|描述|
|:--|:--|
|onchange| HTML 元素改变|
|onclick|用户点击 HTML 元素|
|onmouseover|用户在一个HTML元素上移动鼠标|
|onmouseout|用户从一个HTML元素上移开鼠标|
|onkeydown|用户按下键盘按键|
|onload|浏览器已完成页面的加载|

更多事件列表: [ JavaScript 参考手册 - HTML DOM 事件](http://www.w3cschool.cc/jsref/dom-obj-event.html)。

 

#### JavaScript 可以做什么?

 事件可以用于处理表单验证，用户输入，用户行为及浏览器动作:

 
页面加载时触发事件
 页面关闭时触发事件
 用户点击按钮执行动作
 验证用户输入内容的合法性
 等等 ...
 
可以使用多种方法来执行 JavaScript 事件代码：

 
HTML 事件属性可以直接执行 JavaScript 代码
 HTML 事件属性可以调用 JavaScript 函数
 你可以为 HTML 元素指定自己的事件处理程序
 你可以阻止事件的发生。
 等等 ...
 


| 在 HTML DOM 章节中你将会学到更多关于事件及事件处理程序的知识。|



