 CSS Positioning(定位)  
 定位有时很棘手！

  
#### 决定显示在前面的元素！




  
#### 元素可以重叠！




 

 

#### Positioning(定位)

 CSS定位属性允许你为一个元素定位。它也可以将一个元素放在另一个元素后面，并指定一个元素的内容太大时，应该发生什么。

 元素可以使用的顶部，底部，左侧和右侧属性定位。然而，这些属性无法工作，除非是先设定position属性。他们也有不同的工作方式，这取决于定位方法.

 有四种不同的定位方法。

 

#### Static 定位

 HTML元素的默认值，即没有定位，元素出现在正常的流中。

 静态定位的元素不会受到top, bottom, left, right影响。

 

#### Fixed 定位

 元素的位置相对于浏览器窗口是固定位置。

 即使窗口是滚动的它也不会移动：

  
#### 实例

 
```
 p.pos_fixed

 {

 position:fixed;

 top:30px;

 right:5px;

 }


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_position_fixed) 

 注意： Fixed 定位在 IE7 和 IE8 下需要描述 !DOCTYPE 才能支持.

 Fixed定位使元素的位置与文档流无关，因此不占据空间。

 Fixed定位的元素和其他元素重叠。

 

#### Relative 定位

 相对定位元素的定位是相对其正常位置。

  
#### 实例

 
```
 h2.pos_left

 {

 position:relative;

 left:-20px;

 }

 h2.pos_right

 {

 position:relative;

 left:20px;

 }


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_position_relative) 

 可以移动的相对定位元素的内容和相互重叠的元素，它原本所占的空间不会改变。

  
#### 实例

 
```
 h2.pos_top

 {

 position:relative;

 top:-50px;

 }


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_position_relative2) 

 相对定位元素经常被用来作为绝对定位元素的容器块。

 

#### Absolute 定位

 绝对定位的元素的位置相对于最近的已定位父元素，如果元素没有已定位的父元素，那么它的位置相对于<html>:

  
#### 实例

 
```
 h2

 {

 position:absolute;

 left:100px;

 top:150px;

 }


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_position_absolute) 

 Absolutely定位使元素的位置与文档流无关，因此不占据空间。

 Absolutely定位的元素和其他元素重叠。

 

#### 重叠的元素

 元素的定位与文档流无关，所以它们可以覆盖页面上的其它元素

 z-index属性指定了一个元素的堆叠顺序（哪个元素应该放在前面，或后面）

 一个元素可以有正数或负数的堆叠顺序：

  
#### 实例

 
```
 img

 {

 position:absolute;

 left:0px;

 top:0px;

 z-index:-1;

 }


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_zindex) 

 具有更高堆叠顺序的元素总是在较低的堆叠顺序元素的前面。

 

#### 注意：

 如果两个定位元素重叠，没有指定z - index，最后定位在HTML代码中的元素将被显示在最前面。

 
 ![http://www.w3cschool.cc/images/tryitimg.gif](http://www.w3cschool.cc/images/tryitimg.gif)
#### 更多实例

 

 [裁剪元素的外形](http://www.w3cschool.cc/try/try.php?filename=trycss_clip)

 此示例演示如何设置元素的外形。该元素被剪裁成这种形状，并显示出来。

 [如何使用滚动条来显示元素内溢出的内容](http://www.w3cschool.cc/try/try.php?filename=trycss_overflow)

 这个例子演示了overflow属性创建一个滚动条，当一个元素的内容在指定的区域过大时如何设置以适应。

 [如何设置浏览器自动溢出处理](http://www.w3cschool.cc/try/try.php?filename=trycss_pos_overflow_auto)

 这个例子演示了如何设置浏览器来自动处理溢出。

 [更改光标](http://www.w3cschool.cc/try/try.php?filename=trycss_cursor)

 这个例子演示了如何改变光标。

 

#### 所有的CSS定位属性

 "CSS" 列中的数字表示哪个CSS(CSS1 或者CSS2)版本定义了该属性。 

 

|属性|说明|值|CSS|
|:--|:--|:--|:--|
|bottom|定义了定位元素下外边距边界与其包含块下边界之间的偏移。|autolength %inherit|2|
|clip|剪辑一个绝对定位的元素|shapeauto inherit|2|
|cursor|显示光标移动到指定的类型|urlauto crosshair default pointer move e-resize ne-resize nw-resize n-resize se-resize sw-resize s-resize w-resize text wait help|2|
|left|定义了定位元素左外边距边界与其包含块左边界之间的偏移。|autolength %inherit|2|
|overflow|设置当元素的内容溢出其区域时发生的事情。|auto hidden scroll visible inherit|2|
|position|指定元素的定位类型|absolute fixed relative static inherit|2|
|right|定义了定位元素右外边距边界与其包含块右边界之间的偏移。|autolength %inherit|2|
|top|定义了一个定位元素的上外边距边界与其包含块上边界之间的偏移。|autolength %inherit|2|
|z-index|设置元素的堆叠顺序| numberauto inherit|2|



