 AngularJS 简介  
AngularJS 是一个 

#### JavaScript 框架

。它可通过 <script> 标签添加到 HTML 页面。

 AngularJS 通过 

#### [指令](http://www.w3cschool.cc/angularjs/angularjs-directives.html)

 扩展了 HTML，且通过 

#### [表达式](http://www.w3cschool.cc/angularjs/angularjs-expressions.html)

 绑定数据到 HTML。

 

#### AngularJS 是一个 JavaScript 框架

 AngularJS 是一个 JavaScript 框架。它是一个以 JavaScript 编写的库。

 AngularJS 是以一个 JavaScript 文件形式发布的，可通过 script 标签添加到网页中：

  
```
 <script src="http://www.w3cschool.cc//www.w3cschool.cc/try/angularjs/1.2.5/angular.min.js"></script>


```
 

  

 

| 我们建议把脚本放在 <body> 元素的底部。 这会提高网页加载速度，因为 HTML 加载不受制于脚本加载。|



#### AngularJS 扩展了 HTML

 AngularJS 通过 

#### ng-directives

 扩展了 HTML。

 

#### ng-app

 指令定义一个 AngularJS 应用程序。

 

#### ng-model

 指令把元素值（比如输入域的值）绑定到应用程序。

 

#### ng-bind

 指令把应用程序数据绑定到 HTML 视图。

  
#### AngularJS 实例

 
```
 <!DOCTYPE html>

 <html>

 <body>



<div ng-app="">

   <p>在输入框中尝试输入：</p>

   <p>姓名：<input type="text" ng-model="name"></p>

   <p ng-bind="name"></p>

 </div>



 <script src="http://www.w3cschool.cc//www.w3cschool.cc/try/angularjs/1.2.5/angular.min.js"></script>



 </body>

 </html>





```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=try_ng_intro) 

 实例讲解：

 当网页加载完毕，AngularJS 自动开启。

 

#### ng-app

 指令告诉 AngularJS，<div> 元素是 AngularJS 

#### 应用程序

 的"所有者"。

 

#### ng-model

 指令把输入域的值绑定到应用程序变量 

#### name

。

 

#### ng-bind

 指令把应用程序变量 name 绑定到某个段落的 innerHTML。

  

 

| 如果您移除了 ng-app 指令，HTML 将直接把表达式显示出来，不会去计算表达式的结果。|



#### 什么是 AngularJS？

 "AngularJS 是专门为应用程序设计的 HTML。"

 AngularJS 使得开发现代的单一页面应用程序（SPAs：Single Page Applications）变得更加容易。 

 
AngularJS 把应用程序数据绑定到 HTML 元素。
 AngularJS 可以克隆和重复 HTML 元素。
 AngularJS 可以隐藏和显示 HTML 元素。
 AngularJS 可以在 HTML 元素"背后"添加代码。
 AngularJS 支持输入验证。
 


#### AngularJS 指令

 正如您所看到的，AngularJS 指令是以 

#### ng

 作为前缀的 HTML 属性。

 

#### ng-init

 指令初始化 AngularJS 应用程序变量。

  
#### AngularJS 实例

 
```
 <div ng-app="" ng-init="firstName='John'">



 <p>姓名为 <span ng-bind="firstName"></span></p>



 </div> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=try_ng_intro_directives) 

  

 

| HTML5 允许扩展的（自制的）属性，以 data- 开头。 AngularJS 属性以 ng- 开头，但是您可以使用 data-ng- 来让网页对 HTML5 有效。|

带有有效的 HTML5：

  
#### AngularJS 实例

 
```
 <div data-ng-app="" data-ng-init="firstName='John'">



 <p>姓名为 <span data-ng-bind="firstName"></span></p>



 </div> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=try_ng_intro_directives_html) 

 



#### AngularJS 表达式

 AngularJS 表达式写在双大括号内：

#### {{ expression }}

。

 AngularJS 表达式把数据绑定到 HTML，这与 

#### ng-bind

 指令有异曲同工之妙。

 AngularJS 将在表达式书写的位置"输出"数据。

 

#### AngularJS 表达式

 很像 

#### JavaScript 表达式

：它们可以包含文字、运算符和变量。

 实例 {{ 5 + 5 }} 或 {{ firstName + " " + lastName }}

  
#### AngularJS 实例

 
```
 <!DOCTYPE html>

 <html>

 <body>



<div ng-app="">

   <p>我的第一个表达式： {{ 5 + 5 }}</p>

 </div>



 <script src="http://www.w3cschool.cc//www.w3cschool.cc/try/angularjs/1.2.5/angular.min.js"></script>



 </body>

 </html>





```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=try_ng_intro_expression) 

 








