 Bootstrap 标签
 本章将讲解 Bootstrap 标签。标签可用于计数、提示或页面上其他的标记显示。使用 class .label 来显示标签，如下面的实例所示：

 
```

<!DOCTYPE html>
<html>
<head>
   <title>Bootstrap 实例 - 标签</title>
   <link href="http://www.w3cschool.cc/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <script src="http://www.w3cschool.cc/scripts/jquery.min.js"></script>
   <script src="http://www.w3cschool.cc/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<h1>Example Heading <span class="label label-default">Label</span></h1>
<h2>Example Heading <span class="label label-default">Label</span></h2>
<h3>Example Heading <span class="label label-default">Label</span></h3>
<h4>Example Heading <span class="label label-default">Label</span></h4>


</body>
</html>

```
 [尝试一下 »](http://www.w3cschool.cc/try/tryit.php?filename=bootstrap3-labels)

 结果如下所示：

  ![http://www.w3cschool.cc/wp-content/uploads/2014/06/labels_demo.jpg](http://www.w3cschool.cc/wp-content/uploads/2014/06/labels_demo.jpg)


 您可以使用修饰的 class label-default、label-primary、label-success、label-info、label-warning、label-danger 来改变标签的外观，如下面的实例所示：

 
```

<!DOCTYPE html>
<html>
<head>
   <title>Bootstrap 实例 - 标签的变体</title>
   <link href="http://www.w3cschool.cc/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <script src="http://www.w3cschool.cc/scripts/jquery.min.js"></script>
   <script src="http://www.w3cschool.cc/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<span class="label label-default">默认标签</span>
<span class="label label-primary">主要标签</span>
<span class="label label-success">成功标签</span>
<span class="label label-info">信息标签</span>
<span class="label label-warning">警告标签</span>
<span class="label label-danger">危险标签</span>


</body>
</html>

```
 [尝试一下 »](http://www.w3cschool.cc/try/tryit.php?filename=bootstrap3-labels-variation)

 结果如下所示：

  ![http://www.w3cschool.cc/wp-content/uploads/2014/06/labelvariation_demo.jpg](http://www.w3cschool.cc/wp-content/uploads/2014/06/labelvariation_demo.jpg)


 

