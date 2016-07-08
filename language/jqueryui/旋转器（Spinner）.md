 jQuery UI 实例 - 旋转器（Spinner）
  通过向上/向下按钮和箭头键处理，为输入数值增强文本输入功能。

 如需了解更多有关 spinner 部件的细节，请查看 API 文档 [旋转器部件（Spinner Widget）](http://www.w3cschool.cc/jqueryui/api-spinner.html)。

 

 
#### 默认功能

 默认的旋转器。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 旋转器（Spinner） - 默认功能</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://jqueryui.com/resources/demos/external/jquery.mousewheel.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <script>
  $(function() {
    var spinner = $( "#spinner" ).spinner();
 
    $( "#disable" ).click(function() {
      if ( spinner.spinner( "option", "disabled" ) ) {
        spinner.spinner( "enable" );
      } else {
        spinner.spinner( "disable" );
      }
    });
    $( "#destroy" ).click(function() {
      if ( spinner.data( "ui-spinner" ) ) {
        spinner.spinner( "destroy" );
      } else {
        spinner.spinner();
      }
    });
    $( "#getvalue" ).click(function() {
      alert( spinner.spinner( "value" ) );
    });
    $( "#setvalue" ).click(function() {
      spinner.spinner( "value", 5 );
    });
 
    $( "button" ).button();
  });
  </script>
</head>
<body>
 
<p>
  <label for="spinner">选择一个值：</label>
  <input id="spinner" name="value">
</p>
 
<p>
  <button id="disable">切换禁用/启用</button>
  <button id="destroy">切换部件</button>
</p>
 
<p>
  <button id="getvalue">获取值</button>
  <button id="setvalue">设置值为 5</button>
</p>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-spinner)

 
#### 货币

 本实例是一个捐款表格，带有货币选择和数量旋转器。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 旋转器（Spinner） - 货币</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://jqueryui.com/resources/demos/external/jquery.mousewheel.js"></script>
  <script src="http://jqueryui.com/resources/demos/external/globalize.js"></script>
  <script src="http://jqueryui.com/resources/demos/external/globalize.culture.de-DE.js"></script>
  <script src="http://jqueryui.com/resources/demos/external/globalize.culture.ja-JP.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <script>
  $(function() {
    $( "#currency" ).change(function() {
      $( "#spinner" ).spinner( "option", "culture", $( this ).val() );
    });
 
    $( "#spinner" ).spinner({
      min: 5,
      max: 2500,
      step: 25,
      start: 1000,
      numberFormat: "C"
    });
  });
  </script>
</head>
<body>
 
<p>
  <label for="currency">要捐款的货币</label>
  <select id="currency" name="currency">
    <option value="en-US">US $</option>
    <option value="de-DE">EUR €</option>
    <option value="ja-JP">YEN ¥</option>
  </select>
</p>
<p>
  <label for="spinner">要捐款的数量：</label>
  <input id="spinner" name="spinner" value="5">
</p>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-spinner-currency)

 
#### 小数

 本实例是一个小数旋转器。增量设置为 0.01。处理文化变化的代码会读取当前的选择器的值，当改变文化时，会基于新的文化重新设置值的样式。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 旋转器（Spinner） - 小数</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://jqueryui.com/resources/demos/external/jquery.mousewheel.js"></script>
  <script src="http://jqueryui.com/resources/demos/external/globalize.js"></script>
  <script src="http://jqueryui.com/resources/demos/external/globalize.culture.de-DE.js"></script>
  <script src="http://jqueryui.com/resources/demos/external/globalize.culture.ja-JP.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <script>
  $(function() {
    $( "#spinner" ).spinner({
      step: 0.01,
      numberFormat: "n"
    });
 
    $( "#culture" ).change(function() {
      var current = $( "#spinner" ).spinner( "value" );
      Globalize.culture( $(this).val() );
      $( "#spinner" ).spinner( "value", current );
    });
  });
  </script>
</head>
<body>
 
<p>
  <label for="spinner">小数旋转器：</label>
  <input id="spinner" name="spinner" value="5.06">
</p>
<p>
  <label for="culture">选择一种用于格式化的文化：</label>
  <select id="culture">
    <option value="en-EN" selected="selected">English</option>
    <option value="de-DE">German</option>
    <option value="ja-JP">Japanese</option>
  </select>
</p>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-spinner-decimal)

 
#### 地图

 谷歌地图集成，使用旋转器来改变纬度和经度。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 旋转器（Spinner） - 地图</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://jqueryui.com/resources/demos/external/jquery.mousewheel.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <script>
  $(function() {
    function latlong() {
      return new google.maps.LatLng( $("#lat").val(), $("#lng").val() );
    }
    function position() {
      map.setCenter( latlong() );
    }
    $( "#lat, #lng" ).spinner({
      step: .001,
      change: position,
      stop: position
    });
 
    var map = new google.maps.Map( $("#map")[0], {
      zoom: 8,
      center: latlong(),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });
  });
  </script>
  <style>
  #map {
    width:500px;
    height:500px;
  }
  </style>
</head>
<body>
 
<label for="lat">纬度</label>
<input id="lat" name="lat" value="44.797">
<br>
<label for="lng">经度</label>
<input id="lng" name="lng" value="-93.278">
 
<div id="map"></div>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-spinner-latlong)

 
#### 溢出

 溢出旋转器限制范围从 -10 到 10。对于 10 以上的值，会溢出到 -10，反之亦然。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 旋转器（Spinner） - 溢出</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://jqueryui.com/resources/demos/external/jquery.mousewheel.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <script>
  $(function() {
    $( "#spinner" ).spinner({
      spin: function( event, ui ) {
        if ( ui.value > 10 ) {
          $( this ).spinner( "value", -10 );
          return false;
        } else if ( ui.value < -10 ) {
          $( this ).spinner( "value", 10 );
          return false;
        }
      }
    });
  });
  </script>
</head>
<body>
 
<p>
  <label for="spinner">选择一个值：</label>
  <input id="spinner" name="value">
</p>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-spinner-overflow)

 
#### 时间

 一个扩展自旋转器的自定义部件。使用 全球化（Globalization）插件来解析和输出时间戳，带有自定义的 step 和 page 选项。向上/向下光标用于分钟的递增/递减，向上/向下翻页用于小时的递增/递减。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 旋转器（Spinner） - 时间</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://jqueryui.com/resources/demos/external/jquery.mousewheel.js"></script>
  <script src="http://jqueryui.com/resources/demos/external/globalize.js"></script>
  <script src="http://jqueryui.com/resources/demos/external/globalize.culture.de-DE.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <script>
  $.widget( "ui.timespinner", $.ui.spinner, {
    options: {
      // 秒
      step: 60 * 1000,
      // 小时
      page: 60
    },
 
    _parse: function( value ) {
      if ( typeof value === "string" ) {
        // 已经是一个时间戳
        if ( Number( value ) == value ) {
          return Number( value );
        }
        return +Globalize.parseDate( value );
      }
      return value;
    },
 
    _format: function( value ) {
      return Globalize.format( new Date(value), "t" );
    }
  });
 
  $(function() {
    $( "#spinner" ).timespinner();
 
    $( "#culture" ).change(function() {
      var current = $( "#spinner" ).timespinner( "value" );
      Globalize.culture( $(this).val() );
      $( "#spinner" ).timespinner( "value", current );
    });
  });
  </script>
</head>
<body>
 
<p>
  <label for="spinner">时间旋转器：</label>
  <input id="spinner" name="spinner" value="08:30 PM">
</p>
<p>
  <label for="culture">选择一种用于格式化的文化：</label>
  <select id="culture">
    <option value="en-EN" selected="selected">English</option>
    <option value="de-DE">German</option>
  </select>
</p>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-spinner-time)

 

