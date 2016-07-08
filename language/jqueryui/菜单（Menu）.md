 jQuery UI 实例 - 菜单（Menu）
  带有鼠标和键盘交互的用于导航的可主题化菜单。

 如需了解更多有关 menu 部件的细节，请查看 API 文档 [菜单部件（Menu Widget）](http://www.w3cschool.cc/jqueryui/api-menu.html)。

 

 
#### 默认功能

 一个带有默认配置、禁用条目和嵌套菜单的菜单。由一个列表转化成的，添加了主题，并支持鼠标和键盘交互。尝试使用光标键导航菜单。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 菜单（Menu） - 默认功能</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <script>
  $(function() {
    $( "#menu" ).menu();
  });
  </script>
  <style>
  .ui-menu { width: 150px; }
  </style>
</head>
<body>
 
<ul id="menu">
  <li class="ui-state-disabled"><a href="#">Aberdeen</a></li>
  <li><a href="#">Ada</a></li>
  <li><a href="#">Adamsville</a></li>
  <li><a href="#">Addyston</a></li>
  <li>
    <a href="#">Delphi</a>
    <ul>
      <li class="ui-state-disabled"><a href="#">Ada</a></li>
      <li><a href="#">Saarland</a></li>
      <li><a href="#">Salzburg</a></li>
    </ul>
  </li>
  <li><a href="#">Saarland</a></li>
  <li>
    <a href="#">Salzburg</a>
    <ul>
      <li>
        <a href="#">Delphi</a>
        <ul>
          <li><a href="#">Ada</a></li>
          <li><a href="#">Saarland</a></li>
          <li><a href="#">Salzburg</a></li>
        </ul>
      </li>
      <li>
        <a href="#">Delphi</a>
        <ul>
          <li><a href="#">Ada</a></li>
          <li><a href="#">Saarland</a></li>
          <li><a href="#">Salzburg</a></li>
        </ul>
      </li>
      <li><a href="#">Perch</a></li>
    </ul>
  </li>
  <li class="ui-state-disabled"><a href="#">Amesville</a></li>
</ul>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-menu)

 
#### 图标

 一个带有默认配置的菜单，显示如何使用带有图标的菜单。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 菜单（Menu） - 图标</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <script>
  $(function() {
    $( "#menu" ).menu();
  });
  </script>
  <style>
  .ui-menu { width: 150px; }
  </style>
</head>
<body>
 
<ul id="menu">
  <li><a href="#"><span class="ui-icon ui-icon-disk"></span>保存</a></li>
  <li><a href="#"><span class="ui-icon ui-icon-zoomin"></span>放大</a></li>
  <li><a href="#"><span class="ui-icon ui-icon-zoomout"></span>缩小</a></li>
  <li class="ui-state-disabled"><a href="#"><span class="ui-icon ui-icon-print"></span>打印...</a></li>
  <li>
    <a href="#">播放</a>
    <ul>
      <li><a href="#"><span class="ui-icon ui-icon-seek-start"></span>上一个</a></li>
      <li><a href="#"><span class="ui-icon ui-icon-stop"></span>停止</a></li>
      <li><a href="#"><span class="ui-icon ui-icon-play"></span>播放</a></li>
      <li><a href="#"><span class="ui-icon ui-icon-seek-end"></span>下一个</a></li>
    </ul>
  </li>
</ul>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-menu-icons)

 

