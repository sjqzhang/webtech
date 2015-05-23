#cobbler pxe全自动安装linux
===

Centos环境(开发包)
### 1. 软件包的安装
```shell
# rpm -Uhv
http://download.fedora.redhat.com/pub/epel/5/i386/epel-release-5-3.noarch.rpm
# yum -y install tftp-server httpd dhcp yum-utils
# yum -y install cobbler
或者采用以下方式

(1).环境:Centos54，网上下载的安装包:
下载网址: http://rpm.pbone.net/
cobbler-1.6.2-1.el5.kb.noarch.rpm
libyaml-0.1.2-3.el5.kb.i386.rpm
python-cheetah-2.0.1-1.el5.kb.1.i386.rpm
python-netaddr-0.5.2-1.el5.kb.noarch.rpm
python-simplejson-2.0.1-1.el5.kb.1.i386.rpm
PyYAML-3.08-4.el5.kb.i386.rpm

(2).光盘中现有的软件包:
tftp-server-0.49-2.el5.centos.i386.rpm
xinetd-2.3.14-10.el5.i386.rpm
mod_python-3.2.8-3.1.i386.rpm
createrepo-0.4.11-3.el5.noarch.rpm
mkisofs-2.01-10.7.el5.i386.rpm
dhcp-3.0.5-21.el5.i386.rpm
httpd-2.2.3-31.el5.centos.i386.rpm

(3).需要启动的服务
# service httpd start
# chkconfig httpd on
# service xinetd start
# chkconfig xinetd on
# chkconfig tftp on
# service cobblerd start
# chkconfig cobblerd on

(4).cobbler配置文件
cobbler目录及文件
cobbler相关配置文件: /etc/cobbler
cobbler数据存储目录: /var/www/cobbler
dhcp配置文件: /etc/dhcpd.conf
dhcp租期缓存文件: /var/lib/dhcpd/dhcpd.leases
pxe配置文件: /tftpboot/pxelinux.cfg/default
ks模板文件: /var/lib/cobbler/kickstarts
说明: apache rpm安装方式的默认主目录是/var/www/，就是为了确保cobbler的配置在www上只够访问。
```

### 2. 配置tftp-server
```shell
# vi /etc/xinetd.d/tftp
  disable = no
# service xinetd restart

###  3. 配置cobber
  (1) 配置主配置环境文件
# vi /etc/cobbler/settings
  server:  192.168.213.138
  next_server: 192.168.213.138

# set to 1 to enable Cobbler's DHCP management features.
# the choice of DHCP management engine is in /etc/cobbler/modules.conf
manage_dhcp: 1
```

(2) 配置dhcp模板文件
```shell
# vi /etc/cobbler/dhcp.template
可以根据本网段的地址的DHCP的配置进行修改，只需要修改网段就可以了，其它的不动，cobbler将会利用dhcp.template模板文件生成/etc/dhcpd.conf。
ddns-update-style interim;
allow booting;
allow bootp;
omapi-port $omapi_port;
ignore client-updates;
set vendorclass = option vendor-class-identifier;
subnet 192.168.213.0 netmask 255.255.255.0 {
    option routers             192.168.213.5;
    option domain-name-servers 192.168.213.1;
    option subnet-mask         255.255.255.0;
    range dynamic-bootp        192.168.213.100 192.168.213.199;
    filename                   "/pxelinux.0";
    default-lease-time         21600;
    max-lease-time             43200;
    next-server                $next_server;
}
group {
    host $iface.name {
        hardware ethernet $mac;
        fixed-address $iface.ip_address;
        option subnet-mask $iface.subnet;
        option routers $iface.gateway;
        filename "$iface.filename";
        next-server $next_server;
    }
}
```
### 4. 导入CentOS 安装DVD ISO中的文件：
```shell
# mount -o loop CentOS-5.4-i386-bin-DVD.iso /mnt/cdrom/
或mount /dev/cdrom /mnt/cdrom/
# cobbler import --mirror=/mnt/cdrom --name=CentOS-i386
拷贝文件的过程，需要花一点时间。
注意:2.x的版本与1.6版本的区别，如下:
cobbler import --path=/mnt/cdrom --name=CentOS-i386

# cobbler distro list
CentOS-i386
CentOS-xen-i386

# cobbler sync   开启dhpc的服务
执行后，cobbler将会利用dhcp.template模板文件生成/etc/dhcpd.conf，先执行这个命令，dhcp才能启动。

# cobbler check  检查cobbler的环境，还有什么问题。
# service xinetd restart
# service dhcpd  restart
# service cobblerd start
# 正常的话，全部显示OK
```

### 5. kickstart文件创建 (centos5.4安装成功)
```shell
# vi /var/lib/cobbler/kickstarts/default.ks
# 以上位置是cobbler自动读的ks文件的位置，真正做到全自动。

lang zh_CN.UTF-8
langsupport zh_CN.UTF-8 en_US --default=en_US
keyboard us
mouse
timezone Asia/Shanghai
rootpw 1234
reboot
install
url --url=http://192.168.213.253/cobbler/ks_mirror/CentOS-i386
#url --url=ftp://192.168.213.22/pub
#nfs --server=192.168.213.22 --dir=/disk
text
bootloader --location=mbr
zerombr yes
clearpart --drives hda --initlabel
part /boot --fstype ext3 --size=100
part swap --size=500
part / --fstype ext3 --size=100 --grow
auth --useshadow --enablemd5
network --bootproto=dhcp --device=eth0
#network --device=eth0 --bootproto=static --ip=192.168.129.144 --netmask=255.255.255.0 --gateway=192.168.129.1 --nameserver=202.96.128.68 --hostname=test
firewall --disabled
selinux --disabled
skipx
%packages
@ Chinese Support
@ Development Tools
@ Dialup Networking Support
%post
```

### 6. 修改pxe启动文件

```shell
说明: 如果找到ks的默认位置的话，就不用自己修改下面内容。参考5.
# vi /tftpboot/pxelinux.cfg/default
... ks=http://192.168.213.253/cobbler/CentOS-i386.ks
# 确定ks是一个能访问的，可以通过IE访问确认一下。
实验1: 默认情况下kickstart是有一个位置的，当时找不到那个文件在哪里，好像是用python脚本控制的。我就没有用那个，自己指定了一个位置。
实验2: 不同版本默认ks文件的位置不一样,1.6的在/var/lib/cobbler/kickstarts

7. 客户端启动
(1) 网卡启动
(2) 选择进入的系统，是本地还是安装或修复。
(3) 确认kickstart模板的位置进行安装。(失败)的话，可按正常网络方式安装。
(4) http方式安装。服务器:192.168.213.138 目录:/cobbler/ks_mirror/CentOS/
(5) 开始安装过程。
说明: 以上配置过程是centos5.4上安装成功。cobbler方式比linux的传统的pxe方式稍微简化了一些步骤。
```
