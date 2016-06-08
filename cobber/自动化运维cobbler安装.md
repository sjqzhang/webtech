
    		  
#### Cobbler 的设计方式

  Cobbler 的配置结构基于一组注册的对象。每个对象表示一个与另一个实体相关联的实体（该对象指向另一个对象，或者另一个对象指向该对象）。当一个对象指向另一个对象时，它就继承了被指向对象的数据，并可覆盖或添加更多特定信息。以下对象类型的定义为：

  



#### 发行版

：表示一个操作系统。它承载了内核和 initrd 的信息，以及内核参数等其他数据。 
    


#### 配置文件

：包含一个发行版、一个 kickstart 文件以及可能的存储库，还包含更多特定的内核参数等其他数据。 
    


#### 系统

：表示要配给的机器。它包含一个配置文件或一个镜像，还包含 IP 和 MAC 地址、电源管理（地址、凭据、类型）以及更为专业的数据等信息。 
    


#### 存储库

：保存一个 yum 或 rsync 存储库的镜像信息。 
    


#### 镜像

：可替换一个包含不属于此类别的文件的发行版对象（例如，无法分为内核和 initrd 的对象）。 
 
 

  基于注册的对象以及各个对象之间的关联，Cobbler 知道如何更改文件系统以反映具体配置。因为系统配置的内部是抽象的，所以您可以仅关注想要执行的操作。

  
#### 图 1. Cobbler 对象关系

 ![http://www.ibm.com/developerworks/cn/linux/l-cobbler/fig-1.png](http://www.ibm.com/developerworks/cn/linux/l-cobbler/fig-1.png) 

  所需相关服务  tftp  rsync dhcp  dns 可由cobbler 管理，也可由服务自己管理

   

  环境  centos6.4 x86_64  最小化安装  

            安装开发包，vim, ntp, man 工具  

   

  1 安装EPEL源

  
```
[root@cobbler ~]# rpm -ivh epel-release-6-8.noarch.rpm 
```


 



2 安装cobbler




```
[root@cobbler ~]# yum install cobbler httpd cobbler-web debmirror pykickstart
```


 



3 启动cobbler  httpd




```
[root@cobbler ~]# service cobblerd start
[root@cobbler ~]# service httpd start
```


 



4 检查cobbler




```
[root@cobbler ~]# cobbler check
The following are potential configuration items that you may want to fix:

1 : The 'server' field in /etc/cobbler/settings must be set to something other than localhost, or kickstarting features will not work.  This should be a resolvable hostname or IP for the boot server as reachable by all machines that will use it.
2 : For PXE to be functional, the 'next_server' field in /etc/cobbler/settings must be set to something other than 127.0.0.1, and should match the IP of the boot server on the PXE network.
3 : some network boot-loaders are missing from /var/lib/cobbler/loaders, you may run 'cobbler get-loaders' to download them, or, if you only want to handle x86/x86_64 netbooting, you may ensure that you have installed a *recent* version of the syslinux package installed and can ignore this message entirely.  Files in this directory, should you want to support all architectures, should include pxelinux.0, menu.c32, elilo.efi, and yaboot. The 'cobbler get-loaders' command is the easiest way to resolve these requirements.
4 : change 'disable' to 'no' in /etc/xinetd.d/rsync
5 : comment out 'dists' on /etc/debmirror.conf for proper debian support
6 : comment out 'arches' on /etc/debmirror.conf for proper debian support
7 : The default password used by the sample templates for newly installed machines (default_password_crypted in /etc/cobbler/settings) is still set to 'cobbler' and should be changed, try: "openssl passwd -1 -salt 'random-phrase-here' 'your-password-here'" to generate new one
8 : fencing tools were not found, and are required to use the (optional) power management features. install cman or fence-agents to use them

Restart cobblerd and then run 'cobbler sync' to apply changes.
```


 



5 更改设置




```
[root@cobbler cobbler]# vim settings
next_server: 192.168.200.138
server: 192.168.200.138

[root@cobbler cobbler]# cobbler get-loaders

[root@cobbler cobbler]# vim /etc/xinetd.d/rsync
 disable = no

[root@cobbler cobbler]# vim /etc/debmirror.conf
#@dists="sid";
#@arches="i386";

[root@cobbler cobbler]# openssl passwd -1 -salt `openssl rand -hex 4`
Password: 
$1$cbf5f59c$vn.js51UZEZDsUYh//AYC1
[root@cobbler cobbler]# vim settings 
default_password_crypted: "$1$cbf5f59c$vn.js51UZEZDsUYh//AYC1"

[root@cobbler cobbler]# yum install cman fence-agents
```


6 重新检测cobbler  




```
[root@cobbler cobbler]# service cobblerd restart
[root@cobbler cobbler]# cobbler check
No configuration problems found.  All systems go.
[root@cobbler cobbler]# cobbler sync
```


 



7 安装DHCP 




```
[root@cobbler cobbler]# yum install dhcp
```


 



8 配置DHCP




```
[root@cobbler dhcp]# cd /etc/dhcp/
[root@cobbler dhcp]# cp /usr/share/doc/dhcp-4.1.1/dhcpd.conf.sample dhcpd.conf
[root@cobbler dhcp]# vim dhcpd.conf
option domain-name "daphne.com.";
option domain-name-servers 192.168.200.2;
subnet 192.168.200.0 netmask 255.255.255.0{
          range 192.168.200.10 192.168.200.20;
          option routers 192.168.200.2;
          }

next-server 192.168.200.138;
filename="pxelinux.0";

[root@cobbler dhcp]# service dhcpd restart
Starting dhcpd:                                            [  OK  ]
```


 



9 配置tftp




```
[root@cobbler dhcp]# chkconfig tftp on
```


 



10 配置distro



[root@cobbler ~]# mkdir /media/cdrom
  

[root@cobbler ~]# mount /dev/cdrom /media/cdrom/

  

[root@cobbler ~]# cobbler import --name=centos6.4-x86_64 --path=/media/cdrom/

  

[root@cobbler ~]# cobbler distro list

  

   centos6.4-x86_64



 



11 配置profile



事先做好ks.cfg  ，ks.cfg 是在pxe篇做的 需要修改  




```
[root@cobbler ~]# vim ks.cfg 
url --usl=http://192.168.200.138/cobbler/ks_mirror/centos6.4-x86_64
```


当定义distro 会自动生成一个 centos6.4-86_64 profile 文件



一个profile 对应一个lable




```
[root@cobbler ~]# cobbler profile add --name=centos6.4-x86_64 --distro=centos6.4-x86_64 kickstart=/root/ks.cfg 
exception on server: "it seems unwise to overwrite this object, try 'edit'"
[root@cobbler ~]# cobbler profile edit --name=centos6.4-x86_64 --distro=centos6.4-x86_64 kickstart=/root/ks.cfg 
```


 



12 




```
[root@cobbler ~]# cobbler sync
```


 



13 测试



 



[![http://img1.51cto.com/attachment/201408/3/158322_14070342069p7l.png](http://img1.51cto.com/attachment/201408/3/158322_14070342069p7l.png)](http://img1.51cto.com/attachment/201408/3/158322_1407034206UhNI.png)


    		

