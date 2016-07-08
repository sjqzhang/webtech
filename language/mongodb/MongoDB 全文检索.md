 
#### MongoDB 全文检索

 全文检索对每一个词建立一个索引，指明该词在文章中出现的次数和位置，当用户查询时，检索程序就根据事先建立的索引进行查找，并将查找的结果反馈给用户的检索方式。 

 这个过程类似于通过字典中的检索字表查字的过程。

 MongoDB 从 2.4 版本开始支持全文检索，目前支持15种语言(暂时不支持中文)的全文索引。

 
 danish

 dutch

 english

 finnish

 french

 german

 hungarian

 italian

 norwegian

 portuguese

 romanian

 russian

 spanish

 swedish

 turkish
 


#### 启用全文检索

 MongoDB 在 2.6 版本以后是默认开启全文检索的，如果你使用之前的版本，你需要使用以下代码来启用全文检索:

 
```

>db.adminCommand({setParameter:true,textSearchEnabled:true})

```
 或者使用命令：

 
```

mongod --setParameter textSearchEnabled=true

```
 

#### 创建全文索引

 考虑以下 posts 集合的文档数据，包含了文章内容（post_text）及标签(tags)：

 
```

{
   "post_text": "enjoy the mongodb articles on w3cschool.cc",
   "tags": [
      "mongodb",
      "w3cschool"
   ]
}

```
 我们可以对 post_text 字段建立全文索引，这样我们可以搜索文章内的内容：

 
```

>db.posts.ensureIndex({post_text:"text"})

```
 

#### 使用全文索引

 现在我们已经对 post_text 建立了全文索引，我们可以搜索文章中的关键词w3cschool.cc：

 
```

>db.posts.find({$text:{$search:"w3cschool.cc"}})

```
 以下命令返回了如下包含w3cschool.cc关键词的文档数据：

 
```

{ 
   "_id" : ObjectId("53493d14d852429c10000002"), 
   "post_text" : "enjoy the mongodb articles on w3cschool.cc", 
   "tags" : [ "mongodb", "w3cschool" ]
}
{
   "_id" : ObjectId("53493d1fd852429c10000003"), 
   "post_text" : "writing tutorials on w3cschool.cc",
   "tags" : [ "mongodb", "tutorial" ] 
}

```
 如果你使用的是旧版本的MongoDB，你可以使用以下命令：

 
```

>db.posts.runCommand("text",{search:" w3cschool.cc"})

```
 使用全文索引可以提高搜索效率。 

 

#### 删除全文索引

 删除已存在的全文索引，可以使用 find 命令查找索引名：

 
```

>db.posts.getIndexes()

```
 通过以上命令获取索引名，本例的索引名为post_text_text，执行以下命令来删除索引：

 
```

>db.posts.dropIndex("post_text_text")

```
 

