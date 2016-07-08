 AngularJS SQL  
 在前面章节中的代码也可以用于读取数据库中的数据。 

 

#### 使用 PHP 从 MySQL 中获取数据

  
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

    var site = "http://www.w3cschool.cc";

     var page = "/try/angularjs/data/Customers_MySQL.php";

     $http.get(site + page)

    .success(function(response) {$scope.names = response;});

}

</script> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=try_ng_customers_mysql) 

 



#### ASP.NET 中执行 SQL 获取数据

  
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

    var site = "http://www.w3cschool.cc";

     var page = "/try/angularjs/data/Customers_SQL.aspx";

     $http.get(site + page)

    .success(function(response) {$scope.names = response;});

}

</script> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=try_ng_customers_sql) 

 



#### PHP 读取 MySQL 数据代码

  
```
 <?php

header("Access-Control-Allow-Origin: *");

header("Content-Type: text/html; charset=UTF-8");



$conn = new mysqli("myServer", "myUser", "myPassword", "Northwind");



$result = $conn->query("SELECT CompanyName, City, Country FROM Customers");



$outp "[";

 while($rs = $result->fetch_array(MYSQLI_ASSOC)) {

    if ($outp != "[") {$outp .= ",";}

    $outp .= '{"Name":"'  . $rs["CompanyName"] . '",';

     $outp .= '"City":"'   . $rs["City"]        . '",';

     $outp .= '"Country":"'. $rs["Country"]     . '"}'; 

}

 $outp .="]";



$conn->close();



echo($outp);

?> 


```
 

 



#### PHP 读取 MS Access 代码

  
```
 <?php

header("Access-Control-Allow-Origin: *");

header("Content-Type: text/html; charset=ISO-8859-1");



$conn = new COM("ADODB.Connection");

 $conn->open("PROVIDER=Microsoft.Jet.OLEDB.4.0;Data Source=Northwind.mdb");



$rs = $conn->execute("SELECT CompanyName, City, Country FROM Customers");



$outp = "[";

while (!$rs->EOF) {

    if ($outp != "[") {$outp .= ",";}

    $outp .= '{"Name":"'  . $rs["CompanyName"] . '",';

     $outp .= '"City":"'   . $rs["City"]        . '",';

    $outp .= '"Country":"'. $rs["Country"]     . '"}'; 

    $rs->MoveNext();

}

$outp .= "]";



 $conn->close();



echo ($outp);

?> 


```
 

 



#### 服务端 ASP.NET, VB 和 MS Access 代码

  
```
 <%@ Import Namespace="System.IO"%>

<%@ Import Namespace="System.Data"%>

 <%@ Import Namespace="System.Data.OleDb"%>

<%

 Response.AppendHeader("Access-Control-Allow-Origin", "*")

Dim conn As OleDbConnection

Dim objAdapter As OleDbDataAdapter

Dim objTable As DataTable

Dim objRow As DataRow

Dim objDataSet As New DataSet()

 Dim outp

Dim c

conn = New OledbConnection("Provider=Microsoft.Jet.OLEDB.4.0;data source=Northwind.mdb")

objAdapter = New OledbDataAdapter("SELECT CompanyName, City, Country FROM Customers", conn)

objAdapter.Fill(objDataSet, "myTable")

objTable=objDataSet.Tables("myTable")



outp = "["

 c = chr(34)

for each x in objTable.Rows

if outp <> "[" then outp = outp &amp; ","

 outp = outp &amp; "{" &amp; c &amp; "Name"    &amp; c &amp; ":" &amp; c &amp; x("CompanyName") &amp; c &amp; ","

 outp = outp &amp;       c &amp; "City"    &amp; c &amp; ":" &amp; c &amp; x("City")        &amp; c &amp; "," 

outp = outp &amp;       c &amp; "Country" &amp; c &amp; ":" &amp; c &amp; x("Country")     &amp; c &amp; "}"

next



outp = outp &amp; "]"

response.write(outp)

conn.close

%> 


```
 

 



#### 服务端 ASP.NET, VB Razor 和 SQL Lite 代码

  
```
 @{

Response.AppendHeader("Access-Control-Allow-Origin", "*")

var db = Database.Open("Northwind");

var query = db.Query("SELECT CompanyName, City, Country FROM Customers");

var outp ="["

}

@foreach(var row in query)

{

if outp <> "[" then outp = outp + ","

outp = outp + "{" + c + "Name"    + c + ":" + c + @row.CompanyName + c + ","

outp = outp +       c + "City"    + c + ":" + c + @row.City        + c + ","

outp = outp +       c + "Country" + c + ":" + c + @row.Country     + c + "}"

}

outp = outp + "]"

@outp 


```
 

 

