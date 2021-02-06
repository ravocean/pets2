<?php
//This is my CONTROLLER

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Start the session
session_start();

//Require the autoload file
require_once('vendor/autoload.php');

// Set session variables

//Create an instance of the Base class
$f3 = Base::instance();
$f3->set('DEBUG', 3);

// Set debugging for fat free
$f3 -> set('DEBUG',3);

//Define a default route (home page)
$f3->route('GET /', function() {
    //echo "Pet Home";
    $view = new Template();
    echo $view->render('views/pet-home.html');
});

//Define a default route (order)
$f3->route('GET /order', function() {
   $view = new Template();
   echo $view->render('views/pet-order.html');
});

//Define a default route (order2)
$f3->route('POST /order2', function() {


    if(isset($_POST['petinput'])){
        $_SESSION['petinput'] = $_POST['petinput'];
    }

    if(isset($_POST['petselector'])){
        $_SESSION['petselector'] = $_POST['petselector'];
    }


    $view = new Template();
    echo $view->render('views/pet-order2.html');
});

//Define a default route (order summary)
$f3->route('POST /summary', function() {


    if(isset($_POST['petName'])){
        $_SESSION['petName'] = $_POST['petName'];
    }

    $view = new Template();
    echo $view->render('views/order-summary.html');
});

//Run fat free
$f3->run();