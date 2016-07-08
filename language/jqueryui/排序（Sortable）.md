 jQuery UI 实例 - 排序（Sortable）
  使用鼠标调整列表中或者网格中元素的排序。

 如需了解更多有关 sortable 交互的细节，请查看 API 文档 [可排序小部件（Sortable Widget）](http://www.w3cschool.cc/jqueryui/api-sortable.html)。

 

 
#### 默认功能

 在任意的 DOM 元素上启用 sortable 功能。通过鼠标点击并拖拽元素到列表中的一个新的位置，其它条目会自动调整。默认情况下，sortable 各个条目共享 draggable 属性。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 排序（Sortable） - 默认功能</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <style>
  #sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
  #sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; }
  #sortable li span { position: absolute; margin-left: -1.3em; }
  </style>
  <script>
  $(function() {
    $( "#sortable" ).sortable();
    $( "#sortable" ).disableSelection();
  });
  </script>
</head>
<body>
 
<ul id="sortable">
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 1</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 2</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 3</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 4</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 5</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 6</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 7</li>
</ul>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-sortable)

 
#### 连接列表

 通过向 connectWith 选项传递一个选择器，来把一个列表中的元素排序到另一个列表中，反之亦然。最简单的办法是将带有某个 CSS class 的所有相关的列表分组，然后传递该 class 到 sortable 函数（比如，connectWith: '.myclass'）。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 排序（Sortable） - 连接列表</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <style>
  #sortable1, #sortable2 { list-style-type: none; margin: 0; padding: 0 0 2.5em; float: left; margin-right: 10px; }
  #sortable1 li, #sortable2 li { margin: 0 5px 5px 5px; padding: 5px; font-size: 1.2em; width: 120px; }
  </style>
  <script>
  $(function() {
    $( "#sortable1, #sortable2" ).sortable({
      connectWith: ".connectedSortable"
    }).disableSelection();
  });
  </script>
</head>
<body>
 
<ul id="sortable1" class="connectedSortable">
  <li class="ui-state-default">Item 1</li>
  <li class="ui-state-default">Item 2</li>
  <li class="ui-state-default">Item 3</li>
  <li class="ui-state-default">Item 4</li>
  <li class="ui-state-default">Item 5</li>
</ul>
 
<ul id="sortable2" class="connectedSortable">
  <li class="ui-state-highlight">Item 1</li>
  <li class="ui-state-highlight">Item 2</li>
  <li class="ui-state-highlight">Item 3</li>
  <li class="ui-state-highlight">Item 4</li>
  <li class="ui-state-highlight">Item 5</li>
</ul>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-sortable-connect-lists)

 
#### 标签页连接列表

 通过放置列表项到顶部适当的标签页中，来把一个列表中的元素排序到另一个列表中，反之亦然。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 排序（Sortable） - 标签页连接列表</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <style>
  #sortable1 li, #sortable2 li { margin: 0 5px 5px 5px; padding: 5px; font-size: 1.2em; width: 120px; }
  </style>
  <script>
  $(function() {
    $( "#sortable1, #sortable2" ).sortable().disableSelection();
 
    var $tabs = $( "#tabs" ).tabs();
 
    var $tab_items = $( "ul:first li", $tabs ).droppable({
      accept: ".connectedSortable li",
      hoverClass: "ui-state-hover",
      drop: function( event, ui ) {
        var $item = $( this );
        var $list = $( $item.find( "a" ).attr( "href" ) )
          .find( ".connectedSortable" );
 
        ui.draggable.hide( "slow", function() {
          $tabs.tabs( "option", "active", $tab_items.index( $item ) );
          $( this ).appendTo( $list ).show( "slow" );
        });
      }
    });
  });
  </script>
</head>
<body>
 
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Nunc tincidunt</a></li>
    <li><a href="#tabs-2">Proin dolor</a></li>
  </ul>
  <div id="tabs-1">
    <ul id="sortable1" class="connectedSortable ui-helper-reset">
      <li class="ui-state-default">Item 1</li>
      <li class="ui-state-default">Item 2</li>
      <li class="ui-state-default">Item 3</li>
      <li class="ui-state-default">Item 4</li>
      <li class="ui-state-default">Item 5</li>
    </ul>
  </div>
  <div id="tabs-2">
    <ul id="sortable2" class="connectedSortable ui-helper-reset">
      <li class="ui-state-highlight">Item 1</li>
      <li class="ui-state-highlight">Item 2</li>
      <li class="ui-state-highlight">Item 3</li>
      <li class="ui-state-highlight">Item 4</li>
      <li class="ui-state-highlight">Item 5</li>
    </ul>
  </div>
</div>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-sortable-connect-lists-through-tabs)

 
#### 延迟开始

 通过时间延迟和距离延迟来防止意外的排序。通过 delay 选项设置开始排序之前必须拖拽的毫秒数。通过 distance 选项设置开始排序之前必须拖拽的像素数。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 排序（Sortable） - 延迟开始</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <style>
  #sortable1, #sortable2 { list-style-type: none; margin: 0; padding: 0; margin-bottom: 15px;zoom: 1; }
  #sortable1 li, #sortable2 li { margin: 0 5px 5px 5px; padding: 5px; font-size: 1.2em; width: 95%; }
  </style>
  <script>
  $(function() {
    $( "#sortable1" ).sortable({
      delay: 300
    });
 
    $( "#sortable2" ).sortable({
      distance: 15
    });
 
    $( "li" ).disableSelection();
  });
  </script>
</head>
<body>
 
<h3 class="docs">时间延迟 300ms：</h3>
 
<ul id="sortable1">
  <li class="ui-state-default">Item 1</li>
  <li class="ui-state-default">Item 2</li>
  <li class="ui-state-default">Item 3</li>
  <li class="ui-state-default">Item 4</li>
</ul>
 
<h3 class="docs">距离延迟 15px：</h3>
 
<ul id="sortable2">
  <li class="ui-state-default">Item 1</li>
  <li class="ui-state-default">Item 2</li>
  <li class="ui-state-default">Item 3</li>
  <li class="ui-state-default">Item 4</li>
</ul>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-sortable-delay-start)

 
#### 显示为网格

 让 sortable 条目显示为网格，使用 CSS 使得它们带有相同的尺寸且浮动显示。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 排序（Sortable） - 显示为网格</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <style>
  #sortable { list-style-type: none; margin: 0; padding: 0; width: 450px; }
  #sortable li { margin: 3px 3px 3px 0; padding: 1px; float: left; width: 100px; height: 90px; font-size: 4em; text-align: center; }
  </style>
  <script>
  $(function() {
    $( "#sortable" ).sortable();
    $( "#sortable" ).disableSelection();
  });
  </script>
</head>
<body>
 
<ul id="sortable">
  <li class="ui-state-default">1</li>
  <li class="ui-state-default">2</li>
  <li class="ui-state-default">3</li>
  <li class="ui-state-default">4</li>
  <li class="ui-state-default">5</li>
  <li class="ui-state-default">6</li>
  <li class="ui-state-default">7</li>
  <li class="ui-state-default">8</li>
  <li class="ui-state-default">9</li>
  <li class="ui-state-default">10</li>
  <li class="ui-state-default">11</li>
  <li class="ui-state-default">12</li>
</ul>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-sortable-display-grid)

 
#### 放置占位符

 当拖拽一个 sortable 条目到一个新的位置时，其他条目将为该条目腾出空间。向 placeholder 选项传递一个 class 来定义可视化的空白的样式。使用布尔值的 forcePlaceholderSize 选项来设置占位符的尺寸。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 排序（Sortable） - 放置占位符</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <style>
  #sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
  #sortable li { margin: 0 5px 5px 5px; padding: 5px; font-size: 1.2em; height: 1.5em; }
  html>body #sortable li { height: 1.5em; line-height: 1.2em; }
  .ui-state-highlight { height: 1.5em; line-height: 1.2em; }
  </style>
  <script>
  $(function() {
    $( "#sortable" ).sortable({
      placeholder: "ui-state-highlight"
    });
    $( "#sortable" ).disableSelection();
  });
  </script>
</head>
<body>
 
<ul id="sortable">
  <li class="ui-state-default">Item 1</li>
  <li class="ui-state-default">Item 2</li>
  <li class="ui-state-default">Item 3</li>
  <li class="ui-state-default">Item 4</li>
  <li class="ui-state-default">Item 5</li>
  <li class="ui-state-default">Item 6</li>
  <li class="ui-state-default">Item 7</li>
</ul>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-sortable-placeholder)

 
#### 处理空列表

 通过把  选项设置为 false，来阻止一个列表中的所有条目被放置到一个单独的空列表中。默认情况下，sortable 条目可被放置到空的列表中。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 排序（Sortable） - 处理空列表</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <style>
  #sortable1, #sortable2, #sortable3 { list-style-type: none; margin: 0; padding: 0; float: left; margin-right: 10px; background: #eee; padding: 5px; width: 143px;}
  #sortable1 li, #sortable2 li, #sortable3 li { margin: 5px; padding: 5px; font-size: 1.2em; width: 120px; }
  </style>
  <script>
  $(function() {
    $( "ul.droptrue" ).sortable({
      connectWith: "ul"
    });
 
    $( "ul.dropfalse" ).sortable({
      connectWith: "ul",
      dropOnEmpty: false
    });
 
    $( "#sortable1, #sortable2, #sortable3" ).disableSelection();
  });
  </script>
</head>
<body>
 
<ul id="sortable1" class="droptrue">
  <li class="ui-state-default">可被放置到..</li>
  <li class="ui-state-default">..一个空列表中</li>
  <li class="ui-state-default">Item 3</li>
  <li class="ui-state-default">Item 4</li>
  <li class="ui-state-default">Item 5</li>
</ul>
 
<ul id="sortable2" class="dropfalse">
  <li class="ui-state-highlight">不可被放置到..</li>
  <li class="ui-state-highlight">..一个空列表中</li>
  <li class="ui-state-highlight">Item 3</li>
  <li class="ui-state-highlight">Item 4</li>
  <li class="ui-state-highlight">Item 5</li>
</ul>
 
<ul id="sortable3" class="droptrue">
</ul>
 
<br style="clear:both">
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-sortable-empty-lists)

 
#### 包含/排除条目

 指定通过向 items 选项传递一个 jQuery 选择器哪些项目可排序。该选项之外的项目则是不可排序的，同时它们也不是 sortable 条目的有效的目标。

 如果只想防止特定的条目排序，则向 cancel 选项传递一个 jQuery 选择器。已取消的条目依然是其他条目的有效的排序目标。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 排序（Sortable） - 包含/排除条目</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <style>
  #sortable1, #sortable2 { list-style-type: none; margin: 0; padding: 0; zoom: 1; }
  #sortable1 li, #sortable2 li { margin: 0 5px 5px 5px; padding: 3px; width: 90%; }
  </style>
  <script>
  $(function() {
    $( "#sortable1" ).sortable({
      items: "li:not(.ui-state-disabled)"
    });
 
    $( "#sortable2" ).sortable({
      cancel: ".ui-state-disabled"
    });
 
    $( "#sortable1 li, #sortable2 li" ).disableSelection();
  });
  </script>
</head>
<body>
 
<h3 class="docs">指定哪个条目是 sortable：</h3>
 
<ul id="sortable1">
  <li class="ui-state-default">Item 1</li>
  <li class="ui-state-default ui-state-disabled">（我不是 sortable 或者一个放置目标）</li>
  <li class="ui-state-default ui-state-disabled">（我不是 sortable 或者一个放置目标）</li>
  <li class="ui-state-default">Item 4</li>
</ul>
 
<h3 class="docs">取消排序（但作为放置目标）：</h3>
 
<ul id="sortable2">
  <li class="ui-state-default">Item 1</li>
  <li class="ui-state-default ui-state-disabled">（我不是 sortable）</li>
  <li class="ui-state-default ui-state-disabled">（我不是 sortable）</li>
  <li class="ui-state-default">Item 4</li>
</ul>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-sortable-items)

 
#### 门户组件（Portlets）

 启用门户组件（样式化的 div）作为 sortable，并使用 connectWith 选项来允许在列之间进行排序。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 排序（Sortable） - 门户组件（Portlets）</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <style>
  body {
    min-width: 520px;
  }
  .column {
    width: 170px;
    float: left;
    padding-bottom: 100px;
  }
  .portlet {
    margin: 0 1em 1em 0;
    padding: 0.3em;
  }
  .portlet-header {
    padding: 0.2em 0.3em;
    margin-bottom: 0.5em;
    position: relative;
  }
  .portlet-toggle {
    position: absolute;
    top: 50%;
    right: 0;
    margin-top: -8px;
  }
  .portlet-content {
    padding: 0.4em;
  }
  .portlet-placeholder {
    border: 1px dotted black;
    margin: 0 1em 1em 0;
    height: 50px;
  }
  </style>
  <script>
  $(function() {
    $( ".column" ).sortable({
      connectWith: ".column",
      handle: ".portlet-header",
      cancel: ".portlet-toggle",
      placeholder: "portlet-placeholder ui-corner-all"
    });
 
    $( ".portlet" )
      .addClass( "ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" )
      .find( ".portlet-header" )
        .addClass( "ui-widget-header ui-corner-all" )
        .prepend( "<span class='ui-icon ui-icon-minusthick portlet-toggle'></span>");
 
    $( ".portlet-toggle" ).click(function() {
      var icon = $( this );
      icon.toggleClass( "ui-icon-minusthick ui-icon-plusthick" );
      icon.closest( ".portlet" ).find( ".portlet-content" ).toggle();
    });
  });
  </script>
</head>
<body>
 
<div class="column">
 
  <div class="portlet">
    <div class="portlet-header">订阅</div>
    <div class="portlet-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</div>
  </div>
 
  <div class="portlet">
    <div class="portlet-header">新闻</div>
    <div class="portlet-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</div>
  </div>
 
</div>
 
<div class="column">
 
  <div class="portlet">
    <div class="portlet-header">购物</div>
    <div class="portlet-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</div>
  </div>
 
</div>
 
<div class="column">
 
  <div class="portlet">
    <div class="portlet-header">链接</div>
    <div class="portlet-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</div>
  </div>
 
  <div class="portlet">
    <div class="portlet-header">图像</div>
    <div class="portlet-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</div>
  </div>
 
</div>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-sortable-portlets)

 

