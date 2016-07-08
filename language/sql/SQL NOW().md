 SQL NOW() 函数 

#### NOW() 函数

 NOW() 函数返回当前系统的日期和时间。

 
#### SQL NOW() 语法

 
```
 SELECT NOW() FROM table_name;




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





#### SQL NOW() 实例

 下面的 SQL 语句从 "Products" 表中选取产品名称以及当天的价格：

  
#### 实例

 
```
 SELECT ProductName, Price, Now() AS PerDate

FROM Products; 


```
 

 




