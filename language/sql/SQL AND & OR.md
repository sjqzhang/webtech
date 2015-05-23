 SQL AND &amp; OR 运算符 
AND &amp; OR 运算符用于基于一个以上的条件对记录进行过滤。

 

#### SQL AND &amp; OR 运算符

 如果第一个条件和第二个条件都成立，则 AND 运算符显示一条记录。

 如果第一个条件和第二个条件中只要有一个成立，则 OR 运算符显示一条记录。

 

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





#### AND 运算符实例

 下面的 SQL 语句从 "Customers" 表中选取国家为 "Germany" 且城市为 "Berlin" 的所有客户：

  
#### 实例

 
```
 SELECT * FROM Customers

 WHERE Country='Germany'

 AND City='Berlin'; 


```
 

 



#### OR 运算符实例

 下面的 SQL 语句从 "Customers" 表中选取城市为 "Berlin" 或者 "München" 的所有客户：

  
#### 实例

 
```
 SELECT * FROM Customers

 WHERE City='Berlin'

 OR City='München'; 


```
 

 



#### 结合 AND &amp; OR

 您也可以把 AND 和 OR 结合起来（使用圆括号来组成复杂的表达式）。

 下面的 SQL 语句从 "Customers" 表中选取国家为 "Germany" 且城市为 "Berlin" 或者 "München" 的所有客户：

  
#### 实例

 
```
 SELECT * FROM Customers

 WHERE Country='Germany'

 AND (City='Berlin' OR City='München');


```
 

 

