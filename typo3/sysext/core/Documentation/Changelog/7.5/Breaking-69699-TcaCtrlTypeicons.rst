=============================================
Breaking: #69699 - TCA ctrl typeicons removed
=============================================

Description
===========

The ``TCA['ctrl']['typeicons']`` key has been removed.


Impact
======

If still used, a fallback default icon may be displayed instead.


Affected Installations
======================

Searching for ``typeicons`` keyword should reveal extensions using this functionality.


Migration
=========

Until further works on the icon API have been finished, ``TCA['ctrl']['typeicon_classes']``
should be used as documented in the TCA reference.
