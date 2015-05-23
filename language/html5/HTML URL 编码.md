 HTML URL 编码 参考手册 
URL 编码会将字符转换为可通过因特网传输的格式。

 

#### URL - 统一资源定位器

 Web 浏览器通过 URL 从 web 服务器请求页面。

 URL 是网页的地址，比如： http://www.w3cschool.cc。

 

#### URL 编码

 URL 只能使用 [ASCII 字符集](http://www.w3cschool.cc/tags/ref-ascii.html)来通过因特网进行发送。

 由于 URL 常常会包含 ASCII 集合之外的字符，URL 必须转换为有效的 ASCII 格式。

 URL 编码使用 "%" 其后跟随两位的十六进制数来替换非 ASCII 字符。



 URL 不能包含空格。URL 编码通常使用 + 来替换空格。

 

#### 尝试一下

  如果您点击下面的"提交"按钮，浏览器会在发送输入之前对其进行 URL 编码。服务器上的页面会显示出接收到的输入。

  
  试着输入一些其他字符，然后再次点击提交按钮。

 

#### URL 编码函数

 JavaScript、PHP、ASP 都提供了对字符串进行URL编码的函数。

 JavaScript 中使用 encodeURI() 函数，PHP 中使用 rawurlencode() 函数，ASP 中使用 Server.URLEncode() 函数。

 点击"URL 编码"按钮，看看 JavaScript 函数是怎么对文本进行编码的。

  
  注释：JavaScript 函数将空格编码成 %20 。

 

#### URL 编码参考手册

 

|ASCII 字符|URL-编码|
|:--|:--|
|space|%20|
|!|%21|
|"|%22|
|#|%23|
|$|%24|
|%|%25|
|&amp;|%26|
|'|%27|
|(|%28|
|)|%29|
|*|%2A|
|+|%2B|
|,|%2C|
|-|%2D|
|.|%2E|
|/|%2F|
|0|%30|
|1|%31|
|2|%32|
|3|%33|
|4|%34|
|5|%35|
|6|%36|
|7|%37|
|8|%38|
|9|%39|
|:|%3A|
|;|%3B|
|<|%3C|
|=|%3D|
|>|%3E|
|?|%3F|
|@|%40|
|A|%41|
|B|%42|
|C|%43|
|D|%44|
|E|%45|
|F|%46|
|G|%47|
|H|%48|
|I|%49|
|J|%4A|
|K|%4B|
|L|%4C|
|M|%4D|
|N|%4E|
|O|%4F|
|P|%50|
|Q|%51|
|R|%52|
|S|%53|
|T|%54|
|U|%55|
|V|%56|
|W|%57|
|X|%58|
|Y|%59|
|Z|%5A|
|[|%5B|
|\|%5C|
|]|%5D|
|^|%5E|
|_|%5F|
|`|%60|
|a|%61|
|b|%62|
|c|%63|
|d|%64|
|e|%65|
|f|%66|
|g|%67|
|h|%68|
|i|%69|
|j|%6A|
|k|%6B|
|l|%6C|
|m|%6D|
|n|%6E|
|o|%6F|
|p|%70|
|q|%71|
|r|%72|
|s|%73|
|t|%74|
|u|%75|
|v|%76|
|w|%77|
|x|%78|
|y|%79|
|z|%7A|
|{|%7B|
|||%7C|
|}|%7D|
|~|%7E|
| |%7F|
|`|%80|
||%81|
|‚|%82|
|ƒ|%83|
|„|%84|
|…|%85|
|†|%86|
|‡|%87|
|ˆ|%88|
|‰|%89|
|Š|%8A|
|‹|%8B|
|Œ|%8C|
||%8D|
|Ž|%8E|
||%8F|
||%90|
|'|%91|
|'|%92|
|"|%93|
|"|%94|
|•|%95|
|–|%96|
|—|%97|
|˜|%98|
|™|%99|
|š|%9A|
|›|%9B|
|œ|%9C|
||%9D|
|ž|%9E|
|Ÿ|%9F|
| |%A0|
|¡|%A1|
|¢|%A2|
|£|%A3|
|¤|%A4|
|¥|%A5|
|¦|%A6|
|§|%A7|
|¨|%A8|
|©|%A9|
|ª|%AA|
|«|%AB|
|¬|%AC|
|­|%AD|
|®|%AE|
|¯|%AF|
|°|%B0|
|±|%B1|
|²|%B2|
|³|%B3|
|´|%B4|
|µ|%B5|
|¶|%B6|
|·|%B7|
|¸|%B8|
|¹|%B9|
|º|%BA|
|»|%BB|
|¼|%BC|
|½|%BD|
|¾|%BE|
|¿|%BF|
|À|%C0|
|Á|%C1|
|Â|%C2|
|Ã|%C3|
|Ä|%C4|
|Å|%C5|
|Æ|%C6|
|Ç|%C7|
|È|%C8|
|É|%C9|
|Ê|%CA|
|Ë|%CB|
|Ì|%CC|
|Í|%CD|
|Î|%CE|
|Ï|%CF|
|Ð|%D0|
|Ñ|%D1|
|Ò|%D2|
|Ó|%D3|
|Ô|%D4|
|Õ|%D5|
|Ö|%D6|
|×|%D7|
|Ø|%D8|
|Ù|%D9|
|Ú|%DA|
|Û|%DB|
|Ü|%DC|
|Ý|%DD|
|Þ|%DE|
|ß|%DF|
|à|%E0|
|á|%E1|
|â|%E2|
|ã|%E3|
|ä|%E4|
|å|%E5|
|æ|%E6|
|ç|%E7|
|è|%E8|
|é|%E9|
|ê|%EA|
|ë|%EB|
|ì|%EC|
|í|%ED|
|î|%EE|
|ï|%EF|
|ð|%F0|
|ñ|%F1|
|ò|%F2|
|ó|%F3|
|ô|%F4|
|õ|%F5|
|ö|%F6|
|÷|%F7|
|ø|%F8|
|ù|%F9|
|ú|%FA|
|û|%FB|
|ü|%FC|
|ý|%FD|
|þ|%FE|
|ÿ|%FF|





#### URL 编码参考手册

 ASCII 设备控制字符最初被设计为用来控制诸如打印机和磁带驱动器之类的硬件设备。在URL中这些字符不会起任何作用。

 

|ASCII 字符|描述|URL-编码|
|:--|:--|:--|
|NUL|null character|%00|
|SOH|start of header|%01|
|STX|start of text|%02|
|ETX|end of text|%03|
|EOT|end of transmission|%04|
|ENQ|enquiry|%05|
|ACK|acknowledge|%06|
|BEL|bell (ring)|%07|
|BS|backspace|%08|
|HT|horizontal tab|%09|
|LF|line feed|%0A|
|VT|vertical tab|%0B|
|FF|form feed|%0C|
|CR|carriage return|%0D|
|SO|shift out|%0E|
|SI|shift in|%0F|
|DLE|data link escape|%10|
|DC1|device control 1|%11|
|DC2|device control 2|%12|
|DC3|device control 3|%13|
|DC4|device control 4|%14|
|NAK|negative acknowledge|%15|
|SYN|synchronize|%16|
|ETB|end transmission block|%17|
|CAN|cancel|%18|
|EM|end of medium|%19|
|SUB|substitute|%1A|
|ESC|escape|%1B|
|FS|file separator|%1C|
|GS|group separator|%1D|
|RS|record separator|%1E|
|US|unit separator|%1F|



