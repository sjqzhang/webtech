 HTML5 表单元素  

#### HTML5 新的表单元素

 HTML5 有以下新的表单元素:

 
<datalist>
 <keygen>
 <output>
 
注意:不是所有的浏览器都支持HTML5 新的表单元素，但是你可以在使用它们，即使浏览器不支持表单属性，仍然可以显示为常规的表单元素。

 

#### HTML5 <datalist> 元素

 <datalist> 元素规定输入域的选项列表。 

 <datalist> 属性规定 form 或 input 域应该拥有自动完成功能。当用户在自动完成域中开始输入时，浏览器应该在该域中显示填写的选项：

 使用 <input> 元素的列表属性与 <datalist> 元素绑定.

  ![http://www.w3cschool.cc/images/compatible_opera2020.gif](http://www.w3cschool.cc/images/compatible_opera2020.gif)![http://www.w3cschool.cc/images/incompatible_safari2020.gif](http://www.w3cschool.cc/images/incompatible_safari2020.gif)![http://www.w3cschool.cc/images/compatible_chrome2020.gif](http://www.w3cschool.cc/images/compatible_chrome2020.gif)![http://www.w3cschool.cc/images/compatible_firefox2020.gif](http://www.w3cschool.cc/images/compatible_firefox2020.gif)![http://www.w3cschool.cc/images/compatible_ie2020.gif](http://www.w3cschool.cc/images/compatible_ie2020.gif)
#### 实例

 <input> 元素使用<datalist>预定义值:

 
```
 <input list="browsers">



 <datalist id="browsers">

   <option value="Internet Explorer">

   <option value="Firefox">

   <option value="Chrome">

   <option value="Opera">

   <option value="Safari">

 </datalist> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml5_datalist) 

 



#### HTML5 <keygen> 元素

 <keygen> 元素的作用是提供一种验证用户的可靠方法。 

 <keygen>标签规定用于表单的密钥对生成器字段。

 当提交表单时，会生成两个键，一个是私钥，一个公钥。

 私钥（private key）存储于客户端，公钥（public key）则被发送到服务器。公钥可用于之后验证用户的客户端证书（client certificate）。

  ![http://www.w3cschool.cc/images/compatible_opera2020.gif](http://www.w3cschool.cc/images/compatible_opera2020.gif)![http://www.w3cschool.cc/images/compatible_safari2020.gif](http://www.w3cschool.cc/images/compatible_safari2020.gif)![http://www.w3cschool.cc/images/compatible_chrome2020.gif](http://www.w3cschool.cc/images/compatible_chrome2020.gif)![http://www.w3cschool.cc/images/compatible_firefox2020.gif](http://www.w3cschool.cc/images/compatible_firefox2020.gif)![http://www.w3cschool.cc/images/incompatible_ie2020.gif](http://www.w3cschool.cc/images/incompatible_ie2020.gif)
#### 实例

 带有keygen字段的表单:

 
```
 <form action="demo_keygen.asp" method="get">

 用户名: <input type="text" name="usr_name">

 加密: <keygen name="security">

 <input type="submit">

 </form> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml5_keygen) 

 



#### HTML5 <output> 元素

 <output> 元素用于不同类型的输出，比如计算或脚本输出：

  ![http://www.w3cschool.cc/images/compatible_opera2020.gif](http://www.w3cschool.cc/images/compatible_opera2020.gif)![http://www.w3cschool.cc/images/compatible_safari2020.gif](http://www.w3cschool.cc/images/compatible_safari2020.gif)![http://www.w3cschool.cc/images/compatible_chrome2020.gif](http://www.w3cschool.cc/images/compatible_chrome2020.gif)![http://www.w3cschool.cc/images/compatible_firefox2020.gif](http://www.w3cschool.cc/images/compatible_firefox2020.gif)![http://www.w3cschool.cc/images/incompatible_ie2020.gif](http://www.w3cschool.cc/images/incompatible_ie2020.gif)
#### 实例

 将计算结果显示在 <output> 元素:

 
```
 <form oninput="x.value=parseInt(a.value)+parseInt(b.value)">0

 <input type="range" id="a" value="50">100 +

 <input type="number" id="b" value="50">=

 <output name="x" for="a b"></output>

</form>


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml5_output) 

 



#### HTML5 新表单元素

 

|标签|描述|
|:--|:--|
|<datalist>| <input>标签定义选项列表。请与 input 元素配合使用该元素，来定义 input 可能的值。|
|<keygen>|><keygen> 标签规定用于表单的密钥对生成器字段。|
|<output>|<output> 标签定义不同类型的输出，比如脚本的输出。|



