 CSS3 边框（Borders）   
#### CSS3 Borders

 用CSS3，你可以创建圆角边框，添加阴影框，并作为边界的形象而不使用设计程序，如Photoshop。

 在本章中，您将了解以下的边框属性：

 
border-radius
 box-shadow
 border-image
 


 
#### 浏览器支持

 

|属性|浏览器支持|
|:--||||||
|border-radius||||||
|box-shadow||||||
|border-image||||||

Internet Explorer 9+ 支持 border-radius 和 box-shadow.

 Firefox, Chrome, 和 Safari 支持所有最新的 border 属性.

 

#### 注意：

 前缀是-webkit-的Safari支持阴影边框。

 前缀是-o-的Opera支持边框图像。

 

#### CSS3 圆角

 在CSS2中添加圆角棘手。我们不得不在每个角落使用不同的图像。

 在CSS3中，很容易创建圆角。

 在CSS3中border-radius属性被用于创建圆角：

 这是圆角边框！

 

 ![http://www.w3cschool.cc/images/compatible_opera2020.gif](http://www.w3cschool.cc/images/compatible_opera2020.gif)![http://www.w3cschool.cc/images/compatible_safari2020.gif](http://www.w3cschool.cc/images/compatible_safari2020.gif)![http://www.w3cschool.cc/images/compatible_chrome2020.gif](http://www.w3cschool.cc/images/compatible_chrome2020.gif)![http://www.w3cschool.cc/images/compatible_firefox2020.gif](http://www.w3cschool.cc/images/compatible_firefox2020.gif)![http://www.w3cschool.cc/images/compatible_ie2020.gif](http://www.w3cschool.cc/images/compatible_ie2020.gif)
#### 实例

 在div中添加圆角元素：

 
```
 div

 {

 border:2px solid;

 border-radius:25px;

 } 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss3_border-radius) 

 



#### CSS3盒阴影

 CSS3中的box-shadow属性被用来添加阴影:

 

 

 ![http://www.w3cschool.cc/images/compatible_opera2020.gif](http://www.w3cschool.cc/images/compatible_opera2020.gif)![http://www.w3cschool.cc/images/compatible_safari2020.gif](http://www.w3cschool.cc/images/compatible_safari2020.gif)![http://www.w3cschool.cc/images/compatible_chrome2020.gif](http://www.w3cschool.cc/images/compatible_chrome2020.gif)![http://www.w3cschool.cc/images/compatible_firefox2020.gif](http://www.w3cschool.cc/images/compatible_firefox2020.gif)![http://www.w3cschool.cc/images/compatible_ie2020.gif](http://www.w3cschool.cc/images/compatible_ie2020.gif)
#### 实例

 在div中添加box-shadow属性

 
```
 div

 {

 box-shadow: 10px 10px 5px #888888;

 } 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss3_box-shadow) 

 



#### CSS3边界图片

 有了CSS3的border-image属性，你可以使用图像创建一个边框： 

 border-image属性允许你指定一个图片作为边框！ 用于创建上文边框的原始图像：

 在div中使用图片创建边框:

 ![http://www.w3cschool.cc/images/border.png](http://www.w3cschool.cc/images/border.png)



 ![http://www.w3cschool.cc/images/compatible_opera2020.gif](http://www.w3cschool.cc/images/compatible_opera2020.gif)![http://www.w3cschool.cc/images/compatible_safari2020.gif](http://www.w3cschool.cc/images/compatible_safari2020.gif)![http://www.w3cschool.cc/images/compatible_chrome2020.gif](http://www.w3cschool.cc/images/compatible_chrome2020.gif)![http://www.w3cschool.cc/images/compatible_firefox2020.gif](http://www.w3cschool.cc/images/compatible_firefox2020.gif)![http://www.w3cschool.cc/images/incompatible_ie2020.gif](http://www.w3cschool.cc/images/incompatible_ie2020.gif)
#### 实例

 在div中使用图片创建边框

 
```
 div

 {

 border-image:url(border.png) 30 30 round;

 -webkit-border-image:url(border.png) 30 30 round; /* Safari 5 and older */

 -o-border-image:url(border.png) 30 30 round; /* Opera */

 } 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss3_border-image) 

 



#### 新边框属性

 

|属性|说明|CSS|
|:--|:--|:--|
|border-image|设置所有边框图像的速记属性。|3|
|border-radius|一个用于设置所有四个边框- *-半径属性的速记属性|3|
|box-shadow|附加一个或多个下拉框的阴影|3|



