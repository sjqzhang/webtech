 C 标准库 - <time.h>
 
#### 简介

 time.h 头文件定义了四个变量类型、两个宏和各种操作日期和时间的函数。

 
#### 库变量

 下面是头文件 time.h 中定义的变量类型：

 

|序号|变量 &amp; 描述|
|:--|:--|
|1|size_t 是无符号整数类型，它是 sizeof 关键字的结果。|
|2|clock_t 这是一个适合存储处理器时间的类型。|
|3|time_t is 这是一个适合存储日历时间类型。|
|4|struct tm 这是一个用来保存时间和日期的结构。|

tm 结构的定义如下：

 
```

struct tm {
   int tm_sec;         /* 秒，范围从 0 到 59		*/
   int tm_min;         /* 分，范围从 0 到 59		*/
   int tm_hour;        /* 小时，范围从 0 到 23		*/
   int tm_mday;        /* 一月中的第几天，范围从 1 到 31	*/
   int tm_mon;         /* 月，范围从 0 到 11		*/
   int tm_year;        /* 自 1900 年起的年数		*/
   int tm_wday;        /* 一周中的第几天，范围从 0 到 6	*/
   int tm_yday;        /* 一年中的第几天，范围从 0 到 365	*/
   int tm_isdst;       /* 夏令时				*/
};

```
 
#### 库宏

 下面是头文件 time.h 中定义的宏：

 

|序号|宏 &amp; 描述|
|:--|:--|
|1|NULL这个宏是一个空指针常量的值。|
|2|CLOCKS_PER_SEC 这个宏表示每秒的处理器时钟个数。|


#### 库函数

 下面是头文件 time.h 中定义的函数：

 

|序号|函数 &amp; 描述|
|:--|:--|
|1|char *asctime(const struct tm *timeptr)返回一个指向字符串的指针，它代表了结构 timeptr 的日期和时间。|
|2|clock_t clock(void)返回程序执行起（一般为程序的开头），处理器时钟所使用的时间。|
|3|char *ctime(const time_t *timer)返回一个表示当地时间的字符串，当地时间是基于参数 timer。|
|4|double difftime(time_t time1, time_t time2)返回 time1 和 time2 之间相差的秒数 (time1-time2)。|
|5|struct tm *gmtime(const time_t *timer)timer 的值被分解为 tm 结构，并用协调世界时（UTC）也被称为格林尼治标准时间（GMT）表示。|
|6|struct tm *localtime(const time_t *timer)timer 的值被分解为 tm 结构，并用本地时区表示。|
|7|time_t mktime(struct tm *timeptr)把 timeptr 所指向的结构转换为一个依据本地时区的 time_t 值。|
|8|size_t strftime(char *str, size_t maxsize, const char *format, const struct tm *timeptr)根据 format 中定义的格式化规则，格式化结构 timeptr 表示的时间，并把它存储在 str 中。|
|9|time_t time(time_t *timer)计算当前日历时间，并把它编码成 time_t 格式。|



