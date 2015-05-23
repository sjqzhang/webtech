
	
		



	

			





一 Linux安装文件


Linux常见的安装为tar，zip，gz，rpm，deb，bin等。我们可以简单的分为三类，




第一：打包或压缩文件tar，zip，gz等，一般解压后即可，或者解压后运行sh文件；


第二：对应的有管理工具的deb，rpm等，通常的这类安装文件可以通过第三方的命令行或UI来简单的安装，例如Ubuntu中的apt来安装deb，Redhat中的yum来安装rpm；


第三：像.bin类，其实就是把sh和zip打包为bin，或把sh和rpm打包为bin等，当在命令行运行bin安装文件时，其实就是bin里面的sh来解压bin中的zip或安装rpm的过程； 




 


二 .bin安装文件


.bin安装文件可以认为是sh文件和zip或rpm等其他安装文件的打包形式。如下图：


 ![http://images.cnblogs.com/cnblogs_com/itech/192594/bin3.png](http://images.cnblogs.com/cnblogs_com/itech/192594/bin3.png)




.bin安装文件的优点：


1）只有一个包即.bin文件；


2）可以直接运行在Linux上，因为他是sh（他的前半部分是sh）；


3）在sh中可以包含需要用户接收的协议信息，而且提示用户接收，如果用户不接收，安装退出；


 


三 .bin安装文件执行


1）超级简单： sh xxxx.bin 或直接xxxx.bin。




 2）过程如下：


![http://images.cnblogs.com/cnblogs_com/itech/192594/bin4.png](http://images.cnblogs.com/cnblogs_com/itech/192594/bin4.png) 


四 .bin安装文件制作


1） 组成之sh文件（例子：YYYY.bin）



```shell

#!/bin/sh

PATH=/usr/bin:/bin

umask 022

echo_args="-e "

localinstall=$1

more <<"EOF"

XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXxx

EOF

agreed=

while [ x$agreed = x ]; do

    echo

    echo "Do you agree to the above license terms? [yes or no] "

    read reply leftover

    case $reply in

    y* | Y*)

        agreed=1;;

    n* | N*)

    echo "If you don't agree to the license you can't install this software";

    exit 1;;

    esac

done

if [ -d "$localinstall" ] ; then

    outname=$localinstall/OUTNAME

else

    outname=OUTNAME

fi

echo "Unpacking..."

tail -n +AAA $0 > $outname    

if [ -x /usr/bin/sum ] ; then

    echo "Checksumming..."



    sum=`/usr/bin/sum $outname`

    index=1

    for s in $sum

    do

    case $index in

    1)  sum1=$s;

        index=2;

        ;;

    2)  sum2=$s;

        index=3;

        ;;

    esac

    done

    if [ $sum1 != SUM1 -o $sum2 != SUM2 ] ; then

    echo "The download file appears to be corrupted."

    echo "Please do not attempt to install this archive file."

    exit 1

    fi

else

    echo "Can't find /usr/bin/sum to do checksum.  Continuing anyway."

fi

echo "Done."

exit 0

```


```


#此文件YYYY.bin可以重复使用，OUTNAME，SUM1，SUM2均为标识符，表示要打包到bin中的zip，rpm的路径，sum的checksum和filesize。




#用户协议处：XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXxx 




#tail -n +AAA $0 > $outname，AAA为此sh文件的line count， 此命令即把bin中的sh后面的zip或rpm提取出来 ；


# sum用来检测所提取的zip或rpm文件是否正确；




#最后一定要exit 0，一定要。

 #也可以在退出前云新unzip或rpm来安装，或者由用户自行来安装zip或rpm。




 


2）组成之zip，gz或rpm （例子：XXXX.rpm）




 这个就是你要安装的zip或rpm。


 


3）创建bin安装文件的脚本sh（例子：createbin.sh，使用上面的YYYY.sh和XXXX.rpm）

```

```shell

#!/bin/sh



PATH=.:$PATH

RPM=XXXX.rpm

LICENSEBIN=YYYY.bin

BASE=$(basename $RPM .rpm)

sum=`sum $RPM`

index=1

for s in $sum

do

  case $index in

    1) sum1=$s;

       index=2;

       ;;

    2) sum2=$s;

       index=3;

       ;;

  esac

done

cat $LICENSEBIN | sed -e s/OUTNAME/$RPM/ -e s/SUM1/$sum1/ -e s/SUM2/$sum2/ > linux_license_new.bin

dos2unix -k -q linux_license_new.bin

cat linux_license_new.bin $RPM > ${BASE}-rpm.bin

sudo chmod a+x res/${BASE}-rpm.bin


```
```

# dos2unix 确保license shell为linux格式；




#且此shell文件需要在Linux上执行；


 


五 参考：http://itboba.com/taxonomy/term/1015 


 


 完！

```
























	

