
 




 virt-install是rpm包python-virtinst里的一个工具 －－ 其实就是一个python写的脚本 。其是qemu-kvm工具的人性化实现。可以利用该工具在终端下创建KVM guest主机。



```
[root@kvmtest ~]# rpm -qf /usr/bin/virt-install
python-virtinst-0.600.0-15.el6.noarch
```




 一、virt-install vs qemu-kvm创建guest主机



 1、virt-install创建guest主机







```
$ virt-install --connect qemu:///system
   --name kvmnode1
   --ram 512
   --file /nfs/vms/kvmnode1.disk1
   --file /nfs/vms/kvmnode1.disk2
   --network=bridge:br0
   --accelerate
     -s 18
   --pxe
     -d
   --noautoconsole
   --mac=54:52:00:53:20:15
   --nographics
   --nonsparse
```




 2、qemu-kvm 创建guest主机







```
$ /usr/bin/qemu-kvm -M pc
   -m 1024
   -smp 1
   -name kvmnode1
   -monitor stdio
   -boot n
   -drive file=/nfs/vms/kvmnode1,if=ide,index=0
   -net nic,macaddr=54:52:00:53:20:00,vlan=0
   -net tap,script=no,vlan=0,ifname=tap0
   -serial stdio
   -nographic
   -incoming tcp:0:4444
```




 注：以上参考了[matty 的blog](http://prefetch.net/blog/index.php/2009/11/28/creating-kvm-guests-with-virt-install-and-qemu-kvm/)  。不过在centos里qemu-kvm 命令位于/usr/libexec/qemu-kvm 。


 二、virt-install常用参数







 -n --name= 客户端虚拟机名称


 -r --ram=  客户端虚拟机分配的内存




 -u --uuid= 客户端UUID  默认不写时，系统会自动生成




 --vcpus= 客户端的vcpu个数




 -v --hvm 全虚拟化




 -p --paravirt 半虚拟化




 -l --location=localdir 安装源，有本地、nfs、http、ftp几种，多用于ks网络安装




 --vnc 使用vnc ，另有--vnclient＝监听的IP  --vncport ＝VNC监听的端口




 -c --cdrom= 光驱 安装途径




 --disk= 使用不同选项作为磁盘使用安装介质




 -w NETWORK, --network=NETWORK 连接客户机到主机网络 




 -s --file-size= 使用磁盘映像的大小 单位为GB




 -f --file= 作为磁盘映像使用的文件




 --cpuset=设置哪个物理CPU能够被虚拟机使用




 --os-type=OS_TYPE 针对一类操作系统优化虚拟机配置（例如：‘linux’，‘windows’）




 --os-variant=OS_VARIANT 针对特定操作系统变体（例如’rhel6’, ’winxp’,'win2k3'）进一步优化虚拟机配置




 --host-device=HOSTDEV 附加一个物理主机设备到客户机。HOSTDEV是随着libvirt使用的一个节点设备名（具体设备如’virsh nodedev-list’的显示的结果）




 --accelerate KVM或KQEMU内核加速,这个选项是推荐最好加上。如果KVM和KQEMU都支持，KVM加速器优先使用。




 -x EXTRA, --extra-args=EXTRA 当执行从"--location"选项指定位置的客户机安装时，附加内核命令行参数到安装程序




 --nographics  "virt-install" 将默认使用--vnc选项，使用nographics指定没有控制台被分配给客户机








 以上参考[virt-install man页中文翻译](http://blog.csdn.net/starshine/article/details/6998189) 。


 三、几个安装示例



 示例1：






```
# qemu-img create -f qcow2 /data/centos-6.4.qcow2 10G
# virt-install --virt-type kvm --name centos-6.4 --ram 1024
--cdrom=/data/CentOS-6.4-x86_64-netinstall.iso
--disk path=/data/centos-6.4.qcow2,size=10,format=qcow2
--network network=default
--graphics vnc,listen=0.0.0.0 --noautoconsole
--os-type=linux --os-variant=rhel6
```




 以上第一部创建guest镜像文件可以省略，virt-install在安装时带有创建过程 。不过还是建议按上面的步骤操作，因为如果两部合并，执行virt-install的时间比分开会略长 。对于--os-variant后面可以跟的值可以通过如下命令查看：






```
[root@kvmtest ~]# virt-install --os-variant list
win7                 : Microsoft Windows 7
vista                : Microsoft Windows Vista
winxp64              : Microsoft Windows XP (x86_64)
winxp                : Microsoft Windows XP
win2k                : Microsoft Windows 2000
win2k8               : Microsoft Windows Server 2008
win2k3               : Microsoft Windows Server 2003
openbsd4             : OpenBSD 4.x
freebsd8             : FreeBSD 8.x
freebsd7             : FreeBSD 7.x
…………………………省略………………………………
```




 对于vnc后对应的display号码可以通过下面的方法查看：






```
# virsh vncdisplay centos-6.4
:1
```




 以上示例参看[openstack doc页面](http://docs.openstack.org/trunk/openstack-image/content/virt-install.html) 。


 示例2：


 给guest主机划分物理机分区






```
lvcreate -L20G -n host.demo.com kvm-storage
```




 下载镜像并loop到本地：






```
wget http://mirrors.manchester.icecolo.com/centos/5.5/isos/x86_64/CentOS-5.5-x86_64-bin-1of8.iso
mkdir /mnt/centos55
mount -o loop CentOS-5.5-x86_64-bin-1of8.iso /mnt/centos55/
```




 通过location本地安装，并通过console管理：






```
virt-install
-n host.demo.com
-r 512
--vcpus=1
--os-variant=rhel5.4
--accelerate
--nographics
-v
-l /mnt/centos55/
-w bridge:br1
--disk path=/dev/kvm-storage/host.demo.com
-x "console=ttyS0"
```

管理时可以通过



```
#查看guest id、name 及状态
virsh list --all
#通过console连接查看
virsh console id或name
#连接完成后会要求输入用户名和密码

```




 以上页面参考另一个叫[matt的blog](http://sysadminman.net/blog/2011/kvm-virtualization-text-centos-guest-install-2098) （matt这名字在国外是不是很流行？![http://www.361way.com/wp-content/plugins/kindeditor-for-wordpress/plugins/emoticons/images/40.gif](http://www.361way.com/wp-content/plugins/kindeditor-for-wordpress/plugins/emoticons/images/40.gif)）


 示例3：



```
virt-install --hvm --virt-type=kvm
--location=http://192.168.0.254/centos6/64 --name centos6.4
--ram 4096 --vcpus=2 --disk path=/dev/vg_vm/centos6.4
-w bridge:virbr0
-x "ks=http://192.168.0.130/ks/centos6.4.ks
ip=192.168.122.10 netmask=255.255.255.0 dns=192.168.122.1 gateway=192.168.122.1
console=tty0 console=ttyS0,115200n8"
```




 由于通过console或vnc进行安装时，和普通物理机上安装一样，需要做各种各样的选择和设置 。而安装时可能通过kickstart配置文件，直接完在安装 。



















 [RSS](http://www.361way.com/feed)
[Google](http://fusion.google.com/add?feedurl=http://www.361way.com/feed)

[Youdao](http://reader.youdao.com/#url=http://www.361way.com/feed)

[Xian Guo](http://www.xianguo.com/subscribe.php?url=http://www.361way.com/feed)

[Zhua Xia](http://www.zhuaxia.com/add_channel.php?url=http://www.361way.com/feed)

[My Yahoo!](http://add.my.yahoo.com/rss?url=http://www.361way.com/feed)

[newsgator](http://www.newsgator.com/ngs/subscriber/subfext.aspx?url=http://www.361way.com/feed)

[Bloglines](http://www.bloglines.com/sub/http://www.361way.com/feed)

[iNezha](http://inezha.com/add?url=http://www.361way.com/feed)











