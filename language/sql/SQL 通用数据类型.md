 SQL 通用数据类型  
数据类型定义列中存放的值的种类。

 

#### SQL 通用数据类型

 数据库表中的每个列都要求有名称和数据类型。Each column in a database table is required to have a name and a data type.

 SQL 开发人员必须在创建 SQL 表时决定表中的每个列将要存储的数据的类型。数据类型是一个标签，是便于 SQL 了解每个列期望存储什么类型的数据的指南，它也标识了 SQL 如何与存储的数据进行交互。

 下面的表格列出了 SQL 中通用的数据类型：

 

|数据类型|描述|
|:--|:--|
|CHARACTER(n)|字符/字符串。固定长度 n。|
|VARCHAR(n) 或CHARACTER VARYING(n)|字符/字符串。可变长度。最大长度 n。|
|BINARY(n)|二进制串。固定长度 n。|
|BOOLEAN|存储 TRUE 或 FALSE 值|
|VARBINARY(n) 或BINARY VARYING(n)|二进制串。可变长度。最大长度 n。|
|INTEGER(p)|整数值（没有小数点）。精度 p。|
|SMALLINT|整数值（没有小数点）。精度 5。|
|INTEGER|整数值（没有小数点）。精度 10。|
|BIGINT|整数值（没有小数点）。精度 19。|
|DECIMAL(p,s)|精确数值，精度 p，小数点后位数 s。例如：decimal(5,2) 是一个小数点前有 3 位数小数点后有 2 位数的数字。|
|NUMERIC(p,s)|精确数值，精度 p，小数点后位数 s。（与 DECIMAL 相同）|
|FLOAT(p)|近似数值，尾数精度 p。一个采用以 10 为基数的指数计数法的浮点数。该类型的 size 参数由一个指定最小精度的单一数字组成。|
|REAL|近似数值，尾数精度 7。|
|FLOAT|近似数值，尾数精度 16。|
|DOUBLE PRECISION|近似数值，尾数精度 16。|
|DATE|存储年、月、日的值。|
|TIME|存储小时、分、秒的值。|
|TIMESTAMP|存储年、月、日、小时、分、秒的值。|
|INTERVAL|由一些整数字段组成，代表一段时间，取决于区间的类型。|
|ARRAY|元素的固定长度的有序集合|
|MULTISET|元素的可变长度的无序集合|
|XML|存储 XML 数据|





#### SQL 数据类型快速参考手册

 然而，不同的数据库对数据类型定义提供不同的选择。

 下面的表格显示了各种不同的数据库平台上一些数据类型的通用名称：

 

|数据类型|Access|SQLServer|Oracle|MySQL|PostgreSQL|
|:--|:--|:--|:--|:--|:--|
|boolean|Yes/No|Bit|Byte|N/A|Boolean|
|integer|Number (integer)|Int|Number|IntInteger|IntInteger|
|float|Number (single)|FloatReal|Number|Float|Numeric|
|currency|Currency|Money|N/A|N/A|Money|
|string (fixed)|N/A|Char|Char|Char|Char|
|string (variable)|Text (<256)Memo (65k+)|Varchar|VarcharVarchar2|Varchar|Varchar|
|binary object|OLE Object Memo|Binary (fixed up to 8K)Varbinary (<8K)Image (<2GB)|LongRaw|BlobText|BinaryVarbinary|





|  注释：在不同的数据库中，同一种数据类型可能有不同的名称。即使名称相同，尺寸和其他细节也可能不同！ 请总是检查文档！ |








