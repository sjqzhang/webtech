 CSS 参考手册  
![http://www.w3cschool.cc/images/icon_small_star.gif](http://www.w3cschool.cc/images/icon_small_star.gif) W3CSchool 的 CSS 参考手册在所有主流浏览器中测试通过.

 

#### CSS 属性

 
#### CSS 属性组：

 

| 动画 背景 边框和轮廓 框 颜色 内容页的媒体属性 尺寸 盒子模型 字体 内容生成 | 网格 超链接 线框 列表 外边距 字幕 多列 内边距 页面媒体 定位 | 分页 Ruby 语音 表格 文本 2D/3D 转换 过渡 用户界面 |

"CSS" 列指示属性是在哪个 CSS 版本中定义的 (CSS1, CSS2, 或者 CSS3).

 <span id="animation" ></span>动画属性 

|属性|描述|CSS|
|:--|:--|:--|
|@keyframes|定义一个动画,@keyframes定义的动画名称用来被animation-name所使用。|3|
|animation|复合属性。检索或设置对象所应用的动画特效。|3|
|animation-name|检索或设置对象所应用的动画名称 ,必须与规则@keyframes配合使用，因为动画名称由@keyframes定义|3|
|animation-duration|检索或设置对象动画的持续时间|3|
|animation-timing-function|检索或设置对象动画的过渡类型|3|
|animation-delay|检索或设置对象动画的延迟时间|3|
|animation-iteration-count|检索或设置对象动画的循环次数|3|
|animation-direction|检索或设置对象动画在循环中是否反向运动|3|
|animation-play-state|检索或设置对象动画的状态|3|

<span id="background" ></span>背景属性 

|属性|描述|CSS|
|:--|:--|:--|
|background|复合属性。设置对象的背景特性。|1|
|background-attachment|设置或检索背景图像是随对象内容滚动还是固定的。必须先指定background-image属性。|1|
|background-color|设置或检索对象的背景颜色。|1|
|background-image|设置或检索对象的背景图像。|1|
|background-position|设置或检索对象的背景图像位置。必须先指定background-image属性。|1|
|background-repeat|设置或检索对象的背景图像如何铺排填充。必须先指定background-image属性。|1|
|background-clip|指定对象的背景图像向外裁剪的区域。|3|
|background-origin|S设置或检索对象的背景图像计算background-position时的参考原点(位置)。|3|
|background-size|检索或设置对象的背景图像的尺寸大小。|3|

<span id="border" ></span>边框(Border) 和 轮廓(Outline) 属性 

|属性|描述|CSS|
|:--|:--|:--|
|border|复合属性。设置对象边框的特性。|1|
|border-bottom|复合属性。设置对象底部边框的特性。|1|
|border-bottom-color|设置或检索对象的底部边框颜色。|1 |
|border-bottom-style|设置或检索对象的底部边框样式。|1|
|border-bottom-width|设置或检索对象的底部边框宽度。|1|
|border-color|置或检索对象的边框颜色。|1|
|border-left|复合属性。设置对象左边边框的特性。|1|
|border-left-color|设置或检索对象的左边边框颜色。|1|
|border-left-style|设置或检索对象的左边边框颜色。|1|
|border-left-width|设置或检索对象的左边边框宽度。|1|
|border-right|复合属性。设置对象右边边框的特性。|1|
|border-right-color|设置或检索对象的右边边框颜色。|1|
|border-right-style|设置或检索对象的右边边框样式。|1|
|border-right-width|设置或检索对象的右边边框宽度。|1|
|border-style|设置或检索对象的边框样式。|1|
|border-top|复合属性。设置对象顶部边框的特性。|1|
|border-top-color|设置或检索对象的顶部边框颜色|1|
|border-top-style|设置或检索对象的顶部边框样式。|1|
|border-top-width|设置或检索对象的顶部边框宽度。|1|
|border-width|设置或检索对象的边框宽度。|1|
|outline|复合属性。设置或检索对象外的线条轮廓。|2|
|outline-color|设置或检索对象外的线条轮廓的颜色。|2|
|outline-style|设置或检索对象外的线条轮廓的样式。|2|
|outline-width|设置或检索对象外的线条轮廓的宽度。|2|
|border-bottom-left-radius|设置或检索对象的左下角圆角边框。提供2个参数，2个参数以空格分隔，每个参数允许设置1个参数值，第1个参数表示水平半径，第2个参数表示垂直半径，如第2个参数省略，则默认等于第1个参数|3|
|border-bottom-right-radius|设置或检索对象的右下角圆角边框。|3|
|border-image|设置或检索对象的边框样式使用图像来填充。|3|
|border-image-outset|规定边框图像超过边框的量。|3|
|border-image-repeat|规定图像边框是否应该被重复（repeated）、拉伸（stretched）或铺满（rounded）。|3|
|border-image-slice|规定图像边框的向内偏移。|3|
|border-image-source|规定要使用的图像，代替 border-style 属性中设置的边框样式。|3|
|border-image-width|规定图像边框的宽度。|3|
|border-radius|设置或检索对象使用圆角边框。|3|
|border-top-left-radius|定义左上角边框的形状。|3|
|border-top-right-radius|定义右下角边框的形状。|3|
|box-decoration-break|规定行内元素被折行|3|
|box-shadow|向方框添加一个或多个阴影。|3|

<span id="box" ></span>盒子(Box) 属性 

|属性|描述|CSS|
|:--|:--|:--|
|overflow-x|如果内容溢出了元素内容区域，是否对内容的左/右边缘进行裁剪。|3|
|overflow-y|如果内容溢出了元素内容区域，是否对内容的上/下边缘进行裁剪。|3|
|overflow-style|规定溢出元素的首选滚动方法。|3|
|rotation|围绕由 rotation-point 属性定义的点对元素进行旋转。|3|
|rotation-point|定义距离上左边框边缘的偏移点。|3|

<span id="color" ></span>颜色(Color) 属性 

|属性|描述|CSS|
|:--|:--|:--|
|color-profile|允许使用源的颜色配置文件的默认以外的规范|3|
|opacity|设置一个元素的透明度级别|3|
|rendering-intent|允许超过默认颜色配置文件渲染意向的其他规范|3|

<span id="padding" ></span>内边距(Padding) 属性 

|属性|说明|CSS|
|:--|:--|:--|
|padding|在一个声明中设置所有填充属性|1|
|padding-bottom|设置元素的底填充|1|
|padding-left|设置元素的左填充|1|
|padding-right|设置元素的右填充|1|
|padding-top|设置元素的顶部填充|1|

<span id="contentPM" ></span>媒体页面内容属性 

|属性|说明|CSS|
|:--|:--|:--|
|bookmark-label|指定书签的标签|3|
|bookmark-level|指定了书签级别|3|
|bookmark-target|指定了书签链接的目标|3|
|float-offset|在相反的方向推动浮动元素，他们一直具有浮动|3|
|hyphenate-after|指定一个断字的单词断字字符后的最少字符数|3|
|hyphenate-before|指定一个断字的单词断字字符前的最少字符数|3|
|hyphenate-character|指定了当一个断字发生时，要显示的字符串|3|
|hyphenate-lines|表示连续断字的行在元素的最大数目|3|
|hyphenate-resource|外部资源指定一个逗号分隔的列表，可以帮助确定浏览器的断字点|3|
|hyphens|设置如何分割单词以改善该段的布局|3|
|image-resolution|指定了正确的图像分辨率|3|
|marks|将crop and/or cross标志添加到文档|3|
|string-set| |3|

<span id="dimension" ></span>尺寸(Dimension) 属性 

|属性|描述|CSS|
|:--|:--|:--|
|height|设置元素的高度|1|
|max-height|设置元素的最大高度|2|
|max-width|设置元素的最大宽度|2|
|min-height|设置元素的最小高度|2|
|min-width|设置元素的最小宽度|2|
|width| 设置元素的宽度|1|

<span id="flexbox" ></span>弹性盒子模型（Flexible Box） 属性 

|属性|说明|CSS|
|:--|:--|:--|
|box-align|指定如何对齐一个框的子元素|3|
|box-direction|指定在哪个方向，显示一个框的子元素|3|
|box-flex|指定一个框的子元素是否是灵活的或固定的大小|3|
|box-flex-group|指派灵活的元素到Flex组|3|
|box-lines|每当它在父框的空间运行时，是否指定将再上一个新的行列|3|
|box-ordinal-group|指定一个框的子元素的显示顺序|3|
|box-orient|指定一个框的子元素是否在水平或垂直方向应铺设|3|
|box-pack|指定横向盒在垂直框的水平位置和垂直位置|3|

<span id="font" ></span>字体（Font） 属性 

|属性|说明|CSS|
|:--|:--|:--|
|font|在一个声明中设置所有字体属性|1|
|font-family|规定文本的字体系列|1|
|font-size|规定文本的字体尺寸|1|
|font-style|规定文本的字体样式|1|
|font-variant|规定文本的字体样式|1|
|font-weight|规定字体的粗细|1|
|@font-face|一个规则，允许网站下载并使用其他超过"Web- safe"字体的字体|3|
|font-size-adjust|为元素规定 aspect 值|3|
|font-stretch|收缩或拉伸当前的字体系列|3|

<span id="generatedcontent" ></span>内容生成属性(Generated Content Properties) 

|属性|说明|CSS|
|:--|:--|:--|
|content|与 :before 以及 :after 伪元素配合使用，来插入生成内容|2|
|counter-increment|递增或递减一个或多个计数器|2|
|counter-reset|创建或重置一个或多个计数器|2|
|quotes|设置嵌套引用的引号类型|2|
|crop|允许replaced元素只是作为一个对象代替整个对象的矩形区域|3|
|move-to|Causes an element to be removed from the flow and reinserted at a later point in the document|3|
|page-policy|判定基于页面的给定元素的适用于计数器的字符串值|3|

<span id="grid" ></span>网格（Grid） 属性 

|属性|说明|CSS|
|:--|:--|:--|
|grid-columns|指定在网格中每列的宽度|3|
|grid-rows|指定在网格中每列的高度|3|

<span id="hyperlink" ></span>超链接(Hyperlink) 属性 

|属性|说明|CSS|
|:--|:--|:--|
|target|简写属性设置target-name, target-new,和target-position属性|3|
|target-name|指定在何处打开链接（目标位置）|3|
|target-new|指定是否有新的目标链接打开一个新窗口或在现有窗口打开新标签|3|
|target-position|指定应该放置新的目标链接的位置|3|

<span id="linebox" ></span>线框(Linebox) 属性 

|属性|说明|CSS|
|:--|:--|:--|
|alignment-adjust|允许更精确的元素的对齐方式|3|
|alignment-baseline|其父级指定的内联级别的元素如何对齐|3|
|baseline-shift|允许重新定位相对于dominant-baseline的dominant-baseline|3|
|dominant-baseline|指定scaled-baseline-table|3|
|drop-initial-after-adjust|设置下拉的主要连接点的初始对齐点|3|
|drop-initial-after-align|校准行内的初始行的设置就是具有首字母的框使用初级连接点|3|
|drop-initial-before-adjust|设置下拉的辅助连接点的初始对齐点|3|
|drop-initial-before-align|校准行内的初始行的设置就是具有首字母的框使用辅助连接点|3|
|drop-initial-size|控制局部的首字母下沉|3|
|drop-initial-value|激活一个下拉式的初步效果|3 |
|inline-box-align|设置一个多行的内联块内的行具有前一个和后一个内联元素的对齐|3|
|line-stacking|一个速记属性设置line-stacking-strategy, line-stacking-ruby,和line-stacking-shift属性|3|
|line-stacking-ruby|设置包含Ruby注释元素的行对于块元素的堆叠方法|3|
|line-stacking-shift|设置base-shift行中块元素包含元素的堆叠方法|3|
|line-stacking-strategy|设置内部包含块元素的堆叠线框的堆叠方法|3|
|text-height|行内框的文本内容区域设置block-progression维数|3|

<span id="list" ></span>列表(List) 属性 

|属性|说明|CSS|
|:--|:--|:--|
|list-style|在一个声明中设置所有的列表属性|1|
|list-style-image|将图象设置为列表项标记|1|
|list-style-position|设置列表项标记的放置位置|1|
|list-style-type|设置列表项标记的类型|1|

<span id="margin" ></span>外边距(Margin) 属性 

|属性|说明|CSS|
|:--|:--|:--|
|margin|在一个声明中设置所有外边距属性|1|
|margin-bottom|设置元素的下外边距|1|
|margin-left|设置元素的左外边距|1|
|margin-right|设置元素的右外边距|1|
|margin-top|设置元素的上外边距|1|

<span id="marquee" ></span>字幕(Marquee) 属性 

|属性|说明|CSS|
|:--|:--|:--|
|marquee-direction|设置内容移动的方向|3|
|marquee-play-count|设置内容移动多少次|3|
|marquee-speed|设置内容滚动的速度有多快|3|
|marquee-style|设置内容移动的样式|3|

<span id="multicol" ></span>多列(Multi-column) 属性 

|属性|说明|CSS|
|:--|:--|:--|
|column-count|指定元素应该分为的列数|3|
|column-fill|指定如何填充列|3|
|column-gap|指定列之间的差距|3|
|column-rule|对于设置所有column-rule-*属性的简写属性|3|
|column-rule-color|指定列之间的颜色规则|3|
|column-rule-style|指定列之间的样式规则|3|
|column-rule-width|指定列之间的宽度规则|3|
|column-span|指定元素应该跨越多少列|3|
|column-width|指定列的宽度|3|
|columns|缩写属性设置列宽和列数|3|

<span id="pagemedia" ></span>页面媒体(Paged Media) 属性 

|属性|思念|CSS|
|:--|:--|:--|
|fit|如果其宽度和高度属性都不是auto给出一个提示，如何大规模替换元素|3|
|fit-position|判定方框内对象的对齐方式|3|
|image-orientation|指定用户代理适用于图像中的向右或顺时针方向的旋转|3|
|page|指定一个元素应显示的页面的特定类型|3|
|size|指定含有BOX的页面内容的大小和方位|3|

<span id="positioning" ></span>定位（Positioning） 属性 

|属性|说明|CSS|
|:--|:--|:--|
|bottom|设置定位元素下外边距边界与其包含块下边界之间的偏移|2|
|clear|规定元素的哪一侧不允许其他浮动元素|1|
|clip|剪裁绝对定位元素|2|
|cursor|规定要显示的光标的类型（形状）|2|
|display|规定元素应该生成的框的类型|1|
|float|规定框是否应该浮动|1|
|left|设置定位元素左外边距边界与其包含块左边界之间的偏移|2|
|overflow|规定当内容溢出元素框时发生的事情|2|
|position|规定元素的定位类型|2|
|right|设置定位元素右外边距边界与其包含块右边界之间的偏移|2|
|top|设置定位元素的上外边距边界与其包含块上边界之间的偏移|2|
|visibility|规定元素是否可见|2|
|z-index|设置元素的堆叠顺序|2|

<span id="print" ></span>分页（Print） 属性 

|属性|说明|CSS|
|:--|:--|:--|
|orphans|设置当元素内部发生分页时必须在页面底部保留的最少行数|2|
|page-break-after|设置元素后的分页行为|2|
|page-break-before|设置元素前的分页行为|2|
|page-break-inside|设置元素内部的分页行为|2|
|widows|设置当元素内部发生分页时必须在页面顶部保留的最少行数|2|

<span id="ruby" ></span>Ruby 属性 

|属性|说明|CSS|
|:--|:--|:--|
|ruby-align|控制Ruby文本和Ruby基础内容相对彼此的文本对齐方式|3|
|ruby-overhang|当Ruby文本超过Ruby的基础宽，确定ruby文本是否允许局部悬置任意相邻的文本，除了自己的基础|3|
|ruby-position|它的base控制Ruby文本的位置|3|
|ruby-span|控制annotation 元素的跨越行为|3|

<span id="speech" ></span>语音（Speech） 属性 

|属性|说明|CSS|
|:--|:--|:--|
|mark|缩写属性设置mark-before和mark-after属性|3|
|mark-after|允许命名的标记连接到音频流|3|
|mark-before|允许命名的标记连接到音频流|3|
|phonemes|指定包含文本的相应元素中的一个音标发音|3|
|rest|一个缩写属性设置rest-before和rest-after属性|3|
|rest-after|一个元素的内容讲完之后，指定要休息一下或遵守韵律边界|3|
|rest-before|一个元素的内容讲完之前，指定要休息一下或遵守韵律边界|3|
|voice-balance|指定了左，右声道之间的平衡|3|
|voice-duration|指定应采取呈现所选元素的内容的长度|3|
|voice-pitch|指定平均说话的声音的音调（频率）|3|
|voice-pitch-range|指定平均间距的变化|3|
|voice-rate|控制语速|3|
|voice-stress|指示着重力度|3|
|voice-volume|语音合成是指波形输出幅度|3|

<span id="table" ></span>表格（Table） 属性 

|属性|说明|CSS|
|:--|:--|:--|
|border-collapse|规定是否合并表格边框|2|
|border-spacing|规定相邻单元格边框之间的距离|2|
|caption-side|规定表格标题的位置|2|
|empty-cells|规定是否显示表格中的空单元格上的边框和背景|2|
|table-layout|设置用于表格的布局算法|2|

<span id="text" ></span>文本（Text） 属性 

|属性|说明|CSS|
|:--|:--|:--|
|color|设置文本的颜色|1|
|direction|规定文本的方向 / 书写方向|2|
|letter-spacing|设置字符间距|1|
|line-height|设置行高|1|
|text-align|规定文本的水平对齐方式|1|
|text-decoration|规定添加到文本的装饰效果|1|
|text-indent|规定文本块首行的缩进|1|
|text-transform|控制文本的大小写|1|
|unicode-bidi| |2|
|vertical-align|设置元素的垂直对齐方式|1|
|white-space|设置怎样给一元素控件留白|1|
|word-spacing|设置单词间距|1|
|hanging-punctuation|指定一个标点符号是否可能超出行框|3|
|punctuation-trim|指定一个标点符号是否要去掉|3|
|text-align-last|当 text-align 设置为 justify 时，最后一行的对齐方式。|3|
|text-justify|当 text-align 设置为 justify 时指定分散对齐的方式。|3|
|text-outline|设置文字的轮廓。|3|
|text-overflow|指定当文本溢出包含的元素，应该发生什么|3|
|text-shadow|为文本添加阴影|3|
|text-wrap|指定文本换行规则|3|
|word-break|指定非CJK文字的断行规则|3|
|word-wrap|设置浏览器是否对过长的单词进行换行。|3|

<span id="3Dtransform" ></span>2D/3D 转换属性 

|属性|说明|CSS|
|:--|:--|:--|
|transform|适用于2D或3D转换的元素|3|
|transform-origin|允许您更改转化元素位置|3|
|transform-style|3D空间中的指定如何嵌套元素|3|
|perspective|指定3D元素是如何查看透视图|3|
|perspective-origin|指定3D元素底部位置|3|
|backface-visibility|定义一个元素是否应该是可见的，不对着屏幕时|3|

<span id="transition" ></span>过渡（Transition） 属性 

|属性|说明|CSS|
|:--|:--|:--|
|transition|此属性是 transition-property、transition-duration、transition-timing-function、transition-delay 的简写形式。|3|
|transition-property|设置用来进行过渡的 CSS 属性。|3|
|transition-duration|设置过渡进行的时间长度。|3|
|transition-timing-function|设置过渡进行的时序函数。|3|
|transition-delay|指定过渡开始的时间。|3|

<span id="userinterface" ></span>用户外观(User-interface) 属性 

|属性|说明|CSS|
|:--|:--|:--|
|appearance|定义元素的外观样式|3|
|box-sizing|允许您为了适应区域以某种方式定义某些元素|3|
|icon|为元素指定图标|3|
|nav-down|指定用户按向下键时向下导航的位置|3|
|nav-index|指定导航（tab）顺序。|3|
|nav-left|指定用户按向左键时向左导航的位置|3|
|nav-right|指定用户按向右键时向左导航的位置|3|
|nav-up|指定用户按向上键时向上导航的位置a|3|
|outline-offset|设置轮廓框架在 border 边缘外的偏移|3|
|resize|定义元素是否可以改变大小|3|



