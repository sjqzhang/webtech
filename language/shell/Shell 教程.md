 
#### Shell 教程


Shell 是一个用C语言编写的程序，它是用户使用Linux的桥梁。Shell既是一种命令语言，又是一种程序设计语言。

 Shell 是指一种应用程序，这个应用程序提供了一个界面，用户通过这个界面访问操作系统内核的服务。

 Ken Thompson的sh是第一种Unix Shell，Windows Explorer是一个典型的图形界面Shell。

 

#### Shell 脚本

 Shell 脚本（shell script），是一种为shell编写的脚本程序。 


 业界所说的shell通常都是指shell脚本，但读者朋友要知道，shell和shell script是两个不同的概念。

 由于习惯的原因，简洁起见，本文出现的"shell编程"都是指shell脚本编程，不是指开发shell自身。

 

#### Shell 环境

 Shell 编程跟java、php编程一样，只要有一个能编写代码的文本编辑器和一个能解释执行的脚本解释器就可以了。

 Linux的Shell种类众多，常见的有：

 
Bourne Shell（/usr/bin/sh或/bin/sh）

 Bourne Again Shell（/bin/bash）

C Shell（/usr/bin/csh）

K Shell（/usr/bin/ksh）

Shell for Root（/sbin/sh）

…… 


本教程关注的是 Bash，也就是 Bourne Again Shell，由于易用和免费，Bash在日常工作中被广泛使用。同时，Bash也是大多数Linux系统默认的Shell。

 在一般情况下，人们并不区分 Bourne Shell 和 Bourne Again Shell，所以，像 

#### #!/bin/sh

，它同样也可以改为

#### #!/bin/bash

。

 #!告诉系统其后路径所指定的程序即是解释此脚本文件的Shell程序。

 

#### 第一个shell脚本

 打开文本编辑器(可以使用vi/vim命令来创建文件)，新建一个文件test.sh，扩展名为sh（sh代表shell），扩展名并不影响脚本执行，见名知意就好，如果你用php写shell 脚本，扩展名就用php好了。 

 输入一些代码，第一行一般是这样：  
```

#!/bin/bash
echo "Hello World !"

```
 "#!" 是一个约定的标记，它告诉系统这个脚本需要什么解释器来执行，即使用哪一种Shell。

 echo命令用于向窗口输出文本。 

 
#### 运行Shell脚本有两种方法：

 
#### 1、作为可执行程序

  将上面的代码保存为test.sh，并cd到相应目录：

 
```

chmod +x ./test.sh  #使脚本具有执行权限
./test.sh  #执行脚本

```
 注意，一定要写成./test.sh，而不是test.sh，运行其它二进制的程序也一样，直接写test.sh，linux系统会去PATH里寻找有没有叫test.sh的，而只有/bin, /sbin, /usr/bin，/usr/sbin等在PATH里，你的当前目录通常不在PATH里，所以写成test.sh是会找不到命令的，要用./test.sh告诉系统说，就在当前目录找。 

  



#### 2、作为解释器参数

  这种运行方式是，直接运行解释器，其参数就是shell脚本的文件名，如： 

 
```

/bin/sh test.sh
/bin/php test.php

```
  这种方式运行的脚本，不需要在第一行指定解释器信息，写了也没用。 

 

