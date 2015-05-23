 PHP 表单 - 验证邮件和URL
 
本章节我们将介绍如何验证 names(名称), e-mails（邮件）, 和 URLs。

 

#### PHP - 验证名称

 以下代码将通过简单的方式来检测 name 字段是否包含字母和空格，如果 name 字段值不合法，将输出错误信息：

 
```

 $name = test_input($_POST["name"]);

 if (!preg_match("/^[a-zA-Z ]*$/",$name))

  {

  $nameErr = "只允许字母及空格"; 

  }

 


```
 



| preg_match — 进行正则表达式匹配。 语法： int preg_match ( string $pattern , string $subject [, array $matches [, int $flags ]] )  在 subject 字符串中搜索与 pattern 给出的正则表达式相匹配的内容。如果提供了 matches ，则其会被搜索的结果所填充。$matches[0] 将包含与整个模式匹配的文本，$matches[1] 将包含与第一个捕获的括号中的子模式所匹配的文本，以此类推。|





#### PHP - 验证邮件

 以下代码将通过简单的方式来检测 e-mail 地址是否合法。如果 e-mail 地址不合法，将输出错误信息： 

 
```
 $email = test_input($_POST["email"]);

 if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))

  {

  $emailErr = "非法邮件地址"; 

  }




```
 



#### PHP - 验证 URL

 以下代码将检测URL地址是否合法 (以下正则表达式运行URL中含有破折号:"-")， 如果 URL 地址不合法，将输出错误信息：

 
```

 $website = test_input($_POST["website"]);

if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&amp;@#\/%?=~_|!:,.;]*[-a-z0-9+&amp;@#\/%=~_|]/i",$website))

  {

  $websiteErr = "不合法的 URL"; 

  }

 


```
 



#### PHP - 验证 Name, E-mail, 和 URL

 代码如下所示:

  
#### 实例

 
```
 <?php

// 定义变量并设为空值

$nameErr = $emailErr = $genderErr = $websiteErr = "";

$name = $email = $gender = $comment = $website = "";



if ($_SERVER["REQUEST_METHOD"] == "POST")

{

  if (empty($_POST["name"]))

    {$nameErr = "Name is required";}

  else

    {

    $name = test_input($_POST["name"]);

    // check if name only contains letters and whitespace

    if (!preg_match("/^[a-zA-Z ]*$/",$name))

      {

      $nameErr = "Only letters and white space allowed"; 

      }

    }



  if (empty($_POST["email"]))

    {$emailErr = "Email is required";}

  else

    {

    $email = test_input($_POST["email"]);

    // check if e-mail address syntax is valid

    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))

      {

      $emailErr = "Invalid email format"; 

      }

    }



  if (empty($_POST["website"]))

    {$website = "";}

  else

    {

    $website = test_input($_POST["website"]);

    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)

    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&amp;@#\/%?=~_|!:,.;]*[-a-z0-9+&amp;@#\/%=~_|]/i",$website))

      {

      $websiteErr = "Invalid URL"; 

      }

    }



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
 

[运行实例 »](http://www.w3cschool.cc/try/showphp.php?filename=demo_form_validation_special) 

 

