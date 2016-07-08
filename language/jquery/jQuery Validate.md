 jQuery Validate
  jQuery Validate 插件为表单提供了强大的验证功能，让客户端表单验证变得更简单，同时提供了大量的定制选项，满足应用程序各种需求。该插件捆绑了一套有用的验证方法，包括 URL 和电子邮件验证，同时提供了一个用来编写用户自定义方法的 API。所有的捆绑方法默认使用英语作为错误信息，且已翻译成其他 37 种语言。

 该插件是由 Jörn Zaefferer 编写和维护的，他是 jQuery 团队的一名成员，是 jQuery UI 团队的主要开发人员，是 QUnit 的维护人员。该插件在 2006 年 jQuery 早期的时候就已经开始出现，并一直更新至今。目前版本是 1.11.1。

 访问 [jQuery Validate 官网](http://www.w3cschool.cc//bassistance.de/jquery-plugins/jquery-plugin-validation/)，下载最新版的 jQuery Validate 插件。

 

 
#### 导入 js 库

 
```

<script src="http://www.w3cschool.cc/jquery/../js/jquery.js" type="text/javascript"></script>
<script src="http://www.w3cschool.cc/jquery/../js/jquery.validate.js" type="text/javascript"></script>

```
 
#### 默认校验规则

 

|序号|规则|描述|
|:--|:--|:--|
|1|required:true|必须输入的字段。|
|2|remote:"check.php"|使用 ajax 方法调用 check.php 验证输入值。|
|3|email:true|必须输入正确格式的电子邮件。|
|4|url:true|必须输入正确格式的网址。|
|5|date:true|必须输入正确格式的日期。日期校验 ie6 出错，慎用。|
|6|dateISO:true|必须输入正确格式的日期（ISO），例如：2009-06-23，1998/01/22。只验证格式，不验证有效性。|
|7|number:true|必须输入合法的数字（负数，小数）。|
|8|digits:true|必须输入整数。|
|9|creditcard:|必须输入合法的信用卡号。|
|10|equalTo:"#field"|输入值必须和 #field 相同。|
|11|accept:|输入拥有合法后缀名的字符串（上传文件的后缀）。|
|12|maxlength:5|输入长度最多是 5 的字符串（汉字算一个字符）。|
|13|minlength:10|输入长度最小是 10 的字符串（汉字算一个字符）。|
|14|rangelength:[5,10]|输入长度必须介于 5 和 10 之间的字符串（汉字算一个字符）。|
|15|range:[5,10]|输入值必须介于 5 和 10 之间。|
|16|max:5|输入值不能大于 5。|
|17|min:10|输入值不能小于 10。|


#### 默认提示

 
```

messages: {
    required: "This field is required.",
    remote: "Please fix this field.",
    email: "Please enter a valid email address.",
    url: "Please enter a valid URL.",
    date: "Please enter a valid date.",
    dateISO: "Please enter a valid date (ISO).",
    dateDE: "Bitte geben Sie ein gültiges Datum ein.",
    number: "Please enter a valid number.",
    numberDE: "Bitte geben Sie eine Nummer ein.",
    digits: "Please enter only digits",
    creditcard: "Please enter a valid credit card number.",
    equalTo: "Please enter the same value again.",
    accept: "Please enter a value with a valid extension.",
    maxlength: $.validator.format("Please enter no more than {0} characters."),
    minlength: $.validator.format("Please enter at least {0} characters."),
    rangelength: $.validator.format("Please enter a value between {0} and {1} characters long."),
    range: $.validator.format("Please enter a value between {0} and {1}."),
    max: $.validator.format("Please enter a value less than or equal to {0}."),
    min: $.validator.format("Please enter a value greater than or equal to {0}.")
},

```
 如需要修改，可在 js 代码中加入：

 
```

jQuery.extend(jQuery.validator.messages, {
    required: "必选字段",
	remote: "请修正该字段",
	email: "请输入正确格式的电子邮件",
	url: "请输入合法的网址",
	date: "请输入合法的日期",
	dateISO: "请输入合法的日期 (ISO).",
	number: "请输入合法的数字",
	digits: "只能输入整数",
	creditcard: "请输入合法的信用卡号",
	equalTo: "请再次输入相同的值",
	accept: "请输入拥有合法后缀名的字符串",
	maxlength: jQuery.validator.format("请输入一个 长度最多是 {0} 的字符串"),
	minlength: jQuery.validator.format("请输入一个 长度最少是 {0} 的字符串"),
	rangelength: jQuery.validator.format("请输入 一个长度介于 {0} 和 {1} 之间的字符串"),
	range: jQuery.validator.format("请输入一个介于 {0} 和 {1} 之间的值"),
	max: jQuery.validator.format("请输入一个最大为{0} 的值"),
	min: jQuery.validator.format("请输入一个最小为{0} 的值")
});

```
 推荐做法，将此文件放入 messages_cn.js 中，在页面中引入：

 
```

<script src="http://www.w3cschool.cc/jquery/../js/messages_cn.js" type="text/javascript"></script>

```
 
#### 使用方式

 
#### 1、将校验规则写到控件中

 
```

<script src="http://www.w3cschool.cc/jquery/../js/jquery.js" type="text/javascript"></script>
<script src="http://www.w3cschool.cc/jquery/../js/jquery.validate.js" type="text/javascript"></script>
<script src="http://www.w3cschool.cc/jquery/../js/jquery.metadata.js" type="text/javascript"></script>

$().ready(function() {
 $("#signupForm").validate();
});


<form id="signupForm" method="get" action="">
    <p>
        <label for="firstname">Firstname</label>
        <input id="firstname" name="firstname" class="required" />
    </p>
 <p>
  <label for="email">E-Mail</label>
  <input id="email" name="email" class="required email" />
 </p>
 <p>
  <label for="password">Password</label>
  <input id="password" name="password" type="password" class="{required:true,minlength:5}" />
 </p>
 <p>
  <label for="confirm_password">确认密码</label>
  <input id="confirm_password" name="confirm_password" type="password" class="{required:true,minlength:5,equalTo:'#password'}" />
 </p>
    <p>
        <input class="submit" type="submit" value="Submit"/>
    </p>
</form>

```
 使用 class="{}" 的方式，必须引入包：jquery.metadata.js。

 可以使用如下的方法，修改提示内容：

 
```
class="{required:true,minlength:5,messages:{required:'请输入内容'}}"
```
 在使用 equalTo 关键字时，后面的内容必须加上引号，代码如下所示：

 
```
class="{required:true,minlength:5,equalTo:'#password'}"
```
 
#### 2、将校验规则写到 js 代码中

 
```

$().ready(function() {
 $("#signupForm").validate({
        rules: {
   firstname: "required",
   email: {
    required: true,
    email: true
   },
   password: {
    required: true,
    minlength: 5
   },
   confirm_password: {
    required: true,
    minlength: 5,
    equalTo: "#password"
   }
  },
        messages: {
   firstname: "请输入姓名",
   email: {
    required: "请输入Email地址",
    email: "请输入正确的email地址"
   },
   password: {
    required: "请输入密码",
    minlength: jQuery.format("密码不能小于{0}个字 符")
   },
   confirm_password: {
    required: "请输入确认密码",
    minlength: "确认密码不能小于5个字符",
    equalTo: "两次输入密码不一致不一致"
   }
  }
    });
});

```
 messages 处，如果某个控件没有 message，将调用默认的信息

 
```

<form id="signupForm" method="get" action="">
    <p>
        <label for="firstname">Firstname</label>
        <input id="firstname" name="firstname" />
    </p>
 <p>
  <label for="email">E-Mail</label>
  <input id="email" name="email" />
 </p>
 <p>
  <label for="password">Password</label>
  <input id="password" name="password" type="password" />
 </p>
 <p>
  <label for="confirm_password">确认密码</label>
  <input id="confirm_password" name="confirm_password" type="password" />
 </p>
    <p>
        <input class="submit" type="submit" value="Submit"/>
    </p>
</form>

```
  required:true 必须有值。

 required:"#aa:checked" 表达式的值为真，则需要验证。

 required:function(){} 返回为真，表示需要验证。 

 后边两种常用于，表单中需要同时填或不填的元素。

 
#### 常用方法及注意问题

 
#### 1、用其他方式替代默认的 SUBMIT

 
```

$().ready(function() {
 $("#signupForm").validate({
        submitHandler:function(form){
            alert("submitted");   
            form.submit();
        }    
    });
});

```
 使用 ajax 方式

 
```

 $(".selector").validate({     
 submitHandler: function(form) 
   {      
      $(form).ajaxSubmit();     
   }  
 }) 

```
 可以设置 validate 的默认值，写法如下：

 
```

 $.validator.setDefaults({
 submitHandler: function(form) { alert("submitted!");form.submit(); }
});

```
 如果想提交表单, 需要使用 form.submit()，而不要使用 $(form).submit()。

 
#### 2、debug，只验证不提交表单

 如果这个参数为true，那么表单不会提交，只进行检查，调试时十分方便。

 
```

$().ready(function() {
 $("#signupForm").validate({
        debug:true
    });
});

```
 如果一个页面中有多个表单都想设置成为 debug，则使用：

 
```

$.validator.setDefaults({
   debug: true
})

```
 
#### 3、ignore：忽略某些元素不验证

 
```

ignore: ".ignore"

```
 
#### 4、更改错误信息显示的位置

 
```

errorPlacement：Callback

```
 指明错误放置的位置，默认情况是：error.appendTo(element.parent());即把错误信息放在验证的元素后面。

 
```

errorPlacement: function(error, element) {  
    error.appendTo(element.parent());  
}

```
 实例

 
```

<tr>
    <td class="label"><label id="lfirstname" for="firstname">First Name</label></td>
    <td class="field"><input id="firstname" name="firstname" type="text" value="" maxlength="100" /></td>
    <td class="status"></td>
</tr>
<tr>
    <td style="padding-right: 5px;">
        <input id="dateformat_eu" name="dateformat" type="radio" value="0" />
        <label id="ldateformat_eu" for="dateformat_eu">14/02/07</label>
    </td>
    <td style="padding-left: 5px;">
        <input id="dateformat_am" name="dateformat" type="radio" value="1"  />
        <label id="ldateformat_am" for="dateformat_am">02/14/07</label>
    </td>
    <td></td>
</tr>
<tr>
    <td class="label">&amp;nbsp;</td>
    <td class="field" colspan="2">
        <div id="termswrap">
            <input id="terms" type="checkbox" name="terms" />
            <label id="lterms" for="terms">I have read and accept the Terms of Use.</label>
        </div>
    </td>
</tr>

errorPlacement: function(error, element) {
    if ( element.is(":radio") )
        error.appendTo( element.parent().next().next() );
    else if ( element.is(":checkbox") )
        error.appendTo ( element.next() );
    else
        error.appendTo( element.parent().next() );
}

```
 代码的作用是：一般情况下把错误信息显示在 <td class="status"></td> 中，如果是 radio 则显示在 <td></td> 中，如果是 checkbox 则显示在内容的后面。

 

|参数|类型|描述|默认值|
|:--|:--|:--|:--|
|errorClass|String|指定错误提示的 css 类名，可以自定义错误提示的样式。|"error"|
|errorElement|String|用什么标签标记错误，默认是 label，可以改成 em。|"label"|
|errorContainer|Selector|显示或者隐藏验证信息，可以自动实现有错误信息出现时把容器属性变为显示，无错误时隐藏，用处不大。errorContainer: "#messageBox1, #messageBox2"||
|errorLabelContainer|Selector|把错误信息统一放在一个容器里面。||
|wrapper|String|用什么标签再把上边的 errorELement 包起来。||

一般这三个属性同时使用，实现在一个容器内显示所有错误提示的功能，并且没有信息时自动隐藏。

 
```

errorContainer: "div.error",
errorLabelContainer: $("#signupForm div.error"),
wrapper: "li"

```
 
#### 5、更改错误信息显示的样式

 设置错误提示的样式，可以增加图标显示，在该系统中已经建立了一个 validation.css，专门用于维护校验文件的样式。

 
```

input.error { border: 1px solid red; }
label.error {
  background:url("./demo/images/unchecked.gif") no-repeat 0px 0px;

  padding-left: 16px;

  padding-bottom: 2px;

  font-weight: bold;

  color: #EA5200;
}
label.checked {
  background:url("./demo/images/checked.gif") no-repeat 0px 0px;
}

```
 
#### 6、每个字段验证通过执行函数

 
```
success：String,Callback
```
 要验证的元素通过验证后的动作，如果跟一个字符串，会当作一个 css 类，也可跟一个函数。

 
```

success: function(label) {
    // set &amp;nbsp; as text for IE
    label.html("&amp;nbsp;").addClass("checked");
    //label.addClass("valid").text("Ok!")
}

```
 添加 "valid" 到验证元素，在 CSS 中定义的样式 <style>label.valid {}</style>。

 
```

success: "valid"

```
 
#### 7、验证的触发方式修改

 下面的虽然是 boolean 型的，但建议除非要改为 false，否则别乱添加。

 

|触发方式|类型|描述|默认值|
|:--|:--|:--|:--|
|onsubmit|Boolean|提交时验证。设置为 false 就用其他方法去验证。|true|
|onfocusout|Boolean|失去焦点时验证（不包括复选框/单选按钮）。|true|
|onkeyup|Boolean|在 keyup 时验证。|true|
|onclick|Boolean|在点击复选框和单选按钮时验证。|true|
|focusInvalid|Boolean|提交表单后，未通过验证的表单（第一个或提交之前获得焦点的未通过验证的表单）会获得焦点。|true|
|focusCleanup|Boolean|如果是 true 那么当未通过验证的元素获得焦点时，移除错误提示。避免和 focusInvalid 一起用。|false|


```

// 重置表单
$().ready(function() {
 var validator = $("#signupForm").validate({
        submitHandler:function(form){
            alert("submitted");   
            form.submit();
        }    
    });
    $("#reset").click(function() {
        validator.resetForm();
    });

});

```
 
#### 8、异步验证

 
```
remote：URL
```
 使用 ajax 方式进行验证，默认会提交当前验证的值到远程地址，如果需要提交其他的值，可以使用 data 选项。

 
```
remote: "check-email.php"
```
 
```

remote: {
    url: "check-email.php",     //后台处理程序
    type: "post",               //数据发送方式
    dataType: "json",           //接受数据格式   
    data: {                     //要传递的数据
        username: function() {
            return $("#username").val();
        }
    }
}

```
 远程地址只能输出 "true" 或 "false"，不能有其他输出。

 
#### 9、添加自定义校验

 
```
addMethod：name, method, message
```
 自定义验证方法

 
```

// 中文字两个字节
jQuery.validator.addMethod("byteRangeLength", function(value, element, param) {
    var length = value.length;
    for(var i = 0; i < value.length; i++){
        if(value.charCodeAt(i) > 127){
            length++;
        }
    }
  return this.optional(element) || ( length >= param[0] &amp;&amp; length <= param[1] );   
}, $.validator.format("请确保输入的值在{0}-{1}个字节之间(一个中文字算2个字节)"));

// 邮政编码验证   
jQuery.validator.addMethod("isZipCode", function(value, element) {   
    var tel = /^[0-9]{6}$/;
    return this.optional(element) || (tel.test(value));
}, "请正确填写您的邮政编码");

```
 注意：要在 additional-methods.js 文件中添加或者在 jquery.validate.js 文件中添加。建议一般写在 additional-methods.js 文件中。

 注意：在 messages_cn.js 文件中添加：isZipCode: "只能包括中文字、英文字母、数字和下划线"。调用前要添加对 additional-methods.js 文件的引用。

 
#### 10、radio 和 checkbox、select 的验证

 radio 的 required 表示必须选中一个。

 
```

<input  type="radio" id="gender_male" value="m" name="gender" class="{required:true}" />
<input  type="radio" id="gender_female" value="f" name="gender"/>

```
 checkbox 的 required 表示必须选中。

 
```

<input type="checkbox" class="checkbox" id="agree" name="agree" class="{required:true}" />

```
 checkbox 的 minlength 表示必须选中的最小个数，maxlength 表示最大的选中个数，rangelength:[2,3] 表示选中个数区间。

 
```

<input type="checkbox" class="checkbox" id="spam_email" value="email" name="spam[]" class="{required:true, minlength:2}" />
<input type="checkbox" class="checkbox" id="spam_phone" value="phone" name="spam[]" />
<input type="checkbox" class="checkbox" id="spam_mail" value="mail" name="spam[]" />

```
 select 的 required 表示选中的 value 不能为空。

 
```

<select id="jungle" name="jungle" title="Please select something!" class="{required:true}">
    <option value=""></option>
    <option value="1">Buga</option>
    <option value="2">Baga</option>
    <option value="3">Oi</option>
</select>

```
 select 的 minlength 表示选中的最小个数（可多选的 select），maxlength 表示最大的选中个数，rangelength:[2,3] 表示选中个数区间。

 
```

<select id="fruit" name="fruit" title="Please select at least two fruits" class="{required:true, minlength:2}" multiple="multiple">
    <option value="b">Banana</option>
    <option value="a">Apple</option>
    <option value="p">Peach</option>
    <option value="t">Turtle</option>
</select>

```
 
#### jQuery.validate 中文 API

 

|名称|返回类型|描述|
|:--|:--|:--|
|validate(options)|Validator|验证所选的 FORM。|
|valid()|Boolean|检查是否验证通过。|
|rules()|Options|返回元素的验证规则。|
|rules("add",rules)|Options|增加验证规则。|
|rules("remove",rules)|Options|删除验证规则。|
|removeAttrs(attributes)|Options|删除特殊属性并且返回它们。|
|自定义选择器|
|:blank|Validator|没有值的筛选器。|
|:filled|Array <Element>|有值的筛选器。|
|:unchecked|Array <Element>|没选择的元素的筛选器。|
|实用工具|
|jQuery.format(template,argument,argumentN...)|String|用参数代替模板中的 {n}。|


#### Validator

 validate 方法返回一个 Validator 对象。Validator 对象有很多方法可以用来引发校验程序或者改变 form 的内容，下面列出几个常用的方法。

 

|名称|返回类型|描述|
|:--|:--|:--|
|form()|Boolean|验证 form 返回成功还是失败。|
|element(element)|Boolean|验证单个元素是成功还是失败。|
|resetForm()|undefined|把前面验证的 FORM 恢复到验证前原来的状态。|
|showErrors(errors)|undefined|显示特定的错误信息。|
|Validator 函数|
|setDefaults(defaults)|undefined|改变默认的设置。|
|addMethod(name,method,message)|undefined|添加一个新的验证方法。必须包括一个独一无二的名字，一个 JAVASCRIPT 的方法和一个默认的信息。|
|addClassRules(name,rules)|undefined|增加组合验证类型，在一个类里面用多种验证方法时比较有用。|
|addClassRules(rules)|undefined|增加组合验证类型，在一个类里面用多种验证方法时比较有用。这个是同时加多个验证方法。|


#### 内置验证方式

 

|名称|返回类型|描述|
|:--|:--|:--|
|required()|Boolean|必填验证元素。|
|required(dependency-expression)|Boolean|必填元素依赖于表达式的结果。|
|required(dependency-callback)|Boolean|必填元素依赖于回调函数的结果。|
|remote(url)|Boolean|请求远程校验。url 通常是一个远程调用方法。|
|minlength(length)|Boolean|设置最小长度。|
|maxlength(length)|Boolean|设置最大长度。|
|rangelength(range)|Boolean|设置一个长度范围 [min,max]。|
|min(value)|Boolean|设置最小值。|
|max(value)|Boolean|设置最大值。|
|email()|Boolean|验证电子邮箱格式。|
|range(range)|Boolean|设置值的范围。|
|url()|Boolean|验证 URL 格式。|
|date()|Boolean|验证日期格式（类似 30/30/2008 的格式，不验证日期准确性只验证格式）。|
|dateISO()|Boolean|验证 ISO 类型的日期格式。|
|dateDE()|Boolean|验证德式的日期格式（29.04.1994 或 1.1.2006）。|
|number()|Boolean|验证十进制数字（包括小数的）。|
|digits()|Boolean|验证整数。|
|creditcard()|Boolean|验证信用卡号。|
|accept(extension)|Boolean|验证相同后缀名的字符串。|
|equalTo(other)|Boolean|验证两个输入框的内容是否相同。|
|phoneUS()|Boolean|验证美式的电话号码。|


#### validate ()的可选项

 

|描述|代码|
|:--|:--|
|debug：进行调试模式（表单不提交）。| $(".selector").validate({	debug:true}) |
|把调试设置为默认。| $.validator.setDefaults({	debug:true}) |
|submitHandler：通过验证后运行的函数，里面要加上表单提交的函数，否则表单不会提交。| $(".selector").validate({	submitHandler:function(form) {		$(form).ajaxSubmit();	}}) |
|ignore：对某些元素不进行验证。| $("#myform").validate({	ignore:".ignore"}) |
|rules：自定义规则，key:value 的形式，key 是要验证的元素，value 可以是字符串或对象。| $(".selector").validate({	rules:{		name:"required",		email:{			required:true,			email:true		}	}}) |
|messages：自定义的提示信息，key:value 的形式，key 是要验证的元素，value 可以是字符串或函数。| $(".selector").validate({	rules:{		name:"required",		email:{			required:true,			email:true		}	},	messages:{		name:"Name不能为空",		email:{       			required:"E-mail不能为空",			email:"E-mail地址不正确"		}	}}) |
|groups：对一组元素的验证，用一个错误提示，用 errorPlacement 控制把出错信息放在哪里。| $("#myform").validate({	groups:{		username:"fname 		lname"	},	errorPlacement:function(error,element) {		if (element.attr("name") == "fname" || element.attr("name") == "lname")   			error.insertAfter("#lastname");		else    			error.insertAfter(element);	},   debug:true}) |
|Onubmit：类型 Boolean，默认 true，指定是否提交时验证。| $(".selector").validate({  	onsubmit:false}) |
|onfocusout：类型 Boolean，默认 true，指定是否在获取焦点时验证。| $(".selector").validate({   	onfocusout:false}) |
|onkeyup：类型 Boolean，默认 true，指定是否在敲击键盘时验证。| $(".selector").validate({   onkeyup:false}) |
|onclick：类型 Boolean，默认 true，指定是否在鼠标点击时验证（一般验证 checkbox、radiobox）。| $(".selector").validate({   onclick:false}) |
|focusInvalid：类型 Boolean，默认 true。提交表单后，未通过验证的表单（第一个或提交之前获得焦点的未通过验证的表单）会获得焦点。| $(".selector").validate({   focusInvalid:false}) |
|focusCleanup：类型 Boolean，默认 false。当未通过验证的元素获得焦点时，移除错误提示（避免和 focusInvalid 一起使用）。| $(".selector").validate({   focusCleanup:true}) |
|errorClass：类型 String，默认 "error"。指定错误提示的 css 类名，可以自定义错误提示的样式。| $(".selector").validate({ 	errorClass:"invalid"}) |
|errorElement：类型 String，默认 "label"。指定使用什么标签标记错误。| $(".selector").validate   errorElement:"em"}) |
|wrapper：类型 String，指定使用什么标签再把上边的 errorELement 包起来。| $(".selector").validate({   wrapper:"li"}) |
|errorLabelContainer：类型 Selector，把错误信息统一放在一个容器里面。| $("#myform").validate({   	errorLabelContainer:"#messageBox",	wrapper:"li",	submitHandler:function() { 		alert("Submitted!") 	}}) |
|showErrors：跟一个函数，可以显示总共有多少个未通过验证的元素。| $(".selector").validate({  	showErrors:function(errorMap,errorList) {        $("#summary").html("Your form contains " + this.numberOfInvalids() + " errors,see details below.");		this.defaultShowErrors();	}}) |
|errorPlacement：跟一个函数，可以自定义错误放到哪里。| $("#myform").validate({  	rrorPlacement:function(error,element) {  		error.appendTo(element.parent("td").next("td"));   },   debug:true}) |
|success：要验证的元素通过验证后的动作，如果跟一个字符串，会当作一个 css 类，也可跟一个函数。| $("#myform").validate({        	success:"valid",        submitHandler:function() { 			alert("Submitted!") 		}}) |
|highlight：可以给未通过验证的元素加效果、闪烁等。||


#### addMethod(name,method,message)方法

 参数 name 是添加的方法的名字。

 参数 method 是一个函数，接收三个参数 (value,element,param) 。

 value 是元素的值，element 是元素本身，param 是参数。

 我们可以用 addMethod 来添加除内置的 Validation 方法之外的验证方法。比如有一个字段，只能输一个字母，范围是 a-f，写法如下：

 
```

$.validator.addMethod("af",function(value,element,params){  
	if(value.length>1){
		return false;
	}
    if(value>=params[0] &amp;&amp; value<=params[1]){
		return true;
	}else{
		return false;
	}
},"必须是一个字母,且a-f");

```
 如果有个表单字段的 id="username"，则在 rules 中写：

 
```

username:{
   af:["a","f"]
}

```
  addMethod 的第一个参数，是添加的验证方法的名字，这时是 af。

 addMethod 的第三个参数，是自定义的错误提示，这里的提示为:"必须是一个字母,且a-f"。

 addMethod 的第二个参数，是一个函数，这个比较重要，决定了用这个验证方法时的写法。 

 如果只有一个参数，直接写，比如 af:"a"，那么 a 就是这个唯一的参数，如果多个参数，则写在 [] 里，用逗号分开。

 
#### meta String 方式

 
```

$("#myform").validate({

   meta:"validate",

   submitHandler:function() { 
alert("Submitted!") }

})

```
 
```

<script type="text/javascript" 
src="http://www.w3cschool.cc/jquery/js/jquery.metadata.js"></script>

<script type="text/javascript" 
src="http://www.w3cschool.cc/jquery/js/jquery.validate.js"></script>

<form id="myform">

  <input type="text" 
name="email" class="{validate:{ required:true,email:true }}" />

  <input type="submit" 
value="Submit" />

</form>

```
 
#### 实例演示

 
#### 虚构的实例

 
[错误消息容器](http://www.w3cschool.cc/try/tryit.php?filename=jquery-plugin-errorcontainer)
 [自定义消息作为元素数据](http://www.w3cschool.cc/try/tryit.php?filename=jquery-plugin-custom-messages-data)
 [radio（单选按钮）、checkbox（复选按钮）和 select（下拉框）](http://www.w3cschool.cc/try/tryit.php?filename=jquery-plugin-radio-checkbox-select)
 [与表单（Form）插件的交互（AJAX 提交）](http://www.w3cschool.cc/try/tryit.php?filename=jquery-plugin-ajaxSubmit-integration)
 [自定义方法和消息显示](http://www.w3cschool.cc/try/tryit.php?filename=jquery-plugin-custom-methods)
 [动态表单](http://www.w3cschool.cc/try/tryit.php?filename=jquery-plugin-dynamic-totals)
 [使用 jQuery UI Themeroller 定义表单样式](http://www.w3cschool.cc/try/tryit.php?filename=jquery-plugin-themerollered)
 [TinyMCE - 一个轻量级的基于浏览器的所见即所得编辑器](http://www.w3cschool.cc/try/tryit.php?filename=jquery-plugin-tinymce)
 [文件输入框](http://www.w3cschool.cc/try/tryit.php?filename=jquery-plugin-file-input)
 [jQuery Mobile 表单验证](http://www.w3cschool.cc/try/tryit.php?filename=jquery-plugin-jquerymobile)
 

#### 现实世界的实例

 
[Milk 注册表单](http://www.w3cschool.cc/try/tryit.php?filename=jquery-plugin-milk)
 [Marketo 注册表单](http://www.w3cschool.cc/try/tryit.php?filename=jquery-plugin-marketo-step1)
 [房屋买卖折叠面板表单](http://www.w3cschool.cc/try/tryit.php?filename=jquery-plugin-multipart)
 [远程 CAPTCHA（验证码）验证](http://www.w3cschool.cc/try/tryit.php?filename=jquery-plugin-captcha)
 


