 Ruby 循环
  Ruby 中的循环用于执行相同的代码块若干次。本章节将详细介绍 Ruby 支持的所有循环语句。

 

 Ruby while 语句 
#### 语法

 
```

while conditional [do]
   code
end

```
 当 conditional 为真时，执行 code。while 循环的 conditional 通过保留字 do、一个换行符、反斜线 \ 或一个分号 ; ，来与 code 分离开。

 
#### 实例

 
```

#!/usr/bin/ruby

$i = 0
$num = 5

while $i < $num  do
   puts("Inside the loop i = #$i" )
   $i +=1
end

```
 这将产生以下结果：

 
```

Inside the loop i = 0
Inside the loop i = 1
Inside the loop i = 2
Inside the loop i = 3
Inside the loop i = 4

```
 Ruby while 修饰符 
#### 语法

 
```

code while condition

或者

begin 
  code 
end while conditional

```
 当 conditional 为真时，执行 code。

 如果 while 修饰符跟在一个没有 rescue 或 ensure 子句的 begin 语句后面，code 会在 conditional 判断之前执行一次。

 
#### 实例

 
```

#!/usr/bin/ruby

$i = 0
$num = 5
begin
   puts("Inside the loop i = #$i" )
   $i +=1
end while $i < $num

```
 这将产生以下结果：

 
```

Inside the loop i = 0
Inside the loop i = 1
Inside the loop i = 2
Inside the loop i = 3
Inside the loop i = 4

```
 Ruby until 语句 
```

until conditional [do]
   code
end

```
 当 conditional 为假时，执行 code。until 语句的 conditional 通过保留字 do、一个换行符或一个分号，来与 code 分离开。

 
#### 实例

 
```

#!/usr/bin/ruby

$i = 0
$num = 5

until $i > $num  do
   puts("Inside the loop i = #$i" )
   $i +=1;
end

```
 这将产生以下结果：

 
```

Inside the loop i = 0
Inside the loop i = 1
Inside the loop i = 2
Inside the loop i = 3
Inside the loop i = 4
Inside the loop i = 5

```
 Ruby until 修饰符 
#### 语法

 
```

code until conditional

OR

begin
   code
end until conditional

```
 当 conditional 为假时，执行 code。

 如果 until 修饰符跟在一个没有 rescue 或 ensure 子句的 begin 语句后面，code 会在 conditional 判断之前执行一次。

 
#### 实例

 
```

#!/usr/bin/ruby

$i = 0
$num = 5
begin
   puts("Inside the loop i = #$i" )
   $i +=1;
end until $i > $num

```
 这将产生以下结果：

 
```

Inside the loop i = 0
Inside the loop i = 1
Inside the loop i = 2
Inside the loop i = 3
Inside the loop i = 4
Inside the loop i = 5

```
 Ruby for 语句 
#### 语法

 
```

for variable [, variable ...] in expression [do]
   code
end

```
 针对 expression 中的每个元素分别执行一次 code。

 
#### 实例

 
```

#!/usr/bin/ruby

for i in 0..5
   puts "Value of local variable is #{i}"
end

```
 在这里，我们已经定义了范围 0..5。语句 for i in 0..5 允许 i 的值从 0 到 5（包含 5）。这将产生以下结果：

 
```

Value of local variable is 0
Value of local variable is 1
Value of local variable is 2
Value of local variable is 3
Value of local variable is 4
Value of local variable is 5

```
 for...in 循环几乎是完全等价于：

 
```

(expression).each do |variable[, variable...]| code end

```
 但是，for 循环不会为局部变量创建一个新的作用域。for 循环的 expression 通过保留字 do、一个换行符或一个分号，来与 code 分离开。.

 
#### 实例

 
```

#!/usr/bin/ruby

(0..5).each do |i|
   puts "Value of local variable is #{i}"
end

```
 这将产生以下结果：

 
```

Value of local variable is 0
Value of local variable is 1
Value of local variable is 2
Value of local variable is 3
Value of local variable is 4
Value of local variable is 5

```
 Ruby break 语句 
#### 语法

 
```

break

```
 终止最内部的循环。如果在块内调用，则终止相关块的方法（方法返回 nil）。

 
#### 实例

 
```

#!/usr/bin/ruby

for i in 0..5
   if i > 2 then
      break
   end
   puts "Value of local variable is #{i}"
end

```
 这将产生以下结果：

 
```

Value of local variable is 0
Value of local variable is 1
Value of local variable is 2

```
 Ruby next 语句 
#### 语法

 
```

next

```
 跳到最内部循环的下一个迭代。如果在块内调用，则终止块的执行（yield 或调用返回 nil）。

 
#### 实例

 
```

#!/usr/bin/ruby

for i in 0..5
   if i < 2 then
      next
   end
   puts "Value of local variable is #{i}"
end

```
 这将产生以下结果：

 
```

Value of local variable is 2
Value of local variable is 3
Value of local variable is 4
Value of local variable is 5

```
 Ruby redo 语句 
#### 语法

 
```

redo

```
 重新开始最内部循环的该次迭代，不检查循环条件。如果在块内调用，则重新开始 yield 或 call。

 
#### 实例

 
```

#!/usr/bin/ruby

for i in 0..5
   if i < 2 then
      puts "Value of local variable is #{i}"
      redo
   end
end

```
 这将产生以下结果，并会进入一个无限循环：

 
```

Value of local variable is 0
Value of local variable is 0
............................

```
 Ruby retry 语句 
#### 语法

 
```

retry

```
 如果 retry 出现在 begin 表达式的 rescue 子句中，则从 begin 主体的开头重新开始。

 
```

begin
   do_something # 抛出的异常
rescue
   # 处理错误
   retry  # 重新从 begin 开始
end

```
 如果 retry 出现在迭代内、块内或者 for 表达式的主体内，则重新开始迭代调用。迭代的参数会重新评估。

 
```

for i in 1..5
   retry if some_condition # 重新从 i == 1 开始
end

```
 
#### 实例

 
```

#!/usr/bin/ruby

for i in 1..5
   retry if  i > 2
   puts "Value of local variable is #{i}"
end

```
 这将产生以下结果，并会进入一个无限循环：

 
```

Value of local variable is 1
Value of local variable is 2
Value of local variable is 1
Value of local variable is 2
Value of local variable is 1
Value of local variable is 2
............................

```
 

