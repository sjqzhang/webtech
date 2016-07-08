 HTML 表单和输入
 
HTML 表单用于搜集不同类型的用户输入。

 
 ![http://www.w3cschool.cc/images/tryitimg.gif](http://www.w3cschool.cc/images/tryitimg.gif)
#### 在线实例

 

 [创建文本字段 (Text field)](http://www.w3cschool.cc/try/try.php?filename=tryhtml_input)

 本例演示如何在 HTML 页面创建文本域。用户可以在文本域中写入文本。

 [创建密码字段](http://www.w3cschool.cc/try/try.php?filename=tryhtml_inputpassword)

 本例演示如何创建 HTML 的密码域。

 （在本页底端可以找到更多实例。）

 

#### HTML 表单

 表单是一个包含表单元素的区域。

 表单元素是允许用户在表单中输入内容,比如：文本域(textarea)、下拉列表、单选框(radio-buttons)、复选框(checkboxes)等等。

 表单使用表单标签 <form> 来设置:

 
```
 <form>

 .

input elements

 .

 </form>







```
 



#### HTML 表单 - 输入元素

 多数情况下被用到的表单标签是输入标签（<input>）。


输入类型是由类型属性（type）定义的。大多数经常被用到的输入类型如下：

 

#### 文本域（Text Fields）

 文本域通过<input type="text"> 标签来设定，当用户要在表单中键入字母、数字等内容时，就会用到文本域。

 
```
 <form>

 First name: <input type="text" name="firstname"><br>

 Last name: <input type="text" name="lastname">

 </form> 




```
 浏览器显示如下：

  First name: 

 Last name: 
  注意:表单本身并不可见。同时，在大多数浏览器中，文本域的缺省宽度是20个字符。 

 

#### 密码字段

 密码字段通过标签<input type="password"> 来定义:

 
```
 <form>

 Password: <input type="password" name="pwd">

 </form> 




```
 浏览器显示效果如下:

  Password: 
 注意:密码字段字符不会明文显示，而是以星号或圆点替代。

 

#### 单选按钮（Radio Buttons）

 <input type="radio"> 标签定义了表单单选框选项

 
```
 <form>

 <input type="radio" name="sex" value="male">Male<br>

 <input type="radio" name="sex" value="female">Female

 </form> 




```
 浏览器显示效果如下:

  Male

Female  

#### 复选框（Checkboxes）

 <input type="checkbox"> 定义了复选框. 用户需要从若干给定的选择中选取一个或若干选项。

 
```
 <form>

 <input type="checkbox" name="vehicle" value="Bike">I have a bike<br>

 <input type="checkbox" name="vehicle" value="Car">I have a car 

 </form> 




```
 浏览器显示效果如下:

  I have a bike

I have a car  

#### 提交按钮(Submit Button)

 <input type="submit"> 定义了提交按钮.

 当用户单击确认按钮时，表单的内容会被传送到另一个文件。表单的动作属性定义了目的文件的文件名。由动作属性定义的这个文件通常会对接收到的输入数据进行相关的处理。:

 
```
 <form name="input" action="html_form_action.php" method="get">

 Username: <input type="text" name="user">

 <input type="submit" value="Submit">

 </form> 




```
 浏览器显示效果如下:

  Username: 
  假如您在上面的文本框内键入几个字母，然后点击确认按钮，那么输入数据会传送到 "html_form_action.php" 的页面。该页面将显示出输入的结果。 

 

#### ![http://www.w3cschool.cc/images/tryitpic.gif](http://www.w3cschool.cc/images/tryitpic.gif) 更多实例

 [单选按钮(Radio buttons)](http://www.w3cschool.cc/try/try.php?filename=tryhtml_radio)

 本例演示如何在 HTML 中创建单选按钮。

 [复选框(Checkboxes)](http://www.w3cschool.cc/try/try.php?filename=tryhtml_checkbox)

 本例演示如何在 HTML 页中创建复选框。用户可以选中或取消选取复选框。

 [简单的下拉列表](http://www.w3cschool.cc/try/try.php?filename=tryhtml_select2)

 本例演示如何在 HTML 页面中创建简单的下拉列表框。下拉列表框是一个可选列表。

 [预选下拉列表](http://www.w3cschool.cc/try/try.php?filename=tryhtml_select3)

 本例演示如何创建一个简单的带有预选值的下拉列表。

 [文本域(Textarea)](http://www.w3cschool.cc/try/try.php?filename=tryhtml_textarea)

 本例演示如何创建文本域（多行文本输入控件）。用户可在文本域中写入文本。可写入字符的字数不受限制。

 [创建按钮](http://www.w3cschool.cc/try/try.php?filename=tryhtml_button)

 本例演示如何创建按钮。你可以对按钮上的文字进行自定义。

 
#### ![http://www.w3cschool.cc/images/tryitpic.gif](http://www.w3cschool.cc/images/tryitpic.gif) 表单实例

 [带边框的表单](http://www.w3cschool.cc/try/try.php?filename=tryhtml_legend)

 本例演示如何在数据周围绘制一个带标题的框。

 [带有输入框和确认按钮的表单](http://www.w3cschool.cc/try/try.php?filename=tryhtml_form_submit)

 本例演示如何向页面添加表单。此表单包含两个输入框和一个确认按钮。

 [带有复选框的表单](http://www.w3cschool.cc/try/try.php?filename=tryhtml_form_checkbox)

 此表单包含两个复选框和一个确认按钮。

 [带有单选按钮的表单](http://www.w3cschool.cc/try/try.php?filename=tryhtml_form_radio)

 此表单包含两个单选框和一个确认按钮。

 [从表单发送电子邮件](http://www.w3cschool.cc/try/try.php?filename=tryhtml_form_mail)

 此例演示如何从表单发送电子邮件。

 

#### HTML 表单标签

 New : HTML5新标签

 

|标签|描述|
|:--|:--|
|<form>| 定义供用户输入的表单|
|<input>|定义输入域|
|<textarea>|定义文本域 (一个多行的输入控件)|
|<label>|定义了 <input> 元素的标签，一般为输入标题|
|<fieldset>|定义了一组相关的表单元素，并使用外框包含起来|
|<legend>|定义了 <fieldset> 元素的标题|
|<select>|定义了下拉选项列表|
|<optgroup>|定义选项组|
|<option>|定义下拉列表中的选项|
|<button>|定义一个点击按钮|
|<datalist>New|指定一个预先定义的输入控件选项列表|
|<keygen>New|定义了表单的密钥对生成器字段|
|<output>New|定义一个计算结果|



