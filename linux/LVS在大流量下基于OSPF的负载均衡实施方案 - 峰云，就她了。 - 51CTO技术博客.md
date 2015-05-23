




随着开源技术的发展，以及商业设备价格的不断攀升。大公司总是希望能使用开源的方案来替换过去使用的商业设备。比如之前大家用的很多的F5和A10,现在已经在逐步被LVS替换。传统的单个lvs的性能是比不上商业设备的，而且稳定性等也相对会差些。告诉大家很多大公司都在用这些技术的。







基本思路就是把多个LVS组成一个OSPF集群，这样可以使得LVS集群的性能可以远远超过单个传统的商业设备（当然，对于F5等等其实也可以做这样的集群做水平化的扩展）







原来就是把服务器也模拟成ospf中的一份子，是他可以在实现ospf的负载均衡，以及高可用性。







在这里网络层的东西就不写了，往简单配置，没意思。往难里配置我也不懂，上线服务器的时候，这些东西都是网络组的负责，我只是负责服务器上的ospf的介入和业务方面的。


我这里只是简单的说下ospf的框架


[![http://img1.51cto.com/attachment/201306/045644257.jpg](http://img1.51cto.com/attachment/201306/045644257.jpg)](http://img1.51cto.com/attachment/201306/045644257.jpg)















OSPF(Open Shortest Path First开放式最短路径优先）是一个内部网关协议(Interior Gateway Protocol，简称IGP），用于在单一自治系统（autonomous system,AS）内决策路由。


ECMP（Equal-CostMultipathRouting）等价多路径，存在多条不同链路到达同一目的地址的网络环境中，如果使用传统的路由技术，发往该目的地址的数据包只能利用其中的一条链路，其它链路处于备份状态或无效状态，并且在动态路由环境下相互的切换需要一定时间，而等值多路径路由协议可以在该网络环境下同时使用多条链路，不仅增加了传输带宽，并且可以无时延无丢包地备份失效链路的数据传输。


特点：






```
4层负载均衡，效率高
配置简单，只需安装基于linux的路由软件quagga
无法进行监控检查，服务异常无法处理
无session保持等，功能过于简单
```






贴上一个操作的例子：















OSPF(Open Shortest Path First开放式最短路径优先）是一个内部网关协议(Interior 







Gateway Protocol，简称IGP），用于在单一自治系统（autonomous system,AS）内决







策路由。







ECMP（Equal-CostMultipathRouting）等价多路径，存在多条不同链路到达同一目的地址的网络







环境中，如果使用传统的路由技术，发往该目的地址的数据包只能利用其中的一条链路，其它链路处







于备份状态或无效状态，并且在动态路由环境下相互的切换需要一定时间，而等值多路径路由协议可







以在该网络环境下同时使用多条链路，不仅增加了传输带宽，并且可以无时延无丢包地备份失效链路







的数据传输。







特点：



1．4层负载均衡，效率高




2．配置简单，只需安装基于linux的路由软件quagga




3．无法进行监控检查，服务异常无法处理




4. 无session保持等，功能过于简单








路由器上的ospf的操作 ，这只是简单的配置，大家可以按照自己的想法和网络组的同学们扯淡提需求就行了。













```
配置命令：
R0配置：
Router>en
Router#config t
Enter configuration commands, one per line.  End with CNTL/Z.
Router(config)#hostname r0
r0(config)#
r0(config)#int e1/0
r0(config-if)#ip address 192.168.2.222 255.255.255.0
r0(config-if)#no shutdown
r0(config)#int e1/1
r0(config-if)#ip address 192.168.0.111 255.255.255.0
r0(config-if)#no shutdown
r0(config-if)#exit
r0(config)#router ospf 100
r0(config-router)#net
r0(config-router)#network 192.168.0.0 0.0.0.255 area 0
r0(config-router)#network 192.168.2.0 0.0.0.255 area 0
r0(config-router)#exit
r0(config)#int e1/1
r0(config-if)#ip ospf cost 2
r0(config-if)#int e1/0
r0(config-if)#ip ospf cost 2
r0(config-if)#end
r0#ping 192.168.0.14
Type escape sequence to abort.
Sending 5, 100-byte ICMP Echos to 192.168.0.14, timeout is 2 seconds:
!!!!!
Success rate is 100 percent (5/5), round-trip min/avg/max = 64/93/1
==========================================================================
```







```
cisco默认的是hello时间是10s，死亡时间是hello时间的4倍，默认为40s，当然这个时间是可以修改的。

在接口模式下面，通过命令：

ip ospf hello-interval <time>来修改hello时间。

ip ospf dead-interval <time>来修改死亡时间。
```






服务器端的配置


其实就是安装一个软路由，让他进到ospf的圈子里面。


先说下qugga的基本安装配置






```
1.       下载源码
quagga-0.99.10.tar.gz
2.       解压缩
tar xzvf quagga-0.99.10.tar.gz
3.       配置
cd quagga-0.99.10
    ./configure --prefix =/usr
                --sysconfdir=/etc/quagga
                --localstatedir=/var/run/quagga
                --enable-vtysh
                --enable-user='test'
                --enable-group='test'
                 --enable-vty-group='test'
配置输出：
                                                                                                                                                                                                                                                                                                                                                                                                         
Quagga configuration
--------------------
quagga version          : 0.99.10
host operationg system  : linux-gnu
source code location    : .
compiler                : gcc
compiler flags          : -Os -fno-omit-frame-pointer -g -std=gnu99 -Wall -Wsign-compare -Wpointer-arith -Wbad-function-cast -Wwrite-strings -Wmissing-prototypes -Wmissing-declarations -Wchar-subscripts -Wcast-qual
make                    : make
includes                :
linker flags            :  -lcrypt   -lcap  -ltermcap -lreadline -lm
state file directory    : /var/run/quagga
config file directory   : /etc/quagga
example directory       : /etc/quagga
user to run as          : test
group to run as         : test
group for vty sockets   : test
config file mask        : 0600
log file mask           : 0600
                                                                                                                                                                                                                                                                                                                                                                                                         
The above user and group must have read/write access
to the state file directory and
to the config files in the config file directory.
4.       编译和安装
make ;make install
5.       添加test组和用户
groupadd test;
    useradd test -g test
6.       改变权限 //最好写入启动脚本
chown test:test /var/run/quagga
chmod 777 /var/run/quagga
chown test:test /etc/quagga //需要将配置写入操作系统
chmod 777 /etc/quagga/*             
7.       增加log权限//最好写入启动脚本
Mkdir  /var/log/quagga/
Vi /var/log/quagga/zebra.log
Chmod 777 /var/log/quagga/zebra.log
                                                                                                                                                                                                                                                                                                                                                                                                          
8.       修改 /etc/services  //just for telnet
                zebrasrv    2600/tcp     # zebra service
                zebra         2601/tcp    # zebra vty
                ripd           2602/tcp    # RIPd vty
                ripngd       2603/tcp    # RIPngd vty
                ospfd        2604/tcp    # OSPFd vty
                bgpd         2605/tcp    # BGPd vty
                ospf6d      2606/tcp    # OSPF6d vty
                ospfapi     2607/tcp    # ospfapi
                isid           2608/tcp    # ISISd vty
                                                                                                                                                                                                                                                                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                                                                          
9.       编辑配置文件
copy /etc/quagga/zebra.conf.example   /etc/quagga/zebra.conf
! -*- zebra -*-
!
! zebra sample configuration file
!
hostname Router
password zebra
enable password zebra
log file  /var/log/quagga/zebra.log//注意zebra.conf启用log，这样便于查找错误
                                                                                                                                                                                                                                                                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                                                                         
10.     启动
zebra Cd
如果启动不成功，察看/var/log/quagga/zebra.log
一般由于权限设置会出现以下错误：
2008/10/22 16:59:22 ZEBRA: Could not lock pid_file /var/run/quagga/zebra.pid, exiting
                                                                                                                                                                                                                                                                                                                                                                                                         
11.    登陆
telnet localhost zebra(0r 2601)
[root@localhost quagga-0.99.10]# telnet localhost 2601
Trying 127.0.0.1...
Connected to localhost.
Escape character is '^]'.
                                                                                                                                                                                                                                                                                                                                                                                                         
Hello, this is Quagga (version 0.99.10).
Copyright 1996-2005 Kunihiro Ishiguro, et al.
                                                                                                                                                                                                                                                                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                                                                         
User Access Verification
                                                                                                                                                                                                                                                                                                                                                                                                         
Password:
Router> enable
Password:
Router# help
Quagga VTY provides advanced help feature.  When you need help,
anytime at the command line please press '?'.
                                                                                                                                                                                                                                                                                                                                                                                                         
If nothing matches, the help list will be empty and you must backup
 until entering a '?' shows the available options.
Two styles of help are provided:
1. Full help is available when you are ready to enter a
command argument (e.g. 'show ?') and describes each possible
argument.
2. Partial help is provided when an abbreviated argument is entered
   and you want to know what arguments match the input
   (e.g. 'show me?'.)
                                                                                                                                                                                                                                                                                                                                                                                                         
Router#
```






在lvs server上的配置











```
安装
LVS服务器192.168.0.14、192.168.0.15上安装quagga软件
配置
1).    配置web服务器quagga
使用root用户登录192.168.0.14和192.168.0.15
cd /etc/quagga
cp ospfd.conf.sample ospfd.conf
chkconfig zebra on
chkconfig ospfd on
service zebra start
service ospfd start
telnet localhost ospfd
输入默认密码zebra
ospfd> en
ospfd# conf t
ospfd(config)# router ospf
ospfd(config-router)# router-id 192.168.2.64
ospfd(config-router)# network 192.168.0.23/32 area 0.0.0.0(lo IP)
ospfd(config-router)# network 192.168.2.64/24 area 0.0.0.0（接口IP）
ospfd(config-router)#end
ospfd#wr
2).    配置交换机端
根据交换机类型配置ospf与主机quagga建立ospf邻居关系
3).    配置主机
使用root用户分别在2台web服务上执行以下命令
ifconfig lo:0 192.168.0.23 netmask 255.255.255.255 up
验证
多次访问http://192.168.0.23显示相应页面即说明负载成功
                                                                                                                                                                                                                                                                                                                                                                 
3.2   功能测试
负载均衡测试
多次访问http://192.168.0.23显示realserver ip address 在192.168.0.14和
192.168.0.15之间切换
服务切换测试
Down掉192.168.0.14/15上的服务IP 192.168.0.23可以正常访问应用
```






总结，淘宝的lvs已经做了fullnat的技术，原理也是ospf的负载的，腾讯不少业务也早已经用这样的方案了，知道腾讯的dns为啥能抗住几百万的流量请求并发，10g网压力测试能保持在1800w 流量请求并发， 除了dns的性能牛逼外，网络的框架用的就是这个方案。当然里面有些具体的流程方案不方便向大家show出来，比如 各种情况下的健康度检查，ospf的hello包的判断，自动化的ospf的配置，定时的负载调整。  但这些东西可以自己用shell配合网络组的同学们一起搞定制的。









这样的方案，在上一家公司用过很多次，qugga的性能和稳定是没有问题的~大家可以放心用。 还有一点 用之前一直要搞清楚ospf的cost负载的原理，或者公司有专门的网络的同学，要是没有的话最好别冲动去线上尝试，不然会。。。。你懂的。

















本文出自 “[峰云，就她了。](http://rfyiamcool.blog.51cto.com)” 博客，谢绝转载！


    		
