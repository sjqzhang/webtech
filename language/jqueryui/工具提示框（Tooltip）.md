 jQuery UI 实例 - 工具提示框（Tooltip）
  可自定义的、可主题化的工具提示框，替代原生的工具提示框。

 如需了解更多有关 tooltip 部件的细节，请查看 API 文档 [工具提示框部件（Tooltip Widget）](http://www.w3cschool.cc/jqueryui/api-tooltip.html)。

 

 
#### 默认功能

 悬停在链接上，或者使用 tab 键循环切换聚焦在每个元素上。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 工具提示框（Tooltip） - 默认功能</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <script>
  $(function() {
    $( document ).tooltip();
  });
  </script>
  <style>
  label {
    display: inline-block;
    width: 5em;
  }
  </style>
</head>
<body>
 
<p><a href="#" title="部件的名称">Tooltips</a> 可被绑定到任意的元素上。当您的鼠标悬停在元素上时，title 属性会显示在元素旁边的一个小框中，就像原生的工具提示框一样。</p>
<p>但是由于它不是一个原生的工具提示框，所以它可以被定义样式。通过 <a href="http://themeroller.com" title="ThemeRoller：jQuery UI 的主题创建应用程序">ThemeRoller</a> 创建的主题也可以相应地定义工具提示框的样式。</p>
<p>工具提示框也可以用于表单元素，来显示每个区域中的一些额外的信息。</p>
<p><label for="age">您的年龄：</label><input id="age" title="年龄仅用于统计。"></p>
<p>悬停在相应的区域上查看工具提示框。</p>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-tooltip)

 
#### 自定义样式

 悬停在链接上，或者使用 tab 键循环切换聚焦在每个元素上。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 工具提示框（Tooltip） - 自定义样式</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <script>
  $(function() {
    $( document ).tooltip({
      position: {
        my: "center bottom-20",
        at: "center top",
        using: function( position, feedback ) {
          $( this ).css( position );
          $( "<div>" )
            .addClass( "arrow" )
            .addClass( feedback.vertical )
            .addClass( feedback.horizontal )
            .appendTo( this );
        }
      }
    });
  });
  </script>
  <style>
  .ui-tooltip, .arrow:after {
    background: black;
    border: 2px solid white;
  }
  .ui-tooltip {
    padding: 10px 20px;
    color: white;
    border-radius: 20px;
    font: bold 14px "Helvetica Neue", Sans-Serif;
    text-transform: uppercase;
    box-shadow: 0 0 7px black;
  }
  .arrow {
    width: 70px;
    height: 16px;
    overflow: hidden;
    position: absolute;
    left: 50%;
    margin-left: -35px;
    bottom: -16px;
  }
  .arrow.top {
    top: -16px;
    bottom: auto;
  }
  .arrow.left {
    left: 20%;
  }
  .arrow:after {
    content: "";
    position: absolute;
    left: 20px;
    top: -20px;
    width: 25px;
    height: 25px;
    box-shadow: 6px 5px 9px -9px black;
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    tranform: rotate(45deg);
  }
  .arrow.top:after {
    bottom: -20px;
    top: auto;
  }
  </style>
</head>
<body>
 
<p><a href="#" title="部件的名称">Tooltips</a> 可被绑定到任意的元素上。当您的鼠标悬停在元素上时，title 属性会显示在元素旁边的一个小框中，就像原生的工具提示框一样。</p>
<p>但是由于它不是一个原生的工具提示框，所以它可以被定义样式。通过 <a href="http://themeroller.com" title="ThemeRoller：jQuery UI 的主题创建应用程序">ThemeRoller</a> 创建的主题也可以相应地定义工具提示框的样式。</p>
<p>工具提示框也可以用于表单元素，来显示每个区域中的一些额外的信息。</p>
<p><label for="age">您的年龄：</label><input id="age" title="年龄仅用于统计。"></p>
<p>悬停在相应的区域上查看工具提示框。</p>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-tooltip-custom-style)

 
#### 自定义动画

 本实例演示了如何使用 show 和 hide 选项来自定义动画，也可以使用 open 事件来自定义动画。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 工具提示框（Tooltip） - 自定义动画</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <script>
  $(function() {
    $( "#show-option" ).tooltip({
      show: {
        effect: "slideDown",
        delay: 250
      }
    });
    $( "#hide-option" ).tooltip({
      hide: {
        effect: "explode",
        delay: 250
      }
    });
    $( "#open-event" ).tooltip({
      show: null,
      position: {
        my: "left top",
        at: "left bottom"
      },
      open: function( event, ui ) {
        ui.tooltip.animate({ top: ui.tooltip.position().top + 10 }, "fast" );
      }
    });
  });
  </script>
</head>
<body>
 
<p>这里有多种方式自定义工具提示框的动画。</p>
<p>您可以使用 <a id="show-option" href="http://jqueryui.com/demos/tooltip/#option-show" title="向下滑动显示">show</a> 和
<a id="hide-option" href="http://jqueryui.com/demos/tooltip/#option-hide" title="爆炸隐藏">hide</a> 选项。</p>
<p>您也可以使用 <a id="open-event" href="http://jqueryui.com/demos/tooltip/#event-open" title="向下移动显示">open</a> 事件。</p>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-tooltip-custom-animation)

 
#### 自定义内容

 演示如何通过自定义 items 和 content 选项，来组合不同的事件委托工具提示框到一个单一的实例中。

 您可能需要与地图工具提示框进行交互，这是未来版本中的一个待实现的功能。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 工具提示框（Tooltip） - 自定义内容</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <style>
  .photo {
    width: 300px;
    text-align: center;
  }
  .photo .ui-widget-header {
    margin: 1em 0;
  }
  .map {
    width: 350px;
    height: 350px;
  }
  .ui-tooltip {
    max-width: 350px;
  }
  </style>
  <script>
  $(function() {
    $( document ).tooltip({
      items: "img, [data-geo], [title]",
      content: function() {
        var element = $( this );
        if ( element.is( "[data-geo]" ) ) {
          var text = element.text();
          return "<img class='map' alt='" + text +
            "' src='http://maps.google.com/maps/api/staticmap?" +
            "zoom=11&amp;size=350x350&amp;maptype=terrain&amp;sensor=false&amp;center=" +
            text + "'>";
        }
        if ( element.is( "[title]" ) ) {
          return element.attr( "title" );
        }
        if ( element.is( "img" ) ) {
          return element.attr( "alt" );
        }
      }
    });
  });
  </script>
</head>
<body>
 
<div class="ui-widget photo">
  <div class="ui-widget-header ui-corner-all">
    <h2>圣史蒂芬大教堂（St. Stephen's Cathedral）</h2>
    <h3><a href="http://maps.google.com/maps?q=vienna,+austria&amp;amp;z=11" data-geo="">奥地利维也纳（Vienna, Austria）</a></h3>
  </div>
  <a href="http://en.wikipedia.org/wiki/File:Wien_Stefansdom_DSC02656.JPG">
    <img src="http://www.w3cschool.cc/wp-content/uploads/2014/03/st-stephens.jpg" alt="圣史蒂芬大教堂（St. Stephen&amp;apos;s Cathedral）" class="ui-corner-all">
  </a>
</div>
 
<div class="ui-widget photo">
  <div class="ui-widget-header ui-corner-all">
    <h2>塔桥（Tower Bridge）</h2>
    <h3><a href="http://maps.google.com/maps?q=london,+england&amp;amp;z=11" data-geo="">英国伦敦（London, England）</a></h3>
  </div>
  <a href="http://en.wikipedia.org/wiki/File:Tower_bridge_London_Twilight_-_November_2006.jpg">
    <img src="http://www.w3cschool.cc/wp-content/uploads/2014/03/tower-bridge.jpg" alt="塔桥（Tower Bridge）" class="ui-corner-all">
  </a>
</div>
 
<p>所有的图片源自 <a href="http://commons.wikimedia.org/wiki/Main_Page">Wikimedia Commons</a>，且归 <a href="http://creativecommons.org/licenses/by-sa/3.0/deed.en" title="Creative Commons Attribution-ShareAlike 3.0">CC BY-SA 3.0</a> 下版权持有人所有。</p>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-tooltip-custom-content)

 
#### 表单

 使用下面的按钮来显示帮助文本，或者只需要让鼠标悬停在输入框上或者让输入框获得焦点，即可显示相应输入框的帮助文本。

 在 CSS 中定义一个固定的宽度，让同时显示所有的帮助文本时看起来更一致。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 工具提示框（Tooltip） - 表单</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <style>
  label {
    display: inline-block; width: 5em;
  }
  fieldset div {
    margin-bottom: 2em;
  }
  fieldset .help {
    display: inline-block;
  }
  .ui-tooltip {
    width: 210px;
  }
  </style>
  <script>
  $(function() {
    var tooltips = $( "[title]" ).tooltip();
    $( "<button>" )
      .text( "Show help" )
      .button()
      .click(function() {
        tooltips.tooltip( "open" );
      })
      .insertAfter( "form" );
  });
  </script>
</head>
<body>
 
<form>
  <fieldset>
    <div>
      <label for="firstname">名字</label>
      <input id="firstname" name="firstname" title="请提供您的名字。">
    </div>
    <div>
      <label for="lastname">姓氏</label>
      <input id="lastname" name="lastname" title="请提供您的姓氏。">
    </div>
    <div>
      <label for="address">地址</label>
      <input id="address" name="address" title="您的家庭或工作地址。">
    </div>
  </fieldset>
</form>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-tooltip-forms)

 
#### 跟踪鼠标

 本实例中的工具提示框是相对于鼠标进行定位的，当鼠标在元素上移动时，它会跟随鼠标移动。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 工具提示框（Tooltip） - 跟踪鼠标</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <style>
  label {
    display: inline-block;
    width: 5em;
  }
  </style>
  <script>
  $(function() {
    $( document ).tooltip({
      track: true
    });
  });
  </script>
</head>
<body>

<p><a href="#" title="部件的名称">Tooltips</a> 可被绑定到任意的元素上。当您的鼠标悬停在元素上时，title 属性会显示在元素旁边的一个小框中，就像原生的工具提示框一样。</p>
<p>但是由于它不是一个原生的工具提示框，所以它可以被定义样式。通过 <a href="http://themeroller.com" title="ThemeRoller：jQuery UI 的主题创建应用程序">ThemeRoller</a> 创建的主题也可以相应地定义工具提示框的样式。</p>
<p>工具提示框也可以用于表单元素，来显示每个区域中的一些额外的信息。</p>
<p><label for="age">您的年龄：</label><input id="age" title="年龄仅用于统计。"></p>
<p>悬停在相应的区域上查看工具提示框。</p>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-tooltip-tracking)

 
#### 视频播放器

 一个虚拟的视频播放器，带有喜欢/分享/统计按钮，每个按钮都带有自定义样式的工具提示框。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 工具提示框（Tooltip） - 视频播放器</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <style>
  .player {
    width: 500px;
    height: 300px;
    border: 2px groove gray;
    background: rgb(200, 200, 200);
    text-align: center;
    line-height: 300px;
  }
  .ui-tooltip {
    border: 1px solid white;
    background: rgba(20, 20, 20, 1);
    color: white;
  }
  .set {
    display: inline-block;
  }
  .notification {
    position: absolute;
    display: inline-block;
    font-size: 2em;
    padding: .5em;
    box-shadow: 2px 2px 5px -2px rgba(0,0,0,0.5);
  }
  </style>
  <script>
  $(function() {
    function notify( input ) {
      var msg = "已选择 " + $.trim( input.data( "tooltip-title" ) || input.text() );
      $( "<div>" )
        .appendTo( document.body )
        .text( msg )
        .addClass( "notification ui-state-default ui-corner-bottom" )
        .position({
          my: "center top",
          at: "center top",
          of: window
        })
        .show({
          effect: "blind"
        })
        .delay( 1000 )
        .hide({
          effect: "blind",
          duration: "slow"
        }, function() {
          $( this ).remove();
        });
    }
 
    $( "button" ).each(function() {
      var button = $( this ).button({
        icons: {
          primary: $( this ).data( "icon" )
        },
        text: !!$( this ).attr( "title" )
      });
      button.click(function() {
        notify( button );
      });
    });
    $( ".set" ).buttonset({
      items: "button"
    });
 
    $( document ).tooltip({
      position: {
        my: "center top",
        at: "center bottom+5",
      },
      show: {
        duration: "fast"
      },
      hide: {
        effect: "hide"
      }
    });
  });
  </script>
</head>
<body>
 
<div class="player">这里是视频 (HTML5?)</div>
<div class="tools">
  <span class="set">
    <button data-icon="ui-icon-circle-arrow-n" title="我喜欢这个视频">喜欢</button>
    <button data-icon="ui-icon-circle-arrow-s">我不喜欢这个视频</button>
  </span>
  <div class="set">
    <button data-icon="ui-icon-circle-plus" title="添加到播放列表">添加到</button>
    <button class="menu" data-icon="ui-icon-triangle-1-s">添加到收藏夹</button>
  </div>
  <button title="分享这个视频">分享</button>
  <button data-icon="ui-icon-alert">标记为不恰当</button>
</div>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-tooltip-video-player)

 

