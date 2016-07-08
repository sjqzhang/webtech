 SQL 语法  

#### 数据库表

 一个数据库通常包含一个或多个表。每个表由一个名字标识（例如 "Customers" 或者 "Orders"）。表包含带有数据的记录（行）。

 在本教程中，我们将使用众所周知的 Northwind 样本数据库（包含在 MS Access 和 MS SQL Server）。

 下面是选自 "Customers" 表的数据：

 

|CustomerID|CustomerName|ContactName|Address|City|PostalCode|Country|
|:--|:--|:--|:--|:--|:--|:--|
|1|Alfreds Futterkiste|Maria Anders|Obere Str. 57|Berlin|12209|Germany|
|2|Ana Trujillo Emparedados y helados|Ana Trujillo|Avda. de la Constitución 2222|México D.F.|05021|Mexico|
|3|Antonio Moreno Taquería|Antonio Moreno|Mataderos 2312|México D.F.|05023|Mexico|
|4|Around the Horn|Thomas Hardy|120 Hanover Sq.|London|WA1 1DP|UK|
|5|Berglunds snabbköp|Christina Berglund|Berguvsvägen 8|Luleå|S-958 22|Sweden|

 上面的表包含五条记录（每一条对应一个客户）和七个列（CustomerID、CustomerName、ContactName、Address、City、PostalCode 和 Country）。

 

#### SQL 语句

 您需要在数据库上执行的大部分工作都由 SQL 语句完成。

 下面的 SQL 语句从 "Customers" 表中选取所有记录：

  
#### 实例

 
```
 SELECT * FROM Customers; 


```
 

 在本教程中，我们将为您讲解各种不同的 SQL 语句。

 

#### 请记住...

 
SQL 对大小写不敏感：SELECT 与 select 是相同的。
 


#### SQL 语句后面的分号？

 某些数据库系统要求在每条 SQL 语句的末端使用分号。

 分号是在数据库系统中分隔每条 SQL 语句的标准方法，这样就可以在对服务器的相同请求中执行一条以上的 SQL 语句。

 在本教程中，我们将在每条 SQL 语句的末端使用分号。

 

#### 一些最重要的 SQL 命令

 

SELECT - 从数据库中提取数据
 
UPDATE - 更新数据库中的数据
 
DELETE - 从数据库中删除数据
 
INSERT INTO - 向数据库中插入新数据
 
CREATE DATABASE - 创建新数据库
 
ALTER DATABASE - 修改数据库
 
CREATE TABLE - 创建新表
 
ALTER TABLE - 变更（改变）数据库表
 
DROP TABLE - 删除表
 
CREATE INDEX - 创建索引（搜索键）
 
DROP INDEX - 删除索引 
 


