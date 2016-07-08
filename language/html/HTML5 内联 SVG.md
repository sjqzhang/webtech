 HTML5 内联 SVG  
HTML5 支持内联 SVG。

 SVG Sorry, your browser does not support inline SVG. 

#### 什么是SVG？

 
SVG 指可伸缩矢量图形 (Scalable Vector Graphics)
 SVG 用于定义用于网络的基于矢量的图形
 SVG 使用 XML 格式定义图形
 SVG 图像在放大或改变尺寸的情况下其图形质量不会有损失
 SVG 是万维网联盟的标准
 


#### SVG优势

 与其他图像格式相比（比如 JPEG 和 GIF），使用 SVG 的优势在于：

 
SVG 图像可通过文本编辑器来创建和修改
 SVG 图像可被搜索、索引、脚本化或压缩
 SVG 是可伸缩的
 SVG 图像可在任何的分辨率下被高质量地打印
 SVG 可在图像质量不下降的情况下被放大
 


#### 浏览器支持

 ![http://www.w3cschool.cc/images/compatible_ie.gif](http://www.w3cschool.cc/images/compatible_ie.gif)![http://www.w3cschool.cc/images/compatible_firefox.gif](http://www.w3cschool.cc/images/compatible_firefox.gif)![http://www.w3cschool.cc/images/compatible_opera.gif](http://www.w3cschool.cc/images/compatible_opera.gif)![http://www.w3cschool.cc/images/compatible_chrome.gif](http://www.w3cschool.cc/images/compatible_chrome.gif)![http://www.w3cschool.cc/images/compatible_safari.gif](http://www.w3cschool.cc/images/compatible_safari.gif)

 Internet Explorer 9+, Firefox, Opera, Chrome, 和 Safari 支持内联SVG。

 

#### 把 SVG 直接嵌入 HTML 页面

 在 HTML5 中，您能够将 SVG 元素直接嵌入 HTML 页面中：

  
#### 实例

 
```
 <!DOCTYPE html>

 <html>

 <body>



 <svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="190">

   <polygon points="100,10 40,180 190,60 10,60 160,180"

   style="fill:lime;stroke:purple;stroke-width:5;fill-rule:evenodd;">

 </svg>



 </body>

 </html>


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml5_svg_ex) 

 结果：

 抱歉, 你的浏览器不支持内联SVG. 学习更多关于 SVG 教程, 请访问 [SVG 教程](http://www.w3cschool.cc/svg/svg-tutorial.html).

 

#### SVG 与 Canvas两者间的区别

 SVG 是一种使用 XML 描述 2D 图形的语言。

 Canvas 通过 JavaScript 来绘制 2D 图形。

 SVG 基于 XML，这意味着 SVG DOM 中的每个元素都是可用的。您可以为某个元素附加 JavaScript 事件处理器。

 在 SVG 中，每个被绘制的图形均被视为对象。如果 SVG 对象的属性发生变化，那么浏览器能够自动重现图形。

 Canvas 是逐像素进行渲染的。在 canvas 中，一旦图形被绘制完成，它就不会继续得到浏览器的关注。如果其位置发生变化，那么整个场景也需要重新绘制，包括任何或许已被图形覆盖的对象。

 

#### Canvas 与 SVG 的比较

 下表列出了 canvas 与 SVG 之间的一些不同之处。

 

|Canvas|SVG|
|:--|:--|
| 依赖分辨率 不支持事件处理器 弱的文本渲染能力 能够以 .png 或 .jpg 格式保存结果图像 最适合图像密集型的游戏，其中的许多对象会被频繁重绘 | 不依赖分辨率 支持事件处理器 最适合带有大型渲染区域的应用程序（比如谷歌地图） 复杂度高会减慢渲染速度（任何过度使用 DOM 的应用都不快） 不适合游戏应用 |



