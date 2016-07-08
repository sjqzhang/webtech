```python

#!/usr/bin/env python
# -*- coding:utf8 -*-

# find -atime -1 -name "*.html" |xargs -i wkhtmltopdf {} {}.pdf
# rename 's/.html.pdf/.pdf/' *

__author__ = 'xiaozhang'


from codeigniter.system.core.CI_Application import CI_Application


import os


import random





import gevent

from gevent import monkey

monkey.patch_socket()

import re



import os

def insert(app):
    for i in range(0,1000000):
        app.db.insert('test',{'ids':random.randint(100000,10000000),'msg':str(random.randint(10000000,22222222))})



def download(app,img):
    crawl=app.loader.helper('Crawl')

    url=img['url']
    md5=img['md5']
    filename='I:/kenjinrong/'+md5
    if not os.path.isfile(filename):
        open('I:/kenjinrong/'+md5,'wb').write(crawl.url_fetch(url))



def kenjinrong(app):
    crawl=app.loader.helper('Crawl')

    tpl=r'''<!Doctype html><html xmlns=http://www.w3.org/1999/xhtml><head>
    <meta http-equiv=Content-Type content="text/html;charset=utf-8">
    </head>
    <body>
        %s
    </body>
    </html>
    '''




##    html=crawl.url_query('http://kenjinrong.com/the-currency-swap-agreement/','.panel-body').html()
##
##    html= tpl%html
##
##    print(html)

    import pyquery
    import hashlib

    urls=[]
    for i in xrange(10,13):
        url="http://kenjinrong.com/page/%s/"%i
        for href in crawl.url_query(url,'.entry-title a'):
            href=pyquery.PyQuery(href)
            i= href.attr('href')
            title= href.text()

            urls.append({'href':i,'title':title})



    imgs=[]



    for u in urls:
        url=u['href']
        title=u['title']
        title=re.sub(r'\\|\/|\:|\*|\?|\"|\<|>|\|',"",title)
        html=crawl.url_query(url,'.panel-body').html()
        for i in pyquery.PyQuery('img',html):
            img=pyquery.PyQuery(i).attr('src')
            imgmd5=hashlib.md5(img).hexdigest()
            imgs.append({'url':img,'md5':imgmd5})

        for i in imgs:
            html=re.sub(i['url'],i['md5'],html)

        html= tpl%html
        try:
            open('i:/kenjinrong/'+title.encode('gbk')+".html",'w').write(html.encode('utf-8'))
        except Exception as e:
            print e




    limg=[ gevent.spawn(download,app,img) for img in imgs]

    gevent.joinall(limg)













def main():
    app=CI_Application(r'./')


    kenjinrong(app)



##    l=[gevent.spawn(insert,app) for i in range(0,20)]
####    print l
##
##    gevent.joinall(l)






##    app.db.update('test',{'msg':"tessdfasdft"},{'id':'123'})
##    app.db.delete('test',{'id':'123'})
##    print app.loader.ctrl('Index').search()






##    app.start_server()

if __name__ == '__main__':
    main()



##try:
##
##    s=""
##
##    if isinstance(s,str):
##        print('x')
##
##except Exception as aa:
##    print(aa)





##d={'id':"xxx",'msg':"sdfasdf"}
##
##
##print type(d.values())


```
