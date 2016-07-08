 Bootstrap 超大屏幕（Jumbotron）
 本章将讲解 Bootstrap 支持的另一个特性，超大屏幕（Jumbotron）。顾名思义该组件可以增加标题的大小，并为登陆页面内容添加更多的外边距（margin）。使用超大屏幕（Jumbotron）的步骤如下：

 
创建一个带有 class .jumbotron. 的容器 <div>。
 除了更大的 <h1>，字体粗细 font-weight 被减为 200px。
 
下面的实例演示了这点：

 
```

<!DOCTYPE html>
<html>
<head>
   <title>Bootstrap 实例 - 超大屏幕（Jumbotron）</title>
   <link href="http://www.w3cschool.cc/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <script src="http://www.w3cschool.cc/scripts/jquery.min.js"></script>
   <script src="http://www.w3cschool.cc/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
   <div class="jumbotron">
      <h1>欢迎登陆页面！</h1>
      <p>这是一个超大屏幕（Jumbotron）的实例。</p>
      <p><a class="btn btn-primary btn-lg" role="button">
         学习更多</a>
      </p>
   </div>
</div>

</body>
</html>

```
 [尝试一下 »](http://www.w3cschool.cc/try/tryit.php?filename=bootstrap3-jumbotron)

 结果如下所示：

  ![http://www.w3cschool.cc/wp-content/uploads/2014/06/jumbotron_demo.jpg](http://www.w3cschool.cc/wp-content/uploads/2014/06/jumbotron_demo.jpg)


 为了获得占用全部宽度且不带圆角的超大屏幕，请在所有的 .container class 外使用 .jumbotron class，如下面的实例所示：

 
```

<!DOCTYPE html>
<html>
<head>
   <title>Bootstrap 实例 - 超大屏幕（Jumbotron）</title>
   <link href="http://www.w3cschool.cc/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <script src="http://www.w3cschool.cc/scripts/jquery.min.js"></script>
   <script src="http://www.w3cschool.cc/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron">
   <div class="container">
      <h1>欢迎登陆页面！</h1>
      <p>这是一个超大屏幕（Jumbotron）的实例。</p>
      <p><a class="btn btn-primary btn-lg" role="button">
         学习更多</a>
      </p>
   </div>
</div>

</body>
</html>

```
 [尝试一下 »](http://www.w3cschool.cc/try/tryit.php?filename=bootstrap3-jumbotron-fullwidth)

 结果如下所示：

  ![http://www.w3cschool.cc/wp-content/uploads/2014/06/jumbotronfullwidth_demo.jpg](http://www.w3cschool.cc/wp-content/uploads/2014/06/jumbotronfullwidth_demo.jpg)


 

