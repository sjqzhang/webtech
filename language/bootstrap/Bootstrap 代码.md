 Bootstrap 代码
 Bootstrap 允许您以两种方式显示代码：

 
第一种是 <code> 标签。如果您想要内联显示代码，那么您应该使用 <code> 标签。
 第二种是 <pre> 标签。如果代码需要被显示为一个独立的块元素或者代码有多行，那么您应该使用 <pre> 标签。
 
请确保当您使用 <pre> 和 <code> 标签时，开始和结束标签使用了 unicode 变体： &amp;lt; 和 &amp;gt;。

 让我们来看看下面的实例：

  
#### 实例

 
```
 <!DOCTYPE html>

 <html>

 <head>

   <title>Bootstrap 实例 - 代码</title>

   <link href="http://www.w3cschool.cc/bootstrap/css/bootstrap.min.css" rel="stylesheet">

   <script src="http://www.w3cschool.cc/scripts/jquery.min.js"></script>

   <script src="http://www.w3cschool.cc/bootstrap/js/bootstrap.min.js"></script>

 </head>

 <body>



 <p><code>&amp;lt;header&amp;gt;</code> 作为内联元素被包围。</p>

 <p>如果需要把代码显示为一个独立的块元素，请使用 <pre> 标签：</p>

 <pre>

   &amp;lt;article&amp;gt;

     &amp;lt;h1&amp;gt;Article Heading&amp;lt;/h1&amp;gt;

   &amp;lt;/article&amp;gt;

 </pre>

 </body>

 </html> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=bootstrap3-code) 

 实例展示如下图：

  ![http://www.w3cschool.cc/wp-content/uploads/2014/06/code_demo.jpg](http://www.w3cschool.cc/wp-content/uploads/2014/06/code_demo.jpg)


 

