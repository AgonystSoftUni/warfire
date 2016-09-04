<?php
class Routing
{
    private $uri = [];
    private $method = [];

    public function addRoute($uri, $method = null)
    {
        $this->uri[] = trim($uri,"/");
        
        if($method != null)
        {
            $this->method[] = $method;
        }
    }
    public function submit()
    {
        $uri = isset($_GET['uri']) ? $_GET['uri'] : '/';

        foreach($this->uri as $key => $value)
        {
            if(preg_match("#^$value$#", $uri))
            {
                $currentMethodClass = explode("@", $this->method[$key]);
                $callMethod = $currentMethodClass[1];
                $callClass = new $currentMethodClass[0];
                call_user_func_array(array($callClass, $callMethod), array());
            }
        }
    }
    public function dumpRoutes()
    {
        var_dump($this->uri);
    }
}