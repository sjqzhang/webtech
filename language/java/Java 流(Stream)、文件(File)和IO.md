 
#### Java 流(Stream)、文件(File)和IO

 Java.io包几乎包含了所有操作输入、输出需要的类。所有这些流类代表了输入源和输出目标。 


Java.io包中的流支持很多种格式，比如：基本类型、对象、本地化字符集等等。 


一个流可以理解为一个数据的序列。输入流表示从一个源读取数据，输出流表示向一个目标写数据。 


Java为I/O提供了强大的而灵活的支持，使其更广泛地应用到文件传输和网络编程中。 


但本节讲述最基本的和流与I/O相关的功能。我们将通过一个个例子来学习这些功能。 




#### 读取控制台输入

  Java的控制台输入由Sysem.in完成。 


为了获得一个绑定到控制台的字符流，你可以把System.in包装在一个BufferedReader 对象中来创建一个字符流。 


下面是创建BufferedReader的基本语法：

 
```

BufferedReader br = new BufferedReader(new 
                      InputStreamReader(System.in));

```
 BufferedReader对象创建后，我们便可以使用read()方法从控制台读取一个字符，或者用readLine()方法读取一个字符串。 




#### 从控制台读取多字符输入

  从BufferedReader对象读取一个字符要使用read()方法，它的语法如下： 

 
```

int read( ) throws IOException

```
 每次调用read()方法，它从输入流读取一个字符并把该字符作为整数值返回。 当流结束的时候返回-1。该方法抛出IOException。 


下面的程序示范了用read()方法从控制台不断读取字符直到用户输入"q"。

 
```

// 使用 BufferedReader 在控制台读取字符

import java.io.*;

public class BRRead {
   public static void main(String args[]) throws IOException
   {
      char c;
      // 使用 System.in 创建 BufferedReader 
      BufferedReader br = new BufferedReader(new 
                         InputStreamReader(System.in));
      System.out.println("Enter characters, 'q' to quit.");
      // 读取字符
      do {
         c = (char) br.read();
         System.out.println(c);
      } while(c != 'q');
   }
}

```
 以上实例编译运行结果如下:

 
```

Enter characters, 'q' to quit.
123abcq
1
2
3
a
b
c
q

```
 

#### 从控制台读取字符串

  从标准输入读取一个字符串需要使用BufferedReader的readLine()方法。 


它的一般格式是： 

 
```

String readLine( ) throws IOException

```
  下面的程序读取和显示字符行直到你输入了单词"end"。 

 
```

// 使用 BufferedReader 在控制台读取字符
import java.io.*;
public class BRReadLines {
   public static void main(String args[]) throws IOException
   {
      // 使用 System.in 创建 BufferedReader 
      BufferedReader br = new BufferedReader(new
                              InputStreamReader(System.in));
      String str;
      System.out.println("Enter lines of text.");
      System.out.println("Enter 'end' to quit.");
      do {
         str = br.readLine();
         System.out.println(str);
      } while(!str.equals("end"));
   }
}

```
 以上实例编译运行结果如下:

 
```

Enter lines of text.
Enter 'end' to quit.
This is line one
This is line one
This is line two
This is line two
end
end

```
 
#### 控制台输出

  在此前已经介绍过，控制台的输出由 print( ) 和println( )完成。这些方法都由类PrintStream 定义，System.out是该类对象的一个引用。 


PrintStream 继承了OutputStream类，并且实现了方法write()。这样，write()也可以用来往控制台写操作。 


PrintStream 定义write()的最简单格式如下所示：

 
```

void write(int byteval)

```
 该方法将byteval的低八位字节写到流中。 

 
#### 实例

  下面的例子用write()把字符"A"和紧跟着的换行符输出到屏幕： 

 
```

import java.io.*;

// 演示 System.out.write().
public class WriteDemo {
   public static void main(String args[]) {
      int b; 
      b = 'A';
      System.out.write(b);
      System.out.write('\n');
   }
}

```
 运行以上实例在输出窗口输出"A"字符

 
```

A

```
 

#### 注意：

write()方法不经常使用，因为print()和println()方法用起来更为方便。 

 

#### 读写文件

  如前所述，一个流被定义为一个数据序列。输入流用于从源读取数据，输出流用于向目标写数据。 


下图是一个描述输入流和输出流的类层次图。

  ![http://www.w3cschool.cc/wp-content/uploads/2013/12/12-130Q122402I57.jpg](http://www.w3cschool.cc/wp-content/uploads/2013/12/12-130Q122402I57.jpg)

 下面将要讨论的两个重要的流是FileInputStream 和FileOutputStream： 




#### FileInputStream

 该流用于从文件读取数据，它的对象可以用关键字new来创建。 


有多种构造方法可用来创建对象。 


可以使用字符串类型的文件名来创建一个输入流对象来读取文件：

 
```

InputStream f = new FileInputStream("C:/java/hello");

```
 也可以使用一个文件对象来创建一个输入流对象来读取文件。我们首先得使用File()方法来创建一个文件对象： 

 
```

File f = new File("C:/java/hello");
InputStream f = new FileInputStream(f);

```
 创建了InputStream对象，就可以使用下面的方法来读取流或者进行其他的流操作。

 

| 序号| 方法及描述|
|:--|:--|
| 1| public void close() throws IOException{} 关闭此文件输入流并释放与此流有关的所有系统资源。抛出IOException异常。|
| 2| protected void finalize()throws IOException {} 这个方法清除与该文件的连接。确保在不再引用文件输入流时调用其 close 方法。抛出IOException异常。|
| 3| public int read(int r)throws IOException{} 这个方法从InputStream对象读取指定字节的数据。返回为整数值。返回下一字节数据，如果已经到结尾则返回-1。|
| 4| public int read(byte[] r) throws IOException{} 这个方法从输入流读取r.length长度的字节。返回读取的字节数。如果是文件结尾则返回-1。|
| 5| public int available() throws IOException{} 返回下一次对此输入流调用的方法可以不受阻塞地从此输入流读取的字节数。返回一个整数值。|

除了InputStream外，还有一些其他的输入流，更多的细节参考下面链接：

 
 [ByteArrayInputStream](http://www.w3cschool.cc/java/java-bytearrayinputstream.html)


 [DataInputStream](http://www.w3cschool.cc/java/java-datainputstream.html)

 


#### FileOutputStream


 该类用来创建一个文件并向文件中写数据。


 如果该流在打开文件进行输出前，目标文件不存在，那么该流会创建该文件。


 有两个构造方法可以用来创建FileOutputStream 对象。


 使用字符串类型的文件名来创建一个输出流对象：

 
```

OutputStream f = new FileOutputStream("C:/java/hello") 

```
 也可以使用一个文件对象来创建一个输出流来写文件。我们首先得使用File()方法来创建一个文件对象： 

 
```

File f = new File("C:/java/hello");
OutputStream f = new FileOutputStream(f);

```
  创建OutputStream 对象完成后，就可以使用下面的方法来写入流或者进行其他的流操作。 

 

| 序号| 方法及描述|
|:--|:--|
| 1| public void close() throws IOException{} 关闭此文件输入流并释放与此流有关的所有系统资源。抛出IOException异常。|
| 2| protected void finalize()throws IOException {} 这个方法清除与该文件的连接。确保在不再引用文件输入流时调用其 close 方法。抛出IOException异常。|
| 3| public void write(int w)throws IOException{} 这个方法把指定的字节写到输出流中。|
| 4| public void write(byte[] w) 把指定数组中w.length长度的字节写到OutputStream中。|

除了OutputStream外，还有一些其他的输出流，更多的细节参考下面链接：

 
 [ByteArrayOutputStream](http://www.w3cschool.cc/java/java-bytearrayoutputstream.html)


 [DataOutputStream](http://www.w3cschool.cc/java/java-dataoutputstream.html)




#### 实例

  下面是一个演示InputStream和OutputStream用法的例子： 

 
```

import java.io.*;

public class fileStreamTest{

   public static void main(String args[]){
   
   try{
      byte bWrite [] = {11,21,3,40,5};
      OutputStream os = new FileOutputStream("test.txt");
      for(int x=0; x < bWrite.length ; x++){
         os.write( bWrite[x] ); // writes the bytes
      }
      os.close();
     
      InputStream is = new FileInputStream("test.txt");
      int size = is.available();

      for(int i=0; i< size; i++){
         System.out.print((char)is.read() + "  ");
      }
      is.close();
   }catch(IOException e){
      System.out.print("Exception");
   }	
   }
}

```
 上面的程序首先创建文件test.txt，并把给定的数字以二进制形式写进该文件，同时输出到控制台上。 

 以上代码由于是二进制写入，可能存在乱码，你可以使用以下代码实例来解决乱码问题：

 
```

//文件名 :fileStreamTest2.java
import java.io.*;

public class fileStreamTest2{
	public static void main(String[] args) throws IOException {
		
		File f = new File("a.txt");
		FileOutputStream fop = new FileOutputStream(f);
		// 构建FileOutputStream对象,文件不存在会自动新建
		
		OutputStreamWriter writer = new OutputStreamWriter(fop, "UTF-8");
		// 构建OutputStreamWriter对象,参数可以指定编码,默认为操作系统默认编码,windows上是gbk
		
		writer.append("中文输入");
		// 写入到缓冲区
		
		writer.append("\r\n");
		//换行
		
		writer.append("English");
		// 刷新缓存冲,写入到文件,如果下面已经没有写入的内容了,直接close也会写入
		
		writer.close();
		//关闭写入流,同时会把缓冲区内容写入文件,所以上面的注释掉
		
		fop.close();
		// 关闭输出流,释放系统资源

		FileInputStream fip = new FileInputStream(f);
		// 构建FileInputStream对象
		
		InputStreamReader reader = new InputStreamReader(fip, "UTF-8");
		// 构建InputStreamReader对象,编码与写入相同

		StringBuffer sb = new StringBuffer();
		while (reader.ready()) {
			sb.append((char) reader.read());
			// 转成char加到StringBuffer对象中
		}
		System.out.println(sb.toString());
		reader.close();
		// 关闭读取流
		
		fip.close();
		// 关闭输入流,释放系统资源

	}
}

```
 

#### 文件和I/O


 还有一些关于文件和I/O的类，我们也需要知道：

 
 [File Class(类)](http://www.w3cschool.cc/java/java-file.html)


 [FileReader Class(类)](http://www.w3cschool.cc/java/java-filereader.html)


 [FileWriter Class(类)](http://www.w3cschool.cc/java/java-filewriter.html)





#### Java中的目录

 
#### 创建目录：


 File类中有两个方法可以用来创建文件夹：

 
 

#### mkdir( )

方法创建一个文件夹，成功则返回true，失败则返回false。失败表明File对象指定的路径已经存在，或者由于整个路径还不存在，该文件夹不能被创建。
  

#### mkdirs()

方法创建一个文件夹和它的所有父文件夹。
 
 下面的例子创建 "/tmp/user/java/bin"文件夹：

 
```

import java.io.File;

public class CreateDir {
   public static void main(String args[]) {
      String dirname = "/tmp/user/java/bin";
      File d = new File(dirname);
      // 现在创建目录
      d.mkdirs();
  }
}

```
 编译并执行上面代码来创建目录"/tmp/user/java/bin"。 




#### 注意：

Java在UNIX和Windows自动按约定分辨文件路径分隔符。如果你在Windows版本的Java中使用分隔符(/) ，路径依然能够被正确解析。 




#### 读取目录

  一个目录其实就是一个File对象，它包含其他文件和文件夹。 


如果创建一个File对象并且它是一个目录，那么调用isDirectory( )方法会返回true。 


可以通过调用该对象上的list()方法，来提取它包含的文件和文件夹的列表。 


下面展示的例子说明如何使用list()方法来检查一个文件夹中包含的内容：

 
```

import java.io.File;

public class DirList {
   public static void main(String args[]) {
      String dirname = "/tmp";
      File f1 = new File(dirname);
      if (f1.isDirectory()) {
         System.out.println( "Directory of " + dirname);
         String s[] = f1.list();
         for (int i=0; i < s.length; i++) {
            File f = new File(dirname + "/" + s[i]);
            if (f.isDirectory()) {
               System.out.println(s[i] + " is a directory");
            } else {
               System.out.println(s[i] + " is a file");
            }
         }
      } else {
         System.out.println(dirname + " is not a directory");
    }
  }
}

```
 以上实例编译运行结果如下：

 
```

Directory of /tmp
bin is a directory
lib is a directory
demo is a directory
test.txt is a file
README is a file
index.html is a file
include is a directory

```
 

