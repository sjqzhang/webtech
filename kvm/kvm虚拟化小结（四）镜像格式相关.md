
 




 KVM支持的格式类型有几种，不过比较常见和常用的只有两种qcow2、raw两种 。raw格式做为virt-install安装时的默认格式，而在实际生产环境中又比较常用qcow2格式（如openstack默认的格式就是这样），两种格式各自有自身的优缺点。


 一、raw格式



 raw格式的有如下几个特点：原始的裸格式，可以通过dd命令直接创建（因该特性，其可以做为其他磁盘格式的中转格式）；读取速度最快（但也占用空间大）；能够直接改变空间大小；能够被宿主机直接挂载 。不过相对于其他格式raw也有缺点 ，如不支持snapshot快照、不支持磁盘加缩、AES加密等。而其不足之处正是qcow2的优势所在。


 以下是一个新增raw格式的示例：






```
dd if=/dev/zero of=zeros.raw bs=1024k count=4096（先创建4G的空间）
cat foresight.img zeros.raw > new-foresight.img（追加到原有的镜像之后）
```

 这个需要注意的是，新增的空间并不会在原分区上按比例增加，而是以一个未划分区域的格式存在。





 二、qcow2格式



 该格式是目前很多开源虚拟化软件的首选格式，原因很简单，因为其snapshot快照的支持。该格式具有如下特点：









 更小的存储空间，即使是不支持holes的文件系统也可以（这下du -h和ls -lh看到的就一样了）

 Copy-on-write support, where the image only represents changes made to an underlying disk image（这个特性SUN ZFS表现的淋漓尽致）

 支持多个snapshot，对历史snapshot进行管理

 支持zlib的磁盘压缩

 支持AES的加密


 关于其性能块的测试可以参看[fedora wiki站](https://fedoraproject.org/wiki/Features/KVM_qcow2_Performance)的一篇介绍 。其中关于快照功能，也会单独以篇幅的形式做介绍。





 三、创建及格式转换



 创建和格式转换都会用到一个命令qemu-img命令。


 创建境像：






```
qemu-img create -f raw  test.img  30G
```

 格式转换命令为：












```
qemu-img convert -f vmdk -O qcow2 test.vmdk test.img
qemu-img convert -f raw -O qcow2 win2k8.raw win2k8.img
```















