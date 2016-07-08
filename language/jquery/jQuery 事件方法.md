 jQuery 事件 方法 

#### jQuery 事件方法

 事件方法触发器或添加一个函数到被选元素的事件处理程序。

 下面的表格列出了所有用于处理事件的 jQuery 方法。

 

|方法|描述|
|:--|:--|
|bind()|向元素添加事件处理程序|
|blur()|添加/触发 blur 事件|
|change()|添加/触发 change 事件|
|click()|添加/触发 click 事件|
|dblclick()|添加/触发 double click 事件|
|delegate()|向匹配元素的当前或未来的子元素添加处理程序|
|die()| 在版本 1.9 中被移除。移除所有通过 live() 方法添加的事件处理程序|
|error()| 在版本 1.8 中被废弃。添加/触发 error 事件|
|event.currentTarget|在事件冒泡阶段内的当前 DOM 元素|
|event.data|包含当前执行的处理程序被绑定时传递到事件方法的可选数据|
|event.delegateTarget|返回当前调用的 jQuery 事件处理程序所添加的元素|
|event.isDefaultPrevented()|返回指定的 event 对象上是否调用了 event.preventDefault()|
|event.isImmediatePropagationStopped()|返回指定的 event 对象上是否调用了 event.stopImmediatePropagation()|
|event.isPropagationStopped()|返回指定的 event 对象上是否调用了 event.stopPropagation()|
|event.namespace|返回当事件被触发时指定的命名空间|
|event.pageX|返回相对于文档左边缘的鼠标位置|
|event.pageY|返回相对于文档上边缘的鼠标位置|
|event.preventDefault()|阻止事件的默认行为|
|event.relatedTarget| 返回当鼠标移动时哪个元素进入或退出 |
|event.result|包含由被指定事件触发的事件处理程序返回的最后一个值|
|event.stopImmediatePropagation()|阻止其他事件处理程序被调用|
|event.stopPropagation()|阻止事件向上冒泡到 DOM 树，阻止任何父处理程序被事件通知|
|event.target|返回哪个 DOM 元素触发事件|
|event.timeStamp|返回从 1970 年 1 月 1 日到事件被触发时的毫秒数|
|event.type|返回哪种事件类型被触发|
|event.which|返回指定事件上哪个键盘键或鼠标按钮被按下|
|focus()|添加/触发 focus 事件|
|focusin()|添加事件处理程序到 focusin 事件|
|focusout()|添加事件处理程序到 focusout 事件|
|hover()|添加两个事件处理程序到 hover 事件|
|keydown()|添加/触发 keydown 事件|
|keypress()|添加/触发 keypress 事件|
|keyup()|添加/触发 keyup 事件|
|live()| 在版本 1.9 中被移除。添加一个或多个事件处理程序到当前或未来的被选元素|
|load()| 在版本 1.8 中被废弃。添加一个事件处理程序到 load 事件|
|mousedown()|添加/触发 mousedown 事件|
|mouseenter()|添加/触发 mouseenter 事件|
|mouseleave()|添加/触发 mouseleave 事件|
|mousemove()|添加/触发 mousemove 事件|
|mouseout()|添加/触发 mouseout 事件|
|mouseover()|添加/触发 mouseover 事件|
|mouseup()|添加/触发 mouseup 事件|
|off()|移除通过 on() 方法添加的事件处理程序|
|on()|向元素添加事件处理程序|
|one()|向被选元素添加一个或多个事件处理程序。该处理程序只能被每个元素触发一次|
|$.proxy()|接受一个已有的函数，并返回一个带特定上下文的新的函数|
|ready()|规定当 DOM 完全加载时要执行的函数|
|resize()|添加/触发 resize 事件|
|scroll()|添加/触发 scroll 事件|
|select()|添加/触发 select 事件|
|submit()|添加/触发 submit 事件|
|toggle()| 在版本 1.9 中被移除。添加 click 事件之间要切换的两个或多个函数|
|trigger()|触发绑定到被选元素的所有事件|
|triggerHandler()|触发绑定到被选元素的指定事件上的所有函数|
|unbind()|从被选元素上移除添加的事件处理程序|
|undelegate()|从现在或未来的被选元素上移除事件处理程序|
|unload()| 在版本 1.8 中被废弃。添加事件处理程序到 unload 事件|








