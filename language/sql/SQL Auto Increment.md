 SQL AUTO INCREMENT 字段 
Auto-increment 会在新记录插入表中时生成一个唯一的数字。

 

#### AUTO INCREMENT 字段

 我们通常希望在每次插入新记录时，自动地创建主键字段的值。

 我们可以在表中创建一个 auto-increment 字段。

 

#### 用于 MySQL 的语法

 下面的 SQL 语句把 "Persons" 表中的 "ID" 列定义为 auto-increment 主键字段：

 
```
 CREATE TABLE Persons

 (

 ID int NOT NULL AUTO_INCREMENT,

 LastName varchar(255) NOT NULL,

 FirstName varchar(255),

 Address varchar(255),

 City varchar(255),

 PRIMARY KEY (ID)

 )




```
 MySQL 使用 AUTO_INCREMENT 关键字来执行 auto-increment 任务。

 默认地，AUTO_INCREMENT 的开始值是 1，每条新记录递增 1。

 要让 AUTO_INCREMENT 序列以其他的值起始，请使用下面的 SQL 语法：

 
```
 ALTER TABLE Persons AUTO_INCREMENT=100




```
 要在 "Persons" 表中插入新记录，我们不必为 "ID" 列规定值（会自动添加一个唯一的值）：

 
```
 INSERT INTO Persons (FirstName,LastName)

 VALUES ('Lars','Monsen')




```
 上面的 SQL 语句会在 "Persons" 表中插入一条新记录。"ID" 列会被赋予一个唯一的值。"FirstName" 列会被设置为 "Lars"，"LastName" 列会被设置为 "Monsen"。

 

#### 用于 SQL Server 的语法

 下面的 SQL 语句把 "Persons" 表中的 "ID" 列定义为 auto-increment 主键字段：

 
```
 CREATE TABLE Persons

 (

 ID int IDENTITY(1,1) PRIMARY KEY,

 LastName varchar(255) NOT NULL,

 FirstName varchar(255),

 Address varchar(255),

 City varchar(255)

 )




```
 MS SQL Server 使用 IDENTITY 关键字来执行 auto-increment 任务。

 在上面的实例中，IDENTITY 的开始值是 1，每条新记录递增 1。

 

#### 提示：

要规定 "ID" 列以 10 起始且递增 5，请把 identity 改为 IDENTITY(10,5)。

 要在 "Persons" 表中插入新记录，我们不必为 "ID" 列规定值（会自动添加一个唯一的值）：

 
```
 INSERT INTO Persons (FirstName,LastName)

 VALUES ('Lars','Monsen')




```
 上面的 SQL 语句会在 "Persons" 表中插入一条新记录。"ID" 列会被赋予一个唯一的值。"FirstName" 列会被设置为 "Lars"，"LastName" 列会被设置为 "Monsen"。

 

#### 用于 Access 的语法

 下面的 SQL 语句把 "Persons" 表中的 "ID" 列定义为 auto-increment 主键字段：

 
```
 CREATE TABLE Persons

 (

 ID Integer PRIMARY KEY AUTOINCREMENT,

 LastName varchar(255) NOT NULL,

 FirstName varchar(255),

 Address varchar(255),

 City varchar(255)

 )




```
 MS Access 使用 AUTOINCREMENT 关键字来执行 auto-increment 任务。

 默认地，AUTOINCREMENT 的开始值是 1，每条新记录递增 1。

 

#### 提示：

要规定 "ID" 列以 10 起始且递增 5，请把 autoincrement 改为 AUTOINCREMENT(10,5)。

 要在 "Persons" 表中插入新记录，我们不必为 "ID" 列规定值（会自动添加一个唯一的值）：

 
```
 INSERT INTO Persons (FirstName,LastName)

 VALUES ('Lars','Monsen')




```
 上面的 SQL 语句会在 "Persons" 表中插入一条新记录。"ID" 列会被赋予一个唯一的值。"FirstName" 列会被设置为 "Lars"，"LastName" 列会被设置为 "Monsen"。

 

#### 语法 for Oracle

 在 Oracle 中，代码稍微复杂一点。

 您必须通过 sequence 对象（该对象生成数字序列）创建 auto-increment 字段。

 请使用下面的 CREATE SEQUENCE 语法：

 
```
 CREATE SEQUENCE seq_person

 MINVALUE 1

 START WITH 1

 INCREMENT BY 1

 CACHE 10




```
 上面的代码创建一个名为 seq_person 的 sequence 对象，它以 1 起始且以 1 递增。该对象缓存 10 个值以提高性能。cache 选项规定了为了提高访问速度要存储多少个序列值。

 要在 "Persons" 表中插入新记录，我们必须使用 nextval 函数（该函数从 seq_person 序列中取回下一个值）：

 
```
 INSERT INTO Persons (ID,FirstName,LastName)

 VALUES (seq_person.nextval,'Lars','Monsen')




```
 上面的 SQL 语句会在 "Persons" 表中插入一条新记录。"ID" 列会被赋值为来自 seq_person 序列的下一个数字。"FirstName"列 会被设置为 "Lars"，"LastName" 列会被设置为 "Monsen"。

 




