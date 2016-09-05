<?php

namespace Framework\ViewModule;

class View
{
    private static $view = [];

    public static function setView($view, $layout = "layout")
    {
        self::$view["header"] = "views/".$layout."/header.php";
        self::$view["body"] = "views/".$view.".php";
        self::$view["footer"] = "views/".$layout."/footer.php";
    }
    public static function renderView()
    {
        include self::$view["header"];
        include self::$view['body'];
        include self::$view['footer'];
    }
}