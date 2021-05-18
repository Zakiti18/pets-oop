<?php

/*
 * 328/pets-oop/index.php
 * Phillip Ball
 * 05/18/2021
 * Week 8 OOP demo
*/

// turn on error-reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// require needed files
require_once('vendor/autoload.php');

// instantiate Fat-Free
$f3 = Base::instance();

// define routes
// default (home) route
$f3->route('GET /', function () {
    // display the home page
    //$view = new Template();
    //echo $view->render('views/home.html');
    echo '<h1>Hello, pets!</h1>';

    // instantiate a pet object
    $pet1 = new Pet("Nugget", "black");

    // invoke the pet methods
    $pet1->eat();
    $pet1->talk();
    $pet1->sleep();

    $pet2 = new Pet("Barkington");
    echo $pet2->getName() . "<br>";
    $pet2->setName("Sir Barkington");
    $pet2->setColor("blue");

    echo"<pre>";
    var_dump($pet2);
    echo"</pre>";

    $dog1 = new Dog("Batman", "purple");
    $dog1->fetch();
    $dog1->eat();

    $dog1 = new Cat("Catbat", "orange");
    $dog1->scratch();
    $dog1->eat();
});

// run Fat-Free
$f3->run();