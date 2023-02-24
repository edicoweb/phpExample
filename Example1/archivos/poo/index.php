<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'models/Task.php';
$query = require 'boostrap.php';

$tasks = $query->selectAll('tasks', 'Task');

// $tasks[0]->setCol9or(ColorsEnum::GREEN->value);

$completedTasks = array_filter($tasks, function ($task) {
    return $task->completed;
});

$pendingTasks = array_filter($tasks, function ($task){
    return !$task->completed;
});

require 'views/index.view.php';
