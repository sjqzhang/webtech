
	
		
			

			

		
			
      在python中，有的名称会在前面和后面加上两个下划线，由这些名字组成的集合所包含的方法称为魔法方法（或者是特殊方法）。如果对象实现了这些方法中的某一个，那么这个方法会在特殊的情况下（确切地说是根据名字）被python调用。而几乎没有直接调用它们的必要。


      这里会详细讨论一些重要的魔法方法（最重要的是__init__方法和一些处理对象访问的方法，这些方法允许你创建自己的序列或者是映射），还会处理属性（通过property函数来处理）。


 




#### 一. 构造方法






#### 1.1 介绍与创建




      首先要讨论的第一个魔法方法是构造方法，它代表着类似于以前例子中使用过的那种名为init的初始化方法。但构造方法和其他普通方法不同的地方在于，当一个对象被创建后，会立即调用构造方法。


      在python中创建一个构造方法只要将init方法的名字从简单的init修改为魔法版本__init__即可：




```
__metaclass__ = type
 
class FooBar:
    def __init__(self):
        self.somevar = 42
```




       如果给构造方法传几个参数的话，要怎么做呢：




```
__metaclass__ = type
 
class FooBar:
    def __init__(self,value = 42):
        self.somevar = value
```




因为参数是可选的，所以你可以继续，当做什么事情都没发生：




```
>>> s = FooBar(100)
>>> s.somevar
100
```




 




#### 1.2 重写一般方法和特殊的构造方法




      重写是继承机制中的一个重要内容，对于构造方法尤其重要。构造方法用来初始化新创建对象的状态，大多数子类不仅要拥有自己的初始化代码，还要拥有超类的初始化代码。当一个类的构造方法被重写，那么就需要调用超类的构造方法，否则对象可能不会被正确地初始化。




```
__metaclass__ = type
 
class Bird:
    def __init__(self):
        self.hungry = True
    def eat(self):
        if self.hungry:
            print "Aaaah..."
            self.hungry = False
        else:
            print 'No,thanks'
        
    
class SongBird(Bird):
    def __init__(self):
        self.sound = 'Squark!'
    def sing(self):
        print self.sound
```




      下面介绍2种重写构造函数的方法：调用超类构造方法的未绑定版本，或者使用super函数。


（1）

#### 调用超类构造方法的未绑定版本






```
class SongBird(Bird):
    def __init__(self):
        Bird.__init__(self)
        self.sound = 'Squark!'
    def sing(self):
        print self.sound
```




      在调用一个实例的方法时，该方法的self参数会被自动绑定到实例上。但是如果直接调用类的方法，那么就没有实例会被绑定。这样就可以自由第提供需要的self参数。这样的方法称为未绑定方法。


      通过将当前的实例作为self参数提供给未绑定方法，SongBird就能使用其超类构造方法的所有实现，也就是说属性hungry能被设置。


 


（2）

#### 使用super函数




      如果读者不想坚守旧版python阵营的话，那么就应该使用super函数。当前的类和对象都可以作为super函数的参数使用，调用函数返回的对象的任何方法都是调用超类的方法，而不是当前类的方法。可以直接使用super(SongBird,self)。




```
class SongBird(Bird):
    def __init__(self):
        super(SongBird,self).__init__()
        self.sound = 'Squark!'
    def sing(self):
        print self.sound
```




 




#### 二. 成员访问




本节会讨论一个有用的魔法方法集合，它可以创建行为类似于序列或映射的对象。




#### 2.1 基本的序列和映射规则




序列和映射是对象的集合。为了实现它们的基本行为，如果对象是不可变的，那么就需要2个魔法方法，如果是可变的则需要4个：


（1）__len__(self)：这个方法返回集合中所含项目的数量。如果返回0，会被当做一个布尔变量中的假值处理；


（2）__getitem__(self,key)：这个方法返回与所给键对应的值。


（3）__setitem__(self,key,value)：这个方法按照一定的方式存储和key相关的value，该值随后可使用__getitem__来获取。当然，只能为可修改对象定义这个方法。


（4）__delitem__(self,key)：这个方法都在对一部分对象使用del语句时被调用，同时必须删除和元素相关的键。


 




#### 2.2 子类化列表，字典和字符串




      标准库有3个关于序列和映射规则（UserList，UserString和UserDict）可以立即使用的实现“只想在一个操作中自定义行为，那么其他的方法都不要实现”。在较新版本的Python中，可以子类化内建类型。


      因此，如果希望实现一个和内建列表行为类似的序列，可以使用子类list。下面来看看带访问计数的列表：




```
__metaclass__ = type
 
class CouterList(list):
    def __init__(self,*arg):
        super(CounterList,self).__init__(*arg)
        self.counter = 0
    def __getitem__(self,index):
        self.counter += 1
        return super(CounterList,self).__getitem__(index)
```




CountList类严重依赖于它的子类化超类（list）的行为，它没有重写任何的方法都能被直接使用。在2个被重写的方法中，super方法被用来调用相应的超类的方法，只在__init__中添加了所需的初始化counter特性的行为，并在__getitem__中更新了counter特性。


 




#### 三. 属性




      访问器是一个简单的方法，它能够使用getHeight，setHeight这样的名字来得到或者重绑定一些特性。如果在访问给定的特性时必须要采取一些行动，那么像这样的封装状态变量就很重要。




#### 3.1 property函数






```
__metaclass__ = type
 
class Rectangle:
    def __init__(self):
        self.width = 0
        self.height = 0
    def setSize(self,size):
        self.width,self.height = size
    def getSize(self):
        return self.width,self.height
```




上面的代码中，当计算面积或者对角线长度时就要考虑size是怎么实现的，如果将size变成一个真正的特性，这样width和height就能动态算出。那么怎么解决呢？把所有属性都放到访问器方法中？但是如果有很多简单的特性，那就要写很多访问器方法了，它们除了返回或者设置特性就不做任何事了。


      幸好，python能隐藏访问器方法，让所有特性看起来一样，这些通过访问器定义的特性被称为属性，在新式类中可以使用property函数，创建属性。


      它的使用很简单，只需要增加一行代码：




```
__metaclass__ = type
 
class Rectangle:
    def __init__(self):
        self.width = 0
        self.height = 0
    def setSize(self,size):
        self.width,self.height = size
    def getSize(self):
        return self.width,self.height
    size = property(getSize,setSize)
```




property函数创建了一个属性，其中访问器函数被用做参数，这个属性命名为size，这样一来就不用担心它是怎么实现的了。可以用同样的方式处理width，height和size：




```
>>> r = Rectangle()
>>> r.width = 10
>>> r.height = 5
>>> r.size
(10, 5)
>>> r.size = 150,100
>>> r.width
150
```




很明显，size特性仍然取决于getSize和setSize中的计算，但它看起来就像普通的属性一样。


      实际上，property函数可以用0,1,2,3或者4个参数来调用。如果没有参数，产生的属性既不可读，也不可写。如果只使用一个参数（一个取值方法），产生的属性是只读的。第三个参数是一个用于删除特性的方法，第四个参数是一个文档字符串。property的4个参数分别被叫做fget，fset，fdel和doc。


      理论上说，在新式类中应该使用property函数而不是访问器方法。


 




#### 3.2 静态方法和类成员方法




      静态方法和类成员方法分别在创建时分别被装入Staticmethod类型和Classmethod类型的对象中。静态方法的定义没有self参数，且能够被类本身直接调用。类方法在定义时需要名为cls的类似于self的参数，类成员方法可以直接被类的具体对象调用，但cls参数是自动被绑定到类的。


      在python2.4中，为这样的包装方法引入了一个叫做装饰器的新语法，使用@操作符，在方法（或者函数）的上方将装饰器列出，从而指定一个或者更多的装饰器。




```
__metaclass__ = type
 
class MyClass:
    @staticmethod
    def smeth():
        print 'this is a static method'

    @classmethod
    def cmeth(cls):
        print 'this is a class method of ',cls
```




定义好之后，可以如下那样使用：




```
>>> MyClass.smeth()
this is a static method
>>> MyClass.cmeth()
this is a class method of  <class '__main__.MyClass'>
```




 




#### 3.3 __getattr__，__setattr__和它的朋友们




拦截对象的所有特性访问是可能的，这样可以用旧式类实现属性。为了在访问特性时可以执行代码，必须使用一些魔法方法：（在旧式类中只需要后3个）


（1）__getattribute__(self,name)：当特性name被访问时自动被调用（只能在新式类中使用）；


（2）__getattr__(self,name)：当特性name被访问且对象没有相应的特性时被自动调用；


（3）__setattr__(self,name,value)：当试图给name赋值时会被自动调用；


（4）__delattr__(self,name)：当试图删除特性name时被自动调用；




```
__metaclass__ = type
 
class Rectangle:
    def __init__(self):
        self.width = 0
        self.height = 0
    def __setattr__(self,name,value):
        if name == 'size':
            self.width,self.height = size
        else:
            self.__dict__[name] = value
    def __getattr__(self,name):
        if name == 'size':
            return self.width,self.height
        else:
            raise AttributeError
```




 



















