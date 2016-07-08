
 




 无意间在网上看到qemu支接支持通过vmdk格式（vmware虚拟化使用的格式）的镜像，而ghost的gho文件又可以通过ghost32.exe/ghost64.exe将gho文件直接转换为vmdk格式的文件。而将转化过的vmdk文件可以通过qemu-kvm/qemu-system（系统不同叫法不同）进行启动。本篇是根据该篇的介绍进行的一个验证。


 一、gho转vmdk



 下载symantec ghost 11.5以上版本，根据操作系统版本的不同，可以使用ghost32.exe或ghost64.exe进行转换，由于当前我使用系统版本是win7 64位，这里我选择了ghost64.exe，在cmd里执行如下命令：






```
e:>ghost64.exe -clone,mode=restore,src=winxpsp3.GHO,dst=xp.vmdk -batch -sure -VMDKSIZE=30720
```




 [ghost 11.5下载地址](http://dx.cr173.com/soft1/SymantecGhost_ha.rar)


 其中和vmdk相关的主要参数有：vmdksize、vmdktype、vmdksplit、vmdkAdapter几个，具体可以通过ghost64.exe /h获取帮助信息。


 [![http://www.361way.com/wp-content/uploads/2014/10/ghost.png](http://www.361way.com/wp-content/uploads/2014/10/ghost.png)](http://www.361way.com/wp-content/uploads/2014/10/ghost.png)


 

#### vmdksize

：指定了指定了转换在安装后系统盘的大小，以MB为单位，如上面的示例用法用，指定了其大小为30G


 

#### vmdktype

：指定了vmdk的格式，可选项有sparse(稀疏格式) 和flat（平的、直接的格式）两种。其中默认的转换是sparse格式，该格式相当于qcow2格式，其优点是当我们使用vmdksize转换后，并不会直占用所有的空间；flat格式相当于kvm下的raw格式，是一种简单的格式，其转换后默认会直接占用vmdksize指定的大小。不过需要注意的是，使用sparse格式，在kvm下不能直接安装使用，需要再使用qemu-img命令进行转换后才可以使用。而splat格式可以直接挂载使用。


 使用sparse格式转换后，只会生成一个dst文件；而使用flat格式转换后，会生成三个目标文件。如：









```
ghost64.exe -clone,mode=restore,src=winxpsp3.GHO,dst=flat.vmdk -batch -sure -VMDKSIZE=10240  -VMDKTYPE=flat
```




 使用上面的命令转换后，会有flat-s001.vmdk、flat.vmdk、GHOSTERR.TXT ，其中第一个文件最大，后面两个文件记述了转换的信息和过程。如下，是同一个gho文件转换为两种格式









```
e:>ghost64.exe -clone,mode=restore,src=winxpsp3.GHO,dst=sparse.vmdk -batch -sure -vmdktype=sparse  -VMDKSIZE=10240
e:>ghost64.exe -clone,mode=restore,src=winxpsp3.GHO,dst=flat.vmdk -batch -sure -vmdktype=flat  -VMDKSIZE=10240 
```







 在kvm下的查看的信息对比：









```
[root@361way vmdk]# ll
总用量 11553920
-rwxr-xr-x 1 root root 10737418240 10月  8 00:39 flat-s001.vmdk
-rw-r--r-- 1 root root  1093795840 10月  7 23:39 sparse.vmdk
[root@361way vmdk]# file flat-s001.vmdk
flat-s001.vmdk: x86 boot sector, Microsoft Windows XP MBR, Serial 0x90139013; partition 1: ID=0xc, active, starthead 1, startsector 63, 20964762 sectors, code offset 0xc0
[root@361way vmdk]# file sparse.vmdk
sparse.vmdk: VMware4 disk image
[root@361way vmdk]# qemu-img info flat-s001.vmdk
image: flat-s001.vmdk
file format: raw
virtual size: 10G (10737418240 bytes)
disk size: 10G
[root@361way vmdk]# qemu-img info sparse.vmdk
image: sparse.vmdk
file format: vmdk
virtual size: 10G (10737418240 bytes)
disk size: 1.0G
Format specific information:
    cid: 4294967293
    parent cid: 4294967295
    create type: monolithicSparse
    extents:
        [0]:
            virtual size: 10737418240
            filename: sparse.vmdk
            cluster size: 65536
            format:
[root@361way vmdk]# 
```







 从上面也可以看出，使用flat格式转换后在kvm下直接识别的类型就是raw格式。


 

#### vmdksplit

：指定转换时，默认的块大小。如上面的转换中如我使用默认转换与指定块大小为200M转换后，发现指定块大小200M时，后者的要大小前者。注意：这里有一个误区，转换后的文件仍旧是一个文件，并不是以200M大小为基数切割成多个文件，而是以200M为基数进行递增。


 

#### vmdkAdapter

：指文转换的硬盘格式，默认是IDE格式，因为这种格式兼容性最好。可选的还有SCSI（SCSI又分为Lsilogic和buslogic两种格式）。如果往KVM里进行迁移的话，建议使用默认的IDE分区，不然会有识别不到硬盘的问题，有也蓝屏的问题存在。


 二、kvm下使用vmdk镜像



 从qemu-kvm 官方文档上了解到自 v0.12 开始 qemu-kvm 已经支持 VMware 的硬盘格式 v6 和 v7 ，所以理论上无需转换vmdk文件的类型就可以直接支持vmdk格式，而这里我使用的是centos7源里的qemu-kvm（版本为qemu-kvm-1.5.3-60.el7_0.7.0.1.x86_64），所以理论上完全是可以支持的。我先是使用sparse格式的vmdk文件：









```
[root@361way vmdk]# /usr/libexec/qemu-kvm -drive file=sparse.vmdk -net none -m 4096 -daemonize -cpu host -smp 2 -vnc :20
或
[root@361way vmdk]# /usr/libexec/qemu-kvm -hda xp.vmdk -net none -m 4096 -daemonize -cpu host -smp 2 -vnc :20
qemu-kvm: -drive file=sparse.vmdk: could not open disk image sparse.vmdk: Driver 'vmdk' is not whitelisted
```




 注：如果使用的为ubuntu版本，qemu-kvm工具名为qemu-system 。


 发现有报错，将这里的sparse vmdk换成flat vmdk后，发现可以直接引导进入系统安装的界面（略去了文件向磁盘对拷的过程）。如下：


 [![http://www.361way.com/wp-content/uploads/2014/10/vmdk-gho-instal.png](http://www.361way.com/wp-content/uploads/2014/10/vmdk-gho-instal.png)](http://www.361way.com/wp-content/uploads/2014/10/vmdk-gho-instal.png)


 不过由于在命令行主要还是使用virsh管理虚拟机，而使用qemu-kvm命令开启的主机并不会自动导入到virsh里，所以这里也可以使用virsh方式进行管理。操作如下：









```
# yum install qemu-img libguestfs-tools libguestfs-winsupport virsh
# qemu-img convert virtual-xp.vmdk virtual-xp.img    //flat格式的可以省略此步，直接使用
```

按以下连接里的[mergeide.reg](https://github.com/361way/GHO_VMDK_KVM/blob/master/mergeide.reg)文件导入修改文件格式为IDE格式（处理vmdk或gho直接使用时的蓝屏问题），并使用[virtual-xp.xml ](https://github.com/361way/GHO_VMDK_KVM/blob/master/virtual-xp.xml)模板修改后，直接导入：












```
# virt-win-reg --merge virtual-xp.img mergeide.reg
导入
# virsh --connect qemu:///system define virtual-xp.xml
```







 virt-win-reg是libguestfs-winsupport工具里的一个，可以直接导入注册表信息到img镜像内，以此我们可以更换主机名、UUID、驱动信息……


 三、gho的优点与virtio驱动



 由于ide驱动在kvm下有性能问题，所以使用gho 镜像直接的安装的方式，省去了ghost文件向磁盘写过过程中所耗费的时间问题，大大提写了安装的速度。如下，这是我以ghost iso 镜像文件方装时ghost写入磁盘所花费的时间。


 [![http://www.361way.com/wp-content/uploads/2014/10/virt-install-img.png](http://www.361way.com/wp-content/uploads/2014/10/virt-install-img.png)](http://www.361way.com/wp-content/uploads/2014/10/virt-install-img.png)


 使用gho镜像文件转换成vmdk后，直接加载进入安装成功后。我们还可以使用之前的方法，临时增加一个virtio磁盘和网卡的方法，最终将目前的磁盘和网卡驱动也修改为virtio 。这部分可以参看我的另一篇博文－－－－[KVM下windows使用virtio驱动](http://www.361way.com/kvm-windows-virtio/2816.html) 。


 四、后记



 将virtualbox和vmware迁移到kvm之前，为避免迁移后的蓝屏问题，我们还可以在关机之前通过在运行的主机里运行脚本文件，自动将主机的驱动信息修改为IDE格式的驱动。virtualbox提供了[MergeIDE.zip](https://www.virtualbox.org/attachment/wiki/Migrate_Windows/MergeIDE.zip)转换批处理。


 不过这个版本比较老旧，当时主要对xp和win2000进行转换支持（具体参看[kb314082](http://support.microsoft.com/kb/314082)），后续我在一个德国人的博客里有找到了一个MergeIDE_v3.zip升级版，不过并未验证在win7和win2008下的可行性，目前已一并上传到我的github上。win7迁移蓝屏的解决方法我在微软官网的[kb922976](http://support.microsoft.com/kb/922976)问题里找到修改注册表的步骤，所认这里我没未细看德国哥们的升级版里的内容。同时在github上我也找到了[kvm-mergeide](https://github.com/361way/kvm-mergeide) ,目前也已fork到我github账号下。



















 [RSS](http://www.361way.com/feed)
[Google](http://fusion.google.com/add?feedurl=http://www.361way.com/feed)

[Youdao](http://reader.youdao.com/#url=http://www.361way.com/feed)

[Xian Guo](http://www.xianguo.com/subscribe.php?url=http://www.361way.com/feed)

[Zhua Xia](http://www.zhuaxia.com/add_channel.php?url=http://www.361way.com/feed)

[My Yahoo!](http://add.my.yahoo.com/rss?url=http://www.361way.com/feed)

[newsgator](http://www.newsgator.com/ngs/subscriber/subfext.aspx?url=http://www.361way.com/feed)

[Bloglines](http://www.bloglines.com/sub/http://www.361way.com/feed)

[iNezha](http://inezha.com/add?url=http://www.361way.com/feed)











