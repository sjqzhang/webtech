 HTML 段落
 
HTML 可以将文档分割为若干段落。

 

#### HTML 段落

 段落是通过 <p> 标签定义的。

  
#### 实例

 
```
 <p>This is a paragraph </p>

 <p>This is another paragraph</p> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml_paragraphs1) 

 注意：浏览器会自动地在段落的前后添加空行。（</p> 是块级元素）

 

#### 不要忘记结束标签

 即使忘了使用结束标签，大多数浏览器也会正确地将 HTML 显示出来：

  
#### 实例

 
```
 <p>This is a paragraph

 <p>This is another paragraph 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml_paragraphs0) 

 上面的例子在大多数浏览器中都没问题，但不要依赖这种做法。忘记使用结束标签会产生意想不到的结果和错误。

 注释: 在未来的 HTML 版本中，不允许省略结束标签。

 

#### HTML 折行

 如果您希望在不产生一个新段落的情况下进行换行（新行），请使用 <br /> 标签：

  
#### 实例

 
```
 <p>This is<br>a para<br>graph with line breaks</p> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml_paragraphs) 

 <br /> 元素是一个空的 HTML 元素。由于关闭标签没有任何意义，因此它没有结束标签。

 

#### HTML 输出- 使用提醒

 我们无法确定 HTML 被显示的确切效果。屏幕的大小，以及对窗口的调整都可能导致不同的结果。

 对于 HTML，您无法通过在 HTML 代码中添加额外的空格或换行来改变输出的效果。

 当显示页面时，浏览器会移除源代码中多余的空格和空行。所有连续的空格或空行都会被算作一个空格。需要注意的是，HTML 代码中的所有连续的空行（换行）也被显示为一个空格。

 [尝试一下](http://www.w3cschool.cc/try/try.php?filename=tryhtml_poem)

 （这个例子演示了一些 HTML 格式化方面的问题）

 
 ![http://www.w3cschool.cc/images/tryitimg.gif](http://www.w3cschool.cc/images/tryitimg.gif)
#### 本站实例

 

 [HTML 段落](http://www.w3cschool.cc/try/try.php?filename=tryhtml_paragraphs1)

 如何在浏览器中显示 HTML 段落。 

  [换行](http://www.w3cschool.cc/try/try.php?filename=tryhtml_paragraphs)

 在 HTML 文档中使用换行。 

 [在 HTML 代码中的排版一首唐诗](http://www.w3cschool.cc/try/try.php?filename=tryhtml_poem)

 浏览器在显示 HTML 时，会省略源代码中多余的空白字符（空格或回车等）。 

 
#### 更多实例

 [更多段落](http://www.w3cschool.cc/try/try.php?filename=tryhtml_paragraphs2)

 段落的默认行为。 

 

#### HTML 标签参考手册

 W3CSchool 的标签参考手册提供了有关 HTML 元素及其属性的更多信息。

 

|标签|描述|
|:--|:--|
|<p>|定义一个段落|
|<br>| 插入单个折行（换行）|



