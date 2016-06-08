
 




 在使用KVM使用过程中，经常会需要增加网卡或硬盘。当然，在允许重启的情况下，可以通过"virsh edit 虚拟机名"的方式编辑xml配置文件，保存退出后。通过start 加载新的配置文件启动，从而完成新增硬件的目的。但如果在不停机的情况下呢？其实也很简单。具体如下：


 一、KVM动态新增网卡


 在有gui manager界面的情况下，通过点击几下就可以完成，这里不再介绍。以下主要介绍通过virsh命令在终端下的新增：






```
root@KVM  ~]#virsh attach-interface 361way --type bridge --source br1
[root@KVM  ~]#virsh domiflist 361way  查看vnet6为新增的网卡
Interface  Type       Source     Model       MAC
-------------------------------------------------------
vnet2      bridge     br2        virtio      52:54:00:06:12:f4
vnet6      bridge     br1        -           52:54:00:8d:d4:df
```

 上例中的361way为我guest主机名，可以通过virsh list查看获得。以上命令修改即时生效，但不会改动虚拟机XML文件，即重启机器后，新增的网卡还会消失。如果想要保存，可以通过导出xml文件 ，并编辑原xml文件为新文件的内容就OK 了。






```
[root@KVM  ~]# virsh dumpxml 361way >new361.xml
```




 这样重启后，主机也会使用新的配置 。为新的网卡配置IP 就更简单了：






```
[root@ipvs01 network-scripts]# cp ifcfg-eth0 ifcfg-eth1
[root@ipvs01 network-scripts]# vim ifcfg-eth1
DEVICE="eth1" #改为eth1
BOOTPROTO="static"
#HWADDR="52:54:00:06:12:f4" #mac注释掉或者改为上面domiflist中的值
IPADDR="192.168.122.45"  #修改为新IP
IPV6INIT="yes"
MTU="1500"
NETMASK="255.255.255.0"
NM_CONTROLLED="yes"
ONBOOT="yes"
TYPE="Ethernet"
```

 二、KVM动态新增硬盘


 新增硬盘和新增网卡操作手法相同，只不过命令略有不同，如下：






```
要添加的LV卷/dev/vg01/lv_add01
[root@KVM  ~]#virsh attach-disk 361way /dev/vg01/lv_add01 vdc
```




 同网卡一样，即时生效，但是虚拟机配置文件不会添加，重启后就没了，如果要将运行状态保存至XML文件中，可以用dumpxml命令，用之前最好将XML做个备份。






```
[root@KVM  ~]#virsh dumpxml 361way  >kvm_361way.xml  
```




 同样，ISO文件也可以disk的方式增加：






```
[root@KVM qemu]# virsh attach-disk 361way /root/tasks/win2003.iso vdd
Disk attached successfully
即时生效，成功后到361way中查看
[root@KVM_ipvs01 ~]# mount /dev/vdd /mnt/
[root@KVM_ipvs01 ~]# cd /mnt/
[root@KVM_ipvs01 mnt]# ll
total 3520
-r-xr-xr-x 1 root root     112 Mar  7  2007 autorun.inf
-r-xr-xr-x 1 root root  322730 Mar  7  2007 bootfont.bin
dr-xr-xr-x 1 root root  267478 Mar  7  2007 i386
dr-xr-xr-x 1 root root     184 Mar  7  2007 printers
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











