
                
目录



[1 出现Permission denied](#Permission_denied)

[2 libvirt遇到死锁](#libvirt)

[3 迁移需要FQDN](#FQDN)

[4 启动nfs出现问题](#nfs)

[5 挂载nfs出现问题](#nfs-2)

[6 virsh关闭虚拟机](#virsh)

[7 virsh无法使用ssh协议访问远程机器](#virshssh)





本篇记录在使用libvirt的时候遇到的一些情况,即解决方法.



<span id="Permission_denied" ></span>出现Permission denied


```

[root@localhost vm]# virsh start centos
error: Failed to start domain centos
error: internal error process exited while connecting to monitor: qemu-system-x86_64: -drive file=/home/d/shixun/vm/vdisk.img,if=none,id=drive-ide0-0-0,format=qcow2: could not open disk image /home/d/shixun/vm/vdisk.img: Permission denied

```


解决:/etc/libvirt/qemu.conf




```

# Some examples of valid values are:
#
# user = "qemu" # A user named "qemu"
# user = "+0" # Super user (uid=0)
# user = "100" # A user named "100" or a user with uid=100
#
user = "root"

# The group for QEMU processes run by the system instance. It can be
# specified in a similar way to user.
group = "root"

# Whether libvirt should dynamically change file ownership
# to match the configured user/group above. Defaults to 1.
# Set to 0 to disable file ownership changes.
dynamic_ownership = 0

```


我的这个没能解决问题



/etc/init.d/libvirtd restart 不管用



<span id="libvirt" ></span>libvirt遇到死锁

在使用virsh对虚拟机进行动态迁移时,虚拟机没有开启.于是就去开启虚拟机,但是却发现无法运行.




```
Error starting domain: Timed out during operation: cannot acquire state change lock

libvirtError: Timed out during operation: cannot acquire state change lock

```


我进行了以下的步骤




```

virsh undefine centos

####Login as a root user and kill the libvirtd.

killall -9 libvirtd

rm /var/run/libvirtd.pid   ##### Remove the libvirtd pid file.

/etc/init.d/libvirtd  restart   #### Restart libvirtd.

```


在尝试上面的操作后,不起作用.



修改一下的domain的xml文件中的name标签,给虚拟机改个名字,期间我还删除了domain的xml文件里的qemu:commandline里面信息,重新define后就可以运行了.



<span id="FQDN" ></span>迁移需要FQDN

在进行迁移的时候使用命令 virsh migrate –live ubuntu qemu+ssh://dest_ip/system




```
error: internal hostname on destination resolved to localhost, but migration requires an FQDN
```


解决:ssh进入到dest host机器,运行hostname domain 就好了.其中domian是一个域名.将接下来就可以进行迁移了.



<span id="nfs" ></span>启动nfs出现问题

启动NFS服务,出现问题




```
Failed to issue method call: Unit nfsserver.service failed to load: No such file or directory. See system logs and 'systemctl status nfsserver.service' for details.
```


解决:按照教程来就好了




```

# vim /etc/exports
/var/lib/libvirt/images *.example.com(rw,no_root_squash,sync)

# service nfs start

# mount -t nfs storage_host:/var/lib/libvirt/images /var/lib/libvirt/images

```


<span id="nfs-2" ></span>挂载nfs出现问题

当去mount远程的nfs服务器,出现问题了.



mount.nfs: access denied by server while mounting 211.87.***.53:/mnt/nfs



解决:原来发现,在/etc/exports中,没有将/mnt/nfs添加进去,只能将里面有的文件夹才能mount到本机来.



可以先umoutn /mnt/nfs ,然后在mount看看能否成功



<span id="virsh" ></span>virsh关闭虚拟机

virsh shutdown 关闭虚拟机没起作用



解决:需要在虚拟机里安装一些东西




```

yum install acpid
chkconfig acpid on
service acpid start

```


<span id="virshssh" ></span>virsh无法使用ssh协议访问远程机器

当我去远程查询信息的时候,virsh -c qemu+ssh://211.87.***.88/system list 的时候出现了下面的问题.




```

error: failed to connect to the hypervisor
error: no valid connection
error: End of file while reading data: : Input/output error

```


查看日志 cat /var/log/secure | grep sshd 发现是我这里主动发出断开的.难道是检测到libvirtd有些问题导致的?



当时使用virt-manage可以查询到远程的信息.估计是sshd出现的问题把.



解决:我没有重新安装sshd,我是通过tcp协议进行迁移的,因为是做测试,所以没有考虑安全的问题.具体使用tcp进行迁移,查看[virsh使用qemu+tcp访问远程libvirtd](http://www.chenyudong.com/archives/libvirt-connect-to-libvirtd-with-tcp-qemu.html) .




    



                            

