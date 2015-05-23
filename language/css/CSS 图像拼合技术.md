 CSS 图像拼合技术  

#### 图像拼合

 图像拼合就是单个图像的集合。

 有许多图像的网页可能需要很长的时间来加载和生成多个服务器的请求。

 使用图像拼合会降低服务器的请求数量，并节省带宽。

 

#### 图像拼合 - 简单实例

 与其使用三个独立的图像，不如我们使用这种单个图像（"img_navsprites.gif"）：

 ![http://www.w3cschool.cc/images/img_navsprites.gif](http://www.w3cschool.cc/images/img_navsprites.gif)

 有了CSS，我们可以只显示我们需要的图像的一部分。

 在下面的例子CSS指定显示 "img_navsprites.gif" 的图像的一部分： 

  
#### 实例

 
```
 img.home

 {

 width:46px;

 height:44px;

 background:url(img_navsprites.gif) 0 0;

 }


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_sprites_img) 

 实例解析：

 
<img class="home" src="http://www.w3cschool.cc/css/img_trans.gif" /> -因为不能为空,src属性只定义了一个小的透明图像。显示的图像将是我们在CSS中指定的背景图像
 宽度：46px;高度：44px; - 定义我们使用的那部分图像
 background:url(img_navsprites.gif) 0 0; - 定义背景图像和它的位置（左0px，顶部0px）
 
这是使用图像拼合最简单的方法，现在我们使用链接和悬停效果。

 

#### 图像拼合 - 创建一个导航列表

 我们想使用拼合图像 ("img_navsprites.gif")，以创建一个导航列表。

 我们将使用一个HTML列表，因为它可以链接，同时还支持背景图像：

  
#### 实例

 
```
 #navlist{position:relative;}

 #navlist li{margin:0;padding:0;list-style:none;position:absolute;top:0;}

 #navlist li, #navlist a{height:44px;display:block;}



 #home{left:0px;width:46px;}

 #home{background:url('img_navsprites.gif') 0 0;}



 #prev{left:63px;width:43px;}

 #prev{background:url('img_navsprites.gif') -47px 0;}



 #next{left:129px;width:43px;}

 #next{background:url('img_navsprites.gif') -91px 0;} 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_sprites_nav) 

 实例解析：

 
#navlist{position:relative;} - 位置设置相对定位，让里面的绝对定位
 #navlist li{margin:0;padding:0;list-style:none;position:absolute;top:0;} - margin和padding设置为0，列表样式被删除，所有列表项是绝对定位
 #navlist li, #navlist a{height:44px;display:block;} - 所有图像的高度是44px
 
现在开始每个具体部分的定位和样式：

 
#home{left:0px;width:46px;} - 定位到最左边的方式，以及图像的宽度是46px
 #home{background:url(img_navsprites.gif) 0 0;} - 定义背景图像和它的位置（左0px，顶部0px）
 #prev{left:63px;width:43px;} - 右侧定位63px（＃home宽46px+项目之间的一些多余的空间），宽度为43px。
 #prev{background:url('img_navsprites.gif') -47px 0;} - 定义背景图像右侧47px（＃home宽46px+分隔线的1px）
 #next{left:129px;width:43px;}- 右边定位129px(#prev 63px + #prev宽是43px + 剩余的空间), 宽度是43px.
 #next{background:url('img_navsprites.gif') no-repeat -91px 0;} - 定义背景图像右边91px（＃home 46px+1px的分割线+＃prev宽43px+1px的分隔线）
 


#### 图像拼合s - 悬停效果

 现在，我们希望我们的导航列表中添加一个悬停效果。

 

|  :hover 选择器用于鼠标悬停在元素上的显示的效果提示： :hover 选择器可以运用于所有元素。|

我们的新图像 ("img_navsprites_hover.gif") 包含三个导航图像和三幅图像：

 ![http://www.w3cschool.cc/images/img_navsprites_hover.gif](http://www.w3cschool.cc/images/img_navsprites_hover.gif)

 因为这是一个单一的图像，而不是6个单独的图像文件，当用户停留在图像上不会有延迟加载。

 我们添加悬停效果只添加三行代码：

  
#### 实例

 
```
 #home a:hover{background: url('img_navsprites_hover.gif') 0 -45px;}

 #prev a:hover{background: url('img_navsprites_hover.gif') -47px -45px;}

 #next a:hover{background: url('img_navsprites_hover.gif') -91px -45px;}


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_sprites_hover_nav) 

 实例解析：

 
由于该列表项包含一个链接，我们可以使用：hover伪类
 #home a:hover{background: transparent url(img_navsprites_hover.gif) 0 -45px;} - 对于所有三个悬停图像，我们指定相同的背景位置，只是每个再向下45px
 


