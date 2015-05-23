 
#### MongoDB Java

 环境配置 


在Java程序中如果要使用MongoDB，你需要确保已经安装了Java环境及MongoDB JDBC 驱动。

 你可以参考本站的[](http://www.w3cschool.cc/java/java-tutorial.html)Java教程来安装Java程序。现在让我们来检测你是否安装了 MongoDB JDBC 驱动。

 
首先你必须下载mongo jar包，下载地址：[](https://github.com/mongodb/mongo-java-driver/downloads)https://github.com/mongodb/mongo-java-driver/downloads, 请确保下载最新版本。 
 你需要将mongo.jar包含在你的 classpath 中。。 
 


#### 连接数据库

  连接数据库，你需要指定数据库名称，如果指定的数据库不存在，mongo会自动创建数据库。

 连接数据库的Java代码如下：

 
```

import com.mongodb.MongoClient;
import com.mongodb.MongoException;
import com.mongodb.WriteConcern;
import com.mongodb.DB;
import com.mongodb.DBCollection;
import com.mongodb.BasicDBObject;
import com.mongodb.DBObject;
import com.mongodb.DBCursor;
import com.mongodb.ServerAddress;
import java.util.Arrays;

public class MongoDBJDBC{
   public static void main( String args[] ){
      try{   
		 // 连接到 mongodb 服务
         MongoClient mongoClient = new MongoClient( "localhost" , 27017 );
         // 连接到数据库
         DB db = mongoClient.getDB( "test" );
		 System.out.println("Connect to database successfully");
         boolean auth = db.authenticate(myUserName, myPassword);
		 System.out.println("Authentication: "+auth);
      }catch(Exception e){
	     System.err.println( e.getClass().getName() + ": " + e.getMessage() );
	  }
   }
}

```
 现在，让我们来编译运行程序并创建数据库test。

 你可以更加你的实际环境改变MongoDB JDBC驱动的路径。

 本实例将MongoDB JDBC启动包 mongo-2.10.1.jar 放在本地目录下:

 
```

$javac MongoDBJDBC.java
$java -classpath ".:mongo-2.10.1.jar" MongoDBJDBC
Connect to database successfully
Authentication: true

```
 如果你使用的是Window系统，你可以按以下命令来编译执行程序： 

 
```

$javac MongoDBJDBC.java
$java -classpath ".;mongo-2.10.1.jar" MongoDBJDBC
Connect to database successfully
Authentication: true

```
 如果用户名及密码正确，则Authentication 的值为true。 

 

#### 创建集合

 我们可以使用com.mongodb.DB类中的createCollection()来创建集合

 代码片段如下：

 
```

import com.mongodb.MongoClient;
import com.mongodb.MongoException;
import com.mongodb.WriteConcern;
import com.mongodb.DB;
import com.mongodb.DBCollection;
import com.mongodb.BasicDBObject;
import com.mongodb.DBObject;
import com.mongodb.DBCursor;
import com.mongodb.ServerAddress;
import java.util.Arrays;

public class MongoDBJDBC{
   public static void main( String args[] ){
      try{   
	     // 连接到 mongodb 服务
         MongoClient mongoClient = new MongoClient( "localhost" , 27017 );
         // 连接到数据库
         DB db = mongoClient.getDB( "test" );
	 System.out.println("Connect to database successfully");
         boolean auth = db.authenticate(myUserName, myPassword);
	 System.out.println("Authentication: "+auth);
         DBCollection coll = db.createCollection("mycol");
         System.out.println("Collection created successfully");
      }catch(Exception e){
	     System.err.println( e.getClass().getName() + ": " + e.getMessage() );
	  }
   }
}

```
 编译运行以上程序，输出结果如下:

 
```

Connect to database successfully
Authentication: true
Collection created successfully

```
 

#### 获取集合

  我们可以使用com.mongodb.DBCollection类的 getCollection() 方法来获取一个集合 

 代码片段如下：

 
```

import com.mongodb.MongoClient;
import com.mongodb.MongoException;
import com.mongodb.WriteConcern;
import com.mongodb.DB;
import com.mongodb.DBCollection;
import com.mongodb.BasicDBObject;
import com.mongodb.DBObject;
import com.mongodb.DBCursor;
import com.mongodb.ServerAddress;
import java.util.Arrays;

public class MongoDBJDBC{
   public static void main( String args[] ){
      try{   
	     // 连接到 mongodb 服务
         MongoClient mongoClient = new MongoClient( "localhost" , 27017 );
         // 连接到数据库
         DB db = mongoClient.getDB( "test" );
	 System.out.println("Connect to database successfully");
         boolean auth = db.authenticate(myUserName, myPassword);
	 System.out.println("Authentication: "+auth);
         DBCollection coll = db.createCollection("mycol");
         System.out.println("Collection created successfully");
         DBCollection coll = db.getCollection("mycol");
         System.out.println("Collection mycol selected successfully");
      }catch(Exception e){
	     System.err.println( e.getClass().getName() + ": " + e.getMessage() );
	  }
   }
}

```
 编译运行以上程序，输出结果如下:

 
```

Connect to database successfully
Authentication: true
Collection created successfully
Collection mycol selected successfully

```
 

#### 插入文档

  我们可以使用com.mongodb.DBCollection类的 insert() 方法来插入一个文档 

 代码片段如下：

 
```

import com.mongodb.MongoClient;
import com.mongodb.MongoException;
import com.mongodb.WriteConcern;
import com.mongodb.DB;
import com.mongodb.DBCollection;
import com.mongodb.BasicDBObject;
import com.mongodb.DBObject;
import com.mongodb.DBCursor;
import com.mongodb.ServerAddress;
import java.util.Arrays;

public class MongoDBJDBC{
   public static void main( String args[] ){
      try{   
		 // 连接到 mongodb 服务
         MongoClient mongoClient = new MongoClient( "localhost" , 27017 );
         // 连接到数据库
         DB db = mongoClient.getDB( "test" );
	 System.out.println("Connect to database successfully");
         boolean auth = db.authenticate(myUserName, myPassword);
	 System.out.println("Authentication: "+auth);         
         DBCollection coll = db.getCollection("mycol");
         System.out.println("Collection mycol selected successfully");
         BasicDBObject doc = new BasicDBObject("title", "MongoDB").
            append("description", "database").
            append("likes", 100).
            append("url", "http://www.w3cschool.cc/mongodb/").
            append("by", "w3cschool.cc");
         coll.insert(doc);
         System.out.println("Document inserted successfully");
      }catch(Exception e){
	     System.err.println( e.getClass().getName() + ": " + e.getMessage() );
	  }
   }
}

```
 编译运行以上程序，输出结果如下:

 
```

Connect to database successfully
Authentication: true
Collection mycol selected successfully
Document inserted successfully

```
 

#### 检索所有文档

 我们可以使用com.mongodb.DBCollection类中的 find() 方法来获取集合中的所有文档。

 此方法返回一个游标，所以你需要遍历这个游标。

 代码片段如下：

 
```

import com.mongodb.MongoClient;
import com.mongodb.MongoException;
import com.mongodb.WriteConcern;
import com.mongodb.DB;
import com.mongodb.DBCollection;
import com.mongodb.BasicDBObject;
import com.mongodb.DBObject;
import com.mongodb.DBCursor;
import com.mongodb.ServerAddress;
import java.util.Arrays;

public class MongoDBJDBC{
   public static void main( String args[] ){
      try{   
		// 连接到 mongodb 服务
         MongoClient mongoClient = new MongoClient( "localhost" , 27017 );
          // 连接到数据库
         DB db = mongoClient.getDB( "test" );
	 System.out.println("Connect to database successfully");
         boolean auth = db.authenticate(myUserName, myPassword);
	 System.out.println("Authentication: "+auth);         
         DBCollection coll = db.getCollection("mycol");
         System.out.println("Collection mycol selected successfully");
         DBCursor cursor = coll.find();
         int i=1;
         while (cursor.hasNext()) { 
            System.out.println("Inserted Document: "+i); 
            System.out.println(cursor.next()); 
            i++;
         }
      }catch(Exception e){
	     System.err.println( e.getClass().getName() + ": " + e.getMessage() );
	  }
   }
}

```
 编译运行以上程序，输出结果如下:

 
```

Connect to database successfully
Authentication: true
Collection mycol selected successfully
Inserted Document: 1
{
   "_id" : ObjectId(7df78ad8902c),
   "title": "MongoDB",
   "description": "database",
   "likes": 100,
   "url": "http://www.w3cschool.cc/mongodb/",
   "by": "w3cschool.cc"
}

```
 

#### 更新文档


 你可以使用 com.mongodb.DBCollection 类中的 update() 方法来更新集合中的文档。


代码片段如下：

 
```

import com.mongodb.MongoClient;
import com.mongodb.MongoException;
import com.mongodb.WriteConcern;
import com.mongodb.DB;
import com.mongodb.DBCollection;
import com.mongodb.BasicDBObject;
import com.mongodb.DBObject;
import com.mongodb.DBCursor;
import com.mongodb.ServerAddress;
import java.util.Arrays;

public class MongoDBJDBC{
   public static void main( String args[] ){
      try{   
	 // 连接到Mongodb服务
         MongoClient mongoClient = new MongoClient( "localhost" , 27017 );
         // 连接到你的数据库
         DB db = mongoClient.getDB( "test" );
	 System.out.println("Connect to database successfully");
         boolean auth = db.authenticate(myUserName, myPassword);
	 System.out.println("Authentication: "+auth);         
         DBCollection coll = db.getCollection("mycol");
         System.out.println("Collection mycol selected successfully");
         DBCursor cursor = coll.find();
         while (cursor.hasNext()) { 
            DBObject updateDocument = cursor.next();
            updateDocument.put("likes","200")
            col1.update(updateDocument); 
         }
         System.out.println("Document updated successfully");
         cursor = coll.find();
         int i=1;
         while (cursor.hasNext()) { 
            System.out.println("Updated Document: "+i); 
            System.out.println(cursor.next()); 
            i++;
         }
      }catch(Exception e){
	     System.err.println( e.getClass().getName() + ": " + e.getMessage() );
	  }
   }
}

```
 编译运行以上程序，输出结果如下:

 
```

Connect to database successfully
Authentication: true
Collection mycol selected successfully
Document updated successfully
Updated Document: 1
{
   "_id" : ObjectId(7df78ad8902c),
   "title": "MongoDB",
   "description": "database",
   "likes": 200,
   "url": "http://www.w3cschool.cc/mongodb/",
   "by": "w3cschool.cc"
}

```
 

#### 删除第一个文档

 要删除集合中的第一个文档，首先你需要使用com.mongodb.DBCollection类中的 findOne()方法来获取第一个文档，然后使用remove 方法删除。

 代码片段如下：

 
```

 import com.mongodb.MongoClient;
import com.mongodb.MongoException;
import com.mongodb.WriteConcern;
import com.mongodb.DB;
import com.mongodb.DBCollection;
import com.mongodb.BasicDBObject;
import com.mongodb.DBObject;
import com.mongodb.DBCursor;
import com.mongodb.ServerAddress;
import java.util.Arrays;

public class MongoDBJDBC{
   public static void main( String args[] ){
      try{   
	 // 连接到Mongodb服务
         MongoClient mongoClient = new MongoClient( "localhost" , 27017 );
         // 连接到你的数据库
         DB db = mongoClient.getDB( "test" );
	 System.out.println("Connect to database successfully");
         boolean auth = db.authenticate(myUserName, myPassword);
	 System.out.println("Authentication: "+auth);         
         DBCollection coll = db.getCollection("mycol");
         System.out.println("Collection mycol selected successfully");
         DBObject myDoc = coll.findOne();
         col1.remove(myDoc);
         DBCursor cursor = coll.find();
         int i=1;
         while (cursor.hasNext()) { 
            System.out.println("Inserted Document: "+i); 
            System.out.println(cursor.next()); 
            i++;
         }
         System.out.println("Document deleted successfully");
      }catch(Exception e){
	     System.err.println( e.getClass().getName() + ": " + e.getMessage() );
	  }
   }
}

```
 编译运行以上程序，输出结果如下:

 
```

Connect to database successfully
Authentication: true
Collection mycol selected successfully
Document deleted successfully

```
 你还可以使用 save(), limit(), skip(), sort() 等方法来操作MongoDB数据库。

 

