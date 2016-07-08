 
#### MySQL 复制表

 如果我们需要完全的复制MySQL的数据表，包括表的结构，索引，默认值等。 如果仅仅使用

#### CREATE TABLE ... SELECT 

命令，是无法实现的。

 本章节将为大家介绍如何完整的复制MySQL数据表，步骤如下：

 
使用 

#### SHOW CREATE TABLE

 命令获取创建数据表(

#### CREATE TABLE

) 语句，该语句包含了原数据表的结构，索引等。
  

复制以下命令显示的SQL语句，修改数据表名，并执行SQL语句，通过以上命令 将完全的复制数据表结构。
 如果你想复制表的内容，你就可以使用

####  INSERT INTO ... SELECT 

 语句来实现。
 

#### 实例

 尝试以下实例来复制表 tutorials_tbl 。

 

#### 步骤一：



 获取数据表的完整结构。

 
```

mysql> SHOW CREATE TABLE tutorials_tbl \G;
*************************** 1. row ***************************
       Table: tutorials_tbl
Create Table: CREATE TABLE `tutorials_tbl` (
  `tutorial_id` int(11) NOT NULL auto_increment,
  `tutorial_title` varchar(100) NOT NULL default '',
  `tutorial_author` varchar(40) NOT NULL default '',
  `submission_date` date default NULL,
  PRIMARY KEY  (`tutorial_id`),
  UNIQUE KEY `AUTHOR_INDEX` (`tutorial_author`)
) TYPE=MyISAM
1 row in set (0.00 sec)

ERROR:
No query specified

```
 

#### 步骤二：



 修改SQL语句的数据表名，并执行SQL语句。

 
```

mysql> CREATE TABLE `clone_tbl` (
  -> `tutorial_id` int(11) NOT NULL auto_increment,
  -> `tutorial_title` varchar(100) NOT NULL default '',
  -> `tutorial_author` varchar(40) NOT NULL default '',
  -> `submission_date` date default NULL,
  -> PRIMARY KEY  (`tutorial_id`),
  -> UNIQUE KEY `AUTHOR_INDEX` (`tutorial_author`)
-> ) TYPE=MyISAM;
Query OK, 0 rows affected (1.80 sec)

```
 

#### 步骤三：



 执行完第二步骤后，你将在数据库中创建新的克隆表 clone_tbl。 如果你想拷贝数据表的数据你可以使用

####  INSERT INTO... SELECT 

 语句来实现。

 
```

mysql> INSERT INTO clone_tbl (tutorial_id,
    ->                        tutorial_title,
    ->                        tutorial_author,
    ->                        submission_date)
    -> SELECT tutorial_id,tutorial_title,
    ->        tutorial_author,submission_date,
    -> FROM tutorials_tbl;
Query OK, 3 rows affected (0.07 sec)
Records: 3  Duplicates: 0  Warnings: 0

```
 执行以上步骤后，你将完整的复制表，包括表结构及表数据。

 

