## 初始化一个版本仓库

```
git init
```

Clone远程版本库

```
git clone git@xbc.me:wordpress.git
```

添加远程版本库origin，语法为 git remote add [shortname] [url]

```
git remote add origin git@xbc.me:wordpress.git
```

查看远程仓库

```
git remote -v
```

## 提交你的修改

添加当前修改的文件到暂存区

```
git add .
```

如果你自动追踪文件，包括你已经手动删除的，状态为Deleted的文件

```
git add -u
```

提交你的修改


```
git commit –m "提交说明"
```


推送你的更新到远程服务器,语法为 git push [远程名] [本地分支]:[远程分支]

```
git push origin master
```


查看文件状态

```
git status
```


跟踪新文件

```
git add readme.txt
```


从当前跟踪列表移除文件，并完全删除

```
git rm readme.txt
```

仅在暂存区删除，保留文件在当前目录，不再跟踪

```
git rm –cached readme.txt
```

重命名文件

```
git mv reademe.txt readme
```

查看提交的历史记录

```
git log
```

修改最后一次提交注释的，利用–amend参数

```
git commit --amend
```

忘记提交某些修改，下面的三条命令只会得到一个提交。

```
git commit –m "add readme.txt"

git add readme_forgotten

git commit –amend

```

假设你已经使用git add .，将修改过的文件a、b加到暂存区

现在你只想提交a文件，不想提交b文件，应该这样

```
git reset HEAD b
```

取消对文件的修改

```
git checkout –- readme.txt
```

## 基本的分支管理

创建一个分支

```
git branch iss53
```

切换工作目录到iss53

```
git chekcout iss53
```

将上面的命令合在一起，创建iss53分支并切换到iss53

```
git chekcout –b iss53
```

合并iss53分支，当前工作目录为master

```
git merge iss53
```

合并完成后，没有出现冲突，删除iss53分支

```
git branch –d iss53
```
拉去远程仓库的数据，语法为 git fetch [remote-name]

```
git fetch
```

fetch 会拉去最新的远程仓库数据，但不会自动到当前目录下，要自动合并

```
git pull

```
查看远程仓库的信息

```
git remote show origin
```

建立本地的dev分支追踪远程仓库的develop分支

```
git checkout –b dev origin/develop
```


## 问题

恢复文件

```
git checkout file.c
```


恢复到上一次已提交的修改
```
git checkout -- test.txt
```
