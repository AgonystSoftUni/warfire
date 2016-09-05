<?php

use Framework\ViewModule\View as View;

class indexController 
{
    public function __construct()
    {
    }
    public function index()
    {
        View::setView("home");
    }

}