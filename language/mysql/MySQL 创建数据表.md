 
#### MySQL 创建数据表

  创建MySQL数据表需要以下信息： 

 
表名
 表字段名
 定义每个表字段
 

#### 语法

 以下为创建MySQL数据表的SQL通用语法：

 
```

CREATE TABLE table_name (column_name column_type);

```
  


以下例子中我们将在 TUTORIALS 数据库中创建数据表tutorials_tbl：

 
```

tutorials_tbl(
   tutorial_id INT NOT NULL AUTO_INCREMENT,
   tutorial_title VARCHAR(100) NOT NULL,
   tutorial_author VARCHAR(40) NOT NULL,
   submission_date DATE,
   PRIMARY KEY ( tutorial_id )
);

```
 实例解析：

 
如果你不想字段为 

#### NULL

 可以设置字段的属性为 

#### NOT NULL

， 在操作数据库时如果输入该字段的数据为

#### NULL

 ，就会报错。
  AUTO_INCREMENT定义列为自增的属性，一般用于主键，数值会自动加1。
  PRIMARY KEY关键字用于定义列为主键。 您可以使用多列来定义主键，列间以逗号分隔。 
 


#### 通过命令提示符创建表

 通过 mysql> 命令窗口可以很简单的创建MySQL数据表。你可以使用 SQL 语句 

#### CREATE TABLE

 来创建数据表。

 
#### 实例

 以下为创建数据表 tutorials_tbl 实例: 

 
```

root@host# mysql -u root -p
Enter password:*******
mysql> use TUTORIALS;
Database changed
mysql> CREATE TABLE tutorials_tbl(
   -> tutorial_id INT NOT NULL AUTO_INCREMENT,
   -> tutorial_title VARCHAR(100) NOT NULL,
   -> tutorial_author VARCHAR(40) NOT NULL,
   -> submission_date DATE,
   -> PRIMARY KEY ( tutorial_id )
   -> );
Query OK, 0 rows affected (0.16 sec)
mysql>

```
  

#### 注意：

MySQL命令终止符为分号 (;) 。

 

#### 使用PHP脚本创建数据表

 你可以使用PHP的 mysql_query() 函数来创建已存在数据库的数据表。 

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

 以下实例使用了PHP脚本来创建数据表：

 
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
$sql = "CREATE TABLE tutorials_tbl( ".
       "tutorial_id INT NOT NULL AUTO_INCREMENT, ".
       "tutorial_title VARCHAR(100) NOT NULL, ".
       "tutorial_author VARCHAR(40) NOT NULL, ".
       "submission_date DATE, ".
       "PRIMARY KEY ( tutorial_id )); ";
mysql_select_db( 'TUTORIALS' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not create table: ' . mysql_error());
}
echo "Table created successfully\n";
mysql_close($conn);
?>
</body>
</html>

```
 

