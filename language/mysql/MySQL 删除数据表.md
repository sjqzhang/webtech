 
#### MySQL 删除数据表

  MySQL中删除数据表是非常容易操作的， 但是你再进行删除表操作时要非常小心，因为执行删除命令后所有数据都会消失。

 
#### 语法

 以下为删除MySQL数据表的通用语法：

 
```

DROP TABLE table_name ;

```
 

#### 在命令提示窗口中删除数据表

  在mysql>命令提示窗口中删除数据表SQL语句为

####  DROP TABLE 

：

 
#### 实例

 以下实例删除了数据表tutorials_tbl: 

 
```

root@host# mysql -u root -p
Enter password:*******
mysql> use TUTORIALS;
Database changed
mysql> DROP TABLE tutorials_tbl
Query OK, 0 rows affected (0.8 sec)
mysql>

```
 

#### 使用PHP脚本删除数据表


 PHP使用 mysql_query 函数来删除 MySQL 数据表。 


 该函数有两个参数，在执行成功时返回 TRUE，否则返回 FALSE。

 h3> 语法 
```

bool mysql_query( sql, connection );

```
 

|参数|描述|
|:--|:--|
|sql|必需。规定要发送的 SQL 查询。注释：查询字符串不应以分号结束。|
|connection|可选。规定 SQL 连接标识符。如果未规定，则使用上一个打开的连接。|


#### 实例

 以下实例使用了PHP脚本删除数据表tutorials_tbl: 

 
```

<html>
<head>
<title>Creating MySQL Tables</title>
</head>
<body>
<?php
$dbhost = 'localhost:3036';
$dbuser = 'root';
$dbpass = 'rootpassword';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully<br />';
$sql = "DROP TABLE tutorials_tbl";
mysql_select_db( 'TUTORIALS' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not delete table: ' . mysql_error());
}
echo "Table deleted successfully\n";
mysql_close($conn);
?>
</body>
</html>

```
 

