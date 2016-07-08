 HTML 列表
 
HTML 支持有序、无序和定义列表:

  
#### HTML 列表

  

| 有序列表 The first list item The second list item The third list item | 无序列表 List item List item List item |



 

 


||在线实例|

[无序列表](http://www.w3cschool.cc/try/try.php?filename=tryhtml_lists4)

 本例演示无序列表。

 [有序列表](http://www.w3cschool.cc/try/try.php?filename=tryhtml_lists)

 本例演示有序列表。

 （可以在本页底端找到更多实例。）

 

#### HTML无序列表

 无序列表是一个项目的列表，此列项目使用粗体圆点（典型的小黑圆圈）进行标记。 


无序列表使用 <li> 标签

 
```
 <ul>

 <li>Coffee</li>

 <li>Milk</li>

 </ul> 




```
 浏览器显示如下：

 
Coffee
 Milk
 


#### HTML 有序列表

 同样，有序列表也是一列项目，列表项目使用数字进行标记。 有序列表始于 <ol> 标签。每个列表项始于 <li> 标签。

 列表项项使用数字来标记。

 
```
 <ol>

 <li>Coffee</li>

 <li>Milk</li>

 </ol> 




```
 浏览器中显示如下：

 
Coffee
 Milk
 


#### HTML 自定义列表

 自定义列表不仅仅是一列项目，而是项目及其注释的组合。

 自定义列表以 <dl> 标签开始。每个自定义列表项以 <dt> 开始。每个自定义列表项的定义以 <dd> 开始。

 
```
 <dl>

 <dt>Coffee</dt>

 <dd>- black hot drink</dd>

 <dt>Milk</dt>

 <dd>- white cold drink</dd>

 </dl> 




```
 浏览器显示如下：

 
Coffee - black hot drink Milk - white cold drink 


#### 注意事项 - 有用提示

 提示: 列表项内部可以使用段落、换行符、图片、链接以及其他列表等等。

 
 ![http://www.w3cschool.cc/images/tryitimg.gif](http://www.w3cschool.cc/images/tryitimg.gif)
#### 更多实例

 

 [不同类型的有序列表](http://www.w3cschool.cc/try/try.php?filename=tryhtml_lists_ordered)

 本例演示不同类型的有序列表。

 [不同类型的无序列表](http://www.w3cschool.cc/try/try.php?filename=tryhtml_lists_unordered)

 本例演示不同类型的无序列表。

 [嵌套列表](http://www.w3cschool.cc/try/try.php?filename=tryhtml_lists2)

 本例演示如何嵌套列表。

 [嵌套列表 2](http://www.w3cschool.cc/try/try.php?filename=tryhtml_nestedlists2)

 本例演示更复杂的嵌套列表。

 [自定义列表](http://www.w3cschool.cc/try/try.php?filename=tryhtml_lists3)

 本例演示一个定义列表。

 

#### HTML 列表标签

 

|标签|描述|
|:--|:--|
|<ol>|定义有序列表|
|<ul>|定义无序列表|
|<li>|定义列表项|
|<dl>|定义定义列表|
|<dt>|自定义列表项目|
|<dd>|定义自定列表义的描述|



