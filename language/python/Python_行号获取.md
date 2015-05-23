##Python 行号获取




```

import sys
def get_cur_info():
    """Return the frame object for the caller's stack frame."""
    try:
        raise Exception
    except:
        f = sys.exc_info()[2].tb_frame.f_back
    return (f.f_code.co_name, f.f_lineno)
 
```




```

import sys
def get_cur_info():
    print sys._getframe().f_code.co_name
    print sys._getframe().f_back.f_code.co_name



```


