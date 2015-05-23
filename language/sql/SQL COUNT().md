 SQL COUNT() 函数 
COUNT() 函数返回匹配指定条件的行数。

 

#### SQL COUNT(column_name) 语法

 COUNT(column_name) 函数返回指定列的值的数目（NULL 不计入）：

 
```
 SELECT COUNT(column_name) FROM table_name;




```
 
#### SQL COUNT(*) 语法

 COUNT(*) 函数返回表中的记录数：

 
```
 SELECT COUNT(*) FROM table_name;




```
 
#### SQL COUNT(DISTINCT column_name) 语法

 COUNT(DISTINCT column_name) 函数返回指定列的不同值的数目：

 
```
 SELECT COUNT(DISTINCT column_name) FROM table_name;




```
 注释：COUNT(DISTINCT) 适用于 ORACLE 和 Microsoft SQL Server，但是无法用于 Microsoft Access。

 

#### 演示数据库

 在本教程中，我们将使用众所周知的 Northwind 样本数据库。

 下面是选自 "Orders" 表的数据：

 

|OrderID|CustomerID|EmployeeID|OrderDate|ShipperID|
|:--|:--|:--|:--|:--|
|10265|7|2|1996-07-25|1|
|10266|87|3|1996-07-26|3|
|10267|25|4|1996-07-29|1|





#### SQL COUNT(column_name) 实例

 下面的 SQL 语句计算 "Orders" 表中 "CustomerID"=7 的订单数：

  
#### 实例

 
```
 SELECT COUNT(CustomerID) AS OrdersFromCustomerID7 FROM Orders

WHERE CustomerID=7; 


```
 

 



#### SQL COUNT(*) 实例

 下面的 SQL 语句计算 "Orders" 表中的订单总数：

  
#### 实例

 
```
 SELECT COUNT(*) AS NumberOfOrders FROM Orders; 


```
 

 

#### SQL COUNT(DISTINCT column_name) 实例

 下面的 SQL 语句计算 "Orders" 表中不同客户的数目：

  
#### 实例

 
```
 SELECT COUNT(DISTINCT CustomerID) AS NumberOfCustomers FROM Orders; 


```
 

 






