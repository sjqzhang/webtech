 C 标准库 - <limits.h>
 
#### 简介

 limits.h 头文件决定了各种变量类型的各种属性。定义在该头文件中的宏限制了各种变量类型（比如 char、int 和 long）的值。

 这些限制指定了变量不能存储任何超出这些限制的值，例如一个无符号可以存储的最大值是 255。

 
#### 库宏

 下面的值是特定实现的，且是通过 #define 指令来定义的，这些值都不得低于下边所给出的值。

 

|宏|值|描述|
|:--|:--|:--|
|CHAR_BIT |8|定义一个字节的比特数。|
|SCHAR_MIN|-128|定义一个有符号字符的最小值。|
|SCHAR_MAX|127|定义一个有符号字符的最大值。|
|UCHAR_MAX |255|定义一个无符号字符的最大值。|
|CHAR_MIN|0|定义类型 char 的最小值，如果 char 表示负值，则它的值等于 SCHAR_MIN，否则等于 0。|
|CHAR_MAX|127|定义类型 char 的最大值，如果 char 表示负值，则它的值等于 SCHAR_MAX，否则等于 UCHAR_MAX。|
|MB_LEN_MAX |1|定义多字节字符中的最大字节数。|
|SHRT_MIN|-32768|定义一个短整型的最小值。|
|SHRT_MAX |+32767|定义一个短整型的最大值。|
|USHRT_MAX |65535|定义一个无符号短整型的最大值。|
|INT_MIN |-32768|定义一个整型的最小值。|
|INT_MAX |+32767|定义一个整型的最大值。|
|UINT_MAX|65535|定义一个无符号整型的最大值。|
|LONG_MIN |-2147483648|定义一个长整型的最小值。|
|LONG_MAX |+2147483647|定义一个长整型的最大值。|
|ULONG_MAX |4294967295|定义一个无符号长整型的最大值。|


#### 实例

 下面的实例演示了 limit.h 文件中定义的一些常量的使用。

 
```

#include <stdio.h>
#include <limits.h>

int main()
{

   printf("The number of bits in a byte %d\n", CHAR_BIT);

   printf("The minimum value of SIGNED CHAR = %d\n", SCHAR_MIN);
   printf("The maximum value of SIGNED CHAR = %d\n", SCHAR_MAX);
   printf("The maximum value of UNSIGNED CHAR = %d\n", UCHAR_MAX);

   printf("The minimum value of SHORT INT = %d\n", SHRT_MIN);
   printf("The maximum value of SHORT INT = %d\n", SHRT_MAX); 

   printf("The minimum value of INT = %d\n", INT_MIN);
   printf("The maximum value of INT = %d\n", INT_MAX);

   printf("The minimum value of CHAR = %d\n", CHAR_MIN);
   printf("The maximum value of CHAR = %d\n", CHAR_MAX);

   printf("The minimum value of LONG = %ld\n", LONG_MIN);
   printf("The maximum value of LONG = %ld\n", LONG_MAX);
  
   return(0);
}

```
 让我们编译和运行上面的程序，这将产生下列结果：

 
```

The number of bits in a byte 8
The minimum value of SIGNED CHAR = -128
The maximum value of SIGNED CHAR = 127
The maximum value of UNSIGNED CHAR = 255
The minimum value of SHORT INT = -32768
The maximum value of SHORT INT = 32767
The minimum value of INT = -32768
The maximum value of INT = 32767
The minimum value of CHAR = -128
The maximum value of CHAR = 127
The minimum value of LONG = -2147483648
The maximum value of LONG = 2147483647

```
 

