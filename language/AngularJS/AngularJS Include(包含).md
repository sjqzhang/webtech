 AngularJS Include（包含）  
使用 AngularJS, 你可以在 HTML 中包含 HTML 文件。

 

#### 在未来的HTML中包含 HTML 文件

 在 HTML 中，目前还不支持包含 HTML 文件的功能。

 W3C 已经建议 [ http://www.w3.org](http://www.w3cschool.cc//www.w3.org/TR/html-imports) 在未来的 HTML 中支持包含HTML的功能，格式如下:

  
```
 <link rel="import" href="http://www.w3cschool.cc/path/navigation.html">


```
 

 



#### 服务端包含

 大部分web服务器支持服务端脚本的包含 (

#### SSI：Server Side Includes

)。

 使用 SSI, 你可以在HTML页面发送至浏览器前包含 HTML。

  
#### PHP 实例

 
```
 <?php require("navigation.php"); ?> 


```
 

 



#### 客户端包含

 客户端在 HTML 中使用 JavaScript 有多种方式可以包含 HTML 文件。

 通常我们使用 http 请求 (

#### AJAX

) 从服务端获取数据，返回的数据我们可以通过 使用 

#### innerHTML

 写入到 HTML 元素中。 

 

#### AngularJS 包含

 使用 AngularJS, 你可以使用 

#### ng-include

 指令来包含 HTML 内容:

  
#### 实例

 
```
 <body>



<div class="container">

  <div ng-include="'myUsers_List.htm'"></div>

  <div ng-include="'myUsers_Form.htm'"></div>

</div>



 </body>


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=try_ng_includes) 

 步骤如下。



 

#### 步骤 1: 创建 HTML 列表

  
#### myUsers_List.html

 
```
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


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=myUsers_List) 

 



#### 步骤 2: 创建 HTML 表单

  
#### myUsers_List.html

 
```
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


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=myUsers_Form) 

 



#### 步骤 3: 创建主页

  
#### myUsers.html

 
```
 <!DOCTYPE html>

<html ng-app="">

<head>

<link rel="stylesheet" href = "http://apps.bdimg.com/libs/bootstrap/3.2.0/css/bootstrap.min.css">

 </head>



<body ng-controller="userController">



<div class="container">

<div ng-include="'myUsers_List.htm'"></div>

<div ng-include="'myUsers_Form.htm'"></div>

</div>



<script src= "http://apps.bdimg.com/libs/angular.js/1.2.15/angular.min.js"></script>

 <script src= "myUsers.js"></script>



</body>

</html>


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=try_ng_includes) 

 

