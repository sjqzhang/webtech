#encoding=utf8

import os
import sys
files= os.listdir(sys.argv[1])

def urlencode(str) :
    reprStr = repr(str).replace(r'\x', '%')
    return reprStr[1:-1]

for file in  files:
    file=os.path.basename(file).replace(".md",'')
    print("[%s](%s)"%(file,urlencode(file)+".md"))
