 PHP Mail 函数 

#### PHP Mail 简介

 mail() 函数允许您从脚本中直接发送电子邮件。

 

#### 需求

 要使邮件函数可用，PHP 需要已安装且正在运行的邮件系统。要使用的程序是由 php.ini 文件中的配置设置定义的。

 

#### 安装

 Mail 函数是 PHP 核心的组成部分。无需安装即可使用这些函数。

 

#### Runtime 配置

 Mail 函数的行为受 php.ini 文件中的设置的影响。

 Mail 配置选项：

 

|名称|默认|描述|可更改|
|:--|:--|:--|:--|
|SMTP|"localhost"|Windows 专用：SMTP 服务器的 DNS 名称或 IP 地址。|PHP_INI_ALL|
|smtp_port|"25"|Windows 专用：SMTP 端口号。自 PHP 4.3 起可用。|PHP_INI_ALL|
|sendmail_from|NULL|Windows 专用：规定在由 PHP 发送的电子邮件中使用的 "from" 地址。|PHP_INI_ALL|
|sendmail_path|NULL|Unix 系统专用：规定 sendmail 程序的路径（通常 /usr/sbin/sendmail 或 /usr/lib/sendmail）。|PHP_INI_SYSTEM|





#### PHP Mail 函数

 PHP：指示支持该函数的最早的 PHP 版本。

 

|函数|描述|PHP|
|:--|:--|:--|
|ezmlm_hash()|计算 EZMLM 邮件列表系统所需的散列值。|3|
|mail()|允许您从脚本中直接发送电子邮件。|3|





#### PHP Mail 常量

 无。



 

