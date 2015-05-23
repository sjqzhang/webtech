## 1.扩展工具安装


问题:
开发扩展需要使用ext_skel生成基础文件，但是ext_skel仅在php5-dev的源码中包含，没有2进制文件。

解决:
debian下是使用pecl_gen来完成扩展的生成工作的。

安装方法：

```shell
apt-get install php5-dev
apt-get install php-pear
pear install CodeGen_PECL
```

使用方法：
```
pecl-gen --extname=[your module name]
```
