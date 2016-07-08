 HTML 布局
 
网页布局对改善网站的外观非常重要。

 请慎重设计您的网页布局。

 
 ![http://www.w3cschool.cc/images/tryitimg.gif](http://www.w3cschool.cc/images/tryitimg.gif)
#### 在线实例

 

 [使用 <div> 元素的网页布局](http://www.w3cschool.cc/try/try.php?filename=tryhtml_layout_divs)

 如何使用 <div> 元素添加布局。

 [使用 <table> 元素的网页布局](http://www.w3cschool.cc/try/try.php?filename=tryhtml_layout_tables)

 如何使用 <table> 元素添加布局。

 

#### 网站布局

 大多数网站会把内容安排到多个列中（就像杂志或报纸那样）。

 大多数网站可以使用 <div> 或者 <table> 元素来创建多列。CSS 用于对元素进行定位，或者为页面创建背景以及色彩丰富的外观。

 

|  虽然我们可以使用HTML table标签来设计出漂亮的布局，但是table标签是不建议作为布局工具使用的 - 表格不是布局工具。|





#### HTML 布局 - 使用<div> 元素

 div 元素是用于分组 HTML 元素的块级元素。

 下面的例子使用五个 div 元素来创建多列布局：

  
#### 实例

 
```
 <!DOCTYPE html>

 <html>

 <body>



 <div id="container" style="width:500px">



 <div id="header" style="background-color:#FFA500;">

 <h1 style="margin-bottom:0;">Main Title of Web Page</h1></div>



 <div id="menu" style="background-color:#FFD700;height:200px;width:100px;float:left;">

 <b>Menu</b><br>

 HTML<br>

 CSS<br>

 JavaScript</div>



 <div id="content" style="background-color:#EEEEEE;height:200px;width:400px;float:left;">

 Content goes here</div>



 <div id="footer" style="background-color:#FFA500;clear:both;text-align:center;">

 Copyright © W3Schools.com</div>



 </div>



 </body>

 </html> 


```



[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml_layout_divs) 

 上面的 HTML 代码会产生如下结果：

   
#### Main Title of Web Page




  Menu

 HTML

 CSS

 JavaScript

  Content goes here

  Copyright © W3CSchool.cc

 

 



#### HTML 布局 - 使用表格

 使用 HTML <table> 标签是创建布局的一种简单的方式。

 大多数站点可以使用 <div> 或者 <table> 元素来创建多列。CSS 用于对元素进行定位，或者为页面创建背景以及色彩丰富的外观。

 

|  即使可以使用 HTML 表格来创建漂亮的布局，但设计表格的目的是呈现表格化数据 - 表格不是布局工具！|

下面的例子使用三行两列的表格 - 第一和最后一行使用 colspan 属性来横跨两列：

  
#### 实例

 
```
 <!DOCTYPE html>

 <html>

 <body>



 <table width="500" border="0">

 <tr>

 <td colspan="2" style="background-color:#FFA500;">

 <h1>Main Title of Web Page</h1>

 </td>

 </tr>



 <tr>

 <td style="background-color:#FFD700;width:100px;">

 <b>Menu</b><br>

 HTML<br>

 CSS<br>

 JavaScript

 </td>

 <td style="background-color:#EEEEEE;height:200px;width:400px;">

 Content goes here</td>

 </tr>



 <tr>

 <td colspan="2" style="background-color:#FFA500;text-align:center;">

 Copyright © W3Schools.com</td>

 </tr>

 </table>



 </body>

 </html> 


```



[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml_layout_tables) 

 上面的 HTML 代码会产生以下结果： 

 

| Main Title of Web Page |
|:--|:--|
| Menu HTML CSS JavaScript | Content goes here|
| Copyright © W3CSchool.cc/td> |





#### HTML 布局 - 有用的提示

 Tip: 使用 CSS 最大的好处是，如果把 CSS 代码存放到外部样式表中，那么站点会更易于维护。通过编辑单一的文件，就可以改变所有页面的布局。如需学习更多有关 CSS 的知识，请访问我们的[CSS 教程](http://www.w3cschool.cc/css/default.php).

 Tip: 由于创建高级的布局非常耗时，使用模板是一个快速的选项。通过搜索引擎可以找到很多免费的网站模板（您可以使用这些预先构建好的网站布局，并优化它们）。

 

#### HTML 布局标签




|标签|描述|
|:--|:--|
|<div>|定义文档区块，块级(block-level)|
|<span>|定义 span，用来组合文档中的行内元素。|



