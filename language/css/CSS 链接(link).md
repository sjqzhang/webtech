 CSS 链接  
不同的链接可以有不同的样式。

 

#### 链接样式

 链接的样式，可以用任何CSS属性（如颜色，字体，背景等）。

 特别的链接，可以有不同的样式，这取决于他们是什么状态。

 这四个链接状态是： 

 
a:link - 正常，未访问过的链接
 a:visited - 用户已访问过的链接
 a:hover - 当用户鼠标放在链接上时
 a:active - 链接被点击的那一刻
 
 
#### 实例

 
```
 a:link {color:#FF0000;}      /* unvisited link */

 a:visited {color:#00FF00;}  /* visited link */

 a:hover {color:#FF00FF;}  /* mouse over link */

 a:active {color:#0000FF;}  /* selected link */ 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_link) 

 当设置为若干链路状态的样式，也有一些顺序规则：

 
a:hover 必须跟在 a:link 和 a:visited后面
 a:active 必须跟在 a:hover后面
 


#### 常见的链接样式

 根据上述链接的颜色变化的例子，看它是在什么状态。

 让我们通过一些其他常见的方式转到链接样式：

 
#### 文本修饰

 text-decoration 属性主要用于删除链接中的下划线：

  
#### 实例

 
```
 a:link {text-decoration:none;}

 a:visited {text-decoration:none;}

 a:hover {text-decoration:underline;}

 a:active {text-decoration:underline;}


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_link_decoration) 

 
#### 背景颜色

 背景颜色属性指定链接背景色：

  
#### 实例

 
```
 a:link {background-color:#B2FF99;}

 a:visited {background-color:#FFFF85;}

 a:hover {background-color:#FF704D;}

 a:active {background-color:#FF704D;} 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_link_background) 

 


 ![http://www.w3cschool.cc/images/tryitimg.gif](http://www.w3cschool.cc/images/tryitimg.gif)
#### More Examples

 

 [添加不同样式的超链接](http://www.w3cschool.cc/try/try.php?filename=trycss_link2)

 这个例子演示了如何为超链接添加其他样式。

 [高级 - 创建链接框](http://www.w3cschool.cc/try/try.php?filename=trycss_link_advanced)

 这个例子演示了一个更高级的例子，我们结合若干CSS属性显示为方框。

 

