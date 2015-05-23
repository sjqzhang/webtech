 PHP 循环 - While 循环  
循环执行代码块指定的次数，或者当指定的条件为真时循环执行代码块。

 

#### PHP 循环

 在您编写代码时，您经常需要让相同的代码块一次又一次地重复运行。我们可以在代码中使用循环语句来完成这个任务。

 在 PHP 中，提供了下列循环语句：

 
 while - 只要指定的条件成立，则循环执行代码块
  do...while - 首先执行一次代码块，然后在指定的条件成立时重复这个循环
  for - 循环执行代码块指定的次数
  foreach - 根据数组中每个元素来循环代码块
 


#### while 循环

 while 循环将重复执行代码块，直到指定的条件不成立。

 
#### 语法

 
```
 while (条件)

 {

要执行的代码;

 } 




```
 
#### 实例

 下面的实例首先设置变量 i 的值为 1 ($i=1;)。

 然后，只要 i 小于或者等于 5，while 循环将继续运行。循环每运行一次，i 就会递增 1：

 
```
 <html>

 <body>



 <?php

 $i=1;

 while($i<=5)

 {

 echo "The number is " . $i . "<br>";

 $i++;

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
 



#### do...while 语句

 do...while 语句会至少执行一次代码，然后检查条件，只要条件成立，就会重复进行循环。

 
#### 语法

 
```
 do

 {

要执行的代码;

}

 while (条件); 




```
 
#### 实例

 下面的实例首先设置变量 i 的值为 1 ($i=1;)。

 然后，开始 do...while 循环。循环将变量 i 的值递增 1，然后输出。先检查条件（i 小于或者等于 5），只要 i 小于或者等于 5，循环将继续运行：

 
```
 <html>

 <body>



 <?php

 $i=1;

 do

 {

 $i++;

 echo "The number is " . $i . "<br>";

 }

 while ($i<=5);

 ?>



 </body>

 </html> 




```
 输出：

 
```
 The number is 2

 The number is 3

 The number is 4

 The number is 5

 The number is 6 




```
 for 循环和 foreach 循环将在下一章进行讲解。

 

