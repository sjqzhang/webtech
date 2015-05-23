 
#### MongoDB 数据库引用

 在上一章节MongoDB关系中我们提到了MongoDB的引用来规范数据结构文档。

 MongoDB 引用有两种：

 
手动引用（Manual References）

DBRefs




#### DBRefs vs 手动引用

 考虑这样的一个场景，我们在不同的集合中 (address_home, address_office, address_mailing, 等)存储不同的地址（住址，办公室地址，邮件地址等）。

 这样，我们在调用不同地址时，也需要指定集合，一个文档从多个集合引用文档，我们应该使用 DBRefs。

 

#### 使用 DBRefs

 DBRef的形式：

 
```

{ $ref : , $id : , $db :  }

```
 三个字段表示的意义为：

 
$ref：集合名称

$id：引用的id

$db:数据库名称，可选参数

 


以下实例中用户数据文档使用了 DBRef, 字段 address：

 
```

{
   "_id":ObjectId("53402597d852426020000002"),
   "address": {
   "$ref": "address_home",
   "$id": ObjectId("534009e4d852427820000002"),
   "$db": "w3cschoolcc"},
   "contact": "987654321",
   "dob": "01-01-1991",
   "name": "Tom Benzamin"
}

```
 address DBRef 字段指定了引用的地址文档是在 address_home 集合下的 w3cschoolcc 数据库，id 为 534009e4d852427820000002。

 以下代码中，我们通过指定 $ref 参数（address_home 集合）来查找集合中指定id的用户地址信息：

 
```

>var user = db.users.findOne({"name":"Tom Benzamin"})
>var dbRef = user.address
>db[dbRef.$ref].findOne({"_id":(dbRef.$id)})

```
 以上实例返回了 address_home 集合中的地址数据：

 
```

{
   "_id" : ObjectId("534009e4d852427820000002"),
   "building" : "22 A, Indiana Apt",
   "pincode" : 123456,
   "city" : "Los Angeles",
   "state" : "California"
}

```
 

