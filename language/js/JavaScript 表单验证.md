 JavaScript 表单验证  

#### JavaScript 表单验证

 JavaScript 可用来在数据被送往服务器前对 HTML 表单中的这些输入数据进行验证。

 表单数据经常需要使用 JavaScript 来验证其正确性：

 


验证表单数据是否为空？



验证输入是否是一个正确的email地址？



验证日期是否输入正确？



验证表单输入内容是否为数字型？







#### 必填（或必选）项目

 下面的函数用来检查用户是否已填写表单中的必填（或必选）项目。假如必填或必选项为空，那么警告框会弹出，并且函数的返回值为 false，否则函数的返回值则为 true（意味着数据没有问题）：

 
```
 function validateForm()

 {

 var x=document.forms["myForm"]["fname"].value;

 if (x==null || x=="")

   {

   alert("First name must be filled out");

   return false;

   }

 }




```
 以上函数在 form 表单提交时被调用:

  
#### 实例

 
```
 <form name="myForm" action="demo_form.asp" onsubmit="return validateForm()" method="post">

 First name: <input type="text" name="fname">

 <input type="submit" value="Submit">

 </form>


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjs_form_validation) 

 



#### E-mail 验证

 下面的函数检查输入的数据是否符合电子邮件地址的基本语法。 

 意思就是说，输入的数据必须包含 @ 符号和点号(.)。同时，@ 不可以是邮件地址的首字符，并且 @ 之后需有至少一个点号：

 
```
 function validateForm()

 {

 var x=document.forms["myForm"]["email"].value;

 var atpos=x.indexOf("@");

 var dotpos=x.lastIndexOf(".");

 if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)

   {

   alert("Not a valid e-mail address");

   return false;

   }

 }




```
 下面是连同 HTML 表单的完整代码：

  
#### 实例

 
```
 <form name="myForm" action="demo_form.asp" onsubmit="return validateForm();" method="post">

 Email: <input type="text" name="email">

 <input type="submit" value="Submit">

 </form>


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjs_form_validate_email) 

 

