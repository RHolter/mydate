<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require the autoload file
require_once("vendor/autoload.php");

//Start a session
session_start();

//create an instance of the base class
// :: invokes a static method

$f3 = Base::instance();

//Define a default route
$f3->route('GET /', function() {
       $view = new Template();
    echo $view-> render('views/home.html');
}
);

$f3->route('GET /personal', function() {
//    var_dump($_POST);

    $_SESSION['fname'] = $_POST['fName'];
    $_SESSION['age'] = $_POST['age'];

    $view = new Template();
    echo $view->render('views/personal.html');
});

// route to profile
$f3->route('GET /profile', function (){
    //echo "<h1>Profile</h1>"

    $_SESSION['email'] = $_POST['email'];
    $view = new Template();
    echo $view-> render('views/profile.html');
});

// route to interests
$f3->route('GET /interests', function (){
    //echo "<h1>Profile</h1>"
    $view = new Template();
    echo $view-> render('views/interests.html');
});

//route to summary
$f3->route('GET /summary', function (){
    //echo "<h1>Profile</h1>"
    $view = new Template();
    echo $view-> render('views/summary.html');
});

//run fat free
$f3->run();
