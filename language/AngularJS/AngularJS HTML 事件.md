 AngularJS HTML 事件  
AngularJS 有自己的 HTML 事件指令。

 

#### ng-click 指令

 

#### ng-click

 指令定义了一个 AngularJS 单击事件。

  
#### AngularJS 实例

 
```
 <div ng-app="" ng-controller="myController">



<button ng-click="count = count + 1">点我！</button>



<p>{{ count }}</p>



</div>


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=try_ng_events_click) 

 



#### 隐藏 HTML 元素

  

#### ng-hide

 指令用于设置应用的一部分 

#### 不可见

 。

  

#### ng-hide="true"

 让 HTML 元素 

#### 不可见

。

 

#### ng-hide="false"

 让元素可见。

  
#### AngularJS 实例

 
```
 <div ng-app="" ng-controller="personController">



 <button ng-click="toggle()">隐藏/显示</button>



<p ng-hide="myVar">

 名: <input type="text" ng-model="person.firstName"><br>

 姓: <input type="text" ng-model="person.lastName"><br>

<br>

姓名: {{person.firstName + " " + person.lastName}}

</p>



</div>



 <script>

function personController($scope) {

    $scope.person = {

        firstName: "John",

         lastName: "Doe"

    };

    $scope.myVar = false;

    $scope.toggle = function() {

        $scope.myVar = !$scope.myVar;

    };

}

</script> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/tryit.php?filename=try_ng_events_hide) 

 应用解析:

  

#### personController

的第一部分与控制器章节类似。

 应用有一个默认属性: 

#### $scope.myVar = false;



  

#### ng-hide

 指令设置应用中的元素不可见。 

 

#### toggle()

 函数用于切换 

#### myVar

 变量的值（true 和 false）。

  

#### ng-hide="true"

 让元素 

#### 不可见

。

 

#### 显示 HTML 元素

  

#### ng-show

 指令可用于设置应用中的一部分

#### 可见

 。

  

#### ng-show="false"

 可以设置 HTML 元素 

#### 不可见

。

 

#### ng-show="true"

 可以以设置 HTML 元素可见。

 以下实例使用了 ng-show 指令:

  
#### AngularJS 实例

 
```
 <div ng-app="" ng-controller="personController">



 <button ng-click="toggle()">隐藏/显示</button>



<p ng-show="myVar">

 名: <input type="text" ng-model="person.firstName"><br>

 姓: <input type="text" ng-model="person.lastName"><br>

<br>

姓名: {{person.firstName + " " + person.lastName}}

</p>



</div>



 <script>

function personController($scope) {

    $scope.person = {

        firstName: "John",

        lastName: "Doe"

    };

    $scope.myVar = true;

    $scope.toggle = function() {

        $scope.myVar = !$scope.myVar;

    };

}

</script> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/tryit.php?filename=try_ng_events) 

 

