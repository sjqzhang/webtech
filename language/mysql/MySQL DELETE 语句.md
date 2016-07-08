 
#### MySQL DELETE 语句

  你可以使用 SQL 的 DELETE FROM 命令来删除 MySQL 数据表中的记录。 


 你可以在mysql>命令提示符或PHP脚本中执行该命令。 

 
#### 语法


 以下是SQL DELETE 语句从MySQL数据表中删除数据的通用语法：

 
```

DELETE FROM table_name [WHERE Clause]

```
 
 如果没有指定 WHERE 子句，MySQL表中的所有记录将被删除。

 你可以在 WHERE 子句中指定任何条件

 您可以在单个表中一次性删除记录。


 当你想删除数据表中指定的记录时 WHERE 子句是非常有用的。 

 

#### 从命令行中删除数据

 这里我们将在 SQL DELETE 命令中使用 WHERE 子句来删除MySQL数据表tutorials_tbl所选的数据。

 
#### 实例

 以下实例将删除 tutorial_tbl 表中 tutorial_id 为3 的记录：

 
```

root@host# mysql -u root -p password;
Enter password:*******
mysql> use TUTORIALS;
Database changed
mysql> DELETE FROM tutorials_tbl WHERE tutorial_id=3;
Query OK, 1 row affected (0.23 sec)

mysql>

```
 

#### 使用 PHP 脚本删除数据

 PHP使用 mysql_query() 函数来执行SQL语句， 你可以在SQL DELETE命令中使用或不使用 WHERE 子句。

 该函数与 mysql>命令符执行SQL命令的效果是一样的。

 
#### 实例

 以下PHP实例将删除tutorial_tbl表中tutorial_id为3的记录:

 
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
$sql = 'DELETE FROM tutorials_tbl
        WHERE tutorial_id=3';

mysql_select_db('TUTORIALS');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not delete data: ' . mysql_error());
}
echo "Deleted data successfully\n";
mysql_close($conn);
?>

```
 

