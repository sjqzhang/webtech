
`下载rmp依懒包`

```sh

#!/bin/bash

mkdir -p  $1

cd $1


function down() {


echo "/*******************     $1  **********************/"

if [ -f $1* ];then

echo "				$1 downloaded"
else
echo "				$1 downloading...."
yumdownloader $i
fi

}

#yumdownloader $1

down $1
plist1=`yum deplist $1 |grep provider|awk '{print $2}'|xargs -i -n 1 yum deplist {} |grep provider|awk '{print $2}'|sort |uniq|xargs -i -n 1 yum deplist {} |grep provider|awk '{print $2}'|sort |uniq` 
plist2=`yum deplist $1 |grep provider|awk '{print $2}'|sort |uniq` 
#echo $plist1
#echo "--------------------"
#echo $plist2

plist=`echo $plist1 $plist2|sort|uniq`


#echo "--------------------"
#echo $plist
for i in $plist
do
down $i
done 


```