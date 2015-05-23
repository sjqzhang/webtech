 PHP MySQL Where 子句  
WHERE 子句用于过滤记录。

 

#### WHERE 子句

 WHERE 子句用于提取满足指定标准的的记录。

 
#### 语法

 
```
 SELECT column_name(s)

 FROM table_name

 WHERE column_name operator value 




```
 如需学习更多关于 SQL 的知识，请访问我们的 [SQL 教程](#)。

 为了让 PHP 执行上面的语句，我们必须使用 mysqli_query() 函数。该函数用于向 MySQL 连接发送查询或命令。

 
#### 实例

 下面的实例将从 "Persons" 表中选取所有 FirstName='Peter' 的行：

 
```
 <?php

 $con=mysqli_connect("example.com","peter","abc123","my_db");

 // Check connection

 if (mysqli_connect_errno())

 {

 echo "Failed to connect to MySQL: " . mysqli_connect_error();

 }



 $result = mysqli_query($con,"SELECT * FROM Persons

 WHERE FirstName='Peter'");



 while($row = mysqli_fetch_array($result))

 {

 echo $row['FirstName'] . " " . $row['LastName'];

 echo "<br>";

 }

 ?> 




```
 以上代码将输出：

 
```
 Peter Griffin 




```
 

