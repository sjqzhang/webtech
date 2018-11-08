# -*- coding: utf-8 -*-
import requests
import json
import time
import threading
import random
import gevent
from gevent import monkey
monkey.patch_all()
def cmd(ip,cmd):
    param={
        'c':cmd, #command
        'i':ip, #ip
        't':'60', #ip
        'u':'root',# user
        'o':'json',# return json or text
        'sudo':'1', # sudo
    }
    headers={'token':'abc'}
    data={'param':json.dumps(param)}
    return requests.post('http://127.0.0.1:8005/cli/api',data=data,headers=headers).text

gth=[]

ips=open('ips','r').read()
for i in range(1,5000): 
    gth.append(gevent.spawn(cmd,ips,'hostname'))

gevent.joinall(gth)
