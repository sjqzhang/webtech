 CSS3 多列  

#### CSS3 多列

 通过 CSS3，您能够创建多个列来对文本进行布局 - 就像报纸那样！

 在本章中，您将学习如下多列属性：

 
column-count
 column-gap
 column-rule
 


#### 浏览器支持

 

|属性|浏览器支持|
|:--||||||
|column-count||||||
|column-gap||||||
|column-rule||||||

Internet Explorer 10 和 Opera 支持多列属性。

 Firefox 需要前缀 -moz-。

 Chrome 和 Safari 需要前缀 -webkit-。

 

#### 注意：

 Internet Explorer 9 以及更早的版本不支持多列属性。

 

#### CSS3创建多列

 column-count属性指定元素的列数应分为：

  ![http://www.w3cschool.cc/images/compatible_opera2020.gif](http://www.w3cschool.cc/images/compatible_opera2020.gif)![http://www.w3cschool.cc/images/compatible_safari2020.gif](http://www.w3cschool.cc/images/compatible_safari2020.gif)![http://www.w3cschool.cc/images/compatible_chrome2020.gif](http://www.w3cschool.cc/images/compatible_chrome2020.gif)![http://www.w3cschool.cc/images/compatible_firefox2020.gif](http://www.w3cschool.cc/images/compatible_firefox2020.gif)![http://www.w3cschool.cc/images/compatible_ie2020.gif](http://www.w3cschool.cc/images/compatible_ie2020.gif)
#### 实例

 划分成三列的div元素的文本：

 
```
 div

 {

 -moz-column-count:3; /* Firefox */

 -webkit-column-count:3; /* Safari and Chrome */

 column-count:3;

 } 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss3_column-count) 

 



#### CSS3的指定列之间的差距

 column-gap属性指定的列之间的差距：

  ![http://www.w3cschool.cc/images/compatible_opera2020.gif](http://www.w3cschool.cc/images/compatible_opera2020.gif)![http://www.w3cschool.cc/images/compatible_safari2020.gif](http://www.w3cschool.cc/images/compatible_safari2020.gif)![http://www.w3cschool.cc/images/compatible_chrome2020.gif](http://www.w3cschool.cc/images/compatible_chrome2020.gif)![http://www.w3cschool.cc/images/compatible_firefox2020.gif](http://www.w3cschool.cc/images/compatible_firefox2020.gif)![http://www.w3cschool.cc/images/compatible_ie2020.gif](http://www.w3cschool.cc/images/compatible_ie2020.gif)
#### 实例

 指定列之间40个像素差距：

 
```
 div

 {

 -moz-column-gap:40px; /* Firefox */

 -webkit-column-gap:40px; /* Safari and Chrome */

 column-gap:40px;

 } 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss3_column-gap) 

 



#### CSS3列规则

 column-rule属性设置列之间的宽度，样式和颜色。

  ![http://www.w3cschool.cc/images/compatible_opera2020.gif](http://www.w3cschool.cc/images/compatible_opera2020.gif)![http://www.w3cschool.cc/images/compatible_safari2020.gif](http://www.w3cschool.cc/images/compatible_safari2020.gif)![http://www.w3cschool.cc/images/compatible_chrome2020.gif](http://www.w3cschool.cc/images/compatible_chrome2020.gif)![http://www.w3cschool.cc/images/compatible_firefox2020.gif](http://www.w3cschool.cc/images/compatible_firefox2020.gif)![http://www.w3cschool.cc/images/compatible_ie2020.gif](http://www.w3cschool.cc/images/compatible_ie2020.gif)
#### 实例

 指定列之间的宽度，样式和颜色的规则：

 
```
 div

 {

 -moz-column-rule:3px outset #ff00ff; /* Firefox */

 -webkit-column-rule:3px outset #ff00ff; /* Safari and Chrome */

 column-rule:3px outset #ff00ff;

 } 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss3_column-rule) 

 



#### 新多列属性

 

|属性|说明|CSS|
|:--|:--|:--|
|column-count|指定元素应分为的列数|3|
|column-fill|指定如何填充列|3|
|column-gap|指定列之间差距|3|
|column-rule|一个用于设置所有列规则的简写属性|3|
|column-rule-color|指定的列之间颜色规则|3|
|column-rule-style|指定的列之间的样式规则|3|
|column-rule-width|指定的列之间的宽度规则|3|
|column-span|指定一个元素应该横跨多少列|3|
|column-width|指定列的宽度|3|
|columns|缩写属性设置列宽和列数|3|



