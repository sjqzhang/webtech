

      python除了关键字（keywords）和内置的类型和函数（builtins）,更多的功能是通过libraries（即modules）来提供的。


常用的libraries（modules）如下：


 


##1）python运行时服务


* copy： copy模块提供了对复合（compound）对象（list，tuple，dict，custom class）进行浅拷贝和深拷贝的功能。


* pickle： pickle模块被用来序列化python的对象到bytes流，从而适合存储到文件，网络传输，或数据库存储。（pickle的过程也被称serializing,marshalling或者flattening，pickle同时可以用来将bytes流反序列化为python的对象）。


* sys：sys模块包含了跟python解析器和环境相关的变量和函数。


* 其他： atexit，gc，inspect，marshal，traceback，types，warnings，weakref。


 


##2）数学


* decimal：python中的float使用双精度的二进制浮点编码来表示的，这种编码导致了小数不能被精确的表示，例如0.1实际上内存中为0.100000000000000001，还有3*0.1 == 0.3 为False. decimal就是为了解决类似的问题的，拥有更高的精确度，能表示更大范围的数字，更精确地四舍五入。


* math：math模块定义了标准的数学方法，例如cos(x),sin(x)等。


* random：random模块提供了各种方法用来产生随机数。


* 其他：fractions，numbers。


 


##3）数据结构，算法和代码简化


* array： array代表数组，类似与list，与list不同的是只能存储相同类型的对象。


* bisect： bisect是一个有序的list，其中内部使用二分法（bitsection）来实现大部分操作。


* collections：collections模块包含了一些有用的容器的高性能实现，各种容器的抽象基类，和创建name-tuple对象的函数。例如包含了容器deque，defaultdict，namedtuple等。


* heapq：heapq是一个使用heap实现的带有优先级的queue。


* itertools：itertools包含了函数用来创建有效的iterators。所有的函数都返回iterators或者函数包含iterators（例如generators 和generators expression）。


* operator： operator提供了访问python内置的操作和解析器提供的特殊方法，例如 x+y 为 add（x，y），x+=y为iadd（x，y），a % b 为mod（a，b）等等。


* 其他：abc，contextlib，functools。




 


##4) string 和 text 处理


*codecs：codecs模块被用来处理不同的字符编码与unicode text io的转化。


* re：re模块用来对字符串进行正则表达式的匹配和替换。


* string：string模块包含大量有用的常量和函数用来处理字符串。也包含了新字符串格式的类。


* struct：struct模块被用来在python和二进制结构间实现转化。


* unicodedata：unicodedata模块提供访问unicode字符数据库




##　5) python数据库访问


* 关系型数据库拥有共同的规范Python Database API Specification V2.0，MySQL，Oracle等都实现了此规范，然后增加自己的扩展。


* sqlite3: sqlite3 模块提供了SQLite数据库访问的接口。SQLite数据库是以一个文件或内存的形式存在的自包含的关系型数据库。


* DBM-style 数据库模块：python提供了打了的modules来支持UNIX DBM-style数据库文件。dbm模块用来读取标准的UNIX-dbm数据库文件，gdbm用来读取GNU dbm数据库文件，dbhash用来读取Berkeley DB数据库文件。所有的这些模块提供了一个对象实现了基于字符串的持久化的字典，他与字典dict非常相似，但是他的keys和values都必须是字符串。


* shelve：shelve模块使用特殊的“shelf”对象来支持持久化对象。这个对象的行为与dict相似，但是所有的他存储的对象都使用基于hashtable的数据库（dbhash，dbm，gdbm）存储在硬盘。与dbm模块的区别是所存储的对象不仅是字符串，而且可以是任意的与pickle兼容的对象。


 


##　6）文件和目录处理


* bz2：bz2模块用来处理以bzip2压缩算法压缩的文件。


* filecmp：filecmp模块提供了函数来比较文件和目录。


* fnmatch：fnmatch模块提供了使用UNIX shell-style的通配符来匹配文件名。这个模块只是用来匹配，使用glob可以获得匹配的文件列表。


* glob：glob模块返回了某个目录下与指定的UNIX shell通配符匹配的所有文件。


* gzip：gzip模块提供了类GzipFile，用来执行与GNUgzip程序兼容的文件的读写。


* shutil： shutil模块用来执行更高级别的文件操作，例如拷贝，删除，改名。shutil操作之针对一般的文件，不支持pipes，block devices等文件类型。


* tarfile： tarfile模块用来维护tar存档文件。tar没有压缩的功能。


* tempfile：tempfile模块用来产生临时文件和文件名。


* zipfile： zipfile模块用来处理zip格式的文件。


* zlib，zlib模块提供了对zlib库的压缩功能的访问。


 


##　7）操作系统的服务


* cmmands： commands模块被用来执行简单的系统命令，命令以字符串的形式传入，且同时以字符串的形式返回命令的输出。但是此模块只在UNIX系统上可用。


* configParser，configParser模块用来读写windows的ini格式的配置文件。


* datetime，datetime模块提供了各种类型来表示和处理日期和时间。


* errno， 定义了所有的errorcode对应的符号名字。


* io，io模块实现了各种IO形式和内置的open()函数。


* logging， logging模块灵活方便地对应用程序记录events，errors，warnings，和debuging 信息。这些log信息可以被收集，过滤，写到文件或系统log，甚至通过网络发送到远程的机器上。


*mmap，mmap模块提供了内存映射文件对象的支持，使用内存映射文件与使用一般的文件或byte字符串相似。


*msvcrt，mscrt只可以在windows系统使用，用来访问Visual C运行时库的很多有用的功能。


*optparse，optparse模块更高级别来处理UNIX style的命令行选项sys.argv。


* os，os模块对通用的操作系统服务提供了可移植的（portable）的接口。os可以认为是nt和posix的抽象。nt提供windows的服务接口，posix提供UNIX（linux，mac）的服务接口。


* os.path，os.path模块以可移植的方式来处理路径相关的操作。


* signal，signal模块用来实现信号（signal）处理，往往跟同步有关。


* subprocess，subprocess模块包含了函数和对象来统一创建新进程，控制新进程的输入输出流，处理进程的返回。


* time，time模块提供了各种时间相关的函数。常用的time.sleep().


* winreg, winreg模块用来操作windows注册表。


* 其他：fcntl。


 


##　8）线程和并行


* multiprocessing，multiprocessing模块提供通过subprocess来加载多个任务，通信，共享数据，执行各种同步操作。


* threading，threading模块提供了thread类很很多的同步方法来实现多线程编程。


* queue，queue模块实现了各种多生产者，多消费者队列，被用来实现多线程程序的信息安全交换。


* 其他：Coroutines and Microthreading。


 


##　9）网络编程和套接字（sockets）


* asynchat，asynchat模块通过封装asyncore来简化了应用程序的网络异步处理。


* ssl，ssl模块被用来使用secure sockets layer（SSL）包装socket对象，从而使得实现数据加密和终端认证。python使用openssl来实现此模块。


* socketserver，socketserver模块提供了类型简化了TCP，UDP和UNIX领域的socket server的实现。


* 其他：asyncore，select。


 


##　10）internet应用程序编程


* ftplib，ftplib模块实现了ftp的client端协议。此模块很少使用，因为urllib提供了更高级的接口。


* http包，包含了http client和server的实现和cookies管理的模块。


* smtplib，smtplib包含了smtp client的底层接口，用来使用smtp协议发送邮件。


* urllib，urllib包提供了高级的接口来实现与http server，ftp server和本地文件交互的client。


* xmlrpc，xmlrpc模块被用类实现XML-RPC client。


 


##　11）web 编程


* cgi，cgi模块用来实现cgi脚本，cgi程序一般地被webserver执行，用来处理用户在form中的输入，或生成一些动态的内容。当与cgi脚本有管的request被提交，webserver将cgi作为子进程执行，cgi程序通过sys.stdin或环境变量来获得输入，通过sys.stdout来输出。


* webbrowser，webbrowser模块提供了平台独立的工具函数来使用web browser打开文档。


* 其他：wsgiref/WSGI (Python Web Server Gateway Interface).


 


##　12) internet 数据处理和编码


* base64，base64模块提供了base64，base32，base16编码方式，用来实现二进制与文本间的编码和解码。base64通常用来对编码二进制数据，从而嵌入到邮件或http协议中。


* binascii，binascii模块提供了低级的接口来实现二进制和各种ASCII编码的转化。


* csv，csv模块用来读写comma-separated values（CSV）文件。


* email，email包提供了大量的函数和对象来使用MIME标准来表示，解析和维护email消息。


* hashlib，hashlib模块实现了各种secure hash和message digest algorithms，例如MD5和SHA1。


* htmlparser（html.parser），此模块定义了HTMLParser来解析HTML和XHTML文档。使用此类，需要定义自己的类且继承于HTMLParser。


* json，json模块被用类序列化或饭序列化Javascript object notation（JSON）对象。


* xml,xml包提供了各种处理xml的方法。






完！

































	



	

