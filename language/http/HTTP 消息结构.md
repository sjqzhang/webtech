 
#### HTTP 消息结构

  HTTP是基于客户端/服务端（C/S）的架构模型，通过一个可靠的链接来交换信息，是一个无状态的请求/响应协议。

 一个HTTP"客户端"是一个应用程序（Web浏览器或其他任何客户端），通过连接到服务器达到向服务器发送一个或多个HTTP的请求的目的。

 一个HTTP"服务器"同样也是一个应用程序（通常是一个Web服务，如Apache Web服务器或IIS服务器等），通过接收客户端的请求并向客户端发送HTTP响应数据。 HTTP使用统一资源标识符（Uniform Resource Identifiers, URI）来传输数据和建立连接。

 一旦建立连接后，数据消息就通过类似Internet邮件所使用的格式[RFC5322]和多用途Internet邮件扩展（MIME）[RFC2045]来传送。




 
客户端请求消息
#### 



客户端发送一个HTTP请求到服务器的请求消息包括以下格式：请求行（request line）、请求头部（header）、空行和请求数据4个部分组成，下图给出了请求报文的一般格式。

 ![http://www.w3cschool.cc/wp-content/uploads/2013/11/2012072810301161.png](http://www.w3cschool.cc/wp-content/uploads/2013/11/2012072810301161.png)

 

#### 服务器响应消息

 HTTP响应也由三个部分组成，分别是：状态行、消息报头、响应正文。

 ![http://www.w3cschool.cc/wp-content/uploads/2013/11/httpmessage.jpg](http://www.w3cschool.cc/wp-content/uploads/2013/11/httpmessage.jpg)

 



#### 实例

 下面实例是一点典型的使用GET来传递数据的实例：

 客户端请求：

 
```

GET /hello.txt HTTP/1.1
User-Agent: curl/7.16.3 libcurl/7.16.3 OpenSSL/0.9.7l zlib/1.2.3
Host: www.example.com
Accept-Language: en, mi

```
 服务端响应:

 
```

HTTP/1.1 200 OK
Date: Mon, 27 Jul 2009 12:28:53 GMT
Server: Apache
Last-Modified: Wed, 22 Jul 2009 19:15:56 GMT
ETag: "34aa387-d-1568eb00"
Accept-Ranges: bytes
Content-Length: 51
Vary: Accept-Encoding
Content-Type: text/plain

```
 输出结果：

 
```

Hello World! My payload includes a trailing CRLF.

```
 

