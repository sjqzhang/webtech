 C 标准库 - <locale.h>
 
#### 简介

 locale.h 头文件定义了特定地域的设置，比如日期格式和货币符号。接下来我们将介绍一些宏，以及一个重要的结构 struct lconv 和两个重要的函数。

 
#### 库宏

 下面列出了头文件 locale.h 中定义的宏，这些宏将在下列的两个函数中使用：

 

|序号|宏 &amp; 描述|
|:--|:--|
|1 |LC_ALL设置下面的所有选项。|
|2 |LC_COLLATE影响 strcoll 和 strxfrm 函数。|
|3 |LC_CTYPE影响所有字符函数。|
|4 |LC_MONETARY影响 localeconv 函数提供的货币信息。|
|5 |LC_NUMERIC影响 localeconv 函数提供的小数点格式化和信息。|
|6 |LC_TIME影响 strftime 函数。|


#### 库函数

 下面列出了头文件 locale.h 中定义的函数：

 

|序号|函数 &amp; 描述|
|:--|:--|
|1|char *setlocale(int category, const char *locale)设置或读取地域化信息。|
|2|struct lconv *localeconv(void)设置或读取地域化信息。|


#### 库结构

 
```

typedef struct {
   char *decimal_point;
   char *thousands_sep;
   char *grouping;	
   char *int_curr_symbol;
   char *currency_symbol;
   char *mon_decimal_point;
   char *mon_thousands_sep;
   char *mon_grouping;
   char *positive_sign;
   char *negative_sign;
   char int_frac_digits;
   char frac_digits;
   char p_cs_precedes;
   char p_sep_by_space;
   char n_cs_precedes;
   char n_sep_by_space;
   char p_sign_posn;
   char n_sign_posn;
} lconv

```
 以下是各字段的描述：

 

|序号|字段 &amp; 描述|
|:--|:--|
|1 |decimal_point用于非货币值的小数点字符。|
|2 |thousands_sep用于非货币值的千位分隔符。|
|3 |grouping一个表示非货币量中每组数字大小的字符串。每个字符代表一个整数值，每个整数指定当前组的位数。值为 0 意味着前一个值将应用于剩余的分组。|
|4 |int_curr_symbol国际货币符号使用的字符串。前三个字符是由 ISO 4217:1987 指定的，第四个字符用于分隔货币符号和货币量。|
|5 |currency_symbol用于货币的本地符号。|
|6 |mon_decimal_point用于货币值的小数点字符。|
|7 |mon_thousands_sep用于货币值的千位分隔符。|
|8 |mon_grouping一个表示货币值中每组数字大小的字符串。每个字符代表一个整数值，每个整数指定当前组的位数。值为 0 意味着前一个值将应用于剩余的分组。|
|9 |positive_sign用于正货币值的字符。|
|10 |negative_sign用于负货币值的字符。|
|11 |int_frac_digits国际货币值中小数点后要显示的位数。|
|12 |frac_digits货币值中小数点后要显示的位数。|
|13 |p_cs_precedes如果等于 1，则 currency_symbol 出现在正货币值之前。如果等于 0，则 currency_symbol 出现在正货币值之后。|
|14 |p_sep_by_space如果等于 1，则 currency_symbol 和正货币值之间使用空格分隔。如果等于 0，则 currency_symbol 和正货币值之间不使用空格分隔。|
|15 |n_cs_precedes如果等于 1，则 currency_symbol 出现在负货币值之前。如果等于 0，则 currency_symbol 出现在负货币值之后。|
|16 |n_sep_by_space如果等于 1，则 currency_symbol 和负货币值之间使用空格分隔。如果等于 0，则 currency_symbol 和负货币值之间不使用空格分隔。|
|17 |p_sign_posn表示正货币值中正号的位置。|
|18 |n_sign_posn表示负货币值中负号的位置。|

下面的值用于 p_sign_posn 和 n_sign_posn:

 

|值|描述|
|:--|:--|
|0 |封装值和 currency_symbol 的括号。|
|1 |放置在值和 currency_symbol 之前的符号。|
|2 |放置在值和 currency_symbol 之后的符号。|
|3 |紧挨着放置在值和 currency_symbol 之前的符号。|
|4 |紧挨着放置在值和 currency_symbol 之后的符号。|



