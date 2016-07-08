 CSS 边框  

 
#### CSS 边框属性

 CSS边框属性允许你指定一个元素边框的样式和颜色。

 

 
#### 边框样式

 边框样式属性指定要显示什么样的边界。

 ![http://www.w3cschool.cc/images/lamp.gif](http://www.w3cschool.cc/images/lamp.gif)border-style属性用来定义边框的样式

 
#### border-style 值:

 none: 默认无边框

 dotted: dotted:定义一个点线框

 dashed: 定义一个虚线框

 solid: 定义实线边界

 double: 定义两个边界。 两个边界的宽度和border-width的值相同

 groove: 定义3D沟槽边界。效果取决于边界的颜色值

 ridge: 定义3D脊边界。效果取决于边界的颜色值

 inset:定义一个3D的嵌入边框。效果取决于边界的颜色值

 outset: 定义一个3D突出边框。 效果取决于边界的颜色值

 尝试一下: [设置边框样式](http://www.w3cschool.cc/try/try.php?filename=trycss_border-style)

 

#### 边框宽度

 您可以通过 border-width 属性为边框指定宽度。

 为边框指定宽度有两种方法：可以指定长度值，比如 2px 或 0.1em；或者使用 3 个关键字之一，它们分别是 thin 、medium（默认值） 和 thick。

 注意：CSS 没有定义 3 个关键字的具体宽度，所以一个用户代理可能把 thin 、medium 和 thick 分别设置为等于 5px、3px 和 2px，而另一个用户代理则分别设置为 3px、2px 和 1px。

  
#### 实例

 
```
 p.one

 {

 border-style:solid;

 border-width:5px;

 }

 p.two

 {

 border-style:solid;

 border-width:medium;

 } 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_border-width) 

 



#### 边框颜色

 border-color属性用于设置边框的颜色。可以设置的颜色：

 
name - 指定颜色的名称，如 "red"
 RGB - 指定 RGB 值, 如 "rgb(255,0,0)"
 Hex - 指定16进制值, 如 "#ff0000"
 
您还可以设置边框的颜色为"transparent"。

 注意： border-color单独使用是不起作用的，必须得先使用border-style来设置边框样式。

  
#### 实例

 
```
 p.one

 {

 border-style:solid;

 border-color:red;

 }

 p.two

 {

 border-style:solid;

 border-color:#98bf21;

 } 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_border-color1) 

 



#### 边框-单独设置各边

 在CSS中，可以指定不同的侧面不同的边框：

  
#### 实例

 
```
 p

 {

 border-top-style:dotted;

 border-right-style:solid;

 border-bottom-style:dotted;

 border-left-style:solid;

 }


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_border-side) 

 上面的例子也可以设置一个单一属性：

  
#### 实例

 
```
 border-style:dotted solid;


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_border-side2) 

 border-style属性可以有1-4个值：

 
 border-style:dotted solid double dashed;  
上边框是 dotted
 右边框是 solid
 底边框是 double
 左边框是 dashed
 




  border-style:dotted solid double; 
上边框是 dotted
 右边框是 solid
 底边框是 double
 




  border-style:dotted solid; 
上、底边框是 dotted
 右、左边框是 solid
 




  border-style:dotted;四面边框是 dotted


 
上面的例子用了border-style。然而，它也可以和border-width 、 border-color一起使用。

 

#### 边框-简写属性

 上面的例子用了很多属性来设置边框。

 T你也可以在一个属性中设置边框。

  你可以在"border"属性中设置：

 
border-width
 border-style (required)
 border-color
 
 
#### 实例

 
```
 border:5px solid red;


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_border) 

 


 ![http://www.w3cschool.cc/images/tryitimg.gif](http://www.w3cschool.cc/images/tryitimg.gif)
#### 更多实例

 

 [所有边框属性在一个声明之中](http://www.w3cschool.cc/try/try.php?filename=trycss_border-top)

 本例演示用简写属性来将所有四个边框属性设置于同一声明中。

 [设置下边框的样式](http://www.w3cschool.cc/try/try.php?filename=trycss_border-bottom-style)

 本例演示如何设置下边框的样式。

 [设置左边框的宽度](http://www.w3cschool.cc/try/try.php?filename=trycss_border-left-width)

 本例演示如何设置左边框的宽度。

 [设置四个边框的颜色](http://www.w3cschool.cc/try/try.php?filename=trycss_border-color)

 本例演示如何设置四个边框的颜色。可以设置一到四个颜色。

 [设置右边框的颜色](http://www.w3cschool.cc/try/try.php?filename=trycss_border-right-color)

 本例演示如何设置右边框的颜色。

 

#### CSS 边框属性

 

|属性|描述|
|:--|:--|
|border|简写属性，用于把针对四个边的属性设置在一个声明。|
|border-style|用于设置元素所有边框的样式，或者单独地为各边设置边框样式。|
|border-width|简写属性，用于为元素的所有边框设置宽度，或者单独地为各边边框设置宽度。|
|border-color|简写属性，设置元素的所有边框中可见部分的颜色，或为 4 个边分别设置颜色。|
|border-bottom|简写属性，用于把下边框的所有属性设置到一个声明中。|
|border-bottom-color|设置元素的下边框的颜色。|
|border-bottom-style|设置元素的下边框的样式。|
|border-bottom-width|设置元素的下边框的宽度。|
|border-left|简写属性，用于把左边框的所有属性设置到一个声明中。|
|border-left-color|设置元素的左边框的颜色。|
|border-left-style|设置元素的左边框的样式。|
|border-left-width|设置元素的左边框的宽度。|
|border-right|简写属性，用于把右边框的所有属性设置到一个声明中。|
|border-right-color|设置元素的右边框的颜色。|
|border-right-style|设置元素的右边框的样式。|
|border-right-width|设置元素的右边框的宽度。|
|border-top|简写属性，用于把上边框的所有属性设置到一个声明中。|
|border-top-color|设置元素的上边框的颜色。|
|border-top-style|设置元素的上边框的样式。|
|border-top-width|设置元素的上边框的宽度。|



