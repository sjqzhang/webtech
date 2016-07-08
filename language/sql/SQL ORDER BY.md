 SQL ORDER BY 关键字 
ORDER BY 关键字用于对结果集进行排序。

 

#### SQL ORDER BY 关键字

 ORDER BY 关键字用于对结果集按照一个列或者多个列进行排序。

 ORDER BY 关键字默认按照升序对记录进行排序。如果需要按照降序对记录进行排序，您可以使用 DESC 关键字。

 
#### SQL ORDER BY 语法

 
```
 SELECT column_name,column_name

 FROM table_name

 ORDER BY column_name,column_name ASC|DESC;




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





#### ORDER BY 实例

 下面的 SQL 语句从 "Customers" 表中选取所有客户，并按照 "Country" 列排序：

  
#### 实例

 
```
 SELECT * FROM Customers

 ORDER BY Country; 


```
 

 



#### ORDER BY DESC 实例

 下面的 SQL 语句从 "Customers" 表中选取所有客户，并按照 "Country" 列降序排序：

  
#### 实例

 
```
 SELECT * FROM Customers

 ORDER BY Country DESC;


```
 

 



#### ORDER BY Several Columns 实例

 下面的 SQL 语句从 "Customers" 表中选取所有客户，并按照 "Country" 和 "CustomerName" 列排序：

  
#### 实例

 
```
 SELECT * FROM Customers

 ORDER BY Country,CustomerName;


```
 

 

