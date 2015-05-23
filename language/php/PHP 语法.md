 PHP 语法  
PHP 脚本在服务器上执行，然后将纯 HTML 结果发送回浏览器。

 

#### 基本的 PHP 语法

 PHP 脚本可以放在文档中的任何位置。

 PHP 脚本以 <?php 开始，以 ?> 结束：

 
```
 <?php

 // PHP code goes here

 ?> 




```
 PHP 文件的默认文件扩展名是 ".php"。

 PHP 文件通常包含 HTML 标签和一些 PHP 脚本代码。

 下面，我们提供了一个简单的 PHP 文件实例，它可以向浏览器输出文本 "Hello World!"：

  
#### 实例

 
```
 <!DOCTYPE html>

 <html>

 <body>



 <h1>My first PHP page</h1>



<?php

 echo "Hello World!";

 ?>



 </body>

 </html> 


```
 

[运行实例 »](http://www.w3cschool.cc/try/showphp.php?filename=demo_syntax) 

 PHP 中的每个代码行都必须以分号结束。分号是一种分隔符，用于把指令集区分开来。

 通过 PHP，有两种在浏览器输出文本的基础指令：echo 和 print。

 

#### PHP 中的注释

  
#### 实例

 
```
 <!DOCTYPE html>

 <html>

 <body>



<?php

 //This is a PHP comment line



 /*

 This is

 a PHP comment

 block

 */

 ?>



 </body>

 </html> 


```
 

[运行实例 »](http://www.w3cschool.cc/try/showphp.php?filename=demo_syntax_comments) 

 

