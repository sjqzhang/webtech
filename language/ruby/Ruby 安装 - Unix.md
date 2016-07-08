 Ruby 安装 - Unix
 下面列出了在 Unix 机器上安装 Ruby 的步骤。

 注意：在安装之前，请确保您有 root 权限。

 
下载最新版的 Ruby 压缩文件。[请点击这里下载](http://www.w3cschool.cc//www.ruby-lang.org/en/downloads/)。
 下载 Ruby 之后，解压到新创建的目录下：
 

```

$ tar -xvzf ruby-1.6.7.tgz
$ cd ruby-1.6.7

```
 
现在，配置并编译源代码，如下所示：
 

```

$ ./configure
$ make

```
 
最后，安装 Ruby 解释器，如下所示：
 

```

$ su -l root # 使用root用户
$ make install
$ exit       # 切换回普通用户

```
 
安装后，通过在命令行中输入以下命令来确保一切工作正常：
 

```

$ruby -v
ruby 1.6.7 (2002-06-04) [i386-netbsd]

```
 
如果一切工作正常，将会输出所安装的 Ruby 解释器的版本，如上所示。如果您安装了其他版本，则会显示其他不同的版本。
 

#### 使用 yum 安装 Ruby

 如果您的计算机已经连接到 Internet，那么最简单的安装 Ruby 的方式是使用 yum。在命令提示符中输入以下的命令，即可在您的计算机上安装 Ruby。

 
```

$ yum install ruby

```
 

