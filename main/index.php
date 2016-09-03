<?php
include "framework/routing.php";
$routes = new Routing();
$routes->addRoute('home');
$routes->dumpRoutes();