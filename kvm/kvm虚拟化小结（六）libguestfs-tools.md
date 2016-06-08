
 




 libguestfs 是一组 Linux 下的 C 语言的 API ，用来访问虚拟机的磁盘映像文件。其项目主页是[http://libguestfs.org/](http://libguestfs.org/) ，该工具包内包含的工具有virt-cat、virt-df、virt-ls、virt-copy-in、virt-copy-out、virt-edit、guestfs、guestmount、virt-list-filesystems、virt-list-partitions等工具，具体用法也可以参看官网。该工具可以在不启动KVM guest主机的情况下，直接查看guest主机内的文内容，也可以直接向img镜像中写入文件和复制文件到外面的物理机，当然其也可以像mount一样，支持挂载操作。





 一、libguestfs-tools的安装



 由于在rpm源里直接有该包，所以可以直接通过yum进行安装：






```
#yum -y install libguestfs-tools
```




 二、linux下的使用







```
[root@localhost file]# virt-df centos.img
Filesystem                           1K-blocks       Used  Available  Use%
centos.img:/dev/sda1                    495844      31950     438294    7%
centos.img:/dev/VolGroup/lv_root      28423176     721504   26257832    3%
[root@localhost file]# virt-ls centos.img /
.autofsck
bin
boot
dev
etc
home
lib
lib64
lost+found
media
mnt
opt
proc
root
sbin
selinux
srv
sys
tmp
usr
va
```

 复制文件操作：







```
[root@localhost file]# virt-copy-out -d centos.img  /etc/passwd /tmp
libguestfs: error: no libvirt domain called 'centos.img': Domain not found: no domain with matching name 'centos.img'
```

 注意这里有报错，报错原因是因为-d参数后面跟的是主机domain，不是镜像文件名。更改为domain后的操作步骤如下：






```
[root@localhost file]# virsh list --all
 Id    Name                           State
----------------------------------------------------
 4     ppd_win7                       running
 14    ppd_win2008                    running
 -     ppd_centos                     shut off
[root@localhost file]# virt-copy-out -d ppd_centos /etc/passwd /tmp/
[root@localhost file]# cat /tmp/passwd
root:x:0:0:root:/root:/bin/bash
bin:x:1:1:bin:/bin:/sbin/nologin
daemon:x:2:2:daemon:/sbin:/sbin/nologin
adm:x:3:4:adm:/var/adm:/sbin/nologin
lp:x:4:7:lp:/var/spool/lpd:/sbin/nologin
sync:x:5:0:sync:/sbin:/bin/sync
shutdown:x:6:0:shutdown:/sbin:/sbin/shutdown
halt:x:7:0:halt:/sbin:/sbin/halt
mail:x:8:12:mail:/var/spool/mail:/sbin/nologin
uucp:x:10:14:uucp:/var/spool/uucp:/sbin/nologin
operator:x:11:0:operator:/root:/sbin/nologin
games:x:12:100:games:/usr/games:/sbin/nologin
gopher:x:13:30:gopher:/var/gopher:/sbin/nologin
ftp:x:14:50:FTP User:/var/ftp:/sbin/nologin
nobody:x:99:99:Nobody:/:/sbin/nologin
vcsa:x:69:69:virtual console memory owner:/dev:/sbin/nologin
saslauth:x:499:76:"Saslauthd user":/var/empty/saslauth:/sbin/nologin
postfix:x:89:89::/var/spool/postfix:/sbin/nologin
sshd:x:74:74:Privilege-separated SSH:/var/empty/sshd:/sbin/nologin
```

 查看分区相关信息：







```
[root@localhost file]# virt-filesystems  -d ppd_centos
/dev/sda1
/dev/VolGroup/lv_root
[root@localhost file]# virt-list-filesystems  -d ppd_centos
Unknown option: d
Usage:
     virt-list-filesystems [--options] domname
     virt-list-filesystems [--options] disk.img [disk.img ...]
[root@localhost file]# virt-list-filesystems  /file/centos.img
/dev/VolGroup/lv_root
/dev/sda1
[root@localhost file]# virt-list-partitions  /file/centos.img
/dev/sda1
/dev/sda2
```

 需要注意的是，有的命令后面用的是domain，有的用的是img文件名。


 guestmount 分区挂载







```
[root@localhost ~]# guestmount -a /file/centos.qcow2  -m /dev/sda2  --rw /mnt
libguestfs: error: mount_options: /dev/sda2 on / (options: ''): mount: unknown filesystem type 'LVM2_member'
guestmount: '/dev/sda2' could not be mounted.
guestmount: Did you mean to mount one of these filesystems?
guestmount:     /dev/sda1 (ext4)
guestmount:     /dev/VolGroup/lv_root (ext4)
guestmount:     /dev/VolGroup/lv_swap (swap)
[root@localhost ~]# guestmount -a /file/centos.qcow2  -m /dev/VolGroup/lv_root  --rw /mnt
fuse: mountpoint is not empty
fuse: if you are sure this is safe, use the 'nonempty' mount option
libguestfs: error: fuse_mount: /mnt: Resource temporarily unavailable
[root@localhost ~]# ls /mnt/
bin  boot  dev  etc  home  lib  lib64  lost+found  media  mnt  opt  proc  root  sbin  selinux  srv  sys  tmp  usr  var
[root@localhost ~]# umount /mnt/
[root@localhost ~]# guestmount -a /file/centos.qcow2  -m /dev/VolGroup/lv_root  --rw /mnt
[root@localhost ~]# ls /mnt/
bin  boot  dev  etc  home  lib  lib64  lost+found  media  mnt  opt  proc  root  sbin  selinux  srv  sys  tmp  usr  var
[root@localhost ~]# umount /mnt/
```

 挂载出错时会列出所有的分区信息，然后再做使用正确的分区去挂载。不过也可以在挂载前先使用virt-list-filesystems去查看。使用guestmount时，对raw和qcow2格式的分区都支持。





 三、windows系统下的使用










```
[root@localhost opt]# virt-ls -a /file/win7.img c:
virt-ls: no operating system was found on this disk
If using guestfish '-i' option, remove this option and instead
use the commands 'run' followed by 'list-filesystems'.
You can then mount filesystems you want by hand using the
'mount' or 'mount-ro' command.
If using guestmount '-i', remove this option and choose the
filesystem(s) you want to see by manually adding '-m' option(s).
Use 'virt-filesystems' to see what filesystems are available.
If using other virt tools, this disk image won't work
with these tools.  Use the guestfish equivalent commands
(see the virt tool manual page).
RHEL 6 notice
-------------
libguestfs will return this error for Microsoft Windows guests if the
separate 'libguestfs-winsupport' package is not installed. If the
guest is running Microsoft Windows, please try again after installing
'libguestfs-winsupport'.
```

 需要注意的是，上面的用法中，有两个错误的地方，一处是linux查看C分区，后面不能直接跟C：，而应该换用/  ；第二个错误是由于没有安装libguestfs-winsupport 。该工具也可以看接通过yum安装 。安装完该包后，再进行查看：






```
[root@localhost opt]# virt-ls -a /file/win7.img /
$Recycle.Bin
Documents and Settings
PerfLogs
Program Files
Program Files (x86)
ProgramData
Recovery
System Volume Information
Users
Windows
pagefile.sys
```

 利用guestmount进行挂载







```
[root@localhost ~]# guestmount -a /file/win7.img  -m /dev/sda2  --rw /mnt
[root@localhost ~]# ls /mnt/
Documents and Settings  pagefile.sys  PerfLogs  ProgramData  Program Files  Program Files (x86)  Recovery  $Recycle.Bin  System Volume Information  Users  Windows
```

 注：此处的挂载同样需要ntfs-3g软件包的支持。
















 [RSS](http://www.361way.com/feed)
[Google](http://fusion.google.com/add?feedurl=http://www.361way.com/feed)

[Youdao](http://reader.youdao.com/#url=http://www.361way.com/feed)

[Xian Guo](http://www.xianguo.com/subscribe.php?url=http://www.361way.com/feed)

[Zhua Xia](http://www.zhuaxia.com/add_channel.php?url=http://www.361way.com/feed)

[My Yahoo!](http://add.my.yahoo.com/rss?url=http://www.361way.com/feed)

[newsgator](http://www.newsgator.com/ngs/subscriber/subfext.aspx?url=http://www.361way.com/feed)

[Bloglines](http://www.bloglines.com/sub/http://www.361way.com/feed)

[iNezha](http://inezha.com/add?url=http://www.361way.com/feed)











