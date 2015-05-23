 PHP $_POST 变量 
在 PHP 中，预定义的 $_POST 变量用于收集来自 method="post" 的表单中的值。

 

#### $_POST 变量

 预定义的 $_POST 变量用于收集来自 method="post" 的表单中的值。

 从带有 POST 方法的表单发送的信息，对任何人都是不可见的（不会显示在浏览器的地址栏），并且对发送信息的量也没有限制。

 注释：然而，默认情况下，POST 方法的发送信息的量最大值为 8 MB（可通过设置 php.ini 文件中的 post_max_size 进行更改）。

 
#### 实例

 
```
 <form action="welcome.php" method="post">

 Name: <input type="text" name="fname">

 Age: <input type="text" name="age">

 <input type="submit">

 </form> 




```
 当用户点击 "Submit" 按钮时，URL 如下所示：

 
```
 http://www.w3cschool.cc/welcome.php 




```
 "welcome.php" 文件现在可以通过 $_POST 变量来收集表单数据了（请注意，表单域的名称会自动成为 $_POST 数组中的键）：

 
```
 Welcome <?php echo $_POST["fname"]; ?>!<br>

 You are <?php echo $_POST["age"]; ?> years old. 




```
 



#### 何时使用 method="post"？

 从带有 POST 方法的表单发送的信息，对任何人都是不可见的，并且对发送信息的量也没有限制。

 然而，由于变量不显示在 URL 中，所以无法把页面加入书签。

 

#### PHP $_REQUEST 变量

 预定义的 $_REQUEST 变量包含了 $_GET、$_POST 和 $_COOKIE 的内容。

 $_REQUEST 变量可用来收集通过 GET 和 POST 方法发送的表单数据。

 
#### 实例

 
```
 Welcome <?php echo $_REQUEST["fname"]; ?>!<br>

 You are <?php echo $_REQUEST["age"]; ?> years old. 




```
 

