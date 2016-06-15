
                第一步,先新建一块虚拟硬盘,这个不多说了,看之前的资料有



第二步,新建一个xml文件,里面存放虚拟机的配置信息,有内存、cpu、硬盘位置、光驱、VNC等配置,我们先贴出一个demo，[下载该文件](http://www.chenyudong.com/uploads/2013/07/centos.xml.zip)




```

<domain type="kvm">
    <name>centos</name>  <!--虚拟机名称-->
    <memory unit="MiB">1024</memory>   <!--最大内存，单位k-->
    <currentMemory unit="MiB">1024</currentMemory>  <!--可用内存，单位k-->
    <vcpu>2</vcpu>   <!--//虚拟cpu个数-->
    <os>
        <type arch="x86_64" machine="pc">hvm</type>
        <boot dev="hd" /> <!-- 硬盘启动 -->
        <boot dev="cdrom" />     <!--//光盘启动-->
    </os>
    <features>
        <acpi />
        <apic />
        <pae />
    </features>
    <clock offset="localtime" />
    <on_poweroff>destroy</on_poweroff>
    <on_reboot>restart</on_reboot>
    <on_crash>destroy</on_crash>
    <devices>
        <emulator>/usr/libexec/qemu-kvm</emulator>
        <disk type="file" device="disk">
            <driver name="qemu" type="qcow2" />
            <source file="/var/lib/libvirt/images/test.qcow2" />        <!--目的镜像路径-->
            <target dev="hda" bus="ide" />
        </disk>
        <disk type="file" device="cdrom">
            <source file="/var/lib/libvirt/images/ubuntu.iso" />        <!--光盘镜像路径 -->
            <target dev="hdb" bus="ide" />
        </disk>
        <interface type="bridge">       <!--虚拟机网络连接方式-->
            <source bridge="br0" />      <!--当前主机网桥的名称-->
        </interface>
        <input type="mouse" bus="ps2" />
        <!--vnc方式登录，端口号自动分配，自动加1，可以通过virsh vncdisplay来查询-->
        <graphics type="vnc" port="-1" autoport="yes" listen="0.0.0.0" keymap="en-us" />
    </devices>
</domain>

```


创建虚拟机




```
virsh define centos.xml   ###将配置导入到虚拟机
virsh start centos    #### 启动虚拟机

```



    



                            

