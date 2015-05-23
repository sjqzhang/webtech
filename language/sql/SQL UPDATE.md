 SQL UPDATE 语句 
UPDATE 语句用于更新表中的记录。

 

#### SQL UPDATE 语句

 UPDATE 语句用于更新表中已存在的记录。

 
#### SQL UPDATE 语法

 
```
 UPDATE table_name

 SET column1=value1,column2=value2,...

 WHERE some_column=some_value;




```
 



|  请注意 SQL UPDATE 语句中的 WHERE 子句！ WHERE 子句规定哪条记录或者哪些记录需要更新。如果您省略了 WHERE 子句，所有的记录都将被更新！|





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





#### SQL UPDATE 实例

 假设我们要把客户 "Alfreds Futterkiste" 更新为一个新的联系人和城市。

 我们使用下面的 SQL 语句：

  
#### 实例

 
```
 UPDATE Customers

 SET ContactName='Alfred Schmidt', City='Hamburg'

 WHERE CustomerName='Alfreds Futterkiste'; 


```
 

 现在，选自 "Customers" 表的数据如下所示：

 

|CustomerID|CustomerName|ContactName|Address|City|PostalCode|Country|
|:--|:--|:--|:--|:--|:--|:--|
|1|Alfreds Futterkiste|Alfred Schmidt|Obere Str. 57|Hamburg|12209|Germany|
|2|Ana Trujillo Emparedados y helados|Ana Trujillo|Avda. de la Constitución 2222|México D.F.|05021|Mexico|
|3|Antonio Moreno Taquería|Antonio Moreno|Mataderos 2312|México D.F.|05023|Mexico|
|4|Around the Horn|Thomas Hardy|120 Hanover Sq.|London|WA1 1DP|UK|
|5|Berglunds snabbköp|Christina Berglund|Berguvsvägen 8|Luleå|S-958 22|Sweden|





#### Update 警告！

 在更新记录时要格外小心！在上面的实例中，如果我们省略了 WHERE 子句，如下所示：

 
```
 UPDATE Customers

 SET ContactName='Alfred Schmidt', City='Hamburg'; 




```
 "Customers" 表将如下所示：

 

|CustomerID|CustomerName|ContactName|Address|City|PostalCode|Country|
|:--|:--|:--|:--|:--|:--|:--|
|1|Alfreds Futterkiste|Alfred Schmidt|Obere Str. 57|Hamburg|12209|Germany|
|2|Ana Trujillo Emparedados y helados|Alfred Schmidt|Avda. de la Constitución 2222|Hamburg|05021|Mexico|
|3|Antonio Moreno Taquería|Alfred Schmidt|Mataderos 2312|Hamburg|05023|Mexico|
|4|Around the Horn|Alfred Schmidt|120 Hanover Sq.|Hamburg|WA1 1DP|UK|
|5|Berglunds snabbköp|Alfred Schmidt|Berguvsvägen 8|Hamburg|S-958 22|Sweden|



