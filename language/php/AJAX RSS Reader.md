 PHP 实例 - AJAX RSS 阅读器  
RSS 阅读器用于阅读 RSS Feed。

 

#### AJAX RSS 阅读器

 在下面的实例中，我们将演示一个 RSS 阅读器，通过它，来自 RSS 的内容在网页不进行刷新的情况下被载入：

  Select an RSS-feed:
Google News
MSNBC News
 

RSS-feed will be listed here...

 

#### 实例解释 - HTML 页面

 当用户在上面的下拉列表中选择某个 RSS-feed 时，会执行名为 "showRSS()" 的函数。该函数由 "onchange" 事件触发：

 
```
 <html>

 <head>

 <script>

 function showRSS(str)

 {

 if (str.length==0)

 { 

 document.getElementById("rssOutput").innerHTML="";

 return;

 }

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

 document.getElementById("rssOutput").innerHTML=xmlhttp.responseText;

 }

 }

 xmlhttp.open("GET","getrss.php?q="+str,true);

 xmlhttp.send();

 }

 </script>

 </head>

 <body>



 <form>

 <select onchange="showRSS(this.value)">

 <option value="">Select an RSS-feed:</option>

 <option value="Google">Google News</option>

 <option value="MSNBC">MSNBC News</option>

 </select>

 </form>

 <br>

 <div id="rssOutput">RSS-feed will be listed here...</div>

 </body>

 </html> 




```
 showRSS() 函数会执行以下步骤：

 
检查是否有 RSS-feed 被选择
 创建 XMLHttpRequest 对象
 创建在服务器响应就绪时执行的函数
 向服务器上的文件发送请求
 请注意添加到 URL 末端的参数（q）（包含下拉列表的内容）
 


#### PHP 文件

 上面这段通过 JavaScript 调用的服务器页面是名为 "getrss.php" 的 PHP 文件：

 
```
 <?php

 //get the q parameter from URL

 $q=$_GET["q"];



 //find out which feed was selected

 if($q=="Google")

 {

 $xml=("http://news.google.com/news?ned=us&amp;topic=h&amp;output=rss");

 }

 elseif($q=="MSNBC")

 {

 $xml=("http://rss.msnbc.msn.com/id/3032091/device/rss/rss.xml");

 }



 $xmlDoc = new DOMDocument();

 $xmlDoc->load($xml);



 //get elements from "<channel>"

 $channel=$xmlDoc->getElementsByTagName('channel')->item(0);

 $channel_title = $channel->getElementsByTagName('title')

 ->item(0)->childNodes->item(0)->nodeValue;

 $channel_link = $channel->getElementsByTagName('link')

 ->item(0)->childNodes->item(0)->nodeValue;

 $channel_desc = $channel->getElementsByTagName('description')

 ->item(0)->childNodes->item(0)->nodeValue;



 //output elements from "<channel>"

 echo("<p><a href='http://www.w3cschool.cc/php/" . $channel_link

 . "'>" . $channel_title . "</a>");

 echo("<br>");

 echo($channel_desc . "</p>");



 //get and output "<item>" elements

 $x=$xmlDoc->getElementsByTagName('item');

 for ($i=0; $i<=2; $i++)

 {

 $item_title=$x->item($i)->getElementsByTagName('title')

 ->item(0)->childNodes->item(0)->nodeValue;

 $item_link=$x->item($i)->getElementsByTagName('link')

 ->item(0)->childNodes->item(0)->nodeValue;

 $item_desc=$x->item($i)->getElementsByTagName('description')

 ->item(0)->childNodes->item(0)->nodeValue;



 echo ("<p><a href='http://www.w3cschool.cc/php/" . $item_link

 . "'>" . $item_title . "</a>");

 echo ("<br>");

 echo ($item_desc . "</p>");

 }

 ?> 




```
 当 RSS feed 的请求从 JavaScript 发送到 PHP 文件时，将发生：

 
检查哪个 RSS feed 被选中
 创建一个新的 XML DOM 对象
 在 xml 变量中加载 RSS 文档
 从 channel 元素中提取并输出元素
 从 item 元素中提取并输出元素
 


