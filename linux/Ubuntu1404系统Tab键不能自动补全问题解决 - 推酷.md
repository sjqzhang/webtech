
            
  Unbuntu 14.4安装之后就在终端中使用Tab键不能自动补全，解决办法如下：


  
    1、利用vi编辑器打开    /etc/bash.bashrc文件（需要root权限）
  


  
```
sudo vi /etc/bash.bashrc
```

  
    接下来会提示输入密码
  


  
    2、找到文件中的下列代码
  


  
```
#enable bash completion in interactive shells
#if ! shopt -oq posix; then
#      if [-f  /usr/share/bash-completion/bash_completion ]; then
#          . /usr/share/bash-completion/bash_completion
#      elif [ -f /etc/bash_completion]; then
#           . /etc/bash_completion
#      fi
#fi
```

  
    将注释符号#去掉，即改成
  


  
```
#enable bash completion in interactive shells
if ! shopt -oq posix; then
     if [-f  /usr/share/bash-completion/bash_completion ]; then
          . /usr/share/bash-completion/bash_completion
      elif [ -f /etc/bash_completion]; then
           . /etc/bash_completion
      fi
fi
```

  
    3、最后 source一下
    /etc/bash.bashrc即可， 即
  


  
```
sudo source /etc/bash.bashrc
```





        

