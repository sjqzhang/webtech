 jQuery Mobile 表单  
jQuery Mobile 会自动为 HTML 表单自动添加样式，让它们看起来更具吸引力，触摸起来更具友好性。

 
 



#### jQuery Mobile 表单结构

 jQuery Mobile 使用 CSS 为 HTML 表单元素添加样式，让它们更具吸引力，更易于使用。

 在 jQuery Mobile 中，您可以使用下列表单控件：

 
文本输入框
 搜索输入框
 单选按钮
 复选框
 选择菜单
 滑动条
 翻转拨动开关
 
当使用 jQuery Mobile 表单时，您应当知道：

 
<form> 元素必须有一个 method 和一个 action 属性
 每个表单元素必须有一个唯一的 "id" 属性。id 必须是整个站点所有页面上唯一的。这是因为 jQuery Mobile 的单页导航机制使得多个不同页面在同一时间被呈现
 每个表单元素必须有一个标签。设置标签的 

#### for

 属性来匹配元素的 id
 
 
#### 实例

 
```
 <form method="post" action="demoform.html">

 <label for="fname">姓名:</label>

 <input type="text" name="fname" id="fname">

</form>





```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_label) 

 如需隐藏标签，请使用 class ui-hidden-accessible。这在您把元素的 placeholder 属性作为标签时经常用到：

  
#### 实例

 
```
 <form method="post" action="demoform.html">

 <label for="fname" class="ui-hidden-accessible">姓名:</label>

 <input type="text" name="fname" id="fname" placeholder="姓名...">

 </form>





```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_label_placeholder) 

 



#### Field 容器

 如需让标签和表单元素看起来更适应宽屏，请用带有 data-role="fieldcontain" 属性的 <div> 或 <fieldset> 元素包围 label/form 元素：

  
#### 实例

 
```
 <form method="post" action="demoform.html">

 <div data-role="fieldcontain">

 <label for="fname">姓:</label>

 <input type="text" name="fname" id="fname">

 <label for="lname">名:</label>

 <input type="text" name="lname" id="lname">

 </div>>

 </form>





```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_forms_fieldcontain) 

 



| fieldcontain 属性基于页面的宽度为标签和表单控件添加样式。当页面的宽度大于 480px 时，它会自动把标签放置在与表单控件同一线上。当页面的宽度小于 480px 时，标签会被放置在表单元素的上面。|



#### 提示：

为了防止 jQuery Mobile 为可点击元素自动添加样式，请使用 data-role="none" 属性：

  
#### 实例

 
```
 <label for="fname">姓名:</label>

<input type="text" name="fname" id="fname" data-role="none">





```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_forms_none) 

 



|  jQuery Mobile 中的表单提交jQuery Mobile 通过 AJAX 自动处理表单提交，并将试图集成服务器响应到应用程序的 DOM 中。|



