 jQuery Autocomplete
  jQuery Autocomplete 插件根据用户输入值进行搜索和过滤，让用户快速找到并从预设值列表中选择。通过给 Autocomplete 字段焦点或者在其中输入字符，插件开始搜索匹配的条目并显示供选择的值的列表。通过输入更多的字符，用户可以过滤列表以获得更好的匹配。

 该插件现在是 [jQuery UI](http://www.w3cschool.cc/jqueryui/example-autocomplete.html) 的一部分，独立的版本不会再更新了。目前版本是 1.6。

 访问 [jQuery Autocomplete 官网](http://www.w3cschool.cc//bassistance.de/jquery-plugins/jquery-plugin-autocomplete/)，下载 jQuery Autocomplete 插件。

 如需了解更多有关 Autocomplete 的细节，请查看 API 文档 [自动完成部件（Autocomplete Widget）](http://www.w3cschool.cc/jqueryui/api-autocomplete.html)。

 

 
#### 实例演示

 jQuery Autocomplete 插件演示。

 
```

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>jQuery Autocomplete 插件</title>
<script type="text/javascript" src="http://jquery.bassistance.de/autocomplete/lib/jquery.js"></script>
<script type='text/javascript' src='http://jquery.bassistance.de/autocomplete/lib/jquery.bgiframe.min.js'></script>
<script type='text/javascript' src='http://jquery.bassistance.de/autocomplete/lib/jquery.ajaxQueue.js'></script>
<script type='text/javascript' src='http://jquery.bassistance.de/autocomplete/lib/thickbox-compressed.js'></script>
<script type='text/javascript' src='http://jquery.bassistance.de/autocomplete/jquery.autocomplete.js'></script>
<script type='text/javascript' src='http://jquery.bassistance.de/autocomplete/demo/localdata.js'></script>
<link rel="stylesheet" type="text/css" href="http://jquery.bassistance.de/autocomplete/demo/main.css" />
<link rel="stylesheet" type="text/css" href="http://jquery.bassistance.de/autocomplete/jquery.autocomplete.css" />
<link rel="stylesheet" type="text/css" href="http://jquery.bassistance.de/autocomplete/lib/thickbox.css" />
	
<script type="text/javascript">
$().ready(function() {

	function log(event, data, formatted) {
		$("<li>").html( !data ? "No match!" : "Selected: " + formatted).appendTo("#result");
	}
	
	function formatItem(row) {
		return row[0] + " (<strong>id: " + row[1] + "</strong>)";
	}
	function formatResult(row) {
		return row[0].replace(/(<.+?>)/gi, '');
	}
	
	$("#suggest1").focus().autocomplete(cities);
	$("#month").autocomplete(months, {
		minChars: 0,
		max: 12,
		autoFill: true,
		mustMatch: true,
		matchContains: false,
		scrollHeight: 220,
		formatItem: function(data, i, total) {
			// 不在值列表中显示当前月份（无论何种原因）
			if ( data[0] == months[new Date().getMonth()] ) 
				return false;
			return data[0];
		}
	});
	$("#suggest13").autocomplete(emails, {
		minChars: 0,
		width: 310,
		matchContains: "word",
		autoFill: false,
		formatItem: function(row, i, max) {
			return i + "/" + max + ": \"" + row.name + "\" [" + row.to + "]";
		},
		formatMatch: function(row, i, max) {
			return row.name + " " + row.to;
		},
		formatResult: function(row) {
			return row.to;
		}
	});
	$("#singleBirdRemote").autocomplete("search.php", {
		width: 260,
		selectFirst: false
	});
	$("#suggest14").autocomplete(cities, {
		matchContains: true,
		minChars: 0
	});
	$("#suggest3").autocomplete(cities, {
		multiple: true,
		mustMatch: true,
		autoFill: true
	});
	$("#suggest4").autocomplete('search.php', {
		width: 300,
		multiple: true,
		matchContains: true,
		formatItem: formatItem,
		formatResult: formatResult
	});
	$("#imageSearch").autocomplete("images.php", {
		width: 320,
		max: 4,
		highlight: false,
		scroll: true,
		scrollHeight: 300,
		formatItem: function(data, i, n, value) {
			return "<img src="http://www.w3cschool.cc/jquery/images/" + value + ""/> " + value.split(".")[0];
		},
		formatResult: function(data, value) {
			return value.split(".")[0];
		}
	});
	$("#tags").autocomplete(["c++", "java", "php", "coldfusion", "javascript", "asp", "ruby", "python", "c", "scala", "groovy", "haskell", "pearl"], {
		width: 320,
		max: 4,
		highlight: false,
		multiple: true,
		multipleSeparator: " ",
		scroll: true,
		scrollHeight: 300
	});
	
	
	$(":text, textarea").result(log).next().click(function() {
		$(this).prev().search();
	});
	$("#singleBirdRemote").result(function(event, data, formatted) {
		if (data)
			$(this).parent().next().find("input").val(data[1]);
	});
	$("#suggest4").result(function(event, data, formatted) {
		var hidden = $(this).parent().next().find(">:input");
		hidden.val( (hidden.val() ? hidden.val() + ";" : hidden.val()) + data[1]);
	});
    $("#suggest15").autocomplete(cities, { scroll: true } );
	$("#scrollChange").click(changeScrollHeight);
	
	$("#thickboxEmail").autocomplete(emails, {
		minChars: 0,
		width: 310,
		matchContains: true,
		highlightItem: false,
		formatItem: function(row, i, max, term) {
			return row.name.replace(new RegExp("(" + term + ")", "gi"), "<strong>$1</strong>") + "<br><span style='font-size: 80%;'>Email: &amp;lt;" + row.to + "&amp;gt;</span>";
		},
		formatResult: function(row) {
			return row.to;
		}
	});
	
	$("#clear").click(function() {
		$(":input").unautocomplete();
	});
});

function changeOptions(){
	var max = parseInt(window.prompt('请输入要显示项的数目：', jQuery.Autocompleter.defaults.max));
	if (max > 0) {
		$("#suggest1").setOptions({
			max: max
		});
	}
}

function changeScrollHeight() {
    var h = parseInt(window.prompt('请输入新的滚动高度（以像素为单位的数字）：', jQuery.Autocompleter.defaults.scrollHeight));
    if(h > 0) {
        $("#suggest1").setOptions({
			scrollHeight: h
		});
    }
}

function changeToMonths(){
	$("#suggest1")
		// 清除已有的数据
		.val("")
		// 改变本地数据为月份
		.setOptions({data: months})
		// 获取 label 标签
		.prev()
		// 更新 label 标签
		.text("月份（本地）：");
}
</script>
	
</head>

<body>

<h1 id="banner">jQuery Autocomplete 插件演示</h1>

<div id="content">
	
	<form autocomplete="off">
		<p>
			<label>单个城市（本地）：</label>
			<input type="text" id="suggest1" />
			<input type="button" value="获取值" />
			<input type="button" value="改变最大项" onclick="changeOptions();" />
			<input type="button" value="改为月份数据" onclick="changeToMonths();" />
			<input type="button" value="改变滚动高度" id="scrollChange" />
		</p>
		<p>
			<label>月份（本地）：</label>
			<input type="text" id="month" />
			<input type="button" value="获取值" />
			（当前月份已从列表中排除）
		</p>
		<p>
			<label>E-Mail（本地）：</label>
			<input type="text" id="suggest13" />
			<input type="button" value="获取值" />
		</p>
		<p>
			<label>单只鸟（远程）：</label>
			<input type="text" id="singleBirdRemote" />
			<input type="button" value="获取值" />
		</p>
		<p>
			<label>隐藏输入</label>
			<input />
		</p>
		<p>
			<label>单个城市（包含）：</label>
			<input type="text" id="suggest14" />
			<input type="button" value="获取值" />
		</p>
		<p>
			<label>多个城市（本地）：</label>
			<textarea id='suggest3' cols='40' rows='3'></textarea>
			<input type="button" value="获取值" />
		</p>
		<p>
			<label>多只鸟（远程）：</label>
			<textarea id='suggest4'></textarea>
			<input type="button" value="获取值" />
		</p>
		<p>
			<label>隐藏输入</label>
			<textarea></textarea>
		</p>
    <p>
			<label>图像搜索（远程）：</label>
			<input type="text" id='imageSearch' />
			<input type="button" value="获取值" />
		</p>
    <p>
			<label>标签（本地）：</label>
			<input type="text" id='tags' />
			<input type="button" value="获取值" />
		</p>
		<p>
			<label>一些下拉选项（&amp;lt;3 IE）：</label>
			<select>
				<option value="">Item 12334455</option>
				<option value="2">Item 2</option>
				<option value="3">Item 3</option>
				<option value="4">Item 4</option>
			</select>
		</p>
		
		<input type="submit" value="提交" />
	</form>
	
	<p>
		<a href="#TB_inline?height=155&amp;width=400&amp;inlineId=modalWindow" class="thickbox">点击这里查看一个 ThickBox 窗口内的 Autocomplete..</a>（即使超出范围插件也会正常工作）
	</p>		
	
	<div id="modalWindow" style="display: none;">
                <p>
                        <label>E-Mail（本地）：</label>
                        <input type="text" id="thickboxEmail" />
                        <input type="button" value="获取值" />
                </p>
		</div>
		
	<button id="clear">移除所有的 Autocomplete</button>
	
	<a href="http://jquery.bassistance.de/autocomplete/demo/search.phps">PHP 脚本用于远程的 Autocomplete</a>
	
	<h3>结果：</h3> <ol id="result"></ol>

</div>

</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jquery-plugin-autocomplete)

 

