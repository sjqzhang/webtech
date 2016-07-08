
```python           
#!/usr/bin/env python

import urllib2



# change followings before use

user = 'foo'

passwd = 'bar'

proxyserver = '1.2.3.4:5'

url   = 'http://www.google.com/'



def proxy1():

    # work

    proxy = 'http://%s:%s@%s' % (user, passwd, proxyserver)

    opener = urllib2.build_opener( urllib2.ProxyHandler({'http':proxy}) )

    urllib2.install_opener( opener )



    sContent = urllib2.urlopen(url)

    print sContent.read()



def proxy2():

    # work for someone, but not for me

    passmgr = urllib2.HTTPPasswordMgrWithDefaultRealm()

    passmgr.add_password('realm', proxyserver, user, passwd)

    authinfo = urllib2.ProxyBasicAuthHandler(passmgr)



    proxy = 'http://%s' % proxyserver

    opener = urllib2.build_opener(urllib2.ProxyHandler( {'http':proxy} ), authinfo)

    urllib2.install_opener(opener)



    sContent = urllib2.urlopen(url)

    print sContent.read()



def proxy3():

    # work for someone, but not for me

    authinfo = urllib2.HTTPBasicAuthHandler()

    authinfo.add_password('realm', proxyserver, user, passwd)

    

    proxy = 'http://%s' % proxyserver

    opener = urllib2.build_opener(urllib2.ProxyHandler( {'http':proxy} ), authinfo)

    urllib2.install_opener(opener)

    

    sContent = urllib2.urlopen(url)

    print sContent.read()



 在linux系统中，如果urllib2设置的代理不好用可以试试环境变量：

export http_proxy='protocol://user:passwd@proxyserver:port'

export https_proxy='protocol://user:passwd@proxyserver:port'

 比如通过代理上传appengine文件，其SDK中的rpc不提供代理设置，就可以用这招。


```


            
            
  