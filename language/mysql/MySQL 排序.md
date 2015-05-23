 
#### MySQL 排序

  我们知道从MySQL表中使用SQL SELECT 语句来读取数据。

  如果我们需要对读取的数据进行排序，我们就可以使用MySQL的 ORDER BY 子句来设定你想按哪个字段哪中方式来进行排序，再返回搜索结果。 

 
#### 语法

  以下是SQL SELECT 语句使用 ORDER BY 子句将查询数据排序后再返回数据： 

 
```

SELECT field1, field2,...fieldN table_name1, table_name2...
ORDER BY field1, [field2...] [ASC [DESC]]

```
 
你可以使用任何字段来作为排序的条件，从而返回排序后的查询结果。
 你可以设定多个字段来排序。
 你可以使用 ASC 或 DESC 关键字来设置查询结果是按升序或降序排列。 默认情况下，它是按升排列。
 你可以添加 WHERE...LIKE 子句来设置条件。
 


#### 在命令提示符中使用 ORDER BY 子句

 以下将在 SQL SELECT 语句中使用 ORDER BY 子句来读取MySQL 数据表 tutorials_tbl 中的数据：

 
#### 实例

  尝试以下实例，结果将按升序排列

 
```

root@host# mysql -u root -p password;
Enter password:*******
mysql> use TUTORIALS;
Database changed
mysql> SELECT * from tutorials_tbl ORDER BY tutorial_author ASC
+-------------+----------------+-----------------+-----------------+
| tutorial_id | tutorial_title | tutorial_author | submission_date |
+-------------+----------------+-----------------+-----------------+
|           2 | Learn MySQL    | Abdul S         | 2007-05-24      |
|           1 | Learn PHP      | John Poul       | 2007-05-24      |
|           3 | JAVA Tutorial  | Sanjay          | 2007-05-06      |
+-------------+----------------+-----------------+-----------------+
3 rows in set (0.42 sec)

mysql>

```
 读取 tutorials_tbl 表中所有数据并按 tutorial_author 字段的升序排列。

 

#### 在PHP脚本中使用 ORDER BY 子句

 你可以使用PHP函数的mysql_query()及相同的SQL SELECT 带上 ORDER BY 子句的命令来获取数据。 该函数用于执行SQL命令，然后通过 PHP 函数 mysql_fetch_array() 来输出所有查询的数据。 
#### 实例

 尝试以下实例，查询后的数据按 tutorial_author 字段的降序排列后返回。

 
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
        ORDER BY  tutorial_author DESC';

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
 

