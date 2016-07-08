 CSS 语音参考
 
听觉样式表使用了语音合成和声音效果的结合，让用户收听信息，而不是读取信息。

 有声显示可用于：

 
失明人士
 帮助用户学习阅读
 帮助具有阅读问题的用户
 家庭娱乐
 在车上
 
听觉呈现通常会把文档转化为纯文本，然后传给屏幕阅读器（可读出屏幕上所有字符的一种程序）。

 听觉样式表的一个例子：

 
```
 h1,h2,h3,h4

 {

 voice-family:male;

 richness:80;

 cue-before:url("beep.au")

 } 




```
 上面的例子用语音合成器播放声音，开头有一个男性的声音说话。

 



#### CSS 语音参考手册

 CSS"列表示在CSS版本的属性定义（CSS1或CSS2）。

 

|Property|Description|Values|CSS|
|:--|:--|:--|:--|
|azimuth|设置声音应该来自哪里|angle left-side far-left left center-left center center-right right far-right right-side behind leftwards rightwards|2|
|cue|在一个声明中设置cue属性|cue-before cue-after|2|
|cue-after|指定要播放的声音在一个元素的内容后面|noneurl|2|
|cue-before|指定要播放的声音在一个元素的内容前面|noneurl|2|
|elevation|设置声音应该来自哪里|angle below level above higher lower |2|
|pause|在一个声明中设置pause属性|pause-before pause-after|2|
|pause-after|在一个元素的内容之后，指定暂停|time %|2|
|pause-before|在一个元素的内容之前，指定暂停|time %|2|
|pitch|指定讲话声音|frequency x-low low medium high x-high |2|
|pitch-range|指定讲话声音的变化。（单调的声音或动态的声音？）|number|2|
|play-during|指定在读一个元素的内容时要播放的声音|auto noneurl mix repeat|2|
|richness|指定丰富的讲话声音。（浑厚的声音或细的声音？）|number|2|
|speak|指定内容是否会提供听觉方式|normal none spell-out|2|
|speak-header|此属性设置或检索表格标题是在所有的单元格之前发声，还是到一个不与之关联的单元格就结束发声。|always once|2|
|speak-numeral|设置或检索数字如何发音。|digits continuous|2|
|speak-punctuation|设置或检索标点字符如何发音|none code|2|
|speech-rate|指定发言速度|number x-slow slow medium fast x-fast faster slower |2|
|stress|讲话声音在指定的地方"重音"|number|2|
|voice-family|设置或检索当前声音类型|specific-voice generic-voice|2|
|volume|指定发言的音量|number%silent x-soft soft medium loud x-loud |2|



