 jQuery Mobile 滚屏事件  
jQuery Mobile 提供了两种滚屏事件：滚屏开始时触发和滚动结束时触发。

 

#### jQuery Mobile 滚屏开始（Scrollstart）

 scrollstart 事件是在用户开始滚动页面时触发：

  
#### 实例

 
```
 $(document).on("scrollstart",function(){

 alert("Started scrolling!");

});


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_events_scrollstart) 

 



|  注意：iOS 设备在滚屏时锁定 DOM 操作，这意味着当用户滚屏时不可能改变任何东西。然而，jQuery 团队正在为此寻找解决方案。|





#### jQuery Mobile 滚屏结束（Scrollstop）

 scrollstop 事件是在用户停止滚动页面时触发：

  
#### 实例

 
```
 $(document).on("scrollstop",function(){

 alert("Stopped scrolling!");

});


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_events_scrollstop) 

 






