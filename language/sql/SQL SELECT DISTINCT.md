 SQL SELECT DISTINCT 语句 
SELECT DISTINCT 语句用于返回唯一不同的值。

 

#### SQL SELECT DISTINCT 语句

 在表中，一个列可能会包含多个重复值，有时您也许希望仅仅列出不同（distinct）的值。

 DISTINCT 关键词用于返回唯一不同的值。

 
#### SQL SELECT DISTINCT 语法

 
```
 SELECT DISTINCT column_name,column_name

 FROM table_name;




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





#### SELECT DISTINCT 实例

 下面的 SQL 语句仅从 "Customers" 表的 "City" 列中选取唯一不同的值。从 Company" 列中仅选取唯一不同的值：

  
#### 实例

 
```
 SELECT DISTINCT City FROM Customers; 


```
 

 

