<?php
require 'App.php';
require 'Database/Connection.php';
require 'Database/QueryBuilder.php';
require 'Models/Task.php';
require 'Models/Model.php';
require 'Router.php';
require 'Request.php';

App::set('config',require 'Admin/config.php');
App::set('database', new QueryBuilder(
    Connection::start(App::get('config')['database'])
));