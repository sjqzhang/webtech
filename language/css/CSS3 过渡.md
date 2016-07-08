  .animated_div { width:60px; height:40px; background:#92B901; color:#ffffff; position:absolute; font-weight:bold; font-size:15px; padding:10px; float:left; margin:5px; -webkit-transition:-webkit-transform 1s,opacity 1s,background 1s,width 1s,height 1s,font-size 1s; -webkit-border-radius:5px; -o-transition-property:width,height,-o-transform,background,font-size,opacity; -o-transition-duration:1s,1s,1s,1s,1s,1s; -moz-transition-property:width,height,-o-transform,background,font-size,opacity; -moz-transition-duration:1s,1s,1s,1s,1s,1s; transition-property:width,height,transform,background,font-size,opacity; transition-duration:1s,1s,1s,1s,1s,1s; border-radius:5px; opacity:0.4; } .animated_div:hover { -moz-transform: rotate(360deg); -webkit-transform: rotate(360deg); -o-transform: rotate(360deg); transform: rotate(360deg); opacity:1; background:#1ec7e6; width:90px; height:60px; font-size:30px; } 
CSS3 过渡  

#### CSS3 过渡

 CSS3中，我们为了添加某种效果可以从一种样式转变到另一个的时候，无需使用Flash动画或JavaScript。用鼠标移过下面的元素：

 
用鼠标移过下面的元素：

  CSS3

Transition 

 

 

#### 浏览器支持

 

|属性|浏览器支持|
|:--||||||
|transition||||||

Internet Explorer 10, Firefox, Opera, Chrome, 和Opera 支持transition 属性.

 Safari 需要前缀 -webkit-。

 

#### 注意：

 Internet Explorer 9 以及更早的版本，不支持 transition 属性。

 

#### 注意：

Chrome 25 以及更早的版本，需要前缀 -webkit-。

 

#### 它是如何工作？

 CSS3 过渡是元素从一种样式逐渐改变为另一种的效果。

 要实现这一点，必须规定两项内容：

 
指定要添加效果的CSS属性
 指定效果的持续时间。
 
 ![http://www.w3cschool.cc/images/compatible_opera2020.gif](http://www.w3cschool.cc/images/compatible_opera2020.gif)![http://www.w3cschool.cc/images/compatible_safari2020.gif](http://www.w3cschool.cc/images/compatible_safari2020.gif)![http://www.w3cschool.cc/images/compatible_chrome2020.gif](http://www.w3cschool.cc/images/compatible_chrome2020.gif)![http://www.w3cschool.cc/images/compatible_firefox2020.gif](http://www.w3cschool.cc/images/compatible_firefox2020.gif)![http://www.w3cschool.cc/images/compatible_ie2020.gif](http://www.w3cschool.cc/images/compatible_ie2020.gif)
#### 实例

 应用于宽度属性的过渡效果，时长为 2 秒：

 
```
 div

 {

 transition: width 2s;

 -webkit-transition: width 2s; /* Safari */

 } 


```
 




 注意： 如果未指定的期限，transition将没有任何效果，因为默认值是0。

 指定的CSS属性的值更改时效果会发生变化。一个典型CSS属性的变化是用户鼠标放在一个元素上时：

  ![http://www.w3cschool.cc/images/compatible_opera2020.gif](http://www.w3cschool.cc/images/compatible_opera2020.gif)![http://www.w3cschool.cc/images/compatible_safari2020.gif](http://www.w3cschool.cc/images/compatible_safari2020.gif)![http://www.w3cschool.cc/images/compatible_chrome2020.gif](http://www.w3cschool.cc/images/compatible_chrome2020.gif)![http://www.w3cschool.cc/images/compatible_firefox2020.gif](http://www.w3cschool.cc/images/compatible_firefox2020.gif)![http://www.w3cschool.cc/images/compatible_ie2020.gif](http://www.w3cschool.cc/images/compatible_ie2020.gif)
#### 实例

 规定当鼠标指针悬浮(:hover)于 <div>元素上时：

 
```
 div:hover

 {

 width:300px;

 } 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss3_transition1) 

 注意： 当鼠标光标移动到该元素时，它逐渐改变它原有样式

 

#### 多项改变

 要添加多个样式的变换效果，添加的属性由逗号分隔：

  ![http://www.w3cschool.cc/images/compatible_opera2020.gif](http://www.w3cschool.cc/images/compatible_opera2020.gif)![http://www.w3cschool.cc/images/compatible_safari2020.gif](http://www.w3cschool.cc/images/compatible_safari2020.gif)![http://www.w3cschool.cc/images/compatible_chrome2020.gif](http://www.w3cschool.cc/images/compatible_chrome2020.gif)![http://www.w3cschool.cc/images/compatible_firefox2020.gif](http://www.w3cschool.cc/images/compatible_firefox2020.gif)![http://www.w3cschool.cc/images/compatible_ie2020.gif](http://www.w3cschool.cc/images/compatible_ie2020.gif)
#### 实例

 添加了宽度，高度和转换效果：

 
```
 div

 {

 transition: width 2s, height 2s, transform 2s;

 -webkit-transition: width 2s, height 2s, -webkit-transform 2s;

 } 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss3_transition2) 

 



#### 过渡属性

 下表列出了所有的过渡属性:

 

|属性|描述|CSS|
|:--|:--|:--|
|transition|简写属性，用于在一个属性中设置四个过渡属性。|3|
|transition-property|规定应用过渡的 CSS 属性的名称。|3|
|transition-duration|定义过渡效果花费的时间。默认是 0。|3|
|transition-timing-function|规定过渡效果的时间曲线。默认是 "ease"。|3|
|transition-delay|规定过渡效果何时开始。默认是 0。|3|

下面的两个例子设置所有过渡属性：

  ![http://www.w3cschool.cc/images/compatible_opera2020.gif](http://www.w3cschool.cc/images/compatible_opera2020.gif)![http://www.w3cschool.cc/images/compatible_safari2020.gif](http://www.w3cschool.cc/images/compatible_safari2020.gif)![http://www.w3cschool.cc/images/compatible_chrome2020.gif](http://www.w3cschool.cc/images/compatible_chrome2020.gif)![http://www.w3cschool.cc/images/compatible_firefox2020.gif](http://www.w3cschool.cc/images/compatible_firefox2020.gif)![http://www.w3cschool.cc/images/compatible_ie2020.gif](http://www.w3cschool.cc/images/compatible_ie2020.gif)
#### 实例

 在一个例子中使用所有过渡属性：

 
```
 div

 {

 transition-property: width;

 transition-duration: 1s;

 transition-timing-function: linear;

 transition-delay: 2s;

 /* Safari */

 -webkit-transition-property:width;

 -webkit-transition-duration:1s;

 -webkit-transition-timing-function:linear;

 -webkit-transition-delay:2s;

 } 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss3_transition4) 

 

 ![http://www.w3cschool.cc/images/compatible_opera2020.gif](http://www.w3cschool.cc/images/compatible_opera2020.gif)![http://www.w3cschool.cc/images/compatible_safari2020.gif](http://www.w3cschool.cc/images/compatible_safari2020.gif)![http://www.w3cschool.cc/images/compatible_chrome2020.gif](http://www.w3cschool.cc/images/compatible_chrome2020.gif)![http://www.w3cschool.cc/images/compatible_firefox2020.gif](http://www.w3cschool.cc/images/compatible_firefox2020.gif)![http://www.w3cschool.cc/images/compatible_ie2020.gif](http://www.w3cschool.cc/images/compatible_ie2020.gif)
#### 实例

 与上面的例子相同的过渡效果，但是使用了简写的 transition 属性：

 
```
 div

 {

 transition: width 1s linear 2s;

 /* Safari */

 -webkit-transition:width 1s linear 2s;

 } 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss3_transition5) 

 

