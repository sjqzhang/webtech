 JavaScript 调试  
在编写 JavaScript 时，如果没有调试工具将是一件很痛苦的事情。

 

#### JavaScript 调试

 没有调试工具是很难去编写 JavaScript 程序的。

 你的代码可能包含语法错误，逻辑错误，如果没有调试工具，这些错误比较难于发现。

 通常，如果 JavaScript 出现错误，是不会有提示信息，这样你就无法找到代码错误的位置。

  

 

|   通常，你在编写一个新的 JavaScript 代码过程中都会发生错误。 |



#### JavaScript 调试工具

 在程序代码中寻找错误叫做代码调试。

 调试很难，但幸运的是，很多浏览器都内置了调试工具。

 内置的调试工具可以开始或关闭，严重的错误信息会发送给用户。

 有了调试工具，我们就可以设置断点 (代码停止执行的位置), 且可以在代码执行时检测变量。

 浏览器启用调试工具一般是按下 F12 键，并在调试菜单中选择 "Console" 。



 

#### console.log() 方法

 如果浏览器支持调试，你可以使用 console.log() 方法在调试窗口上打印 JavaScript 值：

  
#### 实例

 
```
 <!DOCTYPE html>

<html>

<body>



<h1>My First Web Page</h1>



 <script>

a = 5;

b = 6;

c = a + b;

console.log(c);

</script>



</body>

</html>


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjs_console) 

 



#### 设置断点

 在调试窗口中，你可以设置 JavaScript 代码的断点。

 在每个断点上，都会停止执行 JavaScript 代码，以便于我们检查 JavaScript 变量的值。

 在检查完毕后，可以重新执行代码（如播放按钮）。

 

#### debugger 关键字

 

#### debugger

 关键字用于停止执行 JavaScript，并调用调试函数。

 这个关键字与在调试工具中设置断点的效果是一样的。

 如果没有调试可用，debugger 语句将无法工作。

 开启 debugger ，代码在第三行前停止执行。

  
#### 实例

 
```
 var x = 15 * 5;

debugger;

document.getElementbyId("demo").innerHTML = x; 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjs_debugger) 

 



#### 主要浏览器的调试工具

 通常，浏览器启用调试工具一般是按下 F12 键，并在调试菜单中选择 "Console" 。

 各浏览器的步骤如下:

 
#### Chrome 浏览器

 
打开浏览器。
 在菜单中选择工具。
 在工具中选择开发者工具。
 最后，选择 Console。
 

#### Firefox 浏览器

 
打开浏览器。
 访问页面: 

http://www.getfirebug.com。
 按照说明 :

安装 Firebug。
 

#### Internet Explorer 浏览器。

 
打开浏览器。
 在菜单中选择工具。
 在工具中选择开发者工具。
 最后，选择 Console。
 

#### Opera

 
打开浏览器。
 Opera 的内置调试工具为 Dragonfly，详细说明可访问页面:

http://www.opera.com/dragonfly/。
 

#### Safari

 
打开浏览器。
 访问页面:

http://extentions.apple.com。
 按说明操作：

install Firebug Lite。
 


