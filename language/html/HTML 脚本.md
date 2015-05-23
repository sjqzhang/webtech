 HTML 脚本
 
JavaScript 使 HTML 页面具有更强的动态和交互性。

 
 ![http://www.w3cschool.cc/images/tryitimg.gif](http://www.w3cschool.cc/images/tryitimg.gif)
#### 在线实例

 

 [插入一段脚本](http://www.w3cschool.cc/try/try.php?filename=tryhtml_script)

 如何将脚本插入 HTML 文档。

 [使用 <noscript> 标签 ](http://www.w3cschool.cc/try/try.php?filename=tryhtml_noscript)

 如何应对不支持脚本或禁用脚本的浏览器。

 

#### HTML <script> 标签

 <script> 标签用于定义客户端脚本，比如 JavaScript。

 <script> 元素既可包含脚本语句，也可通过 src 属性指向外部脚本文件。

 JavaScript 最常用于图片操作、表单验证以及内容动态更新。

 下面的脚本会向浏览器输出"Hello World!"：

  
#### 实例

 
```
 <script>

 document.write("Hello World!")

 </script>


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml_script) 

 ![http://www.w3cschool.cc/images/lamp.gif](http://www.w3cschool.cc/images/lamp.gif)Tip: 学习更多关于Javascript教程，请查看[JavaScript 教程](http://www.w3cschool.cc/js/js-tutorial.html)!



 

#### HTML<noscript> 标签

 <noscript> 标签提供无法使用脚本时的替代内容，比方在浏览器禁用脚本时，或浏览器不支持客户端脚本时。

 <noscript>元素可包含普通 HTML 页面的 body 元素中能够找到的所有元素。

 只有在浏览器不支持脚本或者禁用脚本时，才会显示 <noscript> 元素中的内容：

  
#### 实例

 
```
 <script>

 document.write("Hello World!")

 </script>

 <noscript>Sorry, your browser does not support JavaScript!</noscript>


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml_noscript) 

 



#### JavaScript体验(来自本站javascript教程)

 JavaScript实例代码:

  
#### JavaScript可以直接在HTMl输出:

 
```
 document.write("<p>This is a paragraph</p>"); 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjs_intro_document_write) 

 

 
#### JavaScript事件响应:

 
```
 <button type="button" onclick="myFunction()">Click Me!</button>


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjs_intro_event) 

 

 
#### JavaScript处理 HTML 样式:

 
```
 document.getElementById("demo").style.color="#ff0000";


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjs_intro_style) 

 



#### HTML 脚本标签

 

|标签|描述|
|:--|:--|
|<script>|定义了客户端脚本|
|<noscript>|定义了不支持脚本浏览器输出的文本|



