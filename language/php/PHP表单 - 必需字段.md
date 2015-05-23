 PHP 表单 - 必需字段
 
本章节我们将介绍如何设置表单必需字段及错误信息。

 

#### PHP - 必需字段

 在上一章节我们已经介绍了表的验证规则，我们可以看到"Name", "E-mail", 和 "Gender" 字段是必须的，各字段不能为空。

 

|字段|验证规则|
|:--|:--|
|Name|必需。 + 只能包含字母和空格|
|E-mail|必需。 + 必需包含一个有效的电子邮件地址（包含"@"和"."）|
|Website|可选。 如果存在，它必须包含一个有效的URL|
|Comment|可选。多行字段（文本域）。|
|Gender|必需。 Must select one|

如果在前面的章节中，所有输入字段都是可选的。 

 在以下代码中我们加入了一些新的变量: $nameErr, $emailErr, $genderErr, 和 $websiteErr.。这些错误变量将显示在必须字段上。 我们还为每个$_POST变量增加了一个if else语句。 这些语句将检查 $_POST 变量是 否为空（使用php的 empty() 函数）。如果为空，将显示对应的错误信息。 如果不为空，数据将传递给test_input() 函数：

 
```
 <?php

// 定义变量并默认设为空值

$nameErr = $emailErr = $genderErr = $websiteErr = "";

$name = $email = $gender = $comment = $website = "";



if ($_SERVER["REQUEST_METHOD"] == "POST")

{



  if (empty($_POST["name"]))

    {$nameErr = "Name is required";}

  else

    {$name = test_input($_POST["name"]);}



  if (empty($_POST["email"]))

     {$emailErr = "Email is required";}

  else

    {$email = test_input($_POST["email"]);}



  if (empty($_POST["website"]))

     {$website = "";}

  else

    {$website = test_input($_POST["website"]);}



  if (empty($_POST["comment"]))

    {$comment = "";}

  else

    {$comment = test_input($_POST["comment"]);}



  if (empty($_POST["gender"]))

    {$genderErr = "Gender is required";}

  else

     {$gender = test_input($_POST["gender"]);}

}

?>




```
 



#### PHP - 显示错误信息

 在以下的HTML实例表单中，我们为每个字段中添加了一些脚本， 各个脚本会在信息输入错误时显示错误信息。(如果用户未填写信息就提交表单则会输出错误信息):

  
#### 实例

 
```
 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">



 Name: <input type="text" name="name">

<span class="error">* <?php echo $nameErr;?></span>

 <br><br>

E-mail:

<input type="text" name="email">

<span class="error">* <?php echo $emailErr;?></span>

<br><br>

 Website:

<input type="text" name="website">

<span class="error"><?php echo $websiteErr;?></span>

<br><br>

 <label>Comment: <textarea name="comment" rows="5" cols="40"></textarea>

<br><br>

 Gender:

<input type="radio" name="gender" value="female">Female

<input type="radio" name="gender" value="male">Male

 <span class="error">* <?php echo $genderErr;?></span>

<br><br>

<input type="submit" name="submit" value="Submit"> 



</form> 


```
 

[运行实例 »](http://www.w3cschool.cc/try/showphp.php?filename=demo_form_validation_required) 

 

