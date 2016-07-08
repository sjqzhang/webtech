 JavaScript 函数参数  
JavaScript 函数对参数的值(arguments)没有进行任何的检查。

 

#### 函数显式参数与隐藏参数(arguments)

 在先前的教程中，我们已经学习了函数的显式参数:

  
```
 functionName(parameter1, parameter2, parameter3) {

     code to be executed

 } 


```
 

 函数显式参数在函数定义时列出。

 函数隐藏参数(arguments)在函数调用时传递给函数真正的值。

 

#### 参数规则

 JavaScript 函数定义时参数没有指定数据类型。

 JavaScript 函数对隐藏参数(arguments)没有进行检测。

 JavaScript 函数对隐藏参数(arguments)的个数没有进行检测。

 

#### 默认参数

 如果函数在调用时缺少参数，参数会默认设置为： 

#### undefined

 

 有时这是可以接受的，但是建议最好为参数设置一个默认值： 

  
#### 实例

 
```
 function myFunction(x, y) {

     if (y === undefined) {

           y = 0;

     } 

 } 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjs_function_undefined) 

 或者，更简单的方式：

  
#### 实例

 
```
 function myFunction(x, y) {

     y = y || 0;

 } 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjs_function_undefined2) 

  

 

| 如果y已经定义 ， y || 返回 y, 因为 y 是 true, 否则返回 0, 因为 undefined 为 false。|

如果函数调用时设置了过多的参数，参数将无法被引用，因为无法找到对应的参数名。 只能使用 arguments 对象来调用。

 

#### Arguments 对象

 JavaScript 函数有个内置的对象 arguments 对象.

  argument 对象包含了函数调用的参数数组。

 通过这种方式你可以很方便的找到最后一个参数的值：

  
#### 实例

 
```
 x = findMax(1, 123, 500, 115, 44, 88);



function findMax() {

     var i, max = 0;

     for (i = 0; i < arguments.length; i++) {

         if (arguments[i] > max) {

             max = arguments[i];

         }

     }

     return max;

 } 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjs_function_arguments) 

 或者创建一个函数用来统计所有数值的和：

  
#### 实例

 
```
 x = sumAll(1, 123, 500, 115, 44, 88);



 function sumAll() {

     var i, sum = 0;

     for (i = 0; i < arguments.length; i++) {

         sum += arguments[i];

     }

     return sum;

 } 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjs_function_arguments_sum) 

 



#### 通过值传递参数

 在函数中调用的参数是函数的参数。

 如果函数修改参数的值，将不会修改参数的初始值（在函数外定义）。

 函数参数的改变不会影响函数外部的变量（局部变量）。

 

#### 通过对象传递参数

 在JavaScript中，可以引用对象的值。

 因此我们在函数内部修改对象的属性就会修改其初始的值。

 修改对象属性可作用于函数外部（全局变量）。

 

