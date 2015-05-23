 PHP Date() 函数 
PHP date() 函数用于格式化时间/日期。

 

#### PHP Date() 函数

 PHP date() 函数可把时间戳格式化为可读性更好的日期和时间。

 ![http://www.w3cschool.cc/images/lamp.gif](http://www.w3cschool.cc/images/lamp.gif)时间戳是一个字符序列，表示一定的事件发生的日期/时间。

 
#### 语法

 
```
 date(format,timestamp) 




```
 



|参数|描述|
|:--|:--|
|format|必需。规定时间戳的格式。|
|timestamp|可选。规定时间戳。默认是当前的日期和时间。|





#### PHP Date() - 格式化日期

 date() 函数的第一个必需参数 format 规定了如何格式化日期/时间。

 这里列出了一些可用的字符：

 
d - 代表月中的天 (01 - 31) 
 m - 代表月 (01 - 12)
 Y - 代表年 (四位数)
 
如需了解 format 参数中可用的所有字符列表，请查阅我们的 PHP Date 参考手册，[date() 函数](http://www.w3cschool.cc/php/func-date-date.html)。

 可以在字母之间插入其他字符，比如 "/"、"." 或者 "-"，这样就可以增加附加格式了：

 
```
 <?php

 echo date("Y/m/d") . "<br>";

 echo date("Y.m.d") . "<br>";

 echo date("Y-m-d");

 ?> 




```
 上面代码的输出如下所示：

 
```
 2009/05/11

 2009.05.11

 2009-05-11 




```
 



#### PHP Date() - 添加时间戳

 date() 函数的第二个可选参数 timestamp 规定了一个时间戳。如果您没有提供时间戳，将使用当前的日期和时间。

 mktime() 函数可为指定的日期返回 Unix 时间戳。

 Unix 时间戳包含了 Unix 纪元（1970-01-01 00:00:00 GMT）和指定时间之间的秒数。

 
#### mktime() 语法

 
```
 mktime(hour,minute,second,month,day,year,is_dst) 




```
 如需获得某一天的时间戳，我们只要设置 mktime() 函数的 day 参数就可以了：

 
```
 <?php

 $tomorrow = mktime(0,0,0,date("m"),date("d")+1,date("Y"));

 echo "Tomorrow is ".date("Y/m/d", $tomorrow);

 ?> 




```
 上面代码的输出如下所示：

 
```
 Tomorrow is 2009/05/12 




```
 



#### 完整的 PHP Date 参考手册

 如需查看所有日期函数的完整参考手册，请访问我们的 [完整的 PHP Date 参考手册](http://www.w3cschool.cc/php/php-ref-date.html)。

 该参考手册提供了每个函数的简要描述和应用实例！

 

