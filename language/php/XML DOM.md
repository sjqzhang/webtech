 PHP XML DOM  
内建的 DOM 解析器使在 PHP 中处理 XML 文档成为可能。

 

#### DOM 是什么？

 W3C DOM 提供了针对 HTML 和 XML 文档的标准对象集，以及用于访问和操作这些文档的标准接口。



 W3C DOM 被分为不同的部分（Core, XML 和 HTML）和不同的级别（DOM Level 1/2/3）：



 * Core DOM - 为任何结构化文档定义标准的对象集

 * XML DOM - 为 XML 文档定义标准的对象集

 * HTML DOM - 为 HTML 文档定义标准的对象集



 如需学习更多关于 XML DOM 的知识，请访问我们的 [XML DOM 教程](#)。

 

#### XML 解析

 如需读取和更新 - 创建和处理 - 一个 XML 文档，您需要 XML 解析器。

 有两种基本的 XML 解析器类型：

 
基于树的解析器：这种解析器把 XML 文档转换为树型结构。它分析整篇文档，并提供了对树中元素的访问，例如文档对象模型 (DOM)。
 基于时间的解析器：将 XML 文档视为一系列的事件。当某个具体的事件发生时，解析器会调用函数来处理。
 
DOM 解析器是基于树的解析器。

 请看下面的 XML 文档片段：

 
```
 <?xml version="1.0" encoding="ISO-8859-1"?>

 <from>Jani</from> 




```
 XML DOM 把上面的 XML 视为一个树形结构：

 
Level 1: XML 文档
 Level 2: 根元素： <from>
 Level 3: 文本元素： "Jani"
 


#### 安装

 DOM XML 解析器函数是 PHP 核心的组成部分。无需安装就可以使用这些函数。

 

#### XML 文件

 下面的 XML 文件将应用在我们的实例中：

 
```
 <?xml version="1.0" encoding="ISO-8859-1"?>

 <note>

 <to>Tove</to>

 <from>Jani</from>

 <heading>Reminder</heading>

 <body>Don't forget me this weekend!</body>

 </note> 




```
 



#### 加载和输出 XML

 我们需要初始化 XML 解析器，加载 XML，并把它输出：

 实例 
```
 <?php

 $xmlDoc = new DOMDocument();

 $xmlDoc->load("note.xml");



 print $xmlDoc->saveXML();

 ?> 




```
 以上代码将输出：

 
```
 ToveJaniReminder Don't forget me this weekend! 




```
 如果您在浏览器窗口中查看源代码，会看到下面的 HTML：

 
```
 <?xml version="1.0" encoding="ISO-8859-1"?>

 <note>

 <to>Tove</to>

 <from>Jani</from>

 <heading>Reminder</heading>

 <body>Don't forget me this weekend!</body>

 </note> 




```
 上面的实例创建了一个 DOMDocument-Object，并把 "note.xml" 中的 XML 载入这个文档对象中。

 saveXML() 函数把内部 XML 文档放入一个字符串，这样我们就可以输出它。

 

#### 遍历 XML

 我们要初始化 XML 解析器，加载 XML，并遍历 <note> 元素的所有元素：

 实例 
```
 <?php

 $xmlDoc = new DOMDocument();

 $xmlDoc->load("note.xml");



 $x = $xmlDoc->documentElement;

 foreach ($x->childNodes AS $item)

 {

 print $item->nodeName . " = " . $item->nodeValue . "<br>";

 }

 ?> 




```
 以上代码将输出：

 
```
 #text = 

 to = Tove

 #text = 

 from = Jani

 #text = 

 heading = Reminder

 #text = 

 body = Don't forget me this weekend!

 #text = 




```
 在上面的实例中，您看到了每个元素之间存在空的文本节点。

 当 XML 生成时，它通常会在节点之间包含空白。XML DOM 解析器把它们当作普通的元素，如果您不注意它们，有时会产生问题。

 
如需学习更多关于 XML DOM 的知识，请访问我们的 [XML DOM 教程](#)。

 

