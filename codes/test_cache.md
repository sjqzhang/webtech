```python
from functools import wraps 
from common    import rcache

def Cache(cache_key,ttl=None):
    def call(func):
        @wraps(func)
        def returnVal(*args,**kwargs):
            rkey = cache_key.format(*args,**kwargs)
            rval = rcache.get(rkey)
            if rval:
                return rval
            rval = func(*args,**kwargs)
            if ttl:
                rcache.setex(rkey,ttl,rval)
            else:
                rcache.set(rkey,rval)
            return rval
        return returnVal
    return call
```