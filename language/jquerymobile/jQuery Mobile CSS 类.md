 jQuery Mobile CSS 类  

#### jQuery CSS 类

 jQuery Mobile CSS 类来设置不同元素的样式。

 以下列表包含了通用的 CSS 样式：

 

#### 全局类

 以下类可以在 jQuery Mobile 小工具中使用 (按钮，工具条，面板，表格，列表等。):

 

|Class|描述|
|:--|:--|
|ui-corner-all|为元素添加圆角|
|ui-shadow|为元素添加阴影|
|ui-overlay-shadow|为元素添加多层阴影|
|ui-mini|让元素变小|





#### 按钮类

 除了全局类外，你可以向 <a> 或 <button> 元素添加以下类 (不是 <input> 按钮):

 

|Class|描述|
|:--|:--|
|ui-btn|添加在 <a> 元素上并以按钮形式展示|
|ui-btn-inline|在同一行上显示按钮|
|ui-btn-icon-top|定位图标在按钮文本之上|
|ui-btn-icon-right|定位图标在按钮文本的右边|
|ui-btn-icon-bottom|定位图标在按钮文本之下|
|ui-btn-icon-left|定位图标在按钮文本的左边|
|ui-btn-icon-notext|只显示图标|
|ui-btn-a|b|指定按钮演示。"a" 是默认的 (灰色背景黑色文本样式), "b" 修改颜色为黑色背景白色文本|





#### 图标类

 所有可用图片的类用在 <a> 和 <button> 元素上 (查看 [jQuery Mobile 图标参考手册](http://www.w3cschool.cc/jquerymobile/jquerymobile-ref-icons.html) 了解如何在其他元素上使用):

 

|Class|图标描述|图标|
|:--|:--||
|ui-icon-action|动作 (一般用于页面跳转切换)||
|ui-icon-alert|三角形内的感叹号||
|ui-icon-audio|音响/音箱||
|ui-icon-arrow-d-l|左下角箭头||
|ui-icon-arrow-d-r|右下角箭头||
|ui-icon-arrow-u-l|左上角箭头||
|ui-icon-arrow-u-r|右上角箭头||
|ui-icon-arrow-l|左角箭头||
|ui-icon-arrow-r|右角箭头||
|ui-icon-arrow-u|向上箭头||
|ui-icon-arrow-d|向下箭头||
|ui-icon-back|返回 ||
|ui-icon-bars|三条水平线，一般用于展示列表按钮图标||
|ui-icon-bullets|用于展示列表按钮图标||
|ui-icon-calendar|日历||
|ui-icon-camera|相机||
|ui-icon-carat-d|向下滑动图标||
|ui-icon-carat-l|向左滑动图标||
|ui-icon-carat-r|向右滑动图标||
|ui-icon-carat-u|向上滑动图标||
|ui-icon-check|勾选||
|ui-icon-clock|闹钟||
|ui-icon-cloud|云||
|ui-icon-comment|评论 / 消息||
|ui-icon-delete|删除||
|ui-icon-edit|编辑 / 铅笔||
|ui-icon-eye|眼睛||
|ui-icon-forbidden|禁用标识 sign||
|ui-icon-forward|撤销 - (返回上一步)||
|ui-icon-gear|齿轮，一般用于设置按钮图标||
|ui-icon-grid|网格||
|ui-icon-heart|心型，可用于文章收藏||
|ui-icon-home|主页||
|ui-icon-info|信息||
|ui-icon-location|定位||
|ui-icon-lock|锁||
|ui-icon-mail|邮件 / 信封||
|ui-icon-minus|减号||
|ui-icon-navigation|导航||
|ui-icon-phone|电话||
|ui-icon-power|开关 (On/off)||
|ui-icon-plus|加号||
|ui-icon-recycle|循环 标识||
|ui-icon-refresh|刷新||
|ui-icon-search|搜索 / 放大镜||
|ui-icon-shop|商店/购物袋||
|ui-icon-star|星号||
|ui-icon-tag|标签||
|ui-icon-user|用户 / 人物||
|ui-icon-video|视频 / 相机||





#### 主题类 Classes

 jQuery Mobile 提供了两个主题类: a (灰) 和 b (黑)。 但是，你可以创建你自己的自定义类 - 可定义到字母 "z" （查看 [ jQuery Mobile 主题 ](http://www.w3cschool.cc/jquerymobile/jquerymobile-themes.html)）。 下表列出了可用的主题类。 字母 (a-z) 意为样式可以指定 a 到 z。例如 ui-bar-a 或 ui-bar-b等。

 

|Class|描述|
|:--|:--|
|ui-bar-(a-z)|指定栏目演示 - 头部，底部及其他栏目|
|ui-body-(a-z)|指定内容块的颜色 - 页面内容部分 ( 1.4.0 版本已废弃), 列表视图， 弹窗, 侧栏，面板，加载，折叠。|
|ui-btn-(a-z)|指定按钮颜色 |
|ui-group-theme-(a-z)|定义了控制组的演示 listviews 和 collapsible 集合。|
|ui-overlay-(a-z)|定义了页面背景颜色，包括对话框，弹窗和其他出现在最顶层的页面容器|
|ui-page-theme-(a-z)|定义了页面演示|





#### 网格类

 网格中的列是等宽的（合计是 100%），没有边框、背景、margin 或 padding。 这里有四种布局网格可供使用：

 

|网格类|列|列宽|对应|实例|
|:--|:--|:--|:--|:--|
|ui-grid-solo|1|100%|ui-block-a|尝试一下|
|ui-grid-a|2|50% / 50%|ui-block-a|b|尝试一下|
|ui-grid-b|3|33% / 33% / 33%|ui-block-a|b|c |尝试一下|
|ui-grid-c|4|25% / 25% / 25% / 25%|ui-block-a|b|c|d|尝试一下|
|ui-grid-d|5|20% / 20% / 20% / 20% / 20%|ui-block-a|b|c|d|e|尝试一下|

更多信息可以查看[ jQuery Mobile 网格 ](http://www.w3cschool.cc/jquerymobile/jquerymobile-grids.html) 章节。

 

