
 




 之前拿到的RHCE 虚拟机环境，被我[通过将vmdk转换为qcow2格式](http://www.361way.com/kvm-nested/4745.html)后，通过原生的qemu-kvm命令启动成功。由于通过virsh + xml 配置文件方式启动时有问题。一直懒得出看了，没次要使用时，直接qemu-kvm启动之。不过每次通过vnc 再去连接感觉比较麻烦，索性给其加了一块网卡，桥接当前物理网卡，这样可以通SCRT直连。不过增加时确出现了如下报错：






```
/etc/qemu-ifup: could not launch network script
qemu-kvm: -net tap,vlan=0,ifname=tap0: Device 'tap' could not be initialized
```




 这里记录下具体的处理和解决的过程。


 一、参考virsh 启动的主机



 原于virsh 命令启时最终也是调用的qemu-kvm命令启动的虚拟机，在通过ps auxf|grep kvm 查看时，发其他主机启动时，使用的网络部分参数如下：






```
-netdev tap,fd=22,id=hostnet0,vhost=on,vhostfd=23 -device virtio-net-pci,netdev=hostnet0,id=net0,mac=52:54:00:1f:45:43,bus=pci.0,addr=0x3
```




 依葫芦画瓢也通过qemu-kvm启动时也增加这么一串东西时。发现启动报错。


 二、查看qemu-kvm帮助



 通过查看qemu-kvm与网络相关的帮助信息如下：









```
[root@361way ~]# /usr/libexec/qemu-kvm --help|grep -i net
                'drives': floppy (a), hard disk (c), CD-ROM (d), network (n)
Network options:
-net nic[,vlan=n][,macaddr=mac][,model=type][,name=str][,addr=str][,vectors=v]
                create a new Network Interface Card and connect it to VLAN 'n'
-net user[,vlan=n][,name=str][,net=addr[/mask]][,host=addr][,restrict=on|off]
                connect the user mode network stack to VLAN 'n', configure its
-net tap[,vlan=n][,name=str][,fd=h][,fds=x:y:...:z][,ifname=name][,script=file][,downscript=dfile][,helper=helper][,sndbuf=nbytes][,vnet_hdr=on|off][,vhost=on|off][,vhostfd=h][,vhostfds=x:y:...:z][,vhostforce=on|off][,queues=n]
                connect the host TAP network interface to VLAN 'n'
                use network scripts 'file' (default=/etc/qemu-ifup)
                use network helper 'helper' (default=/usr/libexec/qemu-bridge-helper) to
                use vnet_hdr=off to avoid enabling the IFF_VNET_HDR tap flag
                use vnet_hdr=on to make the lack of IFF_VNET_HDR support an error condition
                use 'vhostfd=h' to connect to an already opened vhost net device
                use 'vhostfds=x:y:...:z to connect to multiple already opened vhost net devices
-net bridge[,vlan=n][,name=str][,br=bridge][,helper=helper]
                connects a host TAP network interface to a host bridge device 'br'
-net socket[,vlan=n][,name=str][,fd=h][,listen=[host]:port][,connect=host:port]
-net socket[,vlan=n][,name=str][,fd=h][,mcast=maddr:port[,localaddr=addr]]
-net socket[,vlan=n][,name=str][,fd=h][,udp=host:port][,localaddr=host:port]
-net dump[,vlan=n][,file=f][,len=n]
-net none       use it alone to have zero network devices. If no -net option
                is provided, the default is '-net nic -net user'
-netdev [user|tap|bridge|socket|hubport],id=str[,option][,option][,...]
         [,server][,nowait][,telnet][,mux=on|off] (tcp)
-chardev socket,id=id,path=path[,server][,nowait][,telnet],[mux=on|off] (unix)
                emulate a standard HCI in virtual scatternet 'n'
                add host computer to virtual scatternet 'n' using VHCI
                emulate a bluetooth device 'dev' in scatternet 'n'
```




 其中要使用-net tap项的相关帮助如下：


 该配置表示连接宿主机的TAP网络接口到n号VLAN中，并使用file和dfile两个脚本在启动客户机时配置网络和在关闭客户机时取消网络配置。


 tap参数，表明使用TAP设备。TAP是虚拟网络设备，它仿真了一个数据链路层设备（ISO七层网络结构的第二层），它像以太网的数据帧一样处理

 第二层数据报。而TUN   与TAP类似，也是一种虚拟网络设备，它是对网络层设备的仿真。TAP被用于创建一个网络桥，而TUN与路由相关。


 vlan=n  设置该设备VLAN编号，默认值为0。


 name=name  设置名称，在QEMU monior中可能用到，一般由系统自动分配即可。


 fd=h 

 连接到现在已经打开着的TAP接口的文件描述符，一般来说不要设置该选项，而是让QEMU会自动创建一个TAP接口。当使用了fd=h的选项

 后，ifname、script、downscript、helper、vnet_hdr等选项都不可使用了（不能与fd选项同时出现在命令行中）。


 ifname=name  设置在宿主机中添加的TAP虚拟设备的名称（如tap1、tap5等等），不设置这个参数时，QEMU会根据系统中目前的情况，产生一个TAP接口的名称。


 script=file  设置宿主机在启动客户机时自动执行的网络配置脚本。如果不指定，其默认值为“/etc/qemu-ifup”这个脚本，可指定自己的脚本路径以取代默认值；如果不需要执行脚本，则设置为“script=no”。


 downscript=dfile  设置宿主机在客户机关闭时自动执行的网络配置脚本。如果不设置，其默认值为“/etc/qemu-ifdown”；若客户机关闭时宿主机不需要执行脚本，则设置为“downscript=no”。 


 helper=helper  设置启动客户机时在宿主机中运行的辅助程序，包括去建立一个TAP虚拟设备，它的默认值为/usr/local/libexec/qemu-bridge-helper，一般不用自定义，采用默认值即可。


 sndbuf=nbytes  限制TAP设备的发送缓冲区大小为n字节，当需要流量进行流量控制时可以设置该选项。其默认值为“sndbuf=0”，即不限制发送缓冲区的大小。


 这里再通如下命令启动虚拟机：






```
/usr/libexec/qemu-kvm -m 8096 -cpu qemu64,+vmx -net nic,vlan=0,macaddr=52:54:00:12:34:01 -net tap,vlan=0,ifname=tap0 -smp 4,sockets=4,cores=1,threads=1 -drive file=/data/img/rhce/jiaoshiji.qcow2 -vnc 0.0.0.0:20 &
```




 还是发现最上面提到的报错，见下图：





 [![http://www.361way.com/wp-content/uploads/2015/10/qemu-ifup.png](http://www.361way.com/wp-content/uploads/2015/10/qemu-ifup.png)](http://www.361way.com/wp-content/uploads/2015/10/qemu-ifup.png)


 三、网络桥接检查



 通过网上查看相关资料确认需要默认启动脚本文件/etc/qemu-ifup，经确认本机不存在。另外还需要安装bridge-utils和tunctl 包，这里按照顺序先进行桥接检查，再处理上面的报错。


 1、确认bridge使用的包



 bridge-utils和tunctl，它们提供所需的brctl、tunctl命令行工具。是使用桥接时必要包，本机之前使用过，已经安装。未安装的可以通过如下方式安装：






```
# yum install bridge-utils tunctl
```




 2、模块确认







```
# lsmod |grep tun
tun                    27183  8 vhost_net
```




 如果tun模块没有加载，则运行“modprobe tun”命令来加载即可；当然，如果已经将tun编译到内核（可查看内核config文件中是否有“CONFIG_TUN=y”选项），则不需要加载了。


 3、验证权限



 检查/dev/net/tun的权限，需要让当前用户拥有可读可写的权限：






```
# ll /dev/net/tun
crw-rw-rw- 1 root root 10, 200 10月 20 20:34 /dev/net/tun
```




 4、桥接物理网口



 建立一个bridge，并将其绑定到一个可以正常工作的网络接口上，并让bridge成为连接本机与外部网络的接口。主要的配置命令如下面命令行所示。









```
# brctl addbr br0    #添加br0这个bridge
# brctl addif br0 eth0    #将br0与eth0绑定起来
# brctl stp br0 on     #将br0加入到STP协议中
# dhclient br0    #将br0的网络配置好
# route   #参看路由表是否正常配置
```




 注：由于之前已经在virsh中的其他虚拟机使用直接桥接物理网卡的配置，所以以上四步无需配置可以直接跳过。除非在手动安装的qemu-kvm，并且从未配置桥接的情况下需执行步骤1－4 。


 四、解决qemu-ifup报错



 1、增加/etc/qemu-ifup脚本



 由于网上已经查到是不存在qemu-ifup 脚本导致，这里在/etc新建一个qemu-ifup，内容如下：









```
#!/bin/bash
#This is a qemu-ifup script for bridging.
#You can use it when starting a KVM guest with bridge mode network.
#set your bridge name
switch=br0
if [ -n "$1" ]; then
    #create a TAP interface; qemu will handle it automatically.
    #tunctl -u $(whoami) -t $1
    #start up the TAP interface
    ip link set $1 up
    sleep 1
    #add TAP interface to the bridge
    brctl addif ${switch} $1
    exit 0
else
    echo "Error: no interface specified"
    exit 1
fi
```







 并且需要使用root用户执行chmod u+x 给以可执行权限。


 2、查看brctl 桥接网络



 手动通过qemu-kvm启动虚拟机前，先通过如下命令查看桥接网络信息如下：









```
# brctl show br0
bridge name     bridge id               STP enabled     interfaces
br0             8000.7824af46ca60       no              enp3s0
                                                        vnet0
                                                        vnet1
                                                        vnet2
```




 再手动启动过虚拟机，未发现报错，而再查看brctl 的输出时，发现多了自动启用了一个tap0网卡，如下：









```
# brctl show br0
bridge name     bridge id               STP enabled     interfaces
br0             8000.7824af46ca60       no              enp3s0
                                                        tap0
                                                        vnet0
                                                        vnet1
                                                        vnet2
```




 进入虚拟机后，通过配置网络，通过SecureCRT 连接正常。


 五、步骤回溯



 手动启动桥接网络时，可以将启动时的script设置为no ，同样不会出现上面的截图中的报错。









```
/usr/libexec/qemu-kvm -m 1024 \
-drive file=/data/images/CentOS6_4.qcow2,if=virtio \
-net nic,model=virtio -net tap,script=no -nographic -vnc :0

```




 使用-net tap,script=no方式启动之后，系统会生成tapX的虚拟网卡,默认是DOWN状态的 









```
# ip link show dev tap0
37: tap0: <BROADCAST,MULTICAST> mtu 1500 qdisc noop state DOWN qlen 500
    link/ether d2:b0:af:7b:23:0f brd ff:ff:ff:ff:ff:ff
```




 如果想和外界通信，可以手动执行生效，如下所示当前与br0桥接的设备，并没有tap相关的网卡：









```
# brctl show br0
bridge name     bridge id               STP enabled     interfaces
br0             8000.7824af46ca60       no              enp3s0
                                                        vnet0
                                                        vnet1
                                                        vnet2
```




 不使用script时，就需要手动去启新增的网卡，并把tap0也桥接到br0下以便和外界通信，方法如下






```
# ip link set tap0 up        //使tap0状态变为up
# brctl addif br0 tap0        //桥接tap0到br0
# brctl show br0   
```




 通过脚本实现时，如下：






```
/usr/libexec/qemu-kvm -m 1024 \
-drive file=/data/images/CentOS6_4.qcow2,if=virtio \
-net nic,model=virtio -net tap,script=/tmp/qemu-ifup.sh -nographic -vnc :0

```




 script默认是启用的，而且位置是/etc/qemu-ifup，这里也可以指定到另外一个路径下。tap,script=/tmp/qemu-ifup.sh指定script网络配置启动前启动脚本，脚本内容如下：









```
# cat /tmp/qemu-ifup.sh
#!/bin/bash
# 桥接网络设备
switch=br0
if [ -n $1 ]; then          //$1为qemu-kvm传递值，这里是tap
    ip link set $1 up
    brctl addif ${switch} $1
    exit 0
else
   echo "no interface!"
   exit 1
fi
```




 和上面的脚本内容大致一样，不过稍微简化了下，看起来更清爽。


 注：brctl delif br0 tap0删除桥接网络，qemu-kvm工具在客户机关闭时会自动解除TAP设备的bridge绑定，所以这一步无需操作。对应downscript，如果想要指定内容如下：






```
#!/bin/bash
#This is a qemu-ifdown script for bridging.
#You can use it when starting a KVM guest with bridge mode network.
#Don’t use this script in most cases; QEMU will handle it automatically.
#set your bridge name
switch=br0
if [ -n "$1" ]; then
    # Delete the specified interfacename
    tunctl -d $1
    #release TAP interface from bridge
    brctl delif ${switch} $1
    #shutdown the TAP interface
    ip link set $1 down
    exit 0
else
    echo "Error: no interface specified"
    exit 1
fi
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











