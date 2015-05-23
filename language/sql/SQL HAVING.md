 SQL HAVING 子句 

#### HAVING 子句

 在 SQL 中增加 HAVING 子句原因是，WHERE 关键字无法与 Aggregate 函数一起使用。

 
#### SQL HAVING 语法

 
```
 SELECT column_name, aggregate_function(column_name)

 FROM table_name

 WHERE column_name operator value

 GROUP BY column_name

 HAVING aggregate_function(column_name) operator value; 




```
 



#### 演示数据库

 在本教程中，我们将使用众所周知的 Northwind 样本数据库。

 下面是选自 "Orders" 表的数据：

 

|OrderID|CustomerID|EmployeeID|OrderDate|ShipperID|
|:--|:--|:--|:--|:--|
|10248|90|5|1996-07-04|3|
|10249|81|6|1996-07-05|1|
|10250|34|4|1996-07-08|2|

选自 "Employees" 表的数据：

 

|EmployeeID|LastName|FirstName|BirthDate|Photo|Notes|
|:--|:--|:--|:--|:--|:--|
|1|Davolio|Nancy|1968-12-08|EmpID1.pic|Education includes a BA....|
|2|Fuller|Andrew|1952-02-19|EmpID2.pic|Andrew received his BTS....|
|3|Leverling|Janet|1963-08-30|EmpID3.pic|Janet has a BS degree....|





#### SQL HAVING 实例

 现在我们想要查找订单总数少于 2000 的客户。

 我们使用下面的 SQL 语句：

 下面的 SQL 语句查找注册超过 10 个订单的员工：

  
#### 实例

 
```
 SELECT Employees.LastName, COUNT(Orders.OrderID) AS NumberOfOrders FROM (Orders

INNER JOIN Employees

ON Orders.EmployeeID=Employees.EmployeeID)

GROUP BY LastName

HAVING COUNT(Orders.OrderID) > 10; 


```
 

 现在我们想哟啊查找员工 "Davolio" 或 "Fuller" 是否拥有超过 25 个订单。

 我们在 SQL 语句中增加一个普通的 WHERE 子句：

  
#### 实例

 
```
 SELECT Employees.LastName, COUNT(Orders.OrderID) AS NumberOfOrders FROM Orders

INNER JOIN Employees

ON Orders.EmployeeID=Employees.EmployeeID

 WHERE LastName='Davolio' OR LastName='Fuller'

GROUP BY LastName

HAVING COUNT(Orders.OrderID) > 25; 


```
 

 

