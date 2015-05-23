 C 标准库 - <stdarg.h>
 
#### 简介

 stdarg.h 头文件定义了一个变量类型 va_list 和三个宏，这三个宏可用于在参数个数未知（即参数个数可变）时获取函数中的参数。

 可变参数的函数通在参数列表的末尾是使用省略号(,...)定义的。

 
#### 库变量

 下面是头文件 stdarg.h 中定义的变量类型：

 

|序号|变量 &amp; 描述|
|:--|:--|
|1|va_list 这是一个适用于 va_start()、va_arg() 和 va_end() 这三个宏存储信息的类型。|


#### 库宏

 下面是头文件 stdarg.h 中定义的宏：

 

|序号|宏 &amp; 描述|
|:--|:--|
|1|void va_start(va_list ap, last_arg)这个宏初始化 ap 变量，它与 va_arg 和 va_end 宏是一起使用的。last_arg 是最后一个传递给函数的已知的固定参数，即省略号之前的参数。|
|2|type va_arg(va_list ap, type)这个宏检索函数参数列表中类型为 type 的下一个参数。|
|3|void va_end(va_list ap)这个宏允许使用了 va_start 宏的带有可变参数的函数返回。如果在从函数返回之前没有调用 va_end，则结果为未定义。|



