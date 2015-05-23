KVM and CentOS-6
CentOS 6 has native availability of KVM virtualization support and tools in the base distribution. Dell provides two whitepapers about how to use KVM in CentOS 6,   and . See the meta packages contained in:
```
# yum grouplist | grep -i virt
```

1. Host Setup
Install all the packages you might need.
```
yum -y install @virt* dejavu-lgc-* xorg-x11-xauth tigervnc \
libguestfs-tools policycoreutils-python bridge-utils
```
If you have use any directories other than /var/lib/libvirt for kvm files, set the selinux context.  In this example I use /vm to store my disk image files.
```
semanage fcontext -a -t virt_image_t "/vm(/.*)?"; restorecon -R /vm
```
Allow packet forwarding between interfaces.
```
sed -i 's/^\(net.ipv4.ip_forward =\).*/\1 1/' /etc/sysctl.conf; sysctl -p
```
Configure libvirtd service to start automatically and reboot.
```
chkconfig libvirtd on; shutdown -r now
```
Optionally you can set up bridging which will allow guests to have a network adaptor on the same physical lan as the host. In this example eth0 is the device to support the bridge and br0 will be the new device.
```
chkconfig network on
service network restart
yum -y erase NetworkManager
cp -p /etc/sysconfig/network-scripts/ifcfg-{eth0,br0}
sed -i -e'/HWADDR/d' -e'/UUID/d' -e's/eth0/br0/' -e's/Ethernet/Bridge/' \
/etc/sysconfig/network-scripts/ifcfg-br0
echo DELAY=0 >> /etc/sysconfig/network-scripts/ifcfg-br0
echo 'BOOTPROTO="none"' >> /etc/sysconfig/network-scripts/ifcfg-eth0
echo BRIDGE=br0 >> /etc/sysconfig/network-scripts/ifcfg-eth0
service network restart
brctl show
```
The host is now ready to start creating kvm guests.
2. Guest Setup
Since there are many options for setting up a guest, it is easier to have variables collect the information which will be used in a single command to create the guest.  Several options are shown, and most can be adjusted as needed. Start by reviewing the available OS variants.
```
virt-install --os-variant=list | more
```
Select one of the OS options:
```
OS="--os-variant=freebsd8"
OS="--os-variant=win7"
OS="--os-variant=win7 --disk path=/var/lib/libvirt/iso/virtio-win.iso,device=cdrom"
OS="--os-variant=win2k8"
OS="--os-variant=win2k8 --disk path=/var/lib/libvirt/iso/virtio-win.iso,device=cdrom"
OS="--os-variant=rhel6"
```
Select a network option, replacing the MAC address if needed:
```
Net="--network bridge=br0"
Net="--network model=virtio,bridge=br0"
Net="--network model=virtio,mac=52:54:00:00:00:00"
Net="--network model=virtio,bridge=br0,mac=52:54:00:00:00:00"
```
Select a disk option, replacing the filename and size with desired values:
```
Disk="--disk /vm/Name.img,size=8"
Disk="--disk /var/lib/libvirt/images/Name.img,size=8"
Disk="--disk /var/lib/libvirt/images/Name.img,sparse=false,size=8"
Disk="--disk /var/lib/libvirt/images/Name.qcow2,sparse=false,bus=virtio,size=8"
Disk="--disk vol=pool/volume"
Disk="--livecd --nodisks"
Disk="--disk /dev/mapper/vg_..."
```
Select a source (live cd iso, pxe or url):
```
src="http://wiki.centos.org/HowTos/--cdrom=/var/lib/libvirt/iso/iso/..."
src="http://wiki.centos.org/HowTos/--pxe"
src="http://wiki.centos.org/HowTos/-l http://alt.fedoraproject.org/pub/fedora/linux/releases/20/Fedora/x86_64/os/"
src="http://wiki.centos.org/HowTos/-l http://download.fedoraproject.org/pub/fedora/linux/releases/20/Fedora/x86_64/os/"
src="http://wiki.centos.org/HowTos/-l http://ftp.us.debian.org/debian/dists/stable/main/installer-amd64/
src="http://wiki.centos.org/HowTos/-l http://ftp.ubuntu.com/ubuntu/dists/trusty/main/installer-amd64/"
src="http://wiki.centos.org/HowTos/-l http://download.opensuse.org/distribution/openSUSE-stable/repo/oss/"
src="http://wiki.centos.org/HowTos/--location=http://mirror.centos.org/centos/6/os/x86_64"
```
Optionally add a URL for a kickstart file:
```
KS=""
KS="-x ks=http://ks.example.com/kickstart/c6-64.ks"
```
Optionally select a graphics option:
```
Gr=""
Gr="--graphics none"
Gr="--graphics vnc"
Gr="--graphics vnc,password=foo"
Gr="--graphics spice"
```
Select number of cpus:
```
Cpu="--vcpus=1"
Cpu="--vcpus=2"
Cpu="--vcpus=4"
```
Select amount of ram:
```
Ram="--ram=768"
Ram="--ram=1024"
Ram="--ram=2048"
```
Choose a name for the guest:
```
Name="myguest"
```
Create the guest:
```
virt-install $OS $Net $KS $Disk $Src $Gr $Cpu $Ram --name=$Name
```
Note that it could take a considerable amount of time to complete, especially if you have chosen a large, non-sparse disk file on a slow harddrive.  If you have selected an interactive installation, you will need to connect to the console to complete the installation. Connect to the console, using myhost as an example host:
```
virt-viewer --connect qemu_ssh://myhost/$Name
```
If you would prefer a gui application:
```
virt-manager &
```
Finally, you can set up this guest to start automatically whenever the host is booted:
```
virsh autostart $Name
```

A Quick Guide to Using KVM with CentOS-5
Contents
![http://wiki.centos.org/ArtWork/WikiDesign?action=AttachFile&do=get&target=icon-admonition-error.png](http://wiki.centos.org/ArtWork/WikiDesign?action=AttachFile&do=get&target=icon-admonition-error.png) | Please consider reading the upstream documentation located at   as this article has been overtaken, to some degree, by development events. |Anyone wishing to rewrite this article is welcome to do so. ![http://wiki.centos.org/wiki/modern-CentOS/img/alert.png](http://wiki.centos.org/wiki/modern-CentOS/img/alert.png) As of CentOS 5.4, KVM support is included but only on 64-bit architecture processors. This is in addition to the ongoing xen support in the CentOS 5 series.
1. Confirm that the processor is virtualization compatible
![http://wiki.centos.org/wiki/modern-CentOS/img/alert.png](http://wiki.centos.org/wiki/modern-CentOS/img/alert.png) This section is valid for any release. You need to have a later model processor, with virtualization support, for KVM to work properly. This can be checked by examining the /proc/cpuinfo file:
```
egrep '(vmx|svm)' --color=always /proc/cpuinfo
```
If you get back results with vmx, then you have an Intel processor. If you get back results with svm, then you have an AMD processor. If you receive a null return, then your processor is not built for hardware supported full virtualization.  The xen approach, used in the CentOS 5 series, supports para virtualization.
2. Install KVM
There has been development activity around KVM during 2008/9, but newer version have not found their way into default repositories yet.  Until they do, there are several methods of installing KVM, each of which installs a different version.  To confirm which version you need, check the KVM  for your guest operating system.
2.1. Installing KVM from the extras repository
The KVM package for CentOS is available in the extras repository for versions prior to CentOS 5.4.  You may install KVM with:
```
yum install kvm kmod-kvm
```
As of this writing (April 2008), the current stable version is kvm-36. The kernel module package kmod-kvm is kernel version/type-specific.  It is available for the latest kernel 2.6.18-53.1.14 and for both the standard and -PAE type.  Also, if you are running the centosplus kernel and yum are compiled to accept module support, through: kmod-kvm for the centosplus kernel, which will be called for as a dependency automatically.
2.2. Installing KVM from the testing repository
The CentOS-Testing repository contains a newer version of KVM (currently kvm-66) which is under ..er.. testing.  If you wish to try this out, you need to set up the testing repo by referring to , then install KVM with:
```
yum install --disablerepo=\* --enablerepo=c5-testing kvm kmod-kvm
```
Unlike the KVM in the extras repository, only the current (2.6.18-53.1.14), standard kernel version of kmod-kvm is available in the testing repository at the moment.  There is no version for the -PAE kernel.  If you have centosplus kernel, you may need to manually install kmod-kvm (see below for details).
2.3. Installing later versions of KVM
A CentOS community member has made later versions of KVM RPMs available their .  Please review that website to see which versions may presently be available.  The following commands would install version 84 as an example; Obviously as updated versions are pushed out, you may need to change the version number.
```
# If an old version of kvm is installed, remove it first to avoid conflicts
yum remove kvm
# Dependencies are installed explicitly because the KVM RPMs are not installed by yum
yum install zlib-devel alsa-lib-devel SDL-devel gnutls-devel dev86 texi2html glibc-devel.i386
# Install RPMs directly because they are not in a repository
rpm -i -v http://www.lfarkas.org/linux/packages/centos/5/x86_64/etherboot-roms-kvm-5.4.4-8.x86_64.rpm
rpm -i -v http://www.lfarkas.org/linux/packages/centos/5/x86_64/kmod-kvm-84-1.x86_64.rpm
rpm -i -v http://www.lfarkas.org/linux/packages/centos/5/x86_64/kvm-84-1.x86_64.rpm
# reboot so that the kvm modules are loaded
reboot
```
Note that this version installs the modules, so you can skip the Installing Modules section below
3. Installing qemu
You probably want to also install , which is available in the base CentOS repositories, because many of its provided commands can be useful in managing a VM.
```
yum install qemu
```
However it is not mandatory.
4. Installing modules
The next step is to modprobe the kvm module for your architecture. If it's an Intel processor:
```
modprobe kvm-intel
```
If it's an AMD processor:
```
modprobe kvm-amd
```
If all goes well, you should have a kvm module loaded on your system by now.  You can verify this by running:
```
/sbin/lsmod | grep kvm
```
Add the user who will be running kvm to the kvm group. If the user's name is john then
```
usermod -G kvm -a john
```
If you're doing this as john and using su - or sudo to transition to root account permissions, run the commands above, you may have to log out completely and log back in before the updated group membership is reflected to the running shell, and takes effect. After doing the modprobe, it's not a bad idea to reboot to be sure that module gets loaded, and the /dev/kvm device is given proper permissions by udev. There should now be an /etc/sysconfig/modules/kvm.modules script. Once you've rebooted, see if the modules have been loaded using the /sbin/lsmod command as above. You should see both a kvm and a kvm-intel (or kvm-amd) module. If you choose to avoid a reboot, you can set the needed permissions on the /dev/kvm device with the following two commands:
```
chown root:kvm /dev/kvm
chmod 0660 /dev/kvm

```
On subsequent reboots udev will give this device proper permissions. ![http://wiki.centos.org/wiki/modern-CentOS/img/alert.png](http://wiki.centos.org/wiki/modern-CentOS/img/alert.png) Query: Is this correct that no changed to the udev config files are needed to effect this group change?  RPH
5. Creating a virtual machine
If you have qemu installed, you can now use its create command to make your disk image:
```
qemu-img create -f qcow2 disk.img 5G
```
In this case, you are creating an image that can grow to 5 gigs. It will only use the amount of space that it needs though. The -f qcow2 is the standard modern qemu image format. (-f as in format.) If you didn't install qemu, you should still be able to create a disk image with
```
dd if=/dev/zero of=disk.img bs=1G count=5
```
The count will be the size in gigs. In this case, the .img file will take up the full 5 gigs of space on your hard drive, regardless of how much the guest OS actually needs. If the mouse does not work with qemu (for example, a PS/2 mouse connected through a KVM switch), follow these procedures.  The man page gives options for a USB mouse, PS/2 being the default. A quick google gives you a solution from . Before starting kvm do:
```
export SDL_VIDEO_X11_DGAMOUSE=0
```
This should solve the mouse problem. If you want to install a Windows 2000 virtual machine, the actual command, whether or not you install qemu, is qemu-kvm. For those familiar with qemu, it takes the same options. Copy the iso over to the hard drive and then run the command:
```
qemu-kvm -hda win2k.img -cdrom win2k.iso -m 512 -boot d
```
This is explained in the man page for qemu-kvm. In this case, the image created was named win2k.img and the iso was called, as you've probably guessed, win2k.iso. The -hda is the virtual drive you've created. -cdrom is for the CDROM device. If you were booting the cdrom from the host machine's CDROM drive, you would use -cdrom /dev/cdrom. The -m was the amount of memory in megabytes that I was giving the virtual machine. The -boot d meant that it should boot from the CDROM drive. ![http://wiki.centos.org/wiki/modern-CentOS/img/alert.png](http://wiki.centos.org/wiki/modern-CentOS/img/alert.png) Note that the rpm package that holds the executable binary: qemu-kvm has changed over the life of the CentOS 5 series;  See the current owner, thus:
```
yum provides "*/qemu-kvm"
```
(As of August, 2010, the qemu-kvm command itself is in /usr/lib/exec). If all has gone well, it should now run as if you were installing on an actual hard drive. When done, you will, hopefully, boot into a working Windows 2000 virtual installation. After that, when you want to run it, you can do it the same way. Export the SDL_VIDEO if necessary and just start the virtual machine with
```
qemu-kvm -hda win2k.img
```
(If you need to use the host machine's CD drive, then it's probably necessary to add the -cdrom option. That -boot d, however, is only used when booting from a CD.)
6. Creating a Windows virtual machine
For Windows versions up to XP and 2003 Server, it is recommended, but not required, to use the -no-acpi parameter when invoking kvm.  KVM provides ACPI to the guest by default and this causes conflicts  that degrade performance. For Windows versions from Vista and 2008 Server, ACPI is required and the -no-acpi parameter will cause the guest to show an error such as:
```
Windows Boot Manager
Windows failed to start...
Status 0xc0000225
Info: Windows failed to load because the firmware (BIOS) is not ACPI compatible

```
For example, launching KVM  to install Windows Server 2008 from the free trial iso, which has already been downloaded and copied onto the host, the command would look like this:
```
# Note: DO NOT pass the -no-acpi parameter for Vista & Windows Server 2008
/usr/bin/qemu-kvm -m 1024 -cdrom "/media/vm/win2008web-trial.iso" -boot d /media/vm/hda.raw
```
 If Vista or Windows server 2008 are run on a version of KVM earlier than 72 then the guest displays a blue screen with the error message "stop: 0x000000A5" meaning "The ACPI Bios in this system is not fully compliant to the specification." ()
 7. Networking

 7.1. NAT networking
 By default kvm (as well as QEMU and VirtualBox) use NAT networking, It will get an address of 10.0.2.x. It can access the LAN of the host, regardless of subnet--that is, if the host is on a 192.168.1.x subnet, even though the guest has an IP of 10.0.2.x it can reach the host (or any host on the network) with ssh or samba. It can also browse the Internet. Some VPN clients may not work. In the past, it did not seem possible to use NAT (also known as  slirp) with a Nortel VPN client. However, a Checkpoint VPN client will work.
 7.2. Bridged Tap Networking
 If you want the guest to appear as another host on the LAN, visible to the rest of the network, you will have to use bridged networking. There are many QEMU howtos around, but most are out of date, as it has changed since the 2.6.18 kernel. Here we describe a simple method that works. Many howtos talk of making a qemu-ifup script that lives in /etc. Unfortunately, most of the howtos seem to be outdated, as none of the suggested scripts found in there worked. Below we will present a script that creates the bridge and tap interfaces with appropriate commands. First you will need bridge-utils, available from the base repo:
 ```
 yum install bridge-utils
 ```
 You'll also need tunctl. This is now available from the  repository, so, once the repo is enabled, can easily be installed with
 ```
 yum install tunctl
 ```
 You will also want to edit your /etc/udev/rules.d/90-kvm-rules. When you installed the rpm, the created file reads:
 ```
 KERNEL=="kvm",          NAME="%k", GROUP="kvm", MODE="0660"
 ```
 In theory, adding the line:
 ```
 KERNEL=="tun",          NAME="net/%k", GROUP="kvm", MODE="0660"
 ```
 should give /dev/net/tun proper permissions.  In practice, this doesn't seem to be the case, and though it is a kludge, one can simply add lines like
 ```
 chown root:kvm /dev/net/tun
 chmod 0660 /dev/net/tun
 ```
 to /etc/rc.local.  This will definitely work.  If the reader only uses kvm on occasion, they can simply make a little script with those lines, save it as something like tunperms.sh  (or a better name) and just run it, either as root or with root permissions, when you want to use bridged networking. For the impatient, here is our simple script. We'll explain it afterwards. This is assuming that you're on a 192.168.1.0/24 network with no DHCP server.
 ```
#!/bin/sh
 PATH=$PATH:/usr/sbin:/sbin
 sudo brctl addbr br0
 sudo ifconfig eth0 0.0.0.0
 sudo brctl addif br0 eth0
 sudo ifconfig br0 192.168.1.120 netmask 255.255.255.0 up
 sudo route add -net 192.168.1.0 netmask 255.255.255.0 br0
 sudo route add default gw 192.168.1.1 br0
 sudo tunctl -b -u john
 sudo ifconfig tap0 up
 sudo brctl addif br0 tap0
 export SDL_VIDEO_X11_DGAMOUSE=0
 sudo iptables -I RH-Firewall-1-INPUT -i br0 -j ACCEPT
 qemu-kvm ~/win2k.img -m 512 -net nic -net tap,ifname=tap0,script=no

 ```
 Here is what we've done. We are using sudo, but you could also use su until the line that starts qemu. In CentOS, only root's $PATH has /sbin and /usr/sbin, but most these commands are located in one of those two directories, so we start by adding it to the user's path. We create a bridge, br0, with the brctl addbr command. As we're going to add eth0 to the bridge, we have to 0 out its address, which we do with the ifconfig eth0 0.0.0.0. Note that when you change eth0's address to 0.0.0.0 you'll temporarily lose connectivity to your network.  So don't try to do this remotely, or at a time when you don't want to briefly lose connectivity. The next commands add eth0 to the bridge and give the bridge eth0's former address. If your ethernet card gets its address from DHCP, you can replace the ifconfig and route commands with
 ```
 dhclient br0
 ```
 The tunctl command adds a tap0 interface and gives user john permissions for it. Then it's brought up with ifconfig. Note that it isn't given an address. Now add tap0 to br0. The next DMOUSE line may need to be added if you have Windows guests. The iptables rule will allow traffic to the bridge. If we don't insert that rule, the virtual machine is unable to use DNS and DHCP. Lastly, we bring up qemu-kvm. we've explained most of the flags already, but note the -net nic -net tap,ifname=tap0,script=no part of it. All of this seems to be necessary. As mentioned, we haven't been able to get qemu-ifup to work. However, kvm-qemu expects to find such a script and if it doesn't, there can be problems. Therefore, we have the script=no option. When all this is done, qemu-kvm should start. If you have a DHCP server on your network, even if your host has a static address, the guest O/S should be able to receive an address from that server, otherwise, you will manually configure the guest's IP address just as you would on any Linux, BSD or Windows system.
 8. Odds and Ends
 [1] If you are running a  centosplus kernel and wish to try kvm in the testing repo, you need to do the following.  First, install the distro kernel 2.6.18.53.1.14 (but no need to boot this kernel).  This is because kmod-kvm Requires the distro kernel. kmod-kvm installs the modules into /lib/modules/2.6.18.53.1.14.el5/extra/kvm. Copy those modules over to /lib/modules/2.6.18.53.1.14.el5.centos.plus/extra/kvm [2] If you already have VirtualBox or VMWare on the machine, it doesn't play nicely with qemu-kvm.  For example, if you regularly use VirtualBox and do not want the kvm modules being loaded on boot, rename /etc/sysconfig/modules/kvm.modules to kvm.modules.bak. Then when you decide that you want to run qemu-kvm instead, stop VirtualBox and do
 ```
 rmmod vboxdrv
 ```
 before doing the modprobe kvm-intel. Only one can run at a time. --- Thanks goes to ScottRobbins who contributed this guide.  An earlier version of this article is found at   HowTos/KVM  (last edited 2014-09-03 00:56:35 by )
