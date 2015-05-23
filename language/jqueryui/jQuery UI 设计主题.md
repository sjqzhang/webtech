 jQuery UI 设计主题
 
#### 文件结构

 主题是以特定的方式来增加他们的易用性。通常，文件目录结构如下所示：

 

themename/ – 您的主题必须完全包含在一个单独的以主题名称命名的文件夹内。
 
themename/themename.css – 这是基本的 CSS 文件。无论使用了哪个插件，该文件都必须在每个使用主题的页面中引用。该文件应该是轻量级的，只包括要点。
 
themename/themename.pluginname.css – 您支持的每个插件都需要一个 CSS 文件。插件的名称应直接包含在文件名中。例如，如果您为 tabs（标签页）插件进行主题化，则有：themename.tabs.js。
 
themename/img.png – 您的主题可以包含图像。它们可以根据您的喜好进行命名，这里没有特定的命名惯例。
 
如需了解主题文件结构是如何完成的实例，请访问 [jQuery UI 基本主题](https://github.com/jquery/jquery-ui/tree/master/themes/base)。

 
#### 定义样式

 为主题编写样式是非常简单的，这是因为主题的灵活性。

 所有的主题都应该有一个基本的 CSS class。这个主要的 class 允许用户启用禁用主题。您的根 class 的格式应该是 .ui-themename。且它在 HTML 文件中的用法如下所示：

 
```

<html>
<head>
    <title>My Site</title>
    <link rel="stylesheet" href="http://www.w3cschool.cc/jqueryui/themename/themename.css" />
    <link rel="stylesheet" href="http://www.w3cschool.cc/jqueryui/othertheme/othertheme.css" />
    <link rel="stylesheet" href="http://www.w3cschool.cc/jqueryui/othertheme/othertheme.dialog.css" />
</head>
<body class="ui-themename">
    <div class="ui-othertheme">
        <div class="ui-dialog">This is a modal dialog.</div>
    </div>
</body>
</html>

```
 在上面的实例中，发生了一些重要的事情：

 
我们同时向文档中加载两个主题。
 整个页面机器所有内容，是根据 themename 的样式进行主题化的。
 然而，带有 ui-othertheme class 的 <div>及其中的每个元素（包括模态对话框）都是根据 othertheme 的样式进行主题化的。
 
如果我们打开 themename.css 文件进行查看，我们可以看到如下代码：

 
```

body.ui-themename { background:#111; color:snow; }
.ui-themename a, a.ui-themename { color:#68D; outline:none; }
.ui-themename a:visited, a.ui-themename:visited { color:#D66; }
.ui-themename a:hover, a.ui-themename:hover { color:#FFF; }

```
 请注意，themename.css 文件只包括全局通用的样式信息，特定插件的样式信息不在这里进行定义。这里的样式对所有主题都是适用的。不用担心一个主题会占据多个文件 - 这些会在创建和下载的过程被简化。

 

