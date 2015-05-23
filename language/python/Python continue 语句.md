 Python  continue 语句
 Python continue 语句跳出本次循环，而break跳出整个循环。

 continue 语句用来告诉Python跳过当前循环的剩余语句，然后继续进行下一轮循环。

 continue语句用在while和for循环中。

 

#### Python 语言 continue 语句语法格式如下：



 
```

continue

```
 

#### 流程图：



 ![http://www.w3cschool.cc/wp-content/uploads/2013/11/cpp_continue_statement.jpg](http://www.w3cschool.cc/wp-content/uploads/2013/11/cpp_continue_statement.jpg)

#### 实例：



 
```

#!/usr/bin/python

for letter in 'Python':     # First Example
   if letter == 'h':
      continue
   print 'Current Letter :', letter

var = 10                    # Second Example
while var > 0:              
   var = var -1
   if var == 5:
      continue
   print 'Current variable value :', var
print "Good bye!"

```
 以上实例执行结果：

 
```

Current Letter : P
Current Letter : y
Current Letter : t
Current Letter : o
Current Letter : n
Current variable value : 9
Current variable value : 8
Current variable value : 7
Current variable value : 6
Current variable value : 4
Current variable value : 3
Current variable value : 2
Current variable value : 1
Current variable value : 0
Good bye!

```
 

