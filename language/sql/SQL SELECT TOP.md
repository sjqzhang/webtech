 SQL SELECT TOP 子句 

#### SQL SELECT TOP 子句

 SELECT TOP 子句用于规定要返回的记录的数目。

 SELECT TOP 子句对于拥有数千条记录的大型表来说，是非常有用的。

 注释：并非所有的数据库系统都支持 SELECT TOP 子句。

 
#### SQL Server / MS Access 语法

 
```
 SELECT TOP number|percent column_name(s)

 FROM table_name;




```
 



#### MySQL 和 Oracle 中的 SQL SELECT TOP 是等价的

 
#### MySQL 语法

 
```
 SELECT column_name(s)

 FROM table_name

 LIMIT number;




```
 
#### 实例

 
```
 SELECT *

 FROM Persons

 LIMIT 5;




```
 
#### Oracle 语法

 
```
 SELECT column_name(s)

 FROM table_name

 WHERE ROWNUM <= number;




```
 
#### 实例

 
```
 SELECT *

 FROM Persons

 WHERE ROWNUM <=5;




```
 



#### 演示数据库

 在本教程中，我们将使用众所周知的 Northwind 样本数据库。

 下面是选自 "Customers" 表的数据：

 

|CustomerID|CustomerName|ContactName|Address|City|PostalCode|Country|
|:--|:--|:--|:--|:--|:--|:--|
|1|Alfreds Futterkiste|Maria Anders|Obere Str. 57|Berlin|12209|Germany|
|2|Ana Trujillo Emparedados y helados|Ana Trujillo|Avda. de la Constitución 2222|México D.F.|05021|Mexico|
|3|Antonio Moreno Taquería|Antonio Moreno|Mataderos 2312|México D.F.|05023|Mexico|
|4|Around the Horn|Thomas Hardy|120 Hanover Sq.|London|WA1 1DP|UK|
|5|Berglunds snabbköp|Christina Berglund|Berguvsvägen 8|Luleå|S-958 22|Sweden|





#### SQL SELECT TOP 实例

 下面的 SQL 语句从 "Customers" 表中选取头两条记录：

  
#### 实例

 
```
 SELECT TOP 2 * FROM Customers; 


```
 

 



#### SQL SELECT TOP PERCENT 实例

 下面的 SQL 语句从 "Customers" 表中选取前面 50% 的记录：

  
#### 实例

 
```
 SELECT TOP 50 PERCENT * FROM Customers; 


```
 

 

