<?php
$config = require 'Admin/config.php';
require 'Database/Connection.php';
require 'Database/QueryBuilder.php';
require 'Models/Task.php';
require 'Router.php';
require 'Request.php';

$pdo = Connection::start($config['database']);
return new QueryBuilder($pdo);