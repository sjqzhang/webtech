 HTML - XHTML  
XHTML 是以 XML 格式编写的 HTML。

 

#### 什么是 XHTML?

 
XHTML 指的是可扩展超文本标记语言
 XHTML 与 HTML 4.01 几乎是相同的
 XHTML 是更严格更纯净的 HTML 版本
 XHTML 是以 XML 应用的方式定义的 HTML
 XHTML 是 [2001 年 1 月](http://www.w3cschool.cc/w3c/w3c-xhtml.html)发布的 W3C 推荐标准
 XHTML 得到所有主流浏览器的支持
 


#### 为什么使用 XHTML?

 因特网上的很多页面包含了"糟糕"的 HTML。

 如果在浏览器中查看，下面的 HTML 代码运行起来非常正常（即使它并未遵守 HTML 规则）：

 
```
 <html>

 <head>

 <title>This is bad HTML</title>

 <body>

 <h1>Bad HTML

 <p>This is a paragraph

 </body>




```
 XML 是一种必须正确标记且格式良好的标记语言。

 如果希望学习 XML，请阅读我们的[ XML 教程](http://www.w3cschool.cc/xml/xml-tutorial.html)。

 今日的科技界存在一些不同的浏览器技术。其中一些在计算机上运行，而另一些可能在移动电话或其他小型设备上运行。小型设备往往缺乏解释"糟糕"的标记语言的资源和能力。

 所以 - 通过结合 XML 和 HTML 的长处，开发出了 XHTML。XHTML 是作为 XML 被重新设计的 HTML。

 

#### 与 HTML 相比最重要的区别：

 
#### 文档结构

 
XHTML DOCTYPE 是强制性的

 <html> 中的 XML namespace 属性是强制性的

 <html>、<head>、<title> 以及 <body> 也是强制性的

 

#### 元素语法

 
XHTML 元素必须正确嵌套

 XHTML 元素必须始终关闭

 XHTML 元素必须小写

 XHTML 文档必须有一个根元素

 

#### 属性语法

 
XHTML 属性必须使用小写

 XHTML 属性值必须用引号包围

 XHTML 属性最小化也是禁止的

 


#### <!DOCTYPE ....>是强制性的

 XHTML 文档必须进行 XHTML 文档类型声明（XHTML DOCTYPE declaration）。

 您可以在 W3School 的标签参考手册中找到完整的 [XHTML 文档类型。](http://www.w3cschool.cc/tags/tag-doctype.html)

 <html>, <head>, <title>, 和 <body> 元素也必须存在，并且必须使用 <html> 中的 xmlns 属性为文档规定 xml 命名空间。

 下面的例子展示了带有最少的必需标签的 XHTML 文档：

 
```
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"

 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



 <html xmlns="http://www.w3.org/1999/xhtml">



 <head>

 <title>Title of document</title>

 </head>



 <body>

...... 

 </body>



 </html>




```
 



#### XHTML 元素必须合理嵌套

 在 HTML 中，一些元素可以不互相嵌套，像这样：

 
```
 <b><i>This text is bold and italic</b></i>




```
 在 XHTML 中，所有的元素都必须互相合理地嵌套，像这样：

 
```
 <b><i>This text is bold and italic</i></b>




```
 



#### XHTML 元素必须有关闭标签

 错误示例：

 
```
 <p>This is a paragraph

 <p>This is another paragraph




```
 正确示例：

 
```
 <p>This is a paragraph</p>

 <p>This is another paragraph</p>




```
 



#### 空元素必须包含关闭标签

 错误示例：

 
```
 A break: <br>

 A horizontal rule: <hr>

 An image: <img src="http://www.w3cschool.cc/html/happy.gif" alt="Happy face">




```
 正确示例：

 
```
 A break: <br />

 A horizontal rule: <hr />

 An image: <img src="http://www.w3cschool.cc/html/happy.gif" alt="Happy face" />




```
 



#### XHTML 元素必须是小写

 错误示例:

 
```
 <BODY>

 <P>This is a paragraph</P>

 </BODY>




```
 正确示例：

 
```
 <body>

 <p>This is a paragraph</p>

 </body>




```
 



#### 属性名称必须是小写

 错误示例：

 
```
 <table WIDTH="100%">




```
 正确示例:

 
```
 <table width="100%">




```
 



#### 属性值必须有引号

 错误示例：

 
```
 <table width=100%>




```
 正确示例：

 
```
 <table width="100%">




```
 



#### 不允许属性简写

 错误示例：

 
```
 <input checked>

 <input readonly>

 <input disabled>

 <option selected>




```
 正确示例：

 
```
 <input checked="checked">

 <input readonly="readonly">

 <input disabled="disabled">

 <option selected="selected">




```
 



#### 如何将 HTML 转换为 XHTML

 
添加一个 XHTML <!DOCTYPE> 到你的网页中
 添加 xmlns 属性添加到每个页面的html元素中。 
 改变所有的元素为小写
 关闭所有的空元素
 修改所有的属性名称为小写
 所有属性值添加引号
 


#### 使用 W3C 验证器来测试你的 XHTML

  请在下面的输入框中输入您的网址：

 

 
  

