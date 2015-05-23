 jQuery UI 实例 - 定位（Position）
  相对窗口、文档、锚、光标/鼠标等元素定位一个元素。

 如需了解更多有关 .position() 方法的细节，请查看 API 文档 [.position()](http://www.w3cschool.cc/jqueryui/api-position.html)。

 

 
#### 默认功能

 使用表单控件配置位置，或者拖拽被定位的元素来修改它的偏移量。向四周拖拽父元素来查看碰撞检测。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 定位（Position） - 默认功能</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <style>
  #parent {
    width: 60%;
    height: 40px;
    margin: 10px auto;
    padding: 5px;
    border: 1px solid #777;
    background-color: #fbca93;
    text-align: center;
  }
  .positionable {
    position: absolute;
    display: block;
    right: 0;
    bottom: 0;
    background-color: #bcd5e6;
    text-align: center;
  }
  #positionable1 {
    width: 75px;
    height: 75px;
  }
  #positionable2 {
    width: 120px;
    height: 40px;
  }
  select, input {
    margin-left: 15px;
  }
  </style>
  <script>
  $(function() {
    function position() {
      $( ".positionable" ).position({
        of: $( "#parent" ),
        my: $( "#my_horizontal" ).val() + " " + $( "#my_vertical" ).val(),
        at: $( "#at_horizontal" ).val() + " " + $( "#at_vertical" ).val(),
        collision: $( "#collision_horizontal" ).val() + " " + $( "#collision_vertical" ).val()
      });
    }
 
    $( ".positionable" ).css( "opacity", 0.5 );
 
    $( "select, input" ).bind( "click keyup change", position );
 
    $( "#parent" ).draggable({
      drag: position
    });
 
    position();
  });
  </script>
</head>
<body>
 
<div id="parent">
  <p>
  这是父元素的位置。
  </p>
</div>
 
<div class="positionable" id="positionable1">
  <p>
  to position
  </p>
</div>
 
<div class="positionable" id="positionable2">
  <p>
  to position 2
  </p>
</div>
 
<div style="padding: 20px; margin-top: 75px;">
  定位...
  <div style="padding-bottom: 20px;">
    <b>my:</b>
    <select id="my_horizontal">
      <option value="left">left</option>
      <option value="center">center</option>
      <option value="right">right</option>
    </select>
    <select id="my_vertical">
      <option value="top">top</option>
      <option value="center">center</option>
      <option value="bottom">bottom</option>
    </select>
  </div>
  <div style="padding-bottom: 20px;">
    <b>at:</b>
    <select id="at_horizontal">
      <option value="left">left</option>
      <option value="center">center</option>
      <option value="right">right</option>
    </select>
    <select id="at_vertical">
      <option value="top">top</option>
      <option value="center">center</option>
      <option value="bottom">bottom</option>
    </select>
  </div>
  <div style="padding-bottom: 20px;">
    <b>collision:</b>
    <select id="collision_horizontal">
      <option value="flip">flip</option>
      <option value="fit">fit</option>
      <option value="flipfit">flipfit</option>
      <option value="none">none</option>
    </select>
    <select id="collision_vertical">
      <option value="flip">flip</option>
      <option value="fit">fit</option>
      <option value="flipfit">flipfit</option>
      <option value="none">none</option>
    </select>
  </div>
</div>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-position)

 
#### 图像循环

 一个照片浏览器的原型，使用 Position 分别把图片定为在左边、中间、右边，然后循环显示。使用顶部的链接来循环图像，或者在图像的左侧或右侧点击来循环图像。请注意，当调整窗口大小时，会重新定位图像。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 定位（Position） - 图像循环</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <style>
  body {
    margin: 0;
  }
  #container {
    overflow: hidden;
    position: relative;
    height: 400px;
  }
 
  img {
    position: absolute;
  }
  </style>
  <script>
  $(function() {
    // 重构部件，去除这些插件方法
    $.fn.left = function( using ) {
      return this.position({
        my: "right middle",
        at: "left+25 middle",
        of: "#container",
        collision: "none",
        using: using
      });
    };
    $.fn.right = function( using ) {
      return this.position({
        my: "left middle",
        at: "right-25 middle",
        of: "#container",
        collision: "none",
        using: using
      });
    };
    $.fn.center = function( using ) {
      return this.position({
        my: "center middle",
        at: "center middle",
        of: "#container",
        using: using
      });
    };
 
    $( "img:eq(0)" ).left();
    $( "img:eq(1)" ).center();
    $( "img:eq(2)" ).right();
 
    function animate( to ) {
      $( this ).stop( true, false ).animate( to );
    }
    function next( event ) {
      event.preventDefault();
      $( "img:eq(2)" ).center( animate );
      $( "img:eq(1)" ).left( animate );
      $( "img:eq(0)" ).right().appendTo( "#container" );
    }
    function previous( event ) {
      event.preventDefault();
      $( "img:eq(0)" ).center( animate );
      $( "img:eq(1)" ).right( animate );
      $( "img:eq(2)" ).left().prependTo( "#container" );
    }
    $( "#previous" ).click( previous );
    $( "#next" ).click( next );
 
    $( "img" ).click(function( event ) {
      $( "img" ).index( this ) === 0 ? previous( event ) : next( event );
    });
 
    $( window ).resize(function() {
      $( "img:eq(0)" ).left( animate );
      $( "img:eq(1)" ).center( animate );
      $( "img:eq(2)" ).right( animate );
    });
  });
  </script>
</head>
<body>
 
<div id="container">
  <img src="http://www.w3cschool.cc/wp-content/uploads/2014/03/earth.jpg" width="458" height="308" alt="earth">
  <img src="http://www.w3cschool.cc/wp-content/uploads/2014/03/flight.jpg" width="512" height="307" alt="flight">
  <img src="http://www.w3cschool.cc/wp-content/uploads/2014/03/rocket.jpg" width="300" height="353" alt="rocket">
 
  <a id="previous" href="#">上一个</a>
  <a id="next" href="#">下一个</a>
</div>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-position-cycler)

 

