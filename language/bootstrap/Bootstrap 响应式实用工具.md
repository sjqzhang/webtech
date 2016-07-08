 Bootstrap 响应式实用工具
  Bootstrap 提供了一些辅助类，以便更快地实现对移动设备友好的开发。这些可以通过媒体查询结合大型、小型和中型设备，实现内容对设备的显示和隐藏。

 需要谨慎使用这些工具，避免在同一个站点创建完全不同的版本。响应式实用工具目前只适用于块和表切换。

 

|| 超小屏幕 手机 (<768px) | 小屏幕 平板 (≥768px) | 中等屏幕 桌面 (≥992px) | 大屏幕 桌面 (≥1200px) |
|:--|:--|:--|:--|:--|
|.visible-xs-*|可见|隐藏|隐藏|隐藏|
|.visible-sm-*|隐藏|可见|隐藏|隐藏|
|.visible-md-*|隐藏|隐藏|可见|隐藏|
|.visible-lg-*|隐藏|隐藏|隐藏|可见|
|.hidden-xs|隐藏|可见|可见|可见|
|.hidden-sm|可见|隐藏|可见|可见|
|.hidden-md|可见|可见|隐藏|可见|
|.hidden-lg|可见|可见|可见|隐藏|



 从 v3.2.0 版本起，形如 .visible-*-* 的类针对每种屏幕大小都有了三种变体，每个针对 CSS 中不同的 display 属性，列表如下：

 

|类组|CSS display|
|:--|:--|
|.visible-*-block|display: block;|
|.visible-*-inline|display: inline;|
|.visible-*-inline-block|display: inline-block;|

因此，以超小屏幕（xs）为例，可用的 .visible-*-* 类是：.visible-xs-block、.visible-xs-inline 和 .visible-xs-inline-block。

 .visible-xs、.visible-sm、.visible-md 和 .visible-lg 类也同时存在。但是从 v3.2.0 版本开始不再建议使用。除了 <table> 相关的元素的特殊情况外，它们与 .visible-*-block 大体相同。 

 
#### 打印类

 下表列出了打印类。使用这些切换打印内容。

 

|class|浏览器|打印机|
|:--|:--|:--|
| .visible-print-block .visible-print-inline .visible-print-inline-block |隐藏|可见|
|.hidden-print|可见|隐藏|


#### 实例

 下面的实例演示了上面所列举的帮助器类的用法。调整浏览器的窗口大小，或者在不同的设备上加载实例，测试响应式实用工具类。

 
```

<!DOCTYPE html>
<html>
<head>
   <title>Bootstrap 实例 - 响应式实用工具</title>
   <link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
   <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
   <script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container" style="padding: 40px;">
   <div class="row visible-on">
      <div class="col-xs-6 col-sm-3" style="background-color: #dedef8;
         box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
         <span class="hidden-xs">特别小型</span>
         <span class="visible-xs">✔ 在特别小型设备上可见</span>
      </div>
      <div class="col-xs-6 col-sm-3" style="background-color: #dedef8;
         box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
         <span class="hidden-sm">小型</span>
         <span class="visible-sm">✔ 在小型设备上可见</span>
      </div>
      <div class="clearfix visible-xs"></div>
      <div class="col-xs-6 col-sm-3" style="background-color: #dedef8;
         box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
         <span class="hidden-md">中型</span>
         <span class="visible-md">✔ 在中型设备上可见</span>
      </div>
      <div class="col-xs-6 col-sm-3" style="background-color: #dedef8;
         box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
         <span class="hidden-lg">大型</span>
         <span class="visible-lg">✔ 在大型设备上可见</span>
      </div>
</div>

</body>
</html>

```
 [尝试一下 »](http://www.w3cschool.cc/try/try2.php?filename=bootstrap3-resonsive-utilies)

 结果如下所示：

  ![http://www.w3cschool.cc/wp-content/uploads/2014/06/resonsive_utilies_demo.jpg](http://www.w3cschool.cc/wp-content/uploads/2014/06/resonsive_utilies_demo.jpg)


 勾号（✔） 表示元素在当前视口中可见。

 

