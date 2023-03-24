<?php
require 'functions/function.php';
require 'Models/Task.php';
$query = require 'boostrap.php';

$tasks = $query->selectAll("tasks", "Task");
// dd($tasks);

$completedTasks = array_filter($tasks, function($task){ return $task->completed; });
$pendingTasks = array_filter($tasks, function($task){ return !$task->completed; });

require 'Views/index.view.php';