 jQuery - noConflict() 方法  
如何在页面上同时使用 jQuery 和其他框架？

 

#### jQuery 和其他 JavaScript 框架

 正如您已经了解到的，jQuery 使用 $ 符号作为 jQuery 的简写。

 如果其他 JavaScript 框架也使用 $ 符号作为简写怎么办？

 其他一些 JavaScript 框架包括：MooTools、Backbone、Sammy、Cappuccino、Knockout、JavaScript MVC、Google Web Toolkit、Google Closure、Ember、Batman 以及 Ext JS。

 其中某些框架也使用 $ 符号作为简写（就像 jQuery），如果您在用的两种不同的框架正在使用相同的简写符号，有可能导致脚本停止运行。

 jQuery 的团队考虑到了这个问题，并实现了 noConflict() 方法。

 

#### jQuery noConflict() 方法

 noConflict() 方法会释放会 $ 标识符的控制，这样其他脚本就可以使用它了。

 当然，您仍然可以通过全名替代简写的方式来使用 jQuery：

  
#### 实例

 
```
 $.noConflict();

 jQuery(document).ready(function(){

   jQuery("button").click(function(){

     jQuery("p").text("jQuery is still working!");

   });

 }); 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_noconflict) 

 您也可以创建自己的简写。noConflict() 可返回对 jQuery 的引用，您可以把它存入变量，以供稍后使用。请看这个例子：

  
#### 实例

 
```
 var jq = $.noConflict();

 jq(document).ready(function(){

   jq("button").click(function(){

     jq("p").text("jQuery is still working!");

   });

 }); 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_noconflict2) 

 如果你的 jQuery 代码块使用 $ 简写，并且您不愿意改变这个快捷方式，那么您可以把 $ 符号作为变量传递给 ready 方法。这样就可以在函数内使用 $ 符号了 - 而在函数外，依旧不得不使用 "jQuery"：

  
#### 实例

 
```
 $.noConflict();

 jQuery(document).ready(function($){

   $("button").click(function(){

     $("p").text("jQuery is still working!");

   });

 }); 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_noconflict3) 

 

