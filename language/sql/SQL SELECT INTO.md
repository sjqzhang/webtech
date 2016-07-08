 SQL SELECT INTO 语句 
通过 SQL，您可以从一个表复制信息到另一个表。

 SELECT INTO 语句从一个表复制数据，然后把数据插入到另一个新表中。

 

#### SQL SELECT INTO 语句

 SELECT INTO 语句从一个表复制数据，然后把数据插入到另一个新表中。

 
#### SQL SELECT INTO 语法

 我们可以复制所有的列插入到新表中：

 
```
 SELECT *

 INTO newtable [IN externaldb]

 FROM table1; 




```
 或者只复制希望的列插入到新表中：

 
```
 SELECT column_name(s)

 INTO newtable [IN externaldb]

 FROM table1; 




```
 



|  提示：新表将会使用 SELECT 语句中定义的列名称和类型进行创建。您可以使用 AS 子句来应用新名称。 |





#### SQL SELECT INTO 实例

 创建 Customers 的备份复件：

 
```
 SELECT *

 INTO CustomersBackup2013

 FROM Customers;




```
 请使用 IN 子句来复制表到另一个数据库中：

 
```
 SELECT *

 INTO CustomersBackup2013 IN 'Backup.mdb'

 FROM Customers;




```
 只复制一些列插入到新表中：

 
```
 SELECT CustomerName, ContactName

 INTO CustomersBackup2013

 FROM Customers;




```
 只复制德国的客户插入到新表中：

 
```
 SELECT *

 INTO CustomersBackup2013

 FROM Customers

 WHERE Country='Germany';




```
 复制多个表中的数据插入到新表中：

 
```
  SELECT Customers.CustomerName, Orders.OrderID

 INTO CustomersOrderBackup2013

 FROM Customers

 LEFT JOIN Orders

 ON Customers.CustomerID=Orders.CustomerID;

 


```
 

#### 提示：

SELECT INTO 语句可用于通过另一种模式创建一个新的空表。只需要添加促使查询没有数据返回的 WHERE 子句即可：

 
```
 SELECT *

INTO newtable

FROM table1

WHERE 1=0;




```
 

