 SQL NULL 值  
NULL 值代表遗漏的未知数据。

 默认地，表的列可以存放 NULL 值。

 本章讲解 IS NULL 和 IS NOT NULL 操作符。

 

#### SQL NULL 值

 如果表中的某个列是可选的，那么我们可以在不向该列添加值的情况下插入新记录或更新已有的记录。这意味着该字段将以 NULL 值保存。

 NULL 值的处理方式与其他值不同。

 NULL 用作未知的或不适用的值的占位符。

 ![http://www.w3cschool.cc/images/lamp.gif](http://www.w3cschool.cc/images/lamp.gif)注释：无法比较 NULL 和 0；它们是不等价的。

 

#### SQL 的 NULL 值处理

 请看下面的 "Persons" 表：

 

|P_Id|LastName|FirstName|Address|City|
|:--|:--|:--|:--|:--|
|1|Hansen|Ola| |Sandnes|
|2|Svendson|Tove|Borgvn 23|Sandnes|
|3|Pettersen|Kari| |Stavanger|

假如 "Persons" 表中的 "Address" 列是可选的。这意味着如果在 "Address" 列插入一条不带值的记录，"Address" 列会使用 NULL 值保存。

 那么我们如何测试 NULL 值呢？

 无法使用比较运算符来测试 NULL 值，比如 =、< 或 <>。

 我们必须使用 IS NULL 和 IS NOT NULL 操作符。

 

#### SQL IS NULL

 我们如何仅仅选取在 "Address" 列中带有 NULL 值的记录呢？

 我们必须使用 IS NULL 操作符：

 
```
 SELECT LastName,FirstName,Address FROM Persons

 WHERE Address IS NULL




```
 结果集如下所示：

 

|LastName|FirstName|Address|
|:--|:--|:--|
|Hansen|Ola| |
|Pettersen|Kari| |

![http://www.w3cschool.cc/images/lamp.gif](http://www.w3cschool.cc/images/lamp.gif)提示：请始终使用 IS NULL 来查找 NULL 值。

 

#### SQL IS NOT NULL

 我们如何仅仅选取在 "Address" 列中不带有 NULL 值的记录呢？

 我们必须使用 IS NOT NULL 操作符：

 
```
 SELECT LastName,FirstName,Address FROM Persons

 WHERE Address IS NOT NULL




```
 结果集如下所示：

 

|LastName|FirstName|Address|
|:--|:--|:--|
|Svendson|Tove|Borgvn 23|

在下一节中，我们了解 ISNULL()、NVL()、IFNULL() 和 COALESCE() 函数。

 




