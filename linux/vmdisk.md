## Linux下挂载和格式化虚拟磁盘


分三种情况：只有一个分区；有多个分区但不包含lvm；包含lvm；

先创建一个raw的虚拟硬盘在下面的实验中使用。

```shell

dd if=/dev/zero of=vmdisk.img bs=1M count=1000




```

### 情况一 只有一个分区

```

mkfs.ext4 -q vmdisk.img


mount -o loop vmdisk.img /mnt/vmdisk




```





### 情况二 多分区，不函lvm

```shell

losetup /dev/loop0 vmdisk.img

fdisk /dev/loop0

mount /dev/loop0 /mnt

kpartx -av /dev/loop0


假如/dev/loop0相当于/dev/sdb，那么/dev/mapper/loop0p1和/dev/mapper/loop0p2相当于/dev/sdb2


mount /dev/mapper/loop0p1 /mnt/

mount /dev/mapper/loop0p2 /media/


如何卸载呢？反向来一遍


umount /mnt/

umount /media/

kpartx -dv /dev/loop0

loseup -d /dev/loop0


```


>losetup把文件映射到回环设备中，这时，/dev/loop0就像/dev/sdb,/dev/hdc等一样，你可以使用fdisk进行分区，我将test.img均分了两个区，还没有格式化。
>
>其实对于单分区，在mount时加上-o loop选项，就相当于如下操作
>
>losetup /dev/loop0 test.img
>
>mount /dev/loop0 /mnt （把磁盘作为一个分区时可以用mount /dev/sdb /mnt挂载)
>
>但是多分区时不行，因为需要mount /dev/sdb1 /mnt这样
>
>因此，用kpartx -av /dev/loop0把虚拟磁盘的分区列出来






### 情况三

> 同样，先映射到回环设备，然后创建一个pv，一个vg，再创建两个lv


```shell

losetup /dev/loop0 vmdisk.img

pvcreate /dev/loop0

vgcreate VolGroup /dev/loop0

lvcreate -n lv1 -L 32M VolGroup

lvcreate -n lv2 -L 32M VolGroup


```
