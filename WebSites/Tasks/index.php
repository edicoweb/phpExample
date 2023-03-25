<?php
require 'functions/function.php';
$query = require 'Core/boostrap.php';

//$routes = [ routes array ];
$routes = require 'Routes/Routes.php';

//Return the url (Core/Request)
$url = Request::url();

//we pass the $Routes
$router = new Router;
$router->register($routes);

//devuelve la ruta
require $router->handle($url);