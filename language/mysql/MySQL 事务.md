 
#### MySQL 事务

  MySQL 事务主要用于处理操作量大，复杂度高的数据。比如说，在人员管理系统中，你删除一个人员，你即需要删除人员的基本资料，也要删除和该人员相关的信息，如信箱，文章等等，这样，这些数据库操作语句就构成一个事务！ 

 
 在MySQL中只有使用了Innodb数据库引擎的数据库或表才支持事务

 事务处理可以用来维护数据库的完整性，保证成批的SQL语句要么全部执行，要么全部不执行

 事务用来管理insert,update,delete语句


 一般来说，事务是必须满足4个条件（ACID）： Atomicity（原子性）、Consistency（稳定性）、Isolation（隔离性）、Durability（可靠性） 

 
1、

#### 事务的原子性：

一组事务，要么成功；要么撤回。
 2、

#### 稳定性

 ： 有非法数据（外键约束之类），事务撤回。
 3、

#### 隔离性：

事务独立运行。一个事务处理后的结果，影响了其他事务，那么其他事务会撤回。事务的100%隔离，需要牺牲速度。
 4、

#### 可靠性：

软、硬件崩溃后，InnoDB数据表驱动会利用日志文件重构修改。可靠性和高速度不可兼得， innodb_flush_log_at_trx_commit选项 决定什么时候吧事务保存到日志里。
 

#### 在Mysql控制台使用事务来操作

  1，开始一个事务

 
```

start transaction

```
  2, 做保存点

 
```

save point 保存点名称

```
  3, 操作 

  4，可以回滚，可以提交，没有问题，就提交，有问题就回滚。 

 
#### PHP中使用事务实例

 
```

<?php
$handler=mysql_connect("localhost","root","password");
mysql_select_db("task");
mysql_query("SET AUTOCOMMIT=0");//设置为不自动提交，因为MYSQL默认立即执行
mysql_query("BEGIN");//开始事务定义
if(!mysql_query("insert into trans (id) values('2')"))
{
mysql_query("ROOLBACK");//判断当执行失败时回滚
}
if(!mysql_query("insert into trans (id) values('4')"))
{
mysql_query("ROOLBACK");//判断执行失败回滚
}
mysql_query("COMMIT");//执行事务
mysql_close($handler);
?>

```
 

