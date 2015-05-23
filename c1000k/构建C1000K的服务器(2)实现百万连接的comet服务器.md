
[构建C1000K的服务器(2) – 实现百万连接的comet服务器](http://www.ideawu.net/blog/archives/742.html)
				
[C/C++语言编程](http://www.ideawu.net/blog/category/c-programming), [高性能Web架构](http://www.ideawu.net/blog/category/high-performance)


				
这是关于 [C1000K](http://www.ideawu.net/blog/tag/c1000k) 序列文章的第二篇, 在前一篇文章 [构建C1000K的服务器(1) – 基础](http://www.ideawu.net/blog/archives/740.html) 中, 介绍了支持 C1000K 的 Linux 系统的内核参数调整和系统设置. 在本篇文章中, 将对一个真正的应用服务器做 C1000K 测试.


Comet 服务器是一类逻辑相对简单, 需要高并发连接的服务器. Comet 在网站系统中的应用非常广泛, 可以见这篇日志的介绍: [http://www.ideawu.net/blog/archives/737.html](http://www.ideawu.net/blog/archives/737.html).



#### HTTP 协议处理

要开发一个支持百万并发连接的 Comet 服务器, 我选择 C/C++ 语言, 当然还有其它的选择如 Erlang, Java 等. 对于一个只支持 long-polling Comet 服务器, 首先要具备解析 HTTP 协议的能力, 我选择 libevent 来处理 HTTP 协议.






#### 通道和订阅者管理

服务器在启动的时候, 就预先分配了 100 万个通道对象的空间, 但订阅者对象是按需分配的, 通过内存池方式. 100 万个通道对象和程序的其它数据占用了 24MB 的内存.



#### Benchmark

启动 icomet 服务器:



```

./icomet

```

服务器监听了 100 个端口, 是为了测试方便, 原因见前一篇文章的分析: [构建C1000K的服务器(1) – 基础](http://www.ideawu.net/blog/archives/740.html).


然后启动 benchmark 客户端:



```

./tools/benchmark 127.0.0.1 8100

```

benchmark 程序每创建十万个连接, 就会暂停, 按回车后继续. 通过 top/ps 查看 icomet 进程的内存占用. 最终, 得出如下数据.


|连接数|进程VIRT|进程RES|
|:--|:--|:--|
|0|39m|24m|
|100000|302m|288m|
|200000|579m|565m|
|500000|1441m|1427m|
|1000000|2734m|2720m|
可以看到, 每一个 Comet 连接大约占用了 2.7KB 的内存. 此时, 服务器空闲, 进程占用 CPU 为 0%.


项目的代码在: [https://github.com/ideawu/icomet](https://github.com/ideawu/icomet), 欢迎大家试用, 并反馈你的测试数据.





#### Related posts:


[HTTP 长连接技术 Comet](http://www.ideawu.net/blog/archives/821.html)

[构建C1000K的服务器(1) – 基础](http://www.ideawu.net/blog/archives/740.html)

[iComet 的一个应用场景](http://www.ideawu.net/blog/archives/797.html)

[长连接技术的应用](http://www.ideawu.net/blog/archives/781.html)





