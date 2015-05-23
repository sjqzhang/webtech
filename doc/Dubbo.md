

1.      Dubbo概述


Dubbo是阿里巴巴开源出来的一个分布式服务框架，致力于提供高性能和透明化的[RPC](http://en.wikipedia.org/wiki/Remote_procedure_call)远程服务调用方案，以及作为[SOA](http://en.wikipedia.org/wiki/Service-oriented_architecture)服务治理的方案。它的核心功能包括：


#### remoting:远程通讯基础，提供对多种NIO框架抽象封装，包括“同步转异步”和“请求-响应”模式的信息交换方式。


#### Cluster: 服务框架核心，提供基于接口方法的远程过程调用，包括多协议支持，并提供软负载均衡和容错机制的集群支持。


#### registry: 服务注册中心，使服务消费方能动态的查找服务提供方，使地址透明，使服务提供方可以平滑增加或减少机器。


由于Dubbo团队的文档和代码都非常优秀，所以更多关于dubbo的方方面面请参考网站[http://code.alibabatech.com/wiki/display/dubbo/Home-zh](http://code.alibabatech.com/wiki/display/dubbo/Home-zh)。


这里我们只是补充一下从源码具体实现角度来看的某些细节方面，包括Invoker、ExtensionLoader等方面。任何官方已经介绍过的细节，我们不做画蛇添足，官方文档已经足够详实了，这篇文档的定位是补充实现的相关细节，是基于我在往Dubbo添加web service协议过程中，所碰到过的一些困难。 


 


2. 服务提供者暴露一个服务的详细过程




![http://dl.iteye.com/upload/attachment/0067/0805/9e418d8a-4d86-359f-8d48-1eab7833c651.png](http://dl.iteye.com/upload/attachment/0067/0805/9e418d8a-4d86-359f-8d48-1eab7833c651.png)


 上图是服务提供者暴露服务的主过程：


首先ServiceConfig类拿到对外提供服务的实际类ref(如：HelloWorldImpl),然后通过ProxyFactory类的getInvoker方法使用ref生成一个AbstractProxyInvoker实例，到这一步就完成具体服务到Invoker的转化。接下来就是Invoker转换到Exporter的过程。


Dubbo处理服务暴露的关键就在Invoker转换到Exporter的过程(如上图中的红色部分)，下面我们以Dubbo和RMI这两种典型协议的实现来进行说明：


 


＃

#### Dubbo的实现




Dubbo协议的Invoker转为Exporter发生在DubboProtocol类的export方法，它主要是打开socket侦听服务，并接收客户端发来的各种请求，通讯细节由Dubbo自己实现。


 


＃

#### RMI的实现




RMI协议的Invoker转为Exporter发生在RmiProtocol类的export方法，它通过Spring或Dubbo或JDK来实现RMI服务，通讯细节这一块由JDK底层来实现，这就省了不少工作量。


 


3. 服务消费者消费一个服务的详细过程




![http://dl.iteye.com/upload/attachment/0067/0807/03e8c01e-e37b-305f-82a6-0d4f4c42bc25.png](http://dl.iteye.com/upload/attachment/0067/0807/03e8c01e-e37b-305f-82a6-0d4f4c42bc25.png)


 上图是服务消费的主过程：


首先ReferenceConfig类的init方法调用Protocol的refer方法生成Invoker实例(如上图中的红色部分)，这是服务消费的关键。接下来把Invoker转换为客户端需要的接口(如：HelloWorld)。


关于每种协议如RMI/Dubbo/Web service等它们在调用refer方法生成Invoker实例的细节和上一章节所描述的类似。


 




#### 4. 满眼都是Invoker




 


由于Invoker是Dubbo领域模型中非常重要的一个概念，很多设计思路都是向它靠拢。这就使得Invoker渗透在整个实现代码里，对于刚开始接触Dubbo的人，确实容易给搞混了。


     下面我们用一个精简的图来说明最重要的两种Invoker：服务提供Invoker和服务消费Invoker：




![http://dl.iteye.com/upload/attachment/0067/0809/646ee994-3679-3384-9950-dae1f2f7bddb.png](http://dl.iteye.com/upload/attachment/0067/0809/646ee994-3679-3384-9950-dae1f2f7bddb.png)


 


为了更好的解释上面这张图，我们结合服务消费和提供者的代码示例来进行说明：



＃服务消费者代码

```java
public class DemoClientAction {


    private DemoService demoService;


    public void setDemoService(DemoService demoService) {


        this.demoService = demoService;


}


    public void start() {


              String hello = demoService.sayHello("world" + i);


     }





}
```


       上面代码中的’DemoService’就是上图中服务消费端的proxy，用户代码通过这个proxy调用其对应的Invoker(DubboInvoker、 HessianRpcInvoker、 InjvmInvoker、 RmiInvoker、 WebServiceInvoker中的任何一个)，而该Invoker实现了真正的远程服务调用。


 


＃服务提供者代码

```java
public class DemoServiceImpl


  implements DemoService


{


  public String sayHello(String name) throws RemoteException


  {


    return "Hello " + name;


  }


}

```
 


      上面这个类会被封装成为一个AbstractProxyInvoker实例，并新生成一个Exporter实例。这样当网络通讯层收到一个请求后，会找到对应的Exporter实例，并调用它所对应的AbstractProxyInvoker实例，从而真正调用了服务提供者的代码。


Dubbo里还有一些其他的Invoker类，但上面两种是最重要的。







5.

####  ExtensionLoader的完整分析




 


ExtensionLoader是Dubbo中一个非常重要的类，刚接触Dubbo源码的人看这个类的时候也多少会有点困惑，这个类非常重要，它就像是厨房里的“大厨”，按照用户的随时需要把各种“食材”烹调出来。


我们结合具体代码详细说一下ExtensionLoader的实现，下面是ServiceConfig类里的一行代码：


private static final Protocol protocol = ExtensionLoader.getExtensionLoader(Protocol.class).getAdaptiveExtension();


       上面代码的程序流程图如下所示(假定是第一次执行这行代码)：




![http://dl.iteye.com/upload/attachment/0067/0811/5614d1da-5d6e-3702-a71f-b4d4c63ebb50.png](http://dl.iteye.com/upload/attachment/0067/0811/5614d1da-5d6e-3702-a71f-b4d4c63ebb50.png)


 在这个过程中最重要的两个方法是getExtensionClasses和createAdaptiveExtensionClass(图中红色部分)，下面详细对这两个方法进行分析：


＃

#### getExtensionClasses




这个方法主要读取META-INF/services/目录下对应文件内容，在本示例代码中，是读取META-INF/services/com.alibaba.dubbo.rpc.Protocol文件中的内容，具体内容如下：


com.alibaba.dubbo.registry.support.RegistryProtocol


com.alibaba.dubbo.rpc.protocol.ProtocolFilterWrapper


com.alibaba.dubbo.rpc.protocol.ProtocolListenerWrapper


com.alibaba.dubbo.rpc.protocol.dubbo.DubboProtocol


com.alibaba.dubbo.rpc.protocol.injvm.InjvmProtocol


com.alibaba.dubbo.rpc.protocol.rmi.RmiProtocol


com.alibaba.dubbo.rpc.protocol.hessian.HessianProtocol


com.alibaba.dubbo.rpc.protocol.webservice.WebServiceProtocol


它分析该文件中的每一行(每一行对应一个类)，分析这些类，如果发现有哪个类的Annotation是@Adaptive，则找到对应的AdaptiveClass了，但由于Protocol文件里没有哪个类的Annotation是@Adaptive，所以在这个例子中该方法没找到对应的AdaptiveClass。


＃

#### createAdaptiveExtensionClass




该方法是在getExtensionClasses方法找不到AdaptiveClass的情况下被调用，该方法主要是通过字节码的方式在内存中新生成一个类，它具有AdaptiveClass的功能，Protocol就是通过这种方式获得AdaptiveClass类的。




####    

AdaptiveClass类的作用是能在运行时动态判断具体是要调用哪个类的方法，更多关于AdaptiveClass的内容请参考Dubbo官方文档。





