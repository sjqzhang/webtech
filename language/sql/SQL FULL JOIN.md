 SQL FULL OUTER JOIN 关键字 

#### SQL FULL OUTER JOIN 关键字

 FULL OUTER JOIN 关键字只要左表（table1）和右表（table2）其中一个表中存在匹配，则返回行.

 FULL OUTER JOIN 关键字结合了 LEFT JOIN 和 RIGHT JOIN 的结果。

 
#### SQL FULL OUTER JOIN 语法

 
```
 SELECT column_name(s)

 FROM table1

 FULL OUTER JOIN table2

 ON table1.column_name=table2.column_name;




```
 ![http://www.w3cschool.cc/wp-content/uploads/2013/09/img_fulljoin.gif](http://www.w3cschool.cc/wp-content/uploads/2013/09/img_fulljoin.gif)

 

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





#### SQL FULL OUTER JOIN 实例

 下面的 SQL 语句选取所有的客户及所有的订单：

 
```
 SELECT Customers.CustomerName, Orders.OrderID

 FROM Customers

 FULL OUTER JOIN Orders

 ON Customers.CustomerID=Orders.CustomerID

 ORDER BY Customers.CustomerName; 




```
 选自结果集中的数据如下所示：

 

|CustomerName|OrderID|
|:--|:--|
|Alfreds Futterkiste| |
|Ana Trujillo Emparedados y helados |10308|
|Antonio Moreno Taquería |10365|
| |10382|
| |10351|



#### 注释：

FULL OUTER JOIN 关键字返回左表（Customers）和右表（Orders）中所有的行。如果 "Customers" 表中的行在 "Orders" 中没有匹配或者 "Orders" 表中的行在 "Customers" 表中没有匹配，也会列出这些行。

 

