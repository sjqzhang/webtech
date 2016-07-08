 AngularJS 表达式  
AngularJS 使用 

#### 表达式

 把数据绑定到 HTML。

 

#### AngularJS 表达式

 AngularJS 表达式写在双大括号内：

#### {{ expression }}

。

 AngularJS 表达式把数据绑定到 HTML，这与 

#### ng-bind

 指令有异曲同工之妙。

 AngularJS 将在表达式书写的位置"输出"数据。

 

#### AngularJS 表达式

 很像 

#### JavaScript 表达式

：它们可以包含文字、运算符和变量。

 实例 {{ 5 + 5 }} 或 {{ firstName + " " + lastName }}

 

#### AngularJS 数字

 AngularJS 数据就像 JavaScript 数字：

  
#### AngularJS 实例

 
```
 <div ng-app="" ng-init="quantity=1;cost=5">



 <p>总价： {{ quantity * cost }}</p>



 </div> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=try_ng_expressions) 

 使用 ng-bind 的相同实例：

  
#### AngularJS 实例

 
```
 <div ng-app="" ng-init="quantity=1;cost=5">



 <p>总价： <span ng-bind="quantity * cost"></span></p>



 </div> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=try_ng_bind_numbers) 

  

 

|  使用 ng-init 不是很常见。您将在控制器一章中学习到一个更好的初始化数据的方式。|



#### AngularJS 字符串

 AngularJS 字符串就像 JavaScript 字符串：

  
#### AngularJS 实例

 
```
 <div ng-app="" ng-init="firstName='John';lastName='Doe'">



<p>姓名： {{ firstName + " " + lastName }}</p>



</div> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=try_ng_expressions_strings) 

 使用 ng-bind 的相同实例：

  
#### AngularJS 实例

 
```
 <div ng-app="" ng-init="firstName='John';lastName='Doe'">



 <p>姓名： <span ng-bind="firstName + ' ' + lastName"></span></p>



</div> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=try_ng_bind_strings) 

 



#### AngularJS 对象

 AngularJS 对象就像 JavaScript 对象：

  
#### AngularJS 实例

 
```
 <div ng-app="" ng-init="person={firstName:'John',lastName:'Doe'}">



 <p>姓为 {{ person.lastName }}</p>



 </div> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=try_ng_expressions_objects) 

 使用 ng-bind 的相同实例：

  
#### AngularJS 实例

 
```
 <div ng-app="" ng-init="person={firstName:'John',lastName:'Doe'}">



 <p>姓为 <span ng-bind="person.lastName"></span></p>



 </div> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=try_ng_bind_objects) 

 



#### AngularJS 数组

 AngularJS 数组就像 JavaScript 数组：

  
#### AngularJS 实例

 
```
 <div ng-app="" ng-init="points=[1,15,19,2,40]">



 <p>第三个值为 {{ points[2] }}</p>



 </div> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=try_ng_expressions_arrays) 

 使用 ng-bind 的相同实例：

  
#### AngularJS 实例

 
```
 <div ng-app="" ng-init="points=[1,15,19,2,40]">



 <p>第三个值为 <span ng-bind="points[2]"></span></p>



 </div> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=try_ng_bind_arrays) 

 










