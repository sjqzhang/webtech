 Bootstrap 字体图标(Glyphicons)
  本章将讲解字体图标(Glyphicons)，并通过一些实例了解它的使用。Bootstrap 捆绑了 200 多种字体格式的字形。首先让我们先来理解一下什么是字体图标。

 

 

#### 什么是字体图标？

 字体图标是在 Web 项目中使用的图标字体。虽然，[Glyphicons Halflings](http://www.w3cschool.cc//glyphicons.com/) 需要商业许可，但是您可以通过基于项目的 Bootstrap 来免费使用这些图标。

 为了表示对图标作者的感谢，希望您在使用时加上 GLYPHICONS 网站的链接。 

 

#### 获取字体图标

 我们已经在 [环境安装](http://www.w3cschool.cc/bootstrap/bootstrap-environment-setup.html) 章节下载了 Bootstrap 3.x 版本，并理解了它的目录结构。在 fonts 文件夹内可以找到字体图标，它包含了下列这些文件：

 
glyphicons-halflings-regular.eot
 glyphicons-halflings-regular.svg
 glyphicons-halflings-regular.ttf
 glyphicons-halflings-regular.woff
 
相关的 CSS 规则写在 dist 文件夹内的 css 文件夹内的 bootstrap.css 和 bootstrap-min.css 文件上。

 
#### 字体图标列表

 [点击这里，查看可用的字体图标列表。](http://www.w3cschool.cc/try/demo_source/bootstrap3-glyph-icons.htm)

 

#### CSS 规则解释

 下面的 CSS 规则构成 glyphicon class。

 
```

@font-face {
  font-family: 'Glyphicons Halflings';
  src: url('../fonts/glyphicons-halflings-regular.eot');
  src: url('../fonts/glyphicons-halflings-regular.eot?#iefix') format('embedded-opentype'), url('../fonts/glyphicons-halflings-regular.woff') format('woff'), url('../fonts/glyphicons-halflings-regular.ttf') format('truetype'), url('../fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular') format('svg');
}

.glyphicon {
  position: relative;
  top: 1px;
  display: inline-block;
  font-family: 'Glyphicons Halflings';
  -webkit-font-smoothing: antialiased;
  font-style: normal;
  font-weight: normal;
  line-height: 1;
  -moz-osx-font-smoothing: grayscale;
}

```
 所以 font-face 规则实际上是在找到 glyphicons 地方声明 font-family 和位置。

 .glyphicon class 声明一个从顶部偏移 1px 的相对位置，呈现为 inline-block，声明字体，规定 font-style 和 font-weight 为 normal，设置行高为 1。除此之外，使用 -webkit-font-smoothing: antialiased 和 -moz-osx-font-smoothing: grayscale; 获得跨浏览器的一致性。

 然后，这里的 


 



```

.glyphicon:empty {
  width: 1em;
}

```
 是空的 glyphicon。

 这里有 200 个 class，每个 class 针对一个图标。这些 class 的常见格式如下：

 
```

.glyphicon-keyword:before {
  content: "hexvalue";
}

```
 比如，使用的 user 图标，它的 class 如下：

 
```

.glyphicon-user:before {
  content: "\e008";
}

```
 

#### 用法

 如需使用图标，只需要简单地使用下面的代码即可。请在图标和文本之间保留适当的空间。

 
```

<span class="glyphicon glyphicon-search"></span>

```
 下面的实例演示了如何使用字体图标：

 
```

<!DOCTYPE html>
<html>
<head>
   <title>Bootstrap 实例 - 如何使用字体图标</title>
   <link href="http://www.w3cschool.cc/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <script src="http://www.w3cschool.cc/scripts/jquery.min.js"></script>
   <script src="http://www.w3cschool.cc/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<p>
   <button type="button" class="btn btn-default">
      <span class="glyphicon glyphicon-sort-by-attributes"></span>
   </button>
   <button type="button" class="btn btn-default">
      <span class="glyphicon glyphicon-sort-by-attributes-alt"></span>
   </button>
   <button type="button" class="btn btn-default">
      <span class="glyphicon glyphicon-sort-by-order"></span>
   </button>
   <button type="button" class="btn btn-default">
      <span class="glyphicon glyphicon-sort-by-order-alt"></span>
   </button>
</p>
<button type="button" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-user"></span> User
</button>
<button type="button" class="btn btn-default btn-sm">
  <span class="glyphicon glyphicon-user"></span> User
</button>
<button type="button" class="btn btn-default btn-xs">
  <span class="glyphicon glyphicon-user"></span> User
</button>


</body>
</html>

```
 [尝试一下 »](http://www.w3cschool.cc/try/try2.php?filename=bootstrap3-glyphicons)

 结果如下所示：

  ![http://www.w3cschool.cc/wp-content/uploads/2014/06/glyphicon_demo.jpg](http://www.w3cschool.cc/wp-content/uploads/2014/06/glyphicon_demo.jpg)


 

#### 带有导航栏的字体图标

 
```

<!DOCTYPE html>
<html>
  <head>
    <title>导航栏的字体图标</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="http://apps.bdimg.com/libs/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
    padding-top: 50px;
    padding-left: 50px;
    }
    </style>
    <!--[if lt IE 9]>
      <script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#"><span class="glyphicon glyphicon-home">Home</span></a></li>
            <li><a href="#shop"><span class="glyphicon glyphicon-shopping-cart">Shop</span></a></li>
            <li><a href="#support"><span class="glyphicon glyphicon-headphones">Support</span></a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </div>
    <!-- jQuery (Bootstrap 插件需要引入) -->
    <script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- 包含了所有编译插件 -->
    <script src="http://apps.bdimg.com/libs/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>
</html>		

```
 [尝试一下 »](http://www.w3cschool.cc/try/try2.php?filename=bootstrap-using-glyphicons-navbar)

 

#### 定制字体图标

 我们已经看到如何使用字体图标，接下来我们看看如何定制字体图标。

 我们将以上面的实例开始，并通过改变字体尺寸、颜色和应用文本阴影来进行定制图标。

 下面是开始的代码：

 
```

<button type="button" class="btn btn-primary btn-lg">
  <span class="glyphicon glyphicon-user"></span> User
</button>

```
 效果如下所示：

  
#### 定制字体尺寸

 通过增加或减少图标的字体尺寸，您可以让图标看起来更大或更小。

 
```

<button type="button" class="btn btn-primary btn-lg" style="font-size: 60px">
  <span class="glyphicon glyphicon-user"></span> User
</button>

```
  
#### 定制字体颜色

 
```

<button type="button" class="btn btn-primary btn-lg" style="color: rgb(212, 106, 64);">
  <span class="glyphicon glyphicon-user"></span> User
</button>

```
  
#### 应用文本阴影

 
```

<button type="button" class="btn btn-primary btn-lg" style="text-shadow: black 5px 3px 3px;">
  <span class="glyphicon glyphicon-user"></span> User
</button>

```
  
#### 在线定制字体图标

 [点击这里，定制字体图标 »](http://www.w3cschool.cc/try/demo_source/bootstrap-glyph-customization.htm)

 

#### 图标列表

 

|图标|类名|实例|
||:--|:--|
||glyphicon glyphicon-asterisk|尝试一下|
||glyphicon glyphicon-plus|尝试一下|
||glyphicon glyphicon-minus|尝试一下|
||glyphicon glyphicon-euro|尝试一下|
||glyphicon glyphicon-cloud|尝试一下|
||glyphicon glyphicon-envelope|尝试一下|
||glyphicon glyphicon-pencil|尝试一下|
||glyphicon glyphicon-glass|尝试一下|
||glyphicon glyphicon-music|尝试一下|
||glyphicon glyphicon-search|尝试一下|
||glyphicon glyphicon-heart|尝试一下|
||glyphicon glyphicon-star|尝试一下|
||glyphicon glyphicon-star-empty|尝试一下|
||glyphicon glyphicon-user|尝试一下|
||glyphicon glyphicon-film|尝试一下|
||glyphicon glyphicon-th-large|尝试一下|
||glyphicon glyphicon-th|尝试一下|
||glyphicon glyphicon-th-list|尝试一下|
||glyphicon glyphicon-ok|尝试一下|
||glyphicon glyphicon-remove|尝试一下|
||glyphicon glyphicon-zoom-in|尝试一下|
||glyphicon glyphicon-zoom-out|尝试一下|
||glyphicon glyphicon-off|尝试一下|
||glyphicon glyphicon-signal|尝试一下|
||glyphicon glyphicon-cog|尝试一下|
||glyphicon glyphicon-trash|尝试一下|
||glyphicon glyphicon-home|尝试一下|
||glyphicon glyphicon-file|尝试一下|
||glyphicon glyphicon-time|尝试一下|
||glyphicon glyphicon-road|尝试一下|
||glyphicon glyphicon-download-alt|尝试一下|
||glyphicon glyphicon-download|尝试一下|
||glyphicon glyphicon-upload|尝试一下|
||glyphicon glyphicon-inbox|尝试一下|
||glyphicon glyphicon-play-circle|尝试一下|
||glyphicon glyphicon-repeat|尝试一下|
||glyphicon glyphicon-refresh|尝试一下|
||glyphicon glyphicon-list-alt|尝试一下|
||glyphicon glyphicon-lock|尝试一下|
||glyphicon glyphicon-flag|尝试一下|
||glyphicon glyphicon-headphones|尝试一下|
||glyphicon glyphicon-volume-off|尝试一下|
||glyphicon glyphicon-volume-down|尝试一下|
||glyphicon glyphicon-volume-up|尝试一下|
||glyphicon glyphicon-qrcode|尝试一下|
||glyphicon glyphicon-barcode|尝试一下|
||glyphicon glyphicon-tag|尝试一下|
||glyphicon glyphicon-tags|尝试一下|
||glyphicon glyphicon-book|尝试一下|
||glyphicon glyphicon-bookmark|尝试一下|
||glyphicon glyphicon-print|尝试一下|
||glyphicon glyphicon-camera|尝试一下|
||glyphicon glyphicon-font|尝试一下|
||glyphicon glyphicon-bold|尝试一下|
||glyphicon glyphicon-italic|尝试一下|
||glyphicon glyphicon-text-height|尝试一下|
||glyphicon glyphicon-text-width|尝试一下|
||glyphicon glyphicon-align-left|尝试一下|
||glyphicon glyphicon-align-center|尝试一下|
||glyphicon glyphicon-align-right|尝试一下|
||glyphicon glyphicon-align-justify|尝试一下|
||glyphicon glyphicon-list|尝试一下|
||glyphicon glyphicon-indent-left|尝试一下|
||glyphicon glyphicon-indent-right|尝试一下|
||glyphicon glyphicon-facetime-video|尝试一下|
||glyphicon glyphicon-picture|尝试一下|
||glyphicon glyphicon-map-marker|尝试一下|
||glyphicon glyphicon-adjust|尝试一下|
||glyphicon glyphicon-tint|尝试一下|
||glyphicon glyphicon-edit|尝试一下|
||glyphicon glyphicon-share|尝试一下|
||glyphicon glyphicon-check|尝试一下|
||glyphicon glyphicon-move|尝试一下|
||glyphicon glyphicon-step-backward|尝试一下|
||glyphicon glyphicon-fast-backward|尝试一下|
||glyphicon glyphicon-backward|尝试一下|
||glyphicon glyphicon-play|尝试一下|
||glyphicon glyphicon-pause|尝试一下|
||glyphicon glyphicon-stop|尝试一下|
||glyphicon glyphicon-forward|尝试一下|
||glyphicon glyphicon-fast-forward|尝试一下|
||glyphicon glyphicon-step-forward|尝试一下|
||glyphicon glyphicon-eject|尝试一下|
||glyphicon glyphicon-chevron-left|尝试一下|
||glyphicon glyphicon-chevron-right|尝试一下|
||glyphicon glyphicon-plus-sign|尝试一下|
||glyphicon glyphicon-minus-sign|尝试一下|
||glyphicon glyphicon-remove-sign|尝试一下|
||glyphicon glyphicon-ok-sign|尝试一下|
||glyphicon glyphicon-question-sign|尝试一下|
||glyphicon glyphicon-info-sign|尝试一下|
||glyphicon glyphicon-screenshot|尝试一下|
||glyphicon glyphicon-remove-circle|尝试一下|
||glyphicon glyphicon-ok-circle|尝试一下|
||glyphicon glyphicon-ban-circle|尝试一下|
||glyphicon glyphicon-arrow-left|尝试一下|
||glyphicon glyphicon-arrow-right|尝试一下|
||glyphicon glyphicon-arrow-up|尝试一下|
||glyphicon glyphicon-arrow-down|尝试一下|
||glyphicon glyphicon-share-alt|尝试一下|
||glyphicon glyphicon-resize-full|尝试一下|
||glyphicon glyphicon-resize-small|尝试一下|
||glyphicon glyphicon-exclamation-sign|尝试一下|
||glyphicon glyphicon-gift|尝试一下|
||glyphicon glyphicon-leaf|尝试一下|
||glyphicon glyphicon-fire|尝试一下|
||glyphicon glyphicon-eye-open|尝试一下|
||glyphicon glyphicon-eye-close|尝试一下|
||glyphicon glyphicon-warning-sign|尝试一下|
||glyphicon glyphicon-plane|尝试一下|
||glyphicon glyphicon-calendar|尝试一下|
||glyphicon glyphicon-random|尝试一下|
||glyphicon glyphicon-comment|尝试一下|
||glyphicon glyphicon-magnet|尝试一下|
||glyphicon glyphicon-chevron-up|尝试一下|
||glyphicon glyphicon-chevron-down|尝试一下|
||glyphicon glyphicon-retweet|尝试一下|
||glyphicon glyphicon-shopping-cart|尝试一下|
||glyphicon glyphicon-folder-close|尝试一下|
||glyphicon glyphicon-folder-open|尝试一下|
||glyphicon glyphicon-resize-vertical|尝试一下|
||glyphicon glyphicon-resize-horizontal|尝试一下|
||glyphicon glyphicon-hdd|尝试一下|
||glyphicon glyphicon-bullhorn|尝试一下|
||glyphicon glyphicon-bell|尝试一下|
||glyphicon glyphicon-certificate|尝试一下|
||glyphicon glyphicon-thumbs-up|尝试一下|
||glyphicon glyphicon-thumbs-down|尝试一下|
||glyphicon glyphicon-hand-right|尝试一下|
||glyphicon glyphicon-hand-left|尝试一下|
||glyphicon glyphicon-hand-up|尝试一下|
||glyphicon glyphicon-hand-down|尝试一下|
||glyphicon glyphicon-circle-arrow-right|尝试一下|
||glyphicon glyphicon-circle-arrow-left|尝试一下|
||glyphicon glyphicon-circle-arrow-up|尝试一下|
||glyphicon glyphicon-circle-arrow-down|尝试一下|
||glyphicon glyphicon-globe|尝试一下|
||glyphicon glyphicon-wrench|尝试一下|
||glyphicon glyphicon-tasks|尝试一下|
||glyphicon glyphicon-filter|尝试一下|
||glyphicon glyphicon-briefcase|尝试一下|
||glyphicon glyphicon-fullscreen|尝试一下|
||glyphicon glyphicon-dashboard|尝试一下|
||glyphicon glyphicon-paperclip|尝试一下|
||glyphicon glyphicon-heart-empty|尝试一下|
||glyphicon glyphicon-link|尝试一下|
||glyphicon glyphicon-phone|尝试一下|
||glyphicon glyphicon-pushpin|尝试一下|
||glyphicon glyphicon-usd|尝试一下|
||glyphicon glyphicon-gbp|尝试一下|
||glyphicon glyphicon-sort|尝试一下|
||glyphicon glyphicon-sort-by-alphabet|尝试一下|
||glyphicon glyphicon-sort-by-alphabet-alt|尝试一下|
||glyphicon glyphicon-sort-by-order|尝试一下|
||glyphicon glyphicon-sort-by-order-alt|尝试一下|
||glyphicon glyphicon-sort-by-attributes|尝试一下|
||glyphicon glyphicon-sort-by-attributes-alt|尝试一下|
||glyphicon glyphicon-unchecked|尝试一下|
||glyphicon glyphicon-expand|尝试一下|
||glyphicon glyphicon-collapse-down|尝试一下|
||glyphicon glyphicon-collapse-up|尝试一下|
||glyphicon glyphicon-log-in|尝试一下|
||glyphicon glyphicon-flash|尝试一下|
||glyphicon glyphicon-log-out|尝试一下|
||glyphicon glyphicon-new-window|尝试一下|
||glyphicon glyphicon-record|尝试一下|
||glyphicon glyphicon-save|尝试一下|
||glyphicon glyphicon-open|尝试一下|
||glyphicon glyphicon-saved|尝试一下|
||glyphicon glyphicon-import|尝试一下|
||glyphicon glyphicon-export|尝试一下|
||glyphicon glyphicon-send|尝试一下|
||glyphicon glyphicon-floppy-disk|尝试一下|
||glyphicon glyphicon-floppy-saved|尝试一下|
||glyphicon glyphicon-floppy-remove|尝试一下|
||glyphicon glyphicon-floppy-save|尝试一下|
||glyphicon glyphicon-floppy-open|尝试一下|
||glyphicon glyphicon-credit-card|尝试一下|
||glyphicon glyphicon-transfer|尝试一下|
||glyphicon glyphicon-cutlery|尝试一下|
||glyphicon glyphicon-header|尝试一下|
||glyphicon glyphicon-compressed|尝试一下|
||glyphicon glyphicon-earphone|尝试一下|
||glyphicon glyphicon-phone-alt|尝试一下|
||glyphicon glyphicon-tower|尝试一下|
||glyphicon glyphicon-stats|尝试一下|
||glyphicon glyphicon-sd-video|尝试一下|
||glyphicon glyphicon-hd-video|尝试一下|
||glyphicon glyphicon-subtitles|尝试一下|
||glyphicon glyphicon-sound-stereo|尝试一下|
||glyphicon glyphicon-sound-dolby|尝试一下|
||glyphicon glyphicon-sound-5-1|尝试一下|
||glyphicon glyphicon-sound-6-1|尝试一下|
||glyphicon glyphicon-sound-7-1|尝试一下|
||glyphicon glyphicon-copyright-mark|尝试一下|
||glyphicon glyphicon-registration-mark|尝试一下|
||glyphicon glyphicon-cloud-download|尝试一下|
||glyphicon glyphicon-cloud-upload|尝试一下|
||glyphicon glyphicon-tree-conifer|尝试一下|
||glyphicon glyphicon-tree-deciduous|尝试一下|



