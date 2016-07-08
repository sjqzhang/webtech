 
#### MySQL 查询数据

 MySQL 数据库使用SQL SELECT语句来查询数据。

  你可以通过 mysql> 命令提示窗口中在数据库中查询数据，或者通过PHP脚本来查询数据。 

 
#### 语法

  以下为在MySQL数据库中查询数据通用的 SELECT 语法： 

 
```

SELECT field1, field2,...fieldN table_name1, table_name2...
[WHERE Clause]
[OFFSET M ][LIMIT N]

```
 
查询语句中你可以使用一个或者多个表，表之间使用逗号(,)分割，并使用WHERE语句来设定查询条件。
 SELECT 命令可以读取一条或者多条记录。
 你可以使用星号（*）来代替其他字段，SELECT语句会返回表的所有字段数据
 你可以使用 WHERE 语句来包含任何条件。
 你可以通过OFFSET指定SELECT语句开始查询的数据偏移量。默认情况下偏移量为0。
 你可以使用 LIMIT 属性来设定返回的记录数。
 


#### 通过命令提示符获取数据

 以下实例我们将通过 SQL SELECT 命令来获取 MySQL 数据表 tutorials_tbl 的数据： 

 
#### 实例

 以下实例将返回数据表tutorials_tbl的所有记录:

 
```

root@host# mysql -u root -p password;
Enter password:*******
mysql> use TUTORIALS;
Database changed
mysql> SELECT * from tutorials_tbl 
+-------------+----------------+-----------------+-----------------+
| tutorial_id | tutorial_title | tutorial_author | submission_date |
+-------------+----------------+-----------------+-----------------+
|           1 | Learn PHP      | John Poul       | 2007-05-21      |
|           2 | Learn MySQL    | Abdul S         | 2007-05-21      |
|           3 | JAVA Tutorial  | Sanjay          | 2007-05-21      |
+-------------+----------------+-----------------+-----------------+
3 rows in set (0.01 sec)

mysql>

```
 

#### 使用PHP脚本来获取数据

  使用PHP函数的mysql_query()及SQL SELECT命令来获取数据。


 该函数用于执行SQL命令，然后通过 PHP 函数 mysql_fetch_array() 来使用或输出所有查询的数据。

  mysql_fetch_array() 函数从结果集中取得一行作为关联数组，或数字数组，或二者兼有 返回根据从结果集取得的行生成的数组，如果没有更多行则返回 false。 


 以下实例为从数据表 tutorials_tbl 中读取所有记录。

 
#### 实例

 尝试以下实例来显示数据表 tutorials_tbl 的所有记录。 



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
$sql = 'SELECT tutorial_id, tutorial_title, 
               tutorial_author, submission_date
        FROM tutorials_tbl';

mysql_select_db('TUTORIALS');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
    echo "Tutorial ID :{$row['tutorial_id']}  <br> ".
         "Title: {$row['tutorial_title']} <br> ".
         "Author: {$row['tutorial_author']} <br> ".
         "Submission Date : {$row['submission_date']} <br> ".
         "--------------------------------<br>";
} 
echo "Fetched data successfully\n";
mysql_close($conn);
?>

```
 以上实例中，读取的每行记录赋值给变量$row，然后再打印出每个值。

 

#### 注意：

记住如果你需要在字符串中使用变量，请将变量置于花括号。

  在上面的例子中，PHP mysql_fetch_array()函数第二个参数为MYSQL_ASSOC， 设置该参数查询结果返回关联数组，你可以使用字段名称来作为数组的索引。

  PHP提供了另外一个函数mysql_fetch_assoc(), 该函数从结果集中取得一行作为关联数组。 返回根据从结果集取得的行生成的关联数组，如果没有更多行，则返回 false。 

 
#### 实例

  尝试以下实例，该实例使用了mysql_fetch_assoc()函数来输出数据表tutorial_tbl的所有记录：

 
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
$sql = 'SELECT tutorial_id, tutorial_title, 
               tutorial_author, submission_date
        FROM tutorials_tbl';

mysql_select_db('TUTORIALS');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_assoc($retval))
{
    echo "Tutorial ID :{$row['tutorial_id']}  <br> ".
         "Title: {$row['tutorial_title']} <br> ".
         "Author: {$row['tutorial_author']} <br> ".
         "Submission Date : {$row['submission_date']} <br> ".
         "--------------------------------<br>";
} 
echo "Fetched data successfully\n";
mysql_close($conn);
?>

```
  你也可以使用常量 MYSQL_NUM 作为PHP mysql_fetch_array()函数的第二个参数，返回数字数组。 

 
#### 实例

 以下实例使用MYSQL_NUM参数显示数据表tutorials_tbl的所有记录: 

 
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
$sql = 'SELECT tutorial_id, tutorial_title, 
               tutorial_author, submission_date
        FROM tutorials_tbl';

mysql_select_db('TUTORIALS');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_NUM))
{
    echo "Tutorial ID :{$row[0]}  <br> ".
         "Title: {$row[1]} <br> ".
         "Author: {$row[2]} <br> ".
         "Submission Date : {$row[3]} <br> ".
         "--------------------------------<br>";
}
echo "Fetched data successfully\n";
mysql_close($conn);
?>

```
 以上三个实例输出结果都一样。

 

#### 内存释放

 在我们执行完SELECT语句后，释放游标内存是一个很好的习惯。 。可以通过PHP函数mysql_free_result()来实现内存的释放。 

  以下实例演示了该函数的使用方法。 

 
#### 实例

 尝试以下实例:

 
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
$sql = 'SELECT tutorial_id, tutorial_title, 
               tutorial_author, submission_date
        FROM tutorials_tbl';

mysql_select_db('TUTORIALS');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_NUM))
{
    echo "Tutorial ID :{$row[0]}  <br> ".
         "Title: {$row[1]} <br> ".
         "Author: {$row[2]} <br> ".
         "Submission Date : {$row[3]} <br> ".
         "--------------------------------<br>";
}
mysql_free_result($retval);
echo "Fetched data successfully\n";
mysql_close($conn);
?>

```
 

