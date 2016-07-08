 jQuery Mobile 事件
 

#### jQuery Mobile 事件参考手册

 以下列表为所有的 jQuery Mobile 事件。

 

#### 注意：

请使用 on() 方法绑定事件。

 

|事件|描述|
|:--|:--|
|hashchange|启用可标记 #hash 历史，哈希值会在一次独立的点击时发生时变化，比如一个用户点击后退按钮，会通过 hashchange事件进行处理。|
|navigate |包裹了 hashchange 和 popstate 的事件|
|orientationchange|方向改变事件,在用户垂直或者水平旋转移动设备时触发。|
|pagebeforechange|在页面切换之前，触发的事件。使用$.mobile.changePage()来切换页面，此方法触发2个事件，切换之前的pagebeforechange事件，和切换完成后pagechange（成功）或者pagechangefailed（失败）。|
|pagebeforecreate|页面初始化时，初始化之前触发。|
|pagebeforehide|在页面切换后旧页面隐藏之前，触发的事件。|
|pagebeforeload|在加载请求发出之前触发|
|pagebeforeshow|在页面切换后显示之前，触发的事件。|
|pagechange|在页面切换成功后，触发的事件。使用$.mobile.changePage()来切换页面，此方法触发2个事件，切换之前的pagebeforechange事件，和切换完成后pagechange（成功）或者pagechangefailed（失败）。|
|pagechangefailed|在页面切换失败时，触发的事件。使用$.mobile.changePage()来切换页面，此方法触发2个事件，切换之前的pagebeforechange事件，和切换完成后pagechange（成功）或者pagechangefailed（失败）。|
|pagecreate|在页面创建成功之后，触发的事件,但增强完成之前。|
|pagehide|在页面切换后老页面隐藏之后，触发的事件。|
|pageinit|在页面页面初始化时，触发的事件。|
|pageload|在页面完全加载成功后触发。|
|pageloadfailed|如果页面请求失败触发。|
|pageremove|在窗口视图从 DOM 中移除外部页面之前触发。|
|pageshow|在过渡动画完成后，在"到达"页面触发。|
|scrollstart|当用户开始滚动页面时触发。|
|scrollstop|当用户停止滚动页面时触发。|
|swipe|当用户在元素上水平滑动时触发。|
|swipeleft|当用户从左划过元素超过 30px 时触发。|
|swiperight|当用户从右划过元素超过 30px 时触发。|
|tap|当用户敲击某元素时触发。|
|taphold|当元素敲击某元素并保持一秒时触发。|
|throttledresize|启用可标记 #hash 历史记录|
|updatelayout|由动态显示/隐藏内容的 jQuery Mobile 组件触发。|
|vclick|虚拟化的 click 事件处理器|
|vmousecancel|虚拟化的 mousecancel 事件处理器|
|vmousedown|虚拟化的 mousedown 事件处理器|
|vmousemove|虚拟化的 mousemove 事件处理器|
|vmouseout|虚拟化的 mouseout 事件处理器|
|vmouseover|虚拟化的 mouseover 事件处理器|
|vmouseup|虚拟化的 mouseup 事件处理器|



