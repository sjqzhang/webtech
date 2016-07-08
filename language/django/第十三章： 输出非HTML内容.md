

#### 编写视图


和 CSV 类似，由 Django 动态生成 PDF 文件很简单，因为 ReportLab API 同样可以使用类似文件对象。


下面是一个 Hello World 的示例：



```

from reportlab.pdfgen import canvas
from django.http import HttpResponse

def hello_pdf(request):
    # Create the HttpResponse object with the appropriate PDF headers.
    response = HttpResponse(mimetype='application/pdf')
    response['Content-Disposition'] = 'attachment; filename=hello.pdf'

    # Create the PDF object, using the response object as its "file."
    p = canvas.Canvas(response)

    # Draw things on the PDF. Here's where the PDF generation happens.
    # See the ReportLab documentation for the full list of functionality.
    p.drawString(100, 100, "Hello world.")

    # Close the PDF object cleanly, and we're done.
    p.showPage()
    p.save()
    return response

```

需要注意以下几点：




这里我们使用的 MIME 类型是 application/pdf 。这会告诉浏览器这个文档是一个 PDF 文档，而不是 HTML 文档。 如果忽略了这个参数，浏览器可能会把这个文件看成 HTML 文档，这会使浏览器的窗口中出现很奇怪的文字。 If you leave off this
information, browsers will probably interpret the response as HTML, which will
result in scary gobbledygook in the browser window.







使用 ReportLab 的 API 很简单： 只需要将 response 对象作为 canvas.Canvas 的第一个参数传入。







所有后续的 PDF 生成方法需要由 PDF 对象调用（在本例中是 p ），而不是 response 对象。







最后需要对 PDF 文件调用 showPage() 和 save() 方法（否则你会得到一个损坏的 PDF 文件）。







