 AngularJS 表单  
 AngularJS 表单是输入控件的集合。

 

#### HTML 控件

 以下 HTML input 元素被称为 HTML 控件:

 
input 元素
 select 元素
 button 元素
 textarea 元素
 


#### HTML 表单

 HTML 表单通常与 HTML 控件同时存在。

 

#### AngularJS 表单实例

   First Name:



 Last Name:





RESET  form = {{user}}

 master = {{master}}

 

 

#### 应用程序代码

  
```
 <div ng-app="" ng-controller="formController">

  <form novalidate>

    First Name:<br>

    <input type="text" ng-model="user.firstName"><br>

    Last Name:<br>

    <input type="text" ng-model="user.lastName">

    <br><br>

    <button ng-click="reset()">RESET</button>

  </form>

  <p>form = {{user}}</p>

  <p>master = {{master}}</p>

</div>



<script>

 function formController ($scope) {

    $scope.master = {firstName: "John", lastName: "Doe"};

    $scope.reset = function() {

        $scope.user = angular.copy($scope.master);

    };

    $scope.reset();

};

 </script> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=try_ng_form) 

  

 

|  HTML 属性 novalidate 用于禁用浏览器的默认验证。|



#### 实例解析

  AngularJS 

#### ng-model

 指令用于绑定 input 元素到模型中。

  模型对象 

#### master

 的值为 {"firstName" : "John", "lastName" : "Doe"}。

  模型函数 

#### reset

 设置了模型对象 

#### user

 等于 master。

 

