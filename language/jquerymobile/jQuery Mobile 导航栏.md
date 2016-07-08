 jQuery Mobile 导航栏  

#### jQuery Mobile 导航栏

 导航栏是由一组水平排列的链接组成，通常包含在头部或尾部内。

 默认情况下，导航栏中的链接将自动变成按钮（不需要 data-role="button"）。

 使用 data-role="navbar" 属性来定义导航栏：

  
#### 实例

 
```
 <div data-role="header">

 <div data-role="navbar">

 <ul>

 <li><a href="#anylink">首页</a></li>

 <li><a href="#anylink">页面二</a></li>

 <li><a href="#anylink">搜索</a></li>

 </ul>

 </div>

</div>





```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_navbars) 

 



| 默认情况下，按钮的宽度与它的内容一样。使用一个无序列表来平均地划分按钮的宽度：1 个按钮占 100% 宽度，2 个按钮则各占 50% 的宽度，3 个按钮则每个占 33,3% 的宽度，依此类推。然而，如果您在导航栏中指定了超过 5 个按钮，将会拆成多行（查看"更多实例"）。|





#### 激活按钮

 当导航栏中的某个链接被点击，它将获得被选中（按下）的外观。

 如果想在不点击链接时获得这种外观，请使用 class="ui-btn-active"：

  
#### 实例

 
```
 <li><a href="#anylink" class="ui-btn-active">首页</a></li>





```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_navbars_class_active) 

 对于多个页面，您可能想要每个按钮的选中外观代表当前用户所在的页面。要做到这一点，请添加 "ui-state-persist" 和 "ui-btn-active" 到链接的 class：

  
#### 实例

 
```
 <li><a href="#anylink" class="ui-btn-active ui-state-persist">首页</a></li>





```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_navbars_class_persist) 

 


 ![http://www.w3cschool.cc/images/tryitimg.gif](http://www.w3cschool.cc/images/tryitimg.gif)
#### 更多实例

 

 [内容中的导航栏](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_navbars_content)

 如何在 data-role="content" 内添加导航栏。

  [尾部中的导航栏](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_navbars_footer)

 如何在尾部内添加导航栏。

  [导航栏中的定位图标](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_navbars_footer_icons)

 如何在尾部内的导航栏中定位图标。

  [超过 5 个按钮](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_navbars_wrap)

 导航栏中 10 个按钮的演示。

 

