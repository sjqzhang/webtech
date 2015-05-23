 SQL DEFAULT 约束 

#### SQL DEFAULT 约束

 DEFAULT 约束用于向列中插入默认值。

 如果没有规定其他的值，那么会将默认值添加到所有的新记录。

 

#### CREATE TABLE 时的 SQL DEFAULT 约束

 下面的 SQL 在 "Persons" 表创建时在 "City" 列上创建 DEFAULT 约束：

 My SQL / SQL Server / Oracle / MS Access：

 
```
 CREATE TABLE Persons

 (

 P_Id int NOT NULL,

 LastName varchar(255) NOT NULL,

 FirstName varchar(255),

 Address varchar(255),

 City varchar(255) DEFAULT 'Sandnes'

 )




```
 通过使用类似 GETDATE() 这样的函数，DEFAULT 约束也可以用于插入系统值：

 
```
 CREATE TABLE Orders

 (

 O_Id int NOT NULL,

 OrderNo int NOT NULL,

 P_Id int,

 OrderDate date DEFAULT GETDATE()

 )




```
 



#### ALTER TABLE 时的 SQL DEFAULT 约束

 当表已被创建时，如需在 "City" 列创建 DEFAULT 约束，请使用下面的 SQL：

 MySQL：

 
```
 ALTER TABLE Persons

 ALTER City SET DEFAULT 'SANDNES'




```
 SQL Server / MS Access：

 
```
 ALTER TABLE Persons

 ALTER COLUMN City SET DEFAULT 'SANDNES'




```
 Oracle：

 
```
 ALTER TABLE Persons

 MODIFY City DEFAULT 'SANDNES'




```
 



#### 撤销 DEFAULT 约束

 如需撤销 DEFAULT 约束，请使用下面的 SQL：

 MySQL：

 
```
 ALTER TABLE Persons

 ALTER City DROP DEFAULT




```
 SQL Server / Oracle / MS Access：

 
```
 ALTER TABLE Persons

 ALTER COLUMN City DROP DEFAULT




```
 

