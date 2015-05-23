 Ruby 安装 - Windows
 下面列出了在 Windows 机器上安装 Ruby 的步骤。

 注意：在安装时，您可能有不同的可用版本。

 
下载最新版的 Ruby 压缩文件。[请点击这里下载](http://www.w3cschool.cc//www.ruby-lang.org/en/downloads/)。
 下载 Ruby 之后，解压到新创建的目录下：
 双击 Ruby1.6.7.exe 文件，启动 Ruby 安装向导。
 点击 Next，继续向导的 Important Information 页面，直到 Ruby 安装程序完成 Ruby 安装为止。
 
如果您的安装没有适当地配置环境变量，接下来您可能需要进行环境变量的配置。

 
如果您使用的是 Windows 9x，那么请在您的 c:\autoexec.bat 中添加：set PATH="D:\(ruby 安装目录)\bin;%PATH%"
 Windows NT/2000 用户需要修改注册表。 
点击控制面板|系统性能|环境变量。
 在系统变量下，选择 Path，并点击 EDIT。
 在变量值列表的末尾添加 Ruby 目录，并点击 OK。
 在系统变量下，选择 PATHEXT，并点击 EDIT。
 添加 .RB 和 .RBW 到变量值列表中，并点击 OK。
 

 

安装后，通过在命令行中输入以下命令来确保一切工作正常：
 

```

$ruby -v
ruby 1.6.7

```
 
如果一切工作正常，将会输出所安装的 Ruby 解释器的版本，如上所示。如果您安装了其他版本，则会显示其他不同的版本。
 


