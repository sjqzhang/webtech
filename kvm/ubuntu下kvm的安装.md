
 




 本篇是 kvm虚拟化小结 的一个衍生品 ，之前也写过一个和本文内容基本一致的总结 ———— [kvm虚拟化小结（一）kvm环境安装 ](http://www.361way.com/kvm-summary-env/2832.html)，只不过当时的测试平台是centos 。目前由于新的公司使用的是ubuntu，所以也顺便拿了台测试机装上ubuntu做KVM虚拟化 ，然后在上面测试zabbix的一些功能 。


 1、kvm 相关软件安装










```
sudo apt-get install qemu-kvm libvirt-bin virt-manager bridge-utils
```

 2、桥接网络配置






 sudo vim /etc/network/interfaces 编辑配置文件，修改IP网络信息如下：






```
auto lo
iface lo inet loopback
auto eth0
iface eth0 inet manual
auto br0
iface br0 inet static
address 192.168.10.130
network 192.168.10.0
netmask 255.255.255.0
broadcast 192.168.10.255
gateway 192.168.10.1
dns-nameservers 8.8.8.8
bridge_ports eth0
bridge_stp off
bridge_fd 0
bridge_maxwait 0
```

 以上IP根据自己实际需要修改，如果网络环境是DHCP获取（生产环境下很少会这样用，这也也提下），可以代码修改为如下：









```
auto lo
iface lo inet loopback
auto eth0
iface eth0 inet manual
auto br0
iface br0 inet dhcp
bridge_ports eth0
bridge_stp off
bridge_fd 0
```

 最后：sudo /etc/init.d/networking restart重新启动网络服务便可 。


 3、路由转发



 nat网络里会用到路由转发，不过我发现ubuntu下安装完KVM ，其默认开启路由转发功能，如果没有通过sysctl命令修改即可。






```
yang@yang-acer:/opt$ sudo sysctl -a|grep 'net.ipv4.ip_forward'
net.ipv4.ip_forward = 1
```

 4、qemu.conf与iptables



 编辑/etc/libvirt/qemu.conf文件，取消vnc_listen = "0.0.0.0"的注释，开启VNC功能，并sudo /etc/init.d/libvirt-bin restart加载新的配置 ，如果开启了防火墙，还需要通过下面的指令开启端口：






```
sudo iptables -A INPUT  -m tcp -p tcp --dport 5910  -j ACCEPT
```

 注：ubuntu上iptables不像centos上，也可以使用ufw防火墙配置策略 。


 5、guest主机的安装



 创建镜像文件并查看文件信息：






```
sudo qemu-img create -f qcow2 -o preallocation=metadata centos.img 20G
qemu-img info centos.img 
```

 配合VNC进行guest主机系统安装：






```
sudo virt-install --name centos --ram=1024 --arch=x86_64 --vcpus=1 --os-variant=rhel6 --disk path=/opt/centos.img,bus=virtio,cache=none,format=qcow2  --network bridge=br0,model=virtio  --graphics vnc,password=361way,port=5913 --cdrom=/opt/CentOS-6.5-x86_64-LiveCD.iso
```

 注：这里直接指定了qcow2格式，和之前的不太一样，镜像文件创建时也一定要指定preallocation（预分配）环境 ，不然不可以直接format=qcow2格式安装 。



















 [RSS](http://www.361way.com/feed)
[Google](http://fusion.google.com/add?feedurl=http://www.361way.com/feed)

[Youdao](http://reader.youdao.com/#url=http://www.361way.com/feed)

[Xian Guo](http://www.xianguo.com/subscribe.php?url=http://www.361way.com/feed)

[Zhua Xia](http://www.zhuaxia.com/add_channel.php?url=http://www.361way.com/feed)

[My Yahoo!](http://add.my.yahoo.com/rss?url=http://www.361way.com/feed)

[newsgator](http://www.newsgator.com/ngs/subscriber/subfext.aspx?url=http://www.361way.com/feed)

[Bloglines](http://www.bloglines.com/sub/http://www.361way.com/feed)

[iNezha](http://inezha.com/add?url=http://www.361way.com/feed)











