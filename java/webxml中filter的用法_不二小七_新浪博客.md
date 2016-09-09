
		 
			
								
#### web.xml中filter的用法



				



						
		
		从J2EE1.3开始，Servlet2.3规范中加入了对过滤器的支持。过滤器能够对目标资源的请求和响应进行截取。过滤器的工作方式分为四种，下面让我们分别来看看这四种过滤器的工作方式：

##1、request过滤器

   
这种过滤器的工作方式比较简单，大家也经常遇到，如下图所示：




![http://simg.sinajs.cn/blog7style/images/common/sg_trans.gif](http://simg.sinajs.cn/blog7style/images/common/sg_trans.gif)


以下是web.xml文件配置方式：

```
<filter>
   
<filter-name>myFilter</filter-name>

   
<filter-class>xx.MyFilter</filter-class>

</filter>


<filter-mapping>

<filter-name>myFilter</filter-name>

<servlet-name>目标资源一</servlet-name>



</filter-mapping>
```

下面我们更改一下web.xml文件的配置，如下方式：

```

<filter>


   
<filter-name>myFilter</filter-name>

   
<filter-class>xx.MyFilter</filter-class>

</filter>


<filter-mapping>


<filter-name>myFilter</filter-name>



<servlet-name>目标资源一</servlet-name>



</filter-mapping>

<filter-mapping>



<filter-name>myFilter</filter-name>



<servlet-name>目标资源二</servlet-name>



</filter-mapping>
```

也就是说此过滤器对目标资源一和目标资源二都进行过滤，然后当目标资源一被访问的时候我们将请求转发给目标资源二，那么这个时候过滤器是怎么工作的呢？如下图所示：

   
我们可以看到，当我们访问目标资源一时过滤器截取了请求，然后再转发给目标资源一，然后再转发给目标资源二，从图中我们可以看到过滤器没有截取转发到目标资源二的请求，但是我们已经在web.xml文件中配置了该过滤器对目标资源二的过滤，为什么又没有起到过滤作用呢？



   
答案就在于，目标资源一是客户端直接访问，而目标资源二是被转发过来的，这时过滤器就不能过滤目标资源二。如果你直接访问目标资源二，你会发现该过滤器起到了作用？


   
我们上面的web.xml文件配置与以下方式等价：
```

<filter>myFilter</filter>



   
<filter-name>myFilter</filter-name>

   
<filter-class>xx.MyFilter</filte-class>

</filter>


<filter-mapping>


<filter-name>myFilter</filter-name>

<servlet-name>目标资源一</servlet-name>

<dispatcher>REQUEST</dispatcher>

</filter-mapping>

<filter-mapping>



<filter-name>myFilter</filter-name>



<servlet-name>目标资源二</servlet-name>

<dispatcher>REQUEST</dispatcher>


</filter-mapping>


```


这种方式的配置，说明只有直接访问该目标资源时该过滤器才会起作用，对转发到该目标资源的请求将忽略不处理。


   
那如果我想对转发到目标资源二的请求进行过滤，那怎么办呢？答案见，下一种过滤器，forward过滤器。



##2、forward过滤器


   
我们将web.xml文件的配置修改如下：

```

<filter>myFilter</filter>



   
<filter-name>myFilter</filter-name>

   
<filter-class>xx.MyFilter</filter-class>

</filter>


<filter-mapping>


<filter-name>myFilter</filter-name>

<servlet-name>目标资源一</servlet-name>

<dispatcher>REQUEST</dispatcher>

</filter-mapping>

<filter-mapping>



<filter-name>myFilter</filter-name>



<servlet-name>目标资源二</servlet-name>

<dispatcher>FORWARD</dispatcher>

</filter-mapping>

```

工作方式如下图所示：

   我们看对目标资源二过滤的配置方式，这时过滤方式为forward，也就是说对转发到目标资源二的请求过滤，如果直接访问目标资源二，过滤器将不起作用。



##3、include过滤器

   
理解了forward过滤器之后，include过滤器就不难理解了。以下方式：

<filter-mapping>



<filter-name>myFilter</filter-name>



<servlet-name>目标资源二</servlet-name>

<dispatcher>INCLUDE</dispatcher>

</filter-mapping>



   此表示对包含了目标资源二的请求过滤，如果直接访问目标资源二，则此过滤器将不起作用。

   
include包含以下语句：

   
在JSP页面中的动作：<jsp:include page=.......

   
在Java代码中的request.getRequestDispatcher("....").include


   
注意：如果目标资源一通过<%@ include
file="目标资源二"%>指令包含，这时此过滤器不工作。后面给大家介绍指令包含和动作包含的区别。



##4、error过滤器


   
当我们访问一个web目标资源时，如果服务器没有找到该目标资源，那么服务器就会给出一个404错误代码。如果我们给404错误代码定义一个页面，那么当404错误发生时就会调用该页面，请看以下web.xml文件的配置：


```

<filter-mapping>



<filter-name>myFilter</filter-name>



<url-pattern>/error.jsp</url-pattern>

<dispatcher>ERROR</dispatcher>

</filter-mapping>

<error-page>


   
<error-code>404</error-code>



   
<location>/error.jsp</location>



</error-page>

```

   
当我们访问一个不存在的文件时，就会访问error.jsp，但是配置了过滤器对错误页面进行过滤，所以过滤器先接受到请求，然后再转发给error.jsp。


   
如果我们访问一个已经存在的页面，会不会调用error.jsp呢？如果这个页面中有response.sendError(404,"出错了！");那么该错误页面仍然会被调用，过滤器也会工作。



							
		

		


				
	

