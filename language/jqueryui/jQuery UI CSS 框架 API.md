 jQuery UI CSS 框架 API
 
#### jQuery UI CSS 框架

 jQuery UI 包含了一个强大的 CSS 框架，为了创建自定义 jQuery 小部件而设计的。框架包含了通用的用户界面所需的类，且可使用 jQuery UI ThemeRoller 进行维护。通过使用 jQuery UI CSS 框架创建您自己的 UI 组件。您需采用共享标记公约，以便在插件社区的代码集成。

 
#### 框架类

 下面的 CSS 类根据样式是否是固定的结构化的，或者是否是可主题化的（颜色、字体、背景等），分别定义在 ui.core.css 和 ui.theme.css 两个文件中。这些类被设计来用于用户界面元素，以便获得整个应用程序的视觉一致性，可通过 jQuery UI ThemeRoller 对组件进行主题化。

 
#### 布局助手

 

.ui-helper-hidden：对元素应用 display: none。
 
.ui-helper-hidden-accessible：对元素应用访问隐藏（通过页面绝对定位）。
 
.ui-helper-reset：UI 元素的基本样式重置。重置的元素比如：padding、margin、text-decoration、list-style，等等。
 
.ui-helper-clearfix：对父元素应用浮动包装属性。
 
.ui-helper-zfix：对 <iframe> 元素应用 iframe "fix" CSS。
 

#### 小部件容器

 

.ui-widget：对所有小部件的外部容器应用的 Class。对小部件应用字体和字体尺寸，同时也对自表单元素应用相同的字体和 1em 的字体尺寸，以应对 Windows 浏览器中的继承问题。
 
.ui-widget-header：对标题容器应用的 Class。对元素及其子元素的文本、链接、图标应用标题容器样式。
 
.ui-widget-content：对内容容器应用的 Class。对元素及其子元素的文本、链接、图标应用内容容器样式。（可应用到标题的父元素或者同级元素）
 

#### 交互状态

 

.ui-state-default：对可点击按钮元素应用的 Class。对元素及其子元素的文本、链接、图标应用 "clickable default" 容器样式。
 
.ui-state-hover：当鼠标悬浮在可点击按钮元素上时应用的 Class。对元素及其子元素的文本、链接、图标应用 "clickable hover" 容器样式。
 
.ui-state-focus：当键盘聚焦在可点击按钮元素上时应用的 Class。对元素及其子元素的文本、链接、图标应用 "clickable hover" 容器样式。
 
.ui-state-active：当鼠标点击可点击按钮元素上时应用的 Class。对元素及其子元素的文本、链接、图标应用 "clickable active" 容器样式。
 

#### 交互提示 Cues




.ui-state-highlight：对高亮或者选中元素应用的 Class。对元素及其子元素的文本、链接、图标应用 "highlight" 容器样式。
 
.ui-state-error：对错误消息容器元素应用的 Class。对元素及其子元素的文本、链接、图标应用 "error" 容器样式。
 
.ui-state-error-text：对只有无背景的错误文本颜色应用的 Class。可用于表单标签，也可以对子图标应用错误图标颜色。
 
.ui-state-disabled：对禁用的 UI 元素应用一个暗淡的不透明度。意味着对一个已经定义样式的元素添加额外的样式。
 
.ui-priority-primary：对第一优先权的按钮应用的 Class。应用粗体文本。
 
.ui-priority-secondary：对第二优先权的按钮应用的 Class。应用正常粗细的文本，对元素应用轻微的透明度。
 

#### 图标

 
#### 状态和图像

 

.ui-icon：对图标元素应用的基本 Class。设置尺寸为 16px 方块，隐藏内部文本，对 "content" 状态的精灵图像设置背景图像。

#### 注意：

 .ui-icon class 将根据它的父容器得到一个不同的精灵背景图像。例如，ui-state-default 容器内的 ui-icon 元素将根据 ui-state-default 的图标颜色进行着色。

 

#### 图标类型

 在声明 .ui-icon class 之后，接着您可以声明一个秒速图标类型的 class。通常情况下，图标 class 遵循语法 .ui-icon-{icon type}-{icon sub description}-{direction}。

 例如，一个指向右侧的三角形图标，如下所示： .ui-icon-triangle-1-e

 jQuery UI 的 [ThemeRoller](http://www.w3cschool.cc//jqueryui.com/themeroller) 在它的预览一栏中提供了全套的 CSS 框架图标。将鼠标悬浮在图标上可查看 class 名称。

 
#### 其他视觉效果

 
#### 圆角半径助手

 

.ui-corner-tl：对元素的左上角应用圆角半径。
 
.ui-corner-tr：对元素的右上角应用圆角半径。
 
.ui-corner-bl：对元素的左下角应用圆角半径。
 
.ui-corner-br：对元素的右下角应用圆角半径。
 
.ui-corner-top：对元素上边的左右角应用圆角半径。
 
.ui-corner-bottom：对元素下边的左右角应用圆角半径。
 
.ui-corner-right：对元素右边的上下角应用圆角半径。
 
.ui-corner-left：对元素左边的上下角应用圆角半径。
 
.ui-corner-all：对元素的所有四个角应用圆角半径。
 

#### 覆盖 &amp; 阴影




.ui-widget-overlay：对覆盖屏幕应用 100% 宽度和高度，同时设置背景颜色/纹理和屏幕不透明度。
 
.ui-widget-shadow：对覆盖应用的 Class，设置了不透明度、上偏移/左偏移，以及阴影的 "厚度"。厚度是通过对阴影所有边设置内边距（padding）进行应用的。偏移是通过设置上外边距（margin）和左外边距（margin）进行应用的（可以是正数，也可以是负数）。
 


