 CSS 组合选择符  

#### CSS 组合选择符

 

| 组合选择符说明了两个选择器直接的关系。|

CSS组合选择符包括各种简单选择符的组合方式。

 在 CSS3 中包含了四种组合方式:

 
后代选取器(以空格分隔)
 子元素选择器(以大于号分隔）
 相邻兄弟选择器（以加号分隔）
 普通兄弟选择器（以破折号分隔）
 


#### 后代选取器

 后代选取器匹配所有值得元素的后代元素。

 以下实例选取所有 <p> 元素插入到 <div> 元素中: 

  
#### 实例

 
```
 div p

{

background-color:yellow;

}


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_sel_element_element) 

 



#### 子元素选择器

 与后代选择器相比，子元素选择器（Child selectors）只能选择作为某元素子元素的元素。

 以下实例选择了<div>元素中所有直接子元素 <p> ：

  
#### 实例

 
```
 div>p

{

background-color:yellow;

}


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_sel_element_gt) 

 



#### 相邻兄弟选择器

 相邻兄弟选择器（Adjacent sibling selector）可选择紧接在另一元素后的元素，且二者有相同父元素。

 如果需要选择紧接在另一个元素后的元素，而且二者有相同的父元素，可以使用相邻兄弟选择器（Adjacent sibling selector）。

 以下实例选取了所有位于 <div> 元素后的第一个 <p> 元素:

  
#### 实例

 
```
 div+p

{

background-color:yellow;

}


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_sel_element_pluss) 

 



#### 普通相邻兄弟选择器

 普通兄弟选择器选取所有指定元素的相邻兄弟元素。

 以下实例选取了所有 <div> 元素的所有相邻兄弟元素 <p> : 

  
#### 实例

 
```
 div~p

{

background-color:yellow;

}


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_sel_element_tilde) 

 

