 
javascript:void(0) 含义  我们经常会使用到 javascript:void(0) 这样的代码，那么在 JavaScript 中 javascript:void(0) 代表的是什么意思呢？

 javascript:void(0) 中最关键的是 void 关键字， void 是 JavaScript 中非常重要的关键字，该操作符指定要计算一个表达式但是不返回值。 

 语法格式如下：

 
```

<head>
<script type="text/javascript">
<!--
void func()
javascript:void func()

或者

void(func())
javascript:void(func())
//-->
</script>
</head>

```
 下面的代码创建了一个超级链接，当用户点击以后不会发生任何事。

  
#### 实例

 
```
 <a href="http://www.w3cschool.cc/js/javascript:void(0)">单击此处什么也不会发生</a> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjs_void) 

 当用户链接时，void(0) 计算为 0，但 Javascript 上没有任何效果。

 以下实例中，在用户点击链接后显示警告信息：

  
#### 实例

 
```
 <head>

 <script type="text/javascript">

 <!--

 //-->

 </script>

 </head>

 <body>

 <a href="http://www.w3cschool.cc/js/javascript:void(alert('Warning!!!'))">点我!</a>

 </body> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjs_void1) 

 以下实例中参数 a 将返回 undefined :

  
#### 实例

 
```
 <head>

 <script type="text/javascript">

 <!--

 function getValue(){

   var a,b,c;

   a = void ( b = 5, c = 7 );

   document.write('a = ' + a + ' b = ' + b +' c = ' + c );

 }

 //-->

 </script>

 </head> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjs_void2) 

 

#### href="#"与href="http://www.w3cschool.cc/js/javascript:void(0)"的区别

 

#### #

 包含了一个位置信息，默认的锚是

#### #top

 也就是网页的上端。

  而javascript:void(0), 仅仅表示一个死链接。

 在页面很长的时候会使用 

#### #

 来定位页面的具体位置，格式为：

#### # + id

。

 如果你要定义一个死链接请使用 javascript:void(0) 。 

  
#### 实例

 
```
 <a href="http://www.w3cschool.cc/js/javascript:void(0);">点我没有反应的!</a>

 <a href="#pos">点我定位到指定位置!</a>

 <br><br><br> <p id="pos">尾部定位点</p> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjs_void3) 

 

