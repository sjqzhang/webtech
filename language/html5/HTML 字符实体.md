 HTML 字符实体  
HTML 中的预留字符必须被替换为字符实体。

 一些在键盘上找不到的字符也可以使用字符实体来替换。

 

#### HTML 实体

 在 HTML 中，某些字符是预留的。

 在 HTML 中不能使用小于号（<）和大于号（>），这是因为浏览器会误认为它们是标签。

 如果希望正确地显示预留字符，我们必须在 HTML 源代码中使用字符实体（character entities）。 字符实体类似这样：

 
```
 &amp;entity_name; 或

 &amp;#entity_number; 




```
 如需显示小于号，我们必须这样写：&amp;lt; 或 &amp;#60; 或 < 

 ![http://www.w3cschool.cc/images/lamp.gif](http://www.w3cschool.cc/images/lamp.gif)Tip: 使用实体名而不是数字的好处是，名称易于记忆。不过坏处是，浏览器也许并不支持所有实体名称（对实体数字的支持却很好）。

 

#### 不间断空格(Non-breaking Space)

 HTML 中的常用字符实体是不间断空格(&amp;nbsp;)。

 浏览器总是会截短 HTML 页面中的空格。如果您在文本中写 10 个空格，在显示该页面之前，浏览器会删除它们中的 9 个。如需在页面中增加空格的数量，您需要使用 &amp;nbsp; 字符实体。

 

#### 结合音标符

 发音符号是加到字母上的一个"glyph(字形)"。

 一些变音符号, 如 尖音符 (  ̀) 和 抑音符 (  ́) 。 

 变音符号可以出现字母的上面和下面，或者字母里面，或者两个字母间。

 变音符号可以与字母、数字字符的组合来使用。

 以下是一些实例:

 

|音标符|字符|Construct|输出结果 |
|:--|:--|:--|:--|
|   ̀|a|a&amp;#768;|à|
|   ́|a|a&amp;#769;|á|
| ̂|a|a&amp;#770;|â|
|   ̃|a|a&amp;#771;|ã|
|   ̀|O|O&amp;#768;|Ò|
|   ́|O|O&amp;#769;|Ó|
| ̂|O|O&amp;#770;|Ô|
|   ̃|O|O&amp;#771;|Õ|





#### HTML字符实体

 

|   实体名称对大小写敏感！ |





|显示结果|描述|实体名称|实体编号|
|:--|:--|:--|:--|
| |空格|&amp;nbsp;|&amp;#160;|
|<|小于号|&amp;lt;|&amp;#60;|
|>|大于号|&amp;gt;|&amp;#62;|
|&amp;|和号|&amp;amp;|&amp;#38;|
|"|引号|&amp;quot;|&amp;#34;|
|'|撇号 |&amp;apos; (IE不支持)|&amp;#39;|
|￠|分|&amp;cent;|&amp;#162;|
|£|镑|&amp;pound;|&amp;#163;|
|¥|日元|&amp;yen;|&amp;#165;|
|€|欧元|&amp;euro;|&amp;#8364;|
|§|小节|&amp;sect;|&amp;#167;|
|©|版权|&amp;copy;|&amp;#169;|
|®|注册商标|&amp;reg;|&amp;#174;|
|™|商标|&amp;trade;|&amp;#8482;|
|×|乘号|&amp;times;|&amp;#215;|
|÷|除号|&amp;divide;|&amp;#247;|

 查看本站完整的HTML实体：请点击 [HTML 实体参考手册](http://www.w3cschool.cc/tags/ref-entities.html)。 

 

