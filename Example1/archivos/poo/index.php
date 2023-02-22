<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'functions/function.php';
require 'models/Task.php';

$pdo = dbConnect("localhost", "prueba_csl", "root", "");
$tasks = getTasks($pdo);

// array_filter($array, function (){}) funcion anonima o tambien conocido como callback

$completedTasks = array_filter($tasks, function ($task) {
    return $task->completed;
});

$pendingTasks = array_filter($tasks, function ($task){
    return !$task->completed;
});

require 'views/index.view.php';
