ＷＥＢ技术图书

本文作者以一个使用Go语言编写的Web服务为例，重点介绍了如何通过Scratch创建一个尽可能小的Docker容器。在尝试过程中，作 者也发现了很多问题，也逐一得到解决，感兴趣的读者一定要看看作者解决问题的思路。本文看点包括如何从Docker内部调用Docker、创建 Docker容器的Docker容器、Go语言创建静态链接的可执行文件。

当在使用Docker的时候，如果想使用预先配置好的容器，就需要下载很大的镜像包。一个简单的Ubuntu的容器就有200多兆，如果安装了相 关的软件，还会更大。在很多情况下，你并不需要Ubuntu容器内的所有功能模块，例如，如果你只想运行简单的Go语言编写的Web服务，而它并不需要任 何其他工具。

我一直在寻找尽可能小的容器，然后发现了这个：
```
docker pull scratch 

```

Scratch镜像很赞，它简洁、小巧而且快速， 它没有bug、安全漏洞、延缓的代码或技术债务。这是因为它基本上是空的。除了有点儿被Docker添加的metadata (译注：元数据为描述数据的数据)。你可以用以下命令创建这个scratch镜像（官方文档上有描述）：
```
tar cv --files-from /dev/null | docker import - scratch 

```

这是它，非常小的一个Docker镜像。到此结束!

...或许我们还可以来探讨更多的东西。例如，如何使用scratch镜像呢？这又带来了一些挑战。

为Scratch镜像创建内容

我们可以在一个空的Scratch镜像里运行什么？无依赖的可执行文件。你有没有不需要依赖的可执行文件吗？

我曾经用Python、Java和JavaScript编写过代码。这些语言/平台需要安装运行环境。最近，我开始研究Go(如果你喜欢话用 GoLang)语言平台。看起来Go是静态链接的。所以我尝试编写一个简单的hello world Web服务器，并在Scratch容器中运行它。下面是Hello World Web服务器的代码：
```
package main 
import ( 
"fmt" 
"net/http" 
) 
func helloHandler(w http.ResponseWriter， r *http.Request) { 
fmt.Fprintln(w， "Hello World from Go in minimal Docker container") 
} 
func main() { 
http.HandleFunc("/"， helloHandler) 
fmt.Println("Started， serving at 8080") 
err := http.ListenAndServe(":8080"， nil) 
if err != nil { 
    panic("ListenAndServe: " + err.Error()) 
} 
} 

```

很显然，我不能在Scratch容器内编译我的Web服务，因为此容器内没Go编译器。并且，因为我的工作是在Mac上，我也不能编译的Linux二进制。 （其实，交叉编译GoLang源到不同的平台是可能的，但是这是另一篇文章的资料）

因此，首先我需要一个包含Go编译器的Docker容器。先从简单的开始：
```
docker run -ti google/golang /bin/bash 

```

在这个容器内，我可以构建Go Web服务，我已经将代码提交到GitHub仓库：
```
go get github.com/adriaandejonge/helloworld 

```

go get命令和go buildy欧典想，它允许获取远程代码包并构建远程依赖。你可以通过运行可执行文件来启动服务：
```
$GOPATH/bin/helloworld 

```

很棒，它执行了。但这不是我们期待的，我们想让hello world Web服务运行在Scratch容器内。所以，我们需要编写Dockerfile：
```
FROM scratch ADD bin/helloworld /helloworld 
CMD [&quot;/helloworld&quot;] 

```

然后启动。不幸的是，我们使用google/golang容器的方式是没有办法建立这个Dockerfile的。因此，我们首先需要找到一种可以从容器内访问Docker的方法。
从容器内调用Docker

使用Docker的时候，你迟早会有从Docker内部控制Docker的需求。有许多方法可以做到这一点。你可以使用递归的方式，在Docker内运行Docker。然而，这似乎过于复杂，并且又回到了原点：容量大的容器。

你还可以用一些额外的命令参数来提供访问外部Docker给实例：
```
docker run -v /var/run/docker.sock:/var/run/docker.sock -v $(which docker):$(which docker) -ti google/golang /bin/bash 

```

在讲到下一步之前，请重新运行Go编译器，因为重新启动一个容器Docker会忘记之前的编译内容：
```
go get github.com/adriaandejonge/helloworld 

```

当启动容器时，-v 参数在Docker容器内创建一个卷，并允许提供从Docker上的文件作为输入。/var/run/docker.sock是Unix套接字，允许访问Docker服务器。$(which docker)可 以为容器提供Docker可执行文件的路径。但是，当在Apple的boot2docker上运行Docker时，使用该命令需要注意，如果Docker 可执行文件被安装在不同的路径上相对于安装在boot2docker的虚拟机，这将会导致不匹配错误：它将是boot2docker虚拟服务器内的可执行 文件被导入容器内。所以，你可能要替换$(which docker)为/usr/local/bin/docker。同样，如果你运行在不同的系统，/var/run/docker.sock有一个不同的位置，你需要相应地调整。

现在，你可以在 google/golang容器内使用在$GOPATH路径下的Dockerfile，例子中，它指向/gopath 。其实，我已经提交Dockerfile到GitHub上。因此，你可以在Go build目录中复制它，命令如下：
```
cp $GOPATH/src/github.com/adriaandejonge/helloworld/Dockerfile $GOPATH 

```

编译好的二进制文件位于$GOPATH/bin 目录下，当构建Dockerfile时它不可能从父目录中include文件。所以在复制后，下一步是：
```
docker build -t adejonge/helloworld $GOPATH 

```

如果一切顺利，那么，Docker会有类似输出：
```
Successfully built 6ff3fd5a381d 

```

然后您可以运行容器：
```
docker run -ti --name hellobroken adejonge/helloworld 

```

但不幸的是，Docker会输出类似于：
```
2014/07/02 17:06:48 no such file or directory 

```

那么到底是怎么回事？我们的Scratch容器内已经有静态链接的可执行文件。难道我们犯了什么错误？

事实证明，Go不是静态链接库的，或者至少不是所有的库。在Linux下，我们可以看到动态链接库用以下命令：
```
ldd $GOPATH/bin/helloworld 

```

其中输入类似以下内容：
```
linux-vdso.so.1 => (0x00007fff039fe000) 
libpthread.so.0 => /lib/x86_64-linux-gnu/libpthread.so.0 (0x00007f61df30f000) 
libc.so.6 => /lib/x86_64-linux-gnu/libc.so.6 (0x00007f61def84000) 
/lib64/ld-linux-x86-64.so.2 (0x00007f61df530000) 

```

所以，在我们才可以运行的Hello World Web服务器之前，我们需要告诉Go编译器真正的做静态链接。
Go语言创建静态链接的可执行文件

为了创建静态链接的可执行文件，我们需要使用cgo编译器，而不是Go编译器。命令如下：
```
CGO_ENABLED=0 go get -a -ldflags '-s' github.com/adriaandejonge/helloworld 

```

CGO_ENABLED 环境变量表示使用cgo编译器，而不是Go编译器。-a参数表示要重建所有的依赖。否则，还是以动态链接依赖为结果。-ldflags -s一个不错的额外标志，它可以缩减生成的可执行文件约50％的大小，没有cgo编译器你也可以使用该命令，50%是除去了调试信息的结果。

重新运行ldd命令：
```
ldd $GOPATH/bin/helloworld 

```

现在应该有类似输出：

not a dynamic executable

然后重新运行用Scratch镜像构建Docker容器那一步：
```
docker build -t adejonge/helloworld $GOPATH 

```

如果一切顺利，Docker会有类似输出：
```
Successfully built 6ff3fd5a381d 

```

接着运行容器：
```
docker run -ti --name helloworld adejonge/helloworld 

```

而这个时候会输出：
```
Started,serving at 8080 

```

目前为止，有许多步骤，会有很多错误的余地。让我们退出google/golang 容器：
```
&lt;Press Ctrl-C> exit 

```

您可以检查容器和镜像的存在或不存在：
```
docker ps -a docker images -a 

```

并且您可以清理Docker：
```
docker rm -f hello world docker rmi -f adejonge/helloworld 

```
创建Docker容器的Docker容器

到目前为止我们已经敲了这么多命令，我们可以把这些步骤写在Dockerfile中，Docker会帮我们自动处理：
```
FROM google/golang RUN CGO_ENABLED=0 go get -a -ldflags '-s' github.com/adriaandejonge/helloworld 
RUN cp /gopath/src/github.com/adriaandejonge/helloworld/Dockerfile /gopath 
CMD docker build -t adejonge/helloworld gopath 

```

我提交了这个Dockerfile到另一个GitHub库。它可以用这个命令构建：
```
docker build -t adejonge/hellobuild github.com/adriaandejonge/hellobuild 

```

-t表示镜像的标签名为adejonge/hellobuild和隐式标签名为latest。这些名称会在之后的删除镜像中用到。

接下来，你可以创建容器用刚才提供的标签：
```
docker run -v /var/run/docker.sock:/var/run/docker.sock -v $(which docker):$(which docker) -ti --name hellobuild adejonge/hellobuild 

```

提供--name hellobuild 参数使得在运行后更容易移除容器。事实上，你现在就可以这样做，因为在运行此命令后，你已经创建了adejonge/helloworld的镜像：
```
docker rm -f hellobuild docker rmi -f adejonge/hellobuild  

```

现在你可以运行新的helloworld容器：
```
docker run -ti --name helloworld adejonge/helloworld 

```

因为所有这些步骤都出自同一命令行运行，而无需在Docker容器内打开bash shell，你可以将这些步骤添加到一个bash脚本，并自动运行。我已经将bash脚本提交到了GitHub库。

另外，如果你想尝试一个尽可能小的容器，但是又不想遵循博客中的步骤，你也可以用我提交到Docker Hub库的镜像：
```
docker pull adejonge/helloworld 

```

docker images -a你可以看到大小为3.6MB。当然，如果你能创建一个比我使用 Go 编写的 Web 服务还小的可执行文件，那就可以让它更小。使用 C 语言或者是汇编，你可以这样做到。尽管如此，你不可能使得它比 scratch 镜像还小。
