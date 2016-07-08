
 




 本文包含以下内容：



 宿主机CPU特性查看



 虚拟机CPU特性查看



 KVM虚拟机cpu pinning如何配置



 cpu pinning的应用场景




 首先需求了解基本的信息


 1 宿主机CPU特性查看



 使用virsh nodeinfo可以看到一些基本信息






```
# virsh nodeinfo
CPU model: x86_64
CPU(s): 32
CPU frequency: 1200 MHz
CPU socket(s): 1
Core(s) per socket: 8
Thread(s) per core: 2
NUMA cell(s): 2
Memory size: 132119080 KiB
```

 使用virsh capabilities可以查看物理机CPU的详细信息，包括物理CPU个数，每个CPU的核数，是否开了超线程。






```
# virsh capabilities
<capabilities>
  <host>
    <uuid>36353332-3030-3643-5534-3235445a564a</uuid>
    <cpu>
      <arch>x86_64</arch>
      <model>SandyBridge</model>
      <vendor>Intel</vendor>
      <topology sockets='1' cores='8' threads='2'/>
      <feature name='erms'/>
      <feature name='smep'/>
     ...
    </cpu>
    <power_management>
      <suspend_disk/>
    </power_management>
    <migration_features>
      <live/>
      <uri_transports>
        <uri_transport>tcp</uri_transport>
      </uri_transports>
    </migration_features>
    <topology>
      <cells num='2'>
        <cell id='0'>
          <cpus num='16'>
            <cpu id='0' socket_id='0' core_id='0' siblings='0,16'/>
         ...
            <cpu id='23' socket_id='0' core_id='7' siblings='7,23'/>
          </cpus>
        </cell>
        <cell id='1'>
          <cpus num='16'>
            <cpu id='8' socket_id='1' core_id='0' siblings='8,24'/>
           ...
            <cpu id='31' socket_id='1' core_id='7' siblings='15,31'/>
          </cpus>
        </cell>
      </cells>
    </topology>
    <secmodel>
      <model>none</model>
      <doi>0</doi>
    </secmodel>
    <secmodel>
      <model>dac</model>
      <doi>0</doi>
    </secmodel>
  </host>
...
</capabilities>
```

 使用virsh freecell命令查看可以当前空闲内存:



```
# virsh  freecell --all
    0:     787288 KiB
    1:     94192 KiB
--------------------
Total: 881480 KiB
```

 此处有暂时没搞清为什么是两个值－－莫非后面一个是swap的？以下是我台机上看到的情况，只有一个值：






```
[root@361way ~]# virsh freecell --all
    0:   13283648 KiB
--------------------
Total:   13283648 KiB
```

 物理CPU的特性也可以通过/proc/cpuinfo查看






```
# cat /proc/cpuinfo
rocessor : 0
vendor_id : GenuineIntel
cpu family : 6
model : 62
model name : Intel(R) Xeon(R) CPU E5-2640 v2 @ 2.00GHz
stepping : 4
cpu MHz : 1200.000
cache size : 20480 KB
physical id : 0
siblings : 16
core id : 0
cpu cores : 8
apicid : 0
initial apicid : 0
fpu : yes
fpu_exception : yes
cpuid level : 13
wp : yes
flags : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm pbe syscall nx pdpe1gb rdtscp lm constant_tsc arch_perfmon pebs bts rep_good xtopology nonstop_tsc aperfmperf pni pclmulqdq dtes64 monitor ds_cpl vmx smx est tm2 ssse3 cx16 xtpr pdcm pcid dca sse4_1 sse4_2 x2apic popcnt tsc_deadline_timer aes xsave avx f16c rdrand lahf_lm ida arat epb xsaveopt pln pts dts tpr_shadow vnmi flexpriority ept vpid fsgsbase smep erms
bogomips : 3990.67
clflush size : 64
cache_alignment : 64
address sizes : 46 bits physical, 48 bits virtual
power management:
...
```




 综合上面的信息，我们可以得出以下信息：


 1) 物理CPU为 E5-2640V2，为8核2颗，开启了超线程，在物理机系统上可以看到32个CPU；


 2) 物理机内存为128G


 2 虚拟机CPU使用情况查看



 可以使用virsh vcpuinfo命令查看虚拟机vcpu和物理CPU的对应关系



```
# virsh  vcpuinfo 21
VCPU: 0
CPU: 25
State: running
CPU time: 10393.0s
CPU Affinity: --------yyyyyyyy--------yyyyyyyy
VCPU: 1
CPU: 8
State: running
CPU time: 7221.2s
CPU Affinity: --------yyyyyyyy--------yyyyyyyy
...
```

 可以看到vcpu0被调度到物理机CPU25上，目前是使用状态，使用时间是10393.0s






```
CPU Affinity: --------yyyyyyyy--------yyyyyyyy
```

 yyyyyyy表示可以使用的物理CPU内部的逻辑核，可以看到这台虚拟机可以在8-15，

 24-31这些cpu之间调度，为什么不能使用0-7，16-23这些CPU呢，是因为系统的自动numa平衡服务在发生作用，一个虚拟机默认只能使用同

 一颗物理CPU内部的逻辑核。


 需要注意的是，上面的21是虚拟机的名称，如下是我在家里的测试机上的结果：






```
[root@361way ~]# virsh list
 Id    Name                           State
----------------------------------------------------
 2     rserver                        running
 3     rhce                           running
 4     centos                         running
[root@361way ~]# virsh  vcpuinfo rserver
VCPU:           0
CPU:            1
State:          running
CPU time:       10.5s
CPU Affinity:   yyyyyyyy
VCPU:           1
CPU:            0
State:          running
CPU time:       5.3s
CPU Affinity:   yyyyyyyy
```

 使用emulatorpin可以查看虚拟机可以使用那些物理逻辑CPU






```
# virsh emulatorpin 21
emulator: CPU Affinity
----------------------------------
       *: 0-31
```




 可以看到0-31我们都可以使用，意味这我们也可以强制将CPU调度到任何CPU上。


 3 在线pinning虚拟机的cpu



 强制让虚拟机只能在26-31这些cpu之间调度



```
# virsh  emulatorpin 21 26-31 --live
```

 查看结果






```
# virsh  emulatorpin 21
emulator: CPU Affinity
----------------------------------
       *: 26-31
```

 查看vcpu info






```
# virsh  vcpuinfo 21
VCPU: 0
CPU: 28
State: running
CPU time: 10510.5s
CPU Affinity: --------------------------yyyyyy
VCPU: 1
CPU: 28
State: running
CPU time: 7289.7s
CPU Affinity: --------------------------yyyyyy
...
```

 查看xml文件






```
virsh # dumpxml 21
<domain type='kvm' id='21'>
  <name>cacti-230</name>
  <uuid>23a6455c-5cd1-20cd-ecfe-2ba89be72c41</uuid>
  <memory unit='KiB'>4194304</memory>
  <currentMemory unit='KiB'>4194304</currentMemory>
  <vcpu placement='static'>4</vcpu>
  <cputune>
    <emulatorpin cpuset='26-31'/>
  </cputune>
```




 我们也可以强制vcpu和物理机cpu一对一的绑定


 强制vcpu 0和物理机cpu 28绑定


 强制vcpu 1和物理机cpu 29绑定


 强制vcpu 2和物理机cpu 30绑定


 强制vcpu 3和物理机cpu 31绑定



```
virsh  vcpupin 21 0 28
virsh  vcpupin 21 1 29
virsh  vcpupin 21 2 30
virsh  vcpupin 21 3 31
```

 查看xml文件，生效了






```
virsh # dumpxml 21
<domain type='kvm' id='21'>
  <name>cacti-230</name>
  <uuid>23a6455c-5cd1-20cd-ecfe-2ba89be72c41</uuid>
  <memory unit='KiB'>4194304</memory>
  <currentMemory unit='KiB'>4194304</currentMemory>
  <vcpu placement='static'>4</vcpu>
  <cputune>
    <vcpupin vcpu='0' cpuset='28'/>
    <vcpupin vcpu='1' cpuset='29'/>
    <vcpupin vcpu='2' cpuset='30'/>
    <vcpupin vcpu='3' cpuset='31'/>
    <emulatorpin cpuset='26-31'/>
  </cputune>
```

 是vcpuino命令查看，可以看到配置生效了






```
# virsh  vcpuinfo 22
VCPU: 0
CPU: 28
State: running
CPU time: 1.8s
CPU Affinity: ----------------------------y---
VCPU: 1
CPU: 29
State: running
CPU time: 0.0s
CPU Affinity: -----------------------------y--
...
```




 4 CPU pinning技术应用场景



 pinning前后效果比较


 没有做cpu pinning





 [![http://www.361way.com/wp-content/uploads/2015/10/cpu-pinning.png](http://www.361way.com/wp-content/uploads/2015/10/cpu-pinning.png)](http://www.361way.com/wp-content/uploads/2015/10/cpu-pinning.png)





 前面的cpu压力和后面的cpu压力相差很大


 做了cpu pinning





 [![http://www.361way.com/wp-content/uploads/2015/10/kvm-cpu-pinning.png](http://www.361way.com/wp-content/uploads/2015/10/kvm-cpu-pinning.png)](http://www.361way.com/wp-content/uploads/2015/10/kvm-cpu-pinning.png)


 前后CPU性能比较平衡了,cpupin实际libvirt也是通过cgroup来实现的，通过cgroup直接去限制kvm虚拟机进程也可以，以后分享给大家。
















 [RSS](http://www.361way.com/feed)
[Google](http://fusion.google.com/add?feedurl=http://www.361way.com/feed)

[Youdao](http://reader.youdao.com/#url=http://www.361way.com/feed)

[Xian Guo](http://www.xianguo.com/subscribe.php?url=http://www.361way.com/feed)

[Zhua Xia](http://www.zhuaxia.com/add_channel.php?url=http://www.361way.com/feed)

[My Yahoo!](http://add.my.yahoo.com/rss?url=http://www.361way.com/feed)

[newsgator](http://www.newsgator.com/ngs/subscriber/subfext.aspx?url=http://www.361way.com/feed)

[Bloglines](http://www.bloglines.com/sub/http://www.361way.com/feed)

[iNezha](http://inezha.com/add?url=http://www.361way.com/feed)











