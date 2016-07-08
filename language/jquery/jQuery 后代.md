 jQuery 遍历 - 后代  
后代是子、孙、曾孙等等。 

 通过 jQuery，您能够向下遍历 DOM 树，以查找元素的后代。

 

#### 向下遍历 DOM 树

 下面是两个用于向下遍历 DOM 树的 jQuery 方法：

 
children()
 find()
 


#### jQuery children() 方法

 children() 方法返回被选元素的所有直接子元素。

 该方法只会向下一级对 DOM 树进行遍历。

 下面的例子返回每个 <div> 元素的所有直接子元素：

  
#### 实例

 
```
 $(document).ready(function(){

  $("div").children();

}); 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_children) 

 您也可以使用可选参数来过滤对子元素的搜索。

 下面的例子返回类名为 "1" 的所有 <p> 元素，并且它们是 <div> 的直接子元素：

  
#### 实例

 
```
 $(document).ready(function(){

  $("div").children("p.1");

}); 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_children2) 

 



#### jQuery find() 方法

 find() 方法返回被选元素的后代元素，一路向下直到最后一个后代。

 下面的例子返回属于 <div> 后代的所有 <span> 元素：

  
#### 实例

 
```
 $(document).ready(function(){

  $("div").find("span");

}); 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_find) 

 下面的例子返回 <div> 的所有后代：

  
#### 实例

 
```
 $(document).ready(function(){

  $("div").find("*");

}); 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_find2) 

 

