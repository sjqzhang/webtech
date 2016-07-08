 MongoDB - 连接
 

#### 描述

 在本教程我们将讨论MongoDB的不同连接方式。

 

#### 启动 MongoDB服务

 在前面的教程中，我们已经讨论[了如何启动MongoDB服](http://www.w3cschool.cc/mongodb/mongodb-window-install.html)务，你只需要在MongoDB安装目录的bin目录下执行'mongod'即可。

 执行启动操作后，mongodb在输出一些必要信息后不会输出任何信息，之后就等待连接的建立，当连接被建立后，就会开始打印日志信息。

 你可以使用MongoDB shell 来连接 MongoDB 服务器。你也可以使用PHP来连接mongodb。本教程我们会使用 MongoDB shell来连接Mongodb服务，之后的章节我们将会介绍如何通过php 来连接MongoDB服务。

 默认情况下，MongoDB的启动端口为27017。比MongoDB启动端口大1000的端口为MongoDB的web用户界面，你可以再浏览器中输入http://localhost:28017 来访问MongoDB的web用户界面。

 



#### 通过shell连接MongoDB服务

 你可以通过执行以下命令来连接MongoDB的服务。

 

#### 注意：

localhost为主机名，这个选项是必须的：

 
```
 mongodb://localhost

 


```
 当你执行以上命令时，你可以看到以下输出结果：

 ![http://www.w3cschool.cc/wp-content/uploads/2013/10/mongodb-connect.png](http://www.w3cschool.cc/wp-content/uploads/2013/10/mongodb-connect.png)如果你检查从哪里连接到MongoDB的服务器，您可以看到如下信息：

 ![http://www.w3cschool.cc/wp-content/uploads/2013/10/mongodb-connected.png](http://www.w3cschool.cc/wp-content/uploads/2013/10/mongodb-connected.png) 最后一行（标记处），打印了你成功连接上MongoDB服务的信息。 



#### MongoDB连接命令格式

 使用用户名和密码连接到MongoDB服务器，你必须使用 'username:password@hostname/dbname' 格式，'username'为用户名，'password' 为密码。

 使用用户名和密码连接登陆到默认数据库： 



```
 mongodb://mongo_admin:AxB6_w3r@localhost/

 


```
 以上命令中，用户 mongo_admin使用密码AxB6_w3r连接到本地的MongoDB服务上。输出结果如下所示： ![http://www.w3cschool.cc/wp-content/uploads/2013/10/mongodb-connect-with-username-and-password-to-default-database.png](http://www.w3cschool.cc/wp-content/uploads/2013/10/mongodb-connect-with-username-and-password-to-default-database.png)


使用用户名和密码连接登陆到指定数据库：

 连接到指定数据库的格式如下：

 
```
 mongodb://mongo_admin:AxB6_w3r@localhost/w3r

 


```
 



#### 更多连接实例

 连接本地数据库服务器，端口是默认的。

 
```
 mongodb://localhost

 


```
 使用用户名fred，密码foobar登录localhost的admin数据库。

 
```
 mongodb://fred:foobar@localhost

 


```
 使用用户名fred，密码foobar登录localhost的baz数据库。

 
```
 mongodb://fred:foobar@localhost/baz

 


```
 连接 replica pair, 服务器1为example1.com服务器2为example2。

 
```
 mongodb://example1.com:27017,example2.com:27017

 


```
 连接 replica set 三台服务器 (端口 27017, 27018, 和27019):

 
```
 mongodb://localhost,localhost:27018,localhost:27019

 


```
 连接 replica set 三台服务器, 写入操作应用在主服务器 并且分布查询到从服务器。

 
```
 mongodb://host1,host2,host3/?slaveOk=true

 


```
 直接连接第一个服务器，无论是replica set一部分或者主服务器或者从服务器。

 
```
 mongodb://host1,host2,host3/?connect=direct;slaveOk=true

 


```
 当你的连接服务器有优先级，还需要列出所有服务器，你可以使用上述连接方式。

 安全模式连接到localhost:

 
```
 mongodb://localhost/?safe=true

 


```
 以安全模式连接到replica set，并且等待至少两个复制服务器成功写入，超时时间设置为2秒。

 
```
 mongodb://host1,host2,host3/?safe=true;w=2;wtimeoutMS=2000

 


```
 



#### 参数选项说明

 标准格式：

 
```
 mongodb://[username:password@]host1[:port1][,host2[:port2],...[,hostN[:portN]]][/[database][?options]]

 


```
 标准的连接格式包含了多个选项(options)，如下所示： 

|选项|描述|
|:--|:--|
|replicaSet=name|验证replica set的名称。 Impliesconnect=replicaSet.|
|slaveOk=true|false| true:在connect=direct模式下，驱动会连接第一台机器，即使这台服务器不是主。在connect=replicaSet模式下，驱动会发送所有的写请求到主并且把读取操作分布在其他从服务器。 false: 在 connect=direct模式下，驱动会自动找寻主服务器. 在connect=replicaSet 模式下，驱动仅仅连接主服务器，并且所有的读写命令都连接到主服务器。 |
|safe=true|false| true: 在执行更新操作之后，驱动都会发送getLastError命令来确保更新成功。(还要参考 wtimeoutMS).  false: 在每次更新之后，驱动不会发送getLastError来确保更新成功。|
|w=n|驱动添加 { w : n } 到getLastError命令. 应用于safe=true。|
|wtimeoutMS=ms|驱动添加 { wtimeout : ms } 到 getlasterror 命令. 应用于 safe=true.|
|fsync=true|false| true: 驱动添加 { fsync : true } 到 getlasterror 命令.应用于 safe=true. false: 驱动不会添加到getLastError命令中。 |
|journal=true|false|如果设置wie true, 同步到 journal (在提交到数据库前写入到实体中). 应用于 safe=true|
|connectTimeoutMS=ms|可以打开连接的时间。|
|socketTimeoutMS=ms|发送和接受sockets的时间。|



