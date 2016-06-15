
		
			
		

 [如何在 KVM 虚拟机上运行 KVM](http://www.vpsee.com/2012/09/how-to-run-kvm-nested-vms-on-kvm/)
			
				


首先检查 KVM host（母机）上是否打开了嵌套虚拟机功能（默认是开启的）：



```

# modinfo kvm_intel | grep nested
parm:           nested:bool

# cat /sys/module/kvm_intel/parameters/nested
Y

```

如果上面的显示结果不是 Y 的话需要开启 nested：



```

# modprobe -r kvm-intel
# modprobe kvm-intel nested=1
# cat /sys/module/kvm_intel/parameters/nested
Y

```

然后在 KVM guest（虚拟机）的 xml 配置文件中加入 vmx 选项，并启动虚拟机（这里用的是 Ubuntu 官方发布的 Ubuntu KVM 镜像 ubuntu-12.04-server-cloudimg-amd64-disk1.img）：



```

# vi nestedvm.xml
...
<cpu match='exact'/>
   <model>core2duo</model/>
   <feature policy='require' name='vmx'//>
</cpu/>
...

# virsh create nestedvm.xml

```

启动虚拟机后登陆并安装 KVM，执行 kvm-ok 和 modinfo 均出现错误：



```

# apt-get install ubuntu-virt-server

# kvm-ok
INFO: /dev/kvm does not exist
HINT:   sudo modprobe kvm_intel
INFO: Your CPU supports KVM extensions
KVM acceleration can be used

# modinfo kvm_intel
ERROR: modinfo: could not find module kvm_intel

```

这是因为我们使用的是 ubuntu-12.04-server-cloudimg-amd64-disk1.img 这个官方虚拟机镜像，这个镜像使用的是 linux 3.2.0-23-virtual 内核，缺少 KVM 模块（kvm-intel.ko），所以我们需要改为 generic 内核：



```

# uname -a
Linux test 3.2.0-23-virtual #36-Ubuntu SMP Tue Apr 10 22:29:03 UTC 2012 x86_64 x86_64 x86_64 GNU/Linux

# apt-get install linux-generic

```

重启后进入虚拟机执行 kvm-ok 和 modinfo 均成功：



```

# kvm-ok
INFO: /dev/kvm exists
KVM acceleration can be used

# modinfo kvm_intel
filename:       /lib/modules/3.2.0-30-generic/kernel/arch/x86/kvm/kvm-intel.ko
license:        GPL
author:         Qumranet
srcversion:     3BAF54F96ECD4B02292CAA0
depends:        kvm
intree:         Y
vermagic:       3.2.0-30-generic SMP mod_unload modversions 
parm:           vpid:bool
parm:           flexpriority:bool
parm:           ept:bool
parm:           unrestricted_guest:bool
parm:           emulate_invalid_guest_state:bool
parm:           vmm_exclusive:bool
parm:           yield_on_hlt:bool
parm:           fasteoi:bool
parm:           nested:bool
parm:           ple_gap:int
parm:           ple_window:int

```

现在应该可以在这个虚拟机上创建另一个虚拟机了。


			



			
				[发表评论](#comments)(3 Comments) 分类：[Cloud | Virtualization | Thin | HPC](http://www.vpsee.com/category/cloud/) 			


			



			


	
	
#### <span id="comments" ></span>评论 (3 Comments)


	

			
wopub - September 10th, 2012 1:29 pm


			好！vpsee大虾，能把您的这篇博文，加一个前提条件限制呢?[http://www.vpsee.com/2012/08/resize-kvm-vm-image/](http://www.vpsee.com/2012/08/resize-kvm-vm-image/); 这个操作是针对raw格式的虚拟磁盘文件操作的。否则qcow2格式的同学们会纳闷，怎么搞也搞不出来，你那样的效果


		


		
		
		
			
[vpsee](http://www.vpsee.com/) - September 10th, 2012 6:03 pm


			@wopub


？跟格式无关。


		


		
		
		
			
sak0 - November 14th, 2012 11:05 pm


			我尝试在xensever上创建ubuntu虚拟机，然后在这个虚拟机中再嵌套运行kvm虚拟机,


但总显示没有加载kvm_intel模块，这样kvm跑起来会很慢，请问有办法可以解决吗？


		




	
		



	


