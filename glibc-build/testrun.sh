#!/bin/bash
builddir=`dirname "$0"`
GCONV_PATH="${builddir}/iconvdata"

usage () {
  echo "usage: $0 [--tool=strace] PROGRAM [ARGUMENTS...]" 2>&1
  echo "       $0 --tool=valgrind PROGRAM [ARGUMENTS...]" 2>&1
}

toolname=default
while test $# -gt 0 ; do
  case "$1" in
    --tool=*)
      toolname="${1:7}"
      shift
      ;;
    --*)
      usage
      ;;
    *)
      break
      ;;
  esac
done

if test $# -eq 0 ; then
  usage
fi

case "$toolname" in
  default)
    exec   env GCONV_PATH="${builddir}"/iconvdata LOCPATH="${builddir}"/localedata LC_ALL=C  "${builddir}"/elf/ld-linux-x86-64.so.2 --library-path "${builddir}":"${builddir}"/math:"${builddir}"/elf:"${builddir}"/dlfcn:"${builddir}"/nss:"${builddir}"/nis:"${builddir}"/rt:"${builddir}"/resolv:"${builddir}"/mathvec:"${builddir}"/support:"${builddir}"/crypt:"${builddir}"/nptl ${1+"$@"}
    ;;
  strace)
    exec strace  -EGCONV_PATH=/var/www/html/glibc-build/iconvdata  -ELOCPATH=/var/www/html/glibc-build/localedata  -ELC_ALL=C  /var/www/html/glibc-build/elf/ld-linux-x86-64.so.2 --library-path /var/www/html/glibc-build:/var/www/html/glibc-build/math:/var/www/html/glibc-build/elf:/var/www/html/glibc-build/dlfcn:/var/www/html/glibc-build/nss:/var/www/html/glibc-build/nis:/var/www/html/glibc-build/rt:/var/www/html/glibc-build/resolv:/var/www/html/glibc-build/mathvec:/var/www/html/glibc-build/support:/var/www/html/glibc-build/crypt:/var/www/html/glibc-build/nptl ${1+"$@"}
    ;;
  valgrind)
    exec env GCONV_PATH=/var/www/html/glibc-build/iconvdata LOCPATH=/var/www/html/glibc-build/localedata LC_ALL=C valgrind  /var/www/html/glibc-build/elf/ld-linux-x86-64.so.2 --library-path /var/www/html/glibc-build:/var/www/html/glibc-build/math:/var/www/html/glibc-build/elf:/var/www/html/glibc-build/dlfcn:/var/www/html/glibc-build/nss:/var/www/html/glibc-build/nis:/var/www/html/glibc-build/rt:/var/www/html/glibc-build/resolv:/var/www/html/glibc-build/mathvec:/var/www/html/glibc-build/support:/var/www/html/glibc-build/crypt:/var/www/html/glibc-build/nptl ${1+"$@"}
    ;;
  *)
    usage
    ;;
esac
