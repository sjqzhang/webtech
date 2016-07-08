 jQuery Mobile 页面事件
 
#### jQuery Mobile 页面事件

 在 jQuery Mobile 中与页面打交道的事件被分为四类： 

 
Page Initialization - 在页面创建前，当页面创建时，以及在页面初始化之后
 Page Load/Unload - 当外部页面加载时、卸载时或遭遇失败时
 Page Transition - 在页面过渡之前和之后
 Page Change - 当页面被更改，或遭遇失败时
 
如需关于所有 jQuery Mobile 事件的完整信息，请访问我们的 [jQuery Mobile 事件参考手册](http://www.w3cschool.cc/jquerymobile/jquerymobile-ref-events.html)。

 

#### jQuery Mobile Initialization 事件

 当 jQuery Mobile 中的一张典型页面进行初始化时，它会经历三个阶段：

 
在页面创建前
 页面创建
 页面初始化
 
每个阶段触发的事件都可用于插入或操作代码。

 

|事件|描述|
|:--|:--|
|pagebeforecreate|当页面即将初始化，并且在 jQuery Mobile 已开始增强页面之前，触发该事件。|
|pagecreate|当页面已创建，但增强完成之前，触发该事件。|
|pageinit|当页面已初始化，并且在 jQuery Mobile 已完成页面增强之后，触发该事件。|

下面的例子演示在 jQuery Mobile 中创建页面时，何时触发每种事件：

  
#### 实例

 
```
 $(document).on("pagebeforecreate",function(event){

  alert("触发 pagebeforecreate事件！");

}); 

$(document).on("pagecreate",function(event){

  alert("触发 pagecreate 事件！");

});

$(document).on("pageinit",function(event){

  alert("触发 pageinit 事件！")

});


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_events_page_initialization)


 



#### jQuery Mobile Load 事件

 页面加载事件属于外部页面。

 无论外部页面何时载入 DOM，将触发两个事件。第一个是 pagebeforeload，第二个是 pageload （成功）或 pageloadfailed（失败）。

 下表中解释了这些事件：

 

|事件|描述|
|:--|:--|
|pagebeforeload|在任何页面加载请求作出之前触发。|
|pageload|在页面已成功加载并插入 DOM 后触发。|
|pageloadfailed|如果页面加载请求失败，则触发该事件。默认地，将显示 "Error Loading Page" 消息。|

下列演示 pageload 和 pagloadfailed 事件的工作原理：

  
#### 实例

 
```
 $(document).on("pageload",function(event,data){

  alert("触发 pageload 事件！\nURL: " + data.url);

});

$(document).on("pageloadfailed",function(event,data){

  alert(";抱歉，被请求页面不存在。");

});


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_events_pageload)


 



#### jQuery Mobile 过渡事件

 我们还可以在从一页过渡到下一页时使用事件。

 页面过渡涉及两个页面：一张"来"的页面和一张"去"的页面 - 这些过渡使当前活动页面（"来的"页面）到新页面（"去的"页面的改变过程变得更加动感。

 

|事件|描述|
|:--|:--|
|pagebeforeshow|在"去的"页面触发，在过渡动画开始前。|
|pageshow|在"去的"页面触发，在过渡动画完成后。|
|pagebeforehide|在"来的"页面触发，在过渡动画开始前。|
|pagehide|在"来的"页面触发，在过渡动画完成后。|

下列演示了过渡时间的工作原理：

  
#### 实例

 
```
 $(document).on("pagebeforeshow","#pagetwo",function(){ //当进入页面二时 

  alert("页面二即将显示");

});

$(document).on("pageshow","#pagetwo",function(){ // 当进入页面二时

  alert("现在显示页面二");

});

$(document).on("pagebeforehide","#pagetwo",function(){ // 当进入页面二时

  alert("页面二即将隐藏");

 });

$(document).on("pagehide","#pagetwo",function(){ // When leaving pagetwo

  alert("现在隐藏页面二");

});


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_events_page_transitions)


 

