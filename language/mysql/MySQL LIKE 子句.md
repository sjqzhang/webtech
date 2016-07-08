 
#### MySQL LIKE 子句

  我们知道在MySQL中使用 SQL SELECT 命令来读取数据， 同时我们可以在 SELECT 语句中使用 WHERE 子句来获取指定的记录。

  WHERE 子句中可以使用等号 (=) 来设定获取数据的条件，如 "tutorial_author = 'Sanjay'"。

  但是有时候我们需要获取 tutorial_author 字段含有 "jay" 字符的所有记录，这时我们就需要在 WHERE 子句中使用 SQL LIKE 子句。 

  SQL LIKE 子句中使用百分号(%)字符来表示任意字符，类似于UNIX或正则表达式中的星号 (*)。

  如果没有使用百分号(%), LIKE 子句与等号（=）的效果是一样的。 

 
#### 语法

 以下是SQL SELECT 语句使用 LIKE 子句从数据表中读取数据的通用语法：

 
```

SELECT field1, field2,...fieldN table_name1, table_name2...
WHERE field1 LIKE condition1 [AND [OR]] filed2 = 'somevalue'

```
 
 你可以在WHERE子句中指定任何条件。

 你可以在WHERE子句中使用LIKE子句。

 你可以使用LIKE子句代替等号(=)。

 LIKE 通常与 % 一同使用，类似于一个元字符的搜索。

 你可以使用AND或者OR指定一个或多个条件。

 你可以在 DELETE 或 UPDATE 命令中使用 WHERE...LIKE 子句来指定条件。




#### 在命令提示符中使用 LIKE 子句

 以下我们将在 SQL SELECT 命令中使用 WHERE...LIKE 子句来从MySQL数据表 tutorials_tbl 中读取数据。

 
#### 实例

 以下是我们将tutorials_tbl表中获取tutorial_author字段中以"jay"为结尾的的所有记录：

 
```

root@host# mysql -u root -p password;
Enter password:*******
mysql> use TUTORIALS;
Database changed
mysql> SELECT * from tutorials_tbl 
    -> WHERE tutorial_author LIKE '%jay';
+-------------+----------------+-----------------+-----------------+
| tutorial_id | tutorial_title | tutorial_author | submission_date |
+-------------+----------------+-----------------+-----------------+
|           3 | JAVA Tutorial  | Sanjay          | 2007-05-21      |
+-------------+----------------+-----------------+-----------------+
1 rows in set (0.01 sec)

mysql>

```
 

#### 在PHP脚本中使用 LIKE 子句

 你可以使用PHP函数的mysql_query()及相同的SQL SELECT 带上 WHERE...LIKE 子句的命令来获取数据。 

  该函数用于执行SQL命令，然后通过 PHP 函数 mysql_fetch_array() 来输出所有查询的数据。 

  但是如果是DELETE或者UPDATE中使用 WHERE...LIKE 子句的SQL语句，则无需使用mysql_fetch_array() 函数。 

 
#### 实例

  以下是我们使用PHP脚本在tutorials_tbl表中读取tutorial_author字段中以"jay"为结尾的的所有记录：

 
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
        WHERE tutorial_author LIKE "%jay%"';

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
 

