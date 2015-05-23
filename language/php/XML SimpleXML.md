 PHP SimpleXML  
PHP SimpleXML 处理最普通的 XML 任务，其余的任务则交由其它扩展处理。

 

#### 什么是 PHP SimpleXML？

 SimpleXML 是 PHP 5 中的新特性。

 SimpleXML 扩展提供了一种获取 XML 元素的名称和文本的简单方式。

 与 DOM 或 Expat 解析器相比，SimpleXML 仅仅用几行代码就可以从 XML 元素中读取文本数据。

 SimpleXML 可把 XML 文档（或 XML 字符串）转换为对象，比如：

 
元素被转换为 SimpleXMLElement 对象的单一属性。当同一级别上存在多个元素时，它们会被置于数组中。
 属性通过使用关联数组进行访问，其中的索引对应属性名称。
 元素内部的文本被转换为字符串。如果一个元素拥有多个文本节点，则按照它们被找到的顺序进行排列。
 
当执行类似下列的基础任务时，SimpleXML 使用起来非常快捷：

 
读取/提取 XML 文件/字符串的数据
 编辑文本节点或属性
 
然而，在处理高级 XML 时，比如命名空间，最好使用 Expat 解析器或 XML DOM。

 

#### 安装

 从 PHP 5 开始，SimpleXML 函数是 PHP 核心的组成部分。无需安装就可以使用这些函数。

 

#### PHP SimpleXML 实例

 假设我们有如下的 XML 文件，"[note.xml](http://www.w3cschool.cc/try/demo_source/note.xml)"：

 
```
 <?xml version="1.0" encoding="ISO-8859-1"?>

 <note>

 <to>Tove</to>

 <from>Jani</from>

 <heading>Reminder</heading>

 <body>Don't forget me this weekend!</body>

 </note> 




```
 现在我们想要输出上面的 XML 文件的不同信息：

  
#### 实例 1

 输出 $xml 变量（是 SimpleXMLElement 对象）的键和元素：

 
```
 <?php

 $xml=simplexml_load_file("note.xml");

 print_r($xml);

 ?> 


```
 

[运行实例 »](http://www.w3cschool.cc/try/showphp.php?filename=demo_simplexml) 

 以上代码将输出：

 
```
 SimpleXMLElement Object ( [to] => Tove [from] => Jani [heading] => Reminder [body] => Don't forget me this weekend! ) 




```
 

 
#### 实例 2

 输出 XML 文件中每个元素的数据：

 
```
 <?php

$xml=simplexml_load_file("note.xml");

echo $xml->to . "<br>";

 echo $xml->from . "<br>";

echo $xml->heading . "<br>";

echo $xml->body;

?> 


```
 

[运行实例 »](http://www.w3cschool.cc/try/showphp.php?filename=demo_simplexml2) 

 以上代码将输出：

 
```
 Tove

 Jani

 Reminder

 Don't forget me this weekend! 




```
 

 
#### 实例 3

 输出每个子节点的元素名称和数据：

 
```
 <?php

 $xml=simplexml_load_file("note.xml");

 echo $xml->getName() . "<br>";



 foreach($xml->children() as $child)

 {

 echo $child->getName() . ": " . $child . "<br>";

 }

 ?> 


```
 

[运行实例 »](http://www.w3cschool.cc/try/showphp.php?filename=demo_simplexml3) 

 以上代码将输出：

 
```
 note

 to: Tove

 from: Jani

 heading: Reminder

 body: Don't forget me this weekend! 




```
 



#### 更多 PHP SimpleXML 的信息

 如需了解更多关于 PHP SimpleXML 函数的信息，请访问我们的 [PHP SimpleXML 参考手册](http://www.w3cschool.cc/php/php-ref-simplexml.html)。



 

