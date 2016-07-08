 CSS 合法颜色值  

#### CSS Colors

 CSS的颜色可以通过以下方法指定：

 
十六进制颜色
 RGB颜色
 RGBA颜色
 HSL色彩
 HSLA颜色
 预定义/跨浏览器的颜色名称
 


#### 十六进制颜色

 所有主要浏览器都支持十六进制颜色值。

 指定一个十六进制的颜色其组成部分是：＃RRGGBB，其中RR（红色），GG（绿色）和BB（蓝色）。所有值必须介于0和FF之间。

  


 
#### 实例

 
```
 p

 {

 background-color:#ff0000;

 } 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_color_hex) 

 



#### RGB颜色

 RGB颜色值在所有主要浏览器都支持。

 RGB颜色值指定：RGB（红，绿，蓝）。每个参数（红色，绿色和蓝色）定义颜色的亮度，可在0和255之间，或一个百分比值（从0％到100％）之间的整数。

 例如RGB（0,0,255）值呈现为蓝色，因为蓝色的参数设置为最高值（255）而其他设置为0。

 此外，下面的值定义相同的颜色：RGB（0,0,255），RGB（0％，0％，100％）。

  
#### 实例

 
```
 p

 {

 background-color:rgb(255,0,0);

 } 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_color_rgb) 

 



#### RGBA颜色

 RGBA颜色值被IE9, Firefox3+, Chrome, Safari,和Opera10+支持。

 RGBA颜色值是RGB颜色值alpha通道的延伸 - 指定对象的透明度。

 RGBA颜色值指定：RGBA（红，绿，蓝，alpha）。 Alpha参数是一个介于0.0（完全透明）和1.0（完全不透明）之间的参数。

  
#### 实例

 
```
 p

 {

 background-color:rgba(255,0,0,0.5);

 } 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_color_rgba) 

 



#### HSL颜色

 IE9, Firefox, Chrome, Safari,和Opera 10+.支持HSL颜色值。

 HSL代表色相，饱和度和亮度 - 使用色彩圆柱坐标表示。

 HSL颜色值指定：HSL（色调，饱和度，明度）。

 色相是在色轮上的程度（从0到360）-0（或360）是红色的，120是绿色的，240是蓝色的。饱和度是一个百分比值;0％意味着灰色和100％的阴影，是全彩。亮度也是一个百分点;0％是黑色的，100％是白色的。

  
#### 实例

 
```
 p

 {

 background-color:hsl(120,65%,75%);

 } 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_color_hsl) 

 



#### HSLA颜色

 HSLA颜色值被IE9, Firefox3+, Chrome, Safari,和Opera10+.支持.

 HSLA的颜色值是一个带有alpha通道的HSL颜色值的延伸 - 指定对象的透明度。

 指定HSLA颜色值：HSLA（色调，饱和度，亮度，α），α是Alpha参数定义的不透明度。 Alpha参数是一个介于0.0（完全透明）和1.0（完全不透明）之间的参数。

  
#### 实例

 
```
 p

 {

 background-color:hsla(120,65%,75%,0.3);

 } 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_color_hsla) 

 



#### 预定义/跨浏览器的颜色名称

 147是在HTML和CSS颜色规范预定义的颜色名称。你可以查看我们的[预定义颜色名称表](http://www.w3cschool.cc/cssref/css-colornames.html)。

 

