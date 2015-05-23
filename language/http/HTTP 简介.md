 
#### HTTP 简介

  HTTP协议是Hyper Text Transfer Protocol（超文本传输协议）的缩写,是用于从万维网（WWW:World Wide Web ）服务器传输超文本到本地浏览器的传送协议。。

 HTTP是一个基于TCP/IP通信协议来传递数据（HTML 文件, 图片文件, 查询结果等）。

 




#### HTTP 工作原理

 HTTP协议工作于客户端-服务端架构为上。浏览器作为HTTP客户端通过URL向HTTP服务端即WEB服务器发送所有请求。

 Web服务器有：Apache服务器，IIS服务器（Internet Information Services）等。

 Web服务器根据接收到的请求后，向客户端发送响应信息。

 HTTP默认端口号为80，但是你也可以改为8080或者其他端口。

 

#### HTTP三点注意事项：



 
HTTP是无连接：无连接的含义是限制每次连接只处理一个请求。服务器处理完客户的请求，并收到客户的应答后，即断开连接。采用这种方式可以节省传输时间。
 HTTP是媒体独立的：这意味着，只要客户端和服务器知道如何处理的数据内容，任何类型的数据都可以通过HTTP发送。客户端以及服务器指定使用适合的MIME-type内容类型。 

HTTP是无状态：HTTP协议是无状态协议。无状态是指协议对于事务处理没有记忆能力。缺少状态意味着如果后续处理需要前面的信息，则它必须重传，这样可能导致每次连接传送的数据量增大。另一方面，在服务器不需要先前信息时它的应答就较快。
 
以下图表展示了HTTP协议通信流程：

 ![http://www.w3cschool.cc/wp-content/uploads/2013/11/cgiarch.gif](http://www.w3cschool.cc/wp-content/uploads/2013/11/cgiarch.gif)

 

