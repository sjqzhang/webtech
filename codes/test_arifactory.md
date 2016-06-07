```python



#!/usr/bin/env python
# -*- coding:utf8 -*-
__author__ = 'xiaozhang'


import os
import urlparse
from artifactory import ArtifactoryPath
path = ArtifactoryPath('http://maven.xxx.com/artifactory/libs-release-local/com/meizu/')

def build_url(path,pat):
    data={}
    for p in path.glob(pat):
        up=urlparse.urlparse(str(p))
        version= os.path.basename( os.path.dirname(up.path))
        key=os.path.dirname(os.path.dirname(up.path))
        value=os.path.basename(up.path)
        if not key in data.keys():
            data[key]={'version':[],'files':[],'lastversion':version,'lastfile':value,'uri':up.scheme+'://'+up.netloc}
            data[key]['files'].append(value)
            data[key]['version'].append(version)
        else:
            data[key]['lastversion']=max(version,data[key]['version'])
            data[key]['lastfile']=max(value,data[key]['files'])
            data[key]['files'].append(value)
            data[key]['version'].append(version)
    return  data


def save_url(path,pat,filename='urls'):
    data=build_url(path,pat)
    urls=[]
    for k,v in enumerate(data):
        vs=data[v]
        url=vs['uri']+ v+'/'+vs['lastversion']+'/'+vs['lastfile']
        urls.append(url)
    with open(filename,"w+") as file:
        file.write("\n".join(urls))



save_url(path,"**/*sources.jar",'sourcesurl')


    

```