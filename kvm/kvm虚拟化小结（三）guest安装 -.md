
 




 KVM guest主机的安装从安装工具上来分，可以使用qemu-kvm(centos系统下是位于/usr/libexec/qemu-kvm位置)工具来安装，也可以使用virt-install工具，不过通常习惯上我们用virt-install工具进行安装；接是否图形安装又可以分为vnc安装和终端命令行安装（该话是针对linux而言的，win系统都是用vnc图形方式安装）。


 




 执行qemu-kvm命令时，会看到如下的提示：






```
[root@localhost libvirt]# /usr/libexec/qemu-kvm --help
QEMU PC emulator version 0.12.1 (qemu-kvm-0.12.1.2), Copyright (c) 2003-2008 Fabrice Bellard
WARNING: Direct use of qemu-kvm from the command line is not recommended by Red Hat.
WARNING: Some command line options listed here may not be available in future releases.
WARNING: Red Hat recommends the use of libvirt as the stable management interface.
```




 所以由上面的提示不难看出，系统还是推荐使用libvirt工具进行安装的。


 一、virt-install vnc图形安装



 安装之前需要确认开启了vnc支持，vim /etc/libvirt/qemu.conf 打开该配置文件，找到vnc_listen = "0.0.0.0"行，取消该行前的注释。


 安装命令如下：






```
#virt-install --name ppd_win7 --ram 2048 --disk path=/file/win7.img,size=30 --network network:default --vnc --os-variant ppdwin7 --cdrom /opt/cn_windows_7_professional_with_sp1_x64_dvd_621744.iso
```

 此时可以通过netstat -ntlp查看vnc的端口，默认是从5900开始，也可以通过参数指定vnc的端口和密码，在virt-install 的Graphics Configuration的配置部分，可以看到如下内容：






```
  Graphics Configuration:
    --graphics=GRAPHICS
                        Configure guest display settings. Ex:
                        --graphics vnc
                        --graphics spice,port=5901,tlsport=5902
                        --graphics none
                        --graphics vnc,password=foobar,port=5910,keymap=ja
```

 连接后的界面如下：


 [![http://www.361way.com/wp-content/uploads/2014/04/vnckvm.png](http://www.361way.com/wp-content/uploads/2014/04/vnckvm.png)](http://www.361way.com/wp-content/uploads/2014/04/vnckvm.png)





 注：这里有可能会连接不上，一般是因为没在iptables上开启相关端口，当然也可以直接关闭防火墙 。个人吐槽一点，感觉vnc并不是很好用，所以一般我的做法是通过vnc完成安装后，再进入系统安装radmin，然后在防火墙上开启radmin的相关端口，通过edit再把vnc关闭。





 同理，linux的vnc安装方式一样，只需要把img存放路径、os-variant、源iso文件做下更改即可。






```
#virt-install --name ppd_centos --ram 2048 --disk path=/file/centos.img,size=30 --network network:default --graphics vnc,password=test123,port=5910 --os-variant rhel6 --cdrom /opt/centos.iso
```




 二、命令行下的安装（console安装）



 具体操作方式如下：









```
#virt-install -n ppd_centos -r 1024 --vcpus=1 --os-variant=rhel6 --accelerate --nographics  -v -l /opt/CentOS-6.3-x86_64-bin-DVD1.iso -w bridge:br0 --disk path=/file/centos.img,size=30 -x "console=ttyS0"
```

操作过程见下图：





 [![http://www.361way.com/wp-content/uploads/2013/11/kvmconsole.png](http://www.361way.com/wp-content/uploads/2013/11/kvmconsole.png)](http://www.361way.com/wp-content/uploads/2013/11/kvmconsole.png)





 三、无人值守自动化安装（ks安装）



 上面提到的第二种安装方式还是需要分区、指定时区、设置密码等操作，是否可以通过直接命令输入后，直接按要求完成操作，而不需要上面的过程 。这个当然也是可以的，可以通过ks的方式进行安装：






```
#virt-install --hvm --ram 4089 --vcpus=2 --network=bridge:virbr0 --name=jira_100 --disk /vmsys/jira-100.img,size=130,bus=virtio,cache=none,io='threads' --accelerate --nographics --location=http://192.168.88.253/centos6/6.4/ --extra-args="ks=http://192.168.88.253/ks/jira_100.ks console=tty0 console=ttyS0,115200"
```

 其中88.253为搭建的一台yum源服务器，ks文件的类似如下：






```
# use shadow file encrypted by md5
auth  --useshadow  --enablemd5
# Install OS instead of upgrade
install
# boot from MBR (default)
bootloader --location=mbr
#clear MBR
zerombr
# delete all partition (default do not delete or use '--none')
clearpart --all --initlabel
# use text mode instead of graph mode
text
# enable iptables, allow ssh, separated by ',' if add other ports
firewall --enabled --port=22:tcp
# install yum resource URL
url --url=http://192.168.88.253/centos6/6.4/
# disable the settings menu when first boot
firstboot --disable
keyboard us
lang en_US
timezone --isUtc Asia/Shanghai
# network settings, including DNS, hostname, disable ipv6
network --device eth0 --bootproto static --ip 192.168.122.50 --netmask 255.255.255.0 --gateway 192.168.122.1 --nameserver 192.168.122.1 --hostname webapp-50.361way.com --noipv6
# syslog level, use '--host' and '--port' to define remote rsyslog server
logging --level=info
# reboot after installation (default), may use 'poweroff' to shutdown system
reboot
# set root password, use '--iscrypted' to use crypt password
rootpw 123456
# disable selinux
selinux --disable
# do not configure X Windows
skipx
# partition, vda is the first disk of system, size is counted by MB
part /boot --fstype="ext4" --ondisk=vda --size=512
# use '--recommended' to let system decide the size of swap partition
part swap --fstype="swap" --ondisk=vda --recommended
part /data1 --fstype="ext4" --ondisk=vda --size=15360
part /logs --fstype="ext4" --ondisk=vda --size=51200
part / --bytes-per-inode=4096 --fstype="ext4" --ondisk=vda --grow --size=1
# use '--grow --size=1' to use all the disk size left
#part /var --fstype="ext4" --ondisk=vda --grow --size=1
# add additional repositories
repo --name="extra" --baseurl=http://192.168.88.253/centos6/extra
# install packages needed, default will install @core and @base, use '--nobase' to do not install @base
%packages
@core
@base
man
telnet
ntpdate
#nagios-plugins
#nagios-plugins-all
#nrpe
#gcc
#make
net-snmp
net-snmp-utils
#watchdog
# shell to run after installation, configure DNS, yum repository, chkconfig,
%post
(
echo 'nameserver 8.8.8.8
nameserver 8.8.4.4' >> /etc/resolv.conf
mv /etc/yum.repos.d/CentOS-Base.repo /etc/yum.repos.d/CentOS-Base.repo.b
echo '[base]
name=centos6
baseurl=http://192.168.88.253/centos6/6.4
gpgcheck=0
[extra]
name=centos-extra
baseurl=http://192.168.88.253/centos6/extra
gpgcheck=0' > /etc/yum.repos.d/CentOS-Base.repo
echo 'IPV6INIT=no' >> /etc/sysconfig/network
for Service in postfix lvm2-monitor netfs kdump;
do
chkconfig $Service off
done
echo 'sshd:ALL' >> /etc/hosts.allow
echo 'ALL:ALL' >> /etc/hosts.deny
sed -i '/HWCLOCK/{s/no/yes/g}' /etc/sysconfig/ntpdate
sed -i '/DNS/{s/#//g;s/yes/no/g}' /etc/ssh/sshd_config
# disable root ssh login
#sed -i '/PermitRootLogin/d' /etc/ssh/sshd_config
#echo "PermitRootLogin no" >> /etc/ssh/sshd_config
#chroot for ssh
#echo "session    required    pam_chroot.so" >> /etc/pam.d/sshd
#echo "tyj    /home/tyj" >> /etc/security/chroot.conf
#only user in wheel group can use "su"
#sed -i '/required/{s/#//g}' /etc/pam.d/su
#limit of open files and processes for each user
cat >> /etc/security/limits.conf <<EOF
*               soft    nofile  10240
*               hard    nofile  10240
root            soft    nproc   65535
root            hard    nproc   65535
EOF
# snmpd configuration
#sed -i '/^com2sec/{s/public/mycompany/g}' /etc/snmp/snmpd.conf
#sed -i '/^access/{s/systemview/all/g}' /etc/snmp/snmpd.conf
#sed -i '/80$/{s/#//g}' /etc/snmp/snmpd.conf
#chkconfig snmpd on
#echo 'snmpd:192.168.' >> /etc/hosts.allow
# log timestamp in command history
echo "export HISTTIMEFORMAT='%F %T '" >> /etc/profile
#logout after 3600s if no action
echo "export TMOUT=3600" >>/etc/profile
# enable the fuction of watchdog
#echo "modprobe softdog" >> /etc/sysconfig/watchdog
#sed -i '/min-memory/{s/#//}' /etc/watchdog.conf
#sed -i '/watchdog-device/{s/#//}' /etc/watchdog.conf
#sed -i '/admin/{s/#//}' /etc/watchdog.conf
#sed -i '/interval/{s/#//}' /etc/watchdog.conf
#sed -i '/logtick/{s/#//}'/etc/watchdog.conf
#sed -i '/pidfile/{s/#//}' /etc/watchdog.conf
#chkconfig watchdog on
# configure nagios client
#sed -i '/server_address/{s/#//g;s/127.0.0.1/'192.168.x.x'/g}' /etc/nagios/nrpe.cfg
#sed -i '/allowed_hosts/{s/127.0.0.1/&,192.168.x.x /}' /etc/nagios/nrpe.cfg
#chkconfig nrpe on
echo '' >> /etc/rc.local
) 1>/root/install.log 2>&1
```

 具体也可以视情况更改以上ks文件的内容，安装的时候系统会根据ks文件的内容自动完成安装操作的。
















 [RSS](http://www.361way.com/feed)
[Google](http://fusion.google.com/add?feedurl=http://www.361way.com/feed)

[Youdao](http://reader.youdao.com/#url=http://www.361way.com/feed)

[Xian Guo](http://www.xianguo.com/subscribe.php?url=http://www.361way.com/feed)

[Zhua Xia](http://www.zhuaxia.com/add_channel.php?url=http://www.361way.com/feed)

[My Yahoo!](http://add.my.yahoo.com/rss?url=http://www.361way.com/feed)

[newsgator](http://www.newsgator.com/ngs/subscriber/subfext.aspx?url=http://www.361way.com/feed)

[Bloglines](http://www.bloglines.com/sub/http://www.361way.com/feed)

[iNezha](http://inezha.com/add?url=http://www.361way.com/feed)











