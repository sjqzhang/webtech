

在利用KVM的虚拟桌面应用中，有时候需要在虚拟桌面起来后还能够动态的挂载或卸载数据盘，以达到类似热插盘U盘或移动硬盘的效果，当然管理上需要做处理。如果纯粹中技术上来讲，大概是下面的几步：


###1. 创建数据盘：


    创建数据盘可以用qemu-img命令，但是缺点是创建完以后还需要在虚拟机里面做磁盘初始化（在磁盘管理里）和格式化。相比较而言，用libguestfs带的 virt-make-fs就好很多，一条命令完成磁盘创建和初始化的功能，挂到虚拟机里面马上就可以使用。


sudo virt-make-fs -F qcow2 -t ntfs -s 100G /home/.../workroom/test/temp test100G.img


###2. 定义数据盘配置文件：

```xml
<disk type='file' device='disk'>
    <driver name='qemu' type='qcow2'/>
    <source file='/home/.../workroom/test/test500G.img'/>
    <target dev='hdf' bus='virtio' type='virtio'/>
</disk>
```

另存为 test-device-attach.xml


###3. 启动虚拟机，假设虚拟机的domain名是 DomainAttachDisk;


###4. 运行 virsh 命令完成挂载


sudo attach-device DomainAttachDisk /home/.../workroom/test/test-attach.xml  


测试下来从挂载命令到操作系统识别大概30秒-60秒之间


###5. 卸载命令：


sudo detach-device DomainAttachDisk /home/.../workroom/test/test-attach.xml


如果用应用程序把这些过程管理起来，那么就能做到动态的数据盘挂载和卸载功能。


 


   


