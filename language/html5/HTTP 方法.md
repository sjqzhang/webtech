 HTTP 方法：GET 对比 POST
 
两种最常用的 HTTP 方法是：GET 和 POST。

 

#### 什么是 HTTP ？

 超文本传输协议（HTTP）的设计目的是保证客户端与服务器之间的通信。

 HTTP 的工作方式是客户端与服务器之间的请求-应答协议。

 web 浏览器可能是客户端，而计算机上的网络应用程序也可能作为服务器端。

 举例：客户端（浏览器）向服务器提交 HTTP 请求；服务器向客户端返回响应。响应包含关于请求的状态信息以及可能被请求的内容。

 

#### 两种 HTTP 请求方法：GET 和 POST

 在客户机和服务器之间进行请求-响应时，两种最常被用到的方法是：GET 和 POST。

 

GET - 从指定的资源请求数据。
 
POST - 向指定的资源提交要被处理的数据。
 


#### GET 方法

 请注意，查询字符串（名称/值对）是在 GET 请求的 URL 中发送的：

 
```
  /test/demo_form.php?name1=value1&amp;name2=value2 





```
 有关 GET 请求的其他一些注释：

 
GET 请求可被缓存
 GET 请求保留在浏览器历史记录中
 GET 请求可被收藏为书签
 GET 请求不应在处理敏感数据时使用
 GET 请求有长度限制
 GET 请求只应当用于取回数据
 


#### POST 方法

 请注意，查询字符串（名称/值对）是在 POST 请求的 HTTP 消息主体中发送的：

 
```
  POST /test/demo_form.php HTTP/1.1

 Host: w3cschool.cc

name1=value1&amp;name2=value2 





```
 有关 POST 请求的其他一些注释：

 
POST 请求不会被缓存
 POST 请求不会保留在浏览器历史记录中
 POST 不能被收藏为书签
 POST 请求对数据长度没有要求
 


#### 比较 GET 与 POST

 下面的表格比较了两种 HTTP 方法：GET 和 POST。

 

| |GET|POST|
|:--|:--|:--|
|后退按钮/刷新|无害|数据会被重新提交（浏览器应该告知用户数据会被重新提交）。|
|书签|可收藏为书签|不可收藏为书签|
|缓存|能被缓存|不能缓存|
|编码类型|application/x-www-form-urlencoded|application/x-www-form-urlencoded or multipart/form-data。为二进制数据使用多重编码。|
|历史|参数保留在浏览器历史中。|参数不会保存在浏览器历史中。|
|对数据长度的限制|是的。当发送数据时，GET 方法向 URL 添加数据；URL 的长度是受限制的（URL 的最大长度是 2048 个字符）。|无限制。|
|对数据类型的限制|只允许 ASCII 字符。|没有限制。也允许二进制数据。|
|安全性|与 POST 相比，GET 的安全性较差，因为所发送的数据是 URL 的一部分。 在发送密码或其他敏感信息时绝不要使用 GET ！|POST 比 GET 更安全，因为参数不会被保存在浏览器历史或 web 服务器日志中。|
|可见性|数据在 URL 中对所有人都是可见的。|数据不会显示在 URL 中。|





#### 其他 HTTP 请求方法

 下面的表格列出了其他一些 HTTP 请求方法：

 

|方法|描述|
|:--|:--|
|HEAD|与 GET 相同，但只返回 HTTP 报头，不返回文档主体。|
|PUT|上传指定的 URI 表示。|
|DELETE|删除指定资源。|
|OPTIONS|返回服务器支持的 HTTP 方法。|
|CONNECT|把请求连接转换到透明的 TCP/IP 通道。|



