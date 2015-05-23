 CSS 伪类(Pseudo-classes)  
CSS伪类是用来添加一些选择器的特殊效果。

 

#### 语法

 伪类的语法：

 
```
 selector:pseudo-class {property:value;}




```
 CSS类也可以使用伪类：

 
```
 selector.class:pseudo-class {property:value;}




```
 



#### anchor伪类

 在支持 CSS 的浏览器中，链接的不同状态都可以以不同的方式显示

  
#### 实例

 
```
 a:link {color:#FF0000;} /* 未访问的链接 */

 a:visited {color:#00FF00;} /* 已访问的链接 */

 a:hover {color:#FF00FF;} /* 鼠标划过链接 */

 a:active {color:#0000FF;} /* 已选中的链接 */ 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_link) 




 注意： 在CSS定义中，a:hover 必须被置于 a:link 和 a:visited 之后，才是有效的。

 注意： 在 CSS 定义中，a:active 必须被置于 a:hover 之后，才是有效的。

 注意：伪类的名称不区分大小写。

 

#### 伪类和CSS类

 伪类可以与 CSS 类配合使用：

 
```
 a.red:visited {color:#FF0000;}



 <a class="red" href="http://www.w3cschool.cc/css/css-syntax.html">CSS Syntax</a>




```
 如果在上面的例子的链接已被访问，它会显示为红色。

 

#### CSS - :first - child伪类

 您可以使用 :first-child 伪类来选择元素的第一个子元素

 注意：在IE8的之前版本必须声明[<!DOCTYPE>](http://www.w3cschool.cc/tags/tag-doctype.html) ，这样 :first-child 才能生效。

 
#### 匹配第一个 <p> 元素

 在下面的例子中，选择器匹配作为任何元素的第一个子元素的 <p> 元素：

  
#### 实例

 
```
 <html>

 <head>

 <style>

 p:first-child

 {

 color:blue;

 } 

 </style>

 </head>



 <body>

 <p>I am a strong man.</p>

 <p>I am a strong man.</p>

 </body>

 </html> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_first-child1) 

 

#### 匹配所有<p> 元素中的第一个 <i> 元素

 在下面的例子中，选择相匹配的所有<p>元素的第一 <i>元素：

  
#### 实例

 
```
 <html>

 <head>

 <style>

 p > i:first-child

 {

 color:blue;

 } 

 </style>

 </head>



 <body>

 <p>I am a <i>strong</i> man. I am a <i>strong</i> man.</p>

 <p>I am a <i>strong</i> man. I am a <i>strong</i> man.</p>

 </body>

 </html> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_first-child2) 

 
  
#### 实例

 
```
 <html>

 <head>

 <style>

 p:first-child i

 {

 color:blue;

 } 

 </style>

 </head>



 <body>

 <p>I am a <i>strong</i> man. I am a <i>strong</i> man.</p>

 <p>I am a <i>strong</i> man. I am a <i>strong</i> man.</p>

 </body>

 </html>


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_first-child3) 

 

#### CSS - :lang 伪类

 
:lang 伪类使你有能力为不同的语言定义特殊的规则

 注意：IE8必须声明[<!DOCTYPE>](http://www.w3cschool.cc/tags/tag-doctype.html)才能支持;lang伪类。

 在下面的例子中，:lang 类为属性值为 no 的q元素定义引号的类型：

  
#### 实例

 
```
 <html>

 <head>

 <style>

 q:lang(no) {quotes: "~" "~";}

 </style>

 </head>



 <body>

 <p>Some text <q lang="no">A quote in a paragraph</q> Some text.</p>

 </body>

 </html> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_lang) 

 


 ![http://www.w3cschool.cc/images/tryitimg.gif](http://www.w3cschool.cc/images/tryitimg.gif)
#### 更多实例

 

 [为超链接添加不同样式](http://www.w3cschool.cc/try/try.php?filename=trycss_link2)

 这个例子演示了如何为超链接添加其他样式。

 [使用 :focus](http://www.w3cschool.cc/try/try.php?filename=trycss_link_focus)

 这个例子演示了如何使用 :focus伪类。 

 

#### 所有CSS伪类/元素

 

|选择器|示例|示例说明|
|:--|:--|:--|
|:link|a:link|选择所有未访问链接|
|:visited|a:visited|选择所有访问过的链接|
|:active|a:active|选择正在活动链接|
|:hover|a:hover|把鼠标放在链接上的状态|
|:focus|input:focus|选择元素输入后具有焦点|
|:first-letter|p:first-letter|选择每个<p> 元素的第一个字母|
|:first-line|p:first-line|选择每个<p> 元素的第一行|
|:first-child|p:first-child|选择器匹配属于任意元素的第一个子元素的 <]p> 元素|
|:before|p:before|Insert content before every <p> element|
|:after|p:after|在每个<p>元素之前插入内容|
|:lang(language)|p:lang(it)|为<p>元素的lang属性选择一个开始值|



