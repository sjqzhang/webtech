 PHP - AJAX 与 MySQL  
AJAX 可用来与数据库进行交互式通信。

 

#### AJAX 数据库实例

 下面的实例将演示网页如何通过 AJAX 从数据库读取信息：

  
#### 实例

   Select a person:
Peter Griffin
Lois Griffin
Joseph Swanson
Glenn Quagmire
 

Person info will be listed here...

 

 




 



#### 实例解释 - MySQL 数据库

 在上面的实例中，我们使用的数据库表如下所示：

 

|id|FirstName|LastName|Age|Hometown|Job|
|:--|:--|:--|:--|:--|:--|
|1|Peter|Griffin|41|Quahog|Brewery|
|2|Lois|Griffin|40|Newport|Piano Teacher|
|3|Joseph|Swanson|39|Quahog|Police Officer|
|4|Glenn|Quagmire|41|Quahog|Pilot|



 

#### 实例解释 - HTML 页面

 当用户在上面的下拉列表中选择某位用户时，会执行名为 "showUser()" 的函数。该函数由 "onchange" 事件触发：

 
```
 <html>

 <head>

 <script>

 function showUser(str)

 {

 if (str=="")

 {

 document.getElementById("txtHint").innerHTML="";

 return;

 } 

 if (window.XMLHttpRequest)

 {// code for IE7+, Firefox, Chrome, Opera, Safari

 xmlhttp=new XMLHttpRequest();

 }

 else

 {// code for IE6, IE5

 xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");

 }

 xmlhttp.onreadystatechange=function()

 {

 if (xmlhttp.readyState==4 &amp;&amp; xmlhttp.status==200)

 {

 document.getElementById("txtHint").innerHTML=xmlhttp.responseText;

 }

 }

 xmlhttp.open("GET","getuser.php?q="+str,true);

 xmlhttp.send();

 }

 </script>

 </head>

 <body>



 <form>

 <select name="users" onchange="showUser(this.value)">

 <option value="">Select a person:</option>

 <option value="1">Peter Griffin</option>

 <option value="2">Lois Griffin</option>

 <option value="3">Glenn Quagmire</option>

 <option value="4">Joseph Swanson</option>

 </select>

 </form>

 <br>

 <div id="txtHint"><b>Person info will be listed here.</b></div>



 </body>

 </html> 




```
 showUser() 函数会执行以下步骤：

 
检查是否有用户被选择
 创建 XMLHttpRequest 对象
 创建在服务器响应就绪时执行的函数
 向服务器上的文件发送请求
 请注意添加到 URL 末端的参数（q）（包含下拉列表的内容）
 


#### PHP 文件

 上面这段通过 JavaScript 调用的服务器页面是名为 "getuser.php" 的 PHP 文件。

 "getuser.php" 中的源代码会运行一次针对 MySQL 数据库的查询，然后在 HTML 表格中返回结果：

 
```
 <?php

 $q=$_GET["q"];



 $con = mysqli_connect('localhost','peter','abc123','my_db');

 if (!$con)

 {

 die('Could not connect: ' . mysqli_error($con));

 }



 mysqli_select_db($con,"ajax_demo");

 $sql="SELECT * FROM user WHERE id = '".$q."'";



 $result = mysqli_query($con,$sql);



 echo "<table border='1'>

 <tr>

 <th>Firstname</th>

 <th>Lastname</th>

 <th>Age</th>

 <th>Hometown</th>

 <th>Job</th>

 </tr>";



 while($row = mysqli_fetch_array($result))

 {

 echo "<tr>";

 echo "<td>" . $row['FirstName'] . "</td>";

 echo "<td>" . $row['LastName'] . "</td>";

 echo "<td>" . $row['Age'] . "</td>";

 echo "<td>" . $row['Hometown'] . "</td>";

 echo "<td>" . $row['Job'] . "</td>";

 echo "</tr>";

 }

 echo "</table>";



 mysqli_close($con);

 ?> 




```
 解释：当查询从 JavaScript 发送到 PHP 文件时，将发生：

 
PHP 打开一个到 MySQL 数据库的连接
 找到选中的用户
 创建 HTML 表格，填充数据，并发送回 "txtHint" 占位符
 


