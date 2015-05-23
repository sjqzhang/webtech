

#### 最近在VPS上尝试配置安装一个网站，VPS安装了LNMP（Linux+Nginx+MySQL+php）在配置重定规则的时候经常遇到一些问题，直接用Apache的规则到Nginx下没起作用。原来Apache 重写的规则到nginx上还有一些不太一样的地方。
这里只是简单记录一些学习示例，高手略过，新手可以看一下。




#### Nginx Rewrite规则相关指令

 

Nginx Rewrite规则相关指令有if、rewrite、set、return、break等，其中rewrite是最关键的指令。一个简单的Nginx Rewrite规则语法如下：



rewrite ^/b/(.*)\.html /play.php?video=$1 break;


如果加上if语句，示例如下：


if (!-f $request_filename)


rewrite ^/img/(.*)$ /site/$host/images/$1 last;




#### Nginx与Apache的Rewrite规则实例对比




简单的Nginx和Apache 重写规则区别不大，基本上能够完全兼容。例如：


Apache Rewrite 规则：


RewriteRule ^/(mianshi|xianjing)/$ /zl/index.php?name=$1 [L]


RewriteRule ^/ceshi/$ /zl/ceshi.php [L]


RewriteRule ^/(mianshi)_([a-zA-Z]+)/$ /zl/index.php?name=$1_$2 [L]


RewriteRule ^/pingce([0-9]*)/$ /zl/pingce.php?id=$1 [L]




#### Nginx Rewrite 规则：




rewrite ^/(mianshi|xianjing)/$ /zl/index.php?name=$1 last;


rewrite ^/ceshi/$ /zl/ceshi.php last;


rewrite ^/(mianshi)_([a-zA-Z]+)/$ /zl/index.php?name=$1_$2 last;


rewrite ^/pingce([0-9]*)/$ /zl/pingce.php?id=$1 last;


由以上示例可以看出，Apache的Rewrite规则改为Nginx的Rewrite规则，其实很简单：Apache的RewriteRule指令换成Nginx的rewrite指令，Apache的[L]标记换成Nginx的last标记，中间的内容不变。


如果Apache的Rewrite规则改为Nginx的Rewrite规则后，使用nginx -t命令检查发现nginx.conf配置文件有语法错误，那么可以尝试给条件加上引号。例如一下的Nginx Rewrite规则会报语法错误：


rewrite ^/([0-9]{5}).html$ /x.jsp?id=$1 last;


加上引号就正确了：

rewrite “^/([0-9]{5}).html$” /x.jsp?id=$1 last;


Apache与Nginx的Rewrite规则在URL跳转时有细微的区别：


Apache Rewrite 规则：

RewriteRule ^/html/tagindex/([a-zA-Z]+)/.*$ /$1/ [R=301,L]


Nginx Rewrite 规则：

rewrite ^/html/tagindex/([a-zA-Z]+)/.*$ http://$host/$1/ permanent;


以上示例中，我们注意到，Nginx Rewrite 规则的置换串中增加了“http://$host”，这是在Nginx中要求的。


另外，Apache与Nginx的Rewrite规则在变量名称方面也有区别，例如：


Apache Rewrite 规则：

RewriteRule ^/user/login/$ /user/login.php?login=1&amp;forward=http://%{HTTP_HOST} [L]


Nginx Rewrite 规则：

rewrite ^/user/login/$ /user/login.php?login=1&amp;forward=http://$host   last;


Apache与Nginx Rewrite 规则的一些功能相同或类似的指令、标记对应关系：


Apache的RewriteCond指令对应Nginx的if指令；

Apache的RewriteRule指令对应Nginx的rewrite指令；

Apache的[R]标记对应Nginx的redirect标记；

Apache的[P]标记对应Nginx的last标记；

Apache的[R,L]标记对应Nginx的redirect标记；

Apache的[P,L]标记对应Nginx的last标记；

Apache的[PT,L]标记对应Nginx的last标记；


允许指定的域名访问本站，其他域名一律跳转到http://www.aaa.com


Apache Rewrite 规则：

RewriteCond %{HTTP_HOST}    ^(.*?)\.domain\.com$

RewriteCond %{HTTP_HOST}    !^qita\.domain\.com$

RewriteCond %{DOCUMENT_ROOT}/market/%1/index.htm -f

RewriteRule ^/wu/$ /market/%1/index.htm [L]


Nginx的if指令不支持嵌套，也不支持AND、OR等多条件匹配，相比于Apache的RewriteCond，显得麻烦一些，但是，我们可以通过下一页的Nginx配置写法来实现这个示例：


Nginx Rewrite 规则：

if ($host ~* ^(.*?)\.domain\.com$) set $var_wupin_city $1;

     set $var_wupin ‘1′; 


if ($host ~* ^qita\.domain\.com$) 


    set $var_wupin ‘0′;


 if (!-f $document_root/market/$var_wupin_city/index.htm)


     set $var_wupin ‘0′; 


if ($var_wupin ~ ‘1′)


    rewrite ^/wu/$ /market/$var_wupin_city/index.htm last;

}





 




#### rewrite 的语法




 




#### 语法:

 rewrite regex replacement flag




#### 默认:

 none




#### 作用域:

 server, location, if


This directive changes URI in accordance with the regular expression and the replacement string. Directives are carried out in order of appearance in the configuration file.


这个指令根据表达式来更改URI，或者修改字符串。指令根据配置文件中的顺序来执行。


Be aware that the rewrite regex only matches the relative path instead of the absolute URL. If you want to match the hostname, you should use an if condition, like so:




#### 注意重写表达式只对相对路径有效。如果你想配对主机名，你应该使用if语句。






#### rewrite只是会改写路径部分的东东，不会改动用户的输入参数，因此这里的if规则里面，你无需关心用户在浏览器里输入的参数，rewrite后会自动添加的

，

#### 因此，我们只是加上了一个？号和后面我们想要的一个小小的参数 ***https=1就可以了。




nginx的rewrite规则参考：




~ 为区分大小写匹配

~* 为不区分大小写匹配

!~和!~*分别为区分大小写不匹配及不区分大小写不匹







-f和!-f用来判断是否存在文件

-d和!-d用来判断是否存在目录

-e和!-e用来判断是否存在文件或目录

-x和!-x用来判断文件是否可执行







last 相当于Apache里的[L]标记，表示完成rewrite，呵呵这应该是最常用的

break 终止匹配, 不再匹配后面的规则

redirect 返回302临时重定向 地址栏会显示跳转后的地址

permanent 返回301永久重定向 地址栏会显示跳转后的地址







$args

$content_length

$content_type

$document_root

$document_uri

$host

$http_user_agent

$http_cookie

$limit_rate

$request_body_file

$request_method

$remote_addr

$remote_port

$remote_user

$request_filename

$request_uri

$query_string

$scheme

$server_protocol

$server_addr

$server_name

$server_port

$uri







#### 结合QeePHP的例子






if (!-d $request_filename) {

rewrite ^/([a-z-A-Z]+)/([a-z-A-Z]+)/?(.*)$ /index.php?namespace=user&amp;amp;controller=$1&amp;amp;action=$2&amp;amp;$3 last;

rewrite ^/([a-z-A-Z]+)/?$ /index.php?namespace=user&amp;amp;controller=$1 last;

break;







#### 多目录转成参数



abc.domian.com/sort/2 => abc.domian.com/index.php?act=sort&amp;name=abc&amp;id=2




if ($host ~* (.*)\.domain\.com) {

set $sub_name $1;

rewrite ^/sort\/(\d+)\/?$ /index.php?act=sort&amp;cid=$sub_name&amp;id=$1 last;

}







#### 目录对换



/123456/xxxx -> /xxxx?id=123456



rewrite ^/(\d+)/(.+)/ /$2?id=$1 last;






#### 例如下面设定nginx在用户使用ie的使用重定向到/nginx-ie目录下：






if ($http_user_agent ~ MSIE) {

rewrite ^(.*)$ /nginx-ie/$1 break;

}







#### 目录自动加“/”






if (-d $request_filename){

rewrite ^/(.*)([^/])$ http://$host/$1$2/ permanent;

}







#### 禁止htaccess






location ~/\.ht {

deny all;

}







#### 禁止多个目录






location ~ ^/(cron|templates)/ {

deny all;

break;

}







#### 禁止以/data开头的文件



可以禁止/data/下多级目录下.log.txt等请求;




location ~ ^/data {

deny all;

}







#### 禁止单个目录



不能禁止.log.txt能请求




location /searchword/cron/ {

deny all;

}







#### 禁止单个文件






location ~ /data/sql/data.sql {

deny all;

}







#### 给favicon.ico和robots.txt设置过期时间;



这里为favicon.ico为99天,robots.txt为7天并不记录404错误日志




location ~(favicon.ico) {

log_not_found off;

expires 99d;

break;

}





location ~(robots.txt) {

log_not_found off;

expires 7d;

break;

}







#### 设定某个文件的过期时间;这里为600秒，并不记录访问日志






location ^~ /html/scripts/loadhead_1.js {

access_log   off;

root /opt/lampp/htdocs/web;

expires 600;

break;

}







#### 文件反盗链并设置过期时间



这里的return 412 为自定义的http状态码，默认为403，方便找出正确的盗链的请求

“rewrite ^/ http://leech.divmy.com/leech.gif;”显示一张防盗链图片

“access_log off;”不记录访问日志，减轻压力

“expires 3d”所有文件3天的浏览器缓存




location ~* ^.+\.(jpg|jpeg|gif|png|swf|rar|zip|css|js)$ {

valid_referers none blocked *.c1gstudio.com *.c1gstudio.net localhost 208.97.167.194;

if ($invalid_referer) {

rewrite ^/ http://leech.divmy.com/leech.gif;

return 412;

break;

}

access_log   off;

root /opt/lampp/htdocs/web;

expires 3d;

break;

}







#### 只充许固定ip访问网站，并加上密码






root  /opt/htdocs/www;

allow   208.97.167.194;

allow   222.33.1.2;

allow   231.152.49.4;

deny    all;

auth_basic “C1G_ADMIN”;

auth_basic_user_file htpasswd;







#### 将多级目录下的文件转成一个文件，增强seo效果



/job-123-456-789.html 指向/job/123/456/789.html



rewrite ^/job-([0-9]+)-([0-9]+)-([0-9]+)\.html$ /job/$1/$2/jobshow_$3.html last;






#### 将根目录下某个文件夹指向2级目录



如/

#### shanghai

job/ 指向 /area/

#### shanghai

/

如果你将last改成permanent，那么浏览器地址栏显是/location/shanghai/



rewrite ^/([0-9a-z]+)job/(.*)$ /area/$1/$2 last;




上面例子有个问题是访问/shanghai 时将不会匹配




rewrite ^/([0-9a-z]+)job$ /area/$1/ last;

rewrite ^/([0-9a-z]+)job/(.*)$ /area/$1/$2 last;





这样/shanghai 也可以访问了，但页面中的相对链接无法使用，

如./list_1.html真实地址是/area/shanghia/list_1.html会变成/list_1.html,导至无法访问。


那我加上自动跳转也是不行咯

(-d $request_filename)它有个条件是必需为真实目录，而我的rewrite不是的，所以没有效果




if (-d $request_filename){

rewrite ^/(.*)([^/])$ http://$host/$1$2/ permanent;

}





知道原因后就好办了，让我手动跳转吧




rewrite ^/([0-9a-z]+)job$ /$1job/ permanent;

rewrite ^/([0-9a-z]+)job/(.*)$ /area/$1/$2 last;







#### 文件和目录不存在的时候重定向：






if (!-e $request_filename) {

proxy_pass http://127.0.0.1;

}







#### 域名跳转






server

{

listen       80;

server_name  jump.88dgw.com;

index index.html index.htm index.php;

root  /opt/lampp/htdocs/www;

rewrite ^/ ;

access_log  off;

}







#### 多域名转向






server_name    ;

index index.html index.htm index.php;

root  /opt/lampp/htdocs;

if ($host ~ “c1gstudio\.net”) {

rewrite ^(.*)  permanent;

}







#### 三级域名跳转






if ($http_host ~* “^(.*)\.i\.c1gstudio\.com$”) {

rewrite ^(.*) ;

break;

}







#### 域名镜向






server

{

listen       80;

server_name  mirror.c1gstudio.com;

index index.html index.htm index.php;

root  /opt/lampp/htdocs/www;

rewrite ^/(.*)  last;

access_log  off;

}







#### 某个子目录作镜向






location ^~ /zhaopinhui {

rewrite ^.+  last;

break;

}







#### discuz ucenter home (uchome) rewrite






rewrite ^/(space|network)-(.+)\.html$ /$1.php?rewrite=$2 last;

rewrite ^/(space|network)\.html$ /$1.php last;

rewrite ^/([0-9]+)$ /space.php?uid=$1 last;







#### discuz 7 rewrite






rewrite ^(.*)/archiver/((fid|tid)-[\w\-]+\.html)$ $1/archiver/index.php?$2 last;

rewrite ^(.*)/forum-([0-9]+)-([0-9]+)\.html$ $1/forumdisplay.php?fid=$2&amp;page=$3 last;

rewrite ^(.*)/thread-([0-9]+)-([0-9]+)-([0-9]+)\.html$ $1/viewthread.php?tid=$2&amp;extra=page\%3D$4&amp;page=$3 last;

rewrite ^(.*)/profile-(username|uid)-(.+)\.html$ $1/viewpro.php?$2=$3 last;

rewrite ^(.*)/space-(username|uid)-(.+)\.html$ $1/space.php?$2=$3 last;

rewrite ^(.*)/tag-(.+)\.html$ $1/tag.php?name=$2 last;







#### 给discuz某版块单独配置域名






server_name  bbs.c1gstudio.com news.c1gstudio.com;





location = / {

if ($http_host ~ news\.divmy.com$) {

rewrite ^.+  last;

break;

}

}







#### discuz ucenter 头像 rewrite 优化






location ^~ /ucenter {

location ~ .*\.php?$

{

#fastcgi_pass  unix:/tmp/php-cgi.sock;

fastcgi_pass  127.0.0.1:9000;

fastcgi_index index.php;

include fcgi.conf;

}





location /ucenter/data/avatar {

log_not_found off;

access_log   off;

location ~ /(.*)_big\.jpg$ {

error_page 404 /ucenter/images/noavatar_big.gif;

}

location ~ /(.*)_middle\.jpg$ {

error_page 404 /ucenter/images/noavatar_middle.gif;

}

location ~ /(.*)_small\.jpg$ {

error_page 404 /ucenter/images/noavatar_small.gif;

}

expires 300;

break;

}

}







#### jspace rewrite






location ~ .*\.php?$

{

#fastcgi_pass  unix:/tmp/php-cgi.sock;

fastcgi_pass  127.0.0.1:9000;

fastcgi_index index.php;

include fcgi.conf;

}





location ~* ^/index.php/

{

rewrite ^/index.php/(.*) /index.php?$1 break;

fastcgi_pass  127.0.0.1:9000;

fastcgi_index index.php;

include fcgi.conf;

}





另外这里还有一个工具可以直接把apache规则转化为nginx规则





参考：


http://wiki.nginx.org/NginxChsHttpRewriteModule







