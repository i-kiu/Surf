.. -*- coding: utf-8 -*- with BOM.
.. include:: ../Includes.txt

============
Installation
============

There are two ways to install Surf:

1. :ref:`installation-download-phar`
2. :ref:`installation-composer`
3. :ref:`installation-build-phar`

.. _installation-download-phar:

Download phar archive
---------------------

To install Surf as phar archive, run the following commands::

    mkdir /usr/local/surf
    curl -L https://github.com/TYPO3/Surf/releases/download/2.0.0-beta7/surf.phar -o /usr/local/surf/surf.phar
    chmod +x /usr/local/surf/surf.phar
    ln -s /usr/local/surf/surf.phar /usr/local/bin/surf

You may need extended privileges e.g. `sudo`.

This way, you can add `/usr/local/surf` to `PHP Include Paths` of your IDE.

Upgrading Surf
~~~~~~~~~~~~~~

Later, to upgrade Surf, run the command::

    surf self-update

.. _installation-composer:

Source composer installation
----------------------------

To install Surf via composer, run the following commands::

    # Until stable release, you need to add stability-flag @beta
    composer global require typo3/surf:^2.0.0@beta

This way, you can add `~/.composer/vendor/typo3/surf` to `PHP Include Paths` of your IDE.

.. _installation-build-phar:

Building a Surf phar from source
--------------------------------

Surf is built using the `box project <https://box-project.github.io/box2/>`_ and the process is simple:

* Download the latest `box.phar` and put in an executable directory
* `cd your/surf/clone`
* `php box build`

The generated `surf.phar` should work as expected.

