 SQL 约束（Constraints）  

#### SQL 约束（Constraints）

 SQL 约束用于规定表中的数据规则。

 如果存在违反约束的数据行为，行为会被约束终止。

 约束可以在创建表时规定（通过 CREATE TABLE 语句），或者在表创建之后规定（通过 ALTER TABLE 语句）。

 
#### SQL CREATE TABLE + CONSTRAINT 语法

 
```
 CREATE TABLE table_name

 (

column_name1 data_type(size) constraint_name,

column_name2 data_type(size) constraint_name,

column_name3 data_type(size) constraint_name,

 ....

 );




```
 在 SQL 中，我们有如下约束：

 
 

#### NOT NULL

 - 指示某列不能存储 NULL 值。
  

#### UNIQUE

 - 保证某列的每行必须有唯一的值。
  

#### PRIMARY KEY

 - NOT NULL 和 UNIQUE 的结合。确保某列（或两个列多个列的结合）有唯一标识，有助于更容易更快速地找到表中的一个特定的记录。
  

#### FOREIGN KEY

 - 保证一个表中的数据匹配另一个表中的值的参照完整性。
  

#### CHECK

 - 保证列中的值符合指定的条件。
  

#### DEFAULT

 - 规定没有给列赋值时的默认值。
 
在下面的章节，我们会详细讲解每一种约束。

 




