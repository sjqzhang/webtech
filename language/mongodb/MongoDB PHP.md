 
#### MongoDB PHP

 在php中使用mongodb你必须使用 mongodb的php驱动。

 MongoDB PHP在各平台上的安装及驱动包下载请查看:[](http://www.w3cschool.cc/mongodb/mongodb-install-php-driver.html)PHP安装MongoDB扩展驱动

  
#### 确保连接及选择一个数据库

  为了确保正确连接，你需要指定数据库名，如果数据库在mongoDB中不存在，mongoDB会自动创建<?p> 


代码片段如下：

 
```

<?php
   // 连接到mongodb
   $m = new MongoClient();
   echo "Connection to database successfully";
   // 选择一个数据库
   $db = $m->mydb;
   echo "Database mydb selected";
?>

```
 执行以上程序，输出结果如下：

 
```

Connection to database successfully
Database mydb selected

```
 

#### 创建集合

 创建集合的代码片段如下： 

 
```

<?php
   // 连接到mongodb
   $m = new MongoClient();
   echo "Connection to database successfully";
   // 选择一个数据库
   $db = $m->mydb;
   echo "Database mydb selected";
   $collection = $db->createCollection("mycol");
   echo "Collection created succsessfully";
?>

```
 执行以上程序，输出结果如下：

 
```

Connection to database successfully
Database mydb selected
Collection created succsessfully

```
 

#### 插入文档

 在mongoDB中使用 insert() 方法插入文档：

 插入文档代码片段如下：

 
```

<?php
   // 连接到mongodb
   $m = new MongoClient();
   echo "Connection to database successfully";
   // 选择一个数据库
   $db = $m->mydb;
   echo "Database mydb selected";
   $collection = $db->mycol;
   echo "Collection selected succsessfully";
   $document = array( 
      "title" => "MongoDB", 
      "description" => "database", 
      "likes" => 100,
      "url" => "http://www.w3cschool.cc/mongodb/",
      "by", "w3cschool.cc"
   );
   $collection->insert($document);
   echo "Document inserted successfully";
?>

```
 执行以上程序，输出结果如下：

 
```

Connection to database successfully
Database mydb selected
Collection selected succsessfully
Document inserted successfully

```
 

#### 查找文档

 使用find() 方法来读取集合中的文档。

 读取使用文档的代码片段如下：

 
```

<?php
   // 连接到mongodb
   $m = new MongoClient();
   echo "Connection to database successfully";
   // 选择一个数据库
   $db = $m->mydb;
   echo "Database mydb selected";
   $collection = $db->mycol;
   echo "Collection selected succsessfully";

   $cursor = $collection->find();
   // 迭代显示文档标题
   foreach ($cursor as $document) {
      echo $document["title"] . "\n";
   }
?>

```
 执行以上程序，输出结果如下：

 
```

Connection to database successfully
Database mydb selected
Collection selected succsessfully
{
   "title": "MongoDB"
}

```
 

#### 更新文档

 使用 update() 方法来更新文档。

 以下实例将更新文档中的标题为' MongoDB Tutorial'， 代码片段如下：

 
```

<pre>
<?php
   // 连接到mongodb
   $m = new MongoClient();
   echo "Connection to database successfully";
   // 选择一个数据库
   $db = $m->mydb;
   echo "Database mydb selected";
   $collection = $db->mycol;
   echo "Collection selected succsessfully";

   // 更新文档
   $collection->update(array("title"=>"MongoDB"), array('$set'=>array("title"=>"MongoDB Tutorial")));
   echo "Document updated successfully";
   // 显示更新后的文档
   $cursor = $collection->find();
   // 循环显示文档标题
   echo "Updated document";
   foreach ($cursor as $document) {
      echo $document["title"] . "\n";
   }
?>

```
 执行以上程序，输出结果如下：

 
```

Connection to database successfully
Database mydb selected
Collection selected succsessfully
Document updated successfully
Updated document
{
   "title": "MongoDB Tutorial"
}

```
 

#### 删除文档

 使用 remove() 方法来删除文档。

 以下实例中我们将移除 'title' 为 'MongoDB Tutorial' 的数据记录。， 代码片段如下：

 
```

<?php
   // 连接到mongodb
   $m = new MongoClient();
   echo "Connection to database successfully";
   // 选择一个数据库
   $db = $m->mydb;
   echo "Database mydb selected";
   $collection = $db->mycol;
   echo "Collection selected succsessfully";
   
   // 移除文档
   $collection->remove(array("title"=>"MongoDB Tutorial"),false);
   echo "Documents deleted successfully";
   
   // 显示可用文档数据
   $cursor = $collection->find();
   // iterate cursor to display title of documents
   echo "Updated document";
   foreach ($cursor as $document) {
      echo $document["title"] . "\n";
   }
?>

```
 执行以上程序，输出结果如下：

 
```

Connection to database successfully
Database mydb selected
Collection selected succsessfully
Documents deleted successfully

```
 除了以上实例外，在php中你还可以使用findOne(), save(), limit(), skip(), sort()等方法来操作Mongodb数据库。

 

