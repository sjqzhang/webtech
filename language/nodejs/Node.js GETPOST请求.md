 
#### Node.js GET/POST请求

 在很多场景中，我们的服务器都需要跟用户的浏览器打交道，如表单提交。

 表单提交到服务器一般都使用GET/POST请求。

 本章节我们将为大家介绍 Node.js GET/POST请求。

 

#### 获取GET请求内容

  由于GET请求直接被嵌入在路径中，URL是完整的请求路径，包括了?后面的部分，因此你可以手动解析后面的内容作为GET请求的参数。 


 node.js中url模块中的parse函数提供了这个功能。

 
```

var http = require('http');
var url = require('url');
var util = require('util');

http.createServer(function(req, res){
    res.writeHead(200, {'Content-Type': 'text/plain'});
    res.end(util.inspect(url.parse(req.url, true)));
}).listen(3000);

```
 在浏览器中访问http://localhost:3000/user?name=w3c&amp;email=w3c@w3cschool.cc 然后查看返回结果: 

 ![http://www.w3cschool.cc/wp-content/uploads/2014/06/w3cnodejs.jpg](http://www.w3cschool.cc/wp-content/uploads/2014/06/w3cnodejs.jpg)

#### 获取POST请求内容

  POST请求的内容全部的都在请求体中，http.ServerRequest并没有一个属性内容为请求体，原因是等待请求体传输可能是一件耗时的工作。

  比如上传文件，而很多时候我们可能并不需要理会请求体的内容，恶意的POST请求会大大消耗服务器的资源，所有node.js默认是不会解析请求体的， 当你需要的时候，需要手动来做。 

 
```

var http = require('http');
var querystring = require('querystring');
var util = require('util');

http.createServer(function(req, res){
    var post = '';     //定义了一个post变量，用于暂存请求体的信息

    req.on('data', function(chunk){    //通过req的data事件监听函数，每当接受到请求体的数据，就累加到post变量中
        post += chunk;
    });

    req.on('end', function(){    //在end事件触发后，通过querystring.parse将post解析为真正的POST请求格式，然后向客户端返回。
        post = querystring.parse(post);
        res.end(util.inspect(post));
    });
}).listen(3000);

```
 

