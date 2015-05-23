 PHP  MySQL 读取数据
 

#### 从 MySQL 数据库读取数据

  SELECT 语句用于从数据表中读取数据:

 
```
 SELECT column_name(s) FROM table_name 




```
 如需学习更多关于 SQL 的知识，请访问我们的 [SQL 教程](http://www.w3cschool.cc/sql/sql-tutorial.html)。

 以下实例中我们从表 MyGuests 读取了 id, firstname 和 lastname 列的数据并显示在页面上：

  
#### 实例 (MySQLi - 面向对象)

 
```
 <?php

$servername = "localhost";

$username = "username";

$password = "password";

$dbname = "myDB";



// 创建连接

$conn = new mysqli($servername, $username, $password, $dbname);

// 检测连接

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

 } 



$sql = "SELECT id, firstname, lastname FROM MyGuests";

$result = $conn->query($sql);



if ($result->num_rows > 0) {

    // 输出每行数据

    while($row = $result->fetch_assoc()) {

        echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"];

    }

} else {

    echo "0 results";

}

 $conn->close();

 ?> 


```
 




 以下实例读取了 MyGuests 表的所有记录并显示在 HTML 表格中：

  
#### 实例 (PDO)

 
```
 <?php

echo "<table style='border: solid 1px black;'>";

 echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th><th>Email</th><th>Reg date</th></tr>";



class TableRows extends RecursiveIteratorIterator { 

    function __construct($it) { 

        parent::__construct($it, self::LEAVES_ONLY); 

    }



    function current() {

        return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";

    }



    function beginChildren() { 

        echo "<tr>"; 

    } 



    function endChildren() { 

        echo "</tr>" . "\n";

    } 

} 



$servername = "localhost";

 $username = "username";

$password = "password";

$dbname = "myDBPDO";



 try {

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT * FROM MyGuests"); 

    $stmt->execute();



    // 设置结果集为关联数组

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 



    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 

        echo $v;

    }

    $dsn = null;

    }

catch(PDOException $e)

    {

    echo "Error: " . $e->getMessage();

    }

$conn = null;

echo "</table>";

?> 


```
 




 

