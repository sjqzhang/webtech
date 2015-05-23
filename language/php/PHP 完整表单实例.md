 PHP 完整表单实例
 
本章节将介绍如何让用户在点击"提交（submit）"按钮提交数据前保证所有字段正确输入。

 

#### PHP - 在表单中确保输入值

 在用户点击提交按钮后，为确保字段值是否输入正确，我们在HTML的input元素中插添加PHP脚本， 各字段名为: name, email, 和 website。 在评论的 textarea 字段中，我们将脚本放于 <textarea> 和 </textarea> 标签之间。 PHP脚本输出值为： $name, $email, $website, 和 $comment 变量。 

 然后，我们同样需要检查被选中的单选按钮， 对于这一点，我们 必须设置好checked属性(不是radio按钮的 value 属性) :

 
```

 Name: <input type="text" name="name" value="<?php echo $name;?>">



E-mail: <input type="text" name="email" value="<?php echo $email;?>">



Website: <input type="text" name="website" value="<?php echo $website;?>">



Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>



Gender:

<input type="radio" name="gender"

<?php if (isset($gender) &amp;&amp; $gender=="female") echo "checked";?>

value="female">Female

<input type="radio" name="gender"

<?php if (isset($gender) &amp;&amp; $gender=="male") echo "checked";?>

value="male">Male

 


```
 



#### PHP - 完整表单实例

 以下是完整的PHP表单验证实例代码：

  
#### 实例

 
```
  


```
 

[运行实例 »](http://www.w3cschool.cc/try/showphp.php?filename=demo_form_validation_complete) 

 

