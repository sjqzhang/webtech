 PHP Sessions  
PHP session 变量用于存储关于用户会话（session）的信息，或者更改用户会话（session）的设置。Session 变量存储单一用户的信息，并且对于应用程序中的所有页面都是可用的。

 

#### PHP Session 变量

 您在计算机上操作某个应用程序时，您打开它，做些更改，然后关闭它。这很像一次对话（Session）。计算机知道您是谁。它清楚您在何时打开和关闭应用程序。然而，在因特网上问题出现了：由于 HTTP 地址无法保持状态，Web 服务器并不知道您是谁以及您做了什么。

 PHP session 解决了这个问题，它通过在服务器上存储用户信息以便随后使用（比如用户名称、购买商品等）。然而，会话信息是临时的，在用户离开网站后将被删除。如果您需要永久存储信息，可以把数据存储在数据库中。

 Session 的工作机制是：为每个访客创建一个唯一的 id (UID)，并基于这个 UID 来存储变量。UID 存储在 cookie 中，或者通过 URL 进行传导。

 

#### 开始 PHP Session

 在您把用户信息存储到 PHP session 中之前，首先必须启动会话。

 注释：session_start() 函数必须位于 <html> 标签之前：

 
```
 <?php session_start(); ?>



 <html>

 <body>



 </body>

 </html> 




```
 上面的代码会向服务器注册用户的会话，以便您可以开始保存用户信息，同时会为用户会话分配一个 UID。

 

#### 存储 Session 变量

 存储和取回 session 变量的正确方法是使用 PHP $_SESSION 变量：

 
```
 <?php

 session_start();

 // store session data

 $_SESSION['views']=1;

 ?>



 <html>

 <body>



 <?php

 //retrieve session data

 echo "Pageviews=". $_SESSION['views'];

 ?>



 </body>

 </html> 




```
 输出：

 
```
 Pageviews=1 




```
 在下面的实例中，我们创建了一个简单的 page-view 计数器。isset() 函数检测是否已设置 "views" 变量。如果已设置 "views" 变量，我们累加计数器。如果 "views" 不存在，则创建 "views" 变量，并把它设置为 1：

 
```
 <?php

 session_start();



 if(isset($_SESSION['views']))

 $_SESSION['views']=$_SESSION['views']+1;

 else

 $_SESSION['views']=1;

 echo "Views=". $_SESSION['views'];

 ?> 




```
 



#### 销毁 Session

 如果您希望删除某些 session 数据，可以使用 unset() 或 session_destroy() 函数。

 unset() 函数用于释放指定的 session 变量：

 
```
 <?php

 session_start();

 if(isset($_SESSION['views']))

 unset($_SESSION['views']);

 ?> 




```
 您也可以通过调用 session_destroy() 函数彻底销毁 session：

 
```
 <?php

 session_destroy();

 ?> 




```
 注释：session_destroy() 将重置 session，您将失去所有已存储的 session 数据。

 

