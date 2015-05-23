 PHP Zip File 函数 

#### PHP Zip File 简介

 Zip File 函数允许您读取压缩文件。

 

#### 安装

 如需在服务器上运行 Zip File 函数，必须安装这些库：

 
Guido Draheim 的 ZZIPlib 库： [下载 ZZIPlib 库](http://www.w3cschool.cc//zziplib.sourceforge.net/download.html) 
 Zip PELC 扩展：[下载 Zip PELC 扩展](http://www.w3cschool.cc//snaps.php.net/) 
 
在 Linux 系统上安装

 PHP 5+：Zip 函数和 Zip 库默认不会启用，必须从上面的链接下载。请使用 --with-zip=DIR 配置选项来包含 Zip 支持。

 在 Windows 系统上安装

 PHP 5+：Zip 函数默认不会启用，必须从上面的链接下载 php_zip.dll 和 ZZIPlib 库。必须在 php.ini 中启用 php_zip.dll。

 如需启用任何 PHP 扩展，PHP extension_dir 设置（在 php.ini 文件中）应该设置为该 PHP 扩展所在的目录。举例 extension_dir 的值可能是 c:\php\ext。

 

#### PHP Zip File 函数

 PHP：指示支持该函数的最早的 PHP 版本。

 

|函数|描述|PHP|
|:--|:--|:--|
|zip_close()|关闭 ZIP 文件。|4|
|zip_entry_close()|关闭 ZIP 文件中的一个项目。|4|
|zip_entry_compressedsize()|返回 ZIP 文件中的一个项目的被压缩尺寸。|4|
|zip_entry_compressionmethod()|返回 ZIP 文件中的一个项目的压缩方法。|4|
|zip_entry_filesize()|返回 ZIP 文件中的一个项目的实际文件尺寸。|4|
|zip_entry_name()|返回 ZIP 文件中的一个项目的名称。|4|
|zip_entry_open()|打开 ZIP 文件中的一个项目以供读取。|4|
|zip_entry_read()|读取 ZIP 文件中的一个打开的项目。|4|
|zip_open()|打开 ZIP 文件。|4|
|zip_read()|读取 ZIP 文件中的下一个项目。|4|





#### PHP Zip File 常量

 无。

 

