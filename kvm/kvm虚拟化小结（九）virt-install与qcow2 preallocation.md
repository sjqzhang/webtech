
 




 本篇和 [ubuntu下kvm的安装](http://www.361way.com/ubuntu-install-kvm/3352.html)   本属同篇，不过细想后感觉有必要将其单独拎出来做个总结 。之前在创建KVM 虚拟机时，宿主机都是通过先按raw格式进行安装后，再转化成qcow2格式，最终edit xml文件，并virsh start再重新启动 。之前网上也看到过很多一步直接安装成qcow2格式的示例 ，不过拿来下在环境上试的时候一直不行 。今天在ubuntu上搭建zabbix虚拟机环境时，又想到网上查询下试一下该问题 。结果测试通过，而成功的重点在于创建qcow2镜像时，选择preallocation＝metadata选项 。


 一、qemu-img创建镜像文件



 创建raw格式镜像文件（默认创建的是该格式）






```
yang@yang-acer:/opt/test$ sudo qemu-img create /opt/img/test-raw.img 1G
Formatting '/opt/img/test-raw.img', fmt=raw size=1073741824 
```




 创建普通的qcow2格式镜像文件






```
yang@yang-acer:/opt/test$ sudo qemu-img create -f qcow2  /opt/img/test.qcow2 1G
Formatting '/opt/img/test.qcow2', fmt=qcow2 size=1073741824 encryption=off cluster_size=65536 lazy_refcounts=off
```




 创建 

#### 预分配

 

#### 元数据

选项 的qcow2格式镜像文件









```
yang@yang-acer:/opt/test$ sudo qemu-img create -f qcow2 -o preallocation=metadata /opt/img/test-metadata.qcow2 1G
Formatting '/opt/img/test-metadata.qcow2', fmt=qcow2 size=1073741824 encryption=off cluster_size=65536 preallocation='metadata' lazy_refcounts=off
```




 注：这里预分配元数据的叫法是我直译过来的，不知道这样称呼是否有问题 。只是希望能便于理解和区分。





 二、3种镜像文件的比较



 上面我们以三种方式创建了三个镜像文件，下面通过ls -l 、stat、qemu-img info、du四种方式查看下各自的不同：





 

#### ls -l 给出的结果








```
yang@yang-acer:/opt/img$ ll
-rw-r--r-- 1 root         root  1074135040  5月 23 15:52 test-metadata.qcow2
-rw-r--r-- 1 root         root      197120  5月 23 15:52 test.qcow2
-rw-r--r-- 1 root         root  1073741824  5月 23 15:52 test-raw.img
```




 ls -l 给出的结果看出，预分配元数据的 

#### qcow2格式的镜像文件

和 

#### raw格式的镜像文件

占用的大小接近，基本上都是1G ，而

#### 普通格式的qcow2镜像文件

占用的大小只有190K左右 。





 

#### stat 给出的结果








```
yang@yang-acer:/opt/img$ stat test-metadata.qcow2
  文件："test-metadata.qcow2"
  大小：1074135040      块：664        IO 块：4096   普通文件
设备：808h/2056d        Inode：530343      硬链接：1
权限：(0644/-rw-r--r--)  Uid：(    0/    root)   Gid：(    0/    root)
最近访问：2014-05-23 15:52:36.179523406 +0800
最近更改：2014-05-23 15:52:36.179523406 +0800
最近改动：2014-05-23 15:52:36.179523406 +0800
创建时间：-
yang@yang-acer:/opt/img$ stat test-raw.img
  文件："test-raw.img"
  大小：1073741824      块：0          IO 块：4096   普通文件
设备：808h/2056d        Inode：530341      硬链接：1
权限：(0644/-rw-r--r--)  Uid：(    0/    root)   Gid：(    0/    root)
最近访问：2014-05-23 15:52:17.915523541 +0800
最近更改：2014-05-23 15:52:17.915523541 +0800
最近改动：2014-05-23 15:52:17.915523541 +0800
创建时间：-
yang@yang-acer:/opt/img$ stat test.qcow2
  文件："test.qcow2"
  大小：197120          块：392        IO 块：4096   普通文件
设备：808h/2056d        Inode：530342      硬链接：1
权限：(0644/-rw-r--r--)  Uid：(    0/    root)   Gid：(    0/    root)
最近访问：2014-05-23 15:52:27.943523467 +0800
最近更改：2014-05-23 15:52:27.943523467 +0800
最近改动：2014-05-23 15:52:27.943523467 +0800
创建时间：-
```




 stat 给出的结果更为详细，其中文件大小情况和ls -l 的结果一致。





 

#### qemu-img info给出的结果








```
yang@yang-acer:/opt/img$ qemu-img info test-metadata.qcow2
image: test-metadata.qcow2
file format: qcow2
virtual size: 1.0G (1073741824 bytes)
disk size: 332K
cluster_size: 65536
Format specific information:
    compat: 1.1
    lazy refcounts: false
yang@yang-acer:/opt/img$ qemu-img info test-raw.img
image: test-raw.img
file format: raw
virtual size: 1.0G (1073741824 bytes)
disk size: 0
yang@yang-acer:/opt/img$ qemu-img info test.qcow2
image: test.qcow2
file format: qcow2
virtual size: 1.0G (1073741824 bytes)
disk size: 196K
cluster_size: 65536
Format specific information:
    compat: 1.1
    lazy refcounts: false
```




 qemu-img info给出的结果里面有两个我关以的指标，一个是virtual size 一个是disk size 。其中前者是qemu-img create时后面参数值的大小，三者都是1G ；后者的结果经对比和du file -sh的结果一致 。


 

#### 






 

#### du的结果：








```
yang@yang-acer:/opt/img$du test-metadata.qcow2  -sh
332K    test-metadata.qcow2
yang@yang-acer:/opt/img$du test-raw.img   -sh
0    test-raw.img
yang@yang-acer:/opt/img$du test.qcow2    -sh
196K    test.qcow2
```




 根据上面的结果来推测，创建预分配元数据的qcow2格式的镜像应该是参照了 原始的raw镜像文件的一些特点 做的一部分加快读写的优化 ，原理同raw一样，提前以空数据的方式将空间占用，而不是像普通的qcow2格式，按需递增占用 。而以上无论是raw格式还是qcow2预分配元数据的方式都不会直接将1G的空间完全占用，对宿主机的i节点占用上也没有影响，这个可以通过各文件创建和删除后df -hl和df -i 的结果来测试 。





 

#### 三、文件写后的镜像对比





 上面的测试结果是空文件下的对比 ，在镜像上按默认方式装完相同的系统后，我再次对三者进行了比对 。


 test-raw.img ：原始的raw镜像，并在其上安装centos 6系统


 test-centos.qcow2：为test-raw.img ，通过qemu-img convert -f raw -O qcow2 test-raw.img  test-centos.qcow2 命令转化后的img镜像


 centos.img：预分配元数据的qcow2格式的img，并在其上面安装centos6系统





 

#### ls -l 的结果：








```
yang@yang-acer:/opt$ ll
-rw-r--r--  1 root         root 21478375424  5月 23 18:03 centos.img
-rw-r--r--  1 root         root  2004942848  5月 23 18:25 test-centos.qcow2
-rw-r--r--  1 root         root 21474836480  5月 23 18:12 test-raw.img
```




 同安装系统之前的结果一样，预分配元数据的 

#### qcow2格式的镜像文件

和 

#### raw格式的镜像文件

占用的大小接近 ，test-centos.qcow2 的ls -l 的大小和实际du的结果相同。由于stat的大小和ls -l 的大小一致，这里不再列出 。





 

#### qemu-img info的结果：








```
yang@yang-acer:/opt$ qemu-img  info test-centos.qcow2
image: test-centos.qcow2
file format: qcow2
virtual size: 20G (21474836480 bytes)
disk size: 1.9G
cluster_size: 65536
Format specific information:
    compat: 1.1
    lazy refcounts: false
yang@yang-acer:/opt$ qemu-img  info test-raw.img
image: test-raw.img
file format: raw
virtual size: 20G (21474836480 bytes)
disk size: 2.3G
yang@yang-acer:/opt$ qemu-img  info centos.img
image: centos.img
file format: qcow2
virtual size: 20G (21474836480 bytes)
disk size: 2.3G
cluster_size: 65536
Format specific information:
    compat: 1.1
    lazy refcounts: false
```




 这里给出了实际占用大小和创建前大小，同样安装完系统后，预分配元数据的 

#### qcow2格式的镜像文件

和 

#### raw格式的镜像文件

占用的大小接近。





 

#### du的结果








```
yang@yang-acer:/opt$ du test-centos.qcow2 -sh
1.9G    test-centos.qcow2
yang@yang-acer:/opt$ du test-raw.img  -sh
2.3G    test-raw.img
yang@yang-acer:/opt$ du centos.img -sh
2.4G    centos.img
```










 四、总结



 以上测试结果，有利于理解以下两方面的优点：


 1、利用预分配，可以直接一步完成KVM guest主机qcow2镜像格式主机的安装 ，而不需要像之前装完再转换 。


 2、利用预分配，可以加速qcow2格式下的KVM guest主机的读写速度 （虽然这里的测试结果不涉及到具体的速度测试，说起来有点牵强） 。


 有兴趣的话，可以将在上面第三步的基础上再做下性能测试来验证上面的预分配对性能的影响 。





 关于预分配优化和KVM原理性的东西参考如下文章：


 [kvm IO优化的措施, KVM优化措施](http://blog.csdn.net/weiyuanke/article/details/7643180)


 [几种虚拟机镜像格式及其性能测试 （许艳军等人 研究论文）](http://www.chinacloud.cn/upload/2013-08/13082210382465.pdf)


 [Qcow2文件格式简述](http://bbs.linuxtone.org/thread-24268-1-1.html)


 [

](http://bbs.linuxtone.org/thread-24268-1-1.html)


 对于已有的镜像可以做如下的转换，来实现预分配：






```
qemu-img convert -f qcow2 -O qcow2 -o preallocation=metadata centos_test0_nopreallc.qcow2        centos_test0_preallc.qcow2
```




















直接利用qemu-img create -f qcow2 centos.img 20G生成虚拟机镜像文件然后安装centos6.3系统是可以成功的，不知道楼主怎么没有成功






想请教下，Geikiy是用的yum源安装的kvm还是后来源码编译安装的？






ext4直接创建可以使用。ext3格式的磁盘没有预分频功能，so，我在ext4是是可以直接创建的，yum安装kvm软件包







 [RSS](http://www.361way.com/feed)
[Google](http://fusion.google.com/add?feedurl=http://www.361way.com/feed)

[Youdao](http://reader.youdao.com/#url=http://www.361way.com/feed)

[Xian Guo](http://www.xianguo.com/subscribe.php?url=http://www.361way.com/feed)

[Zhua Xia](http://www.zhuaxia.com/add_channel.php?url=http://www.361way.com/feed)

[My Yahoo!](http://add.my.yahoo.com/rss?url=http://www.361way.com/feed)

[newsgator](http://www.newsgator.com/ngs/subscriber/subfext.aspx?url=http://www.361way.com/feed)

[Bloglines](http://www.bloglines.com/sub/http://www.361way.com/feed)

[iNezha](http://inezha.com/add?url=http://www.361way.com/feed)











