 SQL GROUP BY 语句 
Aggregate 函数常常需要添加 GROUP BY 语句。

 

#### GROUP BY 语句

 GROUP BY 语句用于结合 Aggregate 函数，根据一个或多个列对结果集进行分组。

 
#### SQL GROUP BY 语法

 
```
 SELECT column_name, aggregate_function(column_name)

 FROM table_name

 WHERE column_name operator value

 GROUP BY column_name; 




```
 



#### 演示数据库

 在本教程中，我们将使用众所周知的 Northwind 样本数据库。

 下面是选自 "Orders" 表的数据：

 

|OrderID|CustomerID|EmployeeID|OrderDate|ShipperID|
|:--|:--|:--|:--|:--|
|10248|90|5|1996-07-04|3|
|10249|81|6|1996-07-05|1|
|10250|34|4|1996-07-08|2|

选自 "Shippers" 表的数据：

 

|ShipperID|ShipperName|Phone|
|:--|:--|:--|
|1|Speedy Express|(503) 555-9831|
|2|United Package|(503) 555-3199|
|3|Federal Shipping|(503) 555-9931|

选自 "Employees" 表的数据：

 

|EmployeeID|LastName|FirstName|BirthDate|Photo|Notes|
|:--|:--|:--|:--|:--|:--|
|1|Davolio|Nancy|1968-12-08|EmpID1.pic|Education includes a BA....|
|2|Fuller|Andrew|1952-02-19|EmpID2.pic|Andrew received his BTS....|
|3|Leverling|Janet|1963-08-30|EmpID3.pic|Janet has a BS degree....|





#### SQL GROUP BY 实例

 现在我们想要查找每个送货员配送的订单数目。

 下面的 SQL 语句按送货员进行订单分类统计：

  
#### 实例

 
```
 SELECT Shippers.ShipperName,COUNT(Orders.OrderID) AS NumberOfOrders FROM Orders

LEFT JOIN Shippers

ON Orders.ShipperID=Shippers.ShipperID

 GROUP BY ShipperName; 


```
 

 



#### GROUP BY 一个以上的列

 我们也可以对一个以上的列应用 GROUP BY 语句，如下所示：

  
#### 实例

 
```
 SELECT Shippers.ShipperName, Employees.LastName,

 COUNT(Orders.OrderID) AS NumberOfOrders

 FROM ((Orders

INNER JOIN Shippers

ON Orders.ShipperID=Shippers.ShipperID)

INNER JOIN Employees

ON Orders.EmployeeID=Employees.EmployeeID)

GROUP BY ShipperName,LastName; 


```
 

 

