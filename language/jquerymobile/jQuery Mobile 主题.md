 jQuery Mobile 主题  

#### jQuery Mobile 主题

 jQuery Mobile 提供了5种不同的主题样式, 从 "a" 到 "e" - 每一种主题的按钮，工具条，内容块等等颜色都不一致，每个主题的视觉效果也不一样。

 通过设置元素的data-theme属性可以自定义应用的外观:

 
```
  <div data-role="page" data-theme="a|b|c|d|e">

 


```
 



|值|描述|实例|
|:--|:--|:--|
|a|默认。黑色背景白色文字|尝试一下|
|b|蓝色背景白色文字/ 黑色文字灰色背景|尝试一下|
|c|黑色文字浅灰色背景|尝试一下|
|d|黑色为主白色背景|尝试一下|
|e|黑色文字橙色背景|尝试一下|





|  你喜欢混合主题！默认情况下， jQuery Mobile 使用 "a" 主题 (黑色) 来设置头部和底部 ， "c" 主题 (浅灰色) 设置页面内容。 但是，你可以自定义设置你喜欢的混合主题。|





#### 主题头部，内容和底部

  
#### 实例

 
```
 <div data-role="header" data-theme="b"></div>



<div data-role="content" data-theme="a"></div>



<div data-role="footer" data-theme="e"></div>





```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_themes_content) 

 



#### 主题对话框

  
#### 实例

 
```
 <a href="#pagetwo" data-rel="dialog">Go To The Themed Dialog Page</a>



<div data-role="page" id="pagetwo" data-overlay-theme="e">

  <div data-role="header" data-theme="b"></div>

  <div data-role="content" data-theme="a"></div>

  <div data-role="footer" data-theme="c"></div>

</div>





```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_themes_dialog) 

 



#### 主题按钮

  
#### 实例

 
```
 <a href="#" data-role="button" data-theme="a">Button</a>

<a href="#" data-role="button" data-theme="b">Button</a>

<a href="#" data-role="button" data-theme="c">Button</a>





```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_themes_buttons) 

 



#### 主题图标

  
#### 实例

 
```
 <a href="#" data-role="button" data-icon="plus" data-theme="e">Plus</a>





```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_themes_icons) 

 



#### 头部和底部的主题按钮

  
#### 实例

 
```
 <div data-role="header">

  <a href="#" data-role="button" data-icon="home" data-theme="b">Home</a>

  <h1>Welcome To My Homepage</h1>

  <a href="#" data-role="button" data-icon="search" data-theme="e">Search</a>

</div>



<div data-role="footer">

  <a href="#" data-role="button" data-theme="b" data-icon="plus">Button 1</a>

  <a href="#" data-role="button" data-theme="c" data-icon="plus">Button 2</a>

  <a href="#" data-role="button" data-theme="e" data-icon="plus">Button 3</a>

</div>





```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_themes_toolbars_buttons) 

 



#### 主题导航条

  
#### 实例

 
```
 <div data-role="footer" data-theme="e">

  <h1>Insert Footer Text Here</h1>

  <div data-role="navbar">

    <ul>

      <li><a href="#" data-icon="home" data-theme="b">Button 1</a></li>

      <li><a href="#" data-icon="arrow-r">Button 2</a></li>

      <li><a href="#" data-icon="arrow-r">Button 3</a></li>

      <li><a href="#" data-icon="search" data-theme="a" >Button 4</a></li>

    </ul>

  </div> 

</div>


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_themes_navbars) 

 



#### 主题可折叠按钮和内容

  
#### 实例

 
```
 <div data-role="collapsible" data-theme="b" data-content-theme="e">

  <h1>Click me - I'm collapsible!</h1>

  <p>I'm the expanded content.</p>

</div>


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_themes_collapsibles) 

 



#### 主题列表

  
#### 实例

 
```
 <ul data-role="listview" data-theme="e">

  <li><a href="#">List Item</a></li>

  <li data-theme="a"><a href="#">List Item</a></li>

  <li data-theme="b"><a href="#">List Item</a></li>

  <li><a href="#">List Item</a></li>

</ul>


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_themes_lists) 

 



#### 主题分割按钮

  
#### 实例

 
```
 <ul data-role="listview" data-split-theme="e">


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_themes_split) 

 



#### 主题可折叠列表

  
#### 实例

 
```
 <div data-role="collapsible" data-theme="b" data-content-theme="e">

  <ul data-role="listview">

    <li><a href="#">Agnes</a></li>

  </ul>

</div>


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_themes_collapsible_lists) 

 



#### 主题表单

  
#### 实例

 
```
 <label for="name">Full Name:</label>

<input type="text" name="text" id="name" data-theme="a">



<label for="colors">Choose Favorite Color:</label>

<select id="colors" name="colors" data-theme="b">

  <option value="red">Red</option>

  <option value="green">Green</option>

  <option value="blue">Blue</option>

</select>


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_themes_forms) 

 



#### 主题可折叠表单

  
#### 实例

 
```
 <fieldset data-role="collapsible" data-theme="b" data-content-theme="e">

 <legend>Click me - I'm collapsible!</legend>


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_themes_collapsible_forms) 

 



#### 添加新主题

 jQuery Mobile 可以在移动页面添加新主题。

 通过修改 CSS 文件来添加或编辑新主题(如果你已经下载了 jQuery Mobile)。你只需要拷贝样式模块，然后重命令字母类名（f-z）,并在样式中添加你喜欢的颜色和字体。

 你也可以在 HTML 文档中添加主题的新样式 - 工具条添加类： ui-bar-(a-z) ，文本内容添加类: ui-body-(a-z) for the content:

  
#### 实例

 
```
 <style>

.ui-bar-f

{

color:green;

background-color:yellow;

 }

.ui-body-f

{

font-weight:bold;

color:purple;

}

</style>





```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_themes_custom) 

 

