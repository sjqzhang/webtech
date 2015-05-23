 PHP 5 常量  
常量值被定义后，在脚本的其他任何地方都不能被改变。

 

#### PHP 常量

 常量是一个简单值的标识符。该值在脚本中不能改变。

 一个常量由英文字母、下划线、和数字组成,但数字不能作为首字母出现。 (常量名不需要加 $ 修饰符)。

 

#### 注意：

 常量在整个脚本中都可以使用。

 

#### 设置 PHP 常量

 设置常量，使用 define() 函数，函数语法如下：

 
```
  define(string constant_name, mixed value, case_sensitive = true)

 


```
 该函数有三个参数: 

 
 nstant_name：必选参数，常量名称，即标志符。

 value：必选参数，常量的值。

 case_sensitive：可选参数，指定是否大小写敏感，设定为 true 表示不敏感。


以下实例我们创建一个 

#### 区分大小写的常量

, 常量值为 "Welcome to W3CSchool.cc!"：

  
#### 实例

 
```
 <?php

 define("GREETING", "Welcome to W3CSchool.cc!");

echo GREETING;

?> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/showphp.php?filename=demo_constant1) 

 以下实例我们创建一个 

#### 不区分大小写的常量

, 常量值为 "Welcome to W3CSchool.cc!"：

  
#### 实例

 
```
 <?php

 define("GREETING", "Welcome to W3CSchool.cc!", true);

echo greeting;

?> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/showphp.php?filename=demo_constant2) 

 

