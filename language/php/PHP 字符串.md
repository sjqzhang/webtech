 PHP 字符串变量  
字符串变量用于存储并处理文本。

 

#### PHP 中的字符串变量

 字符串变量用于包含有字符的值。

 在创建字符串之后，我们就可以对它进行操作了。您可以直接在函数中使用字符串，或者把它存储在变量中。

 在下面的实例中，我们创建一个名为 txt 的字符串变量，并赋值为 "Hello world!" 。然后我们输出 txt 变量的值：

  
#### 实例

 
```
 <?php

 $txt="Hello world!";

 echo $txt;

 ?> 


```
 

[运行实例 »](http://www.w3cschool.cc/try/showphp.php?filename=demo_string_echo) 

 



|  注释：当您赋一个文本值给变量时，请记得给文本值加上单引号或者双引号。|

现在，让我们来看看一些常用的操作字符串的函数和运算符。

 

#### PHP 并置运算符

 在 PHP 中，只有一个字符串运算符。

 并置运算符 (.) 用于把两个字符串值连接起来。

 下面的实例演示了如何将两个字符串变量连接在一起：

  
#### 实例

 
```
 <?php

 $txt1="Hello world!";

 $txt2="What a nice day!";

 echo $txt1 . " " . $txt2;

 ?> 


```
 

 上面的代码将输出：Hello world! What a nice day! 

 

#### 提示：

在上面的代码中，我们已经使用了两次并置运算符。这是由于我们需要在两个字符串之间插入一个空格。

 

#### PHP strlen() 函数

 有时知道字符串值的长度是很有用的。

 strlen() 函数返回字符串的长度（字符数）。

 下面的实例返回字符串 "Hello world!" 的长度：

  
#### 实例

 
```
 <?php

 echo strlen("Hello world!");

 ?> 


```
 

[运行实例 »](http://www.w3cschool.cc/try/showphp.php?filename=demo_string_length) 

 上面的代码将输出：12

 

#### 提示：

strlen() 常常用在循环和其他函数中，因为那时确定字符串何时结束是很重要的。（例如，在循环中，我们需要在字符串中的最后一个字符之后结束循环。）

 

#### PHP strpos() 函数

 strpos() 函数用于在字符串内查找一个字符或一段指定的文本。

 如果在字符串中找到匹配，该函数会返回第一个匹配的字符位置。如果未找到匹配，则返回 FALSE。

 下面的实例在字符串 "Hello world!" 中查找文本 "world"：

  
#### 实例

 
```
 <?php

 echo strpos("Hello world!","world");

 ?> 


```
 

[运行实例 »](http://www.w3cschool.cc/try/showphp.php?filename=demo_string_pos) 

 上面的代码将输出：6

 

#### 提示：

在上面的实例中，字符串 "world" 的位置是 6。之所以是 6 而不是 7 的原因是，字符串中第一个字符的位置是 0，而不是 1。

 

#### 完整的 PHP String 参考手册

 如需查看所有字符串函数的完整参考手册，请访问我们的 [PHP String 参考手册](http://www.w3cschool.cc/php/php-ref-string.html)。

 该参考手册提供了每个函数的简要描述和应用实例！

 

