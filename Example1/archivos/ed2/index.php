<?php
$query = require 'core/boostrap.php';
require 'models/Task.php';

$route = [
    '' => 'controllers/index.php',
    'about' => 'controllers/about.php',
    'services' => 'controllers/services.php',
    'contact' => 'controllers/contact.php',
];

// $router = new Router;
// $router->register($router);
// $router->handle($url);


require 'controllers/index.php';