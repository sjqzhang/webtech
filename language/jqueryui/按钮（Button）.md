 jQuery UI 实例 - 按钮（Button）
  用带有适当的悬停（hover）和激活（active）的样式的可主题化按钮来加强标准表单元素（比如按钮、输入框、锚）的功能。

 如需了解更多有关 button 部件的细节，请查看 API 文档 [按钮部件（Button Widget）](http://www.w3cschool.cc/jqueryui/api-button.html)。

 

 
#### 默认功能

 可用于按钮的标记实例：一个 button 元素，一个类型为 submit 的 input 元素和一个锚。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 按钮（Button） - 默认功能</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <script>
  $(function() {
    $( "input[type=submit], a, button" )
      .button()
      .click(function( event ) {
        event.preventDefault();
      });
  });
  </script>
</head>
<body>
 
<button>一个 button 元素</button>
 
<input type="submit" value="一个提交按钮">
 
<a href="#">一个锚</a>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-button)

 
#### 复选框

 通过 button 部件把复选框显示为切换按钮样式。与复选框相关的 label 元素作为按钮文本。

 本实例通过在一个公共的容器上调用 .buttonset()，演示了三个显示为按钮样式的复选框。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 按钮（Button） - 复选框</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <script>
  $(function() {
    $( "#check" ).button();
    $( "#format" ).buttonset();
  });
  </script>
  <style>
  #format { margin-top: 2em; }
  </style>
</head>
<body>
 
<input type="checkbox" id="check"><label for="check">切换</label>
 
<div id="format">
  <input type="checkbox" id="check1"><label for="check1">B</label>
  <input type="checkbox" id="check2"><label for="check2">I</label>
  <input type="checkbox" id="check3"><label for="check3">U</label>
</div>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-button-checkbox)

 
#### 图标

 一些带有文本和图标的各种组合的按钮

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 按钮（Button） - 图标</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <script>
  $(function() {
    $( "button:first" ).button({
      icons: {
        primary: "ui-icon-locked"
      },
      text: false
    }).next().button({
      icons: {
        primary: "ui-icon-locked"
      }
    }).next().button({
      icons: {
        primary: "ui-icon-gear",
        secondary: "ui-icon-triangle-1-s"
      }
    }).next().button({
      icons: {
        primary: "ui-icon-gear",
        secondary: "ui-icon-triangle-1-s"
      },
      text: false
    });
  });
  </script>
</head>
<body>
 
<button>只带有图标的按钮</button>
<button>图标在左侧的按钮</button>
<button>带有两个图标的按钮</button>
<button>带有两个图标且不带文本的按钮</button>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-button-icons)

 
#### 单选

 三个单选按钮转变为一套按钮。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 按钮（Button） - 单选</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <script>
  $(function() {
    $( "#radio" ).buttonset();
  });
  </script>
</head>
<body>
 
<form>
  <div id="radio">
    <input type="radio" id="radio1" name="radio"><label for="radio1">选择 1</label>
    <input type="radio" id="radio2" name="radio" checked="checked"><label for="radio2">选择 2</label>
    <input type="radio" id="radio3" name="radio"><label for="radio3">选择 3</label>
  </div>
</form>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-button-radio)

 
#### 分割按钮

 

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 按钮（Button） - 分割按钮</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <style>
    .ui-menu { position: absolute; width: 100px; }
  </style>
  <script>
  $(function() {
    $( "#rerun" )
      .button()
      .click(function() {
        alert( "Running the last action" );
      })
      .next()
        .button({
          text: false,
          icons: {
            primary: "ui-icon-triangle-1-s"
          }
        })
        .click(function() {
          var menu = $( this ).parent().next().show().position({
            my: "left top",
            at: "left bottom",
            of: this
          });
          $( document ).one( "click", function() {
            menu.hide();
          });
          return false;
        })
        .parent()
          .buttonset()
          .next()
            .hide()
            .menu();
  });
  </script>
</head>
<body>
 
<div>
  <div>
    <button id="rerun">运行最后的动作</button>
    <button id="select">选择一个动作</button>
  </div>
  <ul>
    <li><a href="#">打开...</a></li>
    <li><a href="#">保存</a></li>
    <li><a href="#">删除</a></li>
  </ul>
</div>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-button-splitbutton)

 
#### 工具栏

 一个多媒体播放器的工具栏。请看基础的标记：一些 button 元素，Shuffle 按钮是一个类型为 checkbox 的 input，Repeat 选项是三个类型为 radio 的 input。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 按钮（Button） - 工具栏</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <style>
  #toolbar {
    padding: 4px;
    display: inline-block;
  }
  /* support: IE7 */
  *+html #toolbar {
    display: inline;
  }
  </style>
  <script>
  $(function() {
    $( "#beginning" ).button({
      text: false,
      icons: {
        primary: "ui-icon-seek-start"
      }
    });
    $( "#rewind" ).button({
      text: false,
      icons: {
        primary: "ui-icon-seek-prev"
      }
    });
    $( "#play" ).button({
      text: false,
      icons: {
        primary: "ui-icon-play"
      }
    })
    .click(function() {
      var options;
      if ( $( this ).text() === "play" ) {
        options = {
          label: "pause",
          icons: {
            primary: "ui-icon-pause"
          }
        };
      } else {
        options = {
          label: "play",
          icons: {
            primary: "ui-icon-play"
          }
        };
      }
      $( this ).button( "option", options );
    });
    $( "#stop" ).button({
      text: false,
      icons: {
        primary: "ui-icon-stop"
      }
    })
    .click(function() {
      $( "#play" ).button( "option", {
        label: "play",
        icons: {
          primary: "ui-icon-play"
        }
      });
    });
    $( "#forward" ).button({
      text: false,
      icons: {
        primary: "ui-icon-seek-next"
      }
    });
    $( "#end" ).button({
      text: false,
      icons: {
        primary: "ui-icon-seek-end"
      }
    });
    $( "#shuffle" ).button();
    $( "#repeat" ).buttonset();
  });
  </script>
</head>
<body>
 
<div id="toolbar" class="ui-widget-header ui-corner-all">
  <button id="beginning">开头</button>
  <button id="rewind">快退</button>
  <button id="play">播放</button>
  <button id="stop">停止</button>
  <button id="forward">快进</button>
  <button id="end">结尾</button>
 
  <input type="checkbox" id="shuffle"><label for="shuffle">Shuffle</label>
 
  <span id="repeat">
    <input type="radio" id="repeat0" name="repeat" checked="checked"><label for="repeat0">No Repeat</label>
    <input type="radio" id="repeat1" name="repeat"><label for="repeat1">Once</label>
    <input type="radio" id="repeatall" name="repeat"><label for="repeatall">All</label>
  </span>
</div>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-button-toolbar)

 

