 SQL DELETE 语句 
DELETE 语句用于删除表中的记录。

 

#### SQL DELETE 语句

 DELETE 语句用于删除表中的行。

 
#### SQL DELETE 语法

 
```
 DELETE FROM table_name

 WHERE some_column=some_value;




```
 



|  请注意 SQL DELETE 语句中的 WHERE 子句！ WHERE 子句规定哪条记录或者哪些记录需要删除。如果您省略了 WHERE 子句，所有的记录都将被删除！|





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





#### SQL DELETE 实例

 假设我们要从 "Customers" 表中删除客户 "Alfreds Futterkiste"。

 我们使用下面的 SQL 语句：

  
#### 实例

 
```
 DELETE FROM Customers

 WHERE CustomerName='Alfreds Futterkiste' AND ContactName='Maria Anders'; 


```
 

 现在，"Customers" 表如下所示：

 

|CustomerID|CustomerName|ContactName|Address|City|PostalCode|Country|
|:--|:--|:--|:--|:--|:--|:--|
|2|Ana Trujillo Emparedados y helados|Ana Trujillo|Avda. de la Constitución 2222|México D.F.|05021|Mexico|
|3|Antonio Moreno Taquería|Antonio Moreno|Mataderos 2312|México D.F.|05023|Mexico|
|4|Around the Horn|Thomas Hardy|120 Hanover Sq.|London|WA1 1DP|UK|
|5|Berglunds snabbköp|Christina Berglund|Berguvsvägen 8|Luleå|S-958 22|Sweden|





#### 删除所有数据

 您可以在不删除表的情况下，删除表中所有的行。这意味着表结构、属性、索引将保持不变：

 
```
 DELETE FROM table_name;



 or



 DELETE * FROM table_name;




```
 注释：在删除记录时要格外小心！因为您不能重来！

 

