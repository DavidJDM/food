<?php
/**
 * Created by PhpStorm.
 * User: davidkovalevich
 * Date: 1/14/19
 * Time: 10:30 AM
 */

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require autoload
require_once ('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();

//Turn of Fat-Free error reporting
$f3->set('DEBUG', 3);

//Define a default route
$f3->route('GET /', function() {
//echo '<h1>Howdy!</h1>';

$view = new View();
echo $view->render('views/home.html');
});

$f3->route('GET /breakfast', function() {
    $view = new View();
    echo $view->render('views/breakfast.html');
});

$f3->route('GET /breakfast/pancakes', function() {
    $view = new View();
    echo $view->render('views/pancakes.html');
});

$f3->route('GET /lunch', function() {
    $view = new View();
    echo $view->render('views/lunch.html');
});

$f3->route('GET /lunch/borsch', function() {
    $view = new View();
    echo $view->render('views/borsch.html');
});

$f3->route('GET /lunch/pelmeni', function() {
    $view = new View();
    echo $view->render('views/pelmeni.html');
});

$f3->route('GET /dinner', function() {
    $view = new View();
    echo $view->render('views/dinner.html');
});

$f3->route('GET /dinner/tamale', function() {
    $view = new View();
    echo $view->render('views/tamale.html');
});

$f3->route('GET /dinner/padthai', function() {
    $view = new View();
    echo $view->render('views/padthai.html');
});

$f3->route('GET /dinner/pelmeni', function() {
    $view = new View();
    echo $view->render('views/pelmeni.html');
});

//Define a route with a parameter
$f3->router('GET /@food', function($f3, $params) {
    print_r($params);
    echo "<h3>I like " . $params['food'] . "</h3>";
});

//Define a route with multiple parameter
$f3->router('GET /@meal/@food', function($f3, $params) {
    print_r($params);
    echo "<h3>I like " . $params['food'] .
        " for " . $params['meal'] . "</h3>";
});

//Run fat free
$f3->run();