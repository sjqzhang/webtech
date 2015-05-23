 
#### PHP JSON

 本章节我们将为大家介绍如何使用 PHP 语言来编码和解码 JSON 对象。

 

#### 环境配置

 在 php5.2.0 及以上版本已经内置 JSON 扩展。

 

#### JSON 函数

 

|函数|描述|
|:--|:--|
|json_encode |对变量进行 JSON 编码|
|json_decode|对 JSON 格式的字符串进行解码，转换为 PHP 变量 |
|json_last_error| 返回最后发生的错误|



#### json_encode

 PHP json_encode() 用于对变量进行 JSON 编码，该函数如果执行成功返回 JSON 数据，否则返回 FALSE 。

 
#### 语法

 
```
string json_encode ( $value [, $options = 0 ] )
```
 
#### 参数

 

value: 要编码的值。该函数只对 UTF-8 编码的数据有效。
 
options:由以下常量组成的二进制掩码：JSON_HEX_QUOT, JSON_HEX_TAG, JSON_HEX_AMP, JSON_HEX_APOS, JSON_NUMERIC_CHECK,JSON_PRETTY_PRINT, JSON_UNESCAPED_SLASHES, JSON_FORCE_OBJECT
 

#### 实例

 以下实例演示了如何将 PHP 数组转换为 JSON 格式数据：

 
```

<?php
   $arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
   echo json_encode($arr);
?>

```
 以上代码执行结果为：

 
```

{"a":1,"b":2,"c":3,"d":4,"e":5}

```
 以下实例演示了如何将 PHP 对象转换为 JSON 格式数据：

 
```

?php
   class Emp {
       public $name = "";
       public $hobbies  = "";
       public $birthdate = "";
   }
   $e = new Emp();
   $e->name = "sachin";
   $e->hobbies  = "sports";
   $e->birthdate = date('m/d/Y h:i:s a', "8/5/1974 12:20:03 p");
   $e->birthdate = date('m/d/Y h:i:s a', strtotime("8/5/1974 12:20:03"));

   echo json_encode($e);
?>

```
 以上代码执行结果为：

 
```

{"name":"sachin","hobbies":"sports","birthdate":"08\/05\/1974 12:20:03 pm"}

```
 

#### json_decode

 PHP json_decode() 函数用于对 JSON 格式的字符串进行解码，并转换为 PHP 变量。

 
#### 语法

 
```

mixed json_decode ($json [,$assoc = false [, $depth = 512 [, $options = 0 ]]])

```
 
#### 参数

 
json_string: 待解码的 JSON 字符串，必须是 UTF-8 编码数据


 assoc: 当该参数为 TRUE 时，将返回数组，FALSE 时返回对象。


 depth: 整数类型的参数，它指定递归深度


 options: 二进制掩码，目前只支持 JSON_BIGINT_AS_STRING 。


 

#### 实例

 以下实例演示了如何解码 JSON 数据：

 
```

<?php
   $json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';

   var_dump(json_decode($json));
   var_dump(json_decode($json, true));
?>

```
 以上代码执行结果为：

 
```

object(stdClass)#1 (5) {
    ["a"] => int(1)
    ["b"] => int(2)
    ["c"] => int(3)
    ["d"] => int(4)
    ["e"] => int(5)
}

array(5) {
    ["a"] => int(1)
    ["b"] => int(2)
    ["c"] => int(3)
    ["d"] => int(4)
    ["e"] => int(5)
}

```
 

