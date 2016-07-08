
 




 很早之前写过两篇关于使用google Authenticator加强ssh和apache安全的博客，不过当时最终的目的还是想籍此加强linux整个系统的安全性。后来公司又由于kvm框架的迁移和使用，最终决定利用google的二次认证和chroot自建台kvm堡垒机来控制所有机器的连接入口。


 



 一、原理及原则



 [![http://www.361way.com/wp-content/uploads/2013/10/baoleiji.png](http://www.361way.com/wp-content/uploads/2013/10/baoleiji.png)](http://www.361way.com/wp-content/uploads/2013/10/baoleiji.png)


 原理如上图所示，原则如下：


 １、所有主机的连接都通过/etc/hosts.deny和/etc/hosts.allow控制只允许两台堡垒机连接（冗余考虑，避免一旦坏了所有主机都无法连接，这里图上只画了一个）。


 2、所有主机关闭密码认证方式，只允许key认证。但切换用户可以使用su -  用户名 的方式进行切换。


 3、角色控制，虽然连接到堡垒机上的各用户名密码不同，但后端所有的服务器按角色进行区分，如运维人员到后端服务器统一成oam用户、开发人员统一成dev用户。


 4、堡垒机使用用户名＋google authenticator+密码的方式认证。登录用户在堡垒机上的权限是受chroot限制的。


 



 二、堡垒机搭建






 1、安装pam模块及其关软件






```
yum -y install wget gcc make pam-devel libpng-devel
```




 2、google authenticator模块安装


 该步详细过程可以参看我的另一篇博客——　[Google Authenticator加强ssh安全](http://www.361way.com/google-authenticator-ssh/2186.html)　，具体操作如下：






```
wget http://google-authenticator.googlecode.com/files/libpam-google-authenticator-1.0-source.tar.bz2
tar jxf libpam-google-authenticator-1.0-source.tar.bz2
cd libpam-google-authenticator-1.0
make && make install
```




 3、ssh服务配置


 在/etc/pam.d/sshd中首行添加






```
auth required pam_google_authenticator.so
```




 在/etc/ssh/sshd_config中修改：






```
ChallengeResponseAuthentication 将no改为yes
UsePAM 将no改为yes
```




 4、chroot配置


 修改/etc/ssh/sshd_config:






```
ChrootDirectory /var/chroot
```




 创建模拟系统环境：






```
mkdir /var/chroot/
cd /var/chroot/
mkdir {bin,dev,lib,lib64,etc,home}
```




 创建块设备，并赋予所有用户可执行权限，null,zero,tty这三个模拟设备需要所有用户可写：






```
mknod dev/null c 1 3
mknod dev/zero c 1 5
mknod dev/random c 1 8
mknod dev/urandom c 1 9
mknod dev/tty c 5 0
chmod -R 755 /var/chroot/
chmod 0666 dev/{null,zero,tty}
```




 注：这里块设备是在/var/chroot/dev目录下创建的，上面的dev前面是没加/的。mknod的用法也可以参看[百度百科上的介绍](http://baike.baidu.com/view/2993186.htm)。


 复制lib库文件到chroot环境下：






```
#!/bin/bash
ldd /bin/bash /bin/ls /bin/cp /bin/mkdir /bin/mv /bin/rm /bin/rmdir|awk '{print $1}'|grep "/lib64" >> liblist
ldd /bin/bash /bin/ls /bin/cp /bin/mkdir /bin/mv /bin/rm /bin/rmdir|awk '{print $3}'|grep "/lib64" >> liblist
for libfile in `sort liblist|uniq`
do
cp -p $libfile /var/chroot/lib64/
done
```

特别注意的是还需要增加libnss库文件的支持，不然ssh登录时会报“You don't exist, go away!”的错误，操作命令如下：



```
cp /lib64/libnss_* lib64/
```




 以上操作都是64位系统下进行的，如果是32系统，直接使用lib目录下的库文件。


 最后就是链接sh到bash，操作如下：






```
cd /var/chroot/bin
ln -s bash sh
```







 5、创建用户及密钥文件


 创建用户及passwd、group文件






```
useradd yang
passwd yang --abc123
grep ^yang /etc/passwd > /var/chroot/etc/passwd
grep ^yang /etc/group > /var/chroot/etc/group
```

创建用户chroot家目录



```
cd /var/chroot
mkdir home/yang
chown -R yang:yang home/yang
chmod 700 -R home/*
```







 创建密钥文件






```
$ ssh-keygen -t rsa
Generating public/private rsa key pair.
Enter file in which to save the key (/home/yang/.ssh/id_rsa):/var/chroot/home/yang/.ssh/id_rsa
```




 最后将生成的id_rsa.pub文件的内容传到后端受保护机相对应用户的.ssh/authorized_keys文件中，当然批量机器的话建议使用puppet、saltstack这类的自动化工具实现。


 6、google认证


 切换到相应的用户，例如，我这里是su - yang，执行google-authenticator命令，然后就是一路的按y，这里不再列出，可以参看之前写的加强ssh安全的文章。


 注：若要让某账户不使用chroot环境，可以直接su到系统root账户，则须修改/etc/ssh/sshd_config配置，在文件末尾添加：






```
Match User 用户名
ChrootDirectory /

```







 



 三、后端服务器配置






 后端主机权限配置主要有以下几个地方可以操作


 1、只开启KEY认证，关掉密码认证






```
RSAAuthentication yes
PasswordAuthentication no
```







 2、设置hosts.allow和hosts.deny，指定允许远程连接的主机IP(堡垒机IP)


 如:






```
#cat /etc/hosts.allow
sshd:192.168.10.
#cat /etc/hosts.deny
ALL:ALL

```







 记住hosts.allow的规则优先级高于hosts.deny就行了


 3、设置只允许ssh连接的用户（这个方法有好几种），本步略


 4、利用chattr给几个特定文件权限限定死，连root用户都只读而无法更改，本步略


 5、将用户操作命令记入日志（这个对bash有效，对个别csh等无效）


 创建/etc/profile.d/sshlog.sh文件，内容如下：












```
PS1="`whoami`@`hostname`:"'[$PWD]'
history
USER_IP=`who -u am i 2>/dev/null| awk '{print $NF}'|sed -e 's/[()]//g'`
if [ "$USER_IP" = "" ]
then
    USER_IP=`hostname`
fi
if [ ! -d /var/log/history ]
then
    mkdir /var/log/history
    chmod 777 /var/log/history
fi
if [ ! -d /var/log/history/${LOGNAME} ]
then
    mkdir /var/log/history/${LOGNAME}
    chmod 700 /var/log/history/${LOGNAME}
fi
export HISTSIZE=4096
DT=`date +"%Y%m%d_%H%M%S"`
export HISTFILE="/var/log/history/${LOGNAME}/${USER_IP}_history.$DT"
chmod 600 /var/log/history/${LOGNAME}/*history* 2>/dev/null
```







 在/var/log/history目录下，会在用户登录并退出后，创建与用户名相同的目录，并且记录每次的登录IP和时间，格式如：192.168.10.50_history.20130514_100547。


 6、利用/etc/sudoers命令给个别组用户一些特定权限（图个便利）


 例如：






```
oam     ALL=(ALL)    NOPASSWD: /sbin/reboot, /sbin/ifconfig
//oam为可以以root执行命令的用户，reboot、ifconfig为可以执行的命令，需要完整路径，多个命令用逗号加空格隔开
```





















 [RSS](http://www.361way.com/feed)
[Google](http://fusion.google.com/add?feedurl=http://www.361way.com/feed)

[Youdao](http://reader.youdao.com/#url=http://www.361way.com/feed)

[Xian Guo](http://www.xianguo.com/subscribe.php?url=http://www.361way.com/feed)

[Zhua Xia](http://www.zhuaxia.com/add_channel.php?url=http://www.361way.com/feed)

[My Yahoo!](http://add.my.yahoo.com/rss?url=http://www.361way.com/feed)

[newsgator](http://www.newsgator.com/ngs/subscriber/subfext.aspx?url=http://www.361way.com/feed)

[Bloglines](http://www.bloglines.com/sub/http://www.361way.com/feed)

[iNezha](http://inezha.com/add?url=http://www.361way.com/feed)











