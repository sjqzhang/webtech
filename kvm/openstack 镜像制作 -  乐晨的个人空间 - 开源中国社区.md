
         在OpenStack平台搭建好以后，我们可以用下载一些现成的镜像来进行测试，比如ubuntu，但根据需求需要不同的系统环境，这里介绍下如何制作自定义的镜像。本文以制作kvm debian6为实例: 

 
         glance支持raw和qcow2等多种格式.

          

 
         首先创建创建一个5G大小的镜像文件 

 

```
root@debian:/opt#kvm-img create -f raw vm.img 5G
```
 
           

 
           安装虚拟机 

 

```
root@debian:/opt#kvm -m 2048 -drive file=vm.img -cdrom /tmp/debian-6.0.2.1-amd64-CD-1.iso -vnc 10.1.6.175:1 -boot d
```
           利用vnc安装虚拟机，注意在分区阶段把5G全部分成一个ext4 / 分区，不要创建多个分区也不要创建swap分区。因为openstack只接受ext4文件格式的镜像，所以把分区格式化成ext4。 
            

 
            启动虚拟机 

 

```
root@debian:/opt#kvm -m 2048 -drive file=vm.img -cdrom /tmp/debian-6.0.2.1-amd64-CD-1.iso -vnc 10.1.6.175:1 -boot c
```
 
            利用VNC进入虚拟机，配置eth0网卡，设置为dhcp获取ip。清空/etc/udev/rules.d/70-persistent-net.rules内容，因为它会自动添加其他的网络接口，需要删除这个文件避免自动添加除eth0以外的接口。设置内网DNS. 

 
            

 
            结束以后关闭虚拟机，将镜像文件挂载:     

 

```
root@debian:/opt#losetup -f vm.img
root@debian:/opt#losetup -a
/dev/loop0: [0801]:417805 (/opt/vm.img)
```
 
 



 
             用fdisk找到偏移量和block size 

 

```
root@debian:/opt#fdisk -c -u -l /dev/loop0
Disk /dev/loop0: 5368 MB, 5368709120 bytes
149 heads, 8 sectors/track, 8796 cylinders, total 10485760 sectors
Units = sectors of 1 * 512 = 512 bytes
Sector size (logical/physical): 512 bytes / 512 bytes
I/O size (minimum/optimal): 512 bytes / 512 bytes
Disk identifier: 0x000a477d

      Device Boot      Start         End      Blocks   Id  System
/dev/loop0p1   *        2048    10483711     5240832   83  Linux
```
              上面最后一行显示分区是从扇区(sector)2048开始，每个扇区是512个字节，所以是从2048*512=1048576个字节开始。 
 



 
               卸载loop后重新从1048576字节开始挂载: 

 

```
root@debian:/opt# losetup -d /dev/loop0
root@debian:/opt# losetup -f -o 1048576 vm.img
root@debian:/opt# losetup -a
/dev/loop0: [0801]:417805 (/opt/server.img), offset 1048576
```
 
 



 
               拷贝出最终镜像,卸载旧镜像: 

 

```
root@debian:/opt# dd if=/dev/loop0 of=debian6.img
root@debian:/opt# losetup -d /dev/loop0
```
   
 



 
               挂载新镜像到/mnt 

 

```
root@debian:/opt#mount -o loop debian6.img /mnt/
```
 修改 /mnt/etc/fstab,LABEL=/ 改成LABEL=uec-rootfs 
 



 
               从/mnt/boot/里面拷贝 initrd和vmlinuz文件到 /opt/ 

 
   

 

```
root@debian:/mnt/boot/#cp initrd.img-2.6.32-5-amd64  vmlinuz-2.6.32-5-amd64 /opt/
```
 


 



 
              将新镜像修改一下标签 

 
   

 

```
root@debian:/opt#tune2fs -L uec-rootfs debian6.img 
```
 
 



 
              将新镜像，内核文件打包发送到openstack galnce主机上 

 
              在Openstack中注册上传新镜像 

 
   

 

```
#返回一个ID
root@openstack:~/img# glance add name="debian6 initrd" disk_format=qcow2 container_format=ovf is_public=true < initrd.img-2.6.32-5-amd64
Added new image with ID: 52a2560e-ca3b-40f5-aa78-b33b9fc1aa4a
#返回一个ID
root@openstack:~/img# glance add name="debian6 vmlinuz" disk_format=qcow2 container_format=ovf is_public=true < vmlinuz-2.6.32-5-amd64
Added new image with ID: 1d3fb927-7dba-4e10-9b5b-396e218cf192
#使用上面2个返回的ID上传新debian6镜像
root@openstack:~/img# glance add name="debian6 OS" disk_format=qcow2 container_format=ovf is_public=ture ramdisk_id="52a2560e-ca3b-40f5-al_id="1d3fb927-7dba-4e10-9b5b-396e218cf192" < debian6.img
Added new image with ID: 2281d6ba-c2f2-4c81-bff1-cf0a584f5ced
```
 

```
root@openstack:~# glance index
ID                                   Name                           Disk Format          Container Format     Size          
------------------------------------ ------------------------------ -------------------- -------------------- --------------
2281d6ba-c2f2-4c81-bff1-cf0a584f5ced debian6 OS                     qcow2                ovf                      5367660544
```
              
                  这样就可以使用openstack中的dashboard直接创建debian6虚拟机. 

 
 ![http://static.oschina.net/uploads/space/2012/1127/162019_ziAt_812550.png](http://static.oschina.net/uploads/space/2012/1127/162019_ziAt_812550.png)

 

 
 



 
                 

 
 






