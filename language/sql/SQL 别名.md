 SQL 别名（Aliases）  
通过使用 SQL，可以为表名称或列名称指定别名（Alias）。

 

#### SQL 别名（Aliases）

 通过使用 SQL，可以为表名称或列名称指定别名（Alias）。

 基本上，创建别名是为了让列名称的可读性更强。

 
#### 列的 SQL Alias 语法

 
```
 SELECT column_name AS alias_name

 FROM table_name; 




```
 
#### 表的 SQL Alias 语法

 
```
 SELECT column_name(s)

 FROM table_name AS alias_name; 




```
 



#### 演示数据库

 在本教程中，我们将使用众所周知的 Northwind 样本数据库。

 下面是选自 "Customers" 表的数据：

 

|CustomerID|CustomerName|ContactName|Address|City|PostalCode|Country|
|:--|:--|:--|:--|:--|:--|:--|
|1|Alfreds Futterkiste|Maria Anders|Obere Str. 57|Berlin|12209|Germany|
|2|Ana Trujillo Emparedados y helados|Ana Trujillo|Avda. de la Constitución 2222|México D.F.|05021|Mexico|
|3|Antonio Moreno Taquería|Antonio Moreno|Mataderos 2312|México D.F.|05023|Mexico|

下面是选自 "Orders" 表的数据：

 

|OrderID|CustomerID|EmployeeID|OrderDate|ShipperID|
|:--|:--|:--|:--|:--|
|10643|1|6|1997-08-25|1|
|10644|88|3|1997-08-25|2|
|10645|34|4|1997-08-26|1|





#### 列的 Alias 实例

 下面的 SQL 语句指定了两个别名，一个是 CustomerName 列的别名，一个是 ContactName 列的别名。

#### 提示：

如果列名称包含空格，要求使用双引号或方括号：

  
#### 实例

 
```
 SELECT CustomerName AS Customer, ContactName AS [Contact Person]

 FROM Customers;


```
 

 在下面的 SQL 语句中，我们把四个列（Address、City、PostalCode 和 Country）结合在一起，并创建一个名为 "Address" 的别名：

  
#### 实例

 
```
 SELECT CustomerName, Address+', '+City+', '+PostalCode+', '+Country AS Address

 FROM Customers;


```
 

 



#### 表的 Alias 实例

 下面的 SQL 语句选取来自客户 "Alfreds Futterkiste" 的所有订单。我们使用 "Customers" 和 "Orders" 表，并分别为它们指定表别名 "c" 和 "o"（通过使用别名让 SQL 更简短）：

  
#### 实例

 
```
 SELECT o.OrderID, o.OrderDate, c.CustomerName

FROM Customers AS c, Orders AS o

 WHERE c.CustomerName='Alfreds Futterkiste'; 


```
 

 不带别名的相同的 SQL 语句：

  
#### 实例

 
```
 SELECT Orders.OrderID, Orders.OrderDate, Customers.CustomerName

FROM Customers, Orders

 WHERE Customers.CustomerName='Alfreds Futterkiste'; 


```
 

 在下面的情况下，使用别名很有用：

 
在查询中涉及超过一个表
 在查询中使用了函数
 列名称很长或者可读性差
 需要把两个列或者多个列结合在一起
 


