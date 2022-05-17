<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require the autoload file
require_once("vendor/autoload.php");

//create an instance of the base class
// :: invokes a static method

$f3 = Base::instance();

//Define a default route
$f3->route('GET /', function() {
       $view = new Template();
    echo $view-> render('views/home.html');
}
);
$f3->route('GET /personal', function (){
    //echo "<h1>User Profile Page</h1>"
    $view = new Template();
    echo $view-> render('views/personal.html');
});

//run fat free
$f3->run();
