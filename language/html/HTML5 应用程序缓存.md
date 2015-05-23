 HTML5 应用程序缓存  
使用 HTML5，通过创建 cache manifest 文件，可以轻松地创建 web 应用的离线版本。

 

#### 什么是应用程序缓存（Application Cache）？

 HTML5 引入了应用程序缓存，这意味着 web 应用可进行缓存，并可在没有因特网连接时进行访问。

 应用程序缓存为应用带来三个优势：

 
离线浏览 - 用户可在应用离线时使用它们
 速度 - 已缓存资源加载得更快
 减少服务器负载 - 浏览器将只从服务器下载更新过或更改过的资源。
 


#### 浏览器支持

  ![http://www.w3cschool.cc/images/compatible_ie.gif](http://www.w3cschool.cc/images/compatible_ie.gif)![http://www.w3cschool.cc/images/compatible_firefox.gif](http://www.w3cschool.cc/images/compatible_firefox.gif)![http://www.w3cschool.cc/images/compatible_opera.gif](http://www.w3cschool.cc/images/compatible_opera.gif)![http://www.w3cschool.cc/images/compatible_chrome.gif](http://www.w3cschool.cc/images/compatible_chrome.gif)![http://www.w3cschool.cc/images/compatible_safari.gif](http://www.w3cschool.cc/images/compatible_safari.gif)

 Internet Explorer 10, Firefox, Chrome, Safari 和 Opera 支持应用程序缓存.

 

#### HTML5 Cache Manifest 实例

 下面的例子展示了带有 cache manifest 的 HTML 文档（供离线浏览）：

  
#### 实例

 
```
 <!DOCTYPE HTML>

 <html manifest="demo.appcache">



 <body>

 The content of the document......

 </body>



 </html>


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml5_html_manifest) 

 



#### Cache Manifest 基础

 如需启用应用程序缓存，请在文档的<html> 标签中包含 manifest 属性： 

 
```
 <!DOCTYPE HTML>

 <html manifest="demo.appcache">

 ...

 </html> 




```
 每个指定了 manifest 的页面在用户对其访问时都会被缓存。如果未指定 manifest 属性，则页面不会被缓存（除非在 manifest 文件中直接指定了该页面）。

 Tmanifest 文件的建议的文件扩展名是：".appcache"。

 ![http://www.w3cschool.cc/images/lamp.gif](http://www.w3cschool.cc/images/lamp.gif) 请注意，manifest 文件需要配置正确的 MIME-type，即 "text/cache-manifest"。必须在 web 服务器上进行配置。 

 

#### Manifest 文件

 manifest 文件是简单的文本文件，它告知浏览器被缓存的内容（以及不缓存的内容）。

 manifest 文件可分为三个部分：

 

CACHE MANIFEST - 在此标题下列出的文件将在首次下载后进行缓存
 
NETWORK - 在此标题下列出的文件需要与服务器的连接，且不会被缓存
 
FALLBACK - 在此标题下列出的文件规定当页面无法访问时的回退页面（比如 404 页面）
 

#### CACHE MANIFEST

 第一行，CACHE MANIFEST，是必需的：

 
```
 CACHE MANIFEST

 /theme.css

 /logo.gif

 /main.js 




```
 上面的 manifest 文件列出了三个资源：一个 CSS 文件，一个 GIF 图像，以及一个 JavaScript 文件。当 manifest 文件加载后，浏览器会从网站的根目录下载这三个文件。然后，无论用户何时与因特网断开连接，这些资源依然是可用的。

 
#### NETWORK

 下面的 NETWORK 小节规定文件 "login.php" 永远不会被缓存，且离线时是不可用的：

 
```
 NETWORK:

 login.php




```
 可以使用星号来指示所有其他其他资源/文件都需要因特网连接：

 
```
 NETWORK:

 *




```
 
#### FALLBACK

 下面的 FALLBACK 小节规定如果无法建立因特网连接，则用 "offline.html" 替代 /html5/ 目录中的所有文件：

 
```
 FALLBACK:

 /html/ /offline.html




```
 

#### 注意:

 第一个 URI 是资源，第二个是替补。

 

#### 更新缓存

 一旦应用被缓存，它就会保持缓存直到发生下列情况：

 
用户清空浏览器缓存
 manifest 文件被修改（参阅下面的提示）
 由程序来更新应用缓存
 

#### 实例 - 完整的 Manifest 文件

 
```
 CACHE MANIFEST

 # 2012-02-21 v1.0.0

 /theme.css

 /logo.gif

 /main.js



 NETWORK:

 login.php



 FALLBACK:

 /html/ /offline.html




```
 ![http://www.w3cschool.cc/images/lamp.gif](http://www.w3cschool.cc/images/lamp.gif)提示:以 "#" 开头的是注释行，但也可满足其他用途。应用的缓存会在其 manifest 文件更改时被更新。如果您编辑了一幅图片，或者修改了一个 JavaScript 函数，这些改变都不会被重新缓存。更新注释行中的日期和版本号是一种使浏览器重新缓存文件的办法。

 

#### 关于应用程序缓存的说明

 请留心缓存的内容。

 一旦文件被缓存，则浏览器会继续展示已缓存的版本，即使您修改了服务器上的文件。为了确保浏览器更新缓存，您需要更新 manifest 文件。

 

#### 注意:

 浏览器对缓存数据的容量限制可能不太一样（某些浏览器设置的限制是每个站点 5MB）。

 

