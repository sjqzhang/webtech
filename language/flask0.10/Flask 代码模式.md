<span id="flask" ></span>
Flask 代码模式[¶](#flask)

某些东西非常通用，以至于你有很大的机会在绝大部分 Web 应用中，都能找到
他们的身影。例如相当多的应用在使用关系数据库而且包含用户注册和认证模块。
在这种情况下，请求开始之前，他们会打开数据库连接、获得当前已经登陆的用户
信息。在请求结束的时候，数据库连接又会被关闭。


这章提供了一些由用户贡献的代码片段和模板来加速开发 [Flask
Snippet Archives](http://flask.pocoo.org/snippets/).





[大型应用](http://docs.pythontab.com/flask/flask0.10/patterns/packages.html)
[简单的包](http://docs.pythontab.com/flask/flask0.10/patterns/packages.html#id2)

[与蓝图一起工作](http://docs.pythontab.com/flask/flask0.10/patterns/packages.html#working-with-modules)





[应用程序的工厂函数](http://docs.pythontab.com/flask/flask0.10/patterns/appfactories.html)
[基础的工厂函数](http://docs.pythontab.com/flask/flask0.10/patterns/appfactories.html#id2)

[使用应用程序](http://docs.pythontab.com/flask/flask0.10/patterns/appfactories.html#id3)

[工厂函数的改进](http://docs.pythontab.com/flask/flask0.10/patterns/appfactories.html#id4)





[应用调度](http://docs.pythontab.com/flask/flask0.10/patterns/appdispatch.html)
[如何使用此文档](http://docs.pythontab.com/flask/flask0.10/patterns/appdispatch.html#id2)

[合并应用](http://docs.pythontab.com/flask/flask0.10/patterns/appdispatch.html#id3)

[通过子域名调度](http://docs.pythontab.com/flask/flask0.10/patterns/appdispatch.html#id4)

[使用路径来调度](http://docs.pythontab.com/flask/flask0.10/patterns/appdispatch.html#id5)





[使用 URL 处理器](http://docs.pythontab.com/flask/flask0.10/patterns/urlprocessors.html)
[国际化的应用程序 URL](http://docs.pythontab.com/flask/flask0.10/patterns/urlprocessors.html#id1)

[多国语言化的 Blueprint URL](http://docs.pythontab.com/flask/flask0.10/patterns/urlprocessors.html#blueprint-url)





[部署和分发](http://docs.pythontab.com/flask/flask0.10/patterns/distribute.html)
[基础的安装脚本](http://docs.pythontab.com/flask/flask0.10/patterns/distribute.html#id2)

[分发代码](http://docs.pythontab.com/flask/flask0.10/patterns/distribute.html#distributing-resources)

[声明依赖关系](http://docs.pythontab.com/flask/flask0.10/patterns/distribute.html#id4)

[安装 / 开发](http://docs.pythontab.com/flask/flask0.10/patterns/distribute.html#id5)





[使用 Fabric 部署](http://docs.pythontab.com/flask/flask0.10/patterns/fabric.html)
[创建第一个 Fabfile](http://docs.pythontab.com/flask/flask0.10/patterns/fabric.html#fabfile)

[运行 Fabfile](http://docs.pythontab.com/flask/flask0.10/patterns/fabric.html#id1)

[WSGI 文件](http://docs.pythontab.com/flask/flask0.10/patterns/fabric.html#wsgi)

[配置文件](http://docs.pythontab.com/flask/flask0.10/patterns/fabric.html#id2)

[第一次部署](http://docs.pythontab.com/flask/flask0.10/patterns/fabric.html#id3)

[下一步操作](http://docs.pythontab.com/flask/flask0.10/patterns/fabric.html#id4)





[在 Flask 中使用 SQLite 3](http://docs.pythontab.com/flask/flask0.10/patterns/sqlite3.html)
[按需连接](http://docs.pythontab.com/flask/flask0.10/patterns/sqlite3.html#id1)

[简化查询](http://docs.pythontab.com/flask/flask0.10/patterns/sqlite3.html#easy-querying)

[初始化数据库模型](http://docs.pythontab.com/flask/flask0.10/patterns/sqlite3.html#id3)





[在 Flask 中使用 SQLAlchemy](http://docs.pythontab.com/flask/flask0.10/patterns/sqlalchemy.html)
[Flask-SQLAlchemy 扩展](http://docs.pythontab.com/flask/flask0.10/patterns/sqlalchemy.html#id1)

[显式调用](http://docs.pythontab.com/flask/flask0.10/patterns/sqlalchemy.html#id3)

[手动实现 ORM](http://docs.pythontab.com/flask/flask0.10/patterns/sqlalchemy.html#orm)

[SQL 抽象层](http://docs.pythontab.com/flask/flask0.10/patterns/sqlalchemy.html#sql)





[上传文件](http://docs.pythontab.com/flask/flask0.10/patterns/fileuploads.html)
[一点点介绍](http://docs.pythontab.com/flask/flask0.10/patterns/fileuploads.html#id2)

[改进上传功能](http://docs.pythontab.com/flask/flask0.10/patterns/fileuploads.html#id3)

[上传进度条](http://docs.pythontab.com/flask/flask0.10/patterns/fileuploads.html#id4)

[更简单解决方案](http://docs.pythontab.com/flask/flask0.10/patterns/fileuploads.html#id5)





[缓存](http://docs.pythontab.com/flask/flask0.10/patterns/caching.html)
[配置缓存](http://docs.pythontab.com/flask/flask0.10/patterns/caching.html#id2)

[使用缓存](http://docs.pythontab.com/flask/flask0.10/patterns/caching.html#id3)





[视图装饰器](http://docs.pythontab.com/flask/flask0.10/patterns/viewdecorators.html)
[过滤未登录用户的装饰器](http://docs.pythontab.com/flask/flask0.10/patterns/viewdecorators.html#id2)

[缓存装饰器](http://docs.pythontab.com/flask/flask0.10/patterns/viewdecorators.html#id3)

[模板装饰器](http://docs.pythontab.com/flask/flask0.10/patterns/viewdecorators.html#id4)

[终端装饰器](http://docs.pythontab.com/flask/flask0.10/patterns/viewdecorators.html#id5)





[使用 WTForms 进行表单验证](http://docs.pythontab.com/flask/flask0.10/patterns/wtforms.html)
[表单](http://docs.pythontab.com/flask/flask0.10/patterns/wtforms.html#id1)

[在视图里](http://docs.pythontab.com/flask/flask0.10/patterns/wtforms.html#id2)

[在模板中使用表单](http://docs.pythontab.com/flask/flask0.10/patterns/wtforms.html#id3)





[模板继承](http://docs.pythontab.com/flask/flask0.10/patterns/templateinheritance.html)
[基础模板](http://docs.pythontab.com/flask/flask0.10/patterns/templateinheritance.html#id2)

[子模板](http://docs.pythontab.com/flask/flask0.10/patterns/templateinheritance.html#id3)





[消息闪现](http://docs.pythontab.com/flask/flask0.10/patterns/flashing.html)
[简单的闪现](http://docs.pythontab.com/flask/flask0.10/patterns/flashing.html#id2)

[分类闪现](http://docs.pythontab.com/flask/flask0.10/patterns/flashing.html#id3)

[过滤闪现消息](http://docs.pythontab.com/flask/flask0.10/patterns/flashing.html#id4)





[用 jQuery 实现 Ajax](http://docs.pythontab.com/flask/flask0.10/patterns/jquery.html)
[加载 jQuery](http://docs.pythontab.com/flask/flask0.10/patterns/jquery.html#id1)

[我的站点在哪?](http://docs.pythontab.com/flask/flask0.10/patterns/jquery.html#id2)

[JSON 视图函数](http://docs.pythontab.com/flask/flask0.10/patterns/jquery.html#json)

[HTML 部分](http://docs.pythontab.com/flask/flask0.10/patterns/jquery.html#html)





[自定义错误页面](http://docs.pythontab.com/flask/flask0.10/patterns/errorpages.html)
[通常的错误代码](http://docs.pythontab.com/flask/flask0.10/patterns/errorpages.html#id2)

[错误处理器](http://docs.pythontab.com/flask/flask0.10/patterns/errorpages.html#id3)





[延迟加载视图](http://docs.pythontab.com/flask/flask0.10/patterns/lazyloading.html)
[转换到中央 URL 映射](http://docs.pythontab.com/flask/flask0.10/patterns/lazyloading.html#url)

[延迟加载](http://docs.pythontab.com/flask/flask0.10/patterns/lazyloading.html#id2)





[在 Flask 中使用 MongoKit](http://docs.pythontab.com/flask/flask0.10/patterns/mongokit.html)
[显式调用](http://docs.pythontab.com/flask/flask0.10/patterns/mongokit.html#id1)

[PyMongo 兼容层](http://docs.pythontab.com/flask/flask0.10/patterns/mongokit.html#pymongo)





[添加 Favicon](http://docs.pythontab.com/flask/flask0.10/patterns/favicon.html)
[参考](http://docs.pythontab.com/flask/flask0.10/patterns/favicon.html#id1)





[数据流](http://docs.pythontab.com/flask/flask0.10/patterns/streaming.html)
[基本使用](http://docs.pythontab.com/flask/flask0.10/patterns/streaming.html#id2)

[在模板中生成流](http://docs.pythontab.com/flask/flask0.10/patterns/streaming.html#id3)





[延迟请求回调](http://docs.pythontab.com/flask/flask0.10/patterns/deferredcallbacks.html)
[装饰器](http://docs.pythontab.com/flask/flask0.10/patterns/deferredcallbacks.html#id2)

[调用延迟函数](http://docs.pythontab.com/flask/flask0.10/patterns/deferredcallbacks.html#id3)

[一个实际应用的例子](http://docs.pythontab.com/flask/flask0.10/patterns/deferredcallbacks.html#id4)




[添加 HTTP Method Overrides](http://docs.pythontab.com/flask/flask0.10/patterns/methodoverrides.html)

[请求内容校验码](http://docs.pythontab.com/flask/flask0.10/patterns/requestchecksum.html)


[基于 Celery 的后台任务](http://docs.pythontab.com/flask/flask0.10/patterns/celery.html)
[安装 Celery](http://docs.pythontab.com/flask/flask0.10/patterns/celery.html#id2)

[配置 Celery](http://docs.pythontab.com/flask/flask0.10/patterns/celery.html#id3)

[最简示例](http://docs.pythontab.com/flask/flask0.10/patterns/celery.html#id4)

[运行 Celery 职程](http://docs.pythontab.com/flask/flask0.10/patterns/celery.html#id5)










