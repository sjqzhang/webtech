 
#### Python 模块

 模块让你能够有逻辑地组织你的Python代码段。

 把相关的代码分配到一个 模块里能让你的代码更好用，更易懂。

 模块也是Python对象，具有随机的名字属性用来绑定或引用。

 简单地说，模块就是一个保存了Python代码的文件。模块能定义函数，类和变量。模块里也能包含可执行的代码。

 

#### 例子



 一个叫做aname的模块里的Python代码一般都能在一个叫aname.py的文件中找到。下例是个简单的模块support.py。

 
```

def print_func( par ):
   print "Hello : ", par
   return

```





#### import 语句

 想使用Python源文件，只需在另一个源文件里执行import语句，语法如下：

 
```

import module1[, module2[,... moduleN]

```
  当解释器遇到import语句，如果模块在当前的搜索路径就会被导入。 


搜索路径是一个解释器会先进行搜索的所有目录的列表。如想要导入模块hello.py，需要把命令放在脚本的顶端：

 
```

#coding=utf-8
#!/usr/bin/python
 
# 导入模块
import support
 
# 现在可以调用模块里包含的函数了
support.print_func("Zara")

```
  以上实例输出结果：

 
```

Hello : Zara

```
 一个模块只会被导入一次，不管你执行了多少次import。这样可以防止导入模块被一遍又一遍地执行。

 



#### From…import 语句

 Python的from语句让你从模块中导入一个指定的部分到当前命名空间中。语法如下：

 
```

from modname import name1[, name2[, ... nameN]]

```
 例如，要导入模块fib的fibonacci函数，使用如下语句：

 
```

from fib import fibonacci

```
 这个声明不会把整个fib模块导入到当前的命名空间中，它只会将fib里的fibonacci单个引入到执行这个声明的模块的全局符号表。

 



#### From…import* 语句

  把一个模块的所有内容全都导入到当前的命名空间也是可行的，只需使用如下声明： 

 
```

from modname import *

```
 这提供了一个简单的方法来导入一个模块中的所有项目。然而这种声明不该被过多地使用。 






#### 定位模块

 当你导入一个模块，Python解析器对模块位置的搜索顺序是：

 
当前目录
 如果不在当前目录，Python则搜索在shell变量PYTHONPATH下的每个目录
。 如果都找不到，Python会察看默认路径。UNIX下，默认路径一般为/usr/local/lib/python/
 
 模块搜索路径存储在system模块的sys.path变量中。变量里包含当前目录，PYTHONPATH和由安装过程决定的默认目录。

 



#### PYTHONPATH变量

 作为环境变量，PYTHONPATH由装在一个列表里的许多目录组成。PYTHONPATH的语法和shell变量PATH的一样。

 在Windows系统，典型的PYTHONPATH如下：

 
```

set PYTHONPATH=c:\python20\lib;

```
 在UNIX系统，典型的PYTHONPATH如下：

 
```

set PYTHONPATH=/usr/local/lib/python
```
 



#### 命名空间和作用域

 变量是拥有匹配对象的名字（标识符）。命名空间是一个包含了变量名称们（键）和它们各自相应的对象们（值）的字典。

 一个Python表达式可以访问局部命名空间和全局命名空间里的变量。如果一个局部变量和一个全局变量重名，则局部变量会覆盖全局变量。

 每个函数都有自己的命名空间。类的方法的作用域规则和通常函数的一样。

 Python会智能地猜测一个变量是局部的还是全局的，它假设任何在函数内赋值的变量都是局部的。

 因此，如果要给全局变量在一个函数里赋值，必须使用global语句。

 global VarName的表达式会告诉Python， VarName是一个全局变量，这样Python就不会在局部命名空间里寻找这个变量了。

 例如，我们在全局命名空间里定义一个变量money。我们再在函数内给变量money赋值，然后Python会假定money是一个局部变量。然而，我们并没有在访问前声明一个局部变量money，结果就是会出现一个UnboundLocalError的错误。取消global语句的注释就能解决这个问题。 

 
```

#coding=utf-8
#!/usr/bin/python
 
Money = 2000
def AddMoney():
   # 想改正代码就取消以下注释:
   # global Money
   Money = Money + 1
 
print Money
AddMoney()
print Money

```
 



#### dir()函数

 dir()函数一个排好序的字符串列表，内容是一个模块里定义过的名字。

 返回的列表容纳了在一个模块里定义的所有模块，变量和函数。如下一个简单的实例：

 
```

#coding=utf-8
#!/usr/bin/python
 
# 导入内置math模块
import math
 
content = dir(math)
 
print content;
```
 以上实例输出结果：

 
```

['__doc__', '__file__', '__name__', 'acos', 'asin', 'atan', 
'atan2', 'ceil', 'cos', 'cosh', 'degrees', 'e', 'exp', 
'fabs', 'floor', 'fmod', 'frexp', 'hypot', 'ldexp', 'log',
'log10', 'modf', 'pi', 'pow', 'radians', 'sin', 'sinh', 
'sqrt', 'tan', 'tanh']
```
 在这里，特殊字符串变量__name__指向模块的名字，__file__指向该模块的导入文件名。

 



#### globals()和locals()函数

 根据调用地方的不同，globals()和locals()函数可被用来返回全局和局部命名空间里的名字。

 如果在函数内部调用locals()，返回的是所有能在该函数里访问的命名。

 如果在函数内部调用globals()，返回的是所有在该函数里能访问的全局名字。

 两个函数的返回类型都是字典。所以名字们能用keys()函数摘取。

 



#### reload()函数

 当一个模块被导入到一个脚本，模块顶层部分的代码只会被执行一次。

 因此，如果你想重新执行模块里顶层部分的代码，可以用reload()函数。该函数会重新导入之前导入过的模块。语法如下：

 
```

reload(module_name)
```
 在这里，module_name要直接放模块的名字，而不是一个字符串形式。比如想重载hello模块，如下：

 
```

reload(hello)
```
 



#### Python中的包

 包是一个分层次的文件目录结构，它定义了一个由模块及子包，和子包下的子包等组成的Python的应用环境。

 考虑一个在Phone目录下的pots.py文件。这个文件有如下源代码：

 
```

#coding=utf-8
#!/usr/bin/python
 
def Pots():
   print "I'm Pots Phone"
   
```
 同样地，我们有另外两个保存了不同函数的文件：

 
Phone/Isdn.py 含有函数Isdn()
 Phone/G3.py 含有函数G3()
 
现在，在Phone目录下创建file __init__.py：

 
Phone/__init__.py
 
当你导入Phone时，为了能够使用所有函数，你需要在__init__.py里使用显式的导入语句，如下：

 
```

from Pots import Pots
from Isdn import Isdn
from G3 import G3

```
 当你把这些代码添加到__init__.py之后，导入Phone包的时候这些类就全都是可用的了。

 
```

#coding=utf-8
#!/usr/bin/python
 
# Now import your Phone Package.
import Phone
 
Phone.Pots()
Phone.Isdn()
Phone.G3()

```
  以上实例输出结果：

 
```

I'm Pots Phone
I'm 3G Phone
I'm ISDN Phone

```
  如上，为了举例，我们只在每个文件里放置了一个函数，但其实你可以放置许多函数。你也可以在这些文件里定义Python的类，然后为这些类建一个包。

 

