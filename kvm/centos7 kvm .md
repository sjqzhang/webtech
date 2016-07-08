
 




 在centos 6 环境下KVM的安装部分，我写过[kvm虚拟化小结（一）kvm环境安装](http://www.361way.com/kvm-summary-env/2832.html) 。由于centos 7较之前的版本有了很大的变化，目前测试了centos 7 环境下kvm的安装与搭建，具体如下。


 一、安装kvm 软件






 由于之前已做过较详细的 kvm 的安装与总结，这里只大致列下步骤：









```
[root@361way ~]# yum -y install qemu-kvm libvirt virt-install bridge-utils
[root@361way ~]# lsmod | grep kvm  # make sure modules are loaded
kvm                   441119  0
[root@361way ~]# systemctl start libvirtd
[root@361way ~]# systemctl enable libvirtd 
```




 注：centos7上服务的管理方式换成了systemctl 。





 二、配置网卡桥接



 centos7上默认已不再是eth0、eth1 ，我的pc server上安装好的第一块网卡变成了enp3s0 ，修改步骤和centos 6上没有区别，如下

  






```
[root@361way ~]# cd /etc/sysconfig/network-scripts/
[root@361way network-scripts]# cat ifcfg-br0
TYPE=Bridge
BOOTPROTO=none
DEVICE=br0
ONBOOT=yes
IPADDR0=192.168.0.102
PREFIX0=24
GATEWAY0=192.168.0.1
[root@361way network-scripts]# cat ifcfg-enp3s0
DEVICE=enp3s0
TYPE=Ethernet
ONBOOT=yes
BRIDGE=br0
[root@361way ~]reboot
[root@361way network-scripts]# ifconfig
br0: flags=4163  mtu 1500
        inet 192.168.0.102  netmask 255.255.255.0  broadcast 192.168.0.255
        inet6 fe80::7a24:afff:fe46:ca60  prefixlen 64  scopeid 0x20
        ether 78:24:af:46:ca:60  txqueuelen 0  (Ethernet)
        RX packets 129  bytes 14676 (14.3 KiB)
        RX errors 0  dropped 0  overruns 0  frame 0
        TX packets 148  bytes 21994 (21.4 KiB)
        TX errors 0  dropped 0 overruns 0  carrier 0  collisions 0
enp3s0: flags=4163  mtu 1500
        ether 78:24:af:46:ca:60  txqueuelen 1000  (Ethernet)
        RX packets 129  bytes 16482 (16.0 KiB)
        RX errors 0  dropped 0  overruns 0  frame 0
        TX packets 148  bytes 21994 (21.4 KiB)
        TX errors 0  dropped 0 overruns 0  carrier 0  collisions 0
lo: flags=73  mtu 65536
        inet 127.0.0.1  netmask 255.0.0.0
        inet6 ::1  prefixlen 128  scopeid 0x10
        loop  txqueuelen 0  (Local Loopback)
        RX packets 9  bytes 728 (728.0 B)
        RX errors 0  dropped 0  overruns 0  frame 0
        TX packets 9  bytes 728 (728.0 B)
        TX errors 0  dropped 0 overruns 0  carrier 0  collisions 0
virbr0: flags=4099  mtu 1500
        inet 192.168.122.1  netmask 255.255.255.0  broadcast 192.168.122.255
        ether a6:88:9f:14:b2:66  txqueuelen 0  (Ethernet)
        RX packets 0  bytes 0 (0.0 B)
        RX errors 0  dropped 0  overruns 0  frame 0
        TX packets 1  bytes 90 (90.0 B)
        TX errors 0  dropped 0 overruns 0  carrier 0  collisions 0
[root@361way network-scripts]# ip add show
1: lo:  mtu 65536 qdisc noqueue state UNKNOWN
    link/loopback 00:00:00:00:00:00 brd 00:00:00:00:00:00
    inet 127.0.0.1/8 scope host lo
       valid_lft forever preferred_lft forever
    inet6 ::1/128 scope host
       valid_lft forever preferred_lft forever
2: enp3s0:  mtu 1500 qdisc pfifo_fast master br0 state UP qlen 1000
    link/ether 78:24:af:46:ca:60 brd ff:ff:ff:ff:ff:ff
3: br0:  mtu 1500 qdisc noqueue state UP
    link/ether 78:24:af:46:ca:60 brd ff:ff:ff:ff:ff:ff
    inet 192.168.0.102/24 brd 192.168.0.255 scope global br0
       valid_lft forever preferred_lft forever
    inet6 fe80::7a24:afff:fe46:ca60/64 scope link
       valid_lft forever preferred_lft forever
4: virbr0:  mtu 1500 qdisc noqueue state DOWN
    link/ether a6:88:9f:14:b2:66 brd ff:ff:ff:ff:ff:ff
    inet 192.168.122.1/24 brd 192.168.122.255 scope global virbr0
       valid_lft forever preferred_lft forever</no-carrier>,broadcast,multicast,up>,multicast,up,lower_up>,multicast,up,lower_up>,up,lower_up>,broadcast,multicast>,loopback,running>,broadcast,running,multicast>,broadcast,running,multicast>
```




 注：由于ip 命令属于iproute2软件包中的工具，由于代替旧的ifconfig命令，尽可能的习惯使用新的命令和工具包来淘汰老的软件和工具。








 三、selinux防火墙关闭










```
# setenforce  0
# sed -i 's/=enforcing/=disabled/g' /etc/selinux/config
```





















 [RSS](http://www.361way.com/feed)
[Google](http://fusion.google.com/add?feedurl=http://www.361way.com/feed)

[Youdao](http://reader.youdao.com/#url=http://www.361way.com/feed)

[Xian Guo](http://www.xianguo.com/subscribe.php?url=http://www.361way.com/feed)

[Zhua Xia](http://www.zhuaxia.com/add_channel.php?url=http://www.361way.com/feed)

[My Yahoo!](http://add.my.yahoo.com/rss?url=http://www.361way.com/feed)

[newsgator](http://www.newsgator.com/ngs/subscriber/subfext.aspx?url=http://www.361way.com/feed)

[Bloglines](http://www.bloglines.com/sub/http://www.361way.com/feed)

[iNezha](http://inezha.com/add?url=http://www.361way.com/feed)











