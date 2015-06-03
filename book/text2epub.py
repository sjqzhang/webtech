```
#encoding=utf-8



import re


content= open(ur'I:\BaiduYunDownload\48000本电子书KINDLE书库[TXT]【1】\经济管理\领导艺术\会当凌绝顶——成功领导典范.txt'.encode("gbk"),'r').read()


content= unicode(content,"gbk")


lines= re.split(r'[\r\n]',content)


ebook=''

for line in lines:
    if len(line.strip())<25 and len(re.findall(ur'([[一二三四五六七八九十]+．)|(第[一二三四五六七八九十１２３４５６７８９０123456789]+[章节])|(\([一二三四五六七八九十１２３４５６７８９０123456789]+\))',line.strip()))>0:
        print(line)
        ebook=ebook+ "\ntitle"+ line.strip()+"\n"
    else:
        ebook=ebook+line+"\n"
    # print(line)

# print(ebook)




#
# for i in re.findall(r'\d+\\.*\n',content):
#     if i.strip()!='':
#         print('part3  /'+ i.replace("\\",'/'))
#

# print(content)


```