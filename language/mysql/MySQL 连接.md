 
#### MySQL 连接

 

#### 使用mysql二进制方式连接

  您可以使用MySQL二进制方式进入到mysql命令提示符下来连接MySQL数据库。 

 
#### 实例

  以下是从命令行中连接mysql服务器的简单实例：

 
```

[root@host]# mysql -u root -p
Enter password:******

```

 在登录成功后会出现 mysql> 命令提示窗口，你可以在上面执行任何 SQL 语句。


以上命令执行后，登录成功输出结果如下:

 
```

Welcome to the MySQL monitor.  Commands end with ; or \g.
Your MySQL connection id is 2854760 to server version: 5.0.9

Type 'help;' or '\h' for help. Type '\c' to clear the buffer.

```

 在以上实例中，我们使用了root用户登录到mysql服务器，当然你也可以使用其他mysql用户登录。


 如果用户权限足够，任何用户都可以在mysql的命令提示窗口中进行SQL操作。

  退出 mysql> 命令提示窗口可以使用 exit 命令，如下所示：

 
```

mysql> exit
Bye

```
 

#### 使用 PHP 脚本连接 MySQL

  PHP 提供了 mysql_connect() 函数来连接数据库。

  该函数有5个参数，在成功链接到MySQL后返回连接标识，失败返回 FALSE 。 

 
#### 语法

 
```

connection mysql_connect(server,user,passwd,new_link,client_flag);

```
 

#### 参数说明：



 

|参数|描述|
|:--|:--|
|server| 可选。规定要连接的服务器。 可以包括端口号，例如 "hostname:port"，或者到本地套接字的路径，例如对于 localhost 的 ":/path/to/socket"。 如果 PHP 指令 mysql.default_host 未定义（默认情况），则默认值是 'localhost:3306'。 |
|user|可选。用户名。默认值是服务器进程所有者的用户名。|
|passwd|可选。密码。默认值是空密码。|
|new_link|可选。如果用同样的参数第二次调用 mysql_connect()，将不会建立新连接，而将返回已经打开的连接标识。参数 new_link 改变此行为并使 mysql_connect() 总是打开新的连接，甚至当 mysql_connect() 曾在前面被用同样的参数调用过。|
|client_flag| 可选。client_flags 参数可以是以下常量的组合： MYSQL_CLIENT_SSL - 使用 SSL 加密 MYSQL_CLIENT_COMPRESS - 使用压缩协议 MYSQL_CLIENT_IGNORE_SPACE - 允许函数名后的间隔 MYSQL_CLIENT_INTERACTIVE - 允许关闭连接之前的交互超时非活动时间 |

 你可以使用PHP的 mysql_close() 函数来断开与MySQL数据库的链接。


 该函数只有一个参数为mysql_connect()函数创建连接成功后返回的 MySQL 连接标识符。

 
#### 语法

 
```

bool mysql_close ( resource $link_identifier );

```
  本函数关闭指定的连接标识所关联的到 MySQL 服务器的非持久连接。如果没有指定 link_identifier，则关闭上一个打开的连接。


 

#### 提示：

通常不需要使用 mysql_close()，因为已打开的非持久连接会在脚本执行完毕后自动关闭。


 

#### 注释：

mysql_close() 不会关闭由 mysql_pconnect() 建立的持久连接。

 
#### 实例

  你可以尝试以下实例来连接到你的 MySQL 服务器:

 
```

<html>
<head>
<title>Connecting MySQL Server</title>
</head>
<body>
<?php
   $dbhost = 'localhost:3306';  //mysql服务器主机地址
   $dbuser = 'guest';      //mysql用户名
   $dbpass = 'guest123';//mysql用户名密码
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   if(! $conn )
   {
     die('Could not connect: ' . mysql_error());
   }
   echo 'Connected successfully';
   mysql_close($conn);
?>
</body>
</html>

```
 

