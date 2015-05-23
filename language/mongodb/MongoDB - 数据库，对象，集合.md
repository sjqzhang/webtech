 MongoDB 数据库，对象，集合  



#### 描述

 不管我们学习什么数据库都应该学习其中的基础概念，在mongodb中基本的概念是文档、集合、数据库，下面我们挨个介绍。

 



#### 数据库

 一个mongodb中可以建立多个数据库。

 MongoDB的默认数据库为"db"，该数据库存储在data目录中。

 在MongoDB中可以创建数据库，如果你想使用MongoDB，创建数据库不是必要的。

 "show dbs" 命令可以显示所有数据的列表。

 ![http://www.w3cschool.cc/wp-content/uploads/2013/10/show-dbs-command.png](http://www.w3cschool.cc/wp-content/uploads/2013/10/show-dbs-command.png)执行 "db" 命令可以显示当前数据库对象或者集合。

 ![http://www.w3cschool.cc/wp-content/uploads/2013/10/db-command.png](http://www.w3cschool.cc/wp-content/uploads/2013/10/db-command.png)运行"use"命令，可以连接到一个指定的数据库。

 ![http://www.w3cschool.cc/wp-content/uploads/2013/10/use-command.png](http://www.w3cschool.cc/wp-content/uploads/2013/10/use-command.png)以上实例命令中，"student" 是你要检索的数据库。

 在下一个章节我们将详细讲解MongoDB中命令的使用。

  数据库名称可以是任何字符，但是不能包含空字符串，点号（.），或者" "。

 "system" 作为系统保留字符串不能作为数据库名。

 数据库名不能包含 "$"。

 



#### 文档

 文档是mongodb中的最核心的概念，是其核心单元，我们可以将文档类比成关系型数据库中的每一行数据。

 多个键及其关联的值有序的放置在一起就是文档。在mongodb中使用一种类json的bson存储数据。

 bson数据可以理解为在json的基础上添加了一些json中没有的数据类型。

 如果我们会json，那么bson我们就已经掌握了一半了，至于新添加的数据类型后面我会介绍。

 文档例子如下：

 
```
 { site : "w3cschool.cc" }

 


```
 通常，"object（对象）" 术语是指一个文件。

 文件类似于一个RDBMS的记录。

 我们可以对集合（collection）进行插入，更新和删除操作。


下表将帮助您更容易理解Mongo中的一些概念：

 

|RDBMS|MongoDB|
|:--|:--|
|Table（表）|Collection（集合）|
|Column（栏）|Key（键）|
|Value（值）|Value（值）|
|Records / Rows（记录/列）|Document / Object（文档/对象）|

下表为MongoDB中常用的几种数据类型。

 

|数据类型|描述|
|:--|:--|
|string（字符串）|可以是一个空字符串或者字符组合。|
|integer（整型）|整数。|
|boolean（布尔型）|逻辑值 True 或者 False。|
|double|双精度浮点型|
|null|不是0，也不是空。|
|array|数组：一系列值|
|object|对象型，程序中被使用的实体。可以是一个值，变量，函数，或者数据结构。|
|timestamp|timestamp存储为64为的值，只运行一个mongod时可以确保是唯一的。前32位保存的是UTC时间，单位是秒，后32为是在这一秒内的计数值，从0开始，每新建一个MongoTimestamp对象就加一。|
|Internationalized Strings|UTF-8 字符串。|
|Object IDs|在mongodb中的文档需要使用唯一的关键字_id来标识他们。几乎每一个mongodb文档都使用_id字段作为第一个属性（在系统集合和定容量集合（capped collection）中有一些例外）。_id值可以是任何类型，最常见的做法是使用ObjectId类型。|





#### 集合

 集合就是一组文档的组合。如果将文档类比成数据库中的行，那么集合就可以类比成数据库的表。

 在mongodb中的集合是无模式的，也就是说集合中存储的文档的结构可以是不同的，比如下面的两个文档可以同时存入到一个集合中：

 
```
 {"name":"mengxiangyue"} {"Name":"mengxiangyue","sex":"nan"} 




```
 当第一个文档插入时，集合就会被创建。

 



#### 合法的集合名

 集合名称必须以字母或下划线开头。

 集合名可以保护数字

 集合名称不能使美元符"$"，"$"是系统保留字符。

 集合的名字 最大不能超过128个字符 。

 另外，"."号的使用在集合当中是允许的，它们被成为子集合(Subcollection)；比如你有一个blog集合，你可以使用blog.title，blog.content或者blog.author来帮组你更好地组织集合。

 如下实例：

 
```
 db.tutorials.php.findOne() 




```
 



#### capped collections

 Capped collections 就是固定大小的collection。

 它有很高的性能以及队列过期的特性(过期按照插入的顺序). 有点和 "RRD" 概念类似。

 Capped collections是高性能自动的维护对象的插入顺序。它非常适合类似记录日志的功能 和标准的collection不同，你必须要显式的创建一个capped collection， 指定一个collection的大小，单位是字节。collection的数据存储空间值提前分配的。

 要注意的是指定的存储大小包含了数据库的头信息。 
```
 > db.createCollection("mycoll", {capped:true, size:100000}) 




```
 
在capped collection中，你能添加新的对象。
 能进行更新，然而，对象不会增加存储空间。如果增加，更新就会失败 。
 数据库不允许进行删除。使用drop()方法删除collection所有的行。
 注意: 删除之后，你必须显式的重新创建这个collection。
 在32bit机器中，capped collection最大存储为1e9( 1X109)个字节。
 




#### 元数据

 数据库的信息是存储在集合中。它们使用了系统的命名空间：

 
```
 dbname.system.* 




```
 在MongoDB数据库中名字空间 <dbname>.system.* 是包含多种系统信息的特殊集合(Collection)，如下:

 

|集合命名空间|描述|
|:--|:--|
|dbname.system.namespaces|列出所有名字空间。|
|dbname.system.indexes|列出所有索引。|
|dbname.system.profile|包含数据库概要(profile)信息。|
|dbname.system.users|列出所有可访问数据库的用户。|
|dbname.local.sources|包含复制对端（slave）的服务器信息和状态。|

对于修改系统集合中的对象有如下限制。

 在{{system.indexes}}插入数据，可以创建索引。但除此之外该表信息是不可变的(特殊的drop index命令将自动更新相关信息)。 

 {{system.users}}是可修改的。 {{system.profile}}是可删除的。

 

