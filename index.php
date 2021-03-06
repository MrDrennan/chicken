<?php
/**
 * @author Chad Drennan
 * Date 1/15/20
 * @link /328/chicken/index.php
 */

ini_set("display_errors", 1);
error_reporting(E_ALL);

require("vendor/autoload.php");

// :: means to invoke a static method. -> means to use an instance method
$f3 = Base::instance();

// Instantiate controller object
$controller = new ChickenController($f3);

$f3->route('GET /', function() {
    //$GLOBALS['controller']->home();
    //$controller->home();

    // same as above to lines
    global $controller;
    $controller->home();

});

$f3->route('GET /eggs', function() {
    //$GLOBALS['controller']->home();
    //$controller->home();

    // same as above to lines
    global $controller;
    $controller->eggs();

});

// Run F3
$f3->run();


