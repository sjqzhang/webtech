 SQL 连接（Joins）  
SQL join 用于把来自两个或多个表的行结合起来。

 

#### SQL JOIN

 SQL JOIN 子句用于把来自两个或多个表的行结合起来，基于这些表之间的共同字段。

 最常见的 JOIN 类型：

#### SQL INNER JOIN（简单的 JOIN）

。 SQL INNER JOIN 从多个表中返回满足 JOIN 条件的所有行。

 让我们看看选自 "Orders" 表的数据：

 

|OrderID|CustomerID|OrderDate|
|:--|:--|:--|
|10308|2|1996-09-18|
|10309|37|1996-09-19|
|10310|77|1996-09-20|

然后，看看选自 "Customers" 表的数据：

 

|CustomerID|CustomerName|ContactName|Country|
|:--|:--|:--|:--|
|1|Alfreds Futterkiste|Maria Anders|Germany|
|2|Ana Trujillo Emparedados y helados|Ana Trujillo|Mexico|
|3|Antonio Moreno Taquería|Antonio Moreno|Mexico|

请注意，"Orders" 表中的 "CustomerID" 列指向 "Customers" 表中的客户。上面这两个表是通过 "CustomerID" 列联系起来的。

 然后，如果我们运行下面的 SQL 语句（包含 INNER JOIN）：

  
#### 实例

 
```
 SELECT Orders.OrderID, Customers.CustomerName, Orders.OrderDate

FROM Orders

INNER JOIN Customers

ON Orders.CustomerID=Customers.CustomerID; 


```
 

 运行结果如下所示：

 

|OrderID|CustomerName|OrderDate|
|:--|:--|:--|
|10308|Ana Trujillo Emparedados y helados|9/18/1996|
|10365|Antonio Moreno Taquería|11/27/1996|
|10383|Around the Horn|12/16/1996|
|10355|Around the Horn|11/15/1996|
|10278|Berglunds snabbköp|8/12/1996|





#### 不同的 SQL JOIN

 在我们继续讲解实例之前，我们先列出您可以使用的不同的 SQL JOIN 类型：

 

INNER JOIN：如果表中有至少一个匹配，则返回行
 
LEFT JOIN：即使右表中没有匹配，也从左表返回所有的行
 
RIGHT JOIN：即使左表中没有匹配，也从右表返回所有的行
 
FULL JOIN：只要其中一个表中存在匹配，则返回行
 


