 Python  break 语句
 Python break语句，就像在C语言中，打破了最小封闭for或while循环。

 break语句用来终止循环语句，即循环条件没有False条件或者序列还没被完全递归完，也会停止执行循环语句。

  break语句用在while和for循环中。

  如果您使用嵌套循环，break语句将停止执行最深层的循环，并开始执行下一行代码。 

 

#### Python语言 break 语句语法：



 
```

break

```
 

#### 流程图：



 ![http://www.w3cschool.cc/wp-content/uploads/2013/11/cpp_break_statement.jpg](http://www.w3cschool.cc/wp-content/uploads/2013/11/cpp_break_statement.jpg)

#### 实例：



 
```

#!/usr/bin/python

for letter in 'Python':     # First Example
   if letter == 'h':
      break
   print 'Current Letter :', letter
  
var = 10                    # Second Example
while var > 0:              
   print 'Current variable value :', var
   var = var -1
   if var == 5:
      break

print "Good bye!"

```
 以上实例执行结果：

 
```

Current Letter : P
Current Letter : y
Current Letter : t
Current variable value : 10
Current variable value : 9
Current variable value : 8
Current variable value : 7
Current variable value : 6
Good bye!

```
 

