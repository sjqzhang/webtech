 PHP 文件处理  
fopen() 函数用于在 PHP 中打开文件。

 

#### 打开文件

 fopen() 函数用于在 PHP 中打开文件。

 此函数的第一个参数含有要打开的文件的名称，第二个参数规定了使用哪种模式来打开文件：

 
```
 <html>

 <body>



 <?php

 $file=fopen("welcome.txt","r");

 ?>



 </body>

 </html> 




```
 文件可能通过下列模式来打开：

 

|模式|描述|
|:--|:--|
|r|只读。在文件的开头开始。|
|r+|读/写。在文件的开头开始。|
|w|只写。打开并清空文件的内容；如果文件不存在，则创建新文件。|
|w+|读/写。打开并清空文件的内容；如果文件不存在，则创建新文件。|
|a|追加。打开并向文件末尾进行写操作，如果文件不存在，则创建新文件。|
|a+|读/追加。通过向文件末尾写内容，来保持文件内容。|
|x|只写。创建新文件。如果文件已存在，则返回 FALSE 和一个错误。|
|x+|读/写。创建新文件。如果文件已存在，则返回 FALSE 和一个错误。|

注释：如果 fopen() 函数无法打开指定文件，则返回 0 (false)。

 
#### 实例

 如果 fopen() 函数不能打开指定的文件，下面的实例会生成一段消息：

 
```
 <html>

 <body>



 <?php

 $file=fopen("welcome.txt","r") or exit("Unable to open file!");

 ?>



 </body>

 </html> 




```
 



#### 关闭文件

 fclose() 函数用于关闭打开的文件：

 
```
 <?php

 $file = fopen("test.txt","r");



 //some code to be executed



 fclose($file);

 ?> 




```
 



#### 检测 End-of-file

 feof() 函数检测是否已到达文件末尾（EOF）。



 在循环遍历未知长度的数据时，feof() 函数很有用。

 注释：在 w 、a 和 x 模式下，您无法读取打开的文件！

 
```
 if (feof($file)) echo "End of file"; 




```
 



#### 逐行读取文件

 fgets() 函数用于从文件中逐行读取文件。

 注释：在调用该函数之后，文件指针会移动到下一行。

 
#### 实例

 下面的实例逐行读取文件，直到文件末尾为止：

 
```
 <?php

 $file = fopen("welcome.txt", "r") or exit("Unable to open file!");

 //Output a line of the file until the end is reached

 while(!feof($file))

 {

 echo fgets($file). "<br>";

 }

 fclose($file);

 ?> 




```
 



#### 逐字符读取文件

 fgetc() 函数用于从文件中逐字符地读取文件。

 注释：在调用该函数之后，文件指针会移动到下一个字符。

 
#### 实例

 下面的实例逐字符地读取文件，直到文件末尾为止：

 
```
 <?php

 $file=fopen("welcome.txt","r") or exit("Unable to open file!");

 while (!feof($file))

 {

 echo fgetc($file);

 }

 fclose($file);

 ?> 




```
 



#### PHP Filesystem 参考手册

 如需查看 PHP 文件系统函数的完整参考手册，请访问我们的[PHP Filesystem 参考手册](http://www.w3cschool.cc/php/php-ref-filesystem.html)。

 

