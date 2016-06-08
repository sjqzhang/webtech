
 




 KVM 在2013年左右在当时的公司中一直做为生产环境在用，习惯以后，在自己平时的测试环境中也不再使用vmware workstation 和 EXSi 。不过最近在了解rhel 7 版本的rhce 课程。拿到的一套rhce 环境解压后发现是vmdk 格式的。这里通过qemu-img工具转换后，导入kvm并成功启动该环境。比较坑爹的是进到该虚拟机里后，里面又开了三个KVM虚拟机－－－classroom 、server、desktop 。KVM 启动的guest 主机的cpu 默认是不支持vmx 的，所以kvm guest 里再开启 kvm 一样不成功，后来通过开启nested 成功在虚拟机中运行虚拟机。


 一、vmware转qcow2



 拿到的压缩包解压后，内容如下：


 [![http://www.361way.com/wp-content/uploads/2015/10/vmware.png](http://www.361way.com/wp-content/uploads/2015/10/vmware.png)](http://www.361way.com/wp-content/uploads/2015/10/vmware.png)


 可以看到上面标注的，主要数据文件在两个vmdk文件中，先通过qemu-img 查看两个vmdk文件的信息如下：









```
[root@361way RHEL7.0_Server]# qemu-img info RHEL7_Server.vmdk
image: RHEL7_Server.vmdk
file format: vmdk
virtual size: 200G (214748364800 bytes)
disk size: 9.7G
cluster_size: 65536
Format specific information:
    cid: 1940791077
    parent cid: 4294967295
    create type: monolithicSparse
    extents:
        [0]:
            virtual size: 214748364800
            filename: RHEL7_Server.vmdk
            cluster size: 65536
            format:
[root@361way RHEL7.0_Server]# qemu-img info RHEL7_Server-000002.vmdk
image: RHEL7_Server-000002.vmdk
file format: vmdk
virtual size: 200G (214748364800 bytes)
disk size: 36M
cluster_size: 65536
backing file: RHEL7_Server.vmdk
Format specific information:
    cid: 2122094490
    parent cid: 1940791077       ---> 父cid为 RHEL7_Server.vmdk
    create type: monolithicSparse
    extents:
        [0]:
            virtual size: 214748364800
            filename: RHEL7_Server-000002.vmdk
            cluster size: 65536
            format: 
```




 接下来将vmdk文件转换为qcow2文件：






```
# qemu-img  convert -f vmkd -O qcow2 RHEL7_Server.vmdk jiaoshiji.img
```




 转换完成后，可以参看[kvm虚拟化小结（六）libguestfs-tools](http://www.361way.com/kvm-libguestfs-tools/3175.html) 篇 ，查看镜像文件的内容。经该步确认，我这里只需要用到RHEL7_Server.vmdk 文件，RHEL7_Server-000002.vmdk 文件非必须，这里就不再进行转换。


 二、启动虚拟机



 从当前已经存在的的kvm guest主机中，复制了一个jiaoshiji.xml 模板，并更改相关信息后，通过virsh define /xxxx/jiaoshiji.xml 并virsh start jiaoshi 时发现启不成功。这里换成直接使用kvm命令试下：






```
# /usr/libexec/qemu-kvm -m 4096 -drive file=jiaoshiji.qcow2 -vnc 0.0.0.0:20 
```




 通过VNC客户端连接后，可以正常启动进入系统。


[![http://www.361way.com/wp-content/uploads/2015/10/rhce-classroom.png](http://www.361way.com/wp-content/uploads/2015/10/rhce-classroom.png)](http://www.361way.com/wp-content/uploads/2015/10/rhce-classroom.png)





 不过在启动三台主机时出错：









```
error: Faild to start domain classroom
error: unsupported configuration: Domain requires KVM, but it is not  available. Check that virtualization is enabled in the host BIOS, and host configuration is setup  to load the kvm modules.
```







 [![http://www.361way.com/wp-content/uploads/2015/10/rht-vmctl.png](http://www.361way.com/wp-content/uploads/2015/10/rht-vmctl.png)](http://www.361way.com/wp-content/uploads/2015/10/rht-vmctl.png)


 通过cat /proc/cpuinfo 发现kvm guest 主机的cpu 不支持vmx 特性。通过查看物理机的-cpu 参数，结果如下：









```
[root@361way RHEL7.0_Server]# /usr/libexec/qemu-kvm -cpu help
x86           qemu64  QEMU Virtual CPU version 1.5.3
x86           phenom  AMD Phenom(tm) 9550 Quad-Core Processor
x86         core2duo  Intel(R) Core(TM)2 Duo CPU     T7700  @ 2.40GHz
x86            kvm64  Common KVM processor
x86           qemu32  QEMU Virtual CPU version 1.5.3
x86            kvm32  Common 32-bit KVM processor
x86          coreduo  Genuine Intel(R) CPU           T2600  @ 2.16GHz
x86              486
x86          pentium
x86         pentium2
x86         pentium3
x86           athlon  QEMU Virtual CPU version 1.5.3
x86             n270  Intel(R) Atom(TM) CPU N270   @ 1.60GHz
x86      cpu64-rhel6  QEMU Virtual CPU version (cpu64-rhel6)
x86           Conroe  Intel Celeron_4x0 (Conroe/Merom Class Core 2)
x86           Penryn  Intel Core 2 Duo P9xxx (Penryn Class Core 2)
x86          Nehalem  Intel Core i7 9xx (Nehalem Class Core i7)
x86         Westmere  Westmere E56xx/L56xx/X56xx (Nehalem-C)
x86      SandyBridge  Intel Xeon E312xx (Sandy Bridge)
x86          Haswell  Intel Core Processor (Haswell)
x86        Broadwell  Intel Core Processor (Broadwell)
x86       Opteron_G1  AMD Opteron 240 (Gen 1 Class Opteron)
x86       Opteron_G2  AMD Opteron 22xx (Gen 2 Class Opteron)
x86       Opteron_G3  AMD Opteron 23xx (Gen 3 Class Opteron)
x86       Opteron_G4  AMD Opteron 62xx class CPU
x86       Opteron_G5  AMD Opteron 63xx class CPU
x86             host  KVM processor with all supported host features (only available in KVM mode)
Recognized CPUID flags:
  pbe ia64 tm ht ss sse2 sse fxsr mmx acpi ds clflush pn pse36 pat cmov mca pge mtrr sep apic cx8 mce pae msr tsc pse de vme fpu
  hypervisor rdrand f16c avx osxsave xsave aes tsc-deadline popcnt movbe x2apic sse4.2|sse4_2 sse4.1|sse4_1 dca pcid pdcm xtpr cx16 fma cid ssse3 tm2 est smx vmx ds_cpl monitor dtes64 pclmulqdq|pclmuldq pni|sse3
  smap adx rdseed rtm invpcid erms bmi2 smep avx2 hle bmi1 fsgsbase
  3dnow 3dnowext lm|i64 rdtscp pdpe1gb fxsr_opt|ffxsr mmxext nx|xd syscall
  perfctr_nb perfctr_core topoext tbm nodeid_msr tce fma4 lwp wdt skinit xop ibs osvw 3dnowprefetch misalignsse sse4a abm cr8legacy extapic svm cmp_legacy lahf_lm
  pmm-en pmm phe-en phe ace2-en ace2 xcrypt-en xcrypt xstore-en xstore
  kvm_pv_unhalt kvm_pv_eoi kvm_steal_time kvm_asyncpf kvmclock kvm_mmu kvm_nopiodelay kvmclock
  pfthreshold pause_filter decodeassists flushbyasid vmcb_clean tsc_scale nrip_save svm_lock lbrv npt
```




 通过在启动时，-cpu Nehalem 等尝试使用各种CPU，发现启动的虚拟机都无法支持vmx 。通过查看CPU定义的默认配置文件/usr/share/libvirt/cpu_map.xml ，发现默认的定义的几种类型的CPU都没有包含vmx项（fedora系统的KVM CPU定义文件为/usr/share/qemu-kvm/cpu-model/cpu-x86_64.conf）。本来正准备尝试通过修改该文件使CPU默认支持VMX特性，不过在查相关资料时发现了嵌套式虚拟nested 技术。


 三、嵌套式虚拟nested



 嵌套式虚拟nested是一个可通过内核参数来启用的功能。它能够使一台虚拟机具有物理机CPU特性,支持vmx或者svm(AMD)硬件虚拟化。关于nested的具体介绍,可以看[这里](https://www.kernel.org/doc/Documentation/virtual/kvm/nested-vmx.txt) 。该特性需要内核升级到Linux 3.X版本 ，所以在centos6下是需要先升级内核的，而在centos7下已默认支持该特性，不过默认是不开启的，需要通过修改参数支持。


 1、确认主机是否支持nested



 通找到如下文件或在模块特性中能grep到该特性值 ，证明当前内核支持nested，如下是查到支持但未开启：






```
#查看当前系统是否支持nested
systool -m kvm_intel -v  | grep -i nested
nested              = "N"
#或者这样查看
cat /sys/module/kvm_intel/parameters/nested
N
```




 2、开机启动该nested



 有两种方法可以开机自启动该特性：






```
在 kernel 那一行的末端加上 "kvm-intel.nested=1"
或
# echo "options kvm-intel nested=1" >> /etc/modprobe.d/kvm-intel.conf
```




 不重启主机也可以通过重新加载模块支持：






```
# rmmod kvm_intel
# modprobe kvm-intel nested=1
# cat /sys/module/kvm_intel/parameters/nested
Y
```




 3、建议VMX支持虚拟机



 通过virsh 指定xml 文件启动虚拟机时，可以在xml 中通过如下三种方法支持









```
 <cpu mode='custom' match='exact'>
    <model fallback='allow'>core2duo</model>
    <feature policy='require' name='vmx'/>
  </cpu>
#这种方式为虚拟机定义需要模拟的CPU类型"core2duo",并且为虚拟机添加"vmx"特性
#也可以使用这种
  <cpu mode='host-model'>
    <model fallback='allow'/>
  </cpu>
#或者这样
 <cpu mode='host-passthrough'>
    <topology sockets='2' cores='2' threads='2'/>
  </cpu>
#CPU穿透,在虚拟机中看到的vcpu将会与物理机的CPU同样配置,这种方式缺点在于如果要对虚拟机迁移,迁移的目的服务器硬件配置必须与当前物理机一样
```

通过qemu-kvm 命令启动时，可以通过如下参数支持：



```
-enable-kvm -cpu qemu64,+vmx
```




 四、成功运行rhce虚拟机



 以下才是本篇嵌套虚拟机的重点


 通过如下方法启动jiaoshiji 虚拟机：






```
/usr/libexec/qemu-kvm -m 8096 -cpu qemu64,+vmx  -smp 4,sockets=4,cores=1,threads=1 -drive file=jiaoshiji.qcow2 -vnc 0.0.0.0:20
```




 VNC连接后，通过cat /proc/cpuinfo查看支持VMX特性：





 [![http://www.361way.com/wp-content/uploads/2015/10/qemu64-vmx.png](http://www.361way.com/wp-content/uploads/2015/10/qemu64-vmx.png)](http://www.361way.com/wp-content/uploads/2015/10/qemu64-vmx.png)


 至此就是通过该环境操作rhce环境了，如果嫌每次者了跳到VNC里操作不爽，也可以通过以下三种方简单解决：


 方法1：启qemu-kvm 的-serial参数（串口功能），可以通过-serial tcp:192.168.0.2:4444 启动映射物理机端口，并开启jiaoshiji 的串口连接－－－ 在kernel 启动时加，这个在之前的kvm 总结中有。再连接时可以通过SCRT进接；


 方法2：对jiaoshiji 虚拟机配置一个桥接网络，和物理机在同一个网段，跳到jiaoshiji 后再通过ssh跳另外三台主机；


 方法3：将jiaoshiji 内的三台主机qcow2镜像和xml 文件复制出来，在直接埴加到外面的物理机中。





 

#### 参考文档




 [百度文库 kvm嵌套虚拟化的配置方法](http://wenku.baidu.com/view/1f59aa7b866fb84ae45c8d9d.html%20target=)


 [fedoraproject虚拟化文档](https://docs.fedoraproject.org/en-US/Fedora_Draft_Documentation/0.1/html/Virtualization_Deployment_and_Administration_Guide/ch03s02.html)
















 [RSS](http://www.361way.com/feed)
[Google](http://fusion.google.com/add?feedurl=http://www.361way.com/feed)

[Youdao](http://reader.youdao.com/#url=http://www.361way.com/feed)

[Xian Guo](http://www.xianguo.com/subscribe.php?url=http://www.361way.com/feed)

[Zhua Xia](http://www.zhuaxia.com/add_channel.php?url=http://www.361way.com/feed)

[My Yahoo!](http://add.my.yahoo.com/rss?url=http://www.361way.com/feed)

[newsgator](http://www.newsgator.com/ngs/subscriber/subfext.aspx?url=http://www.361way.com/feed)

[Bloglines](http://www.bloglines.com/sub/http://www.361way.com/feed)

[iNezha](http://inezha.com/add?url=http://www.361way.com/feed)











