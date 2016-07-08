 SQL SUM() Function 

#### SUM() 函数

 SUM() 函数返回数值列的总数。

 
#### SQL SUM() 语法

 
```
 SELECT SUM(column_name) FROM table_name;




```
 



#### 演示数据库

 在本教程中，我们将使用众所周知的 Northwind 样本数据库。

 下面是选自 "OrderDetails" 表的数据：

 

|OrderDetailID|OrderID|ProductID|Quantity|
|:--|:--|:--|:--|
|1|10248|11|12|
|2|10248|42|10|
|3|10248|72|5|
|4|10249|14|9|
|5|10249|51|40|





#### SQL SUM() 实例

 下面的 SQL 语句查找 "OrderDetails" 表的 "Quantity" 字段的总数：

  
#### 实例

 
```
 SELECT SUM(Quantity) AS TotalItemsOrdered FROM OrderDetails; 


```
 

 

