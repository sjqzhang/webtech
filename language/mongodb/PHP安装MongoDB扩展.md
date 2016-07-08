 PHP安装MongoDB扩展驱动
 



#### 描述

 本教程将向大家介绍如何在Linux、window、Mac平台上安装MongoDB扩展。

 



#### Linux上安装 MongoDB PHP扩展

 
#### 在终端上安装

 你可以在linux中执行以下命令来安装MongoDB 的 PHP 扩展驱动

 
```
 $ sudo pecl install mongo

 


```
 使用php的pecl安装命令必须保证网络连接可用以及root权限。

 

#### 安装手册

 如果你想通过源码来编译扩展驱动。你必须手动编译源码包，这样做的好是最新修正的bug包含在源码包中。

 你可以在Github上下载MongoDB PHP驱动包。访问github网站然后搜索"mongo php driver"(下载地址：[https://github.com/mongodb/mongo-php-driver](https://github.com/mongodb/mongo-php-driver))，下载该源码包，然后执行以下命令：

 
```
 $ tar zxvf mongodb-mongodb-php-driver-<commit_id>.tar.gz

 $ cd mongodb-mongodb-php-driver-<commit_id>

 $ phpize

 $ ./configure

 $ sudo make install




 


```
 如果你的php是自己编译的，则安装方法如下(假设是编译在/usr/local/php目录中)：

 
```
 $ tar zxvf mongodb-mongodb-php-driver-<commit_id>.tar.gz

 $ cd mongodb-mongodb-php-driver-<commit_id>

 $ /usr/local/php/bin/phpize

 $ ./configure --with-php-config=/usr/local/php/bin/php-config

 $ sudo make install

 


```
 执行以上命令后，你需要修改php.ini文件，在php.ini文件中添加mongo配置，配置如下：

 
```
 extension=mongo.so

 


```
 

#### 注意：

你需要指明 extension_dir 配置项的路径。

 



#### window上安装 MongoDB PHP扩展

 Github上已经提供了用于window平台的预编译php mongodb驱动二进制包(下载地址： [https://s3.amazonaws.com/drivers.mongodb.org/php/index.html](https://s3.amazonaws.com/drivers.mongodb.org/php/index.html))，你可以下载与你php对应的版本，但是你需要注意以下几点问题：

 
VC6 是运行于 Apache 服务器
 'Thread safe'（线程安全）是运行在Apache上以模块的PHP上，如果你以CGI的模式运行PHP，请选择非线程安全模式（' non-thread safe'）。
 VC9是运行于 IIS 服务器上。
 下载完你需要的二进制包后，解压压缩包，将'php_mongo.dll'文件添加到你的PHP扩展目录中（ext）。ext目录通常在PHP安装目录下的ext目录。
 
打开php配置文件 php.ini 添加以下配置：

 
```
 extension=php_mongo.dll

 


```
 重启服务器。

 通过浏览器访问phpinfo，如果安装成功，就会看到类型以下的信息：

 ![http://www.w3cschool.cc/wp-content/uploads/2013/10/mongo-php-driver-installed-windows.png](http://www.w3cschool.cc/wp-content/uploads/2013/10/mongo-php-driver-installed-windows.png)



#### MAC中安装MongoDB PHP扩展驱动

 你可以使用'autoconf'安装MongoDB PHP扩展驱动。

 你可以使用'Xcode'安装MongoDB PHP扩展驱动。

 如果你使用 XAMPP，你可以使用以下命令安装MongoDB PHP扩展驱动：

 
```
 sudo /Applications/XAMPP/xamppfiles/bin/pecl install mongo

 


```
 如果以上命令在XMPP或者MAMP中不起作用，你需要在Github上下载兼容的预编译包。

 然后添加 'extension=mongo.so'配置到你的php.ini文件中。

 

