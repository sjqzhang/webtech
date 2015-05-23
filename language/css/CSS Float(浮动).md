  .imgbox { float:left; text-align:center; width:120px; height:120px; border:1px solid gray; margin:4px; margin-bottom:8px; padding:0px; } .thumbnail { width:110px; height:90px; margin:3px; } .box { width:110px; padding:0px; } 
CSS Float(浮动)  

#### 什么是CSS Float(浮动)?

  ![http://www.w3cschool.cc/images/klematis_small.jpg](http://www.w3cschool.cc/images/klematis_small.jpg)




  ![http://www.w3cschool.cc/images/klematis2_small.jpg](http://www.w3cschool.cc/images/klematis2_small.jpg)


  ![http://www.w3cschool.cc/images/klematis3_small.jpg](http://www.w3cschool.cc/images/klematis3_small.jpg)


  ![http://www.w3cschool.cc/images/klematis4_small.jpg](http://www.w3cschool.cc/images/klematis4_small.jpg)




 CSS的Float(浮动)，元素可以围绕其他元素向左或向右被推动

 Float(浮动)，往往是用于图像，但它在布局时一样非常有用。

 

#### 元素怎样浮动

 元素的水平方向浮动意味着元素只能左右移动而不能上下移动。

 一个浮动元素会尽量向左或右。通常，这意味着尽所有的可能在所有包含元素的左侧或右侧的。

 浮动元素之后的元素将围绕它。

 浮动元素之前的元素将不会受到影响。

 如果图像是右浮动，下面的文本流将环绕在它左边:

  
#### 实例

 
```
 img

 {

 float:right;

 }


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_float) 

 



#### 彼此相邻的浮动元素

 如果你把几个浮动的元素放到一起，如果有空间的话，它们将彼此相邻。

 在这里，我们已经对图片廊使用float属性：

  
#### 实例

 
```
 .thumbnail 

 {

 float:left;

 width:110px;

 height:90px;

 margin:5px;

 }


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_float_elements) 

 



#### 清除浮动 - 使用clear

 元素浮动之后，周围的元素会重新排列，为了避免这种情况，使用clear属性

 。clear属性指定其他元素双方都不能使用元素的浮动功能。

 使用clear属性往文本中添加图片廊：

  
#### 实例

 
```
 .text_line

 {

 clear:both;

 }


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_float_clear) 

 


 ![http://www.w3cschool.cc/images/tryitimg.gif](http://www.w3cschool.cc/images/tryitimg.gif)
#### 更多实例

 

 [为图像添加边框和边距并浮动到段落的左侧](http://www.w3cschool.cc/try/try.php?filename=trycss_float2)

 让我们为图像添加边框和边距并浮动到段落的左侧

 [标题和图片向右侧浮动](http://www.w3cschool.cc/try/try.php?filename=trycss_float3)

 让标题和图片向右侧浮动。

 [让段落的第一个字母浮动到左侧](http://www.w3cschool.cc/try/try.php?filename=trycss_float4)

 改变样式，让段落的第一个字母浮动到左侧。

 [创建一个没有表格的网页](http://www.w3cschool.cc/try/try.php?filename=trycss_float6)

 使用float创建一个网页页眉、页脚、左边的内容和主要内容。

 

#### 所有CSS浮动属性

 "CSS" 列中的数字表示不同的CSS版本 (CSS1 or CSS2)定义了该属性。

 

|属性|描述|值|CSS|
|:--|:--|:--|:--|
|clear|指定不允许元素周围有浮动元素|left right both none inherit|1|
|float|指定Box是否可以浮动|left right none inherit|1|



