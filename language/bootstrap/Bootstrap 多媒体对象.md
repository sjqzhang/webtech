 Bootstrap 多媒体对象（Media Object）
 本章我们将讲解 Bootstrap 中的多媒体对象（Media Object）。这些抽象的对象样式用于创建各种类型的组件（比如：博客评论），我们可以在组件中使用图文混排，图像可以左对齐或者右对齐。媒体对象可以用更少的代码来实现媒体对象与文字的混排。

 媒体对象轻量标记、易于扩展的特性是通过向简单的标记应用 class 来实现的。你可以在 HTML 标签中添加以下两种形式来设置媒体对象：

 

.media：该 class 允许将媒体对象里的多媒体（图像、视频、音频）浮动到内容区块的左边或者右边。
 
.media-list：如果你需要一个列表，各项内容是无序列表的一部分，可以使用该 class。可用于评论列表与文章列表。
 
让我们来看看下面这个有关默认的媒体对象 .media 的实例：

 
```

<!DOCTYPE html>
<html>
<head>
   <title>Bootstrap 实例 - 默认的媒体对象</title>
   <link href="http://www.w3cschool.cc/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <script src="http://www.w3cschool.cc/scripts/jquery.min.js"></script>
   <script src="http://www.w3cschool.cc/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="media">
   <a class="pull-left" href="#">
      <img class="media-object" src="http://www.w3cschool.cc/wp-content/uploads/2014/06/64.jpg" 
      alt="媒体对象">
   </a>
   <div class="media-body">
      <h4 class="media-heading">媒体标题</h4>
      这是一些示例文本。这是一些示例文本。 
      这是一些示例文本。这是一些示例文本。
	  这是一些示例文本。这是一些示例文本。
	  这是一些示例文本。这是一些示例文本。
	  这是一些示例文本。这是一些示例文本。
   </div>
</div>
<div class="media">
   <a class="pull-left" href="#">
      <img class="media-object" src="http://www.w3cschool.cc/wp-content/uploads/2014/06/64.jpg" 
      alt="媒体对象">
   </a>
   <div class="media-body">
      <h4 class="media-heading">媒体标题</h4>
      这是一些示例文本。这是一些示例文本。 
      这是一些示例文本。这是一些示例文本。
	  这是一些示例文本。这是一些示例文本。
	  这是一些示例文本。这是一些示例文本。
	  这是一些示例文本。这是一些示例文本。
      <div class="media">
         <a class="pull-left" href="#">
            <img class="media-object" src="http://www.w3cschool.cc/wp-content/uploads/2014/06/64.jpg" 
            alt="媒体对象">
         </a>
         <div class="media-body">
            <h4 class="media-heading">媒体标题</h4>
            这是一些示例文本。这是一些示例文本。
            这是一些示例文本。这是一些示例文本。
            这是一些示例文本。这是一些示例文本。 
            这是一些示例文本。这是一些示例文本。
			这是一些示例文本。这是一些示例文本。
         </div>
      </div>
   </div>
</div>

</body>
</html>

```
 [尝试一下 »](http://www.w3cschool.cc/try/tryit.php?filename=bootstrap3-mediaobject)

 结果如下所示：

  ![http://www.w3cschool.cc/wp-content/uploads/2014/06/mediaobject_demo.jpg](http://www.w3cschool.cc/wp-content/uploads/2014/06/mediaobject_demo.jpg)


 让我们来看看下面这个有关媒体对象列表 .media-list 的实例：

 
```

<!DOCTYPE html>
<html>
<head>
   <title>Bootstrap 实例 - 媒体对象列表</title>
   <link href="http://www.w3cschool.cc/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <script src="http://www.w3cschool.cc/scripts/jquery.min.js"></script>
   <script src="http://www.w3cschool.cc/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<ul class="media-list">
   <li class="media">
      <a class="pull-left" href="#">
         <img class="media-object" src="http://www.w3cschool.cc/wp-content/uploads/2014/06/64.jpg" 
         alt="通用的占位符图像">
      </a>
      <div class="media-body">
         <h4 class="media-heading">媒体标题</h4>
         <p>这是一些示例文本。这是一些示例文本。 
			这是一些示例文本。这是一些示例文本。
			这是一些示例文本。这是一些示例文本。
			这是一些示例文本。这是一些示例文本。
			这是一些示例文本。这是一些示例文本。</p>
         <!-- 嵌套的媒体对象 -->
         <div class="media">
            <a class="pull-left" href="#">
               <img class="media-object" src="http://www.w3cschool.cc/wp-content/uploads/2014/06/64.jpg" 
               alt="通用的占位符图像">
            </a>
            <div class="media-body">
               <h4 class="media-heading">嵌套的媒体标题</h4>
               这是一些示例文本。这是一些示例文本。
			   这是一些示例文本。这是一些示例文本。
			   这是一些示例文本。这是一些示例文本。
			   这是一些示例文本。这是一些示例文本。
			   这是一些示例文本。这是一些示例文本。
               <!-- 嵌套的媒体对象 -->
               <div class="media">
                  <a class="pull-left" href="#">
                     <img class="media-object" src="http://www.w3cschool.cc/wp-content/uploads/2014/06/64.jpg" 
                     alt="通用的占位符图像">
                  </a>
                  <div class="media-body">
                     <h4 class="media-heading">嵌套的媒体标题</h4>
                     这是一些示例文本。这是一些示例文本。
					 这是一些示例文本。这是一些示例文本。
					 这是一些示例文本。这是一些示例文本。
					 这是一些示例文本。这是一些示例文本。
					 这是一些示例文本。这是一些示例文本。
                  </div>
               </div>
            </div>
         </div>
         <!-- 嵌套的媒体对象 -->
         <div class="media">
            <a class="pull-left" href="#">
               <img class="media-object" src="http://www.w3cschool.cc/wp-content/uploads/2014/06/64.jpg" 
               alt="通用的占位符图像">
            </a>
            <div class="media-body">
               <h4 class="media-heading">嵌套的媒体标题</h4>
               这是一些示例文本。这是一些示例文本。
			   这是一些示例文本。这是一些示例文本。
			   这是一些示例文本。这是一些示例文本。
			   这是一些示例文本。这是一些示例文本。
			   这是一些示例文本。这是一些示例文本。
            </div>
         </div>
      </div>
   </li>
   <li class="media">
      <a class="pull-right" href="#">
         <img class="media-object" src="http://www.w3cschool.cc/wp-content/uploads/2014/06/64.jpg" 
         alt="通用的占位符图像">
      </a>
      <div class="media-body">
         <h4 class="media-heading">媒体标题</h4>
         这是一些示例文本。这是一些示例文本。
		 这是一些示例文本。这是一些示例文本。
		 这是一些示例文本。这是一些示例文本。
		 这是一些示例文本。这是一些示例文本。
		 这是一些示例文本。这是一些示例文本。
      </div>
   </li>
</ul>

</body>
</html>

```
 [尝试一下 »](http://www.w3cschool.cc/try/tryit.php?filename=bootstrap3-mediaobject-list)

 结果如下所示：

  ![http://www.w3cschool.cc/wp-content/uploads/2014/06/mediaobjectlist_demo.jpg](http://www.w3cschool.cc/wp-content/uploads/2014/06/mediaobjectlist_demo.jpg)


 

