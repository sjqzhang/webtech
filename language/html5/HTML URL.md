 HTML  统一资源定位器(Uniform Resource Locators)  
URL是一个网页地址。

 URL可以由字母组成，如"W3CSchools.cc"，或互联网协议（IP）地址： 192.68.20.50。大多数人进入网站使用网站域名来访问，因为 名字比数字更容易记住。

 

#### URL - 统一资源定位器

 Web浏览器通过URL从Web服务器请求页面。

 当您点击 HTML 页面中的某个链接时，对应的 <a> 标签指向万维网上的一个地址。

 一个统一资源定位器(URL) 用于定位万维网上的文档。

 一个网页地址实例: [ http://www.w3cschool.cc/html/html-tutorial.html](http://www.w3cschool.cc/html/html-tutorial.html) 语法规则:

 
```
 scheme://host.domain:port/path/filename 




```
 说明:

 
scheme - 定义因特网服务的类型。最常见的类型是 http
 host - 定义域主机（http 的默认主机是 www）
 domain - 定义因特网域名，比如 w3cschool.cc
 :port - 定义主机上的端口号（http 的默认端口号是 80）
 path - 定义服务器上的路径（如果省略，则文档必须位于网站的根目录中）。
 filename - 定义文档/资源的名称
 


#### 常见的 URL Schemes

 以下是一些URL scheme：

 

|Scheme|访问|用于...|
|:--|:--|:--|
|http|超文本传输协议|以 http:// 开头的普通网页。不加密。|
|https|安全超文本传输协议|安全网页。解密所有信息交换。|
|ftp|文件传输协议|用于将文件下载或上传至网站。|
|file| |您计算机上的文件。|





#### URL 字符编码

 URL 只能使用 [ASCII 字符集](http://www.w3cschool.cc/tags/html-ascii.html).

 来通过因特网进行发送。由于 URL 常常会包含 ASCII 集合之外的字符，URL 必须转换为有效的 ASCII 格式。

 URL 编码使用 "%" 其后跟随两位的十六进制数来替换非 ASCII 字符。

 URL 不能包含空格。URL 编码通常使用 + 来替换空格。

 

#### 在线实例

 如果您点击下面的"提交"按钮，浏览器会在发送输入之前对其进行 URL 编码。服务器上的页面会显示出接收到的输入。

  
 试着输入一些字符，然后再次点击提交按钮。

 

#### URL 编码实例

 

|字符|URL 编码|
|:--|:--|
|€|%80|
|£|%A3|
|©|%A9|
|®|%AE|
|À|%C0|
|Á|%C1|
|Â|%C2|
|Ã|%C3|
|Ä|%C4|
|Å|%C5|

 如需完整的 URL 编码参考，请访问我们的 [URL 编码参考手册](http://www.w3cschool.cc/tags/html-urlencode.html)。

 






