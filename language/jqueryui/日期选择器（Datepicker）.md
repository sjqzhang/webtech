 jQuery UI 实例 - 日期选择器（Datepicker）
  从弹出框或内联日历选择一个日期。

 如需了解更多有关 datepicker 部件的细节，请查看 API 文档 [日期选择器部件（Datepicker Widget）](http://www.w3cschool.cc/jqueryui/api-datepicker.html)。

 

 
#### 默认功能

 日期选择器（Datepicker）绑定到一个标准的表单 input 字段上。把焦点移到 input 上（点击或者使用 tab 键），在一个小的覆盖层上打开一个交互日历。选择一个日期，点击页面上的任意地方（输入框即失去焦点），或者点击 Esc 键来关闭。如果选择了一个日期，则反馈显示为 input 的值。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 日期选择器（Datepicker） - 默认功能</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
</head>
<body>
 
<p>日期：<input type="text" id="datepicker"></p>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-datepicker)

 
#### 动画

 当打开或关闭 datepicker 时使用不同的动画。从下拉框中选择一个动画，然后在输入框中点击来查看它的效果。您可以使用三个标准动画中任意一个，或者使用 UI 特效中的任意一个。

 
```

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>jQuery UI 日期选择器（Datepicker） - 动画</title>
	<link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
	<script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
	<link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
	<script>
	$(function() {
		$( "#datepicker" ).datepicker();
		$( "#anim" ).change(function() {
			$( "#datepicker" ).datepicker( "option", "showAnim", $( this ).val() );
		});
	});
	</script>
</head>
<body>

<p>日期：<input type="text" id="datepicker" size="30"></p>

<p>动画：<br>
	<select id="anim">
		<option value="show">Show (默认)</option>
		<option value="slideDown">滑下</option>
		<option value="fadeIn">淡入</option>
		<option value="blind">Blind (UI 百叶窗特效)</option>
		<option value="bounce">Bounce (UI 反弹特效)</option>
		<option value="clip">Clip (UI 剪辑特效)</option>
		<option value="drop">Drop (UI 降落特效)</option>
		<option value="fold">Fold (UI 折叠特效)</option>
		<option value="slide">Slide (UI 滑动特效)</option>
		<option value="">无</option>
	</select>
</p>


</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-datepicker-animation)

 
#### 其他月份的日期

 datepicker 可以显示其他月份的日期，这些日期也可以设置成可选择的。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 日期选择器（Datepicker） - 其他月份的日期</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker({
      showOtherMonths: true,
      selectOtherMonths: true
    });
  });
  </script>
</head>
<body>
 
<p>日期：<input type="text" id="datepicker"></p>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-datepicker-other-months)

 
#### 显示按钮栏

 通过布尔值的 showButtonPanel 选项为选择当天日期显示一个"Today"按钮，为关闭日历显示一个"Done"按钮。默认情况下，当按钮栏显示时会启用每个按钮，但是按钮可通过其他的选项进行关闭。按钮文本可自定义。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 日期选择器（Datepicker） - 显示按钮栏</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker({
      showButtonPanel: true
    });
  });
  </script>
</head>
<body>
 
<p>日期：<input type="text" id="datepicker"></p>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-datepicker-buttonbar)

 
#### 内联显示

 datepicker 是嵌套在页面中显示，而不是显示在一个覆盖层中。只需要简单地在 div 上调用 .datepicker() 即可，而不是在 input 上调用。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 日期选择器（Datepicker） - 内联显示</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
</head>
<body>
 
日期：<div id="datepicker"></div>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-datepicker-inline)

 
#### 显示月份 &amp; 年份菜单

 显示月份和年份的下拉框，而不是显示静态的月份/年份标题，这样便于在大范围的时间跨度上导航。添加布尔值 changeMonth 和 changeYear 选项即可。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 日期选择器（Datepicker） - 显示月份 &amp;amp; 年份菜单</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  });
  </script>
</head>
<body>
 
<p>日期：<input type="text" id="datepicker"></p>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-datepicker-dropdown-month-year)

 
#### 显示多个月份

 设置 numberOfMonths 选项为一个整数 2，或者大于 2 的整数，来在一个 datepicker 中显示多个月份。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 日期选择器（Datepicker） - 显示多个月份</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker({
      numberOfMonths: 3,
      showButtonPanel: true
    });
  });
  </script>
</head>
<body>
 
<p>日期：<input type="text" id="datepicker"></p>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-datepicker-multiple-calendars)

 
#### 格式化日期

 以各种方式显示日期反馈。从下拉框中选择一种日期格式，然后在输入框中点击并选择一个日期，查看所选格式的日期显示。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 日期选择器（Datepicker） - 格式化日期</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
    $( "#format" ).change(function() {
      $( "#datepicker" ).datepicker( "option", "dateFormat", $( this ).val() );
    });
  });
  </script>
</head>
<body>
 
<p>日期：<input type="text" id="datepicker" size="30"></p>
 
<p>格式选项：<br>
  <select id="format">
    <option value="mm/dd/yy">Default - mm/dd/yy</option>
    <option value="yy-mm-dd">ISO 8601 - yy-mm-dd</option>
    <option value="d M, y">Short - d M, y</option>
    <option value="d MM, y">Medium - d MM, y</option>
    <option value="DD, d MM, yy">Full - DD, d MM, yy</option>
    <option value="&amp;apos;day&amp;apos; d &amp;apos;of&amp;apos; MM &amp;apos;in the year&amp;apos; yy">With text - 'day' d 'of' MM 'in the year' yy</option>
  </select>
</p>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-datepicker-date-formats)

 
#### 图标触发器

 点击输入框旁边的图标来显示 datepicker。设置 datepicker 在获得焦点时打开（默认行为），或者在点击图标时打开，或者在获得焦点/点击图标时打开。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 日期选择器（Datepicker） - 图标触发器</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker({
      showOn: "button",
      buttonImage: "images/calendar.gif",
      buttonImageOnly: true
    });
  });
  </script>
</head>
<body>
 
<p>日期：<input type="text" id="datepicker"></p>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-datepicker-icon-trigger)

 
#### 本地化日历

 本地化 datepicker 日历语言和格式（默认为 English / Western 格式）。datepicker 包含对从右到左读取的语言的内建支持，比如 Arabic 和 Hebrew。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 日期选择器（Datepicker） - 本地化日历</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <script src="http://jqueryui.com/resources/demos/datepicker/jquery.ui.datepicker-ar.js"></script>
  <script src="http://jqueryui.com/resources/demos/datepicker/jquery.ui.datepicker-fr.js"></script>
  <script src="http://jqueryui.com/resources/demos/datepicker/jquery.ui.datepicker-he.js"></script>
  <script src="http://jqueryui.com/resources/demos/datepicker/jquery.ui.datepicker-zh-TW.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker( $.datepicker.regional[ "fr" ] );
    $( "#locale" ).change(function() {
      $( "#datepicker" ).datepicker( "option",
        $.datepicker.regional[ $( this ).val() ] );
    });
  });
  </script>
</head>
<body>
 
<p>日期：<input type="text" id="datepicker">&amp;nbsp;
  <select id="locale">
    <option value="ar">Arabic (&amp;#8235;(&amp;#1575;&amp;#1604;&amp;#1593;&amp;#1585;&amp;#1576;&amp;#1610;&amp;#1577;</option>
    <option value="zh-TW">Chinese Traditional (&amp;#32321;&amp;#39636;&amp;#20013;&amp;#25991;)</option>
    <option value="">English</option>
    <option value="fr" selected="selected">French (Fran&amp;ccedil;ais)</option>
    <option value="he">Hebrew (&amp;#8235;(&amp;#1506;&amp;#1489;&amp;#1512;&amp;#1497;&amp;#1514;</option>
  </select></p>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-datepicker-localization)

 
#### 填充另一个输入框

 使用 altField 和 altFormat 选项，无论何时选择日期，会在另一个输入框中填充带有一定格式的日期。这个功能通过对电脑友好性的日期进一步加工后，向用户呈现一个用户友好性的日期。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 日期选择器（Datepicker） - 填充另一个输入框</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker({
      altField: "#alternate",
      altFormat: "DD, d MM, yy"
    });
  });
  </script>
</head>
<body>
 
<p>日期：<input type="text" id="datepicker">&amp;nbsp;<input type="text" id="alternate" size="30"></p>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-datepicker-alt-field)

 
#### 限制日期范围

 通过 minDate 和 maxDate 选项限制可选择的日期范围。设置起止日期为实际的日期（new Date(2009, 1 - 1, 26)），或者为与今天的一个数值偏移（-20），或者为一个周期和单位的字符串（'+1M +10D'）。如果设置为字符串，使用 'D' 表示天，使用 'W' 表示周，使用 'M' 表示月，使用 'Y' 表示年。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 日期选择器（Datepicker） - 限制日期范围</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker({ minDate: -20, maxDate: "+1M +10D" });
  });
  </script>
</head>
<body>
 
<p>日期：<input type="text" id="datepicker"></p>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-datepicker-min-max)

 
#### 选择一个日期范围

 选择要搜索的日期范围。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 日期选择器（Datepicker） - 选择一个日期范围</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <script>
  $(function() {
    $( "#from" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 3,
      onClose: function( selectedDate ) {
        $( "#to" ).datepicker( "option", "minDate", selectedDate );
      }
    });
    $( "#to" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 3,
      onClose: function( selectedDate ) {
        $( "#from" ).datepicker( "option", "maxDate", selectedDate );
      }
    });
  });
  </script>
</head>
<body>
 
<label for="from">从</label>
<input type="text" id="from" name="from">
<label for="to">到</label>
<input type="text" id="to" name="to">
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-datepicker-date-range)

 
#### 显示一年中的第几周

 datepicker 可以显示一年中的第几周。默认的计算是按照 ISO 8601 定义：每周从星期一开始，每年的第一周包含该年的第一个星期四。这就意味着一年中的一些天可能是属于另一年中的周。

 
```

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 日期选择器（Datepicker） - 显示一年中的第几周</title>
  <link rel="stylesheet" href="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://www.w3cschool.cc//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://www.w3cschool.cc//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker({
      showWeek: true,
      firstDay: 1
    });
  });
  </script>
</head>
<body>
 
<p>日期：<input type="text" id="datepicker"></p>
 
 
</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jqueryui-example-datepicker-show-week)

 

