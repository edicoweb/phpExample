<?php
class Router{
    protected $routes = [];
    public function register($routes){
        return $this->routes = $routes;
    }

    public function handle($url){
        if (array_key_exists($url, $this->routes)) {
            return $this->routes[$url]; 
        } else {
            die('No existe la ruta ingresada');
        }
    }
}