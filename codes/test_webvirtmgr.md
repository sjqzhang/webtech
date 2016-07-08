
如何使用 webvirtmgr (以下python文件放到 vrtManager 目录下)

```python

#!/usr/bin/env python
# -*- coding:utf8 -*-
__author__ = 'xiaozhang'




import os
import sys

path= os.path.dirname(os.getcwd())

sys.path.append(path)


import  create

import connection


import hostdetails

#con=connection.wvmConnection('172.16.119.3','root','meizu.com',connection.CONN_TCP)
con=connection.wvmConnect('172.16.119.3','libvirt ','fred',connection.CONN_TCP)



print con.get_cap_xml()
print con.get_storages()
print con.get_networks()






detail= hostdetails.wvmHostDetails('172.16.119.3','libvirt ','fred',connection.CONN_TCP)


print detail.get_cpu_usage()
print detail.get_node_info()
print detail.get_memory_usage()
```