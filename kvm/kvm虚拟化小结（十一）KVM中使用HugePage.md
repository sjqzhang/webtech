
 




 在KVM的测试中，有一项是要测试huge page的使用，所以对Huge Page（巨页）做了一些了解，结合网上的一些资料进行总结一下。现在，有许多的处理器架构都支持多种的

#### 内存



#### 页大小

，其中就包括比一般的page size大很多的huge page。就目前来说，尽管在个人电脑中基本都实现了对huge page的支持，然而，huge page的使用主要还是在一些大型服务器和计算机集群中使用。


 一、查看huge page的size是多大



 Linux中，可以通过 cat /pro/meminfo | grep Hugepagesize 来查看。通常情况下，是2048kB即2MB (不同的处理器架构，可能不一样）。另外，一般的内存页大小为4kB，可以通过命令：getconf PAGE_SIZE 来查看，一般是4096Byte也可以通过C程序调用sysconf()函数来查询，示例代码如下：






```
#include <stdio.h>
#include <unistd.h> /* sysconf(3) */
int main(void) {
        printf("The page size for this system is %ld bytes.\n",
               sysconf(_SC_PAGESIZE)); /* _SC_PAGE_SIZE is OK too. */
        return 0;
}
```




 二、huge page的相关信息










```
# cat /proc/meminfo | grep Huge
HugePages_Total:    1024
HugePages_Free:     1024
HugePages_Rsvd:        0
HugePages_Surp:        0
Hugepagesize:       2048 kB
```




 解释一下显示输出中的几个参数的意义吧。






```
HugePages_Total: Hugepage的页面数量
HugePages_Free: 剩余的页面数量
HugePages_Rsvd: 被分配预留但是还没有使用的page数目
HugePages_Surp：HugePages_Total减去/proc/sys/vm/nr_hugepages中的值（我对这个理解也不很清楚）
Hugepagesize: 每单位数量大小
```




 三、huaepage与物理内存



 设置了多少的huge page，free内存就会被使用多少。比如：我使用sysctl vm.nr_hugepages=1024 之后，free命令可以看到free的内存会减少2048MB。(这也和Hugepagesize的大小有关）


 使用Hugepages的内存页是不会被交换出去到磁盘的，

#### 永远常驻在内存中

，所以也减少了内存页交换的额外开销。使用hurgepage的内存不能被其他的进程使用，所以，一定要合理设置这个值，避免造成浪费。使用超过8G物理内存的系统，有人推荐使用HugePage。


 HugePages_Free - HugePages_Rsvd部分的内存是浪费的，且不能被其他程序使用。在实际应用中，尽可能让HugePages_Free - HugePages_Rsvd=0


 四、HugePage的好处



 大大提高了CPU cache中存放的page table所覆盖的内存大小，从而提高了TLB命中率。进程的虚拟内存地址段先连接到page tables然后再连接到物理内存。所以在访问内存时需要先访问page tables得到虚拟内存和物理内存的映射关系，然后再访问物理内存。CPU cache中有一部分TLB（Translation Lookaside Buffer）用来存放部分page table以提高这种装换的速度。因为page size变大了，所以同样大小的TLB，所覆盖的内存大小也变大了。提高了TBL命中率，也就是提高了地址转换的速度。


 系统进程是通过虚拟地址访问内存，但是CPU必须把它转换程物理内存地址才能真正访问内存。为了提高这个转换效率，CPU会缓存最近的虚拟内存地址和物理内存地址的映射关系，并保存在一个由CPU维护的映射表中。为了尽量提高内存的访问速度，需要在映射表中保存尽量多的映射关系。


 Linux kernel 2.6.X 通过hugetlbfs文件系统对Huge pages进行了支持。当然

#### Windows

也有相应的支持，此处暂不详述。


 五、如何设置huge pages



 1、mount一个hugetlbfs文件系统： 









```
mount -t hugetlbfs hugetlbfs /dev/hugepages
```




 2、为huge pages保留一定数量的内存：






```
sysctl vm.nr_hugepages=1024
```




 注：另一个操作方法，在/etc/sysctl.conf加入如下配置就可以：vm.nr_hugepages=1024 修改后，用命令sysctl -p 使得设置生效。或者，改动linux启动的grub参数也是可以的，加上 hugepages=1024 这样的参数。


 六、KVM如何让guest使用huge pages



 首先，让host开启huge pages（像上面那样设置）在qemu启动时加上参数






```
qemu-system-x86_64 -m 2048 -hda /mnt/rhel6.img -mem-path /dev/hugepages
```




 如果是用libvirt来启动KVM的，那么需要在启动guest的XML配置文件中添加如下的参数：









```
<memoryBacking>
    <hugepages/> </memoryBacking>
```




 启动guest后，可以发现，在host中的cat /pro/meminfo看到的HugePages_Free数量有所减少。


 在oracle的使用场景下，有DBA建议将huge pages的大小设置为SGA的大小。





 参考以下页面：


 http://humblec.com/give-hugepage-memory-for-guests/


 http://fedoraproject.org/wiki/Features/KVM_Huge_Page_Backed_Memory


 http://en.wikipedia.org/wiki/Huge_pages
















 [RSS](http://www.361way.com/feed)
[Google](http://fusion.google.com/add?feedurl=http://www.361way.com/feed)

[Youdao](http://reader.youdao.com/#url=http://www.361way.com/feed)

[Xian Guo](http://www.xianguo.com/subscribe.php?url=http://www.361way.com/feed)

[Zhua Xia](http://www.zhuaxia.com/add_channel.php?url=http://www.361way.com/feed)

[My Yahoo!](http://add.my.yahoo.com/rss?url=http://www.361way.com/feed)

[newsgator](http://www.newsgator.com/ngs/subscriber/subfext.aspx?url=http://www.361way.com/feed)

[Bloglines](http://www.bloglines.com/sub/http://www.361way.com/feed)

[iNezha](http://inezha.com/add?url=http://www.361way.com/feed)











