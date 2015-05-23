 PHP 5 Filesystem 函数 

#### PHP Filesystem 简介

 Filesystem 函数允许您访问和操作文件系统。

 

#### 安装

 Filesystem 函数是 PHP 核心的组成部分。无需安装即可使用这些函数。

 

#### Runtime 配置

 Filesystem 函数的行为受到 php.ini 中设置的影响。

 Filesystem 配置选项：

 

|名称|默认|描述|可改变|
|:--|:--|:--|:--|
|allow_url_fopen|"1"|允许 fopen()-type 函数使用 URL。（PHP 4.0.4 版以后可用）|PHP_INI_SYSTEM |
|user_agent|NULL|定义 PHP 发送的用户代理。（PHP 4.3 版以后可用）|PHP_INI_ALL|
|default_socket_timeout|"60"|设置基于 socket 流的默认的超时时间（秒）。（PHP 4.3 版以后可用）|PHP_INI_ALL|
|from|""|定义匿名 FTP 的密码（您的 email 地址）。|PHP_INI_ALL|
|auto_detect_line_endings|"0"|当设置为 "1" 时，PHP 将检查通过 fgets() 和 file() 取得的数据中的行结束符号是符合 Unix、MS-Dos 还是 Mac 的习惯。（PHP 4.3 版以后可用）|PHP_INI_ALL|





#### Unix / Windows 兼容性

 当在 Unix 平台上规定路径时，正斜杠 (/) 用作目录分隔符。而在 Windows 平台上，正斜杠 (/) 和反斜杠 (\) 均可使用。

 

#### PHP 5 Filesystem 函数

 

|函数|描述|
|:--|:--|
|basename()|返回路径中的文件名部分。|
|chgrp()|改变文件组。|
|chmod()|改变文件模式。|
|chown()|改变文件所有者。|
|clearstatcache()|清除文件状态缓存。|
|copy()|复制文件。|
|delete()|参见 unlink() 或 unset()|
|dirname()|返回路径中的目录名称部分。|
|disk_free_space()|返回目录的可用空间。|
|disk_total_space()|返回一个目录的磁盘总容量。|
|diskfreespace()|disk_free_space() 的别名。|
|fclose()|关闭打开的文件。|
|feof()|测试文件指针是否到了文件末尾。|
|fflush()|向打开的文件刷新缓冲输出。|
|fgetc()|从打开的文件中返回字符。|
|fgetcsv()|从打开的文件中解析一行，校验 CSV 字段。 |
|fgets()|从打开的文件中返回一行。|
|fgetss()|从打开的文件中返回一行，并过滤掉 HTML 和 PHP 标签。|
|file()|把文件读入一个数组中。|
|file_exists()|检查文件或目录是否存在。|
|file_get_contents()|把文件读入字符串。|
|file_put_contents()|把字符串写入文件。|
|fileatime()|返回文件的上次访问时间。|
|filectime()|返回文件的上次修改时间。|
|filegroup()|返回文件的组 ID。|
|fileinode()|返回文件的 inode 编号。|
|filemtime()|返回文件内容的上次修改时间。|
|fileowner()|返回文件的用户 ID （所有者）。|
|fileperms()|返回文件的权限。|
|filesize()|返回文件大小。|
|filetype()|返回文件类型。|
|flock()|锁定或释放文件。|
|fnmatch()|根据指定的模式来匹配文件名或字符串。|
|fopen()|打开一个文件或 URL。|
|fpassthru()|从打开的文件中读数据，直到文件末尾（EOF），并向输出缓冲写结果。|
|fputcsv()|把行格式化为 CSV 并写入一个打开的文件中。|
|fputs()|fwrite() 的别名。|
|fread()|读取打开的文件。|
|fscanf()|根据指定的格式对输入进行解析。|
|fseek()|在打开的文件中定位。|
|fstat()|返回关于一个打开的文件的信息。|
|ftell()|返回在打开文件中的当前位置。|
|ftruncate()|把打开文件截断到指定的长度。|
|fwrite()|写入打开的文件。|
|glob()|返回一个包含匹配指定模式的文件名/目录的数组。|
|is_dir()|判断文件是否是一个目录。|
|is_executable()|判断文件是否可执行。|
|is_file()|判断文件是否是常规的文件。|
|is_link()|判断文件是否是连接。|
|is_readable()|判断文件是否可读。|
|is_uploaded_file()|判断文件是否是通过 HTTP POST 上传的。|
|is_writable()|判断文件是否可写。|
|is_writeable()|is_writable() 的别名。|
|lchgrp()|改变符号连接的组所有权。|
|lchown()|改变符号连接的用户所有权。|
|link()|创建一个硬连接。|
|linkinfo()|返回有关一个硬连接的信息。|
|lstat()|返回关于文件或符号连接的信息。|
|mkdir()|创建目录。|
|move_uploaded_file()|把上传的文件移动到新位置。|
|parse_ini_file()|解析一个配置文件。|
|parse_ini_string()|解析一个配置字符串。|
|pathinfo()|返回关于文件路径的信息。|
|pclose()|关闭由 popen() 打开的进程。|
|popen()|打开一个进程。|
|readfile()|读取一个文件，并写入到输出缓冲。|
|readlink()|返回符号连接的目标。|
|realpath()|返回绝对路径名。|
|realpath_cache_get()|返回高速缓存条目。|
|realpath_cache_size()|返回高速缓存大小。|
|rename()|重命名文件或目录。|
|rewind()|倒回文件指针的位置。|
|rmdir()|删除空的目录。|
|set_file_buffer()|设置已打开文件的缓冲大小。|
|stat()|返回关于文件的信息。|
|symlink()|创建符号连接。|
|tempnam()|创建唯一的临时文件。|
|tmpfile()|创建唯一的临时文件。|
|touch()|设置文件的访问和修改时间。|
|umask()|改变文件的文件权限。|
|unlink()|删除文件。|



