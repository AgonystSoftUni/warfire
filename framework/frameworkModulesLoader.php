<?php

namespace Framework;

include "modules/routing.php";
include "modules/view.php";
include "modules/database.php";

use Framework\RoutingModule\Routing as RoutingModule;
use Framework\ViewModule\View as ViewModule;
use Framework\DatabaseModule\Database as DatabaseModule;

class FrameworkModulesLoader
{
    private static $_instance;
    private $routingModule, $viewModule, $databaseModule;

    public function __construct()
    {
        $this->routingModule = new RoutingModule();
        $this->viewModule = new ViewModule();
        $this->databaseModule = new DatabaseModule();
    }
    public static function getInstance()
    {
        if(!self::$_instance) 
        { 
			self::$_instance = new self();
		}
		return self::$_instance;
    }
    public function getRoutingModule()
    {
        return $this->routingModule;
    }
    public function getViewModule()
    {
        return $this->viewModule;
    }
}