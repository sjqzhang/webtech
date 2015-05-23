 jQuery Password Validation（密码验证）
  jQuery Password Validation（密码验证）插件扩展了 jQuery Validate 插件，提供了两种组件：

 一种评价密码的相关因素的功能：比如大小写字母的混合情况、字符（数字、特殊字符）的混合情况、长度、与用户名的相似度（可选的）。

 一种使用评价功能显示密码强度的验证插件自定义方法。显示的文本可以被本地化。

 您可以简单地自定义强度显示的外观、本地化消息显示，并集成到已有的表单中。

 该插件目前版本是 1.0.0。

 访问 [jQuery Password Validation（密码验证）官网](http://www.w3cschool.cc//bassistance.de/jquery-plugins/jquery-plugin-password-validation/)，下载 jQuery Password Validation（密码验证）插件。

 

 
#### 使用方式

 如需使用 Password Validation（密码验证）插件，请添加一个 class "password" 到 input，同时添加显示强度的基本标记在表单的需要显示的地方：

 
```

<form id="register">
	<label for="password">Password:</label>
	<input class="password" name="password" id="password" />
	<div class="password-meter">
		<div class="password-meter-message"> </div>
		<div class="password-meter-bg">
			<div class="password-meter-bar"></div>
		</div>
	</div>
</form>

```
 对表单应用 Validate 插件：

 
```

$(document).ready(function() {
  $("#register").validate();
});

```
 您可以重载 $.validator.passwordRating 实现不同的评价方法。或者重载 $.validator.passwordRating.messages 来提供其他消息，比如本地化。

 
#### 实例演示

 
[jQuery Password Validation（密码验证）插件 - 基本](http://www.w3cschool.cc/try/tryit.php?filename=jquery-plugin-password-validate)
 [jQuery Password Validation（密码验证）插件 - 本地化](http://www.w3cschool.cc/try/tryit.php?filename=jquery-plugin-password-validate-1)
 [jQuery Password Validation（密码验证）插件 - 集成](http://www.w3cschool.cc/try/tryit.php?filename=jquery-plugin-password-validate-2)
 


