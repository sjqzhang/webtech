 PHP Libxml 函数 

#### PHP Libxml 简介

 Libxml 函数和常量与 SimpleXML、XSLT 以及 DOM 函数一起使用。

 

#### 安装

 这些函数需要 Libxml 程序包。 [在 xmlsoft.org 下载](http://www.w3cschool.cc//www.xmlsoft.org/downloads.html)

 

#### PHP Libxml 函数

 PHP：指示支持该函数的最早的 PHP 版本。

 

|函数|描述|PHP|
|:--|:--|:--|
|libxml_clear_errors()|清空 Libxml 错误缓冲。|5|
|libxml_get_errors()|检索错误数组。|5|
|libxml_get_last_error()|从 Libxml 检索最后的错误。|5|
|libxml_set_streams_context()|为下一次 Libxml 文档加载或写入设置流环境。|5|
|libxml_use_internal_errors()|禁用 Libxml 错误，允许用户按需读取错误信息。|5|





#### PHP Libxml 常量

 

|函数|描述|PHP|
|:--|:--|:--|
|LIBXML_COMPACT|设置小型节点分配优化。会改善应用程序的性能。|5|
|LIBXML_DTDATTR|设置默认 DTD 属性。|5|
|LIBXML_DTDLOAD|加载外部子集。|5|
|LIBXML_DTDVALID|通过 DTD 进行验证。|5|
|LIBXML_NOBLANKS|删除空节点。|5|
|LIBXML_NOCDATA|把 CDATA 设置为文本节点。|5|
|LIBXML_NOEMPTYTAG|更改空标签（比如 <br/> 改为 <br></br>）。仅在 DOMDocument->save() 和 DOMDocument->saveXML() 函数中可用。|5|
|LIBXML_NOENT|替代实体。|5|
|LIBXML_NOERROR|不显示错误报告。|5|
|LIBXML_NONET|在加载文档时停止网络访问。|5|
|LIBXML_NOWARNING|不显示警告报告。|5|
|LIBXML_NOXMLDECL|在保存文档时，撤销 XML 声明。|5|
|LIBXML_NSCLEAN|删除额外的命名空间声明。|5|
|LIBXML_XINCLUDE|使用 XInclude 置换。|5|
|LIBXML_ERR_ERROR|获得可恢复的错误。|5|
|LIBXML_ERR_FATAL|获得致命的错误。|5|
|LIBXML_ERR_NONE|获得无错误。|5|
|LIBXML_ERR_WARNING|获得简单警告。|5|
|LIBXML_VERSION|获得 Libxml 版本（例如：20605 或 20617）Get libxml version (e.g. 20605 or 20617)|5|
|LIBXML_DOTTED_VERSION|获得有点号的 Libxml 版本（例如：2.6.5 或 2.6.17）。|5|



