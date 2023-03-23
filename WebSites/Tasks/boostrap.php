<?php
require 'Database/Connection.php';
require 'Database/QueryBuilder.php';

$pdo = Connection::start();
return new QueryBuilder($pdo);