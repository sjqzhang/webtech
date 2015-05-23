 MySQL 安装
 所有平台的Mysql下载地址为： [MySQL 下载](http://www.w3cschool.cc//www.mysql.com/downloads). 挑选你需要的 MySQL Community Server 版本及对应的平台。

 

#### Linux/UNIX上安装Mysql


 Linux平台上推荐使用RPM包来安装Mysql,MySQL AB提供了以下RPM包的下载地址：

 
 

#### MySQL

 - MySQL服务器。你需要该选项，除非你只想连接运行在另一台机器上的MySQL服务器。

 

#### MySQL-client

 - MySQL 客户端程序，用于连接并操作Mysql服务器。

 

#### MySQL-devel

 - 库和包含文件，如果你想要编译其它MySQL客户端，例如Perl模块，则需要安装该RPM包。

 

#### MySQL-shared

 - 该软件包包含某些语言和应用程序需要动态装载的共享库(libmysqlclient.so*)，使用MySQL。

 

#### MySQL-bench

 - MySQL数据库服务器的基准和性能测试工具。
 
 以下安装Mysql RMP的实例是在SuSE Linux系统上进行，当然该安装步骤也适合应用于其他支持RPM的Linux系统，如:Centos。


 安装步骤如下：


 使用root用户登陆你的Linux系统。


 下载Mysql RPM包，下载地址为：[MySQL 下载](http://www.w3cschool.cc//www.mysql.com/downloads)。


 通过以下命令执行Mysql安装，rpm包为你下载的rpm包：

 
```

[root@host]# rpm -i MySQL-5.0.9-0.i386.rpm

```

 以上安装mysql服务器的过程会创建mysql用户，并创建一个mysql配置文件my.cnf。


 你可以在/usr/bin和/usr/sbin中找到所有与MySQL相关的二进制文件。所有数据表和数据库将在/var/lib/mysql目录中创建。

 以下是一些mysql可选包的安装过程，你可以根据自己的需要来安装：

 
```

[root@host]# rpm -i MySQL-client-5.0.9-0.i386.rpm
[root@host]# rpm -i MySQL-devel-5.0.9-0.i386.rpm
[root@host]# rpm -i MySQL-shared-5.0.9-0.i386.rpm
[root@host]# rpm -i MySQL-bench-5.0.9-0.i386.rpm

```
 

#### Window上安装Mysql


 Window上安装Mysql相对来说会较为简单，你只需要载 [MySQL 下载](http://www.w3cschool.cc//www.mysql.com/downloads)中下载window版本的mysql安装包，并解压安装包。

 双击 setup.exe 文件，接下来你只需要安装默认的配置点击"next"即可，默认情况下安装信息会在C:\mysql目录中。

  接下来你可以通过"开始" =》在搜索框中输入 " cmd" 命令 =》 在命令提示符上切换到 C:\mysql\bin 目录，并输入一下命令：

 
```

mysqld.exe --console

```

 如果安装成功以上命令将输出一些mysql启动及InnoDB信息。

 

#### 验证Mysql安装


 在成功安装Mysql后，一些基础表会表初始化，在服务器启动后，你可以通过简单的测试来验证Mysql是否工作正常。


 使用 mysqladmin 工具来获取服务器状态：

  使用 mysqladmin 命令俩检查服务器的版本,在linux上该二进制文件位于 /usr/bin on linux ，在window上该二进制文件位于C:\mysql\bin 。

 
```

[root@host]# mysqladmin --version

```

 linux上该命令将输出以下结果，该结果基于你的系统信息：

 
```

mysqladmin  Ver 8.23 Distrib 5.0.9-0, for redhat-linux-gnu on i386

```

 如果以上命令执行后未输入任何信息，说明你的Mysql未安装成功。 

 

#### 使用 MySQL Client(Mysql客户端) 执行简单的SQL命令


 你可以在 MySQL Client(Mysql客户端) 使用 mysql 命令连接到Mysql服务器上，默认情况下Mysql服务器的密码为空，所以本实例不需要输入密码。

 命令如下：

 
```

[root@host]# mysql

```

 以上命令执行后会输出 mysql>提示符，这说明你已经成功连接到Mysql服务器上，你可以在 mysql> 提示符执行SQL命令：

 
```

mysql> SHOW DATABASES;
+----------+
| Database |
+----------+
| mysql    |
| test     |
+----------+
2 rows in set (0.13 sec)

```
 

#### Mysql安装后需要做的


 Mysql安装成功后，默认的root用户密码为空，你可以使用以下命令来创建root用户的密码：

 
```

[root@host]# mysqladmin -u root password "new_password";

```
  现在你可以通过以下命令来连接到Mysql服务器：

 
```

[root@host]# mysql -u root -p
Enter password:*******

```



####  注意：

在输入密码时，密码是不会显示了，你正确输入即可。

 

#### Linux系统启动时启动 MySQL

  如果你需要在Linux系统启动时启动 MySQL 服务器，你需要在 /etc/rc.local 文件中添加以下命令：

 
```

/etc/init.d/mysqld start

```

 同样，你需要将 mysqld 二进制文件添加到 /etc/init.d/ 目录中。

 

