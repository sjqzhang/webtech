 SQL SELECT 语句 
SELECT 语句用于从数据库中选取数据。

 

#### SQL SELECT 语句

 SELECT 语句用于从数据库中选取数据。

 结果被存储在一个结果表中，称为结果集。

 
#### SQL SELECT 语法

 
```
 SELECT column_name,column_name

 FROM table_name;




```
 与

 
```
 SELECT * FROM table_name;




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





#### SELECT Column 实例

 下面的 SQL 语句从 "Customers" 表中选取 "CustomerName" 和 "City" 列：

  
#### 实例

 
```
 SELECT CustomerName,City FROM Customers; 


```
 

 



#### SELECT * 实例

 下面的 SQL 语句从 "Customers" 表中选取所有列：

  
#### 实例

 
```
 SELECT * FROM Customers; 


```
 

 



#### 结果集中的导航

 大多数数据库软件系统都允许使用编程函数在结果集中进行导航，比如：Move-To-First-Record、Get-Record-Content、Move-To-Next-Record 等等。

 类似这些编程函数不在本教程讲解之列。如需学习通过函数调用访问数据的知识，请访问我们的 [ADO 教程](http://www.w3cschool.cc/ado/ado-tutorial.html) 或者 [PHP 教程](http://www.w3cschool.cc/php/php-tutorial.html)。

 

