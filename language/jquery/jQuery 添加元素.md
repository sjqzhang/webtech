 jQuery - 添加元素  
通过 jQuery，可以很容易地添加新元素/内容。

 

#### 添加新的 HTML 内容

 我们将学习用于添加新内容的四个 jQuery 方法：

 
append() - 在被选元素的结尾插入内容
 prepend() - 在被选元素的开头插入内容
 after() - 在被选元素之后插入内容
 before() - 在被选元素之前插入内容
 


#### jQuery append() 方法

 jQuery append() 方法在被选元素的结尾插入内容。

  
#### 实例

 
```
 $("p").append("Some appended text."); 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_html_append) 

 



#### jQuery prepend() 方法

 jQuery prepend() 方法在被选元素的开头插入内容。

  
#### 实例

 
```
 $("p").prepend("Some prepended text."); 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_html_prepend) 

 



#### 通过 append() 和 prepend() 方法添加若干新元素

 在上面的例子中，我们只在被选元素的开头/结尾插入文本/HTML。

 不过，append() 和 prepend() 方法能够通过参数接收无限数量的新元素。可以通过 jQuery 来生成文本/HTML（就像上面的例子那样），或者通过 JavaScript 代码和 DOM 元素。

 在下面的例子中，我们创建若干个新元素。这些元素可以通过 text/HTML、jQuery 或者 JavaScript/DOM 来创建。然后我们通过 append() 方法把这些新元素追加到文本中（对 prepend() 同样有效）：

  
#### 实例

 
```
 function appendText()

 {

 var txt1="<p>Text.</p>";               // Create element with HTML  

 var txt2=$("<p></p>").text("Text.");   // Create with jQuery

 var txt3=document.createElement("p");  // Create with DOM

 txt3.innerHTML="Text.";

 $("p").append(txt1,txt2,txt3);         // Append the new elements 

 }


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_html_append2) 

 



#### jQuery after() 和 before() 方法

 jQuery after() 方法在被选元素之后插入内容。

 jQuery before() 方法在被选元素之前插入内容。

  
#### 实例

 
```
 $("img").after("Some text after");



 $("img").before("Some text before"); 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_html_after) 

 



#### 通过 after() 和 before() 方法添加若干新元素

 after() 和 before() 方法能够通过参数接收无限数量的新元素。可以通过 text/HTML、jQuery 或者 JavaScript/DOM 来创建新元素。

 在下面的例子中，我们创建若干新元素。这些元素可以通过 text/HTML、jQuery 或者 JavaScript/DOM 来创建。然后我们通过 after() 方法把这些新元素插到文本中（对 before() 同样有效）：

  
#### 实例

 
```
 function afterText()

 {

 var txt1="<b>I </b>";                    // Create element with HTML  

 var txt2=$("<i></i>").text("love ");     // Create with jQuery

 var txt3=document.createElement("big");  // Create with DOM

 txt3.innerHTML="jQuery!";

 $("img").after(txt1,txt2,txt3);          // Insert new elements after img

 }


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_html_after2) 

 

