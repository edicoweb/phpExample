<?php
$query = require 'core/boostrap.php';
require 'models/Task.php';

$tasks = $query->selectAll('tasks', 'Task');

// $tasks[0]->setCol9or(ColorsEnum::GREEN->value);

$completedTasks = array_filter($tasks, function ($task) {
    return $task->completed;
});

$pendingTasks = array_filter($tasks, function ($task){
    return !$task->completed;
});

require 'views/index.view.php';
