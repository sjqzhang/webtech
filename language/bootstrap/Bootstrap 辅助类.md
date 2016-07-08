 Bootstrap 帮助器类
  本章将讨论 Bootstrap 中的一些可能会派上用场的帮助器类。

 

 
#### 关闭图标

 使用通用的关闭图标来关闭模态框和警告框。使用 class close 得到关闭图标。

 
```

<!DOCTYPE html>
<html>
<head>
   <title>Bootstrap 实例 - 关闭图标</title>
   <link href="http://www.w3cschool.cc/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <script src="http://www.w3cschool.cc/scripts/jquery.min.js"></script>
   <script src="http://www.w3cschool.cc/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<p>关闭图标实例
   <button type="button" class="close" aria-hidden="true">
      &amp;times;
   </button>
</p>

</body>
</html>

```
 [尝试一下 »](http://www.w3cschool.cc/try/tryit.php?filename=bootstrap3-helper-closeicon)

 结果如下所示：

  ![http://www.w3cschool.cc/wp-content/uploads/2014/06/closeicon_demo.jpg](http://www.w3cschool.cc/wp-content/uploads/2014/06/closeicon_demo.jpg)


 
#### 插入符

 使用插入符表示下拉功能和方向。使用带有 class caret 的 <span> 元素得到该功能。

 
```

<!DOCTYPE html>
<html>
<head>
   <title>Bootstrap 实例 - 插入符</title>
   <link href="http://www.w3cschool.cc/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <script src="http://www.w3cschool.cc/scripts/jquery.min.js"></script>
   <script src="http://www.w3cschool.cc/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<p>插入符实例
   <span class="caret"></span>
</p>

</body>
</html>

```
 [尝试一下 »](http://www.w3cschool.cc/try/tryit.php?filename=bootstrap3-helper-caret)

 结果如下所示：

  ![http://www.w3cschool.cc/wp-content/uploads/2014/06/caret_demo.jpg](http://www.w3cschool.cc/wp-content/uploads/2014/06/caret_demo.jpg)


 
#### 快速浮动

 您可以分别使用 class pull-left 或 pull-right 来把元素向左或向右浮动。下面的实例演示了这点。

 
```

<!DOCTYPE html>
<html>
<head>
   <title>Bootstrap 实例 - 快速浮动</title>
   <link href="http://www.w3cschool.cc/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <script src="http://www.w3cschool.cc/scripts/jquery.min.js"></script>
   <script src="http://www.w3cschool.cc/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="pull-left">
   向左快速浮动
</div>
<div class="pull-right">
   向右快速浮动
</div>


</body>
</html>

```
 [尝试一下 »](http://www.w3cschool.cc/try/tryit.php?filename=bootstrap3-helper-quickfloat)

 结果如下所示：

  ![http://www.w3cschool.cc/wp-content/uploads/2014/06/quickfloat_demo.jpg](http://www.w3cschool.cc/wp-content/uploads/2014/06/quickfloat_demo.jpg)


 如需对齐导航栏中的组件，请使用 .navbar-left 或 .navbar-right 代替。请查看 [Bootstrap 导航栏](http://www.w3cschool.cc/bootstrap/bootstrap-navbar.html)。

 
#### 居中内容块

 使用 class center-block 来居中元素。

 
```

<!DOCTYPE html>
<html>
<head>
   <title>Bootstrap 实例 - 居中内容块</title>
   <link href="http://www.w3cschool.cc/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <script src="http://www.w3cschool.cc/scripts/jquery.min.js"></script>
   <script src="http://www.w3cschool.cc/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="row">
   <div class="center-block" style="width:200px;background-color:#ccc;">
      这是 center-block 实例
   </div>
</div>

</body>
</html>

```
 [尝试一下 »](http://www.w3cschool.cc/try/tryit.php?filename=bootstrap3-helper-centercontentblock)

 结果如下所示：

  ![http://www.w3cschool.cc/wp-content/uploads/2014/06/centercontentblock_demo.jpg](http://www.w3cschool.cc/wp-content/uploads/2014/06/centercontentblock_demo.jpg)


 
#### 清除浮动

 如需清除元素的浮动，请使用 .clearfix class。

 
```

<!DOCTYPE html>
<html>
<head>
   <title>Bootstrap 实例 - 清除浮动</title>
   <link href="http://www.w3cschool.cc/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <script src="http://www.w3cschool.cc/scripts/jquery.min.js"></script>
   <script src="http://www.w3cschool.cc/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="clearfix"  style="background: #D8D8D8;border: 1px solid #000;padding: 10px;">
   <div class="pull-left" style="background:#58D3F7;">
      向左快速浮动
   </div>
   <div class="pull-right" style="background: #DA81F5;">
      向右快速浮动
   </div>
</div>

</body>
</html>

```
 [尝试一下 »](http://www.w3cschool.cc/try/tryit.php?filename=bootstrap3-helper-clearfix)

 结果如下所示：

  ![http://www.w3cschool.cc/wp-content/uploads/2014/06/clearfix_demo.jpg](http://www.w3cschool.cc/wp-content/uploads/2014/06/clearfix_demo.jpg)


 
#### 显示和隐藏内容

 您可以通过使用 class .show 和 .hidden 来强行设置元素显示或隐藏（包括屏幕阅读器）。

 
```

<!DOCTYPE html>
<html>
<head>
   <title>Bootstrap 实例 - 显示和隐藏内容</title>
   <link href="http://www.w3cschool.cc/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <script src="http://www.w3cschool.cc/scripts/jquery.min.js"></script>
   <script src="http://www.w3cschool.cc/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="row" style="padding: 91px 100px 19px 50px;">
   <div class="show" style="left-margin:10px;width:300px;background-color:#ccc;">
      这是 show class 的实例
   </div>
   <div class="hidden" style="width:200px;background-color:#ccc;">
      这是 hide class 的实例
   </div>
</div>

</body>
</html>

```
 [尝试一下 »](http://www.w3cschool.cc/try/tryit.php?filename=bootstrap3-helper-showhide)

 结果如下所示：

  ![http://www.w3cschool.cc/wp-content/uploads/2014/06/showhide_demo.jpg](http://www.w3cschool.cc/wp-content/uploads/2014/06/showhide_demo.jpg)


 
#### 屏幕阅读器

 您可以通过使用 class .sr-only 来把元素对所有设备隐藏，除了屏幕阅读器。

 
```

<!DOCTYPE html>
<html>
<head>
   <title>Bootstrap 实例 - 屏幕阅读器</title>
   <link href="http://www.w3cschool.cc/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <script src="http://www.w3cschool.cc/scripts/jquery.min.js"></script>
   <script src="http://www.w3cschool.cc/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="row" style="padding: 91px 100px 19px 50px;">
   <form class="form-inline" role="form">
   <div class="form-group">
      <label class="sr-only" for="email">Email 地址</label>
      <input type="email" class="form-control" placeholder="Enter email">
   </div>
   <div class="form-group">
      <label class="sr-only" for="pass">密码</label>
      <input type="password" class="form-control" placeholder="Password">
   </div>
</div>

</body>
</html>

```
 [尝试一下 »](http://www.w3cschool.cc/try/tryit.php?filename=bootstrap3-helper-screenreader)

 结果如下所示：

  ![http://www.w3cschool.cc/wp-content/uploads/2014/06/screenreader_demo.jpg](http://www.w3cschool.cc/wp-content/uploads/2014/06/screenreader_demo.jpg)


 在这里，我们看到两个 input 类型的 label 标签都带有 class sr-only，因此标签将只对屏幕阅读器可见。

 

