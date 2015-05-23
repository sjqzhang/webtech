

Ubuntu安装Go：


sudo add-apt-repository ppa:gophers/go


sudo apt-get update


sudo apt-get install golang-stable


或


sudo apt-get install golang




或者直接下载go语言安装包


环境配置：


vi /etc/profile


加入


export GOROOT=/usr/lib/go


export GOARCH=386


export GOOS=linux


export GOPATH=/home/administrator/workspace/go


export GOBIN=$GOPATH/bin


export PATH=$GOPATH/bin:$PATH


source /etc/profile


在新建GOPATH下新建三个目录


mkdir src pkg bin


src 存放源码


pkg 存放编译生成的文件


bin 存放生成的可执行文件


创建第一个go应用


cd $GOPATH/src


mkdir test1


cd test1


vi t1.go



```
package main

import "fmt"

func main() {
    fmt.Println("Hello world, I'm learning Golang")
}

```

main.main()是go应用的入口


编译方式


1、进入对应的应用包目录，然后执行go install，就可以安装了


2、在任意的目录执行如下代码go install test


3、进入对应的应用包目录，然后执行go build,就会在当前目录生成可执行文件


 


配置VIM支持GO语言语法高亮


cp -r $GOROOT/misc/vim/* ~/.vim/ 注：$GOROOT是go的安装目录


vi ~/.vimrc 加入


filetype plugin indent on


syntax on


安装Gocode


go get -u github.com/nsf/gocode


gocode默认安装到$GOBIN下面。


配置Gocode


~ cd $GOPATH/src/github.com/nsf/gocode/vim


~ ./update.bash


~ gocode set propose-builtins true


propose-builtins true







