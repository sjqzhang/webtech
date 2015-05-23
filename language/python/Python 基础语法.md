 Python 基础语法
  Python语言与Perl，C和Java等语言有许多相似之处。但是，也存在一些差异。

 在本章中我们将来学习Python的基础语法，让你快速学会Python编程。

 

 

#### 第一个Python程序

 
#### 交互式编程

 交互式编程不需要创建脚本文件，是通过 Python 解释器的交互模式进来编写代码。


 linux上你只需要在命令行中输入 Python 命令即可启动交互式编程,提示窗口如下：

 
```

$ python
Python 2.4.3 (#1, Nov 11 2010, 13:34:43)
[GCC 4.1.2 20080704 (Red Hat 4.1.2-48)] on linux2
Type "help", "copyright", "credits" or "license" for more information.
>>>

```
  Window上在安装Python时已经已经安装了默认的交互式编程客户端，提示窗口如下：

 ![http://www.w3cschool.cc/wp-content/uploads/2013/11/python-shell.jpg](http://www.w3cschool.cc/wp-content/uploads/2013/11/python-shell.jpg)

 在 python 提示符中输入以下文本信息，然后按 Enter 键查看运行效果：

 
```

>>> print "Hello, Python!";

```
 在 Python 2.4.3 版本中,以上事例输出结果如下：

 
```

Hello, Python!

```
 如果您运行的是新版本的Python，那么你就需要在print语句中使用括号如：

 
```

>>>  print ("Hello, Python!");

```
 
#### 脚本式编程

 通过脚本参数调用解释器开始执行脚本，直到脚本执行完毕。当脚本执行完成后，解释器不再有效。

 让我们写一个简单的Python脚本程序。所有Python文件将以.py为扩展名。将以下的源代码拷贝至test.py文件中。

 
```

print "Hello, Python!";

```
 这里，假设你已经设置了Python解释器PATH变量。使用以下命令运行程序：

 
```

$ python test.py

```
 输出结果：

 
```

Hello, Python!

```
 让我们尝试另一种方式来执行Python脚本。修改test.py文件，如下所示：

 
```

#!/usr/bin/python

print "Hello, Python!";

```
 这里，假定您的Python解释器在/usr/bin目录中，使用以下命令执行脚本：

 
```

$ chmod +x test.py     # 脚本文件添加可执行权限
$./test.py

```
 输出结果：

 
```

Hello, Python!

```
 

#### Python标识符

 在python里，标识符有字母、数字、下划线组成。

 在python中，所有标识符可以包括英文、数字以及下划线（_），但不能以数字开头。

 python中的标识符是区分大小写的。

 以下划线开头的标识符是有特殊意义的。以单下划线开头（_foo）的代表不能直接访问的类属性，需通过类提供的接口进行访问，不能用"from xxx import *"而导入；

 以双下划线开头的（__foo）代表类的私有成员；以双下划线开头和结尾的（__foo__）代表python里特殊方法专用的标识，如__init__（）代表类的构造函数。

 

#### Python保留字符

 下面的列表显示了在Python中的保留字。这些保留字不能用作常数或变数，或任何其他标识符名称。

 所有Python的关键字只包含小写字母。

 

|and|exec|not|
|:--|:--|:--|
|assert|finally|or|
|break|for|pass|
|class|from|print|
|continue|global|raise|
|def|if|return|
|del|import|try|
|elif|in|while|
|else|is|with |
|except|lambda|yield|



#### 行和缩进

 学习Python与其他语言最大的区别就是，Python的代码块不使用大括号（{}）来控制类，函数以及其他逻辑判断。python最具特色的就是用缩进来写模块。

 缩进的空白数量是可变的，但是所有代码块语句必须包含相同的缩进空白数量，这个必须严格执行。如下所示：

 
```

if True:
    print "True"
else:
  print "False"
 
```
 以下代码将会执行错误：

 
```

 if True:
    print "Answer"
    print "True"
else:
    print "Answer"
  print "False"
   
```
 因此，在Python的代码块中必须使用相同数目的行首缩进空格数。

 以下实例包含了相同数目的行首缩进代码语句块的例子：

 
```

#!/usr/bin/python

import sys

try:
  # open file stream
  file = open(file_name, "w")
except IOError:
  print "There was an error writing to", file_name
  sys.exit()
print "Enter '", file_finish,
print "' When finished"
while file_text != file_finish:
  file_text = raw_input("Enter text: ")
  if file_text == file_finish:
    # close the file
    file.close
    break
  file.write(file_text)
  file.write("\n")
file.close()
file_name = raw_input("Enter filename: ")
if len(file_name) == 0:
  print "Next time please enter something"
  sys.exit()
try:
  file = open(file_name, "r")
except IOError:
  print "There was an error reading file"
  sys.exit()
file_text = file.read()
file.close()
print file_text
  
```
 

#### 多行语句

 Python语句中一般以新行作为为语句的结束符。

 但是我们可以使用斜杠（ \）将一行的语句分为多行显示，如下所示：

 
```

 total = item_one + \ 
        item_two + \
        item_three
   
```
 语句中包含[], {} 或 () 括号就不需要使用多行连接符。如下实例：

 
```

 days = ['Monday', 'Tuesday', 'Wednesday',
        'Thursday', 'Friday']

```
 

#### Python 引号

 Python 接收单引号(' )，双引号(" )，三引号(''' """) 来表示字符串，引号的开始与结束必须的相同类型的。 

 其中三引号可以由多行组成，编写多行文本的快捷语法，常用语文档字符串，在文件的特定地点，被当做注释。

 
```

word = 'word'
sentence = "This is a sentence."
paragraph = """This is a paragraph. It is
made up of multiple lines and sentences."""

```
 

#### Python注释

 python中单行注释采用 # 开头。

 python没有块注释，所以现在推荐的多行注释也是采用的 #比如：

 
```

#!/usr/bin/python

# First comment
print "Hello, Python!";  # second comment

```
 输出结果：

 
```

Hello, Python!

```
 注释可以在语句或表达式行末：

 
```

name = "Madisetti" # This is again comment

```
 多条评论：

 
```

# This is a comment.
# This is a comment, too.
# This is a comment, too.
# I said that already.

```
 

#### Python空行

 函数之间或类的方法之间用空行分隔，表示一段新的代码的开始。类和函数入口之间也用一行空行分隔，以突出函数入口的开始。

 空行与代码缩进不同，空行并不是Python语法的一部分。书写时不插入空行，Python解释器运行也不会出错。但是空行的作用在于分隔两段不同功能或含义的代码，便于日后代码的维护或重构。


记住：空行也是程序代码的一部分。

 

#### 等待用户输入

 下面的程序在按回车键后就会等待用户输入：

 
```

#!/usr/bin/python

raw_input("\n\nPress the enter key to exit.")

```
 以上代码中 ，"\n\n"在结果输出前会输出两个新的空行。一旦用户按下键时，程序将退出。

 

#### 同一行显示多条语句

 Python可以在同一行中使用多条语句，语句之间使用分号(;)分割，以下是一个简单的实例： 
```

import sys; x = 'foo'; sys.stdout.write(x + '\n')

```
 

#### 多个语句构成代码组

 缩进相同的一组语句构成一个代码块，我们称之代码组。

 像if、while、def和class这样的复合语句，首行以关键字开始，以冒号( : )结束，该行之后的一行或多行代码构成代码组。

 我们将首行及后面的代码组称为一个子句(clause)。

 如下实例：

 
```

if expression : 
   suite 
elif expression :  
   suite  
else :  
   suite 

```
 

#### 命令行参数

 很多程序可以执行一些操作来查看一些基本信，Python可以使用-h参数查看各参数帮助信息：

 
```

$ python -h 
usage: python [option] ... [-c cmd | -m mod | file | -] [arg] ... 
Options and arguments (and corresponding environment variables): 
-c cmd : program passed in as string (terminates option list) 
-d     : debug output from parser (also PYTHONDEBUG=x) 
-E     : ignore environment variables (such as PYTHONPATH) 
-h     : print this help message and exit 
 
[ etc. ] 

```
 

