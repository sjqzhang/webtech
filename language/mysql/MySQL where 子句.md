 
#### MySQL where 子句

  我们知道从MySQL表中使用SQL SELECT 语句来读取数据。


 如需有条件地从表中选取数据，可将 WHERE 子句添加到 SELECT 语句中。

 
#### 语法

  以下是SQL SELECT 语句使用 WHERE 子句从数据表中读取数据的通用语法：

 
```

SELECT field1, field2,...fieldN table_name1, table_name2...
[WHERE condition1 [AND [OR]] condition2.....

```


 查询语句中你可以使用一个或者多个表，表之间使用逗号(,)分割，并使用WHERE语句来设定查询条件。

 你可以在WHERE子句中指定任何条件。

 你可以使用AND或者OR指定一个或多个条件。

 WHERE子句也可以运用于SQL的 DELETE 或者 UPDATE 命令。

 WHERE 子句类似于程序语言中的if条件，根据 MySQL 表中的字段值来读取指定的数据。


以下为操作符列表，可用于 WHERE 子句中。 

  下表中实例假定 A为10 B为20 

 

|操作符|描述|实例|
|:--|:--|:--|
|=| 等号，检测两个值是否相等，如果相等返回true| (A = B) 返回false。 |
|, != | 不等于，检测两个值是否相等，如果不相等返回true| (A != B) 返回 true。 |
|>| 大于号，检测左边的值是否大于右边的值, 如果左边的值大于右边的值返回true| (A > B) 返回false。 |
|<| 小于号，检测左边的值是否小于右边的值, 如果左边的值小于右边的值返回true| (A < B) 返回 true。 |
|>=| 大于等于号，检测左边的值是否大于或等于右边的值, 如果左边的值大于或等于右边的值返回true| (A >= B) 返回false。|
|<=| 小于等于号，检测左边的值是否小于于或等于右边的值, 如果左边的值小于或等于右边的值返回true| (A <= B) 返回 true。 |

如果我们想再MySQL数据表中读取指定的数据，WHERE 子句是非常有用的。

 使用主键来作为 WHERE 子句的条件查询是非常快速的。

 如果给定的条件在表中没有任何匹配的记录，那么查询不会返回任何数据。

 

#### 从命令提示符中读取数据

 我们将在SQL SELECT语句使用WHERE子句来读取MySQL数据表 tutorials_tbl 中的数据：

 实例

 以下实例将读取 tutorials_tbl 表中 tutorial_author 字段值为 Sanjay 的所有记录：

 
```

root@host# mysql -u root -p password;
Enter password:*******
mysql> use TUTORIALS;
Database changed
mysql> SELECT * from tutorials_tbl WHERE tutorial_author='Sanjay';
+-------------+----------------+-----------------+-----------------+
| tutorial_id | tutorial_title | tutorial_author | submission_date |
+-------------+----------------+-----------------+-----------------+
|           3 | JAVA Tutorial  | Sanjay          | 2007-05-21      |
+-------------+----------------+-----------------+-----------------+
1 rows in set (0.01 sec)

mysql>

```
 除非你使用 LIKE 来比较字符串，否则MySQL的WHERE子句的字符串比较是不区分大小写的。 你可以使用 BINARY 关键字来设定WHERE子句的字符串比较是区分大小写的。

 如下实例

 
```

root@host# mysql -u root -p password;
Enter password:*******
mysql> use TUTORIALS;
Database changed
mysql> SELECT * from tutorials_tbl \
          WHERE BINARY tutorial_author='sanjay';
Empty set (0.02 sec)

mysql>

```
 

#### 使用PHP脚本读取数据

 你可以使用PHP函数的mysql_query()及相同的SQL SELECT 带上 WHERE 子句的命令来获取数据。 


 该函数用于执行SQL命令，然后通过 PHP 函数 mysql_fetch_array() 来输出所有查询的数据。 

 
#### 实例

 以下实例将从 tutorials_tbl 表中返回使用 tutorial_author 字段值为 Sanjay 的记录： 

 
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
        FROM tutorials_tbl
        WHERE tutorial_author="Sanjay"';

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
 

