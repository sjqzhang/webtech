 AngularJS 过滤器  
过滤器可以使用一个管道字符（|）添加到表达式和指令中。

 

#### AngularJS 过滤器

 AngularJS 过滤器可用于转换数据：

 

|过滤器|描述|
|:--|:--|
|currency|格式化数字为货币格式。|
|filter|从数组项中选择一个子集。|
|lowercase|格式化字符串为小写。|
|orderBy|根据某个表达式排列数组。|
|uppercase|格式化字符串为大写。|





#### 向表达式添加过滤器

 过滤器可以通过一个管道字符（|）和一个过滤器添加到表达式中。

 （下面的两个实例，我们将使用前面章节中提到的 person 控制器）

 

#### uppercase

 过滤器格式化字符串为大写：

  
#### AngularJS 实例

 
```
 <div ng-app="" ng-controller="personController">



 <p>姓名为 {{ person.lastName | uppercase }}</p>



 </div> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=try_ng_filters_uppercase) 

 

#### lowercase

 过滤器格式化字符串为小写：

  
#### AngularJS 实例

 
```
 <div ng-app="" ng-controller="personController"">



 <p>姓名为 {{ person.lastName | lowercase }}</p>



</div> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=try_ng_filters_lowercase) 

 



#### currency 过滤器

 

#### currency

 过滤器格式化数字为货币格式：

  
#### AngularJS 实例

 
```
 <div ng-app="" ng-controller="costController">



 数量：<input type="number" ng-model="quantity">

 价格：<input type="number" ng-model="price">



 <p>总价 = {{ (quantity * price) | currency }}</p>



 </div> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=try_ng_filters_currency) 

 



#### 向指令添加过滤器

 过滤器可以通过一个管道字符（|）和一个过滤器添加到指令中。

 

#### orderBy

 过滤器根据某个表达式排列数组：

  
#### AngularJS 实例

 
```
 <div ng-app="" ng-controller="namesController">



<p>循环对象：</p>

 <ul>

   <li ng-repeat="x in names | orderBy:'country'">

     {{ x.name + ', ' + x.country }}

  </li>

</ul>



<div> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=try_ng_filters_orderby) 

 



#### 过滤输入

 输入过滤器可以通过一个管道字符（|）和一个过滤器添加到指令中，该过滤器后跟一个冒号和一个模型名称。

 

#### filter

 过滤器从数组中选择一个子集：

  
#### AngularJS 实例

 
```
 <div ng-app="" ng-controller="namesController">



<p>输入过滤：</p>

 <p><input type="text" ng-model="name"></p>



 <ul>

  <li ng-repeat="x in names | filter:name | orderBy:'country'">

    {{ (x.name | uppercase) + ', ' + x.country }}

  </li>

</ul>



</div> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=try_ng_filters_input) 

 








