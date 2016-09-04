<?php
include "../framework/routing.php";
$routes = new Routing();

//Specify Routes
$routes->addRoute('home', 'IndexController@index');

//autoload controller
include "controllers/" . basename($_SERVER['PHP_SELF'], ".php") . "Controller.php";

//validate url
$routes->submit();