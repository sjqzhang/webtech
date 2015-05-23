
      


#### Ruby 语法快速入门


    








  



  
Aug 12th, 2013


  
  
  
#### 关于代码




单行注释使用#开头，和python类似

多行注释使用=begin开始， =end结束，需要注意的是 =begin 和 =end 必须顶格写（行首），不能有空白符

分号; 表示一个语句的结束，一行如果有多个语句每个语句用分号隔开，最后一个语句可以省略分号，和python类似

行连接符使用’\‘结尾，和python类似



#### 关于标识名




标识名区分大小写

局部变量、方法参数、方法名称应该使用一个小写字母或者_开头

全局变量用美元符号$开头

实例变量（对象变量）应该使用@开头

类变量（静态变量）应该使用@@开头

类名称、模块名称、常量应该使用大写字母开头



#### 关于数据类型




数据类型有：数字、字符串、数组、哈希表、区间，正则表达式（类型python中 int/double、str、list、dict、range、regex）

数字有整数型和浮点型

字符串在’‘(单引号)、”“(双引号)之间的代码

数组类似python中list，应该可以存放不同类型的元素

区间用..或者…表示，前者包括左右边界，后者仅包括左边界

除了false和nil当作false以外，其它任何对象都当作true，这和python很不一样



#### 赋值



同Python一样，动态类型不用预先定义类型，运行时自动检测类型。例如：




```
a=1;
a,b=b,a
a,b,c=1,3,5
没有++,-- 运算符，可以用+=或者-=

```



#### 条件运算符



条件运算符比较复杂，有一些比较特别的运算符。




```
==    比较两个对象的值是否相等，例如，a=1;b=1.0; (a==b) == true
!=    比较两个对象的值是否相等，例如，a=1;b=1.0; (a!=b) == false
eql?  比较两个对象的值和类型是否相等，例如，上述 a.eal?(b) == false
equal?    比较两个对象的内存地址是否相同，和java的默认Object比较类型
<=>   比较两个对象的大小，分别返回 1,0,-1，类似java的Comparable接口
=~    用来比较字符串是否符合一个正则表达式，返回模式在字符串中匹配的位置，无匹配返回nil
!~    断言字符串不符合一个正则表达式，返回true,false

```



#### 条件判断语句




单行 if 语句


单行if语句有两种语法




```
1. if condition then statement1;statement2;... end
2. (statement1;statement2;...) if condition

```


这和python非常类似：




```
1. if condition: statement1;statment2
2. (statement1;statement2...) if condition else (statementN)

```



多行 if 语句


这个elsif真变态，既不是elseif,也不是elif。看来是为了阻止别人说他抄袭！




```
if condition
    statement1;...
elsif condition2
    statementB;...
else
    statementX
end

```



unless 语句


unless语句有点特别：




```
unless condition
    statement1;...

```


意思是，除非condition==true,否则执行statement1语句，等价于




```
if ! condition
    statement1;...

```



case 分支条件语句


case语句相当于java中的switch/case语句：




```
case    Object
when    condition1
    statement;...
when    condition2
    statement;...
else
    statement;...
end

```



#### 循环语句




while 循环


while语句同样分为单行和多行语句，个人觉得之所以这样设计是为了避免非要写end结构。




```
( statement1; statemen2; ...) while condition

while condition
    statement1; statement2; ...
end

```



until 循环


类似于while循环，只不过条件相反，也就是如果条件为true则终止循环。




```
( statement1; statement2; ...) until condition

until condition
    statement1; statement2; ...
end

```



for…in 循环


主流的语言都支持for…in循环，ruby也不例外。




```
for x in Object
    statement1; statement2; ...
end

```


其中Object可以是数组、区间、集合等等




循环控制标识


不同于java/python等语言，ruby新增几个循环控制语句。




```
break   跳出循环，和java/python类似
next    继续循环，类似于java/python中的continue
redo    重新开始循环，从这一次开始
retry   重新开始这个循环体，从循环的第一次遍历开始

```



times, upto, downto, each, step


TODO




#### 异常



对应于Java中的try…catch…finally…throw，ruby中的异常语句为




```
begin/end...rescue...ensure...raise

```


python的异常语句为




```
try...catch...else...finally

```



#### 类与对象



简单的对象封装




```
class User

    def initialize(id,name,group="guest")
        @id = id
        @name = name
        @group = group

    end

    def whoami
        puts "id="+@id.to_s+", name="+@name+", group="+@group
        if @group == "root"
            puts "I am super user"
        end
    end

    attr_writer :group, :name
    attr_reader :name
    attr_accessor :id
end

```


使用方法




```
root = User.new(1,'root')
root.group = 'root'
root.whoami

guest = User.new(0,'guest')
guest.id = 602
guest.group = 'guest'
guest.whoami
puts guest.id

```


对象的定义和使用有点类似python，但也有一些差别




类、方法都需要end结尾，这个有点烦人

初始化方法为initialize，类似于java中的构造函数、python中的

#### init

方法

类属性用@前缀命名

attr_writer 是setter方法，类似的getter方法为 attr_reader，以及同时读写方法 attr_accessor


简单的类继承




```
class Guest < User
end

guest = Guest.new(0,'guest')
guest.id = 602
guest.group = 'guest'
guest.whoami

```


继承后自动拥有父类的构造函数。



  
    
        
        








  



  
Updated Aug 17th, 2013


      
    





    

