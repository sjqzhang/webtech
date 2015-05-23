  .animated_div { width:60px; height:40px; color:#ffffff; position:relative; font-weight:bold; font-size:15px; padding:10px; float:left; margin:20px; margin-right:50px; border:1px solid #888888; -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; } #div1 {background:#92B901;transform:rotate(30deg);-webkit-transform:rotate(30deg);-o-transform:rotate(30deg);-moz-transform:rotate(30deg);} #div2 {background:#f98450;transform:scale(2,2);-webkit-transform:scale(2,2);-o-transform:scale(2,2);-moz-transform:scale(2,2);} #div3 {background:#1ec7e6;transform:skew(30deg,20deg);-webkit-transform:skew(30deg,20deg);-o-transform:skew(30deg,20deg);-moz-transform:skew(30deg,20deg);} #div1 {-ms-filter: "progid:DXImageTransform.Microsoft.Matrix(M11=0.8660254037844384, M12=-0.5000000000000004, M21=0.5000000000000004, M22=0.8660254037844384, SizingMethod=auto expand)";} #div2 {-ms-filter: "progid:DXImageTransform.Microsoft.Matrix(M11=2, M12=0, M21=0, M22=2, SizingMethod=auto expand)";} #div3 {-ms-filter: "progid:DXImageTransform.Microsoft.Matrix(M11=1, M12=0.5773502691896265, M21=0.3639702342662022, M22=1, SizingMethod=auto expand)";} #rotate1,#rotatey1 { border:1px solid #000000; background:red; margin:10px; opacity:0.7; } 
CSS3 3D 转换  

#### 3D Transforms

 CSS3 允许您使用 3D 转换来对元素进行格式化。

 在本章中，您将学到其中的一些 3D 转换方法：

 
rotateX()
 rotateY()
 
点击下面的元素，来查看 2D 转换与 3D 转换之间的不同之处：

  2D rotate

 3D rotate

 

 



#### 浏览器支持

 

|属性|浏览器支持|
|:--||||||
|transform||||||

Internet Explorer 10 和 Firefox 支持 3D 转换.

 Chrome 和 Safari 必须添加前缀 -webkit-.

 Opera 还不支持 3D 转换(支持 [2D 转换](http://www.w3cschool.cc/css3/css3-2dtransforms.html) ).

 

#### rotateX() 方法

 ![http://www.w3cschool.cc/images/transform_rotatex.gif](http://www.w3cschool.cc/images/transform_rotatex.gif)rotateX()方法，围绕其在一个给定度数X轴旋转的元素。

  ![http://www.w3cschool.cc/images/incompatible_opera2020.gif](http://www.w3cschool.cc/images/incompatible_opera2020.gif)![http://www.w3cschool.cc/images/compatible_safari2020.gif](http://www.w3cschool.cc/images/compatible_safari2020.gif)![http://www.w3cschool.cc/images/compatible_chrome2020.gif](http://www.w3cschool.cc/images/compatible_chrome2020.gif)![http://www.w3cschool.cc/images/compatible_firefox2020.gif](http://www.w3cschool.cc/images/compatible_firefox2020.gif)![http://www.w3cschool.cc/images/compatible_ie2020.gif](http://www.w3cschool.cc/images/compatible_ie2020.gif)
#### 实例

 
```
 div

 {

 transform: rotateX(120deg);

 -webkit-transform: rotateX(120deg); /* Safari and Chrome */

 } 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss3_transform_rotateX) 

 



#### rotateY() 方法

 ![http://www.w3cschool.cc/images/transform_rotatey.gif](http://www.w3cschool.cc/images/transform_rotatey.gif)rotateY()方法，围绕其在一个给定度数Y轴旋转的元素。

  ![http://www.w3cschool.cc/images/incompatible_opera2020.gif](http://www.w3cschool.cc/images/incompatible_opera2020.gif)![http://www.w3cschool.cc/images/compatible_safari2020.gif](http://www.w3cschool.cc/images/compatible_safari2020.gif)![http://www.w3cschool.cc/images/compatible_chrome2020.gif](http://www.w3cschool.cc/images/compatible_chrome2020.gif)![http://www.w3cschool.cc/images/compatible_firefox2020.gif](http://www.w3cschool.cc/images/compatible_firefox2020.gif)![http://www.w3cschool.cc/images/compatible_ie2020.gif](http://www.w3cschool.cc/images/compatible_ie2020.gif)
#### 实例

 
```
 div

 {

 transform: rotateY(130deg);

 -webkit-transform: rotateY(130deg); /* Safari and Chrome */

 } 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss3_transform_rotateY) 

 



#### 转换属性

 下表列出了所有的转换属性：

 

|属性|描述|CSS|
|:--|:--|:--|
|transform|向元素应用 2D 或 3D 转换。|3|
|transform-origin|允许你改变被转换元素的位置。|3|
|transform-style|规定被嵌套元素如何在 3D 空间中显示。|3|
|perspective|规定 3D 元素的透视效果。|3|
|perspective-origin|规定 3D 元素的底部位置。|3|
|backface-visibility|定义元素在不面对屏幕时是否可见。|3|


#### 3D 转换方法

 

|函数|描述|
|:--|:--|
|matrix3d(n,n,n,n,n,n,n,n,n,n,n,n,n,n,n,n)|定义 3D 转换，使用 16 个值的 4x4 矩阵。|
|translate3d(x,y,z)|定义 3D 转化。|
|translateX(x)|定义 3D 转化，仅使用用于 X 轴的值。|
|translateY(y)|定义 3D 转化，仅使用用于 Y 轴的值。|
|translateZ(z)|定义 3D 转化，仅使用用于 Z 轴的值。|
|scale3d(x,y,z)|定义 3D 缩放转换。|
|scaleX(x)|定义 3D 缩放转换，通过给定一个 X 轴的值。|
|scaleY(y)|定义 3D 缩放转换，通过给定一个 Y 轴的值。|
|scaleZ(z)|定义 3D 缩放转换，通过给定一个 Z 轴的值。|
|rotate3d(x,y,z,angle)|定义 3D 旋转。|
|rotateX(angle)|定义沿 X 轴的 3D 旋转。|
|rotateY(angle)|定义沿 Y 轴的 3D 旋转。|
|rotateZ(angle)|定义沿 Z 轴的 3D 旋转。|
|perspective(n)|定义 3D 转换元素的透视视图。|



