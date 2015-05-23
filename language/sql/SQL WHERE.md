 SQL WHERE 子句 
WHERE 子句用于过滤记录。

 

#### SQL WHERE 子句

 WHERE 子句用于提取那些满足指定标准的记录。

 
#### SQL WHERE 语法

 
```
 SELECT column_name,column_name

 FROM table_name

 WHERE column_name operator value;




```
 



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





#### WHERE 子句实例

 下面的 SQL 语句从 "Customers" 表中选取国家为 "Mexico" 的所有客户：

  
#### 实例

 
```
 SELECT * FROM Customers

 WHERE Country='Mexico';


```
 

 



#### 文本字段 vs. 数值字段

 SQL 使用单引号来环绕文本值（大部分数据库系统也接受双引号）。

 如果是数值字段，请不要使用引号。

  
#### 实例

 
```
 SELECT * FROM Customers

 WHERE CustomerID=1;


```
 

 



#### WHERE 子句中的运算符

 下面的运算符可以在 WHERE 子句中使用：

 

|运算符|描述|
|:--|:--|
|=|等于|
|<>|不等于。注释：在 SQL 的一些版本中，该操作符可被写成 !=|
|>|大于|
|<|小于|
|>=|大于等于|
|<=|小于等于|
|BETWEEN|在某个范围内|
|LIKE|搜索某种模式|
|IN|指定针对某个列的多个可能值|



