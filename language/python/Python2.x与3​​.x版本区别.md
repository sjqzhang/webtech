 
#### Python2.x与3​​.x版本区别

  Python的3​​.0版本，常被称为Python 3000，或简称Py3k。相对于Python的早期版本，这是一个较大的升级。 


为了不带入过多的累赘，Python 3.0在设计的时候没有考虑向下相容。


 许多针对早期Python版本设计的程式都无法在Python 3.0上正常执行。


 为了照顾现有程式，Python 2.6作为一个过渡版本，基本使用了Python 2.x的语法和库，同时考虑了向Python 3.0的迁移，允许使用部分Python 3.0的语法与函数。

  新的Python程式建议使用Python 3.0版本的语法。 除非执行环境无法安装Python 3.0或者程式本身使用了不支援Python 3.0的第三方库。目前不支援Python 3.0的第三方库有Twisted, py2exe, PIL等。


 大多数第三方库都正在努力地相容Python 3.0版本。即使无法立即使用Python 3.0，也建议编写相容Python 3.0版本的程式，然后使用Python 2.6, Python 2.7来执行。

 

#### 主要变化

 Python 3.0的变化主要在以下几个方面:

 print语句没有了，取而代之的是print()函数。 Python 2.6与Python 2.7部分地支持这种形式的print语法。在Python 2.6与Python 2.7里面，以下三种形式是等价的： 

 
```

print "fish"
print ("fish") #注意print后面有个空格
print("fish") #print()不能带有任何其它参数

```
 然而，Python 2.6实际已经支持新的print()语法：

 
```

from __future__ import print_function
print("fish", "panda", sep=', ')

```
 新的str类别表示一个Unicode字串，相当于Python 2.x版本的unicode类别。而位元组序列则用类似b"abc"的语法表示，用bytes类表示，相当于Python 2.x的str类别。

 现在两种类别不能再隐式地自动转换，因此在Python 3.x里面"fish"+b"panda"是错误。正确的写法是"fish"+b"panda".decode("utf-8")。 Python 2.6可以自动地将位元组序列识别为Unicode字串，方法是： 

 
```

from __future__ import unicode_literals
print(repr("fish"))

```
 除法运算符"/"在Python 3.x内总是返回浮点数。而在Python 2.6内会判断被除数与除数是否是整数。如果是整数会返回整数值，相当于整除;浮点数则返回浮点数值。

 为了让Python 2.6统一返回浮点数值，可以： 

 
```

from __future__ import division
print(3/2)

```
 
 捕获异常的语法由except exc, var改为except exc as var。使用语法except (exc1, exc2) as var可以同时捕获多种类别的异常。 Python 2.6已经支援这两种语法。
  集合(set) 的新写法：{1,2,3,4}。注意{}仍然表示空的字典(dict) 。 
  字典推导式(Dictionary comprehensions) {expr1: expr2 for k, v in d}，这个语法等价于
 

```

result={}
for k, v in d.items():
    result[expr1]=expr2
return result

```
  集合推导式(Set Comprehensions) {expr1 for x in stuff}。这个语法等价于： 

 
```

result = set()
for x in stuff:
    result.add(expr1)
return result

```
 
 八进制数必须写成0o777，原来的形式0777不能用了；二进制必须写成0b111。新增了一个bin()函数用于将一个整数转换成二进制字串。 Python 2.6已经支援这两种语法。
  dict.keys(), dict.values​​(), dict.items(), map(), filter(), range(), zip()不再返回列表，而是迭代器。
  如果两个物件之间没有定义明确的有意义的顺序。使用, =比较它们会投掷异常。比如1  

 可以注释函数的参数与返回值。此特性可方便IDE对原始码进行更深入的分析。例如给参数增加类别讯息： 
 

```

def sendMail(from_: str, to: str, title: str, body: str) -> bool:
    pass

```
 合并int与long类型。
 多个模块被改名（根据PEP8）：
 

|旧的名字|新的名字|
|:--|:--|
|_winreg|winreg|
|ConfigParser|configparser|
|copy_reg|copyreg|
|Queue|queue|
|SocketServer|socketserver|
|repr|reprlib|

 StringIO模块现在被合并到新的io模组内。 new, md5, gopherlib等模块被删除。 Python 2.6已经支援新的io模组。

 httplib, BaseHTTPServer, CGIHTTPServer, SimpleHTTPServer, Cookie, cookielib被合并到http包内。

 取消了exec语句，只剩下exec()函数。 Python 2.6已经支援exec()函数。
 

