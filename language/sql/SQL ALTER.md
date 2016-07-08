 SQL ALTER TABLE 语句 

#### ALTER TABLE 语句

 ALTER TABLE 语句用于在已有的表中添加、删除或修改列。

 
#### SQL ALTER TABLE 语法

 如需在表中添加列，请使用下面的语法:

 
```
 ALTER TABLE table_name

 ADD column_name datatype




```
 如需删除表中的列，请使用下面的语法（请注意，某些数据库系统不允许这种在数据库表中删除列的方式）：

 
```
 ALTER TABLE table_name

 DROP COLUMN column_name




```
 要改变表中列的数据类型，请使用下面的语法：

 SQL Server / MS Access：

 
```
 ALTER TABLE table_name

 ALTER COLUMN column_name datatype




```
 My SQL / Oracle：

 
```
 ALTER TABLE table_name

 MODIFY COLUMN column_name datatype




```
 



#### SQL ALTER TABLE 实例

 请看 "Persons" 表：

 

|P_Id|LastName|FirstName|Address|City|
|:--|:--|:--|:--|:--|
|1|Hansen|Ola|Timoteivn 10|Sandnes|
|2|Svendson|Tove|Borgvn 23|Sandnes|
|3|Pettersen|Kari|Storgt 20|Stavanger|

现在，我们想在 "Persons" 表中添加一个名为 "DateOfBirth" 的列。

 我们使用下面的 SQL 语句：

 
```
 ALTER TABLE Persons

 ADD DateOfBirth date




```
 请注意，新列 "DateOfBirth" 的类型是 date，可以存放日期。数据类型规定列中可以存放的数据的类型。如需了解 MS Access、MySQL 和 SQL Server 中可用的数据类型，请访问我们完整的 [数据类型参考手册](http://www.w3cschool.cc/sql/sql-datatypes.html)。

 现在，"Persons" 表将如下所示：

 

|P_Id|LastName|FirstName|Address|City|DateOfBirth|
|:--|:--|:--|:--|:--|:--|
|1|Hansen|Ola|Timoteivn 10|Sandnes| |
|2|Svendson|Tove|Borgvn 23|Sandnes| |
|3|Pettersen|Kari|Storgt 20|Stavanger| |





#### 改变数据类型实例

 现在，我们想要改变 "Persons" 表中 "DateOfBirth" 列的数据类型。

 我们使用下面的 SQL 语句：

 
```
 ALTER TABLE Persons

 ALTER COLUMN DateOfBirth year




```
 请注意，现在 "DateOfBirth" 列的类型是 year，可以存放 2 位或 4 位格式的年份。

 

#### DROP COLUMN 实例

 接下来，我们想要删除 "Person" 表中的 "DateOfBirth" 列。

 我们使用下面的 SQL 语句：

 
```
 ALTER TABLE Persons

 DROP COLUMN DateOfBirth




```
 现在，"Persons" 表将如下所示：

 

|P_Id|LastName|FirstName|Address|City|
|:--|:--|:--|:--|:--|
|1|Hansen|Ola|Timoteivn 10|Sandnes|
|2|Svendson|Tove|Borgvn 23|Sandnes|
|3|Pettersen|Kari|Storgt 20|Stavanger|






