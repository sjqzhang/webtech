 HTML 图像
 

 
#### 实例

  
#### Norwegian Mountain Trip

 ![http://www.w3cschool.cc/images/pulpit.jpg](http://www.w3cschool.cc/images/pulpit.jpg)


 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml_pulpitimage) 

 
 ![http://www.w3cschool.cc/images/tryitimg.gif](http://www.w3cschool.cc/images/tryitimg.gif)
#### 在线实例

 

 [插入图像](http://www.w3cschool.cc/try/try.php?filename=tryhtml_images)

 本例演示如何在网页中显示图像。

 [从不同的位置插入图片](http://www.w3cschool.cc/try/try.php?filename=tryhtml_images2)

 本例演示如何将其他文件夹或服务器的图片显示到网页中。

 （可以在本页底端找到更多实例。）

 

#### HTML 图像- 图像标签（ <img>）和源属性（Src）

 在 HTML 中，图像由<img> 标签定义。

 <img> 是空标签，意思是说，它只包含属性，并且没有闭合标签。 

 要在页面上显示图像，你需要使用源属性（src）。src 指 "source"。源属性的值是图像的 URL 地址。

 定义图像的语法是：

 
```
 <img src="http://www.w3cschool.cc/html/url" alt="some_text"> 




```
  URL 指存储图像的位置。如果名为 "boat.gif" 的图像位于 www.w3school.com.cn 的 images 目录中，那么其 URL 为 http://www.w3school.com.cn/images/boat.gif。 

 T浏览器将图像显示在文档中图像标签出现的地方。如果你将图像标签置于两个段落之间，那么浏览器会首先显示第一个段落，然后显示图片，最后显示第二段。 

 

#### HTML 图像- Alt属性

  alt 属性用来为图像定义一串预备的可替换的文本。

  替换文本属性的值是用户定义的。 

 
```
 <img src="http://www.w3cschool.cc/html/boat.gif" alt="Big Boat">




```
 在浏览器无法载入图像时，替换文本属性告诉读者她们失去的信息。此时，浏览器将显示这个替代性的文本而不是图像。为页面上的图像都加上替换文本属性是个好习惯，这样有助于更好的显示信息，并且对于那些使用纯文本浏览器的人来说是非常有用的。

 

#### HTML 图像- 设置图像的高度与宽度

  height（高度） 与 width（宽度）属性用于设置图像的高度与宽度。

  属性值默认单位为像素:

 
```
 <img src="http://www.w3cschool.cc/html/pulpit.jpg" alt="Pulpit rock" width="304" height="228">




```
  

#### 提示:

 指定图像的高度和宽度的一个很好的习惯。如果图像指定了高度宽度，页面加载时就会保留指定的尺寸。如果没有指定图片的大小，加载页面时有可能会破坏HTML页面的整体布局。

 

#### 基本的注意事项 - 有用的提示：

 注意: 假如某个 HTML 文件包含十个图像，那么为了正确显示这个页面，需要加载 11 个文件。加载图片是需要时间的，所以我们的建议是：慎用图片。 

 注意: 加载页面时，要注意插入页面图像的路径，如果不能正确设置图像的位置，浏览器无法加载图片，图像标签就会显示一个破碎的图片。

 
 ![http://www.w3cschool.cc/images/tryitimg.gif](http://www.w3cschool.cc/images/tryitimg.gif)
#### 更多实例

 

 [排列图片](http://www.w3cschool.cc/try/try.php?filename=tryhtml_image_align)

 本例演示如何在文字中排列图像。

 [浮动图像](http://www.w3cschool.cc/try/try.php?filename=tryhtml_image_float)

 本例演示如何使图片浮动至段落的左边或右边。

 [设置图像链接](http://www.w3cschool.cc/try/try.php?filename=tryhtml_imglink)

 本例演示如何将图像作为一个链接使用。

 [创建图像映射](http://www.w3cschool.cc/try/try.php?filename=tryhtml_areamap)

 本例显示如何创建带有可供点击区域的图像地图。其中的每个区域都是一个超级链接。

 

#### HTML 图像标签

 

|标签|描述|
|:--|:--|
|<img>|定义图像|
|<map>|定义图像地图|
|<area>|定义图像地图中的可点击区域|



