 Bootstrap 进度条
  本章将讲解 Bootstrap 进度条。在本教程中，您将看到如何使用 Bootstrap 创建加载、重定向或动作状态的进度条。

 
```

![http://www.w3cschool.cc/images/quote.png](http://www.w3cschool.cc/images/quote.png)Bootstrap 进度条使用 CSS3 过渡和动画来获得该效果。Internet Explorer 9 及之前的版本和旧版的 Firefox 不支持该特性，Opera 12 不支持动画。
```
 

 
#### 默认的进度条

 创建一个基本的进度条的步骤如下：

 
添加一个带有 class .progress 的 <div>。
 接着，在上面的 <div> 内，添加一个带有 class .progress-bar 的空的 <div>。
 添加一个带有百分比表示的宽度的 style 属性，例如 style="60%"; 表示进度条在 60% 的位置。
 
让我们看看下面的实例：

 
```

<!DOCTYPE html>
<html>
<head>
   <title>Bootstrap 实例 - 进度条</title>
   <link href="http://www.w3cschool.cc/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <script src="http://www.w3cschool.cc/scripts/jquery.min.js"></script>
   <script src="http://www.w3cschool.cc/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="progress">
   <div class="progress-bar" role="progressbar" aria-valuenow="60" 
      aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
      <span class="sr-only">40% 完成</span>
   </div>
</div>

</body>
</html>

```
 [尝试一下 »](http://www.w3cschool.cc/try/tryit.php?filename=bootstrap3-progressbar)

 结果如下所示：

  ![http://www.w3cschool.cc/wp-content/uploads/2014/06/progressbar_demo.jpg](http://www.w3cschool.cc/wp-content/uploads/2014/06/progressbar_demo.jpg)


 
#### 交替的进度条

 创建不同样式的进度条的步骤如下：

 
添加一个带有 class .progress 的 <div>。
 接着，在上面的 <div> 内，添加一个带有 class .progress-bar 和 class progress-bar-* 的空的 <div>。其中，* 可以是 success、info、warning、danger。
 添加一个带有百分比表示的宽度的 style 属性，例如 style="60%"; 表示进度条在 60% 的位置。
 
让我们看看下面的实例：

 
```

<!DOCTYPE html>
<html>
<head>
   <title>Bootstrap 实例 - 交替的进度条</title>
   <link href="http://www.w3cschool.cc/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <script src="http://www.w3cschool.cc/scripts/jquery.min.js"></script>
   <script src="http://www.w3cschool.cc/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="progress">
   <div class="progress-bar progress-bar-success" role="progressbar" 
      aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" 	
      style="width: 90%;">
      <span class="sr-only">90% 完成（成功）</span>
   </div>
</div>
<div class="progress">
   <div class="progress-bar progress-bar-info" role="progressbar" 
      aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" 	
      style="width: 30%;">
      <span class="sr-only">30% 完成（信息）</span>
   </div>
</div>
<div class="progress">
   <div class="progress-bar progress-bar-warning" role="progressbar" 
      aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" 
      style="width: 20%;">
      <span class="sr-only">20% 完成（警告）</span>
   </div>
</div>
<div class="progress">
   <div class="progress-bar progress-bar-danger" role="progressbar" 
      aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" 	
      style="width: 10%;">
      <span class="sr-only">10% 完成（危险）</span>
   </div>
</div>

</body>
</html>

```
 [尝试一下 »](http://www.w3cschool.cc/try/tryit.php?filename=bootstrap3-progressbar-alternate)

 结果如下所示：

  ![http://www.w3cschool.cc/wp-content/uploads/2014/06/alternateprogressbar_demo.jpg](http://www.w3cschool.cc/wp-content/uploads/2014/06/alternateprogressbar_demo.jpg)


 
#### 条纹的进度条

 创建一个条纹的进度条的步骤如下：

 
添加一个带有 class .progress 和 .progress-striped 的 <div>。
 接着，在上面的 <div> 内，添加一个带有 class .progress-bar 和 class progress-bar-* 的空的 <div>。其中，* 可以是 success、info、warning、danger。
 添加一个带有百分比表示的宽度的 style 属性，例如 style="60%"; 表示进度条在 60% 的位置。
 
让我们看看下面的实例：

 
```

<!DOCTYPE html>
<html>
<head>
   <title>Bootstrap 实例 - 条纹的进度条</title>
   <link href="http://www.w3cschool.cc/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <script src="http://www.w3cschool.cc/scripts/jquery.min.js"></script>
   <script src="http://www.w3cschool.cc/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="progress progress-striped">
   <div class="progress-bar progress-bar-success" role="progressbar" 
      aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" 	
      style="width: 90%;">
      <span class="sr-only">90% 完成（成功）</span>
   </div>
</div>
<div class="progress progress-striped">
   <div class="progress-bar progress-bar-info" role="progressbar"
      aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" 	
      style="width: 30%;">
      <span class="sr-only">30% 完成（信息）</span>
   </div>
</div>
<div class="progress progress-striped">
   <div class="progress-bar progress-bar-warning" role="progressbar" 
      aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" 	
      style="width: 20%;">
      <span class="sr-only">20% 完成（警告）</span>
   </div>
</div>
<div class="progress progress-striped">
   <div class="progress-bar progress-bar-danger" role="progressbar" 
      aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" 	
      style="width: 10%;">
      <span class="sr-only">10% 完成（危险）</span>
   </div>
</div>

</body>
</html>

```
 [尝试一下 »](http://www.w3cschool.cc/try/tryit.php?filename=bootstrap3-progressbar-striped)

 结果如下所示：

  ![http://www.w3cschool.cc/wp-content/uploads/2014/06/stripedprogressbar_demo.jpg](http://www.w3cschool.cc/wp-content/uploads/2014/06/stripedprogressbar_demo.jpg)


 
#### 动画的进度条

 创建一个动画的进度条的步骤如下：

 
添加一个带有 class .progress 和 .progress-striped 的 <div>。同时添加 class .active。
 接着，在上面的 <div> 内，添加一个带有 class .progress-bar 的空的 <div>。
 添加一个带有百分比表示的宽度的 style 属性，例如 style="60%"; 表示进度条在 60% 的位置。
 
这将会使条纹具有从右向左的运动感。

 让我们看看下面的实例：

 
```

<!DOCTYPE html>
<html>
<head>
   <title>Bootstrap 实例 - 动画的进度条</title>
   <link href="http://www.w3cschool.cc/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <script src="http://www.w3cschool.cc/scripts/jquery.min.js"></script>
   <script src="http://www.w3cschool.cc/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="progress progress-striped active">
   <div class="progress-bar progress-bar-success" role="progressbar" 
      aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" 
      style="width: 40%;">
      <span class="sr-only">40% 完成</span>
   </div>
</div>

</body>
</html>

```
 [尝试一下 »](http://www.w3cschool.cc/try/tryit.php?filename=bootstrap3-progressbar-animated)

 结果如下所示：

  ![http://www.w3cschool.cc/wp-content/uploads/2014/06/animatedprogressbar_demo.jpg](http://www.w3cschool.cc/wp-content/uploads/2014/06/animatedprogressbar_demo.jpg)


 
#### 堆叠的进度条

 您甚至可以堆叠多个进度条。把多个进度条放在相同的 .progress 中即可实现堆叠，如下面的实例所示：

 
```

<!DOCTYPE html>
<html>
<head>
   <title>Bootstrap 实例 - 堆叠的进度条</title>
   <link href="http://www.w3cschool.cc/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <script src="http://www.w3cschool.cc/scripts/jquery.min.js"></script>
   <script src="http://www.w3cschool.cc/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="progress">
   <div class="progress-bar progress-bar-success" role="progressbar" 
      aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" 
      style="width: 40%;">
      <span class="sr-only">40% 完成</span>
   </div>
   <div class="progress-bar progress-bar-info" role="progressbar" 
      aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" 	
      style="width: 30%;">
      <span class="sr-only">30% 完成（信息）</span>
   </div>
   <div class="progress-bar progress-bar-warning" role="progressbar" 
      aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" 	
      style="width: 20%;">
      <span class="sr-only">20% 完成（警告）</span>
   </div>
</div>

</body>
</html>

```
 [尝试一下 »](http://www.w3cschool.cc/try/tryit.php?filename=bootstrap3-progressbar-stacked)

 结果如下所示：

  ![http://www.w3cschool.cc/wp-content/uploads/2014/06/stackedprogressbar_demo.jpg](http://www.w3cschool.cc/wp-content/uploads/2014/06/stackedprogressbar_demo.jpg)


 

