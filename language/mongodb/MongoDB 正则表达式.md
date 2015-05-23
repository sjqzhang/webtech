 
#### MongoDB 正则表达式

 正则表达式是使用单个字符串来描述、匹配一系列符合某个句法规则的字符串。

 许多程序设计语言都支持利用正则表达式进行字符串操作。

 MongoDB 使用 

#### $regex

 操作符来设置匹配字符串的正则表达式。

  MongoDB使用PCRE (Perl Compatible Regular Expression) 作为正则表达式语言。

 不同于全文检索，我们使用正则表达式不需要做任何配置。

 考虑以下 

#### posts

 集合的文档结构，该文档包含了文章内容和标签：

 
```

{
   "post_text": "enjoy the mongodb articles on tutorialspoint",
   "tags": [
      "mongodb",
      "tutorialspoint"
   ]
}

```
 

#### 使用正则表达式

 以下命令使用正则表达式查找包含 w3cschool.cc 字符串的文章：

 
```

>db.posts.find({post_text:{$regex:"w3cschool.cc"}})

```
 以上查询也可以写为：

 
```

>db.posts.find({post_text:/w3cschool.cc/})

```
 

#### 不区分大小写的正则表达式

 如果检索需要不区分大小写，我们可以设置 $options 为 $i。

 以下命令将查找不区分大小写的字符串 w3cschool.cc：

 
```

>db.posts.find({post_text:{$regex:"w3cschool.cc",$options:"$i"}})

```
 集合中会返回所有包含字符串 w3cschool.cc 的数据，且不区分大小写：

 
```

{
   "_id" : ObjectId("53493d37d852429c10000004"),
   "post_text" : "hey! this is my post on  W3Cschool.cc", 
   "tags" : [ "tutorialspoint" ]
} 

```
 

#### 数组元素使用正则表达式

 我们还可以在数组字段中使用正则表达式来查找内容。 这在标签的实现上非常有用，如果你需要查找包含以 tutorial 开头的标签数据(tutorial 或 tutorials 或 tutorialpoint 或 tutorialphp)， 你可以使用以下代码：

 
```

>db.posts.find({tags:{$regex:"tutorial"}})

```
 

#### 优化正则表达式查询

 
如果你的文档中字段设置了索引，那么使用索引相比于正则表达式匹配查找所有的数据查询速度更快。 
 如果正则表达式是前缀表达式，所有匹配的数据将以指定的前缀字符串为开始。例如： 如果正则表达式为 

####  ^tut 

 ，查询语句将查找以 tut 为开头的字符串。
 


