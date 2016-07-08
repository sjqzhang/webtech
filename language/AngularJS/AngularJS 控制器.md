 AngularJS 控制器  
 AngularJS 控制器 

#### 控制

 AngularJS 应用程序的数据。

  AngularJS 控制器是常规的 

#### JavaScript 对象

。

 

#### AngularJS 控制器

 AngularJS 应用程序被控制器控制。

 

#### ng-controller

 指令定义了应用程序控制器。

 控制器是 

#### JavaScript 对象

，由标准的 JavaScript 

#### 对象的构造函数

 创建。

 控制器的 

#### $scope

 是控制器所指向的应用程序 HTML 元素。

  
#### AngularJS 实例

 
```
 <div ng-app="" ng-controller="personController">



名： <input type="text" ng-model="person.firstName"><br>

 姓： <input type="text" ng-model="person.lastName"><br>

<br>

 姓名： {{person.firstName + " " + person.lastName}}



</div>



<script>

 function personController($scope) {

     $scope.person = {

         firstName: "John",

         lastName: "Doe"

     };

 }

 </script> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=try_ng_controller) 

 实例讲解：

 AngularJS 应用程序由 

#### ng-app

 定义。应用程序在 <div> 内运行。

 

#### ng-controller

 指令把控制器命名为 

#### object

。

 函数 

#### personController

 是一个标准的 JavaScript 

####  对象的构造函数

。

 控制器对象有一个属性：

#### $scope.person

。

 person 对象有两个属性：

#### firstName

 和 

#### lastName

。

 

#### ng-model

 指令绑定输入域到控制器的属性（firstName 和 lastName）。

 

#### 控制器属性

 上面的实例演示了一个带有 lastName 和 firstName 这两个属性的控制器对象。

 控制器也可以把函数作为对象属性：

  
#### AngularJS 实例

 
```
 <div ng-app="" ng-controller="personController">



 名： <input type="text" ng-model="person.firstName"><br>

 姓： <input type="text" ng-model="person.lastName"><br>

 <br>

 姓名： {{person.fullName()}}



 </div>



 <script>

function personController($scope) {

     $scope.person = {

         firstName: "John",

         lastName: "Doe",

         fullName: function() {

             var x;

            x = $scope.person;

             return x.firstName + " " + x.lastName;

         }

     };

 }

 </script> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=try_ng_controller_property) 

 



#### 控制器方法

 控制器也可以带有方法：

  
#### AngularJS 实例

 
```
 <div ng-app="" ng-controller="personController">



名： <input type="text" ng-model="person.firstName"><br>

姓： <input type="text" ng-model="person.lastName"><br>

<br>

姓名： {{fullName()}}



</div>



<script>

function personController($scope) {

    $scope.person = {

        firstName: "John",

        lastName: "Doe",

     };

     $scope.fullName = function() {

         var x;

         x = $scope.person; 

         return x.firstName + " " + x.lastName;

     };

}

</script> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=try_ng_controller_function) 

 



#### 外部文件中的控制器

 在大型的应用程序中，通常是把控制器存储在外部文件中。

 只需要把 <script> 标签中的代码复制到名为 personController.js 的外部文件中即可：

  
#### AngularJS 实例

 
```
 <div ng-app="" ng-controller="personController">



名： <input type="text" ng-model="person.firstName"><br>

 姓： <input type="text" ng-model="person.lastName"><br>

<br>

 姓名： {{person.firstName + " " + person.lastName}}



</div>



<script src="http://www.w3cschool.cc/angularjs/personController.js"></script> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=try_ng_controller_js) 

 



#### 另一个实例

 下面的实例我们将创建一个新的控制器文件：

  
```
 function namesController($scope) {

     $scope.names = [

         {name:'Jani',country:'Norway'},

         {name:'Hege',country:'Sweden'},

         {name:'Kai',country:'Denmark'}

     ];

 } 


```
 

 然后在应用程序中使用这个控制器文件：

  
#### AngularJS 实例

 
```
 <div ng-app="" ng-controller="namesController">



 <ul>

   <li ng-repeat="x in names">

     {{ x.name + ', ' + x.country }}

  </li>

 </ul>



 </div>



 <script src="http://www.w3cschool.cc/angularjs/namesController.js"></script> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=try_ng_controller_names) 

 

