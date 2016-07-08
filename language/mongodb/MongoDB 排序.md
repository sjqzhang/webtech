 
#### MongoDB 排序

 

#### MongoDB sort()方法

 在MongoDB中使用使用sort()方法对数据进行排序，sort()方法可以通过参数指定排序的字段，并使用 1 和 -1 来指定排序的方式，其中 1 为升序排序，而-1是用于降序排列。

 
#### 语法

 sort()方法基本语法如下所示：

 
```

>db.COLLECTION_NAME.find().sort({KEY:1})

```
 
#### 实例

 myycol 集合中的数据如下：

 
```

{ "_id" : ObjectId(5983548781331adf45ec5), "title":"MongoDB Overview"}
{ "_id" : ObjectId(5983548781331adf45ec6), "title":"NoSQL Overview"}
{ "_id" : ObjectId(5983548781331adf45ec7), "title":"Tutorials Point Overview"}

```
 以下实例演示了 myycol 集合中的数据按字段 title 的降序排序：

 
```

>db.mycol.find({},{"title":1,_id:0}).sort({"title":-1})
{"title":"Tutorials Point Overview"}
{"title":"NoSQL Overview"}
{"title":"MongoDB Overview"}
>

```
 

#### 注：

 如果没有指定sort()方法的排序方式，默认按照文档的升序排序。

 

