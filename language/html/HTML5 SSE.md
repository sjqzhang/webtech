 HTML5 服务器发送事件(Server-Sent Events)  
HTML5 服务器发送事件（server-sent event）允许网页获得来自服务器的更新。

 

#### Server-Sent 事件 - 单向消息传递

 Server-Sent 事件指的是网页自动获取来自服务器的更新。

 以前也可能做到这一点，前提是网页不得不询问是否有可用的更新。通过服务器发送事件，更新能够自动到达。

 例子：Facebook/Twitter 更新、估价更新、新的博文、赛事结果等。

 

#### 浏览器支持

  ![http://www.w3cschool.cc/images/incompatible_ie.gif](http://www.w3cschool.cc/images/incompatible_ie.gif)![http://www.w3cschool.cc/images/compatible_firefox.gif](http://www.w3cschool.cc/images/compatible_firefox.gif)![http://www.w3cschool.cc/images/compatible_opera.gif](http://www.w3cschool.cc/images/compatible_opera.gif)![http://www.w3cschool.cc/images/compatible_chrome.gif](http://www.w3cschool.cc/images/compatible_chrome.gif)![http://www.w3cschool.cc/images/compatible_safari.gif](http://www.w3cschool.cc/images/compatible_safari.gif)

 所有主流浏览器均支持服务器发送事件，除了 Internet Explorer。

 

#### 接收 Server-Sent 事件通知

 EventSource 对象用于接收服务器发送事件通知：

  
#### 实例

 
```
 var source=new EventSource("demo_sse.php");

source.onmessage=function(event)

  {

  document.getElementById("result").innerHTML+=event.data + "<br>";

  };


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml5_sse) 

 实例解析：

 
创建一个新的 EventSource 对象，然后规定发送更新的页面的 URL（本例中是 "demo_sse.php"）
 每接收到一次更新，就会发生 onmessage 事件
 当 onmessage 事件发生时，把已接收的数据推入 id 为 "result" 的元素中
 


#### 检测 Server-Sent 事件支持

 以下实例，我们编写了一段额外的代码来检测服务器发送事件的浏览器支持情况：

 
```
  if(typeof(EventSource)!=="undefined")

   {

   // Yes! Server-sent events support!

   // Some code.....

   }

 else

   {

   // Sorry! No server-sent events support..

   } 

 


```
 



#### 服务器端代码实例

 为了让上面的例子可以运行，您还需要能够发送数据更新的服务器（比如 PHP 和 ASP）。

 服务器端事件流的语法是非常简单的。把 "Content-Type" 报头设置为 "text/event-stream"。现在，您可以开始发送事件流了。

 
```
 <?php

header('Content-Type: text/event-stream');

 header('Cache-Control: no-cache');



$time = date('r');

echo "data: The server time is: {$time}nn";

flush();

?> 




```
 ASP 代码 (VB) (demo_sse.asp):

 
```
 <%

Response.ContentType="text/event-stream"

Response.Expires=-1

 Response.Write("data: " &amp; now())

Response.Flush()

%> 




```
 代码解释:

 
把报头 "Content-Type" 设置为 "text/event-stream"
 规定不对页面进行缓存
 输出发送日期（始终以 "data: " 开头）
 向网页刷新输出数据
 
#### EventSource 对象

 在上面的例子中，我们使用 onmessage 事件来获取消息。不过还可以使用其他事件：

 

|事件|描述|
|:--|:--|
|onopen|当通往服务器的连接被打开|
|onmessage|当接收到消息|
|onerror|当发生错误|



