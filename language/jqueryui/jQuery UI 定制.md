 jQuery UI 定制
  jQuery UI 提供了多种定制方式。您已经看到下载生成器（Download Builder）如何定制一个值包含您所需选项的自定义版本，这里还提供了其他定制方式。

 

 
#### jQuery UI 基础：使用选项

 jQuery UI 中的每个插件都有一个默认配置，默认配置值一般是根据最基本最常见的使用情况设置的。如果您想要让某个插件设置成非默认值，您可以使用 "options" 重写它的默认设置。选项是一组属性，作为参数传递给 jQuery UI 小部件。例如，滑块（slider）小部件具有 orientation 选项，该选项允许您指定滑块是水平的还是垂直的。为了设置滑块的该选项，您只需将它作为一个参数传递，如下所示：

 
```

$( "#mySliderDiv" ).slider({
    orientation: "vertical"
});
```
 您可以传递更多不同的选项，每个选项之间用逗号分隔：

 
```

$( "#mySliderDiv" ).slider({
    orientation: "vertical",
    min: 0,
    max: 150,
    value: 50
});
```
 请记得选项需放在大括号 { } 内。上面的实例只是一个简单的讲解，如需获取整套 jQuery UI 小部件的详细信息，请查看 [jQuery UI 实例](http://www.w3cschool.cc/jqueryui/jqueryui-examples.html)。

 
#### 视觉定制：设计一个 jQuery UI 主题

 如果您想要设计自己的主题，jQuery UI 提供了一个非常完美的用于主题定制的应用程序，这就是 ThemeRoller。具体定制请访问 [jQuery UI ThemeRoller](http://www.w3cschool.cc//jqueryui.com/themeroller/)。

 ThemeRoller 为所有使用 jQuery UI 小部件设计的元素提供了一个自定义接口。当您调整左栏中的"levers"，右栏中的小部件将根据您的设计进行显示。ThemeRoller 的 Gallery 选项卡提供了一些与设计主题，与下载生成器（Download Builder）页面提供的一样。您可以基于这些主题做调整，或者直接下载。

 ![http://www.w3cschool.cc/wp-content/uploads/2014/01/themeroller.png](http://www.w3cschool.cc/wp-content/uploads/2014/01/themeroller.png)

 
#### 下载主题

 当您点击 ThemeRoller 页面中的 "Download theme" 按钮，将跳转到下载生成器（Download Builder）页面，您的自定义主题会在主体下拉菜单中自动选中。您可以进一步配置下载包。一旦下载完成，您将看到 example.html 页面使用了您自定义的主题。

 

#### 提示：

 如果您需要编辑您的主题，只需打开 CSS 文件，找到第 43 行，"To view and modify this theme, visit ..."，该 url 即为在 ThemeRoller 中打开主题进行编辑的链接。

 

