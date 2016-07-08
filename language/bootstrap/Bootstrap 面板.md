 Bootstrap 面板（Panels）
 本章将讲解 Bootstrap 面板（Panels）。面板组件用于把 DOM 组件插入到一个盒子中。创建一个基本的面板，只需要向 <div> 元素添加 class .panel 和 class .panel-default 即可，如下面的实例所示：

 
```

<!DOCTYPE html>
<html>
<head>
   <title>Bootstrap 实例 - 默认的面板</title>
   <link href="http://www.w3cschool.cc/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <script src="http://www.w3cschool.cc/scripts/jquery.min.js"></script>
   <script src="http://www.w3cschool.cc/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="panel panel-default">
   <div class="panel-body">
      这是一个基本的面板
   </div>
</div>

</body>
</html>

```
 [尝试一下 »](http://www.w3cschool.cc/try/tryit.php?filename=bootstrap3-panel-deafult)

 结果如下所示：

  ![http://www.w3cschool.cc/wp-content/uploads/2014/06/paneldeafult_demo.jpg](http://www.w3cschool.cc/wp-content/uploads/2014/06/paneldeafult_demo.jpg)


 
#### 面板标题

 我们可以通过以下两种方式来添加面板标题：

 
使用 .panel-heading class 可以很简单地向面板添加标题容器。to easily add a heading container to your panel.
 使用带有 .panel-title class 的 <h1>-<h6> 来添加预定义样式的标题。
 
下面的实例演示了这两种方式：

 
```

<!DOCTYPE html>
<html>
<head>
   <title>Bootstrap 实例 - 面板标题</title>
   <link href="http://www.w3cschool.cc/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <script src="http://www.w3cschool.cc/scripts/jquery.min.js"></script>
   <script src="http://www.w3cschool.cc/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="panel panel-default">
   <div class="panel-heading">
      不带 title 的面板标题
   </div>
   <div class="panel-body">
      面板内容
   </div>
</div>

<div class="panel panel-default">
   <div class="panel-heading">
      <h3 class="panel-title">
         带有 title 的面板标题
      </h3>
   </div>
   <div class="panel-body">
      面板内容
   </div>
</div>

</body>
</html>

```
 [尝试一下 »](http://www.w3cschool.cc/try/tryit.php?filename=bootstrap3-panel-heading)

 结果如下所示：

  ![http://www.w3cschool.cc/wp-content/uploads/2014/06/panelheading_demo.jpg](http://www.w3cschool.cc/wp-content/uploads/2014/06/panelheading_demo.jpg)


 
#### 面板脚注

 我们可以在面板中添加脚注，只需要把按钮或者副文本放在带有 class .panel-footer 的 <div> 中即可。下面的实例演示了这点：

 
```

<!DOCTYPE html>
<html>
<head>
   <title>Bootstrap 实例 - 面板脚注</title>
   <link href="http://www.w3cschool.cc/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <script src="http://www.w3cschool.cc/scripts/jquery.min.js"></script>
   <script src="http://www.w3cschool.cc/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="panel panel-default">
   <div class="panel-body">
      这是一个基本的面板
   </div>
   <div class="panel-footer">面板脚注</div>
</div>

</body>
</html>

```
 [尝试一下 »](http://www.w3cschool.cc/try/tryit.php?filename=bootstrap3-panel-footer)

 结果如下所示：

  ![http://www.w3cschool.cc/wp-content/uploads/2014/06/panelfooter_demo.jpg](http://www.w3cschool.cc/wp-content/uploads/2014/06/panelfooter_demo.jpg)


 
```

![http://www.w3cschool.cc/images/quote.png](http://www.w3cschool.cc/images/quote.png)面版脚注不会从带语境色彩的面板中继承颜色和边框，因为它不是前景中的内容。
```
 
#### 带语境色彩的面板

 使用语境状态类 panel-primary、panel-success、panel-info、panel-warning、panel-danger，来设置带语境色彩的面板，实例如下：

 
```

<!DOCTYPE html>
<html>
<head>
   <title>Bootstrap 实例 - 带语境色彩的面板</title>
   <link href="http://www.w3cschool.cc/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <script src="http://www.w3cschool.cc/scripts/jquery.min.js"></script>
   <script src="http://www.w3cschool.cc/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="panel panel-primary">
   <div class="panel-heading">
      <h3 class="panel-title">面板标题</h3>
   </div>
   <div class="panel-body">
      这是一个基本的面板
   </div>
</div>
<div class="panel panel-success">
   <div class="panel-heading">
      <h3 class="panel-title">面板标题</h3>
   </div>
   <div class="panel-body">
      这是一个基本的面板
   </div>
</div>
<div class="panel panel-info">
   <div class="panel-heading">
      <h3 class="panel-title">面板标题</h3>
   </div>
   <div class="panel-body">
      这是一个基本的面板
   </div>
</div>
<div class="panel panel-warning">
   <div class="panel-heading">
      <h3 class="panel-title">面板标题</h3>
   </div>
   <div class="panel-body">
      这是一个基本的面板
   </div>
</div>
<div class="panel panel-danger">
   <div class="panel-heading">
      <h3 class="panel-title">面板标题</h3>
   </div>
   <div class="panel-body">
      这是一个基本的面板
   </div>
</div>

</body>
</html>

```
 [尝试一下 »](http://www.w3cschool.cc/try/tryit.php?filename=bootstrap3-panel-styles)

 结果如下所示：

  ![http://www.w3cschool.cc/wp-content/uploads/2014/06/panelstyles_demo.jpg](http://www.w3cschool.cc/wp-content/uploads/2014/06/panelstyles_demo.jpg)


 
#### 带表格的面板

 为了在面板中创建一个无边框的表格，我们可以在面板中使用 class .table。假设有个 <div> 包含 .panel-body，我们可以向表格的顶部添加额外的边框用来分隔。如果没有包含 .panel-body 的 <div>，则组件会无中断地从面板头部移动到表格。

 下面的实例演示了这点：

 
```

<!DOCTYPE html>
<html>
<head>
   <title>Bootstrap 实例 - 带表格的面板</title>
   <link href="http://www.w3cschool.cc/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <script src="http://www.w3cschool.cc/scripts/jquery.min.js"></script>
   <script src="http://www.w3cschool.cc/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="panel panel-default">
   <div class="panel-heading">
      <h3 class="panel-title">面板标题</h3>
   </div>
   <div class="panel-body">
      这是一个基本的面板
   </div>
   <table class="table">
      <th>产品</th><th>价格 </th>
      <tr><td>产品 A</td><td>200</td></tr>
      <tr><td>产品 B</td><td>400</td></tr>
   </table>
</div>
<div class="panel panel-default">
   <div class="panel-heading">面板标题</div>
   <table class="table">
      <th>产品</th><th>价格 </th>
      <tr><td>产品 A</td><td>200</td></tr>
      <tr><td>产品 B</td><td>400</td></tr>
   </table>
</div>

</body>
</html>

```
 [尝试一下 »](http://www.w3cschool.cc/try/tryit.php?filename=bootstrap3-panel-table)

 结果如下所示：

  ![http://www.w3cschool.cc/wp-content/uploads/2014/06/paneltable_demo.jpg](http://www.w3cschool.cc/wp-content/uploads/2014/06/paneltable_demo.jpg)


 
#### 带列表组的面板

 我们可以在任何面板中包含列表组，通过在 <div> 元素中添加 .panel 和 .panel-default 类来创建面板，并在面板中添加列表组。您可以从 [列表组](http://www.w3cschool.cc/bootstrap/bootstrap-list-group.htm) 一章中学习如何创建列表组。

 
```

<!DOCTYPE html>
<html>
<head>
   <title>Bootstrap 实例 - 带列表组的面板</title>
   <link href="http://www.w3cschool.cc/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <script src="http://www.w3cschool.cc/scripts/jquery.min.js"></script>
   <script src="http://www.w3cschool.cc/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="panel panel-default">
   <div class="panel-heading">面板标题</div>
      <div class="panel-body">
         <p>这是一个基本的面板内容。这是一个基本的面板内容。
         这是一个基本的面板内容。这是一个基本的面板内容。
         这是一个基本的面板内容。这是一个基本的面板内容。
		 这是一个基本的面板内容。这是一个基本的面板内容。
         </p>
   </div>
   <ul class="list-group">
      <li class="list-group-item">免费域名注册</li>
      <li class="list-group-item">免费 Window 空间托管</li>
      <li class="list-group-item">图像的数量</li>
      <li class="list-group-item">24*7 支持</li>
      <li class="list-group-item">每年更新成本</li>
   </ul>
</div>

</body>
</html>

```
 [尝试一下 »](http://www.w3cschool.cc/try/tryit.php?filename=bootstrap3-panel-listgroups)

 结果如下所示：

  ![http://www.w3cschool.cc/wp-content/uploads/2014/06/panellistgroups_demo.jpg](http://www.w3cschool.cc/wp-content/uploads/2014/06/panellistgroups_demo.jpg)


 

