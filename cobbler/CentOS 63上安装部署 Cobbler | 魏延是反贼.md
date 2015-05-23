
				
					
					

				
#### CentOS 6.3上安装部署 Cobbler


	
				
作者： [魏延是反贼](http://www.weiyan.me/author/admin). 分类： [Linux](http://www.weiyan.me/category/work/linux), [系统·安全·调优](http://www.weiyan.me/category/work)				



			

			
每次給自己的电脑重装系统都是一件很无聊的事情，如果需要重装上百台虚拟机和服务器不但很无聊而且很耗时，面对现在云时代大量服务器和虚拟机的出现，运维必须要自动化。现在有很多开源工具可以帮助我们实现自动化安装系统，比如 FAI, Cobbler, Spacewalk, Ubuntu Orchestra 等，我们打算把 Cobbler 安装在某台虚拟机上，为我们新购的无数R410来搭建系统。 



Cobbler 是一个系统启动服务（boot server），可以通过网络启动（PXE）的方式用来快速安装、重装物理服务器和虚拟机，支持安装不同的 Linux 发行版和 Windows. Cobbler 是个轻量级 Python 程序，总共大概1.5万行代码，还可以用来管理 DHCP, DNS, yum 源等。Cobbler 使用命令行方式管理，也提供了基于 Web 的界面管理工具（cobbler-web），不过命令行方式已经很方便，实在没有必要为了不实用的 Web 界面再添加一个 Web 服务器。 





#### 1.安装和配置 Cobbler

 
```


Cobbler 不在 CentOS 6.2 的基本源中，需要导入 EPEL 源： 





```


```
# rpm -Uvh http://dl.fedoraproject.org/pub/epel/6/x86_64/epel-release-6-5.noarch.rpm
Retrieving http://dl.fedoraproject.org/pub/epel/6/x86_64/epel-release-6-5.noarch.rpm
warning: /var/tmp/rpm-tmp.lo2Hd0: Header V3 RSA/SHA256 Signature, key ID 0608b895: NOKEY
Preparing...                ########################################### [100%]
   1:epel-release           ########################################### [100%]

# yum update
# yum upgrade
```


```


```
安装 cobbler：
```

# yum install cobbler
```


```
修改配置，主要修改 cobbler 服务器所在的 IP 地址，以及开启dhcp管理（详见第3步）
```


```
# vi /etc/cobbler/settings
...
next_server: 192.168.10.1 #IP of Cobbler server
server: 192.168.10.1 #IP of Cobbler server
...
```


```
manage_dhcp: 1   # (*可选)



```
启用 httpd, xinetd 和 cobbler 服务并确认已经加到系统自动启动服务中：
```


# /etc/init.d/httpd start
# /etc/init.d/xinetd start
# /etc/init.d/cobblerd start  （可能需要先禁用selinux）

# chkconfig httpd on
# chkconfig xinetd on
# chkconfig cobblerd on
```


```


```
修改 rsync 和 tftp 这两个服务的 xinetd 配置：




```
# vi /etc/xinetd.d/rsync
service rsync
{
        disable = no
...
}

# vi /etc/xinetd.d/tftp
service tftp
{
        ...
        disable = no
        ...
}
```






关闭防火墙和 SELinux 后重启系统：





```
# /etc/init.d/iptables stop
# chkconfig iptables off

# vi /etc/sysconfig/selinux
...
SELINUX=disabled
...

# reboot
```




#### 2.检查和修改Cobbler配置





```

# cobbler check



```

这是cobbler自带的检测命令，提供cobbler必须的一些设置的检查，运行之后根据不同的环境，检测出来的结果也是不同的，不过所有的检测中我们都可以按照他的提示，一步步的来完善配置。


我们这里运行之后发现如下的错误：



```

The following are potential configuration items that you may want to fix:

 

 1: some network boot-loaders are missing from /var/lib/cobbler/loaders, you may run ‘cobbler get-loaders’ to download them, or, if you only want to handle x86/x86_64 netbooting, you may ensure that you have installed a *recent* version of the syslinux package installed and can ignore this message entirely.  Files in this directory, should you want to support all architectures, should include pxelinux.0, menu.c32, elilo.efi, and yaboot.The ‘cobbler get-loaders’ command is the easiest way to resolve these requirements.

 2 : ksvalidator was not found, install pykickstart

 3 : debmirror package is not installed, it will be required to manage debian deployments and repositories

 4 : The default password used by the sample templates for newly installed machines

      (default_password_crypted in /etc/cobbler/settings) is still set to ‘cobbler’ and should be changed,

      try: “openssl passwd -1 -salt ‘random-phrase-here’ ‘your-password-here'” to generate new one

 5 : fencing tools were not found, and are required to use the (optional) power management features. install cman or fence-agents to use them

 

 Restart cobblerd and then run ‘cobbler sync’ to apply changes.



```

我们一个个来解决：


修复问题1：



```

# cobbler get-loader

即可获取各ios的bootloader



```

修复问题2：



```

安装ksvalidator

# yum install pykickstart


```

修复问题3：




```


cobbler服务器能同时部署CentOS/Fedora/Debian/Ubuntu系统，所以需要安装debmirror，安装debmirror-20090807-1.el5.noarch.rpm，在此之前，需要先安装一些其他的依赖包：


# yum install ed patch perl perl-Compress-Zlib perl-Cwd perl-Digest-MD5 perl-Digest-SHA1 perl-LockFile-Simple perl-libwww-perl

# wget [ftp://fr2.rpmfind.net/linux/epel/5/ppc/debmirror-20090807-1.el5.noarch.rpm](http://www.weiyan.me/2012/07/ftp://fr2.rpmfind.net/linux/epel/5/ppc/debmirror-20090807-1.el5.noarch.rpm)

# rpm –ivh debmirror-20090807-1.el5.noarch.rpm


修改/etc/debmirror.conf 配置文件，注释掉 @dists 和 @arches 两行


# vim /etc/debmirror.conf

…

#@dists=”sid”;

@sections=”main,main/debian-installer,contrib,non-free”;

#@arches=”i386″;

…



```

修复问题4：



```

修改默认系统密码用 openssl 生成一串密码后加入到 cobbler 的配置文件（/etc/cobbler/settings）里，替换 default_password_crypted 字段：


# openssl passwd -1 -salt ‘bihan’ ‘Abcd1234′

$1$bihan$9ZUK/6ZK0WPa/L5/9UHgj1

# vi /etc/cobbler/settings


修改内容如下：


default_password_crypted: “$1$bihan$9ZUK/6ZK0WPa/L5/9UHgj1″



```

修复问题5：



```

这属于电源管理的选项，根据提示安装cman即可。

# yum install cman



```

所有修复都结束之后，重新运行 cobbler check 检查一下，之后，运行cobbler sync来同步配置信息，如果没有发现问题，应该显示是这样的：



```

# cobbler check

No configuration problems found.  All systems go.


# cobbler sync



```



#### 3.配置DHCP（可选）




Cobbler整个环境中需要一台能提供DHCP功能的机器，如果外部有这样的服务器那么就不用新建一个DHCP服务器，当然一般机房中应该肯定不是DHCP来提供服务的吧，每台服务器都应该是个固定的静态Ip，则我们需要在Cobbler中增加dhcp选项。


Cobbler的dhcp我们在之前已经在/etc/cobbler/settings中开启了，如果你的环境中已经有DHCP服务器，请忽视，并且请关闭。


Cobbler的dhcp配置文件为 /etc/cobbler/dhcp.template，我们只需要修改它即可。



```

subnet 192.168.10.0 netmask 255.255.255.0 {                 # 子网范围

     option routers             192.168.10.1;                              # 网关地址

     option domain-name-servers 192.168.10.1;

     option subnet-mask         255.255.255.0; 

     range dynamic-bootp        192.168.10.100 192.168.10.254;       # 池大小

     filename                   “/pxelinux.0″;                                   # 启动文件

     default-lease-time         21600;

     max-lease-time             43200;

     next-server                $next_server;                                  # 下一跳地址，TFTP服务器地址

}



```

所有配置配置完之后



```

# service cobblerd restart

# cobbler sync



```

4.导入iso


下载我们需要的版本的iso文件到cobbler的服务器上，然后挂载到一个我们可识别的位置。这里我们使用CentOS6.2.iso来作为例子：



```

# mkdir –pv /mnt/Centos/Centos6.2

# wget [http://mirrors.163.com/centos/6.2/isos/x86_64/CentOS-6.2-x86_64-bin-DVD1.iso](http://mirrors.163.com/centos/6.2/isos/x86_64/CentOS-6.2-x86_64-bin-DVD1.iso)

# mount –o loop –t iso9660 ./CentOS-6.2-x86_64-bin-DVD1.iso /mnt/Centos/Centos6.2



```

之后，我们要将挂载好的系统读取到cobbler内



```

# cobbler import –path=/mnt –name=CentOS-6.2-x86_64-bin-DVD1 –arch=x86_64

# cobbler sync

# cobbler list



```

通过List，我们应该能看到下面的信息：



```

# cobbler list

distros:

   CentOS-6.2-bin-DVD1-x86_64


profiles:

   CentOS-6.2-bin-DVD1-x86_64


systems:


repos:


images:


mgmtclasses:


packages:


files:



```



#### 4.测试我们的环境




当一切准备完成后，我们要对Cobbler的内容进行测试，这时我们新创建一台虚拟机。选择PXE模式(Network Boot)启动，然后，如果一切正确，则应该是下面的样子：


[![http://imgs.weiyan.me/2012/07/image_thumb.png](http://imgs.weiyan.me/2012/07/image_thumb.png)](http://imgs.weiyan.me/2012/07/image.png)




			
						
			










					
					
										
										















				






