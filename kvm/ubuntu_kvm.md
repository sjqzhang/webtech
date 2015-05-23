How-To Geek
![http://cdn3.howtogeek.com/wp-content/uploads/2012/06/650x265ximage383.png.pagespeed.ic.qaQe0oRYL-.png](http://cdn3.howtogeek.com/wp-content/uploads/2012/06/650x265ximage383.png.pagespeed.ic.qaQe0oRYL-.png)

If you’re using Linux, you don’t need VirtualBox or VMware to create virtual machines. You can use KVM – the kernel-based virtual machine – to run both Windows and Linux in virtual machines.

You can use KVM directly or with other command-line tools, but the graphical Virtual Machine Manager (Virt-Manager) application will feel most familiar to people that have used other virtual machine programs.

Installing KVM
KVM only works if your CPU has hardware virtualization support – either Intel VT-x or AMD-V. To determine whether your CPU includes these features, run the following command:
```
egrep -c ‘(svm|vmx)’ /proc/cpuinfo

```

A 0 indicates that your CPU doesn’t support hardware virtualization, while a 1 or more indicates that it does. You may still have to enable hardware virtualization support in your computer’s BIOS, even if this command returns a 1 or more.

![http://cdn3.howtogeek.com/wp-content/uploads/2012/06/650x120ximage384.png.pagespeed.ic.zdwwSofFuR.jpg](http://cdn3.howtogeek.com/wp-content/uploads/2012/06/650x120ximage384.png.pagespeed.ic.zdwwSofFuR.jpg)

Use the following command to install KVM and supporting packages. Virt-Manager is a graphical application for managing your virtual machines — you can use the kvm command directly, but libvirt and Virt-Manager simplify the process.
```
sudo apt-get install qemu-kvm libvirt-bin bridge-utils virt-manager

```

Only the root user and users in the libvirtd group have permission to use KVM virtual machines. Run the following command to add your user account to the libvirtd group:
```
sudo adduser name libvirtd

```

![http://cdn3.howtogeek.com/wp-content/uploads/2012/06/650x170ximage385.png.pagespeed.ic.xucXCdLp70.png](http://cdn3.howtogeek.com/wp-content/uploads/2012/06/650x170ximage385.png.pagespeed.ic.xucXCdLp70.png)

After running this command, log out and log back in. Run this command after logging back in and you should see an empty list of virtual machines. This indicates that everything is working correctly.
```
virsh -c qemu:///system list

```

![http://cdn3.howtogeek.com/wp-content/uploads/2012/06/650x170ximage386.png.pagespeed.ic.HkF_YZIhA0.jpg](http://cdn3.howtogeek.com/wp-content/uploads/2012/06/650x170ximage386.png.pagespeed.ic.HkF_YZIhA0.jpg)

Creating Virtual Machines
Once you’ve got KVM installed, the easiest way to use it is with the Virtual Machine Manager application. You’ll find it in your Dash.

![http://cdn3.howtogeek.com/wp-content/uploads/2012/06/650x262ximage387.png.pagespeed.ic.POkmxpHzUv.png](http://cdn3.howtogeek.com/wp-content/uploads/2012/06/650x262ximage387.png.pagespeed.ic.POkmxpHzUv.png)

Click the Create New Virtual Machine button on the toolbar and the Virtual Machine Manager will walk you through selecting an installation method, configuring your virtual machine’s virtual hardware, and installing your guest operating system of choice.

![http://cdn3.howtogeek.com/wp-content/uploads/2012/06/650x490ximage388.png.pagespeed.ic.p0EEyW6Ge-.png](http://cdn3.howtogeek.com/wp-content/uploads/2012/06/650x490ximage388.png.pagespeed.ic.p0EEyW6Ge-.png)

The process will by familiar if you’ve ever used VirtualBox, VMware, or another virtual machine application. You can install from a disc, ISO image, or even a network location.

![http://cdn3.howtogeek.com/wp-content/uploads/2012/06/650x490ximage389.png.pagespeed.ic.hWz10M54ME.png](http://cdn3.howtogeek.com/wp-content/uploads/2012/06/650x490ximage389.png.pagespeed.ic.hWz10M54ME.png)

To assign more than 2GB of memory to a virtual machine, you’ll need a 64-bit Linux kernel. Systems running 32-bit kernels can assign a maximum of 2 GB of RAM to a virtual machine.

![http://cdn3.howtogeek.com/wp-content/uploads/2012/06/650x495ximage390.png.pagespeed.ic.2ySFYwd7Jq.png](http://cdn3.howtogeek.com/wp-content/uploads/2012/06/650x495ximage390.png.pagespeed.ic.2ySFYwd7Jq.png)

By default, KVM gives you NAT-like bridged networking – your virtual machine won’t appear on the network as its own device, but it will have network access through the host operating system. If you’re running server software in your virtual machine and want it accessible from other devices on the network, you’ll have to tweak the networking settings.

![http://cdn3.howtogeek.com/wp-content/uploads/2012/06/650x650ximage391.png.pagespeed.ic.7IWYpAWNcx.png](http://cdn3.howtogeek.com/wp-content/uploads/2012/06/650x650ximage391.png.pagespeed.ic.7IWYpAWNcx.png)

After selecting your installation method, Virt-Manager will boot the guest operating system in a window. Install the guest operating system as you would on a physical machine.

![http://cdn3.howtogeek.com/wp-content/uploads/2012/06/650x350ximage392.png.pagespeed.ic.roav6XK5dr.png](http://cdn3.howtogeek.com/wp-content/uploads/2012/06/650x350ximage392.png.pagespeed.ic.roav6XK5dr.png)

Managing Virtual Machines
The Virtual Machine Manager window displays a list of your installed virtual machines. Right-click virtual machines in the window to perform actions, including starting, shutting down, cloning, or migrating them.

![http://cdn3.howtogeek.com/wp-content/uploads/2012/06/650x350ximage393.png.pagespeed.ic.vAigW046vR.png](http://cdn3.howtogeek.com/wp-content/uploads/2012/06/650x350ximage393.png.pagespeed.ic.vAigW046vR.png)

You can view information about the virtual machine and configure its virtual hardware by clicking the i-shaped toolbar icon in the virtual machine’s window.

![http://cdn3.howtogeek.com/wp-content/uploads/2012/06/650x460ximage394.png.pagespeed.ic.RNLtTCOLdp.png](http://cdn3.howtogeek.com/wp-content/uploads/2012/06/650x460ximage394.png.pagespeed.ic.RNLtTCOLdp.png)

