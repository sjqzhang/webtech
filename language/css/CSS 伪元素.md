 CSS  伪元素  
CSS伪元素是用来添加一些选择器的特殊效果。

 

#### 语法

 伪元素的语法：

 
```
 selector:pseudo-element {property:value;}




```
 CSS类也可以使用伪元素：

 
```
 selector.class:pseudo-element {property:value;}




```
 



#### :first-line 伪元素

 "first-line" 伪元素用于向文本的首行设置特殊样式。

 在下面的例子中，浏览器会根据 "first-line" 伪元素中的样式对 p 元素的第一行文本进行格式化：

  
#### 实例

 
```
 p:first-line 

 {

 color:#ff0000;

 font-variant:small-caps;

 }


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_firstline) 

 注意："first-line" 伪元素只能用于块级元素。

 注意： 下面的属性可应用于 "first-line" 伪元素：

 
 font properties
 color properties 
  background properties
 word-spacing
 letter-spacing
 text-decoration
 vertical-align
 text-transform
 line-height
 clear
 


#### :first-letter 伪元素

 "first-letter" 伪元素用于向文本的首字母设置特殊样式：

  
#### 实例

 
```
 p:first-letter 

 {

 color:#ff0000;

 font-size:xx-large;

 }


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_firstletter) 

 注意： "first-letter" 伪元素只能用于块级元素。

 注意： 下面的属性可应用于 "first-letter" 伪元素： 

 
 font properties
  color properties 
  background properties
 margin properties
 padding properties
 border properties
 text-decoration
 vertical-align (only if "float" is "none")
 text-transform
 line-height
 float
 clear
 


#### 伪元素和CSS类

 伪元素可以结合CSS类： 

 
```
 p.article:first-letter {color:#ff0000;}



 <p class="article">A paragraph in an article</p>




```
 上面的例子会使所有 class 为 article 的段落的首字母变为红色。

 

#### Multiple Pseudo-elements

 可以结合多个伪元素来使用。

 在下面的例子中，段落的第一个字母将显示为红色，其字体大小为 xx-large。第一行中的其余文本将为蓝色，并以小型大写字母显示。

 段落中的其余文本将以默认字体大小和颜色来显示：

  
#### 实例

 
```
 p:first-letter

 {

 color:#ff0000;

 font-size:xx-large;

 }

 p:first-line 

 {

 color:#0000ff;

 font-variant:small-caps;

 }


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_firstline_letter) 

 



#### CSS - :before 伪元素

 ":before" 伪元素可以在元素的内容前面插入新内容。

 下面的例子在每个 <h1>元素前面插入一幅图片：

  
#### 实例

 
```
 h1:before 

 {

 content:url(smiley.gif);

 }


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_before) 

 



#### CSS - :after 伪元素

 ":after" 伪元素可以在元素的内容之后插入新内容。

 下面的例子在每个 <h1> 元素后面插入一幅图片：

  
#### 实例

 
```
 h1:after

 {

 content:url(smiley.gif);

 }


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_after) 

 



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



