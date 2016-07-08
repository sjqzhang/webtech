  #textshadow { text-shadow: 5px 5px 5px #FF0000; font-size:30px; } #wordwrap { width:11em; border:1px solid #000000; word-wrap:break-word; } #normal { width:11em; border:1px solid #000000; word-wrap:normal; } 
CSS3 文本效果  

#### CSS3 文本效果

 CSS3中包含几个新的文本特征。

 在本章中您将了解以下文本属性：

 
text-shadow
 word-wrap
 


#### 浏览器支持

 

|属性|浏览器支持|
|:--||||||
|text-shadow||||||
|word-wrap||||||

Internet Explorer 10, Firefox,Chrome, Safari, 和 Opera支持text-shadow 属性。

 所有的主流浏览器支持自动换行（word-wrap）属性。

 

#### 注意：

 Internet Explorer 9及更早IE版本不支持 text-shadow 属性.

 

#### CSS3的文本阴影

 CSS3中，text-shadow属性适用于文本阴影。

  ![http://www.w3cschool.cc/images/text_shadow_effect.gif](http://www.w3cschool.cc/images/text_shadow_effect.gif)

 您指定了水平阴影，垂直阴影，模糊的距离，以及阴影的颜色：

  ![http://www.w3cschool.cc/images/compatible_opera2020.gif](http://www.w3cschool.cc/images/compatible_opera2020.gif)![http://www.w3cschool.cc/images/compatible_safari2020.gif](http://www.w3cschool.cc/images/compatible_safari2020.gif)![http://www.w3cschool.cc/images/compatible_chrome2020.gif](http://www.w3cschool.cc/images/compatible_chrome2020.gif)![http://www.w3cschool.cc/images/compatible_firefox2020.gif](http://www.w3cschool.cc/images/compatible_firefox2020.gif)![http://www.w3cschool.cc/images/compatible_ie2020.gif](http://www.w3cschool.cc/images/compatible_ie2020.gif)
#### 实例

 给标题添加阴影:

 
```
 h1

 {

 text-shadow: 5px 5px 5px #FF0000;

 } 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss3_text-shadow_tut) 

 



#### CSS3的换行

 如果某个单词太长，不适合在一个区域内，它扩展到外面：

  This paragraph contains a very long word: thisisaveryveryveryveryveryverylongword. The long word will break and wrap to the next line.

 CSS3中，自动换行属性允许您强制文本换行 - 即使这意味着分裂它中间的一个字：

  This paragraph contains a very long word: thisisaveryveryveryveryveryverylongword. The long word will break and wrap to the next line.

 CSS代码如下：

  ![http://www.w3cschool.cc/images/compatible_opera2020.gif](http://www.w3cschool.cc/images/compatible_opera2020.gif)![http://www.w3cschool.cc/images/compatible_safari2020.gif](http://www.w3cschool.cc/images/compatible_safari2020.gif)![http://www.w3cschool.cc/images/compatible_chrome2020.gif](http://www.w3cschool.cc/images/compatible_chrome2020.gif)![http://www.w3cschool.cc/images/compatible_firefox2020.gif](http://www.w3cschool.cc/images/compatible_firefox2020.gif)![http://www.w3cschool.cc/images/compatible_ie2020.gif](http://www.w3cschool.cc/images/compatible_ie2020.gif)
#### 实例

 允许长文本换行:

 
```
 p {word-wrap:break-word;} 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss3_word-wrap) 

 



#### New Text Properties

 

|属性|描述|CSS|
|:--|:--|:--|
|hanging-punctuation|规定标点字符是否位于线框之外。|3|
|punctuation-trim|规定是否对标点字符进行修剪。|3|
|text-align-last|设置如何对齐最后一行或紧挨着强制换行符之前的行。|3|
|text-emphasis|向元素的文本应用重点标记以及重点标记的前景色。|3|
|text-justify|规定当 text-align 设置为 "justify" 时所使用的对齐方法。|3|
|text-outline|规定文本的轮廓。|3|
|text-overflow|规定当文本溢出包含元素时发生的事情。|3|
|text-shadow|向文本添加阴影。|3|
|text-wrap|规定文本的换行规则。|3|
|word-break|规定非中日韩文本的换行规则。|3|
|word-wrap|允许对长的不可分割的单词进行分割并换行到下一行。|3|



