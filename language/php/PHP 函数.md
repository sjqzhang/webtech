 PHP 函数  
PHP 的真正威力源自于它的函数。

 在 PHP 中，提供了超过 1000 个内建的函数。

 

#### PHP 内建函数

 如需查看所有数组函数的完整参考手册和实例，请访问我们的 [PHP 参考手册](http://www.w3cschool.cc/php/php-tutorial.html)。

 

#### PHP 函数

 在本章中，我们将为您讲解如何创建自己的函数。

 如要在页面加载时执行脚本，您可以把它放到函数里。

 函数是通过调用函数来执行的。

 你可以在页面的任何位置调用函数。

 

#### 创建 PHP 函数

 函数是通过调用函数来执行的。

 
#### 语法

 
```
 function functionName()

 {

要执行的代码;

 } 




```
 PHP 函数准则：

 
函数的名称应该提示出它的功能
 函数名称以字母或下划线开头（不能以数字开头）
 

#### 实例

 一个简单的函数，在其被调用时能输出我的名称：

 
```
 <html>

 <body>



 <?php

 function writeName()

 {

 echo "Kai Jim Refsnes";

 }



 echo "My name is ";

 writeName();

 ?>



 </body>

 </html> 




```
 输出：

 
```
 My name is Kai Jim Refsnes 




```
 



#### PHP 函数 - 添加参数

 为了给函数添加更多的功能，我们可以添加参数。参数类似变量。

 参数就在函数名称后面有一个括号内指定。

 
#### 实例 1

 下面的实例将输出不同的名字，但姓是相同的：

 
```
 <html>

 <body>



 <?php

 function writeName($fname)

 {

 echo $fname . " Refsnes.<br>";

 }



 echo "My name is ";

 writeName("Kai Jim");

 echo "My sister's name is ";

 writeName("Hege");

 echo "My brother's name is ";

 writeName("Stale");

 ?>



 </body>

 </html> 




```
 输出：

 
```
 My name is Kai Jim Refsnes.

 My sister's name is Hege Refsnes.

 My brother's name is Stale Refsnes. 




```
 
#### 实例 2

 下面的函数有两个参数：

 
```
 <html>

 <body>



 <?php

 function writeName($fname,$punctuation)

 {

 echo $fname . " Refsnes" . $punctuation . "<br>";

 }



 echo "My name is ";

 writeName("Kai Jim",".");

 echo "My sister's name is ";

 writeName("Hege","!");

 echo "My brother's name is ";

 writeName("Ståle","?");

 ?>



 </body>

 </html> 




```
 输出：

 
```
 My name is Kai Jim Refsnes.

 My sister's name is Hege Refsnes!

 My brother's name is Ståle Refsnes? 




```
  

#### PHP 函数 - 返回值

 如需让函数返回一个值，请使用 return 语句。

 
#### 实例

 
```
 <html>

 <body>



 <?php

 function add($x,$y)

 {

 $total=$x+$y;

 return $total;

 }



 echo "1 + 16 = " . add(1,16);

 ?>



 </body>

 </html> 




```
 输出：

 
```
 1 + 16 = 17 




```
 

