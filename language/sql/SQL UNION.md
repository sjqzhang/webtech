 SQL UNION 操作符 
SQL UNION 操作符合并两个或多个 SELECT 语句的结果。

 

#### SQL UNION 操作符

 UNION 操作符用于合并两个或多个 SELECT 语句的结果集。

 请注意，UNION 内部的每个 SELECT 语句必须拥有相同数量的列。列也必须拥有相似的数据类型。同时，每个 SELECT 语句中的列的顺序必须相同。

 
#### SQL UNION 语法

 
```
 SELECT column_name(s) FROM table1

 UNION

 SELECT column_name(s) FROM table2;




```
 注释：默认地，UNION 操作符选取不同的值。如果允许重复的值，请使用 UNION ALL。

 
#### SQL UNION ALL 语法

 
```
 SELECT column_name(s) FROM table1

 UNION ALL

 SELECT column_name(s) FROM table2;




```
 注释：UNION 结果集中的列名总是等于 UNION 中第一个 SELECT 语句中的列名。

 

#### 演示数据库

 在本教程中，我们将使用众所周知的 Northwind 样本数据库。

 下面是选自 "Customers" 表的数据：

 

|CustomerID|CustomerName|ContactName|Address|City|PostalCode|Country|
|:--|:--|:--|:--|:--|:--|:--|
|1|Alfreds Futterkiste|Maria Anders|Obere Str. 57|Berlin|12209|Germany|
|2|Ana Trujillo Emparedados y helados|Ana Trujillo|Avda. de la Constitución 2222|México D.F.|05021|Mexico|
|3|Antonio Moreno Taquería|Antonio Moreno|Mataderos 2312|México D.F.|05023|Mexico|

选自 "Suppliers" 表的数据：

 

|SupplierID|SupplierName|ContactName|Address|City|PostalCode|Country|
|:--|:--|:--|:--|:--|:--|:--|
|1|Exotic Liquid|Charlotte Cooper|49 Gilbert St.|Londona|EC1 4SD|UK|
|2|New Orleans Cajun Delights|Shelley Burke|P.O. Box 78934|New Orleans|70117|USA|
|3|Grandma Kelly's Homestead|Regina Murphy|707 Oxford Rd.|Ann Arbor|48104|USA|





#### SQL UNION 实例

 下面的 SQL 语句从 "Customers" 和 "Suppliers" 表中选取所有

#### 不同的

城市（只有不同的值）：

  
#### 实例

 
```
 SELECT City FROM Customers

UNION

SELECT City FROM Suppliers

ORDER BY City; 


```
 

 注释：UNION 不能用于列出两个表中所有的城市。如果一些客户和供应商来自同一个城市，每个城市只会列出一次。UNION 只会选取不同的值。请使用 UNION ALL 来选取重复的值！

 

#### SQL UNION ALL 实例

 下面的 SQL 语句使用 UNION ALL 从 "Customers" 和 "Suppliers" 表中选取

#### 所有的

城市（也有重复的值）：

  
#### 实例

 
```
 SELECT City FROM Customers

UNION ALL

SELECT City FROM Suppliers

 ORDER BY City; 


```
 

 



#### 带有 WHERE 的 SQL UNION ALL

 下面的 SQL 语句使用 UNION ALL 从 "Customers" 和 "Suppliers" 表中选取

#### 所有的

德国城市（也有重复的值）：

  
#### 实例

 
```
 SELECT City, Country FROM Customers

WHERE Country='Germany'

UNION ALL

 SELECT City, Country FROM Suppliers

WHERE Country='Germany'

ORDER BY City; 


```
 

 

