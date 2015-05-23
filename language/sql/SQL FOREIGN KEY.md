 SQL FOREIGN KEY 约束 

#### SQL FOREIGN KEY 约束

 一个表中的 FOREIGN KEY 指向另一个表中的 PRIMARY KEY。

 让我们通过一个实例来解释外键。请看下面两个表：

 "Persons" 表：

 

|P_Id|LastName|FirstName|Address|City|
|:--|:--|:--|:--|:--|
|1|Hansen|Ola|Timoteivn 10|Sandnes|
|2|Svendson|Tove|Borgvn 23|Sandnes|
|3|Pettersen|Kari|Storgt 20|Stavanger|

"Orders" 表：

 

|O_Id|OrderNo|P_Id|
|:--|:--|:--|
|1|77895|3|
|2|44678|3|
|3|22456|2|
|4|24562|1|

请注意，"Orders" 表中的 "P_Id" 列指向 "Persons" 表中的 "P_Id" 列。

 "Persons" 表中的 "P_Id" 列是 "Persons" 表中的 PRIMARY KEY。

 "Orders" 表中的 "P_Id" 列是 "Orders" 表中的 FOREIGN KEY。

 FOREIGN KEY 约束用于预防破坏表之间连接的行为。

 FOREIGN KEY 约束也能防止非法数据插入外键列，因为它必须是它指向的那个表中的值之一。

 

#### CREATE TABLE 时的 SQL FOREIGN KEY 约束

 下面的 SQL 在 "Orders" 表创建时在 "P_Id" 列上创建 FOREIGN KEY 约束：

 MySQL：

 
```
 CREATE TABLE Orders

 (

 O_Id int NOT NULL,

 OrderNo int NOT NULL,

 P_Id int,

 PRIMARY KEY (O_Id),

 FOREIGN KEY (P_Id) REFERENCES Persons(P_Id)

 )




```
 SQL Server / Oracle / MS Access：

 
```
 CREATE TABLE Orders

 (

 O_Id int NOT NULL PRIMARY KEY,

 OrderNo int NOT NULL,

 P_Id int FOREIGN KEY REFERENCES Persons(P_Id)

 )




```
 如需命名 FOREIGN KEY 约束，并定义多个列的 FOREIGN KEY 约束，请使用下面的 SQL 语法：

 MySQL / SQL Server / Oracle / MS Access：

 
```
 CREATE TABLE Orders

 (

 O_Id int NOT NULL,

 OrderNo int NOT NULL,

 P_Id int,

 PRIMARY KEY (O_Id),

 CONSTRAINT fk_PerOrders FOREIGN KEY (P_Id)

 REFERENCES Persons(P_Id)

 )




```
 



#### ALTER TABLE 时的 SQL FOREIGN KEY 约束

 当 "Orders" 表已被创建时，如需在 "P_Id" 列创建 FOREIGN KEY 约束，请使用下面的 SQL：

 MySQL / SQL Server / Oracle / MS Access：

 
```
 ALTER TABLE Orders

 ADD FOREIGN KEY (P_Id)

 REFERENCES Persons(P_Id)




```
 如需命名 FOREIGN KEY 约束，并定义多个列的 FOREIGN KEY 约束，请使用下面的 SQL 语法：

 MySQL / SQL Server / Oracle / MS Access：

 
```
 ALTER TABLE Orders

 ADD CONSTRAINT fk_PerOrders

 FOREIGN KEY (P_Id)

 REFERENCES Persons(P_Id)




```
 



#### 撤销 FOREIGN KEY 约束

 如需撤销 FOREIGN KEY 约束，请使用下面的 SQL：

 MySQL：

 
```
 ALTER TABLE Orders

 DROP FOREIGN KEY fk_PerOrders




```
 SQL Server / Oracle / MS Access：

 
```
 ALTER TABLE Orders

 DROP CONSTRAINT fk_PerOrders




```
 




