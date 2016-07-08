
<span id="shell" ></span>
与 Shell 共舞[¶](#shell)


0.3 新版功能.





Python 拥有的交互式 Shell 是人人都喜欢它的一个重要原因。交互式 Shell
允许你实时的运行 Python 命令并且立即得到返回结果。Flask 本身并未内置
一个交互式 Shell ，因为它并不需要任何前台的特殊设置，仅仅导入您的应用
然后开始探索和使用即可。


然而这里有一些易于获得的助手，可以帮助您在 Shell 遨游时获得更为
愉悦的体验。交互式控制台回话的一个重要问题是，您并不是像在浏览器
当中那样激发一个请求，因此 [g](http://docs.pythontab.com/flask/flask0.10/api.html#flask.g) 和 [request](http://docs.pythontab.com/flask/flask0.10/api.html#flask.request)
以及其他的一些函数不能使用。然而您想要测试的代码也许依赖他们，
那么让我们瞧瞧该如何解决这个问题。


这就是该那些辅助函数登场的时候了。然而应当说明的是，
这些函数并非仅仅为在交互式 Shell 里使用而编写的，也
可以用于单元测试或者其他需要一个虚假的请求上下文的
情景。


一般来说，在阅读本章节之前还是建议大家先阅读 [请求上下文](http://docs.pythontab.com/flask/flask0.10/reqcontext.html#request-context)
相关章节。


<span id="id2" ></span>
创建一个请求上下文[¶](#id2)

从 Shell 创建一个合适的上下文，最简单的方法是使用
test_request_context 方法，此方法
会创建一个 RequestContext 对象:




```
>>> ctx = app.test_request_context()

```






一般来说，您可以使用 with 声明来激活这个请求对象，
但是在终端中，调用 push()
方法和 pop() 方法
会更简单:




```
>>> ctx.push()

```






从这里往后，您就可以使用这个请求对象直到您调用 pop
方法为止:




```
>>> ctx.pop()

```









<span id="id3" ></span>
激发请求发送前后的调用[¶](#id3)

仅仅创建一个请求上下文，您仍然不能运行请求发送前通常会运行的代码。
如果您在将连接数据库的任务分配给发送请求前的函数调用，或者在当前
用户并没有被储存在 [g](http://docs.pythontab.com/flask/flask0.10/api.html#flask.g) 对象里等等情况下，您可能无法
访问到数据库。


您可以很容易的自己完成这件事，仅仅手动调用
preprocess_request() 函数即可:




```
>>> ctx = app.test_request_context()
>>> ctx.push()
>>> app.preprocess_request()

```






请注意， preprocess_request() 函数可能会返回
一个响应对象。这时，忽略它就好了。


要关闭一个请求，您需要在请求后的调用函数(由 process_response()
函数激发)运行之前耍一些小小的把戏:




```
>>> app.process_response(app.response_class())
<Response 0 bytes [200 OK]>
>>> ctx.pop()

```






被注册为 teardown_request() 的函数将会在
上下文环境出栈之后自动执行。所以这是用来销毁请求上下文(如数据库
连接等)资源的最佳地点。





<span id="id4" ></span>
进一步提升 Shell 使用体验[¶](#id4)

如果您喜欢在 Shell 里实验您的新点子，您可以创建一个包含你想要导入交互式
回话中的东西的的模块。在这里，您也可以定义更多的辅助方法用来完成一些常用的
操作，例如初始化数据库、删除一个数据表等。


把他们放到一个模块里（比如 shelltools 然后在 Shell 中导入它）:




```
>>> from shelltools import *

```












<span id="id2" ></span>
创建一个请求上下文[¶](#id2)

从 Shell 创建一个合适的上下文，最简单的方法是使用
test_request_context 方法，此方法
会创建一个 RequestContext 对象:




```
>>> ctx = app.test_request_context()

```






一般来说，您可以使用 with 声明来激活这个请求对象，
但是在终端中，调用 push()
方法和 pop() 方法
会更简单:




```
>>> ctx.push()

```






从这里往后，您就可以使用这个请求对象直到您调用 pop
方法为止:




```
>>> ctx.pop()

```









<span id="id3" ></span>
激发请求发送前后的调用[¶](#id3)

仅仅创建一个请求上下文，您仍然不能运行请求发送前通常会运行的代码。
如果您在将连接数据库的任务分配给发送请求前的函数调用，或者在当前
用户并没有被储存在 [g](http://docs.pythontab.com/flask/flask0.10/api.html#flask.g) 对象里等等情况下，您可能无法
访问到数据库。


您可以很容易的自己完成这件事，仅仅手动调用
preprocess_request() 函数即可:




```
>>> ctx = app.test_request_context()
>>> ctx.push()
>>> app.preprocess_request()

```






请注意， preprocess_request() 函数可能会返回
一个响应对象。这时，忽略它就好了。


要关闭一个请求，您需要在请求后的调用函数(由 process_response()
函数激发)运行之前耍一些小小的把戏:




```
>>> app.process_response(app.response_class())
<Response 0 bytes [200 OK]>
>>> ctx.pop()

```






被注册为 teardown_request() 的函数将会在
上下文环境出栈之后自动执行。所以这是用来销毁请求上下文(如数据库
连接等)资源的最佳地点。





<span id="id4" ></span>
进一步提升 Shell 使用体验[¶](#id4)

如果您喜欢在 Shell 里实验您的新点子，您可以创建一个包含你想要导入交互式
回话中的东西的的模块。在这里，您也可以定义更多的辅助方法用来完成一些常用的
操作，例如初始化数据库、删除一个数据表等。


把他们放到一个模块里（比如 shelltools 然后在 Shell 中导入它）:




```
>>> from shelltools import *

```









