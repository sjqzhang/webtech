 
#### MongoDB Limit与Skip方法




#### MongoDB Limit() 方法

 如果你需要在MongoDB中读取指定数量的数据记录，可以使用MongoDB的Limit方法，limit()方法接受一个数字参数，该参数指定从MongoDB中读取的记录条数。

 
#### 语法

 limit()方法基本语法如下所示：

 
```

>db.COLLECTION_NAME.find().limit(NUMBER)

```
 
#### 实例

 集合 myycol 中的数据如下：

 
```

{ "_id" : ObjectId(5983548781331adf45ec5), "title":"MongoDB Overview"}
{ "_id" : ObjectId(5983548781331adf45ec6), "title":"NoSQL Overview"}
{ "_id" : ObjectId(5983548781331adf45ec7), "title":"Tutorials Point Overview"}

```
 以上实例为显示查询文档中的两条记录：

 
```

>db.mycol.find({},{"title":1,_id:0}).limit(2)
{"title":"MongoDB Overview"}
{"title":"NoSQL Overview"}
>

```
 注：如果你们没有指定limit()方法中的参数则显示集合中的所有数据。

 

#### MongoDB Skip() 方法

 我们除了可以使用limit()方法来读取指定数量的数据外，还可以使用skip()方法来跳过指定数量的数据，skip方法同样接受一个数字参数作为跳过的记录条数。

 
#### 语法

 skip() 方法脚本语法格式如下：

 
```

>db.COLLECTION_NAME.find().limit(NUMBER).skip(NUMBER)

```
 
#### 实例

 以上实例只会显示第二条文档数据

 
```

>db.mycol.find({},{"title":1,_id:0}).limit(1).skip(1)
{"title":"NoSQL Overview"}
>

```
 

#### 注:

skip()方法默认参数为 0 。

 

