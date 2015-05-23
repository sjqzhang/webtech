 PHP 5 SimpleXML 函数 

#### PHP SimpleXML 简介

 SimpleXML 扩展提供了一种获取 XML 元素的名称和文本的简单方式，只要您知道 XML 文档的布局。

 SimpleXML 转换 XML 文档到 SimpleXMLElement 对象。

 通过正常的属性选择器和数组迭代器，这个对象能够像其他对象一样被处理。

 

#### 提示：

与 DOM 或者 Expat 解析器比较，SimpleXML 只需要几行代码就能读取元素中的文本数据。

 

#### 安装

 SimpleXML 扩展需要 PHP 5 支持。

 自 PHP 5 起，SimpleXML 函数是 PHP 核心的组成部分。无需安装即可使用这些函数。

 

#### PHP 5 SimpleXML 函数

 

|函数|描述|
|:--|:--|
|__construct()|创建一个新的 SimpleXMLElement 对象。|
|addAttribute()|给 SimpleXML 元素添加一个属性。|
|addChild()|给 SimpleXML 元素添加一个子元素。|
|asXML()|格式化 XML（版本 1.0）中的 SimpleXML 对象的数据。|
|attributes()|返回 XML 标签的属性和值。|
|children()|查找指定节点的子节点。|
|count()|计算指定节点的子节点个数。|
|getDocNamespaces()|返回文档中的声明的命名空间。|
|getName()|返回 SimpleXML 元素引用的 XML 标签的名称。|
|getNamespaces()|返回文档中使用的命名空间。|
|registerXPathNamespace()|为下一个 XPath 查询创建命名空间上下文。|
|saveXML()|asXML() 的别名。 |
|simplexml_import_dom()|从 DOM 节点返回 SimpleXMLElement 对象。|
|simplexml_load_file()|转换 XML 文件为 SimpleXMLElement 对象。|
|simplexml_load_string()|转换 XML 字符串为 SimpleXMLElement 对象。|
|xpath()|运行对 XML 数据的 XPath 查询。|


#### PHP 5 SimpleXML 迭代函数

 

|函数|描述|
|:--|:--|
|current()|返回当前元素。|
|getChildren()|返回当前元素的子元素。|
|hasChildren()|检查当前元素是否有子元素。|
|key()|返回当前键。|
|next()|移动到下一个元素。|
|rewind()|倒回到第一个元素。|
|valid()|检查当前元素是否有效。|



