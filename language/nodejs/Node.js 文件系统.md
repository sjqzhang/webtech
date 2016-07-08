 
#### Node.js 文件系统

  Node.js 文件系统封装在 fs 模块是中，它提供了文件的读取、写入、更名、删除、遍历目录、链接等POSIX 文件系统操作。

 与其他模块不同的是，fs 模块中所有的操作都提供了异步的和 同步的两个版本，例如读取文件内容的函数有异步的 fs.readFile() 和同步的 fs.readFileSync()。我们以几个函数为代表，介绍 fs 常用的功能，并列出 fs 所有函数 的定义和功能。 

 

#### fs.readFile

  Node.js读取文件函数语法如下： 

 
```

fs.readFile(filename,[encoding],[callback(err,data)])

```
 
filename（必选），表示要读取的文件名。 

encoding（可选），表示文件的字符编码。 

callback 是回调函数，用于接收文件的内容。


如果不指 定 encoding，则 callback 就是第二个参数。回调函数提供两个参数 err 和 data，err 表 示有没有错误发生，data 是文件内容。如果指定了 encoding，data 是一个解析后的字符 串，否则 data 将会是以 Buffer 形式表示的二进制数据。

  例如以下程序，我们从content.txt 中读取数据，但不指定编码：

 
```

varfs = require('fs'); 
fs.readFile('content.txt', function(err, data) { 
	if(err) { 
		console.error(err); 
	} else{ 
		console.log(data); 
	} 
}); 

```
 假设content.txt 中的内容是UTF-8 编码的 Text 文本文件示例，运行结果如下：

 
```

<Buffer 54 65 78 74 20 e6 96 87 e6 9c ac e6 96 87 e4 bb b6 e7 a4 ba e4 be 8b> 

```
  这个程序以二进制的模式读取了文件的内容，data 的值是 Buffer 对象。如果我们给 

  fs.readFile 的 encoding 指定编码： 

 
```

var fs = require('fs'); 
	fs.readFile('content.txt', 'utf-8', function(err, data) { 
	if (err) { 
		console.error(err); 
	} else { 
		console.log(data); 
	} 
}); 

```
  那么运行结果则是： 

 
```

Text 文本文件示例

```
  当读取文件出现错误时，err 将会是 Error 对象。如果content.txt 不存在，运行前面 的代码则会出现以下结果：

 
```

{ [Error: ENOENT, no such file or directory 'content.txt'] errno: 34, code: 'ENOENT', 
path: 'content.txt' } 

```
 

#### fs.readFileSync

  

####  fs.readFileSync(filename, [encoding])

是 fs.readFile 同步的版本。它接受 的参数和 fs.readFile 相同，而读取到的文件内容会以函数返回值的形式返回。如果有错 误发生，fs 将会抛出异常，你需要使用 try 和 catch 捕捉并处理异常。 

 

#### 注意：

与同步I/O 函数不同，Node.js 中异步函数大多没有返回值。

 

#### fs.open

 fs.open(path, flags, [mode], [callback(err, fd)])是POSIX open 函数的 封装，与C 语言标准库中的 fopen 函数类似。它接受两个必选参数，path 为文件的路径， flags 可以是以下值。

 
r ：以读取模式打开文件。
 r+ ：以读写模式打开文件。
 w ：以写入模式打开文件，如果文件不存在则创建。
 w+ ：以读写模式打开文件，如果文件不存在则创建。
 a ：以追加模式打开文件，如果文件不存在则创建。
 a+ ：以读取追加模式打开文件，如果文件不存在则创建
 


#### fs.read

 fs.read语法格式如下：

 
```

fs.read(fd, buffer, offset, length, position, [callback(err, bytesRead, buffer)])

```
 参数说明：

 
fd: 读取数据并写入 buffer 指向的缓冲区对象。
 offset: 是buffer 的写入偏移量。
 length: 是要从文件中读取的字节数。
 position: 是文件读取的起始位置，如果 position 的值为 null，则会从当前文件指针的位置读取。
 callback:回调函数传递bytesRead 和 buffer，分别表示读取的字节数和缓冲区对象。
 
 以下是一个使用 fs.open 和 fs.read 的示例。 

 
```

varfs = require('fs'); 
fs.open('content.txt', 'r', function(err, fd) { 
	if(err) { 
		console.error(err); 
		return; 
	} 
	varbuf = newBuffer(8); 
	fs.read(fd, buf, 0, 8, null, function(err, bytesRead, buffer) { 
		if(err) { 
			console.error(err); 
			return; 
		} 
		console.log('bytesRead: ' + bytesRead); 
		console.log(buffer); 
	}) 
}); 

```

 运行结果是：

 
```

bytesRead: 8 
<Buffer 54 65 78 74 20 e6 96 87> 

```
 一般来说，除非必要，否则不要使用这种方式读取文件，因为它要求你手动管理缓冲区 和文件指针，尤其是在你不知道文件大小的时候，这将会是一件很麻烦的事情。 

 

#### fs 模块函数表

 ![http://www.w3cschool.cc/wp-content/uploads/2014/04/nodejs-file1.png](http://www.w3cschool.cc/wp-content/uploads/2014/04/nodejs-file1.png)

  ![http://www.w3cschool.cc/wp-content/uploads/2014/04/nodejs-file2.png](http://www.w3cschool.cc/wp-content/uploads/2014/04/nodejs-file2.png)

 更多详情可点击查看：[http://nodejs.org/api/fs.html](http://www.w3cschool.cc//nodejs.org/api/fs.html)

 

