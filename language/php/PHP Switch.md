 PHP Switch 语句 
switch 语句用于根据多个不同条件执行不同动作。

 

#### PHP Switch 语句

 如果您希望

#### 有选择地执行若干代码块之一

，请使用 switch 语句。

 
#### 语法

 
```
 switch (n)

 {

 case label1:

如果 n=label1，此处代码将执行;

 break;

 case label2:

如果 n=label2，此处代码将执行;

 break;

 default:

如果 n 既不等于 label1 也不等于 label2，此处代码将执行;

 } 




```
 工作原理：首先对一个简单的表达式 n（通常是变量）进行一次计算。将表达式的值与结构中每个 case 的值进行比较。如果存在匹配，则执行与 case 关联的代码。代码执行后，使用 break 来阻止代码跳入下一个 case 中继续执行。

#### default

 语句用于不存在匹配（即没有 case 为真）时执行。

  
#### 实例

 
```
 <?php

 $favcolor="red";

 switch ($favcolor)

 {

 case "red":

 echo "Your favorite color is red!";

 break;

 case "blue":

 echo "Your favorite color is blue!";

 break;

 case "green":

 echo "Your favorite color is green!";

 break;

 default:

 echo "Your favorite color is neither red, blue, or green!";

 }

 ?> 


```
 

[运行实例 »](http://www.w3cschool.cc/try/showphp.php?filename=demo_switch) 

 

