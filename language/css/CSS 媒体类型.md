 CSS 媒体类型  
媒体类型允许你指定文件将如何在不同媒体呈现。该文件可以以不同的方式显示在屏幕上，在纸张上，或听觉浏览器等等。 

 

#### 媒体类型

 一些CSS属性只设计了某些媒体。例如"voice-family"属性是专为听觉用户代理。其他一些属性可用于不同的媒体类型。例如，"font-size"属性可用于屏幕和印刷媒体，但有不同的值。屏幕和纸上的文件不同，通常需要一个更大的字体，sans - serif字体比较适合在屏幕上阅读，而serif字体更容易在纸上阅读。

 

#### @media 规则

  @media 规则允许在相同样式表为不同媒体设置不同的样式。

 在下面的例子告诉我们浏览器屏幕上显示一个14像素的Verdana字体样式。但是如果页面打印，将是10个像素的Times字体。请注意，font-weight在屏幕上和纸上设置为粗体：

 
```
 <html>

 <head>

 <style>

 @media screen

   {

   p.test {font-family:verdana,sans-serif;font-size:14px;}

   }

@media print

   {

   p.test {font-family:times,serif;font-size:10px;}

   }

@media screen,print

   {

   p.test {font-weight:bold;}

   }

 </style>

 </head>



 <body>

....

</body>

 </html>




```
 你可以自己尝试看看 ! 如果您使用的是Mozilla / Firefox或IE5+打印此页，你会看到，"Media Types"将使用另一种比其他文本字体大小小点的字体显示。

 

#### 其他媒体类型

 注意：媒体类型名称不区分大小写。

 

|媒体类型|描述|
|:--|:--|
|all|用于所有的媒体设备。|
|aural|用于语音和音频合成器。|
|braille|用于盲人用点字法触觉回馈设备。|
|embossed|用于分页的盲人用点字法打印机。|
|handheld|用于小的手持的设备。|
|print|用于打印机。|
|projection|用于方案展示，比如幻灯片。|
|screen|用于电脑显示器。|
|tty|用于使用固定密度字母栅格的媒体，比如电传打字机和终端。|
|tv|用于电视机类型的设备。|



