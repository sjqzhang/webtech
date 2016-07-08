  div.panel,p.flip { width:90%; margin:auto; padding:5px; text-align:center; background:#e5eecc; border:solid 1px #c3c3c3; } div.panel { height:100px; display:none; } 
jQuery 效果 - 淡入淡出  
通过 jQuery，您可以实现元素的淡入淡出效果。

 点击展示 

#### 淡入/淡出

 面板

  因为时间是宝贵的，我们提供快捷方便的学习方法。 

 在 W3CSchool,你可以学习需要的知识。

 

 

#### 实例

 [jQuery fadeIn()](http://www.w3cschool.cc/try/try.php?filename=tryjquery_fadein)

 演示 jQuery fadeIn() 方法。

 [jQuery fadeOut()](http://www.w3cschool.cc/try/try.php?filename=tryjquery_fadeout)

 演示 jQuery fadeOut() 方法。

 [jQuery fadeToggle()](http://www.w3cschool.cc/try/try.php?filename=tryjquery_fadetoggle)

 演示 jQuery fadeToggle() 方法。

 [jQuery fadeTo()](http://www.w3cschool.cc/try/try.php?filename=tryjquery_fadeto)

 演示 jQuery fadeTo() 方法。

 

#### jQuery Fading 方法

 通过 jQuery，您可以实现元素的淡入淡出效果。

 jQuery 拥有下面四种 fade 方法：

 
fadeIn()
 fadeOut()
 fadeToggle()
 fadeTo()
 


#### jQuery fadeIn() 方法

 jQuery fadeIn() 用于淡入已隐藏的元素。

 语法:

 
```
 $(selector).fadeIn(speed,callback);




```
 可选的 speed 参数规定效果的时长。它可以取以下值："slow"、"fast" 或毫秒。.

 可选的 callback 参数是 fading 完成后所执行的函数名称。

 下面的例子演示了带有不同参数的 fadeIn() 方法：

  
#### 实例

 
```
 $("button").click(function(){

   $("#div1").fadeIn();

   $("#div2").fadeIn("slow");

   $("#div3").fadeIn(3000);

 });


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_fadein) 

 



#### jQuery fadeOut() 方法

 jQuery fadeOut() 方法用于淡出可见元素。

 语法:

 
```
 $(selector).fadeOut(speed,callback);




```
 可选的 speed 参数规定效果的时长。它可以取以下值："slow"、"fast" 或毫秒。

 可选的 callback 参数是 fading 完成后所执行的函数名称。 

 下面的例子演示了带有不同参数的 fadeOut() 方法：

  
#### 实例

 
```
 $("button").click(function(){

   $("#div1").fadeOut();

   $("#div2").fadeOut("slow");

   $("#div3").fadeOut(3000);

 });


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_fadeout) 

 



#### jQuery fadeToggle() 方法

 jQuery fadeToggle() 方法可以在 fadeIn() 与 fadeOut() 方法之间进行切换。

 如果元素已淡出，则 fadeToggle() 会向元素添加淡入效果。

 如果元素已淡入，则 fadeToggle() 会向元素添加淡出效果。

 语法:

 
```
 $(selector).fadeToggle(speed,callback);




```
 可选的 speed 参数规定效果的时长。它可以取以下值："slow"、"fast" 或毫秒。

 可选的 callback 参数是 fading 完成后所执行的函数名称。

 下面的例子演示了带有不同参数的 fadeToggle() 方法：

  
#### 实例

 
```
 $("button").click(function(){

   $("#div1").fadeToggle();

   $("#div2").fadeToggle("slow");

   $("#div3").fadeToggle(3000);

 });


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_fadetoggle) 

 



#### jQuery fadeTo() 方法

 jQuery fadeTo() 方法允许渐变为给定的不透明度（值介于 0 与 1 之间）。

 语法:

 
```
 $(selector).fadeTo(speed,opacity,callback);




```
 必需的 speed 参数规定效果的时长。它可以取以下值："slow"、"fast" 或毫秒。

 fadeTo() 方法中必需的 opacity 参数将淡入淡出效果设置为给定的不透明度（值介于 0 与 1 之间）。

 可选的 callback 参数是该函数完成后所执行的函数名称。

 下面的例子演示了带有不同参数的 fadeTo() 方法：

  
#### 实例

 
```
 $("button").click(function(){

   $("#div1").fadeTo("slow",0.15);

   $("#div2").fadeTo("slow",0.4);

   $("#div3").fadeTo("slow",0.7);

 });


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_fadeto) 

 

