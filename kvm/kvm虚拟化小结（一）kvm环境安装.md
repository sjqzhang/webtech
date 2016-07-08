
 




 KVM(全称是Kernel-based Virtual Machine)是Linux下x86 硬件平台上的全功能虚拟化解决方案，包含一个可加载的内核模块kvm.ko提供和虚拟化核心架构和处理器规范模块。

 使用KVM可允许多个包括Linux和Windows每个虚拟机有私有的硬件，包括网卡、磁盘以及图形适配卡等。自Linux 2.6.20之后集成在Linux的各个主要发行版本中，它使用Linux自身的调度器进行管理，所以相对于Xen，其核心源码很少。KVM目前已成为学术界的主流VMM之一。


 一、硬件环境检测



 KVM的虚拟化需要硬件支持（如Intel VT技术或者AMD V技术)。是基于硬件的完全虚拟化。而Xen早期则是基于软件模拟的Para-Virtualization，新版本则是基于硬件支持的完全虚拟化。但Xen本身有自己到进程调度器，存储管理模块等，所以代码较为庞大。广为流传的商业系统虚拟化软件VMware ESX系列也是基于软件模拟的Para-Virtualization。






```
grep -E --color 'vmx|svm' /proc/cpuinfo
```




 有输出代表cpu支持，否则代表cpu不支持。


 二、软件包安装



 这里以centos6为例，安装软件前最好先用yum update 先做下升级操作。



```
# yum install qemu-kvm qemu-img
# yum install virt-managerlibvirt libvirt-python python-virtinst libvirt-client virt-viewer
```

 也可以使用groupinstall进行安装，如下：



```
# yum groupinstall -y  Virtualization  "Virtualization Client""Virtualization Platform" "Virtualization Tools"
```

 需要注意的是在使用桥接网络时，还需要安装bridge-utils包，不然会报“btctl  not found 的错误” ，安装方法如下：



```
#yum -y install bridge-utils
```




 三、防火墙处理



 关闭防火墙对ipv6的支持（目前用这货的人还比较少）






```
chkconfig ip6tables off
```




 关闭selinux






```
#setenforce  0
#sed -i 's/=enforcing/=disabled/g' /etc/selinux/config
```




 四、查看模块并启动进程







```
查看KVM模块
root@cq36:[/root]lsmod|grep kvm
kvm_intel              53484  26
kvm                   316506  1 kvm_intel
启动libvirt进程
services libvirtd restart
```




 五、将网卡模式改为桥接模式



 保存原网卡配置，并按下面的样式进行更改，首先复制原eth0网卡为br0，将原eth0的配置文件改为：



```
DEVICE="eth0"
BOOTPROTO="static"
HWADDR="30:85:A9:9F:67:74"
NM_CONTROLLED="no"
ONBOOT="yes"
TYPE="Ethernet"
UUID="34096e10-ff72-4142-b7b3-e290d200b68a"
BRIDGE="br0"
```




 复制后的br0网卡的内容改为（一般可能还有eth1网卡，eth1内容参考上面，br1的配置这里也一并列出）：



```
#外网网卡（以下公网IP是我乱写的，请勿对号入座）
www@cq35:[/home/www]cat /etc/sysconfig/network-scripts/ifcfg-br0
DEVICE=br0
TYPE=Bridge
ONBOOT=yes
BOOTPROTO=none
IPADDR=119.37.194.189
PREFIX=28
GATEWAY=119.37.194.182
DNS1=8.8.8.8
IPADDR2=202.75.212.225
PREFIX2=28
DEFROUTE=yes
IPV4_FAILURE_FATAL=yes
IPV6INIT=no
NAME="System br0"
#内网网卡
www@cq35:[/home/www]cat /etc/sysconfig/network-scripts/ifcfg-br1
DEVICE="br1"
BOOTPROTO="static"
BROADCAST="192.168.10.255"
IPADDR="192.168.10.35"
NETMASK="255.255.255.0"
NM_CONTROLLED="yes"
ONBOOT="yes"
TYPE="Bridge"
```




 修改完成后service network restart重启。重启完成后，用下面的命令查看：



```
root@cq35:[/opt]brctl show
bridge name     bridge id               STP enabled     interfaces
br0             8000.001ec9cf52cb       no              eth0
br1             8000.001ec9cf52cd       no              eth1
virbr0          8000.525400b9dc11       yes             virbr0-nic
```




 其实也可以通过ifconfig 查看，此时查看到的网卡会发现变成了br0、br1、eth0、eth1、virbr0这样的网卡。此时再查看IP可能十分不方便，不过可以通过ip命令进行查看。



```
ip add show |grep inet
```




 至此环境配置部分完成。
















 [RSS](http://www.361way.com/feed)
[Google](http://fusion.google.com/add?feedurl=http://www.361way.com/feed)

[Youdao](http://reader.youdao.com/#url=http://www.361way.com/feed)

[Xian Guo](http://www.xianguo.com/subscribe.php?url=http://www.361way.com/feed)

[Zhua Xia](http://www.zhuaxia.com/add_channel.php?url=http://www.361way.com/feed)

[My Yahoo!](http://add.my.yahoo.com/rss?url=http://www.361way.com/feed)

[newsgator](http://www.newsgator.com/ngs/subscriber/subfext.aspx?url=http://www.361way.com/feed)

[Bloglines](http://www.bloglines.com/sub/http://www.361way.com/feed)

[iNezha](http://inezha.com/add?url=http://www.361way.com/feed)











