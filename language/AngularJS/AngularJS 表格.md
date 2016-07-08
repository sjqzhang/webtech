 AngularJS 表格  
 ng-repeat 指令可以完美的显示表格。 

 

#### 在表格中显示数据

 使用 angular 显示表格是非常简单的：

  
#### AngularJS 实例

 
```
 <div ng-app="" ng-controller="customersController"> 



<table>

   <tr ng-repeat="x in names">

    <td>{{ x.Name }}</td>

    <td>{{ x.Country }}</td>

  </tr>

</table>



</div>



 <script>

function customersController($scope,$http) {

  $http.get("http://www.w3cschool.cc/try/angularjs/data/Customers_JSON.php")

  .success(function(response) {$scope.names = response;});

}

</script> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=try_ng_tables_simple) 

 



#### 使用 CSS 样式

 为了让页面更加美观，我们可以在页面中使用CSS：

  
#### CSS 样式

 
```
 <style>

table, th , td {

  border: 1px solid grey;

  border-collapse: collapse;

  padding: 5px;

}

table tr:nth-child(odd) {

  background-color: #f1f1f1;

}

table tr:nth-child(even) {

  background-color: #ffffff;

}

</style> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=try_ng_tables_css) 

 



#### 排序显示

 如果需要对表格进行排序，我们可以添加 

#### orderBy

 过滤器:  

  
#### AngularJS 实例

 
```
 <table>

  <tr ng-repeat="x in names | orderBy : 'Country'">

    <td>{{ x.Name }}</td>

    <td>{{ x.Country }}</td>

  </tr>

</table> 


```
 

[Try it Yourself »](http://www.w3cschool.cc/try/try.php?filename=try_ng_tables_orderby) 

 



#### 使用 uppercase 滤器

 如果字母要转换为大写，可以添加 

#### uppercase

 过滤器:  

  
#### AngularJS 实例

 
```
 <table>

  <tr ng-repeat="x in names">

    <td>{{ x.Name }}</td>

    <td>{{ x.Country | uppercase}}</td>

  </tr>

</table> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=try_ng_tables_ucase) 

 

