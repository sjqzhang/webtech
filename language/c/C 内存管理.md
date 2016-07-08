 C 内存管理
  本章将讲解 C 中的动态内存管理。C 语言为内存的分配和管理提供了几个函数。这些函数可以在 <stdlib.h> 头文件中找到。

 

|序号|函数和描述|
|:--|:--|
|1|void *calloc(int num, int size);该函数分配一个带有 function allocates an array of num 个元素的数组，每个元素的大小为 size 字节。|
|2|void free(void *address); 该函数释放 address 所指向的h内存块。|
|3|void *malloc(int num); 该函数分配一个 num 字节的数组，并把它们进行初始化。|
|4|void *realloc(void *address, int newsize); 该函数重新分配内存，把内存扩展到 newsize。|



 


#### 动态分配内存

 编程时，如果您预先知道数组的大小，那么定义数组时就比较容易。例如，一个存储人名的数组，它最多容纳 100 个字符，所以您可以定义数组，如下所示：

 
```

char name[100];

```
 但是，如果您预先不知道需要存储的文本长度，例如您向存储有关一个主题的详细描述。在这里，我们需要定义一个指针，该指针指向未定义所学内存大小的字符，后续再根据需求来分配内存，如下所示：

 
```

#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int main()
{
   char name[100];
   char *description;

   strcpy(name, "Zara Ali");

   /* 动态分配内存 */
   description = malloc( 200 * sizeof(char) );
   if( description == NULL )
   {
      fprintf(stderr, "Error - unable to allocate required memory\n");
   }
   else
   {
      strcpy( description, "Zara ali a DPS student in class 10th");
   }
   printf("Name = %s\n", name );
   printf("Description: %s\n", description );
}

```
 当上面的代码被编译和执行时，它会产生下列结果：

 
```

Name = Zara Ali
Description: Zara ali a DPS student in class 10th

```
 上面的程序也可以使用 calloc() 来编写，只需要把 malloc 替换为 calloc 即可，如下所示：

 
```

calloc(200, sizeof(char));

```
 当动态分配内存时，您有完全控制权，可以传递任何大小的值。而那些预先定义了大小的数组，一旦定义则无法改变大小。

 
#### 重新调整内存的大小和释放内存

 当程序退出时，操作系统会自动释放所有分配给程序的内存，但是，建议您在不需要内存时，都应该调用函数 free() 来释放内存。

 或者，您可以通过调用函数 realloc() 来增加或减少已分配的内存块的大小。让我们使用 realloc() 和 free() 函数，再次查看上面的实例：

 
```

#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int main()
{
   char name[100];
   char *description;

   strcpy(name, "Zara Ali");

   /* 动态分配内存 */
   description = malloc( 30 * sizeof(char) );
   if( description == NULL )
   {
      fprintf(stderr, "Error - unable to allocate required memory\n");
   }
   else
   {
      strcpy( description, "Zara ali a DPS student.");
   }
   /* 假设您想要存储更大的描述信息 */
   description = realloc( description, 100 * sizeof(char) );
   if( description == NULL )
   {
      fprintf(stderr, "Error - unable to allocate required memory\n");
   }
   else
   {
      strcat( description, "She is in class 10th");
   }
   
   printf("Name = %s\n", name );
   printf("Description: %s\n", description );

   /* 使用 free() 函数释放内存 */
   free(description);
}

```
 当上面的代码被编译和执行时，它会产生下列结果：

 
```

Name = Zara Ali
Description: Zara ali a DPS student.She is in class 10th

```
 您可以尝试一下不重新分配额外的内存，strcat() 函数会生成一个错误，因为存储 description 时可用的内存不足。

 

