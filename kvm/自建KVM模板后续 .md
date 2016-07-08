
 




 昨天完成了python脚本实现通过kvm img镜像模板快速进行guest主机脚本部署的总结。不过此时的主机还需要更改主机名、IP地址、SID等，这也是上篇最后提到的问题。当然，这一部分可以手工去更改，不过我是个懒人，总希望能通过脚本一次性搞定。下面根据win平台和linux分别进行总结。


 一、win平台



 win平台可能涉及主要两个问题，一个是主机名会和模板主机名重复、SID值会和以前的相同。


 1、更改主机名






```
set name=PC-%date:~2,2%%date:~5,2%%date:~8,2%%time:~6,2%%random:~0,3%
netdom renamecomputer %computername%  /newname:%name% /force 
```

 基于时间点生成主机名，避免主机名重复，也可以是基于交互式的，如下：






```
set /p name=请输您的计算机名：
wmic computersystem where "name='%computername%'" call rename %newname%
```

 这里有netdom方式更改，换成了wmic方式更改 ，多提供一种方法 。网上可能还有很多是基于注册表修改的，个人感觉太繁琐 。





 2、修改SID


 SID也就是安全标识符（Security Identifiers），是标识用户、组和计算机帐户的唯一的号码。


 先通过psgetsid程序查看sid值，该工具是pstools里的一个，系统未自带，可通过下面的地址下载：[http://technet.microsoft.com/en-us/sysinternals/bb896649.aspx](http://technet.microsoft.com/en-us/sysinternals/bb896649.aspx) ，查看方法如下：





 [![http://www.361way.com/wp-content/uploads/2014/05/psgetsid.png](http://www.361way.com/wp-content/uploads/2014/05/psgetsid.png)](http://www.361way.com/wp-content/uploads/2014/05/psgetsid.png)


 如果不修改该值在安装运行各种服务时可能会有未可预料的问题 ，win2003以后系统已经不能使用newsid生成，需要通过系统自带的sysprep工具重新生成。该工具的默认路径是c:WindowsSystem32sysprepsysprep.exe ，其默认使用的是图形化的配置界面（微软的东西似乎最擅长搞这玩意），如下：





 [![http://www.361way.com/wp-content/uploads/2014/05/sysprep.png](http://www.361way.com/wp-content/uploads/2014/05/sysprep.png)](http://www.361way.com/wp-content/uploads/2014/05/sysprep.png)


 不过我还是喜欢用命令来操作：









```
c:WindowsSystem32sysprepsysprep.exe /oobe /reboot
```




 以上两个功能结合起来写在批处理里，安装完成后，直接运行下该批处理就行了。查看系统信息会用到命令有：systeminfo、nbtstat -n 、psgetsid 。





 二、linux平台



 linux平台下有主有两个常见的问题，一个主机名的问题，一个是IP地址的问题。


 1、更改主机名


 这里涉及到两个文件，而文件内容可能类似如下：









```
#cat /etc/sysconfig/network
NETWORKING=yes
HOSTNAME=361way.com
#cat /etc/hosts
127.0.0.1   localhost localhost.localdomain localhost4 localhost4.localdomain4   361way 361way.com
::1         localhost localhost.localdomain localhost6 localhost6.localdomain6
```

 这一步可以利用cat EOF脚本很容易的实现 ，如下：









```
cat << EOF >/etc/sysconfig/network
NETWORKING=yes
HOSTNAME=361way.com
EOF
cat << EOF > /etc/hosts
127.0.0.1   localhost localhost.localdomain localhost4 localhost4.localdomain4   361way 361way.com
::1         localhost localhost.localdomain localhost6 localhost6.localdomain6
EOF
```

将上面的内容保存为sh脚本后，执行，就会把原先的内容全部覆盖掉，而后面的主机名很多时候是一个未知的名字，这时候我们可以在脚本里通过传参的方式搞定，也可以通过read交互式的方式解决，如：



```
#!/bin/bash
read -p "Enter your hostname ,like: 361way.com !  " name
echo "you hostname will be change to $name"
exit 0
```

我们要做的就是把上面的$name，在上面的 cat EOF脚句里再替换成变量就OK了。





 2、IP地址


 IP地址里需要在做好IMG镜像模后做两个操作：


 其一是：执行rm -rf /etc/udev/rules.d/70-persistent-net.rules 把该文件删掉 ，该文件相当于一个mac和IP对应的缓存文件，如果不删除该文件在利用模板创建虚拟机时（注意，创建时会改mac）仍会在该文件里使用原模板主机的mac 。而删除后对系统也不会有影响，因为系统启动时会自动重新生成该文件。


 其二是：在做完IMG模板时，文件/etc/sysconfig/network-scripts/ifcfg-eth0里不要配置mac地址和UUID 。虽然后面该文件里的内容是要通过cat EOF语句进行替换的，不过还是建议操作该步。


 cat EOF的内容类似如下：









```
cat  <<  EOF >/etc/sysconfig/network-scripts/ifcfg-eth0
DEVICE=eth0
TYPE=Ethernet
ONBOOT=yes
NM_CONTROLLED=yes
#IPADDR=192.168.1.251
PREFIX=24
NETMASK=255.255.255.0
GATEWAY=192.168.1.1
#BOOTPROTO=dhcp
EOF
```

这里也可以使用交互式的方式解决 。这里换用python给下交互的步骤：



```
#!/usr/bin/env python
ip=raw_input('please input you ipaddress !   ')
print ip        
```

 注意python里的变量是不需要加$ 符号的 ，这么简单的一个功能就不建议使用python去实现了，还是shell比较简洁 。





 三、新的反思



 在完成v2.0版脚本的更改后，发现又有3.0版本的需求。为了实现模板的通用性更强，guest主机准备按系统数和数据盘分离的做法，这个和阿里云、AWS等云平台的做法类似。而后面这个数据盘是否要增加，需要多大的空间，也可以在脚本里实现 。这个在后续有精力的时候再实现该功能 。
















 [RSS](http://www.361way.com/feed)
[Google](http://fusion.google.com/add?feedurl=http://www.361way.com/feed)

[Youdao](http://reader.youdao.com/#url=http://www.361way.com/feed)

[Xian Guo](http://www.xianguo.com/subscribe.php?url=http://www.361way.com/feed)

[Zhua Xia](http://www.zhuaxia.com/add_channel.php?url=http://www.361way.com/feed)

[My Yahoo!](http://add.my.yahoo.com/rss?url=http://www.361way.com/feed)

[newsgator](http://www.newsgator.com/ngs/subscriber/subfext.aspx?url=http://www.361way.com/feed)

[Bloglines](http://www.bloglines.com/sub/http://www.361way.com/feed)

[iNezha](http://inezha.com/add?url=http://www.361way.com/feed)











