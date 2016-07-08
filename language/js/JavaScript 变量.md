 JavaScript  变量  
变量是用于存储信息的"容器"。

  
#### 实例

 
```
 var x=5;

var y=6;

 var z=x+y;





```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjs_data1) 

 



#### 就像代数那样

 x=5

 y=6

 z=x+y

 在代数中，我们使用字母（比如 x）来保存值（比如 5）。

 通过上面的表达式 z=x+y，我们能够计算出 z 的值为 11。

 在 JavaScript 中，这些字母被称为变量。 

 

|  您可以把变量看做存储数据的容器。 |





#### JavaScript 变量

 与代数一样，JavaScript 变量可用于存放值（比如 x=5）和表达式（比如 z=x+y）。

 变量可以使用短名称（比如 x 和 y），也可以使用描述性更好的名称（比如 age, sum, totalvolume）。

 
变量必须以字母开头
 变量也能以 $ 和 _ 符号开头（不过我们不推荐这么做）
 变量名称对大小写敏感（y 和 Y 是不同的变量）
 


|  JavaScript 语句和 JavaScript 变量都对大小写敏感。 |





#### JavaScript 数据类型

 JavaScript 变量还能保存其他数据类型，比如文本值 (name="Bill Gates")。

 在 JavaScript 中，类似 "Bill Gates" 这样一条文本被称为字符串。

 JavaScript 变量有很多种类型，但是现在，我们只关注数字和字符串。

 当您向变量分配文本值时，应该用双引号或单引号包围这个值。

 当您向变量赋的值是数值时，不要使用引号。如果您用引号包围数值，该值会被作为文本来处理。

  
#### 实例

 
```
 var pi=3.14;

var person="John Doe";

var answer='Yes I am!';





```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjs_data2) 

 



#### 声明（创建） JavaScript 变量

 在 JavaScript 中创建变量通常称为"声明"变量。 

 我们使用 var 关键词来声明变量：

 
```
  var carname; 

 


```
 变量声明之后，该变量是空的（它没有值）。 

 如需向变量赋值，请使用等号：

 
```
  carname="Volvo"; 

 


```
 不过，您也可以在声明变量时对其赋值：

 
```
 var carname="Volvo";




```
 在下面的例子中，我们创建了名为 carname 的变量，并向其赋值 "Volvo"，然后把它放入 id="demo" 的 HTML 段落中： 

  
#### 实例

 
```
 <p id="demo"></p>

 var carname="Volvo";

 document.getElementById("demo").innerHTML=carname; 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjs_variables1) 

 



| 一个好的编程习惯是，在代码开始处，统一对需要的变量进行声明。 |





#### 一条语句，多个变量

 您可以在一条语句中声明很多变量。该语句以 var 开头，并使用逗号分隔变量即可：

 
```
  var lastname="Doe", age=30, job="carpenter"; 

 


```
 声明也可横跨多行： 

 
```
  var lastname="Doe",

 age=30,

 job="carpenter"; 

 


```
 



#### Value = undefined

 在计算机程序中，经常会声明无值的变量。未使用值来声明的变量，其值实际上是 undefined。

 在执行过以下语句后，变量 carname 的值将是 undefined：

 
```
  var carname;

 


```
 



#### 重新声明 JavaScript 变量

 如果重新声明 JavaScript 变量，该变量的值不会丢失：

 在以下两条语句执行后，变量 carname 的值依然是 "Volvo"：

 
```
  var carname="Volvo"; 

 var carname;

 


```
 



#### JavaScript 算数

 您可以通过 JavaScript 变量来做算数，使用的是 = 和 + 这类运算符：

  
#### 实例

 
```
 y=5;

 x=y+2; 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjs_oper_add) 

 您将在本教程稍后的章节学到更多有关 JavaScript 运算符的知识。

 

