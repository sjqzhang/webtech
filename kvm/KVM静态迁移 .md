
 




 KVM是时下linux 平台下最流行的全功能虚拟化开源解决方案 ，KVM 有很多优势，可以方便的进行迁移算是一个。本文主要讲静态迁移 。所谓静态迁移就是在允许停机的情况下进行迁移 。其迁移方式有两种，一种是图形化下操作，一种是命令行下进行。


 无论是那一种方式，为了保证数据一致情，最好先将运行的虚拟机关闭 。你可以进虚拟机poweroff ，也可以能过VMM管理工具关闭运行的主机。也可以通过virsh命令操作：






```
virsh destroy 虚拟机名
```




 如果不知道虚拟机名，可以通过virsh list命令查看，而virsh list --all则将所有的虚拟机都列出，不管目前是否处于运行状态 。






```
[root@cq038 qemu]# virsh list --all
 Id    Name                           State
----------------------------------------------------
 2     cq038_361way_11               running
 4     cq038_dstr_12                 shut off 
```







 一、图形化迁移


 图形化管理工具VMM的安装：






```
# yum install virt-manager
# apt-get install virt-manager
# emerge virt-manager
```







 以上三个命令视平台不同，使有命令不同 。yum主要用于类centos平台 ，apt-get主要用于类debian或ubuntu平台，emerge主要用于gentoo平台。VMM下操作十分简单。先将停掉的虚拟机从其他机器拷到本机上 。然后依次选择导入image文件，选择img文件，并选择相应的操作系统 ，接下来再按要求输入内存大小和cpu个数 ，最后finish完成就完了迁移 。


 ![http://www.361way.com/wp-content/uploads/2013/06/kvm1.png](http://www.361way.com/wp-content/uploads/2013/06/kvm1.png)





 ![http://www.361way.com/wp-content/uploads/2013/06/kvm2.png](http://www.361way.com/wp-content/uploads/2013/06/kvm2.png)


 操作比较傻瓜，不再多说。VMM的详细用法可以参看其[官网说明](http://virt-manager.org/) 。


 二、命令行下


 1、先从远程主机上将img文件拷贝到本机。


 2、从远程主机上再将/etc/libvirt/qemu目录下对应的主机名.xml文件拷贝过来，放到本机的/etc/libvirt/qemu下。


 3、如果原始img路径和当前img文件路径不同，还需要将该xml文件中disk相关的路径改为本机放置的路径，如下：






```
 <disk type='file' device='disk'>
      <driver name='qemu' type='qcow2' cache='none'/>
      <source file='/opt/dstr-12.img'/>
      <target dev='vda' bus='virtio'/>
      <address type='pci' domain='0x0000' bus='0x00' slot='0x05' function='0x0'/>
    </disk>
```




 如果原始路径和本机路径相同，则跳过该步。


 4、执行下列命令完成KVM虚拟机的define和启动



```
virsh define /etc/libvirt/qemu/kvm36_361way_11.xml
virsh start kvm36_361way_11
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











