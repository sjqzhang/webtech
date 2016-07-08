 SQL INSERT INTO SELECT 语句 
通过 SQL，您可以从一个表复制信息到另一个表。

 INSERT INTO SELECT 语句从一个表复制数据，然后把数据插入到一个已存在的表中。

 

#### SQL INSERT INTO SELECT 语句

 INSERT INTO SELECT 语句从一个表复制数据，然后把数据插入到一个已存在的表中。目标表中任何已存在的行都不会受影响。

 
#### SQL INSERT INTO SELECT 语法

 我们可以从一个表中复制所有的列插入到另一个已存在的表中：

 
```
 INSERT INTO table2

 SELECT * FROM table1; 




```
 或者我们可以只复制希望的列插入到另一个已存在的表中：

 
```
 INSERT INTO table2

(column_name(s))

 SELECT column_name(s)

 FROM table1; 




```
 



#### 演示数据库

 在本教程中，我们将使用众所周知的 Northwind 样本数据库。

 下面是选自 "Customers" 表的数据：

 

|CustomerID|CustomerName|ContactName|Address|City|PostalCode|Country|
|:--|:--|:--|:--|:--|:--|:--|
|1|Alfreds Futterkiste|Maria Anders|Obere Str. 57|Berlin|12209|Germany|
|2|Ana Trujillo Emparedados y helados|Ana Trujillo|Avda. de la Constitución 2222|México D.F.|05021|Mexico|
|3|Antonio Moreno Taquería|Antonio Moreno|Mataderos 2312|México D.F.|05023|Mexico|

选自 "Suppliers" 表的数据：

 

|SupplierID|SupplierName|ContactName|Address|City|Postal Code|Country|Phone|
|:--|:--|:--|:--|:--|:--|:--|:--|
|1|Exotic Liquid|Charlotte Cooper|49 Gilbert St.|Londona|EC1 4SD|UK|(171) 555-2222|
|2|New Orleans Cajun Delights|Shelley Burke|P.O. Box 78934|New Orleans|70117|USA|(100) 555-4822|
|3|Grandma Kelly's Homestead|Regina Murphy|707 Oxford Rd.|Ann Arbor|48104|USA|(313) 555-5735|





#### SQL INSERT INTO SELECT 实例

 只复制 "Suppliers" 中的一些列插入到 "Customers" 中：

  
#### 实例

 
```
 INSERT INTO Customers (CustomerName, Country)

 SELECT SupplierName, Country FROM Suppliers; 


```
 

 只复制德国的供应商插入到 "Customers" 中：

  
#### 实例

 
```
 INSERT INTO Customers (CustomerName, Country)

 SELECT SupplierName, Country FROM Suppliers

WHERE Country='Germany'; 


```
 

 

