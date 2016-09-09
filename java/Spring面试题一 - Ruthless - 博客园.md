



#### 目录



一、Spring工作原理 

二、为什么要用Spring

三、请你谈谈SSH整合

四、介绍一下Spring的事务管理

五、什么是依赖注入，依赖注入的作用是什么? 

六、什么是AOP，AOP的作用是什么? 

七、Spring中的BeanFactory与ApplicationContext的作用有哪些?

八、连接池

九、跨库事务






#### 一、Spring MVC工作原理



1. 客户端请求提交到DispatcherServlet

2. 由DispatcherServlet控制器查询一个或多个HandlerMapping，找到处理请求的Controller

3. DispatcherServlet将请求提交到Controller

4. Controller调用业务逻辑处理后，返回ModelAndView

5. DispatcherServlet查询一个或多个ViewResoler视图解析器，找到ModelAndView指定的视图

6. 视图负责将结果显示到客户端

![http://images.cnitblog.com/i/270324/201402/281106430597942.jpg](http://images.cnitblog.com/i/270324/201402/281106430597942.jpg)




#### 二、为什么要用Spring

 

1、Spring能很好的与各大框架进行集成

2、创建对象时，如果我们不用spring需要用工厂模式来创建，这个spring相当于工厂模式已经帮我们做了创建对象的功能(IOC、依赖注入)。

3、在用Hibernate的时候，如果不用spring每次都要写事务的提交代码，有了spring可以通过AOP帮助我们管理事务 

4、面向切面编程（AOP）在要记录日志的时候添加一条记录后需要在数据里同时添加一条添加成功了或失败的记录，那么就可以用Spring的Aop来处理，虽然不用Aop也能做但是不用Spring的Aop就会写很多重复的代码。




#### 三、请你谈谈SSH整合

 

SSH：Struts（表示层）+Hibernate（持久层）+Spring（业务层）


a、Struts  

Struts是一个表示层框架，主要作用是界面展示，接收请求，分发请求。

b、Hibernate  

Hibernate是一个持久层框架，它只负责与关系数据库的操作。

c、Spring  

Spring是一个业务层框架，是一个整合的框架，能够很好地黏合表示层与持久层。 




#### 四、介绍一下Spring的事务管理

  

事务就是对一系列的数据库操作（比如插入多条数据）进行统一的提交或回滚操作，如果插入成功，那么一起成功，如果中间有一条出现异常，那么回滚之前的所有操作。这样可以防止出现脏数据，防止数据库数据出现问题。 


开发中为了避免这种情况一般都会进行事务管理。Spring中也有自己的事务管理机制，一般是使用TransactionMananger进行管理，可以通过Spring的注入来完成此功能。 




#### 五、什么是依赖注入，依赖注入的作用是什么?

 

IOC是一种思想，它能指导我们如何设计出松耦合、更优良的程序。传统应用程序都是由我们在类内部主动创建依赖对象，从而导致类与类之间高耦合，难于测试；有了IOC容器后，把创建和查找依赖对象的控制权交给了容器，由容器进行注入组合对象，所以对象与对象之间是松散耦合，这样也方便测试，利于功能复用，更重要的是使得程序的整个体系结构变得非常灵活。


依赖注入的作用：减少类间耦合度，避免用new来创建对象




#### 六、什么是AOP，AOP的作用是什么?

 

AOP，面向切面编程，就是把可重用的功能提取出来，然后将这些通用功能在合适的时候织入到应用程序中，比如事务管理、权限控制、日志记录、性能统计等。


AOP的作用

AOP并没有帮助我们解决任何新的问题，它只是提供了一种更好的办法，能够用更少的工作量来解决现有的一些问题，使得系统更加健壮，可维护性更好。




#### 七、Spring中的BeanFactory与ApplicationContext的作用有哪些?



1、BeanFactory负责读取bean的配置文件，管理bean的加载、实例化，维护bean之间的依赖关系，负责bean的生命周期。 

2、ApplicationContext除了提供上述BeanFactory所能提供的功能之外，还提供了更完整的框架功能： 

a. 国际化支持

b. 资源访问

c. 事件传递




#### 八、连接池



c3p0、dbcp




#### 九、跨库事务



Atomikos、jotm 


 


























