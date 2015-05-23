 SQL FIRST() 函数 

#### FIRST() 函数

 FIRST() 函数返回指定的列中第一个记录的值。

 
#### SQL FIRST() 语法

 
```
 SELECT FIRST(column_name) FROM table_name;




```
 注释：只有 MS Access 支持 FIRST() 函数。

 

#### SQL Server、MySQL 和 Oracle 中的 SQL FIRST() 工作区

 
#### SQL Server 语法

 
```
 SELECT TOP 1 column_name FROM table_name

ORDER BY column_name ASC;




```
 
#### 实例

 
```
 SELECT TOP 1 CustomerName FROM Customers

ORDER BY CustomerID ASC;




```
 
#### MySQL 语法

 
```
 SELECT column_name FROM table_name

 ORDER BY column_name ASC

LIMIT 1;




```
 
#### 实例

 
```
 SELECT CustomerName FROM Customers

ORDER BY CustomerID ASC

LIMIT 1;




```
 
#### Oracle 语法

 
```
 SELECT column_name FROM table_name

ORDER BY  column_name ASC

WHERE ROWNUM <=1;




```
 
#### 实例

 
```
 SELECT CustomerName FROM Customers

ORDER BY CustomerID ASC

WHERE ROWNUM <=1;




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





#### SQL FIRST() 实例

 下面的 SQL 语句选取 "Customers" 表的 "CustomerName" 列中第一个记录的值：

  
#### 实例

 
```
 SELECT FIRST(CustomerName) AS FirstCustomer FROM Customers; 


```
 

 

