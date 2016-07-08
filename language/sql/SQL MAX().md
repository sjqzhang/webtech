 SQL MAX() 函数 

#### MAX() 函数

 MAX() 函数返回指定列的最大值。

 
#### SQL MAX() 语法

 
```
 SELECT MAX(column_name) FROM table_name;




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





#### SQL MAX() 实例

 下面的 SQL 语句从 "Products" 表的 "Price" 列获取最大值：

  
#### 实例

 
```
 SELECT MAX(Price) AS HighestPrice FROM Products; 


```
 

 

