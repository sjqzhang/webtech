 PHP If...Else 语句 
条件语句用于根据不同条件执行不同动作。

 

#### PHP 条件语句

 当您编写代码时，您常常需要为不同的判断执行不同的动作。您可以在代码中使用条件语句来完成此任务。

 在 PHP 中，提供了下列条件语句：

 
 if 语句 - 在条件成立时执行代码
  if...else 语句 - 在条件成立时执行一块代码，条件不成立时执行另一块代码
  if...else if....else 语句 - 在若干条件之一成立时执行一个代码块
  switch 语句 - 在若干条件之一成立时执行一个代码块
 


#### PHP - if 语句

 if 语句用于

#### 仅当指定条件成立时执行代码

。

 
#### 语法

 
```
 if (条件)

 {

 条件成立时要执行的代码;

} 




```
 如果当前时间小于 20，下面的实例将输出 "Have a good day!"：

  
#### 实例

 
```
 <?php

 $t=date("H");

 if ($t<"20")

 {

 echo "Have a good day!";

 }

 ?> 


```
 

[运行实例 »](http://www.w3cschool.cc/try/showphp.php?filename=demo_if) 

 



#### PHP - if...else 语句

 

#### 在条件成立时执行一块代码，条件不成立时执行另一块代码

，请使用 if....else 语句。

 
#### 语法

 
```
 if (条件)

 {

条件成立时执行的代码;

 }

 else

 {

条件不成立时执行的代码;

} 




```
 如果当前时间小于 20，下面的实例将输出 "Have a good day!"，否则输出 "Have a good night!"：

  
#### 实例

 
```
 <?php

 $t=date("H");

 if ($t<"20")

 {

 echo "Have a good day!";

 }

 else

 {

 echo "Have a good night!";

 }

 ?> 


```
 

[运行实例 »](http://www.w3cschool.cc/try/showphp.php?filename=demo_if_else) 

 



#### PHP - if...else if....else 语句

 

#### 在若干条件之一成立时执行一个代码块

，请使用 if....else if...else 语句。.

 
#### 语法

 
```
 if (条件)

 {

if 条件成立时执行的代码;

}

 else if (条件)

 {

elseif 条件成立时执行的代码;

}

else

 {

条件不成立时执行的代码;

 } 




```
 如果当前时间小于 10，下面的实例将输出 "Have a good morning!"，如果当前时间不小于 10 且小于 20，则输出 "Have a good day!"，否则输出 "Have a good night!"：

  
#### 实例

 
```
 <?php

 $t=date("H");

 if ($t<"10")

 {

 echo "Have a good morning!";

 }

 else if ($t<"20")

 {

 echo "Have a good day!";

 }

else

 {

 echo "Have a good night!";

 }

 ?> 


```
 

[运行实例 »](http://www.w3cschool.cc/try/showphp.php?filename=demo_if_elseif) 

 



#### PHP - switch 语句

 switch 语句将在下一章进行讲解。

 

