 
#### MongoDB 固定集合（Capped Collections）

 MongoDB 固定集合（Capped Collections）是性能出色的有着固定大小的集合，对于大小固定，我们可以想象其就像一个环形队列，当集合空间用完后，再插入的元素就会覆盖最初始的头部的元素！

 

#### 创建固定集合

 我们通过createCollection来创建一个固定集合，且capped选项设置为true：

 
```

>db.createCollection("cappedLogCollection",{capped:true,size:10000})

```
 还可以指定文档个数,加上max:1000属性：

 
```

>db.createCollection("cappedLogCollection",{capped:true,size:10000,max:1000})

```
 判断集合是否为固定集合:

 
```

>db.cappedLogCollection.isCapped()

```
 如果需要将已存在的集合转换为固定集合可以使用以下命令：

 
```

>db.runCommand({"convertToCapped":"posts",size:10000})

```
 以上代码将我们已存在的 posts 集合转换为固定集合。

 

#### 固定集合查询

 固定集合文档按照插入顺序储存的,默认情况下查询就是按照插入顺序返回的,也可以使用$natural调整返回顺序。 

 
```

>db.cappedLogCollection.find().sort({$natural:-1})

```
 

#### 固定集合的功能特点

  可以插入及更新,但更新不能超出collection的大小,否则更新失败,不允许删除,但是可以调用drop()删除集合中的所有行,但是drop后需要显式地重建集合。 


在32位机子上一个cappped collection的最大值约为482.5M,64位上只受系统文件大小的限制。 

 

#### 固定集合属性及用法

 
#### 属性

 
 属性1:对固定集合进行插入速度极快 

 属性2:按照插入顺序的查询输出速度极快 

 属性3:能够在插入最新数据时,淘汰最早的数据 
 

#### 用法

 
 用法1:储存日志信息 

 用法2:缓存一些少量的文档
 


