
<span id="api" ></span>
API[¶](#api)

这部分文档涵盖了 Flask 的所有接口。对于那些 Flask 依赖外部库的部分，我们
这里提供了最重要的部分的文档，并且提供其官方文档的链接。


<span id="id2" ></span>
应用对象[¶](#id2)




<span id="id3" ></span>
蓝图对象[¶](#id3)




<span id="id4" ></span>
进入的请求对象[¶](#id4)


<span id="flask.request" ></span>
class flask.request[¶](#flask.request)


你可以使用全局 request 对象访问进入的请求数据。 Flask 处理进入的请求
数据并允许你用这个全局对象访问它。如果你工作在多线程环境，Flask 内部保证
你总会在当前线程上获取正确的数据，


这是一个代理。详情见 [留意代理](http://docs.pythontab.com/flask/flask0.10/reqcontext.html#notes-on-proxies) 。


请求对象是一个 Request 子类的实例，提供所有
Werkzeug 定义的属性。这里只对最重要的展示了简要概述。







<span id="id5" ></span>
响应对象[¶](#id5)




<span id="id6" ></span>
会话[¶](#id6)

如果你设置了 Flask.secret_key ，你可以在 Flask 应用中使用会话。会话
主要使得在请求见保留信息成为可能。 Flask 的实现方法是使用一个签名的 cookie 。
这样，用户可以查看会话的内容，但是不能修改它，除非用户知道密钥。所以确保密钥
被设置为一个复杂且无法被容易猜测的值。


你可以使用 [session](#flask.session) 对象来访问当前的会话:



<span id="flask.session" ></span>
class flask.session[¶](#flask.session)


会话对象很像通常的字典，区别是会话对象会追踪修改。


这是一个代理。更多信息见 [留意代理](http://docs.pythontab.com/flask/flask0.10/reqcontext.html#notes-on-proxies) 。


下列属性是需要关注的:



<span id="flask.session.new" ></span>
new[¶](#flask.session.new)


如果会话是新的，该值为 True ，否则为 False 。





<span id="flask.session.modified" ></span>
modified[¶](#flask.session.modified)


当果会话对象检测到修改，这个值为 True 。注意可变结构的修改不会
被自动捕获，这种情况下你需要自行显式地设置这个属性为 True 。这
里有 一个例子:




```
# this change is not picked up because a mutable object (here
# a list) is changed.
session['objects'].append(42)
# so mark it as modified yourself
session.modified = True

```









<span id="flask.session.permanent" ></span>
permanent[¶](#flask.session.permanent)


如果设为 True ，会话存活
permanent_session_lifetime 秒。默认为 31 天。
如果是 False （默认选项），会话会在用户关闭浏览器时删除。









<span id="id7" ></span>
会话接口[¶](#id7)


0.8 新版功能.





会话接口提供了简单的途径来替换 Flask 正在使用的会话实现。



Notice


PERMANENT_SESSION_LIFETIME 配置键从 Flask 0.8 开始可以是一个整数。
你可以自己计算值，或用应用上的
permanent_session_lifetime 属性来自动转换结果为
一个整数。








<span id="id8" ></span>
测试客户端[¶](#id8)




<span id="id9" ></span>
应用全局变量[¶](#id9)

只在一个请求内，从一个函数到另一个函数共享数据，全局变量并不够好。因为这
在线程环境下行不通。 Flask 提供了一个特殊的对象来确保只在活动的请求中
有效，并且每个请求都返回不同的值。一言蔽之：它做正确的事情，如同它对
[request](#flask.request) 和 [session](#flask.session) 做的那样。



<span id="flask.g" ></span>
flask.g[¶](#flask.g)


在这上存储你任何你想要存储的。例如一个数据库连接或者当前登入的用户。


从 Flask 0.10 起，对象 g 存储在应用上下文中而不再是请求上下文中，这
意味着即使在应用上下文中它也是可访问的而不是只能在请求上下文中。在
结合 [伪造资源和上下文](http://docs.pythontab.com/flask/flask0.10/testing.html#faking-resources) 模式使用来测试时这尤为有用。


另外，在 0.10 中你可以使用 get() 方法来获取一个属性或者如果这
个属性没设置的话将得到 None (或者第二个参数)。
这两种用法现在是没有区别的:




```
user = getattr(flask.g, 'user', None)
user = flask.get.get('user', None)

```






现在也能在 g 对象上使用 in 运算符来确定它是否有某个属性，并且它
将使用 yield 关键字来生成这样一个可迭代的包含所有keys的生成器。


这是一个代理。详情见 [留意代理](http://docs.pythontab.com/flask/flask0.10/reqcontext.html#notes-on-proxies) 。







<span id="id10" ></span>
有用的函数和类[¶](#id10)


<span id="flask.current_app" ></span>
flask.current_app[¶](#flask.current_app)


指向正在处理请求的应用。这对于想要支持同时运行多个应用的扩展有用。
它由应用上下文驱动，而不是请求上下文，所以你可以用
app_context() 方法
修改这个代理的值。


这是一个代理。详情见 [留意代理](http://docs.pythontab.com/flask/flask0.10/reqcontext.html#notes-on-proxies) 。





<span id="flask.abort" ></span>
flask.abort(code)[¶](#flask.abort)


抛出一个给定状态代码的 HTTPException 。
例如想要用一个页面未找到异常来终止请求，你可以调用 abort(404) 。




|参数:code – the HTTP error code.|







<span id="id11" ></span>
消息闪现[¶](#id11)




<span id="module-flask.json" ></span>
JSON 支持[¶](#module-flask.json)

Flask 使用 simplejson 来实现JSON。自从 simplejson 既在标准库中提供也在
Flask 的拓展中提供。Flask将首先尝试自带的simplejson，如果失败了就使用标准
库中的json模块。除此之外，为了更容易定制它还会委托访问当前应用的JSON的编码
器和解码器。


所以首先不要这样用：



```


try:
import simplejson as json
except ImportError:
import json




```

你可以这样




```
from flask import json

```






For usage examples, read the json documentation.
关于更多的用法，请阅读标准库中的 json 文档。下面的拓展已经默认被集成
到了标准库中JSON模块里：




datetime 对象被序列化为 [

#### RFC 822

](http://tools.ietf.org/html/rfc822.html) 字符串。

任何带有 __html__ 方法(比如 Markup)将在序列化的时候
调用这个方法然后返回的字符串将会被序列化为字符串。


这个 htmlsafe_dumps() 方法也能在 Jinja2 的过滤器中使用，名字为
|tojson 。请注意在 script 标签内部的内容将不会被转义，所以如果你想在
script 内部使用的话请确保它是不可用的通过 |safe 来转义，除非你正在
使用 Flask 0.10，如下：




```
<script type=text/javascript>
    doSomethingWith({{ user.username|tojson|safe }});
</script>

```









<span id="id12" ></span>
模板渲染[¶](#id12)




<span id="id13" ></span>
配置[¶](#id13)




<span id="id14" ></span>
扩展[¶](#id14)


<span id="flask.flask.ext" ></span>
flask.ext[¶](#flask.flask.ext)


这个模块重定向导入模块到 Flask 扩展。它在 0.8 中被加入，作为导入 Flask
扩展的权威方式，并使得我们在发布扩展时能有更大的灵活性。


如果你想使用名为 “Flask-Foo” 的扩展，你应按照下述从 [ext](#flask.flask.ext)
导入:




```
from flask.ext import foo

```







0.8 新版功能.










<span id="id15" ></span>
流的辅助函数[¶](#id15)




<span id="id16" ></span>
有用的内构件[¶](#id16)


<span id="flask._request_ctx_stack" ></span>
flask._request_ctx_stack[¶](#flask._request_ctx_stack)


Flask 中使用的所有的上下文局部对象，都由内部的
LocalStack 实现。这是一个带文档的实例，并且可以
在扩展和应用的代码中使用，但一般来说是不推荐这样使用的。


下面的属性在栈的每层上都存在:



app
活动的 Flask 应用
url_adapter
用于匹配请求的 URL 适配器
request
当前的请求对象
session
当前的会话对象
g
拥有 [flask.g](#flask.g) 对象上全部属性的对象
flashes
闪现消息的内部缓存

用法示例:




```
from flask import _request_ctx_stack

def get_session():
    ctx = _request_ctx_stack.top
    if ctx is not None:
        return ctx.session

```









<span id="flask._app_ctx_stack" ></span>
flask._app_ctx_stack[¶](#flask._app_ctx_stack)


类似请求上下文，但是只跟应用绑定。主要为扩展提供数据存储。



0.9 新版功能.










<span id="id17" ></span>
信号[¶](#id17)


0.6 新版功能.






<span id="flask.signals_available" ></span>
flask.signals_available[¶](#flask.signals_available)


当信号系统可用时为 True ，即在 [blinker](http://pypi.python.org/pypi/blinker) 已经被安装的情况下。





<span id="flask.template_rendered" ></span>
flask.template_rendered[¶](#flask.template_rendered)


当一个模板成功渲染的时候，这个信号会发出。这个信号带着一个模板实例
template 和为一个字典的上下文（叫 context ）两个参数被调用。





<span id="flask.request_started" ></span>
flask.request_started[¶](#flask.request_started)


这个信号在处建立请求上下文之外的任何请求处理开始前发送。因为请求上下文
这个信号在任何对请求的处理前发送，但是正好是在请求的上下文被建立的时候。
因为请求上下文已经被约束了，用户可以使用 [request](#flask.request) 之类的标
准全局代理访问请求对象。





<span id="flask.request_finished" ></span>
flask.request_finished[¶](#flask.request_finished)


这个信号恰好在请求发送给客户端之前发送。它传递名为 response 的将被发送
的响应。





<span id="flask.got_request_exception" ></span>
flask.got_request_exception[¶](#flask.got_request_exception)


这个信号在请求处理中抛出异常时发送。它在标准异常处理生效 之前 ，甚至是
在不会处理异常的调试模式下也是如此。这个异常会被将作为一个 exception
传递到用户那。





<span id="flask.request_tearing_down" ></span>
flask.request_tearing_down[¶](#flask.request_tearing_down)


这个信号在请求销毁时发送。它总会被调用，即使发生异常。在这种清况下，造
成teardown的异常将会通过一个叫 exc 的关键字参数传递出来。



在 0.9 版更改: 添加了 exc 参数








<span id="flask.appcontext_tearing_down" ></span>
flask.appcontext_tearing_down[¶](#flask.appcontext_tearing_down)


这个信号在应用上下文销毁时发送。它总会被调用，即使发生异常。在这种清况
下，造成teardown的异常将会通过一个叫 exc 的关键字参数传递出来。发送
者是application对象。





<span id="flask.appcontext_pushed" ></span>
flask.appcontext_pushed[¶](#flask.appcontext_pushed)


当应用上下文被压入栈后会发送这个信号。发送者是application对象



0.10 新版功能.








<span id="flask.appcontext_popped" ></span>
flask.appcontext_popped[¶](#flask.appcontext_popped)


当应用上下文出栈后会发送这个信号。发送者是application对象。这常常与
[appcontext_tearing_down](#flask.appcontext_tearing_down) 这个信号一致。



0.10 新版功能.








<span id="flask.message_flashed" ></span>
flask.message_flashed[¶](#flask.message_flashed)


This signal is sent when the application is flashing a message.
The messages is sent as message keyword argument and the
当闪现一个消息时会发送这个信号。消息的内容将以 message 关键字参数
发送，而消息的种类则是 category 关键字参数。



0.10 新版功能.








<span id="flask.signals.Namespace" ></span>
class flask.signals.Namespace[¶](#flask.signals.Namespace)


blinker.base.Namespace 的别名，如果 blinker 可用的话。否则，
是一个发送伪信号的伪造的类。这个类对想提供与 Flask 相同的备用系统的
Flask扩展有用。



<span id="flask.signals.Namespace.signal" ></span>
signal(name, doc=None)[¶](#flask.signals.Namespace.signal)


在此命名空间中创建一个新信号，如果 blinker 可用的话。否则返回一个
带有不做任何事的发送方法，任何操作都会（包括连接）报错为
RuntimeError 的伪信号。









<span id="id18" ></span>
基于类的视图[¶](#id18)


0.7 新版功能.








<span id="url" ></span>
URL 路由注册[¶](#url)

在路由系统中定义规则可以的方法可以概括为三种:



使用 flask.Flask.route() 装饰器

使用 flask.Flask.add_url_rule() 函数

直接访问暴露为 flask.Flask.url_map 的底层的 Werkzeug 路由系统


路由中的变量部分可以用尖括号指定（ /user/<username>）。默认情况下，URL
中的变量部分接受任何不带斜线的字符串，而 <converter:name> 也可以指定不
同的转换器。


变量部分以关键字参数传递给视图函数。


下面的转换器是可用的:




|string|接受任何不带斜线的字符串（默认的转换器）|
|:--|:--|
|int|接受整数|
|float|同 int ，但是接受浮点数|
|path|和默认的相似，但也接受斜线|


这里是一些例子:




```
@app.route('/')
def index():
    pass

@app.route('/<username>')
def show_user(username):
    pass

@app.route('/post/<int:post_id>')
def show_post(post_id):
    pass

```






需要注意的一个重要细节是 Flask 处理结尾斜线的方式。你可以应用下面两个
规则来保证 URL 的唯一:



如果规则以斜线结尾，当用户以不带斜线的形式请求，用户被自动重定向到
带有结尾斜线的相同页面。

如果规则结尾没有斜线，当用户以带斜线的形式请求，会抛出一个 404 not
found 。


这与 web 服务器处理静态文件的方式一致。这使得安全地使用相对链接地址成为
可能。


你可以为同一个函数定义多个规则。无论如何，他们也要唯一。也可以给定默认值。
这里给出一个接受可选页面的 URL 定义:




```
@app.route('/users/', defaults={'page': 1})
@app.route('/users/page/<int:page>')
def show_users(page):
    pass

```






这指定了 /users/ 为第一页的 URL ，/users/page/N 为第 N 页的 URL 。


以下是 route() 和 add_url_rule()
接受的参数。两者唯一的区别是，带有路由参数的视图函数用装饰器定义，而不是
view_func 参数。




|rule|URL 规则的字符串|
|:--|:--|
|endpoint|注册的 URL 规则的末端。如果没有显式地规定，Flask 本身假设末端的名称是视图函数的名称，。|
|view_func|当请求呈递到给定的末端时调用的函数。如果没有提供，可以在用在 view_functions 字典中以末端作为键名存储，来在之后设定函数。|
|defaults|规则默认值的字典。上面的示例介绍了默认值如何工作。|
|subdomain|当使用子域名匹配的时候，为子域名设定规则。如果没有给定，假定为默认的子域名。|
|**options|这些选项会被推送给底层的 Rule对象。一个 Werkzeug 的变化是 method 选项的处理。methods是这个规则被限定的方法列表（ GET ， POST 等等）。默认情况下，规则只监听 GET （也隐式地监听 HEAD ）。从 Flask0.6 开始，OPTIONS 也被隐式地加入，并且做标准的请求处理。它们需要作为关键字参数来给定。|





<span id="view-func-options" ></span>
视图函数选项[¶](#view-func-options)

对内部使用，视图函数可以有一些属性，附加到视图函数通常没有控制权的自定义的
行为。下面的可选属性覆盖 add_url_rule() 的默认值或一般
行为:




__name__: 函数的名称默认用于末端。如果显式地提供末端，这个值会使用。
此外，它默认以蓝图的名称作为前缀，并且不能从函数本身自定义。


methods: 如果没有在添加 URL 规则时提供 methods 参数。 Flask 会在视
图函数对象上寻找是否存在 methods 属性。如果存在，它会从上面拉取方法
的信息。


provide_automatic_options: 如果设置了这个属性， Flask 会强制禁用或
启用 HTTP OPTIONS 响应的自动实现。这对于对单个视图自定义 OPTIONS
响应而使用装饰器的情况下是有用的。


required_methods: 如果这个属性被设置了， 当注册一个 URL 规则的时候，
Flask 将总是会添加这些 methods 即使 methods 参数在 route() 调用
的时候被显式的覆盖了。


完整的例子:




```
def index():
    if request.method == 'OPTIONS':
        # custom options handling here
        ...
    return 'Hello World!'
index.provide_automatic_options = False
index.methods = ['GET', 'OPTIONS']

app.add_url_rule('/', index)

```







0.8 新版功能: 加入了 provide_automatic_options 功能。











<span id="id2" ></span>
应用对象[¶](#id2)




<span id="id3" ></span>
蓝图对象[¶](#id3)




<span id="id4" ></span>
进入的请求对象[¶](#id4)


<span id="flask.request" ></span>
class flask.request[¶](#flask.request)


你可以使用全局 request 对象访问进入的请求数据。 Flask 处理进入的请求
数据并允许你用这个全局对象访问它。如果你工作在多线程环境，Flask 内部保证
你总会在当前线程上获取正确的数据，


这是一个代理。详情见 [留意代理](http://docs.pythontab.com/flask/flask0.10/reqcontext.html#notes-on-proxies) 。


请求对象是一个 Request 子类的实例，提供所有
Werkzeug 定义的属性。这里只对最重要的展示了简要概述。







<span id="id5" ></span>
响应对象[¶](#id5)




<span id="id6" ></span>
会话[¶](#id6)

如果你设置了 Flask.secret_key ，你可以在 Flask 应用中使用会话。会话
主要使得在请求见保留信息成为可能。 Flask 的实现方法是使用一个签名的 cookie 。
这样，用户可以查看会话的内容，但是不能修改它，除非用户知道密钥。所以确保密钥
被设置为一个复杂且无法被容易猜测的值。


你可以使用 [session](#flask.session) 对象来访问当前的会话:



<span id="flask.session" ></span>
class flask.session[¶](#flask.session)


会话对象很像通常的字典，区别是会话对象会追踪修改。


这是一个代理。更多信息见 [留意代理](http://docs.pythontab.com/flask/flask0.10/reqcontext.html#notes-on-proxies) 。


下列属性是需要关注的:



<span id="flask.session.new" ></span>
new[¶](#flask.session.new)


如果会话是新的，该值为 True ，否则为 False 。





<span id="flask.session.modified" ></span>
modified[¶](#flask.session.modified)


当果会话对象检测到修改，这个值为 True 。注意可变结构的修改不会
被自动捕获，这种情况下你需要自行显式地设置这个属性为 True 。这
里有 一个例子:




```
# this change is not picked up because a mutable object (here
# a list) is changed.
session['objects'].append(42)
# so mark it as modified yourself
session.modified = True

```









<span id="flask.session.permanent" ></span>
permanent[¶](#flask.session.permanent)


如果设为 True ，会话存活
permanent_session_lifetime 秒。默认为 31 天。
如果是 False （默认选项），会话会在用户关闭浏览器时删除。









<span id="id7" ></span>
会话接口[¶](#id7)


0.8 新版功能.





会话接口提供了简单的途径来替换 Flask 正在使用的会话实现。



Notice


PERMANENT_SESSION_LIFETIME 配置键从 Flask 0.8 开始可以是一个整数。
你可以自己计算值，或用应用上的
permanent_session_lifetime 属性来自动转换结果为
一个整数。








<span id="id8" ></span>
测试客户端[¶](#id8)




<span id="id9" ></span>
应用全局变量[¶](#id9)

只在一个请求内，从一个函数到另一个函数共享数据，全局变量并不够好。因为这
在线程环境下行不通。 Flask 提供了一个特殊的对象来确保只在活动的请求中
有效，并且每个请求都返回不同的值。一言蔽之：它做正确的事情，如同它对
[request](#flask.request) 和 [session](#flask.session) 做的那样。



<span id="flask.g" ></span>
flask.g[¶](#flask.g)


在这上存储你任何你想要存储的。例如一个数据库连接或者当前登入的用户。


从 Flask 0.10 起，对象 g 存储在应用上下文中而不再是请求上下文中，这
意味着即使在应用上下文中它也是可访问的而不是只能在请求上下文中。在
结合 [伪造资源和上下文](http://docs.pythontab.com/flask/flask0.10/testing.html#faking-resources) 模式使用来测试时这尤为有用。


另外，在 0.10 中你可以使用 get() 方法来获取一个属性或者如果这
个属性没设置的话将得到 None (或者第二个参数)。
这两种用法现在是没有区别的:




```
user = getattr(flask.g, 'user', None)
user = flask.get.get('user', None)

```






现在也能在 g 对象上使用 in 运算符来确定它是否有某个属性，并且它
将使用 yield 关键字来生成这样一个可迭代的包含所有keys的生成器。


这是一个代理。详情见 [留意代理](http://docs.pythontab.com/flask/flask0.10/reqcontext.html#notes-on-proxies) 。







<span id="id10" ></span>
有用的函数和类[¶](#id10)


<span id="flask.current_app" ></span>
flask.current_app[¶](#flask.current_app)


指向正在处理请求的应用。这对于想要支持同时运行多个应用的扩展有用。
它由应用上下文驱动，而不是请求上下文，所以你可以用
app_context() 方法
修改这个代理的值。


这是一个代理。详情见 [留意代理](http://docs.pythontab.com/flask/flask0.10/reqcontext.html#notes-on-proxies) 。





<span id="flask.abort" ></span>
flask.abort(code)[¶](#flask.abort)


抛出一个给定状态代码的 HTTPException 。
例如想要用一个页面未找到异常来终止请求，你可以调用 abort(404) 。




|参数:code – the HTTP error code.|







<span id="id11" ></span>
消息闪现[¶](#id11)




<span id="module-flask.json" ></span>
JSON 支持[¶](#module-flask.json)

Flask 使用 simplejson 来实现JSON。自从 simplejson 既在标准库中提供也在
Flask 的拓展中提供。Flask将首先尝试自带的simplejson，如果失败了就使用标准
库中的json模块。除此之外，为了更容易定制它还会委托访问当前应用的JSON的编码
器和解码器。


所以首先不要这样用：



```


try:
import simplejson as json
except ImportError:
import json




```

你可以这样




```
from flask import json

```






For usage examples, read the json documentation.
关于更多的用法，请阅读标准库中的 json 文档。下面的拓展已经默认被集成
到了标准库中JSON模块里：




datetime 对象被序列化为 [

#### RFC 822

](http://tools.ietf.org/html/rfc822.html) 字符串。

任何带有 __html__ 方法(比如 Markup)将在序列化的时候
调用这个方法然后返回的字符串将会被序列化为字符串。


这个 htmlsafe_dumps() 方法也能在 Jinja2 的过滤器中使用，名字为
|tojson 。请注意在 script 标签内部的内容将不会被转义，所以如果你想在
script 内部使用的话请确保它是不可用的通过 |safe 来转义，除非你正在
使用 Flask 0.10，如下：




```
<script type=text/javascript>
    doSomethingWith({{ user.username|tojson|safe }});
</script>

```









<span id="id12" ></span>
模板渲染[¶](#id12)




<span id="id13" ></span>
配置[¶](#id13)




<span id="id14" ></span>
扩展[¶](#id14)


<span id="flask.flask.ext" ></span>
flask.ext[¶](#flask.flask.ext)


这个模块重定向导入模块到 Flask 扩展。它在 0.8 中被加入，作为导入 Flask
扩展的权威方式，并使得我们在发布扩展时能有更大的灵活性。


如果你想使用名为 “Flask-Foo” 的扩展，你应按照下述从 [ext](#flask.flask.ext)
导入:




```
from flask.ext import foo

```







0.8 新版功能.










<span id="id15" ></span>
流的辅助函数[¶](#id15)




<span id="id16" ></span>
有用的内构件[¶](#id16)


<span id="flask._request_ctx_stack" ></span>
flask._request_ctx_stack[¶](#flask._request_ctx_stack)


Flask 中使用的所有的上下文局部对象，都由内部的
LocalStack 实现。这是一个带文档的实例，并且可以
在扩展和应用的代码中使用，但一般来说是不推荐这样使用的。


下面的属性在栈的每层上都存在:



app
活动的 Flask 应用
url_adapter
用于匹配请求的 URL 适配器
request
当前的请求对象
session
当前的会话对象
g
拥有 [flask.g](#flask.g) 对象上全部属性的对象
flashes
闪现消息的内部缓存

用法示例:




```
from flask import _request_ctx_stack

def get_session():
    ctx = _request_ctx_stack.top
    if ctx is not None:
        return ctx.session

```









<span id="flask._app_ctx_stack" ></span>
flask._app_ctx_stack[¶](#flask._app_ctx_stack)


类似请求上下文，但是只跟应用绑定。主要为扩展提供数据存储。



0.9 新版功能.










<span id="id17" ></span>
信号[¶](#id17)


0.6 新版功能.






<span id="flask.signals_available" ></span>
flask.signals_available[¶](#flask.signals_available)


当信号系统可用时为 True ，即在 [blinker](http://pypi.python.org/pypi/blinker) 已经被安装的情况下。





<span id="flask.template_rendered" ></span>
flask.template_rendered[¶](#flask.template_rendered)


当一个模板成功渲染的时候，这个信号会发出。这个信号带着一个模板实例
template 和为一个字典的上下文（叫 context ）两个参数被调用。





<span id="flask.request_started" ></span>
flask.request_started[¶](#flask.request_started)


这个信号在处建立请求上下文之外的任何请求处理开始前发送。因为请求上下文
这个信号在任何对请求的处理前发送，但是正好是在请求的上下文被建立的时候。
因为请求上下文已经被约束了，用户可以使用 [request](#flask.request) 之类的标
准全局代理访问请求对象。





<span id="flask.request_finished" ></span>
flask.request_finished[¶](#flask.request_finished)


这个信号恰好在请求发送给客户端之前发送。它传递名为 response 的将被发送
的响应。





<span id="flask.got_request_exception" ></span>
flask.got_request_exception[¶](#flask.got_request_exception)


这个信号在请求处理中抛出异常时发送。它在标准异常处理生效 之前 ，甚至是
在不会处理异常的调试模式下也是如此。这个异常会被将作为一个 exception
传递到用户那。





<span id="flask.request_tearing_down" ></span>
flask.request_tearing_down[¶](#flask.request_tearing_down)


这个信号在请求销毁时发送。它总会被调用，即使发生异常。在这种清况下，造
成teardown的异常将会通过一个叫 exc 的关键字参数传递出来。



在 0.9 版更改: 添加了 exc 参数








<span id="flask.appcontext_tearing_down" ></span>
flask.appcontext_tearing_down[¶](#flask.appcontext_tearing_down)


这个信号在应用上下文销毁时发送。它总会被调用，即使发生异常。在这种清况
下，造成teardown的异常将会通过一个叫 exc 的关键字参数传递出来。发送
者是application对象。





<span id="flask.appcontext_pushed" ></span>
flask.appcontext_pushed[¶](#flask.appcontext_pushed)


当应用上下文被压入栈后会发送这个信号。发送者是application对象



0.10 新版功能.








<span id="flask.appcontext_popped" ></span>
flask.appcontext_popped[¶](#flask.appcontext_popped)


当应用上下文出栈后会发送这个信号。发送者是application对象。这常常与
[appcontext_tearing_down](#flask.appcontext_tearing_down) 这个信号一致。



0.10 新版功能.








<span id="flask.message_flashed" ></span>
flask.message_flashed[¶](#flask.message_flashed)


This signal is sent when the application is flashing a message.
The messages is sent as message keyword argument and the
当闪现一个消息时会发送这个信号。消息的内容将以 message 关键字参数
发送，而消息的种类则是 category 关键字参数。



0.10 新版功能.








<span id="flask.signals.Namespace" ></span>
class flask.signals.Namespace[¶](#flask.signals.Namespace)


blinker.base.Namespace 的别名，如果 blinker 可用的话。否则，
是一个发送伪信号的伪造的类。这个类对想提供与 Flask 相同的备用系统的
Flask扩展有用。



<span id="flask.signals.Namespace.signal" ></span>
signal(name, doc=None)[¶](#flask.signals.Namespace.signal)


在此命名空间中创建一个新信号，如果 blinker 可用的话。否则返回一个
带有不做任何事的发送方法，任何操作都会（包括连接）报错为
RuntimeError 的伪信号。









<span id="id18" ></span>
基于类的视图[¶](#id18)


0.7 新版功能.








<span id="url" ></span>
URL 路由注册[¶](#url)

在路由系统中定义规则可以的方法可以概括为三种:



使用 flask.Flask.route() 装饰器

使用 flask.Flask.add_url_rule() 函数

直接访问暴露为 flask.Flask.url_map 的底层的 Werkzeug 路由系统


路由中的变量部分可以用尖括号指定（ /user/<username>）。默认情况下，URL
中的变量部分接受任何不带斜线的字符串，而 <converter:name> 也可以指定不
同的转换器。


变量部分以关键字参数传递给视图函数。


下面的转换器是可用的:




|string|接受任何不带斜线的字符串（默认的转换器）|
|:--|:--|
|int|接受整数|
|float|同 int ，但是接受浮点数|
|path|和默认的相似，但也接受斜线|


这里是一些例子:




```
@app.route('/')
def index():
    pass

@app.route('/<username>')
def show_user(username):
    pass

@app.route('/post/<int:post_id>')
def show_post(post_id):
    pass

```






需要注意的一个重要细节是 Flask 处理结尾斜线的方式。你可以应用下面两个
规则来保证 URL 的唯一:



如果规则以斜线结尾，当用户以不带斜线的形式请求，用户被自动重定向到
带有结尾斜线的相同页面。

如果规则结尾没有斜线，当用户以带斜线的形式请求，会抛出一个 404 not
found 。


这与 web 服务器处理静态文件的方式一致。这使得安全地使用相对链接地址成为
可能。


你可以为同一个函数定义多个规则。无论如何，他们也要唯一。也可以给定默认值。
这里给出一个接受可选页面的 URL 定义:




```
@app.route('/users/', defaults={'page': 1})
@app.route('/users/page/<int:page>')
def show_users(page):
    pass

```






这指定了 /users/ 为第一页的 URL ，/users/page/N 为第 N 页的 URL 。


以下是 route() 和 add_url_rule()
接受的参数。两者唯一的区别是，带有路由参数的视图函数用装饰器定义，而不是
view_func 参数。




|rule|URL 规则的字符串|
|:--|:--|
|endpoint|注册的 URL 规则的末端。如果没有显式地规定，Flask 本身假设末端的名称是视图函数的名称，。|
|view_func|当请求呈递到给定的末端时调用的函数。如果没有提供，可以在用在 view_functions 字典中以末端作为键名存储，来在之后设定函数。|
|defaults|规则默认值的字典。上面的示例介绍了默认值如何工作。|
|subdomain|当使用子域名匹配的时候，为子域名设定规则。如果没有给定，假定为默认的子域名。|
|**options|这些选项会被推送给底层的 Rule对象。一个 Werkzeug 的变化是 method 选项的处理。methods是这个规则被限定的方法列表（ GET ， POST 等等）。默认情况下，规则只监听 GET （也隐式地监听 HEAD ）。从 Flask0.6 开始，OPTIONS 也被隐式地加入，并且做标准的请求处理。它们需要作为关键字参数来给定。|





<span id="view-func-options" ></span>
视图函数选项[¶](#view-func-options)

对内部使用，视图函数可以有一些属性，附加到视图函数通常没有控制权的自定义的
行为。下面的可选属性覆盖 add_url_rule() 的默认值或一般
行为:




__name__: 函数的名称默认用于末端。如果显式地提供末端，这个值会使用。
此外，它默认以蓝图的名称作为前缀，并且不能从函数本身自定义。


methods: 如果没有在添加 URL 规则时提供 methods 参数。 Flask 会在视
图函数对象上寻找是否存在 methods 属性。如果存在，它会从上面拉取方法
的信息。


provide_automatic_options: 如果设置了这个属性， Flask 会强制禁用或
启用 HTTP OPTIONS 响应的自动实现。这对于对单个视图自定义 OPTIONS
响应而使用装饰器的情况下是有用的。


required_methods: 如果这个属性被设置了， 当注册一个 URL 规则的时候，
Flask 将总是会添加这些 methods 即使 methods 参数在 route() 调用
的时候被显式的覆盖了。


完整的例子:




```
def index():
    if request.method == 'OPTIONS':
        # custom options handling here
        ...
    return 'Hello World!'
index.provide_automatic_options = False
index.methods = ['GET', 'OPTIONS']

app.add_url_rule('/', index)

```







0.8 新版功能: 加入了 provide_automatic_options 功能。








