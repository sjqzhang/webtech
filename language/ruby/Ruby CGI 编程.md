 
#### Ruby CGI 编程

 Ruby 是一门通用的语言，不仅仅是一门应用于WEB开发的语言，但 Ruby 在WEB应用及WEB工具中的开发是最常见的。 


 使用Ruby您不仅可以编写自己的SMTP服务器，FTP程序，或Ruby Web服务器，而且还可以使用Ruby进行CGI编程。


 接下来，让我们花点时间来学校Ruby的CGI编辑。

 

#### 编写 CGI 脚本

 最脚本的 Ruby CGI 代码如下所示：

  #!/usr/bin/ruby puts "HTTP/1.0 200 OK" puts "Content-type: text/html\n\n" puts "

This is a test"  你可以将该代码保持到 test.cgi 文件中，上次到服务器并赋予足够权限，即可作为 CGI 脚本执行。

 如果你站的的地址为http://www.example.com/ ，即可用过http://www.example.com/test.cgi 访问该程序，输出结果为： "This is a test."。

 浏览器访问该网址后，Web 服务器会在站点目录下找到 test.cgi文件，然后通过Ruby解析器来解析脚本代码并访问HTML文档。

 

#### 使用 cgi.rb

 Ruby 可以调用 CGI 库来编写更复杂的CGI脚本。

 以下代码调用了 CGI 库来创建一个脚本的CGI脚本。

 
```

#!/usr/bin/ruby

require 'cgi'

cgi = CGI.new
puts cgi.header
puts "<html><body>This is a test</body></html>"

```
 以下代码中，创建了CGI 对象并打印头部信息。

 

#### 表单处理

 使用CGI库可以通过两种方式获取表单提交（或URL中的参数）的数据， 例如URL：/cgi-bin/test.cgi?FirstName=Zara&amp;LastName=Ali。 

 你可以使用 CGI#[] 来直接获取参数FirstName和LastName：

 
```

#!/usr/bin/ruby

require 'cgi'
cgi = CGI.new
cgi['FirstName'] # =>  ["Zara"]
cgi['LastName']  # =>  ["Ali"]

```
 另外一种获取表单数据的方法：

 
```

#!/usr/bin/ruby

require 'cgi'
cgi = CGI.new
h = cgi.params  # =>  {"FirstName"=>["Zara"],"LastName"=>["Ali"]}
h['FirstName']  # =>  ["Zara"]
h['LastName']   # =>  ["Ali"]

```
 以下代码用于检索所有的键值：

 
```

#!/usr/bin/ruby

require 'cgi'
cgi = CGI.new
cgi.keys         # =>  ["FirstName", "LastName"]

```
 如果表单包含了多个相同名称的字段，则该相同字段的值将保存在数组中。

 以下实例中，指定表单中三个相同的字段"name"，值分别为 "Zara", "Huma" 和 "Nuha":

 
```

#!/usr/bin/ruby

require 'cgi'
cgi = CGI.new
cgi['name']        # => "Zara"
cgi.params['name'] # => ["Zara", "Huma", "Nuha"]
cgi.keys           # => ["name"]
cgi.params         # => {"name"=>["Zara", "Huma", "Nuha"]}

```
 

#### 注意：

Ruby 会自动判断 GET 和 POST 方法，所以无需对两种方法区别对待。

 以下是相关的HML代码：

 
```

<html>
<body>
<form method="POST" action="http://www.example.com/test.cgi">
First Name :<input type="text" name="FirstName" value="" />
<br />
Last Name :<input type="text" name="LastName" value="" /> 

<input type="submit" value="Submit Data" />
</form>
</body>
</html>

```
 

#### 创建 Form 表单和 HTML

 CGI 包含了大量的方法来创建 HTML，每个HTML标签都有相对应的方法。 在使用这些方法前，比必须通过 CGI.new 来创建 CGI 对象。

 为了使标签的嵌套更加的简单，这些方法将内容作为了代码块，代码块将返回字符串作为标签的内容。如下所示：

 
```

#!/usr/bin/ruby

require "cgi"
cgi = CGI.new("html4")
cgi.out{
   cgi.html{
      cgi.head{ "\n"+cgi.title{"This Is a Test"} } +
      cgi.body{ "\n"+
         cgi.form{"\n"+
            cgi.hr +
            cgi.h1 { "A Form: " } + "\n"+
            cgi.textarea("get_text") +"\n"+
            cgi.br +
            cgi.submit
         }
      }
   }
}

```
 

#### 字符串转义

 当你在处理 URL 中的参数或者 HTML 表单数据时，需要对指定的特殊字符进行转义，如：引号（"）,反斜杠(/)。

 Ruby CGI 对象提供了CGI.escape 和 CGI.unescape 方法来处理这些特殊字符的转义：

 
```

#!/usr/bin/ruby

require 'cgi'
puts CGI.escape(Zara Ali/A Sweet &amp; Sour Girl")

```
 以上代码执行结果如下：

 
```

#!/usr/bin/ruby

require 'cgi'
puts CGI.escape(Zara Ali/A Sweet &amp; Sour Girl")

```
 另一组实例：

 
```

#!/usr/bin/ruby

require 'cgi'
puts CGI.escapeHTML('<h1>Zara Ali/A Sweet &amp; Sour Girl</h1>')

```
 以上代码执行结果如下：

 
```

&amp;lt;h1&amp;gt;Zara Ali/A Sweet &amp; Sour Girl&amp;lt;/h1&amp;gt;'

```
 

#### CGI 类中常用的方法

 以下是Ruby中完整的CGI类的相关方法

 
 [Ruby CGI](http://www.w3cschool.cc/ruby/ruby-cgi-methods.html) - 标准 CGI 库相关方法 
 


#### Cookies 和 Sessions

 
 [Ruby CGI Cookies](http://www.w3cschool.cc/ruby/ruby-cgi-cookies.html) - 如何处理 CGI Cookies. 

 [Ruby CGI Sessions](http://www.w3cschool.cc/ruby/ruby-cgi-sessions.html) - 如何处理 CGI sessions. 
 


