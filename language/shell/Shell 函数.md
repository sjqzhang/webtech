 
#### Shell 函数

  linux shell 可以用户定义函数，然后在shell脚本中可以随便调用。

  shell中函数的定义格式如下： 

 
```

[ function ] funname [()]

{

    action;

    [return int;]

}

```
 说明：

 
 1、可以带function fun() 定义，也可以直接fun() 定义,不带任何参数。 

 2、参数返回，可以显示加：return 返回，如果不加，将以最后一条命令运行结果，作为返回值。 return后跟数值n(0-255 


 下面的例子定义了一个函数并进行调用： 

 
```

#!/bin/bash
demoFun(){
    echo "This is your first shell function!"
}
echo "Function begin..."
hello
echo "Function end!"

```
  输出结果： 

 
```

Function begin...
This is your first shell function!
Function end!

```
  下面定义一个带有return语句的函数： 

 
```

#!/bin/bash
funWithReturn(){
    echo "The function is to get the sum of two numbers..."
    echo -n "Input first number: "
    read aNum
    echo -n "Input another number: "
    read anotherNum
    echo "The two numbers are $aNum and $anotherNum !"
    return $(($aNum+$anotherNum))
}
funWithReturn
echo "The sum of two numbers is $? !"

```
  输出类似下面： 

 
```

The function is to get the sum of two numbers...
Input first number: 25
Input another number: 50
The two numbers are 25 and 50 !
The sum of two numbers is 75 !

```
  函数返回值在调用该函数后通过 $? 来获得。 

  注意：所有函数在使用前必须定义。这意味着必须将函数放在脚本开始部分，直至shell解释器首次发现它时，才可以使用。调用函数仅使用其函数名即可。 

 

#### 函数参数

 在Shell中，调用函数时可以向其传递参数。在函数体内部，通过 $n 的形式来获取参数的值，例如，$1表示第一个参数，$2表示第二个参数... 

  带参数的函数示例： 

 
```

#!/bin/bash
funWithParam(){
    echo "The value of the first parameter is $1 !"
    echo "The value of the second parameter is $2 !"
    echo "The value of the tenth parameter is $10 !"
    echo "The value of the tenth parameter is ${10} !"
    echo "The value of the eleventh parameter is ${11} !"
    echo "The amount of the parameters is $# !"
    echo "The string of the parameters is $* !"
}
funWithParam 1 2 3 4 5 6 7 8 9 34 73

```
  输出结果： 

 
```

The value of the first parameter is 1 !
The value of the second parameter is 2 !
The value of the tenth parameter is 10 !
The value of the tenth parameter is 34 !
The value of the eleventh parameter is 73 !
The amount of the parameters is 12 !
The string of the parameters is 1 2 3 4 5 6 7 8 9 34 73 !"

```
  注意，$10 不能获取第十个参数，获取第十个参数需要${10}。当n>=10时，需要使用${n}来获取参数。 

  另外，还有几个特殊字符用来处理参数： 

 

| 参数处理| 说明|
|:--|:--|
| $#| 传递到脚本的参数个数|
| $*| 以一个单字符串显示所有向脚本传递的参数|
| $$| 脚本运行的当前进程ID号|
| $!| 后台运行的最后一个进程的ID号|
| $@| 与$#相同，但是使用时加引号，并在引号中返回每个参数。|
| $-| 显示Shell使用的当前选项，与set命令功能相同。|
| $?| 显示最后命令的退出状态。0表示没有错误，其他任何值表明有错误。|



