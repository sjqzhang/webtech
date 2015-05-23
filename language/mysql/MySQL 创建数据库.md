 
#### MySQL 创建数据库

 

#### 使用 mysqladmin 创建数据库

  使用普通用户，你可能需要特定的权限来创建或者删除 MySQL 数据库。


 所以我们这边使用root用户登录，root用户拥有最高权限，可以使用 mysql mysqladmin 命令来创建数据库。

 
#### 实例

  以下命令简单的演示了创建数据库的过程，数据名为 TUTORIALS:

 
```

[root@host]# mysqladmin -u root -p create TUTORIALS
Enter password:******

```
 以上命令执行成功后会创建 MySQL 数据库 TUTORIALS。

 

#### 使用 PHP脚本 创建数据库

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


 以下实例演示了使用PHP来创建一个数据库：

 
```

<html>
<head>
<title>Creating MySQL Database</title>
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
$sql = 'CREATE DATABASE TUTORIALS';
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not create database: ' . mysql_error());
}
echo "Database TUTORIALS created successfully\n";
mysql_close($conn);
?>
</body>
</html>

```
 

