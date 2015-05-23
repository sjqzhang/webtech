

# DEPRECATED

This page is deprecated.

Feel free to add to it, but be advised that it is, at best, a faded relic of Node modules that were written before npm was a dominant force in the Node.js ecosystem.  It is not all that useful any more.

If you are a newcomer, it can be handy to at least get a starting point.  However, note that there are many tens of thousands of modules in [the npm registry](https://npmjs.org/), and only just under 2,000 modules here.

So, this list is long enough to be intimidating, but still only captures a tiny sliver of the Node.js modules you can use with your program.  What's worse, it's almost never updated, and cannot hope to highlight the changes that are happening in this busy ecosystem.

Search for modules with [npmjs.org](https://npmjs.org/), [node-modules](http://node-modules.com), [node-toolbox](http://nodetoolbox.com/) and [nipster](http://eirikb.github.com/nipster/).

The archaic contents of this once-useful page now follow.  Historians of the future, please enjoy.

-----

## Adding to this page

When you add a framework to this page, have a look at how others have done so, it should be a single item, with a link to the project's source code, and a short description (one line after formatting has been applied).

If you see a module without a description, feel free to edit the page and add it in, any contributions are appreciated.

When you edit this list, also add your module to [[library-compatibility]] so that users will know which versions of Node it was tested with.

# Table of contents

* [Web frameworks](#web-frameworks)
  * [Routers](#web-frameworks-routers)
  * [Static file servers](#web-frameworks-static)
  * [Microframeworks](#web-frameworks-micro)
  * [Frameworks](#web-frameworks-full)
  * [Middleware](#middleware)
      * [JSGI](#middleware-jsgi)
      * [Connect](#middleware-connect)
      * [Other middleware](#middleware-other)
  * [Other](#web-frameworks-other)
* [Database](#database)
  * [CUBRID] (#db-cubrid)
  * [IBM DB2] (#db-ibm_db2)
  * [MS SQL Server](#db-mssql)
  * [PostgreSQL](#db-pg)
  * [MySQL](#db-mysql)
  * [SQLite](#db-sqlite)
  * [Oracle](#db-oracle)
  * [NoSQL and Key/Value](#db-nosql)
      * [MongoDB](#db-nosql-mongo)
      * [Hive](#db-nosql-hive)
      * [Redis](#db-nosql-redis)
      * [CouchDB](#db-nosql-couch)
      * [Other NoSQL implementations](#db-nosql-other)
  * [Miscellaneous and multiple DB](#db-misc)
* [Templating](#templating)
* [CSS Engines](#css-engines)
* [Content Management Systems](#content-management)
* [Build and deployment](#build-and-deployment)
  * [Compiling and building](#compile-and-build)
  * [Restarting and continuous running](#restarting)
  * [Deployment](#deployment)
  * [Configuration management](#configuration-management)
  * [Miscellaneous build and deployment tools](#misc-build-and-deployment)
* [Package Management Systems](#package-management)
* [Module Loader](#module-loader)
* [OpenSSL / Crypto / Hashing](#security)
* [SMTP](#smtp)
* [TCP / IP](#tcp)
  * [Multiple protocols](#tcp-multiple)
  * [HTTP](#tcp-http)
  * [FTP](#tcp-ftp)
  * [E-mail](#tcp-e-mail)
  * [XMPP](#tcp-xmpp)
  * [Other networking](#tcp-other)
* [RPC](#rpc)
* [Web Sockets &amp; Ajax](#ws-ajax)
* [Message Queues](#message-queue)
* [Class systems](#class-system)
* [Testing / Spec Frameworks](#testing)
* [Dependency Injection tools](#dependency-injection)
* [Wrappers](#wrappers)
* [Parsers](#parsers)
  * [JSON](#parsers-json)
  * [XML](#parsers-xml)
  * [HTML](#parsers-html)
  * [CSV](#parsers-csv)
  * [YAML](#parsers-yaml)
  * [Command line option parsers](#parsers-commandline)
  * [Markdown parsers](#parsers-markdown)
  * [Binary file parsers](#parsers-binary)
  * [Office file parsers](#parsers-office)
  * [Feed and RDF parsers](#parsers-feed)
  * [.INI file parsers](#parsers-ini)
  * [Parser generators](#parser-generators)
  * [Other parsers](#parsers-other)
* [File system](#filesys)
  * [Watching Files](#watching)
* [Debugging / console utilities](#debugging-and-console)
  * [Debugging and profiling](#debugging)
  * [Logging and dumping](#logs)
  * [Console colors and other ANSI codes](#ansi)
  * [Other console tools](#other-console)
* [Compression](#compression)
  * [Gzip and zlib](#gzip)
  * [Zip](#zip)
  * [Other compression and minification](#compression-other)
* [Sound](#sound)
* [Chat](#chat)
* [Graphics](#graphics)
  * [Canvas](#canvas)
  * [Building desktop GUI applications](#desktop-app)
      * [Clipboard](#clipboard)
  * [Maps](#maps)
* [Video](#video)
* [Payment Gateways](#payment-gateways)
* [API clients](#api-clients)
* [Control flow / Async goodies](#async-flow)
  * [Standalone Libraries](#async-flow-libraries)
  * [Fibers](#async-flow-fibers)
  * [Other Language Extensions](#async-flow-extensions)
* [I18n and L10n modules](#i18n)
* [Boilerplates](#boilerplates)
* [Continuous Integration Tools](#continuous-integration)
* [DDD, CQRS, EventSourcing](#ddd-cqrs-es)
* [JavaScript threads](#javascript-threads)
* [Monitoring and Alerting](#monitoring-alerting)
* [Functional Programming](#functional-programming)
* [Physics](#physics)
* [Devices, Protocols, Stacks](#devices)
* [Statistics](#statistics)
* [Documentation](#documentation)
* [Other](#other)

<a name="wiki-modules"></a>
# [Modules](#modules)

<a name="wiki-web-frameworks"></a>
## [Web frameworks](#web-frameworks)

<a name="wiki-web-frameworks-routers"></a>
### [Routers](#web-frameworks-routers)

* [barista](http://kieran.github.com/barista) — A fast, flexible URL router & generator, similar to Rails / merb ([repo](https://github.com/kieran/barista/))
* [beeline](https://github.com/xavi-/beeline) — A laughably simplistic router for node.js
* [biggie-router](https://github.com/biggie/biggie-router) — Router for the biggie framework. Inspired by Sinatra and JQuery.
* [Birbal](https://github.com/Poincare/Birbal) — Pretty darn simple and clever router. Work underway to turn into a microframework!
* [choreographer](https://github.com/laughinghan/choreographer) — Your server is my stage — dirt simple URL routing for Node.js. Easy to use, easy to understand. Sinatra-style API.
* [clutch](https://github.com/clement/clutch) — no-frills web request router, supporting nested routes, regexp parameters
* [connect-route](https://github.com/baryshev/connect-route) — Simple and fast router for Connect
* [connect-router](https://github.com/crcn/connect-router) — connect/express router
* [connect](https://github.com/senchalabs/Connect) — Robust high performance middleware framework
* [copperhead](https://github.com/niclashoyer/copperhead) — Connect compatible router middleware that supports content negotiation
* [crossroads](http://millermedeiros.github.com/crossroads.js/) — Powerful and Flexible routing library, works on the client-side as well and have support for advanced features.
* [dispatch](https://github.com/caolan/dispatch) — Regular expression URL dispatcher for Connect
* [escort](https://github.com/ckknight/escort) — High-performance, advanced routing and URL generation
* [fastworks](https://github.com/RobeeeJay/Fastworks.js/) - High performance middleware framework with built in routing and Connect compatibility
* [filter-chain](https://github.com/teknopaul/filter-chain) — Java ServletFilter style request chaining
* [journey](https://github.com/cloudhead/journey) — liberal JSON-only HTTP request router
* [middler](https://github.com/carlos8f/node-middler) — A middleware runner which can itself function as middleware, with routing
* [node-flask-router](https://github.com/tarruda/node-flask-router) — Flask-inspired routing system
* [node-router](https://github.com/creationix/node-router) — Simple Sinatra-like http server based on fu.js from the original node-chat demo.
* [node.routes.js](https://github.com/defrex/node.routes.js/) — A simple url router
* [nozzle](https://github.com/fictorial/nozzle) — web app/service framework
* [rainbow](https://github.com/mytharcher/rainbow) - Rainbow mapping all HTTP request route to controllers folder each as path to file as URL. And supporting Java-like filter/interceptor before handling requests. (For Express)
* [Route66](http://vdemedes.github.com/route66) — Routing middleware for Connect 2.0. Request params, simple syntax.
* [router](https://github.com/gett/router) — A simple router with regex and sinatra like parameter support
* [sherpa](https://github.com/joshbuddy/sherpa) — HTTP router/generator with support for regex and parameters
* [tower-router](https://github.com/tower/server-router) — Minimal router with matching client-side version.
* [wns](http://github.com/yeptlabs/wns) — WNS provides a full routing system totally intuitive
* [dispatchington](https://github.com/berrington/dispatchington) - trie-based URL and method matching and connect/express middleware based on routington
* [routington](https://github.com/berrington/routington) - trie-based URL routing definitions and matching
* [node-simple-router](https://github.com/sandy98/node-simple-router) - yet another minimalistic router

<a name="wiki-web-frameworks-static"></a>
### [Static file servers](#web-frameworks-static)

* [antinode](https://github.com/mhansen/antinode) — A simple static web server
* [bastard](https://github.com/unprolix/bastard) — Automatic minification, in-memory cache, automatic fingerprinting.
* [buffet](https://github.com/carlos8f/node-buffet) — Performance-oriented static file server & middleware
* [connect](https://github.com/senchalabs/connect) — Connect's static() middleware provides flexible, high-performance, feature-rich static file serving
* [crud-file-server](https://github.com/omphalos/crud-file-server) — Static file server supporting basic create, read, update, & delete for any kind of file
* [dirlist](https://github.com/jdreux/dirlist) - A simple & old school directory listing module. Inspired by Apache's mod_autoindex.
* [fast-static](https://github.com/hkey1/fast-static) - Static server with in memory cash, supports Less,Sass,Jade,Haml,Md,Coffee-script. Minify and Join files.
* [fastworks](https://github.com/RobeeeJay/Fastworks.js/) - Fastworks' static file module uses Lactate and supports Less and Javascript compilers/compressors
* [Lactate](https://github.com/Weltschmerz/Lactate) — An exceedingly fast & simple static assets handler, with a few electives.
* [navajo](https://github.com/dresende/navajo) - A simple web server with the ability to run PHP or Node code as well as serve static files (alpha)
* [Nitrode](https://github.com/ollym/nitrode) — A lightweight, super fast HTTP 1.1 with internal JS API
* [node-paperboy](https://github.com/felixge/node-paperboy) — A node.js module for delivering static files
* [node-static](https://github.com/cloudhead/node-static) — A simple, rfc 2616-compliant static file server module with built-in caching
* [nodetoy](https://github.com/teknopaul/nodetoy) — Static JSON file server that supports GET, POST and DELETE
* [nserve](https://github.com/marty-wang/NServe) — A local development server, allowing for adjustable file transfer rate, mock web services and live reload.
* [oui](https://github.com/rsms/oui) — Web service server with great static files support
* [send](http://github.com/visionmedia/send) — Connect's robust static file server extracted for general use, supports range requests, conditional-GETs etc
* [static-resource](https://github.com/atsuya/static-resource) - Static resource handling for node.js
* [static](https://github.com/kriszyp/pintura/blob/master/jsgi/static.js) - Static file handler using asynchronous streaming as JSGI middleware
* [statify](https://github.com/techpriester/statify.js) — A static file server to make any directory available via HTTP from the command line.
* [Trailer](https://github.com/tylermwashburn/trailer) — Everyone's favorite backend.
* [wup](https://github.com/pvorb/node-wup) — A simple web server for quick tests. Install via `npm install -g wup`, start with `wup`, go to `http://localhost:8080/`.
* [wns](http://github.com/yeptlabs/wns) — WNS provides a powerful and fast static file server.
* [guaycuru](https://github.com/sandy98/guaycuru) - a simple static web server built on top of node-simple-router
* [startserve](https://github.com/hegdeashwin/Startserve) — An open source command line http server for serving static files. This command line utility allows you to initialize a static file server. It can be used to quickly server static files in case you don't have heavy requirements of using standard web servers like Apache, tomcat etc.

<a name="wiki-web-frameworks-micro"></a>
### [Microframeworks](#web-frameworks-micro)

* [Agni](http://lortabac.github.com/agni) — Simple and intuitive MVC web framework for node.js.
* [Crixalis](http://github.com/n4kz/crixalis) — Lightweight web framework
* [(fab)](http://www.fabjs.org) — A modular and concise async web framework for node.js
* [frank](https://github.com/mvrilo/frank) — yet another sinatra-like microframework for node
* [jqNode](https://github.com/pradeek/jqNode) — Simple jQuery-esque API for small projects.
* [kaph](https://github.com/akaspin/kaph) — Not framework
* [Layers](https://github.com/dave-elkan/layers) — A module to help create a layered web app with Express.
* [Monorail.js](https://github.com/runexec/Monorail.js) — Ultra leightweight MVC web framework.
* [mvc](https://github.com/morozovsk/mvc) — A lightweight mvc layer for express inspired by [ZendFramework] (http://framework.zend.com/) on php.
* [Nerve](https://github.com/gjritter/nerve) — Microframework with simple array-based syntax for defining an app on top of node. (node.JS 0.1.30)
* [Ni](https://github.com/chetan51/ni) — A minimalistic Node module / framework that makes setting up an MVC project a breeze
* [Noder.io](https://github.com/noder-io/noder.io) — Noder.io provides a lightweight and flexible core to create your own framework on top with: IoC container, dependency injection, plugin system, lazy loading of module, services factories, middleware, ...
* [node-web-modules](https://github.com/seykron/node-web-modules) — A lightweight domain-driven inspired MVC framework built on top of Express and Socket.io.
* [Picard](https://github.com/dantebronto/picard)
* [Pipe-Layer](http://cgit.voodoowarez.com/pipe-layer/) — Asynchronous HTTP router.
* [rapid-rest](https://github.com/knowlecules/rapid-rest) — Minimal overhead full-fledged REST server. [Benchmark](http://www.codeproject.com/Articles/379614/NodeJS-REST-server-trials-to-validate-effective-sc)
* [restmvc.js](https://github.com/keithnlarsen/restmvc.js) — A simple library to help you quickly create RESTful webservices using Express, Mongoose, and MongoDB.
* [seki](https://github.com/danja/seki) — simple front-end to an independent [SPARQL](http://en.wikipedia.org/wiki/SPARQL)
* [simplex](https://github.com/mshakhan/simplex) (October 2009, node.JS 0.1.14)
* [vroom](https://github.com/raycmorgan/vroom/tree/master) — A simple resource oriented web framework built on top of Node.js (November 2009, node.JS 0.1.16)
* [zappa](https://github.com/mauricemach/zappa) (now [zappajs](https://github.com/zappajs/zappajs)) — CoffeeScript minimalist interface to express, socket.io and others.

<a name="wiki-web-frameworks-full"></a>
### [Frameworks](#web-frameworks-full)

* [Diet](https://github.com/adamhalasz/diet) — A tiny, fast and modular Node.js web framework. (just 335 lines) 
* [bearcat](https://github.com/bearcatnode/bearcat) — a POJOs based application framework for node.js, supporting IoC, AOP, Consistent configuration, makes it easy to write simple, maintainable node.js  
* [actionHero](http://evantahler.github.com/actionHero/) — actionHero is a minimalist transactional API framework for sockets and http clients
* [archetype](https://github.com/jefftrudeau/archetype/) — A web framework leveraging Node.js
* [aries](https://github.com/edjafarov/aries) — Annotation based MVC framework
* [blueprint](https://github.com/hankejh/blueprint) — **Blueprint for a Startup**. Middleware, & MVC routing over Node.js & Mongoose
* [broke](https://github.com/brokenseal/broke/) — A porting of the most famous [Django Web Framework](http://www.djangoproject.com/)
* [Capsela](https://github.com/capsela/capsela/) — A high-level, **promises-based** web framework with an emphasis on testability ([see website](http://www.capsela.org))
* [Cargobox](https://github.com/inruntime/cargobox) — Express port with better OOP
* [chain](https://github.com/hassox/chain/) — An evented convention for building Node Applications (Stopped Development, for ejsgi)
* [CodeTank](https://github.com/myworld4059/CodeTank) — A lightweight MVC framework that speeds up your web development. (CodeIgniter like)!
* [Coffeemate](https://github.com/kadirpekel/coffeemate) — Push coffee-script into web development!
* [COKE](https://github.com/dreamerslab/coke) — A lightweight MVC framework base on [Express](http://expressjs.com/) that speeds up your web development. (Rails like)
* [CompoundJS](https://github.com/1602/compound) (formerly RailwayJS) — An MVC web framework, similar to **Ruby on Rails**, Express/Connect-compatible. Also see [here](http://compoundjs.com).
* [Crux](http://cruxjs.com) — An MVC web application framework and project management utility, similar in some ways to Rails.
* [Derby](http://derbyjs.com/) — MVC framework making it easy to write realtime, collaborative applications that run in both Node.js and browsers
* [djangode](https://github.com/simonw/djangode) — A framework that borrows some useful concepts from [Django](http://www.djangoproject.com/.) (March 2010, node.JS 0.1.30)
* [drty](https://github.com/drtyhbo/drty) — A Django port to NodeJS. Many Django features, still under heavy development. (January, 2011, 0.2.6)
* [Drumkit](http://drumkitjs.com/) --- DrumKit is a plugin-powered, full-stack Web development framework for Node.js.
* [Express](https://github.com/visionmedia/express/tree/master) — A robust feature rich web development framework **inspired by Sinatra**
* [Express Train](https://github.com/autoric/express-train) — An lightweight MVC web framework built on top of express, offering consistent project structure.
* [Ext Core for NodeJS](https://github.com/mycoding/Ext-Core-for-NodeJS) — Templating and some basic tricks of ExtCore and ExtJS(XTemplate,Ext.util.format)
* [Flatiron](http://flatironjs.org/) — an adaptable framework for building modern web applications. URL Routing with [Director](http://github.com/flatiron/director), templating with [Plates](http://github.com/flatiron/plates), data management with [Resourceful](http://github.com/flatiron/resourceful), middleware with [Union](http://github.com/flatiron/union) (`connect`-compatible), plugins with [Broadway](http://github.com/flatiron/broadway), logging with [Winston](http://github.com/flatiron/winston).
* [Geddy](https://github.com/mde/geddy/tree/master) — A hackable Web-app development framework **similar to Merb/Rails/Pylons/Django**
* [GenJi](https://github.com/lsm/genji) — A simple micro-framework for nodejs.
* [Grasshopper](https://github.com/tuxychandru/grasshopper/tree/master) — A feature-rich and flexible MVC framework for web applications and services, with integrated **dependency injection**.
* [hapi](http://hapijs.com) - A rich framework for building web applications and services. hapi is a simple to use configuration-centric framework with built-in support for input validation, caching, authentication, and other essential facilities. hapi enables developers to focus on writing reusable application logic instead of spending time building infrastructure. The framework supports a powerful plugin architecture for pain-free and scalable extensibility.
* [Impress](https://github.com/tshemsedinov/impress) — Application Server with scaling to multiple processes (cluster) and servers (cloudware), multiple hosts, ports and protocols (http, https, websockets, sse), URL routing, db access, proxying, memory caching, templating and much more.
* [JaxServer](http://www.jaxcore.com/jaxserver/) — Application server and framework with template and css engines
* [jimi](https://github.com/colingourlay/jimi) — A framework for writing modular web applications in node.js ([tutorial](https://github.com/colingourlay/jimi/wiki))
* [josi](https://github.com/thatismatt/josi) — An MVC web framework that's easy to pick up but doesn't get in the way. Also see [here](http://thatismatt.github.com/josi/.)
* [Kassit](https://github.com/marxus85/kassit) — rapid building of client-side AJAX applications using [Backbone](http://documentcloud.github.com/backbone/) and [CoffeeScript](http://jashkenas.github.com/coffee-script/)
* [Katana](https://github.com/Shogun147/Katana) — Easy to use, modular web framework for any Node.js samurai
* [Kiss.js](https://github.com/stanislavfeldman/kiss.js) — Web framework for node.js in CoffeeScript. Object-oriented, simple and sexy.
* [Locomotive](http://locomotivejs.org/) — Effective MVC web development for Node.js **inspired by Ruby on Rails**
* [merlin](https://github.com/brynbellomy/node-merlin) — Object-oriented MVC framework relying on a robust set of conventions to minimize code.  Also ships with optional plugins providing basic CMS-like functionality.
* [Meryl](https://github.com/kadirpekel/meryl) — Minimalist web framework! See [wiki](http://github.com/kadirpekel/meryl/wiki)
* [Mojito](https://github.com/yahoo/mojito/) — An MVC framework and JavaScript library for building full-featured, device-independent HTML5 applications running on both client (browser) and server (Node.js). See the [Mojito Documentation Directory](http://developer.yahoo.com/cocktails/mojito/docs/) for more information.
* [Monorail.js](https://github.com/runexec/Monorail.js) — Ultra leightweight MVC web framework.
* [N-Ext](https://github.com/xcambar/n-ext) — Ext.core, Ext.util and Ext.data packages in your NodeJS apps (includes a MongoDB proxy based on [node-mongodb-native](https://github.com/xcambar/n-ext/node-mongodb-native))
* [Nombo](http://nombo.io) — A highly scalable realtime full stack single-page app framework
* [node-extjs](https://github.com/egorFiNE/node-extjs) — Run ExtJS4 data models on Node.js
* [Node On Train](http://nodeontrain.uni.me/) — Open source web framework like Ruby on Rails.
* [nodemachine](https://github.com/tautologistics/nodemachine) — A port of WebMachine to Node.js
* [nodepress](https://github.com/zir/nodepress) — High-level web framework for nodejs, can be used as a blog by default
* [Omni.js](https://github.com/Mashlol/omni) — A framework for building realtime apps with Backbone.js.  Automatically propagates models/collections to the client.
* [partial.js](http://www.partialjs.com) - Web application framework (MVC, REST) for node.js / **NO DEPENDENCIES**, **inspired by ASP.MVC & RAZOR**
* [PieJS](https://github.com/fakewaffle/piejs) — A rapid development MVC framework. Inspired and similar in style/convention to CakePHP. In very active development.
* [pintura](https://github.com/kriszyp/pintura) — REST-based web framework/[middleware](https://github.com/kriszyp/pintura/tree/master/lib/jsgi/) stack built for Ajax-style [JSON-driven applications](http://www.sitepen.com/blog/2010/01/22/introducing-pintura/.)
* [pomelo](https://github.com/NetEase/pomelo) - A fast, scalable, distributed game server framework. Also suitable for realtime web.
* [Protos](https://github.com/derdesign/protos) — Web Application Framework for Node.js
* [QuickWeb](https://github.com/leizongmin/QuickWeb) — An application server for Node.js
* [rAppid:js](http://www.rappidjs.com) - A declarative JS RIA MVC Framework, supporting XAML, Bindings, Dependency Injection, custom Components
* [Roosevelt](https://github.com/kethinov/roosevelt) — Web framework for Node.js which uses Teddy for HTML templating and LESS for CSS preprocessing. Built on Express, Roosevelt is designed to abstract all the crusty boilerplate necessary to build a typical Express app, sets sane defaults with mechanisms for override, and provides a uniform MVC structure for your app.
* [Sails.js](http://sailsjs.org) — A realtime MVC framework, based on Express and Socket.io, featuring an ORM with support for Mongo, MySQL, Postgres, Redis, and others.
* [Sayndo](https://github.com/zyndiecate/sayndo/tree/master) — Fast and flexible web server with customized routing and authorization
* [Seek](https://github.com/fk1blow/Seek/) — Small Javascript Web framework - mostly for learning purpose
* [simpleS](http://micnic.github.com/simpleS/) — Simple HTTP(S) Server (designed to be **All-In-One**) with routing, static files service, response compression and WebSocket implementation (version 13, RFC 6455). [Good Documentation](https://github.com/micnic/simpleS/wiki/Documentation)
* [Sleek.js](http://sleekjs.com/) — Easy to develop MVC framework with pluggable theme & module support, built up using express.
* [SocketStream](https://github.com/socketstream/socketstream) — A fast full-stack real-time web framework for single-page apps
* [spludo](http://spludo.com) — A full featured web framework. Fully Async + MVC with DI, AOP and Storages. ([tutorial](http://docsforit.spludo.com/) + [user-guide](http://spludo.com/user-guide/full/))
* [Stick](https://github.com/olegp/stick) — A modular JSGI middleware composition layer and application framework
* [Tachi] (https://github.com/EdJ/Tachi) - A compact, stand-alone, MVC-based rapid web app development framework.
* [Tesla](http://teslajs.com/) — A powerful **MVC** style web framework for Node.
* [Tower](https://github.com/tower/tower) — Small components for building apps, manipulating data, and automating a distributed infrastructure.
* [webjs](https://github.com/iwillwen/webjs) — Simple HTTP / TCP development framework
* [websvr](https://github.com/newghost/websvr) — A simple web server, implement HttpModule(filter) and HttpHandler(servlet), autorecover user session when run into problems.
* [Zeppelin](https://github.com/pelger/Zeppelin) — An early stage, low friction cloud development framework
* [TrinteJS](https://github.com/biggora/trinte) — An MVC web framework,, Express/Connect-compatible backed by Cross-db ORM CaminteJS and Bootstrap.
* [node-express-mongoose](https://github.com/madhums/node-express-mongoose) - A simple MVC approach for building web applications utilizing the full power of express and mongoose ([demo app](https://github.com/madhums/node-express-mongoose-demo)) 

<a name="wiki-middleware"></a>
### [Middleware](#middleware)

<a name="wiki-middleware-jsgi"></a>
#### [JSGI](#middleware-jsgi)
* [auth](https://github.com/kriszyp/pintura/blob/master/lib/jsgi/auth.js) - Handles Authentication (HTTP and cookie based).
* [cascade](https://github.com/kriszyp/pintura/blob/master/lib/jsgi/cascade.js) — Sequentially attempts multiple middleware apps.
* [commonlogger](https://github.com/280north/jack/blob/0.3/lib/jack/commonlogger.js) - A logger of HTTP requests.
* [compact](https://github.com/serby/compact) - Join and compress frontend javascript.
* [compress](https://github.com/kriszyp/pintura/blob/master/lib/jsgi/compress.js) - Gzip compresses (using node-compress) the response when appropriate based on request headers.
* [conditional](https://github.com/kriszyp/pintura/blob/master/lib/jsgi/conditional.js) - Handles conditional HTTP requests (If-Modified-Since, etc.)
* [contentlength](https://github.com/280north/jack/blob/0.3/lib/jack/contentlength.js) - Sets Content-Length header.
* [csrf](https://github.com/kriszyp/pintura/blob/master/lib/jsgi/csrf.js) - Checks HTTP request for possible cross-site request forgery, flags dangerous requests.
* [extension](https://github.com/persvr/pintura) - Transforms .extension to a RESTful Accept header
* [head](https://github.com/280north/jack/blob/0.3/lib/jack/head.js) - Handles HEAD requests (stripping body).
* [http-params](https://github.com/kriszyp/pintura/blob/master/lib/jsgi/http-params.js) - Converts HTTP parameters http-<name> to headers.
* [media](https://github.com/kriszyp/pintura/blob/master/lib/jsgi/media.js) - Performs content type negotiation (per RFC2616) delegating to appropriate media handler.
* [redirect](https://github.com/280north/jack/blob/0.3/lib/jack/redirect.js) - Redirects to other URLs
* [rewriter](https://github.com/kriszyp/pintura/blob/master/lib/jsgi/rewriter.js) - Rewrites defined paths to other paths.
* [routes](https://github.com/dvv/pintura/blob/master/lib/jsgi/routes.js) - Simple RegExp based router
* [session](https://github.com/kriszyp/pintura/blob/master/jsgi/session.js) - Session manager with pluggable storage handling
* [static](https://github.com/kriszyp/pintura/blob/master/lib/jsgi/static.js) - Static file handler using asynchronous streaming.
* [transporter](https://github.com/kriszyp/transporter) - Share modules with browser, works RequireJS and Yabble
* [urlmap](https://github.com/280north/jack/blob/0.3/lib/jack/urlmap.js) - Maps to different apps by path/URL
* [xsite](https://github.com/kriszyp/pintura/blob/master/lib/jsgi/xsite.js) - Handles JSONP, window.name, and cross-origin XHR (CORS).

<a name="wiki-middleware-connect"></a>
#### [Connect](#middleware-connect)
* [connect-cleaner](https://github.com/alex4k/connect-cleaner) - Simple url cleaner and normalizer
* [connect-jade-static](https://github.com/runk/connect-jade-static) - Serving jade files as static html
* [aspa-express](https://github.com/icflorescu/aspa-express) - Simple, dependency-free middleware for serving assets packaged with [aspa](https://github.com/icflorescu/aspa).
* [browserify-middleware](https://github.com/forbeslindesay/browserify-middleware) - Middleware for serving up node.js code with requires to the client.
* [bundle-up](https://github.com/Cowboy-coder/bundle-up) — A simple asset manager middleware for managing css  and js files.
* [client-certificate-auth](https://github.com/tgies/client-certificate-auth) - Basic TLS/SSL client certificate authentication
* [connect_facebook](https://github.com/rsms/connect_facebook) - Facebook session support for Connect
* [connect_json](https://github.com/rsms/connect_json) - Support for parsing JSON requests and sending JSON responses in Connect
* [connect-airbrake](http://github.com/thegoleffect/connect-airbrake) — Airbrake error reporting auto-setup middleware
* [connect-assetmanager](https://github.com/mape/connect-assetmanager) - Asset manager for Connect for handling CSS/JS files
* [connect-assets](https://github.com/TrevorBurnham/connect-assets) - Compiled CSS/JS asset pipeline inspired by Rails 3.1
* [connect-auth](https://github.com/ciaranj/connect-auth) — Connect authentication middleware, provides out-of-the-box implementations of HTTP (Basic & Digest), Twitter, Facebook, BitBucket, Janrain, Yahoo, Sina, Google, OAuth (1.0 server), Github and a couple of others....
* [connect-compiler](http://github.com/dsc/connect-compiler) — Development middleware to dynamically recompile derived files at serve-time.
* [connect-dojo](https://github.com/wdavidw/connect-dojo) — Connect middleware exposing the Dojo Toolkit
* [connect-domain](https://github.com/baryshev/connect-domain) — Asynchronous error handler for Connect
* [connect-force-domain](https://github.com/shapeshed/connect-force-domain) — force all visitors onto a single domain
* [connect-gridfs](https://github.com/baryshev/connect-gridfs) — GridFS file server for Connect
* [connect-http-signature](https://github.com/jmar777/connect-http-signature) — middleware wrapper for Joyent's [HTTP Signature reference implementation](https://github.com/joyent/node-http-signature)
* [connect-proxy](https://github.com/gonsfx/connect-proxy) — Retrieve originating ip/host values when proxying to your connect app
* [connect-roles](https://github.com/ForbesLindesay/connect-roles) — Dynamic roles based authorization for connect/express, designed to work well with passport and everyauth.
* [connect-rpx](https://github.com/xrd/connect-rpx) - Use RPX with Node.js and Connect
* [cookie-sessions](https://github.com/caolan/cookie-sessions) — Secure cookie-based session store
* [dispatch](https://github.com/caolan/dispatch) — Regular expression URL dispatcher
* [everyauth](https://github.com/bnoguchi/everyauth) — Connect authentication and authorization middleware, modular, configurable, supporting password, OpenId, Google, OAuth, Twitter, LinkedIn, Yahoo, Readability, Dropbox, Justin.tv, Vimeo, Tumblr, OAuth2, Facebook, GitHub, Instagram, Foursquare, Box.net, LDAP
* [express-chromeframe](https://github.com/mhemesath/express-chromeframe) — Dead simple middleware to enable chromeframe on connect/express applications.
* [express-errors](https://github.com/corpix/express-errors) — Simple error handling
* [facebook-wrapper](https://github.com/vladbagrin/facebook-wrapper) — Basic wrapper to the Facebook API, designed to work with Connect and Express
* [form2json](https://github.com/fgnass/form2json) — Decoder for form-urlencoded data that supports arrays of nested objects
* [formaline](https://github.com/rootslab/formaline) - full-featured module for handling form POSTs/PUTs (multipart/form-data, application/x-www-form-urlencoded ) and fast parsing of file uploads, it speaks JSON and it is also ready for use with middlewares like connect.
* [http-accept](https://github.com/niclashoyer/http-accept) — Connect compatible middleware that parses HTTP Accept header fields
* [merge-js](https://github.com/eknkc/node-merge-js) — Simple connect middleware for merging multiple js files and uglifying the result.
* [mincer](https://github.com/nodeca/mincer) — direct Sprockets assets manager port, with middleware for connect/express
* [minj](https://github.com/bengourley/minj) — Serve minified javascript files with Connect/Express
* [monomi](https://github.com/jamesgpearce/monomi/) — Provides tools for handling tablet, touch, and mobile browsers
* [node_signedcookies](https://github.com/mattrobenolt/node_signedcookies) — Extends Express's cookieParser() to read/write signed cookies.
* [node-facebook-session-cookie](https://github.com/jonashuckestein/node-facebook-session-cookie) — eats facebook cookies from client FB.login() and makes the session available as req.fb_session
* [passport](https://github.com/jaredhanson/passport) — Simple, modular, and unobtrusive authentication framework for Connect and Express.
* [pound](http://fgribreau.github.com/pound/) — Pound is an high-level interface for Piler - The Awesome Asset Manager for Node.js
* [quip](https://github.com/caolan/quip) — Chainable HTTP response API
* [resource-router](https://github.com/s3u/resource-router) — A resource-oriented router to replace the default routing in express
* [resty](https://github.com/SoapyIllusions/resty) — Quickly and simply build REST APIs with this connect middleware
* [session-web-sockets](https://github.com/kazuyukitanimura/session-web-sockets) — Pass session to (Socket.IO-node) in a secure manner.   Originally forked from [bmeck/session-web-sockets](https://github.com/bmeck/session-web-sockets)
* [session.js](https://github.com/Marak/session.js) — super simple session middleware for node.js, even has optional "magic" sessions which monkey patch the httpServer with one line!
* [Shrinkroute](https://github.com/gustavohenke/shrinkroute) - Named routes for Express. Helps you in achieving DRY routes!
* [trust-reverse-proxy](https://github.com/zazengo/trust-reverse-proxy) - Trust (SSL) connections coming from (a) specific reverse prox(y)(ies)

<a name="wiki-middleware-other"></a>
#### [Other middleware](#middleware-other)
* [bouncy](https://github.com/substack/bouncy) — bounce HTTP requests around for load balancing or as an HTTP host router
* [buffet](https://github.com/carlos8f/node-buffet) — Performance-oriented static file server & middleware
* [dota2api](https://github.com/jiin/dota2api) — Dota2 api wrapper written in node.js
* [eventpipe](http://www.google.com/url?sa=D&q=https://github.com/dhruvbird/eventpipe) — Provides an Event Pipe with the *same* API as node.js' EventEmitter
* [exedra](https://github.com/corpix/exedra) — Express routes & functions loader
* [express-debug](https://github.com/devoidfury/express-debug) — Express middleware that provides a debugging/object browser panel injected into your application.
* [express-couch-proxy](https://github.com/ammmir/express-couch-proxy) — CouchDB reverse proxy middleware for Express
* [express-twitter](https://github.com/mahemoff/express-twitter) — Twitter-specific OAuth support
* [googleclientlogin](https://github.com/Ajnasz/GoogleClientLogin) — Log in to Google services using CllientLogin method
* [http-auth](https://github.com/gevorg/http-auth) — Node.js package for HTTP basic and digest access authentication.
  * [htdigest](https://github.com/gevorg/htdigest) — Node.js package for HTTP Digest Authentication password file utility.
  * [htpasswd](https://github.com/gevorg/htpasswd) — Node.js package for HTTP Basic Authentication password file utility.
* [http-auth2](https://github.com/SDA/http-auth2) — HTTP basic authentication that supports multiple logins.
* [http-proxy-selective](https://github.com/zentooo/node-http-proxy-selective) — Proxy server replace some remote static files with local ones
* [middler](https://github.com/carlos8f/node-middler) — A middleware runner which can itself function as middleware, with routing
* [node-evented](https://github.com/indutny/node-evented) — Extended EventEmitter
* [node-file-cache](https://github.com/FLYBYME/node-file-cache) - Very small file cache for node.js http server.
* [node-force-domain](https://github.com/goloroden/node-force-domain) — Force multiple domains to redirect (301) to a default one in your Express project.
* [Node-Http-Rewrite-Proxy](https://github.com/FlashFan/Node-Http-Rewrite-Proxy) — This module proxies and rewrites HTTP requests of all types. For this you can, if you want, use regular expressions.
* [node-reverse-proxy](http://www.steve.org.uk/Software/node-reverse-proxy) — A reverse proxy which forwards incoming HTTP requests to multiple back-end HTTP servers based upon HTTP Host header.
* [node-varnish](https://github.com/Vizzuality/node-varnish) — Connector for the Varnish cache telnet management protocol
* [notp](https://github.com/guyht/notp) — NodeJS One Time Password authentication, compatible with Google Authenticator
* [onion](https://github.com/niclashoyer/onion) — Simple and flexible middleware stack that enables you to add a middleware layer to just about anything
* [protobuf_for_node](http://code.google.com/p/protobuf-for-node/) — In-process JS-to-C++ communication using [protocol buffer](https://developers.google.com/protocol-buffers/docs/overview) services
  * [protobuf](https://github.com/chrisdew/protobuf/) — A fork of protobuf_for_node with an npm package.
* [proxy-tamper](https://github.com/tsyd/proxy-tamper) — A proxy server that allows for the tampering of requests and responses.
* [socket-logger](https://github.com/saikat/socket-logger/) — JSON-parsable logs for Socket.IO that can push log messages to a client over Socket.IO.
* [subproxy](https://github.com/omphalos/subproxy/) - subdomain proxy (for example to proxy www.google.com with www.google.com.localhost)
* [proxima](https://github.com/BlueJeansAndRain/proxima) - HTTP/TLS(HTTPS) reverse proxy forwards incoming requests to upstream servers based on Host header or SNI host hint.
* [express-cors](https://github.com/0ctave/express-cors) - Simple middleware for adding CORS functionality to your expressjs app.

<a name="wiki-web-frameworks-other"></a>
### [Other](#web-frameworks-other)

* [Alligator](https://github.com/mrohad/Alligator) — Application Server on top of NodeJS (JSSP and SSJS support)
* [Bricks](http://bricksjs.com) — Ultra modular web framework
* [Cluster](https://github.com/LearnBoost/cluster) — Extensible multi-core server manager (spark successor)
* [clustr-node](https://github.com/zyndiecate/clustr-node) — multi process cluster management
* [Common Node](https://github.com/olegp/common-node) — Synchronous CommonJS compatibility layer that includes JSGI, jBinary, IO, Filesystem, System and HttpClient modules
* [Connect](https://github.com/senchalabs/connect) — Middleware framework packed with high quality / performance middleware
* [division](https://github.com/codename-/division) - Simple and powerful wrapper over node.js cluster API.
This module is inspired by impressive but abandoned project [Cluster](https://github.com/LearnBoost/cluster)
* [fugue](https://github.com/pgte/fugue) — Unicorn for Node.js - Multiple node server instance manager with Unicorn-like features
* [js2](https://github.com/jeffsu/js2) — Syntactic Sugar and Object Oriented Javascript
* [JSGI-Node](https://github.com/kriszyp/jsgi-node/) — Asynchronous JSGI 0.3 Adapter for Node, for standards-based middleware
* [mime-magic](https://github.com/SaltwaterC/mime-magic) — Proper MIME type detection library that wraps the libmagic functionality
* [mob](https://github.com/hdachev/node-mob) — Mob - Cluster microframework with worker process specialization
* [mongrel2](https://github.com/darkhelmet/node-mongrel2) — mongrel2 - Mongrel2 handler for node
* [multi-node](https://github.com/kriszyp/multi-node) — Launch multiple node processes for HTTP servers
* [Nitrode](https://github.com/ollym/nitrode) — A lightweight, super fast HTTP 1.1 with internal JS API
* [node-cgi](https://github.com/pufuwozu/node-cgi) — CGI adapter kludge (replaces Node's fast and famous event-based HTTP library)
* [node-digest](https://github.com/wearefractal/node-digest) — HTTP Digest authentication for NodeJS
* [node-elf-logger](https://github.com/TooTallNate/node-elf-logger) — Configurable HTTP logging library following the [W3C Extended Log File Format specification](http://www.w3.org/TR/WD-logfile.html)
* [node-flags](https://github.com/dpup/node-flags) — node-flags - Flag handling library
* [node-mime](https://github.com/broofa/node-mime) — A super simple utility library for dealing with mime-types
* [node.ly](https://github.com/giacecco/node.ly) — A simple URL shortener (currently not available on GitHub)
* [Q-Oper8](https://github.com/robtweed/Q-Oper8) — Scalable multi-process manager for Node.js
* [solder](https://github.com/brettstimmerman/solder) — Combines and minifies JavaScript and CSS at runtime and build time
* [Spark](https://github.com/senchalabs/spark) — A command-line tool used to manage node server processes
* [Spark2](https://github.com/davglass/spark2) — Fork of [Spark](https://github.com/senchalabs/spark) with some improvements.
* [Stereo](https://github.com/dvv/stereo) — A simple drop-in multi-core node application controller
* [Unlimit](https://github.com/limeblack/UnlimitJS) — chaining to JavaScript without extending objects' prototypes
* [what](https://github.com/entmike/what) — What - A Node.JS Web Container/Application Server
* [zen](https://github.com/pblabs/zen) — Robust high performance middleware engine
* [wns](http://github.com/yeptlabs/wns) — A high-performance component-based, class-based middleware framework

<a name="wiki-database"></a>
## [Database](#database)

<a name="wiki-db-cubrid"></a>
### [CUBRID](#db-cubrid)

* [node-cubrid](https://github.com/CUBRID/node-cubrid/) - A native Node.js driver for CUBRID open source RDBMS.

<a name="wiki-db-ibm_db2"></a>
### [IBM DB2](#db-ibm_db2)

* [ibm_db](https://github.com/ibmdb/node-ibm_db/) — IBM supported node module for IBM DB2 and Informix

<a name="wiki-db-mssql"></a>
### [MS SQL Server](#db-mssql)

* [msnodesql](https://github.com/windowsazure/node-sqlserver) — Microsoft Driver for Node.JS for SQL Server and Windows Azure SQL Database (previously known as node-sqlserver)
* [node-mssql](https://github.com/sidneylimafilho/node-mssql) — A node.js MS SQL Server native driver
* [tedious](https://github.com/pekim/tedious) — A pure Javascript implementation of the TDS protocol, for connecting to SQL Server databases
* [node-tds](https://github.com/cretz/node-tds) — Pure JS client to SQL Server
* [tds4node](https://github.com/ttghr/tds) — Pure JS client to SQL Server with connection pooling
* [node-mssql](https://github.com/patriksimek/node-mssql) — An easy-to-use MS SQL database connector.

<a name="wiki-db-pg"></a>
### [PostgreSQL](#db-pg)

* [bookshelf](https://github.com/tgriesser/bookshelf) - An ORM with eager relation loading and transaction support, for MySQL, PostgreSQL and SQLite3.
* [FastLegS](https://github.com/didit-tech/FastLegS) - PostgreSQL ORM on top of node-postgres.
* [knex](https://github.com/tgriesser/knex) - A flexible SQL query builder, with transaction support and pooling, for MySQL, PostgreSQL and SQLite3.
* [mesa](https://github.com/snd/mesa) - simple elegant sql for nodejs
* [node-orm](https://github.com/dresende/node-orm2) — ORM for multiple drivers (MySQL, PostgreSQL, SQLite, Amazon Redshift)
* [node-postgres](https://github.com/brianc/node-postgres) — Well tested libpq binding and pure javascript PostgreSQL client
* [ORMnomnom](https://github.com/chrisdickinson/ormnomnom) - ORM that mimics Django's ORM, on top of brianc's node-postgres. Also supports SQLite via developmentseed's sqlite3.
* [patio](https://github.com/C2FO/patio) - An ORM/query engine for node. Supports MySQL and Postgres.
* [postgres-js](https://github.com/aurynn/postgres-js/) — Fork of postgres-js, adds parameterized queries and prepared statements.
* [postgres-js](https://github.com/creationix/postgres-js/tree/master) — Postgres protocol implemented in pure JS
* [sequelize](https://github.com/sequelize/sequelize) - An easy-to-use cross-database Object-Relational-Mapper (ORM) for Node.JS. Supports currently MySQL, PostgreSQL and SQLite.
* [Prego](https://github.com/sergeych/node-prego) - a tiny coffeescript library (usable with javascript too) that simplifies Postgres database access and manipulation, built for speed in both development and execution

<a name="wiki-db-mysql"></a>
### [MySQL](#db-mysql)

* [bookshelf](https://github.com/tgriesser/bookshelf) - An ORM with eager relation loading and transaction support, for MySQL, PostgreSQL and SQLite3.
* [db-mysql](https://github.com/mariano/node-db-mysql/) - Binary driver for MySQL (using libmysql). Part of the [Node.js DB](http://nodejsdb.org) effort
* [knex](https://github.com/tgriesser/knex) - A flexible SQL query builder, with transaction support and pooling, for MySQL, PostgreSQL and SQLite3.
* [node.dbslayer.js](https://github.com/Guille/node.dbslayer.js/) - Interface to DBSlayer (MySQL)
* [node-handlersocket](https://github.com/koichik/node-handlersocket) — Pure JavaScript client for [HandlerSocket Plugin for MySQL](https://github.com/ahiguti/HandlerSocket-Plugin-for-MySQL)
* [node-mysql](https://github.com/felixge/node-mysql) — A node.js module implementing the MySQL protocol
  * <s>[node-mysql-pool](https://github.com/Kijewski/node-mysql-pool) — connection pool for node.js on top of Felix Geisendörfer's MySQL client node-mysql.</s>
  * [node-mysql-cache](https://github.com/guggero/node-mysql-cache) — MySQL query cache for node.js on top of Felix Geisendörfer's MySQL client node-mysql.
  * [node-mysql-queues](https://github.com/bminer/node-mysql-queues) — Wraps 'node-mysql' to provide mulitple query queues, allowing support for multiple statements and **MySQL transactions**.
  * [node-mysql-transaction](https://github.com/HBYoon/node-mysql-transaction) - Transaction wrapper for 'node-mysql'.
* [node-mysql-native](https://github.com/sidorares/nodejs-mysql-native) — Yet another pure JS async driver. Pipelining, prepared statements.
* [node-mysql-libmysqlclient](https://github.com/Sannis/node-mysql-libmysqlclient) — MySQL asynchronous bindings based on libmysqlclient
  * [RDX](https://github.com/kreetitech/RDX) - An object-relational mapper (ORM) for node. Backends: node-mysql-libmysqlclient.
* [node-orm](https://github.com/dresende/node-orm2) — ORM for multiple drivers (MySQL, PostgreSQL, SQLite, Amazon Redshift)
* [node-poormansmysql](https://github.com/mscdex/node-poormansmysql) — Asynchronous MySQL driver for node.js using the mysql command-line tool
* <s>[node-mysql](https://github.com/masuidrive/node-mysql) — Pure JavaScript MySQL async driver</s> [obsolete]
* [patio](https://github.com/C2FO/patio) - An ORM/query engine for node. Supports MySQL and Postgres.
* [persist](https://github.com/nearinfinity/node-persist) - ORM framework supporting MySQL and SQLite 3 relational databases.
* [persistence.js](https://github.com/zefhemel/persistencejs) — An object-relational mapper (ORM) for node. Backends: MySQL.
* [sequelize](https://github.com/sdepold/sequelize) - An easy-to-use cross-database Object-Relational-Mapper (ORM) for Node.JS. Supports currently MySQL, PostgreSQL and SQLite.
* [express-admin](https://github.com/simov/express-admin) - MySQL, MariaDB, SQLite, PostgreSQL admin for NodeJS.

<a name="wiki-db-sqlite"></a>
### [SQLite](#db-sqlite)

* [bookshelf](https://github.com/tgriesser/bookshelf) - An ORM with eager relation loading and transaction support, for MySQL, PostgreSQL and SQLite3.
* [knex](https://github.com/tgriesser/knex) - A flexible SQL query builder, with transaction support and pooling, for MySQL, PostgreSQL and SQLite3.
* [node-orm](https://github.com/dresende/node-orm2) — ORM for multiple drivers (MySQL, PostgreSQL, SQLite, Amazon Redshift)
* [node-sqlite](https://github.com/grumdrig/node-sqlite) — Bindings for SQLite3. Interface conforms to the [HTML5 Web SQL API](http://dev.w3.org/html5/webdatabase/#sql.)
* [node-sqlite](https://github.com/orlandov/node-sqlite) — Fast asynchronous driver: New evented Node.js look, same great SQLite3 taste
* [node-sqlite3](https://github.com/developmentseed/node-sqlite3) — Full-featured, asynchronous SQLite bindings with query serialization/parallelization and verbose stack traces
* [persist](https://github.com/nearinfinity/node-persist) - ORM framework supporting MySQL and SQLite 3 relational databases.
* [sequelize](https://github.com/sdepold/sequelize) - An easy-to-use cross-database Object-Relational-Mapper (ORM) for Node.JS. Supports currently MySQL, PostgreSQL and SQLite.

<a name="wiki-db-oracle"></a>
### [Oracle](#db-oracle)

* [noradle](https://github.com/kaven276/noradle) — NodeJS gateway for oracle plsql server page and driver for javascript to call oracle stored plsql procedure and get result sets.
* [oracle](https://github.com/nearinfinity/node-oracle) — Database driver for Oracle

<a name="wiki-db-nosql"></a>
### [NoSQL and Key/Value](#db-nosql)

<a name="wiki-db-nosql-mongo"></a>
#### [MongoDB](#db-nosql-mongo)

* [Official Driver](https://github.com/mongodb/node-mongodb-native) _(supported by [MongoDB, Inc.](http://www.mongodb.com/))_
* [mongoose](http://mongoosejs.com/) — Elegant [MongoDB](http://www.mongodb.org) object modeling with over 160 [plugins](http://plugins.mongoosejs.com) _(supported by [MongoDB, Inc.](http://www.mongodb.com/))_
* [node-mongoskin](https://github.com/guileen/node-mongoskin) — A future layer for node-mongodb-native.
* [node-mongodb-wrapper](https://github.com/idottv/node-mongodb-wrapper) — As close as possible to the command-line driver. Uses node-mongodb-native.
* [mongode](https://github.com/milewise/mongode) — Very thin wrapper around node-mongodb-native that simplifies the API a bit.
* [N-Ext](https://github.com/xcambar/n-ext) — Use Ext.data packages in your NodeJS apps (includes a MongoDB proxy based on [node-mongodb-native](https://github.com/xcambar/n-ext/node-mongodb-native))
* [mongoq](https://github.com/zzdhidden/mongoq) — MongoDB is: mongoq('mongodb://localhost/db').collection('users').find().toArray(function(error, docs){})
* [mongo-lazy](https://github.com/jiem/mongo-lazy) — Node-mongodb-native for lazy people. Don't ever open a collection again. Eat a piece of cake while doing parallel queries.
* [easymongo](https://github.com/meritt/easymongo) - Extension for node-mongodb-native for easy interaction.
* [formage](https://github.com/Empeeric/formage) - [Bootstraped](http://twitter.github.com/bootstrap/) Admin Module for MongoDB via [Mongoose](http://mongoosejs.com/)
* [GridFS](https://github.com/siddMahen/GridFS) - Simple GridFS capabilities built on node-mongodb-native.
* [mongo-express](https://github.com/andzdroid/mongo-express) - Web-based MongoDB admin written with express.
* [mongo-sync](https://github.com/olegp/mongo-sync) — A synchronous MongoDB driver for use with [Common Node](http://olegp.github.com/common-node/) that attempts to closely approximate the MongoDB shell.
* [mongoclikker](https://github.com/semu/mongoclikker) - Simple MongoDB data viewer
* [mongodb-viewer](https://github.com/edwardhotchkiss/mongodb-viewer) — NodeJS MongoDB web-based admin/viewer tool.
* [mongojs](https://github.com/gett/mongojs) — Simple driver that emulates the mongodb API as much as possible.
* [mongolia](https://github.com/masylum/mongolia) — Flexible wrapper for the nodejs Mongo driver. Lighter than a ORM but easier to use than the driver.
* [mongoose-nested-set](https://github.com/groupdock/mongoose-nested-set) - A mongoose plugin implementing the nested set pattern for mongoose models
* [mongoose-paginate](https://github.com/edwardhotchkiss/mongoose-paginate) — Mongoose ODM (NodeJS) Document Query Pagination.
* [mongoose-troop](https://github.com/tblobaum/mongoose-troop) — Various plugins for mongoose: authentication, created/modified timestamps, keyword extraction for text search, query pagination, ObjectId obfuscation, merge objects into models, generate url friendly slugs from strings and a few more.
* [Mongorito](https://github.com/vdemedes/mongorito) — Mongorito is an ODM for MongoDB. Hooks, validations, models, built-in caching. Everything you need is already there.
* [mongous](https://github.com/amark/mongous) — Mongous is a simple MongoDB driver that uses a jQuery styled syntax.
* [node-mongodb](https://github.com/orlandov/node-mongodb) — Basic MongoDB client implementation in JS/C++
* [node-mongolab](https://github.com/petersirka/node-mongolab) - Simple node.js MongoDB REST client for MongoLab.com / **NO DEPENDENCIES**
* [node-mongolian](https://github.com/marcello3d/node-mongolian) — Mongolian DeadBeef is an awesome Mongo DB node.js driver that attempts to closely approximate the mongodb shell
* [nosql-thin](https://github.com/dmcquay/node-nosql-thin) - Makes easier to work with MongoDB. Not an ORM. Not production ready.
* [Browse npm](https://npmjs.org/browse/keyword/mongodb) by keyword for many more MongoDB related modules

<a name="wiki-db-nosql-hive"></a>
#### [Hive](#db-nosql-hive)

* [node-hive](https://github.com/forward/node-hive) — dead simple hive client using thrift api
* [node-thrift-hive](https://github.com/wdavidw/node-thrift-hive) — Hive client with multi versions support and a Readable Stream API.

<a name="wiki-db-nosql-redis"></a>
#### [Redis](#db-nosql-redis)

* [awesome](https://github.com/janl/awesome) — a Redis clone in node.js
* [haredis](https://github.com/carlos8f/haredis) - High-availability/load-balancer wrapper around [node_redis](https://github.com/mranney/node_redis/)
* [nedis](https://github.com/visionmedia/nedis) — Redis server implementation written with node
* [node_redis](https://github.com/mranney/node_redis/) — Complete Redis client that works well with new node and new Redis
* [nohm](https://github.com/maritz/nohm) — Redis object relational mapper (ORM)
* [rdb-parser](https://github.com/pconstr/rdb-parser) — async streaming parser for Redis RDB dumps
* [redback](https://github.com/chriso/redback) — a high-level Redis library with support for advanced data structures such as Social Graphs and Full-text Indexes.
* [redis-node-client](https://github.com/fictorial/redis-node-client/tree/master) — Redis Client by Fictorial (deprecated)
* [redis-node](https://github.com/bnoguchi/redis-node) — Comprehensive, high speed Redis client
* [redis-stream](https://github.com/tblobaum/redis-stream) — Streaming redis client, turn redis commands into node compatible streams
* [redis2json](https://github.com/igo/redis2json/) — Easily loads data from Redis into structured JS object
* [ron](https://github.com/wdavidw/node-ron) — Redis object relational mapper with a minimum of magic
* [orpheus](https://github.com/Radagaisus/Orpheus) - Redis DSL for CoffeeScript.

<a name="wiki-db-nosql-couch"></a>
#### [CouchDB](#db-nosql-couch)

* [coucher](https://github.com/petersirka/node-couchdb) — Simple CouchDB client (read, write, attachments, views, etc..), **NO DEPENDENCIES**
* [couch-ar](https://github.com/scottburch/couch-ar) — a active record implementation for couchDB (uses cradle)
* [couch-client](https://github.com/creationix/couch-client) — a simple wrapper around CouchDB's http interface
* [couchcmd](https://github.com/ssuda/node-couch-cmd) — CouchDB command line utility using cradle
* [couchtato](https://github.com/cliffano/couchtato/) — CouchDB database iterator tool
* [couchpenter](https://github.com/cliffano/couchpenter/) - CouchDB database and document setup tool
* [cradle](https://github.com/cloudhead/cradle) — a high-level, caching, CouchDB client
* [data.js](https://github.com/michael/data/) — Graph persistence for Node.js with CouchDB
* [kanso](http://kan.so/) — makes creation of CouchApps easy and highly modular
* [LazyBoy](http://garrensmith.com/LazyBoy) — a CouchDB ORM thats easy to use
* [Liber](https://github.com/Rauno56/liber) — Shemaless, hasslefree, lightweight, be-in-control-type-of ORM for CouchDB. Extends on nano.
* [nano](https://github.com/dscape/nano/) — Minimalistic driver for CouchDB based on mikeals/request
* [node-couch](https://github.com/sixtus/node-couch/tree/master) — a CouchDB connector
* [node-couchdb-api](https://github.com/dominicbarnes/node-couchdb-api) — An easy-to-use and powerful wrapper for the CouchDB API that follows Node.JS conventions for async code.
* [node-couchdb-min](https://github.com/rsms/node-couchdb-min) — Light-weight client with low level of abstraction and connection pooling.
* [node-couchdb](https://github.com/felixge/node-couchdb) — A full API implementation
* [PJsonCouch](https://github.com/landeiro/PJsonCouch) — PJs-on-Couch is a client lib for CouchDB's HTTP API
* [Sag](http://www.saggingcouch.com) — Gently wraps the CouchDB API, giving you power without a bunch of "stuff". The same source file works in the browser, allowing you to code against one API everywhere.
* [YACA](https://github.com/dgreisen/YACA) — custom api for your couchdb instance generated through introspection.
* [node-couchdb](https://github.com/1999/node-couchdb) - Interact with CouchDB using ETags and your own cache layer (memcached, fs, memory, etc)

<a name="wiki-db-nosql-other"></a>
#### [Other NoSQL implementations](#db-nosql-other)

* [alfred](http://pgte.github.com/alfred/) — a fast in-process key-value store for node.js that has functional indexes, streams, replication, ...
* [arango-client](https://github.com/kaerus/arango-client) — A client for ArangoDB (Graph DB, Document and Key/Value store)
* [barricane-db](https://github.com/chrisdew/barricane-db) — a transparent object persistence mechanism
* [cassandra-node](http://code.google.com/a/apache-extras.org/p/cassandra-node/) — Node.js driver for CQL and Apache Cassandra
* [chaos](https://github.com/stagas/chaos) — Chaos is a Node.js database
* [dynode](https://github.com/Wantworthy/dynode) — A client for Amazon's DynamoDB service
* [keys](https://github.com/visionmedia/keys) — Unified interface for key/value store clients
* [kyoto-client](https://github.com/wezm/kyoto-client) — A client for the Kyoto Tycoon key-value store
* [lmdb](https://github.com/Venemo/node-lmdb) - A client for the OpenLDAP Lightning MDB transactional store
* [nedb](https://github.com/louischatriot/nedb) — Dependency-less embedded database with persistence. API is the most commonly used subset of MongoDB's
* [neo4j](https://github.com/thingdom/node-neo4j) — Neo4j graph database driver for Node
* [seraph](https://github.com/brikteknologier/seraph) - Neo4j REST API client which is idiomatic to node.
* [node-dynamodb](https://github.com/spolu/node-dynamodb) — DynamoDb Driver for Node.js
* [node-leveldb](https://github.com/my8bird/node-leveldb) — NodeJS bindings to levelDB - a fast and lightweight key/value database library
* [node-mwire](https://github.com/robtweed/node-mwire) — Client for GT.M & Cache databases
* [node-tokyocabinet](https://github.com/edvakf/node-tokyocabinet) — Tokyo Cabinet binding
* [node-tyrant](https://github.com/waveto/node-tyrant/tree/master) — An implementation of the Tokyo Tyrant network protocol for the Node.js
* [riak-js](https://github.com/frank06/riak-js) — Riak JavaScript client (works on node v0.1.30+)
* [EJDB](https://github.com/Softmotions/ejdb) — Embedded JSON Database engine
* [NDDB](https://github.com/nodeGame/NDDB) — N-Dimensional Database
* [nosql](https://github.com/petersirka/nosql) - NoSQL embedded database for small node.js projects
* [tingodb](https://github.com/sergeyksv/tingodb) - Inprocess database upward compatible with MongoDB API

<a name="wiki-db-misc"></a>
### [Miscellaneous and multiple DB](#db-misc)

* [bookshelf](https://github.com/tgriesser/bookshelf) - An ORM with eager relation loading and transaction support, for MySQL, PostgreSQL and SQLite3.
* [db-drizzle](https://github.com/mariano/node-db-drizzle/) - Binary driver for Drizzle (using libdrizzle). Part of the [Node.js DB](http://nodejsdb.org) effort
* [db-migrate](https://github.com/nearinfinity/node-db-migrate) - Relational database migration framework
* [dynamoDB](https://github.com/xiepeng/dynamoDB) — An Amazon AWS DynamoDB library for Node.js.
* [hive](https://github.com/Pollenware/hive) — Fast in memory store for Node.
* [jfs](https://github.com/flosse/json-file-store) — A simple JSON file store
* [JSLINQ](https://github.com/marak/JSLINQ) — Clean and simple port of Microsoft's LINQ to node.js (and the browser)
* [jugglingdb](https://github.com/1602/jugglingdb/) - ORM for every database: redis, mysql, neo4j, mongodb, ...
* [knex](https://github.com/tgriesser/knex) - A flexible SQL query builder, with transaction support and pooling, for MySQL, PostgreSQL and SQLite3.
* [LDAP](https://github.com/jeremycx/node-ldap) - LDAP Search/Modify/Auth with Syncrepl Async update notification
* [memcached](https://github.com/3rd-Eden/node-memcached) — Memcached, membase client with support for memcached clusters using consistent hashing.
* [Memcacher](https://github.com/vdemedes/memcacher) — Memcached client, based on node-memcached, adds tagging functionality to memcached, without modifying it or its source.
* [Model](https://github.com/mde/model) - An ORM for Riak/MongoDB/Postgres/more that uses Mongo query syntax, loosely **based on DataMapper**
* [nconf](https://github.com/flatiron/nconf) — A hybrid local / remote configuration storage library
* [nocr-mongo](https://github.com/karacos/nocr-mongo) — [NoCR](https://github.com/NoCR/NoCR) implementation for mongoDB
* [node-cask](https://github.com/randomekek/node-cask) — A 140 loc mmap-ed key/value store, based on bitcask
* [node-dbi](https://github.com/DrBenton/Node-DBI) — "A la Zend Framework" database abstraction layer, offering a single handy API for MySQL, SQLite and PgSQL
* [node-dbmon](https://github.com/straps/node-dbmon) — Database Real-Time Monitoring Library
* [node-dirty](https://github.com/felixge/node-dirty) — A key value store for node.js that is simple, fast & dirty.
* [node-firebird-libfbclient](https://github.com/xdenser/node-firebird-libfbclient) — Firebird SQL client fbclient wrapper
* [node-firebird](https://github.com/hgourvest/node-firebird) — Pure javascript and asynchronous Firebird client for Node.js
* [node-fleet](https://github.com/jfd/node-fleet) — a FleetDB Client
* [node-fsdocs](https://github.com/rsms/node-fsdocs) — Simple, ACID and versioned file system-based document database for quick hacks
* [node-gdbm](https://github.com/tokuhirom/node-gdbm) — GNU's GDBM wrapper library for Node.
* [node-hbase](https://github.com/wdavidw/node-hbase) — HBase client with full API support through the REST connector
* [node-mdb](https://github.com/robtweed/node-mdb) — Node.js-based clone of AWS SimpleDB, using GT.M for data storage
* [node-mdbm](https://github.com/robtweed/node-mdbm) — a client for GT.M and Cache, using an HTTP interface that is based on SimpleDB
* [node-migrate](https://github.com/rsandor/node-migrate) — Migrate - A database agnostic migration system for Node.js
* [node-odbc](https://github.com/w1nk/node-odbc) — unixODBC bindings for node. Query any database that has an ODBC driver.
* [node-orm](https://github.com/dresende/node-orm2) — ORM for multiple drivers (MySQL, PostgreSQL, SQLite, Amazon Redshift)
* [node-springbase](https://github.com/springbase/node-springbase) — Plug-and-play cloud relational data store for Node applications
* [node-sqli](https://github.com/tarruda/node-sqli) — Promise-based API for interacting with SQL databases.
* [node-tiny](https://github.com/chjj/node-tiny) — An experimental in-process database similar to nStore.
* [persist](https://github.com/nearinfinity/node-persist) - ORM framework supporting MySQL and SQLite 3 relational databases.
* [persistence](https://github.com/creationix/node-persistence) — Multi-backend database/nosql system.  Backends: Sqlite3, Postgres and Memory.
* [perstore](https://github.com/kriszyp/perstore) — JavaScript persistence/object store with pluggable storage based on the [W3C DB API](http://www.w3.org/TR/IndexedDB/)
* [rawhash](https://github.com/pconstr/rawhash) — Experimental in-memory key:value cache where keys are binary Buffers. Built on [google-sparsehash](http://code.google.com/p/google-sparsehash) and [murmurhash3](http://code.google.com/p/smhasher/)
* [searchjs](https://github.com/deitch/searchjs) — Library for doing easy native JSON SQL-style querying on JS objects/arrays. Implements JSQL, native JSON query language.
* [sequelize](https://github.com/sdepold/sequelize) - An easy-to-use cross-database Object-Relational-Mapper (ORM) for Node.JS. Supports currently MySQL, PostgreSQL and SQLite.
* [simpledb](https://github.com/rjrodger/simpledb) — An Amazon AWS SimpleDB library for Node.js that is user-friendly and fault-tolerant
* [squel](https://github.com/hiddentao/squel) — Light-weight SQL query string builder (works in browser too).
* [Tabler](https://github.com/aarong/tabler/) - Access relational and NoSQL database backends using a generic SQL-inspired table interface (SimpleDB, JSON file available)
* [ueberDB](https://github.com/Pita/ueberDB) — Transforms every database into a object key value store
* [caminte](https://github.com/biggora/caminte) — Cross-database ORM: mysql, sqlite3, riak, postgres, couchdb, mongodb, redis, neo4j, firebird, nano.

<a name="wiki-templating"></a>
## [Templating](#templating)

* [asyncEJS](https://github.com/cramforce/node-asyncEJS) — Asynchronous implementation of embedded JavaScript
* [bake](https://github.com/pvorb/node-bake) — Templating engine for static files. Supports [ejs](https://github.com/visionmedia/ejs) templates.
* [bind-js](https://github.com/Xavi-/bind-js) — a simple templating engine for node.js that smiles back.
* [Blade](https://github.com/bminer/node-blade) — HTML Template Compiler, inspired by Jade & Haml. [Express](http://expressjs.com) compliant
* [bliss](https://github.com/cstivers78/bliss) — Template engine inspired by .NET Razor and Play! Scala Templates.
* [blue](http://github.com/floby/node-blue) — A streamed template engine. Support for asynchronous loading of partials
* [CoffeeKup](https://github.com/mauricemach/coffeekup) — Markup as CoffeeScript. Live [demo](http://coffeekup.org) and [html2coffeekup](https://github.com/brandonbloom/html2coffeekup).
* [CoffeeMugg](https://github.com/jaekwon/coffeemugg) — Markup as CoffeeScript. A branch of CoffeeKup, supports closures, requires no compilation, extensible via view-helper libraries, like ActionView.
* [combyne.js](https://github.com/tbranyen/combyne.js) — A template engine that hopefully works the way you'd expect.
* [Diet Dot](https://github.com/jamescostian/diet-dot) — The fastest + concise javascript template engine for nodejs and the browser, made even more so and sans mustache-style syntax
* [doT.js](https://github.com/olado/doT) — Concise and super fast javascript templates with customizable delimiters, streaming and partials support
* [DryKup](https://github.com/mark-hahn/drykup) — CoffeeKup-compatible markup for CoffeeScript.  Supports closures and requires no compilation.
* [dust](http://akdubya.github.com/dustjs) — Async, streaming & composable templates for the browser and node
* [Eco](https://github.com/sstephenson/eco) — Embedded CoffeeScript templates
* [ECT](https://github.com/baryshev/ect) — High performance template engine with embedded CoffeeScript syntax ([see demo](http://ectjs.com))
* [egs](http://ckknight.github.io/egs/) - Highly performant, fully asynchronous text templating engine built around [GorillaScript](http://ckknight.github.io/gorillascript/). [Express](http://expressjs.com) compliant
* [ejs](https://github.com/visionmedia/ejs) — Light-weight Embedded JavaScript implementation. [Express](http://expressjs.com) compliant
* [fest](https://github.com/mailru/fest) — Fast and safe template, xml syntax
* [fgen](https://github.com/sethyuan/fgen) — A file generator library to be used to generate project structures, file templates and/or snippets. Templates are based on mustache.
* [gaikan](https://github.com/Deathspike/gaikan) - HTML template engine for Node and Express.
* [genapp](https://github.com/sethyuan/genapp) - A customizable generator application using fgen.
* [haml-js](https://github.com/creationix/haml-js) — Server side html generation using JavaScript.  Parses haml templates and renders html.
* [haml.js](https://github.com/visionmedia/haml.js) — Faster / more compliant implementation of Haml. [Express](http://expressjs.com) support
* [handlebars.js](https://github.com/wycats/handlebars.js/) — The mustache-inspired templating library behind [Ember.js](http://emberjs.com/)
* [Jade](https://github.com/visionmedia/jade) — Haml-like template engine, fantastic error reporting, easier to read, higher performance. [Express](http://expressjs.com) compliant
* [jazz](https://github.com/shinetech/jazz) — A readable template language for node.
* [JinJS](http://code.ravelsoft.com/node-jinjs) — A port of Jinja, a Django Template-like templating language to Javascript
* [Jinsoku](https://github.com/Shogun147/Jinsoku) - High performance Javascript template engine inspired by Jade's power and doT's speed.
* [jm](https://github.com/smtlaissezfaire/jm) — Another Builder/Markaby/Erectory clone in JavaScript.
* [jqtpl](https://github.com/kof/node-jqtpl) — A port of the new jQuery template engine. [Express](http://expressjs.com) compliant
* [jsdom](https://github.com/tmpvar/jsdom) — pure js implementation of the dom level 1 with some browser augmentation. Level 2 and 3 are being considered.
* [jshtml](https://github.com/elmerbulthuis/jshtml) — Clean HTML, full JavaScript template engine. Inspired by the razor view engine used in asp.net mvc.
* [JSON Template](https://github.com/andychu/json-template) — Minimal but powerful template language with multiple implementations.  This is the CommonJS version, tested on Node
* [Kiwi](https://github.com/coolony/kiwi) — Simple yet powerful template engine based on jQuery Templates syntax, totally asynchronous, and built from the ground up with performance and modularity in mind. [Express](http://expressjs.com) 3.x compliant.
* [Kruntch.js](http://www.kruntch.com) — A simple, lightweight, efficient and non-invasive pure-JavaScript templating engine perfect for powering BOTH the back-end and the front-end.
* [less.js](https://github.com/cloudhead/less.js) — official port of Less to JavaScript/node.
* [Liquor](https://github.com/chjj/liquor) — A templating engine minus the code.
* [Lite(LiteXML)](http://www.xidea.org/lite/doc/) — A cross platform template engine base on xml/html and javascript expression
* [ltxb](https://github.com/jaredhanson/ltxb) — Less-Than XML builder templates
* [minstache](https://github.com/visionmedia/minstache) -- tiny mustache compiler producing stand-alone functions
* [minimal.js](https://github.com/ruidlopes/minimal.js) — a fast HTML+JSON template engine (both browser and Node.js compatible)
* [MinnaHtml.js](https://github.com/RobeeeJay/MinnaHTML.js) - An async aware object based HTML template library
* [Mu (Mustache)](https://github.com/raycmorgan/Mu) — A Mustache engine that compiles templates into very fast rendering functions. Also streams the
* [MustLayout](https://github.com/mytharcher/mustlayout) - A layout and partials pre-compile tool for mustache based template engine using in express.js
* [node-dom](https://github.com/Ayms/node-dom) — Javascript fast W3C DOM generation.
* [node-jst](https://github.com/shaunlee/node-jst) — A pretty high performance template engine implemented with JavaScript. [Express](http://expressjs.com) compliant
* [node-pages](https://github.com/tasogarepg/node-pages) — A simple template engine. Cacheable and Trackable.
* [node-properties](https://github.com/theteam/node-properties) — Simple property reader, externalise your configuration through JSON
* [Node-T](https://github.com/skid/node-t) — A fast django-like templating engine for node.js
* [node-template](https://github.com/graphnode/node-template) — Fast and light cached templates.
* [node-tmpl](https://github.com/jeromeetienne/node-tmpl) — basic templating system in node.js based on shorttag
* [node.magic_dom](https://github.com/amix/node.magic_dom) — A DSL for building HTML in node.js, similar to Python's Stan
* [nodejs-meta-templates](https://github.com/shimondoodkin/nodejs-meta-templates) — like php mixed with html, processed twice, 1st  static data, 2nd dynamic data.
* [normal-template](https://github.com/gmosx/normal-template) — Normal templates are simple, yet powerful. They are safe, usable in non XML/HTML contexts and portable to any programming language.
* [nTPL](https://github.com/indutny/nTPL) — Fast & Native extendable template system
* [nun](https://github.com/akaspin/nun) — Totally asynchronous non-blocking template engine for node.js
* [nunjucks](https://github.com/jlongster/nunjucks) - A jinja2-inspired template system, more up-to-date than jinjs
* [Parrot](https://github.com/ollym/parrot) — A lightning fast and lightweight templating engine for Node.js (Just 33 LOC!)
* [Pencil](https://github.com/gabrieleds/pencil) — Custom tags/components for Jade. Extend, mixin and inherit.
* [Plates](https://github.com/flatiron/plates) — Light-weight, logic-less, DSL-free, templates for all javascript environments!
* [PURE](https://github.com/pure/pure) — Unobtrusive Rendering Engine. The HTML view and the JS logic remain strictly separated. Works with jsdom.
* [QEJS](https://github.com/jepso/QEJS) — Asyncronous Embedded JavaScript Templates with Q promises
* [Raptor Templates](https://github.com/raptorjs3/raptor-templates) — An extensible, streaming, asynchronous, high performance, HTML-based templating language
* [Razor Leaf](https://github.com/campersander/razorleaf) — A template engine with a minimal, concise, and indentation-based syntax (akin to Jade’s).
* [scraps](https://github.com/nudgepad/scraps) — A Space based HTML template language.
* [shift.js](https://github.com/viatropos/shift.js) — Standard interface to the Node.js template engines.
* [simpleT](http://micnic.github.com/simpleT/) — Simple Template Engine for embedded JavaScript with automatic caching and client-side support
* [stencil](https://github.com/thetalecrafter/stencil) — Renders asynchronous templates shared by server and browser
* [Swig](https://github.com/paularmstrong/swig) — Fast and powerful Django-style templates for node.js. [Express](http://expressjs.com) compliant.
* [Teddy](https://github.com/kethinov/teddy) — An easy-to-read, HTML-based, mostly logic-less DOM templating engine with support for both server-side and client-side templating based on the W3C standard DOMParser and XMLSerializer.
* [Templ8](https://github.com/constantology/Templ8) — A fast, lightweight, yet powerful & feature rich client/ server template engine based on Django style syntax
* [template.node.js](https://github.com/jazzychad/template.node.js) — A light, fast, cached template module for node.
* [thunder](https://github.com/dreamerslab/thunder) — A lighting fast template parser for node.js. [Express](http://expressjs.com) compliant
* [tmpl-node](https://github.com/jed/tmpl-node) — a feature-rich template module for node.js
* [tob](https://github.com/shimondoodkin/tob) — Template Observer, allows self-reloading templates with your template engine
* [TOFFEE](https://github.com/malgorithms/toffee) — templates with the elegance of CoffeeScript, by the makers of OkCupid. (Compatible with Express 2, 3, and the browser).
* [tpl](https://github.com/pvorb/node-tpl) — a general purpose template cli
* [TSN](https://github.com/B-Vladi/TSN) — A Templating System for Node.JS.
* [TwigJS](https://github.com/fadrizul/twigjs) — A port of PHP template engine ([www.twig-project.org](http://www.twig-project.org)) to Javascript
* [weld](https://github.com/hij1nx/weld) — unobtrusive. portable. ANTI-TEMPLATING. Weld binds data to markup, and can generate markup based on your data.
* [wieldyjs](https://github.com/vail130/wieldymarkup-js) — Template-agnostic markup language that compiles to HTML. Grunt task available as well [grunt-wieldyjs](https://github.com/vail130/grunt-wieldyjs)
* [whiskers](https://github.com/gsf/whiskers.js) — single-file, feature-sparse templating for node, express, and the browser
* [xmlb](https://github.com/jaredhanson/xmlb) — XML builder templates
* [xmlbuilder-js](https://github.com/oozcitak/xmlbuilder-js) — An xml builder for node.js similar to java-xmlbuilder.
* [xmlbuilder.js](https://github.com/btakita/xmlbuilder.js) — An xml builder in JavaScript inspired by Ruby's Builder, Markaby, and Erector.
rendering process.

<a name="wiki-css-engines"></a>
## [CSS Engines](#css-engines)

* [assemble-less](https://github.com/assemble/assemble-less) — Compile LESS to CSS, with options for creating "bundles", individual components, and themes.
* [carto](https://github.com/mapbox/carto) — Parses MSS templates and renders XML for [Mapnik](http://mapnik.org/)
* [ccss](https://github.com/aeosynth/ccss) — Parses a JavaScript object and renders css.
* [csslike](https://github.com/chjj/csslike) — Parses and compiles CSS, taking into account the most recent www-style proposals.
* [cssjanus](https://github.com/trevorparscal/cssjanus) — Converts left-to-right stylesheets to right-to-left, useful for projects that support right-to-left languages like Arabic.
* [CSSOM](https://github.com/NV/CSSOM) — Parses CSS into CSS Object Model.
* [Csster](https://github.com/ndp/csster) — Write CSS in JS or Coffeescript, with macros, color math, etc.
* [Inverter](https://github.com/coolony/inverter) — Flips CSS from LTR to RTL and vice-versa.
* [less](https://github.com/cloudhead/less.js) — Parses a LESS template and renders css.
* [sass.js](https://github.com/visionmedia/sass.js) — Parses Sass templates and renders css.
* [scss-js](https://github.com/bmavity/scss-js) — Parses SCSS templates and renders css.
* [Stylus-Sprite](https://github.com/andris9/stylus-sprite) — Extension for Stylus to generate sprite images
* [Stylus](https://github.com/LearnBoost/stylus) — Expressive, dynamic, robust CSS language written by the author of Express, Connect, Jade and more

<a name="wiki-content-management"></a>
## [Content Management Systems](#content-management)

* [NBlog](https://github.com/astalker/nblog) - Simple Blog using Express and Mongo
* [AkashaCMS](http://akashacms.com) - Static website generator, supporting EJS, Markdown and Kernel (asynchronous) template engines, template inheritance, partials, and more
* [AE86](http://github.com/cliffano/ae86) — Static website generator. Easy to write custom tag as simple JavaScript function, clean and minimalistic template syntax.
* [blacksmith](https://github.com/flatiron/blacksmith) — A static site generator built with Node.js, JSDOM, and Weld.
* [bread](https://github.com/pvorb/node-bread) — A file based static website/blog generator for node that uses markdown files as content providers.
* [Calipso](http://calip.so/?utm_source=nodejs&utm_medium=github&utm_campaign=nodejs) — An express based CMS, very much work in progress. <!-- broken link -->
* [DocPad](https://github.com/bevry/docpad) — is a language agnostic document management system. It's actively maintained and supported by a growing community. It's also modular; so easy to extend and use in bigger systems. It already supports lots of markups and pre-processors through [available plugins](https://github.com/bevry/docpad/wiki/Plugins) and [powers many websites](https://github.com/bevry/docpad/wiki/Showcase).
* [Enfield](https://github.com/fortes/enfield) - Static site / blog generator that aims to be as compatible as possible with Jekyll, only with JS/CoffeeScript plugins instead of Ruby.
* [jslardo](https://github.com/obliquid/jslardo) — A Social CMS, where users are able to register to the application, create their own models (mongoose schemas), views, controllers, websites and pages. Work in progress, keep updated!
* [KeystoneJS](http://keystonejs.com/) - Flexible CMS / framework built on Express and MongoDB. It builds an Admin UI based on your models, and reduces boilerplate code.
* [LooseLeaf](http://looseleafjs.org/) — Very simple blogging engine based on express, no-DataBase, only JSON.
* [MCMS](https://github.com/olegp/mcms) — A Minimal CMS using GitHub flavored Markdown, Mustache templates and the filesystem.
* [MuContent](https://github.com/anddimario/mucontent) — MuContent is a multisite and multilanguage cms in Javascript (Node.js) written with a central proxy for balancing the request on multiple client. Based on MongoDB for storage all content. Themes are based on Foundation framework and mustache.
* [Murray CMS](https://github.com/thecolorblue/murray-cms) — blog platform using express and mongodb.
* [NoCR](https://github.com/NoCR/NoCR) — JCR-inspired Content Repository API for Node.js which maps your content model to a tree of nodes and properties. There is a [MongoDB NoCR provider](https://github.com/karacos/nocr-mongo) available
* [Nodepad](https://github.com/alexyoung/nodepad) — A nice basic web-based notepad.
* [NodeWiki](https://github.com/nhoss2/nodewiki) — A simple markdown/text file wiki system.
* [NudgePad](https://github.com/nudgepad/nudgepad) — A tool for building in your browser.
* [Punch](http://laktek.github.com/punch) — A simple tool to generate HTML documents from Mustache templates and content stored in JSON & Markdown format.
* [reed](https://github.com/ProjectMoon/reed) — A Markdown-based blogging core backed by Redis and the filesystem.
* [nodeportal](https://github.com/saggiyogesh/nodeportal) — Inspired from Liferay, its a portal cms. Currently in heavy development. 
* [hexo](https://github.com/tommy351/hexo) — A fast, simple & powerful blog framework inspired by Jekyll & Octopress.
* [Node2Blog](https://github.com/jawerty/Node2Blog) — A simple and easy to setup blog template (Express and MongoDB)
* [pagen.js](https://github.com/jawerty/pagen) — A colorful and **highly** customizable static website generator.

<a name="wiki-build-and-deployment"></a>
## [Build and deployment](#build-and-deployment)

<a name="wiki-compile-and-build"></a>
### [Compiling and building](#compile-and-build)

* [Anvil.js](https://github.com/anviljs/anvil.js) — Convention over Configuration build system with plugins for performing a variety of tasks.
* [asereje](https://github.com/masylum/asereje) — Bundles and minifies your javascript and css files on demand. Forget about builds, hard deploys and cache forever.
* [assemble](https://github.com/assemble/assemble) — Template engine and site generator for node.js. 
* [asset-bundler](https://github.com/sergiok/asset-bundler) — pack and create asset bundles, organize your scripts and stylesheets in different packages.
* [aspa](https://github.com/icflorescu/aspa) - An opinionated, lightweight asset packager enabling you to concatenate, compress and fingerprint your stylesheets and scripts during development / before deployment.
* [aspax](http://aspax.github.io) - The simple Node.js asset packager (derived from ASPA).
* [beholder](https://github.com/cmoncrief/beholder) — Robust cross-platform file watching with support for  globbing and large file sets.
* [Brunch](https://github.com/brunch/brunch) - An assembler for HTML5 applications. It's agnostic to frameworks, libraries, programming, stylesheet & templating languages and backend technology.
* [buildr](https://github.com/balupton/buildr.npm) — JavaScript project builder, compresses images, CSS and JS, bundles CSS and JS, checks JavaScript, supports subpackages/plugins
* [ClosureCompiler.js](https://github.com/dcodeIO/ClosureCompiler.js) — ClosureCompiler for node.js - the all-round carefree package
* [Grunt](https://github.com/gruntjs/grunt) — a task-based command line build tool for JavaScript projects.
* [Jadebars](https://github.com/cmoncrief/jadebars) — Compile Jade into pre-compiled Handlebars templates, with support for watching and minification.
* [Jake](https://github.com/mde/jake) — JavaScript build tool similar to Make or Rake.
* [Masson](https://github.com/wdavidw/node-masson) — Build system and rule management similar to tools like Make, Ant or Rake
* [mnm](https://github.com/nearinfinity/node-mnm) — Make Node Module (MNM) is a build tool for making native Node.js modules with no dependencies other than Node itself (i.e. no Python required)
* [muffin.js](https://github.com/hornairs/muffin) — CoffeeScript compilation, minification, concatenation, copying, growl, and SLOC counting helpers for Cakefiles.
* [Modjs](https://github.com/modulejs/modjs) — modern build tool for the web
* [nib.js](https://github.com/blambeau/nib.js) — package and minify JavaScript/coffeescript projects to be embedded in the browser as a single .js file
* [node-linter](https://github.com/kof/node-linter) — generic lint wrapper for JSLint, closure-linter, closure-compiler, and JavaScript Lint.
* [simple-watcher](https://github.com/Laboratory/simple-watcher) - Coffee-script, haml and sass simple watcher
* [weber](https://github.com/hiddentao/weber) — dynamically compiling and minifying scripts, stylesheets and templates on-the-fly, including Coffeescript, Eco, Stylus, etc.
* [kaffee](https://github.com/FabianM/kaffee) — a software project management tool and framework similar to Maven.

<a name="wiki-restarting"></a>
### [Restarting and continuous running](#restarting)

* [always](https://github.com/edwardhotchkiss/always) — A CLI & Daemon tool to run a NodeJS process forever, restarting on file changes & crashes with piping to stdout or log files.
* [autorestart](https://github.com/shimondoodkin/nodejs-autorestart) — It is a way to watch all .js files if they have been changed and to restart nodejs. It allows easy development and stable production.
* [dev](https://github.com/iliakan/node-dev) — Automatically restarts the app when a source-file is modified. Autohooks on new files, so it doesn't need manual restart at all.
* [supervizer](https://github.com/oOthkOo/supervizer) — A CLI & Daemon server to manage NodeJS process. 
* [forever](http://github.com/nodejitsu/forever) — A simple CLI tool for ensuring that a given script runs continuously (i.e. forever)
  * [forever-webui](https://github.com/FGRibreau/forever-webui) — A simple web UI for efficient nodejs administration
  * [uForever](https://github.com/Boffka/uForever) - Web UI for administration running processes of forever
* [naught](https://github.com/indabamusic/naught) — zero downtime deployment using native cluster API. Created as an alternative to forever.
* [forewoman](https://github.com/liangzan/forewoman) — A port of foreman (process management tool) + hot code reload.
* [node-dev](https://github.com/fgnass/node-dev) — Automatically restarts node when a source-file is modified. Displays notifications via Growl.
* [node-windows](https://github.com/coreybutler/node-windows) — Run scripts as native background services on Windows. Also has event logging and security management features.
* [node-linux](https://github.com/coreybutler/node-linux) — Run scripts as native background services on CentOS/Fedora/RHEL, Ubuntu, Debian distros.
* [node-mac](https://github.com/coreybutler/node-mac) — Run scripts as native background services on OSX. Also has event logging.
* [nodemon](https://github.com/remy/nodemon) — Monitors all source files, restarts node on changes. Command-line usage, code-passive with ignore list.
* [reloader](https://github.com/konteck/reloader) — Reload app on it's source code change. Suitable to work both on production and development machines. Act as usual NodeJS module.
* [run](https://github.com/DTrejo/run.js) — Rerun your js file whenever there's a change in the current directory: <code>npm install -g run</code>, <code>runjs yourcode.js</code>. Never alt-tab to your terminal again.
* [start-stop-daemon](https://github.com/jiem/start-stop-daemon) — Easily transform JS scripts into start-stop-daemon scripts
* [universal-reloader](https://github.com/omphalos/universal-reloader) - Ultra-compatible command-line tool for autoreloading most browsers on file changes. 
* [winser](https://github.com/jfromaniello/winser) — Run Node.js applications as services on Microsoft Windows.

<a name="wiki-deployment"></a>
### [Deployment](#deployment)

* [azure-cli] (http://github.com/windowsazure/azure-sdk-tools-xplat) - Deploy and manage node.js applications to [Windows Azure](http://windowsazure.com), create Linux and Windows Virtual Machines and more.
* [connect-girror](https://github.com/eladb/node-connect-girror) — Connect middleware which mounts an entire app from any git repository, spawns it and exposes a git post-receive hook endpoint.
* [girror](https://github.com/eladb/node-girror) — Mirrors (and re-mirrors) git repositories.
* [Gittyup](https://github.com/crcn/gittyup) — Application deployment library for node.js
* [gogogo](https://github.com/idottv/gogogo) - Easy automatic deployment and management to any server with upstart (ubuntu)
* [haibu](https://github.com/nodejitsu/haibu) — a node.js application server - spawn your own node.js clouds, on your own hardware
* [jitsu](https://github.com/nodejitsu/jitsu) — Flawless command line deployment of your Node.js apps to the cloud
* [npkg](https://github.com/wearefractal/npkg) — Generates cross-platform installers for Node.js applications
* [roco](https://github.com/1602/roco) — Capistrano inspired CLI for deployment, monitoring and other stuff.
* [napp](https://github.com/Ideolys/napp) — Node AP[P]lication [P]ackager to pack your app and unpack it on your server in a few seconds even without Internet.

<a name="wiki-configuration-management"></a>
### [Configuration management](#configuration-management)

* [coffee-conf](https://github.com/MSNexploder/coffee-conf) — Write your config files in coffee-script.
* [config](https://github.com/lorenwest/node-config) — Configuration control for production node deployments - npm install config
* [configme](https://github.com/AndreasMadsen/configme) — Simplest possible configuration tool. without conflict - with defaulting!
* [envious](https://github.com/markbao/node-envious) — environment variable configuration that's too easy to pass up
* [node-config](https://github.com/ArtS/node-config) — Lightweight configuration engine for Node.js
* [node-ini](https://github.com/pastorbones/node-ini) —  A simple .ini config parser that supports sections, comments, arrays, and objects.
* [node-settings](https://github.com/mgutz/node-settings) — Simple, hierarchical environment-based app settings.
* [osenv](https://github.com/isaacs/osenv) — Gets environment settings of the operating system.
* [ripple](https://github.com/thrashaholic/ripple) — Dynamic runtime configuration for node.js deployment based on lorenwest's config.
* [pkgconfig](https://github.com/fhellwig/pkgconfig) - Reads and validates JSON configuration files for Node.js packages.
* [runtime-configuration](https://github.com/vtsvang/node-runtime-configuration) - Reads and writes RC files in json, yaml, ini and plist.

**See also** [parsers](#parsers), they may be used to parse configuration files.

<a name="wiki-misc-build-and-deployment"></a>
### [Miscellaneous build and deployment tools](#misc-build-and-deployment)

* [coffee-toaster](https://github.com/serpentem/coffee-toaster) — Minimalist dependency management system for coffee-script.
* [doc.md](https://github.com/Pita/doc.md) — A simple JSDoc documenation tool that creates markdown for node.js modules
* [modul8](https://github.com/clux/modul8) — Extensible CommonJS browser code sharing
* [nclosure](http://gatapia.github.com/nclosure/) — Compiler, Style Checker, Utility Library, Unit Testing Framework, JSDoc Documentation Tool.  Built on top of Google Closure tools.
* [node-foreman](https://github.com/nodefly/node-foreman) - A Node implementation of [Foreman](http://ddollar.github.com/foreman/) with Node-specific additions.
* [octoploy](https://github.com/ammmir/octoploy) — GitHub post-receive hook URL handler (execute script on push to repo)
* [poly.shell](https://github.com/dvidelabs/poly.shell) — distributed shell job control with role based configuration
* [quickcheck](https://github.com/mcandre/node-quickcheck) — Port of the Haskell QuickCheck unit testing framework
* [ready.js](https://github.com/dsimard/ready.js) — continuous javascript integration
* [ndoc](https://github.com/nodeca/ndoc) — direct PDoc port with some extra features.
* [jscpd](https://github.com/kucherenko/jscpd) — Copy/paste detector for JavaScript and CoffeeScript code.

<a name="wiki-package-management"></a>
## [Package Management Systems](#package-management)

* [Cupboard](https://github.com/crcn/cupboard) — Reverse package manager
* [Ender](https://github.com/ender-js/ender) — A package manager built on NPM bringing micro to macro to create your own custom JavaScript library by composing modules into a cohesive and familiar interface .
* [nmod](https://github.com/jeromeetienne/nmod) — nmod is a node_modules manager. able to install from npm and git
* [npkg](https://github.com/wearefractal/npkg) — Generates cross-platform installers/executables for Node.js applications
* [npm](https://github.com/isaacs/npm) — A node package manager that uses CommonJS-compatible package.json files, written in asynchronous JavaScript.
* [police](https://github.com/pksunkara/npm-police) — A module dependency version policing tool. It goes through all your repositories on github which has package.json and analyzes the dependencies and reports back to you about all the outdated packages.
* [Slugr](https://github.com/crcn/slugr) — Wraps node.js apps into a single executable file.
* [pkgtool](https://github.com/vtsvang/node-pkgtool) — Tool for managing package dependencies.

<a name="wiki-module-loader"></a>
## [Module Loader](#module-loader)

* [a3](https://github.com/twojcik/a3) — a3 module loads any folder of code into an 'API Tree'
* [directory](https://github.com/tblobaum/directory) — require a whole directory
* [node-DJs](https://github.com/louisremi/node-DJs) - Restart a server after each change in main script and dependencies
* [node-hot-reload](https://github.com/shimondoodkin/node-hot-reload) - watchFile and reload modules dynamically for node.js (very useful for development, less good for production)
* [nodules](https://github.com/kriszyp/nodules) — Async URL CommonJS module loader with dep resolution/downloading and hot-module reloading
* [raptor](http://raptorjs.org/module-loader/) — [RaptorJS](http://raptorjs.org) provides a cross-platform AMD-compliant module loader that integrates into the Node module loader. An optimized client-side module loader is also provided that handles dependencies, automatic compilation and delivering environment-specific code.
* [remap](https://github.com/dominictarr/remap) - reroute require for mocks, wrappers, or shenanigans (useful for testing)
* [pinf-for-nodejs](https://github.com/pinf/pinf-for-nodejs) — JavaScript Bundle Loader for NodeJS
* [wrapit](https://github.com/omphalos/wrapit) - webservice to wrap any web resource in a header and footer; good for wrapping javascript files in require calls
* [express-load](https://github.com/jarradseers/express-load) — Autoload scripts (routes, controllers, models...) into the Express application instance. 
* [needy](https://github.com/BlueJeansAndRain/needy) — Transparently compatible, extensible, multi-environment replacement for the built-in NodeJS module loader.

<a name="wiki-security"></a>
## [OpenSSL / Crypto / Hashing](#security)

* [EncryptionHelper](https://github.com/tarunc/EncryptionHelper) - A collection of helper functions that encrypt, decrypt, and hash strings/files based on NodeJS's native crypto module.
* [amir's node-base62](https://github.com/amir/node-base62) — C++ base62 lib for representing big numbers
* [bcrypt.js](https://github.com/dcodeIO/bcrypt.js) — Optimized bcrypt in plain JavaScript with zero dependencies. 100% typed code.
* [brainfucker's node-base64](https://github.com/brainfucker/node-base64) — C++ base64 lib
* [hashlib](https://github.com/brainfucker/hashlib) — Fast hashing module, written in C/C++, supports: md4, md5, md6, sha, sha1, sha256, sha512
* [jsHashes](https://github.com/h2non/jsHashes) — A fast and independent hashing library pure JavaScript implemented for both server and client side. Supports MD5, SHA1, SHA256, SHA512, RIPEMD-160 and HMAC. Includes Base64 encode/decode, CRC-32 and UTF-8 support.
* [keygrip](https://github.com/jed/keygrip) — Key signing and verification for rotated credentials
* [lhc](https://github.com/stuartpb/lhc) — Large Hashsum Collider, for creating strings that hash to a value beginning with specific hex digits
* [MD5](https://github.com/pvorb/node-md5) — Plain JavaScript MD5 hashing function
* [murmurhash3](https://github.com/hideo55/node-murmurhash3) — Node.js bindings for [MurmurHash3](http://code.google.com/p/smhasher/wiki/MurmurHash3)
* [node_nibbler](https://github.com/mattrobenolt/node_nibbler) — Base32/base64 encoder/decoder.
* [node-cityhash](https://github.com/fbzhong/node-cityhash) — NodeJS bindings for [Google CityHash](http://code.google.com/p/cityhash/) , both CityHash64 and CityHash128 are supported.
* [node-crypto](https://github.com/waveto/node-crypto) — OpenSSL based Hashing, Signing and Verifying
* [node-forge](https://github.com/digitalbazaar/forge) — Native TLS in JS, various crypto tools: PKCS, MD5, SHA, HMAC, RSA, RSASSA-PSS, X.509, ASN.1, PEM, PRNG, AES, DES, PBE
* [node-gpg](https://github.com/drudge/node-gpg) - GPG encryption and decryption by way of the gpg command-line tool
* [node-keychain](https://github.com/drudge/node-keychain) - Basic Keychain Access on Mac computers running Node.js
* [node-hashring](https://github.com/3rd-Eden/node-hashring) — Hash ring provides consistent hashing based on the libketema library.
* [node-oauth](https://github.com/ciaranj/node-oauth) — OAuth client (1 and 2)
* [node-oauth2-provider](https://github.com/ammmir/node-oauth2-provider) — OAuth 2 provider as Connect/Express middleware with custom token storage hooks
* [node-openid](https://github.com/havard/node-openid) — OpenID 1.1/2.0 Relying Party (client)
* [node-phpass](https://github.com/jhurliman/node-phpass) — A pure JavaScript port of the portable PHP password hashing framework.
* [node-sechash](https://github.com/kbjr/node-sechash) — Secure password hashing using salt and key stretching.
* [node-whirlpool](https://github.com/Sembiance/node-whirlpool) — C/C++ mhash lib wrapper providing whirlpool hash support
* [node.bcrypt.js](https://github.com/ncb000gt/node.bcrypt.js) — C/C++ bcrypt lib
* [NodeJS-Keychain](https://github.com/aschlosberg/NodeJS-Keychain) — A security-oriented keychain web service
* [oauth-server](https://github.com/selead/oauth-server) — OAuth server (1.0A)
* [oauthjs](https://github.com/itea/oauthjs) — OAuth client
* [packnode](https://github.com/chriso/packnode) — Obfuscate, minify and/or encrypt JS files
* [pass](https://github.com/andris9/pass) — Validate/generate Apache htpasswd passwords (for Basic Auth)
* [pkrumins's node-base64](https://github.com/pkrumins/node-base64) — C++ base64 lib that actually works
* [rbytes](https://github.com/akdubya/rbytes) — Secure random byte generator for session keys, UUIDs, etc.
* [S3ncryptedProxy](https://github.com/gflarity/s3ncrypted_proxy) — A simple proxy that makes securely sharing data via Amazon S3 easy
* [sasljs](https://github.com/nikhilm/sasljs) — [Gsasl](http://www.gnu.org/software/gsasl/) wrapper to performs server-side SASL authentication.
* [sha1](https://github.com/pvorb/node-sha1) — Plain JavaScript SHA-1 hashing function
* [simple_rsa_encrypt](https://github.com/paspao/simple_rsa_encrypt) - A simple OpenSSL RSA module for node.js, to integrate rsa public encryption and private decryption.
* [speakeasy](https://github.com/markbao/speakeasy) — Easy two-factor authentication. Time-based or counter-based one-time passwords with the HMAC One-Time Password algorithms. Supports Google Authenticator.
* [ursa](https://github.com/Obvious/ursa) — A clean and reasonably complete set of wrappers for OpenSSL's RSA functionality.
* [xml-crypto](https://github.com/yaronn/xml-crypto) — Xml digital signature and encryption library for Node.js - written in pure javascript.
* [apache-crypt](https://github.com/gevorg/apache-crypt) — Node.js module for Apache style password encryption using crypt(3).
* [apache-md5](https://github.com/gevorg/apache-md5) — Node.js module for Apache style password encryption using md5.

<a name="wiki-smtp"></a>
## [SMTP](#smtp)

* [emailjs](https://github.com/eleith/emailjs) - send emails, html and attachments from node.js to any smtp server (ex: gmail)
* [Haraka](https://github.com/baudehlo/Haraka) — Full Featured SMTP Server
* [mailcomposer](https://github.com/andris9/mailcomposer) - Generate e-mail messages that can be streamed to SMTP or file (unicode friendly)
* [Mailman](https://github.com/vdemedes/mailman) — Send emails in a comfortable way via models. SMTP, SES, Sendmail supported.
* [node-smtp](https://github.com/aredridel/node-smtp) — Implementation of an SMTP server (and soon, client)
* [node-smtpevent](https://github.com/euangoddard/node-smtpevent) — Event based SMTP server
* [Nodemailer](https://github.com/andris9/Nodemailer) - Easy to use module to send e-mails with Node.JS, unicode friendly
* [simplesmtp](https://github.com/andris9/simplesmtp) - Use SMTP as a first class protocol, useful for generating custom SMTP servers

<a name="wiki-tcp"></a>
## [TCP / IP](#tcp)

<a name="wiki-tcp-multiple"></a>
### [Multiple protocols](#tcp-multiple)

* [open-uri](https://github.com/publicclass/open-uri) — A very simple HTTP(S)/FTP client library similar to Rubys Open-URI lib.
* [node-Tor](https://github.com/Ayms/node-Tor) — Javascript implementation of the Tor anonymizer project (The Onion Router https://www.torproject.org/).
* [iAnonym](https://github.com/Ayms/iAnonym) — Anonymity into your browser everywhere from any device (node-Tor browserified).
* [node-httpp](https://github.com/InstantWebP2P/node-httpp) — Run HTTP over UDP.
* [iwebpp.io](https://github.com/InstantWebP2P/iwebpp.io) — Deliver Peer and P2P Web Service.
* [peer-proxy](https://github.com/InstantWebP2P/peer-proxy) — Proxy web service or website from peer.

<a name="wiki-tcp-http"></a>
### [HTTP](#tcp-http)

* [curler](https://github.com/rfrench/curler) — Native c++ node.js module for asynchronous http requests via libcurl.
* [fetch](https://github.com/andris9/fetch) — Fetch urls with ease, supports gzip content, cookies and more
* [http-get](https://github.com/SaltwaterC/http-get) — Simple to use node.js HTTP / HTTPS client for downloading remote files. Supports transparent gzip decoding. May use some HTTP or HTTPS proxy.
* [http-sync](https://github.com/dhruvbird/http-sync) — Synchronous http(s) client
* [multiparter](https://github.com/Sonetica/multiparter) — multipart/form-data POST request maker for Node.js with support for streams (sending files) and plain params
* [multipost](https://github.com/josephwegner/Multipost) — An easy interface for the multipart/form-data protocol
* [needle](https://github.com/tomas/needle) — Lightweight HTTP client with multipart support.
* [node-curl](https://github.com/jiangmiao/node-curl) - node cURL wrapper with fully implemented.
* [node-digest](https://github.com/wearefractal/node-digest) — HTTP Digest authentication for NodeJS
* [node-get](https://github.com/developmentseed/node-get) — Moderately higher-level HTTP client library.
* [node-tunnel](https://github.com/koichik/node-tunnel) — HTTP/HTTPS Agents for tunneling proxies.
* [poster](https://github.com/rfrench/poster) — Upload local/remote files over multipart.
* [rem](https://github.com/tcr/rem-js) — HTTP clients with middleware for Node.js and web browsers. Flexible for any HTTP request, customizable for building API clients, and supports OAuth.
* [request](https://github.com/mikeal/request) — Simple HTTP client library.
* [shred](https://github.com/automatthew/shred) — HTTP client library for Node.js and browsers.  Supports gzip, cookies, https, proxies, and redirects.
* [superagent](https://github.com/visionmedia/superagent) — High-level HTTP client sporting a progressive API
* [watchmen](https://github.com/iloire/WatchMen) — A simple HTTP monitor (pings sites and services with predefined parameters to make sure they are alive)
* [node-crawler](https://github.com/joshfire/node-crawler) — Web crawler/spider with JSDom, jQuery & connection pooling.

<a name="wiki-tcp-ftp"></a>
### [FTP](#tcp-ftp)

* [ftp-get](https://github.com/SaltwaterC/ftp-get) — Simple to use node.js FTP client for downloading remote files
* [jsftp](https://github.com/sergi/jsftp) — A sane, light and concise client implementation of the FTP protocol
* [node-ftp](https://github.com/mscdex/node-ftp) — An FTP client module for node.js
* [node-ftpclient](https://github.com/seanhess/node-ftpclient) — Node FTP Client
* [NodeFTPd](https://github.com/billywhizz/nodeftpd) — Node FTP Server ... updated fork [here](https://github.com/alanszlosek/nodeftpd)

<a name="wiki-tcp-e-mail"></a>
### [E-mail](#tcp-e-mail)

* [inbox](https://github.com/andris9/inbox) — Super easy access to IMAP mail server mailboxes
* [n3](https://github.com/andris9/n3) — Experimental POP3 server to send arbitrary data to e-mail clients (including e-mails)
* [node-imap](https://github.com/mscdex/node-imap) — A module for interacting with IMAP mail servers
* [node-poplib](https://github.com/ditesh/node-poplib) — POP3 client library for Node.js

<a name="wiki-tcp-xmpp"></a>
### [XMPP](#tcp-xmpp)

* [node-bosh-xmpp-client](https://github.com/eelcocramer/node-bosh-xmpp-client) — An XMPP BOSH client API compatible with [node-xmpp](https://github.com/astro/node-xmpp).
* [node-simple-xmpp](https://github.com/arunoda/node-simple-xmpp) — Simple High Level NodeJS XMPP Client
* [node-xmpp-bosh](https://github.com/dhruvbird/node-xmpp-bosh) — An XMPP BOSH (http) and WebSocket server
* [node-xmpp-joap](https://github.com/flosse/node-xmpp-joap) — Jabber Object Access Protocol (XEP-0075) library for node-xmpp
* [node-xmpp-serviceadmin](https://github.com/flosse/node-xmpp-serviceadmin) — Service Administration (XEP-0133) library for node-xmpp
* [node-xmpp](https://github.com/astro/node-xmpp) — Node XMPP library
* [xmpp.js](https://github.com/mwild1/xmppjs) — Library for implementing XMPP server components with Node

<a name="wiki-tcp-other"></a>
### [Other networking](#tcp-other)

* [ByteBuffer.js](https://github.com/dcodeIO/ByteBuffer.js) — A Java-like, Netty-inspired ByteBuffer implementation using typed arrays.
* [evilscan](https://github.com/eviltik/evilscan) — Massive ports scanner
* [jsDAV](https://github.com/mikedeboer/jsdav) — jsDAV allows you to easily add WebDAV and CalDAV support to a NodeJS application. jsDAV is meant to cover the entire standard, and attempts to allow integration using an easy to understand API.
* [macaddr](https://github.com/carter-thaxton/macaddr) — Obtain MAC addresses for current machine from Node
* [mdns](https://github.com/agnat/node_mdns) — mdns/zeroconf/bonjour service discovery add-on
* [ndns](https://github.com/jsjohnst/ndns) — DNS client/server library
* [node-hydna](https://github.com/hydna/node-hydna) — Bindings for the Hydna platform
* [node-icecast-stack](https://github.com/TooTallNate/node-icecast-stack) — An interface for connecting to, parsing metadata, and reading from SHOUTcast/Icecast radio streams
* [node-nntp](https://github.com/mscdex/node-nntp) — An NNTP (usenet/newsgroups) client module for node.js
* [node-ping](https://github.com/c0d3x42/node-ping) — Simple wrapper around fping
* [node-snmp](https://github.com/huancz/node-snmp/) — SNMP v1 client
* [node-snpp](https://github.com/jsanders/node-snpp) — Node SNPP server library
* [node-ssltunnel](https://github.com/anodejs/node-ssltunnel) — A lightweight TCP over SSL / TLS tunnel running over node. If you need to add confidentiality, integrity, and authenticity to your TCP stream this is the tool for you.
* [node-tld](https://github.com/donpark/node-tld) — for working with TLD data (registered domain name, etc)
* [NodeSSH](https://github.com/FlashFan/NodeSSH) — a lightweight SSH client
* [portscanner](https://github.com/baalexander/node-portscanner) — An asynchronous port scanner for Node.js
* [ProtoBuf.js](https://github.com/dcodeIO/ProtoBuf.js) — protobuf for JavaScript
* [radius](https://github.com/nearbuy/node-radius) — RADIUS packet encoding/decoding library
* [shorty](https://github.com/mtd/shorty) — Shorty is a lightweight, high performance SMPP client and server.
* [stomp-client](https://github.com/easternbloc/node-stomp-client) — A STOMP client for Node.js
* [ssh2](https://github.com/mscdex/ssh2) - An SSH2 client module written in pure JavaScript for node.js
* [sshclient](https://github.com/ypocat/sshclient) - a simple deployment-oriented wrapper for mscdex's ssh2 lib
* [wake_on_lan](https://github.com/agnat/node_wake_on_lan) — Generate and send Wake-on-LAN magic packets
* [geotools](https://github.com/runk/geotools) — IP to Country/Region lookup
* [maxmind](https://github.com/runk/node-maxmind) — IP geo lookup using Maxmind databases
* [socksjs](https://github.com/m2ys4u/socksjs) — A SOCKS (v5) client library for node.js

<a name="wiki-rpc"></a>
## [RPC](#rpc)

* [eureca.io](https://github.com/Ezelia/eureca.io) - transparent bidirectional RPC library using engine.io or sockjs as transport layer.
* [mar](https://github.com/esnunes/mar) - Message & Reply - RPC library based on message exchange.
* [bertrpc](https://github.com/rtomayko/node-bertrpc)
* [dnode](https://github.com/substack/dnode) — Asynchronous remote method calls with transparently wrapped callbacks. Works with regular network streams or socket.io.
* [IPCNode](https://github.com/Frans-Willem/IPCNode) — Asynchronous RPC library based on node.js Stream object,  with support for circular objects, and explicit reference counting to ensure proper garbage collection.
* [jayson](https://github.com/tedeh/jayson) - Featureful client and server implementation of JSON-RPC 2.0 (supports automatic forking, reviving/replacing, binary client etc.)
* [json-rpc-server](https://github.com/diligences/json-rpc-server) — Simple implementation of JSON-RPC 2.0 server-side protocol with middleware support. Needs HTTP or any another server to communicate with clients.
* [jsonrpclib](https://github.com/openmason/jsonrpclib) - A JSON-RPC v 2.0 library with full test suites. Transport is left out, so this library can be used with any transport.
* [jsonrpc](https://github.com/ericflo/node-jsonrpc)
* [jsonrpc2](https://github.com/Philipp15b/node-jsonrpc2) — A super easy to use JSON-RPC v2 server
* [messenger](https://github.com/weixiyen/messenger.js) — Dead Simple API for cross-service communication (supports Pub/Sub, Request/Reply, Fire and Forget models).
* [msgpack-rpc](https://github.com/bpot/node-msgpack-rpc) — Implementation of Msgpack-RPC (http://msgpack.org)
* [node-ipcbuffer](https://github.com/dazhazit/node-ipcbuffer) — A modified Buffer object to pass large amounts of data between processes using POSIX or System V IPC shared memory and or do fast read and writes to files. (Windows soon).
* [node-jsonrpc](https://github.com/andris9/node-jsonrpc) — Another JSON-RPC server
* [node-pingback](https://github.com/chjj/node-pingback) — Pingbacks for node.js, conforming to the pingback and xml-rpc spec.
* [node-soap](https://github.com/milewise/node-soap) — SOAP client and service (partial support).
* [nodejs-light_rpc](https://github.com/romulka/nodejs-light_rpc) — Simple server/client RPC, with minimal dependencies (uuid (can be removed to use simple increment)).
* [nodeQuery](https://github.com/tblobaum/nodeQuery) — nQuery.js lets you create, edit, update or delete the DOM in real-time using jQuery/Zepto style code written on the server
* [nowjs](https://github.com/flotype/now) — nowjs makes realtime web apps really easy (http://nowjs.com)
* [rpc-socket](https://github.com/FLYBYME/rpc-socket) — Multi socket support for JSON-RPC NOTE: still under development.
* [thintalk](https://github.com/AndreasMadsen/thintalk) — A minimal extendable RPC abstraction with buildin TPC and IPC support
* [xmlrpc](https://github.com/baalexander/node-xmlrpc) — A pure JavaScript XML-RPC server and client
* [zeromq.node](https://github.com/JustinTulloss/zeromq.node) — 0MQ (zeroMQ) bindings for node.js
* [zerorpc-node](https://github.com/dotcloud/zerorpc-node) — A port of the original ZeroRPC for node.js.
* [ws.js](https://github.com/yaronn/ws.js) — A WS-* client stack for node.js. Written in pure javascript! 
* [wcf.js](https://github.com/yaronn/wcf.js) — A WCF-compatible web service client stack for node.js. Written in pure javascript! 
* [node-ice](https://github.com/durs/node-ice) - ZeroC Ice client implementation (c++)

<a name="wiki-ws-ajax"></a>
## [Web Sockets & Ajax](#ws-ajax)

* [Abstract HTTP Request](https://github.com/coolaj86/abstract-http-request) — An HTTP Client wrapper for the browser (XHR) and node.js (http module)
* [Beseda](https://github.com/GeometriaLab/Beseda) — Fast, well designed and featured Node.js Pub/Sub server. Beseda offers multiple platform API to develop realtime web applications.
* [Comet LongPollingBuffer](https://github.com/robrighter/Long-Polling-Buffer) — A Library to simplify the server side of Comet AJAX long polling
* [DataChannel.io](https://github.com/marcolanaro/DataChannel.IO) — WebRTC application framework for Node.JS, with Socket.io as signaling server.
* [easywebsocket](https://github.com/jeromeetienne/EasyWebsocket) — WebSocket to broadcast messages to webpages
* [Faye](https://github.com/faye/faye) — Bayeux protocol Comet client and server for Node.js and Rack
* [grappler](https://github.com/mscdex/grappler) — A minimalistic server for handling "comet" connections that supports a variety of connection methods.
* [Lightstreamer](https://github.com/Weswit/Lightstreamer-lib-node-adapter) — Node.js adapter for Lightstreamer real-time messaging server (WebSockets, fallback, pub/sub, massive fan out).
* [Minotaur](https://github.com/yojimbo87/minotaur) — Long poll server using JSONP communication with clients
* [node-bus](https://github.com/node-bus/node-bus) — A distributed pubsub engine for JSON-based events
* [node-eventstream](https://github.com/kbjr/node-eventstream) — A server-side companion to EventSource.
* [node-object-sync](https://github.com/jonashuckestein/node-object-sync) — Transparently synchronize objects across connected clients
* [node-rpc-socket.io](https://github.com/Tronix117/node-rpc-socket.io) — socket.io addon, add a full client/server implementation of JSON-RPC
* [node-typedarray](https://github.com/Ayms/node-typedarray) — How to mix node.js's Buffers and Typed Arrays
* [node-socket.io-client](https://github.com/saschagehlich/node-socket.io-client) — Node.js implementation of the Socket.IO client libraries
* [node-websockets](https://github.com/bodokaiser/node-websockets) - a simple, fundamental and final (RFC 6455) implementation of the websocket protocol which supports easy extension handling
* [node-websocket-client](https://github.com/pgriess/node-websocket-client) — An HTML5 Web Socket client.
* [node-websocket-server](https://github.com/miksago/node-websocket-server) — Another websocket server on top of the http server.
* [node-wwwdude](https://github.com/pfleidi/node-wwwdude) — A simplified, flexible HTTP/REST client library for node.js
* [node-XMLHttpRequest](https://github.com/driverdan/node-XMLHttpRequest)
* [node.websocket.js](https://github.com/Guille/node.websocket.js) — WebSocket-compatible server.
* [node.ws.js](https://github.com/ncr/node.ws.js) — A basic Web Socket server with interface similar to tcp.createServer(...)
* [node2node-socket.io](https://github.com/dotmaster/node2node-socket.io) — A node2node transport and client for socket.io .
* [nodejs-http-websocket](https://github.com/zimbatm/nodejs-http-websocket) — A websocket server on top of the http server.
* [partial.js - RFC 6455](https://github.com/petersirka/partial.js/) - a fully web application framework for node.js, **NO DEPENDENCIES**
* [Restler](https://github.com/danwrong/restler) — Simplified REST client for Node.js
* [Reston](https://github.com/maxpert/Reston) — REST client with multipart support and friendly API
* [Socket.io](https://github.com/LearnBoost/Socket.IO) — WebSocket-compatible server and client with fallback for legacy browsers
* [spacesocket](https://github.com/astro/spacesocket) — WebSocket server not invented here
* [tunguska](https://github.com/kriszyp/tunguska) — A comet publish/subscribe distributed hub (runs across multiple node instances).
* [wave-node](https://github.com/scottbw/wave-node) — An implementation of the Google Wave Gadget API for node.js
* [Weasel](https://github.com/hackfrag/Weasel) — a command based websocket application framework
* [websocket](https://github.com/Ayms/websocket) — Simple, minimal, modular, fast and easy WebSocket client and server
* [websocket-node](https://github.com/Worlize/WebSocket-Node) — A WebSocket library that implements the most current protocol versions, 8 and 13.  Version 13 is the latest version that is now the final WebSocket spec as [RFC 6455](http://datatracker.ietf.org/doc/rfc6455/)
* [ws-flash-client](https://github.com/ypocat/ws-flash-client) — Replaces the WebSocket object with a Flash implementation on clients without native WebSocket support, thus covering 99% of use cases. Works well with the `ws` WebSocket server.
* [ws-rpc](https://github.com/ypocat/ws-rpc) — Lightweight RPC support for the `ws` WebSocket server. Supports rooms (channels), callbacks, auto-reconnection, using client WebSocket from Node.js (not only Browser), and works well with `ws-flash-client`.
* [ws](https://github.com/einaros/ws) — Very fast, protocol conformant WebSocket client, server and console. Supports [RFC 6455](http://datatracker.ietf.org/doc/rfc6455/), the Hybi drafts as well as Hixie-76.
* [ReWebSocket](https://github.com/andreyvit/rewebsocket) — auto-reconnecting WebSocket, 99% API-compatible with the original WebSocket (decorates any WebSocket implementation)

<a name="wiki-message-queue"></a>
## [Message Queues](#message-queue)

* [redisq](https://github.com/runk/redisq) Fast message processing queue backed by redis, web interface for monitoring 
* [simple-queue-service](https://github.com/ForbesLindesay/simple-queue-service) - A simple wrapper for amazon's simple queue service
* [kue](http://learnboost.github.com/kue/) — Kue is a priority job queue backed by redis, with a clean & simple UI
* [amqp-dsl](https://github.com/FGRibreau/node-amqp-dsl) — Fluent Interface for dealing with AMQP (RabbitMQ,...) on NodeJS
* [amqp-tool](https://github.com/FGRibreau/node-amqp-tool) — Import & export data from/to an AMQP/RabbitMQ broker
* [fairy](https://github.com/baoshan/fairy) — a queue engine based on Redis offering ActiveMQ's **message groups** alike feature.
* [gearman-node](https://github.com/cramerdev/gearman-node) — [Gearman](http://gearman.org/) client.
* [gearnode](https://github.com/andris9/gearnode) — [Gearman](http://gearman.org/) client and worker.
* [messagehub](https://github.com/idottv/messagehub) - Simple message, queue and pub/sub system compatible with AMQP/RabbitMQ
* [MongoMQ](https://github.com/jdarling/MongoMQ) — MongoMQ is a messaging queue built on top of Node.js and MongoDB's tailable cursors. It allows for distributed of messages across workers in both a single reciever and broadcast method.
* [node-gearman](https://github.com/andris9/node-gearman) — Simple worker/client module for [Gearman](http://gearman.org/)
* [node-rqueue](https://github.com/csanz/node-rqueue) — Implementation of RQueue, includes Worker and Queue
* [QDis](https://github.com/gflarity/qdis) — a simple durable fanout pub/sub queueing system built with Redis + Node.js
* [Que](https://github.com/vdemedes/que) — One model-based interface to many message queue backends.
* [rabbit.js](https://github.com/squaremo/rabbit.js) — Idiomatic messaging using RabbitMQ from node.js
* [rabbitmq-nodejs-client](https://github.com/adrai/rabbitmq-nodejs-client) — rabbitmq client for node.js
* [websocket.MQ](https://github.com/networkimprov/websocket.MQ) — Reliable message queue server accessible via websockets, socket.IO, etc
* [Wormhole](https://github.com/aikar/wormhole) — Fast/High Performance message queue system using streaming deserialization with the MessagePack format
* [node-amqp-rpc](http://demchenkoe.github.io/node-amqp-rpc/) Easy to use RabbitMQ driver with round-robin and broadcast remote procedure calls
* [node-celery](https://github.com/mher/node-celery) — [Celery](http://www.celeryproject.org/) client for Node.js
* [redis-convoy](https://github.com/gosquared/convoy) - Redis-powered unique job queueing
* [thoonk](https://github.com/andyet/thoonk.js) - Persistent (and fast!) push feeds, queues, and jobs leveraging Redis.

<a name="wiki-class-system"></a>
## [Class systems](#class-system)

* [jTypes](https://github.com/gaulinsoft/jtypes) — Scalable class-based JavaScript.
* [Bike](https://github.com/gabrieleds/bike) — Class system to organize namespaces, define, create, extend, mixin, super inheritance and more.
* [class-js](https://github.com/bnoguchi/class-js) — Simple, Light-weight OO Class factory
* [comb](https://github.com/Pollenware/comb) — Library with a built in OO class system, and other features(datastructures, array string and date utilities, etc..).
* [ease.js](https://github.com/mikegerwitz/easejs) — Classical Object-Oriented framework for JavaScript
* [joose](https://github.com/joose/joose) — complete modern class system for JavaScript, based on concepts from many programming languages
* [mootools.js](https://github.com/stanislavfeldman/mootools.js) — MooTools latest server library as npm package for node.js
* [N-Ext](https://github.com/xcambar/n-ext) — Use the power of the Ext.data packages (from the ExtJS framework) in your NodeJS apps. Includes a MongoDB proxy based on [node-mongodb-native](https://github.com/xcambar/n-ext/node-mongodb-native))
* [node-interface](https://github.com/agutoli/node-interface) — Interface that defines the signature of the methods that must be implemented.
* [Sslac](https://github.com/jakobo/sslac) — Basic OOP-like support in JavaScript using chaining. Supports extension, interfaces, namespacing, and static objects.
* [Structr](https://github.com/crcn/structr) — Library built to give JavaScript the same look and feel as other popular languages such as Java.
* [UberClass](https://github.com/daffl/uberclass) — A class framework based on John Resig's Simple JavaScript inheritance and JavaScriptMVC $.Class.
* [UberProto](http://daffl.github.com/uberproto) — JavaScript object inheritance sugar: Initialization methods, easy extension, mixins, super methods, proxies
* [node-class](https://github.com/llafuente/class) - OO Class with support for: static, extends, abstract, final, hide properties, serialization etc. and a proper typeof, instanceof. ES5 required.

<a name="wiki-testing"></a>
## [Testing / Spec Frameworks](#testing)

* [API Easy](http://flatiron.github.com/api-easy/) — Fluent (chainable) syntax for generating Vows tests against any RESTful API.
* [benchmark-pages](https://github.com/penartur/node-benchmark-pages) — A benchmarking library for your web service that measures page response time under different loads.
* [Benchmark.js](https://github.com/bestiejs/benchmark.js) — A benchmarking library that works on nearly all JavaScript platforms, supports high-resolution timers, and returns statistically significant results.
* [Broke](https://github.com/zyndiecate/broke) — Customizable vowsjs layer for flexible unit and integration tests.
* [cases](https://github.com/goloroden/cases) — cases provides parameterized unit tests for Mocha.
* [Charlatan](https://github.com/nodeca/charlatan) — Fake user identities generator, with multilanguage support (names, email, addresses, phones and others).
* [Ciao](https://github.com/missinglink/ciao) — Simple and fast command line utility for async testing http(s) requests and generating API documentation.
* [Cucumber](https://github.com/cucumber/cucumber-js) — The official JavaScript implementation of the well-known BDD tool. Runs both on Node.js and browsers.
* [cucumis](https://github.com/noblesamurai/cucumis) — A [cucumber nodejs](https://github.com/noblesamurai/cucumis) implementation. Run plain text gherkin stories with full asynchronous support in native node.js JavaScript.
* [Cup of Tea?](https://github.com/refractalize/cupoftea) — BBD-style Unit Testing for Async apps.
* [databasecleaner](https://github.com/emerleite/node-database-cleaner) — Clean your database after each test. Supports MongoDB, Redis and CouchDB. Will support MySQL and others.
* [datagen](http://github.com/cliffano/datagen) - Multi-process test data files generator
* [dokimon](https://github.com/victorjonsson/nodejs-dokimon) — A nodejs module used to setup automated tests of various kinds.
* [ensure](https://github.com/dscape/ensure) — nodejs testing made easy with vows or node-tap
* [espionage](https://github.com/smtlaissezfaire/espionage) — A mock/stub framework using the test spy pattern.
* [exemplor.js](https://github.com/chrislloyd/exemplor.js) — A port of [exemplor](https://github.com/quackingduck/exemplor) with Node goodness.
* [expresso](https://github.com/visionmedia/expresso) — TDD framework by the author of [JSpec](http://jspec.info)
* [fake-fs](https://github.com/eldargab/node-fake-fs) — Fake file system for testing
* [fakeredis](https://github.com/hdachev/fakeredis) — Simulated Redis instances, so that you can run any number of redis-dependent tests in parallel.
* [fakeweb](https://github.com/ctide/fakeweb) — A port of [fakeweb](https://github.com/chrisk/fakeweb) that fakes out requests made via Mikeal's request module, or the standard HTTP module.
* [foounit](https://github.com/foobarfighter/foounit) — client/server side BDD testing framework
* [Gently](https://github.com/felixge/node-gently) — A node.js module that helps with mocking and behavior verification.
* [Gerbil](https://github.com/elcuervo/gerbil) — Gerbil attemps to be an uber simple and minimalistic testing framework for javascript.
* [gherkin](https://github.com/cucumber/gherkin) — A fast Gherkin parser in Ragel (The parser behind Cucumber)
* [grover](https://github.com/davglass/grover) — PhantomJS/YUITest CLI test runner.
* [horaa](https://github.com/arunoda/horaa) — Mocking NodeJS Modules
* [httpmock](https://github.com/bbyars/httpmock) — A RESTful web API for stubbing out network dependencies.
* [intent.js](https://github.com/goloroden/intent.js) — Functional testing for Node.js and the browser.
* [jasmine-jquery](https://github.com/dkastner/node-jasmine-jquery) — jQuery matchers and fixture loader for Jasmine framework for node forked from [Jasmine-Jquery](https://github.com/velesin/jasmine-jquery)
* [jasmine-node](https://github.com/mhevery/jasmine-node) — integration with [Pivotal's Jasmine Spec](https://github.com/pivotal/jasmine) framework
* [jessie](https://github.com/futuresimple/jessie) — Node runner for Jasmine JavaScript BDD testing framework
* [Jody](https://github.com/garrensmith/Jody) — A descriptive BDD Testing framework
* [jspec](https://github.com/visionmedia/jspec) — Feature Rich BDD Testing Framework (no longer supported)
* [JUTE](https://github.com/zzo/JUTE) — A JS testing environment with built in code coverage support for Capture/Selenium/V8 backends
* [kin](https://github.com/groupdock/kin) - Object creator using blueprints
* [kyuri](https://github.com/nodejitsu/kyuri) — A node.js cucumber implementation with a few extra asynchronous keywords. supports 160+ languages and exports to VowsJS stubs
* [maryjane](https://github.com/dhasenan/maryjane/) — Mock object library inspired by Mockito
* [minitest.js](https://github.com/botanicus/minitest.js) — Light-weight & simple testing framework designed specially for testing asynchronous code.
* [mjsunit.runner](https://github.com/tmpvar/mjsunit.runner) — Command line mjsunit runner which provides an easy way to hook into mjsunit and start running tests immediately.
* [mocha-cakes](https://github.com/quangv/mocha-cakes) — BDD mocha test framework add-on, stories with Cucumber style Given/When/Then syntax for Node.js
* [mocha](https://github.com/visionmedia/mocha) — simple, flexible, fun javascript test framework for node.js & the browser
* [mockery](https://github.com/mfncooper/mockery) — Simplifying the use of mocks with Node.js
* [nock](https://github.com/pgte/nock) — HTTP mocking and expectations library.
* [node-assert-extras](http://gitorious.org/node-assert-extras) — Additional high level asserts
* [node-assertthat](https://github.com/goloroden/node-assertthat) — Provides a fluent TDD style for Node.js: assert.that(actual, is.equalTo(expected));
* [node-async-testing](http://bentomas.github.com/node-async-testing/) — Simple, fast, extendable unit testing.
* [node-qunit](https://github.com/kof/node-qunit) — QUnit port for nodejs. Very simple API, async testing, good tested testing framework.
* [node-replay](https://github.com/assaf/node-replay) — When API testing slows you down: record and replay HTTP responses like a boss.
* [node-stories](https://github.com/tobiassvn/node-stories) — Given/When/Then integration awesomeness for Node.
* [node-testy](https://github.com/leetreveil/node-testy) — Super simple testing script. No added sugar. 100~ LOC.
* [nodemock](https://github.com/arunoda/nodemock) — Simple Yet Powerful Mocking Framework for NodeJs
* [nodeunit](https://github.com/caolan/nodeunit) — Simple syntax, powerful tools. Based on the assert module. Available for node.js and the browser!
* [patr](https://github.com/kriszyp/patr) — Promise-based asynchronous test runner: lightweight & simple.
* [pit](https://github.com/akaspin/pit) — Simple drop-in test runner with optional control tools
* [platoon](https://github.com/chrisdickinson/platoon) — A javascript testing framework whose goals are to work gracefully with callbacks, both in node.js and the browser
* [pretendr](https://github.com/nathanmacinnes/pretendr) — Yet another mocking function. Simple and lightweight, it lets you mock objects just by passing them as a single argument.
* [reut](https://github.com/5long/reut) — Heavyweight unit testing framework.
* [should](https://github.com/visionmedia/should.js) — expressive test framework agnostic BDD-style assertions
* [sinon](https://github.com/cjohansen/sinon.js) — JavaScript test spies, stubs and mocks for Node.js and the browser
* [soda-runner](https://github.com/doug-martin/soda-runner) — Provides a command line interface, runner, and selenium ide adapter for for soda.
* [Soda](https://github.com/LearnBoost/soda) — Selenium Node.JS adapter
* [spectacular](https://github.com/jcrosby/spectacular) — for testing
* [speculum](https://github.com/edwardhotchkiss/speculum) — BDD Test Suite.
* [speedy](https://github.com/gagle/node-speedy) — Tiny benchmark utility.
* [Speks](https://github.com/ecavazos/speks) — A specification framework for your node-code
* [stage](https://github.com/jfd/stage) — Distributed testing suite
* [stest](https://github.com/siddMahen/stest) — A sane event driven async testing framework.
* [supertest](https://github.com/visionmedia/supertest) — HTTP test utility built on top of superagent, works with any test framework
* [Syringe](https://github.com/easternbloc/Syringe) — Dependency mocking for node modules
* [tbd](https://github.com/aaronpowell/tbd) — A data generator for tests & UI stubbing
* [testing](https://github.com/alexfernandez/testing) — Very simple (~80 lines of code) asynchronous testing library, ideal for starting projects and easy to retrofit into existing code.
* [TestIt](http://github.com/DouglasMeyer/test_it) — Light-weight yet complete, shoulda style testing framework for in-browser and node.js tests.
* [TestNode](http://github.com/testnode/testnode) — Unobtrusive BDD-style testing framework
* [testosterone](https://github.com/masylum/testosterone) — Virile testing for http servers or any nodejs application.
* [Tobi](https://github.com/LearnBoost/tobi) — Expressive server-side functional testing with jQuery.
* [twerp](https://github.com/philjackson/twerp) — Simple test framework which is suited to Coffeescript users. Synchronous, simple and easy.
* [Unit.js](https://github.com/unitjs/unit.js) — Intuitive and flexible unit testing framework, can be used with any other testing framework (Mocha, Jasmine, ...).
* [uubench](https://github.com/akdubya/uubench) — A tiny asynchronous JavaScript benchmarking library
* [vbench](https://github.com/visionmedia/vbench) — tiny visual benchmarking library powered by uubench and node-canvas
* [Vows](https://github.com/cloudhead/vows) — asynchronous behaviour-driven development for node.js
* [whiskey](https://github.com/cloudkick/whiskey) — A simple test runner for NodeJS applications.
* [yeti](https://github.com/yui/yeti) — The YUI Easy Testing Interface: run browser JS unit tests from the command line!
* [zap](https://github.com/nornagon/node-zap) — a tiny testing tool for node.js
* [zombie.js](https://github.com/assaf/zombie) — Insanely fast, full-stack, headless testing using node.js

<a name="wiki-dependency-injection"></a>
## [Dependency Injection tools](#dependency-injection)

* [Noder.io](https://github.com/noder-io/noder.io) — Simple and powerful dependency injection container for node.js
* [Coffee-Injector](https://github.com/Ezku/coffee-injector) — An asynchronous dependency injection container written in coffeescript.
* [easy-app](https://github.com/eldargab/easy-app) — Simple and powerful javascript-ish container
* [rewire](https://github.com/jhnns/rewire) — Dependency injection for node.js applications
* [dependable](https://github.com/idottv/dependable) - Automatic dependency resolution without tweaking require
* [dips](https://github.com/devcrust/node-dips) - A simple yet powerfull dependency injection and entity (file) management framework for Node.js
* [Medic Injector](https://github.com/DrBenton/Medic-Injector-JS) - A light-weight Javascript Dependency Injection tool, strongly inspired by the great ActionScript3 [RobotLegs](http://www.robotlegs.org/) framework and it SwiftSuspenders IoC container
* [minioc](https://github.com/flitbit/minioc) - A miniature, conventions-based IoC container supporting dependency injection for factories and constructors.
* [inverted](https://github.com/philmander/inverted) Inversion of Control container

<a name="wiki-wrappers"></a>
## [Wrappers](#wrappers)

* [cloudshift-hx-node](https://github.com/cloudshift/hx-node) — Haxe wrappers for node
* [cloudshift](https://github.com/cloudshift/cloudshift) — A Haxe Stack for Node.js
* [dionjwa-nodejs_externs](https://github.com/dionjwa/nodejs_externs) — A collection of Node.js module externs for Haxe
* [git-wrapper](https://github.com/pvorb/node-git-wrapper) — A wrapper around the git executable.
* [java](https://github.com/nearinfinity/node-java) — Bridge API to connect with existing Java APIs
* [jmx](http://onddo.github.io/node-jmx) — Bridge library to communicate with java applications through JMX
* [msfnode](https://github.com/eviltik/msfnode) — Metasploit client, using http rpc calls throught webservices offered by msfrpcd
* [node-tidy](https://github.com/leondealmeida/node-tidy) — a simple wrapper for tidy
* [ping-wrapper2](https://github.com/sebmck/ping-wrapper) — native unix wrapper for ping
* [sm.js](https://github.com/dherman/sm.js) — run a SpiderMonkey shell as a node child process
* [traceroute-wrapper](https://github.com/sebmck/traceroute-wrapper) — native unix wrapper for traceroute

<a name="wiki-parsers"></a>
## [Parsers](#parsers)

<a name="wiki-parsers-json"></a>
### [JSON](#parsers-json)

* [Amanda](https://github.com/Baggz/Amanda) — JSON Schema validator
* [benejson](https://github.com/codehero/benejson) — Includes pure JavaScript incremental JSON parser
* [json-diff](https://github.com/andreyvit/json-diff) — structured colored diff for JSON files
* [json-streams](http://github.com/floby/node-json-streams) — Streamed JSON parser and stringifier
* [JSON.js](http://www.json.org/js.html) — easy to use but synchronous, built-in to V8 (no need to @require@)
* [json2json](https://github.com/joelvh/json2json) — Transform (reformat) JSON from one structure to another using JavaScript
* [jsonsp](https://github.com/jaredhanson/node-jsonsp) — JSON stream parser for Node.js.
* [node-yajl](http://github.com/vibornoff/node-yajl) — SAX-like evented JSON stream parser using [yajl](http://lloyd.github.com/yajl) version 2 (fork of [yajl-js](http://bitbucket.org/nikhilm/yajl-js))
* [props](https://github.com/pvorb/node-props) — Parse json or yaml from the beginning of text files.
* [yajl-js](http://bitbucket.org/nikhilm/yajl-js) — SAX-like evented JSON parsing using [yajl](http://lloyd.github.com/yajl)
* [jsvutil](https://github.com/fhellwig/jsvutil) - A Node.js utility wrapper for the JSON Schema Validator (JSV).
* [js-schema](https://github.com/molnarg/js-schema/) - Simple and intuitive schema validator
* [typing-js](https://github.com/weidagang/typing-js) - Expressive type checker and JSON schema validator

<a name="wiki-parsers-xml"></a>
### [XML](#parsers-xml)

* [dom-js](https://github.com/teknopaul/dom-js) — A pure JS XML DOM based on sax-js
* [libxml-to-js](https://github.com/SaltwaterC/libxml-to-js) — XML to JavaScript object converter based on libxmljs.
* [libxmljs-easy](https://github.com/vgrichina/libxmljs-easy) — Work with libmxmljs DOM as with plain Javascript objects, similar to E4X
* [libxmljs](https://github.com/polotek/libxmljs) — Bindings to libxml2
* [libxsltjs](https://github.com/RobeeeJay/libxsltjs) — Bindings to libxslt for XSLT transformations on XML documents
* [node-expat](https://github.com/astro/node-expat) — Fast SAX parser binding to expat
* [node-expat](https://github.com/shimondoodkin/node-expat) — a fork of Fast SAX parser binding to expat, also includes XML to JavaScript object converter
* [node-halfstreamxml](https://github.com/thejh/node-halfstreamxml) — sax-js based, filter out nodes (with attributes and child nodes) from an xml stream by name
* [node-o3-fastxml](https://github.com/ajaxorg/node-o3-fastxml) — W3C Standards based XML DOM based on fastest xml parser in the world pugiXML
* [node-o3-xml](https://github.com/ajaxorg/node-o3-xml) — W3C Standard based XML DOM with XPath and namespaces. Built on libxml2
* [node-plist](https://github.com/TooTallNate/node-plist) — Apple Plist parser for NodeJS. Convert a Plist file or string into a native JS object.
* [node-xml](https://github.com/robrighter/node-xml) — An xml parser for node.js. (The github page for this module is showing some severe performance issues. Not recommended as an "out of the box" solution.)
* [node-xml2js](https://github.com/Leonidas-from-XIV/node-xml2js/) — Simple XML to JavaScript object converter.
* [sax-js](https://github.com/isaacs/sax-js) — SAX-like parser in pure JS
  * [node-xml2object](https://github.com/emberfeather/node-xml2object) — Simple SAX.js based xml element to object converter.
* [xml-events](https://github.com/idottv/xml-events) — XML stream parser, based on node-expat. Fires contextual events when it finds a descendant.
* [xml-object-stream](https://github.com/idottv/xml-object-stream) — Low-memory streaming xml parser for node.js. Returns each node as an object. Uses node-expat
* [xml-stream](https://github.com/assistunion/xml-stream) — XML stream parser and editor, based on node-expat.
* [xml2json](https://github.com/buglabs/node-xml2json) — Simple SAX based XML to JSON parser. It uses node-expat.
* [xmldom](https://github.com/jindw/xmldom) — A PURE JS W3C Standard based DOMParser and XMLSerializer (DOM Level2 CORE).
* [xml-crypto](https://github.com/yaronn/xml-crypto) — Xml digital signature and encryption library for Node.js - written in pure javascript.
* [xml-digester](https://github.com/vrvolle/xml-digester) — Yet another Xml-to-Javascript converter - that can easily be extended (e.g. allows to preserve the sequence of nodes).
* [saxpath](https://github.com/StevenLooman/saxpath) - Pure-JS XPath evaluator using a SAX parser.

<a name="wiki-parsers-html"></a>
### [HTML](#parsers-html)

* [apricot](https://github.com/silentrob/Apricot) — Hpricot inspired clone, JSDom with Sizzle Selector engine and XUI for HTML augmentation
* [cheerio](https://github.com/MatthewMueller/cheerio) — jQuery-alike interface for server-side HTML parsing and processing.
* [node-htmlparser](https://github.com/tautologistics/node-htmlparser) — Forgiving HTML Parser in JS for both Node and browsers.
* [picksy](https://github.com/skid/picksy) — Extracts the relevant text from a HTML article page.
* [parse5](https://github.com/inikulin/parse5) - Fast HTML5 specification compliant parser.

<a name="wiki-parsers-csv"></a>
### [CSV](#parsers-csv)

* [node-csv-parser](https://github.com/wdavidw/node-csv-parser) — Full featured CSV parser with simple api and tested against large datasets.
* [node-csv](https://github.com/voodootikigod/node-csv) — Efficient Evented CSV Parsing.
* [ya-csv](https://github.com/koles/ya-csv) — Evented CSV parser and writer with configurable separator, escape and quote characters.

<a name="wiki-parsers-yaml"></a>
### [YAML](#parsers-yaml)

* [JS-YAML](https://github.com/nodeca/js-yaml) — Very fast, full featured YAML 1.2 parser & writer.
* [props](https://github.com/pvorb/node-props) — Parse json or yaml from the beginning of text files.
* [yamlish](https://github.com/isaacs/yamlish) — Minimally featured YAML parser which handles the subset of YAML used by TAP.
* [yamlparser](https://github.com/h4evr/commonjs-javascript-yaml-parser) — A JavaScript YAML parser.
* [yamlprompt](https://github.com/pvorb/node-yamlprompt) — A prompt that asks for YAML input. Depends on yamlparser.

<a name="wiki-parsers-commandline"></a>
### [Command line option parsers](#parsers-commandline)

* [aparser](https://github.com/thypon/aparser) — Async ARGS parser
* [argchecker](https://github.com/tasogarepg/argchecker) — A command line options parser for node.js.
* [argp](https://github.com/gagle/node-argp) — Command-line option parser.
* [argparse](https://github.com/nodeca/argparse) — One of the most featured & flexible parser. Direct port of python's argparse module
* [argsparser](https://github.com/kof/node-argsparser) — A tiny limited arguments parser, returns a hash.
* [argumentr](https://github.com/pgundlach/argumentr) — simple to use but powerful argument parser with free `--help`
* [celeri.js](https://github.com/crcn/celeri) — Complete command line interfaces lib for node.js
* [cli](https://github.com/chriso/cli) — Rapidly build command line apps. Full featured opts/args parser + plugin support
* [COA](https://github.com/veged/coa/) — Command-Option-Argument: full featured command line parsing, async all the way, use user defined COA's as module with API, auto generate shells completions
* [commander.js](https://github.com/visionmedia/commander.js) — The complete solution for nodejs command-line interfaces
* [dreamopt](https://github.com/andreyvit/dreamopt.js) — Command-line parser with readable syntax from your sweetest dreams
* [jedediah](https://github.com/michaelficarra/jedediah) - CLI option parser that behaves as one would expect
* [js-opts](http://www.bitbucket.org/mazzarelli/js-opts/) — Another simple command line option parser, easily installed via NPM
* [mingy](https://github.com/mcantelon/node-mingy) — Command parser for CLI tool and adventure game needs. Works well with the optimist module.
* [node-named-argv](https://github.com/ecdeveloper/node-named-argv) - Simple module for passing named parameters to node app.
* [node-arguments](https://github.com/fczuardi/node-arguments) — Yet another simple command line option parser
* [node-getopt](https://github.com/jiangmiao/node-getopt) - Featured command line options parser.
* [nomnom](https://github.com/harthur/nomnom) — Option parser with generated usage, support for callbacks and commands.
* [nopt](https://github.com/isaacs/nopt) — The command line options parser npm uses.
* [Operetta](https://github.com/tricknik/node-operetta) — A Node Option Parser That Sings!
* [optimist](https://github.com/substack/node-optimist) — Light-weight option parsing without optstrings or any of that silliness. It's just a hash!
* [optparse-js](https://github.com/jfd/optparse-js/tree/master) — Option Parser in JS
* [parseopt](http://bitbucket.org/panzi/javascript-utils/src/tip/parseopt/) — Flexible and extensible option parser in JavaScript.
* [shotgun](https://github.com/Chevex/shotgun) - UI agnostic command shell with command module development API. Extremely simple and easy to setup.
* [tav](https://github.com/akaspin/tav) — Brain-free command-line options parser for node.js
* [yanop](https://github.com/frodwith/yanop) — Yet Another Node Option Parser

<a name="wiki-parsers-markdown"></a>
### [Markdown parsers](#parsers-markdown)

* [marked](https://github.com/chjj/marked) - A markdown parser and compiler. Built for speed.
* [node-discount](https://github.com/visionmedia/node-discount) — C markdown parser "discount" bindings
* [node-markdown](https://github.com/andris9/node-markdown) — Easy to use Markdown parser
* [Robotskirt](https://github.com/benmills/robotskirt) — A simple node binding for the [sundown](https://github.com/tanoku/sundown) markdown parser
* [showdown](https://github.com/coreyti/showdown)

<a name="wiki-parsers-binary"></a>
### [Binary file parsers](#parsers-binary)

* [bop](https://github.com/rootslab/bop) — Bop is a very fast Boyer-Moore parser for string or buffer patterns. It is optimized for using with pattern lengths <= 255 bytes.
* [bufferlist](https://github.com/substack/node-bufferlist) — Create linked lists of buffers and asynchronously parse binary data from these lists
* [butter](https://github.com/rootslab/butter) — Butter === nodeJS Buffer + ( some hexadecimals delights )
* [epub](https://github.com/andris9/epub) — Parse EPUB electronic book files with Node.JS, load chapters, images etc.
* [jParser](https://github.com/vjeux/jParser) — Generates parsers for arbitrary data structures, parses binary files.
* [jspack](https://github.com/pgriess/node-jspack) — JavaScript library to pack ints, floats, etc. to octet arrays representing C data structures
* [musicmetadata](https://github.com/leetreveil/node-musicmetadata) — Get music metadata asynchronously from node streams.
* [protobuf_for_node](http://code.google.com/p/protobuf-for-node/) — [Protocol buffer](https://developers.google.com/protocol-buffers/docs/overview) parsing and serialization.
* [protobuf](https://github.com/chrisdew/protobuf/) — A fork of protobuf_for_node with an npm package.
* [qap](https://github.com/rootslab/qap) — Qap is a quick parser for string or buffer patterns ( optimized for pattern lengths <= 255 bytes ).
* [reified](https://github.com/Benvie/reified) — JS Binary Data API. Structs, arrays, bitfields, and data. Reify and Reference like nobody's business.
* [strtok](https://github.com/pgriess/node-strtok) — A streaming tokenizer library for binary data
* [struct](https://github.com/xdenser/node-struct) — Parse/format binary data in buffers.

<a name="wiki-parsers-office"></a>
### [Office file parsers](#parsers-office)

* [node-office](https://github.com/dkiyatkin/node-office) — Parse office documents (odt, doc, docx, ods, xls, etc..) (unoconv, xlhtml)
* [node_spreadsheet](https://github.com/shimondoodkin/node_spreadsheet) — Read xls,xlsx,ods,csv spreadsheets (php based)
* [xls](https://github.com/Niggler/js-xls) — Read XLS spreadsheets (pure JS)
* [xlsx](https://github.com/Niggler/js-xlsx) — Read XLSX spreadsheets (pure JS)

<a name="wiki-parsers-feed"></a>
### [Feed and RDF parsers](#parsers-feed)

* [feed-tables](https://github.com/tomvit/Feed-Tables) — a lightweight parser for Google Spreadsheet tables available as cells or list atom feeds.
* [feedme.js](https://github.com/fent/feedme.js) — RSS/Atom/JSON feed parser with streaming capabilities.
* [feedparser](https://github.com/danmactough/node-feedparser) — RSS, Atom, and RDF feed parsing in Node.js
* [NodePie](https://github.com/andris9/NodePie) — Simple RSS/Atom parser for Node.JS
* [rdf2json](https://github.com/baxtree/node-rdf2json) — A simple RDF/XML to JSON converter
* [VIE](https://github.com/bergie/VIE) — RDFa parsing in Node.js

<a name="wiki-parsers-ini"></a>
### [.INI file parsers](#parsers-ini)

* [iniparser](https://github.com/shockie/node-iniparser) — a simple .ini parser
* [inireader](https://github.com/Ajnasz/IniReader) — .ini file parser
* [node-ini](https://github.com/PastorBones/node-ini) — A simple .ini config parser that supports sections, comments, arrays, and objects.
* [node-browscap](https://github.com/dangrossman/node-browscap) — browscap.ini parser and port of PHP's get_browser function

<a name="wiki-parser-generators"></a>
### [Parser generators](#parser-generators)

* [2kenizer](https://github.com/elmerbulthuis/2kenizer) — It streams, it caches and it's simple, it matches RegExp's and strings.
* [bnf](https://github.com/navstev0/nodebnf) — BNF parser, compiler, and interpreter framework.
* [canopy](https://github.com/jcoglan/canopy) — PEG parser compiler for JavaScript.
* [jison](https://github.com/zaach/jison) — A parser generator written in JavaScript; similar to Bison for C.
* [jparse](https://github.com/doublec/jsparse) — A parser combinator for JavaScript based on Packrat parsers and Parsing expression grammars.
* [JSCC-NODE](http://github.com/badlee/JSCC-NODE) — The Best and The first parser generator written in JavaScript; Use a regular expression-based lexical analyzer generator and a LALR parser generator for building a stand-alone, working parser.
* [language.js](http://languagejs.com/) — A fast PEG parser generator with first class errors and reasonable sized output.
* [OMeta JavaScript compiler](http://tinlizzie.org/ometa-js/#JavaScript_Compiler)
* [PanPG](http://boshi.inimino.org/3box/PanPG/about.html) — A PEG Packrat Parser Generator for JavaScript.
* [parser](http://github.com/floby/node-parser) — A general purpose parser that feeds on tokens (see [tokenizer](http://github.com/floby/node-tokenizer)).
* [PEG.js](http://pegjs.majda.cz/) — Parser Generator for JavaScript.
* [ReParse](https://github.com/weaver/ReParse) — A parser combinator library for JavaScript like Haskell's Parsec.
* [tokenizer](http://github.com/floby/node-tokenizer) — A regex-based and streamed tokenizer.
* [Peasy](http://github.com/chaosim/peasy) — An easy but powerful parser, a new method to write parser.

<a name="wiki-parsers-other"></a>
### [Other parsers](#parsers-other)

* [argtypes](https://github.com/cwolves/argtypes) — Function arguments type parser (Allows typed & optional arguments)
* [JsCron](https://github.com/romansky/JsCron) — Javascript cron parser, schedule date generator
* [carrier](https://github.com/pgte/carrier) — Evented stream line reader for node.js
* [fastcgi-parser](https://github.com/billywhizz/node-fastcgi-parser) — FastCGI protocol parser and Writer
* [glossy](https://github.com/squeeks/glossy) — Syslog message parser and producer
* [groan](https://github.com/mscdex/groan) — A PHP session file parser
* [JSML](https://github.com/pvorb/jsml) — Appendable sequences of JSON documents
* [mailparser](https://github.com/andris9/mailparser) — Parse mime encoded e-mails into structured objects
* [memcache-parser](https://github.com/billywhizz/node-memcache-parser) — Memcached binary protocol parser
* [node-brainfuck](https://github.com/masylum/node-brainfuck) — Brainfuck interpreter
* [node-formidable](https://github.com/felixge/node-formidable) — A node.js module for parsing form data, especially file uploads.
* [node-msgpack](https://github.com/pgriess/node-msgpack) — Bindings for MessagePack, space-efficient object serialization library
* [node-netstring](https://github.com/pgriess/node-netstring) — Read and write [netstrings](http://cr.yp.to/proto/netstrings.txt)
* [node-opds-parser](https://github.com/musubu/node-opds-parser) — OPDS Catalog Feed Parser for node.
* [node-opmlparser](https://github.com/danmactough/node-opmlparser) — OPML parsing in Node.js
* [node-properties-parser](https://github.com/Xavi-/node-properties-parser) — A parser for `.properties` files written in javascript.
* [node-rfb](https://github.com/substack/node-rfb) — Parse the RFB protocol used by VNC
* [node-tldtools](https://github.com/mjpearson/node-tldtools) — Provides domain enquiry features, whois, TLD token extraction etc.
* [node-useragent](https://github.com/3rd-Eden/useragent) — User agent string parser with accurate browser versioning and grouping
* [omcc](https://github.com/tristanls/ometa-js-node) — A command line tool for Alessandro Warth's OMetaJS
* [ometa-js](https://github.com/bmavity/ometa-js) , [ometajs](https://github.com/veged/ometa-js) — A JavaScript OMeta implementation
* [parser_email](https://github.com/jrgns/parser_email) — Simple multi type email parser
* [pcap-parser](https://github.com/nearinfinity/node-pcap-parser) — Packet capture (pcap) file parser written in pure javascript
* [pdc](https://github.com/pvorb/node-pandoc) — A [pandoc](http://johnmacfarlane.net/pandoc/) wrapper for node.
* [Platform.js](https://github.com/bestiejs/platform.js/) — A platform detection and user agent parsing library that works on nearly all JavaScript platforms
* [properties](https://github.com/gagle/node-properties) — .properties parser/stringifier.
* [querystring.node.js](https://github.com/jazzychad/querystring.node.js) — Robust query string parsing for node.
* [ret.js](https://github.com/fent/ret.js) — A regexp tokenizer.
* [semver](https://github.com/isaacs/node-semver) — Parser used by npm for version numbers.
* [service-parser](https://github.com/sebmck/service-parser) — /etc/services file parser.
* [simteconf](https://github.com/Mithgol/simteconf) — a synchronous reader of simple text configuration files.
* [space](https://github.com/nudgepad/space) — Parser for Space, a whitespace encoding for associative arrays.
* [strscan](https://github.com/sstephenson/strscan-js) — Simple string tokenizer for lexical scanning operations
* [tap](https://github.com/isaacs/node-tap) — Tools for the [Test Anything Protocol](http://testanything.org/)
* [tldextract](https://github.com/masylum/tldextract) — Extract domain, subdomain and tld from a url.
* [UglifyJS](https://github.com/mishoo/UglifyJS) — JavaScript parser and compressor/beautifier

<a name="wiki-filesys"></a>
## [File system](#filesys)

* [binary-reader](https://github.com/gagle/node-binary-reader) — Buffered binary reader with a fluent api.
* [diskspace.js](https://github.com/keverw/diskspace.js) — A simple module to check disk space usages in bytes.
* [mass_hfs](https://github.com/RubyLouvre/hfs) — height level file system, can simultaneously operate of the directories and files, multi-stage creating folders……
* [fs-extra](https://github.com/jprichardson/node-fs-extra) — Patches the Node.js `fs` object with a couple of extra methods (a method to copy a file and a method to delete a directory recursively), both sync and async versions.
* [fstream](https://github.com/isaacs/fstream) — High-level objects like FS streams, but with stat on them, and supporting directories and symbolic links, as well as normal files. Also, you can use this to set the stats on a file, even if you don't change its contents, or to create a symlink, etc.
* [fsutil](https://github.com/npcode/node-fsutil) and [fsautil](https://github.com/npcode/node-fsautil) — Synchronous and asynchronous file system utilities for Node.js.
* [hdfs](https://github.com/forward/node-hdfs) — JNI-implemented HDFS client allowing node.js applications to natively interoperate with the Hadoop FileSystem.
* [line-reader](https://github.com/nickewing/line-reader) — Asynchronous line-by-line file reader.
* [meta-fs](https://github.com/dvv/meta-fs) — Patches the Node.js `fs` object with methods that find files, delete directory trees, create nested directories, make symlinks, copy files and directories.
* [pathspec](https://github.com/andreyvit/pathspec.js) — Shell- and .gitignore/.npmignore-style wildcards and file lists
* [wrench](https://github.com/ryanmcgrath/wrench-js) — Recursive operations (create directory, delete directory, read contents, chmod, chown, deep copy). Line-by-line reader. Asynchronous read of directories contents.
* [qfs](https://github.com/tommy351/qfs) - File I/O in jQuery way
* [scopedfs](https://github.com/andreyvit/scopedfs) — A convenient API to build and access file system subtrees, particularly in tests; provides a version of every ‘fs’ module function scoped to the given root or, optionally, to a new temporary directory; also adds a bunch of convenience methods.
* [backup](https://github.com/petersirka/backup) - Easy Backup & Restore web site project. All files and directories are written to one file (and files are compressed via GZIP)

<a name="watching"></a>
### [Watching Files](#watching)
* [Chokidar](https://github.com/paulmillr/chokidar) - A neat wrapper around node.js fs.watch / fs.watchFile.
* [Monocle](https://github.com/samccone/monocle) - A tool for watching things
* [watch](https://github.com/mikeal/watch) - Utilities for watching file trees in node.js
* [watch-tree](https://github.com/tafa/node-watch-tree) - Yet another NodeJS library for watching FS trees

<a name="wiki-debugging-and-console"></a>
## [Debugging / console utilities](#debugging-and-console)

<a name="wiki-debugging"></a>
### [Debugging and profiling](#debugging)

* [autolint](https://github.com/magnars/autolint) — Autolint watches your files for jslint/jshint-errors.
* [debug](https://github.com/visionmedia/debug) — node core style debugging for your libraries and applications
* [Eclipse debugger plugin](http://code.google.com/p/chromedevtools/) — [[Using Eclipse as Node Applications Debugger]]
* [eyes.js](https://github.com/cloudhead/eyes.js) — A better, customizable value inspector for node.js
* [http-console](https://github.com/cloudhead/http-console) — A simple & intuitive HTTP console for testing APIs.
* [jsdev](https://github.com/yuest/jsdev) — a wrapper for Douglas's JSDev
* [monitor](https://github.com/lorenwest/node-monitor) — Runtime monitoring for node.js applications - npm install monitor
* [ndb](https://github.com/smtlaissezfaire/ndb) — traditional command line debugger (like gdb, ruby-debug, etc)
* [node_debug](https://github.com/Connorhd/node_debug/tree/master) — HTTP based console and object explorer
* [node-codein](https://github.com/ketamynx/node-codein) — browser based console and object explorer (stand-alone, no dependencies)
* [node-custom-debug](https://github.com/bobrik/node-custom-debug) — debugger on custom port on the fly, good addition for node-inspector to inspect many instances on the one server with ease
* [node-inspector](https://github.com/dannycoates/node-inspector) — browser based node debugger
* [Node-JavaScript-Preprocessor](https://github.com/mcoolin/Node-JavaScript-Preprocessor) — Preprocessor for JavaScript
* [node-profiler](https://github.com/bnoordhuis/node-profiler) — access the V8 profiler from node.js
* [node-webkit-agent](https://github.com/c4milo/node-webkit-agent) — WebKit devtools agent that leverages remote debugging and profiling of nodejs applications using built-in webkit devtools front-end.
* [nodetime](https://github.com/nodetime/nodetime) — Performance profiler and monitor for Node.js applications
* [profilejs](https://github.com/HerdHound/profilejs) — profiling middleware for use with node-inspector (profiles Express handlers)
* [Replica](https://github.com/zentooo/Replica) — Repl to exec JavaScript code on browser
* [spine](https://github.com/thrashaholic/spine) — Dynamic runtime monitoring for node.js applications inspired by lorenwest's monitor.
* [strack](https://github.com/selead/strack) — bug tracking/tickets system
* [UltraREPL](https://github.com/Benvie/Node.js-Ultra-REPL) — Replaces Node's built-in REPL with customizable keybindings, a significantly enhanced inspector with hidden/builtin/depth toggles, simultaneous independent V8 contexts, syntax highlighting, and a full-fledged plug-in system including CoffeeScript contexts, SpiderMonkey contexts, and more.
* [v8-profiler](https://github.com/dannycoates/v8-profiler) — v8 profiler bindings with node-inspector integration
* [webrepl](https://github.com/mmattozzi/webrepl) — Serve a repl for a node process via a simple web ui
* [jecho](https://github.com/claudioc/jecho) — Remote debugging command line client/server. Like Weinre, but without the GUI

<a name="wiki-logs"></a>
### [Logging and dumping](#logs)

* [ain](https://github.com/akaspin/ain) — Brain-free syslog logging
* [Caterpillar](https://github.com/bevry/caterpillar) — Caterpillar is an awesome, simple, intuitive console logger for node.js. It supports grouping of messages, filtering log levels, colors, times, modules, custom formatters and custom transports.
* [cfdump.js](https://github.com/figital/cfdump.js) — a more visually inspiring way to dump your objects to a browser
* [console-plus](https://github.com/itadakimasu/console-plus) — console logging with filenames and line numbers 
* [console-ten](https://github.com/mpalmerlee/console-ten) — console logging extension with prepended timestamps and log type
* [flume-rpc](https://github.com/recoset/node-flume-rpc) — A flume-compatible (RPC) logging source and sink
* [gelf-node](https://github.com/robertkowalski/gelf-node) - gelf-node is a full implementation for sending messages in GELF (Graylog Extended Log Format) from node.js to Graylog
* [hexy.js](https://github.com/a2800276/hexy.js) — hex pretty printing like xxd
* [inspect](https://github.com/visionmedia/inspect) — hierarchical object inspection displaying ancestry, properties, methods, and accessors in great detail.
* [jog](https://github.com/visionmedia/jog) — JSON-based logger with multiple stores, namespacing, CLI and more
* [little-logger](https://github.com/monsur/little-logger) - For adding simple logging to your project. Small footprint, no dependencies.
* [log.js](https://github.com/visionmedia/log.js) — light-weight logger that works with any writable stream, also supports a streaming parser for reading the log files generated
* [log4js-node](https://github.com/nomiddlename/log4js-node) — a port of log4js framework for node.js
* [logging](https://github.com/dylang/logging) — Super sexy color console logging.
* [logly](https://github.com/tristanls/logly) — A minimal logging utility to support verbose and debug modes with basic colors
* [logule](https://github.com/clux/logule) — A sexy portable logging utility using colors
* [nlogger](https://github.com/igo/nlogger) — Logging lib that can print also module names and line numbers, optionally in color
* [node-logentries](https://github.com/rjrodger/node-logentries) — A winston-compatible wrapper library for the logentries.com service
* [node-logging](https://github.com/HerdHound/node-logging) — Simple colorized logging for Node.js with request logger Express middleware (Note: 404 error on link.)
* [node-streamlogger](https://github.com/andrewvc/node-streamlogger) — Extensively customizable logging, with support for rotation
* [node-tick](https://github.com/sidorares/node-tick) — v8.log processor
* [NodeLog](https://github.com/FabianM/NodeLog) — Logging library for Node.js based on the java.util.logging library.
* [onelog](https://github.com/vjpr/onelog) - Logging consolidation library
* [nogg](https://github.com/jaekwon/nogg) — Simple file/stdio logging for node.js
* [rconsole](https://github.com/tblobaum/rconsole) — Syslog bindings, integrates with console
* [simple_logger](https://github.com/michelwooller/simple_logger) — It's a tasteful and lightweight Logger API, done for you  
* [spruce](https://github.com/MarkPNeyer/spruce) — configurable node.js logging module (Note: 404 error on link.)
* [stdjson](https://github.com/tristanls/stdjson) — Minimally logging JSON to stdout and stderr
* [tracer](https://github.com/baryon/tracer) — A powerful and customizable logging library for node.js. support color console with timestamp, line number, method name, file name and call stack. you can set transport to file, stream, database(ex: mongodb and clouddb, simpledb). keywords: log, logger, trace
* [underscore.logger](https://github.com/viatropos/underscore.logger) — Cross-browser and Node.js empowered logging that can be used as an Underscore mixin.
* [Windows Event Log Js](http://jfromaniello.github.com/windowseventlogjs/) — native Node.js module to log messages to the Microsoft Windows EventLog
* [Winston](https://github.com/flatiron/winston) — A multi-transport async logging library for node.js
* [PuperGrep](https://github.com/bobrik/pupergrep) - Real-time web view for your logs with hightlighting, grep and more.
* [stdlog](https://github.com/fhellwig/stdlog) - A Node.js log utility that logs messages to stderr by default.
* [blammo](https://github.com/StevenLooman/blammo) - A powerful NodeJS logger loosely based on Logback.

<a name="wiki-ansi"></a>
### [Console colors and other ANSI codes](#ansi)

* [ansi pansi](https://github.com/constantology/ansi-pansi) — basic ANSI formatting, foreground and background colours for use with CLI
* [ansi-font](https://github.com/Gozala/ansi-font) — ANSI font styling (background and foreground colours)
* [ansi.js](https://github.com/TooTallNate/ansi.js) — advanced ANSI formatting tool for Node.js
* [ansidiff](https://github.com/trentm/node-ansidiff) — a small node.js library for ANSI colored text diffs
* [ANSIdom](https://github.com/marak/ANSIdom) — a quick and dirty DOM implementation in ANSI escape codes
* [ansimator](https://github.com/jesusabdullah/ansimator) — simple animations onto the terminal with ANSI codes
* [ANSInception](https://github.com/DennisKehrig/ANSInception) — Colorful exception handler for Node.js with CoffeeScript support and improved nodemon/supervisor compatibility
* [ansiparse](https://github.com/mmalecki/ansiparse) — parses text with ANSI codes to an array of JavaScript objects
* [ansispan](https://github.com/mmalecki/ansispan) — changes ANSI color codes to HTML `<span>` elements with CSS color styles
* [charm](https://github.com/substack/node-charm) — use ansi terminal characters to write colors and cursor positions
* [cli-chart](https://github.com/andrewjstone/cli-chart) — creates pseudographic charts in Node console with ANSI-coloured blocks
* [cli-color](https://github.com/medikoo/cli-color) — colors and formatting for the console
* [colored.js](https://github.com/chrislloyd/colored.js) — Colorize terminal output.
* [colorize](https://github.com/mattpat/colorize) — Markup tool which uses English words to set text colours with ANSI codes.
* [colors.js](https://github.com/Marak/colors.js) — get colors in your node.js console like what
* [colour.js](https://github.com/dcodeIO/colour.js) — A cored, fixed, documented and optimized version of the popular colors.js.
* [colours.js](https://github.com/botanicus/colours.js) — Give your CLI programs some colours! (Does not support background colour manipulation.)
* [consolelog.js](https://github.com/jazzychad/consolelog.node.js) — stylized console logging for node.js
* [irc-colors.js](https://github.com/fent/irc-colors.js) — Color and formatting for irc bots made easy
* [kahve-ansi](https://github.com/jmalloc/kahve-ansi) — easy-mode insertion of ANSI colour codes
* [node-cli](https://github.com/SchizoDuckie/Node-CLI/) — cli.clear().move(20,20).color('green').write('Node-cli').down(1).back(7).color('yellow').write('Rocks!')
* [prettyjson](http://rafeca.com/prettyjson/) — Package for formatting JSON data in a coloured YAML-style, perfect for CLI output.
* [String ANSI](https://github.com/yuffster/npm-string-ansi) — extends the `String` prototype with the function `color`, which inserts ANSI color codes in place of color string names.
* [term-css](https://github.com/visionmedia/node-term-css) -- style terminal output using CSS
* [xcolor](https://github.com/cmoncrief/xcolor) — Extended colors and markup for the terminal, including CSS color names and Xterm-256 support.

<a name="wiki-other-console"></a>
### [Other console tools](#other-console)

* [easy-table](https://github.com/eldargab/easy-table) — Nice and simple text table for the cli
* [node-prompt](https://github.com/flatiron/prompt) (MOVED from - https://github.com/jesusabdullah/node-prompt) — Prompt the user for questions in cli!
* [nosh](https://github.com/openmason/nosh) - Shell with plugin capabilities. Comes with a REST http client commands that makes any API browser from command line simple.
* [Shell](https://github.com/wdavidw/node-shell) — Nice looking shell applications with pluggable middlewares

<a name="wiki-compression"></a>
## [Compression](#compression)

<a name="wiki-gzip"></a>
### [Gzip and zlib](#gzip)

* [connect-gzip](https://github.com/nateps/connect-gzip) — Gzip middleware for Connect. Contains middleware for gzipping and serving static files as well as gzipping responses dynamically.
* [gzip](https://github.com/indutny/node.gzip) — simple compression using default linux "gzip" utility
* [gzipme](https://github.com/caio-ribeiro-pereira/gzipme) — A simple Node.js module and CLI app which compress files to gzip.
* [node-compress](https://github.com/waveto/node-compress) — streaming compression / gzip library
   * [node-compress by egorich239](https://github.com/egorich239/node-compress) — asynchronous streaming (de)compression library with gzip and bzip2 support, originally forked from [waveto's](https://github.com/waveto/node-compress)
* [node-gzbz2](https://github.com/Woodya/node-gzbz2) — streaming compression / gzip / bzip2 library for node.js, originally forked from [waveto's](https://github.com/waveto/node-compress)
* [node-zlib-sync](https://github.com/ssuda/node-zlib-sync) — rfc1950/rfc1951/rfc1952 compress/uncompress (C++ around libzlib)
* [node-zlibstream](https://github.com/carsonmcdonald/node-zlibstream) — Streaming zlib library using zlib

<a name="wiki-zip"></a>
### [Zip](#zip)

* [node-zip](https://github.com/daraosn/node-zip) — zip/unzip support ported to Node.js from [JSZip](https://github.com/Stuk/jszip) (pure JavaScript, no C++)
* [node-zipfile](https://github.com/springmeyer/node-zipfile) — inspect and uncompress zipfile archives (C++ around libzip)
* [zip](https://github.com/kriskowal/zip) — .zip file unpacker (pure JavaScript, no C++)

<a name="wiki-compression-other"></a>
### [Other compression and minification](#compression-other)

* [crsh](https://github.com/qard/crsh) — merge and minify groups of js files and recompile when changes occur
* [lzma](https://github.com/nmrugg/LZMA-JS/) — A standalone JavaScript implementation of the Lempel-Ziv-Markov chain (LZMA) compression algorithm
* [lzw-async](https://github.com/hiddentao/lzw-async/) — Asynchronous Javascript implementation of Lempel-Ziv-Welch (LZW) compression algorithm
* [node-compress-buffer](https://github.com/egorfine/node-compress-buffer) — single-step Buffer compression library on top of zlib
* [node-lzf](https://github.com/Sonetica/node-lzf) - lzf compression library (C++ around liblzf)
* [node-snappy](https://github.com/kesla/node-snappy) — compression using Google's snappy library.
* [minify](https://github.com/coderaiser/minify) - minify of js, css, html and img files.
* [html-minifier](https://github.com/kangax/html-minifier) - html minifier
* [rarfile](https://github.com/sandy98/node-rarfile) - utility for decompressing .rar files

<a name="wiki-sound"></a>
## [Sound](#sound)

* [play](https://github.com/Marak/play.js) - play sound files from node.js to your speakers
* [node-sound](https://github.com/xk/node-sound) — The best sound library for Node (Only for MacOSX)
* [node-mpg123](https://github.com/maciek134/node-mpg123) - JS wrapper around mpg123.

<a name="wiki-chat"></a>
## [Chat](#chat)

* [chat.io](https://github.com/DanielBaulig/chat.io) — A simple chat solution build on socket.io

<a name="wiki-graphics"></a>
## [Graphics](#graphics)

* [ribs](https://github.com/ngryman/ribs) - Read, write, process and serve responsive images.
* [png-word](https://github.com/brighthas/png-word) - When give a text word , then create a png.(pure javascript no C)
* [validat-num-demo](https://github.com/brighthas/validat-num-demo) - validat number demo.(pure javascript no C)
* [alleup](https://github.com/tih-ra/alleup) - Flexible way to resize and upload images to Amazon S3 or file system storages
* [drawback](https://github.com/LearnBoost/drawback) — Seamless way to render 2D drawings on the client side using HTML5 technologies with a server-side backend.
* [EasyImage](https://github.com/hacksparrow/node-easyimage) — User-friendly module for common image editing requirements. Requires ImageMagick.
* [exiv2node](https://github.com/dberesford/exiv2node) — Extension that provides asynchronous support for reading & writing image metadata via Exiv2.
* [Face.js](https://github.com/talvarez/Face.js) — Node.js module for detecting faces in images
* [fav](https://github.com/vicapow/fav) - Node.js module for parsing ICO (favicon) files
* [gm](https://github.com/aheckmann/gm) — GraphicsMagick for node
* [magician](https://github.com/vdemedes/magician) — Image manipulation for Node.js using ImageMagick.
* [node-exif](https://github.com/gomfunkel/node-exif) — Library to extract Exif metadata from images
* [node-gd](https://github.com/taggon/node-gd) — GD graphic library bindings
* [node-gif](https://github.com/pkrumins/node-gif) — Convert an RGB or RGBA buffer to GIF fast
* [node-graphviz](https://github.com/glejeune/node-graphviz) — GraphViz for node
* [node-image](https://github.com/pkrumins/node-image) — Unifies node-png, node-gif, node-jpeg
* [node-imagemagick](https://github.com/rsms/node-imagemagick) — ImageMagick module
* [node-imager](https://github.com/madhums/node-imager) - Easy way to resize, crop and upload images (with different presets) to Rackspace cloudfiles and Amazon S3.
* [node-jpeg](https://github.com/pkrumins/node-jpeg) — Convert an RGBA or RGB buffer to JPEG fast
* [node-occ](https://github.com/erossignon/node-occ) - construct BREP solid geometry with OpenCascade 
* [node-ogl](https://github.com/tmpvar/node-ogl) — OpenGL bindings
* [node-opencv](https://github.com/talvarez/node-opencv) — Node.js bindings for OpenCV. Originally forked from [peterbraden/node-opencv](https://github.com/peterbraden/node-opencv)
* [opencv-node](https://github.com/codeboost/opencv-node) - Node.js bindings for OpenCV. Supports most of the OpenCV 2.42 API, including video capture.
* [node-dv](https://github.com/creatale/node-dv) — Node.js library for processing and understanding scanned documents (Leptonica, Tesseract-OCR, ZXing, ...).
* [node-pango-view](https://github.com/shimondoodkin/node-pango-view) — print text with pango to temporary png image, then merge it with ImageMagick.
* [node-png](https://github.com/pkrumins/node-png) — Convert an RGB or RGBA buffer to PNG fast
* [node-pngjs](https://github.com/niegowski/node-pngjs) — Simple PNG encoder/decoder for Node.js with no native dependencies
* [node-qr](https://github.com/bcelenza/node-qr) — QR code generator for node
* [node-webgl](https://github.com/pufuwozu/node-webgl) — WebGL emulation
* [node-wkhtml](https://github.com/mhemesath/node-wkhtml) — Convert HTML to PDF or PNG using the Webkit Rendering Engine.
* [pdfkit](https://github.com/devongovett/pdfkit) — A powerful PDF generation library for Node
* [squeeze](https://github.com/nikhilm/squeeze) — Mince and convert images on the cloud using [UploadJuicer](http://www.uploadjuicer.com) _discontinued_.

<a name="wiki-canvas"></a>
### [Canvas](#canvas)

* [node-canvas](https://github.com/learnboost/node-canvas) — High performance canvas implementation backed by the phenomenal Cairo graphics library
* [node-o3-canvas](https://github.com/ajaxorg/node-o3-canvas) — Fast HTML5 Canvas and image processing implementation based on AGG
* [palette](https://github.com/visionmedia/palette) — Image color palette extraction library built with node-canvas

<a name="wiki-desktop-app"></a>
### [Building desktop GUI applications](#desktop-app)

* [AppJS](https://github.com/appjs/appjs) — SDK on top of Node to build desktop apps (GUI windows) with HTML/CSS/JS.
* [node-webkit](https://github.com/rogerwang/node-webkit) — SDK for running Node modules (and other Node code) inside WebKit (browser) windows, to build desktop apps with HTML/CSS/JS.

<a name="wiki-desktop-app"></a>
#### [Clipboard](#clipboard)

* [clipboard](https://github.com/Benvie/node-clipboard) — Easy to use utility for reading and writing to the system clipboard.
* [node-copy-paste](https://github.com/xavi-/node-copy-paste) — A command line utility that allows read/write (i.e copy/paste) access to the system clipboard.

<a name="wiki-maps"></a>
### [Maps](#maps)

* [node-mapnik](https://github.com/mapnik/node-mapnik) — Mapnik bindings for high performance rendering of map tiles.
* [node-mapserver](https://github.com/pagameba/node-mapserver) — mapserver bindings for rendering mapserver MAP files via node

<a name="wiki-video"></a>
## [Video](#video)

* [node-ffmpeg](https://github.com/damianociarla/node-ffmpeg) — FFmpeg module for Node. This library provides a set of functions and utilities to abstract commands-line usage of ffmpeg
* [ffmpeg-node](https://github.com/xonecas/ffmpeg-node) — Node.js driver for ffmpeg library
* [ffmpeg2theora](https://github.com/FLYBYME/node-ffmpeg2theora) — Batch encoding with ffmpeg2theora
* [navcodec](https://github.com/OptimalBits/navcodec) — Node bindings for libavcodec (ffmpeg).
* [node-fluent-ffmpeg](https://github.com/schaermu/node-fluent-ffmpeg) — Fluent API for ffmpeg (including streaming, thumbnail-generation and custom presets)
* [node-flvmeta](https://github.com/patriksimek/node-flvmeta) — FLVmeta wrapper to Adobe FLV manipulation
* [node-handbrake](https://github.com/cwolves/node-handebrake) — HandBrakeCLI wrapper to encode an entire folder of videos
* [node-video](https://github.com/pkrumins/node-video) — Create Theora/OGG videos from RGB(A) buffers (and stream them via <video> tag)
* [nodeminderjs](https://github.com/nodeminderjs/NodeMinder.js) — Linux video camera security and surveillance solution based on ZoneMinder and developed on top of a node.js stack.
* [ytdl](https://github.com/fent/node-ytdl) — Pure Javascript youtube video downloader.
* [youtube-dl](https://github.com/fent/node-youtube-dl) — youtube-dl driver for node

<a name="wiki-payment-gateways"></a>
## [Payment Gateways](#payment-gateways)

* [braintree](https://github.com/braintree/braintree_node) — library for integrating with Braintree
* [dwolla](https://github.com/nanek/node-dwolla) — library for integrating with [Dwolla](https://www.dwolla.com/)
* [node-fortumo](https://github.com/andris9/node-fortumo) — bindings for Fortumo SMS payment API
* [node-payment-paypal](https://github.com/petersirka/node-payment-paypal) — Node.js PayPal Express checkout for single payment, easy use and **NO DEPENDENCIES**
* [node-stripe](https://github.com/abh/node-stripe) — library for integrating with [Stripe](https://stripe.com/)
* [nodewm](https://github.com/dudochkin-victor/nodewm) — Webmoney signing module for NodeJs
* [paynode](https://github.com/jamescarr/paynode) - library for integrating with various payment gateways
* [paypal-ipn](https://github.com/andzdroid/paypal-ipn) — library for verifying paypal IPN messages
* [paypal-node-sdk](https://github.com/paypal/PayPal-node-SDK) - Node.js SDK for PayPal RESTful APIs
* [2co](https://github.com/biggora/2co) - library for integrating with [2Checkout](https://www.2checkout.com/)

<a name="wiki-api-clients"></a>
## [API clients](#api-clients)

* [ADAuthFTW](https://github.com/gfosco/ADAuthFTW) - Simple Active Directory authentication (Windows Only)
* [airship](https://github.com/jherdman/airship) — an Urban Airship API wrapper
* [akismet-js](https://github.com/oozcitak/akismet-js) — A client for the [Akismet spam detection API](http://akismet.com/development/api/)
* [alleup](https://github.com/tih-ra/alleup) - Flexible way to resize and upload images to Amazon S3 or file system storages
* [authom](https://github.com/jed/authom) - A dependency-free mutli-service authentication tool
* [aws-lib](https://github.com/mirkok/aws-lib) — An extensible library for Amazon Web Services including EC2, SimpleDB and the Product Advertising API
* [aws-snsclient](https://github.com/mattrobenolt/node-snsclient) — A client for handling Amazon AWS SNS endpoints
* [aws2js](https://github.com/SaltwaterC/aws2js) — Amazon Web Services APIs client implementation for node.js. Simple to use and extend.
* [awssum](https://github.com/appsattic/node-awssum) — NodeJS modules for talking to lots of Web Service APIs
* [azure](http://github.com/windowsazure/azure-sdk-for-node) - A library for accessing [Windows Azure](http://windowsazure.com) services including Tables, Blobs, Queues and Service Bus.
* [basecamp](https://github.com/mark-hahn/basecamp) - Supports all 57 requests of the new Basecamp JSON api. With built-in oauth2 support.
* [calais](https://github.com/mcantelon/node-calais) — Semantically analyze text using the Calais web service
* [cloudfront](https://github.com/tellnes/node-cloudfront) — Amazon AWS CloudFront client
* [cpanel-lib](https://github.com/vially/cpanel-lib) — Node.js client for the cPanel/WHM API
* [discogs](https://github.com/linus/discogs) — Discogs API client
* [dribbble-node](https://github.com/carlosvillu/Dribbble-node) — A wrapper for the Dribbble API
* [dropbox-node](https://github.com/evnm/dropbox-node) — A wrapper for the Dropbox API
* [ec2](https://github.com/bigeasy/node-ec2) - Light-weight, asynchronous Node.js bindings to the full Amazon EC2 API.
* [ec2metadata](https://github.com/kilianc/node-ec2metadata) — An API wrapper for the AWS EC2 metadata.
* [evented-twitter](https://github.com/polotek/evented-twitter) — asynchronous twitter client, supports streaming api
* [facebook-api](https://github.com/mren/facebook-api) — offers high level and low level calls against the facebook graph API
* [facebook-js](https://github.com/masylum/facebook-js) — Easy peasy facebook client for connect.
* [fbgraph](https://github.com/criso/fbgraph) — Sexay Facebook graph api
* [fitbit-js](https://github.com/smurthas/fitbit-js) — Simple FitBit API wrapper
* [flickr-reflection](https://github.com/teemow/node-flickr-reflection) — A flickr client that uses their reflection API (supports auth)
* [flickrnode](https://github.com/ciaranj/flickrnode) — A library to enable use of the flickr api (not as complete as node-flickr, but supports auth)
* [forrst](https://github.com/fczuardi/node-forrst) — Simple wrapper for the Forrst.com API.
* [gdata-js](https://github.com/smurthas/gdata-js) — Simple Google Data API OAuth 2.0 wrapper
* [geo](http://github.com/feliperazeek/geonode) — A very basic, but simple, geocode library, currently using Google Geocode API (v3)
* [gist](https://github.com/emerleite/node-gist) — A gist creator. Create GISTs and use the generated URI.
* [gnip](https://github.com/demian85/gnip) — A simple library that allows you to connect to Gnip Twitter Power Track and manage rules easily.
* [gravatar](https://github.com/emerleite/node-gravatar) — Well tested Node.JS Gravatar URL generator
* [gumroad](https://github.com/vdemedes/node-gumroad) — API client for Gumroad. 100% coverage of available methods.
* [hipchat-js](https://github.com/smurthas/hipchat-js) — Simple HipChat API wrapper
* [hoover](https://github.com/hakanensari/hoover) — An Amazon Product Advertising API wrapper
* [iframely](https://github.com/itteco/iframely) — Get embed data for any URL. Handles oEmbed, Open Graph, Twitter Cards and 100 domain plugins
* [instagram-node-lib](https://github.com/mckelvey/instagram-node-lib) — Library for easy interaction with the Instagram API
* [janrain-api](https://github.com/demetriusj/janrain) — Module for interfacing with Janrain Engage API
* [klout-js](https://github.com/smurthas/klout-js) — Simple Klout API wrapper
* [kippt-js](https://github.com/jiin/kippt) — API modules for kippt.com
* [lastfm-node](https://github.com/jammus/lastfm-node) — Read and write to users' recent plays on Last.fm
* [libravatar](https://github.com/fmarier/node-libravatar) — Module for generating [Libravatar](https://www.libravatar.org) avatar URLs.
* [linkedin-js](https://github.com/masylum/linkedin-js) — Easy peasy linkedin client for connect.
* [madmimi-node](https://github.com/garrensmith/Madmimi-node) — Client library for the MadMimi email api [[http://www.madmimi.com]].
* [mixpanel-node](https://github.com/carlsverre/mixpanel-node) — A simple Mixpanel API library for server-side analytics.
* [mturk](https://github.com/expensecat/mturk) — Amazon Mechanical Turk API wrapper [[https://github.com/expensecat/mturk]].
* [n-vimeo](https://github.com/alejandromg/node-vimeo) — Vimeo API (for data) Integration, retrieve info about everything (video,user,activity) with ease, an extension of vimeo-client.
* [Nexmo Node API](https://github.com/shripadk/node-nexmo) — A module for sending and receiving SMS messages via Nexmo REST API.
* [node-4sq](https://github.com/meritt/node-4sq) — Node.js client for the Foursquare API.
* [node-500px](https://github.com/ro-ka/node-500px) — A wrapper for the [[http://www.500px.com]] API.
* [node-apn](https://github.com/argon/node-apn) — A library to send messages using the Apple Push Notification Service.
* [node-armory](https://github.com/xtian/node-armory) — A simple wrapper around Blizzard's REST API for World of Warcraft.
* [node-beaconpush](https://github.com/cgbystrom/node-beaconpush) — Client for the Beaconpush REST API. A real-time push service for browsers supporting WebSockets and Comet.
* [node-bitly](https://github.com/tanepiper/node-bitly) — A bit.ly API library for node.js - provides URL shortening/expanding.  Features full API.
* [node-bot](https://github.com/Ayms/node-bot) — Fast and Real-time extraction of web pages information using node-dom (html,text,etc) based on given criterias
* [node-c2dm](https://github.com/SpeCT/node-c2dm) — A library to send messages using the Android Cloud to Device Messaging (C2DM) service.
* [node-cloudfiles](https://github.com/nodejitsu/node-cloudfiles) — A client implementation for Rackspace CloudFiles in node.js
* [node-cloudservers](https://github.com/nodejitsu/node-cloudservers) — A client implementation for Rackspace CloudServers in node.js
* [node-dropbox](https://github.com/Rendez/node-dropbox) — Node.js client for the Dropbox API
* [node-instapics](https://github.com/meritt/node-instapics) — Node.js client for the Instagram API.
* [node-flattr](https://github.com/antics/node-flattr) — The flattr API client.
* [node-foursquare](https://github.com/clintandrewhall/node-foursquare) — A wrapper for the Foursquare v2 API.
* [node-gadgets](https://github.com/Ayms/node-gadgets) — Real-time extraction from web pages of HTML gadgets and associated properties using node-dom based on given criterias
* [node-gdata](https://github.com/ammmir/node-gdata) — A generic Google Data API client library
* [node-gisty](https://github.com/meritt/node-gisty) — Node.js client for the GitHub gist API v3.
* [node-github](https://github.com/ajaxorg/node-github) — A wrapper for the [GitHub API](http://developer.github.com/)
* [node-gitteh](https://github.com/libgit2/node-gitteh) — Async, stable, feature-complete bindings for the [libgit2](http://libgit2.github.com/) library.
* [node-googleanalytics](https://github.com/ncb000gt/node-googleanalytics) — Google Analytics GData export library
* [node-googlemaps](https://github.com/moshen/node-googlemaps) — A wrapper for the Google Maps API
* [node-googleSearch](https://github.com/Ayms/node-googleSearch) — Implementation of Google Search Ajax API using node-dom
* [node-gravatar](https://github.com/arnabc/node-gravatar) — Node.js Gravatar URL generator, can be used with Node.js blogging frameworks
* [node-klout](https://github.com/edwardhotchkiss/node-klout) — Extremely reliable Node.js Klout API Wrapper
* [node-kraken](https://github.com/matylla/node-kraken) — Plug into the power and speed of Kraken.io Image Optimizer
* [node-loggly](https://github.com/nodejitsu/node-loggly) --A client implementation for Loggly in node.js
* [node-mailchimp](https://github.com/gomfunkel/node-mailchimp) — A wrapper for the MailChimp API, MailChimp Export API and MailChimp Webhooks
* [node-mailgun](https://github.com/shz/node-mailgun) — Client library for MailGun
* [node-mixpanel-api](https://github.com/campfirelabs/node-mixpanel-api) — A simple client for the Mixpanel Data API (not event tracking! see above)
* [node-neoip](https://github.com/jeromeetienne/node-neoip) — binding for neoip
* [node-notifo](https://github.com/nerocreativo/node-notifo) — Real-time notifications pushed to your mobile phone (and more).
* [node-ocr](https://github.com/selead/node-ocr) — ABBYY API wrapper.
* [node-ostatus](https://github.com/eschnou/node-ostatus) — An implementation of the OStatus protocol (Webfinger, Push, Hcard, Salmon, etc.)
* [node-ovh](https://github.com/gierschv/node-ovh) — A helper library for OVH.com web services
* [node-pdfcrowd](https://github.com/pdfcrowd/node-pdfcrowd) — A wrapper for the Pdfcrowd API. It lets you convert web pages and raw HTML code to PDF.
* [node-posterous](https://github.com/andzdroid/node-posterous) — Library for the Posterous API
* [node-prowl](https://github.com/mape/node-prowl) — A module that allows you to send push notifications to your iPhone through the Prowl API
* [node-rapleaf](https://github.com/tralamazza/node-rapleaf) — RapLeaf API client
* [node-sendgrid](https://github.com/HerdHound/node-sendgrid) — Sendgrid SMTP API headers library
* [node-spore](https://github.com/francois2metz/node-spore) — Node.js implementation of [spore](https://github.com/SPORE/) Generate api client with a json file.
* [node-sunlightapi](https://github.com/clarle/node-sunlightapi) — A client library for the Sunlight Labs Congress API
* [node-taobao](https://github.com/e6nian/node-taobao/) — A client library for taobao.com api.
* [taobao-top] (https://github.com/talrasha007/node-taobao) — A client library for taobao.com api. (Almost the same as node-taobao, just some bug fixes.)
* [node-twilio](https://github.com/sjwalter/node-twilio/) — A helper library for the Twilio API
* [node-twitter](https://github.com/jdub/node-twitter) — Asynchronous Twitter REST/stream/search client for node.js
* [node-untappd](http://github.com/arei/node-untappd) — Library for accessing the Untappd APIs.
* [node-vk](https://github.com/Sonetica/node-vk) — vkontakte.ru and vk.com social network api wrapper for mobile and desktop applications.
* [node-wikimapia](https://github.com/Sannis/node-wikimapia) — Node.js wrapper for the Wikimapia API
* [node-yelp](https://github.com/olalonde/node-yelp) — A wrapper for the Yelp's APIv2. Let's you search for businesses and get specific business information.
* [nodefm](https://github.com/mikebannister/nodefm) — So far just a util for consuming last.fm recent tracks history for a user
* [nodegit](https://github.com/tbranyen/nodegit) — Asynchronous native Node.js [libgit2](http://libgit2.github.com/) bindings with a convenient api
* [nodestagram](https://github.com/Swizec/nodestagram) — Instagram client for node
* [nodestalker](https://github.com/pascalopitz/nodestalker) — A beanstalkd client for node
* [nodevore](https://github.com/troufster/nodevore) — Convore API wrapper
* [openstack-storage](http://github.com/feedhenry/openstack-storage) — A module for accessing Openstack Storage (Swift)
* [pingdom](https://github.com/ryanbreen/node-pingdom) — A module for accessing the Pingdom JSON API
* [postageapp](https://github.com/postageapp/postageapp-nodejs) — A module for sending emails through the PostageApp JSON API
* [rackit](https://github.com/rossj/rackit/) — A simple library for managing a large number of files on Rackspace Cloud Files (CloudFiles)
* [ranger](https://github.com/mrduncan/ranger/) — A simple library which wraps Campfire's API
* [sailthru-client](https://github.com/sailthru/sailthru-node-client) — A wrapper for Sailthru API
* [sendgrid-mustache](https://github.com/jiem/sendgrid-mustache.git) — The most efficient way to use mustache templates with SendGrid: send 1000 mustache mails with only 1 POST request.
* [sms](https://github.com/kaven276/sms) — Aimed at whole SGIP/SMPP nodes support for SMS system, now focused on SP function.
* [SMSified-node](https://github.com/smsified/smsified-node) — A module for sending and receiving SMS messages (text messages) with the SMSified API.
* [spotify](https://github.com/roncioso/node-spotify-metadata) — Spotify api wrapper. Metadata lookup and search. Works with Spotify and http uris
* [supervisord](https://github.com/crcn/supervisord) - Library for supervisord
* [tender](https://github.com/cmoncrief/node-tender) - API client for ENTP's Tender.
* [tomatoes](https://github.com/skookum/tomatoes) - Simple node.js interface for the rotten tomatoes movie API.
* [tuiter](https://github.com/danzajdband/Tuiter) - Library for Twitter Search, REST and Streaming API
* [tropo-webapi-node](https://github.com/tropo/tropo-webapi-node) — A library for building multi-channel communication apps with the Tropo WebAPI.
* [tumblr](https://github.com/meritt/node-tumblr) — A wrapper for Tumblr's API v2
* [tumblrrr](https://github.com/mvrilo/tumblrrr) — A wrapper for Tumblr's API
* [tweetstream](https://github.com/mikeal/tweetstream) — Stream like API for twitter's HTTP streaming interface.
* [TwitScript](https://github.com/ryanmcgrath/twitscript) — A port of Twython to Node.js (Twitter API Library)
* [twitter-js](https://github.com/masylum/twitter-js) — Easy peasy twitter client for connect.
* [twitter-search](https://github.com/edwardhotchkiss/twitter-search) — Twitter API Search w/ search result pagination, returning up to 1500 queried tweets with RegEx search, kSorts, Klout scoring and filters
* [VIE](https://github.com/bergie/VIE) — Apache Stanbol and DBpedia API client for Node.js
* [vimeo-client](https://github.com/tih-ra/vimeo-client) — Vimeo API client for Node.js
* [virustotal.js](https://github.com/SaltwaterC/virustotal.js) — VirusTotal API client for node.js
* [waz-storage-js](https://github.com/jpgarcia/waz-storage-js) — A simple implementation of Windows Azure Storage API for Node.js
* [webmetrics](https://github.com/ryanbreen/node-webmetrics) — A module for accessing the Webmetrics JSON API
* [yammer-js](https://github.com/smurthas/yammer-js) — Simple Yammer API wrapper
* [fb-js](https://github.com/bobrik/fb-js) - Facebook api done right.
* [oss](https://github.com/fantasyni/oss) - OSS is a node.js SDK and Command-Line Tool for Aliyun OSS

<a name="wiki-async-flow"></a>
## [Control flow / Async goodies](#async-flow)

<a name="wiki-async-flow-libraries"></a>
### [Libraries](#async-flow-libraries)
* [yuemeng](https://github.com/uxnow/yuemeng) — A choice for coffeescript of control flow with syntax: go -> first -> auto(second1, second2) -> three.
* [$N](https://github.com/chjj/-N) — Simple control flow with pretty syntax.
* [async-mini](https://github.com/ypocat/async-mini) — Minimalistic async lib implementing only .parallel() and series(). Simple code, predictable behavior, server and browser.
* [async.js](https://github.com/fjakobs/async.js) — Async chaining and file system utilities. Async.js is to node's fs module, what jQuery is to the DOM.
* [async](https://github.com/caolan/async) — Comprehensive async map/reduce and control flow (parallel, series, waterfall, auto...) module that works in node and the browser
* [backbone-callbacks](http://lorenwest.github.com/backbone-callbacks) — Node.js style callbacks for [Backbone.js](http://documentcloud.github.com/backbone) asynchronous methods
* [begin](https://github.com/arumons/begin) — Control flow library for node.js and CoffeeScript
* [condvar](https://github.com/boba1l0s2k9/condvar) — Conditional variables, like AnyEvent::CondVar
* [chainsaw](https://github.com/substack/node-chainsaw) — Build chainable fluent interfaces the easy way in node.js
* [channels](https://github.com/Pita/channels) — Event channels for node.js
* [cloudd](https://github.com/truepattern/cloudd) — Job manager, runs set of tasks defined using a DAG definition
* [ctrl](https://github.com/freethenation/ctrl) — Async library that makes writing parallel code, synchronous code, and error handling simple.
* [deferred](https://github.com/medikoo/deferred) — Asynchronous control-flow with deferred and promises
* [deferred-queue](https://github.com/gagle/node-deferred-queue) — Series control flow library.
* [each](https://github.com/wdavidw/node-each) — Chained and parallel async iterator in one elegant function
* [eventproxy](https://github.com/JacksonTian/eventproxy) — An implementation of task/event based asynchronous pattern. Use events to avoid dirty callbacks.
* [finish](https://github.com/chaoran/node-finish) - A nodejs utility that provides a single callback for multiple asynchronous calls.
* [first](https://github.com/DanielBaulig/first) — A tiny control-flow library.
* [flow-js](https://github.com/willconant/flow-js) — Continuation-esque contruct for expressing multi-step asynchronous logic
* [flowless](https://github.com/koichik/node-flowless) — Less but better control-flow library.
* [funk](https://github.com/masylum/funk) — Asynchronous parallel functions made funky!
* [futures](https://github.com/coolaj86/futures) - Asynchronous Method Queueing, Futures, Promises, Subscriptions, and other async goodies
* [galaxy](https://github.com/bjouhier/galaxy) — async/await in JavaScript thanks to harmony generators.
* [gate](https://github.com/nakamura-to/gate) — An utility to await multiple asynchronous calls
* [gene](https://github.com/tasogarepg/gene) — A generator-based control-flow library. Easily parallel execute and error handling.
* [groupie](https://github.com/alexkwolfe/groupie) — A simple control flow library for executing multiple functions as a group or in a chain, calling back when complete.
* [ice-stream](https://github.com/rossj/ice-stream) — An expressive, chainable utility to allow for complex processing of streaming data.
* [Ignite](http://www.ignitejs.com/) — An easy-to-use async programming framework inspired by UML2 state machines.
* [jam](http://github.com/chakrit/jam) — Monadic continuation/callbacks/async helper.
* [JobManager](https://github.com/demian85/node-jobmanager) — A really simple tool that helps you manage multiple asynchronous tasks.
* [jscex-jquery](http://github.com/audreyt/jscex-jquery) — Jscex adapter to jQuery.Deferred API, with $.async/$await support
* [LAEH2](https://github.com/ypocat/laeh2) — Lightweight Asynchronous Error Handling v2. Wrap your asynchronous functions in an intelligent try/catch. Optional stack trace minification with async support, e.g.: `unexpected thing < ./ex1.js(9) << ./ex1.js(7 < 13)`.
* [locker](https://github.com/bobrik/locker) (server) and [node-locker](https://github.com/bobrik/node-locker) (client) — lock server and client for distributed systems with waiting and execution timeouts.
* [make-flow](https://github.com/eldargab/make-flow) - Make style control flow. Nice for complex functions.
* [miniqueue](https://github.com/hsch/node-miniqueue) — A very simple in-memory queue for easy sequential processing
* [narrow](https://github.com/0ctave/node-narrow) — Shrinks a given callback parallel execution concurrency in a limited number of threads, receiving a big bunch of data (array of tasks)
* [nestableflow](https://github.com/minodisk/flow-js) — Asynchronous nestable flow-control (serial, parallel, repeat, wait, function) module for Node.js, RequireJS, and browser.
* [neuron](https://github.com/indexzero/neuron) — The simplest possible event driven job manager, FIFO queue, and "task based cache" in node.js
* [node-async](https://github.com/Johanndutoit/node-async) — Executes a number of functions and returns the results of each function, when all are complete, for processing. Based on Narrow.
* [node-block](https://github.com/tasogarepg/node-block) — An async control-flow library. Easily error handling.
* [node-chain](https://github.com/ArtS/node-chain) — Simple call chaining library for node.js
* [node-continuables](https://github.com/bentomas/node-continuables) — A library making dealing with asynchronous code easier
* [node-cron](https://github.com/ncb000gt/node-cron) — Schedule callbacks with cron syntax
* [node-crontab](https://github.com/dachev/node-crontab) — Allows reading, manipulating, and writing user crontabs from node.js
* [node-fnqueue](https://github.com/kilianc/node-fnqueue) — Functions chain utility
* [node-inflow](https://github.com/shimondoodkin/node-inflow) — A next generation async control-flow library, with a shared object for called functions and debugging made easy.
* [node-parallel](https://github.com/Tim-Smart/node-parallel) — Create tasks in node.js that run in parallel, or sequences that run tasks one after another.
* [node-promise](https://github.com/kriszyp/node-promise) — Robust promises for node.js, includes promise utilities and promise-based I/O library
* [node.flow](https://github.com/dreamerslab/node.flow) — A deadly simple flow control package for node.js
* [noflo](https://github.com/bergie/noflo) — [Flow-Based Programming](http://en.wikipedia.org/wiki/Flow-based_programming) system for Node.js
* [nThen](https://github.com/cjdelisle/nthen) — The simple intuitive async library. Do this nThen do that.
* [nue](https://github.com/nakamura-to/nue) — An async control-flow library suited for node.js
* [observer](https://github.com/azer/observer) — An alternative observer implementation, for both ss&cs.
* [pauseable](https://github.com/fent/pauseable.js) — Easily pause and resume event emitters, timeouts, and intervals.
* [pipette](https://github.com/Obvious/pipette) — A collection of pipe / stream utility classes.
* [poolr](https://github.com/codingforce/poolr) — A lightweight resource pooling/serialization library
* [promise](https://github.com/megakorre/promise) — A Continuation handler (monad) with a condition system for errors
* [q](https://github.com/kriskowal/q) — Q is a tool for making and composing asynchronous promises in JavaScript.
* [QBox](https://github.com/arunoda/qbox) — Quick Controller flow for NodeJS
* [read-files](https://github.com/pvorb/node-read-files) — Asynchronously read a bunch of files and give a callback when reading is complete.
* [Rubberduck](https://github.com/daffl/rubberduck) — Punch JavaScript objects and receive events before and after a function executes.
* [statechart](https://github.com/DavidDurman/statechart) — An implementation of Statecharts as described in *Practical Statecharts in C/C++: Quantum Programming for Embedded Systems* by Miro Samek.
* [SCION](https://github.com/jbeard4/SCION) — An implementation of SCXML/Statecharts in JavaScript.
* [serialize](https://github.com/chaoran/node-serialize) - A simple node utility to serialize execution of asynchronous functions.
* [seq](https://github.com/substack/node-seq) — Chainable asynchronous control flow for node.js with sequential and parallel primitives and pipeline-style error handling
* [Signals](http://millermedeiros.github.com/js-signals/) — Custom Event/Messaging system which supports advanced features, doesn't rely on strings for the event publishing/subscribing and favor composition over inheritance.
* [simple-schedule](https://github.com/SaltwaterC/simple-schedule) — Simple scheduler for dispatching a number of batch tasks at defined intervals
* [Slide](https://github.com/isaacs/slide-flow-control)  — A control flow library that fits in a slide presentation
* [soda.js](https://github.com/tomyan/soda) — Asynchonous JavaScript module loader for client-side and Node.js
* [Step](https://github.com/creationix/step) — Tool for grouping and chaining asynchronous callbacks, based on [flow-js](https://github.com/willconant/flow-js)
* [stepc](https://github.com/akidee/stepc) — A CoffeeScript-safe version of creationix' step
* [streamify](https://github.com/fent/node-streamify) — Streamify helps you easily provide a streaming interface for your code.
* [suspend](https://github.com/jmar777/suspend) - Generator-based control-flow library expressly designed to work with Node's callback conventions.
* [taskman](https://github.com/bryan-m-hughes/node-taskman) — A task management library for managing (possibly) asynchronous tasks by declaring task dependencies.
* [timequeue](https://github.com/fent/timequeue.js) — A queue with custom concurrency and time limit.
* [TwoStep](https://github.com/xavi-/two-step) — An async control-flow library that makes stepping through logic easy.  The spiritual successor of [Step](https://github.com/creationix/step) with better error handling and finer flow control.
* [when](https://github.com/cujojs/when) — A lightweight CommonJS Promises/A and when() implementation. It also provides several other useful Promise-related concepts, such as joining and chaining, and has a robust unit test suite.
* [zo.js](https://github.com/refractalize/zo) — Async-friendly versions of the usual list processing functions: `map`, `select`, `reduce` and friends.
* [y-yield](https://github.com/staeke/yield) — Avoid callback soup and rely on exceptions with asynchronous programming using harmony generators.

<a name="wiki-async-flow-fibers"></a>
### [Fibers](#async-flow-fibers)

* [asyncblock](https://github.com/scriby/asyncblock) — Simple and powerful interface to fibers
* [asyncflow](https://github.com/sethyuan/asyncflow) — asyncflow is an expressive, capable and easy to use async flow library.
* [fiberize](https://github.com/lm1/node-fiberize) — Node API wrapper for use with fibers.
* [fibers-promise](https://github.com/lm1/node-fibers-promise) — Small yet powerful promises based on fibers.
* [fibers](https://github.com/laverdet/node-fibers) — The closest thing to a thread you'll find in JavaScript
* [sync](https://github.com/0ctave/node-sync) — Write simple and readable synchronous code in nodejs using fibers (based on [node-fibers](https://github.com/laverdet/node-fibers))

<a name="wiki-async-flow-extensions"></a>
### [Other Language Extensions](#async-flow-extensions)

* [Cinch](https://github.com/pguillory/cinch) — Write async code in sync form.
* [Wind.js](http://github.com/JeffreyZhao/wind) — Transforms sync code into monadic, async code as the async support in F# and Scala.
* [qjs](https://github.com/ForbesLindesay/QJS) — transforms synchronous looking code that uses Q promises into asynchronous code.
* [sjs](https://github.com/elmerbulthuis/sjs) — Asynchronous JavaScript for synchronous people
* [streamline.js](https://github.com/Sage/streamlinejs) — Tool that transforms synchronous code into asynchronous code with callbacks.
* [syncasync.js](https://github.com/goloroden/syncasync.js) — syncasync.js allows you to run synchronous functions asynchronously, and asynchronous functions synchronously.
* [tamejs](https://github.com/maxtaco/tamejs/) — Library by OK Cupid for flattening out async code.

<a name="i18n"></a>
## [I18n and L10n modules](#i18n)
* [babelfish](https://github.com/nodeca/babelfish/) — human friendly i18n with plurals support.
* [cld](https://github.com/dachev/cld) — A straight port of the CLD (Compact Language Detector) library embedded in Google's Chromium browser.
* [connect-i18n](https://github.com/masylum/connect-i18n) — Middleware for connect to handle i18n.
* [dialect-http](https://github.com/masylum/dialect-http) — http client to manage your dialect translations.
* [dialect](https://github.com/masylum/dialect) — Translations for nodejs.
* [i18n-node](https://github.com/mashpie/i18n-node) — Exports common __(), __n() syntax. Stores JSON objects dynamically on code-change.
* [i18next](http://i18next.com/node/index.html) — full-featured (plurals, vars, context, nesting,...), express middleware, template support, clientside usage/sharing
* [inflect](https://github.com/MSNexploder/inflect) — A port of the Rails / ActiveSupport inflector to JavaScript (node.js and browser compatible).
* [Lingo](http://bit.ly/cuaHAh) — Inflection, transformation and more
* [lingua](https://github.com/akoenig/express-lingua) — An i18n middleware for the Express.js framework.
* [localize](https://github.com/AGROSICA/node-localize) — A localization module with Date support and simple Express integration.
* [node-date-diff](https://github.com/morishani/node-date-diff) — Calculates date differences and allows to format it nicely to your language (Eg. In one hour)
* [node-gettext](https://github.com/andris9/node-gettext) — Use Gettext .MO files with Node.js.
* [node-i18n](https://github.com/ohaibbq/node-i18n) — node-i18n is a minimalistic internationalization module with templating
* [node-language-detect](https://github.com/FGRibreau/node-language-detect) — NodeJS language detection library using n-gram (which can identify up to 52 human languages)
* [resource-bundle](https://github.com/Gagle/Node-ResourceBundle) — Internationalization tool that provides locale-specific resources. Compatible with connect/express.js.
* [translate.js](https://github.com/Marak/translate.js) — translate text from one language to another on node.js and the browser. 30+ languages supported, simple as cake.
* [unidecode](https://github.com/FGRibreau/node-unidecode) — ASCII transliterations of Unicode text

<a name="wiki-boilerplates"></a>
## [Boilerplates](#boilerplates)

* [Alice](https://github.com/rock-n-code/alice) — Killer Node.js + Mocha Boilerplate for creating NPM packages for both Javascript and Coffee-Script coders. (: seems a advertisement)
* [Bawws] (https://github.com/JamesS237/Bawws-Boilerplate) — An awesome boilerplate for Express. With authentication from passport on MongoDB with Mongoose, and sexiness from Bootstrap.
* [infigo-node-boilerplate](https://github.com/jerryjj/infigo-node-boilerplate) — nodejs boilerplate built upon Express, db-mysql/db-drizzle/Mongoose and includes user authentication and group+role authorization system.
* [Lemmy](https://github.com/rock-n-code/lemmy) — 49% Motherfucker | 51% Son of a Bitch Node.js + Express + Mocha flexible project boilerplate for Javascript/Coffee-Script coders.
* [node-backbone](https://github.com/vinkaga/node-backbone) — Sample project for a Node/Backbone/HTML5 application optimized separately for desktop browsers (web), generic mobile platforms using jQuery Mobile (jquerymobile) and iPhone (iphone). Uses Express, Socket.io, Mongoose/MongoDB, Redis.io (for sessions) and Mocha (for testing).
* [node-boilerplate](https://github.com/robrighter/node-boilerplate) — Everything you need to get started on a Node.js website with express and socket.IO
* [NodeBase](https://github.com/dotmaster/NodeBase) — A node base class for JavaScript and CoffeeScript (logging, options, defaults and EventEmitter)
* [npm-boilerplate](https://github.com/wearefractal/npm-boilerplate) — Boilerplate for creating NPM packages
* [Skeleton](https://github.com/edwardhotchkiss/skeleton) — Skeleton is a CLI module to bootstrap a Node/Express project with a skeleton template via any git repository, with an included default repo.
* [transsiberian](https://github.com/masylum/transsiberian) — [outdated] nodejs boilerplate built upon Express and Mongolia
* [node-package-boilerplate](https://github.com/liangzan/node-package-boilerplate) - boilerplate files and dirs for a plain node.js project. more intended for starting node packages.
* [Nebula](https://github.com/hegdeashwin/Nebula) - Nebula is an open source walking application skeleton for a typical Backbone-Node.js web apps. You can use it to quickly bootstrap your Backbone-Node.js web application projects.

<a name="wiki-continuous-integration"></a>
## [Continuous Integration Tools](#continuous-integration)

* [Concrete](https://github.com/ryankee/concrete) — Simple continuous integration server written with NodeJS and CoffeeScript
* [Jenkins API](https://github.com/jansepar/node-jenkins-api) — An API written in Node for Jenkins, allowing you to trigger jobs, delete jobs, copy jobs, etc.
* [nestor](https://github.com/cliffano/nestor) — Jenkins (or Hudson) command-line interface in Node.js
* [cinnamon](https://github.com/akoenig/cinnamon) — A lightweight continuous integration server for Node.js applications.

<a name="wiki-ddd-cqrs-es"></a>
## [DDD, CQRS, EventSourcing](#ddd-cqrs-es)
* [cqrs] (https://github.com/leogiese/cqrs) — DDD/CQRS/Actor framework for node.js.
* [cloudjs] (https://github.com/digitalwm/cloudjs) — provides a network distributed event system and a
* [node-cqrs-domain](https://github.com/adrai/node-cqrs-domain) — Node-cqrs-domain is a node.js module based on nodeEventStore that. It can be very useful as domain component if you work with (d)ddd, cqrs, eventdenormalizer, host, etc.
* [node-cqrs-eventdenormalizer](https://github.com/adrai/node-cqrs-eventdenormalizer) — Node-cqrs-eventdenormalizer is a node.js module that implements the cqrs pattern. It can be very useful as eventdenormalizer component if you work with (d)ddd, cqrs, domain, host, etc.
* [node-cqrs](https://github.com/petrjanda/node-cqrs) — node.js cqrs implementation. CouchDb repository embedded, others can be plugged in. Contains basic implementation of denormalized view builder with storing data snapshots.
* [node-cqs](https://github.com/adrai/node-cqs) — Node-cqs is a node.js module that implements the cqrs pattern without eventsourcing. It can be very useful as domain and eventdenormalizer component if you work with (d)ddd, cqrs, host, etc.
* [node-queue](https://github.com/adrai/node-queue) — Node-queue is a node.js module for multiple databases. It can be very useful if you work with (d)ddd, cqrs, eventsourcing, commands and events, etc.
* [node-viewmodel](https://github.com/adrai/node-viewmodel) — Node-viewmodel is a node.js module for multiple databases. It can be very useful if you work with (d)ddd, cqrs, eventdenormalizer, host, etc.
* [nodeEventedCommand](https://github.com/adrai/nodeEventedCommand) — provides simple command/event handling for evented systems like cqrs
* [nodeEventStore](https://github.com/jamuhl/nodeEventStore) — EventStore (Events and Snapshots) supporting MongoDb, CouchDb, Redis
* [rule-validator](https://github.com/adrai/rule-validator) — Rule-validator is a javascript module based on amanda. And works for node.js and in the browser. It can be very useful if you work with (d)ddd, cqrs, eventsourcing, domain, commands and events, etc.
realtime balancing for live objects
* [cqrs sample](https://github.com/jamuhl/nodeCQRS) - a simple to understand sample how to approach (D)DDD / CQRS in node.js, plus short overview / tips for existing frameworks after understanding principles.

<a name="wiki-javascript-threads"></a>
## [JavaScript threads](#javascript-threads)

* [Threads A GoGo](https://github.com/xk/node-threads-a-gogo) — Run cpu-bound JavaScript tasks non-blockingly in background kernel threads. With EventEmitter and continuation passing style APIs.
* [webworker-threads](https://github.com/audreyt/node-webworker-threads) — Lightweight Web Worker API implementation with native threads

<a name="wiki-monitoring-alerting"></a>
## [Monitoring and Alerting](#monitoring-alerting)

* [Nervous](https://github.com/gflarity/nervous) — Pluggable monitoring system with support for Graphite.
* [Response](https://github.com/gflarity/response) — Pluggable alerting system and Graphite proxy.
* [zabbix-agent-client](https://github.com/bobrik/node-zabbix-agent-client) — getting data from zabbix_agent servers.

<a name="wiki-functional-programming"></a>
## [Functional Programming](#functional-programming)

* [Underscore](http://underscorejs.org/) — Utility belt for Javascript. Adds iterators and much more.
* [Theory](https://github.com/amark/theory) — Abstraction layer for server side and client side JavaScript. 
* [FJS](https://github.com/seanhess/fjs) — Functional Javascript. Currying, point-free composition.
* [JSUS](https://github.com/nodeGame/JSUS) — JSUS: JavaScript UtilS. JSUS helps!

<a name="wiki-physics"></a>
## [Physics](#physics)

* [box2dnode](https://github.com/jadell/box2dnode) — Port of the box2d physics simulation library
* [bullet](https://github.com/feisty/bullet) — [Bullet Physics](http://bulletphysics.org/) for node.js

<a name="wiki-devices"></a>
## [Devices, Protocols, Stacks](#devices)

* [devicestack](https://github.com/adrai/devicestack) — This module helps you to represent a device and its protocol.

<a name="wiki-statistics"></a>
## [Statistics](#statistics)

* [descriptive-statistics](http://fgribreau.github.com/descriptive_statistics/) — Descriptive Statistics for JavaScript
* [Gauss](http://github.com/stackd/gauss) - JavaScript statistics and analytics library
* [xtabs](https://github.com/sethyuan/xtabs) — A cross tabulation library simulating R's API.

<a name="wiki-documentation"></a>
## [Documentation](#documentation)

* [apiDoc](https://apidocjs.com) — Inline Documentation for RESTful web APIs.

<a name="wiki-other"></a>
## [Other](#other)
* [tree-node](https://github.com/brighthas/tree-node) — Tree node link HTML Node.
* [append](https://github.com/pvorb/node-append) — Append properties from one object to another.
* [attache.js](https://github.com/rodzyn/attache.js) — Very basic AOP implementation
* [audience-meter](https://github.com/rs/audience-meter) — A simple audience meter based on Socket.IO, perfect for live events tracking
* [bayesian-bandit](https://github.com/omphalos/bayesian-bandit.js) — Bayesian bandit implementation for Node and the browser.
* [behaviors](https://github.com/caolan/behaviors) — A simple way to check a module's exports, useful for 3rd party plugins and extensions
* [bigdecimal](https://github.com/iriscouch/bigdecimal.js) — Helps circumventing the problem of "0.1 + 0.2 = 0.30000000000000004".
* [BinaryJS](https://github.com/binaryjs/binaryjs) — Node binary websocket streaming made easy 
* [browserify](https://github.com/substack/node-browserify) — Browser-side require() for your node modules and npm packages
* [chardet](https://github.com/runk/node-chardet) - Character/encoding detection module 
* [cjs2web](https://github.com/alexlawrence/cjs2web) — Transform CommonJS modules to a web browser suitable format with minimal code overhead.
* [comparejs](https://github.com/goloroden/comparejs) — Reliable comparison operators for Node.js the way you would expect them to be.
* [crud-bones](http://words.alexeypro.com/crud-bones/) — CRUD boilerplate/template for Node.JS/Mongo/MySQL/Redis/Express/EJS/Cluster/etc.
* [cryo](https://github.com/hunterloftis/cryo) - Pickle for JavaScript; extended JSON. Easily store/serialize/freeze and re-hydrate complex JavaScript objects including Functions and nested references.
* [demodule](https://github.com/jaekwon/demodule) — Organize code with CommonJS. Package them to one file. Great for browser client code organization.
* [difflib.js](https://github.com/qiao/difflib.js) — Text diff library, ported from Python's difflib module
* [easyRTC](http://easyrtc.com/) — WebRTC server and client API kit. Allows for rapid WebRTC application deployment.
* [GFMS](https://github.com/ypocat/gfms) — Github Flavored Markdown Server. Preview your README.md (and other markdown docs) locally before committing it. Uses Github's CSS for faithful representation. Uses [ws-rpc](https://github.com/ypocat/ws-rpc) to automatically reload your browser upon file changes.
* [hdoc](https://github.com/tasogarepg/hdoc) — A here-document utility for node.js.
* [highlight.js](https://github.com/isagalaev/highlight.js) — Syntax Highlighting (for node.js and browser)
* [Jalali](https://github.com/alireza-ahmadi/jalali) — Gregorian to Jalali Converter
* [jomap](https://bitbucket.org/dotCypress/jomap/) — Powerfull object mapper
* [jsbundle](https://github.com/proxv/jsbundle) — Simple, clean, and automatic bundling of your Node modules and packages for use in the browser.
* [json-ptr](https://github.com/flitbit/json-ptr) - A complete, fast implementation of JSON Pointer (RFC 6901) for nodejs and the browser.
* [nshell](https://github.com/visionmedia/nshell) — non-posix shell written with node.js 
* [model.js](https://github.com/tarruda/model.js) — Simple data validation for both server and browser.
* [node-ast-inlining](https://github.com/FGRibreau/node-ast-inlining) — A small library that inline and expand function call
* [node-dummy-cache](http://github.com/pescuma/node-dummy-cache) — A simple in memory cache to use with nodejs.
* [node-eibd](https://github.com/andreek/node-eibd) - eibd client for eib/knx daemon
* [node-stem](https://github.com/chriso/node-stem) — Bindings to the libstemmer library
* [node-talib](https://github.com/oransel/node-talib) — Technical Analysis Library with 100+ indicators and candlestick pattern recognition
* [node-upload-progress](https://github.com/phstc/node-upload-progress) — It's a Node.js module to handle upload and upload-progress
* [node.packer](https://github.com/dreamerslab/node.packer) — An assets combine and minify tool
* [nova](https://github.com/wearefractal/nova) — Node.js libraries ported to the browser. Write once, run everywhere.
* [numpad](https://github.com/pvorb/numpad) — Pad numbers with leading zeros to any number of digits
* [oid](https://github.com/Obvious/oid) — Utilities for object identity
* [rainbow.js](https://github.com/jiin/Rainbow) — Library for converting in most famous colors schema
* [randexp.js](http://fent.github.com/randexp.js/) - Create random strings that match a given regular expression.
* [short](http://github.com/edwardhotchkiss/short/) — NodeJS URL Shortener backed by MongooseJS w/ Complete Example Site
* [sigar](https://github.com/wdavidw/node-sigar) — Node Binding to SIGAR (System Information Gatherer And Reporter)
* [sorter](https://github.com/minodisk/sorter) — Sort methods: dictionary sort and natural sort
* [toSrc](http://jhnns.github.com/toSrc/) — Turns every JavaScript object or primitive into valid source code that can be evaled again.
* [tty.js](https://github.com/chjj/tty.js) - a terminal for your browser
* [typed](http://alexlawrence.github.com/typed) - Type checking libraryC
* [twitter-conference](https://github.com/meritt/twitter-conference) - It's a small example how to create twitter online conference with Node.js, Twitter Streaming API and Websockets.
* [version](https://github.com/edwardhotchkiss/version) — NodeJS package.json version number fetcher
* [value](https://github.com/jhnns/value) - Convenient high-performance type-checking for JavaScript
* [yui](http://github.com/yui/yui3) — YUI available in Node.js, ([extra docs](http://yuilibrary.com/yui/docs/yui/nodejs.html))
* [strformat](https://github.com/fhellwig/strformat) - Node.js string formatting the way you expect it to work.
* [parambulator](https://github.com/rjrodger/parambulator) - A simple way to generate nice error messages for named parameters.
* [subst](https://github.com/andreyvit/subst.js) - Substitutes placeholders in strings, arrays and objects
* [urlmatch](https://github.com/andreyvit/urlmatch.js) - URL host/port/path matching (kind of like fnmatch)