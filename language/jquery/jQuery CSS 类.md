  .important { font-size:x-large; font-weight:bold; color:#c3c3c3; } 
jQuery - 获取并设置 CSS 类  
通过 jQuery，可以很容易地对 CSS 元素进行操作。 切换 CSS 类

 

#### jQuery 操作 CSS

 jQuery 拥有若干进行 CSS 操作的方法。我们将学习下面这些：

 
addClass() - 向被选元素添加一个或多个类
 removeClass() - 从被选元素删除一个或多个类
 toggleClass() - 对被选元素进行添加/删除类的切换操作
 css() - 设置或返回样式属性
 


#### 实例样式表

 下面的样式表将用于本页的所有例子：

 
```
 .important

 {

 font-weight:bold;

 font-size:xx-large;

 }



 .blue

 {

 color:blue;

 }




```
 



#### jQuery addClass() 方法

 下面的例子展示如何向不同的元素添加 class 属性。当然，在添加类时，您也可以选取多个元素：

  
#### 实例

 
```
 $("button").click(function(){

   $("h1,h2,p").addClass("blue");

   $("div").addClass("important");

 }); 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_dom_addclass) 

 您也可以在 addClass() 方法中规定多个类：

  
#### 实例

 
```
 $("button").click(function(){

   $("#div1").addClass("important blue");

 }); 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_dom_addclass2) 

 



#### jQuery removeClass() 方法

 下面的例子演示如何在不同的元素中删除指定的 class 属性：

  
#### 实例

 
```
 $("button").click(function(){

   $("h1,h2,p").removeClass("blue");

 }); 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_dom_removeclass) 

 



#### jQuery toggleClass() 方法

 下面的例子将展示如何使用 jQuery toggleClass() 方法。该方法对被选元素进行添加/删除类的切换操作：

  
#### 实例

 
```
 $("button").click(function(){

   $("h1,h2,p").toggleClass("blue");

 }); 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_dom_toggleclass) 

 



#### jQuery css() 方法

 我们将在下一章讲解 jQuery css() 方法。

 

