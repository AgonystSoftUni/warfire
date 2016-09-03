<?php
class Routing
{
    private $url=[];
    public function addRoute($url)
    {
        $this->url[]="/".trim($url,"/");

    }
    public function dumpRoutes()
    {
        var_dump($url);

    }
}