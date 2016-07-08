 CSS 属性 选择器 

#### 具有特定属性的HTML元素样式

 具有特定属性的HTML元素样式不仅仅是class和id。

 注意：IE7和IE8需声明!DOCTYPE才支持属性选择器！IE6和更低的版本不支持属性选择器。

 

#### 属性选择器

 下面的例子是把包含标题（title）的所有元素变为蓝色：

  
#### 实例

 
```
 [title]

 {

 color:blue;

 } 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_attselector_att) 

 



#### 属性和值选择器

 下面的例子是把标题的样式改为 title="w3cschool":

  
#### 实例

 
```
 [title=w3cschool]

 {

 border:5px solid green;

 } 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_attselector_value) 

 



#### 属性和值的选择器 - 多值

 下面是包含指定值的title属性的元素样式的例子，使用（~）分隔属性和值:

  
#### 实例

 
```
 [title~=hello] { color:blue; }


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_attselector_valuelist_space) 

 下面是包含指定值的long属性的元素样式的例子，使用（|）分隔属性和值:

  
#### 实例

 
```
 [lang|=en] { color:blue; } 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_attselector_valuelist_hyphen) 

 



#### 表单样式

 属性选择器样式无需使用class或id的形式:

  
#### 实例

 
```
 input[type="text"]

 {

 width:150px;

 display:block;

 margin-bottom:10px;

 background-color:yellow;

 }

 input[type="button"]

 {

 width:120px;

 margin-left:35px;

 display:block;

 }


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_attselector_form) 

 




