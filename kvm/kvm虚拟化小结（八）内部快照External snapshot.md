
 




 KVM的外部快照（External snapshot）功能比较实用，可以支持仅对disk进行快照，也支持live snapshot，很多虚拟化云方案中一般也会使用外部快照功能创建快照。不过遗憾的是在centos6的rpm默认源里安装的qemu版本过低不支持--live模式的外部快照 。目前[qemu.org](http://wiki.qemu.org/Download)上的qemu的最新版本是2.0.0rc3，最新稳定版是1.7.1，而目前centos6的源中使用的qemu版本是0.12.1。









```
[root@localhost test]# cd /usr/libexec/
[root@localhost libexec]# ./qemu-kvm -version
QEMU PC emulator version 0.12.1 (qemu-kvm-0.12.1.2), Copyright (c) 2003-2008 Fabrice Bellard
```

 如下所示，使用--live功能时会报错：









```
[root@localhost libvirt]#virsh snapshot-create-as ppd_centos snap1-centos "snap1 description"  --diskspec vda,file=/file/snap1-centos.qcow2 --disk-only --atomic
error: Operation not supported: live disk snapshot not supported with this QEMU binary
```

 在serverfault上有人提到了该问题，链接为：[http://serverfault.com/questions/567234/how-to-replace-qemu-binary-with-newer-version-for-libvirt-live-snapshots](http://serverfault.com/questions/567234/how-to-replace-qemu-binary-with-newer-version-for-libvirt-live-snapshots) ，同时我也尝试了使用升级qemu为最新的1.7.1测试--live，发现问题也依旧 。目前估计还会对内核版本和libvirt的版本有依赖或兼容性问题。编译步骤如下：









```
[root@localhost qemu-1.7.1]# ./configure --prefix=/usr/local/qemu
ERROR: glib-2.12 required to compile QEMU
[root@localhost qemu-1.7.1]#yum -y install glib*
[root@localhost qemu-1.7.1]# ./configure --prefix=/usr/local/qemu
Install prefix    /usr/local/qemu
BIOS directory    /usr/local/qemu/share/qemu
binary directory  /usr/local/qemu/bin
library directory /usr/local/qemu/lib
libexec directory /usr/local/qemu/libexec
include directory /usr/local/qemu/include
config directory  /usr/local/qemu/etc
local state directory   /usr/local/qemu/var
Manual directory  /usr/local/qemu/share/man
ELF interp prefix /usr/gnemul/qemu-%M
Source path       /usr/local/src/qemu-1.7.1
C compiler        cc
Host C compiler   cc
C++ compiler      c++
Objective-C compiler cc
ARFLAGS           rv
CFLAGS            -O2 -U_FORTIFY_SOURCE -D_FORTIFY_SOURCE=2 -g
QEMU_CFLAGS       -fPIE -DPIE -m64 -D_GNU_SOURCE -D_FILE_OFFSET_BITS=64 -D_LARGEFILE_SOURCE -Wstrict-prototypes -Wredundant-decls -Wall -Wundef -Wwrite-strings -Wmissing-prototypes -fno-strict-aliasing  -Wendif-labels -Wmissing-include-dirs -Wempty-body -Wnested-externs -Wformat-security -Wformat-y2k -Winit-self -Wignored-qualifiers -Wold-style-declaration -Wold-style-definition -Wtype-limits -fstack-protector-all -I$(SRC_PATH)/pixman/pixman -I$(BUILD_DIR)/pixman/pixman -I$(SRC_PATH)/dtc/libfdt
LDFLAGS           -Wl,--warn-common -Wl,-z,relro -Wl,-z,now -pie -m64 -g
make              make
install           install
python            python -B
smbd              /usr/sbin/smbd
host CPU          x86_64
host big endian   no
target list        alpha-softmmu arm-softmmu cris-softmmu i386-softmmu lm32-softmmu m68k-softmmu microblazeel-softmmu microblaze-softmmu mips64el-softmmu mips64-softmmu mipsel-softmmu mips-softmmu moxie-softmmu or32-softmmu ppc64-softmmu ppcemb-softmmu ppc-softmmu s390x-softmmu sh4eb-softmmu sh4-softmmu sparc64-softmmu sparc-softmmu unicore32-softmmu x86_64-softmmu xtensaeb-softmmu xtensa-softmmu alpha-linux-user armeb-linux-user arm-linux-user cris-linux-user i386-linux-user m68k-linux-user microblazeel-linux-user microblaze-linux-user mips64el-linux-user mips64-linux-user mipsel-linux-user mips-linux-user mipsn32el-linux-user mipsn32-linux-user or32-linux-user ppc64abi32-linux-user ppc64-linux-user ppc-linux-user s390x-linux-user sh4eb-linux-user sh4-linux-user sparc32plus-linux-user sparc64-linux-user sparc-linux-user unicore32-linux-user x86_64-linux-user
tcg debug enabled no
gprof enabled     no
sparse enabled    no
strip binaries    yes
profiler          no
static build      no
-Werror enabled   no
pixman            internal
SDL support       no
GTK support       no
curses support    no
curl support      no
mingw32 support   no
Audio drivers     oss
Block whitelist (rw)
Block whitelist (ro)
VirtFS support    no
VNC support       yes
VNC TLS support   no
VNC SASL support  no
VNC JPEG support  no
VNC PNG support   no
VNC WS support    no
xen support       no
brlapi support    no
bluez  support    no
Documentation     no
GUEST_BASE        yes
PIE               yes
vde support       no
Linux AIO support no
ATTR/XATTR support yes
Install blobs     yes
KVM support       yes
RDMA support      no
TCG interpreter   no
fdt support       yes
preadv support    yes
fdatasync         yes
madvise           yes
posix_madvise     yes
sigev_thread_id   yes
uuid support      no
libcap-ng support no
vhost-net support yes
vhost-scsi support yes
Trace backend     nop
Trace output file trace-<pid>
spice support     no (/)
rbd support       no
xfsctl support    no
nss used          no
libusb            no
usb net redir     no
GLX support       no
libiscsi support  no
build guest agent yes
QGA VSS support   no
seccomp support   no
coroutine backend ucontext
coroutine pool    yes
GlusterFS support no
virtio-blk-data-plane no
gcov              gcov
gcov enabled      no
TPM support       no
libssh2 support   no
TPM passthrough   no
QOM debugging     yes
vhdx              no
[root@localhost qemu-1.7.1]# make && make install 
```

编译完成后，通过软链接替换qemu-kvm和qemu-img两个可执行文件，由于测试结果是失败的，所以这里过程也略过。





 在destroy关机情况下，测试的--disk外部快照功能如下：






```
[root@localhost file]# virsh destroy ppd_centos
Domain ppd_centos destroyed
[root@localhost file]# virsh snapshot-create-as ppd_centos snap1-centos "snap1 description" --disk-only --atomic
Domain snapshot snap1-centos created
[root@localhost file]# qemu-img info centos.qcow2
image: centos.qcow2
file format: qcow2
virtual size: 30G (32212254720 bytes)
disk size: 1.6G
cluster_size: 65536
Format specific information:
    compat: 0.10
[root@localhost file]# qemu-img info centos.snap1-centos
image: centos.snap1-centos
file format: qcow2
virtual size: 30G (32212254720 bytes)
disk size: 196K
cluster_size: 65536
backing file: /file/centos.qcow2
backing file format: qcow2
Format specific information:
    compat: 0.10
[root@localhost file]# virsh snapshot-list ppd_centos
 Name                 Creation Time             State
------------------------------------------------------------
 snap1-centos         2014-04-15 18:20:54 +0800 shutoff
```




 从上面的查询中不难看出centos.snap1-centos的backing file来自于/file/centos.qcow2 。同样，也可以利用下面的命令进行查看：






```
[root@localhost libexec]# virsh domblklist  ppd_centos --details
Type       Device     Target     Source
------------------------------------------------
file       disk       vda        /file/centos.snap1-centos
block      cdrom      hdc        -
```




 创建完外部快照后，原镜像文件会变成只读，新的变更都会写入到新的快照文件中。如下，我做完快照后，上传到一个文件到guest主机中，查看文件状态发现如下：






```
[root@localhost test]# ll /file/
total 39673072
-rwxr-xr-x. 1 root root 32212254720 Apr 14 16:39 centos.img
-rw-r--r--. 1 root root  1704854016 Apr 15 18:20 centos.qcow2
-rw-r--r--. 1 root root      197120 Apr 15 18:20 centos.snap1-centos
drwx------. 2 root root       16384 Apr  9 18:08 lost+found
drwxr-xr-x. 8 1001 1002        4096 Apr 14 09:58 ntfs-3g_ntfsprogs-2014.2.15
-rwxr-xr-x. 1 qemu qemu 53687091200 Apr 15 19:29 win2008.img
-rwxr-xr-x. 1 qemu qemu 32212254720 Apr 15 19:27 win7.img
[root@localhost test]# ll
total 0
[root@localhost test]# ll /file/
total 39772532
-rwxr-xr-x. 1 root root 32212254720 Apr 14 16:39 centos.img
-rw-r--r--. 1 qemu qemu  1704854016 Apr 15 18:20 centos.qcow2
-rw-r--r--. 1 qemu qemu   102105088 Apr 15 19:33 centos.snap1-centos
drwx------. 2 root root       16384 Apr  9 18:08 lost+found
drwxr-xr-x. 8 1001 1002        4096 Apr 14 09:58 ntfs-3g_ntfsprogs-2014.2.15
-rwxr-xr-x. 1 qemu qemu 53687091200 Apr 15 19:32 win2008.img
-rwxr-xr-x. 1 qemu qemu 32212254720 Apr 15 19:32 win7.img
[root@localhost test]#
```

 从上面不难发现，centos.snap1-centos的大小在增大，而原centos.qcow2的大小不变。至于快照的删除、回滚和内部快照操作没有区别。不过外部快照多了一个快照合并功能：






```
# virsh blockpull --domain ppd_centos --path /file/centos.snap1-centos
```

 以上命令就可以将快照的变化写入境像文件中。





 关于centos功能支持性的问题，外部快照功能测试的有点草率。回头有时间换到ubuntu、fedora或重新编译安装再做测试 。
















 [RSS](http://www.361way.com/feed)
[Google](http://fusion.google.com/add?feedurl=http://www.361way.com/feed)

[Youdao](http://reader.youdao.com/#url=http://www.361way.com/feed)

[Xian Guo](http://www.xianguo.com/subscribe.php?url=http://www.361way.com/feed)

[Zhua Xia](http://www.zhuaxia.com/add_channel.php?url=http://www.361way.com/feed)

[My Yahoo!](http://add.my.yahoo.com/rss?url=http://www.361way.com/feed)

[newsgator](http://www.newsgator.com/ngs/subscriber/subfext.aspx?url=http://www.361way.com/feed)

[Bloglines](http://www.bloglines.com/sub/http://www.361way.com/feed)

[iNezha](http://inezha.com/add?url=http://www.361way.com/feed)











