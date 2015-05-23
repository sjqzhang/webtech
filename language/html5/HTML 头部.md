 HTML <head>
 
 ![http://www.w3cschool.cc/images/tryitimg.gif](http://www.w3cschool.cc/images/tryitimg.gif)
#### 查看在线实例

 

 [<title> - 定义了HTML文档的标题](http://www.w3cschool.cc/try/try.php?filename=tryhtml_title)

 使用 <title> 标签定义HTML文档的标题

 [<base> - 定义了所有链接的URL](http://www.w3cschool.cc/try/try.php?filename=tryhtml_base)

 使用 <base> 定义页面中所有链接默认的链接目标地址。

 [<meta> - 提供了HTML文档的meta标记](http://www.w3cschool.cc/try/try.php?filename=tryhtml_meta)

 使用 <meta> 元素来描述HTML文档的描述，关键词，作者，字符集等。

 

#### HTML <head> 元素

 <head> 元素包含了所有的头部标签元素。在 <head>元素中你可以插入脚本（scripts）, 样式文件（CSS），及各种meta信息。

 可以添加在头部区域的元素标签为: <title>, <style>, <meta>, <link>, <script>, <noscript>, and <base>.

 

#### HTML <title> 元素

  <title> 标签定义了不同文档的标题。

  <title> 在 HTML/XHTML 文档中是必须的。

  <title> 元素:

 
定义了浏览器工具栏的标题
 当网页添加到收藏夹时，显示在收藏夹中的标题
 显示在搜索引擎结果页面的标题
 
一个简单的 HTML 文档:

 
```
 <!DOCTYPE html>

 <html>

 <head>

 <title>Title of the document</title>

 </head>



 <body>

 The content of the document......

 </body>



 </html> 




```
 



#### HTML <base> 元素

 <base> 标签描述了基本的链接地址/链接目标，该标签作为HTML文档中所有的链接标签的默认链接:

 
```
 <head>

<base href="http://www.w3cschool.cc/images/" target="_blank">

 </head> 




```
 



#### HTML <link> 元素

  <link> 标签定义了文档与外部资源之间的关系。

  <link> 标签通常用于链接到样式表:

 
```
 <head>

 <link rel="stylesheet" type="text/css" href="http://www.w3cschool.cc/html/mystyle.css">

 </head> 




```
 



#### HTML <style> 元素

 <style> 标签定义了HTML文档的样式文件引用地址.

 在<style> 元素中你需要指定样式文件来渲染HTML文档:

 
```
 <head>

 <style type="text/css">

 body {background-color:yellow}

 p {color:blue}

 </style>

 </head> 




```
 



#### HTML <meta> 元素

 meta标签描述了一些基本的元数据。

 <meta> 标签提供了元数据.元数据也不显示在页面上，但会被浏览器解析。

 META元素通常用于指定网页的描述，关键词，文件的最后修改时间，作者，和其他元数据。

 元数据可以使用浏览器（如何显示内容或重新加载页面），搜索引擎（关键词），或其他Web服务。

 <meta>一般放置于 <head>区域

 
#### <meta> 标签- 使用实例

 为搜索引擎定义关键词:

 
```
 <meta name="keywords" content="HTML, CSS, XML, XHTML, JavaScript">

 


```
 为网页定义描述内容:

 
```
 <meta name="description" content="Free Web tutorials on HTML and CSS">

 


```
 定义网页作者:

 
```
 <meta name="author" content="Hege Refsnes">

 


```
 每30秒中刷新当前页面:

 
```
 <meta http-equiv="refresh" content="30">

 


```
 



#### HTML <script> 元素

 <script>标签用于加载脚本文件，如： JavaScript。

 <script> 元素在以下章节会详细描述。

 

#### HTML head 元素

 

|标签|描述|
|:--|:--|
|<head>|定义了文档的信息|
|<title>|定义了文档的标题|
|<base>|定义了页面链接标签的默认链接地址|
|<link>|定义了一个文档和外部资源之间的关系|
|<meta>|定义了HTML文档中的元数据|
|<script>|定义了客户端的脚本文件|
|<style>|定义了HTML文档的样式文件|



