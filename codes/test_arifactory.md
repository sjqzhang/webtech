```python


import os
import urlparse
from artifactory import ArtifactoryPath
path = ArtifactoryPath('http://maven.xxx.com/artifactory/libs-release-local')

def build_url(path,pat):
    data={}
    for p in path.glob(pat):
        up=urlparse.urlparse(str(p))
        version= os.path.basename( os.path.dirname(up.path))
        key=os.path.dirname(os.path.dirname(up.path))
        value=os.path.basename(up.path)
        if not key in data.keys():
            data[key]={'version':[],'files':[],'lastversion':version,'lastfile':value}
            data[key]['files'].append(value)
            data[key]['version'].append(version)
        else:
            data[key]['lastversion']=[max(version,data[key]['version'])]
            data[key]['lastfile']=[max(value,data[key]['files'])]
            data[key]['files'].append(value)
            data[key]['version'].append(version)
    return  data
    
    
    

```