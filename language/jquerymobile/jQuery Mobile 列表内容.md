 jQuery Mobile 列表内容  
 



#### jQuery Mobile 列表缩略图

 大于 16x16px 的图像，请在链接中添加 <img> 元素。

 jQuery Mobile 将自动缩放图像到 80x80px:

  
#### 实例

 
```
 <ul data-role="listview">

  <li><a href="#"><img src="http://www.w3cschool.cc/jquerymobile/chrome.png"></a></li>

 </ul>





```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_lists_thumbs) 

 使用标准的HTML添加列表信息：

  
#### 实例

 
```
 <ul data-role="listview">

  <li>

    <a href="#">

    <img src="http://www.w3cschool.cc/jquerymobile/chrome.png">

    <h2>Google Chrome</h2>

    <p>Google Chrome 免费的开源 web 浏览器。发布于 2008 年。</p>

    </a>

  </li>

</ul>





```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_lists_thumbs2) 

 



#### jQuery Mobile 列表图标

  在列表 <img> 元素使用 class="ui-li-icon" 添加 16x16px 图标：

  
#### 实例

 
```
 <li><a href="#"><img src="http://www.w3cschool.cc/jquerymobile/us.png" alt="USA" class="ui-li-icon">USA</a></li>





```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_lists_icons) 

 



#### 分割按钮

 在JQuery Mobile的列表中，有时需要对选项内容做两个不同的操作，这时，需要对选项中的链接按钮进行分割。实现分割的方法是在<li>元素中再增加一个<a>元素，便可以在页面实现分割效果。

 jQuery Mobile 会自动设置第二个链接为蓝色箭头的图标，图标的链接文字（如果有的话）将在用户将鼠标悬停在 图标时显示:

  
#### 实例

 
```
 <ul data-role="listview">

  <li>

    <a href="#"><img src="http://www.w3cschool.cc/jquerymobile/chrome.png"></a>

    <a href="#">Some Text</a>

  </li>

</ul>





```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_lists_split) 

 添加一些页面和对话框使链接功能更加丰富：

  
#### 实例

 
```
 <ul data-role="listview">

  <li>

    <a href="#"><img src="http://www.w3cschool.cc/jquerymobile/chrome.png"></a>

    <a href="#download" data-rel="dialog">下载浏览器</a>

  </li>

</ul>





```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_lists_split2) 

 



#### 气泡数字

 气泡数字是用来显示列表项相关的数字，如在一个邮箱的邮件：

 如需添加气泡数字，请使用行内元素，比如 <span>，设置 class "ui-li-count" 属性并添加数字：

  
#### 实例

 
```
 <ul data-role="listview">

  <li><a href="#">收件箱<span class="ui-li-count">25</span></a></li>

  <li><a href="#">发件箱<span class="ui-li-count">432</span></a></li>

  <li><a href="#">垃圾箱<span class="ui-li-count">7</span></a></li>

</ul>





```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_lists_count) 

 

#### 注意：

显示一个正确的气泡数字，必须修改编程方式。 这将在以后的章节解释。

 
 ![http://www.w3cschool.cc/images/tryitimg.gif](http://www.w3cschool.cc/images/tryitimg.gif)
#### 更多实例

 

  [改变列表项的默认链接图标](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_lists_change_icons)

 如何设置列表项的默认链接图标(默认是右箭头).

  [可折叠的列表](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_lists_collapsible)

 如何创建显示/隐藏的列表。

  [更多内容格式](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_lists_formatting)

 如何制作一个日历。

 

