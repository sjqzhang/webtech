 MySQL 管理
 

#### 启动及关闭 MySQL 服务器

 首先，我们需要通过以下命令来检查MySQL服务器是否启动：

 
```

ps -ef | grep mysqld

```
 如果MySql已经启动，以上命令将输出mysql进程列表， 如果mysql未启动，你可以使用以下命令来启动mysql服务器:

 
```

root@host# cd /usr/bin
./safe_mysqld &amp;

```
  如果你想关闭目前运行的 MySQL 服务器, 你可以执行以下命令: 

 
```

root@host# cd /usr/bin
./mysqladmin -u root -p shutdown
Enter password: ******

```
 

#### MySQL 用户设置

  如果你需要添加 MySQL 用户，你只需要在 mysql 数据库中的 user 表添加新用户即可。

 以下为添加用户的的实例，用户名为guest，密码为guest123，并授权用户可进行 SELECT, INSERT 和 UPDATE操作权限： 

 
```

root@host# mysql -u root -p
Enter password:*******
mysql> use mysql;
Database changed

mysql> INSERT INTO user 
          (host, user, password, 
           select_priv, insert_priv, update_priv) 
           VALUES ('localhost', 'guest', 
           PASSWORD('guest123'), 'Y', 'Y', 'Y');
Query OK, 1 row affected (0.20 sec)

mysql> FLUSH PRIVILEGES;
Query OK, 1 row affected (0.01 sec)

mysql> SELECT host, user, password FROM user WHERE user = 'guest';
+-----------+---------+------------------+
| host      | user    | password         |
+-----------+---------+------------------+
| localhost | guest | 6f8c114b58f2ce9e |
+-----------+---------+------------------+
1 row in set (0.00 sec)

```
  在添加用户时，请注意使用MySQL提供的 PASSWORD() 函数来对密码进行加密。 你可以在以上实例看到用户密码加密后为： 6f8c114b58f2ce9e. 

 

####  注意：

在注意需要执行 FLUSH PRIVILEGES 语句。 这个命令执行后会重新载入授权表。 如果你不使用该命令，你就无法使用新创建的用户来连接mysql服务器，除非你重启mysql服务器。 

 你可以在创建用户时，为用户指定权限，在对应的权限列中，在插入语句中设置为 'Y' 即可，用户权限列表如下：

 
Select_priv
 Insert_priv
 Update_priv
 Delete_priv
 Create_priv
 Drop_priv
 Reload_priv
 Shutdown_priv
 Process_priv
 File_priv
 Grant_priv
 References_priv
 Index_priv
 Alter_priv
 
 另外一种添加用户的方法为通过SQL的 GRANT 命令，你下命令会给指定数据库TUTORIALS添加用户 zara ，密码为 zara123 。

 
```

root@host# mysql -u root -p password;
Enter password:*******
mysql> use mysql;
Database changed

mysql> GRANT SELECT,INSERT,UPDATE,DELETE,CREATE,DROP
    -> ON TUTORIALS.*
    -> TO 'zara'@'localhost'
    -> IDENTIFIED BY 'zara123';

```
  以上命令会在mysql数据库中的user表创建一条用户信息记录。 

  

#### 注意:

 MySQL 的SQL语句以分号 (;) 作为结束标识。 

 

#### /etc/my.cnf 文件配置

 一般情况下，你不需要修改该配置文件，该文件默认配置如下：

 
```

[mysqld]
datadir=/var/lib/mysql
socket=/var/lib/mysql/mysql.sock

[mysql.server]
user=mysql
basedir=/var/lib

[safe_mysqld]
err-log=/var/log/mysqld.log
pid-file=/var/run/mysqld/mysqld.pid

```
 在配置文件中，你可以指定不同的错误日志文件存放的目录，一般你不需要改动这些配置。

 

#### 管理MySQL的命令

 以下列出了使用Mysql数据库过程中常用的命令：

 



#### USE 数据库名

 :选择要操作的Mysql数据库，使用该命令后所有Mysql命令都只针对该数据库。
 


#### SHOW DATABASES: 

列出 MySQL 数据库管理系统的数据库列表。
 


#### SHOW TABLES:

 显示指定数据库的所有表，使用该命令前需要使用 use 命令来选择要操作的数据库。
 


#### SHOW COLUMNS FROM 数据表:

 显示数据表的属性，属性类型，主键信息 ，是否为 NULL，默认值等其他信息。
 


#### SHOW INDEX FROM 数据表:

 显示数据表的详细索引信息，包括PRIMARY KEY（主键）。
 


#### SHOW TABLE STATUS LIKE 数据表\G:

 该命令将输出Mysql数据库管理系统的性能及统计信息。
 


