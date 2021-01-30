<?php
//This is my CONTROLLER

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();
$f3->set('DEBUG', 3);

//Define a default route (home page)
$f3->route('GET /', function() {
    //echo "Pet Home";
    $view = new Template();
    echo $view->render('views/pet-home.html');
});

//Define a default route (home page)
$f3->route('GET /order', function() {
   $view = new Template();
   echo $view->render('views/pet-order.html');
});

//Define a default route (home page)
$f3->route('GET /order2', function() {
    $view = new Template();
    echo $view->render('views/pet-order2.html');
});

//Define a default route (home page)
$f3->route('POST /summary', function() {
    $view = new Template();
    echo $view->render('views/order-summary.html');
});

//Run fat free
$f3->run();