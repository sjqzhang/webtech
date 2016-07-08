 Bootstrap 徽章（Badges）
 本章将讲解 Bootstrap 徽章（Badges）。徽章与标签相似，主要的区别在于徽章的边角更加圆滑。

 徽章（Badges）主要用于突出显示新的或未读的项。如需使用徽章，只需要把 <span class="badge"> 添加到链接、Bootstrap 导航等这些元素上即可。

 下面的实例演示了这点：

 
```

<!DOCTYPE html>
<html>
<head>
   <title>Bootstrap 实例 - 徽章（Badges）</title>
   <link href="http://www.w3cschool.cc/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <script src="http://www.w3cschool.cc/scripts/jquery.min.js"></script>
   <script src="http://www.w3cschool.cc/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<a href="#">Mailbox <span class="badge">50</span></a>

</body>
</html>

```
 [尝试一下 »](http://www.w3cschool.cc/try/tryit.php?filename=bootstrap3-badges)

 结果如下所示：

  ![http://www.w3cschool.cc/wp-content/uploads/2014/06/badges_demo.jpg](http://www.w3cschool.cc/wp-content/uploads/2014/06/badges_demo.jpg)


 当没有新的或未读的项时，通过 CSS 的  :empty 选择器，徽章会折叠起来，表示里边没有内容。

 
#### 激活导航状态

 您可以在激活状态的胶囊式导航和列表导航中放置徽章。通过使用 <span class="badge"> 来激活链接，如下面的实例所示：

 
```

<!DOCTYPE html>
<html>
<head>
   <title>Bootstrap 实例 - 激活导航状态</title>
   <link href="http://www.w3cschool.cc/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <script src="http://www.w3cschool.cc/scripts/jquery.min.js"></script>
   <script src="http://www.w3cschool.cc/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<h4>胶囊式导航中的激活状态</h4>
<ul class="nav nav-pills">
   <li class="active"><a href="#">首页 <span class="badge">42</span></a></li>
   <li><a href="#">简介</a></li>
   <li><a href="#">消息 <span class="badge">3</span></a></li>
</ul>
<br>
<h4>列表导航中的激活状态</h4>
<ul class="nav nav-pills nav-stacked" style="max-width: 260px;">
   <li class="active">
      <a href="#">
         <span class="badge pull-right">42</span>
         首页
      </a>
   </li>
   <li><a href="#">简介</a></li>
   <li>
      <a href="#">
         <span class="badge pull-right">3</span>
         消息
      </a>
   </li>
</ul>

</body>
</html>

```
 [尝试一下 »](http://www.w3cschool.cc/try/tryit.php?filename=bootstrap3-badges-activestate)

 结果如下所示：

  ![http://www.w3cschool.cc/wp-content/uploads/2014/06/badgesactivestate_demo.jpg](http://www.w3cschool.cc/wp-content/uploads/2014/06/badgesactivestate_demo.jpg)


 

