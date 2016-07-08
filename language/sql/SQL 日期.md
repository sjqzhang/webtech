 SQL Date 函数 

#### SQL 日期（Dates）

 ![http://www.w3cschool.cc/images/lamp.gif](http://www.w3cschool.cc/images/lamp.gif)当我们处理日期时，最难的任务恐怕是确保所插入的日期的格式，与数据库中日期列的格式相匹配。

 只要您的数据包含的只是日期部分，运行查询就不会出问题。但是，如果涉及时间部分，情况就有点复杂了。

 在讨论日期查询的复杂性之前，我们先来看看最重要的内建日期处理函数。

 

#### MySQL Date 函数

 下面的表格列出了 MySQL 中最重要的内建日期函数：

 

|函数|描述|
|:--|:--|
|NOW()|返回当前的日期和时间|
|CURDATE()|返回当前的日期|
|CURTIME()|返回当前的时间|
|DATE()|提取日期或日期/时间表达式的日期部分|
|EXTRACT()|返回日期/时间的单独部分|
|DATE_ADD()|向日期添加指定的时间间隔|
|DATE_SUB()|从日期减去指定的时间间隔|
|DATEDIFF()|返回两个日期之间的天数|
|DATE_FORMAT()|用不同的格式显示日期/时间|





#### SQL Server Date 函数

 下面的表格列出了 SQL Server 中最重要的内建日期函数：

 

|函数|描述|
|:--|:--|
|GETDATE()|返回当前的日期和时间|
|DATEPART()|返回日期/时间的单独部分|
|DATEADD()|在日期中添加或减去指定的时间间隔|
|DATEDIFF()|返回两个日期之间的时间|
|CONVERT()|用不同的格式显示日期/时间|





#### SQL Date 数据类型

 MySQL 使用下列数据类型在数据库中存储日期或日期/时间值：

 
DATE - 格式：YYYY-MM-DD
 DATETIME - 格式：YYYY-MM-DD HH:MM:SS
 TIMESTAMP - 格式：YYYY-MM-DD HH:MM:SS
 YEAR - 格式：YYYY 或 YY
 
SQL Server 使用下列数据类型在数据库中存储日期或日期/时间值：

 
DATE - 格式：YYYY-MM-DD
 DATETIME - 格式：YYYY-MM-DD HH:MM:SS
 SMALLDATETIME - 格式：YYYY-MM-DD HH:MM:SS
 TIMESTAMP - 格式：唯一的数字
 
注释：当您在数据库中创建一个新表时，需要为列选择数据类型！

 如需了解所有可用的数据类型，请访问我们完整的 [数据类型参考手册](http://www.w3cschool.cc/sql/sql-datatypes.html)。

 

#### SQL 日期处理

 ![http://www.w3cschool.cc/images/lamp.gif](http://www.w3cschool.cc/images/lamp.gif)如果不涉及时间部分，那么我们可以轻松地比较两个日期！

 假设我们有如下的 "Orders" 表：

 

|OrderId|ProductName|OrderDate|
|:--|:--|:--|
|1|Geitost|2008-11-11|
|2|Camembert Pierrot|2008-11-09|
|3|Mozzarella di Giovanni|2008-11-11|
|4|Mascarpone Fabioli|2008-10-29|

现在，我们希望从上表中选取 OrderDate 为 "2008-11-11" 的记录。

 我们使用下面的 SELECT 语句：

 
```
 SELECT * FROM Orders WHERE OrderDate='2008-11-11'




```
 结果集如下所示：

 

|OrderId|ProductName|OrderDate|
|:--|:--|:--|
|1|Geitost|2008-11-11|
|3|Mozzarella di Giovanni|2008-11-11|

现在，假设 "Orders" 表如下所示（请注意 "OrderDate" 列中的时间部分）：

 

|OrderId|ProductName|OrderDate|
|:--|:--|:--|
|1|Geitost|2008-11-11 13:23:44|
|2|Camembert Pierrot|2008-11-09 15:45:21|
|3|Mozzarella di Giovanni|2008-11-11 11:12:01|
|4|Mascarpone Fabioli|2008-10-29 14:56:59|

如果我们使用和上面一样的 SELECT 语句：

 
```
 SELECT * FROM Orders WHERE OrderDate='2008-11-11'




```
 那么我们将得不到结果！这是由于该查询的日期不含有时间部分。

 提示：如果您希望使查询简单且更易维护，那么请不要在日期中使用时间部分！

 




