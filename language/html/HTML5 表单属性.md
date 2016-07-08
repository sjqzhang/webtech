 HTML5 表单属性  

#### HTML5 新的表单属性

 HTML5 的 <form> 和 <input>标签添加了几个新属性.

 <form>新属性：

 
autocomplete
 novalidate
 
 <input>新属性：

 
autocomplete
 autofocus
 form
 formaction
 formenctype
 formmethod
 formnovalidate
 formtarget
 height and width
 list
 min and max
 multiple
 pattern (regexp)
 placeholder
 required
 step
 


#### <form> / <input> autocomplete 属性

 autocomplete 属性规定 form 或 input 域应该拥有自动完成功能。

 当用户在自动完成域中开始输入时，浏览器应该在该域中显示填写的选项。

 提示: autocomplete 属性有可能在 form元素中是开启的，而在input元素中是关闭的。

 

#### 注意:

 autocomplete 适用于 <form> 标签，以及以下类型的 <input> 标签：text, search, url, telephone, email, password, datepickers, range 以及 color。

  ![http://www.w3cschool.cc/images/incompatible_opera2020.gif](http://www.w3cschool.cc/images/incompatible_opera2020.gif)![http://www.w3cschool.cc/images/compatible_safari2020.gif](http://www.w3cschool.cc/images/compatible_safari2020.gif)![http://www.w3cschool.cc/images/compatible_chrome2020.gif](http://www.w3cschool.cc/images/compatible_chrome2020.gif)![http://www.w3cschool.cc/images/compatible_firefox2020.gif](http://www.w3cschool.cc/images/compatible_firefox2020.gif)![http://www.w3cschool.cc/images/compatible_ie2020.gif](http://www.w3cschool.cc/images/compatible_ie2020.gif)
#### 实例

 HTML form 中开启 autocomplete (一个 input 字段关闭 autocomplete ):

 
```
 <form action="demo-form.php" autocomplete="on">

   First name:<input type="text" name="fname"><br>

   Last name: <input type="text" name="lname"><br>

   E-mail: <input type="email" name="email" autocomplete="off"><br>

   <input type="submit">

 </form> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml5_input_autocomplete) 

 

#### 提示:

某些浏览器中，您可能需要启用自动完成功能，以使该属性生效。

 

#### <form> novalidate 属性

 novalidate 属性的一个boolean 属性.

 novalidate 属性规定在提交表单时不应该验证 form 或 input 域。

  ![http://www.w3cschool.cc/images/compatible_opera2020.gif](http://www.w3cschool.cc/images/compatible_opera2020.gif)![http://www.w3cschool.cc/images/incompatible_safari2020.gif](http://www.w3cschool.cc/images/incompatible_safari2020.gif)![http://www.w3cschool.cc/images/compatible_chrome2020.gif](http://www.w3cschool.cc/images/compatible_chrome2020.gif)![http://www.w3cschool.cc/images/compatible_firefox2020.gif](http://www.w3cschool.cc/images/compatible_firefox2020.gif)![http://www.w3cschool.cc/images/compatible_ie2020.gif](http://www.w3cschool.cc/images/compatible_ie2020.gif)
#### 实例

 无需验证提交的表单数据

 
```
 <form action="demo-form.php" novalidate>

   E-mail: <input type="email" name="user_email">

   <input type="submit">

 </form> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml5_form_novalidate) 

 



#### <input> autofocus 属性

 autofocus 属性是一个 boolean 属性.

 autofocus 属性规定在页面加载时，域自动地获得焦点。

  ![http://www.w3cschool.cc/images/compatible_opera2020.gif](http://www.w3cschool.cc/images/compatible_opera2020.gif)![http://www.w3cschool.cc/images/compatible_safari2020.gif](http://www.w3cschool.cc/images/compatible_safari2020.gif)![http://www.w3cschool.cc/images/compatible_chrome2020.gif](http://www.w3cschool.cc/images/compatible_chrome2020.gif)![http://www.w3cschool.cc/images/compatible_firefox2020.gif](http://www.w3cschool.cc/images/compatible_firefox2020.gif)![http://www.w3cschool.cc/images/compatible_ie2020.gif](http://www.w3cschool.cc/images/compatible_ie2020.gif)
#### 实例

 让 "First name" input 输入域在页面载入时自动聚焦：

 
```
 First name:<input type="text" name="fname" autofocus>


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml5_input_autofocus) 

 



#### <input> form 属性

 form 属性规定输入域所属的一个或多个表单。

 提示:如需引用一个以上的表单，请使用空格分隔的列表。

  ![http://www.w3cschool.cc/images/compatible_opera2020.gif](http://www.w3cschool.cc/images/compatible_opera2020.gif)![http://www.w3cschool.cc/images/compatible_safari2020.gif](http://www.w3cschool.cc/images/compatible_safari2020.gif)![http://www.w3cschool.cc/images/compatible_chrome2020.gif](http://www.w3cschool.cc/images/compatible_chrome2020.gif)![http://www.w3cschool.cc/images/compatible_firefox2020.gif](http://www.w3cschool.cc/images/compatible_firefox2020.gif)![http://www.w3cschool.cc/images/incompatible_ie2020.gif](http://www.w3cschool.cc/images/incompatible_ie2020.gif)
#### 实例

 位于form表单外的input 字段引用了 HTML form (该 input 表单仍然属于form表单的一部分):

 
```
 <form action="demo-form.php" id="form1">

   First name: <input type="text" name="fname"><br>

   <input type="submit" value="Submit">

 </form>



 Last name: <input type="text" name="lname" form="form1">


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml5_input_form) 

 



#### <input> formaction 属性

 The formaction 属性用于描述表单提交的URL地址.

 The formaction 属性会覆盖<form> 元素中的action属性.

 注意: The formaction 属性用于 type="submit" 和 type="image".

  ![http://www.w3cschool.cc/images/compatible_opera2020.gif](http://www.w3cschool.cc/images/compatible_opera2020.gif)![http://www.w3cschool.cc/images/compatible_safari2020.gif](http://www.w3cschool.cc/images/compatible_safari2020.gif)![http://www.w3cschool.cc/images/compatible_chrome2020.gif](http://www.w3cschool.cc/images/compatible_chrome2020.gif)![http://www.w3cschool.cc/images/compatible_firefox2020.gif](http://www.w3cschool.cc/images/compatible_firefox2020.gif)![http://www.w3cschool.cc/images/compatible_ie2020.gif](http://www.w3cschool.cc/images/compatible_ie2020.gif)
#### 实例

 以下HTMLform表单包含了两个不同地址的提交按钮：

 
```
 <form action="demo-form.php">

   First name: <input type="text" name="fname"><br>

   Last name: <input type="text" name="lname"><br>

   <input type="submit" value="Submit"><br>

   <input type="submit" formaction="demo-admin.php"

   value="Submit as admin">

 </form> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml5_input_formaction) 

 



#### <input> formenctype 属性

  formenctype 属性描述了表单提交到服务器的数据编码 (只对form表单中 method="post" 表单)

 formenctype 属性覆盖 form 元素的 enctype 属性。

 主要: 该属性与 type="submit" 和 type="image" 配合使用。

  ![http://www.w3cschool.cc/images/compatible_opera2020.gif](http://www.w3cschool.cc/images/compatible_opera2020.gif)![http://www.w3cschool.cc/images/compatible_safari2020.gif](http://www.w3cschool.cc/images/compatible_safari2020.gif)![http://www.w3cschool.cc/images/compatible_chrome2020.gif](http://www.w3cschool.cc/images/compatible_chrome2020.gif)![http://www.w3cschool.cc/images/compatible_firefox2020.gif](http://www.w3cschool.cc/images/compatible_firefox2020.gif)![http://www.w3cschool.cc/images/compatible_ie2020.gif](http://www.w3cschool.cc/images/compatible_ie2020.gif)
#### 实例

 第一个提交按钮已默认编码发送表单数据，第二个提交按钮以 "multipart/form-data" 编码格式发送表单数据:

 
```
 <form action="demo-post_enctype.php" method="post">

   First name: <input type="text" name="fname"><br>

   <input type="submit" value="Submit">

   <input type="submit" formenctype="multipart/form-data"

   value="Submit as Multipart/form-data">

 </form> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml5_input_formenctype) 

 



#### <input> formmethod 属性

  formmethod 属性定义了表单提交的方式。

  formmethod 属性覆盖了 <form> 元素的的method 属性。

 注意: 该属性可以与 type="submit" 和 type="image" 配合使用。

  ![http://www.w3cschool.cc/images/compatible_opera2020.gif](http://www.w3cschool.cc/images/compatible_opera2020.gif)![http://www.w3cschool.cc/images/compatible_safari2020.gif](http://www.w3cschool.cc/images/compatible_safari2020.gif)![http://www.w3cschool.cc/images/compatible_chrome2020.gif](http://www.w3cschool.cc/images/compatible_chrome2020.gif)![http://www.w3cschool.cc/images/compatible_firefox2020.gif](http://www.w3cschool.cc/images/compatible_firefox2020.gif)![http://www.w3cschool.cc/images/compatible_ie2020.gif](http://www.w3cschool.cc/images/compatible_ie2020.gif)
#### 实例

 重新定义表单提交方式实例:

 
```
 <form action="demo-form.php" method="get">

   First name: <input type="text" name="fname"><br>

   Last name: <input type="text" name="lname"><br>

   <input type="submit" value="Submit">

   <input type="submit" formmethod="post" formaction="demo-post.php"

   value="Submit using POST">

 </form> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml5_input_formmethod) 

 



#### <input> formnovalidate 属性

  novalidate 属性是一个 boolean 属性.

 novalidate属性描述了 <input> 元素在表单提交时无需被验证。

 formnovalidate 属性会覆盖 <form> 元素的novalidate属性.

 

#### 注意:

 formnovalidate 属性与type="submit一起使用


 


 ![http://www.w3cschool.cc/images/compatible_opera2020.gif](http://www.w3cschool.cc/images/compatible_opera2020.gif)![http://www.w3cschool.cc/images/incompatible_safari2020.gif](http://www.w3cschool.cc/images/incompatible_safari2020.gif)![http://www.w3cschool.cc/images/compatible_chrome2020.gif](http://www.w3cschool.cc/images/compatible_chrome2020.gif)![http://www.w3cschool.cc/images/compatible_firefox2020.gif](http://www.w3cschool.cc/images/compatible_firefox2020.gif)![http://www.w3cschool.cc/images/compatible_ie2020.gif](http://www.w3cschool.cc/images/compatible_ie2020.gif)
#### 实例

 两个提交按钮的表单(使用与不适用验证 ):

 
```
 <form action="demo-form.php">

   E-mail: <input type="email" name="userid"><br>

   <input type="submit" value="Submit"><br>

   <input type="submit" formnovalidate value="Submit without validation">

 </form> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml5_input_formnovalidate) 

 



#### <input> formtarget 属性

 formtarget 属性指定一个名称或一个关键字来指明表单提交数据接收后的展示。

 The formtarget 属性覆盖 <form>元素的target属性.

 注意: formtarget 属性与type="submit" 和 type="image"配合使用.

  ![http://www.w3cschool.cc/images/compatible_opera2020.gif](http://www.w3cschool.cc/images/compatible_opera2020.gif)![http://www.w3cschool.cc/images/compatible_safari2020.gif](http://www.w3cschool.cc/images/compatible_safari2020.gif)![http://www.w3cschool.cc/images/compatible_chrome2020.gif](http://www.w3cschool.cc/images/compatible_chrome2020.gif)![http://www.w3cschool.cc/images/compatible_firefox2020.gif](http://www.w3cschool.cc/images/compatible_firefox2020.gif)![http://www.w3cschool.cc/images/compatible_ie2020.gif](http://www.w3cschool.cc/images/compatible_ie2020.gif)
#### 实例

 两个提交按钮的表单, 在不同窗口中显示:

 
```
 <form action="demo-form.php">

   First name: <input type="text" name="fname"><br>

   Last name: <input type="text" name="lname"><br>

   <input type="submit" value="Submit as normal">

   <input type="submit" formtarget="_blank"

   value="Submit to a new window">

 </form> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml5_input_formtarget) 

 



#### <input> height 和 width 属性

 height 和 width 属性规定用于 image 类型的 <input> 标签的图像高度和宽度。

 注意: height 和 width 属性只适用于 image 类型的<input> 标签。

 提示:图像通常会同时指定高度和宽度属性。如果图像设置高度和宽度，图像所需的空间 在加载页时会被保留。如果没有这些属性， 浏览器不知道图像的大小，并不能预留 适当的空间。图片在加载过程中会使页面布局效果改变 （尽管图片已加载）。

  ![http://www.w3cschool.cc/images/compatible_opera2020.gif](http://www.w3cschool.cc/images/compatible_opera2020.gif)![http://www.w3cschool.cc/images/compatible_safari2020.gif](http://www.w3cschool.cc/images/compatible_safari2020.gif)![http://www.w3cschool.cc/images/compatible_chrome2020.gif](http://www.w3cschool.cc/images/compatible_chrome2020.gif)![http://www.w3cschool.cc/images/compatible_firefox2020.gif](http://www.w3cschool.cc/images/compatible_firefox2020.gif)![http://www.w3cschool.cc/images/compatible_ie2020.gif](http://www.w3cschool.cc/images/compatible_ie2020.gif)
#### 实例

 定义了一个图像提交按钮, 使用了 height 和 width 属性:

 
```
 <input type="image" src="http://www.w3cschool.cc/html/img_submit.gif" alt="Submit" width="48" height="48"> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml5_input_height_width) 

 



#### <input> list 属性

 list 属性规定输入域的 datalist。datalist 是输入域的选项列表。

  ![http://www.w3cschool.cc/images/compatible_opera2020.gif](http://www.w3cschool.cc/images/compatible_opera2020.gif)![http://www.w3cschool.cc/images/incompatible_safari2020.gif](http://www.w3cschool.cc/images/incompatible_safari2020.gif)![http://www.w3cschool.cc/images/compatible_chrome2020.gif](http://www.w3cschool.cc/images/compatible_chrome2020.gif)![http://www.w3cschool.cc/images/compatible_firefox2020.gif](http://www.w3cschool.cc/images/compatible_firefox2020.gif)![http://www.w3cschool.cc/images/compatible_ie2020.gif](http://www.w3cschool.cc/images/compatible_ie2020.gif)
#### 实例

 在 <datalist>中预定义 <input> 值:

 
```
 <input list="browsers">



 <datalist id="browsers">

   <option value="Internet Explorer">

   <option value="Firefox">

   <option value="Chrome">

   <option value="Opera">

   <option value="Safari">

 </datalist> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml5_datalist) 

 



#### <input> min 和 max 属性

 min、max 和 step 属性用于为包含数字或日期的 input 类型规定限定（约束）。

 

#### 注意:

 min、max 和 step 属性适用于以下类型的 <input> 标签：date pickers、number 以及 range。

  ![http://www.w3cschool.cc/images/compatible_opera2020.gif](http://www.w3cschool.cc/images/compatible_opera2020.gif)![http://www.w3cschool.cc/images/compatible_safari2020.gif](http://www.w3cschool.cc/images/compatible_safari2020.gif)![http://www.w3cschool.cc/images/compatible_chrome2020.gif](http://www.w3cschool.cc/images/compatible_chrome2020.gif)![http://www.w3cschool.cc/images/incompatible_firefox2020.gif](http://www.w3cschool.cc/images/incompatible_firefox2020.gif)![http://www.w3cschool.cc/images/compatible_ie2020.gif](http://www.w3cschool.cc/images/compatible_ie2020.gif)
#### 实例

 <input> 元素最小值与最大值设置:

 
```
 Enter a date before 1980-01-01:

 <input type="date" name="bday" max="1979-12-31">



 Enter a date after 2000-01-01:

 <input type="date" name="bday" min="2000-01-02">



 Quantity (between 1 and 5):

 <input type="number" name="quantity" min="1" max="5">


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml5_input_max_min) 

 



#### <input> multiple 属性

 multiple 属性是一个 boolean 属性.

 multiple 属性规定<input> 元素中可选择多个值。

 注意: multiple 属性适用于以下类型的 <input> 标签：email 和 file。: email, and file.

  ![http://www.w3cschool.cc/images/compatible_opera2020.gif](http://www.w3cschool.cc/images/compatible_opera2020.gif)![http://www.w3cschool.cc/images/compatible_safari2020.gif](http://www.w3cschool.cc/images/compatible_safari2020.gif)![http://www.w3cschool.cc/images/compatible_chrome2020.gif](http://www.w3cschool.cc/images/compatible_chrome2020.gif)![http://www.w3cschool.cc/images/compatible_firefox2020.gif](http://www.w3cschool.cc/images/compatible_firefox2020.gif)![http://www.w3cschool.cc/images/compatible_ie2020.gif](http://www.w3cschool.cc/images/compatible_ie2020.gif)
#### 实例

 上传多个文件:

 
```
 Select images: <input type="file" name="img" multiple>


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml5_input_multiple) 

 



#### <input> pattern 属性

  pattern 属性描述了一个正则表达式用于验证 <input> 元素的值。

 注意:pattern 属性适用于以下类型的 <input> 标签: text, search, url, tel, email, 和 password.

 

#### 提示：

 是用来全局 [title](http://www.w3cschool.cc/tags/tag-title.html) 属性描述了模式.

 提示： 您可以在我们的 [JavaScript 教程](http://www.w3cschool.cc/js/js-tutorial.html)中学习到有关正则表达式的内容

  ![http://www.w3cschool.cc/images/compatible_opera2020.gif](http://www.w3cschool.cc/images/compatible_opera2020.gif)![http://www.w3cschool.cc/images/incompatible_safari2020.gif](http://www.w3cschool.cc/images/incompatible_safari2020.gif)![http://www.w3cschool.cc/images/compatible_chrome2020.gif](http://www.w3cschool.cc/images/compatible_chrome2020.gif)![http://www.w3cschool.cc/images/compatible_firefox2020.gif](http://www.w3cschool.cc/images/compatible_firefox2020.gif)![http://www.w3cschool.cc/images/compatible_ie2020.gif](http://www.w3cschool.cc/images/compatible_ie2020.gif)
#### 实例

 下面的例子显示了一个只能包含三个字母的文本域（不含数字及特殊字符）：

 
```
 Country code: <input type="text" name="country_code" pattern="[A-Za-z]{3}" title="Three letter country code">


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml5_input_pattern) 

 



#### <input> placeholder 属性

 placeholder 属性提供一种提示（hint），描述输入域所期待的值。

 简短的提示在用户输入值前会显示在输入域上。

 注意: placeholder 属性适用于以下类型的 <input> 标签：text, search, url, telephone, email 以及 password。

  ![http://www.w3cschool.cc/images/compatible_opera2020.gif](http://www.w3cschool.cc/images/compatible_opera2020.gif)![http://www.w3cschool.cc/images/compatible_safari2020.gif](http://www.w3cschool.cc/images/compatible_safari2020.gif)![http://www.w3cschool.cc/images/compatible_chrome2020.gif](http://www.w3cschool.cc/images/compatible_chrome2020.gif)![http://www.w3cschool.cc/images/compatible_firefox2020.gif](http://www.w3cschool.cc/images/compatible_firefox2020.gif)![http://www.w3cschool.cc/images/compatible_ie2020.gif](http://www.w3cschool.cc/images/compatible_ie2020.gif)
#### 实例

 input 字段提示文本t:

 
```
 <input type="text" name="fname" placeholder="First name">


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml5_input_placeholder) 

 



#### <input> required 属性

  required 属性是一个 boolean 属性.

 required 属性规定必须在提交之前填写输入域（不能为空）。

 注意:required 属性适用于以下类型的 <input> 标签：text, search, url, telephone, email, password, date pickers, number, checkbox, radio 以及 file。

  ![http://www.w3cschool.cc/images/compatible_opera2020.gif](http://www.w3cschool.cc/images/compatible_opera2020.gif)![http://www.w3cschool.cc/images/incompatible_safari2020.gif](http://www.w3cschool.cc/images/incompatible_safari2020.gif)![http://www.w3cschool.cc/images/compatible_chrome2020.gif](http://www.w3cschool.cc/images/compatible_chrome2020.gif)![http://www.w3cschool.cc/images/compatible_firefox2020.gif](http://www.w3cschool.cc/images/compatible_firefox2020.gif)![http://www.w3cschool.cc/images/compatible_ie2020.gif](http://www.w3cschool.cc/images/compatible_ie2020.gif)
#### 实例

 不能为空的input字段:

 
```
 Username: <input type="text" name="usrname" required>


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml5_input_required) 

 



#### <input> step 属性

 step 属性为输入域规定合法的数字间隔。

 如果 step="3"，则合法的数是 -3,0,3,6 等

 提示： step 属性可以与 max 和 min 属性创建一个区域值.

 

#### 注意:

 step 属性与以下type类型一起使用: number, range, date, datetime, datetime-local, month, time 和 week.

  ![http://www.w3cschool.cc/images/compatible_opera2020.gif](http://www.w3cschool.cc/images/compatible_opera2020.gif)![http://www.w3cschool.cc/images/compatible_safari2020.gif](http://www.w3cschool.cc/images/compatible_safari2020.gif)![http://www.w3cschool.cc/images/compatible_chrome2020.gif](http://www.w3cschool.cc/images/compatible_chrome2020.gif)![http://www.w3cschool.cc/images/incompatible_firefox2020.gif](http://www.w3cschool.cc/images/incompatible_firefox2020.gif)![http://www.w3cschool.cc/images/compatible_ie2020.gif](http://www.w3cschool.cc/images/compatible_ie2020.gif)
#### 实例

 规定input step步长为3:

 
```
 <input type="number" name="points" step="3">


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml5_input_step) 

 



#### HTML5 <input> 标签

 

|标签|描述|
|:--|:--|
|<form>|定义一个form表单|
|<input>|定义一个 input 域|



