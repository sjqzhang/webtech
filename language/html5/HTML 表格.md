 HTML 表格
 

#### HTML 表格实例:

 

|First Name|Last Name|Points|
|:--|:--|:--|
|Jill|Smith|50|
|Eve|Jackson|94|
|John|Doe|80|
|Adam|Johnson|67|




 ![http://www.w3cschool.cc/images/tryitimg.gif](http://www.w3cschool.cc/images/tryitimg.gif)
#### 在线实例

 

 [表格](http://www.w3cschool.cc/try/try.php?filename=tryhtml_tables)

 这个例子演示如何在 HTML 文档中创建表格。 


（可以在本页底端找到更多实例。）

 

#### HTML 表格

 表格由 <table> 标签来定义。每个表格均有若干行（由 <tr> 标签定义），每行被分割为若干单元格（由 <td> 标签定义）。字母 td 指表格数据（table data），即数据单元格的内容。数据单元格可以包含文本、图片、列表、段落、表单、水平线、表格等等。

 
#### 表格实例

 
```
 <table border="1">

 <tr>

 <td>row 1, cell 1</td>

 <td>row 1, cell 2</td>

 </tr>

 <tr>

 <td>row 2, cell 1</td>

 <td>row 2, cell 2</td>

 </tr>

 </table> 




```
 在浏览器显示如下：:

 

|row 1, cell 1|row 1, cell 2|
|:--|:--|
|row 2, cell 1|row 2, cell 2|





#### HTML 表格和边框属性

 如果不定义边框属性，表格将不显示边框。有时这很有用，但是大多数时候，我们希望显示边框。 

 使用边框属性来显示一个带有边框的表格：

 
```
 <table border="1">

 <tr>

 <td>Row 1, cell 1</td>

 <td>Row 1, cell 2</td>

 </tr>

 </table> 




```
 



#### HTML 表格表头

 表格的表头使用 <th> 标签进行定义。

 大多数浏览器会把表头显示为粗体居中的文本：

 
```
 <table border="1">

 <tr>

 <th>Header 1</th>

 <th>Header 2</th>

 </tr>

 <tr>

 <td>row 1, cell 1</td>

 <td>row 1, cell 2</td>

 </tr>

 <tr>

 <td>row 2, cell 1</td>

 <td>row 2, cell 2</td>

 </tr>

 </table> 




```
 在浏览器显示如下：

 

|Header 1|Header 2|
|:--|:--|
|row 1, cell 1|row 1, cell 2|
|row 2, cell 1|row 2, cell 2|




 ![http://www.w3cschool.cc/images/tryitimg.gif](http://www.w3cschool.cc/images/tryitimg.gif)
#### 更多实例

 

 [没有边框的表格](http://www.w3cschool.cc/try/try.php?filename=tryhtml_tables3)

 本例演示一个没有边框的表格。

 [表格中的表头(Heading)](http://www.w3cschool.cc/try/try.php?filename=tryhtml_table_headers)

 本例演示如何显示表格表头。

 [带有标题的表格](http://www.w3cschool.cc/try/try.php?filename=tryhtml_tables2)

 本例演示一个带标题 (caption) 的表格

 [跨行或跨列的表格单元格](http://www.w3cschool.cc/try/try.php?filename=tryhtml_table_span)

 本例演示如何定义跨行或跨列的表格单元格。

 [表格内的标签](http://www.w3cschool.cc/try/try.php?filename=tryhtml_table_elements)

 本例演示如何显示在不同的元素内显示元素。

 [单元格边距(Cell padding)](http://www.w3cschool.cc/try/try.php?filename=tryhtml_table_cellpadding)

 本例演示如何使用 Cell padding 来创建单元格内容与其边框之间的空白。

 [单元格间距(Cell spacing)](http://www.w3cschool.cc/try/try.php?filename=tryhtml_table_cellspacing)

 本例演示如何使用 Cell spacing 增加单元格之间的距离。

 

#### HTML 表格标签

 

|标签|描述|
|:--|:--|
|<table>|定义表格|
|<th>|定义表格的表头|
|<tr>|定义表格的行|
|<td>|定义表格单元|
|<caption>|定义表格标题|
|<colgroup>|定义表格列的组|
|<col>|定义用于表格列的属性|
|<thead>|定义表格的页眉|
|<tbody>|定义表格的主体|
|<tfoot>|定义表格的页脚 |



