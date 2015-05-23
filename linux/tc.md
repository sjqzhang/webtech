

## 第一篇：概念篇


Netem 是 Linux 2.6 及以上内核版本提供的一个网络模拟功能模块。该功能模块可以用来

在性能良好的局域网中，模拟出复杂的互联网传输性能，诸如低带宽、传输延迟、丢包等等情

况。使用 Linux 2.6 (或以上) 版本内核的很多发行版 Linux 都开启了该内核功能，比如

Fedora、Ubuntu、Redhat、OpenSuse、CentOS、Debian等等。

tc 是 Linux 系统中的一个工具，全名为traffic control  （流量控制）。tc 可以用来控

制 netem 的工作模式，也就是说，如果想使用 netem ，需要至少两个条件，一个是内核中

的 netem 功能被包含，另一个是要有 tc 。

特别注意：本文介绍的内容主要倾向于利用tc工具的发包控制，来实现网络故障部分的注

入实现，对于网络流控的介绍相对较少，详细的内容大家可以参考如下网址进行深入了解：

http://www.linuxfoundation.org/collaborate/workgroups/networking /netem#Delay_distribution

## 第二篇：原理篇

TC用于Linux内核的流量控制，主要是通过在输出端口处建立一个队列来实现流量控制。

接收包从输入接口（Input Interface）进来后，经过流量限制 （Ingress Policing）丢弃不符

合规定的数据包，由输入多路分配器 （Input De-Multiplexing）进行判断选择：如果接收包的目

的是本主机，那么将该包送给上层处理；否则需要进行转发，将接收包交到转发块

（Forwarding Block）处理。转发块同时也接收本主机上层 （TCP、UDP等）产生的包。转发

块通过查看路由表，决定所处理包的下一跳。然后，对包进行排列以便将它们传送到输出接口

（Output Interface）。一般我们只能限制网卡发送的数据包，不能限制网卡接收的数据包，所以我们可

以通过改变发送次序来控制传输速率。Linux流量控制主要是在输出接口排列时进行处理和实现的。

## 第三篇：应用篇

工具可完成如下功能：（故障模拟）

模拟时延，丢包，重复包，乱序。

1、模拟延迟传输

```
tc  qdisc  add  dev  eth0  root  netem  delay  100ms
```

该命令将 eth0 网卡的传输设置为延迟100毫秒发送。

更真实的情况下，延迟值不会这么精确，会有一定的波动，我们可以用下面的情况来模拟出带

有波动性的延迟值：
```
tc  qdisc  add  dev  eth0  root  netem  delay  100ms  10ms
```


该命令将 eth0 网卡的传输设置为延迟 100ms ± 10ms （90 ~ 110 ms 之间的任意值）发送。

还可以更进一步加强这种波动的随机性：
```
tc  qdisc  add  dev  eth0  root  netem  delay  100ms  10ms  30%
```
该命令将 eth0 网卡的传输设置为 100ms ，同时，大约有 30% 的包会延迟 ± 10ms 发送。

2、模拟网络丢包

```
tc  qdisc  add  dev  eth0  root  netem  loss  1%
```
该命令将 eth0 网卡的传输设置为随机丢掉 1% 的数据包。

也可以设置丢包的成功率：

```
tc  qdisc  add  dev  eth0  root  netem  loss  1%  30%
```
该命令将 eth0 网卡的传输设置为随机丢掉 1% 的数据包，成功率为 30% 。

3、模拟包重复

```
tc  qdisc  add  dev  eth0  root  netem  duplicate 1%
```

该命令将 eth0 网卡的传输设置为随机产生 1% 的重复数据包 。

4、模拟包损坏

```
tc  qdisc  add  dev  eth0  root  netem  corrupt  0.2%
```

该命令将 eth0 网卡的传输设置为随机产生 0.2% 的损坏的数据包 。 (内核版本需在2.6.16以

        上）

5、模拟包乱序

```
tc  qdisc  change  dev  eth0  root  netem  delay  10ms   reorder  25%  50%
```

该命令将 eth0 网卡的传输设置为:有 25% 的数据包 （50%相关）会被立即发送，其他的延

迟 10 秒。

新版本中，如下命令也会在一定程度上打乱发包的次序:

```
tc  qdisc  add  dev  eth0  root  netem  delay  100ms  10ms
```

