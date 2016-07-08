 JavaScript Math（算数） 对象 
Math（算数）对象的作用是：执行常见的算数任务。

 
 ![http://www.w3cschool.cc/images/tryitimg.gif](http://www.w3cschool.cc/images/tryitimg.gif)
#### 在线实例

 

 [round()](http://www.w3cschool.cc/try/try.php?filename=tryjsref_round)

 如何使用 round()。

 [random()](http://www.w3cschool.cc/try/try.php?filename=tryjsref_random)

 如何使用 random() 来返回 0 到 1 之间的随机数。

 [max()](http://www.w3cschool.cc/try/try.php?filename=tryjsref_max)

 如何使用 max() 来返回两个给定的数中的较大的数。（在 ECMASCript v3 之前，该方法只有两个参数。）

 [min()](http://www.w3cschool.cc/try/try.php?filename=tryjsref_min)

 如何使用 min() 来返回两个给定的数中的较小的数。（在 ECMASCript v3 之前，该方法只有两个参数。）

 

#### 完整的 Math 对象参考手册

 我们提供 [JavaScript Math 对象的参考手册](http://www.w3cschool.cc/jsref/jsref-obj-math.html)，其中包括所有可用于算术对象的属性和方法。

 该手册包含了对每个属性和方法的详细描述以及相关实例。

 

#### Math 对象

 Math（算数）对象的作用是：执行普通的算数任务。 

 Math 对象提供多种算数值类型和函数。无需在使用这个对象之前对它进行定义。

 使用Math的属性/方法的语法：

 
```
 var x=Math.PI;

 var y=Math.sqrt(16);




```
 注意： Math对象无需在使用这个对象之前对它进行定义。

 

#### 算数值

 JavaScript 提供 8 种可被 Math 对象访问的算数值：

 你可以参考如下Javascript常量使用方法：

 
```
 Math.E

 Math.PI

 Math.SQRT2

 Math.SQRT1_2

 Math.LN2

 Math.LN10

 Math.LOG2E

 Math.LOG10E




```
 



#### 算数方法

 除了可被 Math 对象访问的算数值以外，还有几个函数（方法）可以使用。

 下面的例子使用了 Math 对象的 round 方法对一个数进行四舍五入。

 
```
 document.write(Math.round(4.7));




```
 上面的代码输出为：

 
```
 5




```
 下面的例子使用了 Math 对象的 random() 方法来返回一个介于 0 和 1 之间的随机数：

 
```
 document.write(Math.random());




```
 上面的代码输出为：

 
```
 





```
 下面的例子使用了 Math 对象的 floor() 方法和 random() 来返回一个介于 0 和 10 之间的随机数：

 
```
 document.write(Math.floor(Math.random()*11));




```
 上面的代码输出为：

 
```
 





```
 

