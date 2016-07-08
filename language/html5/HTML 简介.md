 HTML 简介
  
#### HTML 实例

 
```
 <!DOCTYPE html>

 <html>

 <body>



 <h1>我的第一个标题</h1>



 <p>我的第一个段落。</p>



 </body>

 </html> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml_intro) 

 
#### 实例解析

 
DOCTYPE 声明了文档类型
 位于标签 <html> 与 </html> 描述了文档类型
 位于标签 <body> 与 </body> 为可视化网页内容 
 位于标签 <h1> 与 </h1> 作为一个标题使用
 位于标签 <p> 与 </p> 作为一个段落显示
 


|  <!DOCTYPE html> 在HTML5中也是描述了文档类型。|





#### 什么是HTML?

 HTML 是用来描述网页的一种语言。



HTML 指的是超文本标记语言: Hyper Text Markup Language
 HTML 不是一种编程语言，而是一种标记语言
 标记语言是一套标记标签 (markup tag)
 HTML 使用标记标签来描述网页
 HTML 文档包含了HTML 标签及文本内容
 HTML文档也叫做 web 页面

 


#### HTML 标签


HTML 标记标签通常被称为 HTML 标签 (HTML tag)。

 
HTML 标签是由尖括号包围的关键词，比如 <html>
 HTML 标签通常是成对出现的，比如 <b> 和 </b>
 标签对中的第一个标签是开始标签，第二个标签是结束标签

 开始和结束标签也被称为开放标签和闭合标签

 
 <标签>内容</标签>


 



#### HTML 元素

 "HTML 标签" and "HTML 元素" 通常都是描述同样的意思.

 但是严格来讲, 一个 HTML 元素包含了开始标签与结束标签，如下实例: 

 HTML 元素:

  <p>This is a paragraph.</p>


 



#### Web 浏览器

 Web浏览器（如谷歌浏览器，Internet Explorer，Firefox，Safari）是用于读取HTML文件，并将其作为网页显示。

 浏览器并不是直接显示的HTML标签，但可以使用标签来决定如何展现HTML页面的内容是给用户：

  ![http://www.w3cschool.cc/wp-content/uploads/2013/06/pic_ie.jpg](http://www.w3cschool.cc/wp-content/uploads/2013/06/pic_ie.jpg)

 

#### HTML 网页结果

 下面是一个可视化的HTML页面结构：

  <html>  <body>  <h1>This a heading</h1> 

  <p>This is a paragraph.</p> 

  <p>This is another paragraph.</p> 

 </body> 

</html> 

 



#### HTML版本

 从初期的网络诞生后，已经出现了许多HTML版本:

 

|版本|发布时间|
|:--|:--|
|HTML|1991|
|HTML+|1993|
|HTML 2.0|1995|
|HTML 3.2|1997|
|HTML 4.01|1999|
|XHTML 1.0|2000|
|HTML5|2012|
|XHTML5|2013|





#### <!DOCTYPE> 声明

 <!DOCTYPE>声明有助于浏览器中正确显示网页。

 网络上有很多不同的文件，如果能够正确声明HTML的版本，浏览器就能正确显示网页内容。

 

#### 共同声明

 
#### HTML5

 
```
  <!DOCTYPE html> 





```
 
#### HTML 4.01

 
```
  <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"

 "http://www.w3.org/TR/html4/loose.dtd"> 





```
 
#### XHTML 1.0

 
```
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"

 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 





```
 查看完整网页声明类型 [DOCTYPE 参考手册](http://www.w3cschool.cc/tags/tag-doctype.html).

 

