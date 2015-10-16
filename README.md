Yii 2 AdminLTE Kitchen Sink
===========================

Based on Yii2 Basic Project Template, used to test my experiments with AdminLTE

DIRECTORY STRUCTURE
-------------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      components/         contains the template customized components
      config/             contains application configurations
      controllers/        contains Web controller classes
      mail/               contains view files for e-mails
      models/             contains model classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources
      widgets/            contains the widgets used by this template


REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 5.4.0.


INSTALLATION
------------

### Install via Composer

If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

You can then install this project template using the following command:

~~~
php composer.phar global require "fxp/composer-asset-plugin:~1.0.3"
php composer.phar create-project --prefer-dist --stability=dev machour/yii2-adminlte-demo adminlte
~~~

Now you should be able to access the application through the following URL, assuming `adminlte` is the directory
directly under the Web root.

~~~
http://localhost/adminlte/web/
~~~

DEPENDENCIES
------------

This template use several libraries in order to mimic AdminLTE behavior, here's a list:

UI/sliders.html:

* ekaragodin/yii2-bootstrap-slider
* yii2mod/yii2-ion-slider

charts/chartjs.html

* 2amigos/yii2-chartjs-widget

charts/inline.html

* machour/yii2-sparkline


TODO
----

Add these pages :

* index.html
* layout/top-nav.html
* layout/boxed.html
* layout/fixed.html
* layout/collapsed-sidebar.html
* widgets.html
* charts/morris.html
* charts/flot.html
* charts/inline.html
* UI/icons.html
* UI/buttons.html
* forms/general.html
* forms/advanced.html
* forms/editors.html
* tables/simple.html
* tables/data.html
* calendar.html
* mailbox.html
* examples/invoice.html
* examples/profile.html
* examples/login.html
* examples/register.html
* examples/lockscreen.html
* examples/404.html
* examples/500.html
* examples/blank.html

.. and finish the following pages :

* index2.html
* UI/general.html
* UI/timeline.html
* UI/modals.html


CONFIGURATION
-------------

### Database

Edit the file `config/db.php` with real data, for example:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2basic',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',
];
```

**NOTE:** Yii won't create the database for you, this has to be done manually before you can access it.

Also check and edit the other files in the `config/` directory to customize your application.
