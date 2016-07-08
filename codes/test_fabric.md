

###fabric部署

```python

#!/usr/bin/python env
from fabric.api import *
from fabric.colors import *
from fabric.context_managers import *
import re
import os

env.key_filename = "/root/deploy/xx"
env.password='xxx4'
env.user='mzyunwei'
#env.key_filename = "/data/server/xx"
#env.user='root'
#env.password='xxx'
env.port=22


def installcli():
    try:
        run("sudo wget http://10.3.155.104:8005/cli/upgrade -O /bin/cli && sudo chmod +x /bin/cli")
        run("sudo /bin/cli daemon -s restart")
    except Exception as er:
        print er
def removecli():
    try:
        run("sudo /bin/cli daemon -s stop")
        run("sudo rm -f /bin/cli")
    except Exception as er:
        print er
def stopcli():
    try:
        run("sudo ps aux|grep python |grep daemon |grep cli|awk '{print \$2}'|xargs sudo kill")
        run("sudo rm -f /bin/cli")
    except Exception as er:
        print er



import os

def main():
    with open('ip') as ip:
        ips=ip.read()
    allip=",".join(ips.split('\n'))
    os.system('fab -f deploy.py installcli -H %s -P -z 30'%(allip))

if __name__=='__main__':
    main()
```