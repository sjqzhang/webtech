 SQL UNIQUE 约束 

#### SQL UNIQUE 约束

 UNIQUE 约束唯一标识数据库表中的每条记录。

 UNIQUE 和 PRIMARY KEY 约束均为列或列集合提供了唯一性的保证。

 PRIMARY KEY 约束拥有自动定义的 UNIQUE 约束。

 请注意，每个表可以有多个 UNIQUE 约束，但是每个表只能有一个 PRIMARY KEY 约束。

 

#### CREATE TABLE 时的 SQL UNIQUE 约束

 下面的 SQL 在 "Persons" 表创建时在 "P_Id" 列上创建 UNIQUE 约束：

 MySQL：

 
```
 CREATE TABLE Persons

 (

 P_Id int NOT NULL,

 LastName varchar(255) NOT NULL,

 FirstName varchar(255),

 Address varchar(255),

 City varchar(255),

 UNIQUE (P_Id)

 )




```
 SQL Server / Oracle / MS Access：

 
```
 CREATE TABLE Persons

 (

 P_Id int NOT NULL UNIQUE,

 LastName varchar(255) NOT NULL,

 FirstName varchar(255),

 Address varchar(255),

 City varchar(255)

 )




```
 如需命名 UNIQUE 约束，并定义多个列的 UNIQUE 约束，请使用下面的 SQL 语法：

 MySQL / SQL Server / Oracle / MS Access：

 
```
 CREATE TABLE Persons

 (

 P_Id int NOT NULL,

 LastName varchar(255) NOT NULL,

 FirstName varchar(255),

 Address varchar(255),

 City varchar(255),

 CONSTRAINT uc_PersonID UNIQUE (P_Id,LastName)

 )




```
 



#### ALTER TABLE 时的 SQL UNIQUE 约束

 当表已被创建时，如需在 "P_Id" 列创建 UNIQUE 约束，请使用下面的 SQL：

 MySQL / SQL Server / Oracle / MS Access：

 
```
 ALTER TABLE Persons

 ADD UNIQUE (P_Id)




```
 如需命名 UNIQUE 约束，并定义多个列的 UNIQUE 约束，请使用下面的 SQL 语法：

 MySQL / SQL Server / Oracle / MS Access：

 
```
 ALTER TABLE Persons

 ADD CONSTRAINT uc_PersonID UNIQUE (P_Id,LastName)




```
 



#### 撤销 UNIQUE 约束

 如需撤销 UNIQUE 约束，请使用下面的 SQL：

 MySQL：

 
```
 ALTER TABLE Persons

 DROP INDEX uc_PersonID




```
 SQL Server / Oracle / MS Access：

 
```
 ALTER TABLE Persons

 DROP CONSTRAINT uc_PersonID




```
 




