
 




 如果KVM下的linux是通过过vnc graphics方式安装的话，如果想在终端下通过virsh console进行管理连接时，发现敲任何键都没有反应，即不支持。而能不能通过修改配置文件达到像console安装或KS安装的效果 ? 


 答案是肯定的。具体操作步骤为编辑/etc/grub.conf文件在kernel内核行添加console=ttyS0然后重启机器即可。


 这里面要注意的是：1、ttyS后面提零，不是大写的欧 。2、该修改在centos环境下测试通过。如果在其他系统下，如果修改此处不生效的话，可以尝试修改几下两处






```
echo “ttyS0″ >> /etc/securetty
```




 在/etc/inittab中添加agetty:






```
S0:12345:respawn:/sbin/agetty ttyS0 115200
```




 修改完成后并重启机器即可。


 另外关于终端概念的一个汇总如下：





 tty(终端设备的统称):


 tty一词源于Teletypes，或者teletypewriters，原来指的是电传打字机，是通过串行线用打印机键盘通过阅读和发送信息的东西，后来这东西被键盘与显示器取代，所以现在叫终端比较合适。


 终端是一种字符型设备，它有多种类型，通常使用tty来简称各种类型的终端设备。


 pty（伪终端，虚拟终端):


 但是如果我们远程telnet到主机或使用xterm时不也需要一个终端交互么？是的，这就是虚拟终端pty(pseudo-tty)


 pts/ptmx(pts/ptmx结合使用，进而实现pty):


 pts(pseudo-terminal slave)是pty的实现方法，与ptmx(pseudo-terminal master)配合使用实现pty。


 在Linux系统的设备特殊文件目录/dev/下，终端特殊设备文件一般有以下几种：


 1、串行端口终端(/dev/ttySn)


 串行端口终端(Serial Port Terminal)是使用计算机串行端口连接的终端设备。计算机把每个串行端口都看作是一个字符设备。有段时间这些串行端口设备通常被称为终端设备，因为那时它的最大用途就是用来连接终端。这些串行端口所对应的设备名称是/dev/tts/0(或/dev/ttyS0), /dev/tts/1(或/dev/ttyS1)等，设备号分别是(4,0), (4,1)等，分别对应于DOS系统下的COM1、COM2等。若要向一个端口发送数据，可以在命令行上把标准输出重定向到这些特殊文件名上即可。例如，在命令行提示符下键入：echo test > /dev/ttyS1会把单词”test”发送到连接在ttyS1(COM2)端口的设备上。


 2、伪终端(/dev/pty/)


 伪终端(Pseudo Terminal)是成对的逻辑终端设备(即master和slave设备, 对master的操作会反映到slave上。


 例如/dev/ptyp3和/dev/ttyp3(或者在设备文件系统中分别是/dev/pty/m3和/dev/pty/s3)。它们与实际物理设备并不直接相关。如果一个程序把ptyp3(master设备)看作是一个串行端口设备，则它对该端口的读/写操作会反映在该逻辑终端设备对应的另一个ttyp3(slave设备)上面。而ttyp3则是另一个程序用于读写操作的逻辑设备。telnet主机A就是通过“伪终端”与主机A的登录程序进行通信。


 3、控制终端(/dev/tty)


 如果当前进程有控制终端(Controlling Terminal)的话，那么/dev/tty就是当前进程的控制终端的设备特殊文件。可以使用命令”ps –ax”来查看进程与哪个控制终端相连。对于登录的shell，/dev/tty就是你使用的终端，设备号是(5,0)。使用命令”tty”可以查看它具体对应哪个实际终端设备。/dev/tty有些类似于到实际所使用终端设备的一个联接。


 4、控制台终端(/dev/ttyn, /dev/console)


 在Linux 系统中，计算机显示器通常被称为控制台终端(Console)。它仿真了类型为Linux的一种终端(TERM=Linux)，并且有一些设备特殊文件与之相关联：tty0、tty1、tty2

 等。当你在控制台上登录时，使用的是tty1。使用Alt+[F1—F6]组合键时，我们就可以切换到tty2、tty3等上面去。tty1–tty6等称为虚拟终端，而tty0则是当前所使用虚拟终端的一个别名，系统所产生的信息会发送到该终端上（这时也叫控制台终端）。


 因此不管当前正在使用哪个虚拟终端，系统信息都会发送到控制台终端上。/dev/console即控制台，是与操作系统交互的设备，系统将一些信息直接输出到控制台上。目前只有在单用户模式下，才允许用户登录控制台。


 5 虚拟终端(/dev/pts/n)


 在Xwindows模式下的伪终端.如我在Kubuntu下用konsole，就是用的虚拟终端，用tty命令可看到/dev/pts/1。


 6 其它类型


 Linux系统中还针对很多不同的字符设备存在有很多其它种类的终端设备特殊文件。例如针对ISDN设备的/dev/ttyIn终端设备等。这里不再赘述。


 tty设备包括虚拟控制台，串口以及伪终端设备。




 /dev/tty代表当前tty设备，在当前的终端中输入 echo “hello” > /dev/tty ，都会直接显示在当前的终端中。





 

#### 2014-6-17后记:




 在后来guest主机换成ubuntu时,使用上面的方法时,发现某些相应的文件找不到,找到的一些改也重启也没用.从网上后来专门针对ubnutu使用kVM console连接的方法,在[ubuntu的官方站点](https://help.ubuntu.com/community/KVM/Access)上找到了方法:






```
#sudo editor /etc/init/ttyS0.conf
Add the configuration:
# ttyS0 - getty
#
# This service maintains a getty on ttyS0 from the point the system is
# started until it is shut down again.
start on stopped rc RUNLEVEL=[2345]
stop on runlevel [!2345]
respawn
exec /sbin/getty -L 115200 ttyS0 xterm
```




 如果不想重启直接通过virsh console ubuntu-guest 进行连接 ，可以通过下面的命令启动ttyS0 






```
#sudo start ttyS0
```




 通过echo $TERM查看目前的终端类型，也可以通过下面的方法更改默认的终端类型 






```
#export TERM=screen
```




















