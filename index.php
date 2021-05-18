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

// require the pet class (TEMP)
require ('pet.php');

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
    $pet1 = new Pet();

    // invoke the eat method
    $pet1->eat();

    $pet1->talk();
    $pet1->sleep();
});

// run Fat-Free
$f3->run();