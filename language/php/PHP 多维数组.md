 PHP 多维数组  
一个数组中的值可以是另一个数组，另一个数组的值也可以是一个数组。依照这种方式，我们可以创建二维或者三维数组：

  
#### 实例

 
```php
 <?php

// A two-dimensional array:

$cars = array

 (

 array("Volvo",100,96),

 array("BMW",60,59),

 array("Toyota",110,100)

 );

?>


```
 

[运行实例 »](http://www.w3cschool.cc/try/showphp.php?filename=demo_array_multi) 

 

#### PHP - 多维数组

 多维数组是包含一个或多个数组的数组。

 在多维数组中，主数组中的每一个元素也可以是一个数组，子数组中的每一个元素也可以是一个数组。

 
#### 实例

 在这个实例中，我们创建了一个自动分配 ID 键的多维数组：

 
```php
 $families = array

 (

 "Griffin"=>array

 (

 "Peter",

 "Lois",

 "Megan"

 ),

 "Quagmire"=>array

 (

 "Glenn"

 ),

 "Brown"=>array

 (

 "Cleveland",

 "Loretta",

 "Junior"

 )

 ); 




```
 上面的数组将输出如下：

 
```
 Array

 (

 [Griffin] => Array

 (

 [0] => Peter

 [1] => Lois

 [2] => Megan

 )

 [Quagmire] => Array

 (

 [0] => Glenn

 )

 [Brown] => Array

 (

 [0] => Cleveland

 [1] => Loretta

 [2] => Junior

 )

 ) 




```
 
#### 实例 2

 让我们试着显示上面数组中的某个值：

 
```
 echo "Is " . $families['Griffin'][2] . 

 " a part of the Griffin family?"; 




```
 上面的代码将输出：

 
```
 Is Megan a part of the Griffin family? 




```
 

