  #stop { margin-left:25px; } div.panel,p.flip { width:90%; margin:auto; padding:5px; text-align:center; background:#e5eecc; border:solid 1px #c3c3c3; } div.panel { height:100px; display:none; } 
jQuery 停止动画  
jQuery stop() 方法用于在动画或效果完成前对它们进行停止。

 停止滑动 点击这里，向上/向下滑动面板

  时间是宝贵的，因此，我们为您提供快捷易懂的学习内容。

 在这里，您可以通过一种易懂的便利的模式获得您需要的任何知识。

 

 

#### 实例

 [jQuery stop() 滑动](http://www.w3cschool.cc/try/try.php?filename=tryjquery_stop_slide)

 演示 jQuery stop() 方法。

 [jQuery stop() 动画(带参数)](http://www.w3cschool.cc/try/try.php?filename=tryjquery_stop_params)

 演示 jQuery stop() 方法

 

#### jQuery stop() 方法

 jQuery stop() 方法用于停止动画或效果，在它们完成之前。

 stop() 方法适用于所有 jQuery 效果函数，包括滑动、淡入淡出和自定义动画。

 语法:

 
```
 $(selector).stop(stopAll,goToEnd);




```
 可选的 stopAll 参数规定是否应该清除动画队列。默认是 false，即仅停止活动的动画，允许任何排入队列的动画向后执行。

 可选的 goToEnd 参数规定是否立即完成当前动画。默认是 false。

 因此，默认地，stop() 会清除在被选元素上指定的当前动画。

 下面的例子演示 stop() 方法，不带参数：

  
#### 实例

 
```
 $("#stop").click(function(){

   $("#panel").stop();

 });


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_stop_slide) 

 

