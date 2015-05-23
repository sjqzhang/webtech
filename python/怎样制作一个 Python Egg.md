
      


#### 怎样制作一个 Python Egg


    
    

    
  



![http://i1170.photobucket.com/albums/r539/liluoliluo/7f3c8c9e.jpg](http://i1170.photobucket.com/albums/r539/liluoliluo/7f3c8c9e.jpg)



前段时间在玩 OAuth2，尝试了很多个 Python 封装的 OAuth2 第三方库，感觉都不是很对自己胃口(最无语的是那个叫作 oauth2 的库，居然是 OAuth 1.0 的实现？？！！)，于是自己写了一个叫作 [py-oauth2](http://pypi.python.org/pypi/py-oauth2/) 的“库”。之所以取这个名字是因为之前用过一个叫 py-trello 的库，以为叫 py-xxx 会很洋气，现在想想真是土死了…



制作打包一个 Python Egg 并部署整个过程还蛮有意思的，下面小教程(这里以制作一个叫作 bee 的 Egg 为例)～







#### 制作



先创建一个项目文件夹:




```

1
2

```


```
$ mkdir bee-egg # 这个名字可以随便取
$ cd bee-egg

```




在里边建一个叫 bee 的文件夹(逻辑比较简单的话可以直接建一个叫作 bee.py 的文件)，放业务逻辑代码:




```

1
2

```


```
mkdir bee
touch bee/__init__.py

```




其中 bee/

#### init

.py 写几行代码:




```

1
2
3
4
5
6
7

```


```
# -*- coding: utf-8 -*-

def hoot():
    return 'hum hum'

def add(x, y):
    return x + y

```




在 bee-egg 目录中创建 Egg 的配置文件 setup.py :




```

1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20

```


```
#!/usr/bin/env python

from setuptools import setup, find_packages

setup(
    name = 'bee',
    version = '0.0.1',
    keywords = ('bee', 'egg'),
    description = 'a simple egg',
    license = 'MIT License',

    url = 'http://liluo.org',
    author = 'liluo',
    author_email = 'i@liluo.org',

    packages = find_packages(),
    include_package_data = True,
    platforms = 'any',
    install_requires = [],
)

```




*setup 中完整的参数及说明可以看 [http://docs.python.org/distutils/setupscript.html#additional-meta-data](http://docs.python.org/distutils/setupscript.html#additional-meta-data)



当前目录文件结构如下：




```

1
2
3
4

```


```
bee-egg/
        bee/
           __init__.py
        setup.py

```





#### 打包



打包是最重要却又最简单的一步，执行:




```

1

```


```
python setup.py xxxx

```




即可。比较主流的2种打包格式：




```

1
2
3

```


```
# 以下所有生成文件将在当前路径下 dist 目录中
python setup.py bdist_egg # 生成类似 bee-0.0.1-py2.7.egg，支持 easy_install 
python setup.py sdist     # 生成类似 bee-0.0.1.tar.gz，支持 pip 

```




当然还有其他非主流格式或者其他选项，可以通过下面这个命令查看：




```

1

```


```
python setup.py --help-commands

```





#### 部署到 PyPI




#### 注册 Egg



可以通过 SSH 或者 [web form](http://pypi.python.org/pypi?%3Aaction=submit_form) ，SSH 步骤：




```

1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23

```


```
$ python setup.py register
running register
running egg_info
writing bee.egg-info/PKG-INFO
writing top-level names to bee.egg-info/top_level.txt
writing dependency_links to bee.egg-info/dependency_links.txt
reading manifest file 'bee.egg-info/SOURCES.txt'
writing manifest file 'bee.egg-info/SOURCES.txt'
running check
We need to know who you are, so please choose either:
 1. use your existing login,
 2. register as a new user,
 3. have the server generate a new password for you (and email it to you), or
 4. quit
Your selection [default 1]:

Username: liluo
Password:
Registering bee to http://pypi.python.org/pypi
Server response (200): OK
I can store your PyPI login so future submissions will be faster.
(the login will be stored in /Users/luo/.pypirc)
Save your login (y/N)?y

```




*关于 register 更详细的内容可以看 [http://docs.python.org/distutils/packageindex.html](http://docs.python.org/distutils/packageindex.html)




#### 上传到 PyPI



上传文件也是有 SSH 和 web form 2种方法。



web form: 在浏览器登陆到 PyPI 点击 Your packages 中 Egg 的项目，然后选择某个版本的 files 即可看到上传界面。



SSH:




```

1
2
3
4
5
6
7
8

```


```
$ python setup.py sdist bdist_egg upload
# 这里上传的是 .tar.gz 压缩包和 .egg 文件
# 屏幕上大片信息输出，最后会看到
running upload
Submitting dist/bee-0.0.1.tar.gz to http://pypi.python.org/pypi
Server response (200): OK
Submitting dist/bee-0.0.1-py2.7.egg to http://pypi.python.org/pypi
Server response (200): OK

```





#### 安装测试



先用 pip 安装：




```

1
2
3
4
5
6
7
8
9
10

```


```
$ pip install bee
Downloading/unpacking bee
  Downloading bee-0.0.1.tar.gz
  Running setup.py egg_info for package bee

Installing collected packages: bee
  Running setup.py install for bee

Successfully installed bee
Cleaning up...

```




测试：




```

1
2
3
4
5
6
7
8
9

```


```
$ python
>>> import bee
>>> dir(bee)
['__builtins__', '__doc__', '__file__', '__name__', '__package__', '__path__', 'add', 'hoot']
>>> bee.add(1,3)
4
>>> from bee import hoot
>>> hoot()
'hum hum'

```




Yeah！现在世界人民都可以用 [bee][http://pypi.python.org/pypi/bee/](http://pypi.python.org/pypi/bee/) 这个 Python Egg 了～



卸载掉用 easy_install 试下:




```

1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19

```


```
$ pip uninstall bee
Uninstalling bee:
  /Library/Python/2.7/site-packages/bee
  /Library/Python/2.7/site-packages/bee-0.0.1-py2.7.egg-info
Proceed (y/n)? y
  Successfully uninstalled bee
$ easy_install bee
Searching for bee
Reading http://pypi.python.org/simple/bee/
Reading http://liluo.org
Best match: bee 0.0.1
Downloading http://pypi.python.org/packages/2.7/b/bee/bee-0.0.1-py2.7.egg#md5=6b5a719f1ca42367fb05d1e3eb45fbe5
Processing bee-0.0.1-py2.7.egg
Moving bee-0.0.1-py2.7.egg to /Library/Python/2.7/site-packages
Adding bee 0.0.1 to easy-install.pth file

Installed /Library/Python/2.7/site-packages/bee-0.0.1-py2.7.egg
Processing dependencies for bee
Finished processing dependencies for bee

```




可以再重做一下上面的测试，验证一下。



*关于 upload 更详细的内容可以看 [http://docs.python.org/distutils/uploading.html](http://docs.python.org/distutils/uploading.html)




#### Tips




#### pip install xxxx 时默认只会找对应的压缩包文件



当时我用 easy_install 安装没问题，但是 pip 每次都说找不到资源。我盯着 [@hongqn](http://www.douban.com/people/hongqn/) 在 PyPI 上的 CaoE 足足2分钟才反应过来，原来它是需要一个压缩包格式的文件。




#### setup.py 中调用当前目录的文件一定要加 MANIFEST.in 并将调用文件 include 进来



使用 python setup.py sdist 打包时，如果 setup.py 调用了当前目录中的文件(如README.rst):




```

1

```


```
long_description = open('README.rst').read()

```




一定要在增加 MANIFEST.in 文件并将调用文件 include 进来，否则将导致用户在 pip install 时报文件找不到的错误，示例:




```

1
2

```


```
$ cat MANIFEST.in
include README.rst

```




更详情的可以看 [http://docs.python.org/distutils/sourcedist.html#specifying-the-files-to-distribute](http://docs.python.org/distutils/sourcedist.html#specifying-the-files-to-distribute)




#### 偶尔去看一下自己的 Egg 在 PyPI 上的下载数也挺欢乐的





```
Version: 0.0.3
py-oauth2-0.0.3.tar.gz(251)
py_oauth2-0.0.3-py2.7.egg(218)

Version: 0.0.2
py-oauth2-0.0.2.tar.gz(376)
py_oauth2-0.0.2-py2.6.egg(435)
py_oauth2-0.0.2-py2.7.egg(304)

Version: 0.0.1
py_oauth2-0.0.1-py2.6.egg(478)

```






    






  
Status updating...

  
[@liluo](https://github.com/liluo) on GitHub
  
  
#### Latest Tweets


  
Status updating...

  
[Follow @liluoliluo](http://twitter.com/liluoliluo)
  



