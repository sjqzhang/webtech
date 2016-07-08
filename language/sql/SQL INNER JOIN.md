 SQL INNER JOIN 关键字 

#### SQL INNER JOIN 关键字

 INNER JOIN 关键字在表中存在至少一个匹配时返回行。

 
#### SQL INNER JOIN 语法

 
```
 SELECT column_name(s)

 FROM table1

 INNER JOIN table2

 ON table1.column_name=table2.column_name;




```
 或：

 
```
 SELECT column_name(s)

 FROM table1

 JOIN table2

 ON table1.column_name=table2.column_name;




```
 注释：INNER JOIN 与 JOIN 是相同的。

 ![http://www.w3cschool.cc/wp-content/uploads/2013/09/img_innerjoin.gif](http://www.w3cschool.cc/wp-content/uploads/2013/09/img_innerjoin.gif)

 

#### 演示数据库

 在本教程中，我们将使用众所周知的 Northwind 样本数据库。

 下面是选自 "Customers" 表的数据：

 

|CustomerID|CustomerName|ContactName|Address|City|PostalCode|Country|
|:--|:--|:--|:--|:--|:--|:--|
|1|Alfreds Futterkiste|Maria Anders|Obere Str. 57|Berlin|12209|Germany|
|2|Ana Trujillo Emparedados y helados|Ana Trujillo|Avda. de la Constitución 2222|México D.F.|05021|Mexico|
|3|Antonio Moreno Taquería|Antonio Moreno|Mataderos 2312|México D.F.|05023|Mexico|

选自 "Orders" 表的数据：

 

|OrderID|CustomerID|EmployeeID|OrderDate|ShipperID|
|:--|:--|:--|:--|:--|
|10308|2|7|1996-09-18|3|
|10309|37|3|1996-09-19|1|
|10310|77|8|1996-09-20|2|





#### SQL INNER JOIN 实例

 下面的 SQL 语句将返回有下订单的所有客户：

  
#### 实例

 
```
 SELECT Customers.CustomerName, Orders.OrderID

FROM Customers

INNER JOIN Orders

 ON Customers.CustomerID=Orders.CustomerID

ORDER BY Customers.CustomerName;


```
 

 

#### 注释：

INNER JOIN 关键字在表中存在至少一个匹配时返回行。如果 "Customers" 表中的行在 "Orders" 中没有匹配，则不会列出这些行。

 

