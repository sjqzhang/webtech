 JavaScript HTML DOM  
通过 HTML DOM，可访问 JavaScript HTML 文档的所有元素。

 

#### HTML DOM (文档对象模型)

 当网页被加载时，浏览器会创建页面的文档对象模型（Document Object Model）。 

 

#### HTML DOM

 模型被构造为

#### 对象

的树：

  
#### HTML DOM 树

 
```
 ![http://www.w3cschool.cc/images/pic_htmltree.gif](http://www.w3cschool.cc/images/pic_htmltree.gif)



```
 

 通过可编程的对象模型，JavaScript 获得了足够的能力来创建动态的 HTML。 

 
JavaScript 能够改变页面中的所有 HTML 元素
 JavaScript 能够改变页面中的所有 HTML 属性
 JavaScript 能够改变页面中的所有 CSS 样式
 JavaScript 能够对页面中的所有事件做出反应
 


#### 查找 HTML 元素

 通常，通过 JavaScript，您需要操作 HTML 元素。

 为了做到这件事情，您必须首先找到该元素。有三种方法来做这件事：

 
通过 id 找到 HTML 元素
 通过标签名找到 HTML 元素
 通过类名找到 HTML 元素
 


#### 通过 id 查找 HTML 元素

 在 DOM 中查找 HTML 元素的最简单的方法，是通过使用元素的 id。

 本例查找 id="intro" 元素：

  
#### 实例

 
```
 var x=document.getElementById("intro"); 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=try_dom_getelementbyid) 

 如果找到该元素，则该方法将以对象（在 x 中）的形式返回该元素。

 如果未找到该元素，则 x 将包含 null。

 

#### 通过标签名查找 HTML 元素

 本例查找 id="main" 的元素，然后查找 id="main" 元素中的所有 <p> 元素：

  
#### 实例

 
```
 var x=document.getElementById("main");

var y=x.getElementsByTagName("p"); 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=try_dom_getelementsbytagname) 

 



#### HTML DOM 教程

 在本教程接下来的篇幅中，您将学到：

 
如何改变 HTML 元素的内容 (innerHTML)
 如何改变 HTML 元素的样式 (CSS)
 如何对 HTML DOM 事件对出反应
 如何添加或删除 HTML 元素
 


