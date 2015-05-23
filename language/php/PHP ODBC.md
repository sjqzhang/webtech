 PHP 数据库 ODBC  
ODBC 是一种应用程序编程接口（Application Programming Interface，API），使我们有能力连接到某个数据源（比如一个 MS Access 数据库）。

 

#### 创建 ODBC 连接

 通过一个 ODBC 连接，您可以连接到您的网络中的任何计算机上的任何数据库，只要 ODBC 连接是可用的。

 这是创建到达 MS Access 数据库的 ODBC 连接的方法：

 
在控制面板中打开管理工具图标。
 双击其中的数据源(ODBC)图标。
 选择系统 DSN 选项卡。
 点击系统 DSN 选项卡中的添加。
 选择Microsoft Access Driver。点击完成。
 在下一个界面，点击选择来定位数据库。
 为数据库起一个数据源名(DSN)。
 点击确定。
 
请注意，必须在您的网站所在的计算机上完成这个配置。如果您的计算机上正在运行 Internet 信息服务(IIS)，上面的指令将会生效，但是如果您的网站位于远程服务器，您必须拥有对该服务器的物理访问权限，或者请您的主机提供商为您建立 DSN。

 

#### 连接到 ODBC

 odbc_connect() 函数用于连接到 ODBC 数据源。该函数有四个参数：数据源名、用户名、密码以及可选的指针类型。

 odbc_exec() 函数用于执行 SQL 语句。

 
#### 实例

 下面的实例创建了到达名为 northwind 的 DSN 的连接，没有用户名和密码。然后创建并执行一条 SQL 语句：

 
```
 $conn=odbc_connect('northwind','','');

 $sql="SELECT * FROM customers";

 $rs=odbc_exec($conn,$sql); 




```
 



#### 取回记录

 odbc_fetch_row() 函数用于从结果集中返回记录。如果能够返回行，则函数返回 true，否则返回 false。

 该函数有两个参数：ODBC 结果标识符和可选的行号：

 
```
 odbc_fetch_row($rs) 




```
 



#### 从记录中取回字段

 odbc_result() 函数用于从记录中读取字段。该函数有两个参数：ODBC 结果标识符和字段编号或名称。

 下面的代码行从记录中返回第一个字段的值：

 
```
 $compname=odbc_result($rs,1); 




```
 下面的代码行返回名为 "CompanyName" 的字段的值：

 
```
 $compname=odbc_result($rs,"CompanyName"); 




```
 



#### 关闭 ODBC 连接

 odbc_close() 函数用于关闭 ODBC 连接。

 
```
 odbc_close($conn); 




```
 



#### ODBC 实例

 下面的实例展示了如何首先创建一个数据库连接，接着创建一个结果集，然后在 HTML 表格中显示数据。

 
```
 <html>

 <body>



 <?php

 $conn=odbc_connect('northwind','','');

 if (!$conn)

 {exit("Connection Failed: " . $conn);}

 $sql="SELECT * FROM customers";

 $rs=odbc_exec($conn,$sql);

 if (!$rs)

 {exit("Error in SQL");}

 echo "<table><tr>";

 echo "<th>Companyname</th>";

 echo "<th>Contactname</th></tr>";

 while (odbc_fetch_row($rs))

 {

 $compname=odbc_result($rs,"CompanyName");

 $conname=odbc_result($rs,"ContactName");

 echo "<tr><td>$compname</td>";

 echo "<td>$conname</td></tr>";

 }

 odbc_close($conn);

 echo "</table>";

 ?>



 </body>

 </html> 




```
 

