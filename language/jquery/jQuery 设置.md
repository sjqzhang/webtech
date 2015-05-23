 jQuery - 设置内容和属性  

#### 设置内容 - text()、html() 以及 val()

 我们将使用前一章中的三个相同的方法来设置内容：

 
text() - 设置或返回所选元素的文本内容
 html() - 设置或返回所选元素的内容（包括 HTML 标记）
 val() - 设置或返回表单字段的值
 
下面的例子演示如何通过 text()、html() 以及 val() 方法来设置内容：

  
#### 实例

 
```
 $("#btn1").click(function(){

   $("#test1").text("Hello world!");

 });

 $("#btn2").click(function(){

   $("#test2").html("<b>Hello world!</b>");

 });

 $("#btn3").click(function(){

   $("#test3").val("Dolly Duck");

 }); 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_dom_html_set) 

 



#### text()、html() 以及 val() 的回调函数

 上面的三个 jQuery 方法：text()、html() 以及 val()，同样拥有回调函数。回调函数由两个参数：被选元素列表中当前元素的下标，以及原始（旧的）值。然后以函数新值返回您希望使用的字符串。

 下面的例子演示带有回调函数的 text() 和 html()：

  
#### 实例

 
```
 $("#btn1").click(function(){

   $("#test1").text(function(i,origText){

     return "Old text: " + origText + " New text: Hello world!

     (index: " + i + ")"; 

   });

 });



 $("#btn2").click(function(){

   $("#test2").html(function(i,origText){

     return "Old html: " + origText + " New html: Hello <b>world!</b>

     (index: " + i + ")"; 

   });

 }); 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_dom_html_callback) 

 



#### 设置属性 - attr()

 jQuery attr() 方法也用于设置/改变属性值。

 下面的例子演示如何改变（设置）链接中 href 属性的值：

  
#### 实例

 
```
 $("button").click(function(){

   $("#w3s").attr("href","http://www.w3cschool.cc/jquery");

 }); 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_dom_attr_set) 

 attr() 方法也允许您同时设置多个属性。 

 下面的例子演示如何同时设置 href 和 title 属性：

  
#### 实例

 
```
 $("button").click(function(){

   $("#w3s").attr({

     "href" : "http://www.w3cschool.cc/jquery",

     "title" : "W3Schools jQuery Tutorial"

   });

 }); 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_dom_attr_set2) 

 



#### attr() 的回调函数

 jQuery 方法 attr()，也提供回调函数。回调函数由两个参数：被选元素列表中当前元素的下标，以及原始（旧的）值。然后以函数新值返回您希望使用的字符串。

 下面的例子演示带有回调函数的 attr() 方法：

  
#### 实例

 
```
 $("button").click(function(){

   $("#w3s").attr("href", function(i,origValue){

     return origValue + "/jquery"; 

   });

 }); 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_dom_attr_callback) 

 

