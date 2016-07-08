 
#### MySQL UPDATE 查询

  如果我们需要修改或更新MySQL中的数据，我们可以使用 SQL UPDATE 命令来操作。. 

 
#### 语法

  以下是 UPDATE 命令修改 MySQL 数据表数据的通用SQL语法：

 
```

UPDATE table_name SET field1=new-value1, field2=new-value2
[WHERE Clause]

```
 
 你可以同时更新一个或多个字段。

 你可以在 WHERE 子句中指定任何条件。

 你可以在一个单独表中同时更新数据。


 当你需要更新数据表中指定行的数据时 WHERE 子句是非常有用的。 

 通过命令提示符更新数据 以下我们将在 SQL UPDATE 命令使用 WHERE子句来更新tutorials_tbl表中指定的数据：

 
#### 实例

 以下实例将更新数据表中 tutorial_id 为 3 的 tutorial_title 字段值：

 
```

root@host# mysql -u root -p password;
Enter password:*******
mysql> use TUTORIALS;
Database changed
mysql> UPDATE tutorials_tbl 
    -> SET tutorial_title='Learning JAVA' 
    -> WHERE tutorial_id=3;
Query OK, 1 row affected (0.04 sec)
Rows matched: 1  Changed: 1  Warnings: 0

mysql>

```
 

#### 使用PHP脚本更新数据

  PHP中使用函数mysql_query()来执行SQL语句，你可以在SQL UPDATE语句中使用或者不适用WHERE子句。 

  该函数与在mysql>命令提示符中执行SQL语句的效果是一样的。 

 
#### 实例

  以下实例将更新 tutorial_id 为3的 tutorial_title 字段的数据。 

 
```

<?php
$dbhost = 'localhost:3036';
$dbuser = 'root';
$dbpass = 'rootpassword';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'UPDATE tutorials_tbl
        SET tutorial_title="Learning JAVA"
        WHERE tutorial_id=3';

mysql_select_db('TUTORIALS');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}
echo "Updated data successfully\n";
mysql_close($conn);
?>

```
 

