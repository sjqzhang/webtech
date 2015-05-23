 Bootstrap 页面标题（Page Header）
 页面标题（Page Header）是个不错的功能，它会在网页标题四周添加适当的间距。当一个网页中有多个标题且每个标题之间需要添加一定的间距时，页面标题这个功能就显得特别有用。如需使用页面标题（Page Header），请把您的标题放置在带有 class .page-header 的 <div> 中：

 
```

<!DOCTYPE html>
<html>
<head>
   <title>Bootstrap 实例 - 页面标题</title>
   <link href="http://www.w3cschool.cc/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <script src="http://www.w3cschool.cc/scripts/jquery.min.js"></script>
   <script src="http://www.w3cschool.cc/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="page-header">
   <h1>页面标题实例
      <small>子标题</small>
   </h1>
</div>
<p>这是一个示例文本。这是一个示例文本。这是一个示例文本。这是一个示例文本。这是一个示例文本。</p>


</body>
</html>

```
 [尝试一下 »](http://www.w3cschool.cc/try/tryit.php?filename=bootstrap3-pageheader)

 结果如下所示：

  ![http://www.w3cschool.cc/wp-content/uploads/2014/06/pageheader_demo.jpg](http://www.w3cschool.cc/wp-content/uploads/2014/06/pageheader_demo.jpg)


 

