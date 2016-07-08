 jQuery Mobile 安装  

#### 在你的网页中添加 jQuery Mobile

 你可以通过以下几种方式将jQuery Mobile添加到你的网页中：

 
从 CDN 中加载 jQuery Mobile (推荐)
  从jQuerymobile.com 下载 jQuery Mobile库
 


#### 从 CDN 中加载 jQuery Mobile

 

| CDN的全称是Content Delivery Network，即内容分发网络。其基本思路是尽可能避开互联网上有可能影响数据传输速度和稳定性的瓶颈和环节，使内容传输的更快、更稳定。.|

使用 jQuery 内核, 你不需要在电脑上安装任何东西; 你仅仅需要在你的网页中加载以下层叠样式 (.css) 和 JavaScript 库 (.js) 就能够使用 jQuery Mobile:

  
#### jQuery Mobile CDN:

 
```
 <head>

 <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css">

 <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>

 <script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>

 </head> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_lib_jquery) 

 



#### 下载 jQuery Mobile

 如果你想将 jQuery Mobile 放于你的主机中,你可以从 [jQuerymobile.com](http://www.w3cschool.cc//jquerymobile.com/download/)下载该文件。

 
```
 <head>

 <link rel=stylesheet href=jquery.mobile-1.3.2.css>

<script src=jquery.js></script>

 <script src=jquery.mobile-1.3.2.js></script>

 </head> 




```
 提示： 将下载的文件放置于与网页同一目录下。



 

|  你是否想知道为什么在 <script> 标签中 没有插入 type="text/javascript" ? 在 HTML5 已经不需要该属性。 JavaScript 在所有现代浏览器中是 HTML5 的默认脚本语言！|



