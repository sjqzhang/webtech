 jQuery Mobile 表单选择菜单  

#### jQuery Mobile 选择菜单

 Iphone 上的选择菜单：

 Android/SGS4 设备上的选择菜单：

 

![http://www.w3cschool.cc/wp-content/uploads/2013/10/selectmenu.jpg](http://www.w3cschool.cc/wp-content/uploads/2013/10/selectmenu.jpg)<select> 元素创建带有若干选项的下拉列表。

 <select> 元素内的 <option> 元素定义了列表中的可用选项：

  
#### 实例

 
```
 <form method="post" action="demoform.html">

 <fieldset data-role="fieldcontain">

 <label for="day">Select Day</label>

 <select name="day" id="day">

 <option value="mon">Monday</option>

 <option value="tue">Tuesday</option>

 <option value="wed">Wednesday</option>

 </select>

 </fieldset>

 </form>





```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_forms_select) 

 

#### 提示：

如果您有一个带有相关选项的很长的列表，请在 <select> 内使用 <optgroup> 元素：

  
#### 实例

 
```
 <select name="day" id="day">

 <optgroup label="Weekdays">

 <option value="mon">Monday</option>

 <option value="tue">Tuesday</option>

 <option value="wed">Wednesday</option>

 </optgroup>

 <optgroup label="Weekends">

 <option value="sat">Saturday</option>

 <option value="sun">Sunday</option>

 </optgroup>

</select>


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_forms_select_optgroup) 

 



#### 自定义选择菜单

 本页顶部的图像，演示了移动平台上如何使用它们的方式展示一个选择菜单。

 如果您想要让选择菜单在所有的移动设备上都显示相同，请使用 jQuery 自带的自定义选择菜单，data-native-menu="false" 属性：

  
#### 实例

 
```
 <select name="day" id="day" data-native-menu="false">


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_forms_select_native) 

 



#### 多个选择

 如需在选择菜单中选择多个选项，请在 <select> 元素中使用 multiple 属性：

  
#### 实例

 
```
 <select name="day" id="day" multiple data-native-menu="false">


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_forms_select_multiple) 

 


 ![http://www.w3cschool.cc/images/tryitimg.gif](http://www.w3cschool.cc/images/tryitimg.gif)
#### 更多实例

 

  [使用 data-role="controlgroup"](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_forms_select_group)

 如何组合一个或多个选择菜单。

  [使用 data-type="horizontal"](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_forms_select_horizontal)

 如何水平组合选择菜单。

  [ 预选中选项](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_forms_select_selected)

 如何预选中一个选项。

  [可折叠表单](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_forms_collapsible)

 如何创建可折叠表单。

 




