 SQL 通配符  
通配符可用于替代字符串中的任何其他字符。

 

#### SQL 通配符

 在 SQL 中，通配符与 SQL LIKE 操作符一起使用。

 SQL 通配符用于搜索表中的数据。

 在 SQL 中，可使用一下通配符：

 

|通配符|描述|
|:--|:--|
|%|替代 0 个或多个字符|
|_|替代一个字符|
|[charlist]|字符列中的任何单一字符|
|[^charlist]or[!charlist]|不在字符列中的任何单一字符|





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





#### 使用 SQL % 通配符

 下面的 SQL 语句选取 City 以字母 "ber" 开始的所有客户：

  
#### 实例

 
```
 SELECT * FROM Customers

 WHERE City LIKE 'ber%'; 


```
 

 下面的 SQL 语句选取 City 包含模式 "es" 的所有客户：

  
#### 实例

 
```
 SELECT * FROM Customers

 WHERE City LIKE '%es%'; 


```
 

 



#### 使用 SQL _ 通配符

 下面的 SQL 语句选取 City 以一个任意字符开始，然后是 "erlin" 的所有客户：

  
#### 实例

 
```
 SELECT * FROM Customers

 WHERE City LIKE '_erlin'; 


```
 

 下面的 SQL 语句选取 City 以 "L" 开始，然后是一个任意字符，然后是 "n"，然后是一个任意字符，然后是 "on" 的所有客户：

  
#### 实例

 
```
 SELECT * FROM Customers

 WHERE City LIKE 'L_n_on'; 


```
 

 



#### 使用 SQL [charlist] 通配符

 下面的 SQL 语句选取 City 以 "b"、"s" 或 "p" 开始的所有客户：

  
#### 实例

 
```
 SELECT * FROM Customers

 WHERE City LIKE '[bsp]%'; 


```
 

 下面的 SQL 语句选取 City 以 "a"、"b" 或 "c" 开始的所有客户：

  
#### 实例

 
```
 SELECT * FROM Customers

 WHERE City LIKE '[a-c]%'; 


```
 

 下面的 SQL 语句选取 City 不以 "b"、"s" 或 "p" 开始的所有客户：

  
#### 实例

 
```
 SELECT * FROM Customers

 WHERE City LIKE '[!bsp]%'; 


```
 

 

