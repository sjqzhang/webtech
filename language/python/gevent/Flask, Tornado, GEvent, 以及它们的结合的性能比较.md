

#### Flask, Tornado, GEvent, 以及它们的结合的性能比较








	我在选一个python的互联网框架, 本来已经定下来用Tornado了.  但我还听到很多人推荐Flask的简单性和灵活性, 还有gevent的高性能, 所以决定也试试它们以及它们和Tornado的结合.  我的示例就比”Hello World”应用稍微复杂一点儿, 它用到了模板.  下面是代码:



#### 1, 纯粹Flask (pure_flask.py)



```

	
		from flask import Flask, render_template


		app = Flask(__name__)


		@app.route('/')


		def main_handler():


		    return render_template('main_j2.html', messages="whatever",title="home")


		if __name__ == '__main__':


		    app.run(port=8888, debug=False)



```


#### 2, 纯粹Tornado (pure_tornado.py)



```

	
		import os.path


		import tornado.ioloop


		import tornado.web


	
		class MainHandler(tornado.web.RequestHandler):


		    def get(self):


		        self.render('main.html', page_title="", body_id="", messages="whatever",title="home")


	
		settings = {


		    "static_path":os.path.join(os.path.dirname(__file__),'static'),


		    "template_path":"templates",


		}


		application = tornado.web.Application([


		    (r"/", MainHandler),


		], **settings)


	
		if __name__ == "__main__":


		    application.listen(8888)


		    tornado.ioloop.IOLoop.instance().start()


	
		 



```


#### 3, Flask应用运行在Gevent上 (gevent_flask.py)



```

	
		from gevent.wsgi import WSGIServer


		from pure_flask import app


		http_server = WSGIServer(('', 8888), app)


		http_server.serve_forever()



```


#### 4, Flask应用运行在Tornado上 (tornado_flask.py)



```

	
		from tornado.wsgi import WSGIContainer


		from tornado.httpserver import HTTPServer


		from tornado.ioloop import IOLoop


		from pure_flask import app


		http_server = HTTPServer(WSGIContainer(app))


		http_server.listen(8888)


		IOLoop.instance().start()



```


#### 5, Tornado应用运行在Gevent上 (gevent_tornado.py)



```

	
		import tornado.wsgi


		import gevent.wsgi


		import pure_tornado


	
		application = tornado.wsgi.WSGIApplication([


		    (r"/", pure_tornado.MainHandler),


		],**pure_tornado.settings)


	
		if __name__ == "__main__":


		    server = gevent.wsgi.WSGIServer(('', 8888), application)


		    server.serve_forever()


	
		 



```


	程序用到了三个模板文件: main.html, layout.html, and form.html. 主程序只调用了main.html.  main.html扩展(“extends”)了 layout.html, 并包含(“include”)了 form.html. 三个模板文件加起来有30kB大小.



	
		Flask和Tornado用了不同的模板文件(Tornado是main.html, Flask是main_j2.html), 这是因为Flask和Tornado的模板语法虽然相似, 但有些地方不一样.  比如Flask(用Jinja2)模板的”block”用”{% endblock %}”表示结束, “for”用”{% endfor %}”; 但是Tornado模板则只用”{% end %}”.


	
		我用ApacheBench测了这五个的requests per second:






```

	
		ab -n 1000 -c 4 http://localhost:8888/



```


	每个测五次. 我的机型是6年老的双核Opteron 254服务器.



#### 下面是结果:



```

	
		pure_flask: 82 88 107 102 71


		pure_tornado: 144 244 241 294 290


		gevent_flask: 127 139 145 152 110


		tornado_flask: 110 88 74 92 101


		gevent_tornado: 328 555 177 273 153



```


	五次平均:



```

	
		pure_flask: 90


		pure_tornado: 242


		gevent_flask: 135


		tornado_flask: 93


		gevent_tornado: 297



```


	从上面结果可能看出Tornado比Flask快很多. 而Gevent可以让Tornado更快一些, 但快不了很多.



	最终我还是喜欢Tornado应用的简单明了, 用Flask写稍微大一点的应用比较繁琐(比如要使用蓝图-blueprints等), 所以还是决定使用Tornado了.


