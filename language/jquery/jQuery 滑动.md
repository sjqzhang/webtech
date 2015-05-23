  div.panel,p.flip { width:90%; margin:auto; padding:5px; text-align:center; background:#e5eecc; border:solid 1px #c3c3c3; } div.panel { height:100px; display:none; } 
jQuery 效果 - 滑动  
jQuery 滑动方法可使元素上下滑动。

 点击这里，隐藏/显示面板

  一寸光阴一寸金，因此，我们为您提供快捷易懂的学习内容。 

 在这里，您可以通过一种易懂的便利的模式获得您需要的任何知识。

 

 

#### 实例

 [jQuery slideDown()](http://www.w3cschool.cc/try/try.php?filename=tryjquery_slide_down)

 演示 jQuery slideDown() 方法。

 [jQuery slideUp()](http://www.w3cschool.cc/try/try.php?filename=tryjquery_slide_up)

 演示 jQuery slideUp() 方法。

 [jQuery slideToggle()](http://www.w3cschool.cc/try/try.php?filename=tryjquery_slide_toggle)

 演示 jQuery slideToggle() 方法。

 

#### jQuery 滑动方法

 通过 jQuery，您可以在元素上创建滑动效果。

 jQuery 拥有以下滑动方法：

 
slideDown()
 slideUp()
 slideToggle()
 


#### jQuery slideDown() 方法

 jQuery slideDown() 方法用于向下滑动元素。

 语法:

 
```
 $(selector).slideDown(speed,callback);




```
 可选的 speed 参数规定效果的时长。它可以取以下值："slow"、"fast" 或毫秒。

 可选的 callback 参数是滑动完成后所执行的函数名称。

 下面的例子演示了 slideDown() 方法：

  
#### 实例

 
```
 $("#flip").click(function(){

   $("#panel").slideDown();

 });


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_slide_down) 

 



#### jQuery slideUp() 方法

 jQuery slideUp() 方法用于向上滑动元素。

 语法:

 
```
 $(selector).slideUp(speed,callback);




```
 可选的 speed 参数规定效果的时长。它可以取以下值："slow"、"fast" 或毫秒。

 可选的 callback 参数是滑动完成后所执行的函数名称。

 下面的例子演示了 slideUp() 方法：

  
#### 实例

 
```
 $("#flip").click(function(){

   $("#panel").slideUp();

 });


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_slide_up) 

 



#### jQuery slideToggle() 方法

 jQuery slideToggle() 方法可以在 slideDown() 与 slideUp() 方法之间进行切换。

 如果元素向下滑动，则 slideToggle() 可向上滑动它们。

 如果元素向上滑动，则 slideToggle() 可向下滑动它们。

 
```
 $(selector).slideToggle(speed,callback);




```
 可选的 speed 参数规定效果的时长。它可以取以下值："slow"、"fast" 或毫秒。

 可选的 callback 参数是滑动完成后所执行的函数名称。

 下面的例子演示了 slideToggle() 方法：

  
#### 实例

 
```
 $("#flip").click(function(){

   $("#panel").slideToggle();

 });


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_slide_toggle) 

 

