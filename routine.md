1.下载单网页所有文件

```shell
wget -r http://wiki.meizu.com/utils/middleware-planning/slides.html
```


2.管道　xargs -i

```shell
sed -n '1,$p' access.log |xargs -i redis-cli -p 3388 publish "{}"
```


3.统计网络
```
netstat -n | awk '/^tcp/ {++S[$NF]} END {for(a in S) print a, S[a]}'
```

