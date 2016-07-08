 
#### Bootstrap HTML编码规范

  code { font-family: "PT Mono", Menlo, "Courier New", monospace; padding: 2px 4px; font-size: 85%; color: #d44950; background-color: #f7f7f9; border-radius: .2rem; } 

#### 语法

 
用两个空格来代替制表符（tab） -- 这是唯一能保证在所有环境下获得一致展现的方法。
 嵌套元素应当缩进一次（即两个空格）。
 对于属性的定义，确保全部使用双引号，绝不要使用单引号。
 不要在自闭合（self-closing）元素的尾部添加斜线 -- [HTML5 规范](http://www.w3cschool.cc//dev.w3.org/html5/spec-author-view/syntax.html#syntax-start-tag)中明确说明这是可选的。
 不要省略可选的结束标签（closing tag）（例如，</li> 或 </body>）。
 
实例：

 
```

<!DOCTYPE html>
<html>
  <head>
    <title>Page title</title>
  </head>
  <body>
    <img src="http://www.w3cschool.cc/bootstrap/images/company-logo.png" alt="Company">
    <h1 class="hello-world">Hello, world!</h1>
  </body>
</html>

```
 
#### HTML5 doctype

 为每个 HTML 页面的第一行添加标准模式（standard mode）的声明，这样能够确保在每个浏览器中拥有一致的展现。

 实例：

 
```

<!DOCTYPE html>
<html>
  <head>
  </head>
</html>

```
 
#### 语言属性

 根据 HTML5 规范：

 强烈建议为 html 根元素指定 lang 属性，从而为文档设置正确的语言。这将有助于语音合成工具确定其所应该采用的发音，有助于翻译工具确定其翻译时所应遵守的规则等等。

 更多关于 lang 属性的知识可以从 [此规范](http://www.w3cschool.cc//www.w3.org/html/wg/drafts/html/master/semantics.html#the-html-element) 中了解。

 这里列出了[语言代码表](http://www.w3cschool.cc//reference.sitepoint.com/html/lang-codes)。

 
```

<html lang="zh-CN">
  <!-- ... -->
</html>

```
 
#### IE 兼容模式

 IE 支持通过特定的 <meta> 标签来确定绘制当前页面所应该采用的 IE 版本。除非有强烈的特殊需求，否则最好是设置为 

#### edge mode

，从而通知 IE 采用其所支持的最新的模式。

 
```

<meta http-equiv="X-UA-Compatible" content="IE=Edge">

```
 
#### 字符编码

 通过明确声明字符编码，能够确保浏览器快速并容易的判断页面内容的渲染方式。这样做的好处是，可以避免在 HTML 中使用字符实体标记（character entity），从而全部与文档编码一致（一般采用 UTF-8 编码）。

 
```

<head>
  <meta charset="UTF-8">
</head>

```
 
#### 引入 CSS 和 JavaScript 文件

 根据 HTML5 规范，在引入 CSS 和 JavaScript 文件时一般不需要指定 type 属性，因为 text/css 和 text/javascript 分别是它们的默认值。

 
#### HTML5 spec links

 
[Using link](http://www.w3cschool.cc//www.w3.org/TR/2011/WD-html5-20110525/semantics.html#the-link-element)
 [Using style](http://www.w3cschool.cc//www.w3.org/TR/2011/WD-html5-20110525/semantics.html#the-style-element)
 [Using script](http://www.w3cschool.cc//www.w3.org/TR/2011/WD-html5-20110525/scripting-1.html#the-script-element)
 

```

<!-- External CSS -->
<link rel="stylesheet" href="http://www.w3cschool.cc/bootstrap/code-guide.css">

<!-- In-document CSS -->
<style>
  /* ... */
</style>

<!-- JavaScript -->
<script src="http://www.w3cschool.cc/bootstrap/code-guide.js"></script>

```
 
#### 实用为王

 尽量遵循 HTML 标准和语义，但是不要以牺牲实用性为代价。任何时候都要尽量使用最少的标签并保持最小的复杂度。

 
#### 属性顺序

 HTML 属性应当按照以下给出的顺序依次排列，确保代码的易读性。

 
class
 
id, name

 data-*
 
src, for, type, href

 
title, alt

 
aria-*, role

 
class 用于标识高度可复用组件，因此应该排在首位。id 用于标识具体组件，应当谨慎使用（例如，页面内的书签），因此排在第二位。

 
```

<a class="..." id="..." data-modal="toggle" href="#">
  Example link
</a>

<input class="form-control" type="text">

<img src="http://www.w3cschool.cc/bootstrap/..." alt="...">

```
 
#### 布尔（boolean）型属性

 布尔型属性可以在声明时不赋值。XHTML 规范要求为其赋值，但是 HTML5 规范不需要。

 更多信息请参考 [WhatWG section on boolean attributes](http://www.w3cschool.cc//www.whatwg.org/specs/web-apps/current-work/multipage/common-microsyntaxes.html#boolean-attributes)：

 元素的布尔型属性如果有值，就是 true，如果没有值，就是 false。

 如果一定要为其赋值的话，请参考 WhatWG 规范：

 如果属性存在，其值必须是空字符串或 [...] 属性的规范名称，并且不要再收尾添加空白符。

 

#### 简单来说，就是不用赋值。



 
```

<input type="text" disabled>

<input type="checkbox" value="1" checked>

<select>
  <option value="1" selected>1</option>
</select>

```
 
#### 减少标签的数量

 编写 HTML 代码时，尽量避免多余的父元素。很多时候，这需要迭代和重构来实现。请看下面的案例：

 
```

<!-- Not so great -->
<span class="avatar">
  <img src="http://www.w3cschool.cc/bootstrap/...">
</span>

<!-- Better -->
<img class="avatar" src="http://www.w3cschool.cc/bootstrap/...">

```
 
#### JavaScript 生成的标签

 通过 JavaScript 生成的标签让内容变得不易查找、编辑，并且降低性能。能避免时尽量避免。

 

