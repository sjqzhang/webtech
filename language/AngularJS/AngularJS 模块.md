 AngularJS 模块  
模块定义了您的应用程序。

 所有的控制器都应该属于一个模块。

 模块保持全局命名空间中的整洁。

 

#### AngularJS 模块实例

 在本实例中，"myApp.js" 包含了一个应用程序模块定义，"myCtrl.js" 包含了一个控制器：

  
#### AngularJS 实例

 
```
 <!DOCTYPE html>

<html>

<body>



<div ng-app="myApp" ng-controller="myCtrl">

{{ firstName + " " + lastName }}

</div>



<script src="http://www.w3cschool.cc//www.w3cschool.cc/try/angularjs/1.2.5/angular.min.js"></script>



<script src="http://www.w3cschool.cc/angularjs/myApp.js"></script>

<script src="http://www.w3cschool.cc/angularjs/myCtrl.js"></script>



</body>

</html> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=try_ng_module_files) 

 



#### 控制器污染了全局命名空间

 本教程中，截至目前为止的所有实例都使用了全局函数。

 在所有的应用程序中，都应该尽量避免使用全局变量和全局函数。

 全局值（变量或函数）可被其他脚本重写或破坏。

 为了解决这个问题，AngularJS 使用了模块。

 

#### AngularJS 模块

 使用一个简单的 

#### 控制器

：

  
#### AngularJS 实例

 
```
 <!DOCTYPE html>

<html>

<body>



<div ng-app="" ng-controller="myCtrl">

{{ firstName + " " + lastName }}

</div>



<script>

function myCtrl($scope) {

     $scope.firstName = "John";

    $scope.lastName = "Doe";

}

</script>



<script src="http://www.w3cschool.cc//www.w3cschool.cc/try/angularjs/1.2.5/angular.min.js"></script>



</body>

</html> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=try_ng_mod_controller) 

 使用一个由 

#### 模块

 替代的控制器：

  
#### AngularJS 实例

 
```
 <!DOCTYPE html>

<html>

<head>

<script src="http://www.w3cschool.cc//www.w3cschool.cc/try/angularjs/1.2.5/angular.min.js"></script>

 </head>



<body>



<div ng-app="myApp" ng-controller="myCtrl">

 {{ firstName + " " + lastName }}

</div>



<script>

var app = angular.module("myApp", []);



app.controller("myCtrl", function($scope) {

    $scope.firstName = "John";

    $scope.lastName = "Doe";

});

</script>



</body>

</html> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=try_ng_module) 

  

 

| 请注意，本实例中，AngularJS 库是在 <head> 区域被加载。|



#### 模块定义应放置在何处？

 对于 HTML 应用程序，通常建议把所有的脚本都放置在 <body> 元素的最底部。

 这会提高网页加载速度，因为 HTML 加载不受制于脚本加载。

 在上面的多个 AngularJS 实例中，您将看到 AngularJS 库是在文档的 <head> 区域被加载。

 在上面的实例中，AngularJS 在 <head> 元素中被加载，因为对 angular.module 的调用只能在库加载完成后才能进行。

 另一个解决方案是在 <body> 元素中加载 AngularJS 库，但是必须放置在您的 AngularJS 脚本前面：

  
#### AngularJS 实例

 
```
 <!DOCTYPE html>

<html>

<body>



<div ng-app="myApp" ng-controller="myCtrl">

{{ firstName + " " + lastName }}

</div>



<script src="http://www.w3cschool.cc//www.w3cschool.cc/try/angularjs/1.2.5/angular.min.js"></script>



<script>

var app = angular.module("myApp", []);



app.controller("myCtrl", function($scope) {

    $scope.firstName = "John";

    $scope.lastName = "Doe";

});

</script>



</body>

</html> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=try_ng_module_body) 

 



#### AngularJS 应用程序文件

 现在您已经知道模块是什么以及它们是如何工作的，现在您可以尝试创建您自己的应用程序文件。

 您的应用程序至少应该有一个模块文件，一个控制器文件。

 首先，创建模块文件 "myApp.js"：

  
```
 var app = angular.module("myApp", []); 


```
 

 然后，创建控制器文件。本实例中是 "myCtrl.js"：

  
```
 app.controller("myCtrl", function($scope) {

    $scope.firstName = "John";

    $scope.lastName = "Doe";

});


```
 

 最后，编辑您的 HTML 页面：

  
#### AngularJS 实例

 
```
 <!DOCTYPE html>

<html>

<body>



<div ng-app="myApp" ng-controller="myCtrl">

{{ firstName + " " + lastName }}

</div>



<script src="http://www.w3cschool.cc//www.w3cschool.cc/try/angularjs/1.2.5/angular.min.js"></script>



<script src="http://www.w3cschool.cc/angularjs/myApp.js"></script>

<script src="http://www.w3cschool.cc/angularjs/myCtrl.js"></script>



</body>

</html> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=try_ng_module_files) 

 

