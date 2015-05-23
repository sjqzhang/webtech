 PHP 发送电子邮件  
PHP 允许您从脚本直接发送电子邮件。

 

#### PHP mail() 函数

 PHP mail() 函数用于从脚本中发送电子邮件。

 语法

 
```
 mail(to,subject,message,headers,parameters) 




```
 



|参数|描述|
|:--|:--|
|to|必需。规定 email 接收者。|
|subject|必需。规定 email 的主题。注释：该参数不能包含任何新行字符。|
|message|必需。定义要发送的消息。应使用 LF (\n) 来分隔各行。每行应该限制在 70 个字符内。|
|headers|可选。规定附加的标题，比如 From、Cc 和 Bcc。应当使用 CRLF (\r\n) 分隔附加的标题。|
|parameters|可选。对邮件发送程序规定额外的参数。|

注释：PHP 需要一个已安装且正在运行的邮件系统，以便使邮件函数可用。所用的程序通过在 php.ini 文件中的配置设置进行定义。请在我们的 [PHP Mail 参考手册](http://www.w3cschool.cc/php/php-ref-mail.html) 阅读更多内容。

 

#### PHP 简易 E-Mail

 通过 PHP 发送电子邮件的最简单的方式是发送一封文本 email。

 在下面的实例中，我们首先声明变量($to, $subject, $message, $from, $headers)，然后我们在 mail() 函数中使用这些变量来发送了一封 e-mail：

 
```
 <?php

 $to = "someone@example.com";

 $subject = "Test mail";

 $message = "Hello! This is a simple email message.";

 $from = "someonelse@example.com";

 $headers = "From:" . $from;

 mail($to,$subject,$message,$headers);

 echo "Mail Sent.";

 ?> 




```
 



#### PHP Mail 表单

 通过 PHP，您能够在自己的站点制作一个反馈表单。下面的实例向指定的 e-mail 地址发送了一条文本消息：

 
```
 <html>

 <body>



 <?php

 if (isset($_REQUEST['email']))

 //if "email" is filled out, send email

 {

 //send email

 $email = $_REQUEST['email'] ;

 $subject = $_REQUEST['subject'] ;

 $message = $_REQUEST['message'] ;

 mail("someone@example.com", $subject,

 $message, "From:" . $email);

 echo "Thank you for using our mail form";

 }

 else

 //if "email" is not filled out, display the form

 {

 echo "<form method='post' action='mailform.php'>

 Email: <input name='email' type='text'><br>

 Subject: <input name='subject' type='text'><br>

 Message:<br>

 <textarea name='message' rows='15' cols='40'>

 </textarea><br>

 <input type='submit'>

 </form>";

 }

 ?>



 </body>

 </html> 




```
 

 实例解释：
首先，检查是否填写了邮件输入框
 如果未填写（比如在页面被首次访问时），输出 HTML 表单
 如果已填写（在表单被填写后），从表单发送电子邮件
 当填写完表单点击提交按钮后，页面重新载入，可以看到邮件输入被重置，同时显示邮件发送成功的消息
 
注释：这个简易发送 e-mail 不安全，在本教程的下一章中，您将阅读到更多关于电子邮件脚本中的安全隐患，我们将为您讲解如何验证用户输入使它更安全。

 

#### PHP Mail 参考手册

 如需查看更多关于 PHP mail() 函数的信息，请访问我们的 [PHP Mail 参考手册](http://www.w3cschool.cc/php/php-ref-mail.html)。

 

