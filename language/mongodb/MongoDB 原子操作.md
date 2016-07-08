 
#### MongoDB 原子操作

 mongodb不支持事务，所以，在你的项目中应用时，要注意这点。无论什么设计，都不要要求mongodb保证数据的完整性。

 但是mongodb提供了许多原子操作，比如文档的保存，修改，删除等，都是原子操作。

 所谓原子操作就是要么这个文档保存到Mongodb，要么没有保存到Mongodb，不会出现查询到的文档没有保存完整的情况。

 

#### 原子操作数据模型

 考虑下面的例子，图书馆的书籍及结账信息。

  实例说明了在一个相同的文档中如何确保嵌入字段关联原子操作（update：更新）的字段是同步的。

 
```

book = {
          _id: 123456789,
          title: "MongoDB: The Definitive Guide",
          author: [ "Kristina Chodorow", "Mike Dirolf" ],
          published_date: ISODate("2010-09-24"),
          pages: 216,
          language: "English",
          publisher_id: "oreilly",
          available: 3,
          checkout: [ { by: "joe", date: ISODate("2012-10-15") } ]
        }

```
 你可以使用 db.collection.findAndModify() 方法来判断书籍是否可结算并更新新的结算信息。

 在同一个文档中嵌入的 available 和 checkout 字段来确保这些字段是同步更新的:

 
```

db.books.findAndModify ( {
   query: {
            _id: 123456789,
            available: { $gt: 0 }
          },
   update: {
             $inc: { available: -1 },
             $push: { checkout: { by: "abc", date: new Date() } }
           }
} )

```
 

#### 原子操作常用命令

 
#### $set

 用来指定一个键并更新键值，若键不存在并创建。

 
```
{ $set : { field : value } }

```
 
#### $unset

 用来删除一个键。

 
```
{ $unset : { field : 1} }

```
 
#### $inc

 $inc可以对文档的某个值为数字型（只能为满足要求的数字）的键进行增减的操作。

 
```
{ $inc : { field : value } }

```
 
#### $push

 用法：



```

{ $push : { field : value } }
```
  把value追加到field里面去，field一定要是数组类型才行，如果field不存在，会新增一个数组类型加进去。 

 
#### $pushAll

 同$push,只是一次可以追加多个值到一个数组字段内。

 
```
{ $pushAll : { field : value_array } }

```
 
#### $pull

 从数组field内删除一个等于value值。

 
```
{ $pull : { field : _value } }

```
 
#### $addToSet

 增加一个值到数组内，而且只有当这个值不在数组内才增加。

 
#### $pop


删除数组的第一个或最后一个元素 



```
{ $pop : { field : 1 } }

```
 
#### $rename

 修改字段名称

 
```
{ $rename : { old_field_name : new_field_name } }

```
 
#### $bit


位操作，integer类型 



```
{$bit : { field : {and : 5}}}

```
 
#### 偏移操作符

 
```

> t.find() { "_id" : ObjectId("4b97e62bf1d8c7152c9ccb74"), "title" : "ABC", "comments" : [ { "by" : "joe", "votes" : 3 }, { "by" : "jane", "votes" : 7 } ] }
 
> t.update( {'comments.by':'joe'}, {$inc:{'comments.$.votes':1}}, false, true )
 
> t.find() { "_id" : ObjectId("4b97e62bf1d8c7152c9ccb74"), "title" : "ABC", "comments" : [ { "by" : "joe", "votes" : 4 }, { "by" : "jane", "votes" : 7 } ] }

```
 

