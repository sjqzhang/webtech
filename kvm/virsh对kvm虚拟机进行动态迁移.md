
                
目录




[1 迁移的类型：静态迁移和动态迁移](#i)
[1.1 静态迁移](#i-2)

[1.2 动态迁移](#i-3)





[2 使用nfs网络文件系统](#nfs)
[2.1 nfs配置](#nfs-2)

[2.2 nfs可能遇到的问题](#nfs-3)

[2.3 权限拒绝](#i-4)

[2.4 注意问题](#i-5)





[3 进行迁移](#i-6)
[3.1 启动虚拟机](#i-7)

[3.2 查看虚拟机状态](#i-8)

[3.3 进行迁移](#i-9)




[4 参考资料](#i-10)





<span id="i" ></span>迁移的类型：静态迁移和动态迁移

迁移虚拟机的方式有两种：一种是动态迁移，一种是静态迁移。



<span id="i-2" ></span>静态迁移

静态迁移：也叫做常规迁移、离线迁移（Offline Migration）。就是在虚拟机

#### 关机

或

#### 暂停

的情况下从一台物理机迁移到另一台物理机。因为虚拟机的文件系统建立在虚拟机镜像上面，所以在虚拟机关机的情况下，只需要简单的迁移虚拟机镜像和相应的配置文件到另外一台物理主机上；如果需要保存虚拟机迁移之前的状态，在迁移之前将虚拟机暂停，然后拷贝状态至目的主机，最后在目的主机重建虚拟机状态，恢复执行。这种方式的迁移过程需要显式的停止虚拟机的运行。从用户角度看，有明确的

#### 一段停机时间

，虚拟机上的服务不可用。这种迁移方式

#### 简单

易行，适用于对服务可用性要求不严格的场合。



<span id="i-3" ></span>动态迁移

动态迁移（Live Migration）：也叫在线迁移（Online Migration）。就是在保证虚拟机上服务

#### 正常运行

的同时，将一个虚拟机系统从一个物理主机移动到另一个物理主机的过程。该过程不会对最终用户造成明显的影响，从而使得管理员能够在不影响用户正常使用的情况下，对物理服务器进行离线维修或者升级。与静态迁移不同的是，为了保证迁移过程中虚拟机服务的可用，迁移过程仅有非常短暂的停机时间。迁移的前面阶段，服务在源主机的虚拟机上运行，当迁移进行到一定阶段，目的主机已经具备了运行虚拟机系统的必须资源，经过一个非常短暂的切换，源主机将控制权转移到目的主机，虚拟机系统在目的主机上继续运行。对于虚拟机服务本身而言，由于切换的时间非常短暂，用户感觉不到服务的中断，因而迁移过程对用户是透明的。动态迁移适用于对虚拟机服务可用性要求很高的场合。



动态迁移需要将原有的虚拟机镜像放在采用 SAN（storage area network）或 NAS（network-attached storage）之类的集中式共享外存设备,这样迁移的时候,不是迁移整个硬盘镜象,而是迁移内存的信息.所以迁移起来,速度比较快,停顿时间少。



动态迁移实际上是把虚拟机的配置封装在一个文件中，然后通过高速网络，把虚拟机配置和内存运行状态从一台物理机迅速传送到另外一台物理机上，期间虚拟机一直保持运行状态。现有技术条件下，大多虚拟机软件如 VMware、Hyper-V、Xen 进行动态迁移都需要共享存储的支持。典型的共享存储包括 NFS 和 SMB/CIFS 协议的网络文件系统，或者通过 iSCSI 连接到 SAN 网络。选用哪一种网络文件系统，需要根据具体情况而定。本文的实验采用了 NFS 文件系统作为源主机和目的主机之间的共享存储。



![http://www.chenyudong.com/uploads/2013/07/virsh-kvm-live-migration-with-libvirt.jpg](http://www.chenyudong.com/uploads/2013/07/virsh-kvm-live-migration-with-libvirt.jpg)



<span id="nfs" ></span>使用nfs网络文件系统

source host和dest host都通过网卡和NFS server进行连接,所有的VM镜像都在NFS Server上,然后将VM1从source host迁移到dest host上,通过网络来进行迁移,所以网络的速度决定这迁移的快慢.



<span id="nfs-2" ></span>nfs配置


```

 修改文件vi /etc/exports
/home/images *(rw,sync,no_root_squash)
/home/images 为要共享的文件夹
 rw：可读写的权限；
 ro：只读的权限；
 no_root_squash：登入到 NFS 主机的用户如果是 ROOT 用户，他就拥有 ROOT 权限，此参数很不安全，建议不要使用。
 sync：资料同步写入存储器中。
 async：资料会先暂时存放在内存中，不会直接写入硬盘。

重新启动 nfsserver 服务
 # service nfsserver restart 或者 systemctl restart nfs-server.service

查看状态
systemctl status nfs-server.service   ####查看nfs-server状态
exportfs -av   #####如果显示出共享的文件夹的话，说明设置已经生效

挂载NFS-server共享网络存储到本机
mount -t  nfs  nfs-server-host:/home/images /mnt/nfs
将NFS-server上的存储器/home/images/ 挂载到本地的/mnt/nfs 文件夹下。

```


<span id="nfs-3" ></span>nfs可能遇到的问题

如果在挂载nfs的时候，按tab键无法补全路径.



那么是防火墙的原因，把它添加到允许的规则里。设置selinux




```
setsebool -P virt_use_nfs 1
```


<span id="i-4" ></span>权限拒绝


```

error: Failed to start domain vdisk
error: internal error Process exited while reading console log output: char device redirected to /dev/pts/1
qemu-system-x86_64: -drive file=/mnt/nfs/vdisk.img,if=none,id=drive-ide0-0-0,format=qcow2: could not open disk image /mnt/nfs/vdisk.img: Permission denied

```


设置/mnt/nfs/vdisk.img的权限



<span id="i-5" ></span>注意问题

一定要注意所要共享的目录的

#### 权限

问题，包括它的

#### 父目录

，这些目录的权限要一样，否则mount的时候会出错



另外这个镜像最好都方在一个位置下。比如将nfs挂载到source host在/mnt/nfs，那么最好也在dest host的/mnt/nfs，路径一样，这样将来迁移就比较方便了。增加迁移的成功率。而且使用virt-manage必须路径一直，virsh可以要求不一致。只好还是source host和dest host在

#### 相同的路径挂载NFS网络共享系统

。



<span id="i-6" ></span>进行迁移

<span id="i-7" ></span>启动虚拟机

在 source host主机启动虚拟机




```
virsh start vdisk    ####vdisk 为虚拟机的名字
```


<span id="i-8" ></span>查看虚拟机状态


```

# virsh list --all
 Id    名称                            状态
----------------------------------------------------
 1     centos                         running
 2     vdisk                          running

```


<span id="i-9" ></span>进行迁移


```
virsh migrate vdisk --live qemu+ssh://des_ip:/system --unsafe
```


稍微过一会儿，我们就可以在dest host目标主机上看到虚拟机正在运行了。



<span id="i-10" ></span>参考资料


查看IBM的[KVM 虚拟机在物理主机之间迁移的实现](http://www.ibm.com/developerworks/cn/linux/l-cn-mgrtvm2/)





    



                            

