 PHP 表单和用户输入  
PHP 中的 $_GET 和 $_POST 变量用于检索表单中的信息，比如用户输入。

 

#### PHP 表单处理

 有一点很重要的事情值得注意，当处理 HTML 表单时，PHP 能把来自 HTML 页面中的表单元素自动变成可供 PHP 脚本使用。

 
#### 实例

 下面的实例包含了一个 HTML 表单，带有两个输入框和一个提交按钮：

 
```
 <html>

 <body>



 <form action="welcome.php" method="post">

 Name: <input type="text" name="fname">

 Age: <input type="text" name="age">

 <input type="submit">

 </form>



 </body>

 </html> 




```
 当用户填写完上面的表单并点击提交按钮时，表单的数据会被送往名为 "welcome.php" 的 PHP 文件：

 "welcome.php" 文件如下所示：

 
```
 <html>

 <body>



 Welcome <?php echo $_POST["fname"]; ?>!<br>

 You are <?php echo $_POST["age"]; ?> years old.



 </body>

 </html> 




```
 输出如下所示：

 
```
 Welcome John!

 You are 28 years old. 




```
 我们将在下一章中讲解 PHP 中的 $_GET 和 $_POST 变量。

 

#### 表单验证

 应该在任何可能的时候对用户输入进行验证（通过客户端脚本）。浏览器验证速度更快，并且可以减轻服务器的负载。

 如果用户输入需要插入数据库，您应该考虑使用服务器验证。在服务器验证表单的一种好的方式是，把表单传给它自己，而不是跳转到不同的页面。这样用户就可以在同一张表单页面得到错误信息。用户也就更容易发现错误了。

 

