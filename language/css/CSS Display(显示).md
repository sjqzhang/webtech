  .imgbox { float:left; text-align:center; width:120px; height:135px; border:1px solid gray; margin:4px; padding:0px; } .thumbnail { width:110px; height:90px; margin:3px; } .box { width:110px; padding:0px; } 
CSS Display(显示) and Visibility（可见性）  
如何设置一个元素是否显示，visibility属性指定一个元素应可见或隐藏。

    Box 1

![http://www.w3cschool.cc/images/klematis_small.jpg](http://www.w3cschool.cc/images/klematis_small.jpg)




  Box 2

![http://www.w3cschool.cc/images/klematis2_small.jpg](http://www.w3cschool.cc/images/klematis2_small.jpg)


  Box 3

![http://www.w3cschool.cc/images/klematis3_small.jpg](http://www.w3cschool.cc/images/klematis3_small.jpg)


 

 

 

#### 隐藏元素 - display:none或visibility:hidden

 隐藏一个元素可以通过display属性设置为"none"或"hidden"属性的可见性。但是，请注意这两种方法产生不同的结果

 visibility:hidden可以让您隐藏某个元素，但它仍然需要像以前一样的空间。该元素将被隐藏，但仍然会影响布局。

  
#### 实例

 
```
 h1.hidden {visibility:hidden;}


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_visibility_hidden) 

 display:没有隐藏的元素，它不会占用任何空间。元素将被隐藏，但页面会显示：

  
#### 实例

 
```
 h1.hidden {display:none;}


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_display_none) 

 



#### CSS Display - 块和内联元素

 块元素是一个元素，占用了全部宽度，在前后都是换行符。

 块元素的例子:

 
<h1>
 <p>
 <div>
 
内联元素只需要必要的宽度，不强制换行。

 内联元素的例子：

 
<span>
 <a>
 


#### 如何改变一个元素显示

 可以更改内联元素和块元素，反之亦然，可以使页面看起来是以一种特定的方式组合，并仍然遵循web标准。

 下面的示例显示为内联元素的列表项：

  
#### 实例

 
```
 li {display:inline;}


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_display_inline_list) 

 下面的示例是把span元素作为块元素

  
#### 实例

 
```
 span {display:block;}


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_display_block2) 

 注意：变更元素的显示类型看该元素是如何显示，它是什么样的元素。例如：一个内联元素设置为display：block是不允许有它内部的嵌套块元素。.



 
 ![http://www.w3cschool.cc/images/tryitimg.gif](http://www.w3cschool.cc/images/tryitimg.gif)
#### 更多实例

 

 [如何显示元素的内联元素。](http://www.w3cschool.cc/try/try.php?filename=trycss_display)

 这个例子演示了如何显示一个元素的内联元素。

 [如何显示元素的块元素。](http://www.w3cschool.cc/try/try.php?filename=trycss_display_block)

 这个例子演示了如何显示一个元素的块元素。

 [如何使用一个表的collapse属性](http://www.w3cschool.cc/try/try.php?filename=trycss_visibility_collapse)

 这个例子演示里如何使用表的collapse属性

 

