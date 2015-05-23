 Bootstrap 图片
 在本章中，我们将学习 Bootstrap 对图片的支持。Bootstrap 提供了三个可对图片应用简单样式的 class：

 

.img-rounded：添加 border-radius:6px 来获得图片圆角。
 
.img-circle：添加 border-radius:500px 来让整个图片变成圆形。
 
.img-thumbnail：添加一些内边距（padding）和一个灰色的边框。
 
请看下面的实例演示：

 
```

<!DOCTYPE html>
<html>
<head>
   <title>Bootstrap 实例 - 图片</title>
   <link href="http://www.w3cschool.cc/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <script src="http://www.w3cschool.cc/scripts/jquery.min.js"></script>
   <script src="http://www.w3cschool.cc/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<img src="http://www.w3cschool.cc/wp-content/uploads/2014/06/download.png" 
   class="img-rounded">
<img src="http://www.w3cschool.cc/wp-content/uploads/2014/06/download.png" 
   class="img-circle">
<img src="http://www.w3cschool.cc/wp-content/uploads/2014/06/download.png" 
   class="img-thumbnail">

</body>
</html>

```
 [尝试一下 »](http://www.w3cschool.cc/try/tryit.php?filename=bootstrap3-image)

 结果如下所示：

  ![http://www.w3cschool.cc/wp-content/uploads/2014/06/image_demo.jpg](http://www.w3cschool.cc/wp-content/uploads/2014/06/image_demo.jpg)


 
#### <img> 类

 以下类可用于任何图片中。

 

|类|描述|实例|
|:--|:--|:--|
|.img-rounded|为图片添加圆角 (IE8 不支持)|尝试一下|
|.img-circle|将图片变为圆形 (IE8 不支持)|尝试一下|
|.img-thumbnail|缩略图功能|尝试一下|
|.img-responsive|图片响应式 (将很好地扩展到父元素)|尝试一下|


#### 响应式图片

  通过在 <img> 标签添加 .img-responsive 类来让图片支持响应式设计。 图片将很好地扩展到父元素。

  .img-responsive 类将 max-width: 100%; 和 height: auto; 样式应用在图片上：

  
#### 实例

 
```
 <img src="cinqueterre.jpg" class="img-responsive" alt="Cinque Terre"> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try2.php?filename=trybs_ref_img-responsive) 

 

