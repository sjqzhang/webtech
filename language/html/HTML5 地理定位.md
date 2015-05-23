 HTML5 Geolocation（地理定位）  
HTML5 Geolocation（地理定位）用于定位用户的位置。

 

#### 定位用户的位置

 HTML5 Geolocation API 用于获得用户的地理位置。

 鉴于该特性可能侵犯用户的隐私，除非用户同意，否则用户位置信息是不可用的。

 

#### 浏览器支持

  ![http://www.w3cschool.cc/images/compatible_ie.gif](http://www.w3cschool.cc/images/compatible_ie.gif)![http://www.w3cschool.cc/images/compatible_firefox.gif](http://www.w3cschool.cc/images/compatible_firefox.gif)![http://www.w3cschool.cc/images/compatible_opera.gif](http://www.w3cschool.cc/images/compatible_opera.gif)![http://www.w3cschool.cc/images/compatible_chrome.gif](http://www.w3cschool.cc/images/compatible_chrome.gif)![http://www.w3cschool.cc/images/compatible_safari.gif](http://www.w3cschool.cc/images/compatible_safari.gif)

 Internet Explorer 9+, Firefox, Chrome, Safari 和 Opera 支持Geolocation（地理定位）.

 注意: Geolocation（地理定位）对于拥有 GPS 的设备，比如 iPhone，地理定位更加精确。

 

#### HTML5 - 使用地理定位

 请使用 getCurrentPosition() 方法来获得用户的位置。

 下例是一个简单的地理定位实例，可返回用户位置的经度和纬度:

  
#### 实例

 
```
 <script>

var x=document.getElementById("demo");

function getLocation()

  {

  if (navigator.geolocation)

    {

    navigator.geolocation.getCurrentPosition(showPosition);

    }

  else{x.innerHTML="该浏览器不支持获取地理位置。";}

  }

 function showPosition(position)

  {

  x.innerHTML="Latitude: " + position.coords.latitude + 

  "<br>Longitude: " + position.coords.longitude; 

  }

</script>


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml5_geolocation) 

 实例解析:

 
检测是否支持地理定位
 如果支持，则运行 getCurrentPosition() 方法。如果不支持，则向用户显示一段消息。
 如果getCurrentPosition()运行成功，则向参数showPosition中规定的函数返回一个coordinates对象
 showPosition() 函数获得并显示经度和纬度
 
上面的例子是一个非常基础的地理定位脚本，不含错误处理。

 

#### 处理错误和拒绝

 getCurrentPosition() 方法的第二个参数用于处理错误。它规定当获取用户位置失败时运行的函数：

  
#### 实例

 
```
 function showError(error)

  {

  switch(error.code) 

    {

    case error.PERMISSION_DENIED:

      x.innerHTML="用户拒绝对获取地理位置的请求。"

      break;

    case error.POSITION_UNAVAILABLE:

      x.innerHTML="位置信息是不可用的。"

      break;

    case error.TIMEOUT:

      x.innerHTML="请求用户地理位置超时。"

      break;

    case error.UNKNOWN_ERROR:

      x.innerHTML="未知错误。"

      break;

    }

  }


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml5_geolocation_error) 

 错误代码：

 
Permission denied - 用户不允许地理定位
 Position unavailable - 无法获取当前位置
 Timeout - 操作超时
 


#### 在地图中显示结果

 如需在地图中显示结果，您需要访问可使用经纬度的地图服务，比如谷歌地图或百度地图：

  
#### 实例

 
```
 function showPosition(position)

{

var latlon=position.coords.latitude+","+position.coords.longitude;



var img_url="http://maps.googleapis.com/maps/api/staticmap?center="

 +latlon+"&amp;zoom=14&amp;size=400x300&amp;sensor=false";



 document.getElementById("mapholder").innerHTML="<img src="http://www.w3cschool.cc/html/"+img_url+"">";

 }





```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml5_geolocation_map) 

 在上例中，我们使用返回的经纬度数据在谷歌地图中显示位置（使用静态图像）。

 [Google地图脚本](http://www.w3cschool.cc/try/try.php?filename=tryhtml5_geolocation_map_script)

 上面的链接向您演示如何使用脚本来显示带有标记、缩放和拖曳选项的交互式地图。

 

#### 给定位置的信息

 本页演示的是如何在地图上显示用户的位置。不过，地理定位对于给定位置的信息同样很有用处。

 实例:

 
更新本地信息
 显示用户周围的兴趣点
 交互式车载导航系统 (GPS)
 


#### getCurrentPosition() 方法 - 返回数据

 T若成功，则 getCurrentPosition() 方法返回对象。始终会返回 latitude、longitude 以及 accuracy 属性。如果可用，则会返回其他下面的属性。

 

|属性|描述|
|:--|:--|
|coords.latitude|十进制数的纬度|
|coords.longitude|十进制数的经度|
|coords.accuracy|位置精度|
|coords.altitude|海拔，海平面以上以米计|
|coords.altitudeAccuracy|位置的海拔精度|
|coords.heading|方向，从正北开始以度计|
|coords.speed|速度，以米/每秒计|
|timestamp|响应的日期/时间|





#### Geolocation 对象 - 其他有趣的方法

 watchPosition() - 返回用户的当前位置，并继续返回用户移动时的更新位置（就像汽车上的 GPS）。

 clearWatch() - 停止 watchPosition() 方法

 下面的例子展示 watchPosition() 方法。您需要一台精确的 GPS 设备来测试该例（比如 iPhone）： 

  
#### 实例

 
```
 <script>

var x=document.getElementById("demo");

function getLocation()

  {

  if (navigator.geolocation)

    {

    navigator.geolocation.watchPosition(showPosition);

    }

  else{x.innerHTML="该浏览器不支持获取地理位置。";}

  }

 function showPosition(position)

  {

  x.innerHTML="纬度: " + position.coords.latitude + 

  "<br>经度: " + position.coords.longitude; 

  }

</script>


```
 

[尝试一下 »](http://www.w3cschool.cc/try/try.php?filename=tryhtml5_geolocation_watchposition) 

 

