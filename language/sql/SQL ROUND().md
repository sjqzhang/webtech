 SQL ROUND() 函数 

#### ROUND() 函数

 ROUND() 函数用于把数值字段舍入为指定的小数位数。

 
#### SQL ROUND() 语法

 
```
 SELECT ROUND(column_name,decimals) FROM table_name;




```
 



|参数|描述|
|:--|:--|
|column_name|必需。要舍入的字段。|
|decimals|必需。规定要返回的小数位数。|





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





#### SQL ROUND() 实例

 下面的 SQL 语句从 "Products" 表中选取产品名称和价格舍入为最接近的整数：。提取前 4 个字符：

  
#### 实例

 
```
 SELECT ProductName, ROUND(Price,0) AS RoundedPrice

FROM Products; 


```
 

 




