 AngularJS XMLHttpRequest  


#### $http

 是 AngularJS 中的一个核心服务，用于读取远程服务器的数据。

 

#### 读取 JSON 文件

 以下是存储在web服务器上的 JSON 文件：

  
#### http://www.w3cschool.cc/try/angularjs/data/Customers_JSON.php

 
```
 [

{

"Name" : "Alfreds Futterkiste",

"City" : "Berlin",

 "Country" : "Germany"

},

{

"Name" : "Berglunds snabbköp",

"City" : "Luleå",

"Country" : "Sweden"

},

{

"Name" : "Centro comercial Moctezuma",

"City" : "México D.F.",

"Country" : "Mexico"

},

{

 "Name" : "Ernst Handel",

"City" : "Graz",

"Country" : "Austria"

},

 {

"Name" : "FISSA Fabrica Inter. Salchichas S.A.",

"City" : "Madrid",

 "Country" : "Spain"

},

{

"Name" : "Galería del gastrónomo",

 "City" : "Barcelona",

"Country" : "Spain"

},

{

"Name" : "Island Trading",

"City" : "Cowes",

"Country" : "UK"

},

{

"Name" : "Königlich Essen",

"City" : "Brandenburg",

"Country" : "Germany"

},

{

 "Name" : "Laughing Bacchus Wine Cellars",

"City" : "Vancouver",

 "Country" : "Canada"

},

{

"Name" : "Magazzini Alimentari Riuniti",

 "City" : "Bergamo",

"Country" : "Italy"

},

{

"Name" : "North/South",

"City" : "London",

"Country" : "UK"

},

{

 "Name" : "Paris spécialités",

"City" : "Paris",

"Country" : "France"

 },

{

"Name" : "Rattlesnake Canyon Grocery",

"City" : "Albuquerque",

 "Country" : "USA"

},

{

"Name" : "Simons bistro",

"City" : "København",

 "Country" : "Denmark"

},

{

"Name" : "The Big Cheese",

"City" : "Portland",

"Country" : "USA"

},

{

"Name" : "Vaffeljernet",

 "City" : "Århus",

"Country" : "Denmark"

},

{

"Name" : "Wolski Zajazd",

"City" : "Warszawa",

"Country" : "Poland"

}

]





```
 

 



#### AngularJS $http

 AngularJS $http 是一个用于读取web服务器上数据的服务。 

 $http.get(url) 是用于读取服务器数据的函数。 

  
#### AngularJS 实例

 
```
 <div ng-app="" ng-controller="customersController"> 



<ul>

  <li ng-repeat="x in names">

    {{ x.Name + ', ' + x.Country }}

  </li>

 </ul>



</div>



<script>

function customersController($scope,$http) {

    $http.get("http://www.w3cschool.cc/try/angularjs/data/Customers_JSON.php")

    .success(function(response) {$scope.names = response;});

}

</script> 


```
 

[ 尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=try_ng_customers_json) 

 应用解析:

  AngularJS 应用通过 

#### ng-app

 定义。应用在 <div> 中执行。

  

#### ng-controller

 指令设置了 

#### controller 对象

 名。

 函数 

#### customersController

 是一个标准的 JavaScript 

####  对象构造器

。

 控制器对象有一个属性: 

#### $scope.names

。

 

#### $http.get()

 从web服务器上读取静态 

#### JSON 数据

。 

 服务器数据文件为：  [

####  http://www.w3cschool.cc/try/angularjs/data/Customers_JSON.php

](http://www.w3cschool.cc/try/angularjs/data/Customers_JSON.php)。

 当从服务端载入 JSON 数据时，

#### $scope.names

 变为一个数组。

  

 

| 以上代码也可以用于读取数据库数据。|



