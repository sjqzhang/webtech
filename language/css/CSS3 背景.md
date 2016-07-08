 CSS3 背景  
 
#### CSS3 背景

 CSS3中包含几个新的背景属性，提供更大背景元素控制。

 在本章您将了解以下背景属性：

 
background-size
 background-origin
 
您还将学习如何使用多重背景图像。

 

 

#### 浏览器支持

 

|属性|浏览器支持|
|:--||||||
|background-size||||||
|background-origin||||||

Internet Explorer 9+, Firefox, Chrome, Safari, 和 Opera 支持最新的背景属性。

 

#### CSS3 background-size 属性

 

 background-size指定背景图像的大小。CSS3以前，背景图像大小由图像的实际大小决定。 

 CSS3中可以指定背景图片，让我们重新在不同的环境中指定背景图片的大小。您可以指定像素或百分比大小。

 你指定的大小是相对于父元素的宽度和高度的百分比的大小。

  ![http://www.w3cschool.cc/images/compatible_opera2020.gif](http://www.w3cschool.cc/images/compatible_opera2020.gif)![http://www.w3cschool.cc/images/compatible_safari2020.gif](http://www.w3cschool.cc/images/compatible_safari2020.gif)![http://www.w3cschool.cc/images/compatible_chrome2020.gif](http://www.w3cschool.cc/images/compatible_chrome2020.gif)![http://www.w3cschool.cc/images/compatible_firefox2020.gif](http://www.w3cschool.cc/images/compatible_firefox2020.gif)![http://www.w3cschool.cc/images/compatible_ie2020.gif](http://www.w3cschool.cc/images/compatible_ie2020.gif)
#### 实例 1

 重置背景图像：

 
```
 div

 {

 background:url(img_flwr.gif);

 background-size:80px 60px;

 background-repeat:no-repeat;

 } 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss3_background-size) 

 

 ![http://www.w3cschool.cc/images/compatible_opera2020.gif](http://www.w3cschool.cc/images/compatible_opera2020.gif)![http://www.w3cschool.cc/images/compatible_safari2020.gif](http://www.w3cschool.cc/images/compatible_safari2020.gif)![http://www.w3cschool.cc/images/compatible_chrome2020.gif](http://www.w3cschool.cc/images/compatible_chrome2020.gif)![http://www.w3cschool.cc/images/compatible_firefox2020.gif](http://www.w3cschool.cc/images/compatible_firefox2020.gif)![http://www.w3cschool.cc/images/compatible_ie2020.gif](http://www.w3cschool.cc/images/compatible_ie2020.gif)
#### 实例 2

 伸展背景图像完全填充内容区域：

 
```
 div

 {

 background:url(img_flwr.gif);

 background-size:100% 100%;

 background-repeat:no-repeat;

 } 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss3_background-size2) 

 



#### CSS3的background-Origin属性

 background-Origin属性指定了背景图像的位置区域。

 content-box, padding-box,和 border-box区域内可以放置背景图像。 

 ![http://www.w3cschool.cc/images/background-origin.gif](http://www.w3cschool.cc/images/background-origin.gif)



 ![http://www.w3cschool.cc/images/compatible_opera2020.gif](http://www.w3cschool.cc/images/compatible_opera2020.gif)![http://www.w3cschool.cc/images/compatible_safari2020.gif](http://www.w3cschool.cc/images/compatible_safari2020.gif)![http://www.w3cschool.cc/images/compatible_chrome2020.gif](http://www.w3cschool.cc/images/compatible_chrome2020.gif)![http://www.w3cschool.cc/images/compatible_firefox2020.gif](http://www.w3cschool.cc/images/compatible_firefox2020.gif)![http://www.w3cschool.cc/images/compatible_ie2020.gif](http://www.w3cschool.cc/images/compatible_ie2020.gif)
#### 实例

 在 content-box 中定位背景图片：

 
```
 div

 {

 background:url(img_flwr.gif);

 background-repeat:no-repeat;

 background-size:100% 100%;

 background-origin:content-box;

 } 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss3_background-origin) 

 




|CSS3 多个背景图像|  |
|:--|
| CSS3 允许你在元素那个添加多个背景图像。 |

 ![http://www.w3cschool.cc/images/compatible_opera2020.gif](http://www.w3cschool.cc/images/compatible_opera2020.gif)![http://www.w3cschool.cc/images/compatible_safari2020.gif](http://www.w3cschool.cc/images/compatible_safari2020.gif)![http://www.w3cschool.cc/images/compatible_chrome2020.gif](http://www.w3cschool.cc/images/compatible_chrome2020.gif)![http://www.w3cschool.cc/images/compatible_firefox2020.gif](http://www.w3cschool.cc/images/compatible_firefox2020.gif)![http://www.w3cschool.cc/images/compatible_ie2020.gif](http://www.w3cschool.cc/images/compatible_ie2020.gif)
#### 实例

 在 body 元素中设置两个背景图像：

 
```
 body

 { 

 background-image:url(img_flwr.gif),url(img_tree.gif);

 } 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss3_background_multiple) 

 



#### 新的背景属性

 

|顺序|描述|CSS|
|:--|:--|:--|
|background-clip|规定背景的绘制区域。|3|
|background-origin|规定背景图片的定位区域。|3|
|background-size|规定背景图片的尺寸。|3|



