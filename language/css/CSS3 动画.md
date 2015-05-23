 CSS3 动画  

#### CSS3 动画

 CSS3，我们可以创建动画，它可以取代许多网页动画图像，Flash动画，和JAVAScripts。

 
CSS3

动画 

 

#### CSS3 @keyframes 规则

 要创建CSS3动画，你将不得不了解@keyframes规则。

 @keyframes规则是创建动画。 @keyframes规则内指定一个CSS样式和动画将逐步从目前的样式更改为新的样式。

 

#### 浏览器支持

 

|属性|浏览器支持|
|:--||||||
|@keyframes||||||
|animation||||||

Internet Explorer 10、Firefox 以及 Opera 支持 @keyframes 规则和 animation 属性。 

 Chrome 和 Safari 需要前缀 -webkit-。

 

#### 注意：

Internet Explorer 9，以及更早的版本，不支持 @keyframe 规则或 animation 属性。

 
 ![http://www.w3cschool.cc/images/compatible_opera2020.gif](http://www.w3cschool.cc/images/compatible_opera2020.gif)![http://www.w3cschool.cc/images/compatible_safari2020.gif](http://www.w3cschool.cc/images/compatible_safari2020.gif)![http://www.w3cschool.cc/images/compatible_chrome2020.gif](http://www.w3cschool.cc/images/compatible_chrome2020.gif)![http://www.w3cschool.cc/images/compatible_firefox2020.gif](http://www.w3cschool.cc/images/compatible_firefox2020.gif)![http://www.w3cschool.cc/images/compatible_ie2020.gif](http://www.w3cschool.cc/images/compatible_ie2020.gif)
#### 实例

 
```
 @keyframes myfirst

 {

 from {background: red;}

 to {background: yellow;}

 }



 @-webkit-keyframes myfirst /* Safari and Chrome */

 {

 from {background: red;}

 to {background: yellow;}

 }





```
 

 



#### CSS3 动画

 当在@keyframe创建动画，把它绑定到一个选择器，否则动画不会有任何效果。

 指定至少这两个CSS3的动画属性绑定向一个选择器：

 
规定动画的名称
 规定动画的时长
 
 ![http://www.w3cschool.cc/images/compatible_opera2020.gif](http://www.w3cschool.cc/images/compatible_opera2020.gif)![http://www.w3cschool.cc/images/compatible_safari2020.gif](http://www.w3cschool.cc/images/compatible_safari2020.gif)![http://www.w3cschool.cc/images/compatible_chrome2020.gif](http://www.w3cschool.cc/images/compatible_chrome2020.gif)![http://www.w3cschool.cc/images/compatible_firefox2020.gif](http://www.w3cschool.cc/images/compatible_firefox2020.gif)![http://www.w3cschool.cc/images/compatible_ie2020.gif](http://www.w3cschool.cc/images/compatible_ie2020.gif)
#### 实例

 把 "myfirst" 动画捆绑到 div 元素，时长：5 秒：

 
```
 div

 {

 animation: myfirst 5s;

 -webkit-animation: myfirst 5s; /* Safari and Chrome */

 } 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss3_animation1) 

 注意: 您必须定义动画的名称和动画的持续时间。如果省略的持续时间，动画将无法运行，因为默认值是0。

 

#### CSS3动画是什么？

 动画是使元素从一种样式逐渐变化为另一种样式的效果。

 您可以改变任意多的样式任意多的次数。

 请用百分比来规定变化发生的时间，或用关键词 "from" 和 "to"，等同于 0% 和 100%。

 0% 是动画的开始，100% 是动画的完成。

 为了得到最佳的浏览器支持，您应该始终定义 0% 和 100% 选择器。

  ![http://www.w3cschool.cc/images/compatible_opera2020.gif](http://www.w3cschool.cc/images/compatible_opera2020.gif)![http://www.w3cschool.cc/images/compatible_safari2020.gif](http://www.w3cschool.cc/images/compatible_safari2020.gif)![http://www.w3cschool.cc/images/compatible_chrome2020.gif](http://www.w3cschool.cc/images/compatible_chrome2020.gif)![http://www.w3cschool.cc/images/compatible_firefox2020.gif](http://www.w3cschool.cc/images/compatible_firefox2020.gif)![http://www.w3cschool.cc/images/compatible_ie2020.gif](http://www.w3cschool.cc/images/compatible_ie2020.gif)
#### 实例

 当动画为 25% 及 50% 时改变背景色，然后当动画 100% 完成时再次改变：

 
```
 @keyframes myfirst

 {

 0%   {background: red;}

 25%  {background: yellow;}

 50%  {background: blue;}

 100% {background: green;}

 }



 @-webkit-keyframes myfirst /* Safari and Chrome */

 {

 0%   {background: red;}

 25%  {background: yellow;}

 50%  {background: blue;}

 100% {background: green;}

 } 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss3_animation2) 

 

 ![http://www.w3cschool.cc/images/compatible_opera2020.gif](http://www.w3cschool.cc/images/compatible_opera2020.gif)![http://www.w3cschool.cc/images/compatible_safari2020.gif](http://www.w3cschool.cc/images/compatible_safari2020.gif)![http://www.w3cschool.cc/images/compatible_chrome2020.gif](http://www.w3cschool.cc/images/compatible_chrome2020.gif)![http://www.w3cschool.cc/images/compatible_firefox2020.gif](http://www.w3cschool.cc/images/compatible_firefox2020.gif)![http://www.w3cschool.cc/images/compatible_ie2020.gif](http://www.w3cschool.cc/images/compatible_ie2020.gif)
#### 实例

 改变背景色和位置：

 
```
 @keyframes myfirst

 {

 0%   {background: red; left:0px; top:0px;}

 25%  {background: yellow; left:200px; top:0px;}

 50%  {background: blue; left:200px; top:200px;}

 75%  {background: green; left:0px; top:200px;}

 100% {background: red; left:0px; top:0px;}

 }



 @-webkit-keyframes myfirst /* Safari and Chrome */

 {

 0%   {background: red; left:0px; top:0px;}

 25%  {background: yellow; left:200px; top:0px;}

 50%  {background: blue; left:200px; top:200px;}

 75%  {background: green; left:0px; top:200px;}

 100% {background: red; left:0px; top:0px;}

 }


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss3_animation3) 

 



#### CSS3的动画属性

 下面的表格列出了 @keyframes 规则和所有动画属性：

 

|属性|描述|CSS|
|:--|:--|:--|
|@keyframes|规定动画。|3|
|animation|所有动画属性的简写属性，除了 animation-play-state 属性。|3|
|animation-name|规定 @keyframes 动画的名称。|3|
|animation-duration|规定动画完成一个周期所花费的秒或毫秒。默认是 0。|3|
|animation-timing-function|规定动画的速度曲线。默认是 "ease"。|3|
|animation-delay|规定动画何时开始。默认是 0。|3|
|animation-iteration-count|规定动画被播放的次数。默认是 1。|3|
|animation-direction|规定动画是否在下一周期逆向地播放。默认是 "normal"。|3|
|animation-play-state|规定动画是否正在运行或暂停。默认是 "running"。|3|

下面两个例子设置所有动画属性：

  ![http://www.w3cschool.cc/images/compatible_opera2020.gif](http://www.w3cschool.cc/images/compatible_opera2020.gif)![http://www.w3cschool.cc/images/compatible_safari2020.gif](http://www.w3cschool.cc/images/compatible_safari2020.gif)![http://www.w3cschool.cc/images/compatible_chrome2020.gif](http://www.w3cschool.cc/images/compatible_chrome2020.gif)![http://www.w3cschool.cc/images/compatible_firefox2020.gif](http://www.w3cschool.cc/images/compatible_firefox2020.gif)![http://www.w3cschool.cc/images/compatible_ie2020.gif](http://www.w3cschool.cc/images/compatible_ie2020.gif)
#### 实例

 运行myfirst动画，设置所有的属性：

 
```
 div

 {

 animation-name: myfirst;

 animation-duration: 5s;

 animation-timing-function: linear;

 animation-delay: 2s;

 animation-iteration-count: infinite;

 animation-direction: alternate;

 animation-play-state: running;

 /* Safari and Chrome: */

 -webkit-animation-name: myfirst;

 -webkit-animation-duration: 5s;

 -webkit-animation-timing-function: linear;

 -webkit-animation-delay: 2s;

 -webkit-animation-iteration-count: infinite;

 -webkit-animation-direction: alternate;

 -webkit-animation-play-state: running;

 } 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss3_animation4) 

 

 ![http://www.w3cschool.cc/images/compatible_opera2020.gif](http://www.w3cschool.cc/images/compatible_opera2020.gif)![http://www.w3cschool.cc/images/compatible_safari2020.gif](http://www.w3cschool.cc/images/compatible_safari2020.gif)![http://www.w3cschool.cc/images/compatible_chrome2020.gif](http://www.w3cschool.cc/images/compatible_chrome2020.gif)![http://www.w3cschool.cc/images/compatible_firefox2020.gif](http://www.w3cschool.cc/images/compatible_firefox2020.gif)![http://www.w3cschool.cc/images/compatible_ie2020.gif](http://www.w3cschool.cc/images/compatible_ie2020.gif)
#### 实例

 与上面的动画相同，但是使用了简写的动画 animation 属性：

 
```
 div

 {

 animation: myfirst 5s linear 2s infinite alternate;

 /* Safari and Chrome: */

 -webkit-animation: myfirst 5s linear 2s infinite alternate;

 } 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss3_animation5) 

 

