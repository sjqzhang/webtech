

GRANT Select ON *.* TO reader@192.168.1.123  IDENTIFIED BY "123456"


GRANT  可以立刻生效


在mysql 5.6下似乎要重启mysql才生效







创建了一个账户名为“reader" , 密码”123456“ 只可以从192.168.1.123发起访问   读取数据库的账号







reader@"%"    则表示所有的ip都可以访问









参考：


[http://linux.chinaitlab.com/MYSQL/919856.html](http://linux.chinaitlab.com/MYSQL/919856.html)




[http://linux.chinaitlab.com/MYSQL/919856_2.html](http://linux.chinaitlab.com/MYSQL/919856_2.html)








一．权限查看



　　mysql> show grants for [‘root’@'localhost’](http://blog.csdn.net/norsd/article/details/mailto:%E2%80%98root%E2%80%99@) ;



　　+——————————————————————————-+



　　| Grants for [root@localhost](http://blog.csdn.net/norsd/article/details/mailto:root@localhost) |



　　+——————————————————————————-+



　　| GRANT ALL PRIVILEGES ON *.* TO [‘root’@'localhost’](http://blog.csdn.net/norsd/article/details/mailto:%E2%80%98root%E2%80%99@) WITH GRANT
 OPTION |



　　+——————————————————————————-+



　　二．权限设置



　　1.创建账号或者赋予权限



　　GRANT privileges (columns) ON what TO user IDENTIFIED BY "password" WITH GRANT OPTION



　　GRANT语句的语法看上去像这样：



　　GRANT privileges (columns) ON what TO user IDENTIFIED BY "password" WITH GRANT OPTION



　　要使用该语句，你需要填写下列部分：



　　privileges 授予用户的权限，下表列出可用于GRANT语句的权限指定符：



　　权限指定符 权限允许的操作



　　Alter 　　　　　　修改表和索引



　　Create 　　　　 创建数据库和表



　　Delete 　　　　 删除表中已有的记录



　　Drop 　　 抛弃（删除）数据库和表



　　INDEX 　　　　 创建或抛弃索引



　　Insert 　　　　 向表中插入新行



　　REFERENCE 　　未用



　　Select　　　　 检索表中的记录



　　Update 　　　　 修改现存表记录



　　FILE 　　　　　　读或写[服务器](http://server.chinaitlab.com/)上的文件



　　PROCESS 　　 查看[服务器](http://server.chinaitlab.com/)中执行的线程信息或杀死线程



　　RELOAD 　　　　重载授权表或清空日志、主机缓存或表缓存。



　　SHUTDOWN　　 关闭服务器



　　ALL 　　　　　　所有；ALL PRIVILEGES同义词



　　USAGE 　　　　特殊的“无权限”权限



　　上表显示在第一组的权限指定符适用于数据库、表和列，第二组数管理权限。一般，这些被相对严格地授权，因为它们允许用户影响服务器的操作。第三组权限特殊，ALL意味着“所有权限”，UASGE意味着无权限，即创建用户，但不授予权限。



　　columns 　　权限运用的列，它是可选的，并且你只能设置列特定的权限。如果命令有多于一个列，应该用逗号分开它们。



　　what 　　权限运用的级别。权限可以是全局的（适用于所有数据库和所有表）、特定数据库（适用于一个数据库中的所有表）或特定表的。可以通过指定一个columns字句是权限是列特定的。



　　user 　 　权限授予的用户，它由一个用户名和主机名组成。在MySQL中，你不仅指定谁能连接，还有从哪里连接。这允许你让两个同名用户从不同地方连接。 MySQL让你区分他们，并彼此独立地赋予权限。MySQL中的一个用户名就是你连接服务器时指定的用户名，该名字不必与你的Unix登录名或 [Windows](http://windows.chinaitlab.com/)名联系起来。缺省地，如果你不明确指定一个名字，客户程序将使用你的登录名作为MySQL用户名。这只是一个约定。你可以在授权表中将该名
 字改为nobody，然后以nobody连接执行需要超级用户权限的操作。



　　password 　 　赋予用户的口令，它是可选的。如果你对新用户没有指定IDENTIFIED BY子句，该用户不赋给口令（不[安全](http://security.chinaitlab.com/)）。对现有用户，任何你指定的口令将代替老口令。如果你不指定口令，老口令保持不变，当你用IDENTIFIED
 BY时，口令字符串用改用口令的字面含义，GRANT将为你编码口令，不要你用SET PASSWORD 那样使用password()函数。



　　WITH GRANT OPTION子句是可选的。如果你包含它，用户可以授予权限通过GRANT语句授权给其它用户。你可以用该子句给与其它用户授权的能力。



　　注意：用户名、口令、数据库和表名在授权表记录中是大小写敏感的，主机名和列名不是。



　　一般地，你可以通过询问几个简单的问题来识别GRANT语句的种类：



　　谁能连接，从那儿连接？



　　用户应该有什么级别的权限，他们适用于什么？



　　用户应该允许管理权限吗？



　　下面就讨论一些例子。



　　1.1 谁能连接，从那儿连接？



　　你可以允许一个用户从特定的或一系列主机连接。有一个极端，如果你知道降职从一个主机连接，你可以将权限局限于单个主机：



　　GRANT ALL ON samp_db.* TO [boris@localhost](http://blog.csdn.net/norsd/article/details/mailto:boris@localhost) IDENTIFIED BY "ruby"



　　GRANT ALL ON samp_db.* TO [fred@res.mars.com](http://blog.csdn.net/norsd/article/details/mailto:fred@res.mars.com) IDENTIFIED BY "quartz"



　　(samp_db.*意思是“samp_db数据库的所有表)另一个极端是，你可能有一个经常旅行并需要能从世界各地的主机连接的用户max。在这种情况下，你可以允许他无论从哪里连接：



　　GRANT ALL ON samp_db.* TO [max@%](http://blog.csdn.net/norsd/article/details/mailto:max@%) IDENTIFIED BY "diamond"



　　“%”字符起通配符作用，与LIKE模式匹配的含义相同。在上述语句中，它意味着“任何主机”。所以max和[max@%](http://blog.csdn.net/norsd/article/details/mailto:max@%)等价。这是建立用户最简单的方法，但也是最不[安全](http://security.chinaitlab.com/)的。



　　其中，你可以允许一个用户从一个受限的主机集合访问。例如，要允许mary从snake.net域的任何主机连接，用一个%.snake.net主机指定符：



　　GRANT ALL ON samp_db.* TO [mary@.snake.net](http://blog.csdn.net/norsd/article/details/mailto:mary@.snake.net) IDENTIFIED BY "quartz";



　　如果你喜欢，用户标识符的主机部分可以用IP地址而不是一个主机名来给定。你可以指定一个IP地址或一个包含模式字符的地址，而且，从MySQL 3.23，你还可以指定具有指出用于网络号的位数的网络掩码的IP号：



　　GRANT ALL ON samp_db.* TO [boris@192.168.128.3](http://blog.csdn.net/norsd/article/details/mailto:boris@192.168.128.3) IDENTIFIED BY "ruby"



　　GRANT ALL ON samp_db.* TO [fred@192.168.128.%](http://blog.csdn.net/norsd/article/details/mailto:fred@192.168.128.%) IDENTIFIED BY "quartz"



　　GRANT ALL ON samp_db.* TO [rex@192.168.128.0/17](http://blog.csdn.net/norsd/article/details/mailto:rex@192.168.128.0/17) IDENTIFIED BY "ruby"



　　第一个例子指出用户能从其连接的特定主机，第二个指定对于C类子网192.168.128的IP模式，而第三条语句中，192.168.128.0/17指定一个17位网络号并匹配具有192.168.128头17位的IP地址。



　　1.2 用户应该有什么级别的权限和它们应该适用于什么？



你可以授权不同级别的权限，全局权限是最强大的，因为它们适用于任何数据库。要使ethel成为可做任何事情的超级用户，包括能授权给其它用户，发出下列语句：



　　GRANT ALL ON *.* TO [ethel@localhost](http://blog.csdn.net/norsd/article/details/mailto:ethel@localhost) IDENTIFIED BY "coffee" WITH GRANT OPTION



　　ON子句中的*.*意味着“所有数据库、所有表”。从安全考虑，我们指定ethel只能从本地连接。限制一个超级用户可以连接的主机通常是明智的，因为它限制了试图破解口令的主机。



　　有些权限（FILE、PROCESS、RELOAD和SHUTDOWN）是管理权限并且只能用"ON *.*"全局权限指定符授权。如果你愿意，你可以授权这些权限，而不授权数据库权限。例如，下列语句设置一个flush用户，他只能发出flush语句。 这可能在你需要执行诸如清空日志等的管理脚本中会有用：



　　GRANT RELOAD ON *.* TO [flushl@localhost](http://blog.csdn.net/norsd/article/details/mailto:flushl@localhost) IDENTIFIED BY "flushpass"



　　一般地，你想授权管理权限，吝啬点，因为拥有它们的用户可以影响你的服务器的操作。



　　数据库级权限适用于一个特定数据库中的所有表，它们可通过使用ON db_name.*子句授予：



　　GRANT ALL ON samp_db TO [bill@racer.snake.net](http://blog.csdn.net/norsd/article/details/mailto:bill@racer.snake.net) INDETIFIED BY "rock" GRANT Select ON samp_db
 TO [ro_user@%](http://blog.csdn.net/norsd/article/details/mailto:ro_user@%) INDETIFIED BY "rock"



　　第一条语句向bill授权samp_db数据库中所有表的权限，第二条创建一个严格限制访问的用户ro_user（只读用户），只能访问samp_db数据库中的所有表，但只有读取，即用户只能发出Select语句。



　　你可以列出一系列同时授予的各个权限。例如，如果你想让用户能读取并能修改现有数据库的内容，但不能创建新表或删除表，如下授予这些权限：



　　GRANT Select,Insert,Delete,Update ON samp_db TO [bill@snake.net](http://blog.csdn.net/norsd/article/details/mailto:bill@snake.net) INDETIFIED BY "rock"



　　对于更精致的访问控制，你可以在各个表上授权，或甚至在表的每个列上。当你想向用户隐藏一个表的部分时，或你想让一个用户只能修改特定的列时，列特定权限非常有用。如：



　　GRANT Select ON samp_db.member TO [bill@localhost](http://blog.csdn.net/norsd/article/details/mailto:bill@localhost) INDETIFIED BY "rock"



　　GRANT Update (expiration) ON samp_db. member TO [bill@localhost](http://blog.csdn.net/norsd/article/details/mailto:bill@localhost)



　　第一条语句授予对整个member表的读权限并设置了一个口令，第二条语句增加了Update权限，当只对expiration列。没必要再指定口令，因为第一条语句已经指定了。



　　如果你想对多个列授予权限，指定一个用逗号分开的列表。例如，对assistant用户增加member表的地址字段的Update权限，使用如下语句，新权限将加到用户已有的权限中：



　　GRANT Update (street,city,state,zip) ON samp_db TO [assistant@localhost](http://blog.csdn.net/norsd/article/details/mailto:assistant@localhost)



　　1.3 用户应该被允许管理权限吗？



　　你可以允许一个数据库的拥有者通过授予数据库上的所有拥有者权限来控制数据库的访问，在授权时，指定WITH GRANT OPTION。例如：如果你想让alicia能从big.corp.com域的任何主机连接并具有sales数据库中所有表的管理员权限，你可以用如下 GRANT语句：



　　GRANT ALL ON sales.* TO [alicia@%.big.corp.com](http://blog.csdn.net/norsd/article/details/mailto:alicia@%.big.corp.com) INDETIFIED BY "applejuice" WITH GRANT
 OPTION



　　在效果上WITH GRANT OPTION子句允许你把访问授权的权利授予另一个用户。要注意，拥有GRANT权限的两个用户可以彼此授权。如果你只给予了第一个用户Select权 限，而另一个用户有GRANT加上Select权限，那么第二个用户可以是第一个用户更“强大”。



　　常见语句：



　　常见账号，并赋予权限



　　GRANT SELECT,INSERT,UPDATE,DELETE,CREATE,DROP ON db1.* TO ['linpp'@'192.168.40.111'](http://blog.csdn.net/norsd/article/details/mailto:)IDENTIFIED
 BY 'qq';



　　进一步赋予权限



　　GRANT SELECT ON db2.* TO ['linpp'@'192.168.40.111'](http://blog.csdn.net/norsd/article/details/mailto:);



　　2.撤权并删除用户



　　要取消一个用户的权限，使用REVOKE语句。REVOKE的语法非常类似于GRANT语句，除了TO用FROM取代并且没有INDETIFED BY和WITH GRANT OPTION子句：



　　REVOKE privileges (columns) ON what FROM user



　　user部分必须匹配原来GRANT语句的你想撤权的用户的user部分。privileges部分不需匹配，你可以用GRANT语句授权，然后用REVOKE语句只撤销部分权限。



　　REVOKE语句只删除权限，而不删除用户。即使你撤销了所有权限，在user表中的用户记录依然保留，这意味着用户仍然可以连接服务器。要完全删除一个用户，你必须用一条Delete语句明确从user表中删除用户记录：



　　%mysql -u root mysqlmysql>Delete FROM user ->Where User="user_name" and Host="host_name";mysql>FLUSH PRIVILEGES;



　　从ip为 * 以后限制ip 可先删除账号，在构建有ip限制的用户，用户权限不会改变，或者直接修改user表的host



　　Delete语句删除用户记录，而FLUSH语句告诉服务器重载授权表。（当你使用GRANT和REVOKE语句时，表自动重载，而你直接修改授权表时不是。）



　　常见语句：



　　REVOKE UPDATE ON db1.* FROM ['linpp'@'192.168.40.111'](http://blog.csdn.net/norsd/article/details/mailto:);



　　三.mysql 修改密码



　　use mysql



　　update user set password=password('你的密码') where User='root';



　　flush privileges;



　　四．涉及到账号和权限的表



　　User



　　每一行就是一个用户账号以及用户的全部权限



　　Db



　　每一行包含了某些用户在数据库级权限



　　Host



　　每一行包含了用户从指定主机登陆过来时它在一个数据库里的所有权限，这个条目会与db表里的条目合并起来使用。虽然它是作为授权表罗列出来的，但是你无法使用grant,revoke等命令修改这个主机表，你只能手动添加和删除其中的条目。



　　建议你不要动这张表。



　　Tables_priv



　　每一行宝航了指定用户和表的表级别上的权限，也包括了视图和权限在内。



　　Columms_priv



　　每一行指定了用户和列的列的级别上的权限。



　　Procs_priv



　　每一行包含了指定用户和[存储](http://www.storworld.com/)程序的权限。







