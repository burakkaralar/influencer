## Copyright (C) 2005, 2008-2015, 2018 Free Software Foundation, Inc.
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

dist_noinst_SCRIPTS = %D%/extexi %D%/test
TEST_LOG_COMPILER = $(top_srcdir)/%D%/test

AM_CXXFLAGS =							\
  $(WARN_CXXFLAGS) $(WARN_CXXFLAGS_TEST) $(WERROR_CXXFLAGS)

## ------------ ##
## Extracting.  ##
## ------------ ##

doc = $(top_srcdir)/doc/bison.texi
extexi = $(top_srcdir)/%D%/extexi
if ENABLE_GCC_WARNINGS
EXTEXIFLAGS = --synclines
endif
extract = VERSION="$(VERSION)" $(PERL) $(extexi) $(EXTEXIFLAGS) $(doc) --
extracted =
CLEANFILES += $(extracted) %D%/extracted.stamp
%D%/extracted.stamp: $(doc) $(extexi)
	$(AM_V_GEN)rm -f $@ $@.tmp
	$(AM_V_at)$(MKDIR_P) %D%
	$(AM_V_at)touch $@.tmp
	$(AM_V_at)$(extract) $(extracted)
	$(AM_V_at)mv $@.tmp $@

$(extracted): %D%/extracted.stamp
	@test -f $@ || rm -f %D%/extracted.stamp
	@test -f $@ || $(MAKE) $(AM_MAKEFLAGS) %D%/extracted.stamp

## ---------- ##
## Examples.  ##
## ---------- ##


examplesdir = $(docdir)/examples
dist_examples_DATA = %D%/README

CLEANDIRS += %D%/*.dSYM

include %D%/calc++/local.mk
include %D%/c++/local.mk
include %D%/mfcalc/local.mk
include %D%/rpcalc/local.mk
