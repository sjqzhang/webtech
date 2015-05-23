 PHP MySQL Update  
UPDATE 语句用于中修改数据库表中的数据。

 

#### 更新数据库中的数据

 UPDATE 语句用于更新数据库表中已存在的记录。

 
#### 语法

 
```
 UPDATE table_name

 SET column1=value, column2=value2,...

 WHERE some_column=some_value 




```
 

注释：请注意 UPDATE 语法中的 WHERE 子句。WHERE 子句规定了哪些记录需要更新。如果您想省去 WHERE 子句，所有的记录都会被更新！如需学习更多关于 SQL 的知识，请访问我们的 [SQL 教程](#)。

 为了让 PHP 执行上面的语句，我们必须使用 mysqli_query() 函数。该函数用于向 MySQL 连接发送查询或命令。

 
#### 实例

 在本教程的前面章节中，我们创建了一个名为 "Persons" 的表，如下所示：

 

|FirstName|LastName|Age|
|:--|:--|:--|
|Peter|Griffin|35|
|Glenn|Quagmire|33|

下面的例子更新 "Persons" 表的一些数据：

 
```
 <?php

 $con=mysqli_connect("example.com","peter","abc123","my_db");

 // Check connection

 if (mysqli_connect_errno())

 {

 echo "Failed to connect to MySQL: " . mysqli_connect_error();

 }



 mysqli_query($con,"UPDATE Persons SET Age=36

 WHERE FirstName='Peter' AND LastName='Griffin'");



 mysqli_close($con);

 ?> 




```
 在这次更新后，"Persons" 表如下所示：

 

|FirstName|LastName|Age|
|:--|:--|:--|
|Peter|Griffin|36|
|Glenn|Quagmire|33|



