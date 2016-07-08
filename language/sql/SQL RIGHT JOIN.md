 SQL RIGHT JOIN 关键字 

#### SQL RIGHT JOIN 关键字

 RIGHT JOIN 关键字从右表（table2）返回所有的行，即使左表（table1）中没有匹配。如果左表中没有匹配，则结果为 NULL。

 
#### SQL RIGHT JOIN 语法

 
```
 SELECT column_name(s)

 FROM table1

 RIGHT JOIN table2

 ON table1.column_name=table2.column_name;




```
 或：

 
```
 SELECT column_name(s)

 FROM table1

 RIGHT OUTER JOIN table2

 ON table1.column_name=table2.column_name;




```
 注释：在某些数据库中，RIGHT JOIN 称为 RIGHT OUTER JOIN。

 ![http://www.w3cschool.cc/wp-content/uploads/2013/09/img_rightjoin.gif](http://www.w3cschool.cc/wp-content/uploads/2013/09/img_rightjoin.gif)

 

#### 演示数据库

 在本教程中，我们将使用众所周知的 Northwind 样本数据库。

 下面是选自 "Orders" 表的数据：

 

|OrderID|CustomerID|EmployeeID|OrderDate|ShipperID|
|:--|:--|:--|:--|:--|
|10308|2|7|1996-09-18|3|
|10309|37|3|1996-09-19|1|
|10310|77|8|1996-09-20|2|

选自 "Employees" 表的数据：

 

|EmployeeID|LastName|FirstName|BirthDate|Photo|Notes|
|:--|:--|:--|:--|:--|:--|
|1|Davolio|Nancy|12/8/1968|EmpID1.pic|Education includes a BA in psychology.....|
|2|Fuller|Andrew|2/19/1952|EmpID2.pic|Andrew received his BTS commercial and....|
|3|Leverling|Janet|8/30/1963|EmpID3.pic|Janet has a BS degree in chemistry....|





#### SQL RIGHT JOIN 实例

 下面的 SQL 语句将返回所有员工及他们处理的订单：

  
#### 实例

 
```
 SELECT Orders.OrderID, Employees.FirstName

FROM Orders

RIGHT JOIN Employees

ON Orders.EmployeeID=Employees.EmployeeID

ORDER BY Orders.OrderID;


```
 

 

#### 注释：

RIGHT JOIN 关键字从右表（Employees）返回所有的行，即使左表（Orders）中没有匹配。

 




