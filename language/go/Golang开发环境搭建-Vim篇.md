
             
 虽说  [sublimetext3](http://www.sublimetext.com/3) + [gosublime](https://github.com/DisposaBoy/GoSublime) + [gocode](https://github.com/nsf/gocode)  是目前较为 流行的Golang开发环境组合，但作为一名VIMer，没有一套得心应手的 [Vim](http://www.vim.org/) for Golang dev心里总是过不去的。Golang虽然年轻，但即便是从Go 1版本发布(2012年3月28日)算起，掐指算来也有小三年了。全世界的开发者已经为Golang贡献了较为成熟的Vim插件了。有了这些插件，搭建出 一套高效的Golang开发环境还是不难的，网上也有大量的资料可以参考，其中就有 [vim-go](https://github.com/fatih/vim-go) 作者自己发表的一篇文章《 [Go development environment for Vim](http://blog.gopheracademy.com/vimgo-development-environment/) 》。不过看别人 写的与自己搭建体验的还是有大不同的，于是想来想去还是把整个过程记录下来。 

 
 一、一个干净的环境

 
 找个干净的基础环境，方便确认每个搭建步骤后的效果：

 
   Ubuntu 14.04x86_64 

 vim version 7.4.52

 go version go1.4beta1 linux/amd64

  

 
 再准备一个编辑Go源码的测试源文件：

 
  //hellogolang.go 

 
  package main 

 
  import "fmt" 

 
   func main() {

 fmt.Println("Hello Golang!")

 }

  

 
 用于验证每个搭建步骤后的变化。

 
 二、严格按照vim-go的官方说明逐一搭建

 
 Vim-go是当前使用最为广泛的用于搭建Golang开发环境的vim插件，这里我同样使用vim-go作为核心和基础进行环境搭建的。vim-go利 用开源Vim插件管理器安装， [gmarik/Vundle.vim](https://github.com/gmarik/Vundle.vim) 是目前被推荐次数更多的Vim插件管理器，超过了 [pathogen](http://www.vim.org/scripts/script.php?script_id=2332) 。这里我们 就用vundle来作为Vim的插件管理工具。 

 
 1、安装Vundle.vim

 
 Vundle.vim的安装步骤如下：

 
   mkdir ~/.vim/bundle

 git clone [https://github.com/gmarik/Vundle.vim.git](https://github.com/gmarik/Vundle.vim.git) ~/.vim/bundle/Vundle.vim    

  

 
 创建 ~/.vimrc 文件(如果你没有这个文件的话)，在文件顶部添加有关Vundle.vim的配置： 

 
   set nocompatible              " be iMproved, required

 filetype off                  " required

  

 
   " set the runtime path to include Vundle and initialize

 set rtp+=~/.vim/bundle/Vundle.vim

 call vundle#begin()

  

 
   " let Vundle manage Vundle, required

 Plugin 'gmarik/Vundle.vim'

  

 
   " All of your Plugins must be added before the following line

 call vundle#end()            " required

 filetype plugin indent on    " required

  

 
 此时Vim仅安装了Vundle.vim这一个插件。编辑hellogolang.go时与编辑普通文本文件无异，一切都还是Vim的默认属性。

 
 2、安装Vim-go

 
 编辑 ~/.vimrc ，在 vundle#begin 和 vundle#end 间增加一行： 

 
  Plugin 'fatih/vim-go' 

 
 在Vim内执行  ![http://img1.tuicool.com/YNNnmev.gif](http://img1.tuicool.com/YNNnmev.gif) luginInstall  ， 

 
 Vundle.vim会在左侧打开一个Vundle Installer Preview子窗口，窗口下方会提示： “Processing 'fatih/vim-go'” ，待安装完毕后，提示信息变 成“ Done!”。 

 
  这时，我们可以看到.vim/bundle下多了一个vim-go文件夹： 

 
   $ ls .vim/bundle/

 vim-go/  Vundle.vim/

  

 
 此时，再次编辑hellogolang.go，  语法高亮  有了，  保存时自动format  （利用$GOBIN/gofmt）也有了，但其他高级功能，比如自动import缺失的 package、自动补齐仍然没有，我们还要继续安装一些东东。 

 
 3、安装go.tools Binaries

 
 vim-go安装说明中提到所有必要的binary需要先安装好，比如gocode、godef、goimports等。

 
 通过 :GoInstallBinaries ，这些vim-go依赖的二进制工具将会自动被下载，并被安装到 $GOBIN 下或 $GOPATH/bin 下。（这个工具需要依赖git或hg，需要提前安装到你的OS中。） 

 
  :GoInstallBinaries 的执行是交互式的，你需要回车确认： 

 
  
    vim-go: gocode not found. Installing github.com/nsf/gocode to folder /home/tonybai/go/bin

 vim-go: goimports not found. Installing code.google.com/p/go.tools/cmd/goimports to folder /home/tonybai/go/bin/

 vim-go: godef not found. Installing code.google.com/p/rog-go/exp/cmd/godef to folder /home/tonybai/go/bin/

 vim-go: oracle not found. Installing code.google.com/p/go.tools/cmd/oracle to folder /home/tonybai/go/bin/

 vim-go: gorename not found. Installing code.google.com/p/go.tools/cmd/gorename to folder /home/tonybai/go/bin/

  

 
   vim-go: errcheck not found. Installing github.com/kisielk/errcheck to folder /home/tonybai/go/bin/ 

 
 

 
 不过这些代码多在code.google.com上托管，因此由于众所周知的原因，vim-go的自动安装很可能以失败告终，这样就需要你根据上 面日志中提到的各个工具的源码地址逐一去下载并本地安装。无法搭梯子的，可以通过http://gopm.io 下载相关包。

 
  
  安装后，$GOBIN下的新增Binaries如下：

 
   -rwxr-xr-x  1 tonybai tonybai  5735552 11??  7 11:03 errcheck*

 -rwxr-xr-x  1 tonybai tonybai  9951008 11??  7 10:33 gocode*

 -rwxr-xr-x  1 tonybai tonybai  5742800 11??  7 11:07 godef*

 -rwxr-xr-x  1 tonybai tonybai  4994120 11??  7 11:00 goimports*

 -rwxr-xr-x  1 tonybai tonybai  5750152 11??  7 11:03 golint*

 -rwxr-xr-x  1 tonybai tonybai  6381832 11??  7 11:01 gorename*

 -rwxr-xr-x  1 tonybai tonybai  2954392 11??  7 10:38 gotags*

 -rwxr-xr-x  1 tonybai tonybai  9222856 11??  7 11:01 oracle*

  
 

 
 安装好这些Binaries后，我们来看看哪些特性被支持了。

 
 再次编辑 hellogolang.go ： 

 
   - 新起一行输入fmt.，然后ctrl+x, ctrl+o，Vim 会弹出补齐提示下拉框，不过并非实时跟随的那种补齐，这个补齐是由gocode提供的。

 – 输入一行代码：time.Sleep(time.Second)，执行:GoImports，Vim会自动导入time包。

 – 将光标移到Sleep函数上，执行:GoDef或命令模式下敲入gd，Vim会打开$GOROOT/src/time/sleep.go中 的Sleep函数的定义。执行:b 1返回到hellogolang.go。

 – 执行:GoLint，运行golint在当前Go源文件上。

 – 执行:GoDoc，打开当前光标对应符号的Go文档。

 – 执行:GoVet，在当前目录下运行go vet在当前Go源文件上。

 – 执行:GoRun，编译运行当前main package。

 – 执行:GoBuild，编译当前包，这取决于你的源文件，GoBuild不产生结果文件。

 – 执行:GoInstall，安装当前包。

 – 执行:GoTest，测试你当前路径下地_test.go文件。

 – 执行:GoCoverage，创建一个测试覆盖结果文件，并打开浏览器展示当前包的情况。

 – 执行:GoErrCheck，检查当前包种可能的未捕获的errors。

 – 执行:GoFiles，显示当前包对应的源文件列表。

 – 执行:GoDeps，显示当前包的依赖包列表。

 – 执行:GoImplements，显示当前类型实现的interface列表。

 – 执行:GoRename [to]，将当前光标下的符号替换为[to]。

  

 
 三、其他插件

 
 到目前为止，我们还有若干特性没能实现，重点是：

 
   – 实时跟随的代码补齐

 – Code Snippet support

  

 
 1、安装YCM(Your Complete Me)

 
 在~/.vimrc中添加一行：

 
  Plugin 'Valloric/YouCompleteMe' 

 
 保存退出后，再打开~/.vimrc并执行  ![http://img1.tuicool.com/YNNnmev.gif](http://img1.tuicool.com/YNNnmev.gif) luginInstall  。 

 
 安装完后，下面的提示栏提示：

 
  ycm_client_support.[so|pyd|dll] and ycm_core.[so|pyd|dll] not detected; you need to compile YCM before using it. Read the docs! 

 
 似乎YCM是用了C++编写的模块对性能进行优化了，于是需要手工编译YCM的support库。步骤如下：

 
   sudo apt-get install build-essential cmake python-dev

 cd ~/.vim/bundle/YouCompleteMe

 ./install.sh

  

 
 构建（编译C++很慢，需要耐心的等一会）ok后，再打开hellogolang.go，逐字的实时补全功能就具备了！Cool！

 
  2、安装 [ UltiSnips ](https://github.com/SirVer/ultisnips) 

 
 Vim-go默认是用ultisnips引擎插件，但这个插件需要单独安装。

 
 同样，我们利用vundle来安装它，在~/.vimrc中添加一行：

 
  Plugin 'SirVer/ultisnips' 

 
 snippet和snippet引擎是分开的。ultisnips是引擎，vim-go的go snippet定义在这里

 
   [https://github.com/fatih/vim-go/blob/master/gosnippets/snippets/go.snip](https://github.com/fatih/vim-go/blob/master/gosnippets/snippets/go.snip)  

 
 编辑hellogolang.go，按照go.snip中的说明，我们输入func后敲击tab键，我们发现期待的：

 
   func name(params) type {

 

 }

  

 
 并没有出现。反倒是YCM的下拉提示显示在那里让你选择。似乎是ultisnips和YCM的键组合冲突了。ultisnips官方说明也的确如 此。ultisnips默认是用Tab展开snippet的，而YCM中的Tab用来选择补齐项，我们可以通过设置来避免这些。

 
 我们在.vimrc中添加如下setting：

 
   " YCM settings

 let g:ycm_key_list_select_completion = [' 
    
     ', ' 
     ']

 
      let g:ycm_key_list_previous_completion = [' 
       ']

 
        let g:ycm_key_invoke_completion = '<C-Space>'

 
       

 
     

  

 
   " UltiSnips setting

 let g:UltiSnipsExpandTrigger="<tab>"

 let g:UltiSnipsJumpForwardTrigger="<c-b>"

 let g:UltiSnipsJumpBackwardTrigger="<c-z>"

  

 
 这样让YCM通过回车和向下的箭头来做list item正向选择，通过向上箭头做反向选择。通过ctrl+space来原地触发补齐提示。

 
 而ultisnips则是用tab做snippet展开，ctrl+b正向切换占位符，ctrl+z反向切换占位符。

 
 3、安装molokai theme

 
 Molokai theme是TextMate的theme的vim port，看着截图挺不错的，于是也安装了一下。

 
   mkdir ~/.vim/colors

 下载或copy [https://github.com /fatih/molokai/blob/master/colors/molokai.vim到~/.vim](https://github.com/fatih/molokai/blob/master/colors/molokai.vim%E5%88%B0%7E/.vim) /colors目录下 

 在.vimrc添加一行：colorscheme molokai

  

 
 四、.vimrc

 
 前面讲到了vim-go有许多命令，在:xx模式下执行多显不便，于是你可以定义一些Mappings，比如：

 
   " set mapleader

 let mapleader = ","

  

 
   " vim-go custom mappings

 au FileType go nmap <Leader>s <Plug>(go-implements)

 au FileType go nmap <Leader>i <Plug>(go-info)

 au FileType go nmap <Leader>gd <Plug>(go-doc)

 au FileType go nmap <Leader>gv <Plug>(go-doc-vertical)

 au FileType go nmap <leader>r <Plug>(go-run)

 au FileType go nmap <leader>b <Plug>(go-build)

 au FileType go nmap <leader>t <Plug>(go-test)

 au FileType go nmap <leader>c <Plug>(go-coverage)

 au FileType go nmap <Leader>ds <Plug>(go-def-split)

 au FileType go nmap <Leader>dv <Plug>(go-def-vertical)

 au FileType go nmap <Leader>dt <Plug>(go-def-tab)

 au FileType go nmap <Leader>e <Plug>(go-rename)

  

 
 这样我们在命令模式下，输入 <,>+<r> 就是运行 当前main包，以此类推。 

 
 另外下面这个配置使得我们在save file时既可以格式化代码，又可以自动插入包导入语句（或删除不用的包导入语句）。

 
   " vim-go settings

 let g:go_fmt_command = "goimports"

  

 
 到这里，我们的Vim Golang开发环境就基本搭建好了。snippet+实时补齐让你Coding如飞！

 
 五、附录：.vimrc文件

 
 下面是截至目前为止全量.vimrc文件的内容：

 
   set nocompatible              " be iMproved, required

 filetype off                  " required

 colorscheme molokai

  

 
   " set the runtime path to include Vundle and initialize

 set rtp+=~/.vim/bundle/Vundle.vim

 call vundle#begin()

  

 
   " let Vundle manage Vundle, required

 Plugin 'gmarik/Vundle.vim'

 Plugin 'fatih/vim-go'

 Plugin 'Valloric/YouCompleteMe'

  

 
  Plugin 'SirVer/ultisnips' 

 
   " All of your Plugins must be added before the following line

 call vundle#end()            " required

 filetype plugin indent on    " required

  

 
   " set mapleader

 let mapleader = ","

  

 
   " vim-go custom mappings

 au FileType go nmap <Leader>s <Plug>(go-implements)

 au FileType go nmap <Leader>i <Plug>(go-info)

 au FileType go nmap <Leader>gd <Plug>(go-doc)

 au FileType go nmap <Leader>gv <Plug>(go-doc-vertical)

 au FileType go nmap <leader>r <Plug>(go-run)

 au FileType go nmap <leader>b <Plug>(go-build)

 au FileType go nmap <leader>t <Plug>(go-test)

 au FileType go nmap <leader>c <Plug>(go-coverage)

 au FileType go nmap <Leader>ds <Plug>(go-def-split)

 au FileType go nmap <Leader>dv <Plug>(go-def-vertical)

 au FileType go nmap <Leader>dt <Plug>(go-def-tab)

 au FileType go nmap <Leader>e <Plug>(go-rename)

  

 
   " vim-go settings

 let g:go_fmt_command = "goimports"

  

 
   " YCM settings

 let g:ycm_key_list_select_completion = [' 
    
     ', ' 
     ']

 
      let g:ycm_key_list_previous_completion = [' 
       
        ', ' 
        ']

 
         let g:ycm_key_invoke_completion = '<C-Space>'

 
        </s-enter>

 
     

  

 
   " UltiSnips settings

 let g:UltiSnipsExpandTrigger="<tab>"

 let g:UltiSnipsJumpForwardTrigger="<c-b>"

 let g:UltiSnipsJumpBackwardTrigger="<c-z>"

  

 
 © 2014,bigwhite. 版权所有. 

 



        

