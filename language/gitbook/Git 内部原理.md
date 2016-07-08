<span id="git" ></span>
Git 内部原理[¶](#git)

不管你是从前面的章节直接跳到了本章，还是读完了其余各章一直到这，你都将在本章见识 Git 的内部工作原理和实现方式。我个人发现学习这些内容对于理解 Git 的用处和强大是非常重要的，不过也有人认为这些内容对于初学者来说可能难以理解且过于复杂。正因如此我把这部分内容放在最后一章，你在学习过程中可以先阅读这部分，也可以晚点阅读这部分，这完全取决于你自己。


既然已经读到这了，就让我们开始吧。首先要弄明白一点，从根本上来讲 Git 是一套内容寻址 (content-addressable) 文件系统，在此之上提供了一个 VCS 用户界面。马上你就会学到这意味着什么。


早期的 Git (主要是 1.5 之前版本) 的用户界面要比现在复杂得多，这是因为它更侧重于成为文件系统而不是一套更精致的 VCS 。最近几年改进了 UI 从而使它跟其他任何系统一样清晰易用。即便如此，还是经常会有一些陈腔滥调提到早期 Git 的 UI 复杂又难学。


内容寻址文件系统层相当酷，在本章中我会先讲解这部分。随后你会学到传输机制和最终要使用的各种库管理任务。




[底层命令 (Plumbing) 和高层命令 (Porcelain)](http://docs.pythontab.com/github/gitbook/Git-Internals/Plumbing-and-Porcelain.html)


[Git 对象](http://docs.pythontab.com/github/gitbook/Git-Internals/Git-Objects.html)
[tree (树) 对象](http://docs.pythontab.com/github/gitbook/Git-Internals/Git-Objects.html#tree)

[commit (提交) 对象](http://docs.pythontab.com/github/gitbook/Git-Internals/Git-Objects.html#commit)

[对象存储](http://docs.pythontab.com/github/gitbook/Git-Internals/Git-Objects.html#id1)





[Git References](http://docs.pythontab.com/github/gitbook/Git-Internals/Git-References.html)
[HEAD 标记](http://docs.pythontab.com/github/gitbook/Git-Internals/Git-References.html#head)

[Tags](http://docs.pythontab.com/github/gitbook/Git-Internals/Git-References.html#tags)

[test tag](http://docs.pythontab.com/github/gitbook/Git-Internals/Git-References.html#test-tag)

[Remotes](http://docs.pythontab.com/github/gitbook/Git-Internals/Git-References.html#remotes)




[Packfiles](http://docs.pythontab.com/github/gitbook/Git-Internals/Packfiles.html)


[The Refspec](http://docs.pythontab.com/github/gitbook/Git-Internals/The-Refspec.html)
[推送 Refspec](http://docs.pythontab.com/github/gitbook/Git-Internals/The-Refspec.html#refspec)

[删除引用](http://docs.pythontab.com/github/gitbook/Git-Internals/The-Refspec.html#id1)





[传输协议](http://docs.pythontab.com/github/gitbook/Git-Internals/Transfer-Protocols.html)
[哑协议](http://docs.pythontab.com/github/gitbook/Git-Internals/Transfer-Protocols.html#id2)

[智能协议](http://docs.pythontab.com/github/gitbook/Git-Internals/Transfer-Protocols.html#id3)

[上传数据](http://docs.pythontab.com/github/gitbook/Git-Internals/Transfer-Protocols.html#id4)

[下载数据](http://docs.pythontab.com/github/gitbook/Git-Internals/Transfer-Protocols.html#id5)





[维护及数据恢复](http://docs.pythontab.com/github/gitbook/Git-Internals/Maintenance-and-Data-Recovery.html)
[维护](http://docs.pythontab.com/github/gitbook/Git-Internals/Maintenance-and-Data-Recovery.html#id2)

[数据恢复](http://docs.pythontab.com/github/gitbook/Git-Internals/Maintenance-and-Data-Recovery.html#id3)

[移除对象](http://docs.pythontab.com/github/gitbook/Git-Internals/Maintenance-and-Data-Recovery.html#id4)




[总结](http://docs.pythontab.com/github/gitbook/Git-Internals/Summary.html)







