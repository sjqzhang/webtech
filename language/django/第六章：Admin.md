

#### 激活管理界面


Django管理站点完全是可选择的，因为仅仅某些特殊类型的站点才需要这些功能。 这意味着你需要在你的项目中花费几个步骤去激活它。


第一步，对你的settings文件做如下这些改变：




将'django.contrib.admin'加入setting的INSTALLED_APPS配置中 （INSTALLED_APPS中的配置顺序是没有关系的, 但是我们喜欢保持一定顺序以方便人来阅读）







保证INSTALLED_APPS中包含'django.contrib.auth'，'django.contrib.contenttypes'和'django.contrib.sessions'，Django的管理工具需要这3个包。 (如果你跟随本文制作mysite项目的话，那么请注意我们在第五章的时候把这三项INSTALLED_APPS条目注释了。现在，请把注释取消。)







确保MIDDLEWARE_CLASSES 包含'django.middleware.common.CommonMiddleware' 、'django.contrib.sessions.middleware.SessionMiddleware' 和'django.contrib.auth.middleware.AuthenticationMiddleware' 。(再次提醒，如果有跟着做mysite的话，请把在第五章做的注释取消。)





运行 python manage.py syncdb 。这一步将生成管理界面使用的额外数据库表。 当你把'django.contrib.auth'加进INSTALLED_APPS后，第一次运行syncdb命令时, 系统会请你创建一个超级用户。 如果你不这么作，你需要运行python manage.py createsuperuser来另外创建一个admin的用户帐号，否则你将不能登入admin (提醒一句: 只有当INSTALLED_APPS包含'django.contrib.auth'时，python manage.py createsuperuser这个命令才可用.)


第三，将admin访问配置在URLconf(记住，在urls.py中). 默认情况下，命令django-admin.py startproject生成的文件urls.py是将Django admin的路径注释掉的，你所要做的就是取消注释。 请注意，以下内容是必须确保存在的：



```

# Include these import statements...
from django.contrib import admin
admin.autodiscover()

# And include this URLpattern...
urlpatterns = patterns('',
    # ...
    (r'^admin/', include(admin.site.urls)),
    # ...
)

```

当这一切都配置好后，现在你将发现Django管理工具可以运行了。 启动开发服务器(如前：`` python manage.py runserver`` )，然后在浏览器中访问：http://127.0.0.1:8000/admin/




