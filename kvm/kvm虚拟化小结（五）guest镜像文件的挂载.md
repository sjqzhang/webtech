
 




 实际应用中的KVM主机也会遇到像物理机一样的情况，如系统崩溃、无法引导等情况。物理机会现该情况时，我们可以通过光盘引导、单用户模式、PE引导、修复或升级安装等方式获取系统内的文件和数据，KVM中也不但同样也可以使用上述方法，而且可以利用KVM 本身为我们提供的特性将分区挂载到物理机的分区上进行分析、查看、甚至数据提取。这里还是以raw、qcow2两种格式的挂载为例进行说明。





 一、raw磁盘镜像的挂载



 由于raw格式简单原始，所以其通常做为多种格式互相转换的中转格式。所以对raw格式的img文件会做重点篇幅的一个介绍。raw格式的分区挂载也有两种方法。





 方法一：offset偏移计算法



 该方法的思路为找出分区开始的开始位置，使用mount命令的offset参数偏移掉前面不需要的，即可得到真正的分区。其具体步骤如下：

 1. 用“fdisk -lu my.img”查询image信息；






```
[root@localhost file]# fdisk -lu /file/centos.img
You must set cylinders.
You can do this from the extra functions menu.
Disk /file/centos.img: 0 MB, 0 bytes
255 heads, 63 sectors/track, 0 cylinders, total 0 sectors
Units = sectors of 1 * 512 = 512 bytes
Sector size (logical/physical): 512 bytes / 512 bytes
I/O size (minimum/optimal): 512 bytes / 512 bytes
Disk identifier: 0x0001905c
           Device Boot      Start         End      Blocks   Id  System
/file/centos.img1   *        2048     1026047      512000   83  Linux
Partition 1 does not end on cylinder boundary.
/file/centos.img2         1026048    62914559    30944256   8e  Linux LVM
Partition 2 has different physical/logical endings:
     phys=(1023, 254, 63) logical=(3916, 63, 51)
```

从上面不难看出，centos.img文件有两个分区。





 2. 计算image内分区开始的地方（计算offset），用从N号sector（扇区）开始，则offset=N*M （M为一个sector的大小，一般为512）






```
[root@localhost file]# echo $((2048*512))
1048576
[root@localhost file]#  echo $((1026048*512))
525336576
[root@localhost file]# 
```




 这两个值是上面fdisk 查看的分区start的位置 。


 3. 使用mount命令挂载为loop设备






```
[root@localhost file]# mount -o loop,offset=1048576 centos.img  /mnt/
[root@localhost file]# ls /mnt/
config-2.6.32-279.el6.x86_64  efi  grub  initramfs-2.6.32-279.el6.x86_64.img  lost+found  symvers-2.6.32-279.el6.x86_64.gz  System.map-2.6.32-279.el6.x86_64  vmlinuz-2.6.32-279.el6.x86_64
[root@localhost file]# umount /mnt
[root@localhost file]# mount -o loop,offset=525336576  /file/centos.img  /mnt
mount: unknown filesystem type 'LVM2_member'
```




 注：普通分区可以正常挂载，LVM分区需要再特殊处理，后面会单独列出。





 方法二：kpartx分区映射法







```
[root@localhost file]# kpartx -av centos.img
add map loop2p1 (253:4): 0 1024000 linear /dev/loop2 2048
add map loop2p2 (253:5): 0 61888512 linear /dev/loop2 1026048
[root@localhost file]# mount /dev/mapper/loop2p1 /mnt/
[root@localhost file]# ls /mnt/
config-2.6.32-279.el6.x86_64  initramfs-2.6.32-279.el6.x86_64.img  System.map-2.6.32-279.el6.x86_64
efi                           lost+found                           vmlinuz-2.6.32-279.el6.x86_64
grub                          symvers-2.6.32-279.el6.x86_64.gz
```

使用完成后，卸载挂载点，删除映射关系



```
[root@localhost file]# umount /mnt/
[root@localhost file]# kpartx -d centos.img
loop deleted : /dev/loop2
```







 LVM分区的处理







```
[root@localhost file]# fdisk -lu centos.img
You must set cylinders.
You can do this from the extra functions menu.
Disk centos.img: 0 MB, 0 bytes
255 heads, 63 sectors/track, 0 cylinders, total 0 sectors
Units = sectors of 1 * 512 = 512 bytes
Sector size (logical/physical): 512 bytes / 512 bytes
I/O size (minimum/optimal): 512 bytes / 512 bytes
Disk identifier: 0x0001905c
     Device Boot      Start         End      Blocks   Id  System
centos.img1   *        2048     1026047      512000   83  Linux
Partition 1 does not end on cylinder boundary.
centos.img2         1026048    62914559    30944256   8e  Linux LVM
Partition 2 has different physical/logical endings:
     phys=(1023, 254, 63) logical=(3916, 63, 51)
[root@localhost file]# echo $((1026048*512))
525336576
[root@localhost file]# losetup /dev/lo
log    loop0  loop1  loop2  loop3  loop4  loop5  loop6  loop7
[root@localhost file]# losetup /dev/loop0 centos.img -o 525336576
losetup: /dev/loop0: device is busy
[root@localhost file]# losetup /dev/loop centos.img -o 525336576
loop0  loop1  loop2  loop3  loop4  loop5  loop6  loop7
[root@localhost file]# losetup /dev/loop1 centos.img -o 525336576
losetup: /dev/loop1: device is busy
[root@localhost file]# losetup /dev/loop3 centos.img -o 525336576
[root@localhost file]# pvscan
  PV /dev/mapper/loop0p2   VG VolGroup   lvm2 [29.51 GiB / 0    free]
  Total: 1 [29.51 GiB] / in use: 1 [29.51 GiB] / in no VG: 0 [0   ]
[root@localhost file]# vgchange -ay VolGroup
  2 logical volume(s) in volume group "VolGroup" now active
[root@localhost file]# lvs
  LV      VG       Attr       LSize  Pool Origin Data%  Move Log Cpy%Sync Convert
  lv_root VolGroup -wi-a----- 27.54g
  lv_swap VolGroup -wi-a-----  1.97g
[root@localhost file]# mount /dev/VolGroup/lv_root /mnt/
[root@localhost file]# ls /mnt/
bin   dev  home  lib64       media  opt   root  selinux  sys  usr
boot  etc  lib   lost+found  mnt    proc  sbin  srv      tmp  var
[root@localhost file]# cat /mnt/etc/sysconfig/network-scripts/
ifcfg-eth0              ifdown-post             ifup-eth                ifup-routes
ifcfg-lo                ifdown-ppp              ifup-ippp               ifup-sit
ifdown                  ifdown-routes           ifup-ipv6               ifup-tunnel
ifdown-bnep             ifdown-sit              ifup-isdn               ifup-wireless
ifdown-eth              ifdown-tunnel           ifup-plip               init.ipv6-global
ifdown-ippp             ifup                    ifup-plusb              net.hotplug
ifdown-ipv6             ifup-aliases            ifup-post               network-functions
ifdown-isdn             ifup-bnep               ifup-ppp                network-functions-ipv6
[root@localhost file]# cat /mnt/etc/sysconfig/network-scripts/ifcfg-eth0
DEVICE="eth0"
BOOTPROTO="dhcp"
HWADDR="52:54:00:3C:FB:2A"
NM_CONTROLLED="yes"
ONBOOT="no"
TYPE="Ethernet"
UUID="68b2bc1a-3b8b-4bb9-9796-b049197a1489"
[root@localhost file]# cat /etc/sysconfig/network-scripts/ifcfg-
ifcfg-br0   ifcfg-em1   ifcfg-em2   ifcfg-lo    ifcfg-p1p1  ifcfg-p1p2 
```




 上例中，最后几步，是通过查看配置文件区确实是否是某台KVM主机。挂载使用完成后，可以通过下面的方法进行卸载和删除






```
[root@localhost file]# umount /mnt/
[root@localhost file]# vgchange -an VolGroup
  0 logical volume(s) in volume group "VolGroup" now active
[root@localhost file]# losetup  -d /dev/l
log    loop0  loop1  loop2  loop3  loop4  loop5  loop6  loop7  lp0    lp1    lp2    lp3
[root@localhost file]# losetup  -d /dev/lo
log    loop0  loop1  loop2  loop3  loop4  loop5  loop6  loop7
[root@localhost file]# losetup  -d /dev/loop3
```







 windows img分区的挂载







```
[root@localhost file]# kpartx -av win7.img
add map loop2p1 (253:4): 0 204800 linear /dev/loop2 2048
add map loop2p2 (253:5): 0 62705664 linear /dev/loop2 206848
[root@localhost file]# mount /dev/mapper/loop2p2 /mnt/
mount: unknown filesystem type 'ntfs'
```

报错提示已说明的非常明白，未知的分区类型ntfs，此时需要通过安装软件使系统支持ntfs分区的识别和支持。需要的软件是ntfs-3g，安装前需要先安装依赖包fuse



```
[root@localhost file]# yum -y install fuse
```

接着这安装ntfs-3g，需要注意的是sourceforge上也有该包，不过不是最新的，建议去其官网tuxera.com上去下载。具体安装和挂载过程如下：



```
[root@localhost file]# wget http://tuxera.com/opensource/ntfs-3g_ntfsprogs-2014.2.15.tgz
[root@localhost file]# tar zxvf ntfs-3g_ntfsprogs-2014.2.15.tgz
[root@localhost file]# cd ntfs-3g_ntfsprogs-2014.2.15
[root@localhost ntfs-3g_ntfsprogs-2014.2.15]#./configure
[root@localhost ntfs-3g_ntfsprogs-2014.2.15]#make && make install
[root@localhost ntfs-3g_ntfsprogs-2014.2.15]# mount -t ntfs-3g /dev/mapper/loop2p2 /mnt/
The disk contains an unclean file system (0, 0).
The file system wasn't safely closed on Windows. Fixing.
[root@localhost ntfs-3g_ntfsprogs-2014.2.15]# ls /mnt/
Documents and Settings  PerfLogs     Program Files        Recovery      System Volume Information  Windows
pagefile.sys            ProgramData  Program Files (x86)  $Recycle.Bin  Users
```




 此处具体可以参考[archlinux官方wiki ](https://wiki.archlinux.org/index.php/NTFS-3G_%28%E7%AE%80%E4%BD%93%E4%B8%AD%E6%96%87%29) 、 [ntfs-3g官方下载说明页面](http://www.tuxera.com/community/ntfs-3g-download/) ，使用完成后，可以通过下面的方法卸载挂载和loop占用：






```
[root@localhost file]# umount /mnt/
[root@localhost file]# kpartx -dv /dev/loop2
del devmap : loop2p2
del devmap : loop2p1
[root@localhost file]# losetup -d /dev/loop2
```







 二、qcow2格式下的镜像挂载



 首先可以尝试使用挂载raw镜像文件的方式处理下qcow2:






```
[root@localhost file]# qemu-img convert -f raw -O qcow2 centos.img centos.qcow2
[root@localhost file]# kpartx -av centos.qcow2
不会有任何信息输出
```







 进行到第二步的时候，发现没有任何信息输出，而在raw镜像下会有分区和loop挂载关系的输出，由此可以确定，raw的方式不适用qcow2镜像格式。


 qcow2格式的镜像可以通过先转换成raw的格式进行处理，也可以通过libguestfs-tools工具处理，还可以使用qemu-nbd直接挂载。就速度上而言qemu-nbd的速度肯定是最快的。不过由于centos/redhat原生内核和rpm源里并不含有对nbd模块的支持及qemu-nbd（在fedora中包含在qemu-common包里）工具，所以想要支持需要编译重新编译内核并安装qemu-nbd包 。如果仅仅是出于测试的目的，建议还是使用fedora去测试 。


 通过make menuconfig的方式进行编译内核的话，可以依次选择：”Device Drivers –> Block devices –> Network block device support” 。也可以按下面的方式直接编译：






```
yum install kernel-devel kernel-headers
cd /tmp
wget http://vault.centos.org/6.3/updates/Source/SPackages/kernel-2.6.32-279.22.1.el6.src.rpm
rpm -ivh /kernel-2.6.32-279.22.1.el6.src.rpm
cd ~/rpmbuild/SOURCES
tar jxf linux-2.6.32-220.4.2.el6.tar.bz2 -C /usr/src/kernels/
cd /usr/src/kernels
mv $(uname -r) $(uname -r)-old
mv linux-2.6.32-220.4.2.el6 $(uname -r)
cd $(uname -r)
make mrproper
cp ../$(uname -r)-old/Module.symvers .
cp /boot/config-$(uname -r) ./.config
make oldconfig
make prepare
make scripts
make CONFIG_BLK_DEV_NBD=m M=drivers/block
cp drivers/block/nbd.ko /lib/modules/$(uname -r)/kernel/drivers/block/
depmod -a
```







 编辑完成后，可以去http://sourceforge.net/projects/nbd/ 获取nbd包并安装。安装完成后，可以通过下面的方式进行挂载：






```
[root@localhost ndb]# qemu-nbd -c /dev/nbd0 centos.qcow2
[root@localhost ndb]# ll /dev/nbd0*
[root@localhost ndb]# mount /dev/nbd0p1 /mnt/
[root@localhost ndb]# cd /mnt/
[root@localhost mnt]# ls
bin   cgroup  etc   lib    lost+found  misc  net  proc  sbin     srv  tmp  var
boot  dev     home  lib64  media       mnt   opt  root  selinux  sys  usr
```







 使用完成后，可以通过下面的操作卸载设备：






```
[root@localhost ndb]# umount /mnt/
[root@localhost ndb]# qemu-nbd -d /dev/nbd0
/dev/nbd0 disconnected
```




 参考页面：[http://jamyy.dyndns.org/blog/2012/02/3582.html](http://jamyy.dyndns.org/blog/2012/02/3582.html) 


 注：在centos/redhat下增加对nbd的支持过程中，在安装nbd包时，可能会遇到与yum安装的qemu包有冲突等情况，所以不建议在生产环境下重新编译内核增加对qcow2的挂载 。如有需要，可以尝试使用转换成raw格式或使用libguestfs-tools工具包处理 。



















 [RSS](http://www.361way.com/feed)
[Google](http://fusion.google.com/add?feedurl=http://www.361way.com/feed)

[Youdao](http://reader.youdao.com/#url=http://www.361way.com/feed)

[Xian Guo](http://www.xianguo.com/subscribe.php?url=http://www.361way.com/feed)

[Zhua Xia](http://www.zhuaxia.com/add_channel.php?url=http://www.361way.com/feed)

[My Yahoo!](http://add.my.yahoo.com/rss?url=http://www.361way.com/feed)

[newsgator](http://www.newsgator.com/ngs/subscriber/subfext.aspx?url=http://www.361way.com/feed)

[Bloglines](http://www.bloglines.com/sub/http://www.361way.com/feed)

[iNezha](http://inezha.com/add?url=http://www.361way.com/feed)











