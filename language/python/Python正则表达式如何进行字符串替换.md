


[Python](http://developer.51cto.com/art/200509/3940.htm)正则表达式在使用中会经常应用到字符串替换的代码。有很多人都不知道如何解决这个问题，下面的代码就告诉你其实这个问题无比的简单，希望你有所收获。



1.替换所有匹配的子串用newstring替换subject中所有与正则表达式regex匹配的子串







```
result, number = re.subn(regex, newstring, subject) 

```


2.替换所有匹配的子串（使 用正则表达式对象）







```

rereobj = re.compile(regex)  


result, number = reobj.subn(newstring, subject)字符串拆分 



```


Python字符串拆分







```
reresult = re.split(regex, subject) 

```


字符串拆分（使用正则表示式对象）



```

rereobj = re.compile(regex)  


result = reobj.split(subject)匹配 



```


下面列出Python正则表达式的几种匹配用法：



1.测试正则表达式是否 匹配字符串的全部或部分regex=ur"..." #正则表达式



```

if re.search(regex, subject):  

do_something() 


```


else:do_anotherthing()2.测试正则表达式是否匹配整个字符串regex=ur"...\Z" #正则表达式末尾以\Z结束



```

if re.match(regex, subject):  

do_something()  

else:  

do_anotherthing() 


```






3. 创建一个匹配对象，然后通过该对象获得匹配细节regex=ur"..." #正则表达式



```

match = re.search(regex, subject)  

if match:  

# match start: match.start()  

# match end (exclusive): match.end()  

# matched text: match.group()  

do_something()  

else:  

do_anotherthing() 


```


以上就是对Python正则表达式在字符串替换中的具体介绍。









