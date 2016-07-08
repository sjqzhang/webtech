
[Unofficial Windows Binaries for Python Extension Packages](http://www.lfd.uci.edu/~gohlke/pythonlibs/)
by [Christoph Gohlke](http://www.lfd.uci.edu/~gohlke/), [Laboratory for Fluorescence Dynamics](http://www.lfd.uci.edu/), [University of California, Irvine](http://www.uci.edu/).


This page provides 32- and 64-bit Windows binaries of many scientific open-source extension packages for the official [CPython distribution](http://www.python.org/download/) of the [Python](http://www.python.org) programming language.


The files are unofficial (meaning: informal, unrecognized, personal, unsupported, no warranty, no liability, provided "as is") and made available for testing and evaluation purposes.


If downloads fail reload this page, enable JavaScript, disable download managers, disable proxies, clear cache, and use Firefox. Please only download files as needed.


Most binaries are built from source code found on [PyPI](http://pypi.python.org/pypi) or in the projects public revision control systems. Source code changes, if any, have been submitted to the project maintainers or are included in the packages.


Refer to the documentation of the individual packages for license restrictions and dependencies


[Pip](#pip) is required to [install the .whl files](https://pip.pypa.io/en/latest/user_guide.html#installing-from-wheels).


Many binaries depend on [Numpy-MKL 1.8](#numpy) and the Microsoft Visual C++ 2008 ([x64](http://www.microsoft.com/en-us/download/details.aspx?id=15336), [x86](http://www.microsoft.com/en-us/download/details.aspx?id=29), and [SP1](http://www.microsoft.com/en-us/download/details.aspx?id=26368) for CPython 2.6 to 3.2) or Visual C++ 2010 ([x64](http://www.microsoft.com/en-us/download/details.aspx?id=14632), [x86](http://www.microsoft.com/en-us/download/details.aspx?id=5555), for CPython 3.3 and 3.4) redistributable packages.


The binaries are compatible with the official CPython distribution on Windows >=6.0. Chances are they don't work with custom Python distributions included with Blender, Maya, ArcGIS, OSGeo4W, ABAQUS, Cygwin, Pythonxy, Canopy, EPD, Anaconda, WinPython etc. Many binaries are not compatible with Windows XP or Wine.


The packages are ZIP or 7z files, which allows for manual or scripted installation or repackaging of the content.


The files are provided "as is" without warranty or support of any kind. The entire risk as to the quality and performance is with you.






#### Index by date:



[astropy](#astropy)

[statsmodels](#statsmodels)

[yt](#yt)

[shapely](#shapely)

[gmpy](#gmpy)

[wxpython](#wxpython)

[pycifrw](#pycifrw)

[nltk](#nltk)

[markupsafe](#markupsafe)

[jinja2](#jinja2)

[bokeh](#bokeh)

[pygame](#pygame)

[tornado](#tornado)

[virtualenv](#virtualenv)

[pip](#pip)

[setuptools](#setuptools)

[python-ldap](#python-ldap)

[scipy](#scipy)

[msgpack](#msgpack)

[quickfix](#quickfix)

[blender-mathutils](#blender-mathutils)

[bcolz](#bcolz)

[libxml-python](#libxml-python)

[lxml](#lxml)

[h5py](#h5py)

[pycurl](#pycurl)

[pyglet](#pyglet)

[vpython](#vpython)

[fonttools](#fonttools)

[dipy](#dipy)

[pycuda](#pycuda)

[psutil](#psutil)

[pyalembic](#pyalembic)

[python-dateutil](#python-dateutil)

[python-snappy](#python-snappy)

[pyx](#pyx)

[cvxpy](#cvxpy)

[ecos](#ecos)

[certifi](#certifi)

[six](#six)

[scs](#scs)

[mercurial](#mercurial)

[pillow](#pillow)

[cld](#cld)

[jpype](#jpype)

[genshi](#genshi)

[pythonnet](#pythonnet)

[backports](#backports)

[rasterio](#rasterio)

[pyvisa](#pyvisa)

[pyproj](#pyproj)

[pyeda](#pyeda)

[conda](#conda)

[cellprofiler](#cellprofiler)

[marisa-trie](#marisa-trie)

[jcc](#jcc)

[persistent](#persistent)

[btrees](#btrees)

[zope.interface](#zope.interface)

[visvis](#visvis)

[vispy](#vispy)

[cython](#cython)

[cx_freeze](#cx_freeze)

[rtree](#rtree)

[mysql-python](#mysql-python)

[pycluster](#pycluster)

[nibabel](#nibabel)

[regex](#regex)

[pywin32](#pywin32)

[mysqlclient](#mysqlclient)

[javabridge](#javabridge)

[mahotas](#mahotas)

[mako](#mako)

[pycosat](#pycosat)

[pyzmq](#pyzmq)

[patsy](#patsy)

[psycopg](#psycopg)

[pandas](#pandas)

[sympy](#sympy)

[pytz](#pytz)

[numpy](#numpy)

[pycairo](#pycairo)

[requests](#requests)

[libsvm](#libsvm)

[liblinear](#liblinear)

[cytoolz](#cytoolz)

[dynd](#dynd)

[gevent](#gevent)

[blaze](#blaze)

[pygit2](#pygit2)

[numba](#numba)

[llvmlite](#llvmlite)

[iris](#iris)

[netcdf4](#netcdf4)

[rpy2](#rpy2)

[biopython](#biopython)

[reportlab](#reportlab)

[ets](#ets)

[scikit-bio](#scikit-bio)

[spyder](#spyder)

[sfepy](#sfepy)

[apsw](#apsw)

[python-igraph](#python-igraph)

[pyqwt](#pyqwt)

[pylzma](#pylzma)

[openimageio](#openimageio)

[pymssql](#pymssql)

[lsqfit](#lsqfit)

[thrift](#thrift)

[pyicu](#pyicu)

[pyside](#pyside)

[guiqwt](#guiqwt)

[pyqt4](#pyqt4)

[gdal](#gdal)

[cellcognition](#cellcognition)

[vigra](#vigra)

[pytables](#pytables)

[ipython](#ipython)

[pygments](#pygments)

[pyspharm](#pyspharm)

[imread](#imread)

[scons](#scons)

[kiwisolver](#kiwisolver)

[enaml](#enaml)

[atom](#atom)

[faulthandler](#faulthandler)

[bigfloat](#bigfloat)

[yappi](#yappi)

[simplejson](#simplejson)

[line_profiler](#line_profiler)

[fiona](#fiona)

[bioformats](#bioformats)

[pyfftw](#pyfftw)

[minepy](#minepy)

[mlpy](#mlpy)

[matplotlib](#matplotlib)

[py2exe](#py2exe)

[veusz](#veusz)

[greenlet](#greenlet)

[sqlalchemy](#sqlalchemy)

[vlfd](#vlfd)

[pyparsing](#pyparsing)

[pymc](#pymc)

[friture](#friture)

[pymol](#pymol)

[orange](#orange)

[pymca](#pymca)

[scientificpython](#scientificpython)

[opencv](#opencv)

[kwant](#kwant)

[pymunk](#pymunk)

[pulp](#pulp)

[intbitset](#intbitset)

[qutip](#qutip)

[networkx](#networkx)

[twisted](#twisted)

[pylibtiff](#pylibtiff)

[numexpr](#numexpr)

[polygon](#polygon)

[pycares](#pycares)

[scikit-learn](#scikit-learn)

[sphinx](#sphinx)

[scipy-stack](#scipy-stack)

[nose](#nose)

[libpython](#libpython)

[pyxml](#pyxml)

[cvxopt](#cvxopt)

[basemap](#basemap)

[qimage2ndarray](#qimage2ndarray)

[iminuit](#iminuit)

[pgmagick](#pgmagick)

[milk](#milk)

[llvmpy](#llvmpy)

[pymongo](#pymongo)

[nlopt](#nlopt)

[libsbml](#libsbml)

[pysqlite](#pysqlite)

[pyfits](#pyfits)

[mxbase](#mxbase)

[python-lz4](#python-lz4)

[blosc](#blosc)

[meshpy](#meshpy)

[docutils](#docutils)

[cffi](#cffi)

[scikit-image](#scikit-image)

[lp_solve](#lp_solve)

[pystemmer](#pystemmer)

[pyopengl](#pyopengl)

[pyrxp](#pyrxp)

[pymvpa](#pymvpa)

[cartopy](#cartopy)

[natgrid](#natgrid)

[python-levenshtein](#python-levenshtein)

[pyfmi](#pyfmi)

[assimulo](#assimulo)

[nitime](#nitime)

[pyephem](#pyephem)

[pyopencl](#pyopencl)

[mod_wsgi](#mod_wsgi)

[pyviennacl](#pyviennacl)

[vitables](#vitables)

[mpi4py](#mpi4py)

[quantlib](#quantlib)

[pyaudio](#pyaudio)

[steps](#steps)

[mmtk](#mmtk)

[pyminuit](#pyminuit)

[smc.freeimage](#smc.freeimage)

[vtk](#vtk)

[pyhdf](#pyhdf)

[pyyaml](#pyyaml)

[videocapture](#videocapture)

[pythonmagick](#pythonmagick)

[pyvrml97](#pyvrml97)

[openglcontext](#openglcontext)

[blist](#blist)

[aspell-python](#aspell-python)

[ode](#ode)

[cdecimal](#cdecimal)

[noise](#noise)

[scikits.odes](#scikits.odes)

[scikits.umfpack](#scikits.umfpack)

[scikits.ann](#scikits.ann)

[scikits.vectorplot](#scikits.vectorplot)

[curses](#curses)

[oursql](#oursql)

[libtfr](#libtfr)

[htseq](#htseq)

[ffnet](#ffnet)

[polymode](#polymode)

[slycot](#slycot)

[ta-lib](#ta-lib)

[pymutt](#pymutt)

[bsdiff4](#bsdiff4)

[pyfltk](#pyfltk)

[pyisapie](#pyisapie)

[pycparser](#pycparser)

[pybluez](#pybluez)

[openbabel](#openbabel)

[pysfml](#pysfml)

[pywavelets](#pywavelets)

[pyserial](#pyserial)

[ujson](#ujson)

[rtmidi-python](#rtmidi-python)

[kivy](#kivy)

[nipype](#nipype)

[pydde](#pydde)

[llist](#llist)

[pymix](#pymix)

[bio_formats](#bio_formats)

[bottleneck](#bottleneck)

[fastcluster](#fastcluster)

[la](#la)

[cgkit](#cgkit)

[planar](#planar)

[ceodbc](#ceodbc)

[scipy-cluster](#scipy-cluster)

[pyhook](#pyhook)

[sparsesvd](#sparsesvd)

[simpleitk](#simpleitk)

[casuarius](#casuarius)

[coverage](#coverage)

[twainmodule](#twainmodule)

[theano](#theano)

[boost.python](#boost.python)

[bitarray](#bitarray)

[pyodbc](#pyodbc)

[pylibdeconv](#pylibdeconv)

[fipy](#fipy)

[tinyarray](#tinyarray)

[carray](#carray)

[pysparse](#pysparse)

[nipy](#nipy)

[bazaar](#bazaar)

[pygraphviz](#pygraphviz)

[babel](#babel)

[pyamg](#pyamg)

[umysql](#umysql)

[scikits.samplerate](#scikits.samplerate)

[scikits.scattpy](#scikits.scattpy)

[scikits.hydroclimpy](#scikits.hydroclimpy)

[scikits.delaunay](#scikits.delaunay)

[autopy](#autopy)

[pyusb-ftdi](#pyusb-ftdi)

[mmlib](#mmlib)

[pyreadline](#pyreadline)

[py-fcm](#py-fcm)

[liblas](#liblas)

[scikits.audiolab](#scikits.audiolab)

[py-postgresql](#py-postgresql)

[pyamf](#pyamf)

[holopy](#holopy)

[pyropes](#pyropes)

[epydoc](#epydoc)

[cheetah](#cheetah)

[pywcs](#pywcs)

[python-sundials](#python-sundials)

[openexr](#openexr)

[dpmix](#dpmix)

[mdp](#mdp)

[pycogent](#pycogent)

[jsonlib](#jsonlib)

[silvercity](#silvercity)

[console](#console)

[python-cjson](#python-cjson)

[pytst](#pytst)

[sendkeys](#sendkeys)

[pydbg](#pydbg)

[python-lzo](#python-lzo)

[delny](#delny)

[pyexiv2](#pyexiv2)

[ilastik](#ilastik)

[scitools](#scitools)

[trfit](#trfit)

[re2](#re2)

[cgal-python](#cgal-python)

[pymedia](#pymedia)

[pyfftw3](#pyfftw3)

[pymex](#pymex)

[pymatlab](#pymatlab)

[zodb3](#zodb3)

[pygtk](#pygtk)

[nmoldyn](#nmoldyn)

[iocbio](#iocbio)

[pybox2d](#pybox2d)

[mmseg](#mmseg)

[pynifti](#pynifti)

[scikits.timeseries](#scikits.timeseries)

[numscons](#numscons)

[visionegg](#visionegg)




[ ](http://www.lfd.uci.edu/~gohlke/pythonlibs/honeypot-1.0.win32-py2.6.exe)


<span id="apsw" ></span>

#### [APSW](http://rogerbinns.github.io/apsw/)

 is another Python [SQLite](http://www.sqlite.org/) wrapper.

[apsw‑3.8.7.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[apsw‑3.8.7.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[apsw‑3.8.7.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[apsw‑3.8.7.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[apsw‑3.8.7.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[apsw‑3.8.7.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[apsw‑3.8.7.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[apsw‑3.8.7.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[apsw‑3.8.7.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[apsw‑3.8.7.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="aspell-python" ></span>

#### [Aspell-python](https://github.com/WojciechMula/aspell-python)

 bindings for [GNU Aspell](http://aspell.net/).

Using the [LyX fork](http://wiki.lyx.org/uploads/Windows/aspell-source/).

[aspell‑python‑1.13.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[aspell‑python‑1.13.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[aspell‑python‑1.13.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[aspell‑python‑1.13.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[aspell‑python‑1.13.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[aspell‑python‑1.13.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[aspell‑python‑1.13.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[aspell‑python‑1.13.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[aspell‑python‑1.13.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[aspell‑python‑1.13.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="assimulo" ></span>

#### [Assimulo](http://www.jmodelica.org/assimulo)

 is a package for solving ordinary differential equations.

Requires [numpy-mkl](#numpy).

[Assimulo‑2.6.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Assimulo‑2.6.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Assimulo‑2.6.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Assimulo‑2.6.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="astropy" ></span>

#### [Astropy](http://www.astropy.org/)

 is a core package for astronomy.

[astropy‑0.4.2‑cp32‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[astropy‑0.4.2‑cp32‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[astropy‑0.4.3‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[astropy‑0.4.3‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[astropy‑0.4.3‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[astropy‑0.4.3‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[astropy‑0.4.3‑cp33‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[astropy‑0.4.3‑cp33‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[astropy‑0.4.3‑cp34‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[astropy‑0.4.3‑cp34‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="atom" ></span>

#### [Atom](https://github.com/nucleic/atom)

, memory efficient Python objects.

[atom‑0.3.10.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[atom‑0.3.10.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[atom‑0.3.10.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[atom‑0.3.10.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="autopy" ></span>

#### [AutoPy](http://www.autopy.org/)

 is a GUI automation toolkit.

[autopy‑0.51.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[autopy‑0.51.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[autopy‑0.51.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[autopy‑0.51.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="babel" ></span>

#### [Babel](http://babel.pocoo.org/)

, tools for internationalizing Python applications.

[Babel‑1.3.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Babel‑1.3.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Babel‑1.3.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Babel‑1.3.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Babel‑1.3.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Babel‑1.3.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="backports" ></span>

#### Backports

 provide newer Python features and bug fixes to older versions of Python.

[_tkinter‑2.6.6.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[_tkinter‑3.2.5.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[asyncio‑3.4.1.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[asyncio‑3.4.1.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[backports.ssl_match_hostname‑3.4.0.2‑py2.py3‑none‑any.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[enum34‑1.0.4‑py2.py3‑none‑any.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[funcsigs‑0.4.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[funcsigs‑0.4.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[funcsigs‑0.4.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[funcsigs‑0.4.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[funcsigs‑0.4.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[funcsigs‑0.4.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[futures‑2.2.0.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[futures‑2.2.0.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[futures‑2.2.0.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[futures‑2.2.0.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[importlib‑1.0.3.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[importlib‑1.0.3.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ordereddict‑1.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ordereddict‑1.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pathlib‑1.0.1‑py2.py3‑none‑any.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[unittest2‑0.8.0‑py2‑none‑any.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="basemap" ></span>

#### [Basemap](http://matplotlib.github.com/basemap/)

 is a matplotlib toolkit for plotting 2D data on maps based on [GEOS](http://trac.osgeo.org/geos/).

[basemap‑1.0.8dev.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[basemap‑1.0.8dev.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[basemap‑1.0.8dev.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[basemap‑1.0.8dev.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[basemap‑1.0.8dev.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[basemap‑1.0.8dev.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[basemap‑1.0.8dev.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[basemap‑1.0.8dev.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[basemap‑1.0.8dev.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[basemap‑1.0.8dev.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="bazaar" ></span>

#### [Bazaar](http://bazaar.canonical.com/en/)

 is a version control system.

[bzr‑2.6.0.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[bzr‑2.6.0.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[bzr‑2.6.0.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[bzr‑2.6.0.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="bcolz" ></span>

#### [Bcolz](https://github.com/Blosc/bcolz)

 (unstable) provides columnar and compressed data containers.

[bcolz‑0.8.0‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[bcolz‑0.8.0‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[bcolz‑0.8.0‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[bcolz‑0.8.0‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[bcolz‑0.8.0‑cp33‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[bcolz‑0.8.0‑cp33‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[bcolz‑0.8.0‑cp34‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[bcolz‑0.8.0‑cp34‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="bigfloat" ></span>

#### [Bigfloat](http://pypi.python.org/pypi/bigfloat/)

, arbitrary precision correctly-rounded floating point arithmetic, via MPFR.

[bigfloat‑0.3.0.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[bigfloat‑0.3.0.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[bigfloat‑0.3.0.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[bigfloat‑0.3.0.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[bigfloat‑0.3.0.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[bigfloat‑0.3.0.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[bigfloat‑0.3.0.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[bigfloat‑0.3.0.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[bigfloat‑0.3.0.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[bigfloat‑0.3.0.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="bio_formats" ></span>

#### [Bio_formats](#bio_formats)

 (experimental) is a JCC generated wrapper for the [Bio-Formats](http://loci.wisc.edu/software/bio-formats) and [SCIFIO](http://loci.wisc.edu/software/scifio) Java libraries.

Requires [Java SE 7](http://www.oracle.com/technetwork/java/javase/overview/) and JVM.DLL in the PATH.

[bio_formats‑4.4.10.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[bio_formats‑4.4.10.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[bio_formats‑4.4.10.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[bio_formats‑4.4.10.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="bioformats" ></span>

#### [Bioformats](https://github.com/CellProfiler/python-bioformats/)

 read and write life sciences file formats using [Bio-Formats](http://loci.wisc.edu/software/bio-formats).

Requires [javabridge](#javabridge).

[python‑bioformats‑1.0.4.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python‑bioformats‑1.0.4.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python‑bioformats‑1.0.4.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python‑bioformats‑1.0.4.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="biopython" ></span>

#### [Biopython](http://www.biopython.org)

 is a set of tools for biological computation.

[biopython‑1.65.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[biopython‑1.65.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[biopython‑1.65.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[biopython‑1.65.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[biopython‑1.65.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[biopython‑1.65.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[biopython‑1.65.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[biopython‑1.65.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="bitarray" ></span>

#### [Bitarray](http://pypi.python.org/pypi/bitarray/)

 provides an object type which efficiently represents an array of booleans.

[bitarray‑0.8.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[bitarray‑0.8.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[bitarray‑0.8.1.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[bitarray‑0.8.1.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[bitarray‑0.8.1.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[bitarray‑0.8.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[bitarray‑0.8.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[bitarray‑0.8.1.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[bitarray‑0.8.1.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[bitarray‑0.8.1.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="blaze" ></span>

#### [Blaze](http://blaze.pydata.org/)

 is the next generation of NumPy.

[blaze‑0.7.0.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[blaze‑0.7.0.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[blaze‑0.7.0.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[blaze‑0.7.0.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[blaze‑0.7.0.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[blaze‑0.7.0.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[DataShape‑0.4.2.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[DataShape‑0.4.2.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[DataShape‑0.4.2.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[DataShape‑0.4.2.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[DataShape‑0.4.2.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[DataShape‑0.4.2.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="blender-mathutils" ></span>

#### [Blender-mathutils](http://www.blender.org/documentation/blender_python_api_2_72_release/mathutils.html)

 provide access to matrices, Eulers, quaternions and vectors.

[blender_mathutils‑2.73‑cp32‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[blender_mathutils‑2.73‑cp32‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[blender_mathutils‑2.73‑cp33‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[blender_mathutils‑2.73‑cp33‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[blender_mathutils‑2.73‑cp34‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[blender_mathutils‑2.73‑cp34‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="blist" ></span>

#### [Blist](http://pypi.python.org/pypi/blist/)

 is a list-like type with better performance for large lists.

[blist‑1.3.6.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[blist‑1.3.6.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[blist‑1.3.6.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[blist‑1.3.6.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[blist‑1.3.6.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[blist‑1.3.6.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[blist‑1.3.6.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[blist‑1.3.6.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[blist‑1.3.6.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[blist‑1.3.6.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="blosc" ></span>

#### [Blosc](http://github.com/FrancescAlted/python-blosc)

 is a high performance compressor optimized for binary data.

[blosc‑1.2.4.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[blosc‑1.2.4.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[blosc‑1.2.4.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[blosc‑1.2.4.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[blosc‑1.2.4.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[blosc‑1.2.4.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[blosc‑1.2.4.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[blosc‑1.2.4.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[blosc‑1.2.4.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[blosc‑1.2.4.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="bokeh" ></span>

#### [Bokeh](https://github.com/continuumio/bokeh)

 is an implementation of the Grammar of Graphics for output to the HTML5 Canvas.

Requires many [dependencies](http://bokeh.pydata.org/docs/installation.html#dependencies).

[bokeh‑0.7.1‑py27‑none‑any.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[bokeh‑0.7.1‑py33.py34‑none‑any.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="boost.python" ></span>

#### [Boost.Python](http://www.boost.org/libs/python/doc)

 enables seamless interoperability between C++ and Python.

[boost_python‑1.55.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[boost_python‑1.55.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[boost_python‑1.55.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[boost_python‑1.55.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[boost_python‑1.55.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[boost_python‑1.55.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[boost_python‑1.55.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[boost_python‑1.55.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[boost_python‑1.55.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[boost_python‑1.55.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="bottleneck" ></span>

#### [Bottleneck](http://pypi.python.org/pypi/Bottleneck)

 provides fast NumPy array functions written in Cython.

[Bottleneck‑0.8.0.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Bottleneck‑0.8.0.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Bottleneck‑0.8.0.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Bottleneck‑0.8.0.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Bottleneck‑0.8.0.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Bottleneck‑0.8.0.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Bottleneck‑0.8.0.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Bottleneck‑0.8.0.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Bottleneck‑0.8.0.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Bottleneck‑0.8.0.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="bsdiff4" ></span>

#### [Bsdiff4](https://github.com/ilanschnell/bsdiff4)

, binary diff and patch using the BSDIFF4-format.

[bsdiff4‑1.1.4.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[bsdiff4‑1.1.4.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[bsdiff4‑1.1.4.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[bsdiff4‑1.1.4.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[bsdiff4‑1.1.4.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[bsdiff4‑1.1.4.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[bsdiff4‑1.1.4.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[bsdiff4‑1.1.4.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[bsdiff4‑1.1.4.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[bsdiff4‑1.1.4.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="btrees" ></span>

#### [BTrees](https://pypi.python.org/pypi/BTrees)

, scalable persistent object containers.

[BTrees‑4.1.1‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[BTrees‑4.1.1‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[BTrees‑4.1.1‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[BTrees‑4.1.1‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[BTrees‑4.1.1‑cp32‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[BTrees‑4.1.1‑cp32‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[BTrees‑4.1.1‑cp33‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[BTrees‑4.1.1‑cp33‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[BTrees‑4.1.1‑cp34‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[BTrees‑4.1.1‑cp34‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="carray" ></span>

#### [Carray](https://github.com/FrancescAlted/carray)

, a chunked data container that can be compressed in-memory.

[carray‑0.5.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[carray‑0.5.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[carray‑0.5.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[carray‑0.5.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="cartopy" ></span>

#### [Cartopy](http://scitools.org.uk/cartopy/)

 is a library providing cartographic tools.

[Cartopy‑0.11.x.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Cartopy‑0.11.x.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Cartopy‑0.11.x.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Cartopy‑0.11.x.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Cartopy‑0.11.x.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Cartopy‑0.11.x.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Cartopy‑0.11.x.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Cartopy‑0.11.x.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Cartopy‑0.11.x.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Cartopy‑0.11.x.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="casuarius" ></span>

#### [Casuarius](https://github.com/enthought/casuarius)

, bindings for the [Cassowary](http://www.cs.washington.edu/research/constraints/cassowary/) constraint solving toolkit.

[casuarius‑1.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[casuarius‑1.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[casuarius‑1.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[casuarius‑1.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="cdecimal" ></span>

#### [Cdecimal](http://www.bytereef.org/mpdecimal/)

 is a package for correctly-rounded arbitrary precision decimal floating point arithmetic.

[cdecimal‑2.3.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cdecimal‑2.3.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cdecimal‑2.3.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cdecimal‑2.3.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cdecimal‑2.3.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cdecimal‑2.3.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="cellcognition" ></span>

#### [CellCognition](http://cellcognition.org/)

 is an image analysis framework for fluorescence time-lapse microscopy.

Requires [numpy-mkl](#numpy), [scipy](#scipy), [matplotlib](#matplotlib), [pyqt4](#pyqt4), [libsvm](#libsvm), [vigra](#vigra), [qimage2ndarray](#qimage2ndarray), [h5py](#h5py), [pandas](#pandas) and [scikit-learn](#scikit-learn).

[CellCognition‑1.2.5.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[CellCognition‑1.4.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[CellCognition‑1.4.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[CellCognition‑1.4.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[CellCognition‑1.4.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[CellCognition‑1.5.2dev.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[CellCognition‑1.5.2dev.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[CellCognition‑1.5.2dev.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[CellCognition‑1.5.2dev.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cellh5‑1.0.0dev.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cellh5‑1.0.0dev.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="cellprofiler" ></span>

#### [CellProfiler](http://www.cellprofiler.org)

 is software for quantitative analysis of biological images.

Requires [numpy-mkl](#numpy), [scipy](#scipy), [matplotlib](#matplotlib), [wxpython](#wxpython), [h5py](#h5py), [vigra](#vigra), [mysqldb](#mysql-python), [pillow](#pil) and the [JavaDK](http://www.oracle.com/technetwork/java/javase/downloads/index.html).

Run CellProfiler.py from the Python scripts directory.

[CellProfiler‑2.0.r11710.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[CellProfiler‑2.0.r11710.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[CellProfiler‑2.0.r11710.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[CellProfiler‑2.0.r11710.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[CellProfiler‑2.1.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="ceodbc" ></span>

#### [ceODBC](http://ceodbc.sourceforge.net/)

 enables access to databases using the ODBC API.

[ceODBC‑2.0.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ceODBC‑2.0.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ceODBC‑2.0.1.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ceODBC‑2.0.1.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ceODBC‑2.0.1.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ceODBC‑2.0.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ceODBC‑2.0.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ceODBC‑2.0.1.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ceODBC‑2.0.1.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ceODBC‑2.0.1.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="certifi" ></span>

#### [Certifi](https://pypi.python.org/pypi/certifi)

 provides Mozilla's CA Bundle.

[certifi‑14.5.14‑py2.py3‑none‑any.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="cffi" ></span>

#### [Cffi](http://pypi.python.org/pypi/cffi)

 is a Foreign Function Interface for calling C code.

Requires [pycparser](#pycparser).

[cffi‑0.8.6.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cffi‑0.8.6.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cffi‑0.8.6.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cffi‑0.8.6.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cffi‑0.8.6.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cffi‑0.8.6.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cffi‑0.8.6.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cffi‑0.8.6.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cffi‑0.8.6.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cffi‑0.8.6.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="cgal-python" ></span>

#### [CGAL-Python](http://cgal-python.gforge.inria.fr/)

 are bindings for the [Computational Geometry Algorithms Library](http://www.cgal.org/).

[CGAL‑Python‑0.9.4b1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[CGAL‑Python‑0.9.4b1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[CGAL‑Python‑0.9.4b1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[CGAL‑Python‑0.9.4b1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="cgkit" ></span>

#### [Cgkit](http://cgkit.sourceforge.net/)

, the Computer Graphics Kit, is useful for dealing with 3D data of any kind.

[cgkit‑2.0.0.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cgkit‑2.0.0.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cgkit‑2.0.0.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cgkit‑2.0.0.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cgkit‑2.0.0.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cgkit‑2.0.0.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cgkit‑2.0.0.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cgkit‑2.0.0.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cgkit‑2.0.0.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cgkit‑2.0.0.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="cheetah" ></span>

#### [Cheetah](http://www.cheetahtemplate.org/)

 is a template engine and code generation tool.

[Cheetah‑2.4.4.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Cheetah‑2.4.4.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Cheetah‑2.4.4.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Cheetah‑2.4.4.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="cld" ></span>

#### [CLD](https://github.com/mzsanford/cld)

 wraps Chromium's Compact Language Detector library.

[cld‑0.31415‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cld‑0.31415‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cld‑0.31415‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cld‑0.31415‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="conda" ></span>

#### [Conda](http://conda.pydata.org/)

 is a cross-platform, Python-agnostic binary package manager.

Requires [pyyaml](#pyyaml), [pycosat](#pycosat), and [requests](#requests).

[conda‑3.7.4‑py2.py3‑none‑any.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[conda_build‑1.9.1‑py2.py3‑none‑any.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="console" ></span>

#### [Console](http://effbot.org/zone/console-handbook.htm)

 provides a simple console interface.

[console‑1.1a2.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[console‑1.1a2.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[console‑1.1a2.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[console‑1.1a2.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="coverage" ></span>

#### [Coverage](http://nedbatchelder.com/code/coverage/)

 measures code coverage of programs during test execution.

[coverage‑3.7.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[coverage‑3.7.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[coverage‑3.7.1.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[coverage‑3.7.1.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[coverage‑3.7.1.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[coverage‑3.7.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[coverage‑3.7.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[coverage‑3.7.1.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[coverage‑3.7.1.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[coverage‑3.7.1.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="curses" ></span>

#### [Curses](http://bugs.python.org/issue2889)

 is an extension based on the [PDCurses](http://pdcurses.sourceforge.net/) library.

Unicode characters are not supported.

[curses‑2.2‑source.zip](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[curses‑2.2.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[curses‑2.2.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[curses‑2.2.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[curses‑2.2.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[curses‑2.2.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[curses‑2.2.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[curses‑2.2.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[curses‑2.2.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[curses‑2.2.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[curses‑2.2.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="cvxopt" ></span>

#### [CVXOPT](http://cvxopt.org/)

 (experimental non-MKL icl build) is a package for convex optimization.

Includes GSL, FFTW, and GLPK w/ MPIR modules.

Requires [numpy-mkl](#numpy).

[cvxopt‑1.1.7.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cvxopt‑1.1.7.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cvxopt‑1.1.7.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cvxopt‑1.1.7.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cvxopt‑1.1.7.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cvxopt‑1.1.7.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cvxopt‑1.1.7.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cvxopt‑1.1.7.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cvxopt‑1.1.7.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cvxopt‑1.1.7.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="cvxpy" ></span>

#### [CVXPY](http://www.cvxpy.org/)

 is a modeling language for convex optimization problems.

Requires [numpy-mkl](#numpy), [scipy](#scipy), [cvxopt](#cvxopt), [scs](#scs), and [ecos](#ecos).

[cvxpy‑0.2.16‑py2.py3‑none‑any.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="cx_freeze" ></span>

#### [cx_Freeze](http://cx-freeze.sourceforge.net/)

 is a set of scripts and modules for freezing Python scripts into executable.

[cx_Freeze‑4.3.4.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cx_Freeze‑4.3.4.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cx_Freeze‑4.3.4.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cx_Freeze‑4.3.4.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cx_Freeze‑4.3.4.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cx_Freeze‑4.3.4.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cx_Freeze‑4.3.4.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cx_Freeze‑4.3.4.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cx_Freeze‑4.3.4.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cx_Freeze‑4.3.4.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="cython" ></span>

#### [Cython](http://www.cython.org/)

 is a language for writing Python C extensions.

[Cython‑0.21.2‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Cython‑0.21.2‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Cython‑0.21.2‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Cython‑0.21.2‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Cython‑0.21.2‑cp32‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Cython‑0.21.2‑cp32‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Cython‑0.21.2‑cp33‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Cython‑0.21.2‑cp33‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Cython‑0.21.2‑cp34‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Cython‑0.21.2‑cp34‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="cytoolz" ></span>

#### [Cytoolz](https://github.com/pytoolz/cytoolz/)

, high performance functional utilities.

[cytoolz‑0.7.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cytoolz‑0.7.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cytoolz‑0.7.1.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cytoolz‑0.7.1.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cytoolz‑0.7.1.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cytoolz‑0.7.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cytoolz‑0.7.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cytoolz‑0.7.1.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cytoolz‑0.7.1.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cytoolz‑0.7.1.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[toolz‑0.7.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[toolz‑0.7.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[toolz‑0.7.1.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[toolz‑0.7.1.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[toolz‑0.7.1.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[toolz‑0.7.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[toolz‑0.7.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[toolz‑0.7.1.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[toolz‑0.7.1.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[toolz‑0.7.1.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="delny" ></span>

#### [Delny](http://pypi.python.org/pypi/Delny)

 creates N-dimensional Delaunay triangulations using [libqhull](http://www.qhull.org/).

[Delny‑0.4.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Delny‑0.4.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Delny‑0.4.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Delny‑0.4.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="dipy" ></span>

#### [Dipy](http://nipy.org/dipy)

 is a toolbox for analysis of MR diffusion imaging.

[dipy‑0.8.0‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[dipy‑0.8.0‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[dipy‑0.8.0‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[dipy‑0.8.0‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[dipy‑0.8.0‑cp32‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[dipy‑0.8.0‑cp32‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[dipy‑0.8.0‑cp33‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[dipy‑0.8.0‑cp33‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[dipy‑0.8.0‑cp34‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[dipy‑0.8.0‑cp34‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="docutils" ></span>

#### [Docutils](http://docutils.sourceforge.net/)

 processes plaintext documentation into HTML, LaTeX, man-pages, open-document or XML.

[docutils‑0.12.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[docutils‑0.12.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[docutils‑0.12.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[docutils‑0.12.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[docutils‑0.12.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[docutils‑0.12.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[docutils‑0.12.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[docutils‑0.12.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[docutils‑0.12.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[docutils‑0.12.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="dpmix" ></span>

#### [Dpmix](https://github.com/andrewcron/dpmix)

 is a library for fitting massive mixture models.

[dpmix‑0.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[dpmix‑0.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[dpmix‑0.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[dpmix‑0.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[gpustats‑0.0.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[gpustats‑0.0.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[gpustats‑0.0.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[gpustats‑0.0.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="dynd" ></span>

#### [DyND](https://github.com/libdynd/dynd-python)

  (experimental), bindings to the [libdynd](https://github.com/libdynd/libdynd) C++ dynamic ndarray library.

[dynd‑0.6.6.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[dynd‑0.6.6.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[dynd‑0.6.6.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[dynd‑0.6.6.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="ecos" ></span>

#### [ECOS](https://github.com/ifa-ethz/ecos)

, Embedded Conic Solver.

[ecos‑1.1.0‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ecos‑1.1.0‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ecos‑1.1.0‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ecos‑1.1.0‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ecos‑1.1.0‑cp32‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ecos‑1.1.0‑cp32‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ecos‑1.1.0‑cp33‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ecos‑1.1.0‑cp33‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ecos‑1.1.0‑cp34‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ecos‑1.1.0‑cp34‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="enaml" ></span>

#### [Enaml](https://github.com/nucleic/enaml)

 is a programming language and framework for creating user interfaces with minimal effort.

Requires [atom](#atom), [kiwisolver](#kiwisolver), [pyqt4](#pyqt4), and PLY.

[enaml‑0.9.8.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[enaml‑0.9.8.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[enaml‑0.9.8.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[enaml‑0.9.8.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="epydoc" ></span>

#### [Epydoc](http://epydoc.sourceforge.net)

 is a tool for generating module API documentation.

[epydoc‑3.0.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[epydoc‑3.0.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[epydoc‑3.0.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[epydoc‑3.0.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="ets" ></span>

#### [ETS](http://code.enthought.com/projects/)

, the Enthought Tool Suite, is a collection of components for building scientific applications.

Includes Traits, Chaco, etc. and [Mayavi](http://docs.enthought.com/mayavi/mayavi/), which requires [VTK-5.10.1](#vtk).

[ets‑4.4.4.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ets‑4.4.4.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ets‑4.4.4.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ets‑4.4.4.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="fastcluster" ></span>

#### [Fastcluster](http://danifold.net/fastcluster.html)

 provides fast hierarchical clustering routines.

[fastcluster‑1.1.13.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[fastcluster‑1.1.13.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[fastcluster‑1.1.13.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[fastcluster‑1.1.13.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[fastcluster‑1.1.13.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[fastcluster‑1.1.13.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[fastcluster‑1.1.13.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[fastcluster‑1.1.13.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[fastcluster‑1.1.13.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[fastcluster‑1.1.13.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="faulthandler" ></span>

#### [Faulthandler](http://pypi.python.org/pypi/faulthandler)

 displays the Python traceback on a crash.

[faulthandler‑2.4.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[faulthandler‑2.4.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[faulthandler‑2.4.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[faulthandler‑2.4.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[faulthandler‑2.4.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[faulthandler‑2.4.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="ffnet" ></span>

#### [Ffnet](http://ffnet.sourceforge.net/)

 is a feed-forward neural network.

[ffnet‑0.7.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ffnet‑0.7.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ffnet‑0.7.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ffnet‑0.7.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="fiona" ></span>

#### [Fiona](https://github.com/Toblerity/Fiona)

 is OGR's neater API.

Requires [gdal](#gdal).

[Fiona‑1.4.8.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Fiona‑1.4.8.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Fiona‑1.4.8.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Fiona‑1.4.8.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Fiona‑1.4.8.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Fiona‑1.4.8.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Fiona‑1.4.8.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Fiona‑1.4.8.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Fiona‑1.4.8.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Fiona‑1.4.8.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="fipy" ></span>

#### [FiPy](http://www.ctcms.nist.gov/fipy/)

 is a finite volume PDE solver.

Requires [pysparse](#pysparse).

[FiPy‑3.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[FiPy‑3.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[FiPy‑3.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[FiPy‑3.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="fonttools" ></span>

#### [FontTools](http://sourceforge.net/projects/fonttools/)

 is a library for manipulating fonts ([Python 3 source](https://github.com/behdad/fonttools)).

[fonttools‑2.4‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[fonttools‑2.4‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[fonttools‑2.4‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[fonttools‑2.4‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[fonttools‑2.5‑py3‑none‑any.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="friture" ></span>

#### [Friture](http://friture.org/)

 is a program designed to analyze audio input in real-time.

Requires [numpy](#numpy), [pyaudio](#pyaudio), [pyqt4](#pyqt4), [pyqwt](#pyqwt), and [pyopengl](#pyopengl).

[friture‑0.12.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[friture‑0.12.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="gdal" ></span>

#### [GDAL](http://www.gdal.org/)

, the Geospatial Data Abstraction Library, is a translator library for raster geospatial data formats.

Requires [VCredist SP1](http://www.microsoft.com/en-us/download/details.aspx?id=26368).

This distribution includes a complete GDAL installation. Do not use together with OSGeo4W or gdalwin32.

[GDAL‑1.11.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[GDAL‑1.11.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[GDAL‑1.11.1.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[GDAL‑1.11.1.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[GDAL‑1.11.1.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[GDAL‑1.11.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[GDAL‑1.11.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[GDAL‑1.11.1.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[GDAL‑1.11.1.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[GDAL‑1.11.1.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="genshi" ></span>

#### [Genshi](http://genshi.edgewall.org/)

, a toolkit for generation of output for the web.

[Genshi‑0.7‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Genshi‑0.7‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Genshi‑0.7‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Genshi‑0.7‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Genshi‑0.7‑cp32‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Genshi‑0.7‑cp32‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Genshi‑0.7‑cp33‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Genshi‑0.7‑cp33‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Genshi‑0.7‑cp34‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Genshi‑0.7‑cp34‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="gevent" ></span>

#### [Gevent](http://www.gevent.org/)

 is a coroutine-based networking library based on greenlet and [libevent](http://monkey.org/~provos/libevent/).

Requires [greenlet](#greenlet).

[gevent‑1.0.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[gevent‑1.0.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[gevent‑1.0.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[gevent‑1.0.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[gevent‑websocket‑0.9.3.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[gevent‑websocket‑0.9.3.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[gevent‑websocket‑0.9.3.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[gevent‑websocket‑0.9.3.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="gmpy" ></span>

#### [GMPY](http://code.google.com/p/gmpy/)

 supports fast multiple-precision arithmetic.

Wraps the [MPIR](http://www.mpir.org/), [MPFR](http://www.mpfr.org/), and [MPC](http://www.multiprecision.org/index.php?prog=mpc) libraries.

[gmpy‑1.17‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[gmpy‑1.17‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[gmpy‑1.17‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[gmpy‑1.17‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[gmpy‑1.17‑cp32‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[gmpy‑1.17‑cp32‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[gmpy‑1.17‑cp33‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[gmpy‑1.17‑cp33‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[gmpy‑1.17‑cp34‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[gmpy‑1.17‑cp34‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[gmpy2‑2.0.5‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[gmpy2‑2.0.5‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[gmpy2‑2.0.5‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[gmpy2‑2.0.5‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[gmpy2‑2.0.5‑cp32‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[gmpy2‑2.0.5‑cp32‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[gmpy2‑2.0.5‑cp33‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[gmpy2‑2.0.5‑cp33‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[gmpy2‑2.0.5‑cp34‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[gmpy2‑2.0.5‑cp34‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="greenlet" ></span>

#### [Greenlet](http://pypi.python.org/pypi/greenlet)

 allows lightweight in-process concurrent programming.

[greenlet‑0.4.5.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[greenlet‑0.4.5.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[greenlet‑0.4.5.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[greenlet‑0.4.5.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[greenlet‑0.4.5.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[greenlet‑0.4.5.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[greenlet‑0.4.5.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[greenlet‑0.4.5.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[greenlet‑0.4.5.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[greenlet‑0.4.5.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="guiqwt" ></span>

#### [GuiQwt](http://code.google.com/p/guiqwt/)

 is an efficient 2D plotting library.

Requires [pyqwt](#pyqwt).

[formlayout‑1.0.15.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[formlayout‑1.0.15.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[formlayout‑1.0.15.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[formlayout‑1.0.15.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[formlayout‑1.0.15.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[formlayout‑1.0.15.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[formlayout‑1.0.15.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[formlayout‑1.0.15.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[formlayout‑1.0.15.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[formlayout‑1.0.15.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[guidata‑1.6.2.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[guidata‑1.6.2.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[guidata‑1.6.2.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[guidata‑1.6.2.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[guidata‑1.6.2.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[guidata‑1.6.2.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[guidata‑1.6.2.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[guidata‑1.6.2.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[guidata‑1.6.2.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[guidata‑1.6.2.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[guiqwt‑2.3.2.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[guiqwt‑2.3.2.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[guiqwt‑2.3.2.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[guiqwt‑2.3.2.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[guiqwt‑2.3.2.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[guiqwt‑2.3.2.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[guiqwt‑2.3.2.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[guiqwt‑2.3.2.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[guiqwt‑2.3.2.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[guiqwt‑2.3.2.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="h5py" ></span>

#### [H5py](http://www.h5py.org/)

 is a general-purpose interface to the [HDF5](http://www.hdfgroup.org/HDF5/) library.

[h5py‑2.4.0‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[h5py‑2.4.0‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[h5py‑2.4.0‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[h5py‑2.4.0‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[h5py‑2.4.0‑cp32‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[h5py‑2.4.0‑cp32‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[h5py‑2.4.0‑cp33‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[h5py‑2.4.0‑cp33‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[h5py‑2.4.0‑cp34‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[h5py‑2.4.0‑cp34‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="holopy" ></span>

#### [HoloPy](http://manoharan.seas.harvard.edu/holopy/)

 is a tool for working with digital holograms and light scattering.

[HoloPy‑2.0.0.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[HoloPy‑2.0.0.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[HoloPy‑2.0.0.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[HoloPy‑2.0.0.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="htseq" ></span>

#### [HTSeq](http://www-huber.embl.de/users/anders/HTSeq/)

 provides infrastructure to process data from high-throughput sequencing assays.

[HTSeq‑0.6.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[HTSeq‑0.6.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[HTSeq‑0.6.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[HTSeq‑0.6.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="ilastik" ></span>

#### [Ilastik](http://www.ilastik.org)

 is an interactive learning and segmentation toolkit.

[ilastik‑0.5.12.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ilastik‑0.5.12.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ilastik‑0.5.12.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ilastik‑0.5.12.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="iminuit" ></span>

#### [Iminuit](https://github.com/iminuit/iminuit)

 is an interactive mimizer based on [MINUIT](http://seal.web.cern.ch/seal/snapshot/work-packages/mathlibs/minuit/).

[iminuit‑1.1.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[iminuit‑1.1.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[iminuit‑1.1.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[iminuit‑1.1.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="imread" ></span>

#### [Imread](https://github.com/luispedro/imread)

 reads images into numpy arrays.

[imread‑0.2.6.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[imread‑0.2.6.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[imread‑0.5.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[imread‑0.5.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[imread‑0.5.1.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[imread‑0.5.1.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[imread‑0.5.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[imread‑0.5.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[imread‑0.5.1.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[imread‑0.5.1.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="intbitset" ></span>

#### [intbitset](https://pypi.python.org/pypi/intbitset/)

 provides an intbitset data object.

[intbitset‑2.1.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[intbitset‑2.1.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[intbitset‑2.1.1.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[intbitset‑2.1.1.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[intbitset‑2.1.1.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[intbitset‑2.1.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[intbitset‑2.1.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[intbitset‑2.1.1.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[intbitset‑2.1.1.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[intbitset‑2.1.1.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="iocbio" ></span>

#### [IOCBio](http://code.google.com/p/iocbio/)

, open-source software from the [Laboratory of Systems Biology](http://sysbio.ioc.ee/).

Requires [numpy-mkl](#numpy).

[iocbio‑1.2.2.dev249.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[iocbio‑1.2.2.dev249.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[iocbio‑1.2.2.dev249.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[iocbio‑1.2.2.dev249.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="ipython" ></span>

#### [IPython](http://ipython.org/)

 is an interactive computing environment.

Some functions require [setuptools](#setuptools), [pyzmq](#pyzmq), [tornado](#tornado), [pyreadline](#pyreadline), [pygments](#pygments), [markupsafe](#markupsafe), [jinja2](#jinja2), [rpy2](#rpy2), [pycairo](#pycairo), [matplotlib](#matplotlib), [pyqt4](#pyqt4) or [pyside](#pyside), and pandoc.

[ipython‑1.2.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ipython‑1.2.1.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ipython‑1.2.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ipython‑1.2.1.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ipython‑2.3.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ipython‑2.3.1.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ipython‑2.3.1.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ipython‑2.3.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ipython‑2.3.1.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ipython‑2.3.1.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="iris" ></span>

#### [Iris](http://scitools.org.uk/iris/)

 is a library for analysing and visualising meteorological and oceanographic data sets

Requires [scipy](#scipy), [netcdf4-python](#netcdf4), [cartopy](#cartopy), [shapely](#shapely), udunits2 and [other dependencies](http://scitools.org.uk/iris/docs/latest/installing.html#build-and-runtime-requirements).

[Iris‑1.7.3.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Iris‑1.7.3.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[udunits2‑2.2.17.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[udunits2‑2.2.17.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[udunits2‑2.2.17.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[udunits2‑2.2.17.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[udunits2‑2.2.17.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[udunits2‑2.2.17.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[udunits2‑2.2.17.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[udunits2‑2.2.17.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[udunits2‑2.2.17.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[udunits2‑2.2.17.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="javabridge" ></span>

#### [Javabridge](https://github.com/CellProfiler/python-javabridge/)

 is a wrapper for the Java Native Interface.

[javabridge‑1.0.9+java7‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[javabridge‑1.0.9+java7‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[javabridge‑1.0.9+java7‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[javabridge‑1.0.9+java7‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="jcc" ></span>

#### [JCC](http://lucene.apache.org/pylucene/jcc/)

 is a C++ code generator that produces a C++ object interface wrapping a Java library via Java's Native Interface (JNI).

Users must adjust "jcc\config.py" for the target system.

[JCC‑2.21+java7‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[JCC‑2.21+java7‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[JCC‑2.21+java7‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[JCC‑2.21+java7‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="jinja2" ></span>

#### [Jinja2](http://jinja.pocoo.org/)

 is a text templating engine.

Requires [markupsafe](#markupsafe).

[Jinja2‑2.6‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Jinja2‑2.6‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Jinja2‑2.6‑cp32‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Jinja2‑2.6‑cp32‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Jinja2‑2.7.3‑py27‑none‑any.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Jinja2‑2.7.3‑py33.py34‑none‑any.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="jpype" ></span>

#### [JPype](http://jpype.sourceforge.net/)

 allows full access to Java class libraries.

[JPype‑0.5.4.2.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[JPype‑0.5.4.2.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[JPype‑0.5.4.2.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[JPype‑0.5.4.2.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[JPype1‑0.5.7+java7‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[JPype1‑0.5.7+java7‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[JPype1‑0.5.7+java7‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[JPype1‑0.5.7+java7‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="jsonlib" ></span>

#### [Jsonlib](http://pypi.python.org/pypi/jsonlib/)

 is a [JSON](http://json.org/) serializer/deserializer.

[jsonlib‑1.6.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[jsonlib‑1.6.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[jsonlib‑1.6.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[jsonlib‑1.6.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[jsonlib‑python3‑1.6.1.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[jsonlib‑python3‑1.6.1.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[jsonlib‑python3‑1.6.1.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[jsonlib‑python3‑1.6.1.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="kivy" ></span>

#### [Kivy](http://kivy.org/)

 is a library for developing multi-touch applications.

Requires [pygame](#pygame).

[Kivy‑1.7.2.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Kivy‑1.7.2.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Kivy‑1.7.2.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Kivy‑1.7.2.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Kivy‑1.8.0.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Kivy‑1.8.0.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Kivy‑1.8.0.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Kivy‑1.8.0.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Kivy‑1.8.0.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Kivy‑1.8.0.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Kivy‑1.8.0.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Kivy‑1.8.0.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="kiwisolver" ></span>

#### [Kiwisolver](https://github.com/nucleic/kiwi)

 is an efficient implementation of the [Cassowary](http://www.cs.washington.edu/research/constraints/cassowary/) constraint solving algorithm.

[kiwisolver‑0.1.3.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[kiwisolver‑0.1.3.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[kiwisolver‑0.1.3.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[kiwisolver‑0.1.3.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="kwant" ></span>

#### [Kwant](http://kwant-project.org/)

, quantum transport simulations made easy.

Requires [numpy-mkl](#numpy) and [tinyarray](#tinyarray).

[kwant‑1.0.2.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[kwant‑1.0.2.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="la" ></span>

#### [La](https://pypi.python.org/pypi/la)

 aka larry, the labeled numpy array.

[la‑0.7.0dev.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[la‑0.7.0dev.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[la‑0.7.0dev.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[la‑0.7.0dev.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[la‑0.7.0dev.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[la‑0.7.0dev.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[la‑0.7.0dev.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[la‑0.7.0dev.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[la‑0.7.0dev.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[la‑0.7.0dev.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="liblas" ></span>

#### [LibLAS](http://liblas.org/)

 reads and writes the LiDAR (Light Detection And Ranging) format.

[libLAS‑1.7.0.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[libLAS‑1.7.0.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[libLAS‑1.7.0.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[libLAS‑1.7.0.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="liblinear" ></span>

#### [LIBLINEAR](http://www.csie.ntu.edu.tw/~cjlin/liblinear/)

 is a library for large linear classification.

Requires [numpy-mkl](#numpy).

[liblinear‑1.96.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[liblinear‑1.96.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[liblinear‑1.96.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[liblinear‑1.96.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[liblinear‑1.96.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[liblinear‑1.96.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[liblinear‑1.96.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[liblinear‑1.96.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[liblinear‑1.96.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[liblinear‑1.96.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="libpython" ></span>

#### [Libpython](#libpython)

 installs the libpython??.a and libmsvcr??.a libraries to Python\libs.

For use with MinGW64/Rtools.

[libpython‑1.0.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[libpython‑1.0.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[libpython‑1.0.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[libpython‑1.0.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[libpython‑1.0.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="libsbml" ></span>

#### [libSBML](http://sbml.org/Software/libSBML)

 reads, writes, manipulates, translates, and validates SBML (Systems Biology Markup Language) files and data streams.

[python‑libsbml‑5.10.2.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python‑libsbml‑5.10.2.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python‑libsbml‑5.10.2.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python‑libsbml‑5.10.2.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python‑libsbml‑5.10.2.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python‑libsbml‑5.10.2.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python‑libsbml‑5.10.2.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python‑libsbml‑5.10.2.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python‑libsbml‑5.10.2.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python‑libsbml‑5.10.2.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="libsvm" ></span>

#### [LIBSVM](http://www.csie.ntu.edu.tw/~cjlin/libsvm/)

 is a library for Support Vector Machines.

[libsvm‑3.20.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[libsvm‑3.20.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[libsvm‑3.20.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[libsvm‑3.20.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[libsvm‑3.20.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[libsvm‑3.20.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[libsvm‑3.20.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[libsvm‑3.20.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[libsvm‑3.20.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[libsvm‑3.20.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="libtfr" ></span>

#### [Libtfr](http://pypi.python.org/pypi/libtfr)

 calculates multi-taper windowed and time-frequency reassignment spectrograms.

Requires [numpy-mkl](#numpy).

[libtfr‑1.0.4.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[libtfr‑1.0.4.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[libtfr‑1.0.4.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[libtfr‑1.0.4.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="libxml-python" ></span>

#### [Libxml-python](http://xmlsoft.org/python.html)

 are bindings for the [libxml2](http://xmlsoft.org/) and [libxslt](http://xmlsoft.org/XSLT/) libraries.

[libxml2_python‑2.9.2‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[libxml2_python‑2.9.2‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[libxml2_python‑2.9.2‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[libxml2_python‑2.9.2‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="line_profiler" ></span>

#### [Line_profiler](https://bitbucket.org/robertkern/line_profiler/)

 is a line-by-line profiler.

[line_profiler‑1.0.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[line_profiler‑1.0.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[line_profiler‑1.0.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[line_profiler‑1.0.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[line_profiler‑1.0.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[line_profiler‑1.0.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[line_profiler‑1.0.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[line_profiler‑1.0.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[line_profiler‑1.0b3.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[line_profiler‑1.0b3.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="llist" ></span>

#### [Llist](http://pypi.python.org/pypi/llist/)

 provides linked list data structures.

[llist‑0.4.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[llist‑0.4.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[llist‑0.4.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[llist‑0.4.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[llist‑0.4.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[llist‑0.4.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[llist‑0.4.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[llist‑0.4.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[llist‑0.4.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[llist‑0.4.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="llvmlite" ></span>

#### [Llvmlite](https://github.com/numba/llvmlite)

 is a lightweight [LLVM](http://www.llvm.org/) binding for writing JIT compilers.

Requires [Visual C++ Redistributable Packages for Visual Studio 2013](http://www.microsoft.com/en-us/download/details.aspx?id=40784).

[llvmlite‑0.2.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[llvmlite‑0.2.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[llvmlite‑0.2.1.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[llvmlite‑0.2.1.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[llvmlite‑0.2.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[llvmlite‑0.2.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[llvmlite‑0.2.1.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[llvmlite‑0.2.1.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="llvmpy" ></span>

#### [LLVMPy](http://www.llvmpy.org/)

 is a wrapper around the [LLVM](http://www.llvm.org/) compiler library.

[llvmpy‑0.12.7.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[llvmpy‑0.12.7.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[llvmpy‑0.12.7.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[llvmpy‑0.12.7.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[llvmpy‑0.12.7.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[llvmpy‑0.12.7.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[llvmpy‑0.12.7.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[llvmpy‑0.12.7.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[llvmpy‑0.12.7.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[llvmpy‑0.12.7.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="lp_solve" ></span>

#### [lp_solve](http://lpsolve.sourceforge.net/)

 is a Mixed Integer Linear Programming (MILP) solver.

[lpsolve55‑5.5.0.9.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[lpsolve55‑5.5.0.9.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[lpsolve55‑5.5.0.9.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[lpsolve55‑5.5.0.9.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[lpsolve55‑5.5.2.0.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[lpsolve55‑5.5.2.0.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[lpsolve55‑5.5.2.0.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[lpsolve55‑5.5.2.0.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="lsqfit" ></span>

#### [Lsqfit](https://pypi.python.org/pypi/lsqfit)

, utilities for nonlinear least-squares fits.

[lsqfit‑6.0.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[lsqfit‑6.0.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[lsqfit‑6.0.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[lsqfit‑6.0.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[lsqfit‑6.0.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[lsqfit‑6.0.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[lsqfit‑6.0.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[lsqfit‑6.0.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[lsqfit‑6.0.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[lsqfit‑6.0.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="lxml" ></span>

#### [Lxml](http://lxml.de/)

 is a binding for the [libxml2](http://xmlsoft.org/) and [libxslt](http://xmlsoft.org/XSLT/) libraries.

[lxml‑3.4.1‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[lxml‑3.4.1‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[lxml‑3.4.1‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[lxml‑3.4.1‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[lxml‑3.4.1‑cp32‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[lxml‑3.4.1‑cp32‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[lxml‑3.4.1‑cp33‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[lxml‑3.4.1‑cp33‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[lxml‑3.4.1‑cp34‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[lxml‑3.4.1‑cp34‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="mahotas" ></span>

#### [Mahotas](http://luispedro.org/software/mahotas)

 is a set of functions for image processing.

[mahotas‑1.2.4‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mahotas‑1.2.4‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mahotas‑1.2.4‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mahotas‑1.2.4‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mahotas‑1.2.4‑cp32‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mahotas‑1.2.4‑cp32‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mahotas‑1.2.4‑cp33‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mahotas‑1.2.4‑cp33‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mahotas‑1.2.4‑cp34‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mahotas‑1.2.4‑cp34‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="mako" ></span>

#### [Mako](http://www.makotemplates.org/)

 is a fast templating language.

[Mako‑1.0.0‑py2.py3‑none‑any.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="marisa-trie" ></span>

#### [Marisa-trie](https://pypi.python.org/pypi/marisa-trie/)

 provides static memory-efficient Trie-like structures.

[marisa_trie‑0.7‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[marisa_trie‑0.7‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[marisa_trie‑0.7‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[marisa_trie‑0.7‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[marisa_trie‑0.7‑cp32‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[marisa_trie‑0.7‑cp32‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[marisa_trie‑0.7‑cp33‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[marisa_trie‑0.7‑cp33‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[marisa_trie‑0.7‑cp34‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[marisa_trie‑0.7‑cp34‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="markupsafe" ></span>

#### [MarkupSafe](http://pypi.python.org/pypi/MarkupSafe)

 implements a XML/HTML/XHTML Markup safe string.

[MarkupSafe‑0.15‑cp32‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[MarkupSafe‑0.15‑cp32‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[MarkupSafe‑0.23‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[MarkupSafe‑0.23‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[MarkupSafe‑0.23‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[MarkupSafe‑0.23‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[MarkupSafe‑0.23‑cp33‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[MarkupSafe‑0.23‑cp33‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[MarkupSafe‑0.23‑cp34‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[MarkupSafe‑0.23‑cp34‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="matplotlib" ></span>

#### [Matplotlib](http://matplotlib.sourceforge.net/)

 is a 2D plotting library.

Requires [numpy](#numpy), [dateutil](#python-dateutil), [pytz](#pytz), [pyparsing](#pyparsing), [six](#six), [setuptools](#setuptools), and optionally [pillow](#pil), [pycairo](#pycairo), [tornado](#tornado), [wxpython](#wxpython), [pyside](#pyside), [pyqt4](#pyqt4), ghostscript, miktex, ffmpeg, mencoder, avconv, or imagemagick.

[matplotlib‑1.4.2‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[matplotlib‑1.4.2‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[matplotlib‑1.4.2‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[matplotlib‑1.4.2‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[matplotlib‑1.4.2‑cp32‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[matplotlib‑1.4.2‑cp32‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[matplotlib‑1.4.2‑cp33‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[matplotlib‑1.4.2‑cp33‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[matplotlib‑1.4.2‑cp34‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[matplotlib‑1.4.2‑cp34‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[matplotlib‑1.x‑windows‑link‑libraries.zip](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="mdp" ></span>

#### [MDP](http://mdp-toolkit.sourceforge.net/)

, the Modular toolkit for Data Processing.

[MDP‑3.3.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[MDP‑3.3.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[MDP‑3.3.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[MDP‑3.3.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[MDP‑3.3.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[MDP‑3.3.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[MDP‑3.3.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[MDP‑3.3.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="mercurial" ></span>

#### [Mercurial](http://mercurial.selenic.com/)

 is a fast scalable distributed SCM (revision control, version control) system.

[mercurial‑3.2.4‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mercurial‑3.2.4‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mercurial‑3.2.4‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mercurial‑3.2.4‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="meshpy" ></span>

#### [MeshPy](http://mathema.tician.de/software/meshpy)

 offers quality triangular and tetrahedral mesh generation.

[MeshPy‑2014.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[MeshPy‑2014.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[MeshPy‑2014.1.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[MeshPy‑2014.1.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[MeshPy‑2014.1.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[MeshPy‑2014.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[MeshPy‑2014.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[MeshPy‑2014.1.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[MeshPy‑2014.1.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[MeshPy‑2014.1.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="milk" ></span>

#### [Milk](http://luispedro.org/software/milk)

 is a machine learning toolkit.

[milk‑0.5.3.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[milk‑0.5.3.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[milk‑0.5.3.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[milk‑0.5.3.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[milksets‑0.1.3‑git.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[milksets‑0.1.3‑git.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[milksets‑0.1.3‑git.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[milksets‑0.1.3‑git.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="minepy" ></span>

#### [Minepy](http://minepy.sourceforge.net/)

, maximal information-based nonparametric exploration.

[minepy‑1.0.0.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[minepy‑1.0.0.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[minepy‑1.0.0.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[minepy‑1.0.0.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[minepy‑1.0.0.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[minepy‑1.0.0.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[minepy‑1.0.0.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[minepy‑1.0.0.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[minepy‑1.0.0.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[minepy‑1.0.0.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="mlpy" ></span>

#### [Mlpy](http://mlpy.sourceforge.net/)

 is a module for machine learning.

[mlpy‑3.5.0.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mlpy‑3.5.0.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mlpy‑3.5.0.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mlpy‑3.5.0.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mlpy‑3.5.0.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mlpy‑3.5.0.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mlpy‑3.5.0.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mlpy‑3.5.0.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mlpy‑3.5.0.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mlpy‑3.5.0.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="mmlib" ></span>

#### [mmLib](http://pymmlib.sourceforge.net/)

, the Python Macromolecular Library.

[pymmlib‑1.2.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymmlib‑1.2.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymmlib‑1.2.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymmlib‑1.2.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="mmseg" ></span>

#### [MMseg](http://pypi.python.org/pypi/mmseg)

, Chinese word segmentation.

[mmseg‑1.2.4.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mmseg‑1.2.4.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mmseg‑1.2.4.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mmseg‑1.2.4.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="mmtk" ></span>

#### [MMTK](http://dirac.cnrs-orleans.fr/MMTK)

, the Molecular Modelling Toolkit, is a library for molecular simulation applications.

[MMTK‑2.7.9.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[MMTK‑2.7.9.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[MMTK‑2.7.9.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[MMTK‑2.7.9.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="mod_wsgi" ></span>

#### [Mod_wsgi](https://github.com/GrahamDumpleton/mod_wsgi)

 is a [WSGI](http://www.wsgi.org/) adapter module for the [Apache HTTP Server 2.x](http://httpd.apache.org/).

Linked against the VS10 binaries from [Apache Lounge](http://www.apachelounge.com/download/).

Mod_wsgi 4.x binaries removed at authors request.

[mod_wsgi‑3.5.ap22.win‑amd64‑py2.6.zip](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mod_wsgi‑3.5.ap22.win‑amd64‑py2.7.zip](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mod_wsgi‑3.5.ap22.win‑amd64‑py3.2.zip](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mod_wsgi‑3.5.ap22.win‑amd64‑py3.3.zip](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mod_wsgi‑3.5.ap22.win‑amd64‑py3.4.zip](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mod_wsgi‑3.5.ap22.win32‑py2.6.zip](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mod_wsgi‑3.5.ap22.win32‑py2.7.zip](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mod_wsgi‑3.5.ap22.win32‑py3.2.zip](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mod_wsgi‑3.5.ap22.win32‑py3.3.zip](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mod_wsgi‑3.5.ap22.win32‑py3.4.zip](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mod_wsgi‑3.5.ap24.win‑amd64‑py2.6.zip](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mod_wsgi‑3.5.ap24.win‑amd64‑py2.7.zip](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mod_wsgi‑3.5.ap24.win‑amd64‑py3.2.zip](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mod_wsgi‑3.5.ap24.win‑amd64‑py3.3.zip](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mod_wsgi‑3.5.ap24.win‑amd64‑py3.4.zip](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mod_wsgi‑3.5.ap24.win32‑py2.6.zip](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mod_wsgi‑3.5.ap24.win32‑py2.7.zip](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mod_wsgi‑3.5.ap24.win32‑py3.2.zip](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mod_wsgi‑3.5.ap24.win32‑py3.3.zip](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mod_wsgi‑3.5.ap24.win32‑py3.4.zip](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="mpi4py" ></span>

#### [Mpi4py](https://bitbucket.org/mpi4py/mpi4py)

 provides bindings of the Message Passing Interface (MPI) standard.

The msmpi builds require the [HPC Pack 2012 R2](http://www.microsoft.com/en-us/download/details.aspx?id=41634).

The openmpi builds include [OpenMPI 1.6.5](http://www.open-mpi.org/) without romio.

[mpi4py‑1.3.1‑msmpi‑2012.r2.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mpi4py‑1.3.1‑msmpi‑2012.r2.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mpi4py‑1.3.1‑msmpi‑2012.r2.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mpi4py‑1.3.1‑msmpi‑2012.r2.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mpi4py‑1.3.1‑msmpi‑2012.r2.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mpi4py‑1.3.1‑msmpi‑2012.r2.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mpi4py‑1.3.1‑msmpi‑2012.r2.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mpi4py‑1.3.1‑msmpi‑2012.r2.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mpi4py‑1.3.1‑msmpi‑2012.r2.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mpi4py‑1.3.1‑msmpi‑2012.r2.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mpi4py‑1.3.1‑openmpi‑1.6.5‑.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mpi4py‑1.3.1‑openmpi‑1.6.5.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mpi4py‑1.3.1‑openmpi‑1.6.5.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mpi4py‑1.3.1‑openmpi‑1.6.5.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mpi4py‑1.3.1‑openmpi‑1.6.5.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mpi4py‑1.3.1‑openmpi‑1.6.5.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mpi4py‑1.3.1‑openmpi‑1.6.5.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mpi4py‑1.3.1‑openmpi‑1.6.5.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mpi4py‑1.3.1‑openmpi‑1.6.5.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mpi4py‑1.3.1‑openmpi‑1.6.5.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="msgpack" ></span>

#### [Msgpack](http://msgpack.org/)

, MessagePack, is an efficient binary serialization format.

[msgpack_python‑0.4.4‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[msgpack_python‑0.4.4‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[msgpack_python‑0.4.4‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[msgpack_python‑0.4.4‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[msgpack_python‑0.4.4‑cp32‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[msgpack_python‑0.4.4‑cp32‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[msgpack_python‑0.4.4‑cp33‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[msgpack_python‑0.4.4‑cp33‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[msgpack_python‑0.4.4‑cp34‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[msgpack_python‑0.4.4‑cp34‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="mxbase" ></span>

#### [mxBase](http://www.egenix.com/products/python/mxBase/)

 contains packages such as mxDateTime, mxTextTools, mxTools, etc.

[egenix‑mx‑base‑3.2.8.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[egenix‑mx‑base‑3.2.8.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[egenix‑mx‑base‑3.2.8.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[egenix‑mx‑base‑3.2.8.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="mysql-python" ></span>

#### [MySQL-python](http://sourceforge.net/projects/mysql-python/)

 is a Python database API 2.0 interface for the [MySQL](http://www.mysql.com/) database

[Mysqlclient](#mysqlclient) is a Python 3 compatible fork of MySQL-python.

[MySQL_python‑1.2.5‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[MySQL_python‑1.2.5‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[MySQL_python‑1.2.5‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[MySQL_python‑1.2.5‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="mysqlclient" ></span>

#### [Mysqlclient](https://github.com/PyMySQL/mysqlclient-python)

 is a fork of the [MySQL-python](#mysql-python) interface for the [MySQL](http://www.mysql.com/) database.

[mysqlclient‑1.3.4‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mysqlclient‑1.3.4‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mysqlclient‑1.3.4‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mysqlclient‑1.3.4‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mysqlclient‑1.3.4‑cp33‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mysqlclient‑1.3.4‑cp33‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mysqlclient‑1.3.4‑cp34‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mysqlclient‑1.3.4‑cp34‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="natgrid" ></span>

#### [Natgrid](https://github.com/matplotlib/natgrid)

 is an interface to the natgrid C library for gridding irregularly spaced data.

[natgrid‑0.2.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[natgrid‑0.2.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[natgrid‑0.2.1.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[natgrid‑0.2.1.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[natgrid‑0.2.1.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[natgrid‑0.2.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[natgrid‑0.2.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[natgrid‑0.2.1.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[natgrid‑0.2.1.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[natgrid‑0.2.1.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="netcdf4" ></span>

#### [NetCDF4](https://github.com/Unidata/netcdf4-python)

 reads and writes [NetCDF](http://www.unidata.ucar.edu/software/netcdf/) and [HDF5](http://www.hdfgroup.org/HDF5/) files.

[netCDF4‑0.9.7‑ArcGIS‑10.0.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[netCDF4‑1.1.3‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[netCDF4‑1.1.3‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[netCDF4‑1.1.3‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[netCDF4‑1.1.3‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[netCDF4‑1.1.3‑cp32‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[netCDF4‑1.1.3‑cp32‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[netCDF4‑1.1.3‑cp33‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[netCDF4‑1.1.3‑cp33‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[netCDF4‑1.1.3‑cp34‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[netCDF4‑1.1.3‑cp34‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="networkx" ></span>

#### [NetworkX](http://networkx.lanl.gov/)

 is a package for complex networks.

[networkx‑1.9.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[networkx‑1.9.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[networkx‑1.9.1.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[networkx‑1.9.1.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[networkx‑1.9.1.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[networkx‑1.9.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[networkx‑1.9.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[networkx‑1.9.1.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[networkx‑1.9.1.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[networkx‑1.9.1.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="nibabel" ></span>

#### [NiBabel](http://nipy.org/nibabel)

, access a cacophony of neuro-imaging file formats.

[nibabel‑2.0.0‑py2.py3‑none‑any.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="nipy" ></span>

#### [NIPY](http://nipy.org/)

 is for analysis of structural and functional neuroimaging data.

Requires [numpy-mkl](#numpy).

[nipy‑0.3.0.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[nipy‑0.3.0.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[nipy‑0.3.0.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[nipy‑0.3.0.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[nipy‑0.3.0.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[nipy‑0.3.0.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[nipy‑0.3.0.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[nipy‑0.3.0.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="nipype" ></span>

#### [Nipype](http://nipy.org/nipype)

, workflows and interfaces for neuroimaging packages.

[nipype‑0.9.2.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[nipype‑0.9.2.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[nipype‑0.9.2.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[nipype‑0.9.2.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="nitime" ></span>

#### [NiTime](http://nipy.sourceforge.net/nitime/)

 is a library for time-series analysis of data from neuroscience experiments.

[nitime‑0.5.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[nitime‑0.5.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[nitime‑0.5.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[nitime‑0.5.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[nitime‑0.5.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[nitime‑0.5.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[nitime‑0.5.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[nitime‑0.5.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[nitime‑0.5.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[nitime‑0.5.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="nlopt" ></span>

#### [NLopt](http://ab-initio.mit.edu/nlopt)

 is a library for nonlinear optimization.

[NLopt‑2.4.2‑numpy‑1.4.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[NLopt‑2.4.2‑numpy‑1.4.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[NLopt‑2.4.2.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[NLopt‑2.4.2.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[NLopt‑2.4.2.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[NLopt‑2.4.2.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[NLopt‑2.4.2.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[NLopt‑2.4.2.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[NLopt‑2.4.2.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[NLopt‑2.4.2.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[NLopt‑2.4.2.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[NLopt‑2.4.2.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="nltk" ></span>

#### [NLTK](http://www.nltk.org/)

, the Natural Language Toolkit.

Requires [pyyaml](#pyyaml).

[nltk‑3.0.1‑py2.py3‑none‑any.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="nmoldyn" ></span>

#### [nMOLDYN](http://dirac.cnrs-orleans.fr/plone/software/nmoldyn/)

 is an interactive analysis program for Molecular Dynamics simulations.

[nMOLDYN‑3.0.10.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[nMOLDYN‑3.0.10.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[nMOLDYN‑3.0.10.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[nMOLDYN‑3.0.10.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="noise" ></span>

#### [Noise](https://github.com/caseman/noise)

 generates Perlin/simplex noise.

[noise‑1.2.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[noise‑1.2.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[noise‑1.2.1.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[noise‑1.2.1.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[noise‑1.2.1.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[noise‑1.2.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[noise‑1.2.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[noise‑1.2.1.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[noise‑1.2.1.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[noise‑1.2.1.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="nose" ></span>

#### [Nose](http://readthedocs.org/docs/nose/en/latest/)

 extends unittest to make testing easier.

[nose‑1.3.4.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[nose‑1.3.4.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[nose‑1.3.4.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[nose‑1.3.4.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[nose‑1.3.4.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[nose‑1.3.4.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[nose‑1.3.4.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[nose‑1.3.4.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[nose‑1.3.4.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[nose‑1.3.4.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="numba" ></span>

#### [Numba](http://numba.pydata.org/)

 is a NumPy aware dynamic compiler.

Requires [numpy-mkl](#numpy) and [llvmlite](#llvmlite).

[numba‑0.16.0.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[numba‑0.16.0.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[numba‑0.16.0.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[numba‑0.16.0.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[numba‑0.16.0.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[numba‑0.16.0.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[numba‑0.16.0.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[numba‑0.16.0.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="numexpr" ></span>

#### [Numexpr](https://github.com/pydata/numexpr)

 is a fast numerical array expression evaluator.

Requires [numpy-mkl](#numpy).

[numexpr‑2.4.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[numexpr‑2.4.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[numexpr‑2.4.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[numexpr‑2.4.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[numexpr‑2.4.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[numexpr‑2.4.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[numexpr‑2.4.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[numexpr‑2.4.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[numexpr‑2.4.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[numexpr‑2.4.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="numpy" ></span>

#### [NumPy](http://www.numpy.org/)

 (NumPy-MKL) is a fundamental package needed for scientific computing with Python

Numpy-MKL is linked statically to the [Intel® Math Kernel Library](http://software.intel.com/en-us/articles/intel-mkl/).

Numpy-MKL includes the [runtime libraries for Intel C++ and Fortran](https://software.intel.com/en-us/articles/redistributable-libraries-for-intel-c-and-visual-fortran-composer-xe-2013-sp1-for-windows) in the numpy.core directory.

[numpy‑1.8.2‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[numpy‑1.8.2‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[numpy‑1.8.2‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[numpy‑1.8.2‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[numpy‑1.8.2‑cp32‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[numpy‑1.8.2‑cp32‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[numpy‑1.8.2‑cp33‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[numpy‑1.8.2‑cp33‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[numpy‑1.8.2‑cp34‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[numpy‑1.8.2‑cp34‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[numpy‑MKL‑1.9.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[numpy‑MKL‑1.9.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[numpy‑MKL‑1.9.1.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[numpy‑MKL‑1.9.1.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[numpy‑MKL‑1.9.1.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[numpy‑MKL‑1.9.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[numpy‑MKL‑1.9.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[numpy‑MKL‑1.9.1.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[numpy‑MKL‑1.9.1.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[numpy‑MKL‑1.9.1.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="numscons" ></span>

#### [Numscons](http://projects.scipy.org/numpy/wiki/NumScons)

 (obsolete) provides an alternative build system for numpy.

[numscons‑0.12.0.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[numscons‑0.12.0.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[numscons‑0.12.0.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[numscons‑0.12.0.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="ode" ></span>

#### [ODE](http://www.ode.org/)

, the Open Dynamics Engine, is a high performance library for simulating rigid body dynamics.

[ode‑0.13.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ode‑0.13.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ode‑0.13.1.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ode‑0.13.1.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ode‑0.13.1.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ode‑0.13.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ode‑0.13.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ode‑0.13.1.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ode‑0.13.1.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ode‑0.13.1.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="openbabel" ></span>

#### [OpenBabel](http://openbabel.org)

, the open source chemistry toolbox.

[openbabel‑1.8.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[openbabel‑1.8.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[openbabel‑1.8.1.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[openbabel‑1.8.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[openbabel‑1.8.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[openbabel‑1.8.1.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="opencv" ></span>

#### [OpenCV](http://opencv.org/)

 is a real time computer vision library.

Built with IPP, TBB, and OpenCL.

[opencv‑python‑2.4.10.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[opencv‑python‑2.4.10.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[opencv‑python‑2.4.10.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[opencv‑python‑2.4.10.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="openexr" ></span>

#### [OpenEXR](http://www.excamera.com/sphinx/articles-openexr.html)

 are bindings for ILM's [OpenEXR](http://www.openexr.com/) image file format.

[OpenEXR‑1.2.0.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[OpenEXR‑1.2.0.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[OpenEXR‑1.2.0.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[OpenEXR‑1.2.0.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="openglcontext" ></span>

#### [OpenGLContext](http://pyopengl.sourceforge.net/context/)

 is a testing and learning environment for PyOpenGL.

[OpenGLContext‑2.3.0b1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[OpenGLContext‑2.3.0b1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[OpenGLContext‑2.3.0b1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[OpenGLContext‑2.3.0b1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="openimageio" ></span>

#### [OpenImageIO](https://github.com/OpenImageIO/oiio)

 is a library for reading and writing images with emphasis on animation and visual effects.

Includes [OpenColorIO](http://opencolorio.org/).

[OpenImageIO‑1.4.15‑bin‑vc9‑x64.zip](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[OpenImageIO‑1.4.15.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[OpenImageIO‑1.4.15.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="orange" ></span>

#### [Orange](http://orange.biolab.si/)

 is a machine learning and interactive data mining toolbox.

Requires [pyqt4](#pyqt4), [pyqwt](#pyqwt), and [networkx](#networkx).

[Orange‑2.7.8.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Orange‑2.7.8.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Orange‑2.7.8.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Orange‑2.7.8.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Orange‑Text‑1.2a1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Orange‑Text‑1.2a1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Orange‑Text‑1.2a1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Orange‑Text‑1.2a1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="oursql" ></span>

#### [Oursql](https://launchpad.net/oursql)

 is a set of bindings for the [MySQL](http://www.mysql.com/) database.

[oursql‑0.9.3.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[oursql‑0.9.3.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[oursql‑0.9.3.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[oursql‑0.9.3.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[oursql‑0.9.4.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[oursql‑0.9.4.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[oursql‑0.9.4.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[oursql‑0.9.4.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[oursql‑0.9.4.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[oursql‑0.9.4.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pandas" ></span>

#### [Pandas](http://pandas.pydata.org/)

 is a cross-section and time series data analysis toolkit.

Requires [numpy](#numpy), [dateutil](#python-dateutil), [pytz](#pytz), [setuptools](#setuptools), and optionally [numexpr](#numexpr), [bottleneck](#bottleneck), [scipy](#scipy),
         [matplotlib](#matplotlib), [pytables](#pytables), [lxml](#lxml), [statsmodels](#statsmodels), [sqlalchemy](#sqlalchemy) and other [dependencies](http://pandas.pydata.org/pandas-docs/stable/install.html#dependencies).

[pandas‑0.15.2‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pandas‑0.15.2‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pandas‑0.15.2‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pandas‑0.15.2‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pandas‑0.15.2‑cp32‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pandas‑0.15.2‑cp32‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pandas‑0.15.2‑cp33‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pandas‑0.15.2‑cp33‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pandas‑0.15.2‑cp34‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pandas‑0.15.2‑cp34‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="patsy" ></span>

#### [Patsy](https://pypi.python.org/pypi/patsy)

 is a package for describing statistical models and for building design matrices.

[patsy‑0.3.0‑py2.py3‑none‑any.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="persistent" ></span>

#### [Persistent](https://pypi.python.org/pypi/persistent)

, translucent persistent objects.

[persistent‑4.0.8‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[persistent‑4.0.8‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[persistent‑4.0.8‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[persistent‑4.0.8‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[persistent‑4.0.8‑cp32‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[persistent‑4.0.8‑cp32‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[persistent‑4.0.8‑cp33‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[persistent‑4.0.8‑cp33‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[persistent‑4.0.8‑cp34‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[persistent‑4.0.8‑cp34‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pgmagick" ></span>

#### [Pgmagick](http://pypi.python.org/pypi/pgmagick/)

 is yet another wrapper for [GraphicsMagick](http://www.graphicsmagick.org/).

[pgmagick‑0.5.8.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pgmagick‑0.5.8.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pgmagick‑0.5.8.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pgmagick‑0.5.8.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pgmagick‑0.5.8.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pgmagick‑0.5.8.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pillow" ></span>

#### [Pillow](https://github.com/python-imaging/Pillow)

 <span id="pil" ></span> is a replacement for [PIL](http://www.pythonware.com/products/pil/), the Python Image Library, which provides image processing functionality and supports many file formats.

Use `from PIL import Image` instead of `import Image`.

[Pillow‑2.7.0‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Pillow‑2.7.0‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Pillow‑2.7.0‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Pillow‑2.7.0‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Pillow‑2.7.0‑cp32‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Pillow‑2.7.0‑cp32‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Pillow‑2.7.0‑cp33‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Pillow‑2.7.0‑cp33‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Pillow‑2.7.0‑cp34‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Pillow‑2.7.0‑cp34‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Pillow‑2.7.0.win32‑pypy2.4‑py2.7.zip](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pip" ></span>

#### [Pip](http://pypi.python.org/pypi/pip/)

 is the recommended tool for installing Python packages.

Pip and setuptools are included with Python >=3.4 and >=2.7.9.

To bootstrap pip on installations without pip, use the [get-pip.py](https://pip.pypa.io/en/latest/installing.html#install-pip) script or run

python.exe pip‑6.0.6‑py2.py3‑none‑any.whl/pip install pip‑6.0.6‑py2.py3‑none‑any.whl.

[pip‑6.0.6‑py2.py3‑none‑any.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="planar" ></span>

#### [Planar](http://pypi.python.org/pypi/planar)

 is a 2D planar geometry library.

[planar‑0.4.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[planar‑0.4.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[planar‑0.4.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[planar‑0.4.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[planar‑0.4.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[planar‑0.4.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[planar‑0.4.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[planar‑0.4.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[planar‑0.4.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[planar‑0.4.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="polygon" ></span>

#### [Polygon](http://www.j-raedler.de/projects/polygon)

 handles polygonal shapes in 2D.

This library is [ free for non-commercial use only](http://www.cs.man.ac.uk/~toby/alan/software/#Licensing).

[Polygon2‑2.0.7.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Polygon2‑2.0.7.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Polygon2‑2.0.7.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Polygon2‑2.0.7.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Polygon3‑3.0.7.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Polygon3‑3.0.7.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Polygon3‑3.0.7.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Polygon3‑3.0.7.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Polygon3‑3.0.7.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Polygon3‑3.0.7.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="polymode" ></span>

#### [Polymode](http://code.google.com/p/polymode/)

 performs modal analysis of microstructured optical fibers.

Requires [numpy-mkl](#numpy).

[Polymode‑0.1.2.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Polymode‑0.1.2.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Polymode‑0.1.2.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Polymode‑0.1.2.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="psutil" ></span>

#### [Psutil](https://github.com/giampaolo/psutil)

 provides information on running processes and system utilization.

[psutil‑2.2.0‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[psutil‑2.2.0‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[psutil‑2.2.0‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[psutil‑2.2.0‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[psutil‑2.2.0‑cp32‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[psutil‑2.2.0‑cp32‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[psutil‑2.2.0‑cp33‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[psutil‑2.2.0‑cp33‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[psutil‑2.2.0‑cp34‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[psutil‑2.2.0‑cp34‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="psycopg" ></span>

#### [Psycopg](http://initd.org/psycopg/)

 is a [PostgreSQL](http://www.postgresql.org/) database adapter.

Built against PostgreSQL 9.3.

[psycopg2‑2.5.4‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[psycopg2‑2.5.4‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[psycopg2‑2.5.4‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[psycopg2‑2.5.4‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[psycopg2‑2.5.4‑cp32‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[psycopg2‑2.5.4‑cp32‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[psycopg2‑2.5.4‑cp33‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[psycopg2‑2.5.4‑cp33‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[psycopg2‑2.5.4‑cp34‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[psycopg2‑2.5.4‑cp34‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pulp" ></span>

#### [PuLP](http://code.google.com/p/pulp-or/)

 is an LP modeler using the [CoinMP](https://projects.coin-or.org/CoinMP) library

Requires [pyparsing](#pyparsing).

[PuLP‑1.5.6.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PuLP‑1.5.6.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PuLP‑1.5.6.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PuLP‑1.5.6.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PuLP‑1.5.6.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PuLP‑1.5.6.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PuLP‑1.5.6.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PuLP‑1.5.6.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PuLP‑1.5.6.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PuLP‑1.5.6.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="py-fcm" ></span>

#### [Py-fcm](http://code.google.com/p/py-fcm/)

 is a library for flow cytometry.

[fcm‑0.9.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[fcm‑0.9.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[fcm‑0.9.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[fcm‑0.9.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="py-postgresql" ></span>

#### [Py-postgresql](http://python.projects.pgfoundry.org/)

 is a [PostgreSQL](http://www.postgresql.org/) driver and tools library.

[py‑postgresql‑1.1.0.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[py‑postgresql‑1.1.0.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[py‑postgresql‑1.1.0.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[py‑postgresql‑1.1.0.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="py2exe" ></span>

#### [Py2exe](http://www.py2exe.org/)

 converts Python scripts into executable Windows programs.

[py2exe‑0.6.10a1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[py2exe‑0.6.10a1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[py2exe‑0.6.10a1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[py2exe‑0.6.10a1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[py2exe‑0.9.2.2.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[py2exe‑0.9.2.2.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[py2exe‑0.9.2.2.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[py2exe‑0.9.2.2.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pyalembic" ></span>

#### [PyAlembic](http://code.google.com/p/alembic/)

 provides bindings for the [Alembic](http://www.alembic.io/) computer graphics interchange framework.

Includes [OpenEXR PyIlmBase](http://www.openexr.com/).

[abcview‑1.0.8‑py2‑none‑any.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyAlembic‑1.5.7.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyAlembic‑1.5.7.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyAlembic‑1.5.7.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyAlembic‑1.5.7.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pyamf" ></span>

#### [PyAMF](https://pypi.python.org/pypi/PyAMF)

 provides Action Message Format (AMF) support.

[PyAMF‑0.6.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyAMF‑0.6.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyAMF‑0.6.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyAMF‑0.6.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pyamg" ></span>

#### [PyAMG](http://pyamg.org/)

 is a library of Algebraic Multigrid (AMG) solvers.

[pyamg‑2.1.0.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyamg‑2.1.0.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyamg‑2.1.0.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyamg‑2.1.0.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pyaudio" ></span>

#### [PyAudio](http://people.csail.mit.edu/hubert/pyaudio/)

 provides bindings for the [PortAudio](http://www.portaudio.com/) library.

Includes ASIO, DS, WMME, WASAPI, WDMKS support.

[PyAudio‑0.2.8.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyAudio‑0.2.8.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyAudio‑0.2.8.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyAudio‑0.2.8.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyAudio‑0.2.8.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyAudio‑0.2.8.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyAudio‑0.2.8.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyAudio‑0.2.8.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyAudio‑0.2.8.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyAudio‑0.2.8.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pybluez" ></span>

#### [PyBluez](http://code.google.com/p/pybluez/)

 is a wrapper around system Bluetooth resources.

[PyBluez‑0.20.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyBluez‑0.20.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyBluez‑0.20.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyBluez‑0.20.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyBluez‑0.20.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyBluez‑0.20.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyBluez‑0.20.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyBluez‑0.20.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyBluez‑0.20.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyBluez‑0.20.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pybox2d" ></span>

#### [PyBox2D](http://code.google.com/p/pybox2d/)

 is a 2D physics library based on [Box2D](http://www.box2d.org/).

[Box2D‑2.1b1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Box2D‑2.1b1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Box2D‑2.1b1.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Box2D‑2.1b1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Box2D‑2.1b1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Box2D‑2.1b1.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pycairo" ></span>

#### [Pycairo](http://cairographics.org/pycairo/)

 is a set of bindings for the [cairo](http://cairographics.org) graphics library.

These builds are not compatible with [PyGTK](#pygtk) and [wxPython](#wxpython).

[pycairo‑1.10.0‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycairo‑1.10.0‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycairo‑1.10.0‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycairo‑1.10.0‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycairo‑1.10.0‑cp32‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycairo‑1.10.0‑cp32‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycairo‑1.10.0‑cp33‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycairo‑1.10.0‑cp33‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycairo‑1.10.0‑cp34‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycairo‑1.10.0‑cp34‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pycares" ></span>

#### [Pycares](https://pypi.python.org/pypi/pycares)

 provides an interface to c-ares.

[pycares‑0.6.3.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycares‑0.6.3.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycares‑0.6.3.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycares‑0.6.3.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycares‑0.6.3.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycares‑0.6.3.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycares‑0.6.3.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycares‑0.6.3.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycares‑0.6.3.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycares‑0.6.3.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pycifrw" ></span>

#### [PyCifRW](https://bitbucket.org/jamesrhester/pycifrw/)

 provides support for reading and writing [CIF](http://www.iucr.org/resources/cif) files.

[PyCifRW‑3.6.2‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyCifRW‑3.6.2‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyCifRW‑3.6.2‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyCifRW‑3.6.2‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyCifRW‑4.1‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyCifRW‑4.1‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyCifRW‑4.1‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyCifRW‑4.1‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pycluster" ></span>

#### [PyCluster](http://bonsai.hgc.jp/~mdehoon/software/cluster/software.htm)

 implements clustering methods for gene expression data analysis.

[Pycluster‑1.52‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Pycluster‑1.52‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Pycluster‑1.52‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Pycluster‑1.52‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Pycluster‑1.52‑cp32‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Pycluster‑1.52‑cp32‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Pycluster‑1.52‑cp33‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Pycluster‑1.52‑cp33‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Pycluster‑1.52‑cp34‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Pycluster‑1.52‑cp34‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pycogent" ></span>

#### [PyCogent](https://github.com/pycogent/pycogent/)

 is a software library for genomic biology.

[cogent‑1.5.3.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cogent‑1.5.3.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cogent‑1.5.3.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cogent‑1.5.3.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pycosat" ></span>

#### [Pycosat](https://pypi.python.org/pypi/pycosat)

, bindings to the [PicoSAT](http://fmv.jku.at/picosat/) SAT solver.

[pycosat‑0.6.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycosat‑0.6.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycosat‑0.6.1.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycosat‑0.6.1.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycosat‑0.6.1.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycosat‑0.6.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycosat‑0.6.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycosat‑0.6.1.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycosat‑0.6.1.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycosat‑0.6.1.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pycparser" ></span>

#### [Pycparser](https://github.com/eliben/pycparser)

 is a complete parser for the C language.

[pycparser‑2.10.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycparser‑2.10.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycparser‑2.10.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycparser‑2.10.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycparser‑2.10.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycparser‑2.10.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycparser‑2.10.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycparser‑2.10.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycparser‑2.10.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycparser‑2.10.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pycuda" ></span>

#### [PyCUDA](http://mathema.tician.de/software/pycuda)

 gives access to Nvidia's parallel computing API.

Requires [pytools](#pytools), [CUDA Toolkit 6.5](http://developer.nvidia.com/cuda-downloads), compatible Nvidia driver, and MSVC compiler.

[pycuda‑2014.1+cuda6514‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycuda‑2014.1+cuda6514‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycuda‑2014.1+cuda6514‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycuda‑2014.1+cuda6514‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycuda‑2014.1+cuda6514‑cp33‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycuda‑2014.1+cuda6514‑cp33‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycuda‑2014.1+cuda6514‑cp34‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycuda‑2014.1+cuda6514‑cp34‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycuda‑2014.1+cuda6519‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycuda‑2014.1+cuda6519‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycuda‑2014.1+cuda6519‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycuda‑2014.1+cuda6519‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycuda‑2014.1+cuda6519‑cp33‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycuda‑2014.1+cuda6519‑cp33‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycuda‑2014.1+cuda6519‑cp34‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycuda‑2014.1+cuda6519‑cp34‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pycurl" ></span>

#### [PycURL](http://pycurl.sourceforge.net/)

 is a interface to the [libcurl](http://curl.haxx.se/libcurl/) library.

[pycurl‑7.19.5.1‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycurl‑7.19.5.1‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycurl‑7.19.5.1‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycurl‑7.19.5.1‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycurl‑7.19.5.1‑cp32‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycurl‑7.19.5.1‑cp32‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycurl‑7.19.5.1‑cp33‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycurl‑7.19.5.1‑cp33‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycurl‑7.19.5.1‑cp34‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pycurl‑7.19.5.1‑cp34‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pydbg" ></span>

#### [PyDbg](https://github.com/OpenRCE/pydbg)

 is a Win32 debugger interface.

Includes the [pydasm](http://code.google.com/p/libdasm/) disassembly library.

[pydbg‑1.2.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pydbg‑1.2.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pydbg‑1.2.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pydbg‑1.2.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pydde" ></span>

#### [PyDDE](http://users.ox.ac.uk/~clme1073/python/PyDDE/)

 is a numerical solver for systems of delay differential equations (DDEs).

[PyDDE‑0.2.2.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyDDE‑0.2.2.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyDDE‑0.2.2.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyDDE‑0.2.2.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyDDE‑0.2.2.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyDDE‑0.2.2.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyDDE‑0.2.2.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyDDE‑0.2.2.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyDDE‑0.2.2.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyDDE‑0.2.2.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pyeda" ></span>

#### [PyEDA](https://github.com/cjdrake/pyeda)

 is a library for electronic design automation.

[pyeda‑0.26.0‑cp33‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyeda‑0.26.0‑cp33‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyeda‑0.26.0‑cp34‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyeda‑0.26.0‑cp34‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pyephem" ></span>

#### [PyEphem](http://rhodesmill.org/pyephem/)

 provides scientific-grade astronomical computations.

[ephem‑3.7.5.3.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ephem‑3.7.5.3.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ephem‑3.7.5.3.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ephem‑3.7.5.3.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ephem‑3.7.5.3.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ephem‑3.7.5.3.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ephem‑3.7.5.3.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ephem‑3.7.5.3.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ephem‑3.7.5.3.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ephem‑3.7.5.3.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pyexiv2" ></span>

#### [Pyexiv2](http://tilloy.net/dev/pyexiv2/)

 provides bindings to the [exiv2](http://exiv2.org/) library for image metadata.

[pyexiv2‑0.3.2.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyexiv2‑0.3.2.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyexiv2‑0.3.2.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyexiv2‑0.3.2.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pyfftw" ></span>

#### [PyFFTW](https://github.com/hgomersall/pyFFTW/)

 is a wrapper around the [FFTW](http://www.fftw.org) C library.

[pyFFTW‑0.10.dev.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyFFTW‑0.10.dev.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyFFTW‑0.10.dev.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyFFTW‑0.10.dev.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyFFTW‑0.10.dev.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyFFTW‑0.10.dev.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyFFTW‑0.10.dev.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyFFTW‑0.10.dev.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyFFTW‑0.10.dev.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyFFTW‑0.10.dev.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pyfftw3" ></span>

#### [PyFFTW3](https://launchpad.net/pyfftw/)

 are bindings to the [FFTW](http://www.fftw.org) C library.

[PyFFTW3‑0.2.2.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyFFTW3‑0.2.2.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyFFTW3‑0.2.2.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyFFTW3‑0.2.2.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pyfits" ></span>

#### [PyFITS](http://www.stsci.edu/resources/software_hardware/pyfits)

 provides an interface to [FITS](http://www.cv.nrao.edu/fits/) formatted files.

This package is now part of [astropy](#astropy).

[pyfits‑3.3.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyfits‑3.3.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyfits‑3.3.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyfits‑3.3.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyfits‑3.3.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyfits‑3.3.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyfits‑3.3.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyfits‑3.3.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyfits‑3.3.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyfits‑3.3.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pyfltk" ></span>

#### [pyFLTK](http://pyfltk.sourceforge.net/)

 is a wrapper for the [Fast Light Tool Kit](http://www.fltk.org/) cross-platform graphical user-interface library.

[pyFltk‑1.3.1rc1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyFltk‑1.3.1rc1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyFltk‑1.3.1rc1.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyFltk‑1.3.1rc1.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyFltk‑1.3.1rc1.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyFltk‑1.3.1rc1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyFltk‑1.3.1rc1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyFltk‑1.3.1rc1.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyFltk‑1.3.1rc1.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyFltk‑1.3.1rc1.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pyfmi" ></span>

#### [PyFMI](https://pypi.python.org/pypi/PyFMI)

 enables loading and interacting with Functional Mock-Up Units (FMUs).

Requires [numpy-mkl](#numpy), [assimulo](#assimulo), [lxml](#lxml) and [scipy](#scipy).

[PyFMI‑1.5.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyFMI‑1.5.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyFMI‑1.5.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyFMI‑1.5.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pygame" ></span>

#### [Pygame](https://bitbucket.org/pygame/pygame/)

 is a library for writing games based on the [SDL](http://www.libsdl.org) library.

[pygame‑1.9.2a0‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pygame‑1.9.2a0‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pygame‑1.9.2a0‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pygame‑1.9.2a0‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pygame‑1.9.2a0‑cp32‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pygame‑1.9.2a0‑cp32‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pygame‑1.9.2a0‑cp33‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pygame‑1.9.2a0‑cp33‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pygame‑1.9.2a0‑cp34‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pygame‑1.9.2a0‑cp34‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pygame‑1.9.2a0.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pygame‑1.9.2a0.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pygame‑1.9.2a0.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pygame‑1.9.2a0.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pygame‑1.9.2a0.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pygame‑1.9.2a0.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pygame‑1.9.2a0.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pygame‑1.9.2a0.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pygame‑1.9.2a0.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pygame‑1.9.2a0.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pygit2" ></span>

#### [Pygit2](http://www.pygit2.org/)

 is a set of bindings to the [libgit2](http://libgit2.github.com/) shared library.

[pygit2‑0.21.3.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pygit2‑0.21.3.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pygit2‑0.21.3.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pygit2‑0.21.3.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pygit2‑0.21.3.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pygit2‑0.21.3.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pygit2‑0.21.3.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pygit2‑0.21.3.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pygit2‑0.21.3.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pygit2‑0.21.3.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pyglet" ></span>

#### [Pyglet](http://www.pyglet.org/)

 is a cross-platform windowing and multimedia library using [AVbin](http://avbin.github.com).

[pyglet‑1.2a1‑py2‑none‑any.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyglet‑1.2a1‑py3‑none‑any.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pygments" ></span>

#### [Pygments](http://pygments.org/)

 is a generic syntax highlighter.

[Pygments‑1.6.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Pygments‑1.6.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Pygments‑2.0.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Pygments‑2.0.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Pygments‑2.0.1.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Pygments‑2.0.1.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Pygments‑2.0.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Pygments‑2.0.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Pygments‑2.0.1.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Pygments‑2.0.1.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pygraphviz" ></span>

#### [PyGraphviz](http://networkx.lanl.gov/pygraphviz/)

 is an interface to the [Graphviz](http://www.graphviz.org/) graph layout and visualization package.

Requires [graphviz-2.32.msi](http://www.graphviz.org/Download_windows.php).

[pygraphviz‑1.2.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pygraphviz‑1.2.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pygraphviz‑1.2.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pygraphviz‑1.2.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pygtk" ></span>

#### [PyGTK](http://www.pygtk.org/)

 is a wrapper for the [GTK+](http://www.gtk.org/) library.

Requires the [GTK+ 2.22](http://ftp.gnome.org/pub/GNOME/binaries/) runtime.

[py2cairo‑1.10.0.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[py2cairo‑1.10.0.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[py2cairo‑1.10.0.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[py2cairo‑1.10.0.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pygobject‑2.28.6.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pygobject‑2.28.6.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pygobject‑2.28.6.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pygobject‑2.28.6.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pygtk‑2.22.0.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pygtk‑2.22.0.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pygtk‑2.22.0.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pygtk‑2.22.0.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pyhdf" ></span>

#### [PyHDF](http://pysclint.sourceforge.net/pyhdf/)

 is an interface to the NCSA [HDF4](http://www.hdfgroup.org/products/hdf4/) library.

[pyhdf‑0.8.3.forked‑source.zip](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyhdf‑0.8.3.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyhdf‑0.8.3.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyhdf‑0.8.3.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyhdf‑0.8.3.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyhdf‑0.8.3.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyhdf‑0.8.3.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyhdf‑0.8.3.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyhdf‑0.8.3.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyhdf‑0.8.3.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyhdf‑0.8.3.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pyhook" ></span>

#### [PyHook](http://pyhook.wiki.sourceforge.net/)

 is a wrapper for global input hooks in Windows.

[pyHook‑1.5.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyHook‑1.5.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyHook‑1.5.1.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyHook‑1.5.1.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyHook‑1.5.1.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyHook‑1.5.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyHook‑1.5.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyHook‑1.5.1.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyHook‑1.5.1.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyHook‑1.5.1.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pyicu" ></span>

#### [PyICU](http://pyicu.osafoundation.org/)

 wraps the [ICU](http://site.icu-project.org/) (International Components for Unicode) library.

[PyICU‑1.8.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyICU‑1.8.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyICU‑1.8.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyICU‑1.8.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyICU‑1.8.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyICU‑1.8.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyICU‑1.8.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyICU‑1.8.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyICU‑1.8.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyICU‑1.8.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pyisapie" ></span>

#### [PyISAPIe](http://sourceforge.net/projects/pyisapie/)

 is an ISAPI extension for IIS.

[PyISAPIe‑1.1.0‑r201‑Py2.7.zip](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pylibdeconv" ></span>

#### [PyLibDeconv](http://code.google.com/p/pylibdeconv/)

 is a wrapper for the [deconv](https://www.lsdcas.engineering.uiowa.edu/) library.

Requires [numpy-mkl](#numpy).

[pylibdeconv‑1.0.0.dev.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pylibdeconv‑1.0.0.dev.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pylibdeconv‑1.0.0.dev.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pylibdeconv‑1.0.0.dev.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pylibtiff" ></span>

#### [PyLibTiff](http://code.google.com/p/pylibtiff/)

 is a package for reading and writing TIFF and LSM files.

[libtiff‑0.4.0.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[libtiff‑0.4.0.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[libtiff‑0.4.0.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[libtiff‑0.4.0.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pylzma" ></span>

#### [PyLZMA](http://www.joachim-bauch.de/projects/pylzma/)

 (unstable), bindings for the [LZMA](http://www.7-zip.org/sdk.html) compression library.

[pylzma‑0.4.6.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pylzma‑0.4.6.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pylzma‑0.4.6.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pylzma‑0.4.6.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pylzma‑0.4.6.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pylzma‑0.4.6.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pylzma‑0.4.6.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pylzma‑0.4.6.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pylzma‑0.4.6.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pylzma‑0.4.6.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pymatlab" ></span>

#### [Pymatlab](http://pymatlab.sourceforge.net/)

 provides an interface to MATLAB(tm) 2011b.

[pymatlab‑0.1.3.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymatlab‑0.1.3.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymatlab‑0.1.3.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymatlab‑0.1.3.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pymc" ></span>

#### [PyMC](https://github.com/pymc-devs/pymc)

 is a Markov chain Monte Carlo.

Requires [numpy-mkl](#numpy).

[pymc‑2.3.4.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymc‑2.3.4.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymc‑2.3.4.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymc‑2.3.4.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymc‑2.3.4.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymc‑2.3.4.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymc‑2.3.4.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymc‑2.3.4.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymc‑2.3.4.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymc‑2.3.4.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pymca" ></span>

#### [PyMca](http://pymca.sourceforge.net/)

 is a toolkit for X-ray fluorescence data analysis.

[PyMca‑4.7.4.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyMca‑4.7.4.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyMca‑4.7.4.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyMca‑4.7.4.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pymedia" ></span>

#### [PyMedia](http://pymedia.org/)

 is a module for media files manipulations.

[pymedia‑1.3.7.3.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymedia‑1.3.7.3.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymedia‑1.3.7.3.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymedia‑1.3.7.3.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pymex" ></span>

#### [Pymex](http://github.com/robince/pymex/tree/win64)

 embeds Python in a MATLAB(tm) 2011b extension module.

[pymex‑0.1b.win‑amd64‑py2.6.zip](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymex‑0.1b.win‑amd64‑py2.7.zip](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymex‑0.1b.win32‑py2.6.zip](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymex‑0.1b.win32‑py2.7.zip](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pyminuit" ></span>

#### [PyMinuit](http://code.google.com/p/pyminuit/)

 provides an interface to Minuit for minimizing general N-dimensional functions.

[pyMinuit‑1.2.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyMinuit‑1.2.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyMinuit‑1.2.1.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyMinuit‑1.2.1.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyMinuit‑1.2.1.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyMinuit‑1.2.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyMinuit‑1.2.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyMinuit‑1.2.1.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyMinuit‑1.2.1.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyMinuit‑1.2.1.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pymix" ></span>

#### [PyMix](http://www.pymix.org)

 implements algorithms and data structures for data mining applications.

Using [GSL](http://www.gnu.org/software/gsl/) sources from [B. Gladman](http://gladman.plushost.co.uk/oldsite/computing/gnu_scientific_library.php).

All modules are in the pymix namespace, e.g. use `from pymix import mixture`.

[pymix‑0.8b.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymix‑0.8b.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymix‑0.8b.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymix‑0.8b.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pymol" ></span>

#### [PyMOL](http://www.pymol.org/)

 (deprecated) is a molecular visualization product for rendering and animating 3D molecular structures.

PyMOL is a trademark of Schrodinger, LLC.

[pymol‑1.7.2.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymol‑1.7.2.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymol‑1.7.2.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymol‑1.7.2.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pymongo" ></span>

#### [Pymongo](http://pypi.python.org/pypi/pymongo)

 is a driver for the [Mongo](http://www.mongodb.org) database.

[pymongo‑2.7.2.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymongo‑2.7.2.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymongo‑2.7.2.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymongo‑2.7.2.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymongo‑2.7.2.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymongo‑2.7.2.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymongo‑2.7.2.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymongo‑2.7.2.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymongo‑2.7.2.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymongo‑2.7.2.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pymssql" ></span>

#### [Pymssql](http://pymssql.org/)

 is a simple MS SQL Python extension module based on [FreeTDS](http://www.freetds.org/).

[pymssql‑1.0.3.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymssql‑1.0.3.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymssql‑2.1.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymssql‑2.1.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymssql‑2.1.1.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymssql‑2.1.1.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymssql‑2.1.1.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymssql‑2.1.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymssql‑2.1.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymssql‑2.1.1.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymssql‑2.1.1.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymssql‑2.1.1.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pymunk" ></span>

#### [Pymunk](https://pypi.python.org/pypi/pymunk/)

 is a 2d physics library built on top of Chipmunk.

[pymunk‑4.0.0.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymunk‑4.0.0.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymunk‑4.0.0.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymunk‑4.0.0.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pymutt" ></span>

#### [Pymutt](http://code.google.com/p/pymutt/)

 (experimental icl build) implements a multi-taper Fourier spectral estimator.

Requires [numpy-mkl](#numpy).

[pymutt‑0.82.0.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymutt‑0.82.0.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymutt‑0.82.0.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymutt‑0.82.0.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pymvpa" ></span>

#### [PyMVPA](http://www.pymvpa.org/)

 performs multivariate pattern analysis.

[pymvpa‑0.4.8.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymvpa‑0.4.8.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymvpa‑0.4.8.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymvpa‑0.4.8.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymvpa2‑2.3.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymvpa2‑2.3.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymvpa2‑2.3.1.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymvpa2‑2.3.1.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymvpa2‑2.3.1.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymvpa2‑2.3.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymvpa2‑2.3.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymvpa2‑2.3.1.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymvpa2‑2.3.1.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pymvpa2‑2.3.1.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pynifti" ></span>

#### [PyNIfTI](http://niftilib.sourceforge.net/pynifti/)

 provides access to NIfTI and ANALYZE files.

[pynifti‑0.20100607.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pynifti‑0.20100607.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pynifti‑0.20100607.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pynifti‑0.20100607.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pyodbc" ></span>

#### [PyODBC](http://code.google.com/p/pyodbc/)

 is an Open Database Connectivity (ODBC) adapter.

[pyodbc‑3.0.7.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyodbc‑3.0.7.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyodbc‑3.0.7.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyodbc‑3.0.7.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyodbc‑3.0.7.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyodbc‑3.0.7.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyodbc‑3.0.7.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyodbc‑3.0.7.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyodbc‑3.0.7.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyodbc‑3.0.7.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pyopencl" ></span>

#### [PyOpenCL](http://mathema.tician.de/software/pyopencl/)

 gives access to the OpenCL parallel computing API.

Requires [pytools](#pytools), [mako](#mako) and an OpenCL 1.2 compatible driver (e.g. from [Intel](http://software.intel.com/en-us/vcsource/tools/opencl-sdk)).

[pyopencl‑2014.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyopencl‑2014.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyopencl‑2014.1.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyopencl‑2014.1.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyopencl‑2014.1.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyopencl‑2014.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyopencl‑2014.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyopencl‑2014.1.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyopencl‑2014.1.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyopencl‑2014.1.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pyopengl" ></span>

#### [PyOpenGL](http://pyopengl.sourceforge.net/)

 provides bindings to OpenGL, GLUT, and GLE.

[PyOpenGL‑3.1.0.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyOpenGL‑3.1.0.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyOpenGL‑3.1.0.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyOpenGL‑3.1.0.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyOpenGL‑3.1.0.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyOpenGL‑3.1.0.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyOpenGL‑3.1.0.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyOpenGL‑3.1.0.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyOpenGL‑3.1.0.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyOpenGL‑3.1.0.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyOpenGL‑accelerate‑3.1.0.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyOpenGL‑accelerate‑3.1.0.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyOpenGL‑accelerate‑3.1.0.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyOpenGL‑accelerate‑3.1.0.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyOpenGL‑accelerate‑3.1.0.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyOpenGL‑accelerate‑3.1.0.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyOpenGL‑accelerate‑3.1.0.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyOpenGL‑accelerate‑3.1.0.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyOpenGL‑accelerate‑3.1.0.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyOpenGL‑accelerate‑3.1.0.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pyparsing" ></span>

#### [Pyparsing](http://pyparsing.wikispaces.com/)

 creates and executes simple grammars.

[pyparsing‑2.0.3.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyparsing‑2.0.3.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyparsing‑2.0.3.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyparsing‑2.0.3.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyparsing‑2.0.3.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyparsing‑2.0.3.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyparsing‑2.0.3.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyparsing‑2.0.3.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyparsing‑2.0.3.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyparsing‑2.0.3.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pyproj" ></span>

#### [Pyproj](https://github.com/jswhit/pyproj)

 is an interface to the [PROJ.4](http://trac.osgeo.org/proj/) library for cartographic transformations.

[pyproj‑1.9.4‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyproj‑1.9.4‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyproj‑1.9.4‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyproj‑1.9.4‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyproj‑1.9.4‑cp32‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyproj‑1.9.4‑cp32‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyproj‑1.9.4‑cp33‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyproj‑1.9.4‑cp33‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyproj‑1.9.4‑cp34‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyproj‑1.9.4‑cp34‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pyqt4" ></span>

#### [PyQt4](http://www.riverbankcomputing.co.uk/software/pyqt/)

 is a set of bindings for the [Qt4](http://qt-project.org) application framework.

[PyQt4‑4.11.3‑gpl‑Py2.6‑Qt4.8.6‑x32.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyQt4‑4.11.3‑gpl‑Py2.6‑Qt4.8.6‑x64.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyQt4‑4.11.3‑gpl‑Py2.7‑Qt4.8.6‑x32.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyQt4‑4.11.3‑gpl‑Py2.7‑Qt4.8.6‑x64.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyQt4‑4.11.3‑gpl‑Py3.2‑Qt4.8.6‑x32.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyQt4‑4.11.3‑gpl‑Py3.2‑Qt4.8.6‑x64.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyQt4‑4.11.3‑gpl‑Py3.3‑Qt4.8.6‑x32.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyQt4‑4.11.3‑gpl‑Py3.3‑Qt4.8.6‑x64.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyQt4‑4.11.3‑gpl‑Py3.4‑Qt4.8.6‑x32.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyQt4‑4.11.3‑gpl‑Py3.4‑Qt4.8.6‑x64.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pyqwt" ></span>

#### [PyQwt](http://pyqwt.sourceforge.net/)

 plots data with Numpy and PyQt4.

Requires [pyqt4](#pyqt4).

[PyQwt‑5.2.1‑py2.6‑x32‑pyqt4.11.3‑numpy1.8.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyQwt‑5.2.1‑py2.6‑x64‑pyqt4.11.3‑numpy1.8.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyQwt‑5.2.1‑py2.7‑x32‑pyqt4.11.3‑numpy1.8.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyQwt‑5.2.1‑py2.7‑x64‑pyqt4.11.3‑numpy1.8.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyQwt‑5.2.1‑py3.2‑x32‑pyqt4.11.3‑numpy1.8.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyQwt‑5.2.1‑py3.2‑x64‑pyqt4.11.3‑numpy1.8.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyQwt‑5.2.1‑py3.3‑x32‑pyqt4.11.3‑numpy1.8.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyQwt‑5.2.1‑py3.3‑x64‑pyqt4.11.3‑numpy1.8.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyQwt‑5.2.1‑py3.4‑x32‑pyqt4.11.3‑numpy1.8.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyQwt‑5.2.1‑py3.4‑x64‑pyqt4.11.3‑numpy1.8.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pyreadline" ></span>

#### [PyReadline](https://github.com/pyreadline/pyreadline)

 (unstable) is a ctypes-based readline for Windows.

[pyreadline‑2.0.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyreadline‑2.0.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyreadline‑2.0.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyreadline‑2.0.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyreadline‑2.0.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyreadline‑2.0.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyreadline‑2.0.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyreadline‑2.0.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pyropes" ></span>

#### [Pyropes](http://sourceforge.net/projects/pyropes/)

, a scalable and efficient string implementation.

[Ropes‑1.0.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Ropes‑1.0.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Ropes‑1.0.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Ropes‑1.0.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pyrxp" ></span>

#### [pyRXP](https://pypi.python.org/pypi/pyRXP)

 is a fast, validating XML Parser.

[pyRXP‑2.1.0.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyRXP‑2.1.0.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyRXP‑2.1.0.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyRXP‑2.1.0.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyRXP‑2.1.0.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyRXP‑2.1.0.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyRXP‑2.1.0.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyRXP‑2.1.0.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pyserial" ></span>

#### [PySerial](http://pyserial.sourceforge.net/)

 encapsulates the access for the serial port.

[pyserial‑2.7.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyserial‑2.7.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyserial‑2.7.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyserial‑2.7.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyserial‑2.7.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyserial‑2.7.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyserial‑2.7.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyserial‑2.7.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyserial‑2.7.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyserial‑2.7.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pysfml" ></span>

#### [PySFML](http://python-sfml.org/)

 provides bindings for [SFML 2](http://www.sfml-dev.org/), the Simple and Fast Multimedia Library.

[pySFML‑1.2.0.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pySFML‑1.2.0.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pySFML‑1.3.0.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pySFML‑1.3.0.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pySFML‑1.3.0.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pySFML‑1.3.0.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pySFML‑1.3.0.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pySFML‑1.3.0.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pyside" ></span>

#### [PySide](http://www.pyside.org/)

 provides bindings for the [Qt](http://qt.nokia.com/) cross-platform application and UI framework.

[PySide‑1.2.2.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PySide‑1.2.2.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PySide‑1.2.2.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PySide‑1.2.2.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PySide‑1.2.2.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PySide‑1.2.2.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PySide‑1.2.2.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PySide‑1.2.2.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PySide‑1.2.2.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PySide‑1.2.2.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pysparse" ></span>

#### [PySparse](http://pysparse.sourceforge.net/)

 is a fast sparse matrix library.

Requires [numpy-mkl](#numpy).

[pysparse‑1.1.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pysparse‑1.1.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pysparse‑1.1.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pysparse‑1.1.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pysparse‑1.3‑dev.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pysparse‑1.3‑dev.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pysparse‑1.3‑dev.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pysparse‑1.3‑dev.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pyspharm" ></span>

#### [Pyspharm](http://code.google.com/p/pyspharm)

 is a spherical harmonic transform module based on [SPHEREPACK](http://www2.cisl.ucar.edu/resources/legacy/spherepack).

Requires [numpy-mkl](#numpy).

[pyspharm‑1.0.9.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyspharm‑1.0.9.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyspharm‑1.0.9.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyspharm‑1.0.9.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyspharm‑1.0.9.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyspharm‑1.0.9.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyspharm‑1.0.9.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyspharm‑1.0.9.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyspharm‑1.0.9.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyspharm‑1.0.9.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pysqlite" ></span>

#### [Pysqlite](https://github.com/ghaering/pysqlite)

 is a DB-API 2.0 interface for [SQLite](http://www.sqlite.org/) databases.

[pysqlite‑2.6.3.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pysqlite‑2.6.3.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pysqlite‑2.6.3.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pysqlite‑2.6.3.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pystemmer" ></span>

#### [PyStemmer](https://pypi.python.org/pypi/PyStemmer)

 calculates stemmed forms of words.

[PyStemmer‑1.3.0.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyStemmer‑1.3.0.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyStemmer‑1.3.0.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyStemmer‑1.3.0.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyStemmer‑1.3.0.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyStemmer‑1.3.0.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyStemmer‑1.3.0.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyStemmer‑1.3.0.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyStemmer‑1.3.0.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyStemmer‑1.3.0.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pytables" ></span>

#### [PyTables](http://www.pytables.org/)

 is a package for managing hierarchical datasets based on the [HDF5](http://www.hdfgroup.org/HDF5/) library.

Requires [numexpr](#numexpr).

[tables‑3.1.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[tables‑3.1.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[tables‑3.1.1.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[tables‑3.1.1.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[tables‑3.1.1.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[tables‑3.1.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[tables‑3.1.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[tables‑3.1.1.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[tables‑3.1.1.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[tables‑3.1.1.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="python-cjson" ></span>

#### [Python-cjson](http://pypi.python.org/pypi/python-cjson/)

 implements a very fast [JSON](http://json.org/) encoder/decoder.

Using sources from [effbot](http://bitbucket.org/effbot/cjson-effbot/).

[python‑cjson‑1.0.6b1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python‑cjson‑1.0.6b1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python‑cjson‑1.0.6b1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python‑cjson‑1.0.6b1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="python-dateutil" ></span>

#### [Python-Dateutil](https://pypi.python.org/pypi/python-dateutil)

 extends the standard datetime module.

Requires [six](#six).

[python_dateutil‑2.4.0‑py2.py3‑none‑any.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="python-igraph" ></span>

#### [Python-igraph](http://igraph.org/python/)

 is an interface to the [igraph](http://igraph.org) high performance graph library.

Requires [pycairo](#pycairo).

[python‑igraph‑0.7.0.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python‑igraph‑0.7.0.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python‑igraph‑0.7.0.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python‑igraph‑0.7.0.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python‑igraph‑0.7.0.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python‑igraph‑0.7.0.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python‑igraph‑0.7.0.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python‑igraph‑0.7.0.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python‑igraph‑0.7.0.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python‑igraph‑0.7.0.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="python-ldap" ></span>

#### [Python-ldap](http://www.python-ldap.org/)

 provides an object-oriented API to access LDAP directory servers via [OpenLDAP](http://www.openldap.org/).

[python_ldap‑2.4.19‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python_ldap‑2.4.19‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python_ldap‑2.4.19‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python_ldap‑2.4.19‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="python-levenshtein" ></span>

#### [Python-Levenshtein](http://pypi.python.org/pypi/python-Levenshtein/)

 computes string distances and similarities.

[python‑Levenshtein‑0.11.2.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python‑Levenshtein‑0.11.2.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python‑Levenshtein‑0.11.2.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python‑Levenshtein‑0.11.2.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python‑Levenshtein‑0.11.2.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python‑Levenshtein‑0.11.2.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python‑Levenshtein‑0.11.2.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python‑Levenshtein‑0.11.2.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python‑Levenshtein‑0.11.2.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python‑Levenshtein‑0.11.2.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="python-lz4" ></span>

#### [Python-lz4](https://github.com/steeve/python-lz4)

, bindings for the [lz4 compression library](http://code.google.com/p/lz4/).

[lz4‑0.7.0.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[lz4‑0.7.0.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[lz4‑0.7.0.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[lz4‑0.7.0.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[lz4‑0.7.0.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[lz4‑0.7.0.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[lz4‑0.7.0.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[lz4‑0.7.0.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[lz4‑0.7.0.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[lz4‑0.7.0.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="python-lzo" ></span>

#### [Python-LZO](https://bitbucket.org/james_taylor/python-lzo-static)

, bindings for the [LZO](http://www.oberhumer.com/opensource/lzo/) data compression library.

[python‑lzo‑1.08.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python‑lzo‑1.08.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python‑lzo‑1.08.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python‑lzo‑1.08.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="python-snappy" ></span>

#### [Python-snappy](https://github.com/andrix/python-snappy)

 wraps the [snappy](http://code.google.com/p/snappy/) compression library.

[python_snappy‑0.5‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python_snappy‑0.5‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python_snappy‑0.5‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python_snappy‑0.5‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python_snappy‑0.5‑cp32‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python_snappy‑0.5‑cp32‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python_snappy‑0.5‑cp33‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python_snappy‑0.5‑cp33‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python_snappy‑0.5‑cp34‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python_snappy‑0.5‑cp34‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="python-sundials" ></span>

#### [Python-sundials](http://code.google.com/p/python-sundials/)

 is a Cython wrapper for the [SUNDIALS](https://computation.llnl.gov/casc/sundials/main.html) solver suite.

[python‑sundials‑0.5.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python‑sundials‑0.5.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python‑sundials‑0.5.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python‑sundials‑0.5.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python‑sundials‑0.5.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python‑sundials‑0.5.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python‑sundials‑0.5.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[python‑sundials‑0.5.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pythonmagick" ></span>

#### [PythonMagick](http://www.imagemagick.org/download/python/)

 provides an object-oriented interface to [ImageMagick](http://www.imagemagick.org).

[PythonMagick‑0.9.10.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PythonMagick‑0.9.10.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PythonMagick‑0.9.10.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PythonMagick‑0.9.10.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PythonMagick‑0.9.10.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PythonMagick‑0.9.10.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PythonMagick‑0.9.10.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PythonMagick‑0.9.10.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PythonMagick‑0.9.10.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PythonMagick‑0.9.10.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pythonnet" ></span>

#### [PythonNET](https://github.com/pythonnet/pythonnet)

 ([py3 fork](https://github.com/renshawbay/pythonnet)) provides integration with the .NET Common Language Runtime (CLR) and an application scripting tool for .NET.

Requires the [Microsoft .NET Framework 4.0](http://www.microsoft.com/en-us/download/details.aspx?id=17718).

[pythonnet‑2.0.0.dev1‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pythonnet‑2.0.0.dev1‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pythonnet‑2.0.0.dev1‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pythonnet‑2.0.0.dev1‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pythonnet‑2.0.0.dev1‑cp33‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pythonnet‑2.0.0.dev1‑cp33‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pythonnet‑2.0.0.dev1‑cp34‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pythonnet‑2.0.0.dev1‑cp34‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pytst" ></span>

#### [PyTST](https://github.com/nlehuen/pytst)

 is an implementation of a Ternary Search Tree.

[pytst‑1.18.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pytst‑1.18.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pytst‑1.18.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pytst‑1.18.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pytz" ></span>

#### [Pytz](http://pypi.python.org/pypi/pytz)

 provides world timezone definitions, modern and historical.

[pytz‑2014.10‑py2.py3‑none‑any.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pyusb-ftdi" ></span>

#### [PyUSB-FTDI](http://bleyer.org/pyusb/)

 provides an interface to the [FTDI D2XX drivers](http://www.ftdichip.com/Drivers/D2XX.htm).

Linked against version 2.08.28.

[PyUSB‑1.6.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyUSB‑1.6.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyUSB‑1.6.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyUSB‑1.6.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pyviennacl" ></span>

#### [PyViennaCL](http://viennacl.sourceforge.net/pyviennacl.html)

 provides bindings for the ViennaCL linear algebra and numerical computation library for GPGPU and heterogeneous systems.

Requires an OpenCL 1.2 compatible driver (e.g. from [Intel](http://software.intel.com/en-us/vcsource/tools/opencl-sdk)).

[pyviennacl‑1.0.3.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyviennacl‑1.0.3.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyviennacl‑1.0.3.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyviennacl‑1.0.3.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyviennacl‑1.0.3.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyviennacl‑1.0.3.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyviennacl‑1.0.3.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyviennacl‑1.0.3.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyviennacl‑1.0.3.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyviennacl‑1.0.3.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pyvisa" ></span>

#### [PyVISA](http://pyvisa.sourceforge.net/)

, bindings to the "Virtual Instrument Software Architecture" [VISA library](http://www.ivifoundation.org/specifications/default.aspx).

[PyVISA‑1.6.2‑py2.py3‑none‑any.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pyvrml97" ></span>

#### [PyVRML97](https://pypi.python.org/pypi/PyVRML97/)

 Scenegraph modelling objects.

[PyVRML97‑2.3.0b1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyVRML97‑2.3.0b1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyVRML97‑2.3.0b1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyVRML97‑2.3.0b1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyVRML97‑accelerate‑2.3.0b1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyVRML97‑accelerate‑2.3.0b1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyVRML97‑accelerate‑2.3.0b1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyVRML97‑accelerate‑2.3.0b1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pywavelets" ></span>

#### [PyWavelets](http://pypi.python.org/pypi/PyWavelets/)

 is a package for discrete wavelet transforms.

Using the fork by [Ralf Gommers](https://github.com/rgommers/pywt).

[PyWavelets‑0.2.2.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyWavelets‑0.2.2.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyWavelets‑0.2.2.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyWavelets‑0.2.2.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyWavelets‑0.3.0dev.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyWavelets‑0.3.0dev.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyWavelets‑0.3.0dev.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyWavelets‑0.3.0dev.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyWavelets‑0.3.0dev.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyWavelets‑0.3.0dev.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyWavelets‑0.3.0dev.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyWavelets‑0.3.0dev.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyWavelets‑0.3.0dev.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyWavelets‑0.3.0dev.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pywcs" ></span>

#### [PyWCS](https://trac.assembla.com/astrolib)

 is a wrapper for the FITS [World Coordinate Systems](http://www.atnf.csiro.au/people/mcalabre/WCS/) library.

This package is now part of [astropy](#astropy).

[pywcs‑1.11‑4.8.2.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pywcs‑1.11‑4.8.2.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pywcs‑1.11‑4.8.2.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pywcs‑1.11‑4.8.2.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pywcs‑1.11‑4.8.2.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pywcs‑1.11‑4.8.2.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pywcs‑1.11‑4.8.2.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pywcs‑1.11‑4.8.2.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pywin32" ></span>

#### [PyWin32](http://sourceforge.net/projects/pywin32/)

 provides extensions for Windows.

Users must manually run `python.exe Scripts\pywin32_postinstall.py -install` from an elevated command prompt.

[pywin32‑219‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pywin32‑219‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pywin32‑219‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pywin32‑219‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pywin32‑219‑cp32‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pywin32‑219‑cp32‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pywin32‑219‑cp33‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pywin32‑219‑cp33‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pywin32‑219‑cp34‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pywin32‑219‑cp34‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pyx" ></span>

#### [PyX](http://pyx.sourceforge.net/)

 is a package for the generation of PostScript and PDF files.

[PyX‑0.12.1‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyX‑0.12.1‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyX‑0.12.1‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyX‑0.12.1‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyX‑0.13‑cp32‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyX‑0.13‑cp32‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyX‑0.13‑cp33‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyX‑0.13‑cp33‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyX‑0.13‑cp34‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyX‑0.13‑cp34‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pyxml" ></span>

#### [PyXML](http://pyxml.sourceforge.net/topics/)

, XML processing.

[PyXML‑0.8.4.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyXML‑0.8.4.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyXML‑0.8.4.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyXML‑0.8.4.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pyyaml" ></span>

#### [PyYAML](http://pypi.python.org/pypi/PyYAML/)

 is a [YAML](http://www.yaml.org/) parser and emitter.

[PyYAML‑3.11.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyYAML‑3.11.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyYAML‑3.11.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyYAML‑3.11.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyYAML‑3.11.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyYAML‑3.11.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyYAML‑3.11.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyYAML‑3.11.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyYAML‑3.11.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[PyYAML‑3.11.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="pyzmq" ></span>

#### [PyZMQ](https://github.com/zeromq/pyzmq)

 is a binding to the [ZeroMQ](http://www.zeromq.org) messaging library.

Built with OpenPGM, Sodium, and FD_SETSIZE=4096.

Not compatible with Windows XP.

[pyzmq‑14.4.1‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyzmq‑14.4.1‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyzmq‑14.4.1‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyzmq‑14.4.1‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyzmq‑14.4.1‑cp32‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyzmq‑14.4.1‑cp32‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyzmq‑14.4.1‑cp33‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyzmq‑14.4.1‑cp33‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyzmq‑14.4.1‑cp34‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pyzmq‑14.4.1‑cp34‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="qimage2ndarray" ></span>

#### [Qimage2ndarray](http://hmeine.github.io/qimage2ndarray/)

 converts quickly between QImages and numpy.ndarrays.

Requires [pyqt4](#pyqt4).

[qimage2ndarray‑1.3.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[qimage2ndarray‑1.3.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[qimage2ndarray‑1.3.1.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[qimage2ndarray‑1.3.1.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[qimage2ndarray‑1.3.1.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[qimage2ndarray‑1.3.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[qimage2ndarray‑1.3.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[qimage2ndarray‑1.3.1.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[qimage2ndarray‑1.3.1.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[qimage2ndarray‑1.3.1.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="quantlib" ></span>

#### [QuantLib](http://quantlib.org)

 is a library for quantitative finance.

[QuantLib‑Python‑1.4.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[QuantLib‑Python‑1.4.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[QuantLib‑Python‑1.4.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[QuantLib‑Python‑1.4.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[QuantLib‑Python‑1.4.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[QuantLib‑Python‑1.4.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[QuantLib‑Python‑1.4.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[QuantLib‑Python‑1.4.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[QuantLib‑Python‑1.4.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[QuantLib‑Python‑1.4.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="quickfix" ></span>

#### [QuickFIX](http://www.quickfixengine.org/)

 is a Financial Information eXchange (FIX) protocol engine.

[quickfix‑1.14.3‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[quickfix‑1.14.3‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[quickfix‑1.14.3‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[quickfix‑1.14.3‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="qutip" ></span>

#### [QuTiP](http://qutip.org)

 simulates the dynamics of open quantum systems.

Requires [numpy-mkl](#numpy).

[qutip‑3.0.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[qutip‑3.0.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[qutip‑3.0.1.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[qutip‑3.0.1.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[qutip‑3.0.1.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[qutip‑3.0.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[qutip‑3.0.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[qutip‑3.0.1.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[qutip‑3.0.1.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[qutip‑3.0.1.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="rasterio" ></span>

#### [Rasterio](https://github.com/mapbox/rasterio)

 provides clean and fast and geospatial raster I/O.

Requires [gdal](#gdal).

[rasterio‑0.16‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[rasterio‑0.16‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[rasterio‑0.16‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[rasterio‑0.16‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[rasterio‑0.16‑cp32‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[rasterio‑0.16‑cp32‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[rasterio‑0.16‑cp33‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[rasterio‑0.16‑cp33‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[rasterio‑0.16‑cp34‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[rasterio‑0.16‑cp34‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="re2" ></span>

#### [Re2](http://pypi.python.org/pypi/re2/)

 is a wrapper for the [RE2 regular expression library](http://code.google.com/p/re2/).

[re2‑0.2.20.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[re2‑0.2.20.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[re2‑0.2.20.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[re2‑0.2.20.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="regex" ></span>

#### [Regex](http://pypi.python.org/pypi/regex/)

 is an alternative regular expression module, to replace re.

[regex‑2014.12.24‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[regex‑2014.12.24‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[regex‑2014.12.24‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[regex‑2014.12.24‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[regex‑2014.12.24‑cp32‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[regex‑2014.12.24‑cp32‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[regex‑2014.12.24‑cp33‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[regex‑2014.12.24‑cp33‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[regex‑2014.12.24‑cp34‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[regex‑2014.12.24‑cp34‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="reportlab" ></span>

#### [ReportLab](https://bitbucket.org/rptlab/reportlab)

 is a PDF generation toolkit.

[reportlab‑2.7.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[reportlab‑2.7.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[reportlab‑3.1.44.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[reportlab‑3.1.44.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[reportlab‑3.1.44.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[reportlab‑3.1.44.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[reportlab‑3.1.44.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[reportlab‑3.1.44.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="requests" ></span>

#### [Requests](http://docs.python-requests.org/en/latest/)

 is a HTTP library for human beings.

[requests‑2.5.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[requests‑2.5.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[requests‑2.5.1.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[requests‑2.5.1.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[requests‑2.5.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[requests‑2.5.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[requests‑2.5.1.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[requests‑2.5.1.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="rpy2" ></span>

#### [Rpy2](https://bitbucket.org/rpy2/rpy2)

 (experimental, unstable) provides access to the [R software environment](http://www.r-project.org/) for statistical computing and graphics.

Built with Rtools against msvcrt.dll and [R 3.1](http://cran.rstudio.com/).

[rpy2‑2.3.9.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[rpy2‑2.3.9.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[rpy2‑2.5.4.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[rpy2‑2.5.4.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[rpy2‑2.5.4.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[rpy2‑2.5.4.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[rpy2‑2.5.4.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[rpy2‑2.5.4.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="rtmidi-python" ></span>

#### [Rtmidi-python](https://github.com/superquadratic/rtmidi-python)

 is a wrapper for the [RtMidi](http://www.music.mcgill.ca/~gary/rtmidi/) library.

[rtmidi‑python‑0.2.2.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[rtmidi‑python‑0.2.2.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[rtmidi‑python‑0.2.2.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[rtmidi‑python‑0.2.2.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[rtmidi‑python‑0.2.2.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[rtmidi‑python‑0.2.2.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[rtmidi‑python‑0.2.2.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[rtmidi‑python‑0.2.2.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[rtmidi‑python‑0.2.2.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[rtmidi‑python‑0.2.2.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="rtree" ></span>

#### [Rtree](http://toblerity.github.com/rtree/)

 provides advanced spatial indexing features based on [libspatialindex](http://libspatialindex.github.com/).

[Rtree‑0.8.2‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Rtree‑0.8.2‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Rtree‑0.8.2‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Rtree‑0.8.2‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="scientificpython" ></span>

#### [ScientificPython](https://bitbucket.org/khinsen/scientificpython)

 is a collection of modules for scientific computing.

[ScientificPython‑2.9.4.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ScientificPython‑2.9.4.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ScientificPython‑2.9.4.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ScientificPython‑2.9.4.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="scikit-bio" ></span>

#### [Scikit-bio](http://scikit-bio.org/)

 (unstable) provides data structures, algorithms, and educational resources for bioinformatics.

[scikit‑bio‑0.2.2.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikit‑bio‑0.2.2.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikit‑bio‑0.2.2.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikit‑bio‑0.2.2.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikit‑bio‑0.2.2.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikit‑bio‑0.2.2.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="scikit-image" ></span>

#### [Scikit-image](http://scikit-image.org)

 provides image processing routines for SciPy.

[scikit‑image‑0.10.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikit‑image‑0.10.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikit‑image‑0.10.1.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikit‑image‑0.10.1.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikit‑image‑0.10.1.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikit‑image‑0.10.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikit‑image‑0.10.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikit‑image‑0.10.1.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikit‑image‑0.10.1.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikit‑image‑0.10.1.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="scikit-learn" ></span>

#### [Scikit-learn](http://scikit-learn.org/)

 integrates classic machine learning algorithms.

Requires [numpy-mkl](#numpy).

[scikit‑learn‑0.15.2.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikit‑learn‑0.15.2.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikit‑learn‑0.15.2.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikit‑learn‑0.15.2.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikit‑learn‑0.15.2.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikit‑learn‑0.15.2.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikit‑learn‑0.15.2.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikit‑learn‑0.15.2.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikit‑learn‑0.15.2.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikit‑learn‑0.15.2.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="scikits.ann" ></span>

#### [Scikits.ann](https://scikits.appspot.com/ann)

 is a wrapper for the Approximate Nearest Neighbor [ANN](http://www.cs.umd.edu/~mount/ANN/) library.

Deprecated in favor of scipy.spatial.

[scikits.ann‑0.2.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikits.ann‑0.2.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikits.ann‑0.2.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikits.ann‑0.2.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="scikits.audiolab" ></span>

#### [Scikits.audiolab](http://pypi.python.org/pypi/scikits.audiolab/)

 is a package for audio file IO using numpy arrays.

Linked against [libsndfile-1.0.25](http://www.mega-nerd.com/libsndfile/).

[scikits.audiolab‑0.11.0.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikits.audiolab‑0.11.0.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikits.audiolab‑0.11.0.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikits.audiolab‑0.11.0.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="scikits.delaunay" ></span>

#### [Scikits.delaunay](https://scikits.appspot.com/scikits)

 is a triangulation and interpolation tool.

[scikits.delaunay‑0.5.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikits.delaunay‑0.5.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikits.delaunay‑0.5.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikits.delaunay‑0.5.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="scikits.hydroclimpy" ></span>

#### [Scikits.hydroclimpy](http://hydroclimpy.sourceforge.net/)

 manipulates hydro-climatologic data.

Requires [numpy-mkl](#numpy).

[scikits.hydroclimpy‑0.67.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikits.hydroclimpy‑0.67.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikits.hydroclimpy‑0.67.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikits.hydroclimpy‑0.67.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="scikits.odes" ></span>

#### [Scikits.odes](http://cage.ugent.be/~bm/progs.html)

 adds ordinary differential equation (ODE) solvers to [SciPy](#scipy).

Requires [numpy-mkl](#numpy).

[scikits.odes‑2.0.2.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikits.odes‑2.0.2.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikits.odes‑2.0.2.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikits.odes‑2.0.2.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikits.odes‑2.0.2.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikits.odes‑2.0.2.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikits.odes‑2.0.2.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikits.odes‑2.0.2.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikits.odes‑2.0.2.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikits.odes‑2.0.2.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="scikits.samplerate" ></span>

#### [Scikits.samplerate](http://www.ar.media.kyoto-u.ac.jp/members/david/softwares/samplerate/)

 is a module for high quality audio resampling.

[scikits.samplerate‑0.3.3.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikits.samplerate‑0.3.3.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikits.samplerate‑0.3.3.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikits.samplerate‑0.3.3.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="scikits.scattpy" ></span>

#### [Scikits.scattpy](http://scattpy.github.com/)

 performs light scattering simulations.

Requires [numpy-mkl](#numpy).

[scikits.scattpy‑0.1.2.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikits.scattpy‑0.1.2.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikits.scattpy‑0.1.2.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikits.scattpy‑0.1.2.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="scikits.timeseries" ></span>

#### [Scikits.timeseries](http://pytseries.sourceforge.net/)

 provides classes and functions for manipulating, reporting, and plotting time series of various frequencies.

[scikits.timeseries‑0.91.3.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikits.timeseries‑0.91.3.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikits.timeseries‑0.91.3.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikits.timeseries‑0.91.3.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="scikits.umfpack" ></span>

#### [Scikits.umfpack](https://scikits.appspot.com/scikits)

 is an interface to the [UMFPACK](http://www.cise.ufl.edu/research/sparse/umfpack/) unsymmetric sparse linear system solver.

Requires [numpy-mkl](#numpy).

[scikits.umfpack‑5.1.0.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikits.umfpack‑5.1.0.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikits.umfpack‑5.1.0.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikits.umfpack‑5.1.0.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikits.umfpack‑5.1.0.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikits.umfpack‑5.1.0.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikits.umfpack‑5.1.0.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikits.umfpack‑5.1.0.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikits.umfpack‑5.1.0.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikits.umfpack‑5.1.0.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="scikits.vectorplot" ></span>

#### [Scikits.vectorplot](http://pypi.python.org/pypi/scikits.vectorplot)

 implements the line integral convolution algorithm to plot vector fields.

[scikits.vectorplot‑0.1.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikits.vectorplot‑0.1.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikits.vectorplot‑0.1.1.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikits.vectorplot‑0.1.1.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikits.vectorplot‑0.1.1.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikits.vectorplot‑0.1.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikits.vectorplot‑0.1.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikits.vectorplot‑0.1.1.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikits.vectorplot‑0.1.1.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scikits.vectorplot‑0.1.1.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="scipy" ></span>

#### [SciPy](http://www.scipy.org/)

 is software for mathematics, science, and engineering.

Requires [numpy-mkl](#numpy) and optionally [pil](#pil).

[scipy‑0.15.0‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scipy‑0.15.0‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scipy‑0.15.0‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scipy‑0.15.0‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scipy‑0.15.0‑cp32‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scipy‑0.15.0‑cp32‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scipy‑0.15.0‑cp33‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scipy‑0.15.0‑cp33‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scipy‑0.15.0‑cp34‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scipy‑0.15.0‑cp34‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="scipy-cluster" ></span>

#### [Scipy-cluster](https://code.google.com/p/scipy-cluster/)

 provides functions for agglomerative clustering.

[hcluster‑0.2.0.svn.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[hcluster‑0.2.0.svn.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[hcluster‑0.2.0.svn.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[hcluster‑0.2.0.svn.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="scipy-stack" ></span>

#### [Scipy-stack](http://www.scipy.org/stackspec.html)

 (experimental) is a meta package that contains [numpy-mkl](#numpy), [scipy](#scipy), [matplotlib](#matplotlib), [ipython](#ipython), [pandas](#pandas), [sympy](#sympy), [nose](#nose) and many of their dependencies (setuptools, dateutil, pytz, six, pillow, pygments, jinja2, markupsafe, statsmodels, pytables, numexpr, bottleneck, tornado, pyzmq, gmpy2, pyside, etc).

Use with a fresh CPython installation only.

Created with [redist_wininst.py](http://www.lfd.uci.edu/~gohlke/code/redist_wininst.py.html).

[Scipy‑stack‑14.5.30.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Scipy‑stack‑14.5.30.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Scipy‑stack‑14.8.27.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Scipy‑stack‑14.8.27.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Scipy‑stack‑14.8.27.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Scipy‑stack‑14.8.27.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="scitools" ></span>

#### [SciTools](http://code.google.com/p/scitools/)

 are useful tools for scientific computing.

[SciTools‑0.9.0.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[SciTools‑0.9.0.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[SciTools‑0.9.0.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[SciTools‑0.9.0.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="scons" ></span>

#### [SCons](http://www.scons.org/)

, a software construction tool.

[scons‑2.3.4.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scons‑2.3.4.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scons‑2.3.4.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scons‑2.3.4.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="scs" ></span>

#### [SCS](https://github.com/cvxgrp/scs)

 (non-MKL build) is a C package for solving large-scale convex cone problems.

[scs‑1.0.7‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scs‑1.0.7‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scs‑1.0.7‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scs‑1.0.7‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scs‑1.0.7‑cp32‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scs‑1.0.7‑cp32‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scs‑1.0.7‑cp33‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scs‑1.0.7‑cp33‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scs‑1.0.7‑cp34‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scs‑1.0.7‑cp34‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="sendkeys" ></span>

#### [SendKeys](http://pypi.python.org/pypi/SendKeys)

 can be used to send keystrokes to the active window.

[SendKeys‑0.3.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[SendKeys‑0.3.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[SendKeys‑0.3.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[SendKeys‑0.3.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="setuptools" ></span>

#### [Setuptools](http://pypi.python.org/pypi/setuptools)

 downloads, builds, installs, upgrades, and uninstalls Python packages.

[setuptools‑11.3.1‑py2.py3‑none‑any.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="sfepy" ></span>

#### [SfePy](http://sfepy.org)

, simple finite elements in Python.

[sfepy‑2014.4.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[sfepy‑2014.4.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[sfepy‑2014.4.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[sfepy‑2014.4.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="shapely" ></span>

#### [Shapely](https://github.com/Toblerity/Shapely)

 is a package for creation, manipulation, and analysis of planar geometry objects based on [GEOS](http://trac.osgeo.org/geos/).

[Shapely‑1.5.3‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Shapely‑1.5.3‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Shapely‑1.5.3‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Shapely‑1.5.3‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Shapely‑1.5.3‑cp32‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Shapely‑1.5.3‑cp32‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Shapely‑1.5.3‑cp33‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Shapely‑1.5.3‑cp33‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Shapely‑1.5.3‑cp34‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Shapely‑1.5.3‑cp34‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="silvercity" ></span>

#### [SilverCity](http://silvercity.sourceforge.net/)

 is a lexing package based on [Scintilla](http://www.scintilla.org/).

[SilverCity‑0.9.7.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[SilverCity‑0.9.7.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[SilverCity‑0.9.7.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[SilverCity‑0.9.7.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="simpleitk" ></span>

#### [SimpleITK](http://www.simpleitk.org/)

 provides an easy-access layer to the [Insight Segmentation and Registration Toolkit](http://www.itk.org/).

[SimpleITK‑0.7.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[SimpleITK‑0.7.1.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[SimpleITK‑0.7.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[SimpleITK‑0.7.1.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="simplejson" ></span>

#### [Simplejson](http://pypi.python.org/pypi/simplejson)

 is a simple, fast, extensible [JSON](http://json.org/) encoder/decoder.

[simplejson‑3.6.5.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[simplejson‑3.6.5.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[simplejson‑3.6.5.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[simplejson‑3.6.5.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[simplejson‑3.6.5.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[simplejson‑3.6.5.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[simplejson‑3.6.5.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[simplejson‑3.6.5.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="six" ></span>

#### [Six](https://pypi.python.org/pypi/six)

 is a Python 2 and 3 compatibility library.

[six‑1.9.0‑py2.py3‑none‑any.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="slycot" ></span>

#### [Slycot](https://github.com/avventi/Slycot)

 is a wrapper for selected [SLICOT](http://www.slicot.org/) routines.

Requires [numpy-mkl](#numpy).

[Slycot‑0.1.0.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Slycot‑0.1.0.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Slycot‑0.1.0.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Slycot‑0.1.0.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Slycot‑0.1.0.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Slycot‑0.1.0.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Slycot‑0.1.0.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Slycot‑0.1.0.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Slycot‑0.1.0.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Slycot‑0.1.0.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="smc.freeimage" ></span>

#### [SMC.FreeImage](https://bitbucket.org/tiran/smc.freeimage)

 is a wrapper for the [FreeImage](http://freeimage.sourceforge.net/) library.

[smc.freeimage‑0.3dev.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[smc.freeimage‑0.3dev.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[smc.freeimage‑0.3dev.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[smc.freeimage‑0.3dev.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[smc.freeimage‑0.3dev.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[smc.freeimage‑0.3dev.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[smc.freeimage‑0.3dev.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[smc.freeimage‑0.3dev.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[smc.freeimage‑0.3dev.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[smc.freeimage‑0.3dev.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="sparsesvd" ></span>

#### [Sparsesvd](https://pypi.python.org/pypi/sparsesvd)

 wraps [SVDLIBC](http://tedlab.mit.edu/~dr/SVDLIBC/), a library for computing Singular Value Decompositions.

[sparsesvd‑0.2.2.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[sparsesvd‑0.2.2.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[sparsesvd‑0.2.2.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[sparsesvd‑0.2.2.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[sparsesvd‑0.2.2.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[sparsesvd‑0.2.2.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[sparsesvd‑0.2.2.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[sparsesvd‑0.2.2.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[sparsesvd‑0.2.2.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[sparsesvd‑0.2.2.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="sphinx" ></span>

#### [Sphinx](http://sphinx.pocoo.org/)

 is a documentation generator.

[Sphinx‑1.2.3.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Sphinx‑1.2.3.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Sphinx‑1.2.3.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Sphinx‑1.2.3.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Sphinx‑1.2.3.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Sphinx‑1.2.3.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Sphinx‑1.2.3.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Sphinx‑1.2.3.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Sphinx‑1.2.3.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Sphinx‑1.2.3.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="spyder" ></span>

#### [Spyder](https://bitbucket.org/spyder-ide/spyderlib)

 is a scientific Python development environment.

Requires [guiqwt](#guiqwt) and [other dependencies](http://pythonhosted.org/spyder/installation.html#installing-or-running-directly-from-source).

[spyder‑2.3.2.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[spyder‑2.3.2.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[spyder‑2.3.2.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[spyder‑2.3.2.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[spyder‑2.3.2.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[spyder‑2.3.2.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[spyder‑2.3.2.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[spyder‑2.3.2.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[spyder‑2.3.2.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[spyder‑2.3.2.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="sqlalchemy" ></span>

#### [SQLAlchemy](http://www.sqlalchemy.org/)

 is a SQL toolkit and Object Relational Mapper.

[SQLAlchemy‑0.9.8.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[SQLAlchemy‑0.9.8.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[SQLAlchemy‑0.9.8.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[SQLAlchemy‑0.9.8.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[SQLAlchemy‑0.9.8.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[SQLAlchemy‑0.9.8.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[SQLAlchemy‑0.9.8.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[SQLAlchemy‑0.9.8.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[SQLAlchemy‑0.9.8.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[SQLAlchemy‑0.9.8.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="statsmodels" ></span>

#### [Statsmodels](http://statsmodels.sourceforge.net/)

 provides classes and functions for the estimation of statistical models.

Requires [pandas](#pandas) and [patsy](#patsy).

[statsmodels‑0.6.1‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[statsmodels‑0.6.1‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[statsmodels‑0.6.1‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[statsmodels‑0.6.1‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[statsmodels‑0.6.1‑cp32‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[statsmodels‑0.6.1‑cp32‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[statsmodels‑0.6.1‑cp33‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[statsmodels‑0.6.1‑cp33‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[statsmodels‑0.6.1‑cp34‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[statsmodels‑0.6.1‑cp34‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="steps" ></span>

#### [STEPS](http://steps.sourceforge.net/)

 is a stochastic engine for pathway simulation.

[STEPS‑2.2.0.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[STEPS‑2.2.0.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[STEPS‑2.2.0.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[STEPS‑2.2.0.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="sympy" ></span>

#### [Sympy](http://sympy.org/)

 is a library for symbolic mathematics.

[sympy‑0.7.6‑py2.py3‑none‑any.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="ta-lib" ></span>

#### [TA-Lib](http://mrjbq7.github.io/ta-lib/)

 is a wrapper for the [TA-LIB](http://ta-lib.org/) Technical Analysis Library.

[TA‑Lib‑0.4.8.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[TA‑Lib‑0.4.8.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[TA‑Lib‑0.4.8.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[TA‑Lib‑0.4.8.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[TA‑Lib‑0.4.8.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[TA‑Lib‑0.4.8.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[TA‑Lib‑0.4.8.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[TA‑Lib‑0.4.8.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[TA‑Lib‑0.4.8.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[TA‑Lib‑0.4.8.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="theano" ></span>

#### [Theano](http://deeplearning.net/software/theano/)

 is an optimizing compiler for evaluating mathematical expressions.

[Theano‑0.6.0.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Theano‑0.6.0.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Theano‑0.6.0.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Theano‑0.6.0.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Theano‑0.6.0.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Theano‑0.6.0.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Theano‑0.6.0.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Theano‑0.6.0.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Theano‑0.6.0.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Theano‑0.6.0.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="thrift" ></span>

#### [Thrift](http://thrift.apache.org/)

 is a software framework for scalable cross-language services development.

[thrift‑0.9.2.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[thrift‑0.9.2.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[thrift‑0.9.2.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[thrift‑0.9.2.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="tinyarray" ></span>

#### [Tinyarray](https://pypi.python.org/pypi/tinyarray)

, arrays of numbers optimized for small sizes.

[tinyarray‑1.0.5.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[tinyarray‑1.0.5.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[tinyarray‑1.0.5.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[tinyarray‑1.0.5.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="tornado" ></span>

#### [Tornado](http://www.tornadoweb.org/)

 is a scalable, non-blocking web server.

Requires [certifi](#certifi) and [backports.ssl_match_hostname](#backports).

[tornado‑4.0.2‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[tornado‑4.0.2‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[tornado‑4.0.2‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[tornado‑4.0.2‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[tornado‑4.0.2‑cp32‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[tornado‑4.0.2‑cp32‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[tornado‑4.0.2‑cp33‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[tornado‑4.0.2‑cp33‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[tornado‑4.0.2‑cp34‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[tornado‑4.0.2‑cp34‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="trfit" ></span>

#### [Trfit](http://watcut.uwaterloo.ca/trfit/)

 fits time-resolved fluorescence decays.

[trfit‑1.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[trfit‑1.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[trfit‑1.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[trfit‑1.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="twainmodule" ></span>

#### [TWAINmodule](http://twainmodule.sourceforge.net/)

 provides an interface to [TWAIN](http://www.twain.org/) image acquisition devices.

[twain‑1.0.4‑py3‑source.zip](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[twain‑1.0.4.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[twain‑1.0.4.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[twain‑1.0.4.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[twain‑1.0.4.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[twain‑1.0.4.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[twain‑1.0.4.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[twain‑1.0.4.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[twain‑1.0.4.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[twain‑1.0.4.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[twain‑1.0.4.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="twisted" ></span>

#### [Twisted](http://twistedmatrix.com/trac/)

 is an event-driven networking engine.

[Twisted‑12.2.0.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Twisted‑12.2.0.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Twisted‑14.0.2.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[Twisted‑14.0.2.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="ujson" ></span>

#### [Ujson](http://pypi.python.org/pypi/ujson)

 is an ultra-fast [JSON](http://json.org/) encoder and decoder.

[ujson‑1.33.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ujson‑1.33.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ujson‑1.33.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ujson‑1.33.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ujson‑1.33.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ujson‑1.33.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ujson‑1.33.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ujson‑1.33.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ujson‑1.33.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ujson‑1.33.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="umysql" ></span>

#### [Umysql](http://pypi.python.org/pypi/umysql)

 is a ultra fast MySQL driver.

[umysql‑2.61.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[umysql‑2.61.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[umysql‑2.61.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[umysql‑2.61.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="veusz" ></span>

#### [Veusz](http://home.gna.org/veusz/)

 is a GUI scientific plotting and graphing package.

Requires [pyqt4](#pyqt4).

[veusz‑1.22.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[veusz‑1.22.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[veusz‑1.22.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[veusz‑1.22.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[veusz‑1.22.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[veusz‑1.22.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[veusz‑1.22.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[veusz‑1.22.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[veusz‑1.22.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[veusz‑1.22.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="videocapture" ></span>

#### [VideoCapture](http://videocapture.sourceforge.net/)

 is an extension for accessing video devices.

[VideoCapture‑0.9.5.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[VideoCapture‑0.9.5.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[VideoCapture‑0.9.5.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[VideoCapture‑0.9.5.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[VideoCapture‑0.9.5.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[VideoCapture‑0.9.5.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[VideoCapture‑0.9.5.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[VideoCapture‑0.9.5.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[VideoCapture‑0.9.5.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[VideoCapture‑0.9.5.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="vigra" ></span>

#### [VIGRA](http://hci.iwr.uni-heidelberg.de/vigra/)

, Vision with Generic Algorithms, is a computer vision library.

Requires [numpy-mkl](#numpy).

[vigranumpy‑1.10.0.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[vigranumpy‑1.10.0.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[vigranumpy‑1.10.0.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[vigranumpy‑1.10.0.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="virtualenv" ></span>

#### [Virtualenv](http://www.virtualenv.org/)

 is a virtual Python environment builder.

[virtualenv‑12.0.5‑py2.py3‑none‑any.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="visionegg" ></span>

#### [VisionEgg](http://www.visionegg.org/)

 produces stimuli for vision research experiments.

[visionegg‑1.2.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[visionegg‑1.2.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[visionegg‑1.2.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[visionegg‑1.2.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="vispy" ></span>

#### [Vispy](http://vispy.org)

, OpenGL-based interactive visualization.

[vispy‑0.3.0‑py2.py3‑none‑any.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="visvis" ></span>

#### [Visvis](http://code.google.com/p/visvis/)

 is a library for visualization of 1D to 4D data in an object oriented way.

[visvis‑1.9.1‑py2.py3‑none‑any.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="vitables" ></span>

#### [ViTables](http://vitables.org/)

 is a GUI for browsing and editing files in PyTables and HDF5 formats.

[ViTables‑2.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ViTables‑2.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ViTables‑2.1.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ViTables‑2.1.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ViTables‑2.1.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ViTables‑2.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ViTables‑2.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ViTables‑2.1.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ViTables‑2.1.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ViTables‑2.1.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="vlfd" ></span>

#### [vLFD](http://www.lfd.uci.edu/~gohlke/#python)

 contains modules developed at the Laboratory for Fluorescence Dynamics.

Contains tifffile, oiffile, czifile, lfdfiles, vidsrc, transformations, psf, chebyfit, and other modules.

Requires [numpy-mkl](#numpy), [scipy](#scipy), [matplotlib](#matplotlib), and [h5py](#h5py).

[vLFD‑2014.10.10.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[vLFD‑2014.10.10.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[vLFD‑2014.10.10.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[vLFD‑2014.10.10.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[vLFD‑2014.10.10.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[vLFD‑2014.10.10.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[vLFD‑2014.10.10.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[vLFD‑2014.10.10.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[vLFD‑2014.10.10.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[vLFD‑2014.10.10.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="vpython" ></span>

#### [VPython](http://vpython.org/)

, 3D programming for ordinary mortals.

Requires [TTFQuery](http://pypi.python.org/pypi/TTFQuery), [FontTools](#fonttools), and [Polygon](#polygon).

[TTFQuery‑1.0.5‑py2‑none‑any.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[TTFQuery‑1.0.5‑py3‑none‑any.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[VPython‑5.74‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[VPython‑5.74‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[VPython‑5.74‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[VPython‑5.74‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[VPython‑5.74‑cp32‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[VPython‑5.74‑cp32‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[VPython‑5.74‑cp33‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[VPython‑5.74‑cp33‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[VPython‑5.74‑cp34‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[VPython‑5.74‑cp34‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="vtk" ></span>

#### [VTK](http://www.vtk.org)

, the Visualization Toolkit, is a software system for 3D computer graphics, image processing, and visualization.

VTK-Qt4 requires [pyqt4](#pyqt4).

[VTK‑5.10.1‑Qt‑4.8.6.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[VTK‑5.10.1‑Qt‑4.8.6.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[VTK‑5.10.1‑Qt‑4.8.6.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[VTK‑5.10.1‑Qt‑4.8.6.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[VTK‑5.10.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[VTK‑5.10.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[VTK‑5.10.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[VTK‑5.10.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="wxpython" ></span>

#### [wxPython](http://www.wxpython.org/)

 provides bindings to the [wxWidgets](http://www.wxwidgets.org/) cross-platform toolkit.

The wxPython-common package is required.

[wxPython‑3.0.2.0‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[wxPython‑3.0.2.0‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[wxPython‑3.0.2.0‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[wxPython‑3.0.2.0‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[wxPython_common‑3.0.2.0‑py2‑none‑any.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="yappi" ></span>

#### [Yappi](https://code.google.com/p/yappi/)

, Yet Another Python Profiler, supports Multithread/CPU time profiling.

[yappi‑0.93.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[yappi‑0.93.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[yappi‑0.93.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[yappi‑0.93.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[yappi‑0.93.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[yappi‑0.93.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[yappi‑0.93.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[yappi‑0.93.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[yappi‑0.93.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[yappi‑0.93.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="yt" ></span>

#### [Yt](http://yt-project.org/)

, analysis and visualization of volumetric, multi-resolution data.

[yt‑3.1‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[yt‑3.1‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="zodb3" ></span>

#### [ZODB3](http://www.zope.org/Products/ZODB3)

, the Zope Object Database, provides an object-oriented database.

[ZODB3‑3.10.5.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ZODB3‑3.10.5.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ZODB3‑3.10.5.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ZODB3‑3.10.5.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)





<span id="zope.interface" ></span>

#### [Zope.interface](http://pypi.python.org/pypi/zope.interface)

 provides an implementation of object interfaces for Python.

[zope.interface‑4.1.2‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[zope.interface‑4.1.2‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[zope.interface‑4.1.2‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[zope.interface‑4.1.2‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[zope.interface‑4.1.2‑cp32‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[zope.interface‑4.1.2‑cp32‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[zope.interface‑4.1.2‑cp33‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[zope.interface‑4.1.2‑cp33‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[zope.interface‑4.1.2‑cp34‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[zope.interface‑4.1.2‑cp34‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)







#### Uncategorized Files



[aggdraw‑1.2a3.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[aggdraw‑1.2a3.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[aggdraw‑1.2a3.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[aggdraw‑1.2a3.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[blpapi‑3.5.2.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[blpapi‑3.5.2.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[blpapi‑3.5.2.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[blpapi‑3.5.2.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[chemfp‑1.0.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[chemfp‑1.0.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[chemfp‑1.0.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[chemfp‑1.0.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[crc16‑0.1.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[crc16‑0.1.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[crc16‑0.1.1.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[crc16‑0.1.1.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[crc16‑0.1.1.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[crc16‑0.1.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[crc16‑0.1.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[crc16‑0.1.1.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[crc16‑0.1.1.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[crc16‑0.1.1.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[crcmod‑1.7.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[crcmod‑1.7.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[crcmod‑1.7.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[crcmod‑1.7.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[crcmod‑1.7.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[crcmod‑1.7.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[crcmod‑1.7.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[crcmod‑1.7.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[crcmod‑1.7.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[crcmod‑1.7.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cylemon‑0.0.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[cylemon‑0.0.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[entropy‑0.9.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[entropy‑0.9.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[entropy‑0.9.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[entropy‑0.9.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[entropy‑0.9.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[entropy‑0.9.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[entropy‑0.9.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[entropy‑0.9.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[entropy‑0.9.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[entropy‑0.9.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[fabio‑0.1.3.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[fabio‑0.1.3.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[fabio‑0.1.3.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[fabio‑0.1.3.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[functools32‑3.2.3‑1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[functools32‑3.2.3‑1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[HDDM‑0.5.3.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[HDDM‑0.5.3.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[HDDM‑0.5.3.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[HDDM‑0.5.3.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[jnius‑1.1‑dev.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[jnius‑1.1‑dev.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[jnius‑1.1‑dev.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[jnius‑1.1‑dev.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[lazyflow‑0.1.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[lazyflow‑0.1.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[lazyflow‑0.1.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[lazyflow‑0.1.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[lmdb‑0.84.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[lmdb‑0.84.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[lmdb‑0.84.win‑amd64‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[lmdb‑0.84.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[lmdb‑0.84.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[lmdb‑0.84.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[lmdb‑0.84.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[lmdb‑0.84.win32‑py3.2.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[lmdb‑0.84.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[lmdb‑0.84.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[meliae‑0.4.0.final.0.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[meliae‑0.4.0.final.0.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[meliae‑0.4.0.final.0.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[meliae‑0.4.0.final.0.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[molmod‑1.1‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[molmod‑1.1‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[mysql_connector_python‑2.0.2‑py2.py3‑none‑any.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ncreduce‑0.2.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ncreduce‑0.2.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ncreduce‑0.2.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[ncreduce‑0.2.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[packaging‑15.0‑py2.py3‑none‑any.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[pokereval‑1.38.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[psyco‑1.6.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scandir‑0.9‑cp26‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scandir‑0.9‑cp26‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scandir‑0.9‑cp27‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scandir‑0.9‑cp27‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scandir‑0.9‑cp33‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scandir‑0.9‑cp33‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scandir‑0.9‑cp34‑none‑win32.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[scandir‑0.9‑cp34‑none‑win_amd64.whl](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[volumina‑0.6a.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[volumina‑0.6a.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[volumina‑0.6a.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[volumina‑0.6a.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[zfec‑1.4.24.win‑amd64‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[zfec‑1.4.24.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[zfec‑1.4.24.win32‑py2.6.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[zfec‑1.4.24.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[zs‑0.10.0.win‑amd64‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[zs‑0.10.0.win‑amd64‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[zs‑0.10.0.win‑amd64‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[zs‑0.10.0.win32‑py2.7.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[zs‑0.10.0.win32‑py3.3.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)

[zs‑0.10.0.win32‑py3.4.exe](http://www.lfd.uci.edu/~gohlke/pythonlibs/javascript:;)







#### Other useful packages and applications not currently available on this page




[AIDA](http://code.google.com/p/aida-deconvolution/) implements the Adaptive Image Deconvolution Algorithm.


[Alglib](http://www.alglib.net/) is a cross-platform numerical analysis and data processing library.


[BALLView](http://www.ballview.org/) is a molecular modeling and visualization application.


[Biogeme](http://biogeme.epfl.ch/) performs estimation of discrete choice models.


[BioImageXD](http://www.bioimagexd.net) is software for analysis and visualization of multidimensional biomedical images.


[BisQue](http://bioimage.ucsb.edu/bisque) (Bio-Image Semantic Query User Environment), store, visualize, organize and analyze images in the cloud.


[CasADi](http://www.casadi.org) implements automatic differentiation in forward and adjoint modes.


[CGAL-bindings](http://code.google.com/p/cgal-bindings/) are bindings for the [Computational Geometry Algorithms Library](http://www.cgal.org/).


[Coloc_utils](https://github.com/mfenner1/py_coloc_utils) computes colocalization coefficients from confocal images.


[Cryptography](https://github.com/pyca/cryptography) exposes cryptographic primitives and recipes.


[DeVIDE](http://graphics.tudelft.nl/Projects/DeVIDE) is a dataflow application builder for the rapid prototyping of medical visualization and image processing techniques.


[Django](http://www.djangoproject.com/) is a high-level Web framework.


[EMAN2](http://blake.bcm.edu/emanwiki/) is a greyscale scientific image processing suite with a focus on transmission electron microscopy. Supports many [image formats](http://blake.bcm.edu/emanwiki/EMAN2ImageFormats).


[FARSIGHT](http://www.farsight-toolkit.org/) is a toolkit for microscopy image analysis based using [Bio-Formats](http://loci.wisc.edu/software/bio-formats).


[Gexiv2](http://redmine.yorba.org/projects/gexiv2/wiki) is a GObject-based wrapper around the [exiv2](http://exiv2.org/) library for image metadata.


[GHMM](http://ghmm.org/), the General Hidden Markov Model library.


[Glumpy](http://code.google.com/p/glumpy/), fast OpenGL numpy visualization.


[Graph-tool](http://projects.skewed.de/graph-tool/) is an efficient module for manipulation and statistical analysis of graphs.


[ITK](http://www.itk.org), the Insight Segmentation and Registration Toolkit, is a software system for image analysis.


[Lmfit](http://cars9.uchicago.edu/software/python/lmfit/) is a least-squares minimization with constraints.


[M2Crypto](http://chandlerproject.org/Projects/MeTooCrypto) is a complete wrapper for [OpenSSL](http://www.openssl.org/).

Requires [OpenSSL binaries](http://www.slproweb.com/products/Win32OpenSSL.html).


[Mantid](http://www.mantidproject.org) is a framework that supports high-performance computing and visualization of scientific data.


[MathGL](http://mathgl.sourceforge.net/) is a library for scientific data visualization.


[mMass](http://www.mmass.org/) is an mass spectrometry tool.


[MMCorePy](http://www.micro-manager.org/wiki/Using_the_Micro-Manager_python_library) allows to control microscope hardware via [Micro-Manager](http://micro-manager.org/).


[Msim](http://code.google.com/p/msim/), superresolution fluorescence microscopy of multicellular organisms.


[Ncrypt](http://pypi.python.org/pypi/ncrypt) is yet another OpenSSL wrapper.


[Nodebox-GL](http://www.cityinabottle.org/nodebox/) is a library for generating 2D animations.


[Numeric](http://www.numpy.org/) is deprecated, superseded by [Numpy](#numpy).


[OpenKinect](http://openkinect.org) provides access to the Xbox Kinect device.

Requires [LibUSB 1.2.6](http://www.libusb.org/).


[OpenMDAO](http://openmdao.org/) is a Multidisciplinary Design Analysis and Optimization (MDAO) framework.


[OpenPIV](http://www.openpiv.net/) is a package for Particle Image Velocimetry (PIV).


[OpenSlide](http://openslide.org/) reads whole-slide images, high resolution images exceeding RAM sizes.


[Panda3D](http://www.panda3d.org/) is a framework for 3D rendering and game development.


[ParticleStats](http://www.particlestats.com/) performs analysis of intracellular particle motility and cytoskeletal polarity.


[Peak_detection](https://github.com/glyg/peak_detection) implements the Gaussian peak detection described in Segré et al.


[Pims](https://github.com/soft-matter/pims), Python Image Sequence, loads video and sequential images.


[Pmw](http://pmw.sourceforge.net/) is toolkit for building high-level compound widgets using the Tkinter module.


[PolyVox](http://www.volumesoffun.com/polyvox-about/) is a library for the storage and processing of volumetric environments.


[Priithon](http://code.google.com/p/priithon/) is a platform for image analysis and algorithm development.

Includes HIS, SDT, SIF, and SPE file readers.


[PsychoPy](http://www.psychopy.org/), software for psychology and neuroscience.


[Py-bcrypt](http://code.google.com/p/py-bcrypt/) is a wrapper of OpenBSD's Blowfish password hashing code.


[PyAudiere](http://pyaudiere.org/) is a high-level audio interface using the [Audiere](http://audiere.sourceforge.net/) sound library.


[pyCGNS](http://pycgns.sourceforge.net/index.html) provides an interface to the CGNS/SIDS data model.


[PyCorrFit](http://www.biotec.tu-dresden.de/~paulm/) is a versatile tool for FCS data analysis.


[PyCrypto](http://www.dlitz.net/software/pycrypto/) provides cryptographic modules.


[PyDSTool](http://www.ni.gsu.edu/~rclewley/PyDSTool/FrontPage.html) is a dynamical systems modeling, simulation and analysis environment.


[Pyffmpeg](http://code.google.com/p/pyffmpeg/) is a wrapper for [FFmpeg](http://ffmpeg.mplayerhq.hu/), a solution to record, convert and stream audio and video.


[PyGreSQL](http://www.pygresql.org/) interfaces to a [PostgreSQL](http://www.postgresql.org/) database.


[Pygrib](https://github.com/jswhit/pygrib) is a module for reading [GRIB](https://software.ecmwf.int/wiki/display/GRIB/Home) meteorological files.


[PyGSL](http://pygsl.sourceforge.net/) provides an interface for the [GNU Scientific Library (gsl)](http://www.gnu.org/software/gsl/).


[PyGst](http://gstreamer.freedesktop.org/modules/gst-python.html), bindings for the [GStreamer](http://gstreamer.freedesktop.org/) multimedia framework.


[Pykit](https://github.com/pykit/pykit) is a backend compiler for high-level typed code.


[PyME](http://code.google.com/p/python-microscopy/), the Python Microscopy Environment, provides image acquisition and data analysis functionality for widefield microscopy applications.


[pyNFFT](https://github.com/ghisvail/pyNFFT) is a wrapper around the [NFFT](http://www-user.tu-chemnitz.de/~potts/nfft/index.php) library.


[Pyo](http://code.google.com/p/pyo/) is a digital signal processing module.


[PyODE](http://pyode.sourceforge.net/) is a set of bindings for the [Open Dynamics Engine](http://ode.org/).


[pyOpenSSL](https://github.com/pyca/pyopenssl) is an interface to the [OpenSSL](http://www.openssl.org/) library.


[PyQt5](http://www.riverbankcomputing.co.uk/software/pyqt/) is a set of bindings for the [Qt5](http://qt-project.org) application framework.


[Pysam](http://code.google.com/p/pysam/) is a module for reading and manipulating [SAM](http://samtools.sourceforge.net/) nucleotide sequence alignment files.


[Pyshp](http://code.google.com/p/pyshp/) reads and writes ESRI Shapefiles.


[Pysifreader](http://code.google.com/p/pysifreader/) reads Andor SIF multi-channel image files.


[PySUNDIALS](http://pysundials.sourceforge.net/) provides bindings for the [SUNDIALS](https://computation.llnl.gov/casc/sundials/main.html) suite of solvers.


[PySVN](http://pysvn.tigris.org/) interfaces the [Subversion](http://subversion.apache.org/) version control system.


[Python-Ogre](http://www.python-ogre.org/) is an interface to the [Ogre](http://www.ogre3d.org/) 3D graphics library.


[Pythonisosurfaces](http://code.google.com/p/pythonisosurfaces/), a marching cubes iso-surface implementation.


[PythonOCC](http://www.pythonocc.org/) is a 3D CAD/CAE/PLM development framework.


<span id="pytools" ></span>[Pytools](http://pypi.python.org/pypi/pytools) is a collection of tools.

Requires [six](https://pypi.python.org/pypi/six/), [decorator](https://pypi.python.org/pypi/decorator/) and [appdirs](https://pypi.python.org/pypi/appdirs/).


[RootPy](http://rootpy.org/) provides an interface with the [ROOT](http://root.cern.ch/) data analysis framework on top of [PyROOT](http://root.cern.ch/drupal/content/pyroot).


[Scikit-tracker](https://github.com/bnoi/scikit-tracker), objects detection and robust tracking for cell biology.


[Sherpa](http://cxc.cfa.harvard.edu/contrib/sherpa/) is a modeling and fitting application.


[SimpleCV](http://simplecv.org/) is a framework for building computer vision applications.


[SLOTH](http://pypi.python.org/pypi/SLOTH/) tracks stick-like objects with high resolution.

Includes a Nikon ND2 reader.


[SpacePy](http://spacepy.lanl.gov/) tools for the space science community.


[Stdic](http://code.google.com/p/stdic/) computes a deformation function between images (image registration).


[STScI_python](http://www.stsci.edu/resources/software_hardware/pyraf/stsci_python) provides a general astronomical data analysis infrastructure.


[Trackpy](https://github.com/soft-matter/trackpy), tools for particle tracking.


[VIPS](http://www.vips.ecs.soton.ac.uk/) is an image processing library with no image size limits.




Build Environment



#### Libraries (built from source):



[Alembic](http://www.alembic.io/)

[AMD](http://www.cise.ufl.edu/research/sparse/amd/)

[ANGLE](https://code.google.com/p/angleproject/)

[ANN](http://www.cs.umd.edu/~mount/ANN/)

[ASIO](http://think-async.com/)

[Aspell](http://aspell.net/)

[AVbin](http://avbin.github.com/)

[BerkeleyDB](http://www.oracle.com/technetwork/products/berkeleydb/downloads/index.html)

[BLAS](http://www.netlib.org/blas/)

[Blosc](http://blosc.org)

[Boost](http://www.boost.org/)

[Box2D](http://box2d.org/)

[bsd-xdr](http://code.google.com/p/bsd-xdr/)

[bzip2](http://www.bzip.org/)

[C-ares](http://c-ares.haxx.se/)

[Cairo](http://cairographics.org/)

[Cassowary](http://www.cs.washington.edu/research/constraints/cassowary/)

[CFitsIO](http://heasarc.gsfc.nasa.gov/fitsio/)

[CGAL](http://www.cgal.org/)

[Chipmunk2D](http://chipmunk-physics.net/)

[EasyBMP](http://easybmp.sourceforge.net/)

[Eigen](http://eigen.tuxfamily.org/)

[Expat](http://expat.sourceforge.net/)

[FFTW](http://www.fftw.org/)

[FLAC](http://flac.sourceforge.net/)

[FLANN](http://people.cs.ubc.ca/~mariusm/index.php/FLANN/FLANN)

[FLTK](http://www.fltk.org/)

[FMILibrary](http://www.jmodelica.org/FMILibrary)

[Freeglut](http://freeglut.sourceforge.net/)

[FreeImage](http://freeimage.sourceforge.net/)

[FreeTDS](http://freetds.schemamania.org/)

[FreeType](http://www.freetype.org/)

[FreeXL](https://www.gaia-gis.it/fossil/freexl/home)

[GDAL](http://www.gdal.org/)

[GEOS](http://trac.osgeo.org/geos/)

[GeoTIFF](http://trac.osgeo.org/geotiff/)

[GLEW](http://glew.sourceforge.net/)

[GLPK](http://www.gnu.org/software/glpk/)

[GLUT](http://user.xmission.com/~nate/glut.html)

[GraphicsMagick](http://www.graphicsmagick.org/)

[Graphviz](http://www.graphviz.org/)

[GSL](http://www.gnu.org/software/gsl/)

[HDF4](http://www.hdfgroup.org/products/hdf4/)

[HDF5](http://www.hdfgroup.org/HDF5/)

[iconv](http://www.gnu.org/software/libiconv/)

[ICU](http://site.icu-project.org/)

[igraph](http://igraph.org)

[ImageMagick](http://www.imagemagick.org)

[ITK](http://www.itk.org/)

[JasPer](http://www.ece.uvic.ca/~frodo/jasper/)

[Jxrlib](https://jxrlib.codeplex.com/)

[Kerberos](http://web.mit.edu/kerberos/)

[KissFFT](http://kissfft.sourceforge.net/)

[Klib](http://klib.sourceforge.net/)

[LAME](http://lame.sourceforge.net/)

[LAPACK](http://icl.cs.utk.edu/lapack-for-windows/)

[LEMON](http://lemon.cs.elte.hu/)

[lib3ds](http://code.google.com/p/lib3ds/)

[libcurl](http://curl.haxx.se/)

[libevent](http://libevent.org/)

[Libffi](http://sourceware.org/libffi/)

[libgit2](http://libgit2.github.com/)

[Libidn](http://www.gnu.org/s/libidn/)

[libjpeg](http://libjpeg.sourceforge.net/)

[libjpeg-turbo](http://libjpeg-turbo.virtualgl.org/)

[LIBLINEAR](http://www.csie.ntu.edu.tw/~cjlin/liblinear/)

[liblzma](http://tukaani.org/xz/)

[libmng](http://sourceforge.net/projects/libmng/)

[libpng](http://www.libpng.org/pub/png/libpng.html)

[LibRaw](http://www.libraw.org/)

[libsamplerate](http://www.mega-nerd.com/SRC/)

[libSBML](http://sbml.org/Software/libSBML)

[libsodium](https://github.com/jedisct1/libsodium)

[libspatialindex](http://libspatialindex.github.com/)

[LIBSVM](http://www.csie.ntu.edu.tw/~cjlin/libsvm/)

[LibTIFF](http://www.remotesensing.org/libtiff/)

[libusb](http://www.libusb.org/)

[Libxml2](http://xmlsoft.org/)

[Libxslt](http://xmlsoft.org/XSLT/)

[LibYAML](https://bitbucket.org/xi/libyaml)

[linInChI](http://www.iupac.org/home/publications/e-resources/inchi.html)

[Little CMS](http://www.littlecms.com/)

[LLVM](http://llvm.org/)

[lp_solve](http://lpsolve.sourceforge.net/)

[lz4](http://code.google.com/p/lz4/)

[LZMA](http://www.7-zip.org/sdk.html)

[LZO](http://www.oberhumer.com/opensource/lzo/)

[Mesa](http://www.mesa3d.org/)

[Minizip](http://www.winimage.com/zLibDll/minizip.html)

[MPC](http://www.multiprecision.org/index.php?prog=mpc)

[MPEG_Encode](http://vis.lbl.gov/NERSC/HowTos/mpeg/help/tools/mpeg_encode.html)

[MPFR](http://www.mpfr.org/)

[MPIR](http://www.mpir.org/)

[MUMPS](http://graal.ens-lyon.fr/MUMPS/)

[Muparser](http://muparser.beltoforion.de/)

[MySQL Connector/C](http://dev.mysql.com/downloads/connector/c/)

[NetCDF](http://www.unidata.ucar.edu/software/netcdf/)

[Netpbm](http://netpbm.sourceforge.net/)

[ODE](http://www.ode.org/)

[Ogg](http://xiph.org/ogg/)

[OpenAL](http://connect.creativelabs.com/openal/)

[OpenBabel](http://openbabel.org)

[OpenColorIO](http://opencolorio.org/)

[OpenCV](http://opencv.org/)

[OpenEXR](http://www.openexr.com/)

[OpenImageIO](http://www.openimageio.org/)

[OpenJPEG](http://www.openjpeg.org/)

[OpenLDAP](http://www.openldap.org/)

[OpenMPI](http://www.open-mpi.org/)

[OpenNI](http://www.openni.org/)

[OpenPGM](http://code.google.com/p/openpgm/)

[OpenSSL](http://www.openssl.org/)

[PDCurses](http://pdcurses.sourceforge.net/)

[Pixman](http://pixman.org/)

[PortAudio](http://www.portaudio.com/)

[PortMidi](http://portmedia.sourceforge.net/)

[PROJ.4](http://trac.osgeo.org/proj/)

[Pthreads-w32](http://sourceware.org/pthreads-win32/)

[Qhull](http://www.qhull.org/)

[Qt](http://qt-project.org)

[QuickFIX](http://www.quickfixengine.org/)

[RE2](http://code.google.com/p/re2/)

[RtMidi](http://www.music.mcgill.ca/~gary/rtmidi/)

[SASL](http://asg.web.cmu.edu/sasl/)

[SDL](http://www.libsdl.org)

[SDL_gfx](http://www.ferzkopp.net/joomla/content/view/19/14/)

[SDL_image](http://www.libsdl.org/projects/SDL_image/)

[SDL_mixer](http://www.libsdl.org/projects/SDL_mixer/)

[SDL_ttf](http://www.libsdl.org/projects/SDL_ttf/)

[SFML2](http://www.sfml-dev.org/)

[Silo](https://wci.llnl.gov/codes/silo/)

[SLICOT](http://www.slicot.org/)

[Smpeg](http://icculus.org/smpeg/)

[Snappy](http://code.google.com/p/snappy/)

[sparsehash](http://code.google.com/p/sparsehash/)

[SPHEREPACK](http://www2.cisl.ucar.edu/resources/legacy/spherepack)

[SQLite](http://www.sqlite.org/)

[SuiteSparse](http://www.cise.ufl.edu/research/sparse/SuiteSparse/)

[SUNDIALS](https://computation.llnl.gov/casc/sundials/)

[SuperLU](http://crd-legacy.lbl.gov/~xiaoye/SuperLU/)

[SZip](http://www.hdfgroup.org/doc_resource/SZIP/)

[TCL/TK](http://www.tcl.tk/)

[UDUNITS](http://www.unidata.ucar.edu/software/udunits/)

[UMFPACK](http://www.cise.ufl.edu/research/sparse/umfpack/)

[ViennaCL](http://viennacl.sourceforge.net/)

[Vorbis](http://xiph.org/vorbis/)

[VTK](http://www.vtk.org/)

[WebP](https://developers.google.com/speed/webp/)

[wxWidgets](http://www.wxwidgets.org/)

[Xerces](http://xerces.apache.org/)

[YAML](http://www.yaml.org/)

[ZeroMQ](http://www.zeromq.org/)

[zlib](http://zlib.net/)





#### SDKs and libraries (prebuilt):



[Apache HTTP Server](http://httpd.apache.org/)

[ASIO SDK](http://www.steinberg.net/en/company/developer.html)

[Bio-Formats](http://loci.wisc.edu/software/bio-formats)

[ESRI File Geodatabase API](http://www.esri.com/apps/products/download/#File_Geodatabase_API_1.3)

[GTK2](http://www.gtk.org/)

[Intel Integrated Performance Primitives](http://software.intel.com/en-us/articles/intel-ipp/)

[Intel Math Kernel Library](http://software.intel.com/en-us/articles/intel-mkl/)

[Intel SDK for OpenCL Applications 2013](http://software.intel.com/en-us/vcsource/tools/opencl-sdk)

[Intel Threading Building Blocks](http://threadingbuildingblocks.org/)

[libsndfile](http://www.mega-nerd.com/libsndfile/)

[MATLAB(tm)](http://www.mathworks.com/products/matlab/)

[Microsoft DirectX SDK (June 2010)](http://www.microsoft.com/en-us/download/details.aspx?id=6812)

[Microsoft Platform SDK for Windows Server 2003 R2](http://www.microsoft.com/download/en/details.aspx?id=22668)

[Microsoft SQL Server](http://www.microsoft.com/sqlserver/)

[Microsoft Windows SDK v6.1 Windows Server 2008 and .NET Framework 3.5](http://www.microsoft.com/download/en/details.aspx?id=11310)

[Microsoft Windows SDK v7.0 for Windows 7 and .NET Framework 3.5 Service Pack 1](http://www.microsoft.com/download/en/details.aspx?id=3138)

[Microsoft Windows SDK v7.1 for Windows 7 and .NET Framework 4](http://www.microsoft.com/en-us/download/details.aspx?id=8279)

[NVidia CG Toolkit](http://developer.nvidia.com/cg-toolkit)

[NVidia CUDA Toolkit](http://developer.nvidia.com/cuda/cuda-toolkit)

[Oracle Java SE Development Kit 7](http://www.oracle.com/technetwork/java/javase/)

[PostgreSQL Server](http://www.postgresql.org/)

[Python](http://www.python.org/)

[R](http://www.r-project.org/)





#### Compilers:



[Clang](http://clang.llvm.org/)

[Intel Composer XE 2013 SP1](http://software.intel.com/en-us/intel-composer-xe)

[Lazarus](http://www.lazarus.freepascal.org/)

[Microsoft Platform SDK for Windows Server 2003 R2](http://www.microsoft.com/download/en/details.aspx?id=22668)

[Microsoft Visual C++ 2008 Feature Pack](http://www.microsoft.com/en-us/download/details.aspx?id=6922)

[Microsoft Visual C++ Compiler for Python 2.7](http://www.microsoft.com/en-us/download/details.aspx?id=44266)

[Microsoft Visual Studio .NET 2003](http://msdn.microsoft.com/en-us/vstudio)

[Microsoft Visual Studio 2008 Pro](http://msdn.microsoft.com/en-us/vstudio)

[Microsoft Visual Studio 2010 Pro](http://msdn.microsoft.com/en-us/vstudio)

[Microsoft Visual Studio 2013 Pro](http://msdn.microsoft.com/en-us/vstudio)

[MinGW](http://www.mingw.org/)

[MinGW-w64](http://mingw-w64.sourceforge.net/)

[NASM](http://www.nasm.us/)

[Rtools](http://cran.r-project.org/bin/windows/Rtools/)

[Yasm](http://yasm.tortall.net/)





#### Build tools:



[ActivePerl](http://www.activestate.com/activeperl)

[Bazaar](http://bazaar.canonical.com/)

[Bento](http://cournape.github.com/Bento/)

[BJam](http://www.boost.org/boost-build2/doc/html/bbv2/jam.html)

[CMake](http://www.cmake.org/)

[CVS](http://savannah.nongnu.org/projects/cvs)

[Cygwin](http://www.cygwin.com/)

[Cython](http://www.cython.org/)

[deoxygen](http://www.stack.nl/~dimitri/doxygen/)

[Epydoc](http://epydoc.sourceforge.net/)

[Git](http://git-scm.com/)

[JCC](http://lucene.apache.org/pylucene/jcc/)

[Jom](http://qt-project.org/wiki/jom)

[M4](http://gnuwin32.sourceforge.net/packages/m4.htm)

[Mercurial](http://mercurial.selenic.com/)

[MSYS](http://sourceforge.net/projects/msys2/)

[MSYS2](http://www.mingw.org/wiki/MSYS)

[Nose](http://nose.readthedocs.org/en/latest/)

[NSIS](http://nsis.sourceforge.net/)

[PyPy](http://pypy.org/)

[Python](http://www.python.org/)

[SCons](http://www.scons.org/)

[SIP](http://www.riverbankcomputing.co.uk/software/sip/)

[Sphinx](http://sphinx.pocoo.org/)

[Subversion](http://subversion.apache.org/)

[SWIG](http://www.swig.org/)

[Waf](http://code.google.com/p/waf/)





#### Other software:



[7-Zip](http://www.7-zip.org/)

[Avconv](https://libav.org/)

[com0com](http://com0com.sourceforge.net/)

[Dependency Walker](http://www.dependencywalker.com/)

[FFmpeg](https://www.ffmpeg.org/)

[GhostScript](http://www.ghostscript.com/)

[GnuWin32](http://gnuwin32.sourceforge.net/)

[Info-ZIP](http://www.info-zip.org/)

[Inkscape](http://inkscape.org/)

[MEncoder](http://www.mplayerhq.hu)

[MiKTeX](http://miktex.org/)

[Notepad++](http://notepad-plus-plus.org/)

[Pandoc](http://johnmacfarlane.net/pandoc/)

[PTVS](http://pytools.codeplex.com/)

[Redis](http://redis.io/)

[Spyder](http://code.google.com/p/spyderlib/)

[Sysinternals Suite](http://technet.microsoft.com/en-us/sysinternals)

[Ubuntu](http://www.ubuntu.com/)

[Windows 8.1](http://windows.microsoft.com/en-US/windows-8/)

[WingIDE](http://www.wingware.com/)

[WinMerge](http://winmerge.org/)





#### Other CPython distributions:



[ActivePython](http://www.activestate.com/activepython)

[Anaconda](https://store.continuum.io/cshop/anaconda)

[Python(x,y)](http://pythonxy.googlecode.com)

[Pyzo](http://www.pyzo.org/)

[WinPython](http://winpython.sourceforge.net/)



[Christoph Gohlke](http://www.lfd.uci.edu/~gohlke/), [Laboratory for Fluorescence Dynamics](http://www.lfd.uci.edu/)


