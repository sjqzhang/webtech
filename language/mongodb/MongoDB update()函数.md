 MongoDB使用update()函数更新数据 


#### 描述

 本章节我们将开始学习如何更新MongoDB中的集合数据。

 MongoDB数据更新可以使用update()函数。

  
```
db.collection.update( criteria, objNew, upsert, multi )


```
 

 update()函数接受以下四个参数：

 



#### criteria 

: update的查询条件，类似sql update查询内where后面的。
 


#### objNew 

: update的对象和一些更新的操作符（如$,$inc...）等，也可以理解为sql update查询内set后面的
 


#### upsert 

 : 这个参数的意思是，如果不存在update的记录，是否插入objNew,true为插入，默认是false，不插入。
 


#### multi 

 : mongodb默认是false,只更新找到的第一条记录，如果这个参数为true,就把按条件查出来多条记录全部更新。
  
在本教程中我们使用的数据库名称为"myinfo"，集合名称为"userdetails"，以下为插入的数据：

 
```
  > document=({"user_id" : "MNOPBWN","password" :"MNOPBWN" ,"date_of_join" : "16/10/2010" 

,"education" :"M.C.A." , "profession" : "CONSULTANT","interest" : "MUSIC","community_name" :["MODERN MUSIC", 

"CLASSICAL MUSIC","WESTERN MUSIC"],"community_moder_id" : ["MR. BBB","MR. JJJ","MR MMM"],"community_members" : 

[500,200,1500],"friends_id" : ["MMM123","NNN123","OOO123"],"ban_friends_id" :["BAN123","BAN456","BAN789"]});

 


```




```
 > db.userdetails.insert(document)

 


```




```
 > document=({"user_id" : "QRSTBWN","password" :"QRSTBWN" ,"date_of_join" : "17/10/2010" ,"education" :"M.B.A." 

, "profession" : "MARKETING","interest" : "MUSIC","community_name" :["MODERN MUSIC", "CLASSICAL MUSIC","WESTERN 

MUSIC"],"community_moder_id" : ["MR. BBB","MR. JJJ","MR MMM"],"community_members" : [500,200,1500],"friends_id" :

 ["MMM123","NNN123","OOO123"],"ban_friends_id" :["BAN123","BAN456","BAN789"]});

 


```




```
 > db.userdetails.insert(document)

 


```
 


#### update() 命令

 如果我们想将"userdetails"集合中"user_id"为"QRSTBWN"的"password"字段修改为"NEWPASSWORD"，那么我们可以使用update()命令来实现（如下实例所示）。

 如果criteria参数匹配集合中的任何一条数据，它将会执行替换命令，否则会插入一条新的数据。

 以下实例将更新第一条匹配条件的数据：

 
```
 > db.userdetails.update({"user_id" : "QRSTBWN"},{"user_id" : "QRSTBWN","password" :"NEWPASSWORD" 

,"date_of_join" : "17/10/2010" ,"education" :"M.B.A." , "profession" : "MARKETING","interest" : 

"MUSIC","community_name" :["MODERN MUSIC", "CLASSICAL MUSIC","WESTERN MUSIC"],"community_moder_id" : ["MR. 

BBB","MR. JJJ","MR MMM"],"community_members" : [500,200,1500],"friends_id" : ["MMM123","NNN123","OOO123"],"ban_friends_id" :["BAN123","BAN456","BAN789"]});

 


```
 ![http://www.w3cschool.cc/wp-content/uploads/2013/10/update-data-into-mongodb-comand.gif](http://www.w3cschool.cc/wp-content/uploads/2013/10/update-data-into-mongodb-comand.gif)

 


#### 查看集合中更新后的数据

 我们可以使用以下命令查看数据是否更新：

 
```
 >db.userdetails.find();

 


```
 ![http://www.w3cschool.cc/wp-content/uploads/2013/10/update-data-into-mongodb-view.gif](http://www.w3cschool.cc/wp-content/uploads/2013/10/update-data-into-mongodb-view.gif)

 


#### 更多实例

 只更新第一条记录：

 
```
  db.test0.update( { "count" : { $gt : 1 } } , { $set : { "test2" : "OK"} } ); 

 


```
 全部更新：

 
```
  db.test0.update( { "count" : { $gt : 3 } } , { $set : { "test2" : "OK"} },false,true ); 

 


```
 只添加第一条：

 
```
  db.test0.update( { "count" : { $gt : 4 } } , { $set : { "test5" : "OK"} },true,false ); 

 


```
 全部添加加进去:

 
```
  db.test0.update( { "count" : { $gt : 5 } } , { $set : { "test5" : "OK"} },true,true ); 

 


```
 全部更新：

 
```
  db.test0.update( { "count" : { $gt : 15 } } , { $inc : { "count" : 1} },false,true );

 


```
 只更新第一条记录：

 
```
  db.test0.update( { "count" : { $gt : 10 } } , { $inc : { "count" : 1} },false,false );

 


```
 

