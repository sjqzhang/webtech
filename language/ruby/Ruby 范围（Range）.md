 Ruby 范围（Range）
  范围（Range）无处不在：January 到 December、 0 到 9、等等。Ruby 支持范围，并允许我们以不同的方式使用范围：

 
作为序列的范围
 作为条件的范围
 作为间隔的范围
 


 
#### 作为序列的范围

 范围的第一个也是最常见的用途是表达序列。序列有一个起点、一个终点和一个在序列产生连续值的方式。

 Ruby 使用 ''..'' 和 ''...'' 范围运算符创建这些序列。两点形式创建一个包含指定的最高值的范围，三点形式创建一个不包含指定的最高值的范围。

 
```

(1..5)        #==> 1, 2, 3, 4, 5
(1...5)       #==> 1, 2, 3, 4
('a'..'d')    #==> 'a', 'b', 'c', 'd'

```
 序列 1..100 是一个 Range 对象，包含了两个 Fixnum 对象的引用。如果需要，您可以使用 to_a 方法把范围转换为列表。尝试下面的实例：

 
```

#!/usr/bin/ruby

$, =", "   # Array 值分隔符
range1 = (1..10).to_a
range2 = ('bar'..'bat').to_a

puts "#{range1}"
puts "#{range2}"

```
 这将产生以下结果：

 
```

1, 2, 3, 4, 5, 6, 7, 8, 9, 10
bar, bas, bat

```
 范围实现了让您可以遍历它们的方法，您可以通过多种方式检查它们的内容：

 
```

#!/usr/bin/ruby

# Assume a range
digits = 0..9

puts digits.include?(5)
ret = digits.min
puts "Min value is #{ret}"

ret = digits.max
puts "Max value is #{ret}"

ret = digits.reject {|i| i < 5 }
puts "Rejected values are #{ret}"

digits.each do |digit|
   puts "In Loop #{digit}"
end

```
 这将产生以下结果：

 
```

true
Min value is 0
Max value is 9
Rejected values are 5, 6, 7, 8, 9
In Loop 0
In Loop 1
In Loop 2
In Loop 3
In Loop 4
In Loop 5
In Loop 6
In Loop 7
In Loop 8
In Loop 9

```
 
#### 作为条件的范围

 范围也可以用作条件表达式。例如，下面的代码片段从标准输入打印行，其中每个集合的第一行包含单词 start，最后一行包含单词 end.：

 
```

while gets
   print if /start/../end/
end

```
 范围可以用在 case 语句中：

 
```

#!/usr/bin/ruby

score = 70

result = case score
   when 0..40: "Fail"
   when 41..60: "Pass"
   when 61..70: "Pass with Merit"
   when 71..100: "Pass with Distinction"
   else "Invalid Score"
end

puts result

```
 这将产生以下结果：

 
```

Pass with Merit

```
 
#### 作为间隔的范围

 范围的最后一个用途是间隔测试：检查某些值是否落在范围表示的间隔里。这是使用 === 相等运算符来完成的。

 
```

#!/usr/bin/ruby

if ((1..10) === 5)
  puts "5 lies in (1..10)"
end

if (('a'..'j') === 'c')
  puts "c lies in ('a'..'j')"
end

if (('a'..'j') === 'z')
  puts "z lies in ('a'..'j')"
end

```
 这将产生以下结果：

 
```

5 lies in (1..10)
c lies in ('a'..'j')

```
 

