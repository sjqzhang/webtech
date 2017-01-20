```python

#!/usr/bin/env python
# -*- coding:utf8 -*-
__author__ = 'xiaozhang'


import os
import urlparse
from artifactory import ArtifactoryPath

def build_url(path,pat):
    data={}
    with open('urls','a+') as ff:
        for p in path.glob(pat):
            up=urlparse.urlparse(str(p))
            version= os.path.basename( os.path.dirname(up.path))
            key=os.path.dirname(os.path.dirname(up.path))
            value=os.path.basename(up.path)
            try:
                if not key in data.keys():
                    data[key]={'version':[],'files':[],'lastversion':version,'lastfile':value,'uri':up.scheme+'://'+up.netloc}
                    data[key]['files'].append(value)
                    data[key]['version'].append(version)
                else:
                    data[key]['lastversion']=max(version,max(data[key]['version']))
                    data[key]['lastfile']=max(value,max(data[key]['files']))
                    data[key]['files'].append(value)
                    data[key]['version'].append(version)
                msg=data[key]['uri']+ key+'/'+data[key]['lastversion']+'/'+data[key]['lastfile']+"\n"
                ff.write( msg)
            except Exception as er:
                pass
        return  data


def save_url(path,pat,filename='urls'):
    data=build_url(path,pat)
    urls=[]
    for k,v in enumerate(data):
        try:
            vs=data[v]
            url=vs['uri']+ v+'/'+vs['lastversion']+'/'+vs['lastfile']
            urls.append(url)
        except Exception as er:
            pass
    with open(filename,"w+") as file:
        file.write("\n".join(urls))
for i in ['abc']:
    path = ArtifactoryPath('http://maven.web.com/artifactory/libs-release-local/com/web/%s'%i)
    save_url(path,"**/*sources.jar",'sourcesurl')
    save_url(path,"**/*.war",'sourcesurl')




```



`build url`
```

text=open('urls','r').read()
import re
data={}
for i in  text.split("\n"):
    sep=i.split('/')
    if len(sep)==11:
        match=re.match(r'[a-zA-Z\-]+',sep[10])
        if match!=None:
            key=match.group(0)
        else:
            continue
        if not key in data:
            data[key]=sep[10]
        else:
            if data[key]<sep[10]:
                data[key]=sep[10]
    elif len(sep)==10:
        match=re.match(r'[a-zA-Z\-]+',sep[9])
        if match!=None:
            key=match.group(0)
        else:
            continue
        if not key in data:
            data[key]=sep[9]
        else:
            if data[key]<sep[9]:
                data[key]=sep[9]
lines=text.split("\n")
results=[]
for k,v in data.items():
    for line in lines:
        if line.find(v)!=-1:
            print(k)
            results.append(line)
open('results','w').write("\n".join(results))

```
