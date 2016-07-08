 jQuery Callback 方法 
Callback 函数在当前动画 100% 完成之后执行。

 

#### jQuery 动画的问题

 许多 jQuery 函数涉及动画。这些函数也许会将 speed 或 duration 作为可选参数。

 例子：$("p").hide("slow")

 speed 或 duration 参数可以设置许多不同的值，比如 "slow", "fast", "normal" 或毫秒。

 实例

 以下实例在隐藏效果完全实现后回调函数:

  
#### 使用 callback 实例

 
```
 $("button").click(function(){

   $("p").hide("slow",function(){

     alert("The paragraph is now hidden");

   });

 });


```
 

[尝试一下 ](http://www.w3cschool.cc/try/try.php?filename=tryjquery_hide_callback) 

 以下实例没有回调函数，警告框会在隐藏效果完成前弹出：

  
#### 没有 callback(回调)

 
```
 $("button").click(function(){

   $("p").hide(1000);

   alert("The paragraph is now hidden");

 });


```
 

[在线实例 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_hide_no_callback) 

 

