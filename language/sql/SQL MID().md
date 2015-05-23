 SQL MID() 函数 

#### MID() 函数

 MID() 函数用于从文本字段中提取字符。

 
#### SQL MID() 语法

 
```
 SELECT MID(column_name,start[,length]) FROM table_name;




```
 



|参数|描述|
|:--|:--|
|column_name|必需。要提取字符的字段。|
|start|必需。规定开始位置（起始值是 1）。|
|length|可选。要返回的字符数。如果省略，则 MID() 函数返回剩余文本。|





#### 演示数据库

 在本教程中，我们将使用众所周知的 Northwind 样本数据库。

 下面是选自 "Customers" 表的数据：

 

|CustomerID|CustomerName|ContactName|Address|City|PostalCode|Country|
|:--|:--|:--|:--|:--|:--|:--|
|1|Alfreds Futterkiste|Maria Anders|Obere Str. 57|Berlin|12209|Germany|
|2|Ana Trujillo Emparedados y helados|Ana Trujillo|Avda. de la Constitución 2222|México D.F.|05021|Mexico|
|3|Antonio Moreno Taquería|Antonio Moreno|Mataderos 2312|México D.F.|05023|Mexico|
|4|Around the Horn|Thomas Hardy|120 Hanover Sq.|London|WA1 1DP|UK|
|5|Berglunds snabbköp|Christina Berglund|Berguvsvägen 8|Luleå|S-958 22|Sweden|





#### SQL MID() 实例

 下面的 SQL 语句从 "Customers" 表的 "City" 列中提取前 4 个字符：

  
#### 实例

 
```
 SELECT MID(City,1,4) AS ShortCity

FROM Customers; 


```
 

 

