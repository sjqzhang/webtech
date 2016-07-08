 Bootstrap 缩略图
 本章将讲解 Bootstrap 缩略图。大多数站点都需要在网格中布局图像、视频、文本等。Bootstrap 通过缩略图为此提供了一种简便的方式。使用 Bootstrap 创建缩略图的步骤如下：

 
在图像周围添加带有 class .thumbnail 的 <a> 标签。
 这会添加四个像素的内边距（padding）和一个灰色的边框。
 当鼠标悬停在图像上时，会动画显示出图像的轮廓。
 
下面的实例演示了默认的缩略图：

 
```

<!DOCTYPE html>
<html>
<head>
   <title>Bootstrap 实例 - 缩略图</title>
   <link href="http://www.w3cschool.cc/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <script src="http://www.w3cschool.cc/scripts/jquery.min.js"></script>
   <script src="http://www.w3cschool.cc/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="row">
   <div class="col-sm-6 col-md-3">
      <a href="#" class="thumbnail">
         <img src="http://www.w3cschool.cc/wp-content/uploads/2014/06/kittens.jpg" 
         alt="通用的占位符缩略图">
      </a>
   </div>
   <div class="col-sm-6 col-md-3">
      <a href="#" class="thumbnail">
         <img src="http://www.w3cschool.cc/wp-content/uploads/2014/06/kittens.jpg" 
         alt="通用的占位符缩略图">
      </a>
   </div>
   <div class="col-sm-6 col-md-3">
      <a href="#" class="thumbnail">
         <img src="http://www.w3cschool.cc/wp-content/uploads/2014/06/kittens.jpg" 
         alt="通用的占位符缩略图">
      </a>
   </div>
   <div class="col-sm-6 col-md-3">
      <a href="#" class="thumbnail">
         <img src="http://www.w3cschool.cc/wp-content/uploads/2014/06/kittens.jpg" 
         alt="通用的占位符缩略图">
      </a>
   </div>
</div>

</body>
</html>

```
 [尝试一下 »](http://www.w3cschool.cc/try/tryit.php?filename=bootstrap3-thumbnail)

 结果如下所示：

  ![http://www.w3cschool.cc/wp-content/uploads/2014/06/thumbnail_demo.jpg](http://www.w3cschool.cc/wp-content/uploads/2014/06/thumbnail_demo.jpg)


 
#### 添加自定义的内容

 现在我们有了一个基本的缩略图，我们可以向缩略图添加各种 HTML 内容，比如标题、段落或按钮。具体步骤如下：

 
把带有 class .thumbnail 的 <a> 标签改为 <div>。
 在该 <div> 内，您可以添加任何您想要添加的东西。由于这是一个 <div>，我们可以使用默认的基于 span 的命名规则来调整大小。
 如果您想要给多个图像进行分组，请把它们放置在一个无序列表中，且每个列表项向左浮动。
 
下面的实例演示了这点：

 
```

<!DOCTYPE html>
<html>
<head>
   <title>Bootstrap 实例 - 自定义缩略图</title>
   <link href="http://www.w3cschool.cc/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <script src="http://www.w3cschool.cc/scripts/jquery.min.js"></script>
   <script src="http://www.w3cschool.cc/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="row">
   <div class="col-sm-6 col-md-3">
      <div class="thumbnail">
         <img src="http://www.w3cschool.cc/wp-content/uploads/2014/06/kittens.jpg" 
         alt="通用的占位符缩略图">
      </div>
      <div class="caption">
         <h3>缩略图标签</h3>
         <p>一些示例文本。一些示例文本。</p>
         <p>
            <a href="#" class="btn btn-primary" role="button">
               按钮
            </a> 
            <a href="#" class="btn btn-default" role="button">
               按钮
            </a>
         </p>
      </div>
   </div>
   <div class="col-sm-6 col-md-3">
      <div class="thumbnail">
         <img src="http://www.w3cschool.cc/wp-content/uploads/2014/06/kittens.jpg" 
         alt="通用的占位符缩略图">
      </div>
      <div class="caption">
         <h3>缩略图标签</h3>
         <p>一些示例文本。一些示例文本。</p>
         <p>
            <a href="#" class="btn btn-primary" role="button">
               按钮
            </a> 
            <a href="#" class="btn btn-default" role="button">
               按钮
            </a>
         </p>
      </div>
   </div>
   <div class="col-sm-6 col-md-3">
      <div class="thumbnail">
         <img src="http://www.w3cschool.cc/wp-content/uploads/2014/06/kittens.jpg" 
         alt="通用的占位符缩略图">
      </div>
      <div class="caption">
         <h3>缩略图标签</h3>
         <p>一些示例文本。一些示例文本。</p>
         <p>
            <a href="#" class="btn btn-primary" role="button">
               按钮
            </a> 
            <a href="#" class="btn btn-default" role="button">
               按钮
            </a>
         </p>
      </div>
   </div>
   <div class="col-sm-6 col-md-3">
      <div class="thumbnail">
         <img src="http://www.w3cschool.cc/wp-content/uploads/2014/06/kittens.jpg" 
         alt="通用的占位符缩略图">
      </div>
      <div class="caption">
         <h3>缩略图标签</h3>
         <p>一些示例文本。一些示例文本。</p>
         <p>
            <a href="#" class="btn btn-primary" role="button">
               按钮
            </a> 
            <a href="#" class="btn btn-default" role="button">
               按钮
            </a>
         </p>
      </div>
   </div>
</div>

</body>
</html>

```
 [尝试一下 »](http://www.w3cschool.cc/try/tryit.php?filename=bootstrap3-thumbnail-custom)

 结果如下所示：

  ![http://www.w3cschool.cc/wp-content/uploads/2014/06/customthumbnail_demo.jpg](http://www.w3cschool.cc/wp-content/uploads/2014/06/customthumbnail_demo.jpg)


 

