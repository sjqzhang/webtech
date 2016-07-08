 jQuery - AJAX load() 方法  

#### jQuery load() 方法

 jQuery load() 方法是简单但强大的 AJAX 方法。

 load() 方法从服务器加载数据，并把返回的数据放入被选元素中。

 语法:

 
```
  $(selector).load(URL,data,callback); 

 


```
 必需的 URL 参数规定您希望加载的 URL。

 可选的 data 参数规定与请求一同发送的查询字符串键/值对集合。

 可选的 callback 参数是 load() 方法完成后所执行的函数名称。

 这是示例文件（"demo_test.txt"）的内容：

 
```
  <h2>jQuery and AJAX is FUN!!!</h2>

 <p id="p1">This is some text in a paragraph.</p>

 


```
 下面的例子会把文件 "demo_test.txt" 的内容加载到指定的 <div> 元素中：

  
#### 实例

 
```
 $("#div1").load("demo_test.txt");


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_ajax_load) 

 也可以把 jQuery 选择器添加到 URL 参数。

 下面的例子把 "demo_test.txt" 文件中 id="p1" 的元素的内容，加载到指定的 <div> 元素中：

  
#### 实例

 
```
 $("#div1").load("demo_test.txt #p1");


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_ajax_load2) 

 可选的 callback 参数规定当 load() 方法完成后所要允许的回调函数。回调函数可以设置不同的参数：

 

responseTxt - 包含调用成功时的结果内容
 
statusTXT - 包含调用的状态
 
xhr - 包含 XMLHttpRequest 对象
 
下面的例子会在 load() 方法完成后显示一个提示框。如果 load() 方法已成功，则显示"外部内容加载成功！"，而如果失败，则显示错误消息：

  
#### 实例

 
```
 $("button").click(function(){

   $("#div1").load("demo_test.txt",function(responseTxt,statusTxt,xhr){

     if(statusTxt=="success")

       alert("External content loaded successfully!");

     if(statusTxt=="error")

       alert("Error: "+xhr.status+": "+xhr.statusText);

   });

 });


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_ajax_load_callback) 

 

