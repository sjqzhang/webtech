 CSS 创建  
当读到一个样式表时，浏览器会根据它来格式化 HTML 文档。

 

#### 如何插入样式表

 插入样式表的方法有三种:

 
外部样式表
 内部样式表
 内联样式
 


#### 外部样式表

 当样式需要应用于很多页面时，外部样式表将是理想的选择。在使用外部样式表的情况下，你可以通过改变一个文件来改变整个站点的外观。每个页面使用 <link> 标签链接到样式表。 <link> 标签在（文档的）头部：

 
```
 <head>

 <link rel="stylesheet" type="text/css" href="http://www.w3cschool.cc/css/mystyle.css">

 </head>




```
 浏览器会从文件 mystyle.css 中读到样式声明，并根据它来格式文档。

 外部样式表可以在任何文本编辑器中进行编辑。文件不能包含任何的 html 标签。样式表应该以 .css 扩展名进行保存。下面是一个样式表文件的例子：

 
```
 hr {color:sienna;}

 p {margin-left:20px;}

 body {background-image:url("/images/back40.gif");}




```
 ![http://www.w3cschool.cc/images/lamp.gif](http://www.w3cschool.cc/images/lamp.gif) 不要在属性值与单位之间留有空格。假如你使用 "margin-left: 20 px" 而不是 "margin-left: 20px" ，它仅在 IE 6 中有效，但是在 Mozilla/Firefox 或 Netscape 中却无法正常工作。

 

#### 内部样式表

 当单个文档需要特殊的样式时，就应该使用内部样式表。你可以使用 <style> 标签在文档头部定义内部样式表，就像这样:

 
```
 <head>

 <style>

 hr {color:sienna;}

 p {margin-left:20px;}

 body {background-image:url("images/back40.gif");}

 </style>

 </head>




```
 



#### 内联样式

 由于要将表现和内容混杂在一起，内联样式会损失掉样式表的许多优势。请慎用这种方法，例如当样式仅需要在一个元素上应用一次时。

 要使用内联样式，你需要在相关的标签内使用样式（style）属性。Style 属性可以包含任何 CSS 属性。本例展示如何改变段落的颜色和左外边距：

 
```
 <p style="color:sienna;margin-left:20px">This is a paragraph.</p>




```
 



#### 多重样式

 如果某些属性在不同的样式表中被同样的选择器定义，那么属性值将从更具体的样式表中被继承过来。 

 例如，外部样式表拥有针对 h3 选择器的三个属性：

 
```
 h3

 {

 color:red;

 text-align:left;

 font-size:8pt;

 }




```
 而内部样式表拥有针对 h3 选择器的两个属性：

 
```
 h3

 {

 text-align:right;

 font-size:20pt;

 }




```
 假如拥有内部样式表的这个页面同时与外部样式表链接，那么 h3 得到的样式是：

 
```
 color:red;

 text-align:right;

 font-size:20pt;




```
 即颜色属性将被继承于外部样式表，而文字排列（text-alignment）和字体尺寸（font-size）会被内部样式表中的规则取代。

 

#### 多重样式将层叠为一个

 样式表允许以多种方式规定样式信息。样式可以规定在单个的 HTML 元素中，在 HTML 页的头元素中，或在一个外部的 CSS 文件中。甚至可以在同一个 HTML 文档内部引用多个外部样式表。

 
#### 层叠次序

 当同一个 HTML 元素被不止一个样式定义时，会使用哪个样式呢？

 一般而言，所有的样式会根据下面的规则层叠于一个新的虚拟样式表中，其中数字 4 拥有最高的优先权。

 
浏览器缺省设置
 外部样式表
 内部样式表（位于 <head> 标签内部）
 内联样式（在 HTML 元素内部）
 
因此，内联样式（在 HTML 元素内部）拥有最高的优先权，这意味着它将优先于以下的样式声明：


 标签中的样式声明，外部样式表中的样式声明，或者浏览器中的样式声明（缺省值）。 ![http://www.w3cschool.cc/images/lamp.gif](http://www.w3cschool.cc/images/lamp.gif)提示:如果你使用了外部文件的样式在 <head>中也定义了该样式，则内部样式表会取代外部文件的样式。

 

