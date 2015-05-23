 SQL NOT NULL 约束 
在默认的情况下，表的列接受 NULL 值。

 

#### SQL NOT NULL 约束

 NOT NULL 约束强制列不接受 NULL 值。

 NOT NULL 约束强制字段始终包含值。这意味着，如果不向字段添加值，就无法插入新记录或者更新记录。

 下面的 SQL 强制 "P_Id" 列和 "LastName" 列不接受 NULL 值：

 
```
 CREATE TABLE Persons

 (

 P_Id int NOT NULL,

 LastName varchar(255) NOT NULL,

 FirstName varchar(255),

 Address varchar(255),

 City varchar(255)

 )




```
 




