 JavaScript Boolean（布尔） 对象 
TBoolean（布尔）对象用于将非布尔值转换为布尔值（true 或者 false）。

 
 ![http://www.w3cschool.cc/images/tryitimg.gif](http://www.w3cschool.cc/images/tryitimg.gif)
#### 在线实例

 

 [检查布尔值](http://www.w3cschool.cc/try/try.php?filename=tryjs_boolean)

 检查布尔对象是 true 还是 false。

 

#### 完整的 Boolean（布尔） 对象参考手册

 我们提供 [JavaScript Boolean 对象参考手册](http://www.w3cschool.cc/jsref/jsref-obj-boolean.html)，其中包括所有可用于布尔对象的属性和方法。

 该手册包含了对每个属性和方法的详细描述以及相关实例。

 

#### 创建 Boolean 对象

 Boolean 对象代表两个值:"true" 或者 "false"

 下面的代码定义了一个名为 myBoolean 的布尔对象：

 
```
 var myBoolean=new Boolean();




```
 如果布尔对象无初始值或者其值为:

 
0
 -0
 null
 ""
 false
 undefined
 NaN 
 
那么对象的值为 false。否则，其值为 true（即使当自变量为字符串 "false" 时）！

 

