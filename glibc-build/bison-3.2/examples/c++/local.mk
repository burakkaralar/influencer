## Copyright (C) 2018 Free Software Foundation, Inc.
##
## This program is free software: you can redistribute it and/or modify
## it under the terms of the GNU General Public License as published by
## the Free Software Foundation, either version 3 of the License, or
## (at your option) any later version.
##
## This program is distributed in the hope that it will be useful,
## but WITHOUT ANY WARRANTY; without even the implied warranty of
## MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
## GNU General Public License for more details.
##
## You should have received a copy of the GNU General Public License
## along with this program.  If not, see <http://www.gnu.org/licenses/>.

cxxdir = $(examplesdir)/c++

## -------- ##
## Simple.  ##
## -------- ##

BUILT_SOURCES += $(simple_sources)
CLEANFILES +=  %D%/simple.[ch] %D%/simple.output
CLEANDIRS += %D%/*.dSYM
cxx_DATA = $(simple_extracted)

simple_extracted = %D%/simple.yy
simple_sources = $(simple_extracted)
extracted += $(simple_extracted)

if ENABLE_CXX14
  check_PROGRAMS += %D%/simple
  nodist_%C%_simple_SOURCES = $(simple_sources)

  %C%_simple_CXXFLAGS = $(CXX11_CXXFLAGS)
  # Don't use gnulib's system headers.
  %C%_simple_CPPFLAGS = -I$(top_builddir)
  dist_TESTS += %D%/simple.test
  %D%/simple.cc: $(BISON_IN) $(dist_pkgdata_DATA)
endif


## ---------- ##
## Variants.  ##
## ---------- ##

check_PROGRAMS += %D%/variant
nodist_%C%_variant_SOURCES = %D%/variant.yy
# Don't use gnulib's system headers.
%C%_variant_CPPFLAGS = -I$(top_builddir)
dist_TESTS += %D%/variant.test
%D%/variant.cc: $(BISON_IN) $(dist_pkgdata_DATA)

if ENABLE_CXX11
  check_PROGRAMS += %D%/variant-11
  nodist_%C%_variant_11_SOURCES = %D%/variant-11.yy
  %C%_variant_11_CXXFLAGS = $(CXX11_CXXFLAGS)
  # Don't use gnulib's system headers.
  %C%_variant_11_CPPFLAGS = -I$(top_builddir)
  dist_TESTS += %D%/variant-11.test
  %D%/variant-11.cc: $(BISON_IN) $(dist_pkgdata_DATA)
endif

dist_cxx_DATA = %D%/README %D%/Makefile %D%/variant.yy %D%/variant-11.yy
CLEANFILES += %D%/simple.output %D%/variant.output %D%/variant-11.output
