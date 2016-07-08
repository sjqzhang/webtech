 AngularJS 应用程序  
现在是时候创建一个真正的 AngularJS 应用程序了。

 

#### AngularJS 应用程序

 您已经学习了足够多关于 AngularJS 的知识，现在可以开始创建您的第一个 AngularJS 应用程序：

  
#### 我的笔记

 



保存 清除  剩下的字符数： 

 

 



#### 应用程序讲解

  
#### AngularJS 实例

 
```
 <div ng-app="myTodoApp" ng-controller="myTodoCtrl">



 <h2>我的笔记</h2>



 <p><textarea ng-model="message" cols="40" rows="10"></textarea></p>



 <p>

 <button ng-click="save()">保存</button>

 <button ng-click="clear()">清除</button>

 </p>



 <p>剩下的字符数：<span ng-bind="left()"></span></p>



 </div>



 <script src="http://www.w3cschool.cc/angularjs/myTodoApp.js"></script>

 <script src="http://www.w3cschool.cc/angularjs/myTodoCtrl.js"></script> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=try_ng_todo_app) 

 应用程序文件 "myTodoApp.js"：

  
```
 var app = angular.module("myTodoApp", []); 


```
 

 控制器文件 "myTodoCtrl.js"：

  
```
 app.controller("myTodoCtrl", function($scope) {

     $scope.message = "";

    $scope.left  = function() {return 100 - $scope.message.length;};

    $scope.clear = function() {$scope.message="";};

     $scope.save  = function() {$scope.message="";};

 }); 


```
 

 HTML 页面中的一个 <div>，指向 ng-app="

#### myTodoApp

" 和 ng-controller="

#### myTodoCtrl

"：

  
```
 <div ng-app="myTodoApp" ng-controller="myTodoCtrl"> 


```
 

 一个 

#### ng-model

 指令，绑定一个 <textarea> 到控制器变量 

####  message

：

  
```
 <textarea ng-model="message" cols="40" rows="10"></textarea>


```
 

 两个 

#### ng-click

 事件，调用控制器函数 

#### clear()

 和 

#### save()

：

  
```
 <button ng-click="save()">保存</button>

 <button ng-click="clear()">清除</button> 


```
 

 一个 

#### ng-bind

 指令，绑定控制器函数 

#### left()

 到一个 <span>，字符会向左对齐显示：

  
```
 剩下的字符数：<span ng-bind="left()"></span> 


```
 

 两个应用程序库被添加到 HTML 页面：

  
```
 <script src="http://www.w3cschool.cc/angularjs/myTodoApp.js"></script>

 <script src="http://www.w3cschool.cc/angularjs/myTodoCtrl.js"></script> 


```
 

 






