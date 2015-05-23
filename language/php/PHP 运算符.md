 PHP 运算符  
本章节我们将讨论 PHP 中不同运算符的应用。

 在 PHP 中，赋值运算符 = 用于给变量赋值。

 在 PHP 中，算术运算符 + 用于把值加在一起。

 

#### PHP 算术运算符

 

|运算符|名称|描述|实例|结果|
|:--|:--|:--|:--|:--|
|x + y|加|x 和 y 的和|2 + 2|4|
|x - y|减|x 和 y 的差|5 - 2|3|
|x * y|乘|x 和 y 的积|5 * 2|10|
|x / y|除|x 和 y 的商|15 / 5|3|
|x % y|模（除法的余数）|x 除以 y 的余数|5 % 210 % 810 % 2|120|
|- x|取反|x 取反|- 2| |
|a . b |并置|连接两个字符串|"Hi" . "Ha"|HiHa|

以下实例演示了使用不同算术运算符得到的不同结果：

  
#### 实例

 
```
 <?php 

$x=10; 

$y=6;

echo ($x + $y); // 输出16

echo ($x - $y); // 输出4

echo ($x * $y); // 输出60

echo ($x / $y); // 输出1.6666666666667 

echo ($x % $y); // 输出4 

?>


```
 

[尝试一下 »](http://www.w3cschool.cc/try/showphp.php?filename=demo_operator_arithmetic) 




#### PHP 赋值运算符

 在 PHP 中，基本的赋值运算符是 "="。它意味着左操作数被设置为右侧表达式的值。也就是说，"$x = 5" 的值是 5。

 

|运算符|等同于|描述|
|:--|:--|:--|
|x = y|x = y|左操作数被设置为右侧表达式的值|
|x += y|x = x + y|加|
|x -= y|x = x - y|减|
|x *= y|x = x * y|乘|
|x /= y|x = x / y|除|
|x %= y|x = x % y|模（除法的余数）|
|a .= b|a = a . b|连接两个字符串|

以下实例演示了使用不同赋值运算符得到的不同结果：

  
#### 实例

 
```
 <?php 

$x=10; 

echo $x; // 输出10



$y=20; 

$y += 100;

 echo $y; // 输出120



$z=50;

$z -= 25;

echo $z; // 输出25



$i=5;

$i *= 6;

echo $i; // 输出30



$j=10;

$j /= 5;

 echo $j; // 输出2



$k=15;

$k %= 4;

echo $k; // 输出3

 ?>


```
 

[尝试一下 »](http://www.w3cschool.cc/try/showphp.php?filename=demo_operator_assignment) 

 以下实例演示了使用不同字符串运算符得到的不同结果：

  
#### 实例

 
```
 <?php

$a = "Hello";

$b = $a . " world!";

echo $b; // 输出Hello world! 



$x="Hello";

$x .= " world!";

echo $x; // 输出Hello world! 

?>


```
 

[尝试一下 »](http://www.w3cschool.cc/try/showphp.php?filename=demo_operator_string) 

 

#### PHP 递增/递减运算符

 

|运算符|名称|描述|
|:--|:--|:--|
|++ x|预递增|x 加 1，然后返回 x|
|x ++|后递增|返回 x，然后 x 加 1|
|-- x|预递减|x 减 1，然后返回 x|
|x --|后递减|返回 x，然后 x 减 1|

以下实例演示了使用递增/递减运算符得到的结果：

  
#### 实例

 
```
 <?php

$x=10; 

echo ++$x; // 输出11



$y=10; 

echo $y++; // 输出10



$z=5;

echo --$z; // 输出4



$i=5;

echo $i--; // 输出5

?>


```
 

[尝试一下 »](http://www.w3cschool.cc/try/showphp.php?filename=demo_operator_increment) 

 

#### PHP 比较运算符

 比较操作符可以让您比较两个值：

 

|运算符|名称|描述|实例|
|:--|:--|:--|:--|
|x == y|等于|如果 x 等于 y，则返回 true|5==8 返回 false|
|x === y|恒等于|如果 x 等于 y，且它们类型相同，则返回 true|5==="5" 返回 false|
|x != y|不等于|如果 x 不等于 y，则返回 true|5!=8 返回 true|
|x <> y|不等于|如果 x 不等于 y，则返回 true|5<>8 返回 true|
|x !== y|不恒等于|如果 x 不等于 y，或它们类型不相同，则返回 true|5!=="5" 返回 true|
|x > y|大于|如果 x 大于 y，则返回 true|5>8 返回 false|
|x < y|小于|如果 x 小于 y，则返回 true|5<8 返回 true|
|x >= y|大于等于|如果 x 大于或者等于 y，则返回 true|5>=8 返回 false|
|x <= y|小于等于|如果 x 小于或者等于 y，则返回 true|5<=8 返回 true|

以下实例演示了使用一些比较运算符得到的不同结果：

  
#### 实例

 
```
 <?php

$x=100; 

$y="100";



var_dump($x == $y);

 echo "<br>";

var_dump($x === $y);

echo "<br>";

var_dump($x != $y);

echo "<br>";

var_dump($x !== $y);

echo "<br>";



$a=50;

$b=90;



var_dump($a > $b);

echo "<br>";

var_dump($a < $b);

?>


```
 

[尝试一下 »](http://www.w3cschool.cc/try/showphp.php?filename=demo_operator_comparison) 

 

#### PHP 逻辑运算符

 

|运算符|名称|描述|实例|
|:--|:--|:--|:--|
|x and y|与|如果 x 和 y 都为 true，则返回 true| x=6y=3  (x < 10 and y > 1) 返回 true|
|x or y|或|如果 x 和 y 至少有一个为 true，则返回 true| x=6y=3  (x==6 or y==5) 返回 true|
|x xor y|异或|如果 x 和 y 有且仅有一个为 true，则返回 true| x=6y=3  (x==6 xor y==3) 返回 false|
|x &amp;&amp; y|与|如果 x 和 y 都为 true，则返回 true| x=6y=3 (x < 10 &amp;&amp; y > 1) 返回 true|
|x || y|或|如果 x 和 y 至少有一个为 true，则返回 true| x=6y=3 (x==5 || y==5) 返回 false|
|! x|非|如果 x 不为 true，则返回 true| x=6y=3 !(x==y) 返回 true|



#### PHP 数组运算符

 

|运算符|名称|描述|
|:--|:--|:--|
|x + y|集合|x 和 y 的集合|
|x == y|相等|如果 x 和 y 具有相同的键/值对，则返回 true|
|x === y|恒等|如果 x 和 y 具有相同的键/值对，且顺序相同类型相同，则返回 true|
|x != y|不相等|如果 x 不等于 y，则返回 true|
|x <> y|不相等|如果 x 不等于 y，则返回 true|
|x !== y|不恒等|如果 x 不等于 y，则返回 true|

以下实例演示了使用一些数组运算符得到的不同结果：

  
#### 实例

 
```
 <?php

$x = array("a" => "red", "b" => "green"); 

$y = array("c" => "blue", "d" => "yellow"); 

$z = $x + $y; // $x 和 $y 数组合并

var_dump($z);

var_dump($x == $y);

var_dump($x === $y);

 var_dump($x != $y);

var_dump($x <> $y);

var_dump($x !== $y);

?>


```
 

[尝试一下 »](http://www.w3cschool.cc/try/showphp.php?filename=demo_operator_array) 

 

