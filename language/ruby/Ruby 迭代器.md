 Ruby 迭代器
  迭代器是集合支持的方法。存储一组数据成员的对象称为集合。在 Ruby 中，数组和散列可以称之为集合。

 迭代器返回集合的所有元素，一个接着一个。在这里我们将讨论两种迭代器，each 和 collect。

 

 Ruby each 迭代器 each 迭代器返回数组或哈希的所有元素。

 
#### 语法

 
```

collection.each do |variable|
   code
end

```
 为集合中的每个元素执行 code。在这里，集合可以是数组或哈希。

 
#### 实例

 
```

#!/usr/bin/ruby

ary = [1,2,3,4,5]
ary.each do |i|
   puts i
end

```
 这将产生以下结果：

 
```

1
2
3
4
5

```
 each 迭代器总是与一个块关联。它向块返回数组的每个值，一个接着一个。值被存储在变量 i 中，然后显示在屏幕上。

 Ruby collect 迭代器 collect 迭代器返回集合的所有元素。

 
#### 语法

 
```

collection = collection.collect

```
 collect 方法不需要总是与一个块关联。collect 方法返回整个集合，不管它是数组或者是哈希。

 
#### 实例

 
```

#!/usr/bin/ruby

a = [1,2,3,4,5]
b = Array.new
b = a.collect
puts b

```
 这将产生以下结果：

 
```

1
2
3
4
5

```
 注意：collect 方法不是数组间进行复制的正确方式。这里有另一个称为 clone 的方法，用于复制一个数组到另一个数组。

 当您想要对每个值进行一些操作以便获得新的数组时，您通常使用 collect 方法。例如，下面的代码会生成一个数组，其值是 a 中每个值的 10 倍。

 
```

#!/usr/bin/ruby

a = [1,2,3,4,5]
b = a.collect{|x| 10*x}
puts b

```
 这将产生以下结果：

 
```

10
20
30
40
50

```
 

