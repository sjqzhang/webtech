 C 递归
  递归是以自相似的方式重复项目的处理过程。同样地，在编程语言中，在函数内部调用函数自身，称为递归调用。如下：

 
```

void recursion()
{
   recursion(); /* 函数调用自身 */
}

int main()
{
   recursion();
}

```
 C 语言支持递归，即，一个函数可以调用自身。但在使用递归时，程序员需要注意定义一个从函数退出的条件，否则会进入无限循环。

 递归函数在解决许多数学问题上起了至关重要的作用，比如计算一个数的阶乘、生成斐波那契数列，等等。

 

 
#### 数的阶乘

 下面的实例使用递归函数计算一个给定的数的阶乘：

 
```

#include <stdio.h>

int factorial(unsigned int i)
{
   if(i <= 1)
   {
      return 1;
   }
   return i * factorial(i - 1);
}
int  main()
{
    int i = 15;
    printf("Factorial of %d is %d\n", i, factorial(i));
    return 0;
}

```
 当上面的代码被编译和执行时，它会产生下列结果：

 
```

Factorial of 15 is 2004310016

```
 
#### 斐波那契数列

 下面的实例使用递归函数生成一个给定的数的斐波那契数列：

 
```

#include <stdio.h>

int fibonaci(int i)
{
   if(i == 0)
   {
      return 0;
   }
   if(i == 1)
   {
      return 1;
   }
   return fibonaci(i-1) + fibonaci(i-2);
}

int  main()
{
    int i;
    for (i = 0; i < 10; i++)
    {
       printf("%d\t%n", fibonaci(i));
    }
    return 0;
}

```
 当上面的代码被编译和执行时，它会产生下列结果：

 
```

0	1	1	2	3	5	8	13	21	34

```
 

