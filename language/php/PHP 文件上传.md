 PHP 文件上传  
通过 PHP，可以把文件上传到服务器。

 

#### 创建一个文件上传表单

 允许用户从表单上传文件是非常有用的。

 请看下面这个供上传文件的 HTML 表单：

 
```
 <html>

 <body>



 <form action="upload_file.php" method="post"

 enctype="multipart/form-data">

 <label for="file">Filename:</label>

 <input type="file" name="file" id="file"><br>

 <input type="submit" name="submit" value="Submit">

 </form>



 </body>

 </html> 




```
 有关上面的 HTML 表单的一些注意项列举如下：

 
<form> 标签的 enctype 属性规定了在提交表单时要使用哪种内容类型。在表单需要二进制数据时，比如文件内容，请使用 "multipart/form-data"。
 <input> 标签的 type="file" 属性规定了应该把输入作为文件来处理。举例来说，当在浏览器中预览时，会看到输入框旁边有一个浏览按钮。
 
注释：允许用户上传文件是一个巨大的安全风险。请仅仅允许可信的用户执行文件上传操作。



 

#### 创建上传脚本

 "upload_file.php" 文件含有供上传文件的代码：

 
```
 <?php

 if ($_FILES["file"]["error"] > 0)

 {

 echo "Error: " . $_FILES["file"]["error"] . "<br>";

 }

 else

 {

 echo "Upload: " . $_FILES["file"]["name"] . "<br>";

 echo "Type: " . $_FILES["file"]["type"] . "<br>";

 echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";

 echo "Stored in: " . $_FILES["file"]["tmp_name"];

 }

 ?> 




```
 通过使用 PHP 的全局数组 $_FILES，你可以从客户计算机向远程服务器上传文件。

 第一个参数是表单的 input name，第二个下标可以是 "name"、"type"、"size"、"tmp_name" 或 "error"。如下所示：

 
$_FILES["file"]["name"] - 被上传文件的名称
 $_FILES["file"]["type"] - 被上传文件的类型
 $_FILES["file"]["size"] - 被上传文件的大小，以字节计
 $_FILES["file"]["tmp_name"] - 存储在服务器的文件的临时副本的名称
 $_FILES["file"]["error"] - 由文件上传导致的错误代码
 
这是一种非常简单文件上传方式。基于安全方面的考虑，您应当增加有关允许哪些用户上传文件的限制。



 

#### 上传限制

 在这个脚本中，我们增加了对文件上传的限制。用户只能上传 .gif 和 .jpeg 文件，文件大小必须小于 20 kB：

 
```
 <?php

 $allowedExts = array("gif", "jpeg", "jpg", "png");

 $temp = explode(".", $_FILES["file"]["name"]);

$extension = end($temp);

 if ((($_FILES["file"]["type"] == "image/gif")

 || ($_FILES["file"]["type"] == "image/jpeg")

 || ($_FILES["file"]["type"] == "image/jpg")

|| ($_FILES["file"]["type"] == "image/pjpeg")

|| ($_FILES["file"]["type"] == "image/x-png")

 || ($_FILES["file"]["type"] == "image/png"))

 &amp;&amp; ($_FILES["file"]["size"] < 20000)

 &amp;&amp; in_array($extension, $allowedExts))

 {

 if ($_FILES["file"]["error"] > 0)

 {

 echo "Error: " . $_FILES["file"]["error"] . "<br>";

 }

 else

 {

 echo "Upload: " . $_FILES["file"]["name"] . "<br>";

 echo "Type: " . $_FILES["file"]["type"] . "<br>";

 echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";

 echo "Stored in: " . $_FILES["file"]["tmp_name"];

 }

 }

 else

 {

 echo "Invalid file";

 }

 ?> 




```
 



#### 保存被上传的文件

 上面的实例在服务器的 PHP 临时文件夹中创建了一个被上传文件的临时副本。

 这个临时的副本文件会在脚本结束时消失。要保存被上传的文件，我们需要把它拷贝到另外的位置：

 
```
 <?php

 $allowedExts = array("gif", "jpeg", "jpg", "png");

 $temp = explode(".", $_FILES["file"]["name"]);

$extension = end($temp);

 if ((($_FILES["file"]["type"] == "image/gif")

 || ($_FILES["file"]["type"] == "image/jpeg")

 || ($_FILES["file"]["type"] == "image/jpg")

|| ($_FILES["file"]["type"] == "image/pjpeg")

|| ($_FILES["file"]["type"] == "image/x-png")

 || ($_FILES["file"]["type"] == "image/png"))

 &amp;&amp; ($_FILES["file"]["size"] < 20000)

 &amp;&amp; in_array($extension, $allowedExts))

 {

 if ($_FILES["file"]["error"] > 0)

 {

 echo "Return Code: " . $_FILES["file"]["error"] . "<br>";

 }

 else

 {

 echo "Upload: " . $_FILES["file"]["name"] . "<br>";

 echo "Type: " . $_FILES["file"]["type"] . "<br>";

 echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";

 echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";



 if (file_exists("upload/" . $_FILES["file"]["name"]))

 {

 echo $_FILES["file"]["name"] . " already exists. ";

 }

 else

 {

 move_uploaded_file($_FILES["file"]["tmp_name"],

 "upload/" . $_FILES["file"]["name"]);

 echo "Stored in: " . "upload/" . $_FILES["file"]["name"];

 }

 }

 }

 else

 {

 echo "Invalid file";

 }

 ?> 




```
 上面的脚本检测了文件是否已存在，如果不存在，则把文件拷贝到名为 "upload" 的文件夹。

 

