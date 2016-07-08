 HTML5 Web 存储  
HTML5 web 存储,一个比cookie更好的本地存储方式。

 

#### 什么是 HTML5 Web 存储?

 使用HTML5可以在本地存储用户的浏览数据。

 早些时候,本地存储使用的是cookies。但是Web 存储需要更加的安全与快速. 这些数据不会被保存在服务器上，但是这些数据只用于用户请求网站数据上.它也可以存储大量的数据，而不影响网站的性能.

 数据以 键/值 对存在, web网页的数据只允许该网页访问使用。

 

#### 浏览器支持

  ![http://www.w3cschool.cc/images/compatible_ie.gif](http://www.w3cschool.cc/images/compatible_ie.gif)![http://www.w3cschool.cc/images/compatible_firefox.gif](http://www.w3cschool.cc/images/compatible_firefox.gif)![http://www.w3cschool.cc/images/compatible_opera.gif](http://www.w3cschool.cc/images/compatible_opera.gif)![http://www.w3cschool.cc/images/compatible_chrome.gif](http://www.w3cschool.cc/images/compatible_chrome.gif)![http://www.w3cschool.cc/images/compatible_safari.gif](http://www.w3cschool.cc/images/compatible_safari.gif)

  Internet Explorer 8+, Firefox, Opera, Chrome, 和 Safari支持Web 存储。

 注意: Internet Explorer 7 及更早IE版本不支持web 存储.

 

#### localStorage 和 sessionStorage 

 There are two new objects for storing data on the client:

 
localStorage - 没有时间限制的数据存储
 sessionStorage - 针对一个 session 的数据存储
 
在使用 web 存储前,应检查浏览器是否支持 localStorage 和sessionStorage:

 
```
 if(typeof(Storage)!=="undefined")

   {

   // Yes! localStorage and sessionStorage support!

   // Some code.....

   }

 else

   {

   // Sorry! No web storage support..

   }




```
 



#### localStorage 对象

 localStorage 对象存储的数据没有时间限制。第二天、第二周或下一年之后，数据依然可用。

  
#### 实例

 
```
 localStorage.lastname="Smith";

document.getElementById("result").innerHTML="Last name: "

+ localStorage.lastname; 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml5_webstorage_local) 

 实例解析：

 
使用 key="lastname" 和value="Smith" 创建一个 localStorage 键/值对
 检索键值为"lastname" 的值然后将数据插入 id="result"的元素中
 


#### 提示:

 键/值对通常以字符串存储，你可以按自己的需要转换该格式。

 下面的实例展示了用户点击按钮的次数. 代码中的字符串值转换为数字类型:

  
#### 实例

 
```
 if (localStorage.clickcount)

  {

  localStorage.clickcount=Number(localStorage.clickcount)+1;

  }

else

  {

  localStorage.clickcount=1;

  }

 document.getElementById("result").innerHTML="You have clicked the button " + localStorage.clickcount + " time(s).";


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml5_webstorage_local_clickcount) 

 



#### sessionStorage 对象

 sessionStorage 方法针对一个 session 进行数据存储。当用户关闭浏览器窗口后，数据会被删除。

 如何创建并访问一个 sessionStorage：:

  
#### 实例

 
```
 if (sessionStorage.clickcount)

  {

  sessionStorage.clickcount=Number(sessionStorage.clickcount)+1;

  }

 else

  {

  sessionStorage.clickcount=1;

  }

 document.getElementById("result").innerHTML="You have clicked the button " + sessionStorage.clickcount + " time(s) in this session."; 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml5_webstorage_session) 

 

