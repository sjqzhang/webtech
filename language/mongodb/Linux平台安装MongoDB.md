 
#### Linux平台安装MongoDB

 

#### 下载

 MongoDB提供了linux平台上32位和64位的安装包，你可以在官网下载安装包。

 下载地址：[http://www.mongodb.org/downloads](http://www.w3cschool.cc//www.mongodb.org/downloads)

 ![http://www.w3cschool.cc/wp-content/uploads/2013/10/download-mongodb-linux.png](http://www.w3cschool.cc/wp-content/uploads/2013/10/download-mongodb-linux.png)



#### 安装

 下载完成后，在你安装的目录下解压zip包。

 



#### 创建数据库目录

 MongoDB的数据存储在data目录的db目录下，但是这个目录在安装过程不会自动创建，所以你需要手动创建data目录，并在data目录中创建db目录。

 注意：请将data目录创建于根目录下(/)。

 ![http://www.w3cschool.cc/wp-content/uploads/2013/10/mongodb-installation-Linux.png](http://www.w3cschool.cc/wp-content/uploads/2013/10/mongodb-installation-Linux.png)



#### 命令行中运行 MongoDB 服务

 你可以再命令行中执行mongo安装目录中的bin目录执行mongod命令来启动mongdb服务。

 ![http://www.w3cschool.cc/wp-content/uploads/2013/10/mongodb-run-linux-command.png](http://www.w3cschool.cc/wp-content/uploads/2013/10/mongodb-run-linux-command.png)



#### MongoDB后台管理 Shell

 如果你需要进入MongoDB后台管理，你需要先打开mongodb装目录的下的bin目录，然后执行mongo命令文件。

 MongoDB Shell是MongoDB自带的交互式Javascript shell,用来对MongoDB进行操作和管理的交互式环境。

 当你进入mongoDB后台后，它默认会链接到 test 文档（数据库）：

 ![http://www.w3cschool.cc/wp-content/uploads/2013/10/mongodb-run-linux-command1.png](http://www.w3cschool.cc/wp-content/uploads/2013/10/mongodb-run-linux-command1.png)由于它是一个JavaScript shell，您可以运行一些简单的算术运算:

 ![http://www.w3cschool.cc/wp-content/uploads/2013/10/run-mongo-shell-linux2.png](http://www.w3cschool.cc/wp-content/uploads/2013/10/run-mongo-shell-linux2.png)现在让我们插入一些简单的数据，并对插入的数据进行检索：

 ![http://www.w3cschool.cc/wp-content/uploads/2013/10/mongo-first-find-linux.png](http://www.w3cschool.cc/wp-content/uploads/2013/10/mongo-first-find-linux.png)第一个命令是将数据 8 插入到w3r集合（表）的 z 字段中。

 



#### MongoDb web 用户界面

 在比MongoDB服务的端口多1000的端口上，你可以访问到MondoDB的web用户界面。

 如：如果你的MongoDB运行端口使用默认的27017，你可以在端口号为28017访问web用户界面。

 ![http://www.w3cschool.cc/wp-content/uploads/2013/10/mongodb-web-interface.png](http://www.w3cschool.cc/wp-content/uploads/2013/10/mongodb-web-interface.png)


