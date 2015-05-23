 jQuery Mobile 网格  

#### jQuery Mobile 布局网格

 jQuery Mobile 提供了一套基于 CSS 的分列布局。然而，在移动设备上，由于考虑手机的屏幕宽度狭窄，一般不建议使用分栏分列布局。

 但有时您想要将较小的元素（如按钮或导航标签）并排地排列在一起，就像是在一个表格中一样。这种情况下，推荐使用分列布局。

 网格中的列是等宽的（合计是 100%），没有边框、背景、margin 或 padding。

 这里有四种布局网格可供使用：

 

|网格类|列|列宽|对应|实例|
|:--|:--|:--|:--|:--|:--|
|ui-grid-a|2|50% / 50%|ui-block-a|b|尝试一下|
|ui-grid-b|3|33% / 33% / 33%|ui-block-a|b|c |尝试一下|
|ui-grid-c|4|25% / 25% / 25% / 25%|ui-block-a|b|c|d|尝试一下|
|ui-grid-d|5|20% / 20% / 20% / 20% / 20%|ui-block-a|b|c|d|e|尝试一下|





| 在列容器内，子元素拥有的 class 为 ui-block-a|b|c|d|e 取决于列数。列会浮动并排。 实例 1:class 为 ui-grid-a（两列布局），您必须指定 ui-block-a 和 ui-block-b 的两个子元素。 实例 2:class 为 ui-grid-b（三列布局），则必须添加 ui-block-a、ui-block-b 和 ui-block-c 的三个子元素。|





#### 自定义网格

 通过使用CSS，您可以自定义列块：

  
#### 实例

 
```
 <style>

.ui-block-a, 

.ui-block-b, 

.ui-block-c 

{

 background-color: lightgray;

border: 1px solid black;

height: 100px;

font-weight: bold;

text-align: center;

padding: 30px;

 }

</style>





```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_grid_css) 

 您也可以通过使用内嵌样式来自定义块：

 
```
  <div class="ui-block-a" style="border: 1px solid black;"><span>Text..</span></div>

 


```
 



#### 多行

 在列中也可以有多个行。

 

#### 注意：

ui-block-a-class 总是创建一个新行：

  
#### 实例

 
```
 <div class="ui-grid-b">

 <div class="ui-block-a"><span>Some Text</span></div>

 <div class="ui-block-b"><span>Some Text</span></div>

 <div class="ui-block-c"><span>Some Text</span></div>

 <div class="ui-block-a"><span>Some Text</span></div>

 <div class="ui-block-b"><span>Some Text</span></div>

 <div class="ui-block-a"><span>Some Text</span></div>

</div>





```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjqmob_grid_multiple) 

 






