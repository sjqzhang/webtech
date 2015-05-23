 SQL CHECK 约束 

#### SQL CHECK 约束

 CHECK 约束用于限制列中的值的范围。

 如果对单个列定义 CHECK 约束，那么该列只允许特定的值。

 如果对一个表定义 CHECK 约束，那么此约束会基于行中其他列的值在特定的列中对值进行限制。

 

#### CREATE TABLE 时的 SQL CHECK 约束

 下面的 SQL 在 "Persons" 表创建时在 "P_Id" 列上创建 CHECK 约束。CHECK 约束规定 "P_Id" 列必须只包含大于 0 的整数。

 MySQL：

 
```
 CREATE TABLE Persons

 (

 P_Id int NOT NULL,

 LastName varchar(255) NOT NULL,

 FirstName varchar(255),

 Address varchar(255),

 City varchar(255),

 CHECK (P_Id>0)

 )




```
 SQL Server / Oracle / MS Access：

 
```
 CREATE TABLE Persons

 (

 P_Id int NOT NULL CHECK (P_Id>0),

 LastName varchar(255) NOT NULL,

 FirstName varchar(255),

 Address varchar(255),

 City varchar(255)

 )




```
 如需命名 CHECK 约束，并定义多个列的 CHECK 约束，请使用下面的 SQL 语法：

 MySQL / SQL Server / Oracle / MS Access：

 
```
 CREATE TABLE Persons

 (

 P_Id int NOT NULL,

 LastName varchar(255) NOT NULL,

 FirstName varchar(255),

 Address varchar(255),

 City varchar(255),

 CONSTRAINT chk_Person CHECK (P_Id>0 AND City='Sandnes')

 )




```
 



#### ALTER TABLE 时的 SQL CHECK 约束

 当表已被创建时，如需在 "P_Id" 列创建 CHECK 约束，请使用下面的 SQL：

 MySQL / SQL Server / Oracle / MS Access:

 
```
 ALTER TABLE Persons

 ADD CHECK (P_Id>0)




```
 如需命名 CHECK 约束，并定义多个列的 CHECK 约束，请使用下面的 SQL 语法：

 MySQL / SQL Server / Oracle / MS Access：

 
```
 ALTER TABLE Persons

 ADD CONSTRAINT chk_Person CHECK (P_Id>0 AND City='Sandnes')




```
 



#### 撤销 CHECK 约束

 如需撤销 CHECK 约束，请使用下面的 SQL：

 SQL Server / Oracle / MS Access：

 
```
 ALTER TABLE Persons

 DROP CONSTRAINT chk_Person




```
 MySQL：

 
```
 ALTER TABLE Persons

 DROP CHECK chk_Person




```
 

