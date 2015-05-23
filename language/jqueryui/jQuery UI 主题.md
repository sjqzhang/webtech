 jQuery UI 主题
 所有的 jQuery UI 插件都允许开发人员无缝集成 UI 小部件到他们网站或应用程序的外观和感观。每个插件通过 CSS 定义样式，且包含了两层样式信息：标准的 [jQuery UI CSS 框架](http://www.w3cschool.cc/jqueryui/jqueryui-theme-api.html) 样式和具体的插件样式。

 jQuery UI CSS 框架提供了语义表示的类，用来表明小部件内元素的角色，比如标题、内容或可点击区域。这些在所有的小部件中都是一致的，一个可点击的 tab（标签页）、accordion（折叠面板）或 button（按钮）都有相同的 ui-state-default class，用来表明它们是可点击的。当用户鼠标悬浮在这些元素上面时，这个 class 就变成 ui-state-hover，当选中这些元素时则变成 ui-state-active。这些 class 的一致性使得所有部件中具有相似角色或交互状态的元素在外观表现上一致。

 CSS 框架样式封装在一个单独的文件中，名为 ui.theme.css。这个文件时通过 [ThemeRoller](http://www.w3cschool.cc/jqueryui/jqueryui-theme-themeroller.html) 应用程序来修改的。框架样式只包含影响外观和感观的属性，只要是颜色、背景图像、图标等。所以这些是 "安全的" 样式，不会影响到插件的功能。这种分隔意味着开发人员可以通过在 theme.css 文件中修改颜色和图像来创建一个自定义的外观和感观。由于未来的插件或者 bug 修复将是可用的，这些不通过修改即可与主题一起使用。

 由于框架样式只覆盖了外观和感观，所以还需要包含具体的插件样式表，这些样式表包括了所有额外的让小部件具有功能性的结构样式规则，比如尺寸、内边距、外边距、定位、浮动。每个插件的样式表位于 themes/base 文件夹内，且配合插件进行命名，比如 "jquery.ui.accordion.css"。这些样式必须认真编辑，因为它们与脚本一起提供了框架样式的覆盖。

 我们鼓励所有的开发人员创建 jQuery 插件，jQuery UI CSS 框架使得最终用户更容易定制主题和使用插件。

 
#### 主题化

 下面列出了三种主题化 jQuery UI 插件的一般方法：

 



#### 下载 ThemeRoller 主题

：最早的创建主题的方式是使用 [ThemeRoller](http://www.w3cschool.cc/jqueryui/jqueryui-theme-themeroller.html) 来生成和下载一个主题。这个应用程序将创建一个新的 ui.theme.css 文件和一个包含了所有必需的背景图像及图标精灵的 images 文件夹。这个方法是最早的创建和维护主题的方式，但是它对 ThemeRoller 中提供的选项限制了自定义。
 


#### 修改 CSS 文件

：为了对外观和感观做进一步的控制，您可以选择从默认主题（Smoothness）开始，或者从一个由 ThemeRoller 生成的主题开始，然后调整 ui.theme.css 文件，或者任意一个独立插件的样式表。例如，您可以很容易地调整所有按钮的角半径为不同于其他 UI 组件的值，或者使用自定义设置为图标精灵改变路径。通过一点点的样式范围，您甚至可以在一个 UI 中同时使用多个主题。为了易于维护，建议只更改 ui.theme.css 文件和图像。
 


#### 重新编写自定义的 CSS

：为了最大程度地控制外观和感观，可以重新开始编写每个插件的 CSS，而不使用框架类或者特定的插件样式表。如果想要的外观和感观不能通过修改 CSS 来实现或者使用高度自定义的标记，那么就可以采用这个方法。这个方法要求在 CSS 方面有深厚的专业知识，且要求手动更新未来的插件。
 

#### 使用 ThemeRoller、jQuery UI CSS 框架，以及设计自定义主题

 
[jQuery UI ThemeRoller](http://www.w3cschool.cc/jqueryui/jqueryui-theme-themeroller.html)
 [jQuery UI CSS 框架 API](http://www.w3cschool.cc/jqueryui/jqueryui-theme-api.html)
 [设计主题](http://www.w3cschool.cc/jqueryui/jqueryui-theme-design.html)
 


