 AngularJS Bootstrap  
AngularJS 的首选样式表是 Twitter Bootstrap， Twitter Bootstrap 是目前最受欢迎的前端框架。

 [查看 Bootstrap教程](http://www.w3cschool.cc/bootstrap/bootstrap-tutorial.html)。

 

#### Bootstrap

 你可以在你的 AngularJS 应用中加入 Twitter Bootstrap，你可以在你的 <head>元素中添加如下代码:

  
```
 <link rel="stylesheet" href="http://www.w3cschool.cc//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"> 


```
 

 如果站点在国内，建议使用百度静态资源库的Bootstrap，代码如下：

  
```
 <link rel="stylesheet" href="http://www.w3cschool.cc//apps.bdimg.com/libs/bootstrap/3.2.0/css/bootstrap.min.css"> 


```
 

 以下是一个完整的 HTML 实例, 使用了 AngularJS 指令和 Bootstrap 类。

  

 

#### HTML 代码

  
```
 <!DOCTYPE html>

<html ang-app="">

<head>

 <link rel="stylesheet" href="http://apps.bdimg.com/libs/bootstrap/3.2.0/css/bootstrap.min.css">

 </head>



<body ng-controller="userController">

 <div class="container">



<h3>Users</h3>



<table class="table table-striped">

  <thead><tr>

     <th>Edit</th>

    <th>First Name</th>

    <th>Last Name</th>

  </tr></thead>

  <tbody><tr ng-repeat="user in users">

    <td>

       <button class="btn" ng-click="editUser(user.id)">

       <span class="glyphicon glyphicon-pencil"></span>&amp;nbsp;&amp;nbsp;Edit

       </button>

    </td>

    <td>{{ user.fName }}</td>

     <td>{{ user.lName }}</td>

   </tr></tbody>

</table>



<hr>

<button class="btn btn-success" ng-click="editUser('new')">

   <span class="glyphicon glyphicon-user"></span> Create New User

 </button>

<hr>



 <h3 ng-show="edit">Create New User:</h3>

<h3 ng-hide="edit">Edit User:</h3>



<form class="form-horizontal">

<div class="form-group">

   <label class="col-sm-2 control-label">First Name:</label>

  <div class="col-sm-10">

     <input type="text" ng-model="fName" ng-disabled="!edit" placeholder="First Name">

  </div>

 </div> 

<div class="form-group">

   <label class="col-sm-2 control-label">Last Name:</label>

  <div class="col-sm-10">

     <input type="text" ng-model="lName" ng-disabled="!edit" placeholder="Last Name">

  </div>

</div>

 <div class="form-group">

   <label class="col-sm-2 control-label">Password:</label>

  <div class="col-sm-10">

    <input type="password" ng-model="passw1" placeholder="Password">

  </div>

</div>

 <div class="form-group">

   <label class="col-sm-2 control-label">Repeat:</label>

  <div class="col-sm-10">

    <input type="password" ng-model="passw2" placeholder="Repeat Password">

  </div>

</div>

 </form>



<hr>

 <button class="btn btn-success" ng-disabled="error || incomplete">

   <span class="glyphicon glyphicon-save"></span> Save Changes

</button>

</div>



 <script src = "http://apps.bdimg.com/libs/angular.js/1.2.15/angular.min.js"></script>

 <script src = "myUsers.js"></script>

</body>

</html>> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=try_ng_myusers) 

 



#### 指令解析

 

|AngularJS 指令|描述|
|:--|:--|
|<html ng-app|为 <html> 元素定义一个应用(未命名)|
|<body ng-controller|为 <body> 元素定义一个控制器|
|<tr ng-repeat|循环 users 对象数组，每个 user 对象放在 <tr> 元素中。|
|<button ng-click|当点击 <button> 元素时调用函数 editUser()|
|<h3 ng-show| 如果 edit = true 显示 <h3> 元素 |
|<h3 ng-hide|如果 edit = true 隐藏 <h3> 元素|
|<input ng-model|为应用程序绑定 <input> 元素|
|<button ng-disabled|如果发生错误或者 ncomplete = true 禁用 <button> 元素|





#### Bootstrap 类解析

 

|元素|Bootstrap 类|定义|
|:--|:--|:--|
|<div>|container|内容容器|
|<table>|table|表格|
|<table>|table-striped|带条纹背景的表格|
|<button>|btn|按钮|
|<button>|btn-success|成功按钮|
|<span>|glyphicon|字形图标|
|<span>|glyphicon-pencil|铅笔图标|
|<span>|glyphicon-user|用户图标|
|<span>|glyphicon-save|保存图标|
|<form>|form-horizontal|水平表格|
|<div>|form-group|表单组|
|<label>|control-label|控制器标签|
|<label>|col-sm-2|跨越 2 列|
|<div>|col-sm-10|跨越 10 列|





#### JavaScript 代码

  
```
 function userController($scope) {

$scope.fName = '';

$scope.lName = '';

$scope.passw1 = '';

$scope.passw2 = '';

 $scope.users = [

{id:1, fName:'Hege',  lName:"Pege" },

 {id:2, fName:'Kim',   lName:"Pim" },

{id:3, fName:'Sal',   lName:"Smith" },

 {id:4, fName:'Jack',  lName:"Jones" },

{id:5, fName:'John',  lName:"Doe" },

{id:6, fName:'Peter', lName:"Pan" }

];

$scope.edit = true;

$scope.error = false;

 $scope.incomplete = false; 



$scope.editUser = function(id) {

  if (id == 'new') {

     $scope.edit = true;

    $scope.incomplete = true;

    $scope.fName = '';

    $scope.lName = '';

    } else {

    $scope.edit = false;

    $scope.fName = $scope.users[id-1].fName;

    $scope.lName = $scope.users[id-1].lName; 

  }

};



$scope.$watch('passw1',function() {$scope.test();});

$scope.$watch('passw2',function() {$scope.test();});

 $scope.$watch('fName', function() {$scope.test();});

$scope.$watch('lName', function() {$scope.test();});



$scope.test = function() {

  if ($scope.passw1 !== $scope.passw2) {

    $scope.error = true;

    } else {

    $scope.error = false;

  }

  $scope.incomplete = false;

  if ($scope.edit &amp;&amp; (!$scope.fName.length ||

  !$scope.lName.length ||

  !$scope.passw1.length || !$scope.passw2.length)) {

       $scope.incomplete = true;

  }

};



}


```
 

 



#### JavaScript 代码解析

 

|Scope 属性|用途|
|:--|:--|
|$scope.fName|模型变量 (用户名)|
|$scope.lName|模型变量 (用户姓)|
|$scope.passw1|模型变量 (用户密码 1)|
|$scope.passw2|模型变量 (用户密码 2)|
|$scope.users|模型变量 (用户的数组)|
|$scope.edit|当用户点击创建用户时设置为true。|
|$scope.error|如果 passw1 不等于 passw2 设置为 true|
|$scope.incomplete|如果每个字段都为空(length = 0)设置为 true |
|$scope.editUser|设置模型变量|
|$scope.watch|监控模型变量|
|$scope.test|验证模型变量的错误和完整性|



