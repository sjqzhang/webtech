
	
		
		

#### ansible效率优化-开启ControlPersist



	Posted by [梁, 晓聪](http://www.ksops.com/?author=2) 	on 2014年7月12日[5 Comments](http://www.ksops.com/?p=77#comments) 



				

			
#### 前言


最近在推进ansible用于配置管理与自动部署,其中一个很困扰的问题是创建ssh通道很慢,虽然ansible在同一个task里面是并行的控制多台受控端.但是每一个task都需要和受控端创建ssh通道,非常影响效率.今天决定把它解决了.


看了一下官网,提及到了openssh的ControlPersist特性可以优化,查了一下,其实就是持久化socket,一次验证多次通信.并且只需要修改ssh client就行了.


支持这个特性需要比较新的openssh,那需要自己编译一个,那我们来自己弄个RPM包吧.



#### 制作openssh rpm包



#### 1.配置好编译机的环境



```
mkdir -pv /root/rpmbuild/{BUILD,BUILDROOT,RPMS,SOURCES,SPECS,SRPMS,TMP}
yum -y install  tcp_wrappers tcp_wrappers-devel tcp_wrappers-libs openssl

```


#### 2.制作rpm



```
cd /root/rpmbuild/SOURCES/.
wget http://mirror.team-cymru.org/pub/OpenBSD/OpenSSH/portable/openssh-6.6p1.tar.gz
wget http://mirror.team-cymru.org/pub/OpenBSD/OpenSSH/portable/openssh-6.6p1.tar.gz.asc

cd ../SPECS/
tar xfz ../SOURCES/openssh-6.6p1.tar.gz openssh-6.6p1/contrib/redhat/openssh.spec
mv openssh-6.6p1/contrib/redhat/openssh.spec openssh-6.6p1.spec
rm -rf openssh-6.6p1
sed -i -e "s/%define no_gnome_askpass 0/%define no_gnome_askpass 1/g" openssh-6.6p1.spec
sed -i -e "s/%define no_x11_askpass 0/%define no_x11_askpass 1/g" openssh-6.6p1.spec
sed -i -e "s/BuildPreReq/BuildRequires/g" openssh-6.6p1.spec
chown 74:74 openssh-6.6p1.spec

rpmbuild -ba openssh-6.6p1.spec

```


#### 3.如无意外就制作好了



```
[root@compiler SPECS]# ll ../RPMS/x86_64/openssh-* 
-rw-r--r-- 1 root root 417244 Jul 12 12:39 ../RPMS/x86_64/openssh-6.6p1-1.x86_64.rpm
-rw-r--r-- 1 root root 547696 Jul 12 12:39 ../RPMS/x86_64/openssh-clients-6.6p1-1.x86_64.rpm
-rw-r--r-- 1 root root  17020 Jul 12 12:39 ../RPMS/x86_64/openssh-debuginfo-6.6p1-1.x86_64.rpm
-rw-r--r-- 1 root root 374256 Jul 12 12:39 ../RPMS/x86_64/openssh-server-6.6p1-1.x86_64.rpm 

```


#### 开始配置ansible的控制端



#### 1.安装新版本的openssh



```
rpm -qa |grep openssh |xargs rpm -e --nodeps --justdb #先卸载旧的openssh
rpm -ivh /tmp/openssh-*

```


#### 2.添加ControlMaster的配置


cat /home/ansible/.ssh/config



```
Host *
  Compression yes
  ServerAliveInterval 60
  ServerAliveCountMax 5
  ControlMaster auto
  ControlPath ~/.ssh/sockets/%r@%h-%p
  ControlPersist 4h

```


#### 验证一下


未持久化socket前,需要2秒



```
[ansible@yw-0-0 test-ops]$ time ansible -i hosts test -m ping
10.33.21.205 | success >> {
    "changed": false, 
    "ping": "pong"
}

real    0m2.046s
user    0m0.984s
sys     0m0.593s

```

持久化后,800毫秒



```
10.33.21.205 | success >> {
    "changed": false, 
    "ping": "pong"
}
real    0m0.810s
user    0m0.367s
sys     0m0.246s

```


#### 总结


在应用于线上网络更为复杂的环境中时效果更为明显,在海外美国操作新加坡一次任务从5秒优化到1秒.







