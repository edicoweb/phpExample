<?php

namespace App\Http;

class request{
    protected $segments = [];
    protected $controller;
    protected $method;

    public function __contruct(){
        $this->segments = explode("/", $_SERVER['REQUEST_URI']);
        var_dump($this->segments);

    }
}