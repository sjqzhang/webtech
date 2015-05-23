 CSS 水平对齐(Horizontal Align)  
  
#### 在CSS中，有几个属性用于元素水平对齐。

 

 

 

#### 块元素对齐

 块元素是一个元素，占用了全宽，前后都是换行符。

 块元素的例子：

 
<h1>
 <p>
 <div>
 
文本对齐，请参阅 [ CSS文本](http://www.w3cschool.cc/css/css-text.html) 章节。.

 在这一章中，我们会告诉你块元素如何水平对齐布局。

 

#### 中心对齐,使用margin属性

 块元素可以把左，右页边距设置为"自动"对齐。

 Note: 在IE8中使用margin:auto属性无法正常工作，除非声明  !DOCTYPE 

 margin属性可任意拆分为左，右页边距设置自动指定，结果都是出现居中元素：

  
#### 实例

 
```
 .center

 {

 margin-left:auto;

 margin-right:auto;

 width:70%;

 background-color:#b0e0e6;

 }


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_align_container) 

 提示: 如果宽度是100％，对齐是没有效果的。

 注意：IE5中块元素有一个margin处理BUG。为了使上述例子能工作，在IE5中，需要添加一些额外的代码。 [实例](http://www.w3cschool.cc/try/try.php?filename=trycss_align_container_ie5)

 

#### 使用position属性设置左，右对齐

 元素对齐的方法之一是使用绝对定位：

  
#### 实例

 
```
 .right

 {

 position:absolute;

 right:0px;

 width:300px;

 background-color:#b0e0e6;

 }


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_align_pos) 

 注意：绝对定位与文档流无关，所以它们可以覆盖页面上的其它元素。

 

#### Crossbrowser 兼容性问题

 元素的填充，始终是一个好主意。这是为了避免在不同的浏览器中的可视化差异。

 IE8和早期有一个问题，当使用position属性时。如果一个容器元素（在本例中<div class="container">）指定的宽度，!DOCTYPE声明是缺失，IE8和早期版本会在右边增添17px的margin。这似乎是一个滚动的预留空间。使用position属性时始终设置在DOCTYPE声明中！

  
#### 实例

 
```
 body

 {

 margin:0;

 padding:0;

 }

 .container

 {

 position:relative;

 width:100%;

 }

 .right

 {

 position:absolute;

 right:0px;

 width:300px;

 background-color:#b0e0e6;

 }


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_align_pos_crossbrowser) 

 



#### 使用float属性设置左，右对齐

 使用float属性是对齐元素的方法之一：

  
#### 实例

 
```
 .right

 {

 float:right;

 width:300px;

 background-color:#b0e0e6;

 }


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_align_float) 

 



#### Crossbrowser兼容性问题

 类似这样的元素对齐时，预先确定margin和

元素的填充，始终是一个好主意。这是为了避免在不同的浏览器中的可视化差异。 IE8和早期有一个问题，当使用float属性时。如果一个容器元素（在本例中<div class="container">）指定的宽度，!DOCTYPE声明是缺失，IE8和早期版本会在右边增添17px的margin。这似乎是一个滚动的预留空间。使用float属性时始终设置在DOCTYPE声明中！

  
#### 实例

 
```
 body

 {

 margin:0;

 padding:0;

 }

 .right

 {

 float:right;

 width:300px;

 background-color:#b0e0e6;

 }


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_align_float_crossbrowser) 

 

