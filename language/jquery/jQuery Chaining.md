 jQuery - Chaining  
通过 jQuery，可以把动作/方法链接在一起。

 Chaining 允许我们在一条语句中运行多个 jQuery 方法（在相同的元素上）。

 

#### jQuery 方法链接

 直到现在，我们都是一次写一条 jQuery 语句（一条接着另一条）。

 不过，有一种名为链接（chaining）的技术，允许我们在相同的元素上运行多条 jQuery 命令，一条接着另一条。

 提示： 这样的话，浏览器就不必多次查找相同的元素。

 如需链接一个动作，您只需简单地把该动作追加到之前的动作上。

 下面的例子把 css()、slideUp() 和 slideDown() 链接在一起。"p1" 元素首先会变为红色，然后向上滑动，再然后向下滑动：

  
#### 实例

 
```
 $("#p1").css("color","red").slideUp(2000).slideDown(2000);


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_chaining) 

 如果需要，我们也可以添加多个方法调用。

 提示：当进行链接时，代码行会变得很差。不过，jQuery 语法不是很严格；您可以按照希望的格式来写，包含换行和缩进。

 如下书写也可以很好地运行：

  
#### 实例

 
```
 $("#p1").css("color","red")

   .slideUp(2000)

   .slideDown(2000);


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_chaining2) 

 jQuery 会抛掉多余的空格，并当成一行长代码来执行上面的代码行。

 

