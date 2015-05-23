 PHP FTP 函数 

#### PHP FTP 简介

 FTP 函数通过文件传输协议 (FTP) 提供对文件服务器的客户端访问。

 FTP 函数用于打开、登录以及关闭连接，同时用于上传、下载、重命名、删除及获取文件服务器上的文件信息。不是所有的 FTP 函数对每个服务器都起作用或返回相同的结果。自 PHP 3 起，FTP 函数可用。

 这些函数用于对 FTP 服务器进行细致的访问。如果您仅仅需要对 FTP 服务器进行读写操作，建议使用 Filesystem 函数中的 ftp:// wrapper。

 

#### 安装

 PHP 的 Windows 版本内置了对 FTP 扩展的支持。无需加载任何附加扩展库即可使用 FTP 函数。 

 然而，如果您运行的是 PHP 的 Linux 版本，在编译 PHP 的时候请添加 --enable-ftp  选项（PHP4 或以上版本）或者 --with-ftp 选项（PHP3 版本）。

 

#### PHP FTP 函数

 PHP：指示支持该函数的最早的 PHP 版本。

 

|函数|描述|PHP|
|:--|:--|:--|
|ftp_alloc()|为要上传到 FTP 服务器的文件分配空间。|5|
|ftp_cdup()|把当前目录改变为 FTP 服务器上的父目录。|3|
|ftp_chdir()|改变 FTP 服务器上的当前目录。|3|
|ftp_chmod()|通过 FTP 设置文件上的权限。|5|
|ftp_close()|关闭 FTP 连接。|4|
|ftp_connect()|打开 FTP 连接。|3|
|ftp_delete()|删除 FTP 服务器上的一个文件。|3|
|ftp_exec()|在 FTP 服务器上执行一个程序/命令。|4|
|ftp_fget()|从 FTP 服务器上下载一个文件并保存到本地一个已经打开的文件中。|3|
|ftp_fput()|上传一个已经打开的文件，并在 FTP 服务器上把它保存为一个文件。|3|
|ftp_get_option()|返回 FTP 连接的各种运行时选项。|4|
|ftp_get()|从 FTP 服务器上下载文件。|3|
|ftp_login()|登录 FTP 服务器。|3|
|ftp_mdtm()|返回指定文件的最后修改时间。|3|
|ftp_mkdir()|在 FTP 服务器上创建一个新目录。|3|
|ftp_nb_continue()|连续获取/发送文件。（无阻塞）|4|
|ftp_nb_fget()|从 FTP 服务器上下载一个文件并保存到本地一个已经打开的文件中。（无阻塞）|4|
|ftp_nb_fput()|上传一个已经打开的文件，并在 FTP 服务器上把它保存为一个文件。（无阻塞）|4|
|ftp_nb_get()|从 FTP 服务器上下载文件。（无阻塞）|4|
|ftp_nb_put()|把文件上传到 FTP 服务器上。（无阻塞）|4|
|ftp_nlist()|返回 FTP 服务器上指定目录的文件列表。|3|
|ftp_pasv()|把被动模式设置为打开或关闭。|3|
|ftp_put()|把文件上传到 FTP 服务器上。|3|
|ftp_pwd()|返回当前目录名称。|3|
|ftp_quit()|ftp_close() 的别名。|3|
|ftp_raw()|向 FTP 服务器发送一个 raw 命令。|5|
|ftp_rawlist()|返回指定目录中文件的详细列表。|3|
|ftp_rename()|重命名 FTP 服务器上的文件或目录。|3|
|ftp_rmdir()|删除 FTP 服务器上的一个目录。|3|
|ftp_set_option()|设置 FTP 连接的各种运行时选项。|4|
|ftp_site()|向服务器发送 SITE 命令。|3|
|ftp_size()|返回指定文件的大小。|3|
|ftp_ssl_connect()|打开一个安全的 SSL-FTP 连接。|4|
|ftp_systype()|返回 FTP 服务器的系统类型标识符。|3|





#### PHP FTP 常量

 PHP：指示支持该常量的最早的 PHP 版本。

 

|常量|描述|PHP|
|:--|:--|:--|
|FTP_ASCII| |3|
|FTP_TEXT| |3|
|FTP_BINARY| |3|
|FTP_IMAGE| |3|
|FTP_TIMEOUT_SEC| |3|
|FTP_AUTOSEEK| |4|
|FTP_AUTORESUME|为 GET 和 PUT 请求自动决定恢复和开始的位置|4|
|FTP_FAILED|异步传输失败|4|
|FTP_FINISHED|异步传输成功|4|
|FTP_MOREDATA|异步传输是活动状态的|4|



