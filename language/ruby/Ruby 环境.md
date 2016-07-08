 Ruby 环境
 
#### 本地环境设置

 如果您想要设置 Ruby 编程语言的环境，请阅读本章节的内容。本章将向您讲解与环境设置有关的所有重要的主题。建议先学习下面几个主题，然后再进一步深入学习其他主题：

 
[Linux/Unix 上的 Ruby 安装](http://www.w3cschool.cc/ruby/ruby-installation-unix.html)：如果您想要在 Linux/Unix 上配置开发环境，那么请查看本章节的内容。


 [Windows 上的 Ruby 安装](http://www.w3cschool.cc/ruby/ruby-installation-windows.html)：如果您想要在 Windows 上配置开发环境，那么请查看本章节的内容。


 [Ruby 命令行选项](http://www.w3cschool.cc/ruby/ruby-command-line-options.html)：本章节列出了所有的命令行选项，您可以和 Ruby 解释器一起使用这些命令行选项。


 [Ruby 环境变量](http://www.w3cschool.cc/ruby/ruby-environment-variables.html)：本章节列出了所有重要的环境变量列表，设置这些环境变量以便让 Ruby 解释器工作。


 

#### 流行的 Ruby 编辑器

 为了编写 Ruby 程序，您需要一个编辑器：

 
如果您是在 Windows 上进行编写，那么您可以使用任何简单的文本编辑器，比如 Notepad 或 Edit plus。
 
[VIM](http://www.w3cschool.cc//vim.sourceforge.net/)（Vi IMproved）是一个简单的文本编辑器，几乎在所有的 Unix 上都是可用的，现在也能在 Windows 上使用。另外，您还可以使用您喜欢的 vi 编辑器来编写 Ruby 程序。
 
[RubyWin](http://www.w3cschool.cc//homepage1.nifty.com/markey/ruby/rubywin/index_e.html) 是一个针对 Windows 的 Ruby 集成开发环境（IDE）。
 Ruby Development Environment [（RDE）](http://www.w3cschool.cc//homepage2.nifty.com/sakazuki/rde_en/) 对于 Windows 用户来说，也是一个很好的集成开发环境（IDE）。
 

#### 交互式 Ruby（IRb）

 交互式 Ruby（IRb）为体验提供了一个 shell。在 IRb shell 内，您可以逐行立即查看解释结果。

 这个工具会随着 Ruby 的安装自动带有，所以您不需要做其他额外的事情，IRb 即可正常工作。

 只需要在命令提示符中键入 irb，一个交互式 Ruby Session 将会开始，如下所示：

 
```

$irb
irb 0.6.1(99/09/16)
irb(main):001:0> def hello
irb(main):002:1> out = "Hello World"
irb(main):003:1> puts out
irb(main):004:1> end
nil
irb(main):005:0> hello
Hello World
nil
irb(main):006:0>

```
 这里您可以先不用关心上面命令的执行内容，我们将在后续的章节中向您讲解。

 
#### 接下来将学习什么？

 假设现在您已经设置好 Ruby 环境，且已经做好编写第一个 Ruby 程序的准备。下一章我们将向您讲解如何编写 Ruby 程序。

 

