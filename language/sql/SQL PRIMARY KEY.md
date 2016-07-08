 SQL PRIMARY KEY 约束 

#### SQL PRIMARY KEY 约束

 PRIMARY KEY 约束唯一标识数据库表中的每条记录。

 主键必须包含唯一的值。

 主键列不能包含 NULL 值。

 每个表都应该有一个主键，并且每个表只能有一个主键。

 

#### CREATE TABLE 时的 SQL PRIMARY KEY 约束

 下面的 SQL 在 "Persons" 表创建时在 "P_Id" 列上创建 PRIMARY KEY 约束：

 MySQL：

 
```
 CREATE TABLE Persons

 (

 P_Id int NOT NULL,

 LastName varchar(255) NOT NULL,

 FirstName varchar(255),

 Address varchar(255),

 City varchar(255),

 PRIMARY KEY (P_Id)

 )




```
 SQL Server / Oracle / MS Access：

 
```
 CREATE TABLE Persons

 (

 P_Id int NOT NULL PRIMARY KEY,

 LastName varchar(255) NOT NULL,

 FirstName varchar(255),

 Address varchar(255),

 City varchar(255)

 )




```
 如需命名 PRIMARY KEY 约束，并定义多个列的 PRIMARY KEY 约束，请使用下面的 SQL 语法：

 MySQL / SQL Server / Oracle / MS Access：

 
```
 CREATE TABLE Persons

 (

 P_Id int NOT NULL,

 LastName varchar(255) NOT NULL,

 FirstName varchar(255),

 Address varchar(255),

 City varchar(255),

 CONSTRAINT pk_PersonID PRIMARY KEY (P_Id,LastName)

 )




```
 注释：在上面的实例中，只有一个主键 PRIMARY KEY（pk_PersonID）。然而，pk_PersonID 的值是由两个列（P_Id 和 LastName）组成的。



 

#### ALTER TABLE 时的 SQL PRIMARY KEY 约束

 当表已被创建时，如需在 "P_Id" 列创建 PRIMARY KEY 约束，请使用下面的 SQL：

 MySQL / SQL Server / Oracle / MS Access：

 
```
 ALTER TABLE Persons

 ADD PRIMARY KEY (P_Id)




```
 如需命名 PRIMARY KEY 约束，并定义多个列的 PRIMARY KEY 约束，请使用下面的 SQL 语法：

 MySQL / SQL Server / Oracle / MS Access：

 
```
 ALTER TABLE Persons

 ADD CONSTRAINT pk_PersonID PRIMARY KEY (P_Id,LastName)




```
 注释：如果您使用 ALTER TABLE 语句添加主键，必须把主键列声明为不包含 NULL 值（在表首次创建时）。 

 

#### 撤销 PRIMARY KEY 约束

 如需撤销 PRIMARY KEY 约束，请使用下面的 SQL：

 MySQL：

 
```
 ALTER TABLE Persons

 DROP PRIMARY KEY




```
 SQL Server / Oracle / MS Access：

 
```
 ALTER TABLE Persons

 DROP CONSTRAINT pk_PersonID




```
 




