 jQuery 遍历- 过滤  

#### 缩写搜索元素的范围

 三个最基本的过滤方法是：first(), last() 和 eq()，它们允许您基于其在一组元素中的位置来选择一个特定的元素。

 其他过滤方法，比如 filter() 和 not() 允许您选取匹配或不匹配某项指定标准的元素。

 

#### jQuery first() 方法

 first() 方法返回被选元素的首个元素。

 下面的例子选取首个 <div> 元素内部的第一个 <p> 元素：

  
#### 实例

 
```
 $(document).ready(function(){

  $("div p").first();

}); 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_first) 

 



#### jQuery last() 方法

 last() 方法返回被选元素的最后一个元素。

 下面的例子选择最后一个 <div> 元素中的最后一个 <p> 元素：

  
#### 实例

 
```
 $(document).ready(function(){

  $("div p").last();

}); 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_last) 

 



#### jQuery eq() 方法

 eq() 方法返回被选元素中带有指定索引号的元素。

 索引号从 0 开始，因此首个元素的索引号是 0 而不是 1。下面的例子选取第二个 <p> 元素（索引号 1）：

  
#### 实例

 
```
 $(document).ready(function(){

  $("p").eq(1);

}); 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_eq) 

 



#### jQuery filter() 方法

 filter() 方法允许您规定一个标准。不匹配这个标准的元素会被从集合中删除，匹配的元素会被返回。

 下面的例子返回带有类名 "intro" 的所有 <p> 元素：

  
#### 实例

 
```
 $(document).ready(function(){

  $("p").filter(".intro");

}); 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_filter) 

 



#### jQuery not() 方法

 not() 方法返回不匹配标准的所有元素。

 提示：not() 方法与 filter() 相反。

 下面的例子返回不带有类名 "intro" 的所有 <p> 元素：

  
#### 实例

 
```
 $(document).ready(function(){

  $("p").not(".intro");

}); 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_not) 

 

