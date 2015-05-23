

	



	[返回](http://m.oschina.net/u/1769595)
	
#### 阅读博客


		[添加收藏](http://m.oschina.net/blog/javascript:add_to_favor();)
	[取消收藏](http://m.oschina.net/blog/javascript:delete_favor();)






	
#### 使用Cobbler无人值守安装CentOS6.5(一)


	
		[1989丶](http://m.oschina.net/u/1769595) 发布于 6个月前，共有 3 条评论
	


	
 Cobbler是一个快速网络安装linux的服务，而且在经过调整也可以支持网络安装windows。该工具使用python开发，小巧轻便（才15k行代码），使用简单的命令即可完成PXE网络安装环境的配置，同时还可以管理DHCP，DNS，以及yum包镜像。 

 
 我用的系统是Centos6.5 64 位 

 
 配置epel  yum源 

 
 我这用阿里云的epel 

 

```
mv /etc/yum.repos.d/epel.repo /etc/yum.repos.d/epel.repo.backup 
wget -O /etc/yum.repos.d/epel.repo http://mirrors.aliyun.com/repo/epel-6.repo
```
 安装cobbler需要的服务 
 



 

```
yum install dhcp tftp rsync xinetd httpd
```
 关闭selinux和防火墙自己做测试为了不影响就关了 
 



 

```
[root@i51 upimg]# setenforce 0
[root@i51 upimg]# service  iptables stop
```
 安装cobbler并启动 
 



 

```
[root@i51 yum.repos.d]# yum install cobbler -y
[root@i51 yum.repos.d]# /etc/init.d/cobblerd start
Starting cobbler daemon:                                   [  OK  ]
[root@i51 yum.repos.d]# /etc/init.d/httpd start
Starting httpd:
```
 检查配置执行 
 



 

```
[root@i51 ~]# cobbler check
Traceback (most recent call last):
  File "/usr/bin/cobbler", line 36, in <module>
    sys.exit(app.main())
  File "/usr/lib/python2.6/site-packages/cobbler/cli.py", line 655, in main
    rc = cli.run(sys.argv)
  File "/usr/lib/python2.6/site-packages/cobbler/cli.py", line 270, in run
    self.token         = self.remote.login("", self.shared_secret)
  File "/usr/lib64/python2.6/xmlrpclib.py", line 1199, in __call__
    return self.__send(self.__name, args)
  File "/usr/lib64/python2.6/xmlrpclib.py", line 1489, in __request
    verbose=self.__verbose
  File "/usr/lib64/python2.6/xmlrpclib.py", line 1253, in request
    return self._parse_response(h.getfile(), sock)
  File "/usr/lib64/python2.6/xmlrpclib.py", line 1392, in _parse_response
    return u.close()
  File "/usr/lib64/python2.6/xmlrpclib.py", line 838, in close
    raise Fault(**self._stack[0])
xmlrpclib.Fault: <Fault 1: "<class 'cobbler.cexceptions.CX'>:'login failed'">
```
 报错了 
 经过网上查找这样解决如下： 

 

```
[root@i51 ~]# service cobblerd restart
Stopping cobbler daemon:                                   [  OK  ]
Starting cobbler daemon:                                   [  OK  ]
[root@i51 ~]# cobbler get-loaders
task started: 2014-10-23_131316_get_loaders
task started (id=Download Bootloader Content, time=Thu Oct 23 13:13:16 2014)
downloading http://www.cobblerd.org/loaders/README to /var/lib/cobbler/loaders/README
downloading http://www.cobblerd.org/loaders/COPYING.elilo to /var/lib/cobbler/loaders/COPYING.elilo
downloading http://www.cobblerd.org/loaders/COPYING.yaboot to /var/lib/cobbler/loaders/COPYING.yaboot
downloading http://www.cobblerd.org/loaders/COPYING.syslinux to /var/lib/cobbler/loaders/COPYING.syslinux
downloading http://www.cobblerd.org/loaders/elilo-3.8-ia64.efi to /var/lib/cobbler/loaders/elilo-ia64.efi
downloading http://www.cobblerd.org/loaders/yaboot-1.3.14-12 to /var/lib/cobbler/loaders/yaboot
downloading http://www.cobblerd.org/loaders/pxelinux.0-3.86 to /var/lib/cobbler/loaders/pxelinux.0
downloading http://www.cobblerd.org/loaders/menu.c32-3.86 to /var/lib/cobbler/loaders/menu.c32
downloading http://www.cobblerd.org/loaders/grub-0.97-x86.efi to /var/lib/cobbler/loaders/grub-x86.efi
downloading http://www.cobblerd.org/loaders/grub-0.97-x86_64.efi to /var/lib/cobbler/loaders/grub-x86_64.efi
*** TASK COMPLETE ***
```
 在检查配置 
 



 

```
[root@i51 ~]# cobbler check
The following are potential configuration items that you may want to fix:

1 : The 'server' field in /etc/cobbler/settings must be set to something other than localhost, or kickstarting features will not work.  This should be a resolvable hostname or IP for the boot server as reachable by all machines that will use it.
2 : For PXE to be functional, the 'next_server' field in /etc/cobbler/settings must be set to something other than 127.0.0.1, and should match the IP of the boot server on the PXE network.
3 : change 'disable' to 'no' in /etc/xinetd.d/rsync
4 : debmirror package is not installed, it will be required to manage debian deployments and repositories
5 : ksvalidator was not found, install pykickstart
6 : The default password used by the sample templates for newly installed machines (default_password_crypted in /etc/cobbler/settings) is still set to 'cobbler' and should be changed, try: "openssl passwd -1 -salt 'random-phrase-here' 'your-password-here'" to generate new one
7 : fencing tools were not found, and are required to use the (optional) power management features. install cman or fence-agents to use them

Restart cobblerd and then run 'cobbler sync' to apply changes.
```
 
 上面这段信息大意就是： 

 
 1，编辑/etc/cobbler/settings文件，找到 server选项，修改为适当的ip地址，本实例配置ip为：192.168.1.243 

 
 2，编辑/etc/cobbler/settings文件，找到 next_server选项，修改为适当的ip地址，本实例配置ip为：192.168.1.243 

 
 3，编辑/etc/xinetd.d/rsync文件，将文件中的disable字段的配置由yes改为no 

 
 4，提示说debmirror没安装。如果不是安装 debian之类的系统，此提示可以忽略，如果需要安装，下载地址为： 

 

```
http://rpmfind.net/linux/rpm2html/search.php?query=debmirror
```
 
 



 
 5，ksvalidator没有被发现，安装pykickstart 

 
 



 

```
[root@i51 ~]# yum install pykickstart
```
 
 



 
 6，修改cobbler用户的默认密码，可以使用如下命令生成密码，并使用生成后的密码替换/etc/cobbler/settings中的密码。生成密码命令： 其中“random-phrase-here”为干扰码 

 

```
openssl passwd -1 -salt 'random-phrase-here' 'your-password-here'
```
 
 7，fencing tools为找到安装 

 

```
[root@i51 ~]# yum install fence-agents
```
 OK再来执行检查 

```
[root@i51 ~]# cobbler check
The following are potential configuration items that you may want to fix:

1 : The 'server' field in /etc/cobbler/settings must be set to something other than localhost, or kickstarting features will not work.  This should be a resolvable hostname or IP for the boot server as reachable by all machines that will use it.
2 : For PXE to be functional, the 'next_server' field in /etc/cobbler/settings must be set to something other than 127.0.0.1, and should match the IP of the boot server on the PXE network.
3 : debmirror package is not installed, it will be required to manage debian deployments and repositories
4 : The default password used by the sample templates for newly installed machines (default_password_crypted in /etc/cobbler/settings) is still set to 'cobbler' and should be changed, try: "openssl passwd -1 -salt 'random-phrase-here' 'your-password-here'" to generate new one

Restart cobblerd and then run 'cobbler sync' to apply changes.
```
 重启cobbler 

```
[root@i51 ~]# /etc/init.d/cobblerd restart
Stopping cobbler daemon:                                   [  OK  ]
Starting cobbler daemon:                                   [  OK  ]
```
 cobbler使用  导入安装文件 

  总体来说，在RHT/Centos 系列版本下，Cobbler的使用上不会遇到很大问题 


 

  Cobbler 主要的作用是，把DHCP 、Kickstart 的修改都集成在一个平台下做了管理 


 

    


 

  Cobbler 的精华 其实是 它启用了 Kickstart 配置模板，其中可以内嵌python代码 


 

  这部分技术，Cobbler叫做：snippets  


 

  在RHT/Centos 系列中，官方已经提供了不少这些代码，基本上调用一下就可以了，而Ubuntu下就非常的痛苦，必须自己开发（这部分的配置 暂且不表，后续有专门篇幅来介绍 ) 


 

    


 

  以下是相关配置路径(默认安装) : 


 

  Cobbler 配置主要位置：/var/lib/cobbler/ （实际操作和配置的目录 ) 


 

  snippets 代码  位置：/var/lib/cobbler/snippets/ 


 

  Kickstart 模板  位置 : /var/lib/cobbler/kickstarts/ 


 

  安装源镜像       位置 : /var/www/cobbler/ks_mirror/ （把它link到apache的发布目录，方便kickstart 工作时通过http下载安装镜像文件 ) 


 
 导入安装源 

 
  准备好安装光盘 (ISO)我的服务器上有这么多

 

 

```
[root@i51 Soft]# cd 镜像
像[root@i51 镜像]# ls
CentOS-5.10-x86_64-bin-DVD-1of2.iso  CentOS-6.5-x86_64-bin-DVD1.iso                       oracle_10201_for_linux32.iso
CentOS-5.10-x86_64-bin-DVD-2of2.iso  CentOS-7.0-1406-x86_64-DVD.iso                       redhat5_32
CentOS-5.5-i386-bin-DVD.iso          cn_windows_7_ultimate_with_sp1_x86_dvd_u_677486.iso  rhel-client-7.0-x86_64-dvd.iso
CentOS-6.4-i386-bin-DVD1.iso         kali-linux-1.0.9a-amd64.iso                          rhel-server-5.8-x86_64-dvd.iso
CentOS-6.4-i386-bin-DVD2.iso         Office_Professional_Plus_2013.1403512018.img         rhel-server-6.4-x86_64-dvd.iso
centOS-6.4-x86_64-bin-DVD1.iso       openfiler-2.3-x86-disc1.iso                          ubuntu-14.04-desktop-amd64.iso
像[root@i51 镜像]# pwd
/var/ftp/pub/Soft/镜像
```
 挂载 ISO 

```
[root@i51 镜像]# mkdir /mnt/Centos6.5
像[root@i51 镜像]# mount -o loop CentOS-6.5-x86_64-bin-DVD1.iso /mnt/Centos6.5/
```
 导入安装源 到Cobbler中 

  通过这个环节， Cobbler 会把安装的镜像ISO 拷贝到 源安装镜像目录下: /var/www/cobbler/ks_mirror/ 


 

  操作命令如下: 


 

```
[root@i51 镜像]# cobbler import --path=/mnt/Centos6.5 --name=CentOS6.5 --arch=x86_64
task started: 2014-10-23_134307_import
task started (id=Media import, time=Thu Oct 23 13:43:07 2014)
Found a candidate signature: breed=redhat, version=rhel6
Found a matching signature: breed=redhat, version=rhel6
Adding distros from path /var/www/cobbler/ks_mirror/CentOS6.5-x86_64:
creating new distro: CentOS6.5-x86_64
trying symlink: /var/www/cobbler/ks_mirror/CentOS6.5-x86_64 -> /var/www/cobbler/links/CentOS6.5-x86_64
creating new profile: CentOS6.5-x86_64
associating repos
checking for rsync repo(s)
checking for rhn repo(s)
checking for yum repo(s)
starting descent into /var/www/cobbler/ks_mirror/CentOS6.5-x86_64 for CentOS6.5-x86_64
processing repo at : /var/www/cobbler/ks_mirror/CentOS6.5-x86_64
need to process repo/comps: /var/www/cobbler/ks_mirror/CentOS6.5-x86_64
looking for /var/www/cobbler/ks_mirror/CentOS6.5-x86_64/repodata/*comps*.xml
Keeping repodata as-is :/var/www/cobbler/ks_mirror/CentOS6.5-x86_64/repodata
*** TASK COMPLETE ***
```
 

  参数说明:  


 

  --name  为安装源定义一个名字 


 

  --arch    指定安装源是32位还是64位、ia64, 目前支持的选项有: x86│x86_64│ia64 


 

  注意： 这个安装源的唯一标示 就是根据这两个参数来定义 


 

  本例导入成功后，安装源的唯一标示就是：centos6.3-x86_64 ，如果重复，系统会提示导入失败 


 

  更多用法，可以查看官方文档: man cobbler ,然后查找 import 的配置 


 

  相关管理命令: 


 

  //查看导入源库列表 


 

```
[root@i51 镜像]# cobbler distro list
   CentOS6.5-x86_64
```
 


#### 配置dhcp服务

 
 首先修改cobbler配置，让cobbler来管理dhcp服务，编辑文件/etc/cobbler/settings 

 

```
manage_dhcp: 1
```
 接下来修改/etc/cobbler/dhcp.template，此文件是cobbler管理dhcp的模板 
 本例中只需要修改如下部分 

 

```
subnet 192.168.1.0 netmask 255.255.255.0 {
     option routers             192.168.1.1;
     option domain-name-servers 192.168.1.1;
     option subnet-mask         255.255.255.0;
     range dynamic-bootp        192.168.1.30 192.168.1.80;
     default-lease-time         21600;
     max-lease-time             43200;
     next-server                $next_server;
     class "pxeclients" {
          match if substring (option vendor-class-identifier, 0, 9) = "PXEClient";
          if option pxe-system-type = 00:02 {
                  filename "ia64/elilo.efi";
          } else if option pxe-system-type = 00:06 {
                  filename "grub/grub-x86.efi";
          } else if option pxe-system-type = 00:07 {
                  filename "grub/grub-x86_64.efi";
          } else {
                  filename "/pxelinux.0";
          }
     }

}
```
 IP地址段根据你实际环境中的给定 
 其他可以不用改 

 
 重启xinetd 

 

```
[root@i51 镜像]# /etc/init.d/xinetd restart
Stopping xinetd:                                           [  OK  ]
Starting xinetd:                                           [  OK  ]
```
 


#### 同步cobbler配置

 

```
cobbler sync
```
 输出如下 

```
[root@i51 镜像]cobbler syncrt
task started: 2014-10-23_141019_sync
task started (id=Sync, time=Thu Oct 23 14:10:19 2014)
running pre-sync triggers
cleaning trees
removing: /var/www/cobbler/images/CentOS6.5-x86_64
removing: /var/lib/tftpboot/pxelinux.cfg/default
removing: /var/lib/tftpboot/grub/images
removing: /var/lib/tftpboot/grub/grub-x86.efi
removing: /var/lib/tftpboot/grub/grub-x86_64.efi
removing: /var/lib/tftpboot/grub/efidefault
removing: /var/lib/tftpboot/images/CentOS6.5-x86_64
removing: /var/lib/tftpboot/s390x/profile_list
copying bootloaders
trying hardlink /var/lib/cobbler/loaders/grub-x86.efi -> /var/lib/tftpboot/grub/grub-x86.efi
trying hardlink /var/lib/cobbler/loaders/grub-x86_64.efi -> /var/lib/tftpboot/grub/grub-x86_64.efi
copying distros to tftpboot
copying files for distro: CentOS6.5-x86_64
trying hardlink /var/www/cobbler/ks_mirror/CentOS6.5-x86_64/images/pxeboot/vmlinuz -> /var/lib/tftpboot/images/CentOS6.5-x86_64/vmlinuz
trying hardlink /var/www/cobbler/ks_mirror/CentOS6.5-x86_64/images/pxeboot/initrd.img -> /var/lib/tftpboot/images/CentOS6.5-x86_64/initrd.img
copying images
generating PXE configuration files
generating PXE menu structure
copying files for distro: CentOS6.5-x86_64
trying hardlink /var/www/cobbler/ks_mirror/CentOS6.5-x86_64/images/pxeboot/vmlinuz -> /var/www/cobbler/images/CentOS6.5-x86_64/vmlinuz
trying hardlink /var/www/cobbler/ks_mirror/CentOS6.5-x86_64/images/pxeboot/initrd.img -> /var/www/cobbler/images/CentOS6.5-x86_64/initrd.img
Writing template files for CentOS6.5-x86_64
rendering DHCP files
generating /etc/dhcp/dhcpd.conf
rendering TFTPD files
generating /etc/xinetd.d/tftp
processing boot_files for distro: CentOS6.5-x86_64
cleaning link caches
running post-sync triggers
running python triggers from /var/lib/cobbler/triggers/sync/post/*
running python trigger cobbler.modules.sync_post_restart_services
running: dhcpd -t -q
received on stdout: 
received on stderr: 
running: service dhcpd restart
received on stdout: Starting dhcpd: [  OK  ]

received on stderr: 
running shell triggers from /var/lib/cobbler/triggers/sync/post/*
running python triggers from /var/lib/cobbler/triggers/change/*
running python trigger cobbler.modules.scm_track
running shell triggers from /var/lib/cobbler/triggers/change/*
*** TASK COMPLETE ***
```
 cobbler会自动进行初始化工作，移除已经存在的启动项，然后根据模板拷贝loader文件。之后再生成pxe的配置文件，生成dhcp的配置文件，最后再重启dhcp服务。 


 至此，就可以使用虚拟机来测试cobbler安装了。 
 OK开启真机或者虚拟机来测试注意开启网络引导 网卡要开启PXE  引导程序 

 
 测试如下 

 
 ![http://static.oschina.net/uploads/space/2014/1023/141402_YtpC_1769595.png](http://static.oschina.net/uploads/space/2014/1023/141402_YtpC_1769595.png)

 
 登陆后如下默认root密码为cobbler 

 
 ![http://static.oschina.net/uploads/space/2014/1023/144019_g99B_1769595.png](http://static.oschina.net/uploads/space/2014/1023/144019_g99B_1769595.png)

 

```
    # 在要重装的机器安装koan  
    yum install koan  
    #查看cobbler服务器有哪些安装盘  
    koan --list-profiles --server=192.168.1.243  
    #选择要重装的系统并重启  
    koan --replace-self --server=192.168.1.243 --profile=CentOS-5-4-x86-64  
    reboot  
```
 
 



 
 







	


