dnl $Id$
dnl config.m4 for extension my_file

dnl Comments in this file start with the string 'dnl'.
dnl Remove where necessary. This file will not work
dnl without editing.

dnl If your extension references something external, use with:

dnl PHP_ARG_WITH(my_file, for my_file support,
dnl Make sure that the comment is aligned:
dnl [  --with-my_file             Include my_file support])

dnl Otherwise use enable:

dnl PHP_ARG_ENABLE(my_file, whether to enable my_file support,
dnl Make sure that the comment is aligned:
dnl [  --enable-my_file           Enable my_file support])

if test "$PHP_MY_FILE" != "no"; then
  dnl Write more examples of tests here...

  dnl # --with-my_file -> check with-path
  dnl SEARCH_PATH="/usr/local /usr"     # you might want to change this
  dnl SEARCH_FOR="/include/my_file.h"  # you most likely want to change this
  dnl if test -r $PHP_MY_FILE/$SEARCH_FOR; then # path given as parameter
  dnl   MY_FILE_DIR=$PHP_MY_FILE
  dnl else # search default path list
  dnl   AC_MSG_CHECKING([for my_file files in default path])
  dnl   for i in $SEARCH_PATH ; do
  dnl     if test -r $i/$SEARCH_FOR; then
  dnl       MY_FILE_DIR=$i
  dnl       AC_MSG_RESULT(found in $i)
  dnl     fi
  dnl   done
  dnl fi
  dnl
  dnl if test -z "$MY_FILE_DIR"; then
  dnl   AC_MSG_RESULT([not found])
  dnl   AC_MSG_ERROR([Please reinstall the my_file distribution])
  dnl fi

  dnl # --with-my_file -> add include path
  dnl PHP_ADD_INCLUDE($MY_FILE_DIR/include)

  dnl # --with-my_file -> check for lib and symbol presence
  dnl LIBNAME=my_file # you may want to change this
  dnl LIBSYMBOL=my_file # you most likely want to change this 

  dnl PHP_CHECK_LIBRARY($LIBNAME,$LIBSYMBOL,
  dnl [
  dnl   PHP_ADD_LIBRARY_WITH_PATH($LIBNAME, $MY_FILE_DIR/lib, MY_FILE_SHARED_LIBADD)
  dnl   AC_DEFINE(HAVE_MY_FILELIB,1,[ ])
  dnl ],[
  dnl   AC_MSG_ERROR([wrong my_file lib version or lib not found])
  dnl ],[
  dnl   -L$MY_FILE_DIR/lib -lm
  dnl ])
  dnl
  dnl PHP_SUBST(MY_FILE_SHARED_LIBADD)

  PHP_NEW_EXTENSION(my_file, my_file.c, $ext_shared)
fi
