
 




 在 RHEL，CentOS，Fedora 等系统中，安装系统使用的程序名叫 anaconda，它属于 FedoraProject，由 Python 开发，能够提供图形或者文本界面用于系统安装。 Anaconda 安装程序最大的优点是：它可以用一个称之为 Kickstart

 的特性进行非交互式脚本安装。Kickstart 脚本是一个用来指定安装要求详情的简单 ASCII 文本文件。该脚本可用常规文本编辑器编写，或用 Kickstart 配置程序来生成。


 Kickstart 脚本通常有三个不同的部分。












 命令部分

 软件包部分

 脚本部分











 Anaconda 会忽略 Kickstart 脚本中所有以“#”开始的行和空行。


 一、Kickstart语法结构



 1、命令部分



 从文件的最开始直到出现以%packages 开始的行，这一部分都属于命令部分。命令行必须以可识别的关键字开始，并且所有与该关键字有关的参数都必须出现在同一行中。命令部分是用来指定安装程序需要的除软件选项外的所有标准信息。关键字在命令部分可以以任意次序出现。


 这部分中一般我们会指定安装源、分区信息、防火墙、用户组等。如下：









```
# 键盘类型设定
keyboard us
# 语言设定
lang en_US
# 时区、ntp服务器及硬件时钟设置
timezone [--utc] Asia/Shanghai --ntpservers=ntp1.aliyun.com
# 系统安装完成后的操作（重启或关机）
reboot | poweroff | halt
# 是否启用 selinux
selinux --enforcing | --disabled
# 系统的认证方式，这里选择密码认证加密算法sha512
authconfig --useshadow --passalgo=sha512
# 密码设定，明文或加密后的 root 密码
rootpw --plaintext 361way  或
rootpw --iscrypted 密码串
# 安装/升级 操作系统
install | upgrade
# 指明安装源或安装介质，如FTP 或 HTTP 路径
url --url=....
# 是否开启防火墙
firewall --disabled | --enabled --service=ssh,cups
# 系统第一次启动后是否进行用户配置
firstboot --disabled | --enabled
# 安装界面为 文本/图形
text | graphical
#允许通过vnc远程查看图形安装
vnc --password=361way
# bootloader 的安装位置，这里选择安装至 mbr 中
bootloader --location=mbr --boot-drive=sda
# 安装前清除系统的哪些分区，--all 表示清除所有分区
clearpart  --all --drivers=sda,sdb --initlabel
# 使用 clearpart --all 时，需要加上这个选项，否则安装过程会被暂停，需要手动选择
zerombr
# ignoredisk安装时忽略指定的磁盘
ignoredisk --drives=sdc
# 分区设定
part
part swap --size=2048                       # 对 swap 进行分区的示例
part /boot --fstype ext4 --size=100000      # 对 /boot 进行分区的示例
part pv.01 --size=8192                     # 创建一个 PV
volgroup vgname pvname                  # 创建 VG
logval /home --fstype ext4 --name=home --vgname=vgname --size=1024      # 创建一个逻辑卷的示例
# 网络配置并激活网络设备
network --drive=eth0 --bootproto=dhcp
# 默认服务配置
services --disabled=NetworkManager,ip6tables  --enabled=network,iptables
# 创建本地用户和组
group --name=admins --gid=10001
user --name=ybk --gecos="itybku" --groups=admins --password=test --plaintext
# 指定安装期间anaconda 将如何进行日志记录
logging --hosts=www.361way.com --level=info
#firstboot 确认系统首次启动时是否启动firstboot
firstboot --disabled
# 可以将其他文件的内容包含进 kickstart 文件中来，包含的文件必须是安装系统过程中能够访问的
%include 文件名
```













 2、软件包部分（%packages）



 软件包部分是用来指定需要安装的软件。这部分从以%packages 开头的行开始，直到下一个以 “%”字符开始的行为止。这一部分通常采用以下两种格式之一。









```
@ Component Name
package-name
```







 第一种格式是用软件组来指定软件，在这里一定要注意正确拼写软件组名称，并注意大小写。


 第二种格式是用来指定要安装的软件包的具体名称。如果%packages 行包含额外的--resolvedeps 参数，那么也会安装解决相依性的软件包。


 注：使用小横线（-）开头指定安装中不使用的软件包或组。


 示例如下：









```
%packages
@base
@core
@chinese-support
@fonts
chrony
rsync
grub2
firewalld
-NetworkManager
-autofs
```







 3、脚本部分



 脚本部分又分为预安装脚本（pre）及安装后脚本（post）两部分。这部分必须以%pre或%post开头，以%end结尾。两者顺序是没有关系的。有一点不同的是：预安装脚本不会在 chroot 环境中运行。


 官方文档中拿磁盘分区部分做为了这部分的示例，这里我发现一个更合适的例子 －－－ swap 分区设定。交换分区一般需要通过物理内存大小去定义 ，可以将该部分写入%pre 部分。如下：


 %pre 表示安装前脚本，此时的 Linux 系统环境为微缩版环境，脚本应尽可能简单。这里的脚本通常用于查询一些系统信息，然后根据这些信息动态的设定安装配置






```
%pre
# 设置分区的配置，配置 swap 大小为和 内存大小一样
#!/bin/sh
act_mem=`cat /proc/meminfo | grep MemTotal | awk '{printf("%d",$2/1024)}'`
echo "" > /tmp/partition.ks
echo "clearpart --all --initlabel" >> /tmp/partition.ks
echo "part /boot --fstype=ext3 --asprimary --size=200" >> /tmp/partition.ks
echo "part swap --fstype=swap --size=${act_mem}" >> /tmp/partition.ks
echo "part / --fstype=ext3 --grow --size=1" >> /tmp/partition.ks
%end
%include /tmp/partitions.ks
```




 %post 表示安装后脚本，此时的 Linux 系统环境为已经安装完成的系统。这里的脚本可以进行一些系统安装后配置，如公钥注入，仓库配置，第三方软件安装，系统服务配置文件修改等。这里举个简单的示例：









```
%post  --erroronfail
rm -f /etc/udev/rules.d/70*
cat > /etc/sysconfig/network-scripts/ifcfg-eth0 <<EOF
DEVICE=eth0
ONBOOT=yes
BOOTPROTO=static
IPADDR=10.144.189.71
NETMASK=255.255.240.0
EOF
%end
```




 二、ks文件生成验证及其他



 1、ks.cfg文件的生成



 ks.cfg 文件直接去写可能会感觉比较麻烦，不过系统为我们提供了两种快捷的方法得到该文件。


 方法1：自定义安装好的OS /root目录下会有anaconda-ks.cfg 文件生成，直接可以复制一份该文件进行编辑；


 方法2：使用图形化GUI 程序生成该配置文件。redhat/centos上有一个system-config-kickstart 包，安装好后启动5 level下打开该程序，可以傻瓜式的下一步下一步自定义生成该文件。


 注：


 A、一般人我不告诉他－－－在没有图形化下也可以通过以下终端命令生成ks.cfg文件，不过下面的方法生成的ks 文件同样是基本当前主机的配置生成的（运行一段时间或安装过其他包后，生成的配置比/root/anaconda-ks.cfg 内容要多）。






```
[root@361way ~]# system-config-kickstart  --generate /tmp/test.cfg
```




 B、system-config-kickstart 不支持生成高级ks配置，如LVM 、软RAID等。


 2、ks文件的验证



 yum 源里有一个python写的工具包pykickstart ，其中包含了几个比较有用的工具 ，其中就包含对ks语法验证工具ksvalidator ，具体示例如下：









```
[root@361way ~]# ksvalidator /tmp/anaconda-ks.cfg
kickstart文件的第16 行发生问题:
Unknown command: netwrk
```




 上面的配置文件中network 部分我去掉了一个字母o ，其就会提到在某一行发生了什么错误。如果执行后无任何输出，表示该文件无语法错误。


 3、rhel 7相对于rhel 6 的变化



 由于rhel7 相对于之前的版本做了很大的变化，kickstart 文件的语法也在一些方面做了变动。不同不必担心的是。pykickstart 工具包中的ksverdiff 可以帮助我们了解两者的区别，如下：









```
[root@361way ~]# ksverdiff --help
Usage: ksverdiff [options]
Options:
  -h, --help      show this help message and exit
  -f F, --from=F
  -t T, --to=T
[root@361way ~]# ksverdiff -f rhel6 -t rhel7
以下命令在 rhel7 中被移除：
monitor interactive
以下命令在 rhel7 中不推荐：
upgrade
以下命令在 rhel7 中被添加：
btrfs realm eula liveimg
以下选项添加到 logvol ，在 rhel7 中：
--metadatasize --thin --thinpool --chunksize --label --resize --poolname
以下选项从 logvol 中移除，在 rhel7：
--bytes-per-inode
以下选项添加到 firewall ，在 rhel7 中：
--remove-service
以下选项从 firewall 中移除，在 rhel7：
--telnet
……………………省略
```




 4、常用项总结



 kickstart 可配置项虽然比较多，但大部分在企业使用场景中是固定不变的，我们一般安装时需要关注的几个比较重要的配置部分是：









```
%packages
auth
url
%post
clearpart
services
rootpw
part
timezone
network
```




 三、利用ks文件安装



 我在之前的 [kvm虚拟化小结（三）guest安装](http://www.361way.com/kvm-guest-install/3162.html) 篇中就已经提到过使用ks 文件进行安装的示例，这里还是以kvm 中安装虚拟机为例，可以以下引用ks部分，自动化完成OS的安装。









```
virt-install -n rhce --hvm -r 2048  \
--vcpus=2 --os-type linux --os-variant=rhel7 \
--network bridge=br0 --nographics \
--location='http://192.168.0.102/centos7' \
--extra-args='ks=http://192.168.0.102/kvm_rhel7.ks ksdevice=eth0 ip=192.168.0.120 netmask=255.255.255.0 dns=8.8.8.8 gateway=192.168.0.1 text console=tty0 console=ttyS0,115200n8 serial' \
--disk path=/data/img/rhce/centos7.img,size=30 
```




 当然实际应用中，并不局限于虚拟机的安装 ，同样适用于物理机的安装。而且在很多像cobbler之类的自动化安装方案中也是通过对ks的二次封装搞出的解决方案。





 参考页面：


 [RHEL7 kickstart 文档](https://access.redhat.com/documentation/zh-CN/Red_Hat_Enterprise_Linux/7/html/Installation_Guide/sect-kickstart-syntax.html)





 [fedora Anaconda项目wiki页](https://fedoraproject.org/wiki/Anaconda/Kickstart/zh-cn)
















 [RSS](http://www.361way.com/feed)
[Google](http://fusion.google.com/add?feedurl=http://www.361way.com/feed)

[Youdao](http://reader.youdao.com/#url=http://www.361way.com/feed)

[Xian Guo](http://www.xianguo.com/subscribe.php?url=http://www.361way.com/feed)

[Zhua Xia](http://www.zhuaxia.com/add_channel.php?url=http://www.361way.com/feed)

[My Yahoo!](http://add.my.yahoo.com/rss?url=http://www.361way.com/feed)

[newsgator](http://www.newsgator.com/ngs/subscriber/subfext.aspx?url=http://www.361way.com/feed)

[Bloglines](http://www.bloglines.com/sub/http://www.361way.com/feed)

[iNezha](http://inezha.com/add?url=http://www.361way.com/feed)











