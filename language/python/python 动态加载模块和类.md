
	
		



	
		

			
##1，使用系统函数

```
import()

stringmodule = __import__('string')
```

##2，使用imp 模块

```
import imp

stringmodule = imp.loadmodule('string',*imp.findmodule('string'))
```

##3，使用exec

```
importstring = "import string as stringmodule"

exec importstring


import importlib


importlib是import的python实现


1、获取模块对象

m1 = importlib.importmodule("sites.sitespybuild")

print(m1)


输出：





2、获取类对象


aclass = getattr(m1, "sites_pybuild")


print(aclass)


输出：




3、实例化对象


p = aclass("test")

相当于直接使用p = sites.sitespybuild.sitespybuild("test")




下面的文章也可以实现反射，主要思想是先导入module，然后使用globals()["classname"]获得类定义，再使用此类定义来初始化对象。

```

http://blog.csdn.net/lokibalder/article/details/3459722


python是一个脚本语言，它不象java一样有一个专门的包来处理反射。以 下是我们来看看python是怎么做到类似java一样的反射功能的。我在网上搜了一下，因为在网上没有很明确的文章说要怎么做，所以，我写了这篇，希望 新手不要向我一样走弯路，因为是新手，所以，我在这里没能考虑到异常的处理。

－、动态加载类

说到动态的加载类，那就不得不说，动态的加态模块。因为只能成功的加模了模块才能加载到类。我们可以用，以下的代码来动态的加载类

Python代码

＃modulePath是模块文件的路径+模块的文件名。

aMod = sys.modules[modulePath]

当我们动态的加载了这个模块后，我们就可以从这个模块中取得你要的类了，感觉上这个方法有点像java中从类中反射出方法。下以的代码可以

Python代码

aClass= getattr(aMod, className)

二、动态实例化类

得到了class对象之后，在python就可以很方便的得到他的对像，以下这代码

Python代码 obj = new.instance(aClass)


三、得到对象、类或模块中的所有属性方法

在java的反射中我们可以得到对象中的所有属性和方法，在python中，因为是脚本语言，所以我们要得到这个些属性方法更加的方便，我们可以用以下的代码获得类，对象，模块中的所有的属性的名称

Python代码

dir(aClass)

我们得到这些属性的名称后，可以用上面得到class 的方法来获得这个对象里的所有属性

四、动态运行方法

动态的运行方法，我们也非常的方便，因为python是脚本语言，感觉起来很象javascript的方式来调用方法。

Python代码

apply(objFunc,arrArgs)

代码中objFunc是用getAttr从实例化后的对象中取得到function，而arrArgs是我们的参数，和javascript一样，他是数组一样的对象。

有了这些方法，我们就可以做和java反射一样做的事了，我在网上找到了一个模块，小改了一下，使得用这个模块可以很方便的用类名实例化一个实例和运行这个实例中的方法，如果大家需要可以down下来看看





















