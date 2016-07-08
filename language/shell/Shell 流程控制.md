 
#### Shell 流程控制

  和Java、PHP等语言不一样，sh的流程控制不可为空，如(以下为PHP流程控制写法)： 

 
```

<?php
if (isset($_GET["q"])) {
    search(q);
}
else {
    //do nothing
}

```
  在sh/bash里可不能这么写，如果else分支没有语句执行，就不要写这个else，就像这样 

 

#### if else

 
#### if

 if 语句语法格式：

 
```

if condition
then
    command1 
    command2
    ...
    commandN 
fi

```
  写成一行（适用于终端命令提示符）： 

 
```

if `ps -ef | grep ssh`;  then echo hello; fi

```
  末尾的fi就是if倒过来拼写，后面还会遇到类似的。 

 
#### if else

 if else 语法格式：

 
```

if condition
then
    command1 
    command2
    ...
    commandN
else
    command
fi

```
 
#### if else-if else

 if else-if else 语法格式：

 
```

if condition1
then
    command1
elif condition2
    command2
else
    commandN
fi

```
 if else语句经常与test命令结合使用，如下所示：

 
```

num1=$[2*3]
num2=$[1+5]
if test $[num1] -eq $[num2]
then
    echo 'The two numbers are equal!'
else
    echo 'The two numbers are not equal!'
fi

```
 输出结果：

 
```

The two numbers are equal!

```
 

#### for 循环

 与其他编程语言类似，Shell支持for循环。 

  for循环一般格式为： 

 
```

for var in item1 item2 ... itemN
do
    command1
    command2
    ...
    commandN
done

```
  写成一行： 

 
```

for var in item1 item2 ... itemN; do command1; command2… done;

```
 当变量值在列表里，for循环即执行一次所有命令，使用变量名获取列表中的当前取值。命令可为任何有效的shell命令和语句。in列表可以包含替换、字符串和文件名。 


 in列表是可选的，如果不用它，for循环使用命令行的位置参数。 


 例如，顺序输出当前列表中的数字：

 
```

for loop in 1 2 3 4 5
do
    echo "The value is: $loop"
done

```
  输出结果： 

 
```

The value is: 1
The value is: 2
The value is: 3
The value is: 4
The value is: 5

```
 顺序输出字符串中的字符：

 
```

for str in 'This is a string'
do
    echo $str
done

```

 输出结果：

 
```

This is a string

```
 

#### while 语句

 while循环用于不断执行一系列命令，也用于从输入文件中读取数据；命令通常为测试条件。其格式为：

 
```

while condition
do
    command
done

```
 命令执行完毕，控制返回循环顶部，从头开始直至测试条件为假。

 以下是一个基本的while循环，测试条件是：如果COUNTER小于5，那么条件返回真。COUNTER从0开始，每次循环处理时，COUNTER加1。运行上述脚本，返回数字1到5，然后终止。 

 
```

COUNTER=0
while [ $COUNTER -lt 5 ]
do
    COUNTER='expr $COUNTER+1'
    echo $COUNTER
done

```
  运行脚本，输出： 

 
```

1
2
3
4
5

```
  while循环可用于读取键盘信息。下面的例子中，输入信息被设置为变量FILM，按<Ctrl-D>结束循环。 

 
```

echo 'type <CTRL-D> to terminate'
echo -n 'enter your most liked film: ''
while read FILM
do
    echo "Yeah! great film the $FILM"
done

```
  运行脚本，输出类似下面： 

 
```

type <CTRL-D> to terminate
enter your most liked film: Sound of Music
Yeah! great film the Sound of Music

```
 
#### 无限循环

 无限循环语法格式：

 
```

while :
do
    command
done

```
  或者 



```

while true
do
    command
done
```
  或者 



```

for (( ; ; ))

```
  




#### until 循环


 until循环执行一系列命令直至条件为真时停止。 


until循环与while循环在处理方式上刚好相反。


一般while循环优于until循环，但在某些时候—也只是极少数情况下，until循环更加有用。 

 until 语法格式:

 
```

until condition
do
    command
done

```
 条件可为任意测试条件，测试发生在循环末尾，因此循环至少执行一次—请注意这一点。

 

#### case

  Shell case语句为多选择语句。可以用case语句匹配一个值与一个模式，如果匹配成功，执行相匹配的命令。case语句格式如下： 

 
```

case 值 in
模式1)
    command1
    command2
    ...
    commandN
    ;;
模式2）
    command1
    command2
    ...
    commandN
    ;;
esac

```
 case工作方式如上所示。取值后面必须为单词in，每一模式必须以右括号结束。取值可以为变量或常数。匹配发现取值符合某一模式后，其间所有命令开始执行直至 ;;。 


 取值将检测匹配的每一个模式。一旦模式匹配，则执行完匹配模式相应命令后不再继续其他模式。如果无一匹配模式，使用星号 * 捕获该值，再执行后面的命令。 


 下面的脚本提示输入1到4，与每一种模式进行匹配： 

 
```

echo 'Input a number between 1 to 4'
echo 'Your number is:\c'
read aNum
case $aNum in
    1)  echo 'You select 1'
    ;;
    2)  echo 'You select 2'
    ;;
    3)  echo 'You select 3'
    ;;
    4)  echo 'You select 4'
    ;;
    *)  echo 'You do not select a number between 1 to 4'
    ;;
esac

```
  输入不同的内容，会有不同的结果，例如： 

 
```

Input a number between 1 to 4
Your number is:3
You select 3

```
 

#### 跳出循环

 在循环过程中，有时候需要在未达到循环结束条件时强制跳出循环，Shell使用两个命令来实现该功能：break和continue。 

 
#### break命令

  break命令允许跳出所有循环（终止执行后面的所有循环）。 

  下面的例子中，脚本进入死循环直至用户输入数字大于5。要跳出这个循环，返回到shell提示符下，需要使用break命令。 

 
```

#!/bin/bash
while :
do
    echo -n "Input a number between 1 to 5: "
    read aNum
    case $aNum in
        1|2|3|4|5) echo "Your number is $aNum!"
        ;;
        *) echo "You do not select a number between 1 to 5, game is over!"
            break
        ;;
    esac
done

```
 
#### continue

 
```

continue命令与break命令类似，只有一点差别，它不会跳出所有循环，仅仅跳出当前循环。

```
  对上面的例子进行修改： 

 
```

#!/bin/bash
while :
do
    echo -n "Input a number between 1 to 5: "
    read aNum
    case $aNum in
        1|2|3|4|5) echo "Your number is $aNum!"
        ;;
        *) echo "You do not select a number between 1 to 5!"
            continue
            echo "Game is over!"
        ;;
    esac
done

```
  运行代码发现，当输入大于5的数字时，该例中的循环不会结束，语句 

####  echo "Game is over!"

 永远不会被执行。 




#### esac

  case的语法和C family语言差别很大，它需要一个esac（就是case反过来）作为结束标记，每个case分支用右圆括号，用两个分号表示break。

 

