
    
[JVM监控工具介绍](http://www.blogjava.net/stone2083/archive/2008/02/25/182081.html) 




#### [jstatd](http://java.sun.com/j2se/1.5.0/docs/tooldocs/share/jstatd.html)



启动jvm监控服务。它是一个基于rmi的应用，向远程机器提供本机jvm应用程序的信息。默认端口1099。

实例：jstatd -J-Djava.security.policy=my.policy



my.policy文件需要自己建立，内如如下：

grant codebase "file:$JAVA_HOME/lib/tools.jar" {

 permission java.security.AllPermission;

};

这是安全策略文件，因为jdk对jvm做了jaas的安全检测，所以我们必须设置一些策略，使得jstatd被允许作网络操作





#### [jps](http://java.sun.com/j2se/1.5.0/docs/tooldocs/share/jps.html)



列出所有的jvm实例

实例：

jps

列出本机所有的jvm实例



jps 192.168.0.77

列出远程服务器192.168.0.77机器所有的jvm实例，采用rmi协议，默认连接端口为1099

（前提是远程服务器提供jstatd服务）



输出内容如下：

jones@jones:~/data/ebook/java/j2se/jdk_gc$ jps

6286 Jps

6174  Jstat





#### jconsole



一个图形化界面，可以观察到java进程的gc，class，内存等信息。虽然比较直观，但是个人还是比较倾向于使用jstat命令（在最后一部分会对jstat作详细的介绍）。





#### [jinfo](http://java.sun.com/j2se/1.5.0/docs/tooldocs/share/jinfo.html)

（linux下特有）

观察运行中的java程序的运行环境参数：参数包括Java System属性和JVM命令行参数

实例：jinfo 2083

其中2083就是java进程id号，可以用jps得到这个id号。

输出内容太多了，不在这里一一列举，大家可以自己尝试这个命令。





#### [jstack](http://java.sun.com/j2se/1.5.0/docs/tooldocs/share/jstack.html)

（linux下特有）

可以观察到jvm中当前所有线程的运行情况和线程当前状态

jstack 2083

输出内容如下：



![http://dolphin-ygj.iteye.com/upload/attachment/93459/99148782-fe1a-39a3-a987-9967928fb6f4.png](http://dolphin-ygj.iteye.com/upload/attachment/93459/99148782-fe1a-39a3-a987-9967928fb6f4.png)

 





#### [jmap](http://java.sun.com/j2se/1.5.0/docs/tooldocs/share/jmap.html)

（linux下特有，也是很常用的一个命令）

观察运行中的jvm物理内存的占用情况。

参数如下：

#### 

-heap

：打印jvm heap的情况



#### -histo：

打印jvm heap的直方图。其输出信息包括类名，对象数量，对象占用大小。



#### -histo：live ：

同上，但是只答应存活对象的情况



#### -permstat：

打印permanent generation heap情况



命令使用：

jmap -heap 2083

可以观察到New Generation（Eden Space，From Space，To Space）,tenured generation,Perm Generation的内存使用情况

输出内容：



![http://dolphin-ygj.iteye.com/upload/attachment/93453/38cee2b2-9eaa-3eca-ac45-2d917ac99436.png](http://dolphin-ygj.iteye.com/upload/attachment/93453/38cee2b2-9eaa-3eca-ac45-2d917ac99436.png)

 



jmap -histo 2083 ｜ jmap -histo:live 2083

可以观察heap中所有对象的情况（heap中所有生存的对象的情况）。包括对象数量和所占空间大小。

输出内容：



![http://dolphin-ygj.iteye.com/upload/attachment/93457/ffc0bb45-0466-3892-9c68-131e9f91c78f.png](http://dolphin-ygj.iteye.com/upload/attachment/93457/ffc0bb45-0466-3892-9c68-131e9f91c78f.png)

 

写个脚本，可以很快把占用heap最大的对象找出来，对付内存泄漏特别有效。





#### [jstat](http://java.sun.com/j2se/1.5.0/docs/tooldocs/share/jstat.html)



最后要重点介绍下这个命令。

这是jdk命令中比较重要，也是相当实用的一个命令，可以观察到classloader，compiler，gc相关信息

具体参数如下：

-class：统计class loader行为信息

-compile：统计编译行为信息

-gc：统计jdk gc时heap信息

-gccapacity：统计不同的generations（不知道怎么翻译好，包括新生区，老年区，permanent区）相应的heap容量情况

-gccause：统计gc的情况，（同-gcutil）和引起gc的事件

-gcnew：统计gc时，新生代的情况

-gcnewcapacity：统计gc时，新生代heap容量

-gcold：统计gc时，老年区的情况

-gcoldcapacity：统计gc时，老年区heap容量

-gcpermcapacity：统计gc时，permanent区heap容量

-gcutil：统计gc时，heap情况

-printcompilation：不知道干什么的，一直没用过。



一般比较常用的几个参数是：

jstat -class 2083 1000 10 （每隔1秒监控一次，一共做10次）

输出内容含义如下：




Loaded
Number of classes loaded.


Bytes
Number of Kbytes loaded.


Unloaded
Number of classes unloaded.


Bytes
Number of Kbytes unloaded.


Time
Time spent performing class load and unload operations.


 


jstat -gc 2083 2000 20（每隔2秒监控一次，共做10）

输出内容含义如下：




S0C 
Current survivor（存活的） space 0 capacity (KB). 


EC 
Current eden space capacity (KB).


EU 
Eden space utilization (KB).


OC 
Current old space capacity (KB).


OU 
Old space utilization (KB).


PC 
Current permanent space capacity (KB).


PU 
Permanent space utilization (KB).


YGC 
Number of young generation GC Events.


YGCT 
Young generation garbage collection time.


FGC 
Number of full GC events.


FGCT 
Full garbage collection time.


GCT 
Total garbage collection time.





 


输出内容：



![http://dolphin-ygj.iteye.com/upload/attachment/93455/715fcb42-0481-39d7-8162-2bbf033eb806.png](http://dolphin-ygj.iteye.com/upload/attachment/93455/715fcb42-0481-39d7-8162-2bbf033eb806.png)

 


 


 监控内存使用情况 参数 （查看内存溢出相对有用）


jstat -gccause 2083 5000 （每隔5秒监控一次）

输出内容含义如下：


 


 




S0 
Survivor space 0 utilization as a percentage of the space's current capacity.


S1 
Survivor space 1 utilization as a percentage of the space's current capacity.


E 
Eden space utilization as a percentage of the space's current capacity.


O 
Old space utilization as a percentage of the space's current capacity.


P
Permanent space utilization as a percentage of the space's current capacity.


YGC
Number of young generation GC events.


YGCT
Young generation garbage collection time.


FGC 
Number of full GC events.


FGCT
Full garbage collection time.


GCT
Total garbage collection time.


LGCC 
Cause of last Garbage Collection.


GCC
Cause of current Garbage Collection.







如果能熟练运用这些命令，尤其是在linux下，那么完全可以代替jprofile等监控工具了，谁让它收费呢。呵呵。

用命令的好处就是速度快，并且辅助于其他命令，比如grep gawk sed等，可以组装多种符合自己需求的工具。


  

