 jQuery Accordion
  jQuery Accordion 插件用于创建折叠菜单。它通常与嵌套的列表、定义列表或嵌套的 div 一起使用。选项用于指定结构、激活的元素和定制的动画。

 该插件现在是 [jQuery UI](http://www.w3cschool.cc/jqueryui/example-accordion.html) 的一部分，独立的版本不会再更新了。目前版本是 1.6。

 访问 [jQuery Accordion 官网](http://www.w3cschool.cc//bassistance.de/jquery-plugins/jquery-plugin-accordion/)，下载 jQuery Accordion 插件。

 如需了解更多有关 Accordion 的细节，请查看 API 文档 [折叠面板部件（Accordion Widget）](http://www.w3cschool.cc/jqueryui/api-accordion.html)。

 

 
#### 实例演示

 jQuery Accordion 插件演示。

 
```

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>jQuery Accordion 插件</title>
	
	<link rel="stylesheet" href="http://jquery.bassistance.de/accordion/demo/demo.css" />
	
	<script type="text/javascript" src="http://jquery.bassistance.de/accordion/lib/jquery.js"></script>
	<script type="text/javascript" src="http://jquery.bassistance.de/accordion/lib/chili-1.7.pack.js"></script>
	
	<script type="text/javascript" src="http://jquery.bassistance.de/accordion/lib/jquery.easing.js"></script>
	<script type="text/javascript" src="http://jquery.bassistance.de/accordion/lib/jquery.dimensions.js"></script>
	<script type="text/javascript" src="http://jquery.bassistance.de/accordion/jquery.accordion.js"></script>

	<script type="text/javascript">
	jQuery().ready(function(){
		// 简单的 accordion
		jQuery('#list1a').accordion();
		jQuery('#list1b').accordion({
			autoHeight: false
		});
		
		// 第二个简单的 accordion，带有特殊标记
		jQuery('#navigation').accordion({
			active: false,
			header: '.head',
			navigation: true,
			event: 'mouseover',
			fillSpace: true,
			animated: 'easeslide'
		});
		
		// 定制 accordion
		jQuery('#list2').accordion({
			event: 'mouseover',
			active: '.selected',
			selectedClass: 'active',
			animated: "bounceslide",
			header: "dt"
		}).bind("changeaccordion", function(event, ui) {
			jQuery('<div>' + ui.oldHeader.text() + ' hidden, ' + ui.newHeader.text() + ' shown</div>').appendTo('#log');
		});
		
		// 第一个简单的 accordion，带有特殊标记
		jQuery('#list3').accordion({
			header: 'div.title',
			active: false,
			alwaysOpen: false,
			animated: false,
			autoHeight: false
		});
		
		var wizard = $("#wizard").accordion({
			header: '.title',
			event: false
		});
		
		var wizardButtons = $([]);
		$("div.title", wizard).each(function(index) {
			wizardButtons = wizardButtons.add($(this)
			.next()
			.children(":button")
			.filter(".next, .previous")
			.click(function() {
				wizard.accordion("activate", index + ($(this).is(".next") ? 1 : -1))
			}));
		});
		
		// 绑定到 select 的 change 事件，控制第一个和第二个 accordion
		// 与标签（tab）插件的 triggerTab() 类似，不带有额外的方法
		var accordions = jQuery('#list1a, #list1b, #list2, #list3, #navigation, #wizard');
		
		jQuery('#switch select').change(function() {
			accordions.accordion("activate", this.selectedIndex-1 );
		});
		jQuery('#close').click(function() {
			accordions.accordion("activate", -1);
		});
		jQuery('#switch2').change(function() {
			accordions.accordion("activate", this.value);
		});
		jQuery('#enable').click(function() {
			accordions.accordion("enable");
		});
		jQuery('#disable').click(function() {
			accordions.accordion("disable");
		});
		jQuery('#remove').click(function() {
			accordions.accordion("destroy");
			wizardButtons.unbind("click");
		});
	});
	</script>

</head>
<body>

<h1 id="banner">jQuery Accordion 插件演示</h1>
<div id="main">

	<fieldset>
		<legend>标准的，容器是一个 div，标题是 h3，内容是 div 和嵌套的 p。</legend>	

		<h3>代码</h3>
		<code class="mix">jQuery('#list1a').accordion();
jQuery('#list1b').accordion({
	autoHeight: false
});</code>

		<div class="basic" style="float:left;"  id="list1a">
			<a>There is one obvious advantage:</a>
			<div>
				<p>
					You've seen it coming!<br/>
					Buy now and get nothing for free!<br/>
					Well, at least no free beer. Perhaps a bear,<br/>
					if you can afford it.
				</p>
			</div>
			<a>Now that you've got...</a>
			<div>
				<p>
					your bear, you have to admit it!<br/>
					No, we aren't selling bears.
				</p>
			</div>
			<a>Rent one bear, ...</a>
			<div>
				<p>
					get two for three beer.
				</p>
				<p>
					And now, for something completely different.<br/>
					And now, for something completely different.<br/>
					And now, for something completely different.<br/>
					And now, for something completely different.<br/>
					And now, for something completely different.<br/>
					And now, for something completely different.<br/>
					And now, for something completely different.<br/>
					And now, for something completely different.<br/>
					Period.
				</p>
			</div>
		</div>
			
		<div class="basic" style="float:left; margin-left: 2em;" id="list1b">
			<a>There is one obvious advantage:</a>
			<div>
				<p>
					You've seen it coming!<br/>
					Buy now and get nothing for free!<br/>
					Well, at least no free beer. Perhaps a bear,<br/>
					if you can afford it.
				</p>
			</div>
			<a>Now that you've got...</a>
			<div>
				<p>
					your bear, you have to admit it!<br/>
					No, we aren't selling bears.
				</p>
			</div>
			<a>Rent one bear, ...</a>
			<div>
				<p>
					get two for three beer.
				</p>
				<p>
					And now, for something completely different.<br/>
					And now, for something completely different.<br/>
					And now, for something completely different.<br/>
					And now, for something completely different.<br/>
					And now, for something completely different.<br/>
					And now, for something completely different.<br/>
					And now, for something completely different.<br/>
					And now, for something completely different.<br/>
					Period.
				</p>
			</div>
		</div>
		
	</fieldset>
		
	<fieldset>
		<legend>导航 - 带有锚和嵌套列表的无序列表。</legend>
		<p>基于位置的保存状态：激活的元素是基于 location.hash 被选中的：点击其中一个链接，重新载入页面。</p>

		<h3>代码</h3>
		<code class="mix">jQuery('#navigation').accordion({
	active: false,
	header: '.head',
	navigation: true,
	event: 'mouseover',
	fillSpace: true,
	animated: 'easeslide'
});</code>
		<div  style="height:250px;margin-bottom:1em;">
			<ul id="navigation">
				<li>
					<a class="head" href="http://www.w3cschool.cc/jquery/?p=1.1.1">Guitar</a>
					<ul>
						<li><a href="http://www.w3cschool.cc/jquery/?p=1.1.1.1">Electric</a></li>
						<li><a href="http://www.w3cschool.cc/jquery/?p=1.1.1.2">Acoustic</a></li>
						<li><a href="http://www.w3cschool.cc/jquery/?p=1.1.1.3">Amps</a></li>
						<li><a href="http://www.w3cschool.cc/jquery/?p=1.1.1.4.1">Effects A</a></li>
						<li><a href="http://www.w3cschool.cc/jquery/?p=1.1.1.4.2">Effects B</a></li>
						<li><a href="http://www.w3cschool.cc/jquery/?p=1.1.1.4.3">Effects C</a></li>
						<li><a href="http://www.w3cschool.cc/jquery/?p=1.1.1.4.4">Effects D</a></li>
						<li><a href="http://www.w3cschool.cc/jquery/?p=1.1.1.5">Accessories</a></li>
					</ul> 
				</li>
				<li>
					<a class="head" href="http://www.w3cschool.cc/jquery/?p=1.1.2">Bass</a>
					<ul>
						<li><a href="http://www.w3cschool.cc/jquery/?p=1.1.2.1">Electric</a></li>
						<li><a href="http://www.w3cschool.cc/jquery/?p=1.1.2.2">Acoustic</a></li>
						<li><a href="http://www.w3cschool.cc/jquery/?p=1.1.2.3">Amps</a></li>
						<li><a href="http://www.w3cschool.cc/jquery/?p=1.1.2.4">Effects</a></li>
						<li><a href="http://www.w3cschool.cc/jquery/?p=1.1.2.5">Accessories</a></li>
					</ul> 
				</li>
				<li>
					<a class="head" href="http://www.w3cschool.cc/jquery/?p=1.1.3">Drums</a>
					<ul>
						<li><a href="http://www.w3cschool.cc/jquery/?p=1.1.3.2">Acoustic Drums</a></li>
						<li><a href="http://www.w3cschool.cc/jquery/?p=1.1.3.3">Electronic Drums</a></li>
						<li><a href="http://www.w3cschool.cc/jquery/?p=1.1.3.4">Cymbals</a></li>
						<li><a href="http://www.w3cschool.cc/jquery/?p=1.1.3.5">Hardware</a></li>
						<li><a href="http://www.w3cschool.cc/jquery/?p=1.1.3.6">Accessories</a></li>
					</ul> 
				</li>
			</ul>
		</div>
		
	</fieldset>

	<fieldset>
		<legend>带有选项的，容器是一个定义列表，标题是 dt，内容是 dd。</legend>
		
		<h3>代码</h3>
		<code class="mix">jQuery('#list2').accordion({
	event: 'mouseover',
	active: '.selected',
	selectedClass: 'active',
	animated: "bounceslide",
	header: "dt"
}).bind("change.ui-accordion", function(event, ui) {
	jQuery('&amp;lt;div&amp;gt;' + ui.oldHeader.text() + ' hidden, ' + ui.newHeader.text() + ' shown&amp;lt;/div&amp;gt;').appendTo('#log');
});</code>

		<dl id="list2">
			<dt class="red">Red</dt>
			<dd>
				Fancy stuff about red thingies.
			</dd>
			<dt class="green selected">Green</dt>
			<dd>
				Green! Green! Green!
			</dd>
			<dt class="blue">Blue</dt>
			<dd>
				Cool kids are blue.
			</dd>
		</dl>
		
	</fieldset>

	<fieldset>
		<legend>Divitus 结构，div 容器，div 标题（class="title"），div 内容，开始状态时没有打开的面板，面板可被完全关闭。</legend>
		
		<h3>代码</h3>
		<code class="mix">jQuery('#list3').accordion({
	header: 'div.title',
	active: false,
	alwaysOpen: false,
	animated: false,
	autoHeight: false
});</code>

		<div id="list3">
			<div>
				<div class="title">Tennis</div>
				<div>
					One ball, two players. Lots of fun.
				</div>
			</div>
			<div>
				<div class="title">Soccer</div>
				<div>
					One ball, 22 players. Lots of fun. <a href="http://google.com">Go to google?</a>
				</div>
			</div>
			<div>
				<div class="title">Baseball</div>
				<div>
					<p>
						Well, one ball, some guys running around, some guys hitting others with a stick.<br/>
						Sounds like fun, doesn't it?
					</p>
					<p>
						Well, apart from the running part.
						<a href="#navigation">Navigation example</a>
					</p>
				</div>
			</div>
		</div>
		
	</fieldset>
	
	<fieldset>
		<legend>accordion 向导</legend>
		
		<h3>代码</h3>
		<code class="mix">var wizard = $("#wizard").accordion({
	header: '.title',
	event: false
});

$("div.title", wizard).each(function(index) {
	$(this)
	.next()
	.children(":button")
	.filter(".next, .previous")
	.click(function() {
		wizard.changeAccordion("activate", index + ($(this).is(".next") ? 1 : -1))
	});
});</code>
	
		<div id="wizard">
			<div>
				<div class="title">标题 1</div>
				<div>
					内容 1<br/>
					<input type="button" class="next" value="下一个" />
				</div>
			</div>
			<div>
		
				<div class="title">标题 2</div>
				<div>
					内容 2<br/>
					<input type="button" class="previous" value="上一个"/>
					<input type="button" class="next" value="下一个"/>
				</div>
			</div>
			<div>
				<div class="title">标题 3</div>
		
				<div>
					内容 3<br/>
					<input type="button" class="previous" value="上一个"/>
				</div>
			</div>
		
		
		</div>
		<br /><br /><br /><br /><br />
	</fieldset>
	
	<div id="switch" style="background-color:grey;padding:10px;">
		<select>
			<option>切换到...</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
		</select>
		<button id="close">关闭全部</button>
		<button id="enable">启用全部</button>
		<button id="disable">禁用全部</button>
		<button id="remove">移除全部</button>
		<br />通过选择器激活，例如 ':first' 或 ':eq(1)': <input id="switch2" />
	</div>

	<div id="log" style="background-color:grey;padding:10px;"><div><strong>Log</strong></div></div>
</div>

</body>
</html>

```
 [查看演示](http://www.w3cschool.cc/try/tryit.php?filename=jquery-plugin-accordion)

 

