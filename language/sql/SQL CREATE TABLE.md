 SQL CREATE TABLE 语句 

#### SQL CREATE TABLE 语句

 CREATE TABLE 语句用于创建数据库中的表。

 表由行和列组成，每个表都必须有个表名。

 
#### SQL CREATE TABLE 语法

 
```
 CREATE TABLE table_name

 (

column_name1 data_type(size),

column_name2 data_type(size),

column_name3 data_type(size),

 ....

 );




```
 column_name 参数规定表中列的名称。

 data_type 参数规定列的数据类型（例如 varchar、integer、decimal、date 等等）。

 size 参数规定表中列的最大长度。

 

#### 提示：

如需了解 MS Access、MySQL 和 SQL Server 中可用的数据类型，请访问我们完整的 [数据类型参考手册](http://www.w3cschool.cc/sql/sql-datatypes.html)。

 

#### SQL CREATE TABLE 实例

 现在我们想要创建一个名为 "Persons" 的表，包含五列：PersonID、LastName、FirstName、Address 和 City。

 我们使用下面的 CREATE TABLE 语句：

  
#### 实例

 
```
 CREATE TABLE Persons

 (

 PersonID int,

 LastName varchar(255),

 FirstName varchar(255),

 Address varchar(255),

 City varchar(255)

 ); 


```
 

 PersonID 列的数据类型是 int，包含整数。

 LastName、FirstName、Address 和 City 列的数据类型是 varchar，包含字符，且这些字段的最大长度为 255 个字符。

 空的 "Persons" 表如下所示：

 

|PersonID|LastName|FirstName|Address|City|
|:--|:--|:--|:--|:--|
| | | | | |



#### 提示：

可使用 INSERT INTO 语句向空表写入数据。

 

