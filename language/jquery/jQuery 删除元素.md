 jQuery - 删除元素  
通过 jQuery，可以很容易地删除已有的 HTML 元素。

 

#### 删除元素/内容

 如需删除元素和内容，一般可使用以下两个 jQuery 方法：

 
remove() - 删除被选元素（及其子元素）
 empty() - 从被选元素中删除子元素
 


#### jQuery remove() 方法

 jQuery remove() 方法删除被选元素及其子元素。

  
#### 实例

 
```
 $("#div1").remove(); 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_dom_remove) 

 



#### jQuery empty() 方法

 jQuery empty() 方法删除被选元素的子元素。

  
#### 实例

 
```
 $("#div1").empty();


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_dom_empty) 

 



#### 过滤被删除的元素

 jQuery remove() 方法也可接受一个参数，允许您对被删元素进行过滤。

 该参数可以是任何 jQuery 选择器的语法。

 下面的例子删除 class="italic" 的所有 <p> 元素：

  
#### 实例

 
```
 $("p").remove(".italic");


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjquery_dom_remove2) 

 

