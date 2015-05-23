 
#### JSONP 教程

 本章节我们将向大家介绍 JSONP 的知识。

 Jsonp(JSON with Padding) 是 json 的一种"使用模式"，可以让网页从别的域名（网站）那获取资料，即跨域读取数据。

  为什么我们从不同的域（网站）访问数据需要一个特殊的技术(JSONP )呢？这是因为同源策略。 


同源策略，它是由Netscape提出的一个著名的安全策略，现在所有支持JavaScript 的浏览器都会使用这个策略。

 

#### JSONP 应用

 
#### 1. 服务端JSONP格式数据

 如客户想访问 : http://www.w3cschool.cc/try/ajax/jsonp.php?jsonp=callbackFunction。

 假设客户期望返回JSON数据：["customername1","customername2"]。

 真正返回到客户端的数据显示为: callbackFunction(["customername1","customername2"])。

 服务端文件jsonp.php代码为：

 
```

<?php
header('Content-type: application/json');
//获取回调函数名
$jsoncallback = htmlspecialchars($_REQUEST ['jsoncallback']);
//json数据
$json_data = '["customername1","customername2"]';
//输出jsonp格式的数据
echo $jsoncallback . "(" . $json_data . ")";
?>

```
 
#### 2. 客户端实现 callbackFunction 函数

 
```

<script type="text/javascript">
function onCustomerLoaded(result, methodName)
{
    var html = '<ul>';
    for(var i = 0; i < result.length; i++)
    {
        html += '<li>' + result[i] + '</li>';
    }
    html += '</ul>';
    document.getElementById('divCustomers').innerHTML = html;
}
</script>

```
 
#### 页面展示

 
```

<div id="divCustomers"></div>

```
 
#### 客户端页面完整代码

 
```

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <title>JSONP 实例</title>
</head>
<body>
    <div id="divCustomers"></div>
    <script type="text/javascript">
        function callbackFunction(result, methodName)
        {
            var html = '<ul>';
            for(var i = 0; i < result.length; i++)
            {
                html += '<li>' + result[i] + '</li>';
            }
            html += '</ul>';
            document.getElementById('divCustomers').innerHTML = html;
        }
    </script>
<script type="text/javascript" src="http://www.w3cschool.cc/try/ajax/jsonp.php?jsoncallback=callbackFunction"></script>
</body>
</html>

```
 

#### jQuery 使用 JSONP

 以上代码可以使用 jQuery 代码实例：

 
```

<!DOCTYPE html>
<html>
<head>
	<title>JSONP 实例</title>
	<script src="http://apps.bdimg.com/libs/jquery/1.8.3/jquery.js"></script>	
</head>
<body>
<div id="divCustomers"></div>
<script>
$.getJSON("http://www.w3cschool.cc/try/ajax/jsonp.php?jsoncallback=?", function(data) {
	
	var html = '<ul>';
	for(var i = 0; i < data.length; i++)
	{
		html += '<li>' + data[i] + '</li>';
	}
	html += '</ul>';
	
	$('#divCustomers').html(html); 
});
</script>
</body>
</html> 

```
 

