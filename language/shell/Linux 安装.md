 
Linux  安装 本章节我们将为大家介绍Linux的安装。

 本章节以 centos6.4 为例。

 centos6.4 下载地址：

 
网易镜像：[http://mirrors.163.com/centos/6/isos/](http://www.w3cschool.cc//mirrors.sohu.com/centos/6/isos/)


 搜狐镜像：[http://mirrors.sohu.com/centos/6/isos/](http://www.w3cschool.cc//mirrors.sohu.com/centos/6/isos/)





#### 注：

建议安装64位Linux系统。

 接下来你需要将下载的Linux系统刻录成光盘或U盘。

 

#### 注：

你也可以在Window上安装VMware虚拟机来安装Linux系统。

 

#### Linux 安装步骤

 1、首先，使用光驱或U盘或你下载的Linux ISO文件进行安装。 

 界面说明：

 ![http://www.w3cschool.cc/wp-content/uploads/2014/06/image001.png](http://www.w3cschool.cc/wp-content/uploads/2014/06/image001.png)

 Install or upgrade an existing system 安装或升级现有的系统

 install system with basic video driver 安装过程中采用基本的显卡驱动

 Rescue installed system 进入系统修复模式

 Boot from local drive   退出安装从硬盘启动

 Memory test  内存检测

 注：用联想E49安装时选择第一项安装时会出现屏幕显示异常的问题，后改用第二项安装时就没有出现问题

 2、介质直接"skip"就可以了

 ![http://www.w3cschool.cc/wp-content/uploads/2014/06/image002.png](http://www.w3cschool.cc/wp-content/uploads/2014/06/image002.png)

 3、出现引导界面，点击"next"

 ![http://www.w3cschool.cc/wp-content/uploads/2014/06/image003.png](http://www.w3cschool.cc/wp-content/uploads/2014/06/image003.png)

 4、选中"English（English）"否则会有部分乱码问题

 ![http://www.w3cschool.cc/wp-content/uploads/2014/06/image004.png](http://www.w3cschool.cc/wp-content/uploads/2014/06/image004.png)

 5、键盘布局选择"U.S.English"

 ![http://www.w3cschool.cc/wp-content/uploads/2014/06/image005.png](http://www.w3cschool.cc/wp-content/uploads/2014/06/image005.png)

 6、选择"Basic Storage Devies"点击"Next"

 ![http://www.w3cschool.cc/wp-content/uploads/2014/06/image006.png](http://www.w3cschool.cc/wp-content/uploads/2014/06/image006.png)

 7、询问是否忽略所有数据，新电脑安装系统选择"Yes,discard any data"

 ![http://www.w3cschool.cc/wp-content/uploads/2014/06/image007.png](http://www.w3cschool.cc/wp-content/uploads/2014/06/image007.png)

 8、Hostname填写格式"英文名.姓"

 ![http://www.w3cschool.cc/wp-content/uploads/2014/06/image008.png](http://www.w3cschool.cc/wp-content/uploads/2014/06/image008.png)

 9、网络设置安装图示顺序点击就可以了

 ![http://www.w3cschool.cc/wp-content/uploads/2014/06/image009.png](http://www.w3cschool.cc/wp-content/uploads/2014/06/image009.png)

 10、时区可以在地图上点击，选择"shanghai"并取消System clock uses UTC前面的对勾

 ![http://www.w3cschool.cc/wp-content/uploads/2014/06/image010.png](http://www.w3cschool.cc/wp-content/uploads/2014/06/image010.png)

 11、设置root的密码

 ![http://www.w3cschool.cc/wp-content/uploads/2014/06/image011.png](http://www.w3cschool.cc/wp-content/uploads/2014/06/image011.png)

 12、硬盘分区，一定要按照图示点选

 ![http://www.w3cschool.cc/wp-content/uploads/2014/06/image012.png](http://www.w3cschool.cc/wp-content/uploads/2014/06/image012.png)

 13、调整分区，必须要有/home这个分区，如果没有这个分区，安装部分软件会出现不能安装的问题

 ![http://www.w3cschool.cc/wp-content/uploads/2014/06/image013.png](http://www.w3cschool.cc/wp-content/uploads/2014/06/image013.png)

 14、询问是否格式化分区

 ![http://www.w3cschool.cc/wp-content/uploads/2014/06/image014.png](http://www.w3cschool.cc/wp-content/uploads/2014/06/image014.png)

 15、将更改写入到硬盘

 ![http://www.w3cschool.cc/wp-content/uploads/2014/06/image015.png](http://www.w3cschool.cc/wp-content/uploads/2014/06/image015.png)

 16、引导程序安装位置

 ![http://www.w3cschool.cc/wp-content/uploads/2014/06/image016.png](http://www.w3cschool.cc/wp-content/uploads/2014/06/image016.png)

 17、最重要的一步，也是本教程最关机的一步，也是其他教程没有提及的一步，按图示顺序点击

 ![http://www.w3cschool.cc/wp-content/uploads/2014/06/image017.png](http://www.w3cschool.cc/wp-content/uploads/2014/06/image017.png)

 18、取消以下内容的所有选项

 

#### Applications



 

#### Base System



 

#### Servers



 并对Desktops进行如下设置

 即取消如下选项：

 

#### Desktop Debugging and Performance Tools



 

#### Desktop Platform



 

#### Remote Desktop Clients



 

#### Input Methods



#### 中仅保留ibus-pinyin-1.3.8-1.el6.x86_64,其他的全部取消



 ![http://www.w3cschool.cc/wp-content/uploads/2014/06/image018.png](http://www.w3cschool.cc/wp-content/uploads/2014/06/image018.png)

 ![http://www.w3cschool.cc/wp-content/uploads/2014/06/image019.png](http://www.w3cschool.cc/wp-content/uploads/2014/06/image019.png)

 19、选中Languages，并选中右侧的Chinese Support然后点击红色区域

 ![http://www.w3cschool.cc/wp-content/uploads/2014/06/image020.png](http://www.w3cschool.cc/wp-content/uploads/2014/06/image020.png)

 20、调整完成后如下图所示

 ![http://www.w3cschool.cc/wp-content/uploads/2014/06/image021.png](http://www.w3cschool.cc/wp-content/uploads/2014/06/image021.png)

 21、至此，一个最精简的桌面环境就设置完成了，

 ![http://www.w3cschool.cc/wp-content/uploads/2014/06/image022.png](http://www.w3cschool.cc/wp-content/uploads/2014/06/image022.png)

 22、安装完成，重启

 ![http://www.w3cschool.cc/wp-content/uploads/2014/06/image023.png](http://www.w3cschool.cc/wp-content/uploads/2014/06/image023.png)

 23、重启之后，的License Information

 ![http://www.w3cschool.cc/wp-content/uploads/2014/06/image024.png](http://www.w3cschool.cc/wp-content/uploads/2014/06/image024.png)

 24、Create User

 Username：填写您的英文名（不带.姓）

 Full Name：填写您的英文名.姓（首字母大写）

 ![http://www.w3cschool.cc/wp-content/uploads/2014/06/image025.png](http://www.w3cschool.cc/wp-content/uploads/2014/06/image025.png)

 25、"Date and Time" 选中 "Synchronize data and time over the network"

 Finsh之后系统将重启

 ![http://www.w3cschool.cc/wp-content/uploads/2014/06/image026.png](http://www.w3cschool.cc/wp-content/uploads/2014/06/image026.png)

 26、第一次登录，登录前不要做任何更改，这个很重要！！！登录之后紧接着退出

 第二次登录，选择语言，在红色区域选择下拉小三角，选other，选中"汉语（中国）"

 ![http://www.w3cschool.cc/wp-content/uploads/2014/06/image027.png](http://www.w3cschool.cc/wp-content/uploads/2014/06/image027.png)

 ![http://www.w3cschool.cc/wp-content/uploads/2014/06/image028.png](http://www.w3cschool.cc/wp-content/uploads/2014/06/image028.png)

 27、登录之后，请一定按照如下顺序点击！

 至此，CentOS安装完成，如有其他问题，请随时与我联系！！

 ![http://www.w3cschool.cc/wp-content/uploads/2014/06/image029.png](http://www.w3cschool.cc/wp-content/uploads/2014/06/image029.png)

 

