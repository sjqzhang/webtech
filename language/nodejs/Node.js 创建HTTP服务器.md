 
#### Node.js 创建HTTP服务器

  如果我们使用PHP来编写后端的代码时，需要Apache 或者 Nginx 的HTTP 服务器，并配上 mod_php5 模块和php-cgi。 

  从这个角度看，整个"接收 HTTP 请求并提供 Web 页面"的需求根本不需 要 PHP 来处理。


 不过对 Node.js 来说，概念完全不一样了。使用 Node.js 时，我们不仅仅 在实现一个应用，同时还实现了整个 HTTP 服务器。事实上，我们的 Web 应用以及对应的 Web 服务器基本上是一样的。

 

#### 基础的 HTTP 服务器

  在你的项目的根目录下创建一个叫 server.js 的文件，并写入以下代码： 

 
```

var http = require('http');

http.createServer(function (request, response) {
  response.writeHead(200, {'Content-Type': 'text/plain'});
  response.end('Hello World\n');
}).listen(8888);

console.log('Server running at http://127.0.0.1:8888/');

```
 以上代码我们完成了一个可以工作的 HTTP 服务器。 

 使用 node命令 执行以上的代码：

 
```

node server.js
Server running at http://127.0.0.1:8888/

```
 ![http://www.w3cschool.cc/wp-content/uploads/2014/03/cmdrun.jpg](http://www.w3cschool.cc/wp-content/uploads/2014/03/cmdrun.jpg)

  接下来，打开浏览器访问 http://127.0.0.1:8888/，你会看到一个写着 "Hello World"的网页。 

 ![http://www.w3cschool.cc/wp-content/uploads/2014/03/nodejs-helloworld.jpg](http://www.w3cschool.cc/wp-content/uploads/2014/03/nodejs-helloworld.jpg)

 

#### 分析Node.js 的 HTTP 服务器：



 
 第一行请求（require）Node.js 自带的 http 模块，并且把它赋值给 http 变量。

 接下来我们调用 http 模块提供的函数： createServer 。这个函数会返回 一个对象，这个对象有一个叫做 listen 的方法，这个方法有一个数值参数， 指定这个 HTTP 服务器监听的端口号。 
 


