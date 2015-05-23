 PHP 杂项 函数 

#### PHP 杂项函数简介

 我们把不属于其他类别的函数归纳到杂项函数类别。

 

#### 安装

 杂项函数是 PHP 核心的组成部分。无需安装即可使用这些函数。

 

#### Runtime 配置

 杂项函数的行为受 php.ini 文件中的设置的影响。

 杂项配置选项：

 

|名称|默认|描述|可更改|
|:--|:--|:--|:--|
|ignore_user_abort|"0"|FALSE 指示只要脚本在客户机终止连接后尝试进行输出，脚本将被终止。|PHP_INI_ALL|
|highlight.string|"#DD0000"|供突出显示符合 PHP 语法的字符串而使用的颜色。|PHP_INI_ALL|
|highlight.comment|"#FF8000"|供突出显示 PHP 注释而使用的颜色。|PHP_INI_ALL|
|highlight.keyword|"#007700"|供语法高亮显示 PHP 关键词而使用的颜色（比如圆括号和分号）。|PHP_INI_ALL|
|highlight.bg|"#FFFFFF"|背景颜色。|PHP_INI_ALL|
|highlight.default|"#0000BB"|PHP 语法的默认颜色。|PHP_INI_ALL|
|highlight.html|"#000000"|HTML 代码的颜色。|PHP_INI_ALL|
|browscap|NULL|浏览器性能文件（例如：browscap.ini）的名称和位置。|PHP_INI_SYSTEM|





#### PHP 杂项函数

 PHP：指示支持该函数的最早的 PHP 版本。

 

|函数|描述|PHP|
|:--|:--|:--|
| connection_aborted()|检查是否断开客户机。|3|
| connection_status()|返回当前的连接状态。|3|
|connection_timeout()|在 PHP 4.0.5 中不赞成使用。检查脚本是否超时。|3|
|constant()|返回一个常量的值。|4|
|define()|定义一个常量。|3|
|defined()|检查某常量是否存在。|3|
|die()|输出一条消息，并退出当前脚本。|3|
|eval()|把字符串当成 PHP 代码来计算。|3|
|exit()|输出一条消息，并退出当前脚本。|3|
|get_browser()|返回用户浏览器的性能。|3|
|highlight_file()|对文件进行 PHP 语法高亮显示。|4|
|highlight_string()|对字符串进行 PHP 语法高亮显示。|4|
| ignore_user_abort()|设置与远程客户机断开是否会终止脚本的执行。|3|
|pack()|把数据装入一个二进制字符串。|3|
|php_check_syntax()|在 PHP 5.0.5 中不赞成使用。|5|
| php_strip_whitespace()|返回已删除 PHP 注释以及空白字符的源代码文件。|5|
|show_source()|highlight_file() 的别名。|4|
|sleep()|延迟代码执行若干秒。|3|
|time_nanosleep()|延迟代码执行若干秒和纳秒。|5|
|time_sleep_until()|延迟代码执行直到指定的时间。|5|
|uniqid()|生成唯一的 ID。|3|
|unpack()|从二进制字符串对数据进行解包。|3|
|usleep()|延迟代码执行若干微秒。|3|





#### PHP 杂项常量

 PHP：指示支持该常量的最早的 PHP 版本。

 

|常量|描述|PHP|
|:--|:--|:--|
|CONNECTION_ABORTED| | |
|CONNECTION_NORMAL| | |
|CONNECTION_TIMEOUT| | |
|__COMPILER_HALT_OFFSET__| |5|



