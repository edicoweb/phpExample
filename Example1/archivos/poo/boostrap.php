<?php
require 'database/Connection.php';
require 'database/QueryBuilder.php';

$pdo = Connection::start("localhost", "prueba_csl", "root", "");
return new QueryBuilder($pdo);