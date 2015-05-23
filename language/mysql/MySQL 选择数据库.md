 
#### MySQL 选择数据库

  在你连接到 MySQL 数据库后，可能有多个可以操作的数据库，所以你需要选择你要操作的数据库。 

 

#### 从命令提示窗口中选择MySQL数据库

  在 mysql> 提示窗口中可以很简单的选择特定的数据库。你可以使用SQL命令来选择指定的数据库。

 
#### 实例


 以下实例选取了数据库 TUTORIALS:

 
```

[root@host]# mysql -u root -p
Enter password:******
mysql> use TUTORIALS;
Database changed
mysql>

```
 执行以上命令后，你就已经成功选择了 TUTORIALS 数据库，在后续的操作中都会在 TUTORIALS 数据库中执行。

  

#### 注意:

所有的数据库名，表名，表字段都是区分大小写的。所以你在使用SQL命令时需要输入正确的名称。

 

#### 使用PHP脚本选择MySQL数据库

  PHP 提供了函数 mysql_select_db 来选取一个数据库。函数在执行成功后返回 TRUE ，否则返回 FALSE 。 

 
#### 语法

 
```

bool mysql_select_db( db_name, connection );

```
 

|参数|描述|
|:--|:--|
|db_name|必需。规定要选择的数据库。|
|connection|可选。规定 MySQL 连接。如果未指定，则使用上一个连接。|


#### 实例

 以下实例展示了如何使用 mysql_select_db 函数来选取一个数据库：

 
```

<html>
<head>
<title>Selecting MySQL Database</title>
</head>
<body>
<?php
$dbhost = 'localhost:3036';
$dbuser = 'guest';
$dbpass = 'guest123';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_select_db( 'TUTORIALS' );
mysql_close($conn);
?>
</body>
</html>

```
 

