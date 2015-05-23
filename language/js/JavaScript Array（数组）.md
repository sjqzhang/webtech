 JavaScript Array（数组） 对象 
数组对象的作用是：使用单独的变量名来存储一系列的值。

 
 ![http://www.w3cschool.cc/images/tryitimg.gif](http://www.w3cschool.cc/images/tryitimg.gif)
#### 在线实例

 

 创建数组, 为其赋值：

  
#### 实例

 
```
 var mycars = new Array();

 mycars[0] = "Saab";

 mycars[1] = "Volvo";

 mycars[2] = "BMW";


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjs_array) 

 页面底部你可以找到更多的实例。

 

#### 什么是数组?

 数组对象是使用单独的变量名来存储一系列的值。

 如果你有一组数据（例如：车名字），存在单独变量如下所示：

 
```
 var car1="Saab";

 var car2="Volvo";

 var car3="BMW"; 




```
 然而，如果你想从中找出某一辆车？并且不是3辆，而是300辆呢？这将不是一件容易的事！

 最好的方法就是用数组。

 数组可以用一个变量名存储所有的值，并且可以用变量名访问任何一个值。

 数组中的每个元素都有自己的的ID，以便它可以很容易地被访问到。

 

#### 创建一个数组

 创建一个数组，有三种方法。 

 下面的代码定义了一个名为 myCars的数组对象：

 1: 常规方式:

 
```
 var myCars=new Array(); 

 myCars[0]="Saab";       

 myCars[1]="Volvo";

 myCars[2]="BMW";




```
 2: 简洁方式:

 
```
 var myCars=new Array("Saab","Volvo","BMW");




```
 3: 字面:

 
```
 var myCars=["Saab","Volvo","BMW"];




```
 



#### 访问数组

 通过指定数组名以及索引号码，你可以访问某个特定的元素。

 以下实例可以访问myCars数组的第一个值：

 
```
  var name=myCars[0];

 


```
 以下实例修改了数组 myCars 的第一个元素:

 
```
 myCars[0]="Opel";




```
 



|  [0] 是数组的第一个元素。[1] 是数组的第二个元素。|





#### 在一个数组中你可以有不同的对象

 所有的JavaScript变量都是对象。数组元素是对象。函数是对象。

 因此，你可以在数组中有不同的变量类型。

 你可以在一个数组中包含对象元素、函数、数组：

 
```
  myArray[0]=Date.now;

 myArray[1]=myFunction;

 myArray[2]=myCars;

 


```
 



#### 数组方法和属性

 使用数组对象预定义属性和方法：

 
```
  var x=myCars.length             // the number of elements in myCars

 var y=myCars.indexOf("Volvo")   // the index position of "Volvo"

 


```
 



#### 完整的数组对象参考手册

 你可以参考本站关于数组的所有属性和方法的完整参考手册。

 参考手册包含了所有属性和方法的描述（和更多的例子）。

 [完整数组对象参考手册](http://www.w3cschool.cc/js/jsref-obj-array.html)

 

#### 创建新方法

 原型是JavaScript全局构造函数。它可以构建新Javascript对象的属性和方法。

  
#### 实例：创建一个新的方法。

 
```
 Array.prototype.ucase=function()

 {

   for (i=0;i<this.length;i++)

   {this[i]=this[i].toUpperCase();}

 }


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjs_prototype_array) 

 上面的例子创建了新的数组方法用于将数组小写字符转为大写字符。

 
 ![http://www.w3cschool.cc/images/tryitimg.gif](http://www.w3cschool.cc/images/tryitimg.gif)
#### 更多实例

 

 [合并两个数组 - concat()](http://www.w3cschool.cc/try/try.php?filename=tryjsref_concat)

 [合并三个数组 - concat()](http://www.w3cschool.cc/try/try.php?filename=tryjsref_concat2)

 [用数组的元素组成字符串 - join()](http://www.w3cschool.cc/try/try.php?filename=tryjsref_join)

 [删除数组的最后一个元素 - pop()](http://www.w3cschool.cc/try/try.php?filename=tryjsref_pop)

 [数组的末尾添加新的元素 - push()](http://www.w3cschool.cc/try/try.php?filename=tryjsref_push)

 [将一个数组中的元素的顺序反转排序 - reverse()](http://www.w3cschool.cc/try/try.php?filename=tryjsref_reverse)

 [删除数组的第一个元素 - shift()](http://www.w3cschool.cc/try/try.php?filename=tryjsref_shift)

 [从一个数组中选择元素 - slice()](http://www.w3cschool.cc/try/try.php?filename=tryjsref_slice_array)

 [数组排序（按字母顺序升序）- sort()](http://www.w3cschool.cc/try/try.php?filename=tryjsref_sort)

 [数字排序（按数字顺序升序）- sort()](http://www.w3cschool.cc/try/try.php?filename=tryjsref_sort2)

 [数字排序（按数字顺序降序）- sort()](http://www.w3cschool.cc/try/try.php?filename=tryjsref_sort3)

 [在数组的第2位置添加一个元素 - splice()](http://www.w3cschool.cc/try/try.php?filename=tryjsref_splice)

 [转换数组到字符串 -toString()](http://www.w3cschool.cc/try/try.php?filename=tryjsref_tostring_array)

 [在数组的开头添加新元素 - unshift()](http://www.w3cschool.cc/try/try.php?filename=tryjsref_unshift)

 

