 HTML 视频（Videos）  
在 HTML 中播放视频的方法有很多种。

 

#### HTML视频（Videos）播放

  
#### 实例

 
```
 <video width="320" height="240" controls>

   <source src="http://www.w3cschool.cc/html/movie.mp4" type="video/mp4">

   <source src="http://www.w3cschool.cc/html/movie.ogg" type="video/ogg">

   <source src="http://www.w3cschool.cc/html/movie.webm" type="video/webm">

   <object data="movie.mp4" width="320" height="240">

     <embed src="http://www.w3cschool.cc/html/movie.swf" width="320" height="240">

   </object> 

 </video> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml_video_html5_4) 

 



#### 问题以及解决方法

 在 HTML 中播放视频并不容易！

 您需要谙熟大量技巧，以确保您的视频文件在所有浏览器中（Internet Explorer, Chrome, Firefox, Safari, Opera）和所有硬件上（PC, Mac , iPad, iPhone）都能够播放。

 在本章，W3CSchool 为您总结了问题和解决方法。

 

#### 使用 <embed> 标签

 <embed> 标签的作用是在 HTML 页面中嵌入多媒体元素。

 下面的 HTML 代码显示嵌入网页的 Flash 视频：

  
#### 实例

 
```
 <embed src="http://www.w3cschool.cc/html/intro.swf" height="200" width="200"> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml_videoembed) 

 问题

 
HTML4 无法识别 <embed> 标签。您的页面无法通过验证。
 如果浏览器不支持 Flash，那么视频将无法播放
 iPad 和 iPhone 不能显示 Flash 视频。
 如果您将视频转换为其他格式，那么它仍然不能在所有浏览器中播放。
 


#### 使用 <object> 标签

 <object> 标签的作用是在 HTML 页面中嵌入多媒体元素。

 下面的 HTML 片段显示嵌入网页的一段 Flash 视频：

  
#### 实例

 
```
 <object data="intro.swf" height="200" width="200"></object>


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml_videoobject) 

 

#### 问题:



 
如果浏览器不支持 Flash，将无法播放视频。
 iPad 和 iPhone 不能显示 Flash 视频。
 如果您将视频转换为其他格式，那么它仍然不能在所有浏览器中播放。
 


#### 使用 HTML5 <video> 元素

 HTML5 <video> 标签定义了一个视频或者影片.

 <video> 元素在所有现代浏览器中都支持。

 以下 HTML 片段会显示一段嵌入网页的 ogg、mp4 或 webm 格式的视频：

  
#### 实例

 
```
 <video width="320" height="240" controls>

   <source src="http://www.w3cschool.cc/html/movie.mp4" type="video/mp4">

   <source src="http://www.w3cschool.cc/html/movie.ogg" type="video/ogg">

   <source src="http://www.w3cschool.cc/html/movie.webm" type="video/webm">

 Your browser does not support the video tag.

 </video> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml_video_html5) 

 

#### 问题:



 
您必须把视频转换为很多不同的格式。
 <video> 元素在老式浏览器中无效。
 


#### 最好的 HTML 解决方法

 以下实例中使用了 4 中不同的视频格式。HTML 5 <video> 元素会尝试播放以 mp4、ogg 或 webm 格式中的一种来播放视频。如果均失败，则回退到 <embed> 元素。

  
#### HTML 5 + <object> + <embed>

 
```
 <video width="320" height="240" controls>

   <source src="http://www.w3cschool.cc/html/movie.mp4" type="video/mp4">

   <source src="http://www.w3cschool.cc/html/movie.ogg" type="video/ogg">

   <source src="http://www.w3cschool.cc/html/movie.webm" type="video/webm">

   <object data="movie.mp4" width="320" height="240">

     <embed src="http://www.w3cschool.cc/html/movie.swf" width="320" height="240">

   </object> 

 </video> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml_video_html5_4) 

 

#### 问题:



 
您必须把视频转换为很多不同的格式
 


#### 优酷解决方案

 在 HTML 中显示视频的最简单的方法是使用优酷等视频网站。

 如果您希望在网页中播放视频，那么您可以把视频上传到优酷等视频网站，然后在您的网页中插入 HTML 代码即可播放视频：

 
```
  <embed src="http://player.youku.com/player.php/sid/XMzI2NTc4NTMy/v.swf" width="480" height="400" type="application/x-shockwave-flash"> </embed> 





```
 

#### 使用超链接

 如果网页包含指向媒体文件的超链接，大多数浏览器会使用"辅助应用程序"来播放文件。

 以下代码片段显示指向 AVI 文件的链接。如果用户点击该链接，浏览器会启动"辅助应用程序"，比如 Windows Media Player 来播放这个 AVI 文件：

  
#### 实例

 
```
 <a href="http://www.w3cschool.cc/html/intro.swf">Play a video file</a> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml_videolink) 

 



#### 关于内联视频的说明

 当视频被包含在网页中时，它被称为内联视频。

 如果您打算在 web 应用程序中使用内联视频，您需要意识到很多人都觉得内联视频令人恼火。

 同时请注意，用户可能已经关闭了浏览器中的内联视频选项。

 我们最好的建议是只在用户希望看到内联视频的地方包含它们。一个正面的例子是，在用户需要看到视频并点击某个链接时，会打开页面然后播放视频。

 

#### HTML 多媒体标签

 New : HTML5新标签.

 

|标签|描述|
|:--|:--|
|<embed>|定义内嵌对象。HTML4 中不赞成，HTML5 中允许。|
|<object>|定义内嵌对象。|
|<param>|定义对象的参数。|
| <audio>New |定义了声音内容|
| <video>New |定义一个视频或者影片|
| <source>New |定义了media元素的多媒体资源(<video> 和 <audio>)|
| <track>New |规定media元素的字幕文件或其他包含文本的文件 (<video> 和<audio>)|



