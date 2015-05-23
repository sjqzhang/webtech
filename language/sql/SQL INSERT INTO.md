 SQL INSERT INTO 语句 
INSERT INTO 语句用于向表中插入新记录。

 

#### SQL INSERT INTO 语句

 INSERT INTO 语句用于向表中插入新记录。

 
#### SQL INSERT INTO 语法

 INSERT INTO 语句可以有两种编写形式。

 第一种形式无需指定要插入数据的列名，只需提供被插入的值即可：

 
```
 INSERT INTO table_name

 VALUES (value1,value2,value3,...);




```
 第二种形式需要指定列名及被插入的值：

 
```
 INSERT INTO table_name (column1,column2,column3,...)

 VALUES (value1,value2,value3,...);




```
 



#### 演示数据库

 在本教程中，我们将使用众所周知的 Northwind 样本数据库。

 下面是选自 "Customers" 表的数据：

 

|CustomerID|CustomerName|ContactName|Address|City|PostalCode|Country|
|:--|:--|:--|:--|:--|:--|:--|
|87|Wartian Herkku|Pirkko Koskitalo|Torikatu 38|Oulu|90110|Finland|
|88|Wellington Importadora|Paula Parente|Rua do Mercado, 12|Resende|08737-363|Brazil|
|89|White Clover Markets|Karl Jablonski|305 - 14th Ave. S. Suite 3B|Seattle|98128|USA|
|90|Wilman Kala|Matti Karttunen|Keskuskatu 45|Helsinki|21240|Finland|
|91|Wolski|Zbyszek|ul. Filtrowa 68|Walla|01-012|Poland|





#### INSERT INTO 实例

 假设我们要向 "Customers" 表中插入一个新行。

 我们可以使用下面的 SQL 语句：

  
#### 实例

 
```
 INSERT INTO Customers (CustomerName, ContactName, Address, City, PostalCode, Country)

 VALUES ('Cardinal','Tom B. Erichsen','Skagen 21','Stavanger','4006','Norway'); 


```
 

 现在，选自 "Customers" 表的数据如下所示：

 

|CustomerID|CustomerName|ContactName|Address|City|PostalCode|Country|
|:--|:--|:--|:--|:--|:--|:--|
|87|Wartian Herkku|Pirkko Koskitalo|Torikatu 38|Oulu|90110|Finland|
|88|Wellington Importadora|Paula Parente|Rua do Mercado, 12|Resende|08737-363|Brazil|
|89|White Clover Markets|Karl Jablonski|305 - 14th Ave. S. Suite 3B|Seattle|98128|USA|
|90|Wilman Kala|Matti Karttunen|Keskuskatu 45|Helsinki|21240|Finland|
|91|Wolski|Zbyszek|ul. Filtrowa 68|Walla|01-012|Poland|
|92|Cardinal|Tom B. Erichsen|Skagen 21|Stavanger|4006|Norway|





|  您是否注意到，我们没有向 CustomerID 字段插入任何数字？CustomerID 列是自动更新的，表中的每条记录都有一个唯一的数字。|





#### 在指定的列插入数据

 我们也可以在指定的列插入数据。

 下面的 SQL 语句将插入一个新行，但是只在 "CustomerName"、"City" 和 "Country" 列插入数据（CustomerID 字段会自动更新）：

  
#### 实例

 
```
 INSERT INTO Customers (CustomerName, City, Country)

 VALUES ('Cardinal', 'Stavanger', 'Norway'); 


```
 

 现在，选自 "Customers" 表的数据如下所示：

 

|CustomerID|CustomerName|ContactName|Address|City|PostalCode|Country|
|:--|:--|:--|:--|:--|:--|:--|
|87|Wartian Herkku|Pirkko Koskitalo|Torikatu 38|Oulu|90110|Finland|
|88|Wellington Importadora|Paula Parente|Rua do Mercado, 12|Resende|08737-363|Brazil|
|89|White Clover Markets|Karl Jablonski|305 - 14th Ave. S. Suite 3B|Seattle|98128|USA|
|90|Wilman Kala|Matti Karttunen|Keskuskatu 45|Helsinki|21240|Finland|
|91|Wolski|Zbyszek|ul. Filtrowa 68|Walla|01-012|Poland|
|92|Cardinal|null|null |Stavanger|null|Norway|








