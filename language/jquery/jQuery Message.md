 jQuery Message
  jQuery Message 插件允许您很容易地在一个覆盖层显示反馈消息。消息会在一段时间后自动消失，不需要单击"确定"按钮等。用户可以通过移动鼠标或点击任何地方加快隐藏信息。

 该插件目前版本是 1.0.0。

 访问 [jQuery Message 官网](http://www.w3cschool.cc//bassistance.de/jquery-plugins/jquery-plugin-message/)，下载 jQuery Message 插件。

 

 
#### 使用方式

 如需使用 Message 插件，请选择要显示文本的元素，把文本作为参数传递给它：

 
```

$(function() {
  $().message("Hello world!");
  // or
  $(".feedback").message();
});

```
 有几个可用的默认选项。如果您有兴趣，可以查看下面完整的实例演示。

 
#### 实例演示

 jQuery Message 插件演示。

 
```

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>jQuery Message 插件</title>

<link rel="stylesheet" type="text/css" media="screen" href="http://jquery.bassistance.de/message/jquery.message.css" />

<script src="http://jquery.bassistance.de/message/lib/jquery-1.3.2.js" type="text/javascript"></script>
<script src="http://jquery.bassistance.de/message/jquery.message.js" type="text/javascript"></script>

<script type="text/javascript">
$(function() {
	$().message("Hello world, on document ready!");
	$("#demo").submit(function(e) {
		e.preventDefault();
		$().message($("#message").val());
	})
});
</script>

<style type="text/css">

</style>

</head>
<body>

<h1 id="banner">jQuery Message 插件演示</h1>
<div id="main">
	
	<form id="demo">
		<input name="message" id="message" />
		<input type="submit" value="显示消息" />
	</form>
	
</div>

</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jquery-plugin-message)

 

