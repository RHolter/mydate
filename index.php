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

// route to personal
$f3->route('GET /personal', function (){
    //echo "<h1Personal</h1>"
    $view = new Template();
    echo $view-> render('views/personal.html');
});

// route to profile
$f3->route('GET /profile', function (){
    //echo "<h1>Profile</h1>"
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

//run fat free
$f3->run();
