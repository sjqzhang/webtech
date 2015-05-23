





#### 一、什么样的情形需要批量部署




1、操作系统的安装


常见的有collber,red hat satelite(redhat)系统专用。


2、操作系统的配置


常见的有cfengine,puppet,chef,func。其中puppet最受欢迎


3、批量程序的部署


4、批量命令的运行查看状态信息




#### 二、ansible介绍




ansible的架构大致如下


[![http://img1.51cto.com/attachment/201409/16/8886857_1410870084OS9m.png](http://img1.51cto.com/attachment/201409/16/8886857_1410870084OS9m.png)](http://img1.51cto.com/attachment/201409/16/8886857_1410870083wEOB.png) 


ansible是新出现的运维工具是基于Python研发的糅合了众多老牌运维工具的优点实现了批量操作系统配置、批量程序的部署、批量运行命令等功能。




```

运维工具常见的工作模式  

1、agent模式: 基于ssl实现。代理工作在被监控端。像puppet。  

2、agentless模式: 基于ssh服务实现工作在被监控端。监控端是ssh的客户端。 


```




ansible是工作在agentless模式下具有幂等性。ansible在控制端只需要告诉监控端的期望状态就可以实现批量部署。




```

名词解释  

幂等性不会重复执行相同的指令。例如不会重复安装软件  

期望状态只需要告诉被监控端的期望状态 


```




ansible是基于模块工作的ansible本身没有批量部署的能力。真正具有批量部署的是ansible所运行的模块ansible只是提供一种框架。架构包括




    连接插件connection plugins负责和被监控端实现通信。


    

    
    Host Inventory:指定操作的主机,是一个配置文件里面定义监控的主机


    

    
    各种模块核心模块command模块自定义模块


    

    
    借助于插件完成记录日志邮件等功能


    

    
    PlayBooks:剧本执行多个任务时。并非必需可以让节点一次性运行多个任务


    




#### 三、ansible的基本使用






```

安装软件yum install ansible -y # 对应的软件在 epel 仓库中也可自己手动编译  

#源码地址 https://pypi.python.org/packages/source/a/ansible/ansible-1.5.tar.gz 


```

[![http://img1.51cto.com/attachment/201409/16/8886857_1410870085cVkv.png](http://img1.51cto.com/attachment/201409/16/8886857_1410870085cVkv.png)](http://img1.51cto.com/attachment/201409/16/8886857_1410870085VnYr.png) 







```

2、定义Host Inventory  

# vim /etc/ansible/hosts  

[webhosts]  


172.16.10.22 ansible_ssh_user=root ansible_ssh_pass=guoting 



172.16.10.33 ansible_ssh_user=root ansible_ssh_pass=guoting 


解释  


#ansible_ssh_user=root 是ssh登陆用户  



#ansible_ssh_pass=guoting 是ssh登陆密码3、测试各个模块  


# 注意每个模块的用法可以使用 ansible-doc MOD 来查看例如ansible-doc copy  

   

ansible命令最常用的用法  


ansible <Host-partten> -m MOE -a 'MOD_ARV'所支持的模块可以使用ansible-doc -l来查看 



```




ansible示例


1、查看时间信息。command、shell模块


[![http://img1.51cto.com/attachment/201409/16/8886857_1410870086uG5j.png](http://img1.51cto.com/attachment/201409/16/8886857_1410870086uG5j.png)](http://img1.51cto.com/attachment/201409/16/8886857_1410870086zUXf.png)


2、在控制端添加添加用户。user模块


[![http://img1.51cto.com/attachment/201409/16/8886857_1410870088ndd4.png](http://img1.51cto.com/attachment/201409/16/8886857_1410870088ndd4.png)](http://img1.51cto.com/attachment/201409/16/8886857_1410870087SlII.png)


3、实现ssh秘钥认证。shell、copy模块


[![http://img1.51cto.com/attachment/201409/16/8886857_14108700904EpL.png](http://img1.51cto.com/attachment/201409/16/8886857_14108700904EpL.png)](http://img1.51cto.com/attachment/201409/16/8886857_1410870089yPP4.png)





此时就可以实现基于ssh秘钥通信了此时/etc/ansible/hosts可以修改如下




```

###### /etc/ansible/hosts  

[webhosts]  

172.16.10.22  

172.16.10.33 


```




[![http://img1.51cto.com/attachment/201409/16/8886857_1410870090wxQY.png](http://img1.51cto.com/attachment/201409/16/8886857_1410870090wxQY.png)](http://img1.51cto.com/attachment/201409/16/8886857_1410870090fS4P.png)


4、安装软件和启动服务。yum、service模块


[![http://img1.51cto.com/attachment/201409/16/8886857_14108700922KSV.png](http://img1.51cto.com/attachment/201409/16/8886857_14108700922KSV.png)](http://img1.51cto.com/attachment/201409/16/8886857_1410870091vwFH.png) 


[![http://img1.51cto.com/attachment/201409/16/8886857_1410870093vdj4.png](http://img1.51cto.com/attachment/201409/16/8886857_1410870093vdj4.png)](http://img1.51cto.com/attachment/201409/16/8886857_1410870093qf06.png)


5、支持管道的命令。raw模块，类似于shell模块


[![http://s3.51cto.com/wyfs02/M02/49/C9/wKioL1QaeV6QK9YUAACu77PB1cY454.jpg](http://s3.51cto.com/wyfs02/M02/49/C9/wKioL1QaeV6QK9YUAACu77PB1cY454.jpg)](http://s3.51cto.com/wyfs02/M02/49/C9/wKioL1QaeV6QK9YUAACu77PB1cY454.jpg)




#### 四、YAML语言介绍






#### 1、YAML简介






```

YAML是一个可读性高的用来表达资料序列的格式。YAML参考了其他多种语言包括XML、C语言、Python、Perl以及电子邮件格式RFC2822等。Clark Evans在2001年在首次发表了这种语言另外Ingy dtNet与Oren Ben-Kiki也是这语言的共同设计者。  

YAML Ain't Markup Language即YAML不是XML。不过在开发的这种语言时YAML的意思其实是"Yet Another Markup Language"仍是一种标记语言。其特性  

YAML的可读性好  

YAML和脚本语言的交互性好  

YAML使用实现语言的数据类型  

YAML有一个一致的信息模型  

YAML易于实现  

YAML可以基于流来处理  

YAML表达能力强扩展性好  

   

更多的内容及规范参见http://www.yaml.org。  

   

##########################YAML语法  

   

YAML的语法和其他高阶语言类似并且可以简单表达清单、散列表、标量等数据结构。其结构Structure通过空格来展示序列Sequence里的项用"-"来代表  

Map里的键值对用":"分隔。YAML文件扩展名通常为.yaml或者.yml。下面是一个示例。  

   

name: John Smith  

age: 41gender: Male  

spouse:  

name: Jane Smith  

age: 37  

gender: Female  

children:  

- name: Jimmy Smith  

age: 17  

gender: Male  

- name: Jenny Smith  

age 13  

gender: Female  

   

YAML 2 个重要的结构组成部分list和directory  

################################# list  

   

列表的所有元素均使用“-”打头例如  

# A list of tasty fruits  

- Apple  

- Orange  

- Strawberry  

- Mango  

   

##############################dictionary  

   

字典通过key与valuef进行标识例如  

---  

# An employee record  

name: Example Developer  

job: Developer  

skill: Elite  

   

也可以将key:value放置于{}中进行表示例如  

---  

# An employee record  

{name: Example Developer, job: Developer, skill: Elite}  

   

多个映射关系组成一个字典一个列表可以包含多个字典。 


```






#### 2、ymal中的变量






```

################################## 变量命名  

变量名仅能由字母、数字和下划线组成且只能以字母开头。  

   

################################## facts  

facts是由正在通信的远程目标主机发回的信息这些信息被保存在ansible变量中。要获取指定的远程主机所支持的所有facts可使用如下命令进行  

# ansible hostname -m setup 这个命令可以获得被监控端主机的各种信息将这些信息得到后保存到变量中。  

   

################################ 自定义变量  

在 yaml 中可以使用vars关键字来定义变量  

vars:  

var_name: value  

   

############################# 变量的引用  

{{ var_name }}  

   

   

########################### 特殊的变量迭代  

当有需要重复性执行的任务时可以使用迭代机制。其使用格式为将需要迭代的内容定义为item变量引用并通过with_items语句来指明迭代的元素列表即可。  

   

#######################################示例  

例如在被控端添加 2 个用户  

   

方式1一般做法  

- name: add user testuser1  


user: name=testuser1 state=present groups=wheel 


- name: add user testuser2  


user: name=testuser2 state=present groups=wheel 


   

方式2使用变量方式  

- name: add several users  

vars:  

user1: testuser1  

user2: testuser2  


user: name={{ user1 }} state=present groups=wheel 



user: name={{ user2 }} state=present groups=wheel 


   

方式3使用迭代方式  

- name: add several users  


user: name={{ item }} state=present groups=wheel 


with_items:   

- testuser1   

- testuser2  

事实上with_items中可以使用元素还可为hashes例如  

- name: add several users  


user: name={{ item.name }} state=present groups={{ item.groups }}  


with_items:  

- { name: 'testuser1', groups: 'wheel' }  

- { name: 'testuser2', groups: 'root' } 


```






#### 3、Inentory文件的格式






```

inventory文件遵循INI文件风格中括号中的字符为组名。可以将同一个主机同时归并到多个不同的组中此外当如若目标主机使用了非默认的SSH端口还可以在主机名称之后使用冒号加端口号来标明。  

   

[webservers]  

www1.magedu.com:2222  

www2.magedu.com  

[dbservers]  

db1.magedu.com  

db2.magedu.com  

db3.magedu.com  

   

如果主机名称遵循相似的命名模式还可以使用列表的方式标识各主机例如  

[webservers]  

www[01:50].example.com  

[databases]  

db-[a:f].example.com  

   

#################### 主机变量  

可以在inventory中定义主机时为其添加主机变量以便于在playbook中使用。例如  

[webservers]  


www1.magedu.com http_port=80 maxRequestsPerChild=808 



www2.magedu.com http_port=303 maxRequestsPerChild=909 


   

################### 组变量  

组变量是指赋予给指定组内所有主机上的在playbook中可用的变量。例如  

   

[webservers]  

www1.magedu.com  

www2.magedu.com  

   

[webservers:vars]  


ntpntp_server=ntp.magedu.com  



nfsnfs_server=nfs.magedu.com  


   

################## 组嵌套  

inventory中组还可以包含其它的组并且也可以向组中的主机指定变量。不过这些变量只能在ansible-playbook中使用而ansible不支持。例如  

   

[apache]  

httpd1.magedu.com  

httpd2.magedu.com  

   

[nginx]  

ngx1.magedu.com  

ngx2.magedu.com  

   

[webservers:children]  

apache  

nginx  

   

[webservers:vars]  


ntpntp_server=ntp.magedu.com  


   

######################### inventory参数  

   

ansible基于ssh连接inventory中指定的远程主机时还可以通过参数指定其交互方式常用的参数如下所示  

ansible_ssh_host # 要连接的主机名  

ansible_ssh_port # 端口号默认是22  

ansible_ssh_user # ssh连接时默认使用的用户名  

ansible_ssh_pass # ssh连接时的密码  

ansible_sudo_pass # 使用sudo连接用户是的密码  

ansible_ssh_private_key_file # 秘钥文件如果不想使用ssh-agent管理时可以使用此选项  

ansible_shell_type # shell的类型默认sh  

#########################################################################################  

ansible的循环机制还有更多的高级功能具体请参见官方文档http://docs.ansible.com/playbooks_loops.html。 


```









#### 4、playbooks






```

playbook是由一个或多个“play”组成的列表。play的主要功能在于将事先归并为一组的主机装扮成事先通过ansible中的task定义好的角色。  

从根本上来讲所谓task无非是调用ansible的一个module。将多个play组织在一个playbook中即可以让它们联同起来按事先编排的机制同唱一台大戏。  

   

###########################playbook基础组件  

1、Hosts和Users  

   

playbook中的每一个play的目的都是为了让某个或某些主机以某个指定的用户身份执行任务。  

hosts用于指定要执行指定任务的主机其可以是一个或多个由冒号分隔主机组。  

remote_user则用于指定远程主机上的执行任务的用户。  

   

不过remote_user也可用于各task中。也可以通过指定其通过sudo的方式在远程主机上执行任务其可用于play全局或某任务。  

此外甚至可以在sudo时使用sudo_user指定sudo时切换的用户。  

   

- hosts: webnodes  

remote_user: mageedu  

tasks:  

- name: test connection ping:  

remote_user: mageedu sudo: yes  

   

2、任务列表和action  

play的主体部分是task list。task list中的各任务按次序逐个在hosts中指定的所有主机上执行即在所有主机上完成第一个任务后再开始第二个。  

在运行自下而下某playbook时如果中途发生错误所有已执行任务都将回滚因此在更正playbook后重新执行一次即可。  

task的目的是使用指定的参数执行模块而在模块参数中可以使用变量。模块执行是幂等的这意味着多次执行是安全的因为其结果均一致。  

每个task都应该有其name用于playbook的执行结果输出建议其内容尽可能清晰地描述任务执行步骤。如果未提供name则action的结果将用于输出。  

   

定义task的可以使用“action: module options”或“module: options”的格式推荐使用后者以实现向后兼容。  

如果action一行的内容过多也中使用在行首使用几个空白字符进行换行。  

   

tasks:  

- name: make sure apache is running  


service: name=httpd state=running 


   


在众多模块中只有command和shell模块仅需要给定一个列表而无需使用“key=value”格式例如  


tasks:  

- name: disable selinux  

command: /sbin/setenforce 0如果命令或脚本的退出码不为零可以使用如下方式替代  

tasks:  

- name: run this command and ignore the result  

shell: /usr/bin/somecommand || /bin/true  

或者使用ignore_errors来忽略错误信息  

tasks:  

- name: run this command and ignore the result  

shell: /usr/bin/somecommand  

ignore_errors: True   

   

3、handlers  

   

用于当关注的资源发生变化时采取一定的操作。  

   

“notify”这个action可用于在每个play的最后被触发这样可以避免多次有改变发生时每次都执行指定的操作取而代之仅在所有的变化发生完成后一次性地执行指定操作。在notify中列出的操作称为handler也即notify中调用handler中定义的操作。  

   

- name: template configuration file  


template: src=template.j2 dest=/etc/foo.conf  


notify:  

- restart memcached  

- restart apache   

   

handler是task列表这些task与前述的task并没有本质上的不同。  

   

handlers:  

- name: restart memcached  


service: name=memcached state=restarted 


- name: restart apache  


service: name=apache state=restarted 



```






#### 5、tags






```

tags用于让用户选择运行或路过playbook中的部分代码。ansible具有幂等性因此会自动跳过没有变化的部分即便如此有些代码为测试其确实没有发生变化的时间依然会非常地长。此时如果确信其没有变化就可以通过tags跳过此些代码片断。  

   

示例基于playbooks实现web服务的部署  

1、提供好Inventory文件  

# /etc/ansible/hosts基于秘钥认证  

[webhosts]  

172.16.10.22  

172.16.10.33  

   

2、编辑 palybooks 剧本  

# vim /root/web.yaml  

- name: web service  

remote_user: root  

hosts: webhosts  

vars:  

packages: httpd  

tasks:  


- name: install httpd yum: name={{ packages }} state=present 


tags: install  

- name: configuration httpd  


copy: src=/root/httpd.conf dest=/etc/httpd/conf/httpd.conf  


tags: conf  

notify:  

- restart httpd  

- name: service httpd start  


service: name=httpd enabled=no state=started 


tags: start  

- name: add centos and hadoop user  


user: name={{ item }} state=absent 


tags: adduser  

with_items:  

- centos  

- hadoop  

handlers:  

- name: restart httpd  


service: name=httpd state=restarted 


   

3、准备好配置文件  


将web的配置放到指定目录 src=/root/httpd.conf  


   

4、开始部署  

ansible-playbooks /root/web.yml 


```




结果示例


[![http://img1.51cto.com/attachment/201409/16/8886857_14108700951e8o.png](http://img1.51cto.com/attachment/201409/16/8886857_14108700951e8o.png)](http://img1.51cto.com/attachment/201409/16/8886857_1410870094s9q8.png)


查看端口


[![http://img1.51cto.com/attachment/201409/16/8886857_1410870097gT76.png](http://img1.51cto.com/attachment/201409/16/8886857_1410870097gT76.png)](http://img1.51cto.com/attachment/201409/16/8886857_1410870097UPsA.png)


此时如果配置文件发生变化


[![http://img1.51cto.com/attachment/201409/16/8886857_1410870099D0Rp.png](http://img1.51cto.com/attachment/201409/16/8886857_1410870099D0Rp.png)](http://img1.51cto.com/attachment/201409/16/8886857_1410870098Dm2G.png)


至此基本使用配置完成。


博文地址：[http://guoting.blog.51cto.com/8886857/1553446](http://guoting.blog.51cto.com/8886857/1553446)


