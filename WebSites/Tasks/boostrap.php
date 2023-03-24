<?php
$config = require 'Admin/config.php';
require 'Database/Connection.php';
require 'Database/QueryBuilder.php';

$pdo = Connection::start($config['database']);
return new QueryBuilder($pdo);