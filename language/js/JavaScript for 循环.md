 JavaScript for 循环  
循环可以将代码块执行指定的次数。

 

#### JavaScript 循环

 如果您希望一遍又一遍地运行相同的代码，并且每次的值都不同，那么使用循环是很方便的。

 我们可以这样输出数组的值：

  
#### 一般写法：

 
```
 document.write(cars[0] + "<br>"); 

document.write(cars[1] + "<br>"); 

 document.write(cars[2] + "<br>"); 

document.write(cars[3] + "<br>"); 

 document.write(cars[4] + "<br>"); 

document.write(cars[5] + "<br>"); 


```
 


#### 使用for循环

 
```
 for (var i=0;i<cars.length;i++)

{ 

document.write(cars[i] + "<br>");

 }


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjs_loop_for) 

 



#### 不同类型的循环

 JavaScript 支持不同类型的循环：

 



#### for

 - 循环代码块一定的次数
 


#### for/in

 - 循环遍历对象的属性
 


#### while

 - 当指定的条件为 true 时循环指定的代码块
 


#### do/while

 - 同样当指定的条件为 true 时循环指定的代码块
 


#### For 循环

 for 循环是您在希望创建循环时常会用到的工具。 

 下面是 for 循环的语法：

 
```
 for (语句 1; 语句 2; 语句 3)

   {

  被执行的代码块

   }







```
 

#### 语句 1

 （代码块）开始前执行 starts.

 

#### 语句 2

 定义运行循环（代码块）的条件

 

#### 语句 3

 在循环（代码块）已被执行之后执行

  
#### 实例

 
```
 for (var i=0; i<5; i++)

   {

   x=x + "The number is " + i + "<br>";

   }





```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjs_loop_for_ex) 

 从上面的例子中，您可以看到：

 Statement 1 在循环开始之前设置变量 (var i=0)。

 Statement 2 定义循环运行的条件（i 必须小于 5）。

 Statement 3 在每次代码块已被执行后增加一个值 (i++)。

 

#### 语句 1

 通常我们会使用语句 1 初始化循环中所用的变量 (var i=0)。

 语句 1 是可选的，也就是说不使用语句 1 也可以。

 您可以在语句 1 中初始化任意（或者多个）值：

  
#### 实例:

 
```
 for (var i=0,len=cars.length; i<len; i++)

{ 

document.write(cars[i] + "<br>");

 }


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjs_loop_for_om1) 

 同时您还可以省略语句 1（比如在循环开始前已经设置了值时）：

  
#### 实例:

 
```
 var i=2,len=cars.length;

for (; i<len; i++)

{ 

document.write(cars[i] + "<br>");

 }


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjs_loop_for_om2) 

 



#### 语句 2

 通常语句 2 用于评估初始变量的条件。

 语句 2 同样是可选的。

 如果语句 2 返回 true，则循环再次开始，如果返回 false，则循环将结束。

 

|  如果您省略了语句 2，那么必须在循环内提供 break。否则循环就无法停下来。这样有可能令浏览器崩溃。请在本教程稍后的章节阅读有关 break 的内容。 |





#### 语句 3

 通常语句 3 会增加初始变量的值。

 语句 3 也是可选的。

 语句 3 有多种用法。增量可以是负数 (i--)，或者更大 (i=i+15)。

 语句 3 也可以省略（比如当循环内部有相应的代码时）：

  
#### 实例:

 
```
 var i=0,len=cars.length;

for (; i<len; )

{ 

document.write(cars[i] + "<br>");

 i++;

}


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjs_loop_for_om3) 

 



#### For/In 循环

 JavaScript for/in 语句循环遍历对象的属性：

  
#### 实例

 
```
 var person={fname:"John",lname:"Doe",age:25}; 



 for (x in person)

   {

   txt=txt + person[x];

   }


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjs_object_for_in) 

 您将在有关 JavaScript 对象的章节学到更多有关 for / in 循环的知识。

 

#### While 循环

 我们将在下一章为您讲解 while 循环和 do/while 循环。

 

