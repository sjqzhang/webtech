 jQuery 效果- 动画  
jQuery animate() 方法允许您创建自定义的动画。

 jQuery 动画实例



jQuery

 

#### jQuery 动画 - animate() 方法

 jQuery animate() 方法用于创建自定义动画。

 语法：

 
```
 $(selector).animate({params},speed,callback);




```
 必需的 params 参数定义形成动画的 CSS 属性。

 可选的 speed 参数规定效果的时长。它可以取以下值："slow"、"fast" 或毫秒。

 可选的 callback 参数是动画完成后所执行的函数名称。

 下面的例子演示 animate() 方法的简单应用。它把 <div> 元素往右边移动了 250 像素：

  
#### 实例

 
```
 $("button").click(function(){

   $("div").animate({left:'250px'});

 });  


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_animation1) 

 



| 默认情况下，所有 HTML 元素都有一个静态位置，且无法移动。 如需对位置进行操作，要记得首先把元素的 CSS position 属性设置为 relative、fixed 或 absolute！|





#### jQuery animate() - 操作多个属性

 请注意，生成动画的过程中可同时使用多个属性：

  
#### 实例

 
```
 $("button").click(function(){

   $("div").animate({

     left:'250px',

     opacity:'0.5',

     height:'150px',

     width:'150px'

   });

 });  


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_animation1_multicss) 

 



|  可以用 animate() 方法来操作所有 CSS 属性吗？是的，几乎可以！不过，需要记住一件重要的事情：当使用 animate() 时，必须使用 Camel 标记法书写所有的属性名，比如，必须使用 paddingLeft 而不是 padding-left，使用 marginRight 而不是 margin-right，等等。 同时，色彩动画并不包含在核心 jQuery 库中。 如果需要生成颜色动画，您需要从 jquery.com 下载 Color Animations 插件。 |





#### jQuery animate() - 使用相对值

 也可以定义相对值（该值相对于元素的当前值）。需要在值的前面加上 += 或 -=：

  
#### 实例

 
```
 $("button").click(function(){

   $("div").animate({

     left:'250px',

     height:'+=150px',

     width:'+=150px'

   });

 });  


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_animation1_relative) 

 



#### jQuery animate() - 使用预定义的值

 您甚至可以把属性的动画值设置为 "show"、"hide" 或 "toggle"：

  
#### 实例

 
```
 $("button").click(function(){

   $("div").animate({

     height:'toggle'

   });

 });  


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_animation1_toggle) 

 



#### jQuery animate() - 使用队列功能

 默认地，jQuery 提供针对动画的队列功能。

 这意味着如果您在彼此之后编写多个 animate() 调用，jQuery 会创建包含这些方法调用的"内部"队列。然后逐一运行这些 animate 调用。

  
#### 实例 1

 
```
 $("button").click(function(){

   var div=$("div");

   div.animate({height:'300px',opacity:'0.4'},"slow");

   div.animate({width:'300px',opacity:'0.8'},"slow");

   div.animate({height:'100px',opacity:'0.4'},"slow");

   div.animate({width:'100px',opacity:'0.8'},"slow");

 });  


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_animation) 

 下面的例子把 <div> 元素往右边移动了 100 像素，然后增加文本的字号：

  
#### 实例 2

 
```
 $("button").click(function(){

   var div=$("div");

   div.animate({left:'100px'},"slow");

   div.animate({fontSize:'3em'},"slow");

 });  


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_animation2) 

 

