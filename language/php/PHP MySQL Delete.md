 PHP MySQL Delete  
DELETE 语句用于从数据库表中删除行。

 

#### 删除数据库中的数据

 DELETE FROM 语句用于从数据库表中删除记录。

 
#### 语法

 
```
 DELETE FROM table_name

 WHERE some_column = some_value 




```
 

注释：请注意 DELETE 语法中的 WHERE 子句。WHERE 子句规定了哪些记录需要删除。如果您想省去 WHERE 子句，所有的记录都会被删除！如需学习更多关于 SQL 的知识，请访问我们的 [SQL 教程](#)。

 为了让 PHP 执行上面的语句，我们必须使用 mysqli_query() 函数。该函数用于向 MySQL 连接发送查询或命令。

 
#### 实例

 请看下面的 "Persons" 表：

 

|FirstName|LastName|Age|
|:--|:--|:--|
|Peter|Griffin|35|
|Glenn|Quagmire|33|

下面的实例删除 "Persons" 表中所有 LastName='Griffin' 的记录：

 
```
 <?php

 $con=mysqli_connect("example.com","peter","abc123","my_db");

 // Check connection

 if (mysqli_connect_errno())

 {

 echo "Failed to connect to MySQL: " . mysqli_connect_error();

 }



 mysqli_query($con,"DELETE FROM Persons WHERE LastName='Griffin'");



 mysqli_close($con);

 ?> 




```
 在这次删除后，"Persons" 表如下所示：

 

|FirstName|LastName|Age|
|:--|:--|:--|
|Glenn|Quagmire|33|



