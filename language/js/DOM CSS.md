 JavaScript HTML DOM - 改变CSS  
HTML DOM 允许 JavaScript 改变 HTML 元素的样式。

 

#### 改变 HTML 样式

 如需改变 HTML 元素的样式，请使用这个语法：

 
```
 document.getElementById(id).style.property=new style 




```
 下面的例子会改变 <p> 元素的样式：

  
#### 实例

 
```
 <html>

 <body>



 <p id="p2">Hello World!</p>



 <script>

 document.getElementById("p2").style.color="blue";

 </script>



 <p>The paragraph above was changed by a script.</p>



 </body>

 </html> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjs_change_style) 

 本例改变了 id="id1" 的 HTML 元素的样式，当用户点击按钮时：

  
#### 实例

 
```
 <!DOCTYPE html>

<html>

<body>



<h1 id="id1">My Heading 1</h1>

 <button type="button" 

onclick="document.getElementById('id1').style.color='red'">

 Click Me!</button>



</body>

</html>


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trydhtml_dom_color2) 

 



#### 更多实例

 [Visibility](http://www.w3cschool.cc/try/try.php?filename=trydhtml_visibility)

 如何使元素不可见。您希望元素显示或消失吗？

 

