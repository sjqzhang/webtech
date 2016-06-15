
                因为ssh的不能访问 所以使用tcp进行对远程libvirtd进行连接访问，例如



virsh -c qemu+tcp://example.com/system



修改文件vim /etc/sysconfig/libvirtd，用来启用tcp的端口




```

LIBVIRTD_CONFIG=/etc/libvirt/libvirtd.conf

LIBVIRTD_ARGS="--listen"

```


修改文件vim /etc/libvirt/libvirtd.conf




```

listen_tls = 0

listen_tcp = 1

tcp_port = "16509"

listen_addr = "0.0.0.0"

auth_tcp = "none"

```


运行 libvirtd




```
service libvirtd restart
```


如果没起效果(我的就没有生效 :(  )，那么使用命令行:




```
libvirtd --daemon --listen --config /etc/libvirt/libvirtd.conf
```


查看运行进程




```

[root@ddd run]# ps aux | grep libvirtd
root 16563 1.5 0.1 925880 7056 ? Sl 16:01 0:28 libvirtd -d -l --config /etc/libvirt/libvirtd.conf
```


查看端口




```

[root@ddd run]# netstat -apn | grep tcp
tcp        0      0 0.0.0.0:16509           0.0.0.0:*               LISTEN      13971/libvirtd      

```


在source host连接dest host远程libvirtd查看信息




```

virsh -c qemu+tcp://211.87.***.97/system

Welcome to virsh, the virtualization interactive terminal.

Type: 'help' for help with commands
'quit' to quit

```


成功使用tcp去访问libvirtd。




    



                            

