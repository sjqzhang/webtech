 jQuery 选择器  

#### jQuery 选择器

 请使用我们的 [jQuery 选择器检测器](http://www.w3cschool.cc/try/trysel.php) 来演示不同的选择器。

 

|选择器|实例|选取|
|:--|:--|:--|
|*|$("*")|所有元素|
|#id|$("#lastname")|id="lastname" 的元素|
|.class|$(".intro")|class="intro" 的所有元素|
|.class,.class|$(".intro,.demo")|class 为 "intro" 或 "demo" 的所有元素|
|element|$("p")|所有 <p> 元素|
|el1,el2,el3|$("h1,div,p")|所有 <h1>、<div> 和 <p> 元素|
| | | |
|:first|$("p:first")|第一个 <p> 元素|
|:last|$("p:last")|最后一个 <p> 元素|
|:even|$("tr:even")|所有偶数 <tr> 元素|
|:odd|$("tr:odd")|所有奇数 <tr> 元素|
| | | |
|:first-child|$("p:first-child")|属于其父元素的第一个子元素的所有 <p> 元素|
|:first-of-type|$("p:first-of-type")|属于其父元素的第一个 <p> 元素的所有 <p> 元素|
|:last-child|$("p:last-child")|属于其父元素的最后一个子元素的所有 <p> 元素|
|:last-of-type|$("p:last-of-type")|属于其父元素的最后一个 <p> 元素的所有 <p> 元素|
|:nth-child(n)|$("p:nth-child(2)")|属于其父元素的第二个子元素的所有 <p> 元素|
|:nth-last-child(n)|$("p:nth-last-child(2)")|属于其父元素的第二个子元素的所有 <p> 元素，从最后一个子元素开始计数|
|:nth-of-type(n)|$("p:nth-of-type(2)")|属于其父元素的第二个 <p> 元素的所有 <p> 元素|
|:nth-last-of-type(n)|$("p:nth-last-of-type(2)")|属于其父元素的第二个 <p> 元素的所有 <p> 元素，从最后一个子元素开始计数|
|:only-child|$("p:only-child")|属于其父元素的唯一子元素的所有 <p> 元素|
|:only-of-type|$("p:only-of-type")|属于其父元素的特定类型的唯一子元素的所有 <p> 元素|
| | | |
|parent > child|$("div > p")|<div> 元素的直接子元素的所有 <p> 元素|
|parent descendant|$("div p")|<div> 元素的后代的所有 <p> 元素|
|element + next|$("div + p")|每个 <div> 元素相邻的下一个 <p> 元素|
|element ~ siblings|$("div ~ p")|<div> 元素同级的所有 <p> 元素|
| | | |
|:eq(index)|$("ul li:eq(3)")|列表中的第四个元素（index 值从 0 开始）|
|:gt(no)|$("ul li:gt(3)")|列举 index 大于 3 的元素|
|:lt(no)|$("ul li:lt(3)")|列举 index 小于 3 的元素|
|:not(selector)|$("input:not(:empty)")|所有不为空的输入元素|
| | | |
|:header|$(":header")|所有标题元素 <h1>, <h2> ...|
|:animated|$(":animated")|所有动画元素|
|:focus|$(":focus")|当前具有焦点的元素|
|:contains(text)|$(":contains('Hello')")|所有包含文本 "Hello" 的元素|
|:has(selector)|$("div:has(p)")|所有包含有 <p> 元素在其内的 <div> 元素|
|:empty|$(":empty")|所有空元素|
|:parent|$(":parent")|所有是另一个元素的父元素的元素|
|:hidden|$("p:hidden")|所有隐藏的 <p> 元素|
|:visible|$("table:visible")|所有可见的表格|
|:root|$(":root")|文档的根元素|
|:lang(language)|$("p:lang(de)")|所有带有以 "de" 开头的 lang 属性值的 <p> 元素|
| | | |
|[attribute]|$("[href]")|所有带有 href 属性的元素|
|[attribute=value]|$("[href='http://www.w3cschool.cc/jquery/default.htm']")|所有带有 href 属性且值等于 "default.htm" 的元素|
|[attribute!=value]|$("[href!='default.htm']")|所有带有 href 属性且值不等于 "default.htm" 的元素|
|[attribute$=value]|$("[href$='.jpg']")|所有带有 href 属性且值以 ".jpg" 结尾的元素|
|[attribute|=value]|$("[title|='Tomorrow']")|所有带有 title 属性且值等于 'Tomorrow' 或者以 'Tomorrow' 后跟连接符作为开头的字符串|
|[attribute^=value]|$("[title^='Tom']")|所有带有 title 属性且值以 "Tom" 开头的元素|
|[attribute~=value]|$("[title~='hello']")|所有带有 title 属性且值包含单词 "hello" 的元素|
|[attribute*=value]|$("[title*='hello']")|所有带有 title 属性且值包含字符串 "hello" 的元素|
| | | |
|:input|$(":input")|所有 input 元素|
|:text|$(":text")|所有带有 type="text" 的 input 元素|
|:password|$(":password")|所有带有 type="password" 的 input 元素|
|:radio|$(":radio")|所有带有 type="radio" 的 input 元素|
|:checkbox|$(":checkbox")|所有带有 type="checkbox" 的 input 元素|
|:submit|$(":submit")|所有带有 type="submit" 的 input 元素|
|:reset|$(":reset")|所有带有 type="reset" 的 input 元素|
|:button|$(":button")|所有带有 type="button" 的 input 元素|
|:image|$(":image")|所有带有 type="image" 的 input 元素|
|:file|$(":file")|所有带有 type="file" 的 input 元素|
|:enabled|$(":enabled")|所有启用的 input 元素|
|:disabled|$(":disabled")|所有禁用的 input 元素|
|:selected|$(":selected")|所有选定的 input 元素|
|:checked|$(":checked")|所有选中的 input 元素|






