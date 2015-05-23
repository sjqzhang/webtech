 JavaScript Window Screen  
window.screen 对象包含有关用户屏幕的信息。

 

#### Window Screen

 

#### window.screen

对象在编写时可以不使用 window 这个前缀。

 一些属性：

 
screen.availWidth - 可用的屏幕宽度
 screen.availHeight - 可用的屏幕高度
 


#### Window Screen 可用宽度

 screen.availWidth 属性返回访问者屏幕的宽度，以像素计，减去界面特性，比如窗口任务栏。

  
#### 实例

 返回您的屏幕的可用宽度：

 
```
 <script>



 document.write("Available Width: " + screen.availWidth);



 </script> 


```
 以上代码输出为：

 
```
 



```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjs_screen_availwidth) 

 



#### Window Screen 可用高度

 screen.availHeight 属性返回访问者屏幕的高度，以像素计，减去界面特性，比如窗口任务栏。

  
#### 实例

 返回您的屏幕的可用高度：

 
```
 <script>



 document.write("Available Height: " + screen.availHeight);



 </script> 


```
 以上代码将输出：

 
```
 



```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryjs_screen_availheight) 

 [所有 screen 属性实例](http://www.w3cschool.cc/try/try.php?filename=tryjs_screen_all)

 

