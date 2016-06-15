
                用qemu命令来创建虚拟机.



第一步,创建一个虚拟机的硬盘,将来来存放虚拟操作系统的.这个虚拟硬盘是利用文件系统来进行模拟的.




```
qemu-img create -f qcow2 vdisk.img 10G 
```


qcow2是一种硬盘的格式,比qcow更新,qcow2 is an updated version of the qcow format, intended to supersede it. The main difference with the original is that qcow2 supports multiple virtual machine snapshots through a new, flexible model for storing snapshots.
qcow支持数据大小动态的增加.而不是一开始就固定大小了.直接分配那么大的位置占空间



第二步,安装iso,并运行




```
qemu-system-x86_64 -enable-kvm -m 512 -smp 1 -boot order=dc -hda /opt/vdisk.img -cdrom /home/d/Downloads/CentOS-6.4-x86_64-minimal.iso
```


其中，-enable-kvm 是使用kvm内核,不用qemu的内核,开启虚拟机加速, -m 2048 是给客户机分配512MB内存，-smp 1 是给客户机分配1个CPU，-boot order=dc 是指定系统的启动顺序为光驱(d: CD-ROM)、硬盘(c: hard Disk)，-hda ** 是分配给客户机的IDE硬盘（即前面准备的镜像文件），-cdrom ** 是分配客户机的光驱。默认情况下，QEMU会启动一个VNC server端口（如上面的::1:5900），可以用vncviwer工具来连接到QEMU的VNC端口查看客户机。



出现




```
VNC server running on `127.0.0.1:5900'
```


这意味着,你的虚拟机已经开启了,并且,开通了一个端口给你,你可以利用5900端口去远程桌面连接.有个图片



接下来就是普通的安装操作系统了.在安装结束后,我们需要进行重启,可能就出现问题了.这是将原先的虚拟机ctrl+c强制结束了.然后再次运行虚拟机



第三步,运行刚刚安装的操作系统




```
# qemu-system-x86_64 vdisk.img -m 512 -enable-kvm
```


If you’re on Fedora/RHEL/CentOS (and installed a kvm package and not built kvm yourself from source) then substitute qemu-kvm for qemu-system-x86_64



查看进程的一些xinxi
ps -eLo ruser,pid,ppid,lwp,psr,args | grep qemu



参考:
qcow2、raw、vmdk等镜像格式 http://www.prajnagarden.com/?p=248



运行刚刚安装的操作系统 http://www.linux-kvm.org/page/HOWTO1#Running_the_newly-installed_guest




    



                            

