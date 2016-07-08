
			
			


						
			
#### MediaWiki语法


#### 导航:

[上一级](http://pub.lcair.com/index.php?title=%E5%88%86%E7%B1%BB:MediaWiki%E6%96%87%E6%A1%A3)








#### 目录





[1 字体](#.E5.AD.97.E4.BD.93)

[2 标题](#.E6.A0.87.E9.A2.98)


[3 列表](#.E5.88.97.E8.A1.A8)

[3.1 顺序列表](#.E9.A1.BA.E5.BA.8F.E5.88.97.E8.A1.A8)

[3.2 无序列表](#.E6.97.A0.E5.BA.8F.E5.88.97.E8.A1.A8)

[3.3 混合列表](#.E6.B7.B7.E5.90.88.E5.88.97.E8.A1.A8)

[3.4 缩进与列表](#.E7.BC.A9.E8.BF.9B.E4.B8.8E.E5.88.97.E8.A1.A8)




[4 注释](#.E6.B3.A8.E9.87.8A)

[5 换行](#.E6.8D.A2.E8.A1.8C)

[6 内部链接](#.E5.86.85.E9.83.A8.E9.93.BE.E6.8E.A5)

[7 外部链接](#.E5.A4.96.E9.83.A8.E9.93.BE.E6.8E.A5)


[8 分类](#.E5.88.86.E7.B1.BB)

[8.1 添加与编辑分类](#.E6.B7.BB.E5.8A.A0.E4.B8.8E.E7.BC.96.E8.BE.91.E5.88.86.E7.B1.BB)

[8.2 引用分类](#.E5.BC.95.E7.94.A8.E5.88.86.E7.B1.BB)




[9 引用文章](#.E5.BC.95.E7.94.A8.E6.96.87.E7.AB.A0)

[10 使用图片](#.E4.BD.BF.E7.94.A8.E5.9B.BE.E7.89.87)

[11 禁止文字转换](#.E7.A6.81.E6.AD.A2.E6.96.87.E5.AD.97.E8.BD.AC.E6.8D.A2)

[12 目录控制](#.E7.9B.AE.E5.BD.95.E6.8E.A7.E5.88.B6)

[13 编辑按钮控制](#.E7.BC.96.E8.BE.91.E6.8C.89.E9.92.AE.E6.8E.A7.E5.88.B6)


[14 表格](#.E8.A1.A8.E6.A0.BC)

[14.1 表格标签(table)](#.E8.A1.A8.E6.A0.BC.E6.A0.87.E7.AD.BE.28table.29)

[14.2 单元格(td)](#.E5.8D.95.E5.85.83.E6.A0.BC.28td.29)

[14.3 表头(th)](#.E8.A1.A8.E5.A4.B4.28th.29)

[14.4 行(tr)](#.E8.A1.8C.28tr.29)

[14.5 标题(caption)](#.E6.A0.87.E9.A2.98.28caption.29)

[14.6 参数](#.E5.8F.82.E6.95.B0)

[14.7 行高(height)和列宽(width)](#.E8.A1.8C.E9.AB.98.28height.29.E5.92.8C.E5.88.97.E5.AE.BD.28width.29)

[14.8 实例](#.E5.AE.9E.E4.BE.8B)





[15 高级特性](#.E9.AB.98.E7.BA.A7.E7.89.B9.E6.80.A7)

[15.1 章节、段落，列表及线条](#.E7.AB.A0.E8.8A.82.E3.80.81.E6.AE.B5.E8.90.BD.EF.BC.8C.E5.88.97.E8.A1.A8.E5.8F.8A.E7.BA.BF.E6.9D.A1)

[15.2 字符格式](#.E5.AD.97.E7.AC.A6.E6.A0.BC.E5.BC.8F)





[16 插件语法](#.E6.8F.92.E4.BB.B6.E8.AF.AD.E6.B3.95)


[16.1 cite](#cite)

[16.1.1 简介](#.E7.AE.80.E4.BB.8B)


[16.1.2 使用方法](#.E4.BD.BF.E7.94.A8.E6.96.B9.E6.B3.95)

[16.1.2.1 第一样例](#.E7.AC.AC.E4.B8.80.E6.A0.B7.E4.BE.8B)












 <span id=".E5.AD.97.E4.BD.93" ></span> 字体 

两个 ' 来表示斜体，三个 ' 表示粗体，五个 ' 表示粗斜体，比如
 斜体        粗体            粗斜体 
对于字体你可以采用如下方式改变大小和颜色，比如




```

Here's some <big>large text</big> and some <small>little words</small>.
<font color="red">Here is red text</font>
<font size="+3">Here is big text</font>
<span style="color:green">Here is green text</span>
'''Here's some large text'''

```

将得到：
Here's some large text and some little words.



Here is red text



Here is big text



Here is green text



Here's some large text



即使用标签 <big>，<small>，<font>，<span>,<b>



 <span id=".E6.A0.87.E9.A2.98" ></span> 标题 

MediaWiki标题使用等号来控制。
文章较长而需要设置段落标题时，可使用




```

= 一级标题 =
== 二级标题 ==
=== 三级标题 ===
==== 四级标题 ====
===== 五级标题 =====
====== 六级标题 ======

```

等 wiki 标记。系统将自动根据标题等级显示出不同的字体效果。 
注意：文章标题要求在行首书写，结尾的等号之后不能紧跟文字，否则MediaWiki将不认为是标题。 
当文章中含有3个以上标题时，MediaWiki将自动在第一个标题之前生成目录（这是默认的设置）。



 <span id=".E5.88.97.E8.A1.A8" ></span> 列表 

 <span id=".E9.A1.BA.E5.BA.8F.E5.88.97.E8.A1.A8" ></span> 顺序列表 

顺序列表用#号表示。一个#号表示一级，两个#号表示第二级...
输入：




```

# 这是第一种
# 哦耶，会自动标上序号哦!!
## 唔!变成第二层了
## 不错玩
### 再到第三层
### 还是第三层

```

得到：




 这是第一种


 哦耶，会自动标上序号哦!!

 唔!变成第二层了


 不错玩

 再到第三层


 还是第三层









 <span id=".E6.97.A0.E5.BA.8F.E5.88.97.E8.A1.A8" ></span> 无序列表 

无序列表用*号来表示
输入：




```

* 这是第二种
* 哦耶
** 第二层
***第三层

```

得到：




 这是第二种


 哦耶
 第二层
第三层







 <span id=".E6.B7.B7.E5.90.88.E5.88.97.E8.A1.A8" ></span> 混合列表 

输入：




```

#祖父(还可以这样用)
#*父
#*母
##兄
##*弟
##*妹
### 这是谁?
##*下面的别乱搞啊
#*#(请按照层级)
#祖母(注意标记，第一层的都同样是"#")

```

得到：




祖父(还可以这样用)

父


母



兄

弟


妹



 这是谁?


下面的别乱搞啊




(请按照层级)





祖母(注意标记，第一层的都同样是"#")



 <span id=".E7.BC.A9.E8.BF.9B.E4.B8.8E.E5.88.97.E8.A1.A8" ></span> 缩进与列表 

mediawiki中的缩进不能使用半角空格调整。有以下几种方式控制缩进格式缩进：



行首使用半角:号：允许多个半角冒号连用，以控制不同文本缩进深度。



行首使用半角*号：行首星号是列表控制符，产生列表的同时伴有不同的文本缩进。允许多个星号连用。



行首使用半角#号：数字序号的列表控制符，与星号类似。注意，多个#号行中夹有非#号起始的文本行时，数字序号会中断。



使用;与:号配合：分号与冒号称为“定义列表”控制符，冒号之后的部分换行缩进显示。



行首使用全角空格：一种非正规手段，注意不要滥用。



例如输入时在行首加一空格：




```
 空格的作用
```

（请注意行首有一半角空格）



就得到：




```
空格的作用

```

例如行首输入冒号，就得到两个文字的缩进：




```
:冒号表示缩进
```

得到：



冒号表示缩进

使用;与:配合，例如输入：




```

;标题:定义

```

得到：




标题
定义


 <span id=".E6.B3.A8.E9.87.8A" ></span> 注释 

mediawiki的注释和html一样啦，加了注释就不会在wiki页面上出现了啦。




```
<!-- 我要将妳藏起来 -->
```

 <span id=".E6.8D.A2.E8.A1.8C" ></span> 换行 

MediaWiki文本中，单独回车并不会出现换行。为强制换行，可以：




 增加空行会分开不同的段落


 在换行位置使用强制换行标签“<br>”



 <span id=".E5.86.85.E9.83.A8.E9.93.BE.E6.8E.A5" ></span> 内部链接 

MediaWiki内部链接使用两个方括号，例如输入




```
[[首页]]
```

就得到 [首页](http://pub.lcair.com/index.php?title=%E9%A6%96%E9%A1%B5)
如果链接的实际地址和现实的不一致，使用下面的格式：




```
[[MediaWiki页面分类|页面分类]]
```

显示效果如下：
[页面分类](http://pub.lcair.com/index.php?title=MediaWiki%E9%A1%B5%E9%9D%A2%E5%88%86%E7%B1%BB)



 <span id=".E5.A4.96.E9.83.A8.E9.93.BE.E6.8E.A5" ></span> 外部链接 

分以下两种情况：



 URL 地址 MediaWiki 会自动识别为链接。


 例如输入：


```
http://klniu.com/
```


 就显示：

 [http://klniu.com/](http://klniu.com/) 

 注意：为了正确识别，在URL之后要留一个空格。


 利用方括号定义外部链接，这种方式可以指定显示的内容。


 例如输入：


```
[http://klniu.com/ Klniu]
```
 

 就得到：

 [Klniu](http://klniu.com/)

 URL和显示文本之间用空格隔开。


 <span id=".E5.88.86.E7.B1.BB" ></span> 分类 

 <span id=".E6.B7.BB.E5.8A.A0.E4.B8.8E.E7.BC.96.E8.BE.91.E5.88.86.E7.B1.BB" ></span> 添加与编辑分类 

在文本中嵌入“[[category:文章分类]]”的文字，会使本文自动归类到“文章分类”下面。一般习惯在文章末尾放置该语句；同一篇文章可以设定多个分类。
编辑完成后，点击正文页面下端的分类名称，可以进入该分类页面查看更多的同类文章。同时，分类页面中也可以进行编辑，以进行必要的说明。



 <span id=".E5.BC.95.E7.94.A8.E5.88.86.E7.B1.BB" ></span> 引用分类 

在 mediawiki 文章中链接分类页面正确的写法是[[:category:XXX]]，显示时不会显示前导冒号，例如[category:MediaWiki](http://pub.lcair.com/index.php?title=%E5%88%86%E7%B1%BB:MediaWiki&action=edit&redlink=1)。



如果没有前导冒号，直接书写[[category:XXX]]不能得到正确的链接，而会将页面进行一次预料之外的分类。



分类页面链接的引用中也可以增加说明文字，格式为[[:category:XXX|说明文字]]，例如文本中的 [[:category:MediaWiki文档|关于MediaWiki的分类]] 将显示为[关于MediaWiki的分类](http://pub.lcair.com/index.php?title=%E5%88%86%E7%B1%BB:MediaWiki%E6%96%87%E6%A1%A3)。



 <span id=".E5.BC.95.E7.94.A8.E6.96.87.E7.AB.A0" ></span> 引用文章 

mediawiki中允许调用其他页面中的内容，方法为文章中输入{{被引用文章}}。在其中要指出命名空间，比如需要引用主命名空间下的“地球”，则使用{{:地球}}。
这种调用一般用于公共内容的处理，例如同一专题的侧栏、导航条内容等。



 <span id=".E4.BD.BF.E7.94.A8.E5.9B.BE.E7.89.87" ></span> 使用图片 


对于站外图片，直接在文本中书写http链接即可


当图片位于本机（没有网址可供调用）时，要把图片在Special:Upload页面上传后才能使用。（该页面的链接可在左边的“工具箱”中找到，标注为“上传文件”）。 


图片文件不能使用中文名称，应在上载时指定为英文名称。


上载完成后，图片即可被引用。使用方式为在文章编辑时加入“[[Image:Filename.jpg]]”即可（如果发现图片无法引用，请检查文件名的大小写）



 <span id=".E7.A6.81.E6.AD.A2.E6.96.87.E5.AD.97.E8.BD.AC.E6.8D.A2" ></span> 禁止文字转换 

当需要原样显示会被系统转换掉的文本时（如双中括号等），应在歧义文本的两端分别加上




```

<nowiki></nowiki>

```

标记，系统将不再转换中间的内容。
也可以使用




```
<pre></pre>
```

标记。



 <span id=".E7.9B.AE.E5.BD.95.E6.8E.A7.E5.88.B6" ></span> 目录控制 

当文章中含有3个以上标题时，mediawiki将自动在第一个标题之前生成目录（这是默认的设置）。 




如果需要隐去目录，可以在文章中加入“__NOTOC__”标记； 


如果需要强制显示目录而不管标题数量，可以加入“__TOC__”标记； 



这两个wiki标记不限制出现位置，但一般出现在文章头部或尾部且单独成行。



 <span id=".E7.BC.96.E8.BE.91.E6.8C.89.E9.92.AE.E6.8E.A7.E5.88.B6" ></span>编辑按钮控制

在页面任意处放入下面 Magic word，关闭所有“编辑”按钮




```
__NOEDITSECTION__
```

 <span id=".E8.A1.A8.E6.A0.BC" ></span> 表格 

 <span id=".E8.A1.A8.E6.A0.BC.E6.A0.87.E7.AD.BE.28table.29" ></span> 表格标签(table) 

可以这样描述一个表格：




```

{|参数
|}

```

相当于




```

<table 参数>
</table>

```

 <span id=".E5.8D.95.E5.85.83.E6.A0.BC.28td.29" ></span> 单元格(td) 

单元格可以这样产生：




```

|单元1
|单元2
|单元3

```

或者这样也可以：




```
|单元1||单元2||单元3
```

相当于




```
<td>单元1</td><td>单元2</td><td>单元3</td>
```

其中“||”相当于“新起一行”+“|”
在单元格中可以这样使用参数：




```
|参数|单元1
```

相当于




```
<td 参数>
```

 <span id=".E8.A1.A8.E5.A4.B4.28th.29" ></span> 表头(th) 

使用方法和单元格类似，用“!”代替“|”，用“!!”代替“||”。但是参数仍然使用“|”。



 <span id=".E8.A1.8C.28tr.29" ></span> 行(tr) 

表格开始时会自己新建一行，如果要开始一个新行使用：




```
|-
```

或者




```
|--------------
```

或者




```
|-------------------
```

他们都相当于




```
<tr>
```

可以这样添加参数：




```
|- 参数
```

或者




```
|------- 参数
```

都相当于




```
<tr 参数>
```

 <span id=".E6.A0.87.E9.A2.98.28caption.29" ></span> 标题(caption) 

表格标题标记可以这样使用：




```
|+ 标题
```

相当于




```
<caption>标题</caption>
```

你也可以使用参数：




```
|+ 参数|标题
```

相当于




```
<caption 参数>Caption
```

 <span id=".E5.8F.82.E6.95.B0" ></span> 参数 

参数基本是和html标记语言一致的。



边框 border 


border的值对应着不同的边框样式，可以在使用时尝试多个值，对比效果后选择

对齐 align 


align的值可以取right（右对齐） left（左对齐） center（居中） justify（两端对齐）

合并单元格 rowspan和colspan


rowspan和colspan表示为一个单元格所占用的行数和列数

颜色 bgcolor background color


：bgcolor和background是设置的背景颜色，color是设置的字体的颜色。



针对单元格设置背景色和字体色，



```
{| border=1
| bgcolor=blue | <font color=yellow> 字黄背景蓝
| 沒设定顏色
| style="background:red; color:yellow" | 字黄背景红
| 沒设定顏色
|}

```

显示为


  字黄背景蓝


 沒设定顏色

 字黄背景红

 沒设定顏色


针对整行或者整列或者整个表格色彩的设置



```

{| style="background:yellow; color:blue" border=1
|- 
| 这行是
| 蓝字
| 黄背景
|- style="background:navy; color:white"
| 这行是
| 白字
| 深海蓝
|-
| 这行
| style="background:white" | 比较
| 不一样
|}

```



 这行是

 蓝字

 黄背景



 这行是

 白字

 深海蓝



 这行

 比较

 不一样




 <span id=".E8.A1.8C.E9.AB.98.28height.29.E5.92.8C.E5.88.97.E5.AE.BD.28width.29" ></span> 行高(height)和列宽(width) 

整个表格的行高(height)和列宽(width)，以及任意列的列宽可以进行设定。要设定任意行的行高，可以通过设定该行任意一个单元格的行高来实现。如果存在行、列的高、宽没有设定，那么表格的显示结果可能随浏览器的不同而不同。




```

{| style="width:75%; height:200px" border="1"
|- 
| abc
| def
| ghi
|- style="height:100px" 
| jkl
| style="width:200px" |mno
| pqr
|-
| stu
| vwx
| yz
|}

```

将得到这样的结果：





 abc

 def

 ghi



 jkl

mno

 pqr



 stu

 vwx

 yz



 <span id=".E5.AE.9E.E4.BE.8B" ></span> 实例 

实例1：



```

{|
| 单元1，行1
| 单元2，行1
|-
| 单元1，行2
| 单元2, 行2
|}

```

将生成：



 单元1，行1

 单元2，行1



 单元1，行2

 单元2, 行2



实例2：



```

{| align=right border=1
| 单元1, 行1
|rowspan=2| 单元2, 行1 (和2)
| 单元3, 行1
|-
| 单元1, 行2
| 单元3, 行2
|}

```

将生成：



 单元1, 行1

 单元2, 行1 (和2)

 单元3, 行1



 单元1, 行2

 单元3, 行2



实例3


嵌套表格


```

{| border=1
| 你好
|
{| bgcolor=#ABCDEF border=2
|中国
|-
|表格
|}
|原来表格
|}

```

生成：


 你好



中国

表格



原来表格


实例4：


带标题的表格


```

{| border=1 align=right
|+ '''这是标题''' 请参看：
|独立||1949年
|-
|国家||中华人民共和国
|-
|时区||UTC+8
|-
|国歌||义勇军进行曲
|-
|域名||.cn
|}

```

将生成：


 这是标题 请参看：


独立
1949年



国家
中华人民共和国



时区
UTC+8



国歌
义勇军进行曲



域名
.cn



 <span id=".E9.AB.98.E7.BA.A7.E7.89.B9.E6.80.A7" ></span> 高级特性 

名字空间：在mediawiki中，以英文开始的文章标题中首字母自动大写；标题中的空格会被自动使用下划线代替。


下面表格的左边显示浏览效果。也就是说，要使文字实现像左边列一样的效果，输入右边列的文字就行了。
您或许想在另一个窗口打开本页以做参考。如果您希望实验一下，您可以在[沙盒](http://pub.lcair.com/index.php?title=MediaWiki:Sandbox&action=edit&redlink=1)中实验。



 <span id=".E7.AB.A0.E8.8A.82.E3.80.81.E6.AE.B5.E8.90.BD.EF.BC.8C.E5.88.97.E8.A1.A8.E5.8F.8A.E7.BA.BF.E6.9D.A1" ></span> 章节、段落，列表及线条 



 您所看到的

 您所输入的



 当您在对话页添加评语时，您应当签名。您可以输入三条～添加用户名：Klniu
或四条～添加用户名及日期时间：
Klniu 08:24 2004年7月31日 (UTC)
当输入五条～时只显示时间：
08:26 2004年10月25日 (UTC)




 
```
当您在对话页添加评语时，您应当签名。
您可以输入三条～添加用户名： 
~~~
或四条添加用户名及日期时间：
~~~~
当输入五条时只显示时间：
~~~~~

```




 <span id=".E5.AD.97.E7.AC.A6.E6.A0.BC.E5.BC.8F" ></span> 字符格式 



 您所看到的

 您所输入的




变音及重音符号：


À Á Â Ã Ä Å 


Æ Ç È É Ê Ë 


Ì Í
Î Ï Ñ Ò 


Ó Ô Õ
Ö Ø Ù 


Ú Û Ü ß
à á 


â ã ä å æ
ç 


è é ê ë ì í


î ï ñ ò ó ô 


õ
ö ø ù ú û 


ü ÿ




 
```


&Agrave; &Aacute; &Acirc; &Atilde; &Auml; &Aring; 
&AElig; &Ccedil; &Egrave; &Eacute; &Ecirc; &Euml; 
&Igrave; &Iacute; &Icirc; &Iuml; &Ntilde; &Ograve; 
&Oacute; &Ocirc; &Otilde; &Ouml; &Oslash; &Ugrave; 
&Uacute; &Ucirc; &Uuml; &szlig; &agrave; &aacute; 
&acirc; &atilde; &auml; &aring; &aelig; &ccedil; 
&egrave; &eacute; &ecirc; &euml; &igrave; &iacute;
&icirc; &iuml; &ntilde; &ograve; &oacute; &ocirc; 
&oelig; &otilde; &ouml; &oslash; &ugrave; &uacute; 
&ucirc; &uuml; &yuml;
```





标点符号：


¿ ¡ « » § ¶


† ‡ • —




 
```

&iquest; &iexcl; &laquo; &raquo; &sect; &para;
&dagger; &Dagger; &bull; &mdash;
```





商业符号：


™ © ® ¢ € ¥ 


£ ¤




 
```

&trade; &copy; &reg; &cent; &euro; &yen; 
&pound; &curren;

```




 下标：x2

上标：x2 或者 x²



上標的后一种方法可能在多数情况下无法使用，但情況許可下請使用因为這使文章看起來較順眼。


ε0 =
8.85 × 10−12
C² / J m.




 
```
下标: x<sub>2</sub>
上标: x<sup>2</sup> 或者 x&sup2;
&epsilon;<sub>0</sub> =
8.85 × 10<sup>−12</sup>
C² / J m.
```




 希腊字母： 

α β γ δ ε ζ 


η θ ι κ λ μ ν 


ξ ο π ρ  σ ς 


τ υ φ χ ψ ω


Γ Δ Θ Λ Ξ Π 


Σ Φ Ψ Ω




 
```

&alpha; &beta; &gamma; &delta; &epsilon; &zeta; 
&eta; &theta; &iota; &kappa; &lambda; &mu; &nu; 
&xi; &omicron; &pi; &rho;  &sigma; &sigmaf;
&tau; &upsilon; &phi; &chi; &psi; &omega;
&Gamma; &Delta; &Theta; &Lambda; &Xi; &Pi; 
&Sigma; &Phi; &Psi; &Omega;

```





数学符号： 


∫ ∑ ∏ √ − ± ∞


≈ ∝ ≡ ≠ ≤ ≥ →


× · ÷ ∂ ′ ″


∇ ‰ ° ∴ ℵ ø


∈ ∉ ∩ ∪ ⊂ ⊃ ⊆ ⊇


¬ ∧ ∨ ∃ ∀ ⇒ ⇔




 
```

&int; &sum; &prod; &radic; &minus; &plusmn; &infin;
&asymp; &prop; &equiv; &ne; &le; &ge; &rarr;
&times; &middot; &divide; &part; &prime; &Prime;
&nabla; &permil; &deg; &there4; &alefsym; &oslash;
&isin; &notin; &cap; &cup; &sub; &sup; &sube; &supe;
&not; &and; &or; &exist; &forall; &rArr; &hArr;
&rarr; &harr;
```




 x2   ≥   0 true.

要分开文字，使用非分隔空格 - &nbsp;.



&nbsp;也防止在文字中间换行。这在方程式中十分有用。




 
```

<i>x</i><sup>2</sup>&nbsp;&nbsp;&ge;&nbsp;&nbsp;0 true.

```





Ascii文字艺术（每行开始处留空）：




```

∞ -x²
∫ e   dx = √π
-∞ 
```


 
```
 
&infin; -x&sup2;
&int; e   dx = &radic;&pi;
-&infin; 
```




 <span id=".E6.8F.92.E4.BB.B6.E8.AF.AD.E6.B3.95" ></span>插件语法

 <span id="cite" ></span>cite

 <span id=".E7.AE.80.E4.BB.8B" ></span>简介

Cite 是 mediawiki 的一个插件，可以方便的进行参考文献的引用与处理。
主要语法关键字有：ref group reference



 <span id=".E4.BD.BF.E7.94.A8.E6.96.B9.E6.B3.95" ></span>使用方法

 <span id=".E7.AC.AC.E4.B8.80.E6.A0.B7.E4.BE.8B" ></span>第一样例

例如：
这是第一个参考文献的例子，在要引用的文字后面加入<ref>参考文献的信息</ref>的标签即可，例如本例加入
<ref></ref>








				

				
								
			


			
		

