```python
class Profiler(type):
    def __new__(mcl, name, bases, dict):
        from time import clock
        from types import FunctionType

        def timing(func):
            def wrapper(*args, **kwds):
                start = clock()
                value = func(*args, **kwds)
                end = clock()
                print func.__name__, 'takes', (end - start), 'seconds'
                return value
            return wrapper

        for attr, value in dict.iteritems():
            print(attr,value)
            if isinstance(value, FunctionType):
                dict[attr] = timing(value)

        return super(Profiler, mcl).__new__(mcl, name, bases, dict)

class A(object):
    __metaclass__ = Profiler

    def foo(self):
        total = 0
        for i in range(100000):
            total = total+1
        print total

    def foo2(self):
        from time import sleep

        total = 0
        for i in range(100000):
            total = total+1
            sleep(0.0001)
        print total

def main():
    a = A()
    a.foo()
    a.foo2()

if __name__ == '__main__':
    main()
```