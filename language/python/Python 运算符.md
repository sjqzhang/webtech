 Python 运算符
 

#### 什么是运算符？

 本章节主要说明Python的运算符。举个简单的例子

####  4 +5 = 9 

。 例子中，4和5被称为操作数，"+"号为运算符。

 Python语言支持以下类型的运算符:

 
[算术运算符](#ysf1)
 [比较（关系）运算符](#ysf2)
 [赋值运算符](#ysf3)
 [逻辑运算符](#ysf4)
 [位运算符](#ysf5)
 [成员运算符](#ysf6)
 [身份运算符](#ysf7)
 [运算符优先级](#ysf8)
 
接下来让我们一个个来学习Python的运算符。




#### <span id="ysf1" ></span>Python算术运算符

 以下假设变量a为10，变量b为20：

 

|运算符|描述|实例|
|:--|:--|:--|
|+|加 - 两个对象相加| a + b 输出结果 30|
|-|减 - 得到负数或是一个数减去另一个数| a - b 输出结果 -10|
|*|乘 - 两个数相乘或是返回一个被重复若干次的字符串| a * b 输出结果 200|
|/|除 - x除以y| b / a 输出结果 2|
|%|取模 - 返回除法的余数| b % a 输出结果 0|
|**|幂 - 返回x的y次幂| a**b 为10的20次方， 输出结果 100000000000000000000|
|//|取整除 - 返回商的整数部分| 9//2 输出结果 4 , 9.0//2.0 输出结果 4.0|

以下实例演示了Python所有算术运算符的操作：

 
```

#!/usr/bin/python

a = 21
b = 10
c = 0

c = a + b
print "Line 1 - Value of c is ", c

c = a - b
print "Line 2 - Value of c is ", c 

c = a * b
print "Line 3 - Value of c is ", c 

c = a / b
print "Line 4 - Value of c is ", c 

c = a % b
print "Line 5 - Value of c is ", c

a = 2
b = 3
c = a**b 
print "Line 6 - Value of c is ", c

a = 10
b = 5
c = a//b 
print "Line 7 - Value of c is ", c

```
 以上实例输出结果：

 
```

Line 1 - Value of c is 31
Line 2 - Value of c is 11
Line 3 - Value of c is 210
Line 4 - Value of c is 2
Line 5 - Value of c is 1
Line 6 - Value of c is 8
Line 7 - Value of c is 2

```
 

#### <span id="ysf2" ></span>Python比较运算符

 以下假设变量a为10，变量b为20：

 

|运算符|描述|实例|
|:--|:--|:--|
|==| 等于 - 比较对象是否相等| (a == b) 返回 False。 |
|!=| 不等于 - 比较两个对象是否不相等| (a != b) 返回 true. |
|<>|不等于 - 比较两个对象是否不相等| (a <> b) 返回 true。这个运算符类似 != 。|
|>| 大于 - 返回x是否大于y| (a > b) 返回 False。|
|<| 小于 - 返回x是否小于y。所有比较运算符返回1表示真，返回0表示假。这分别与特殊的变量True和False等价。注意，这些变量名的大写。| (a < b) 返回 true。 |
|>=| 大于等于 - 返回x是否大于等于y。| (a >= b) 返回 False。|
|<=| 小于等于 - 返回x是否小于等于y。| (a <= b) 返回 true。 |

以下实例演示了Python所有比较运算符的操作：

 
```

#!/usr/bin/python

a = 21
b = 10
c = 0

if ( a == b ):
   print "Line 1 - a is equal to b"
else:
   print "Line 1 - a is not equal to b"

if ( a != b ):
   print "Line 2 - a is not equal to b"
else:
   print "Line 2 - a is equal to b"

if ( a <> b ):
   print "Line 3 - a is not equal to b"
else:
   print "Line 3 - a is equal to b"

if ( a < b ):
   print "Line 4 - a is less than b" 
else:
   print "Line 4 - a is not less than b"

if ( a > b ):
   print "Line 5 - a is greater than b"
else:
   print "Line 5 - a is not greater than b"

a = 5;
b = 20;
if ( a <= b ):
   print "Line 6 - a is either less than or equal to  b"
else:
   print "Line 6 - a is neither less than nor equal to  b"

if ( b >= a ):
   print "Line 7 - b is either greater than  or equal to b"
else:
   print "Line 7 - b is neither greater than  nor equal to b"

```
 以上实例输出结果：

 
```

Line 1 - a is not equal to b
Line 2 - a is not equal to b
Line 3 - a is not equal to b
Line 4 - a is not less than b
Line 5 - a is greater than b
Line 6 - a is either less than or equal to b
Line 7 - b is either greater than or equal to b 

```
 

#### <span id="ysf3" ></span>Python赋值运算符

 以下假设变量a为10，变量b为20：

 

|运算符|描述|实例|
|:--|:--|:--|
|=|简单的赋值运算符| c = a + b 将 a + b 的运算结果赋值为 c|
|+=|加法赋值运算符| c += a 等效于 c = c + a|
|-=|减法赋值运算符| c -= a 等效于 c = c - a|
|*=|乘法赋值运算符| c *= a 等效于 c = c * a|
|/=|除法赋值运算符| c /= a 等效于 c = c / a|
|%=|取模赋值运算符| c %= a 等效于 c = c % a|
|**=|幂赋值运算符| c **= a 等效于 c = c ** a|
|//=| 取整除赋值运算符| c //= a 等效于 c = c // a|

以下实例演示了Python所有赋值运算符的操作：

 
```

#!/usr/bin/python

a = 21
b = 10
c = 0

c = a + b
print "Line 1 - Value of c is ", c

c += a
print "Line 2 - Value of c is ", c 

c *= a
print "Line 3 - Value of c is ", c 

c /= a 
print "Line 4 - Value of c is ", c 

c  = 2
c %= a
print "Line 5 - Value of c is ", c

c **= a
print "Line 6 - Value of c is ", c

c //= a
print "Line 7 - Value of c is ", c

```
 以上实例输出结果：

 
```

Line 1 - Value of c is 31
Line 2 - Value of c is 52
Line 3 - Value of c is 1092
Line 4 - Value of c is 52
Line 5 - Value of c is 2
Line 6 - Value of c is 2097152
Line 7 - Value of c is 99864

```
 

#### <span id="ysf5" ></span>Python位运算符

  按位运算符是把数字看作二进制来进行计算的。Python中的按位运算法则如下：

 

|运算符|描述|实例|
|:--|:--|:--|
|&amp;| 按位与运算符| (a &amp; b) 输出结果 12 ，二进制解释： 0000 1100|
||| 按位或运算符| (a | b) 输出结果 61 ，二进制解释： 0011 1101|
|^| 按位异或运算符 | (a ^ b) 输出结果 49 ，二进制解释： 0011 0001|
|~| 按位取反运算符 | (~a ) 输出结果 -61 ，二进制解释： 1100 0011， 在一个有符号二进制数的补码形式。|
|<<|左移动运算符 | a << 2 输出结果 240 ，二进制解释： 1111 0000|
|>>| 右移动运算符| a >> 2 输出结果 15 ，二进制解释： 0000 1111|

以下实例演示了Python所有位运算符的操作：

 
```

#!/usr/bin/python

a = 60            # 60 = 0011 1100 
b = 13            # 13 = 0000 1101 
c = 0

c = a &amp; b;        # 12 = 0000 1100
print "Line 1 - Value of c is ", c

c = a | b;        # 61 = 0011 1101 
print "Line 2 - Value of c is ", c

c = a ^ b;        # 49 = 0011 0001
print "Line 3 - Value of c is ", c

c = ~a;           # -61 = 1100 0011
print "Line 4 - Value of c is ", c

c = a << 2;       # 240 = 1111 0000
print "Line 5 - Value of c is ", c

c = a >> 2;       # 15 = 0000 1111
print "Line 6 - Value of c is ", c

```
 以上实例输出结果：

 
```

Line 1 - Value of c is 12
Line 2 - Value of c is 61
Line 3 - Value of c is 49
Line 4 - Value of c is -61
Line 5 - Value of c is 240
Line 6 - Value of c is 15

```
 

#### <span id="ysf4" ></span>Python逻辑运算符

 Python语言支持逻辑运算符，以下假设变量a为10，变量b为20：

 

|运算符|描述|实例|
|:--|:--|:--|
|and| 布尔"与" - 如果x为False，x and y返回False，否则它返回y的计算值。| (a and b) 返回 true。|
|or|布尔"或" - 如果x是True，它返回True，否则它返回y的计算值。| (a or b) 返回 true。|
|not|布尔"非" - 如果x为True，返回False。如果x为False，它返回True。| not(a and b) 返回 false。 |

以下实例演示了Python所有逻辑运算符的操作：

 
```

#!/usr/bin/python

a = 10
b = 20
c = 0

if ( a and b ):
   print "Line 1 - a and b are true"
else:
   print "Line 1 - Either a is not true or b is not true"

if ( a or b ):
   print "Line 2 - Either a is true or b is true or both are true"
else:
   print "Line 2 - Neither a is true nor b is true"


a = 0
if ( a and b ):
   print "Line 3 - a and b are true"
else:
   print "Line 3 - Either a is not true or b is not true"

if ( a or b ):
   print "Line 4 - Either a is true or b is true or both are true"
else:
   print "Line 4 - Neither a is true nor b is true"

if not( a and b ):
   print "Line 5 - Either a is not true or b is  not true or both are not true"
else:
   print "Line 5 - a and b are true"

```
 以上实例输出结果：

 
```

Line 1 - a and b are true
Line 2 - Either a is true or b is true or both are true
Line 3 - Either a is not true or b is not true
Line 4 - Either a is true or b is true or both are true
Line 5 - Either a is not true or b is  not true or both are not true

```
 

#### <span id="ysf6" ></span>Python成员运算符

 除了以上的一些运算符之外，Python还支持成员运算符，测试实例中包含了一系列的成员，包括字符串，列表或元组。

 

|运算符|描述|实例|
|:--|:--|:--|
|in| 如果在指定的序列中找到值返回True，否则返回False。| x 在 y序列中 , 如果x在y序列中返回True。|
|not in|如果在指定的序列中没有找到值返回True，否则返回False。|x 不在 y序列中 , 如果x不在y序列中返回True。|

以下实例演示了Python所有成员运算符的操作：

 
```

#!/usr/bin/python

a = 10
b = 20
list = [1, 2, 3, 4, 5 ];

if ( a in list ):
   print "Line 1 - a is available in the given list"
else:
   print "Line 1 - a is not available in the given list"

if ( b not in list ):
   print "Line 2 - b is not available in the given list"
else:
   print "Line 2 - b is available in the given list"

a = 2
if ( a in list ):
   print "Line 3 - a is available in the given list"
else:
   print "Line 3 - a is not available in the given list"

```
 以上实例输出结果：

 
```

Line 1 - a is not available in the given list
Line 2 - b is not available in the given list
Line 3 - a is available in the given list

```
 

#### <span id="ysf7" ></span>Python身份运算符

  身份运算符用于比较两个对象的存储单元

 

|运算符|描述|实例|
|:--|:--|:--|
|is| is是判断两个标识符是不是引用自一个对象| x is y, 如果 id(x) 等于 id(y) , is 返回结果 1|
|is not|is not是判断两个标识符是不是引用自不同对象| x is not y, 如果 id(x) 不等于 id(y). is not 返回结果 1 |

以下实例演示了Python所有身份运算符的操作：

 
```

#!/usr/bin/python

a = 20
b = 20

if ( a is b ):
   print "Line 1 - a and b have same identity"
else:
   print "Line 1 - a and b do not have same identity"

if ( id(a) == id(b) ):
   print "Line 2 - a and b have same identity"
else:
   print "Line 2 - a and b do not have same identity"

b = 30
if ( a is b ):
   print "Line 3 - a and b have same identity"
else:
   print "Line 3 - a and b do not have same identity"

if ( a is not b ):
   print "Line 4 - a and b do not have same identity"
else:
   print "Line 4 - a and b have same identity"

```
 以上实例输出结果：

 
```

Line 1 - a and b have same identity
Line 2 - a and b have same identity
Line 3 - a and b do not have same identity
Line 4 - a and b do not have same identity 

```
 

#### <span id="ysf8" ></span>Python运算符优先级

 以下表格列出了从最高到最低优先级的所有运算符：

 

|运算符|描述|
|:--|:--|
|**|指数 (最高优先级)|
|~ + -|按位翻转, 一元加号和减号 (最后两个的方法名为 +@ 和 -@)|
|* / % //|乘，除，取模和取整除|
|+ -|加法减法|
|>> <<|右移，左移运算符|
|&amp;|位 'AND'|
|^ ||位运算符|
|<= < > >=|比较运算符|
|<> == !=|等于运算符|
|= %= /= //= -= += *= **=|赋值运算符|
|is is not|身份运算符|
|in not in|成员运算符|
|not or and|逻辑运算符|

以下实例演示了Python所有运算符优先级的操作：

 
```

#!/usr/bin/python

a = 20
b = 10
c = 15
d = 5
e = 0

e = (a + b) * c / d       #( 30 * 15 ) / 5
print "Value of (a + b) * c / d is ",  e

e = ((a + b) * c) / d     # (30 * 15 ) / 5
print "Value of ((a + b) * c) / d is ",  e

e = (a + b) * (c / d);    # (30) * (15/5)
print "Value of (a + b) * (c / d) is ",  e

e = a + (b * c) / d;      #  20 + (150/5)
print "Value of a + (b * c) / d is ",  e

```
 以上实例输出结果：

 
```

Value of (a + b) * c / d is 90
Value of ((a + b) * c) / d is 90
Value of (a + b) * (c / d) is 90
Value of a + (b * c) / d is 50

```
 

