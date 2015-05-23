 jQuery UI 实例 - 特效（Effect）
  对一个元素应用动画特效。

 如需了解更多有关 .effect() 方法的细节，请查看 API 文档 [.effect()](http://www.w3cschool.cc/jqueryui/api-effect.html)。

 

 
#### .effect() 演示

 点击按钮预览特效。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 特效 - .effect() 演示</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <style>
    .toggler { width: 500px; height: 200px; position: relative; }
    #button { padding: .5em 1em; text-decoration: none; }
    #effect { width: 240px; height: 135px; padding: 0.4em; position: relative; }
    #effect h3 { margin: 0; padding: 0.4em; text-align: center; }
    .ui-effects-transfer { border: 2px dotted gray; }
  </style>
  <script>
  $(function() {
    // 运行当前选中的特效
    function runEffect() {
      // 从中获取特效类型
      var selectedEffect = $( "#effectTypes" ).val();
 
      // 大多数的特效类型默认不需要传递选项
      var options = {};
      // 一些特效带有必需的参数
      if ( selectedEffect === "scale" ) {
        options = { percent: 0 };
      } else if ( selectedEffect === "transfer" ) {
        options = { to: "#button", className: "ui-effects-transfer" };
      } else if ( selectedEffect === "size" ) {
        options = { to: { width: 200, height: 60 } };
      }
 
      // 运行特效
      $( "#effect" ).effect( selectedEffect, options, 500, callback );
    };
 
    // 回调函数
    function callback() {
      setTimeout(function() {
        $( "#effect" ).removeAttr( "style" ).hide().fadeIn();
      }, 1000 );
    };
 
    // 根据选择菜单值设置特效
    $( "#button" ).click(function() {
      runEffect();
      return false;
    });
  });
  </script>
</head>
<body>
 
<div class="toggler">
  <div id="effect" class="ui-widget-content ui-corner-all">
    <h3 class="ui-widget-header ui-corner-all">特效（Effect）</h3>
    <p>
      Etiam libero neque, luctus a, eleifend nec, semper at, lorem. Sed pede. Nulla lorem metus, adipiscing ut, luctus sed, hendrerit vitae, mi.
    </p>
  </div>
</div>
 
<select name="effects" id="effectTypes">
  <option value="blind">百叶窗特效（Blind Effect）</option>
  <option value="bounce">反弹特效（Bounce Effect）</option>
  <option value="clip">剪辑特效（Clip Effect）</option>
  <option value="drop">降落特效（Drop Effect）</option>
  <option value="explode">爆炸特效（Explode Effect）</option>
  <option value="fade">淡入淡出特效（Fade Effect）</option>
  <option value="fold">折叠特效（Fold Effect）</option>
  <option value="highlight">突出特效（Highlight Effect）</option>
  <option value="puff">膨胀特效（Puff Effect）</option>
  <option value="pulsate">跳动特效（Pulsate Effect）</option>
  <option value="scale">缩放特效（Scale Effect）</option>
  <option value="shake">震动特效（Shake Effect）</option>
  <option value="size">尺寸特效（Size Effect）</option>
  <option value="slide">滑动特效（Slide Effect）</option>
  <option value="transfer">转移特效（Transfer Effect）</option>
</select>
 
<a href="#" id="button" class="ui-state-default ui-corner-all">运行特效</a>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-effect)

 
#### Easing 演示

 本实例使用 HTML Canvas 元素，绘制了 jQuery UI 提供的所有 easings。 点击每个图可查看该 easing 的行为。。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 特效 - Easing 演示</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <style>
  .graph {
    float: left;
    margin-left: 10px;
  }
  </style>
  <script>
  $(function() {
    if ( !$( "<canvas>" )[0].getContext ) {
      $( "<div>" ).text(
        "您的浏览器不支持 canvas，本演示需要在支持 canvas 的浏览器下进行。"
      ).appendTo( "#graphs" );
      return;
    }
 
    var i = 0,
      width = 100,
      height = 100;
 
    $.each( $.easing, function( name, impl ) {
      var graph = $( "<div>" ).addClass( "graph" ).appendTo( "#graphs" ),
        text = $( "<div>" ).text( ++i + ". " + name ).appendTo( graph ),
        wrap = $( "<div>" ).appendTo( graph ).css( 'overflow', 'hidden' ),
        canvas = $( "<canvas>" ).appendTo( wrap )[ 0 ];
 
      canvas.width = width;
      canvas.height = height;
      var drawHeight = height * 0.8,
        cradius = 10;
        ctx = canvas.getContext( "2d" );
      ctx.fillStyle = "black";
 
      // 绘制背景
      ctx.beginPath();
      ctx.moveTo( cradius, 0 );
      ctx.quadraticCurveTo( 0, 0, 0, cradius );
      ctx.lineTo( 0, height - cradius );
      ctx.quadraticCurveTo( 0, height, cradius, height );
      ctx.lineTo( width - cradius, height );
      ctx.quadraticCurveTo( width, height, width, height - cradius );
      ctx.lineTo( width, 0 );
      ctx.lineTo( cradius, 0 );
      ctx.fill();
 
      // 绘制底线
      ctx.strokeStyle = "#555";
      ctx.beginPath();
      ctx.moveTo( width * 0.1, drawHeight + .5 );
      ctx.lineTo( width * 0.9, drawHeight + .5 );
      ctx.stroke();
 
      // 绘制顶线
      ctx.strokeStyle = "#555";
      ctx.beginPath();
      ctx.moveTo( width * 0.1, drawHeight * .3 - .5 );
      ctx.lineTo( width * 0.9, drawHeight * .3 - .5 );
      ctx.stroke();
 
      // 绘制 easing
      ctx.strokeStyle = "white";
      ctx.beginPath();
      ctx.lineWidth = 2;
      ctx.moveTo( width * 0.1, drawHeight );
      $.each( new Array( width ), function( position ) {
        var state = position / width,
          val = impl( state, position, 0, 1, width );
        ctx.lineTo( position * 0.8 + width * 0.1,
          drawHeight - drawHeight * val * 0.7 );
      });
      ctx.stroke();
 
      // 点击时动态改变
      graph.click(function() {
        wrap
          .animate( { height: "hide" }, 2000, name )
          .delay( 800 )
          .animate( { height: "show" }, 2000, name );
      });
 
      graph.width( width ).height( height + text.height() + 10 );
    });
  });
  </script>
</head>
<body>
 
<div id="graphs"></div>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-effect-easing)

 

