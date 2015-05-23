 jQuery UI 实例 - 切换（Toggle）
  使用自定义效果来显示或隐藏匹配的元素。

 如需了解更多有关 .toggle() 方法的细节，请查看 API 文档 [.toggle()](http://www.w3cschool.cc/jqueryui/api-toggle.html)。

 

 
#### .toggle() 演示

 点击按钮预览特效。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 特效 - .toggle() 演示</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <style>
  .toggler {
    width: 500px;
    height: 200px;
  }
  #button {
    padding: .5em 1em;
    text-decoration: none;
  }
  #effect {
    position: relative;
    width: 240px;
    height: 135px;
    padding: 0.4em;
  }
  #effect h3 {
    margin: 0;
    padding: 0.4em;
    text-align: center;
  }
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
      } else if ( selectedEffect === "size" ) {
        options = { to: { width: 200, height: 60 } };
      }
 
      // 运行特效
      $( "#effect" ).toggle( selectedEffect, options, 500 );
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
    <h3 class="ui-widget-header ui-corner-all">切换（Toggle）</h3>
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
  <option value="fold">折叠特效（Fold Effect）</option>
  <option value="highlight">突出特效（Highlight Effect）</option>
  <option value="puff">膨胀特效（Puff Effect）</option>
  <option value="pulsate">跳动特效（Pulsate Effect）</option>
  <option value="scale">缩放特效（Scale Effect）</option>
  <option value="shake">震动特效（Shake Effect）</option>
  <option value="size">尺寸特效（Size Effect）</option>
  <option value="slide">滑动特效（Slide Effect）</option>
</select>
 
<a href="#" id="button" class="ui-state-default ui-corner-all">运行特效</a>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-toggle)

 

