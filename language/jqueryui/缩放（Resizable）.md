 jQuery UI 实例 - 缩放（Resizable）
  使用鼠标改变元素的尺寸。

 如需了解更多有关 resizable 交互的细节，请查看 API 文档 [可调整尺寸小部件（Resizable Widget）](http://www.w3cschool.cc/jqueryui/api-resizable.html)。

 

 
#### 默认功能

 在任意的 DOM 元素上启用 resizable 功能。通过鼠标拖拽右边或底边的边框到所需的宽度或高度。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 缩放（Resizable） - 默认功能</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <style>
  #resizable { width: 150px; height: 150px; padding: 0.5em; }
  #resizable h3 { text-align: center; margin: 0; }
  </style>
  <script>
  $(function() {
    $( "#resizable" ).resizable();
  });
  </script>
</head>
<body>
 
<div id="resizable" class="ui-widget-content">
  <h3 class="ui-widget-header">缩放（Resizable）</h3>
</div>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-resizable)

 
#### 动画

 使用 animate 选项（布尔值）使缩放行为动画化。当该选项设置为 true 时，拖拽轮廓到所需的位置，元素会在拖拽停止时以动画形式调整到该尺寸。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 缩放（Resizable） - 动画</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <style>
  #resizable { width: 150px; height: 150px; padding: 0.5em; }
  #resizable h3 { text-align: center; margin: 0; }
  .ui-resizable-helper { border: 1px dotted gray; }
  </style>
  <script>
  $(function() {
    $( "#resizable" ).resizable({
      animate: true
    });
  });
  </script>
</head>
<body>
 
<div id="resizable" class="ui-widget-content">
  <h3 class="ui-widget-header">动画</h3>
</div>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-resizable-animate)

 
#### 限制缩放区域

 定义缩放区域的边界。使用 containment 选项来指定一个父级的 DOM 元素或一个 jQuery 选择器，比如 'document.'。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 缩放（Resizable） - 限制缩放区域</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <style>
  #container { width: 300px; height: 300px; }
  #container h3 { text-align: center; margin: 0; margin-bottom: 10px; }
  #resizable { background-position: top left; width: 150px; height: 150px; }
  #resizable, #container { padding: 0.5em; }
  </style>
  <script>
  $(function() {
    $( "#resizable" ).resizable({
      containment: "#container"
    });
  });
  </script>
</head>
<body>
 
<div id="container" class="ui-widget-content">
  <h3 class="ui-widget-header">限制</h3>
  <div id="resizable" class="ui-state-active">
    <h3 class="ui-widget-header">缩放（Resizable）</h3>
  </div>
</div>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-resizable-constrain-area)

 
#### 延迟开始

 通过 delay 选项设置延迟开始缩放的毫秒数。通过 distance 选项设置光标被按下且拖拽指定像素后才允许缩放。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 缩放（Resizable） - 延迟开始</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <style>
  #resizable, #resizable2 { width: 150px; height: 150px; padding: 0.5em; }
  #resizable h3, #resizable2 h3 { text-align: center; margin: 0; }
  </style>
  <script>
  $(function() {
    $( "#resizable" ).resizable({
      delay: 1000
    });
 
    $( "#resizable2" ).resizable({
      distance: 40
    });
  });
  </script>
</head>
<body>
 
<h3 class="docs">时间延迟 (ms):</h3>
<div id="resizable" class="ui-widget-content">
  <h3 class="ui-widget-header">时间</h3>
</div>
 
<h3 class="docs">距离延迟 (px):</h3>
<div id="resizable2" class="ui-widget-content">
  <h3 class="ui-widget-header">距离</h3>
</div>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-resizable-delay-start)

 
#### 助手

 通过设置 helper 选项为一个 CSS class，当缩放时只显示元素的轮廓。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 缩放（Resizable） - 助手</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <style>
  #resizable { width: 150px; height: 150px; padding: 0.5em; }
  #resizable h3 { text-align: center; margin: 0; }
  .ui-resizable-helper { border: 2px dotted #00F; }
  </style>
  <script>
  $(function() {
    $( "#resizable" ).resizable({
      helper: "ui-resizable-helper"
    });
  });
  </script>
</head>
<body>
 
<div id="resizable" class="ui-widget-content">
  <h3 class="ui-widget-header">助手</h3>
</div>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-resizable-helper)

 
#### 最大/最小尺寸

 使用 maxHeight、maxWidth、minHeight 和 minWidth 选项限制 resizable 元素的最大或最小高度或宽度。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 缩放（Resizable） - 最大/最小尺寸</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <style>
  #resizable { width: 200px; height: 150px; padding: 5px; }
  #resizable h3 { text-align: center; margin: 0; }
  </style>
  <script>
  $(function() {
    $( "#resizable" ).resizable({
      maxHeight: 250,
      maxWidth: 350,
      minHeight: 150,
      minWidth: 200
    });
  });
  </script>
</head>
<body>
 
<div id="resizable" class="ui-widget-content">
  <h3 class="ui-widget-header">放大/缩小</h3>
</div>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-resizable-max-min)

 
#### 保持纵横比

 保持现有的纵横比或设置一个新的纵横比来限制缩放比例。设置 aspectRatio 选项为 true，且可选地传递一个新的比率（比如，4/3）。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 缩放（Resizable） - 保持纵横比</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <style>
  #resizable { width: 160px; height: 90px; padding: 0.5em; }
  #resizable h3 { text-align: center; margin: 0; }
  </style>
  <script>
  $(function() {
    $( "#resizable" ).resizable({
      aspectRatio: 16 / 9
    });
  });
  </script>
</head>
<body>
 
<div id="resizable" class="ui-widget-content">
  <h3 class="ui-widget-header">保持纵横比</h3>
</div>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-resizable-aspect-ratio)

 
#### 对齐到网格

 对齐 resizable 元素到网格。通过 grid 选项设置网格单元的尺寸（以像素为单位的高度和宽度）。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 缩放（Resizable） - 对齐到网格</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <style>
  #resizable { width: 150px; height: 150px; padding: 0.5em; }
  #resizable h3 { text-align: center; margin: 0; }
  </style>
  <script>
  $(function() {
    $( "#resizable" ).resizable({
      grid: 50
    });
  });
  </script>
</head>
<body>
 
<div id="resizable" class="ui-widget-content">
  <h3 class="ui-widget-header">网格</h3>
</div>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-resizable-snap-to-grid)

 
#### 同步缩放

 通过点击并拖拽一个元素的边来同时调整多个元素的尺寸。给 alsoResize 选项传递一个共享的选择器。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 缩放（Resizable） - 同步缩放</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <style>
  #resizable { background-position: top left; }
  #resizable, #also { width: 150px; height: 120px; padding: 0.5em; }
  #resizable h3, #also h3 { text-align: center; margin: 0; }
  #also { margin-top: 1em; }
  </style>
  <script>
  $(function() {
    $( "#resizable" ).resizable({
      alsoResize: "#also"
    });
    $( "#also" ).resizable();
  });
  </script>
</head>
<body>
 
<div id="resizable" class="ui-widget-header">
  <h3 class="ui-state-active">缩放</h3>
</div>
 
<div id="also" class="ui-widget-content">
  <h3 class="ui-widget-header">同步缩放</h3>
</div>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-resizable-synchronous-resize)

 
#### 文本框

 可缩放的文本框。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 缩放（Resizable） - 文本框</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <style>
  .ui-resizable-se {
    bottom: 17px;
  }
  </style>
  <script>
  $(function() {
    $( "#resizable" ).resizable({
      handles: "se"
    });
  });
  </script>
</head>
<body>
 
<textarea id="resizable" rows="5" cols="20"></textarea>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-resizable-textarea)

 
#### 视觉反馈

 通过设置 ghost 选项为 true，可在缩放期间显示一个半透明的元素，而不是显示一个实际的元素。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 缩放（Resizable） - 视觉反馈</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <style>
  #resizable { width: 150px; height: 150px; padding: 0.5em; }
  #resizable h3 { text-align: center; margin: 0; }
  .ui-resizable-ghost { border: 1px dotted gray; }
  </style>
  <script>
  $(function() {
    $( "#resizable" ).resizable({
      ghost: true
    });
  });
  </script>
</head>
<body>
 
<div id="resizable" class="ui-widget-content">
  <h3 class="ui-widget-header">Ghost</h3>
</div>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-resizable-visual-feedback)

 

