 
#### MySQL PHP 语法

  MySQL 可应用于多种语言，包括 PERL, C, C++, JAVA 和 PHP。 在这些语言中，Mysql在PHP的web开发中是应用最广泛。 

  在本教程中我们大部分实例都采用了PHP语言。你过你想了解Mysql在PHP中的应用，可以访问我们的 [PHP中使用Mysql介绍](http://www.w3cschool.cc/php/php-mysql-intro.html)。 


PHP提供了多种方式来访问和操作Mysql数据库记录。PHP Mysql函数格式如下：

 
```

mysql_function(value,value,...);

```
 以上格式中 function部分描述了mysql函数的功能，如 
```

mysqli_connect($connect);
mysqli_query($connect,"SQL statement");
mysql_fetch_array()
mysql_connect(),mysql_close()

```

 以下实例展示了PHP调用mysql函数的语法：

 
```

<html>
<head>
<title>PHP with MySQL</title>
</head>
<body>
<?php
   $retval = mysql_function(value, [value,...]);
   if( !$retval )
   {
       die ( "Error: a related error message" );
   }
   // Otherwise MySQL  or PHP Statements
?>
</body>
</html>

```

 从下一章开始，我们将学习到更多的MySQL功能函数。

 

