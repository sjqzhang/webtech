 PHP  MySQL 创建数据库
 
数据库存有一个或多个表。 

 你需要 CREATE 权限来创建或删除 MySQL 数据库。

 

#### 使用 MySQLi 和 PDO 创建 MySQL 数据库

 CREATE DATABASE 语句用于在 MySQL 中创建数据库。

 在下面的实例中，创建了一个名为 "myDB" 的数据库：

  
#### 实例 (MySQLi - 面向对象)

 
```
 <?php

$servername = "localhost";

$username = "username";

$password = "password";



// 创建连接

$conn = new mysqli($servername, $username, $password);

 // 检测连接

 if ($conn->connect_error) {

     die("Connection failed: " . $conn->connect_error);

} 



// Create database

 $sql = "CREATE DATABASE myDB";

if ($conn->query($sql) === TRUE) {

    echo "Database created successfully";

} else {

    echo "Error creating database: " . $conn->error;

}



$conn->close();

 ?> 


```
 




 



| 注意： 当你创建一个新的数据库时，你必须为 mysqli 对象指定三个参数 (servername, username 和 password)。Tip: 如果你使用其他端口（默认为3306），为数据库参数添加空字符串，如: new mysqli("localhost", "username", "password", "", port)|



 
#### 实例 (MySQLi Procedural)

 
```
 <?php

$servername = "localhost";

$username = "username";

$password = "password";



// 创建连接

 $conn = mysqli_connect($servername, $username, $password);

 // 检测连接

 if (!$conn) {

     die("Connection failed: " . mysqli_connect_error());

}



// Create database

 $sql = "CREATE DATABASE myDB";

 if (mysqli_query($conn, $sql)) {

    echo "Database created successfully";

} else {

    echo "Error creating database: " . mysqli_error($conn);

}



mysqli_close($conn);

 ?> 


```
 




 

#### 注意：

 以下使用 PDO 实例创建数据库 "myDBPDO":

  
#### 实例 (PDO)

 
```
 <?php

$servername = "localhost";

$username = "username";

 $password = "password";



try {

    $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);

    // 设置 PDO 错误模式为异常

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE DATABASE myDBPDO";

    // 使用 exec() ，因为没有结果返回

    $conn->exec($sql);

    echo "Database created successfully<br>";

    }

catch(PDOException $e)

    {

    echo $sql . "<br>" . $e->getMessage();

    }



$conn = null;

 ?> 


```
 




 

#### 提示：

 使用 PDO 的最大好处是在数据库查询过程出现问题时可以使用异常类来 处理问题。如果 try{ } 代码块出现异常，脚本会停止执行并会跳到第一个 catch(){ } 代码块执行代码。 在以上捕获的代码块中我们输出了 SQL 语句并生成错误信息。 

 

