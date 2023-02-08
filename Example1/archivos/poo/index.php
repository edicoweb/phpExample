<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'functions/function.php';
require 'models/Task.php';

$tasks = [
    new Task(completed: true, title: 'Estudiar HTML'),
    new Task('Estudiar Css', true),
    new Task('Estudiar PHP'),
    new Task('Estudiar CSs')
];

// array_filter($array, function (){}) funcion anonima o tambien conocido como callback

$completedTasks = array_filter($tasks, function ($task) {
    return $task->completed;
});

$pendingTasks = array_filter($tasks, function ($task){
    return !$task->completed;
});

require 'views/index.view.php';
