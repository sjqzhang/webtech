 jQuery Mobile 页面  

#### 开始学习 jQuery Mobile

 

|  尽管jQuery Mobile兼容所有的移动设备，但是并不能完全兼容PC机（由于有限的CSS3支持）。 为了更好的阅读本教程，建议您使用 Google Chrome 浏览器。|



 
#### 实例

 
```
 <body>

<div data-role="page">



  <div data-role="header">

    <h1>欢迎来到我的主页</h1>

  </div>



  <div data-role="content">

    <p>我现在是一个移动端开发者!!</p>

  </div>



  <div data-role="footer">

    <h1>底部文本</h1>

  </div>



</div>

</body>


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_start) 

 

#### 实例解析：



 
 data-role="page" 是在浏览器中显示的页面。
  data-role="header" 是在页面顶部创建的工具条 (通常用于标题或者搜索按钮)
  data-role="content" 定义了页面的内容，比如文本， 图片，表单，按钮等。
  data-role="footer" 用于创建页面底部工具条。
 在这些容器中你可以添加任何 HTML 元素 - 段落, 图片, 标题, 列表等。
 


| jQuery Mobile 依赖 HTML5 data-* 属性来支持各种 UI 元素、过渡和页面结构。不支持它们的浏览器将以静默方式弃用它们。|





#### 在页面中添加 jQuery Mobile

 使用 jQuery Mobile, 你可以再单个 HTML 文件中创建多个不同的页面。

 你可以使用不同的href属性来区分使用同一个唯一id的页面：

  
#### 实例

 
```
 <div data-role="page" id="pageone">

  <div data-role="content">

    <a href="#pagetwo">Go to Page Two</a>

  </div>

</div>



<div data-role="page" id="pagetwo">

  <div data-role="content">

    <a href="#pageone">Go to Page One</a>

  </div>

</div>


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_pages) 

 

#### 注意：

 当web应用有大量的内容（文本，图片，脚本等）将会严重影响加载时间。如果你不想使用内页链接可以使用外部文件：

 
```
  <a href="http://www.w3cschool.cc/jquerymobile/externalfile.html">访问外部文件</a>

 


```
 



#### 页面作为对话框使用

 对话框是用于显示页面信息显示或者表单信息的输入。

 在链接中添加data-rel="dialog"让用户点击链接时弹出对话框:

  
#### 实例

 
```
 <div data-role="page" id="pageone">

  <div data-role="content">

    <a href="#pagetwo" data-rel="dialog">Go to Page Two</a>

  </div>

</div>



<div data-role="page" id="pagetwo">

  <div data-role="content">

    <a href="#pageone">Go to Page One</a>

  </div>

</div>


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_dialog) 

 

