Symfony 2.1.x DIC Demo
======================

**Note to English speaking readers:** This demo project is part of an article in the print edition
of German PHPmagazin. The following notes are therefore in German.


Überblick
---------

Dieses Projekt ist eine lauffähige Version der in PHPmagazin 2.2012 besprochenen Beispiele zum
Symfony 2 Dependency Injection Container.


Installation
------------

Vor dem Start müssen die allgemeinen Systemvoraussetzungen für eine Installation von
Symfony 2.1.x gegeben sein, siehe [http://symfony.com/doc/current/reference/requirements.html](http://symfony.com/doc/current/reference/requirements.html)

**Wichtig:** Um einen schnellen Start zu ermöglichen, ist eine aktuelle Symfony 2 Standard Edition
bereits Teil des Projektes und muss nicht getrennt installiert werden.

Als nächstes muss das Repository lokal geklont werden.

    $ git clone git@github.com:meandmymonkey/phpmag-2013-2.git

Danach benötigen Sie Composer zur Installation der Vendor Bibliotheken.

    $ cd phpmag-2013-2
    $ curl -s http://getcomposer.org/installer | php

Nun können die Bibliotheken installiert werden.

    $ php composer.phar install


Anwendung
---------

Die Ergebnisse des Webserviceaufrufes finden sich unter

    http://[lokale_url]/rates/
    http://[lokale_url]/rates/CHF

In der ```dev``` Umgebung werden lokale Dummydaten genutzt

    http://[lokale_url]/app_dev.php/rates/
    http://[lokale_url]/app_dev.php/rates/CHF

Das Kürzel für die Währung (hier: CHF) kann natürlich geändert werden,
um andere Währungen anzuzeigen.


Tests
-----

Falls PHPUnit installiert ist, lassen sich die Functional Tests wie folgt ausführen:

    $ phpunit -c app


