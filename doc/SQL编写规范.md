






#### 编写目的
编写本规范的目的是为了统一数据库命名风格，提高SQL的可读性、可重用性，确保在开发成员或开发团队之间的工作可以顺利交接，不必花很大的力气便能理解已编写的数据库对象；遵守某些规范也能提升性能，提高程序的稳定性。



本规范分成数据库结构设计规范和SQL编写规范，选定数据库产品为Mysql,某些条款和MYSQL特性有关，如果是别的数据库产品仅作参考。



数据库设计规范在新项目设计时要严格遵守，老项目可以参考遵守。SQL编写规范新老项目都要严格遵守。



本规范自生效之日起，对以后新编写的和修改的SQL和数据库对象有约束力。




#### 读者对象
开发工程师， 系统架构师，DBA




#### SQL编写规范

#### 通用规范
[![http://wiki.meizu.com/images/thumb/e/ea/Pencil.png/16px-Pencil.png](http://wiki.meizu.com/images/thumb/e/ea/Pencil.png/16px-Pencil.png)](http://wiki.meizu.com/index.php?title=%E6%96%87%E4%BB%B6:Pencil.png)【规则1-1】 程序里不允许出现DELETE * FROM T_TEST;TRUNCATE TABLE T_TEST;DROP TABLE T_TEST;DROP DATABASE等高危操作




```
 说明：对数据的大批量修改/删除要有DBA参与确定处理方案。对库结构的任何修改必须通过DBA审核。

```

[![http://wiki.meizu.com/images/thumb/e/ea/Pencil.png/16px-Pencil.png](http://wiki.meizu.com/images/thumb/e/ea/Pencil.png/16px-Pencil.png)](http://wiki.meizu.com/index.php?title=%E6%96%87%E4%BB%B6:Pencil.png)【规则1-2】 不允许出现SELECT * FROM




```
 说明：只查询需要的字段，不要出现 * 

```

正例：




```

SELECT COL1，COL2，COL3，COL4 FROM T_OM_TEST WHERE FID=1;

```

反例：




```

SELECT * FROM T_OM_TEST WHERE FID=1;

```

[![http://wiki.meizu.com/images/thumb/e/ea/Pencil.png/16px-Pencil.png](http://wiki.meizu.com/images/thumb/e/ea/Pencil.png/16px-Pencil.png)](http://wiki.meizu.com/index.php?title=%E6%96%87%E4%BB%B6:Pencil.png)【规则1-3】 事务里的表加锁顺序必须一致




```
 说明：不一致的加锁顺序在并发时会出现死锁

```

正例：




```sql

Transaction1:
START TRANSACTION
UPDATE T_TEST1 SET FNUM=FNUM+1 WHERE FNAME LILE 'A%';
UPDATE T_TEST2 SET FNUM=FNUM+1 WHERE FNAME LILE 'B%';
COMMIT

Transaction2：
START TRANSACTION
UPDATE T_TEST1 SET FNUM=FNUM+1 WHERE FNAME ='TEST';
UPDATE T_TEST2 SET FNUM=100 WHERE FNAME LILE 'B%';
COMMIT


```

反例：




```

Transaction1:
START TRANSACTION
UPDATE T_TEST1 SET FNUM=FNUM+1 WHERE FNAME LILE 'A%';
UPDATE T_TEST2 SET FNUM=FNUM+1 WHERE FNAME LILE 'B%';
COMMIT

Transaction2：
START TRANSACTION
UPDATE T_TEST2 SET FNUM=100 WHERE FNAME LILE 'B%';
UPDATE T_TEST1 SET FNUM=FNUM+1 WHERE FNAME ='TEST';
COMMIT


```

[![http://wiki.meizu.com/images/thumb/e/ea/Pencil.png/16px-Pencil.png](http://wiki.meizu.com/images/thumb/e/ea/Pencil.png/16px-Pencil.png)](http://wiki.meizu.com/index.php?title=%E6%96%87%E4%BB%B6:Pencil.png)【规则1-4】 不允许出现INSERT .... SELECT ....




```
 说明：INSERT .... SELECT ....会对SELECT的表记录加X锁，影响并发。

```

[![http://wiki.meizu.com/images/thumb/e/ea/Pencil.png/16px-Pencil.png](http://wiki.meizu.com/images/thumb/e/ea/Pencil.png/16px-Pencil.png)](http://wiki.meizu.com/index.php?title=%E6%96%87%E4%BB%B6:Pencil.png)【规则1-5】 WHRER条件里的数据类型必须和字段数据类型一致



正例：




```

FID INT NOT NULL DEFAULT 0，FREMARK VARCHAR(50) NOT NULL DEFAULT '' COMMENT '备注'

SELECT ... WHERE FID=123987 AND FREMARK ='1163723'

```

反例：




```

FID INT NOT NULL DEFAULT 0，FREMARK VARCHAR(50) NOT NULL DEFAULT '' COMMENT '备注'

SELECT ... WHERE FID='123987' AND FREMARK =1

```

[![http://wiki.meizu.com/images/thumb/e/ea/Pencil.png/16px-Pencil.png](http://wiki.meizu.com/images/thumb/e/ea/Pencil.png/16px-Pencil.png)](http://wiki.meizu.com/index.php?title=%E6%96%87%E4%BB%B6:Pencil.png)【规则1-6】 GROUP BY 去除排序



正例：




```

SELECT FSINGER,COUNT(*) FROM T_OM_SONG GROUP BY FSINGER ORDER BY NULL;

```

反例：




```

SELECT FSINGER,COUNT(*) FROM T_OM_SONG GROUP BY FSINGER ;

```

[![http://wiki.meizu.com/images/thumb/e/ea/Pencil.png/16px-Pencil.png](http://wiki.meizu.com/images/thumb/e/ea/Pencil.png/16px-Pencil.png)](http://wiki.meizu.com/index.php?title=%E6%96%87%E4%BB%B6:Pencil.png)【规则1-7】 不带条件的COUNT(*)统计必须缓存




```
 说明：INNODB表的COUNT(*)需要全表扫描，表越大效率越低，要控制COUNT(*)次数

```

[![http://wiki.meizu.com/images/thumb/e/ea/Pencil.png/16px-Pencil.png](http://wiki.meizu.com/images/thumb/e/ea/Pencil.png/16px-Pencil.png)](http://wiki.meizu.com/index.php?title=%E6%96%87%E4%BB%B6:Pencil.png)【规则1-8】 不允许在IN列表里做查询



反例：




```

SELECT FSINGER  FROM T_OM_SONG WHERE FSINGERID IN(SELECT FID FROM T_SINGER WHERE FSTATE=1);

```

正例：




```

SELECT FSINGER  FROM T_OM_SONG A INNER JOIN T_SINGER B ON A.FSINGERID=B.FID WHERE B.FSTATE=1;

```



[![http://wiki.meizu.com/images/thumb/e/ea/Pencil.png/16px-Pencil.png](http://wiki.meizu.com/images/thumb/e/ea/Pencil.png/16px-Pencil.png)](http://wiki.meizu.com/index.php?title=%E6%96%87%E4%BB%B6:Pencil.png)【规则1-9】 子查询都改成连表查询（JOIN）




```
 说明：示例见规则1-7。MYSQL对子查询的优化很有限。

```

[![http://wiki.meizu.com/images/thumb/e/ea/Pencil.png/16px-Pencil.png](http://wiki.meizu.com/images/thumb/e/ea/Pencil.png/16px-Pencil.png)](http://wiki.meizu.com/index.php?title=%E6%96%87%E4%BB%B6:Pencil.png)【规则1-10】 一次返回给客户端的结果集不超过100行记录。超过部分分页处理



[![http://wiki.meizu.com/images/thumb/e/ea/Pencil.png/16px-Pencil.png](http://wiki.meizu.com/images/thumb/e/ea/Pencil.png/16px-Pencil.png)](http://wiki.meizu.com/index.php?title=%E6%96%87%E4%BB%B6:Pencil.png)【规则1-11】 不要在循环里重复做事务提交
正例：




```

START TRANSACTION
FOR (I=0;I
```

反例：




```

FOR (I=0;I
```

[![http://wiki.meizu.com/images/thumb/e/ea/Pencil.png/16px-Pencil.png](http://wiki.meizu.com/images/thumb/e/ea/Pencil.png/16px-Pencil.png)](http://wiki.meizu.com/index.php?title=%E6%96%87%E4%BB%B6:Pencil.png)【规则1-12】 不允许出现REPLACE INTO ....




```
 说明：代码判断是否记录是否存在，再确定做UPDATE还是INSERT

```

正例：




```

IF (SELECT * FROM ipstats WHERE ip='192.168.0.1') {
   UPDATE ipstats SET value=xxx WHERE ip='192.168.0.1';
} else {
   INSERT INTO ipstats (ip, value) VALUES ('192.168.0.1', xxx);
}


```

反例：




```

REPLACE INTO ipstats (ip, value) VALUES ('192.168.0.1', xxx);

```

[![http://wiki.meizu.com/images/thumb/e/ea/Pencil.png/16px-Pencil.png](http://wiki.meizu.com/images/thumb/e/ea/Pencil.png/16px-Pencil.png)](http://wiki.meizu.com/index.php?title=%E6%96%87%E4%BB%B6:Pencil.png)【规则1-13】 多表连接查询，最大连接表数不允许超过3个




```
 说明：打散大查询。

```


								
			

