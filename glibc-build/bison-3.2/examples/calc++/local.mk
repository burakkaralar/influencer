## Copyright (C) 2005-2006, 2008-2015, 2018 Free Software Foundation,
## Inc.
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

## ------------------- ##
## Parser generation.  ##
## ------------------- ##

# Don't depend on $(BISON) otherwise we would rebuild these files
# in srcdir, including during distcheck, which is forbidden.
%D%/parser.stamp: $(BISON_IN)
SUFFIXES += .yy .stamp
.yy.stamp:
	$(AM_V_YACC)rm -f $@
	$(AM_V_at)touch $@.tmp
	$(AM_V_at)$(YACCCOMPILE) -o $*.cc $<
	$(AM_V_at)mv -f $@.tmp $@

$(calcxx_sources_generated): %D%/parser.stamp
	@test -f $@ || rm -f %D%/parser.stamp
	@test -f $@ || $(MAKE) $(AM_MAKEFLAGS) %D%/parser.stamp
CLEANFILES +=					\
  $(calcxx_sources_generated)			\
  %D%/parser.output				\
  %D%/parser.stamp				\
  %D%/scanner.cc
CLEANDIRS += %D%/*.dSYM

## -------------------- ##
## Building & testing.  ##
## -------------------- ##

# Avoid using BUILT_SOURCES which is too global.
$(%C%_calc___OBJECTS): $(calcxx_sources_generated)

calcxx_sources_extracted =			\
  %D%/driver.cc					\
  %D%/driver.hh					\
  %D%/scanner.ll				\
  %D%/calc++.cc
calcxx_extracted =                              \
  $(calcxx_sources_extracted)                   \
  %D%/parser.yy
extracted += $(calcxx_extracted)
calcxx_sources_generated =                      \
  %D%/parser.cc                                 \
  %D%/parser.hh                                 \
  %D%/location.hh                               \
  %D%/position.hh                               \
  %D%/stack.hh
calcxx_sources =                                \
  $(calcxx_sources_extracted)                   \
  $(calcxx_sources_generated)

if FLEX_CXX_WORKS
check_PROGRAMS += %D%/calc++
nodist_%C%_calc___SOURCES =                     \
  $(calcxx_sources)

# Don't use gnulib's system headers.
%C%_calc___CPPFLAGS = -I$(top_builddir)/%D%
%C%_calc___CXXFLAGS = $(AM_CXXFLAGS) $(FLEX_SCANNER_CXXFLAGS)
dist_TESTS += %D%/calc++.test
else
EXTRA_DIST += %D%/calc++.test
endif


## ------------ ##
## Installing.  ##
## ------------ ##

calcxxdir = $(docdir)/examples/calc++
calcxx_DATA = $(calcxx_extracted)
dist_calcxx_DATA = %D%/README %D%/Makefile
