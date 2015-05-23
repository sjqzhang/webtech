 MongoDB条件操作符
 


#### 描述

 条件操作符用于比较两个表达式并从mongoDB集合中获取数据。

 在本章节中，我们将讨论如何在MongoDB中使用条件操作符。

 MongoDB中条件操作符有：

 
(>) 大于 - $gt
 (<) 小于 - $lt
 (>=) 大于等于 - $gte
 (<= ) 小于等于 - $lte
 


#### 我们使用的数据库名称为"myinfo" 我们的集合名称为"testtable"，以下为我们插入的数据。



 简单的集合"testtable"：

 ![http://www.w3cschool.cc/wp-content/uploads/2013/10/mongodb-testtable-dot-notation-sample.gif](http://www.w3cschool.cc/wp-content/uploads/2013/10/mongodb-testtable-dot-notation-sample.gif)

 


#### MongoDB (>) 大于操作符 - $gt

 如果你想获取"testtable"集合中"age" 大于22的数据，你可以使用以下命令：

 
```
>db.testtable.find({age : {$gt : 22}})




```
 类似于SQL语句：

 
```
 Select * from testtable where age >22; 




```
 输出结果：


![http://www.w3cschool.cc/wp-content/uploads/2013/10/mongodb-greater-than-operator.gif](http://www.w3cschool.cc/wp-content/uploads/2013/10/mongodb-greater-than-operator.gif)

 


#### MongoDB（>=）大于等于操作符 - $gte

 如果你想获取"testtable"集合中"age" 大于等于22的数据，你可以执行以下命令:

 
```
 >db.testtable.find({age : {$gte : 22}}) 




```
 类似于SQL语句：

 Select * from testtable where age >=22; 输出结果：


 ![http://www.w3cschool.cc/wp-content/uploads/2013/10/mongodb-greater-than-equal-to-operator.gif](http://www.w3cschool.cc/wp-content/uploads/2013/10/mongodb-greater-than-equal-to-operator.gif)

 


#### MongoDB (<) 小于操作符 - $lt

 如果你想获取"testtable"集合中"age" 小于19的数据，你可以执行以下命令：

 类似于SQL语句：

 
```
 Select * from testtable where age <19; 




```
 输出结果：


 ![http://www.w3cschool.cc/wp-content/uploads/2013/10/mongodb-less-than-operator.gif](http://www.w3cschool.cc/wp-content/uploads/2013/10/mongodb-less-than-operator.gif)

 


#### MongoDB (<=) 小于操作符 - $lte

 如果你想获取"testtable"集合中"age" 小于等于19的数据，你可以执行以下命令：

 
```
 >db.testtable.find({age : {$lte : 19}}) 




```
 类似于SQL语句：

 
```
 Select * from testtable where age <=19; 




```
 输出结果：


 ![http://www.w3cschool.cc/wp-content/uploads/2013/10/mongodb-less-than-equal-to-operator.gif](http://www.w3cschool.cc/wp-content/uploads/2013/10/mongodb-less-than-equal-to-operator.gif)

 


#### MongoDB 使用 (<) 和 (>) 查询operator - $lt 和 $gt

 如果你想获取"testtable"集合中"age" 大于17以及小于24的数据，你可以执行以下命令：

 
```
 >db.testtable.find({age : {$lt :24, $gt : 17}}) 




```
 类似于SQL语句：

 
```
 Select * from testtable where age 17; 




```
 输出结果：


 ![http://www.w3cschool.cc/wp-content/uploads/2013/10/mongodb-less-than-greater-than-operator.gif](http://www.w3cschool.cc/wp-content/uploads/2013/10/mongodb-less-than-greater-than-operator.gif)

 

