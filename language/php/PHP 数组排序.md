 PHP 数组排序  
数组中的元素可以按字母或数字顺序进行降序或升序排列。

 

#### PHP - 数组排序函数

 在本章中，我们将一一介绍下列 PHP 数组排序函数：

 
sort() - 对数组进行升序排列
 rsort() - 对数组进行降序排列
 asort() - 根据关联数组的值，对数组进行升序排列
 ksort() - 根据关联数组的键，对数组进行升序排列
 arsort() - 根据关联数组的值，对数组进行降序排列
 krsort() - 根据关联数组的键，对数组进行降序排列
 


#### sort() - 对数组进行升序排列

 下面的实例将 $cars 数组中的元素按照字母升序排列：

  
#### 实例

 
```
 <?php

 $cars=array("Volvo","BMW","Toyota");

sort($cars);

?> 


```
 

[运行实例 »](http://www.w3cschool.cc/try/showphp.php?filename=demo_array_sort_alpha) 

 下面的实例将 $numbers 数组中的元素按照数字升序排列：

  
#### 实例

 
```
 <?php

 $numbers=array(4,6,2,22,11);

sort($numbers);

?> 


```
 

[运行实例 »](http://www.w3cschool.cc/try/showphp.php?filename=demo_array_sort_num) 

 



#### rsort() - 对数组进行降序排列

 下面的实例将 $cars 数组中的元素按照字母降序排列：

  
#### 实例

 
```
 <?php

 $cars=array("Volvo","BMW","Toyota");

rsort($cars);

?> 


```
 

[运行实例 »](http://www.w3cschool.cc/try/showphp.php?filename=demo_array_rsort_alpha) 

 下面的实例将 $numbers 数组中的元素按照数字降序排列：

  
#### 实例

 
```
 <?php

 $numbers=array(4,6,2,22,11);

rsort($numbers);

?> 


```
 

[运行实例 »](http://www.w3cschool.cc/try/showphp.php?filename=demo_array_rsort_num) 

 



#### asort() - 根据数组的值，对数组进行升序排列

 下面的实例根据数组的值，对关联数组进行升序排列：

  
#### 实例

 
```
 <?php

 $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

 asort($age);

?> 


```
 

[运行实例 »](http://www.w3cschool.cc/try/showphp.php?filename=demo_array_asort) 

 



#### ksort() - 根据数组的键，对数组进行升序排列

 下面的实例根据数组的键，对关联数组进行升序排列：

  
#### 实例

 
```
 <?php

 $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

 ksort($age);

?> 


```
 

[运行实例 »](http://www.w3cschool.cc/try/showphp.php?filename=demo_array_ksort) 

 



#### arsort() - 根据数组的值，对数组进行降序排列

 下面的实例根据数组的值，对关联数组进行降序排列：

  
#### 实例

 
```
 <?php

 $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

 arsort($age);

?> 


```
 

[运行实例 »](http://www.w3cschool.cc/try/showphp.php?filename=demo_array_arsort) 

 



#### krsort() - 根据数组的键，对数组进行降序排列

 下面的实例根据数组的键，对关联数组进行降序排列：

  
#### 实例

 
```
 <?php

 $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

 krsort($age);

?> 


```
 

[运行实例 »](http://www.w3cschool.cc/try/showphp.php?filename=demo_array_krsort) 

 



#### 完整的 PHP Array 参考手册

 如需查看所有数组函数的完整参考手册，请访问我们的 [PHP Array 参考手册](http://www.w3cschool.cc/php/php-ref-array.html)。

 该参考手册提供了每个函数的简要描述和应用实例！

 

