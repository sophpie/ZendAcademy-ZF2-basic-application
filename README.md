ZF2 - Basic Application
=======================

Introduction
------------
This the simplest ZF2 application you can do. It has no module but is configured enough to be fully functionnal.


Installation
------------

Using Composer (recommended)
----------------------------
The recommended way to get a working copy of this project is to clone the repository
and use `composer` to install dependencies using the `create-project` command:

    curl -s https://getcomposer.org/installer | php --
    php composer.phar create-project zend-academy/zf2-basic-application path/to/install

Alternately, clone the repository and manually invoke `composer` using the shipped
`composer.phar`:

    cd my/project/dir
    git clone https://github.com/sophpie/ZendAcademy-ZF2-basic-application.git
    cd ZendAcademy-ZF2-basic-application
    php composer.phar self-update
    php composer.phar install

(The `self-update` directive is to ensure you have an up-to-date `composer.phar`
available.)


Virtual Host
------------
Afterwards, set up a virtual host to point to the public/ directory of the
project and you should be ready to go!
