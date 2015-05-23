  div.img { margin: 2px; border: 1px solid #0000ff; height: auto; width: auto; float: left; text-align: center; } div.img img { display: inline; margin: 3px; border: 1px solid #ffffff; } div.img a:hover img {border: 1px solid #0000ff;} div.desc { text-align: center; font-weight: normal; width: 120px; margin: 2px; } 
CSS 图片廊  
以下是使用CSS创建图片廊：

  [![http://www.w3cschool.cc/images/klematis_small.jpg](http://www.w3cschool.cc/images/klematis_small.jpg)](http://www.w3cschool.cc/css/klematis_big.htm) 添加图片描述

 

  [![http://www.w3cschool.cc/images/klematis2_small.jpg](http://www.w3cschool.cc/images/klematis2_small.jpg)](http://www.w3cschool.cc/css/klematis2_big.htm) 添加图片描述

 

  [![http://www.w3cschool.cc/images/klematis3_small.jpg](http://www.w3cschool.cc/images/klematis3_small.jpg)](http://www.w3cschool.cc/css/klematis3_big.htm) 添加图片描述

 

  [![http://www.w3cschool.cc/images/klematis4_small.jpg](http://www.w3cschool.cc/images/klematis4_small.jpg)](http://www.w3cschool.cc/css/klematis4_big.htm) 添加图片描述

 

 

#### 图片廊

 T以下是使用CSS创建图片廊：

  
#### 实例

 
```
 <html>

 <head>

 <style>

 div.img

   {

   margin:2px;

   border:1px solid #0000ff;

   height:auto;

   width:auto;

   float:left;

   text-align:center;

   }

 div.img img

   {

   display:inline;

   margin:3px;

   border:1px solid #ffffff;

   }

 div.img a:hover img

   {

   border:1px solid #0000ff;

   }

 div.desc

   {

   text-align:center;

   font-weight:normal;

   width:120px;

   margin:2px;

   }

 </style>

 </head>

 <body>



 <div class="img">

   <a target="_blank" href="http://www.w3cschool.cc/css/klematis_big.htm">

   <img src="http://www.w3cschool.cc/css/klematis_small.jpg" alt="Klematis" width="110" height="90">

   </a>

   <div class="desc">Add a description of the image here</div>

 </div>

 <div class="img">

   <a target="_blank" href="http://www.w3cschool.cc/css/klematis2_big.htm">

   <img src="http://www.w3cschool.cc/css/klematis2_small.jpg" alt="Klematis" width="110" height="90">

   </a>

   <div class="desc">Add a description of the image here</div>

 </div>

 <div class="img">

   <a target="_blank" href="http://www.w3cschool.cc/css/klematis3_big.htm">

   <img src="http://www.w3cschool.cc/css/klematis3_small.jpg" alt="Klematis" width="110" height="90">

   </a>

   <div class="desc">Add a description of the image here</div>

 </div>

 <div class="img">

   <a target="_blank" href="http://www.w3cschool.cc/css/klematis4_big.htm">

   <img src="http://www.w3cschool.cc/css/klematis4_small.jpg" alt="Klematis" width="110" height="90">

   </a>

   <div class="desc">Add a description of the image here</div>

 </div>



 </body>

 </html> 


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=trycss_image_gallery) 

 

