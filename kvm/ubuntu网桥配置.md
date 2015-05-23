
```
设置网桥



sudo apt-get install bridge-utils



因为需要用桥接，所以要删除掉原来9.04里的network-manager



sudo apt-get remove network-manager 



sudo vim /etc/network/interfaces 

auto lo

iface lo inet loopback



auto eth0

iface eth0 inet manual



auto br0

iface br0 inet static

        address 10.65.160.104

        network 10.65.128.0

        netmask 255.255.128.0

        broadcast 10.65.255.255

        gateway 10.65.156.27

        bridge_ports eth0

        bridge_fd 9

        bridge_hello 2

        bridge_maxage 12

        bridge_stp off



将interfaces文件修改如上

IP为主机上外网的IP

然后 sudo /etc/init.d/networking restart 


```


