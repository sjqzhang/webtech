  #html5headline { font-size:24px; text-align:center; background-color:#D9D9D9; margin:0; padding:0; height:32px; } div.html5header { border:5px solid #D9D9D9; width:625px; height:379px; margin:0; padding:0; } div.html5header #header_image { width:290px; height:235px; float:left; border:10px solid #D9D9D9; } div.html5header #header_image div { width:290px; height:235px; margin:0; padding:0; } div.html5header #header_text { width:275px; height:235px; float:left; margin:0; padding:0; padding-left:10px; padding-right:10px; border:10px solid #D9D9D9; } div.html5header #header_icons { width:628px; height:84px; clear:both; } div.html5header #header_icons ul { list-style-type:none; margin:0; padding:0; overflow:hidden; } div.html5header #header_icons li { float:left; width:104px; height:92px; } div.html5header #header_icons #header_html5{background:url('/images/img_logo_map.gif') 0 0;background-repeat:no-repeat;} div.html5header #header_icons #header_multimedia{background:url('/images/img_logo_map.gif') -104px 0;background-repeat:no-repeat;} div.html5header #header_icons #header_3d{background:url('/images/img_logo_map.gif') -208px 0;background-repeat:no-repeat;} div.html5header #header_icons #header_offline{background:url('/images/img_logo_map.gif') -312px 0;background-repeat:no-repeat;} div.html5header #header_icons #header_form{background:url('/images/img_logo_map.gif') -418px 0;background-repeat:no-repeat;} div.html5header #header_icons #header_css3{background:url('/images/img_logo_map.gif') -521px 0;background-repeat:no-repeat;} #header_text { font-size:120%; } #header_text h2 { text-align:center; } div.html5header #header_icons #header_html5 { background:url('/images/img_logo_map.gif') 0 -92px; background-repeat:no-repeat; } 
HTML5 简介
 

 HTML5 是下一代 HTML 标准。

 
#### HTML5

 
新元素
 新属性
 完全支持 CSS3 
 Video 和 Audio
 2D/3D 制图
 本地存储
 本地 SQL 数据
 Web 应用
 


  HTML5 是下一代 HTML 标准。

  

  你的浏览器不支持 video 标签。 Video courtesy of Big Buck Bunny

 

 

 

 

 

 

   
#### HTML5

 
新元素
 新属性
 完全支持 CSS3 
 Video 和 Audio
 2D/3D 制图
 本地存储
 本地 SQL 数据
 Web 应用
 


  
#### HTML5 多媒体

 使用 HTML5 你可以简单的在网页中播放 视频(video)与音频 (audio) 。

 
HTML5 [<video>](http://www.w3cschool.cc/html/html5-video.html)

 HTML5 [<audio>](http://www.w3cschool.cc/html/html5-audio.html)

 


  
#### HTML5 引用

 使用 HTML5 你可以简单的开发引用

 
本地数据存储
 访问本地文件
 本地 SQL 数据
 缓存引用
 Javascript 工作者
 XHTMLHttpRequest 2
 


  
#### HTML5 图形

 使用 HTML5 你可以简单的绘制图形:

 
使用 [<canvas>](http://www.w3cschool.cc/html/html5-canvas.html) 元素
 使用内联 [SVG](http://www.w3cschool.cc/html/html5-svg.html)

 使用 [CSS3 2D/3D](http://www.w3cschool.cc/css3/default.html)

 


  
#### HTML5 使用 CSS3

 
新选择器
 新属性
 动画
 2D/3D 转换
 圆角
 阴影效果
 可下载的字体
 
了解更多CSS3知识请查看本站的 [CSS3 教程。](http://www.w3cschool.cc/css3/default.html)

 

  
#### 语义要素

 HTML5 添加了很多语义元素如：headers, footers, menus, sections 和 articles。

 
#### HTML5 表单

 新表单元素, 新属性，新输入类型，自动验证。

 

 

  
      


 

 


#### 每一章中的实例

 通过我们的 HTML 编辑器，您能够编辑 HTML，然后点击按钮来查看结果。

  
#### 实例

 
```
 <!DOCTYPE HTML>

 <html>

 <body>



 <video width="320" height="240" controls>

   <source src="http://www.w3cschool.cc/html/movie.mp4" type="video/mp4">

   <source src="http://www.w3cschool.cc/html/movie.ogg" type="video/ogg">

   你的浏览器不支持 video 标签。

 </video>



 </body>

 </html> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml5_video_bear)


 点击 "尝试一下" 按钮查看在线运行结果。

 

#### 什么是 HTML5?

 HTML5 是下一代 HTML 标准。

 HTML , HTML 4.01的上一个版本诞生于 1999 年。自从那以后，Web 世界已经经历了巨变。

 HTML5 仍处于完善之中。然而，大部分现代浏览器已经具备了某些 HTML5 支持。

 

#### HTML5 是如何起步的？

 HTML5 是 W3C 与 WHATWG 合作的结果,WHATWG 指 Web Hypertext Application Technology Working Group。。

 WHATWG 致力于 web 表单和应用程序，而 W3C 专注于 XHTML 2.0。在 2006 年，双方决定进行合作，来创建一个新版本的 HTML。

 HTML5 中的一些有趣的新特性：

 
用于绘画的 canvas 元素
 用于媒介回放的 video 和 audio 元素
 对本地离线存储的更好的支持
 新的特殊内容元素，比如 article、footer、header、nav、section
 新的表单控件，比如 calendar、date、time、email、url、search
 


#### HTML5 <!DOCTYPE>

  <!doctype> 声明必须位于 HTML5 文档中的第一行,使用非常简单:

 
```
 <!DOCTYPE html> 




```
 



#### 最小的HTML5文档

 下面是一个简单的HTML5文档：

 
```
 <!DOCTYPE html>

 <html>

 <head>

 <title>文档标题</title>

 </head>



 <body>

文档内容......

 </body>



 </html> 




```
 



#### HTML5 - 新特性

 HTML5 中的一些有趣的新特性：

 
用于绘画的 canvas 元素
 用于媒介回放的 video 和 audio 元素
 对本地离线存储的更好的支持
 新的特殊内容元素，比如 article、footer、header、nav、section
 新的表单控件，比如 calendar、date、time、email、url、search
 


#### HTML5 浏览器支持

 最新版本的 Safari、Chrome、Firefox 以及 Opera 支持某些 HTML5 特性。Internet Explorer 9 将支持某些 HTML5 特性。

 


#### HTML5 参考手册

 在本站中你可以找到关于HTML5 的标签及属性描述，详细请点击 [HTML5参考手册。](http://www.w3cschool.cc/tags/html-reference.html)

 


