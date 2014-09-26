DJTestBundle
=============

The DJTestBundle adds a custom FrameworkTestCase for unit testing with PHPUnit.
Functionnalities included are :
* Inclusion of Faker library
* Using reflection method to access private/protected methods.

Installation
------------

## Prerequisites

This version of the bundle requires PHP5.5, PHPUnit >= 4.0.0, fzaninotto/Faker >= 1.4.0.
This bundle (as its name represents) has been developed for Symfony2 but can be used without any framework.

## Steps

* Add DJTestBundle to your repositories :

``` json`
"repositories" : [
        {
            "type" : "vcs",
            "url" : "https://github.com/digitaljunkies/DJTestBundle.git"
        }
    ],
```

* Download DJExceptionBundle using composer :

``` bash
& php composer.phar require digitaljunkies/test-bundle 'dev-master@dev'
```

Utilisation
-------

Extends from your tests classes from `DJ\TestBundle\Test\FrameworkTestCase`

To access a private/protected method of an object use :

``` php
$this->getMethod($class, 'methodName')
```

You can access faker through the property :

 ``` php
 $this->faker
 ```
