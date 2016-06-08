  简单使用 
  
 
  
  ```
  virsh define xxx.xml 定义 
  virsh create xxx.xml 创建 
  virsh start uuid  运行 
  virsh console uuid 进入虚拟机终端 
  virsh destroy uuid 删除虚拟机 
  virsh undefine uuid 删除定义 
  virsh list 虚拟机列表 
  ```
  
  
  创建盘
 ```
  qemu-img create -f qcow2 -o size=800G /data/kvm/img/cobbler_data.qcow2 
```

```xml
<domain type='kvm' id='14'>
  <name>cobbler</name>
  <uuid>3c7c37a2-cdfb-19c4-c9f1-693bae8d4c90</uuid>
  <description>None</description>
  <memory unit='KiB'>8290304</memory>
  <currentMemory unit='KiB'>8290304</currentMemory>
  <vcpu placement='static'>8</vcpu>
  <os>
    <type arch='x86_64' machine='rhel6.6.0'>hvm</type>
    <boot dev='hd'/>
    <boot dev='cdrom'/>
    <bootmenu enable='yes'/>
  </os>
  <features>
    <acpi/>
    <apic/>
    <pae/>
  </features>
  <cpu mode='host-model'>
    <model fallback='allow'/>
  </cpu>
  <clock offset='utc'/>
  <on_poweroff>destroy</on_poweroff>
  <on_reboot>restart</on_reboot>
  <on_crash>restart</on_crash>
  <devices>
    <emulator>/usr/libexec/qemu-kvm</emulator>
    <disk type='file' device='disk'>
      <driver name='qemu' type='qcow2'/>
      <source file='/data/kvm/img/cobbler.img'/>
      <target dev='vda' bus='virtio'/>
      <alias name='virtio-disk0'/>
      <address type='pci' domain='0x0000' bus='0x00' slot='0x04' function='0x0'/>
    </disk>

    <disk type='file' device='disk'>
      <driver name='qemu' type='qcow2'/>
      <source file='/data/kvm/img/cobbler_data.qcow2'/>
      <target dev='vdb' bus='virtio'/>
      <alias name='virtio-disk1'/>
    </disk>
    <disk type='file' device='cdrom'>
      <driver name='qemu' type='raw'/>
      <target dev='hda' bus='ide'/>
      <readonly/>
      <alias name='ide0-1-1'/>
      <address type='drive' controller='0' bus='1' target='0' unit='1'/>
    </disk>
    <controller type='usb' index='0'>
      <alias name='usb0'/>
      <address type='pci' domain='0x0000' bus='0x00' slot='0x01' function='0x2'/>
    </controller>
    <controller type='ide' index='0'>
      <alias name='ide0'/>
      <address type='pci' domain='0x0000' bus='0x00' slot='0x01' function='0x1'/>
    </controller>
    <interface type='bridge'>
      <mac address='52:54:00:78:fb:70'/>
      <source bridge='br0'/>
      <target dev='vnet9'/>
      <model type='virtio'/>
      <alias name='net0'/>
      <address type='pci' domain='0x0000' bus='0x00' slot='0x03' function='0x0'/>
    </interface>
    <serial type='pty'>
      <source path='/dev/pts/6'/>
      <target port='0'/>
      <alias name='serial0'/>
    </serial>
    <console type='pty' tty='/dev/pts/6'>
      <source path='/dev/pts/6'/>
      <target type='serial' port='0'/>
      <alias name='serial0'/>
    </console>
    <input type='tablet' bus='usb'>
      <alias name='input0'/>
    </input>
    <input type='mouse' bus='ps2'/>
    <graphics type='vnc' port='5909' autoport='yes' listen='0.0.0.0'>
      <listen type='address' address='0.0.0.0'/>
    </graphics>
    <video>
      <model type='cirrus' vram='9216' heads='1'/>
      <alias name='video0'/>
      <address type='pci' domain='0x0000' bus='0x00' slot='0x02' function='0x0'/>
    </video>
    <memballoon model='virtio'>
      <alias name='balloon0'/>
      <address type='pci' domain='0x0000' bus='0x00' slot='0x05' function='0x0'/>
    </memballoon>
  </devices>
  <seclabel type='dynamic' model='selinux' relabel='yes'>
    <label>system_u:system_r:svirt_t:s0:c500,c857</label>
    <imagelabel>system_u:object_r:svirt_image_t:s0:c500,c857</imagelabel>
  </seclabel>
</domain>
```


进入虚拟机

```
mkfs -t ext4 /dev/vdb
```

挂载数据盘
```
mount -t ext4 /dev/vdb /data/
```