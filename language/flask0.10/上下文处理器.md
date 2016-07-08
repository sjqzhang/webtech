
<span id="id1" ></span>
模板[¶](#id1)

Flask 使用 Jinja 2 作为模板引擎。当然，你也可以自由使用其它的模板引擎，但运行
Flask 本身仍然需要 Jinja2 依赖 ，这对启用富扩展是必要的，扩展可
以依赖 Jinja2 存在。


本节只是快速地介绍 Jinja2 是如何集成到 Flask 中的。更多关于 Jinja2 语法本身的信息，
请参考官方文档
[Jinja2 模板引擎](http://jinja.pocoo.org/2/documentation/templates) 。


<span id="jinja" ></span>
Jinja 配置[¶](#jinja)

Jinja 2 默认配置如下:



所有扩展名为 .html 、 .htm 、 .xml 以及 .xhtml
的模板会开启自动转义

模板可以利用 {% autoescape %} 标签选择自动转义的开关。

Flask 在 Jinja2 上下文中插入了几个全局函数和助手，另外还有一些
目前默认的值





<span id="id2" ></span>
标准上下文[¶](#id2)

下面的全局变量默认在 Jinja2 模板中可用:




config


当前的配置对象 (flask.config)



0.6 新版功能.






在 0.10 版更改: 现在这总是可用的，甚至在导入的模版里。









request


当前的请求对象 ([flask.request](http://docs.pythontab.com/flask/flask0.10/api.html#flask.request))。当模版不是在活动的请求上下
文中渲染时这个变量不可用。






session


当前的会话对象 ([flask.session](http://docs.pythontab.com/flask/flask0.10/api.html#flask.session))。当模版不是在活动的请求上下
文中渲染时这个变量不可用。






g


请求相关的全局变量 ([flask.g](http://docs.pythontab.com/flask/flask0.10/api.html#flask.g))。当模版不是在活动的请求上下
文中渲染时这个变量不可用。






url_for()


flask.url_for() 函数






get_flashed_messages()


flask.get_flashed_messages() 函数





Jinja 上下文行为


这些变量被添加到了请求的上下文中，而非全局变量。区别在于，他们默认不会
在导入模板的上下文中出现。这样做，一方面是考虑到性能，另一方面是为了
让事情显式透明。


这对你来说意味着什么？如果你想要导入一个需要访问请求对象的宏，有两种可能的方法:



显式地传入请求或请求对象的属性作为宏的参数。

与上下文一起（with context）导入宏。


与上下文中一起（with context）导入的方式如下:




```
{% from '_helpers.html' import my_macro with context %}

```












<span id="id3" ></span>
标准过滤器[¶](#id3)

这些过滤器在 Jinja2 中可用，也是 Jinja2 自带的过滤器:




tojson()


这个函数把给定的对象转换为 JSON 表示，如果你要动态生成 JavaScript 这里有
一个非常有用的例子。


注意 script 标签里的东西不应该被转义，因此如果你想在 script 标签里使用它，
请使用 |safe 来禁用转义，:




```
<script type=text/javascript>
    doSomethingWith({{ user.username|tojson|safe }});
</script>

```











<span id="id4" ></span>
控制自动转义[¶](#id4)

自动转义的概念是自动转义特殊字符。 HTML （或 XML ，因此也有 XHTML ）意义下
的特殊字符是 & ， > ， < ， " 以及 ' 。因为这些字符在
文档中表示它们特定的含义，如果你想在文本中使用它们，应该把它们替换成相应
的“实体”。不这么做不仅会导致用户疲于在文本中使用这些字符，也会导致安全问题。
（见 [跨站脚本攻击（XSS）](http://docs.pythontab.com/flask/flask0.10/security.html#xss) ）


虽然你有时会需要在模板中禁用自动转义，比如在页面中显式地插入 HTML ，
可以是一个来自于 markdown 到 HTML 转换器的安全输出。


我们有三种可行的解决方案:



在传递到模板之前，用 Markup 对象封装 HTML字符串。一般推荐这个方法。

在模板中，使用 |safe 过滤器显式地标记一个字符串为安全的 HTML
（ {{ myvariable|safe }} ）。

临时地完全禁用自动转义系统。


在模板中禁用自动转义系统，可以使用 {%autoescape %} 块:




```
{% autoescape false %}
    <p>autoescaping is disabled here
    <p>{{ will_not_be_escaped }}
{% endautoescape %}

```






无论何时，都请务必格外小心这里的变量。





<span id="registering-filters" ></span>
注册过滤器[¶](#registering-filters)

如果你要在 Jinja2 中注册你自己的过滤器，你有两种方法。你可以把它们手动添加到
应用的 jinja_env 或者使用
template_filter() 装饰器。


下面两个例子作用相同，都是反转一个对象:




```
@app.template_filter('reverse')
def reverse_filter(s):
    return s[::-1]

def reverse_filter(s):
    return s[::-1]
app.jinja_env.filters['reverse'] = reverse_filter

```






在使用装饰器的情况下，如果你想以函数名作为过滤器名，参数是可选的。注册之后，
你可以在模板中像使用 Jinja2 内置过滤器一样使用你的过滤器，例如你在上下文中有
一个名为 mylist 的 Python 列表:




```
{% for x in mylist | reverse %}
{% endfor %}

```









<span id="id6" ></span>
上下文处理器[¶](#id6)

Flask 上下文处理器自动向模板的上下文中插入新变量。上下文处理器在模板
渲染之前运行，并且可以在模板上下文中插入新值。上下文处理器是一个返回字典
的函数，这个字典的键值最终将传入应用中所有模板的上下文:




```
@app.context_processor
def inject_user():
    return dict(user=g.user)

```






上面的上下文处理器使得模板可以使用一个名为 user ，值为 g.user 的变量。
不过这个例子不是很有意思，因为 g 在模板中本来就是可用的，但它解释
了上下文处理器是如何工作的。


变量不仅限于值，上下文处理器也可以使某个函数在模板中可用（由于 Python 允
许传递函数）:




```
@app.context_processor
def utility_processor():
    def format_price(amount, currency=u'€'):
        return u'{0:.2f}{1}.format(amount, currency)
    return dict(format_price=format_price)

```






上面的上下文处理器使得 format_price 函数在所有模板中可用:




```
{{ format_price(0.33) }}

```






你也可以构建 format_price 为一个模板过滤器（见 [注册过滤器](#registering-filters) ），
但这展示了上下文处理器传递函数的工作过程。








<span id="jinja" ></span>
Jinja 配置[¶](#jinja)

Jinja 2 默认配置如下:



所有扩展名为 .html 、 .htm 、 .xml 以及 .xhtml
的模板会开启自动转义

模板可以利用 {% autoescape %} 标签选择自动转义的开关。

Flask 在 Jinja2 上下文中插入了几个全局函数和助手，另外还有一些
目前默认的值





<span id="id2" ></span>
标准上下文[¶](#id2)

下面的全局变量默认在 Jinja2 模板中可用:




config


当前的配置对象 (flask.config)



0.6 新版功能.






在 0.10 版更改: 现在这总是可用的，甚至在导入的模版里。









request


当前的请求对象 ([flask.request](http://docs.pythontab.com/flask/flask0.10/api.html#flask.request))。当模版不是在活动的请求上下
文中渲染时这个变量不可用。






session


当前的会话对象 ([flask.session](http://docs.pythontab.com/flask/flask0.10/api.html#flask.session))。当模版不是在活动的请求上下
文中渲染时这个变量不可用。






g


请求相关的全局变量 ([flask.g](http://docs.pythontab.com/flask/flask0.10/api.html#flask.g))。当模版不是在活动的请求上下
文中渲染时这个变量不可用。






url_for()


flask.url_for() 函数






get_flashed_messages()


flask.get_flashed_messages() 函数





Jinja 上下文行为


这些变量被添加到了请求的上下文中，而非全局变量。区别在于，他们默认不会
在导入模板的上下文中出现。这样做，一方面是考虑到性能，另一方面是为了
让事情显式透明。


这对你来说意味着什么？如果你想要导入一个需要访问请求对象的宏，有两种可能的方法:



显式地传入请求或请求对象的属性作为宏的参数。

与上下文一起（with context）导入宏。


与上下文中一起（with context）导入的方式如下:




```
{% from '_helpers.html' import my_macro with context %}

```












<span id="id3" ></span>
标准过滤器[¶](#id3)

这些过滤器在 Jinja2 中可用，也是 Jinja2 自带的过滤器:




tojson()


这个函数把给定的对象转换为 JSON 表示，如果你要动态生成 JavaScript 这里有
一个非常有用的例子。


注意 script 标签里的东西不应该被转义，因此如果你想在 script 标签里使用它，
请使用 |safe 来禁用转义，:




```
<script type=text/javascript>
    doSomethingWith({{ user.username|tojson|safe }});
</script>

```











<span id="id4" ></span>
控制自动转义[¶](#id4)

自动转义的概念是自动转义特殊字符。 HTML （或 XML ，因此也有 XHTML ）意义下
的特殊字符是 & ， > ， < ， " 以及 ' 。因为这些字符在
文档中表示它们特定的含义，如果你想在文本中使用它们，应该把它们替换成相应
的“实体”。不这么做不仅会导致用户疲于在文本中使用这些字符，也会导致安全问题。
（见 [跨站脚本攻击（XSS）](http://docs.pythontab.com/flask/flask0.10/security.html#xss) ）


虽然你有时会需要在模板中禁用自动转义，比如在页面中显式地插入 HTML ，
可以是一个来自于 markdown 到 HTML 转换器的安全输出。


我们有三种可行的解决方案:



在传递到模板之前，用 Markup 对象封装 HTML字符串。一般推荐这个方法。

在模板中，使用 |safe 过滤器显式地标记一个字符串为安全的 HTML
（ {{ myvariable|safe }} ）。

临时地完全禁用自动转义系统。


在模板中禁用自动转义系统，可以使用 {%autoescape %} 块:




```
{% autoescape false %}
    <p>autoescaping is disabled here
    <p>{{ will_not_be_escaped }}
{% endautoescape %}

```






无论何时，都请务必格外小心这里的变量。





<span id="registering-filters" ></span>
注册过滤器[¶](#registering-filters)

如果你要在 Jinja2 中注册你自己的过滤器，你有两种方法。你可以把它们手动添加到
应用的 jinja_env 或者使用
template_filter() 装饰器。


下面两个例子作用相同，都是反转一个对象:




```
@app.template_filter('reverse')
def reverse_filter(s):
    return s[::-1]

def reverse_filter(s):
    return s[::-1]
app.jinja_env.filters['reverse'] = reverse_filter

```






在使用装饰器的情况下，如果你想以函数名作为过滤器名，参数是可选的。注册之后，
你可以在模板中像使用 Jinja2 内置过滤器一样使用你的过滤器，例如你在上下文中有
一个名为 mylist 的 Python 列表:




```
{% for x in mylist | reverse %}
{% endfor %}

```









<span id="id6" ></span>
上下文处理器[¶](#id6)

Flask 上下文处理器自动向模板的上下文中插入新变量。上下文处理器在模板
渲染之前运行，并且可以在模板上下文中插入新值。上下文处理器是一个返回字典
的函数，这个字典的键值最终将传入应用中所有模板的上下文:




```
@app.context_processor
def inject_user():
    return dict(user=g.user)

```






上面的上下文处理器使得模板可以使用一个名为 user ，值为 g.user 的变量。
不过这个例子不是很有意思，因为 g 在模板中本来就是可用的，但它解释
了上下文处理器是如何工作的。


变量不仅限于值，上下文处理器也可以使某个函数在模板中可用（由于 Python 允
许传递函数）:




```
@app.context_processor
def utility_processor():
    def format_price(amount, currency=u'€'):
        return u'{0:.2f}{1}.format(amount, currency)
    return dict(format_price=format_price)

```






上面的上下文处理器使得 format_price 函数在所有模板中可用:




```
{{ format_price(0.33) }}

```






你也可以构建 format_price 为一个模板过滤器（见 [注册过滤器](#registering-filters) ），
但这展示了上下文处理器传递函数的工作过程。





