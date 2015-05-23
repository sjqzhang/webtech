 HTML5 浏览器支持  
你可以让一些较早的浏览器（不支持HTML5）支持 HTML5。

 

#### HTML5 浏览器支持

 现代的浏览器都支持 HTML5。

 此外，所有浏览器，包括旧的和最新的，对无法识别的元素会作为内联元素自动处理。

 正因为如此，你可以 "教会" 浏览器处理 "未知" 的 HTML 元素。

  

 

|   甚至你可以教会 IE6 (Windows XP 2001) 浏览器处理未知的 HTML 元素。 |



#### 将 HTML5 元素定义为块元素

 HTML5 定了 8 个新的 HTML 

#### 语义（semantic）

 元素。所有这些元素都是 

#### 块级

 元素。

 为了能让旧版本的浏览器正确显示这些元素，你可以设置 CSS 的 

#### display

 属性值为 

#### block

:

  
#### 实例

 
```
 header, section, footer, aside, nav, main, article, figure {

     display: block; 

 } 


```
 

 



#### 为 HTML 添加新元素

 你可以为 HTML 添加新的元素。

 该实例向 HTML 添加的新的元素，并为该元素定义样式，元素名为 

#### <myHero>

 ：

  
#### 实例

 
```
 <!DOCTYPE html>

 <html>



<head>

  <title>Creating an HTML Element</title>

  <script>document.createElement("myHero")</script>

  <style>

  myHero {

    display: block;

    background-color: #ddd;

    padding: 50px;

    font-size: 30px;

  } 

  </style> 

</head>



<body>



 <h1>我的第一个标题</h1>



 <p>我的第一个段落。</p>



<myHero>我的第一个新元素</myHero>



 </body>

 </html> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml5_browsers_myhero) 

  JavaScript 语句 

#### document.createElement("myHero")

 是为了为 IE 浏览器添加新的元素。

 

#### Internet Explorer 浏览器问题

 你可以使用以上的方法来为 IE 浏览器添加 HTML5 元素，但是：

  

 

|   Internet Explorer 8 及更早 IE 版本的浏览器不支持以上的方式。 |

幸运的是， Sjoerd Visscher 创建了 "HTML5 Enabling JavaScript", "

####  shiv

":

  
```
 <!--[if lt IE 9]>

  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>

 <![endif]--> 


```
 

 以上代码是一个注释，作用是在 IE 浏览器的版本小于 IE9 时将读取 html5.js 文件，并解析它。

 注意：国内用户请使用百度静态资源库（Google 资源库在国内不稳定）：

  
```
 <!--[if lt IE 9]>

  <script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>

 <![endif]--> 


```
 

  针对IE浏览器html5shiv 是比较好的解决方案。html5shiv主要解决HTML5提出的新的元素不被IE6-8识别，这些新元素不能作为父节点包裹子元素，并且不能应用CSS样式。 

 

#### 完美的 Shiv 解决方案

  
#### 实例

 
```
 <!DOCTYPE html>

 <html>



<head>

  <title>Styling HTML5</title>

  <!--[if lt IE 9]>

   <script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>

   <![endif]-->

</head>



<body>



 <h1>我的第一篇文章</h1>



 <article>

London is the capital city of England. It is the most populous city in the United Kingdom, with a metropolitan area of over 13 million inhabitants.

</article>



 </body>

 </html> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml5_browsers_theshiv) 

  html5shiv.js 引用代码必须放在 <head> 元素中，因为 IE 浏览器在解析 HTML5 新元素时需要先加载该文件。

 

