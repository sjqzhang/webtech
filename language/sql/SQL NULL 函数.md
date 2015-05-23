 SQL NULL 函数 

#### SQL ISNULL()、NVL()、IFNULL() 和 COALESCE() 函数

 请看下面的 "Products" 表：

 

|P_Id|ProductName|UnitPrice|UnitsInStock|UnitsOnOrder|
|:--|:--|:--|:--|:--|
|1|Jarlsberg|10.45|16|15|
|2|Mascarpone|32.56|23| |
|3|Gorgonzola|15.67|9|20|

假如 "UnitsOnOrder" 是可选的，而且可以包含 NULL 值。

 我们使用下面的 SELECT 语句：

 
```
 SELECT ProductName,UnitPrice*(UnitsInStock+UnitsOnOrder)

 FROM Products




```
 在上面的实例中，如果有 "UnitsOnOrder" 值是 NULL，那么结果是 NULL。

 微软的 ISNULL() 函数用于规定如何处理 NULL 值。

 NVL()、IFNULL() 和 COALESCE() 函数也可以达到相同的结果。

 在这里，我们希望 NULL 值为 0。

 下面，如果 "UnitsOnOrder" 是 NULL，则不会影响计算，因为如果值是 NULL 则 ISNULL() 返回 0：

 SQL Server / MS Access

 
```
 SELECT ProductName,UnitPrice*(UnitsInStock+ISNULL(UnitsOnOrder,0))

 FROM Products




```
 Oracle

 Oracle 没有 ISNULL() 函数。不过，我们可以使用 NVL() 函数达到相同的结果：

 
```
 SELECT ProductName,UnitPrice*(UnitsInStock+NVL(UnitsOnOrder,0))

 FROM Products




```
 MySQL

 MySQL 也拥有类似 ISNULL() 的函数。不过它的工作方式与微软的 ISNULL() 函数有点不同。

 在 MySQL 中，我们可以使用 IFNULL() 函数，如下所示：

 
```
 SELECT ProductName,UnitPrice*(UnitsInStock+IFNULL(UnitsOnOrder,0))

 FROM Products




```
 或者我们可以使用 COALESCE() 函数，如下所示：

 
```
 SELECT ProductName,UnitPrice*(UnitsInStock+COALESCE(UnitsOnOrder,0))

 FROM Products




```
 




