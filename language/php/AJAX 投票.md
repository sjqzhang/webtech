 PHP 实例 - AJAX 投票  

#### AJAX 投票

 在下面的实例中，我们将演示一个投票程序，通过它，投票结果在网页不进行刷新的情况下被显示。

  
#### Do you like PHP and AJAX so far?

  Yes: 

 No: 
 

 

#### 实例解释 - HTML 页面

 当用户选择上面的某个选项时，会执行名为 "getVote()" 的函数。该函数由 "onclick" 事件触发： 

 
```
 <html>

 <head>

 <script>

 function getVote(int)

 {

 if (window.XMLHttpRequest)

 {// code for IE7+, Firefox, Chrome, Opera, Safari

 xmlhttp=new XMLHttpRequest();

 }

 else

 {// code for IE6, IE5

 xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");

 }

 xmlhttp.onreadystatechange=function()

 {

 if (xmlhttp.readyState==4 &amp;&amp; xmlhttp.status==200)

 {

 document.getElementById("poll").innerHTML=xmlhttp.responseText;

 }

 }

 xmlhttp.open("GET","poll_vote.php?vote="+int,true);

 xmlhttp.send();

 }

 </script>

 </head>

 <body>



 <div id="poll">

 <h3>Do you like PHP and AJAX so far?</h3>

 <form>

 Yes:

 <input type="radio" name="vote" value="0" onclick="getVote(this.value)">

 <br>No:

 <input type="radio" name="vote" value="1" onclick="getVote(this.value)">

 </form>

 </div>



 </body>

 </html> 




```
 getVote() 函数会执行以下步骤：

 
创建 XMLHttpRequest 对象
 创建在服务器响应就绪时执行的函数
 向服务器上的文件发送请求
 请注意添加到 URL 末端的参数（q）（包含下拉列表的内容）
 


#### PHP 文件

 上面这段通过 JavaScript 调用的服务器页面是名为 "poll_vote.php" 的 PHP 文件：

 
```
 <?php

 $vote = $_REQUEST['vote'];



 //get content of textfile

 $filename = "poll_result.txt";

 $content = file($filename);



 //put content in array

 $array = explode("||", $content[0]);

 $yes = $array[0];

 $no = $array[1];



 if ($vote == 0)

 {

 $yes = $yes + 1;

 }

 if ($vote == 1)

 {

 $no = $no + 1;

 }



 //insert votes to txt file

 $insertvote = $yes."||".$no;

 $fp = fopen($filename,"w");

 fputs($fp,$insertvote);

 fclose($fp);

 ?>



 <h2>Result:</h2>

 <table>

 <tr>

 <td>Yes:</td>

 <td>

 <img src="http://www.w3cschool.cc/php/poll.gif"

 width='<?php echo(100*round($yes/($no+$yes),2)); ?>'

 height='20'>

 <?php echo(100*round($yes/($no+$yes),2)); ?>%

 </td>

 </tr>

 <tr>

 <td>No:</td>

 <td>

 <img src="http://www.w3cschool.cc/php/poll.gif"

 width='<?php echo(100*round($no/($no+$yes),2)); ?>'

 height='20'>

 <?php echo(100*round($no/($no+$yes),2)); ?>%

 </td>

 </tr>

 </table> 




```
 当所选的值从 JavaScript 发送到 PHP 文件时，将发生：

 
获取 "poll_result.txt" 文件的内容
 把文件内容放入变量，并向被选变量累加 1
 把结果写入 "poll_result.txt" 文件
 输出图形化的投票结果
 


#### 文本文件

 文本文件（poll_result.txt）中存储来自投票程序的数据。 

 它存储的数据如下所示：

 
```
 3||4 




```
 第一个数字表示 "Yes" 的投票数，第二个数字表示 "No" 的投票数。

 注释：请记得只允许您的 Web 服务器来编辑该文本文件。不要让其他人获得访问权，除了 Web 服务器 (PHP)。

 

