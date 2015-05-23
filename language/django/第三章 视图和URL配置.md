

#### 第一份视图：


在上一章使用django-admin.py startproject制作的mysite文件夹中，创建一个叫做views.py的空文件。这个Python模块将包含这一章的视图。 请留意，Django对于view.py的文件命名没有特别的要求，它不在乎这个文件叫什么。但是根据约定，把它命名成view.py是个好主意，这样有利于其他开发者读懂你的代码，正如你很容易的往下读懂本文。


我们的Hello world视图非常简单。 这些是完整的函数和导入声明，你需要输入到views.py文件：



```

from django.http import HttpResponse

def hello(request):
    return HttpResponse("Hello world")

```

我们逐行逐句地分析一遍这段代码：



```

首先，我们从 django.http 模块导入（import） HttpResponse 类。参阅附录 H 了解更多关于 HttpRequest 和 HttpResponse 的细节。 我们需要导入这些类，因为我们会在后面用到。


接下来，我们定义一个叫做hello 的视图函数。


每个视图函数至少要有一个参数，通常被叫作request。 这是一个触发这个视图、包含当前Web请求信息的对象，是类django.http.HttpRequest的一个实例。在这个示例中，我们虽然不用request做任何事情，然而它仍必须是这个视图的第一个参数。


注意视图函数的名称并不重要；并不一定非得以某种特定的方式命名才能让 Django 识别它。 在这里我们把它命名为：hello，是因为这个名称清晰的显示了视图的用意。同样地，你可以用诸如：hello_wonderful_beautiful_world，这样难看的短句来给它命名。 在下一小节（Your First URLconf），将告诉你Django是如何找到这个函数的。


这个函数只有简单的一行代码： 它仅仅返回一个HttpResponse对象，这个对象包含了文本“Hello world”。



```

这里主要讲的是： 一个视图就是Python的一个函数。这个函数第一个参数的类型是HttpRequest；它返回一个HttpResponse实例。为了使一个Python的函数成为一个Django可识别的视图，它必须满足这两个条件。
（也有例外，但是我们稍后才会接触到。




