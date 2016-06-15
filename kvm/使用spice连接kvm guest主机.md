
 




 [spice](http://www.spice-space.org/)技术已经出来很久了，其是优于VNC的一种远程桌面协议，之所以这里记录下，是由于某些加密视频文件（如以vpy结尾的超时代视频加密），会识别主机的特征吗，一旦主机重启后这些视频又没法查看了，所以就想到了在虚拟机中观看视频 。


 一、spice简介



 spice（独立计算环境简单协议）是红帽企业虚拟化桌面版的主要技术组件之一，具有自适应能力的远程提交协议，能够提供与物理桌面完全相同的最终用户体验。其包含三个组件。


 SPICE Driver ：SPICE驱动器 存在于每个虚拟桌面内的组件；


 SPICE Device：SPICE设备 存在于红帽企业虚拟化Hypervisor内的组件；


 SPICE Client：SPICE客户端 存在于终端设备上的组件，可以是瘦客户机或专用的PC，用于接入每个虚拟桌面。


 这三个组件协作运行，确定处理图形的最高效位置，以能够最大程度改善用户体验并降低系统负荷。如果客户机足够强大，SPICE向客户机发送图形命令，并在客户机中对图形进行处理，显著减轻服务器的负荷。另一方面，如果客户机不够强大，SPICE在主机处理图形，从CPU的角度讲，图形处理并不需要太多费用。


 二、spice 软件的安装与连接



 1、软件安装与kvm xml 文件配置



 redhat/centos/fedora下可通过yum安装



```
# yum install spice-protocol spice-client spice-server
```

 在kvm虚拟机的xml 文件中可以通过增加如下内容进行支持：



```
# virsh edit rhca
//增加如下内容
<graphics type='spice' port='5930' autoport='no' listen='192.168.0.102 ' passwd='password'/>
  <video>
    <model type='qxl' vram='32768' heads='1'/>
    <address type='pci' domain='0x0000' bus='0x00' slot='0x02' function='0x0'/>
    </video>
```

 需要启用声卡时，还需要在配置文件中增加如下内容：



```
<sound model='ac97'>
  <address type='pci' domain='0x0000' bus='0x00' slot='0x06' function='0x0'/>
</sound>
```

 安装时就启用spice协议：



```
#virt-install \
-n windows \
-r 2048 \
-f /var/kvm/images/windows.img \
-s 50 \
--vcpus=2 \
--os-type windows \
--os-variant=win7 \
--network bridge=br0 \
--graphics spice,port=5940,listen=192.168.0.110,password=password \
--video qxl \
--channel spicevmc \
--cdrom /dev/cdrom
```

 注：默认虚拟机使用的显卡是虚拟显卡，而使用spice协议时可以将虚拟网卡更换为qxl 网卡，这会加快视频传输的质量。


 未使用virt进行管理的虚拟机，可以使用qemu 命令启动时进行指定：



```
/usr/libexec/qemu-kvm -m 15000 -cpu Nehalem,+vmx \
-net nic,vlan=0,macaddr=52:54:00:12:34:22 \
-net tap,vlan=0,ifname=tap0  \
-smp 8,sockets=1,cores=8,threads=1 \
-drive file=/data/img/rhca/rhca.qcow2 \
-spice port=5930,disable-ticketing &
```

 参数disable-ticketing的作用就是不使用密码（空密码）的方式连接。


 2、spice连接



 linux下的连接


 连接guest的主机需要安装spice-client



```
# yum -y install spice-client
# /usr/libexec/spicec -h 192.168.0.102 -p 5930 -w password
```

 windows连接guest


 windows下也需要安装相当的客户端软件，具体可以到[http://www.spice-space.org/download.html](http://www.spice-space.org/download.html) 页面下载：


 [![http://www.361way.com/wp-content/uploads/2015/11/windows-spice.png](http://www.361way.com/wp-content/uploads/2015/11/windows-spice.png)](http://www.361way.com/wp-content/uploads/2015/11/windows-spice.png)


 连接以后，还会在最近的连接里记录，感觉还是比较人性化的：


 [![http://www.361way.com/wp-content/uploads/2015/11/spice.png](http://www.361way.com/wp-content/uploads/2015/11/spice.png)](http://www.361way.com/wp-content/uploads/2015/11/spice.png)


 浏览器连接


 浏览器连接需要在连接端安装spice-xpi 浏览器插件，该插件支持firefox与Chromium浏览器，不过该插件目前仅支持linux系统。这个在后面的rh318 rhev红帽虚拟化平台上就有体现。





 三、spice、vnc与rdp协议的比较



 spice、vnc、rdp是比较主流的远程桌面连接协议。这里对三者做一个总结比较。可见spice还是相当优秀的。


 





 SPICE
 VNC
 RDP


 BIOS屏幕显示
 能
 能
 不能


 全彩支持
 能
 能
 能


 更改分辨率
 能
 能
 能


 多显示器
 多显示器支持（高达4画面）
 只有一个屏幕
 多显示器支持


 图像传输
 图像和图形传输
 图像传输
 图像和图形传输


 视频播放支持
 GPU加速支持
 不能
 GPU加速支持


 音频传输
 双向语音可以控制
 不能
 双向语音可以控制


 鼠标控制
 客户端服务器都可以控制
 服务器端控制
 服务器端控制


 USB传输
 USB可以通过网络传输
 不能
 USB可以通过网络传输





 所以当前的想法是对于加密单次授权的视频文件，可以考虑在存放在kvm虚拟机里，妥善保存该虚拟机即可，不用担心因主机重装导致的视频无法观看的问题。
















 [RSS](http://www.361way.com/feed)
[Google](http://fusion.google.com/add?feedurl=http://www.361way.com/feed)

[Youdao](http://reader.youdao.com/#url=http://www.361way.com/feed)

[Xian Guo](http://www.xianguo.com/subscribe.php?url=http://www.361way.com/feed)

[Zhua Xia](http://www.zhuaxia.com/add_channel.php?url=http://www.361way.com/feed)

[My Yahoo!](http://add.my.yahoo.com/rss?url=http://www.361way.com/feed)

[newsgator](http://www.newsgator.com/ngs/subscriber/subfext.aspx?url=http://www.361way.com/feed)

[Bloglines](http://www.bloglines.com/sub/http://www.361way.com/feed)

[iNezha](http://inezha.com/add?url=http://www.361way.com/feed)











