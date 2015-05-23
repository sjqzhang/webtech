 SQL 视图（Views）  
视图是可视化的表。

 本章讲解如何创建、更新和删除视图。

 

#### SQL CREATE VIEW 语句

 在 SQL 中，视图是基于 SQL 语句的结果集的可视化的表。

 视图包含行和列，就像一个真实的表。视图中的字段就是来自一个或多个数据库中的真实的表中的字段。

 您可以向视图添加 SQL 函数、WHERE 以及 JOIN 语句，也可以呈现数据，就像这些数据来自于某个单一的表一样。

 
#### SQL CREATE VIEW 语法

 
```
 CREATE VIEW view_name AS

 SELECT column_name(s)

 FROM table_name

 WHERE condition




```
 注释：视图总是显示最新的数据！每当用户查询视图时，数据库引擎通过使用视图的 SQL 语句重建数据。

 

#### SQL CREATE VIEW 实例

 样本数据库 Northwind 拥有一些被默认安装的视图。

 视图 "Current Product List" 会从 "Products" 表列出所有正在使用的产品（未停产的产品）。这个视图使用下面的 SQL 创建：

 
```
 CREATE VIEW [Current Product List] AS

 SELECT ProductID,ProductName

 FROM Products

 WHERE Discontinued=No




```
 我们可以像这样查询上面这个视图：

 
```
 SELECT * FROM [Current Product List]




```
 Northwind 样本数据库的另一个视图会选取 "Products" 表中所有单位价格高于平均单位价格的产品：

 
```
 CREATE VIEW [Products Above Average Price] AS

 SELECT ProductName,UnitPrice

 FROM Products

 WHERE UnitPrice>(SELECT AVG(UnitPrice) FROM Products)




```
 我们可以像这样查询上面这个视图：

 
```
 SELECT * FROM [Products Above Average Price]




```
 Northwind 样本数据库的另一个视图会计算在 1997 年每个种类的销售总数。请注意，这个视图会从另一个名为 "Product Sales for 1997" 的视图那里选取数据：

 
```
 CREATE VIEW [Category Sales For 1997] AS

 SELECT DISTINCT CategoryName,Sum(ProductSales) AS CategorySales

 FROM [Product Sales for 1997]

 GROUP BY CategoryName




```
 我们可以像这样查询上面这个视图：

 
```
 SELECT * FROM [Category Sales For 1997]




```
 我们也可以向查询添加条件。现在，我们仅仅需要查看 "Beverages" 类的销售总数：

 
```
 SELECT * FROM [Category Sales For 1997]

 WHERE CategoryName='Beverages'




```
 



#### SQL 更新视图

 您可以使用下面的语法来更新视图：

 
#### SQL CREATE OR REPLACE VIEW 语法

 
```
 CREATE OR REPLACE VIEW view_name AS

 SELECT column_name(s)

 FROM table_name

 WHERE condition




```
 现在，我们希望向 "Current Product List" 视图添加 "Category" 列。我们将通过下列 SQL 更新视图：

 
```
 CREATE VIEW [Current Product List] AS

 SELECT ProductID,ProductName,Category

 FROM Products

 WHERE Discontinued=No




```
 



#### SQL 撤销视图

 您可以通过 DROP VIEW 命令来删除视图。

 
#### SQL DROP VIEW 语法

 
```
 DROP VIEW view_name




```
 




