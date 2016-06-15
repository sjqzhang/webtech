
 




 KVM下windows虚拟机默认disk使用的是Qemu IDE硬盘，网卡默认是100M网卡。为了使kvm主机在相同的配置下，有更好的效率，需要命名用半虚拟化将驱动改为为了virtio ，使硬盘工作在SCSI模式，网卡为1000M 。


 如果按默认安装过的主机想更换驱动，可以按如下方法操作：


 一、硬盘更新驱动



 1、下载驱动或挂载iso驱动


 去fedora下提供的最新驱动，打开http://alt.fedoraproject.org/pub/alt/virtio-win/latest/images/bin/ 下载最新的ISO文件或vfd（软驱加载）文件 。


 2、新增一块硬盘，并将其驱动更新为SCSI模式。






```
qemu-img create -f qcow2 kvm.img 1G
virsh attach-disk 361way /data1/kvm.img vdc
```




 动态完成增加后，通过vnc查看windows虚拟机时，会在资源管理器里提示发现新的硬盘。此时，解压或挂载fedora上下载的iso文件，如当前最新的virtio-win-0.1-65.iso 。打开后发现其包括wxp、wnet、wlh、xp、wlh、win8、win7、vista几个文件夹，其中几个文件夹对应的系统是wnet ＝win2003，wlh = win2008 ，xp = xp /win2003 ，virsta = vista/win2008 。按照目前使用的windows系统，安装相应目录里的驱动就行了。


 注：以上驱动我在xp里增加scsi测试通过，在win2003 x86里安装发现蓝屏 。如果出现其他情况，最好再到网络上找其他驱动试下。如果使用的是正版redhat就会省事不少，其源里有virtio-win的rpm包，安装完成后可以去/usr/share/virtio-win目录找相应的驱动。


 3、更新xml文件，并使原disk更新为SCSI格式


 varnish edit xml文件（也可以dumpxml文件，并在该文件基础上修改），找到如下的行：






```
<disk type='file' device='disk'>
      <driver name='qemu' type='qcow2' cache='none'/>
      <source file='/vmsys/winxp.qcow2'/>
      <target dev='hda' bus='ide'/>
      <address type='drive' controller='0' bus='0' target='0' unit='0'/>
    </disk>
```




 将其修改为：






```
 <disk type='file' device='disk'>
      <driver name='qemu' type='qcow2'/>
      <source file='/vmsys/winxp.qcow2'/>
      <target dev='vda' bus='virtio'/>
      <address type='pci' domain='0x0000' bus='0x00' slot='0x06' function='0x0'/>
    </disk>
```







 改完后，destroy并start重启。在设备管理器发现原硬盘项已变成SCSI 。 


 注：刚刚新增的新的磁盘，如果想继续使用，就在xml文件中保留相关的行，如果不要，可以考虑将其删除或直接在原始xml文件中edit ，并可以将刚刚create的img文件删除。


 二、网卡驱动更新



 1、增加新的网卡






```
virsh attach-interface 361way --type bridge --source br1 --model virtio
```




 在设备管理器里会发现新的网卡，为新的网卡安装virtio驱动即可。安装完成后dumpxml可以对比下virtio和普通模式下的区别。


 原始驱动下的配置文件：






```
<interface type='bridge'>
      <mac address='52:54:00:f3:77:4a'/>
      <source bridge='virbr0'/>
      <address type='pci' domain='0x0000' bus='0x00' slot='0x03' function='0x0'/>
    </interface>
```




 virtio新增网卡的xml配置：






```
   <interface type='bridge'>
      <mac address='52:54:00:ac:9c:4c'/>
      <source bridge='br1'/>
      <target dev='vnet3'/>
      <model type='virtio'/>
      <alias name='net3'/>
      <address type='pci' domain='0x0000' bus='0x00' slot='0x08' function='0x0'/>
    </interface> 
```







 注意：上面的关键差别在于多了model type行，这里再使用原来新增disk的方法，在安装完virio驱动后，再修改原xml文件，并在原网卡上新增model行时，发现用vnc连接后，在设备管理器里会要求重新打驱动，但打完驱动还是黄色叹号(xp下)，win2003下发现报code 39 error的错误。后来换成http://www.famzah.net/download/kvm/virtio-windows/24.09.2009/NetKVM.iso  （只包含网卡的）去更新，发现可以正常使用 。


 三、新装系统时直接使用virtio驱动



 可以按下面的方式进行安装：






```
virt-install --name 361way --ram 1536 --vcpus=1 --network=bridge:virbr0,model=virtio --disk path=/vmsys/win2k3.img,size=50,bus=scsi  --graphics vnc,password=123@361way,port=5910 --os-variant win2k3 --cdrom /opt/windows2003.iso -fda /floppy_image_path/floppy_image_name 
```




 不过，按上面的方式进行安装时需要在安装过程中按F6加载硬盘驱动 。具体可以[参考linux-kvm.org上的步骤 ](http://www.linux-kvm.org/page/WindowsGuestDrivers/viostor/installation)。


 如果是2003以后的系统（如win2008），支持U盘和其他方式加载驱动，所以也可以利用下面的方式进行安装：






```
virt-install --name ad --ram 4096 --vcpus=2 --network=bridge:br0,model=virtio --disk path=/vm/windows/ad.img,size=100,bus=scsi  --graphics vnc,password=www.ppdai.com123,port=5910 --os-variant win2k8 --cdrom /opt/win2k8.iso --disk path=/opt/virtio-win-0.1-74.iso,device=cdrom,perms=ro
```

 注：由于物理机和虚拟机之间console和vnc等方式进行管理时，走的是一个不可见网络。所以无论安装的虚拟机是否有网卡或者网卡是否正常，都不会影响这个通道下的管理 。唯一的问题就是如果将iso驱动文件挂载给系统，让系统打上网卡驱动 。我一般的做法是先增加一个普通的bridge网卡 ，可以通过桥接上网，这样就可以通过外网下载所需的驱动。然后再destroy 并编辑xml文件再start 将其修改为virtio驱动 。


 参考页面：[chinaunix博客](http://blog.chinaunix.net/uid-20776139-id-3481065.html)





 四、总结



 virtio更快的原因：


 kvm因为使用了硬件虚拟化，所以其cpu方面的运行效率是很高的。不过，kvm在I/O虚拟化方面，传统的方式是利用QEMU纯软件的方式来

 模拟I/O设备，这样每次虚机发起I/O请求的时候，KVM内核模块会捕获这次请求，然后处理后将其放入I/O共享页，并通知用户空间中运行的QEMU程

 序。QEMU获得I/O操作，交由硬件模拟代码（Emulation）来模拟出本次I/O操作之后，将结果放回I/O共享页，同时通知KVM内核模块读取

 I/O共享页的操作结果，把结果返回给虚机。由于这种方式每次I/O操作经过的路径很复杂，其效率很低。


 所以就提出了virtio这种方案，virtio其实就是一个运行于Hypervisor之上的api接口，让客户机知道自己运行于虚拟化环境中，进行I/O操作的时候通过virtio与Hypervisor通信，从而是虚机有更好的性能。



















 [RSS](http://www.361way.com/feed)
[Google](http://fusion.google.com/add?feedurl=http://www.361way.com/feed)

[Youdao](http://reader.youdao.com/#url=http://www.361way.com/feed)

[Xian Guo](http://www.xianguo.com/subscribe.php?url=http://www.361way.com/feed)

[Zhua Xia](http://www.zhuaxia.com/add_channel.php?url=http://www.361way.com/feed)

[My Yahoo!](http://add.my.yahoo.com/rss?url=http://www.361way.com/feed)

[newsgator](http://www.newsgator.com/ngs/subscriber/subfext.aspx?url=http://www.361way.com/feed)

[Bloglines](http://www.bloglines.com/sub/http://www.361way.com/feed)

[iNezha](http://inezha.com/add?url=http://www.361way.com/feed)











