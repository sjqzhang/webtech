


# pt-query-digest分析Mysql慢查询，Query-Digest-UI生成报表




下载地址：

http://www.percona.com/software

https://github.com/kormoc/Query-Digest-UI




## 1、Percona Toolkit

Percona
Toolkit 是一组高级的命令行工具，用来管理 MySQL 和系统任务，主要包括：

1、验证主节点和复制数据的一致性

2、有效的对记录行进行归档

3、找出重复的索引

4、总结 MySQL 服务器

5、从日志和 tcpdump 中分析查询

6、问题发生时收集重要的系统信息

PT安装：

```
wget http://www.percona.com/redir/downloads/percona-toolkit/LATEST/percona-toolkit-2.1.5-1.noarch.rpm
yum install -y  percona-toolkit-2.1.5-1.noarch.rpm
```
工具安装目录在：/usr/bin

或者tar.gz包安装
```
wget http://www.percona.com/redir/downloads/percona-toolkit/LATEST/percona-toolkit-2.1.5.tar.gz
tar percona-toolkit-2.1.5.tar.gz
cd percona-toolkit-2.1.5
perl Makefile.PL
make
make install
```
工具安装目录在：/usr/local/bin

可以使用pt-query-digest处理MySQL的慢查询日志和存储历史审查趋势分析到query_review_history表值。

详细导入可以查看官方帮助文档和表属性说明：

http://www.mysqlperformanceblog.com/2012/08/28/hidden-columns-of-query_review_history/

http://code.google.com/p/maatkit/wiki/EventAttributes

 

例如：
```
pt-query-digest --review h=localhost,D=percona,t=query_review,p=pass,u=percona \
                --review-history h=localhost,D=percona,t=query_review_history,p=pass,u=percona \
                --filter=" \$event->{Bytes} = length(\$event->{arg}) and \$event->{hostname}=\"$HOSTNAME\"" mysqld-slow-queries.log
 
```
$ HOSTNAME反映当前机器的主机名。更换$ HOSTNAME必要的主机名，如果你从另一台服务器上复制的慢查询日志。有主机名设置过滤查询数据库中聚合来自多个服务器的查询速度慢的可能是有用的。

例子：

```
pt-query-digest --review  h=localhost,D=query,t=query_review,p=querypass,u=query --review-history h=localhost,D=query,t=query_review_history,p=querypass,u=query   --filter=" \$event->{Bytes} = length(\$event->{arg}) and \$event->{hostname}=\"$HOSTNAME\""  /tmp/slow_query.txt
```

 

查看表结果：



 

## 2、Query-Digest-UI

其实，这是一个非常简单和直接的工具，浏览和统计Mysql慢查询，基于AJAX的Web界面。

配置Query-Digest-UI：

下载：

wget https://nodeload.github.com/kormoc/Query-Digest-UI/zip/master

unzip Query-Digest-UI-master.zip

 

在LAMP或是LNMP环境下运行，需要注意的是php必须支持pdo_mysql模块。

修改配置文件数据库信息：

cp config.php.example  config.php

```php 
$reviewhost = array(
// Replace hostname and database in this setting
// use host=hostname;port=portnum if not the default port
    'dsn'           => 'mysql:host=192.168.15.178;port=3306;dbname=query',
    'user'          => 'query',
    'password'      => 'querypass',
// See http://www.percona.com/doc/percona-toolkit/2.1/pt-query-digest.html#cmdoption-pt-query-digest--review
    'review_table'  => 'query_review',
// This table is optional. You don't need it, but you lose detailed stats
// Set to a blank string to disable
// See http://www.percona.com/doc/percona-toolkit/2.1/pt-query-digest.html#cmdoption-pt-query-digest--review-history
    'history_table' => 'query_review_history',
);
```

效果如图：



 

另外mk-query-digest和Box Anemometer工具也可以实现，如果有兴趣大家可以测试下。

 


