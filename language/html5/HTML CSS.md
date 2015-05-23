 HTML 样式- CSS
 
CSS (Cascading Style Sheets) 用于渲染HTML元素标签的样式.

  

 

  
#### Look! Styles and colors

 Manipulate Text

 Colors,  Boxes


 and more...

 

 

 



[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml_styles)

 
 ![http://www.w3cschool.cc/images/tryitimg.gif](http://www.w3cschool.cc/images/tryitimg.gif)
#### 尝试一下 - 实例

 

 [HTML使用样式](http://www.w3cschool.cc/try/try.php?filename=tryhtml_style)

 本例演示如何使用添加到 <head> 部分的样式信息对 HTML 进行格式化。

 [本例演示如何使用样式属性做一个没有下划线的链接。](http://www.w3cschool.cc/try/try.php?filename=tryhtml_linknoline)

 如何使用 style 属性制作一个没有下划线的链接。

 [链接到一个外部样式表](http://www.w3cschool.cc/try/try.php?filename=tryhtml_link)

 本例演示如何  标签链接到一个外部样式表。

 

#### 如何使用CSS

 CSS 是在 HTML 4 开始使用的,是为了更好的渲染HTML元素而引入的.

 CSS 可以通过以下方式添加到HTML中:

 
内联样式- 在HTML元素中使用"style"

####  属性

 
 内部样式表 -在HTML文档头部 <head> 区域使用<style>

####  元素

 来包含CSS
 外部引用 - 使用外部 CSS

####  文件



 
最好的方式是通过外部引用CSS文件.

 在本站的HTML教程中我们使用了内联CSS样式来介绍实例，这是为了简化的例子，也使得你能更容易在线编辑代码并在线运行实例。 

 你可以通过本站的CSS教程 [CSS 教程](http://www.w3cschool.cc/css/css-tutorial.html)学习更多的CSS知识.

 

#### 内联样式

 当特殊的样式需要应用到个别元素时，就可以使用内联样式。 使用内联样式的方法是在相关的标签中使用样式属性。样式属性可以包含任何 CSS 属性。以下实例显示出如何改变段落的颜色和左外边距。

 
```
 <p style="color:blue;margin-left:20px;">This is a paragraph.</p> 




```
  学习更多样式，请访问 [ CSS 教程](http://www.w3cschool.cc/css/default.php). 

 

#### HTML样式实例 - 背景颜色

 背景色属性（background-color）定义一个元素的背景颜色：

  
#### Example

 
```
 <!DOCTYPE html>

 <html>



 <body style="background-color:yellow;">

 <h2 style="background-color:red;">This is a heading</h2>

 <p style="background-color:green;">This is a paragraph.</p>

 </body>



 </html>


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml_bodybgstyle) 

 早期背景色属性（background-color）是使用 bgcolor 属性定义。

 [尝试一下: 旧版HTML来设置背景方式](http://www.w3cschool.cc/try/try.php?filename=tryhtml_bodybgcol)

 

#### HTML 样式实例 - 字体, 字体颜色 ，字体大小

 我们可以使用font-family（字体），color（颜色），和font-size（字体大小）属性来定义字体的样式:

  
#### 实例

 
```
 <!DOCTYPE html>

 <html>



 <body>

 <h1 style="font-family:verdana;">A heading</h1>

 <p style="font-family:arial;color:red;font-size:20px;">A paragraph.</p>

 </body>



 </html>


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml_newfont) 

 现在通常使用font-family（字体），color（颜色），和font-size（字体大小）属性来定义文本样式，而不是使用<font>标签。

 

#### HTML 样式实例 - 文本对齐方式

 使用 text-align（文字对齐）属性指定文本的水平与垂直对齐方式：

  
#### 实例

 
```
 <!DOCTYPE html>

 <html>



 <body>

 <h1 style="text-align:center;">Center-aligned heading</h1>

 <p>This is a paragraph.</p>

 </body>



 </html>


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml_headeralign) 

 文本对齐属性 text-align取代了旧标签 <center> 。

 [尝试一下 ](http://www.w3cschool.cc/try/try.php?filename=tryhtml_header)

 

#### 内部样式表

 当单个文件需要特别样式时，就可以使用内部样式表。你可以在<head> 部分通过 <style>标签定义内部样式表:

 
```
 <head>

 <style type="text/css">

 body {background-color:yellow;}

 p {color:blue;}

 </style>

 </head> 




```
 



#### 外部样式表

 当样式需要被应用到很多页面的时候，外部样式表将是理想的选择。使用外部样式表，你就可以通过更改一个文件来改变整个站点的外观。

 
```
 <head>

 <link rel="stylesheet" type="text/css" href="http://www.w3cschool.cc/html/mystyle.css">

 </head> 




```
 



#### HTML 样式标签

 

|标签|描述|
|:--|:--|
|<style>|定义文本样式|
|<link>|定义资源引用地址 |





#### 已弃用的标签和属性

 在HTML 4, 原来支持定义HTML元素样式的标签和属性已被弃用。这些标签将不支持新版本的HTML标签。

 不建议使用的标签有: <font>, <center>, <strike>


不建议使用的属性: color 和 bgcolor.

 

