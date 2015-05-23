 MongoDB 查询
 
#### 描述

 本教程我们将向大家介绍如何在MongoDB集合中获取数据。

 

#### 我们使用的数据库名称为"myinfo" 我们的集合名称为"userdetails"，以下为我们插入的数据：



 
```
 >db.userdetails.insert({"user_id" : "user1","password" :"1a2b3c" ,"date_of_join" : "16/10/2010" ,"education" :"M.C.A."

 , "profession" : "CONSULTANT","interest" : "MUSIC","community_name" :["MODERN MUSIC", "CLASSICAL MUSIC","WESTERN 

MUSIC"],"community_moder_id" : ["MR. Alex","MR. Dang","MR Haris"],"community_members" : 

[700,200,1500],"friends_id" : ["kumar","harry","anand"],"ban_friends_id" :["Amir","Raja","mont"]}); 




```




```
 > db.userdetails.insert({"user_id" : "user2","password" :"11aa1a" ,"date_of_join" : "17/10/2009" ,"education" 

:"M.B.A." , "profession" : "MARKETING","interest" : "MUSIC","community_name" :["MODERN MUSIC", "CLASSICAL 

MUSIC","WESTERN MUSIC"],"community_moder_id" : ["MR. Roy","MR. Das","MR Doglus"],"community_members" : 

[500,300,1400],"friends_id" : ["pal","viki","john"],"ban_friends_id" :["jalan","monoj","evan"]}); 




```




```
 > db.userdetails.insert({"user_id" : "user3","password" :"b1c1d1" ,"date_of_join" : "16/10/2010" ,"education" 

:"M.C.A." , "profession" : "IT COR.","interest" : "ART","community_name" :["MODERN ART", "CLASSICAL ART","WESTERN 

ART"],"community_moder_id" : ["MR. Rifel","MR. Sarma","MR Bhatia"],"community_members" : 

[5000,2000,1500],"friends_id" : ["philip","anant","alan"],"ban_friends_id" :["Amir","Raja","mont"]}); 




```




```
 > db.userdetails.insert({"user_id" : "user4","password" :"abczyx" ,"date_of_join" : "17/8/2009" ,"education" 

:"M.B.B.S." , "profession" : "DOCTOR","interest" : "SPORTS","community_name" :["ATHELATIC", "GAMES FAN 

GYES","FAVOURIT GAMES"],"community_moder_id" : ["MR. Paul","MR. Das","MR Doglus"],"community_members" : 

[2500,2200,3500],"friends_id" : ["vinod","viki","john"],"ban_friends_id" :["jalan","monoj","evan"]});







```
 


#### 从集合中获取数据

 如果你想在集合中读取所有的的数据，可以执行以下命令

 
```
 >db.userdetails.find(); 




```
 类似于如下SQL查询语句：

 
```
 Select * from userdetails; 




```
 输出数据如下所示：

 ![http://www.w3cschool.cc/wp-content/uploads/2013/10/mongodb-query-view-data.gif](http://www.w3cschool.cc/wp-content/uploads/2013/10/mongodb-query-view-data.gif)

 
#### 通过指定条件读取数据

 如果我们想在集合"userdetails"中读取"education"为"M.C.A." 的数据，我们可以执行以下命令：

 
```
 >db.userdetails.find({"education":"M.C.A."}) 




```
 类似如下SQL查询语句:

 
```
 Select * from userdetails where education="M.C.A."; 




```
 输出结果如下所示：

 ![http://www.w3cschool.cc/wp-content/uploads/2013/10/mongodb-fetch-document-match-criteria.gif](http://www.w3cschool.cc/wp-content/uploads/2013/10/mongodb-fetch-document-match-criteria.gif)

 

