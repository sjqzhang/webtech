 SQL BETWEEN 操作符 
BETWEEN 操作符用于选取介于两个值之间的数据范围内的值。

 

#### SQL BETWEEN 操作符

 BETWEEN 操作符选取介于两个值之间的数据范围内的值。这些值可以是数值、文本或者日期。

 
#### SQL BETWEEN 语法

 
```
 SELECT column_name(s)

 FROM table_name

 WHERE column_name BETWEEN value1 AND value2; 




```
 



#### 演示数据库

 在本教程中，我们将使用众所周知的 Northwind 样本数据库。

 下面是选自 "Products" 表的数据：

 

|ProductID|ProductName|SupplierID|CategoryID|Unit|Price|
|:--|:--|:--|:--|:--|:--|
|1|Chais|1|1|10 boxes x 20 bags|18|
|2|Chang|1|1|24 - 12 oz bottles|19|
|3|Aniseed Syrup|1|2|12 - 550 ml bottles|10|
|4|Chef Anton's Cajun Seasoning|1|2|48 - 6 oz jars|22|
|5|Chef Anton's Gumbo Mix|1|2|36 boxes|21.35|





#### BETWEEN 操作符实例

 下面的 SQL 语句选取价格介于 10 和 20 之间的所有产品：

  
#### 实例

 
```
 SELECT * FROM Products

WHERE Price BETWEEN 10 AND 20; 


```
 

 



#### NOT BETWEEN 操作符实例

 如需显示不在上面实例范围内的产品，请使用 NOT BETWEEN：

  
#### 实例

 
```
 SELECT * FROM Products

WHERE Price NOT BETWEEN 10 AND 20; 


```
 

 



#### 带有 IN 的 BETWEEN 操作符实例

 下面的 SQL 语句选取价格介于 10 和 20 之间但 CategoryID 不为 1、2 或 3 的所有产品：

  
#### 实例

 
```
 SELECT * FROM Products

WHERE (Price BETWEEN 10 AND 20)

AND NOT CategoryID IN (1,2,3); 


```
 

 



#### 带有文本值的 BETWEEN 操作符实例

 下面的 SQL 语句选取 ProductName 以介于 'C' 和 'M' 之间字母开始的所有产品：

  
#### 实例

 
```
 SELECT * FROM Products

WHERE ProductName BETWEEN 'C' AND 'M'; 


```
 

 



#### 带有文本值的 NOT BETWEEN 操作符实例

 下面的 SQL 语句选取 ProductName 不以介于 'C' 和 'M' 之间字母开始的所有产品：

  
#### 实例

 
```
 SELECT * FROM Products

WHERE ProductName NOT BETWEEN 'C' AND 'M'; 


```
 

 



#### 示例表

 下面是选自 "Orders" 表的数据：

 

|OrderID|CustomerID|EmployeeID|OrderDate|ShipperID|
|:--|:--|:--|:--|:--|
|10248|90|5|7/4/1996|3|
|10249|81|6|7/5/1996|1|
|10250|34|4|7/8/1996|2|
|10251|84|3|7/9/1996|1|
|10252|76|4|7/10/1996|2|





#### 带有日期值的 BETWEEN 操作符实例

 下面的 SQL 语句选取 OrderDate 介于 '04-July-1996' 和 '09-July-1996' 之间的所有订单：

  
#### 实例

 
```
 SELECT * FROM Orders

WHERE OrderDate BETWEEN #07/04/1996# AND #07/09/1996#; 


```
 

 



|  请注意，在不同的数据库中，BETWEEN 操作符会产生不同的结果！在某些数据库中，BETWEEN 选取介于两个值之间但不包括两个测试值的字段。在某些数据库中，BETWEEN 选取介于两个值之间且包括两个测试值的字段。在某些数据库中，BETWEEN 选取介于两个值之间且包括第一个测试值但不包括最后一个测试值的字段。 因此，请检查您的数据库是如何处理 BETWEEN 操作符！ |



