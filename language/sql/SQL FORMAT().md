 SQL FORMAT() 函数 

#### FORMAT() 函数

 FORMAT() 函数用于对字段的显示进行格式化。

 
#### SQL FORMAT() 语法

 
```
 SELECT FORMAT(column_name,format) FROM table_name;




```
 



|参数|描述|
|:--|:--|
|column_name|必需。要格式化的字段。|
|format|必需。规定格式。|





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





#### SQL FORMAT() 实例

 下面的 SQL 语句从 "Products" 表中选取产品名称以及当天（格式化为 YYYY-MM-DD）的价格：

  
#### 实例

 
```
 SELECT ProductName, Price, FORMAT(Now(),'YYYY-MM-DD') AS PerDate

FROM Products; 


```
 

 

