 CSS Padding（填充）  
CSS Padding（填充）属性定义元素边框与元素内容之间的空间。

 

#### Padding（填充）

 当元素的 Padding（填充）（内边距）被清除时，所"释放"的区域将会受到元素背景颜色的填充。

 单独使用填充属性可以改变上下左右的填充。缩写填充属性也可以使用，一旦改变一切都改变。

 
#### 可能的值

 

|值|说明|
|:--|:--|
|length|定义一个固定的填充(像素, pt, em,等)|
|%|使用百分比值定义一个填充|





#### 填充- 单边内边距属性

 在CSS中，它可以指定不同的侧面不同的填充：

  
#### 实例

 
```
 padding-top:25px;

 padding-bottom:25px;

 padding-right:50px;

 padding-left:50px;


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_padding_sides) 

 



#### 填充 - 简写属性

 为了缩短代码，它可以在一个属性中指定的所有填充属性。

 这就是所谓的缩写属性。所有的填充属性的缩写属性是"padding":

  
#### 实例

 
```
 padding:25px 50px;


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_padding_shorthand) 

 Padding属性，可以有一到四个值。

 
上填充为25px
 右填充为50px
 下填充为75px
 左填充为100px
 
  padding:25px 50px 75px;

 
上填充为25px
 左右填充为50px
 下填充为75px
 
  padding:25px 50px;

 
上下填充为25px
 左右填充为50px
 
  padding:25px;

 
所有的填充都是25px
 

 ![http://www.w3cschool.cc/images/tryitimg.gif](http://www.w3cschool.cc/images/tryitimg.gif)
#### 更多实例

 

 [在一个声明中的所有填充属性](http://www.w3cschool.cc/try/try.php?filename=trycss_padding)

 这个例子演示了使用缩写属性设置在一个声明中的所有填充属性，可以有一到四个值。

 [设置左部填充](http://www.w3cschool.cc/try/try.php?filename=trycss_padding-left)

 这个例子演示了如何设置元素左填充。

 [设置右部填充](http://www.w3cschool.cc/try/try.php?filename=trycss_padding-right)

 这个例子演示了如何设置元素右填充。.

 [设置上部填充](http://www.w3cschool.cc/try/try.php?filename=trycss_padding-top)

 这个例子演示了如何设置元素上填充。

 [设置下部填充](http://www.w3cschool.cc/try/try.php?filename=trycss_padding-bottom)

 这个例子演示了如何设置元素下填充。

 

#### 所有的CSS填充属性

 

|属性|说明|
|:--|:--|
|padding|使用缩写属性设置在一个声明中的所有填充属性|
|padding-bottom|设置元素的底部填充|
|padding-left|设置元素的左部填充|
|padding-right|设置元素的右部填充|
|padding-top|设置元素的顶部填充|



