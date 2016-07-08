
 




 qemu/kvm有三种快照，分别是内部（保存在硬盘镜像中）/外部（保存为另外的镜像名）/虚拟机状态 ，很多网站上提供的资料和教程也大多是内部快照功能。内部快照不支持raw格式的镜像文件，所以如果想要使作内部快照，需要先将镜像文件转换成qcow2格式。转换命令为：






```
qemu-img convert -f raw -O qcow2 centos.img centos.qcow2
```




 具体可以通过如下方法查看镜像文件格式：






```
[root@localhost file]# qemu-img info centos.qcow2
image: centos.qcow2
file format: qcow2
virtual size: 30G (32212254720 bytes)
disk size: 865M
cluster_size: 65536
[root@localhost file]# 
```







 一、创建快照



 创建前先在虚拟机创建一个标记文件，在后面快照回滚时，可以通过对比该文件查看具体的效果 。






```
[root@localhost ~]# virsh console ppd_centos
Connected to domain ppd_centos
Escape character is ^]
login: root
Password:
Last login: Thu Apr 10 10:17:54 on ttyS0
[root@localhost ~]# ls
anaconda-ks.cfg  install.log  install.log.syslog
[root@localhost ~]# cd /opt/
[root@localhost opt]# ls
[root@localhost opt]# touch abc
[root@localhost opt]# echo 123 > abc
[root@localhost opt]# ls
abc
```




 如下所示，连接到虚拟机后，在/opt目录下新建了一个文件，并在文件内写入123 。接下来开始创建快照及查看快照信息： 






```
[root@localhost file]# virsh snapshot-create ppd_centos
Domain snapshot 1397528914 created
[root@localhost file]# virsh snapshot-list ppd_centos
 Name                 Creation Time             State
------------------------------------------------------------
 1397528914           2014-04-15 10:28:34 +0800 running
```




 这里查看快照信息也可以通过qemu-img命令查看，后面也会提到。接下来使用snapshot-current命令查看快照状态配置文件。






```
[root@localhost file]# virsh snapshot-current ppd_centos
<domainsnapshot>
  <name>1397528914</name>
  <state>running</state>
  <creationTime>1397528914</creationTime>
  <memory snapshot='internal'/>
  <disks>
    <disk name='vda' snapshot='internal'/>
    <disk name='hdc' snapshot='no'/>
  </disks>
  <domain type='kvm'>
    <name>ppd_centos</name>
    <uuid>7a8638f6-912f-4ed6-0a3c-b5d1e3f187c3</uuid>
    <memory unit='KiB'>1048576</memory>
    <currentMemory unit='KiB'>1048576</currentMemory>
    <vcpu placement='static'>1</vcpu>
    <os>
      <type arch='x86_64' machine='rhel6.5.0'>hvm</type>
      <boot dev='hd'/>
    </os>
    <features>
  ……………………省略
```







 该命令执行的结果实际上是查看/var/lib/libvirt/qemu/snapshot/guest主机名/下的以快照name命令的xml文件 。





 二、快照的回滚



 我们再次修改标记文件，并继续创建快照






```
[root@localhost opt]# echo "456" >> abc
[root@localhost opt]# cat abc
123
456
[root@localhost opt]# 
```

创建快照和指定快照name的方法如下：



```
[root@localhost ppd_centos]# virsh snapshot-create ppd_centos
Domain snapshot 1397529759 created
[root@localhost ppd_centos]# virsh snapshot-list ppd_centos
 Name                 Creation Time             State
------------------------------------------------------------
 1397528914           2014-04-15 10:28:34 +0800 running
 1397529759           2014-04-15 10:42:39 +0800 running
[root@localhost ppd_centos]# virsh snapshot-create-as ppd_centos test
Domain snapshot test created
virsh # snapshot-list ppd_centos
 Name                 Creation Time             State
------------------------------------------------------------
 1397528914           2014-04-15 10:28:34 +0800 running
 1397529759           2014-04-15 10:42:39 +0800 running
 test                 2014-04-15 10:46:44 +0800 running
```




 上面使用了snapshot-create-as 参数指定name值，上面提到的使用qemu-img命令查看快照信息的操作如下：






```
[root@localhost file]# qemu-img info centos.qcow2
image: centos.qcow2
file format: qcow2
virtual size: 30G (32212254720 bytes)
disk size: 1.6G
cluster_size: 65536
Snapshot list:
ID        TAG                 VM SIZE                DATE       VM CLOCK
1         1397528914             252M 2014-04-15 10:28:34   00:53:07.200
2         1397529759             252M 2014-04-15 10:42:40   01:06:19.698
3         test                   252M 2014-04-15 10:46:44   01:08:03.934
[root@localhost file]# 
```




 恢复之前最好先关闭虚拟机  virsh shutdown 或virsh destroy ,当然在不关闭的情况下也可以做回滚，不过有新数据写入时会出现问题。还是建议先停机再做回滚

 。不停机回滚时，会有如下提示：






```
[root@localhost file]# virsh snapshot-revert ppd_centos 1397529759
error: revert requires force: Target controller type ide does not match source usb
```




 这时候需要加上--force才可以 ，如下






```
[root@localhost file]# virsh snapshot-revert --force ppd_centos test
或
[root@localhost file]# virsh snapshot-revert --force ppd_centos  1397528914
```




 回滚的速度是非常快的，一般1－2秒的时间就OK了，再去查看状态，如下：









```
[root@localhost file]# virsh snapshot-current ppd_centos
<domainsnapshot>
  <name>1397528914</name>
  <state>running</state>
  <creationTime>1397528914</creationTime>
  <memory snapshot='internal'/>
……………………省略
```

此时再去查看标记文件：



```
[root@localhost opt]# virsh console ppd_centos
Connected to domain ppd_centos
Escape character is ^]
[root@localhost opt]# ls
abc
[root@localhost opt]# cat abc
123

```




 这时，不难发现标记文件已经恢复到初始时的一个状态。





 三、删除快照 







```
[root@localhost localhost]# virsh snapshot-delete ppd_centos 1397528914
Domain snapshot 1397528914 deleted
```




 快照的删除没什么好说，过程也很快，1－2秒钟的时候，不过快照删除后，通过ls -al查看发现qcow2镜像文件的大小并不会减少，而在create快照时会增加。


 最后，我顺便对raw格式的镜像文件做一个内部快照测试：









```
[root@localhost libvirt]# virsh snapshot-create ppd_win7
error: unsupported configuration: internal snapshot for disk hda unsupported for storage type raw
```

可以发现其出现了报错提示不支持内部快照 。











 总结：



 关于kvm的内部快照备份时间比较长，一般要5－10分钟左右，造成该问题的原因是：savevm保存的是当前客户机系统的运行状态（包括：内存、寄存器、CPU执行等的状态），保存为一个文件，而且要在loadvm时可以完全恢复，这个过程比较复杂，如果客户机里面的内存很大、运行的程序很多，savevm比较耗时，也是可以理解的。暂时很难有什么改进方法。


 而往往我们并不需要如何完整的一个快照，现网中可能只需要做disk的一个快照就OK了，所以这就要提到外部快照（External snapshot）。
















 [RSS](http://www.361way.com/feed)
[Google](http://fusion.google.com/add?feedurl=http://www.361way.com/feed)

[Youdao](http://reader.youdao.com/#url=http://www.361way.com/feed)

[Xian Guo](http://www.xianguo.com/subscribe.php?url=http://www.361way.com/feed)

[Zhua Xia](http://www.zhuaxia.com/add_channel.php?url=http://www.361way.com/feed)

[My Yahoo!](http://add.my.yahoo.com/rss?url=http://www.361way.com/feed)

[newsgator](http://www.newsgator.com/ngs/subscriber/subfext.aspx?url=http://www.361way.com/feed)

[Bloglines](http://www.bloglines.com/sub/http://www.361way.com/feed)

[iNezha](http://inezha.com/add?url=http://www.361way.com/feed)











