
转自：[http://www.entage.net/1/viewspace-25420](http://www.entage.net/1/viewspace-25420)
1. 关于本文
    本文将以[http://dev.mysql.com/downloads/mysql/5.0.html](http://dev.mysql.com/downloads/mysql/5.0.html)为例，以[http://www.centos.org/](http://www.centos.org/)为平台，讲述[http://www.mysql.com/](http://www.mysql.com/)数据库的安装和设置。

2. 关于MySQL
    MySQL是最流行的开源SQL数据库管理系统，它由MySQL AB开发、发布和支持。MySQL AB是一家由MySQL开发人员创建的商业公司，它是一家使用了一种成功的商业模式来结合开源价值和方法论的第二代开源公司。MySQL是MySQL AB的注册商标。
    MySQL是一个快速的、多线程、多用户和健壮的SQL数据库服务器。MySQL服务器支持关键任务、重负载生产系统的使用，也可以将它嵌入到一个大配置(mass-deployed)的软件中去。
　MySQL的官方发音是“My Ess Que Ell”，而不是“My sequel”。但是你也可以使用“My sequel”和其他的方言。
    MySQL网站([http://www.mysql.com/](http://www.mysql.com/))提供了关于MySQL和MySQL AB的最新的消息。
    MySQL具有如下特点或特性：
　MySQL是一个数据库管理系统；
　MySQL是一个关系数据库管理系统；
　MySQL是开源的；
　MySQL服务器是一个快的、可靠的和易于使用的数据库服务器；
　MySQL服务器工作在客户/服务器或嵌入系统中；
　有大量的MySQL软件可以使用。

3. MySQL的安装
　MySQL有两种安装方式：源码包安装和二进制包安装。这两种方式各有特色：二位制包安装不需编译，针对不同的平台有经过优化编译的不同的二进制文件以及包格式，安装简单方便；源码包则必须先配置编译再安装，可以根据你所用的主机环境进行优化，选择最佳的配置值，安装定制更灵活。下面分别介绍这两种安装方式。
　3.1 源码包方式安装
    3.1.1 在linux系统中添加运行Mysql的用户和组
              /usr/sbin/groupadd mysql
              /usr/sbin/useradd -d /var/lib/mysql -s /sbin/nologin -g mysql mysql           
    3.1.2 下载最新稳定发行版(GA)的MySQL软件
              访问MySQL网站[http://dev.mysql.com/downloads/](http://dev.mysql.com/downloads/)下载最新稳定发行版的MySQL源码包。本文使用的是5.0.51版本，在linux系统下用下面的命令下载：
              wget [http://mysql.mirror.kangaroot.net/Downloads/MySQL-5.0/mysql-5.0.51.tar.gz](http://mysql.mirror.kangaroot.net/Downloads/MySQL-5.0/mysql-5.0.51.tar.gz)
    3.1.3 解压缩下载的源码包
              首先建立一个工作目录( 笔者建议的目录为/usr/local/src/mysql ) ：
              mkdir -p /usr/local/src/mysql
              将下载的源码包移至工作目录：
              mv  mysql-5.0.51.tar.gz  /usr/local/src/mysql
              进入工作目录并用tar命令解压源码包：
              cd  /usr/local/src/mysql
              tar zxvf  mysql-5.0.51.tar.gz 
              命令执行结束后，当前工作目录下将生成一个新的子目录mysql-5.0.51，此目录下即为mysql的源码文件。
    3.1.4 配置Makefile文件
              进入MySQL源码目录：
              cd mysql-5.0.51
              执行下面的命令可查看可配置选项：
　　　 ./configure --help
              本文使用的配置命令格式如下：
              CC=gcc CFLAGS="-O3" CXX=gcc CXXFLAGS="-O3 -felide-constructors -fno-exceptions -fno-rtti" ./configure --prefix=/usr/local/mysql --enable-thread-safe-client --enable-assembler --with-big-tables --with-client-ldflags=-all-static --with-mysqld-ldflags=-all-static  --with-charset=utf8 --with-collation=utf8_general_ci --with-extra-charsets=complex 
              配置选项说明：
              CC：C编译器的名称（用于运行configure），本文示例为gcc
              CFLAGS：C编译器的标志（用于运行configure），本文示例为-O3，指定优化级别为3
              CXX：C++编译器的名称（用于运行configure），本文示例为gcc
              CXXFLAGS：C++编译器的标志（用于运行configure）
　　　 --prefix：指定安装目录，本文示例为/usr/local/mysql
              --localstatedir：指定默认数据库文件保存目录，默认为安装目录下的var目录
　　　  --enable-thread-safe-client：编译线程安全版的MySQL客户端库
　　　 --enable-assembler：使用一些字符函数的汇编版本
              --with-client-ldflags：客户端链接参数，本文示例为指定静态编译mysql客户端
　　　 --with-mysqld-ldflags：服务器端链接参数，本文示例为指定静态编译mysql服务器
              --with-big-tables：在32位平台上支持大于4G行的表
　　　 --with-charset：指定默认字符集。mysql默认使用latin1(cp1252)字符集，可以使用此选项更改。字符集可以是big5、cp1251、cp1257、czech、danish、dec8、dos、euc_kr、gb2312、gbk、german1、hebrew、hp8、hungarian、koi8_ru、koi8_ukr、latin1、latin2、sjis、swe7、tis620、ujis、usa7或win1251ukr。
              --with-collation：指定默认校对规则。mysql默认使用latin1_swedish_ci校对规则，可以使用此选项更改。
　　　 --with-extra-charsets：服务器需要支持的字符集，有三种可能的值：空格间隔的一系列字符集名；complex ，包括不能动态装载的所有字符集；all，将所有字符集包括进二进制。本文示例为complex。
　　　 注意：要想更改字符集和校对规则，要同时使用--with-charset和--with-collation选项。 校对规则必须是字符集的合法校对规则。(在mysql中使用SHOW COLLATION语句来确定每个字符集使用哪个校对规则)。
    3.1.5 编译源代码
　　　 执行下面的命令编译源代码：
　　　 make
    3.1.6 安装
　　　 执行下面的命令安装mysql到目标路径：
　　　 make install
    3.1.7 复制默认全局启动参数配置文件到/etc目录
              源码方式安装需要手动复制配置文件，配置模板位于源码树的support-files目录，有my-small.cnf、my-medium.cnf、my-large.cnf、my-huge.cnf四个，选择跟你的环境相接近的一个复制到/etc目录，并做适当修改。关于mysql配置文件的详细信息请参阅笔者的其它文章或是[http://dev.mysql.com/doc/](http://dev.mysql.com/doc/)。
              本文示例选择my-medium.cnf，执行下面的命令将其复制到/etc目录：
              cp ./support-files/my-medium.cnf  /etc/my.cnf
    3.1.8 初始化授权表
              执行下面的命令初始化授权表： 
　　　 ./scripts/mysql_install_db --user=mysql
    3.1.9 更改mysql数据目录属主和权限
              默认数据库文件保存目录为安装目录下的var目录，执行configure命令时可通过--localstatedir参数指定不同的目录，本文示例为默认位置。
              chown -R mysql.mysql /usr/local/mysql/var
              chmod -R 700 /usr/local/mysql/var
    3.1.10 设置开机自启动服务控制脚本
              执行下面的命令复制启动脚本到资源目录：
              cp ./support-files/mysql.server /etc/rc.d/init.d/mysqld
              执行下面的命令增加mysqld服务控制脚本执行权限：
              chmod +x /etc/rc.d/init.d/mysqld
              执行下面的命令将mysqld服务加入到系统服务：
              chkconfig --add mysqld
              执行下面的命令检查mysqld服务是否已经生效：
              chkconfig --list mysqld
              命令输出类似下面的结果：
              mysqld          0:off 1:off 2:on 3:on 4:on 5:on 6:off
              表明mysqld服务已经生效，在2、3、4、5运行级别随系统启动而自动启动，以后可以使用service命令控制mysql的启动和停止。
　　　 启动mysqld服务：
　　　 service mysqld start
              停止mysqld服务：
              service mysqld stop
              执行下面的命令关闭开机自启动：
　　　 chkconfig mysqld off
              执行下面的命令可以改变开机自启动的运行级别为3、5：  
　　　 chkconfig --level 35 mysqld on
    3.1.11 将mysql的bin目录加入PATH环境变量
              编辑/etc/profile文件：
              vi /etc/profile
              在文件最后添加如下两行：
              PATH=$PATH:/usr/local/mysql/bin
              export PATH
              执行下面的命令使所做的更改生效：
              . /etc/profile

    3.2 二进制包方式安装       
　3.2.1 从安装媒体安装
              Mysql二进制包已经包含在CentOS 5的安装媒体中，可以直接从安装媒体中安装下面三个rpm包：
              mysql-5.0.22-2.1.0.1.i386.rpm
              mysql-devel-5.0.22-2.1.0.1.i386.rpm
              mysql-server-5.0.22-2.1.0.1.i386.rpm
              不同的版本文件名有所不同，请注意区分。
　　      执行下面的命令安装：
              rpm -iUvh  mysql-5.0.22-2.1.0.1.i386.rpm
              rpm -iUvh  mysql-devel-5.0.22-2.1.0.1.i386.rpm
              rpm -iUvh  mysql-server-5.0.22-2.1.0.1.i386.rpm
    3.2.2 通过yum安装
              如果你安装的机器此时可以连接到互联网，笔者建议使用yum命令来简化安装过程：
　　      yum install mysql-server mysql-devel mysql
　　      yum将自动从centos的镜像站点查找你指明的软件的最新二进制包，并检查软件包依赖关系，安装软件的同时自动安装其依赖的软件包。
    3.2.3 从mysql网站下载最新稳定版本的二进制包安装
              通过CentOS安装媒体或yum安装的二进制包版本会落后于mysql开发者网站发布的版本，可以从mysql网站下载安装最新稳定版本的mysql。
              访问MySQL网站[http://dev.mysql.com/downloads/](http://dev.mysql.com/downloads/)下载最新稳定发行版的相应硬件平台的MySQL。本文使用的是Red Hat Enterprise Linux 5 RPM (x86) 5.0.45版本。需要下载Server、Client、Headers and Libraries、Share Libraries/Shared compatibility libraries几个rpm包，其它为可选包，按需要选择。
              在linux系统下用下面的命令下载：
              wget [http://mysql.mirrors.pair.com/Downloads/MySQL-5.0/MySQL-server-community-5.0.45-0.rhel5.i386.rpm](http://mysql.mirrors.pair.com/Downloads/MySQL-5.0/MySQL-server-community-5.0.45-0.rhel5.i386.rpm)
              wget [http://mysql.mirrors.pair.com/Downloads/MySQL-5.0/MySQL-client-community-5.0.45-0.rhel5.i386.rpm](http://mysql.mirrors.pair.com/Downloads/MySQL-5.0/MySQL-client-community-5.0.45-0.rhel5.i386.rpm)
              wget [http://mysql.mirrors.pair.com/Downloads/MySQL-5.0/MySQL-devel-community-5.0.45-0.rhel5.i386.rpm](http://mysql.mirrors.pair.com/Downloads/MySQL-5.0/MySQL-devel-community-5.0.45-0.rhel5.i386.rpm)
              wget [http://mysql.mirrors.pair.com/Downloads/MySQL-5.0/MySQL-shared-community-5.0.45-0.rhel5.i386.rpm](http://mysql.mirrors.pair.com/Downloads/MySQL-5.0/MySQL-shared-community-5.0.45-0.rhel5.i386.rpm)
              wget [http://mysql.mirrors.pair.com/Downloads/MySQL-5.0/MySQL-shared-compat-5.0.45-0.rhel5.i386.rpm](http://mysql.mirrors.pair.com/Downloads/MySQL-5.0/MySQL-shared-compat-5.0.45-0.rhel5.i386.rpm)
              执行下面的命令安装：
              rpm -iUvh MySQL-server-community-5.0.45-0.rhel5.i386.rpm
              rpm -iUvh MySQL-client-community-5.0.45-0.rhel5.i386.rpm
              rpm -iUvh MySQL-devel-community-5.0.45-0.rhel5.i386.rpm
              rpm -iUvh MySQL-shared-community-5.0.45-0.rhel5.i386.rpm
              rpm -iUvh MySQL-shared-compat-5.0.45-0.rhel5.i386.rpm

4. MySQL的配置
    4.1 目录结构
　4.1.1 源码包方式安装目录结构
           源码包方式安装时通常是在3.1.4节中configure命令的--prefix选项指定的目录中建立如下的目录结构，特殊指定的目录除外：
           ./bin                               #mysql用户可执行文件目录
           ./include/mysql           #mysql C头文件目录
           ./info                              #mysql 信息文件目录
           ./lib/mysql                    #mysql库文件目录
           ./libexec                        #mysql后台daemon程序目录
           ./man                             #mysql联机帮助文档目录
           ./mysql-test                  #mysql测试程序目录
           ./share/mysql              #mysql公用文件目录，包括字符集、配置文件模板、启动脚本、初始化SQL文件等
           ./sql-bench                   #mysql压力测试程序目录
           /etc/my.cnf                    #mysql配置文件
           /etc/rc.d/init.d/mysqld #mysqld服务启动脚本

    4.1.2 RPM二进制包方式安装目录结构
           二进制包方式安装时使用系统软件默认目录结构 ：
           /usr/bin                     #mysql用户可执行文件目录
           /usr/libexec              #mysql后台daemon程序目录
           /usr/lib/mysql          #mysql库文件目录
           /usr/lib64/mysql     #如果为64系统，mysql 64位库文件目录
           /usr/share/doc        #mysql文档目录
           /usr/share/info        #mysql信息文件目录
           /usr/share/man      #mysql联机帮助文档目录
           /usr/share/mysql    #mysql字符集目录
           /usr/include/mysql #mysql C头文件目录
           /var/log                     #mysqld服务日志文件目录
           /var/run/mysqld      #mysqld服务运行状态目录
           /var/lib/mysql          #mysql数据文件目录
           /etc/my.cnf               #mysql配置文件
           /etc/rc.d/init.d/mysqld  #mysqld服务启动脚本
         
    4.2 配置文件
          Linux系统下，mysql的配置参数文件为my.cnf，一般按下面的顺序查找此文件：/etc目录、mysql安装目录、mysql数据目录。配置模板位于源码树的support-files目录，有my-small.cnf、my-medium.cnf、my-large.cnf、my-huge.cnf四个，关于mysql配置文件的详细信息请参阅笔者的其它文章或是[http://dev.mysql.com/doc/](http://dev.mysql.com/doc/)。

    4.3 启动mysqld服务
           执行下面的命令启动mysql：
           service mysqld start

    4.3 设置mysql帐号
           mysql安装后默认生成两个帐号：一个是root，未设置密码，可以从本机登录到mysql；另一个是匿名帐号，无帐号名、无密码，可以从本机登录，未提供用户名的连接都将假定为此帐号。这样的设置存在着安全隐患，按下面的步骤进行更改。
           以root帐号连接到mysql服务器：
           mysql -u root 
           如果提示找不到mysql文件，请尝试使用绝对路径，如本文示例为：
           /usr/local/mysql/bin/mysql -u root 
           命令成功执行后将进入到mysql命令提示符下：
           mysql>
           （以下命令均在mysql命令提示符下执行）
           改变当前数据库为mysql：
           use mysql
           设置从本地主机登录的root帐号密码：
           set password for [mailto:root@localhost=password(](mailto:root@localhost=password() password');
           或：
           update user set password=password('your password') where user='root' and host='localhost';
           删除匿名帐号： 
           delete from user where user='' ;
           删除密码为空的帐号：
           delete from user where password='';
           删除允许非localhost主机登录的帐号：
           delete from user where host<>'localhost' ;
           执行下面的命令使更改生效：
           flush privileges ; 
           执行下面的命令退出mysql命令行：
           quit
           或：
           /q

5. 结束语
    至此，Mysql基本安装完毕。希望本文能对初学者有所帮助。 

