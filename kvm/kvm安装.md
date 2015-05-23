##1.KVM安装

```
yum -y install kvm qemu-kvm python-virtinst libvirt libvirt-python  libguestfs-tools python-libguestfs  tunctl virt-viewer  vnc openssl-devel redhat-rpm-config kernel-devel
```

##2.基本系统配置

###2.1关闭iptables

```
iptables -F
/etc/init.d/iptables stop
chkconfig ip6tables off
chkconfig iptables off
```

###2.2调整文件描述符大小
```
ulimit –n
1024
echo 'session required /lib/security/pam_limits.so' >> /etc/pam.d/login
echo '*  -  nofile  65535' >> /etc/security/limits.conf
ulimit -n 65535

```

###2.3 ipv6关闭

```
# 在/etc/modprobe.d/dist.conf结尾添加
vi /etc/modprobe.d/dist.conf
alias net-pf-10 off
alias ipv6 off
echo "NETWORKING_IPV6=NO" >> /etc/sysconfig/network

```

###2.4 关闭NetworkManager
```
chkconfig NetworkManager off
/etc/init.d/NetworkManager stop

/etc/init.d/network restart
```

###2.5打开包转发功能

```
echo 1 > /proc/sys/net/ipv4/ip_forward
sysctl -w net.ipv4.ip_forward=1
vi /etc/sysctl.conf
net.ipv4.ip_forward = 1
sysctl -p

```

###2.6配置qemu

```
vi /etc/libvirt/qemu.conf

user = "root"
group = "root"
dynamic_ownership = 0
vnc_listen = "0.0.0.0"
/etc/init.d/libvirtd restart
```


##配置网桥及vlan

###3.1删除kvm默认网桥
```
virsh net-destroy default
virsh net-autostart --disable default
```


###3.2配置网桥

```
#配置网桥
vi ifcfg-br0
DEVICE=br0
TYPE= Bridge
ONBOOT=yes
BOOTPROTO=static
IPADDR=172.16.3.223
NETMASK=255.255.255.0
GATEWAY=172.16.3.1
HOTPLUG=no

#配置eth0网卡
vi ifcfg-eth0
DEVICE=eth0
TYPE= Ethernet
ONBOOT=yes
BOOTPROTO=none
HOTPLUG=no

#重启网络
/etc/init.d/network restart
```
###3.3配置vlan
```
cat > ifcfg-eth0.${VLAN} <<EOF
DEVICE=eth0.${VLAN}
TYPE=Ethernet
ONBOOT=yes
BOOTPROTO=static
BRIDGE=br0
HOTPLUG=no
VLAN=yes
EOF
/etc/init.d/network restart
```


##4.安装KVM 虚拟子机

###4.1命令行初始化
```
virt-install \
--name centos6.4 \
--description "cyberciti.biz CENTOS 6.4 64 bit VM1" \
--ram=1024 \
--vcpus=2 \
--disk path=/data/kvm_img/centos6.4.img,size=20,bus=virtio \
--cdrom=/data/work/CentOS-6.4-x86_64-bin-DVD.iso \
--nonetworks \
--graphics vnc,password=123,port=5920
```


###4.2realvnc安装虚拟机
```
依次选择“options”->"advanced"->"expert"->"colourlevel"，将这项改为“full”即可
VNC Viewer鼠标右键问题解决
选择Enable 3-button mouse emulation
点击确定，OK了
kvm 虚拟机VNC下鼠标不同步问题解决方法
在虚拟机的配置文件中增加：
<input type=’tablet’ bus=’usb’/>
（该句位于<devices>配置中）
加上这个输入设备，重启虚拟机后VNC鼠标与系统鼠标同步问题解决!
```

###4.3修改网络配置
```

virsh edit centos6.4
# 增加
<interface type='bridge'>
 <source bridge='br0'/>
 <virtualport type='openvswitch' />
 <model type='virtio'/>
 <target dev='v5254008330c2-0'/>
</interface>

virsh destroy centos6.4
virsh define centos6.4.xml
virsh start centos6.4

#说明target的格式为v+MAC（除掉冒号）+-0（0为内网，1为外网）
```

###４.４虚拟机console 设置

此时安装完毕的虚拟机只能通过vnc进行连接操作，没有办法通过母机登录虚拟机的console口，必须进行配置才可以
```

# 开启虚拟机，如果需要
virsh start centos6.4

# 通过VNC登录虚拟机后进行以下设置

vi /etc/grub.conf
default=0
timeout=5
splashimage=(hd0,0)/grub/splash.xpm.gz
hiddenmenu
 title CentOS (2.6.32-358.el6.x86_64)
        root (hd0,0)
        kernel /vmlinuz-2.6.32-358.el6.x86_64 ro root=/dev/mapper/vg_vm-lv_root rd_NO_LUKS rd_NO_MD rd_LVM_LV=vg_vm/lv_root crashkernel=auto LANG=zh_CN.UTF-8 rd_LVM_LV=vg_vm/lv_swap  KEYBOARDTYPE=pc KEYTABLE=us rd_NO_DM rhgb quiet console=ttyS0
        initrd /initramfs-2.6.32-358.el6.x86_64.img

# 修改 /etc/securetty 到最后添加 ttyS0
echo 'ttyS0' >> /etc/securetty

# 在 /etc/inittab中添加agetty:
echo 'S0:12345:respawn:/sbin/agetty ttyS0 115200' >> /etc/inittab
然后就可以用下面的命令登录虚拟机了
virsh console centos6.4
```

##5添加电源管理

新创建的虚拟机，母机没法对其进行关机、重启操作，只能进行销毁；要让母机支持对子机的开关机，重启操作，子机必须安装电源管理模块
```
yum -y install acpid
/etc/init.d/acpid start
chkconfig acpid on
```


##6制作子机模板
```
cd /etc/libvirt/qemu/
virsh dumpxml centos6.4  > /etc/libvirt/qemu/template.xml 
```

###6.1通过模板创建虚拟机
```
cd /etc/libvirt/qemu/
cp template.xml test.xml
cp /data/kvm_img/centos6.4.img /data/kvm_img/test.img

修改xml文件

vi /etc/libvirt/qemu/test.xml 
# 修改name,uuid,disk位置,MAC地址,vnc端口
virsh define /etc/libvirt/qemu/test.xml 
```

###6.2创建data镜像、磁盘
创建好的虚拟机只有系统盘，需要制作一个data盘来存储数据
首先创建一个容量是600G的data镜像文件，这个文件很小，只有200K左右，可以当作data镜像模板
```

qemu-img create -f qcow2 600G-data.qcow2 600G

```
然后，需要使用该data盘的虚拟机就可以把镜像文件拷贝过去使用，注意此时的data镜像是一个空磁盘，需要进入虚拟机进行格式化后才能使用；当然，还有另外一个办法就是在母机上直接格式化该data镜像，虚拟机只需挂载即可使用
```
virt-format -a 600G-data.qcow2 --filesystem=ext4
# 注意，该命令会将磁盘直接分成一个600G大小的分区，即/dev/vdb1，虚拟机挂载的时候需要注意

#最后，修改xml配置文件，添加新的磁盘信息
vi /etc/libvirt/qemu/test.xml 
    <disk type='file' device='disk'> 
      <driver name='qemu' type='qcow2' cache='none'/> 
      <source file='/data/kvm_img/600G-data.qcow2'/> 
      <target dev='vdb' bus='virtio'/> 
    </disk>
```

###6.3修改主机名、IP地址
利用virt-copy-in工具修改主机名、IP地址
```
# 添加IP
cat > ifcfg-eth0 <<EOF
DEVICE=eth0
TYPE=Ethernet
ONBOOT=yes
BOOTPROTO=static
IPADDR=172.16.3.227
NETMASK=255.255.255.0
GATEWAY=172.16.3.1
EOF

virt-copy-in -d test ifcfg-eth0 /etc/sysconfig/network-scripts/

# 添加主机名
cat > network <<EOF
NETWORKING=yes
HOSTNAME=vm-3-227
EOF

virt-copy-in -d test network /etc/sysconfig/
virsh start test
```

##7一键部署工具

上面的部署过程都是手动一步一步执行了，执行步骤已经整合到一键工具，只要执行一键工具就可完成整个过程的部署
```
./zvm-setup-20141106165031 master_ip role
```
master_ip 指服务端ip
role 角色，服务端为cc，客户端为nc，不填默认是nc