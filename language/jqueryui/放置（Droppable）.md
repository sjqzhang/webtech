 jQuery UI 实例 - 放置（Droppable）
  为可拖拽小部件创建目标。

 如需了解更多有关 droppable 交互的细节，请查看 API 文档 [可放置小部件（Droppable Widget）](http://www.w3cschool.cc/jqueryui/api-droppable.html)。

 

 
#### 默认功能

 在任意的 DOM 元素上启用 droppable 功能，并为可拖拽小部件创建目标。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 放置（Droppable） - 默认功能</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <style>
  #draggable { width: 100px; height: 100px; padding: 0.5em; float: left; margin: 10px 10px 10px 0; }
  #droppable { width: 150px; height: 150px; padding: 0.5em; float: left; margin: 10px; }
  </style>
  <script>
  $(function() {
    $( "#draggable" ).draggable();
    $( "#droppable" ).droppable({
      drop: function( event, ui ) {
        $( this )
          .addClass( "ui-state-highlight" )
          .find( "p" )
            .html( "Dropped!" );
      }
    });
  });
  </script>
</head>
<body>
 
<div id="draggable" class="ui-widget-content">
  <p>请把我拖拽到目标处！</p>
</div>
 
<div id="droppable" class="ui-widget-header">
  <p>请放置在这里！</p>
</div>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-droppable)

 
#### 接受

 使用 accept 选项指定目标 droppable 接受哪一个元素（或元素组）。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 放置（Droppable） - 接受</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <style>
  #droppable { width: 150px; height: 150px; padding: 0.5em; float: left; margin: 10px; }
  #draggable, #draggable-nonvalid { width: 100px; height: 100px; padding: 0.5em; float: left; margin: 10px 10px 10px 0; }
  </style>
  <script>
  $(function() {
    $( "#draggable, #draggable-nonvalid" ).draggable();
    $( "#droppable" ).droppable({
      accept: "#draggable",
      activeClass: "ui-state-hover",
      hoverClass: "ui-state-active",
      drop: function( event, ui ) {
        $( this )
          .addClass( "ui-state-highlight" )
          .find( "p" )
            .html( "Dropped!" );
      }
    });
  });
  </script>
</head>
<body>
 
<div id="draggable-nonvalid" class="ui-widget-content">
  <p>我是不能被放置的 draggable</p>
</div>
 
<div id="draggable" class="ui-widget-content">
  <p>请拖拽我到目标</p>
</div>
 
<div id="droppable" class="ui-widget-header">
  <p>accept: '#draggable'</p>
</div>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-droppable-accepted-elements)

 
#### 防止传播

 当使用嵌套的 droppable 时 — 例如，您可以有一个树形的可编辑的目录结构，带有文件夹和文档节点 — greedy 选项设置为 true 来防止当 draggable 被放置在子节点（droppable）上时的事件传播。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 放置（Droppable） - 防止传播</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <style>
  #draggable { width: 100px; height: 40px; padding: 0.5em; float: left; margin: 10px 10px 10px 0; }
  #droppable, #droppable2 { width: 230px; height: 120px; padding: 0.5em; float: left; margin: 10px; }
  #droppable-inner, #droppable2-inner { width: 170px; height: 60px; padding: 0.5em; float: left; margin: 10px; }
  </style>
  <script>
  $(function() {
    $( "#draggable" ).draggable();
 
    $( "#droppable, #droppable-inner" ).droppable({
      activeClass: "ui-state-hover",
      hoverClass: "ui-state-active",
      drop: function( event, ui ) {
        $( this )
          .addClass( "ui-state-highlight" )
          .find( "> p" )
            .html( "Dropped!" );
        return false;
      }
    });
 
    $( "#droppable2, #droppable2-inner" ).droppable({
      greedy: true,
      activeClass: "ui-state-hover",
      hoverClass: "ui-state-active",
      drop: function( event, ui ) {
        $( this )
          .addClass( "ui-state-highlight" )
          .find( "> p" )
            .html( "Dropped!" );
      }
    });
  });
  </script>
</head>
<body>
 
<div id="draggable" class="ui-widget-content">
  <p>请拖拽我到目标</p>
</div>
 
<div id="droppable" class="ui-widget-header">
  <p>外部 droppable</p>
  <div id="droppable-inner" class="ui-widget-header">
    <p>内部 droppable（不带有 greedy）</p>
  </div>
</div>
 
<div id="droppable2" class="ui-widget-header">
  <p>外部 droppable</p>
  <div id="droppable2-inner" class="ui-widget-header">
    <p>内部 droppable（带有 greedy）</p>
  </div>
</div>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-droppable-propagation)

 
#### 还原 draggable 的位置

 当带有布尔值 revert 选项的 draggable 停止拖拽时，返回 draggable（或它的助手）到原始位置。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 放置（Droppable） - 还原 draggable 的位置</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <style>
  #draggable, #draggable2 { width: 100px; height: 100px; padding: 0.5em; float: left; margin: 10px 10px 10px 0; }
  #droppable { width: 150px; height: 150px; padding: 0.5em; float: left; margin: 10px; }
  </style>
  <script>
  $(function() {
    $( "#draggable" ).draggable({ revert: "valid" });
    $( "#draggable2" ).draggable({ revert: "invalid" });
 
    $( "#droppable" ).droppable({
      activeClass: "ui-state-default",
      hoverClass: "ui-state-hover",
      drop: function( event, ui ) {
        $( this )
          .addClass( "ui-state-highlight" )
          .find( "p" )
            .html( "已放置！" );
      }
    });
  });
  </script>
</head>
<body>
 
<div id="draggable" class="ui-widget-content">
  <p>当被放置在目标上时还原</p>
</div>
 
<div id="draggable2" class="ui-widget-content">
  <p>当未被放置在目标上时还原</p>
</div>
 
<div id="droppable" class="ui-widget-header">
  <p>请放置在这里</p>
</div>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-droppable-revert)

 
#### 购物车演示

 演示如何使用折叠面板来展示产品的目录结构，使用拖拽和放置来添加产品到购物车，购物车中的产品是可排序的。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 放置（Droppable） - 购物车演示</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <style>
  h1 { padding: .2em; margin: 0; }
  #products { float:left; width: 500px; margin-right: 2em; }
  #cart { width: 200px; float: left; margin-top: 1em; }
  /* 定义列表样式，以便最大化 droppable */
  #cart ol { margin: 0; padding: 1em 0 1em 3em; }
  </style>
  <script>
  $(function() {
    $( "#catalog" ).accordion();
    $( "#catalog li" ).draggable({
      appendTo: "body",
      helper: "clone"
    });
    $( "#cart ol" ).droppable({
      activeClass: "ui-state-default",
      hoverClass: "ui-state-hover",
      accept: ":not(.ui-sortable-helper)",
      drop: function( event, ui ) {
        $( this ).find( ".placeholder" ).remove();
        $( "<li></li>" ).text( ui.draggable.text() ).appendTo( this );
      }
    }).sortable({
      items: "li:not(.placeholder)",
      sort: function() {
        // 获取由 droppable 与 sortable 交互而加入的条目
        // 使用 connectWithSortable 可以解决这个问题，但不允许您自定义 active/hoverClass 选项
        $( this ).removeClass( "ui-state-default" );
      }
    });
  });
  </script>
</head>
<body>
 
<div id="products">
  <h1 class="ui-widget-header">产品</h1>
  <div id="catalog">
    <h2><a href="#">T-Shirts</a></h2>
    <div>
      <ul>
        <li>Lolcat Shirt</li>
        <li>Cheezeburger Shirt</li>
        <li>Buckit Shirt</li>
      </ul>
    </div>
    <h2><a href="#">Bags</a></h2>
    <div>
      <ul>
        <li>Zebra Striped</li>
        <li>Black Leather</li>
        <li>Alligator Leather</li>
      </ul>
    </div>
    <h2><a href="#">Gadgets</a></h2>
    <div>
      <ul>
        <li>iPhone</li>
        <li>iPod</li>
        <li>iPad</li>
      </ul>
    </div>
  </div>
</div>
 
<div id="cart">
  <h1 class="ui-widget-header">购物车</h1>
  <div class="ui-widget-content">
    <ol>
      <li class="placeholder">添加产品到这里</li>
    </ol>
  </div>
</div>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-droppable-shopping-cart)

 
#### 简单的照片管理器

 您可以通过拖拽照片到回收站或者点击回收站图标来删除照片。

 您可以通过拖拽照片到相册或者点击回收利用图标来还原照片。

 您可以通过点击缩放图标来查看大图。jQuery UI 对话框（dialog）部件用于模态窗口。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 放置（Droppable） - 简单的照片管理器</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <style>
  #gallery { float: left; width: 65%; min-height: 12em; }
  .gallery.custom-state-active { background: #eee; }
  .gallery li { float: left; width: 96px; padding: 0.4em; margin: 0 0.4em 0.4em 0; text-align: center; }
  .gallery li h5 { margin: 0 0 0.4em; cursor: move; }
  .gallery li a { float: right; }
  .gallery li a.ui-icon-zoomin { float: left; }
  .gallery li img { width: 100%; cursor: move; }
 
  #trash { float: right; width: 32%; min-height: 18em; padding: 1%; }
  #trash h4 { line-height: 16px; margin: 0 0 0.4em; }
  #trash h4 .ui-icon { float: left; }
  #trash .gallery h5 { display: none; }
  </style>
  <script>
  $(function() {
    // 这是相册和回收站
    var $gallery = $( "#gallery" ),
      $trash = $( "#trash" );
 
    // 让相册的条目可拖拽
    $( "li", $gallery ).draggable({
      cancel: "a.ui-icon", // 点击一个图标不会启动拖拽
      revert: "invalid", // 当未被放置时，条目会还原回它的初始位置
      containment: "document",
      helper: "clone",
      cursor: "move"
    });
 
    // 让回收站可放置，接受相册的条目
    $trash.droppable({
      accept: "#gallery > li",
      activeClass: "ui-state-highlight",
      drop: function( event, ui ) {
        deleteImage( ui.draggable );
      }
    });
 
    // 让相册可放置，接受回收站的条目
    $gallery.droppable({
      accept: "#trash li",
      activeClass: "custom-state-active",
      drop: function( event, ui ) {
        recycleImage( ui.draggable );
      }
    });
 
    // 图像删除功能
    var recycle_icon = "<a href='http://www.w3cschool.cc/jqueryui/link/to/recycle/script/when/we/have/js/off' title='还原图像' class='ui-icon ui-icon-refresh'>还原图像</a>";
    function deleteImage( $item ) {
      $item.fadeOut(function() {
        var $list = $( "ul", $trash ).length ?
          $( "ul", $trash ) :
          $( "<ul class='gallery ui-helper-reset'/>" ).appendTo( $trash );
 
        $item.find( "a.ui-icon-trash" ).remove();
        $item.append( recycle_icon ).appendTo( $list ).fadeIn(function() {
          $item
            .animate({ width: "48px" })
            .find( "img" )
              .animate({ height: "36px" });
        });
      });
    }
 
    // 图像还原功能
    var trash_icon = "<a href='http://www.w3cschool.cc/jqueryui/link/to/trash/script/when/we/have/js/off' title='删除图像' class='ui-icon ui-icon-trash'>删除图像</a>";
    function recycleImage( $item ) {
      $item.fadeOut(function() {
        $item
          .find( "a.ui-icon-refresh" )
            .remove()
          .end()
          .css( "width", "96px")
          .append( trash_icon )
          .find( "img" )
            .css( "height", "72px" )
          .end()
          .appendTo( $gallery )
          .fadeIn();
      });
    }
 
    // 图像预览功能，演示 ui.dialog 作为模态窗口使用
    function viewLargerImage( $link ) {
      var src = $link.attr( "href" ),
        title = $link.siblings( "img" ).attr( "alt" ),
        $modal = $( "img[src$='" + src + "']" );
 
      if ( $modal.length ) {
        $modal.dialog( "open" );
      } else {
        var img = $( "<img alt='" + title + "' width='384' height='288' style='display: none; padding: 8px;' />" )
          .attr( "src", src ).appendTo( "body" );
        setTimeout(function() {
          img.dialog({
            title: title,
            width: 400,
            modal: true
          });
        }, 1 );
      }
    }
 
    // 通过事件代理解决图标行为
    $( "ul.gallery > li" ).click(function( event ) {
      var $item = $( this ),
        $target = $( event.target );
 
      if ( $target.is( "a.ui-icon-trash" ) ) {
        deleteImage( $item );
      } else if ( $target.is( "a.ui-icon-zoomin" ) ) {
        viewLargerImage( $target );
      } else if ( $target.is( "a.ui-icon-refresh" ) ) {
        recycleImage( $item );
      }
 
      return false;
    });
  });
  </script>
</head>
<body>
 
<div class="ui-widget ui-helper-clearfix">
 
<ul id="gallery" class="gallery ui-helper-reset ui-helper-clearfix">
  <li class="ui-widget-content ui-corner-tr">
    <h5 class="ui-widget-header">High Tatras</h5>
    <img src="http://www.w3cschool.cc/wp-content/uploads/2014/03/high_tatras_min.jpg" alt="High Tatras 的最高峰" width="96" height="72">
    <a href="http://www.w3cschool.cc/wp-content/uploads/2014/03/high_tatras.jpg" title="查看大图" class="ui-icon ui-icon-zoomin">查看大图</a>
    <a href="http://www.w3cschool.cc/jqueryui/link/to/trash/script/when/we/have/js/off" title="删除图像" class="ui-icon ui-icon-trash">删除图像</a>
  </li>
  <li class="ui-widget-content ui-corner-tr">
    <h5 class="ui-widget-header">High Tatras 2</h5>
    <img src="http://www.w3cschool.cc/wp-content/uploads/2014/03/high_tatras2_min.jpg" alt="绿山湖畔的小屋" width="96" height="72">
    <a href="http://www.w3cschool.cc/wp-content/uploads/2014/03/high_tatras2.jpg" title="查看大图" class="ui-icon ui-icon-zoomin">查看大图</a>
    <a href="http://www.w3cschool.cc/jqueryui/link/to/trash/script/when/we/have/js/off" title="删除图像" class="ui-icon ui-icon-trash">删除图像</a>
  </li>
  <li class="ui-widget-content ui-corner-tr">
    <h5 class="ui-widget-header">High Tatras 3</h5>
    <img src="http://www.w3cschool.cc/wp-content/uploads/2014/03/high_tatras3_min.jpg" alt="计划登高" width="96" height="72">
    <a href="http://www.w3cschool.cc/wp-content/uploads/2014/03/high_tatras3.jpg" title="查看大图" class="ui-icon ui-icon-zoomin">查看大图</a>
    <a href="http://www.w3cschool.cc/jqueryui/link/to/trash/script/when/we/have/js/off" title="删除图像" class="ui-icon ui-icon-trash">删除图像</a>
  </li>
  <li class="ui-widget-content ui-corner-tr">
    <h5 class="ui-widget-header">High Tatras 4</h5>
    <img src="http://www.w3cschool.cc/wp-content/uploads/2014/03/high_tatras4_min.jpg" alt="在 Kozi kopka 的顶部" width="96" height="72">
    <a href="http://www.w3cschool.cc/wp-content/uploads/2014/03/high_tatras4.jpg" title="查看大图" class="ui-icon ui-icon-zoomin">查看大图</a>
    <a href="http://www.w3cschool.cc/jqueryui/link/to/trash/script/when/we/have/js/off" title="删除图像" class="ui-icon ui-icon-trash">删除图像</a>
  </li>
</ul>
 
<div id="trash" class="ui-widget-content ui-state-default">
  <h4 class="ui-widget-header"><span class="ui-icon ui-icon-trash">回收站</span> 回收站</h4>
</div>
 
</div>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-droppable-photo-manager)

 
#### 视觉反馈

 当悬停在 droppable 上时，或者当 droppable 被激活（即一个可接受的 draggable 被放置在 droppable 上）时，改变 droppable 的外观。使用 hoverClass 或 activeClass 选项来分别指定 class。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 放置（Droppable） - 视觉反馈</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <style>
  #draggable, #draggable2 { width: 90px; height: 90px; padding: 0.5em; float: left; margin: 10px 10px 10px 0; }
  #droppable, #droppable2 { width: 120px; height: 120px; padding: 0.5em; float: left; margin: 10px; }
  h3 { clear: left; }
  </style>
  <script>
  $(function() {
    $( "#draggable" ).draggable();
    $( "#droppable" ).droppable({
      hoverClass: "ui-state-hover",
      drop: function( event, ui ) {
        $( this )
          .addClass( "ui-state-highlight" )
          .find( "p" )
            .html( "Dropped!" );
      }
    });
 
    $( "#draggable2" ).draggable();
    $( "#droppable2" ).droppable({
      accept: "#draggable2",
      activeClass: "ui-state-default",
      drop: function( event, ui ) {
        $( this )
          .addClass( "ui-state-highlight" )
          .find( "p" )
            .html( "Dropped!" );
      }
    });
  });
  </script>
</head>
<body>
 
<h3>当悬停在 droppable 上时的反馈：</h3>
 
<div id="draggable" class="ui-widget-content">
  <p>请拖拽我到目标</p>
</div>
 
<div id="droppable" class="ui-widget-header">
  <p>请放置在这里</p>
</div>
 
<h3>当激活 draggable 时的反馈：</h3>
 
<div id="draggable2" class="ui-widget-content">
  <p>请拖拽我到目标</p>
</div>
 
<div id="droppable2" class="ui-widget-header">
  <p>请放置在这里</p>
</div>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-droppable-visual-feedback)

 

