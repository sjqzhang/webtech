 jQuery Mobile 可折叠块  

#### 可折叠内容块

 可折叠块允许您隐藏或显示内容 - 对于存储部分信息很有用。

 如需创建一个可折叠的内容块，需要为容器添加 data-role="collapsible" 属性。在容器（div）内，添加一个标题元素（H1-H6），后跟您想要进行扩展的 HTML 标记：

  
#### 实例

 
```
 <div data-role="collapsible">

 <h1>点击我 - 我可以折叠!</h1>

 <p>我是可折叠的内容。</p>

 </div>





```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_collapsible) 

 默认情况下，内容是被折叠起来的。如需在页面加载时展开内容，请使用 data-collapsed="false"：

  
#### 实例

 
```
 <div data-role="collapsible" data-collapsed="false">

 <h1>点击我 - 我可以折叠!</h1>

 <p>I'm 现在我默认是展开的。</p>

 </div>





```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_collapsible_false) 

 



#### 嵌套可折叠块

 可折叠的内容块是可以彼此嵌套的：

  
#### 实例

 
```
 <div data-role="collapsible">

 <h1>点击我 - 我可以折叠!</h1>

 <p>我是被展开的内容。</p>

 <div data-role="collapsible">

 <h1>点击我 - 我是嵌套的可折叠块！</h1>

 <p>我是嵌套的可折叠块中被展开的内容。</p>

 </div>

</div>





```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_collapsible_nested) 

 



| 可折叠的内容块可以根据您的需要进行多次嵌套。|





#### 可折叠集合

 可折叠集合是将可折叠块组合在一起（就像手风琴一样）。当一个新的块被展开时，所有其他的块都会被折叠起来。

 创建若干个可折叠的内容块，然后把可折叠内容块用带有 data-role="collapsible-set" 的新容器包围起来：

  
#### 实例

 
```
 <div data-role="collapsible-set">

 <div data-role="collapsible">

 <h1>点击我 - 我可以折叠！</h1>

 <p>我是被展开的内容。</p>

 </div>

 <div data-role="collapsible">

 <h1>点击我 - 我可以折叠!</h1>

 <p>我是被展开的内容。</p>

 </div>

</div>





```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_collapsible_sets) 

 


 ![http://www.w3cschool.cc/images/tryitimg.gif](http://www.w3cschool.cc/images/tryitimg.gif)
#### 更多实例

 

 [通过 data-inset 属性取消圆角](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_collapsible_inset)

 如何取消可折叠块上的圆角。

  [通过 data-mini 属性迷你化可折叠块](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_collapsible_mini)

 如何让可折叠块更小。

  [ 通过 data-collapsed-icon 和 data-expanded-icon 改变图标](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_collapsible_icons)

 如何改变可折叠块的图标（默认是 + 和 -）。

 

