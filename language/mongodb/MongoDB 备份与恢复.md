 
#### MongoDB 备份(mongodump)与恢复(mongorerstore)

 

#### MongoDB数据备份

 在Mongodb中我们使用mongodump命令来备份MongoDB数据。该命令可以导出所有数据到指定目录中。

  mongodump命令可以通过参数指定导出的数据量级转存的服务器。

 
#### 语法

 mongodump命令脚本语法如下： 

 
```

>mongodump -h dbhost -d dbname -o dbdirectory

```
 



####  -h：

MongDB所在服务器地址，例如：127.0.0.1，当然也可以指定端口号：127.0.0.1:27017 







####  -d：

需要备份的数据库实例，例如：test 







####  -o：

备份的数据存放位置，例如：c:\data\dump，当然该目录需要提前建立，在备份完成后，系统自动在dump目录下建立一个test目录，这个目录里面存放该数据库实例的备份数据。 






#### 实例

 在本地使用 27017 启动你的mongod服务。打开命令提示符窗口，进入MongoDB安装目录的bin目录输入命令mongodump:

 
```

>mongodump

```
 执行以上命令后，客户端会连接到ip为 127.0.0.1 端口号为 27017 的MongoDB服务上，并备份所有数据到 bin/dump/ 目录中。命令输出结果如下： 

  ![http://www.w3cschool.cc/wp-content/uploads/2013/12/mongodump.png](http://www.w3cschool.cc/wp-content/uploads/2013/12/mongodump.png)

 mongodump 命令可选参数列表如下所示：

 

|语法|描述|实例|
|:--|:--|:--|
|mongodump --host HOST_NAME --port PORT_NUMBER|该命令将备份所有MongoDB数据|mongodump --host w3cschool.cc --port 27017|
|mongodump --dbpath DB_PATH --out BACKUP_DIRECTORY||mongodump --dbpath /data/db/ --out /data/backup/|
|mongodump --collection COLLECTION --db DB_NAME|该命令将备份指定数据库的集合。|mongodump --collection mycol --db test|



#### MongoDB数据恢复

 mongodb使用 mongorerstore 命令来恢复备份的数据。

 
#### 语法

 mongorestore命令脚本语法如下： 

 
```

>mongorestore -h dbhost -d dbname --directoryperdb dbdirectory

```
 



####  -h：

MongoDB所在服务器地址 







####  -d：

需要恢复的数据库实例，例如：test，当然这个名称也可以和备份时候的不一样，比如test2 







####  --directoryperdb：

备份数据所在位置，例如：c:\data\dump\test，这里为什么要多加一个test，而不是备份时候的dump，读者自己查看提示吧！ 







####  --drop：

恢复的时候，先删除当前数据，然后恢复备份的数据。就是说，恢复后，备份后添加修改的数据都会被删除，慎用哦！





接下来我们执行以下命令:

 
```

>mongorestore

```
 执行以上命令输出结果如下：

  ![http://www.w3cschool.cc/wp-content/uploads/2013/12/mongorestore.png](http://www.w3cschool.cc/wp-content/uploads/2013/12/mongorestore.png)

 

