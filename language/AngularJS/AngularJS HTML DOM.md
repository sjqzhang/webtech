 AngularJS HTML DOM  
AngularJS 有自己的 HTML 属性指令。

 

#### ng-disabled 指令

 

#### ng-disabled

 指令直接绑定应用程序数据到 HTML 的 disabled 属性。

  
#### AngularJS 实例

 
```
 <div ng-app="">



<p>

<button ng-disabled="mySwitch">点我！</button>

 </p>



<p>

<input type="checkbox" ng-model="mySwitch">按钮

</p>



</div> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=try_ng_html_disabled) 

 实例讲解：

 

#### ng-disabled

 指令绑定应用程序数据 "mySwitch" 到 HTML 的 disabled 属性。

 

#### ng-model

 指令绑定 "mySwitch" 到 HTML input checkbox 元素的内容（value）。

 

#### ng-show 指令

 

#### ng-show

 指令隐藏或显示一个 HTML 元素。

  
#### AngularJS 实例

 
```
 <div ng-app="">



<p ng-show="true">我是可见的。</p>



<p ng-show="false">我是不可见的。</p>



 </div> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=try_ng_html_show) 

 您可以使用一个评估为 true or false 的表达式（比如 ng-show="hour < 12"）来隐藏和显示 HTML 元素。

 在下一章中，有另一个实例，通过单击一个按钮来隐藏一个 HTML 元素。

 




