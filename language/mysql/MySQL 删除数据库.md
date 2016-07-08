 
#### MySQL 删除数据库

 

#### 使用 mysqladmin 删除数据库

  使用普通用户登陆mysql服务器，你可能需要特定的权限来创建或者删除 MySQL 数据库。 


 所以我们这边使用root用户登录，root用户拥有最高权限，可以使用 mysql mysqladmin 命令来创建数据库。 

  在删除数据库过程中，务必要十分谨慎，因为在执行删除命令后，所有数据将会消失。

  以下实例删除数据库TUTORIALS(该数据库在前一章节已创建)：

 
```

[root@host]# mysqladmin -u root -p drop TUTORIALS
Enter password:******

```
 执行以上删除数据库命令后，会出现一个提示框，来确认是否真的删除数据库：

 
```

Dropping the database is potentially a very bad thing to do.
Any data stored in the database will be destroyed.

Do you really want to drop the 'TUTORIALS' database [y/N] y
Database "TUTORIALS" dropped

```
 

#### 使用PHP脚本删除数据库

 PHP使用 mysql_query 函数来创建或者删除 MySQL 数据库。 


 该函数有两个参数，在执行成功时返回 TRUE，否则返回 FALSE。 

 
#### 语法

 
```

bool mysql_query( sql, connection );

```
 

|参数|描述|
|:--|:--|
|sql|必需。规定要发送的 SQL 查询。注释：查询字符串不应以分号结束。|
|connection|可选。规定 SQL 连接标识符。如果未规定，则使用上一个打开的连接。|


#### 实例

  以下实例演示了使用PHP mysql_query函数来删除数据库：

 
```

<html>
<head>
<title>Deleting MySQL Database</title>
</head>
<body>
<?php
$dbhost = 'localhost:3036';
$dbuser = 'root';
$dbpass = 'rootpassword';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('连接失败: ' . mysql_error());
}
echo '连接成功<br />';
$sql = 'DROP DATABASE TUTORIALS';
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('删除数据库失败: ' . mysql_error());
}
echo "数据库 TUTORIALS 删除成功\n";
mysql_close($conn);
?>
</body>
</html>

```
  

#### 注意：

 在使用PHP脚本删除数据库时，不会出现确认是否删除信息，会直接删除指定数据库，所以你在删除数据库时要特别小心。

 

