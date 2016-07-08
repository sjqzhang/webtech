



  




  
#### 如何使用Go编程








[引言](#%E5%BC%95%E8%A8%80)

[代码的组织](#%E7%BB%84%E7%BB%87)

[工作空间](#%E5%B7%A5%E4%BD%9C%E7%A9%BA%E9%97%B4)

[GOPATH 环境变量](#GOPATH%E5%8F%98%E9%87%8F)

[包路径](#%E5%8C%85%E8%B7%AF%E5%BE%84)

[你的第一个程序](#%E5%91%BD%E4%BB%A4)

[你的第一个库](#%E5%BA%93)


[包名](#%E5%8C%85%E5%90%8D)

[测试](#%E6%B5%8B%E8%AF%95)

[远程包](#%E8%BF%9C%E7%A8%8B)

[接下来做什么](#%E6%8E%A5%E4%B8%8B%E6%9D%A5)

[获取帮助](#%E5%B8%AE%E5%8A%A9)














#### <span id="引言" ></span>引言






本文档展示了一个简单Go包的开发，并介绍了用[go工具](http://172.16.132.221:8081/cmd/go/)来获取、
构建并安装Go包及命令的标准方式。







go 工具需要你按照指定的方式来组织代码。请仔细阅读本文档，
它说明了如何以最简单的方式来准备并运行你的Go安装。







类似的视频讲解可在[此处](http://www.youtube.com/watch?v=XCsL89YtqCs)观看。








#### <span id="组织" ></span>代码的组织






#### <span id="工作空间" ></span>工作空间






go 工具为公共代码仓库中维护的开源代码而设计。
无论你会不会公布代码，该模型设置工作环境的方法都是相同的。







Go代码必须放在工作空间内。它其实就是一个目录，其中包含三个子目录：








src 目录包含Go的源文件，它们被组织成包（每个目录都对应一个包），



pkg 目录包含包对象，



bin 目录包含可执行命令。




go 工具用于构建源码包，并将其生成的二进制文件安装到 pkg
和 bin 目录中。







src 子目录通常包会含多种版本控制的代码仓库（例如Git或Mercurial），
以此来跟踪一个或多个源码包的开发。







以下例子展现了实践中工作空间的概念：







```
bin/
    streak                         # 可执行命令
    todo                           # 可执行命令
pkg/
    linux_amd64/
        code.google.com/p/goauth2/
            oauth.a                # 包对象
        github.com/nf/todo/
            task.a                 # 包对象
src/
    code.google.com/p/goauth2/
        .hg/                       # mercurial 代码库元数据
        oauth/
            oauth.go               # 包源码
            oauth_test.go          # 测试源码
    github.com/nf/
        streak/
        .git/                      # git 代码库元数据
            oauth.go               # 命令源码
            streak.go              # 命令源码
        todo/
        .git/                      # git 代码库元数据
            task/
                task.go            # 包源码
            todo.go                # 命令源码

```





此工作空间包含三个代码库（goauth2、streak 和
todo），两个命令（streak 和 todo）
以及两个库（oauth 和 task）。







命令和库从不同的源码包编译而来。[稍后](#%E5%8C%85%E5%90%8D)我们会对讨论它的特性。







<span id="GOPATH变量" ></span>
GOPATH 环境变量




GOPATH 环境变量指定了你的工作空间位置。它或许是你在开发Go代码时，
唯一需要设置的环境变量。







首先创建一个工作空间目录，并设置相应的 GOPATH。你的工作空间可以放在任何地方，
在此文档中我们使用 $HOME/go。注意，它绝对不能和你的Go安装目录相同。





```
$ mkdir $HOME/go
$ export GOPATH=$HOME/go

```





作为约定，请将此工作空间的 bin 子目录添加到你的 PATH 中：





```
$ export PATH=$PATH:$GOPATH/bin

```






#### <span id="包路径" ></span>包路径






标准库中的包有给定的短路径，比如 "fmt" 和 "net/http"。
对于你自己的包，你必须选择一个基本路径，来保证它不会与将来添加到标准库，
或其它扩展库中的包相冲突。







如果你将你的代码放到了某处的源码库，那就应当使用该源码库的根目录作为你的基本路径。
例如，若你在 [GitHub](https://github.com/) 上有账户 github.com/user
那么它就应该是你的基本路径。







注意，在你能构建这些代码之前，无需将其公布到远程代码库上。只是若你某天会发布它，
这会是个好习惯。在实践中，你可以选择任何路径名，只要它对于标准库和更大的Go生态系统来说，
是唯一的就行。







我们将使用 github.com/user 作为基本路径。在你的工作空间里创建一个目录，
我们将源码存放到其中：





```
$ mkdir -p $GOPATH/src/github.com/user

```






#### <span id="命令" ></span>你的第一个程序






要编译并运行简单的程序，首先要选择包路径（我们在这里使用
github.com/user/hello），并在你的工作空间内创建相应的包目录：





```
$ mkdir $GOPATH/src/github.com/user/hello

```





接着，在该目录中创建名为 hello.go 的文件，其内容为以下Go代码：





```
package main

import "fmt"

func main() {
	fmt.Printf("Hello, world.\n")
}

```





现在你可以用 go 工具构建并安装此程序了：





```
$ go install github.com/user/hello

```





注意，你可以在系统的任何地方运行此命令。go 工具会根据 GOPATH
指定的工作空间，在 github.com/user/hello 包内查找源码。







若在从包目录中运行 go install，也可以省略包路径：





```
$ cd $GOPATH/src/github.com/user/hello
$ go install

```





此命令会构建 hello 命令，产生一个可执行的二进制文件。
接着它会将该二进制文件作为 hello（在 Windows 下则为
hello.exe）安装到工作空间的 bin 目录中。
在我们的例子中为 $GOPATH/bin/hello，具体一点就是
$HOME/go/bin/hello。







go 工具只有在发生错误时才会打印输出，因此若这些命令没有产生输出，
就表明执行成功了。







现在，你可以在命令行下输入它的完整路径来运行它了：





```
$ $GOPATH/bin/hello
Hello, world.

```





若你已经将 $GOPATH/bin 添加到 PATH 中了，只需输入该二进制文件名即可：





```
$ hello
Hello, world.

```





若你使用源码控制系统，那现在就该初始化仓库，添加文件并提交你的第一次更改了。
再次强调，这一步是可选的：你无需使用源码控制来编写Go代码。





```
$ cd $GOPATH/src/github.com/user/hello
$ git init
Initialized empty Git repository in /home/user/go/src/github.com/user/hello/.git/
$ git add hello.go
$ git commit -m "initial commit"
[master (root-commit) 0b4507d] initial commit
 1 file changed, 1 insertion(+)
  create mode 100644 hello.go

```





将代码推送到远程仓库就留作读者的练习了。








#### <span id="库" ></span>你的第一个库






让我们编写一个库，并让 hello 程序来使用它。







同样，第一步还是选择包路径（我们将使用 github.com/user/newmath）
并创建包目录：





```
$ mkdir $GOPATH/src/github.com/user/newmath

```





接着，在该目录中创建名为 sqrt.go 的文件，内容如下：







```
// newmath 是个小例子包。
package newmath

// Sqrt 返回 x 的平方根的近似值。
func Sqrt(x float64) float64 {
	z := 0.0
	for i := 0; i < 1000; i++ {
		z -= (z*z - x) / (2 * x)
	}
	return z
}

```





现在用 go build 命令来测试该包的编译：





```
$ go build github.com/user/newmath

```





当然，若你在该包的源码目录中，只需执行：





```
$ go build

```





即可。这不会产生输出文件。想要输出的话，必须使用 go install
命令，它会将包的对象放到工作空间的 pkg 目录中。







确认 newmath 包构建完毕后，修改原来的 hello.go
文件（它位于 $GOPATH/src/github.com/user/hello）去使用它：





```
package main

import (
	"fmt"

	"github.com/user/newmath"
)

func main() {
	fmt.Printf("Hello, world.  Sqrt(2) = %v\n", newmath.Sqrt(2))
}

```





无论是安装包还是二进制文件，go 工具都会安装它所依赖的任何东西。
因此当我们通过





```
$ go install github.com/user/hello

```





来安装 hello 程序时，newmath 包也会被自动安装。







运行此程序的新版本，你应该能看到一些数值的输出：





```
$ hello
Hello, world.  Sqrt(2) = 1.414213562373095

```





做完上面这些步骤后，你的工作空间应该是这样的：







```
bin/
    hello              # 可执行命令
pkg/
    linux_amd64/       # 这里会反映出你的操作系统和架构
        github.com/user/
            newmath.a  # 包对象
src/
    github.com/user/
        hello/
            hello.go   # 命令源码
        newmath/
            sqrt.go    # 包源码

```





注意 go install 会将 newmath.a 对象放到
pkg/linux_amd64 目录中，它会反映出其源码目录。
这就是在此之后调用 go 工具，能找到包对象并避免不必要的重新编译的原因。
linux_amd64 这部分能帮助跨平台编译，并反映出你的操作系统和架构。







Go的可执行命令是静态链接的；在运行Go程序时，包对象无需存在。








#### <span id="包名" ></span>包名






Go源文件中的第一个语句必须是







```
package 名称

```





这里的 名称 即为导入该包时使用的默认名称。
（一个包中的所有文件都必须使用相同的 名称。）







Go的约定是包名为导入路径的最后一个元素：作为 “crypto/rot13”
导入的包应命名为 rot13。







可执行命令必须使用 package main。







链接成单个二进制文件的所有包，其包名无需是唯一的，只有导入路径（它们的完整文件名）
才是唯一的。







共多关于Go的命名约定见 [实效Go编程](http://172.16.132.221:8081/doc/effective_go.html#%E5%90%8D%E7%A7%B0)。








#### <span id="测试" ></span>测试






Go拥有一个轻量级的测试框架，它由 go test 命令和 testing
包构成。







你可以通过创建一个名字以 _test.go 结尾的，包含名为
TestXXX 且签名为 func (t *testing.T) 函数的文件来编写测试。
测试框架会运行每一个这样的函数；若该函数调用了像 t.Error 或
t.Fail 这样表示失败的函数，此测试即表示失败。







我们可通过创建文件 $GOPATH/src/github.com/user/newmath/sqrt_test.go
来为 newmath 添加测试，其内容如下：





```
package newmath

import "testing"

func TestSqrt(t *testing.T) {
	const in, out = 4, 2
	if x := Sqrt(in); x != out {
		t.Errorf("Sqrt(%v) = %v, want %v", in, x, out)
	}
}

```





接着使用 go test 运行该测试：





```
$ go test github.com/user/newmath
ok      github.com/user/newmath 0.165s

```





同样，若你在包目录下运行 go 工具，也可以忽略包路径





```
$ go test
ok      github.com/user/newmath 0.165s

```





更多详情可运行 [go help test](http://172.16.132.221:8081/cmd/go/#hdr-%E6%B5%8B%E8%AF%95%E5%8C%85) 或从
[testing 包文档](http://172.16.132.221:8081/pkg/testing/) 中查看。








#### <span id="远程" ></span>远程包






像Git或Mercurial这样的版本控制系统，可根据导入路径的描述来获取包源代码。go
工具可通过此特性来从远程代码库自动获取包。例如，本文档中描述的例子也可存放到Google
Code上的Mercurial仓库
[code.google.com/p/go.example](http://code.google.com/p/go.example)
中，若你在包的导入路径中包含了代码仓库的URL，go get 就会自动地获取、
构建并安装它：





```
$ go get code.google.com/p/go.example/hello
$ $GOPATH/bin/hello
Hello, world.  Sqrt(2) = 1.414213562373095

```





若指定的包不在工作空间中，go get 就会将会将它放到 GOPATH
指定的第一个工作空间内。（若该包已存在，go get 就会跳过远程获取，
其行为与 go install 相同）







在执行完上面的go get 命令后，工作空间的目录树看起来应该是这样的：







```
bin/
    hello                 # 可执行命令
pkg/
    linux_amd64/
        code.google.com/p/go.example/
            newmath.a     # 包对象
        github.com/user/
            newmath.a     # 包对象
src/
    code.google.com/p/go.example/
        hello/
            hello.go      # 命令源码
        newmath/
            sqrt.go       # 包源码
            sqrt_test.go  # 测试源码
    github.com/user/
        hello/
            hello.go      # 命令源码
        newmath/
            sqrt.go       # 包源码
            sqrt_test.go  # 测试源码

```





hello 命令及其依赖的 newmath 包都托管在Google
Code上的同一代码库中。hello.go 文件使用了同样的导入路径约定，
因此 go get 命令也能够定位并安装其依赖包。





```
import "code.google.com/p/go.example/newmath"

```





遵循此约定可让他人以最简单的方式使用你的Go包。
[Go维基](http://code.google.com/p/go-wiki/wiki/Projects) 与
[godoc.org](http://godoc.org/) 提供了外部Go项目的列表。







通过 go 工具使用远程代码库的更多详情，见
[go help remote](http://172.16.132.221:8081/cmd/go/#hdr-%E8%BF%9C%E7%A8%8B%E5%AF%BC%E5%85%A5%E8%B7%AF%E5%BE%84%E8%AF%AD%E6%B3%95)。







#### <span id="接下来" ></span>接下来做什么






订阅 [golang-announce](http://groups.google.com/group/golang-announce)
邮件列表来获取Go的稳定版发布信息。







关于如何编写清晰、地道的Go代码的技巧，见[实效Go编程](http://172.16.132.221:8081/doc/effective_go.html)。







要学习Go语言，请跟随[Go语言之旅](http://172.16.132.221:8081//tour.golang.org/)。







关于Go语言的深入性文章及其库和工具，见[文档页面](http://172.16.132.221:8081/doc/#articles)。







#### <span id="帮助" ></span>获取帮助






要获取实时帮助，请询问 [Freenode](http://freenode.net/) IRC 上
#go-nuts 中的 Gopher 们。







Go 语言的官方讨论邮件列表为
[Go Nuts](http://groups.google.com/group/golang-nuts)。







请使用[Go 问题跟踪器](http://code.google.com/p/go/issues/list)报告Bug。







构建版本 go1.3.


除[特别注明](http://code.google.com/policies.html#restrictions)外，
本页内容均采用知识共享-署名（CC-BY）3.0协议授权，代码采用[BSD协议](http://172.16.132.221:8081/LICENSE)授权。

[服务条款](http://172.16.132.221:8081/doc/tos.html) |
[隐私政策](http://www.google.com/intl/en/policies/privacy/)










