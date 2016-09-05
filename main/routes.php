<?php
include "../framework/frameworkModulesLoader.php";
use Framework\FrameworkModulesLoader as ModulesLoader;
$modules = ModulesLoader::getInstance();

//Specify Routes
$modules->getRoutingModule()->addRoute('home', 'IndexController@index');
//autoload controller
include "controllers/" . basename($_SERVER['PHP_SELF'], ".php") . "Controller.php";

//validate url
$modules->getRoutingModule()->submit();
$modules->getViewModule()->renderView();