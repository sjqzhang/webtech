 PHP 循环 - For 循环  
循环执行代码块指定的次数，或者当指定的条件为真时循环执行代码块。

 

#### for 循环

 for 循环用于您预先知道脚本需要运行的次数的情况。

 
#### 语法

 
```
 for (初始值; 条件; 增量)

 {

要执行的代码;

 } 




```
 参数：

 
 初始值：主要是初始化一个变量值，用于设置一个计数器（但可以是任何在循环的开始被执行一次的代码）。
  条件：循环执行的限制条件。如果为 TRUE，则循环继续。如果为 FALSE，则循环结束。
  增量：主要用于递增计数器（但可以是任何在循环的结束被执行的代码）。
 
注释：上面的初始值和增量参数可为空，或者有多个表达式（用逗号分隔）。

 
#### 实例

 下面的实例定义一个初始值为 i=1 的循环。只要变量 i 小于或者等于 5，循环将继续运行。循环每运行一次，变量 i 就会递增 1：

 
```
 <html>

 <body>



 <?php

 for ($i=1; $i<=5; $i++)

 {

 echo "The number is " . $i . "<br>";

 }

 ?>



 </body>

 </html> 




```
 输出：

 
```
 The number is 1

 The number is 2

 The number is 3

 The number is 4

 The number is 5 




```
 



#### foreach 循环

 foreach 循环用于遍历数组。

 
#### Syntax

 
```
 foreach ($array as $value)

 {

要执行代码;

 } 




```
 每进行一次循环，当前数组元素的值就会被赋值给 $value 变量（数组指针会逐一地移动），在进行下一次循环时，您将看到数组中的下一个值。

 
#### 实例

 下面的实例演示了一个输出给定数组的值的循环：

 
```
 <html>

 <body>



 <?php

 $x=array("one","two","three");

 foreach ($x as $value)

 {

 echo $value . "<br>";

 }

 ?>



 </body>

 </html> 




```
 输出：

 
```
 one

 two

 three 




```
 

