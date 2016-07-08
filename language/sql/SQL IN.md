 SQL IN 操作符 

#### IN 操作符

 IN 操作符允许您在 WHERE 子句中规定多个值。

 
#### SQL IN 语法

 
```
 SELECT column_name(s)

 FROM table_name

 WHERE column_name IN (value1,value2,...);




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





#### IN 操作符实例

 下面的 SQL 语句选取 City 为 "Paris" 或 "London" 的所有客户：

  
#### 实例

 
```
 SELECT * FROM Customers

 WHERE City IN ('Paris','London'); 


```
 

 

