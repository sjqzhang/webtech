

#### 多个站点


Django 的多站点系统是一种通用框架，它让你可以在同一个数据库和同一个Django项目下操作多个网站?这是一个抽象概念，理解起来可能有点困难，因此我们从几个让它能派上用场的实际情景入手?/p>





#### 情景1：多站点间复用数?/h3>


正如我们在第一章里所讲，Django 构建的网?LJWorld.com ?Lawrance.com 是用由同一个新闻组织控制的?肯萨斯州劳伦斯市?劳伦斯日报世?/em> 报纸?LJWorld.com 主要做新闻，?Lawrence.com 关注本地娱乐?然而有时，编辑可能需要把一篇文章发布到 两个 网站上?/p>
解决此问题的死脑筋方法可能是使用每个站点分别使用不同的数据库，然后要求站点维护者把同一篇文章发布两次： 一次为 LJWorld.com，另一次为Lawrence.com?但这对站点管理员来说是低效率的，而且为同一篇文章在数据库里保留多个副本也显得多余?/p>



更好的解决方案？ 两个网站用的是同一个文章数据库，并将每一篇文章与一个或多个站点用多对多关系关联起来?Django 站点框架提供数据库表来记载哪些文章可以被关联?它是一个把数据与一个或多个站点关联起来的钩子?/p>










#### 情景2：把网站的名?域名保存在一个地?/h3>


LJWorld.com ?Lawrence.com 都有邮件提醒功能，使读者注册后可以在新闻发生后立即收到通知?这是一种完美的的机制： 某读者提交了注册表单，然后马上就受到一封内容是“感谢您的注册”的邮件?/p>



把这个注册过程的代码实现两遍显然是低效、多余的，因此两个站点在后台使用相同的代码?但感谢注册的通知在两个网站中需要不同?通过使用 Site 对象，我们通过使用当前站点?name (例如 'LJWorld.com' )?domain (例如 'www.ljworld.com' )可以把感谢通知抽提出来?/p>



Django 的多站点框架为你提供了一个位置来存储 Django 项目中每个站点的 name ?domain ，这意味着你可以用同样的方法来重用这些值?/p>








#### 如何使用多站点框?/h3>


多站点框架与其说是一个框架，不如说是一系列约定?所有的一切都基于两个简单的概念?/p>




位于 django.contrib.sites ?Site 模型?domain ?name 两个字段?/p>






SITE_ID 设置指定了与特定配置文件相关联的 Site 对象之数据库 ID?/p>





如何运用这两个概念由你决定，?Django 是通过几个简单的约定自动使用的?/p>



安装多站点应用要执行以下几个步骤?/p>




?'django.contrib.sites' 加入?INSTALLED_APPS 中?/p>






运行 manage.py syncdb 命令?django_site 表安装到数据库中?这样也会建立默认的站点对象，域名?example.com?/p>






?tt class="docutils literal">example.com改成你自己的域名，然后通过Django admin站点或Python API来添加其?tt class="docutils literal">Site对象?为该 Django 项目支撑的每个站（或域）创建一?Site 对象?/p>






在每个设置文件中定义一?SITE_ID 变量?该变量值应当是该设置文件所支撑的站?tt class="docutils literal">Site 对象的数据库 ID?/p>










#### 多站点框架的功能


下面几节讲述的是用多站点框架能够完成的几项工作?/p>





#### 多个站点的数据重?/h4>


正如在情景一中所解释的，要在多个站点间重用数?仅需在模型中?Site 添加一?多对多字?/span> 即可，例如：



```

from django.db import models
from django.contrib.sites.models import Site

class Article(models.Model):
    headline = models.CharField(max_length=200)
    # ...
    sites = models.ManyToManyField(Site)

```

这是在数据库中为多个站点进行文章关联操作的基础步骤?在适当的位置使用该技术，你可以在多个站点中重复使用同一?Django 视图代码?继续 Article 模型范例，下面是一个可能的 article_detail 视图?/p>




```

from django.conf import settings
from django.shortcuts import get_object_or_404
from mysite.articles.models import Article

def article_detail(request, article_id):
    a = get_object_or_404(Article, id=article_id, sites__id=settings.SITE_ID)
    # ...

```

该视图方法是可重用的，因为它根据 SITE_ID 设置的值动态检?articles 站点?/p>



例如?LJWorld.coms 设置文件中有有个 SITE_ID 设置?1 ，?Lawrence.coms 设置文件中有?SITE_ID 设置?2 。如果该视图?LJWorld.coms 处于激活状态时被调用，那么它将把查找范围局限于站点列表包括 LJWorld.com 在内的文章?/p>








#### 将内容与单一站点相关?/h4>


同样，你也可以使?外键 在多对一关系中将一个模型关联到 Site 模型?/p>



举例来说，如果某篇文章仅仅能够出现在一个站点上，你可以使用下面这样的模型：



```

from django.db import models
from django.contrib.sites.models import Site

class Article(models.Model):
    headline = models.CharField(max_length=200)
    # ...
    site = models.ForeignKey(Site)

```

这与前一节中介绍的一样有益?/p>








#### 从视图钩挂当前站?/h4>


在底层，通过?Django 视图中使用多站点框架，你可以让视图根据调用站点不同而完成不同的工作，例如：



```

from django.conf import settings

def my_view(request):
    if settings.SITE_ID == 3:
        # Do something.
    else:
        # Do something else.

```

当然，像那样对站?ID 进行硬编码是比较难看的?略为简洁的完成方式是查看当前的站点域：



```

from django.conf import settings
from django.contrib.sites.models import Site

def my_view(request):
    current_site = Site.objects.get(id=settings.SITE_ID)
    if current_site.domain == 'foo.com':
        # Do something
    else:
        # Do something else.

```

?Site 对象中获?settings.SITE_ID 值的做法比较常见，因?Site 模型管理?(Site.objects ) 具备一?get_current() 方法?下面的例子与前一个是等效的：



```

from django.contrib.sites.models import Site

def my_view(request):
    current_site = Site.objects.get_current()
    if current_site.domain == 'foo.com':
        # Do something
    else:
        # Do something else.

```

注意


在这个最后的例子里，你不用导?django.conf.settings ?/p>








#### 获取当前域用于呈?/h4>


正如情景二中所解释的那样，依据DRY原则(不做重复工作)，你只需在一个位置储存站名和域名，然后引用当?Site 对象?name ?domain 。例如： 例如?/p>




```

from django.contrib.sites.models import Site
from django.core.mail import send_mail

def register_for_newsletter(request):
    # Check form values, etc., and subscribe the user.
    # ...
    current_site = Site.objects.get_current()
    send_mail('Thanks for subscribing to %s alerts' % current_site.name,
        'Thanks for your subscription. We appreciate it.\n\n-The %s team.' % current_site.name,
        'editor@%s' % current_site.domain,
        [user_email])
    # ...

```

继续我们正在讨论?LJWorld.com ?Lawrence.com 例子，在Lawrence.com 该邮件的标题行是“感谢注?Lawrence.com 提醒信件”??LJWorld.com ，该邮件标题行是“感谢注?LJWorld.com 提醒信件”?这种站点关联行为方式对邮件信息主体也同样适用?/p>



完成这项工作的一种更加灵活（但更重量级）的方法是使用 Django 的模板系统?假定 Lawrence.com ?LJWorld.com 各自拥有不同的模板目录（ TEMPLATE_DIRS ），你可将工作轻松地转交给模板系统，如下所示：



```

from django.core.mail import send_mail
from django.template import loader, Context

def register_for_newsletter(request):
    # Check form values, etc., and subscribe the user.
    # ...
    subject = loader.get_template('alerts/subject.txt').render(Context({}))
    message = loader.get_template('alerts/message.txt').render(Context({}))
    send_mail(subject, message, 'do-not-reply@example.com', [user_email])
    # ...

```

本例中，你不得不?LJWorld.com ?Lawrence.com 的模板目录中都创建一?subject.txt ?message.txt 模板?正如之前所说，该方法带来了更大的灵活性，但也带来了更多复杂性?/p>



尽可能多的利?Site 对象是减少不必要的复杂、冗余工作的好办法?/p>











#### 当前站点管理?/h3>


如果 站点 在你的应用中扮演很重要的角色，请考虑在你的模型中使用方便?CurrentSiteManager ?这是一个模型管理器（见第十章），它会自动过滤使其只包含与当前站点相关联的对象?/p>



通过显示地将 CurrentSiteManager 加入模型中以使用它?例如?/p>




```

from django.db import models
from django.contrib.sites.models import Site
from django.contrib.sites.managers import CurrentSiteManager

class Photo(models.Model):
    photo = models.FileField(upload_to='/home/photos')
    photographer_name = models.CharField(max_length=100)
    pub_date = models.DateField()
    site = models.ForeignKey(Site)
    objects = models.Manager()
    on_site = CurrentSiteManager()

```

通过该模型， Photo.objects.all() 将返回数据库中所有的 Photo 对象，?Photo.on_site.all() 仅根?SITE_ID 设置返回与当前站点相关联?Photo 对象?/p>



换言之，以下两条语句是等效的?/p>




```

Photo.objects.filter(site=settings.SITE_ID)
Photo.on_site.all()

```

CurrentSiteManager 是如何知?Photo 的哪个字段是 Site 呢？缺省情况下，它会查找一个叫?site 的字段。如果你的模型包含了名字不是site?em>外键或?tt class="docutils literal">多对?/span>关联，你需要把它作为参数传?tt class="docutils literal">CurrentSiteManager以显示指明。下面的模型拥有一?tt class="docutils literal">publish_on字段?/p>

```

from django.db import models
from django.contrib.sites.models import Site
from django.contrib.sites.managers import CurrentSiteManager

class Photo(models.Model):
    photo = models.FileField(upload_to='/home/photos')
    photographer_name = models.CharField(max_length=100)
    pub_date = models.DateField()
    publish_on = models.ForeignKey(Site)
    objects = models.Manager()
    on_site = CurrentSiteManager('publish_on')

```

如果试图使用 CurrentSiteManager 并传入一个不存在的字段名?Django 将引发一?ValueError 异常?/p>



注意


即便是已经使用了 CurrentSiteManager ，你也许还想在模型中拥有一个正常的（非站点相关）的 管理?/span> 。正如在附录 B 中所解释的，如果你手动定义了一个管理器，那?Django 不会为你创建全自动的 objects = models.Manager() 管理器?/p>



同样，Django 的特定部分（?Django 超级管理站点和通用视图）使用在模型中定??em>第一?/em>管理器，因此如果希望管理站点能够访问所有对象（而不是仅仅站点特有对象），请于定?CurrentSiteManager 之前在模型中放入 objects = models.Manager() ?/p>










#### Django如何使用多站点框?/h3>


尽管并不是必须的，我们还是强烈建议使用多站点框架，因?Django 在几个地方利用了它?即使只用 Django 来支持单个网站，你也应该花一点时间用 domain ?name 来创建站点对象，并将 SITE_ID 设置指向它的 ID ?/p>



以下讲述的是 Django 如何使用多站点框架：



在重定向框架中（见后面的重定向一节），每一个重定向对象都与一个特定站点关联??Django 搜索重定向的时候，它会考虑当前?SITE_ID ?/p>






在注册框架中，每个注释都与特定站点相关?每个注释被显示时，其 site 被设置为当前?SITE_ID ，而当通过适当的模板标签列出注释时，只有当前站点的注释将会显示?/p>






?flatpages 框架?(参见后面?Flatpages 一节），每?flatpage 都与特定的站点相关联?创建 flatpage 时，你都将指定它?site ，?flatpage 中间件在获取 flatpage 以显示它的过程中，将查看当前?SITE_ID ?/p>






?syndication 框架中（参阅?13 章）?title ?description 的模板会自动访问变量 {{ site }} ，它其实是代表当前站点的 Site 对象?而且，如果你不指定一个合格的domain的话，提供目录URL的钩子将会使用当前“Site”对象的domain?/p>






在权限框架中（参见十四章），视图django.contrib.auth.views.login把当?tt class="docutils literal">Site名字和对象分别以{{ site_name }}?tt class="docutils literal">{{ site }}的形式传给了模板?/p>










