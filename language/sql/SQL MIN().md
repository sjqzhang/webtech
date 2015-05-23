 SQL MIN() Function 

#### MIN() 函数

 MIN() 函数返回指定列的最小值。

 
#### SQL MIN() 语法

 
```
 SELECT MIN(column_name) FROM table_name;




```
 



#### 演示数据库

 在本教程中，我们将使用众所周知的 Northwind 样本数据库。

 下面是选自 "Products" 表的数据：

 

|ProductID|ProductName|SupplierID|CategoryID|Unit|Price|
|:--|:--|:--|:--|:--|:--|
|1|Chais|1|1|10 boxes x 20 bags|18|
|2|Chang|1|1|24 - 12 oz bottles|19|
|3|Aniseed Syrup|1|2|12 - 550 ml bottles|10|
|4|Chef Anton's Cajun Seasoning|2|2|48 - 6 oz jars|21.35|
|5|Chef Anton's Gumbo Mix|2|2|36 boxes|25|





#### SQL MIN() 实例

 下面的 SQL 语句从 "Products" 表的 "Price" 列获取最小值：

  
#### 实例

 
```
 SELECT MIN(Price) AS SmallestOrderPrice FROM Products; 


```
 

 




