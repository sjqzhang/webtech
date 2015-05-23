 HTML 元素
 
HTML 文档由 HTML 元素定义。

 

#### HTML 元素

 

|开始标签 *|元素内容|结束标签 *|
|:--|:--|:--|
|<p>|这是一个段落|</p>|
|<a href="http://www.w3cschool.cc/html/default.htm">|这是一个链接|</a>|
|<br>| | |
*开始标签常被称为起始标签（opening tag），结束标签常称为闭合标签（closing tag）。

 
#### HTML Element Syntax

 
HTML 元素以开始标签起始
 HTML 元素以结束标签终止
 
元素的内容是开始标签与结束标签之间的内容
 某些 HTML 元素具有空内容（empty content）

 空元素在开始标签中进行关闭（以开始标签的结束而结束）
 大多数 HTML 元素可拥有属性

 注释: 您将在本教程的下一章中学习更多有关属性的内容。

 
#### 嵌套的 HTML 元素

  

HTML 文档由嵌套的 HTML 元素构成。

 
#### HTML 文档实例

 
```
 <!DOCTYPE html>

 <html>



 <body>

 <p>This is my first paragraph.</p>

 </body>



 </html> 




```
 以上实例包含了三个 HTML 元素。

 
#### HTML 实例解析

 The <p> element:

 
```
 <p>This is my first paragraph.</p>




```
 这个 <p> 元素定义了 HTML 文档中的一个段落。

 这个元素拥有一个开始标签 <p> 以及一个结束标签 </p>.

 元素内容是: This is my first paragraph.

 The <body> element:

 
```
 <body>

 <p>This is my first paragraph.</p>

 </body> 




```
 The <body> 元素定义了 HTML 文档的主体。

 这个元素拥有一个开始标签 <body> 以及一个结束标签 </body>。

 元素内容是另一个 HTML 元素（p 元素）。

 The <html> 元素：

 
```
 <html>



 <body>

 <p>This is my first paragraph.</p>

 </body>



 </html> 




```
 The <html> 元素定义了整个 HTML 文档。

 这个元素拥有一个开始标签 <html> ，以及一个结束标签 </html>.

 元素内容是另一个 HTML 元素（body 元素）。

 
#### 不要忘记结束标签

 即使您忘记了使用结束标签，大多数浏览器也会正确地显示 HTML：

 
```
 <p>This is a paragraph

 <p>This is a paragraph 




```
 以上实例在浏览器中也能正常显示，因为关闭标签是可选的。

 但不要依赖这种做法。忘记使用结束标签会产生不可预料的结果或错误。

 
#### HTML 空元素

 没有内容的 HTML 元素被称为空元素。空元素是在开始标签中关闭的。

 <br> 就是没有关闭标签的空元素（<br> 标签定义换行）。

 在 XHTML、XML 以及未来版本的 HTML 中，所有元素都必须被关闭。

 在开始标签中添加斜杠，比如 <br />，是关闭空元素的正确方法，HTML、XHTML 和 XML 都接受这种方式。

 即使 <br> 在所有浏览器中都是有效的，但使用 <br /> 其实是更长远的保障。

 
#### HTML 提示：使用小写标签

 HTML 标签对大小写不敏感：<P> 等同于 <p>。许多网站都使用大写的 HTML 标签。

 W3CSchool 使用的是小写标签，因为万维网联盟（W3C）在 HTML 4 中推荐使用小写，而在未来 (X)HTML 版本中强制使用小写。

 


