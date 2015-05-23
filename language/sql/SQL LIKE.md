 SQL LIKE 操作符 
LIKE 操作符用于在 WHERE 子句中搜索列中的指定模式。

 

#### SQL LIKE 操作符

 LIKE 操作符用于在 WHERE 子句中搜索列中的指定模式。

 
#### SQL LIKE 语法

 
```
 SELECT column_name(s)

 FROM table_name

 WHERE column_name LIKE pattern;




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





#### SQL LIKE 操作符实例

 下面的 SQL 语句选取 City 以字母 "s" 开始的所有客户：

  
#### 实例

 
```
 SELECT * FROM Customers

 WHERE City LIKE 's%'; 


```
 

 

#### 提示：

"%" 符号用于在模式的前后定义通配符（缺省字母）。您将在下一章中学习更多有关通配符的知识。

 下面的 SQL 语句选取 City 以字母 "s" 结尾的所有客户：

  
#### 实例

 
```
 SELECT * FROM Customers

 WHERE City LIKE '%s'; 


```
 

 下面的 SQL 语句选取 Country 包含模式 "land" 的所有客户：

  
#### 实例

 
```
 SELECT * FROM Customers

 WHERE Country LIKE '%land%'; 


```
 

 通过使用 NOT 关键字，您可以选取不匹配模式的记录。

 下面的 SQL 语句选取 Country 不包含模式 "land" 的所有客户：

  
#### 实例

 
```
 SELECT * FROM Customers

 WHERE Country NOT LIKE '%land%'; 


```
 

 

