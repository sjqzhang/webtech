<span id="git" ></span>
服务器上的 Git[¶](#git)

到目前为止，你应该已经学会了使用 Git 来完成日常工作。然而，如果想与他人合作，还需要一个远程的 Git 仓库。尽管技术上可以从个人的仓库里推送和拉取修改内容，但我们不鼓励这样做，因为一不留心就很容易弄混其他人的进度。另外，你也一定希望合作者们即使在自己不开机的时候也能从仓库获取数据 — 拥有一个更稳定的公共仓库十分有用。因此，更好的合作方式是建立一个大家都可以访问的共享仓库，从那里推送和拉取数据。我们将把这个仓库称为 “Git 服务器”；代理一个 Git 仓库只需要花费很少的资源，几乎从不需要整个服务器来支持它的运行。


架设一台 Git 服务器并不难。第一步是选择与服务器通讯的协议。本章第一节将介绍可用的协议以及各自优缺点。下面一节将介绍一些针对各个协议典型的设置以及如何在服务器上实施。最后，如果你不介意在他人服务器上保存你的代码，又想免去自己架设和维护服务器的麻烦，倒可以试试我们介绍的几个仓库托管服务。


如果你对架设自己的服务器没兴趣，可以跳到本章最后一节去看看如何申请一个代码托管服务的账户然后继续下一章，我们会在那里讨论分布式源码控制环境的林林总总。


远程仓库通常只是一个裸仓库 （bare repository） — 即一个没有当前工作目录的仓库。因为该仓库只是一个合作媒介，所以不需要从硬盘上取出最新版本的快照；仓库里存放的仅仅是 Git 的数据。简单地说，裸仓库就是你工作目录中 .git 子目录内的内容。





[协议](http://docs.pythontab.com/github/gitbook/Git-on-the-Server/The-Protocols.html)

[本地协议](http://docs.pythontab.com/github/gitbook/Git-on-the-Server/The-Protocols.html#id2)
[优点](http://docs.pythontab.com/github/gitbook/Git-on-the-Server/The-Protocols.html#id3)

[缺点](http://docs.pythontab.com/github/gitbook/Git-on-the-Server/The-Protocols.html#id4)





[SSH 协议](http://docs.pythontab.com/github/gitbook/Git-on-the-Server/The-Protocols.html#ssh)
[优点](http://docs.pythontab.com/github/gitbook/Git-on-the-Server/The-Protocols.html#id5)

[缺点](http://docs.pythontab.com/github/gitbook/Git-on-the-Server/The-Protocols.html#id6)





[Git 协议](http://docs.pythontab.com/github/gitbook/Git-on-the-Server/The-Protocols.html#git)
[优点](http://docs.pythontab.com/github/gitbook/Git-on-the-Server/The-Protocols.html#id7)

[缺点](http://docs.pythontab.com/github/gitbook/Git-on-the-Server/The-Protocols.html#id8)





[HTTP/S 协议](http://docs.pythontab.com/github/gitbook/Git-on-the-Server/The-Protocols.html#http-s)
[优点](http://docs.pythontab.com/github/gitbook/Git-on-the-Server/The-Protocols.html#id9)

[缺点](http://docs.pythontab.com/github/gitbook/Git-on-the-Server/The-Protocols.html#id10)








[在服务器上部署 Git](http://docs.pythontab.com/github/gitbook/Git-on-the-Server/Getting-Git-on-a-Server.html)
[把裸仓库移到服务器上](http://docs.pythontab.com/github/gitbook/Git-on-the-Server/Getting-Git-on-a-Server.html#id1)

[小型安装](http://docs.pythontab.com/github/gitbook/Git-on-the-Server/Getting-Git-on-a-Server.html#id2)

[SSH 连接](http://docs.pythontab.com/github/gitbook/Git-on-the-Server/Getting-Git-on-a-Server.html#ssh)




[生成 SSH 公钥](http://docs.pythontab.com/github/gitbook/Git-on-the-Server/Generating-Your-SSH-Public-Key.html)

[架设服务器](http://docs.pythontab.com/github/gitbook/Git-on-the-Server/Setting-Up-the-Server.html)

[公共访问](http://docs.pythontab.com/github/gitbook/Git-on-the-Server/Public-Access.html)

[GitWeb](http://docs.pythontab.com/github/gitbook/Git-on-the-Server/GitWeb.html)

[Gitosis](http://docs.pythontab.com/github/gitbook/Git-on-the-Server/Gitosis.html)


[Gitolite](http://docs.pythontab.com/github/gitbook/Git-on-the-Server/Gitolite.html)
[安装](http://docs.pythontab.com/github/gitbook/Git-on-the-Server/Gitolite.html#id1)

[自定义安装](http://docs.pythontab.com/github/gitbook/Git-on-the-Server/Gitolite.html#id2)

[配置文件和存取控制规则](http://docs.pythontab.com/github/gitbook/Git-on-the-Server/Gitolite.html#id3)

[带”deny”规则高级访问控制](http://docs.pythontab.com/github/gitbook/Git-on-the-Server/Gitolite.html#deny)

[Restricting pushes by files changed](http://docs.pythontab.com/github/gitbook/Git-on-the-Server/Gitolite.html#restricting-pushes-by-files-changed)

[个人分支](http://docs.pythontab.com/github/gitbook/Git-on-the-Server/Gitolite.html#id4)

[“Wildcard（通配符）”库](http://docs.pythontab.com/github/gitbook/Git-on-the-Server/Gitolite.html#wildcard)

[其他功能](http://docs.pythontab.com/github/gitbook/Git-on-the-Server/Gitolite.html#id7)




[Git 守护进程](http://docs.pythontab.com/github/gitbook/Git-on-the-Server/Git-Daemon.html)


[Git 托管服务](http://docs.pythontab.com/github/gitbook/Git-on-the-Server/Hosted-Git.html)
[GitHub](http://docs.pythontab.com/github/gitbook/Git-on-the-Server/Hosted-Git.html#github)

[建立新账户](http://docs.pythontab.com/github/gitbook/Git-on-the-Server/Hosted-Git.html#id1)

[建立新仓库](http://docs.pythontab.com/github/gitbook/Git-on-the-Server/Hosted-Git.html#id2)

[从 Subversion 导入项目](http://docs.pythontab.com/github/gitbook/Git-on-the-Server/Hosted-Git.html#subversion)

[添加协作开发者](http://docs.pythontab.com/github/gitbook/Git-on-the-Server/Hosted-Git.html#id3)

[项目页面](http://docs.pythontab.com/github/gitbook/Git-on-the-Server/Hosted-Git.html#id4)

[派生项目](http://docs.pythontab.com/github/gitbook/Git-on-the-Server/Hosted-Git.html#id5)

[GitHub 小结](http://docs.pythontab.com/github/gitbook/Git-on-the-Server/Hosted-Git.html#id6)




[小结](http://docs.pythontab.com/github/gitbook/Git-on-the-Server/Summary.html)







