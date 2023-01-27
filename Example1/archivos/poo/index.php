<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// require 'functions.php';
require 'Models/Task.php';

// Instanciar objetos
$tasks = [
    new Task('Curso de C'),
    new Task('introducción a Web 0.3', true),
    new Task('Curso de html'),
    new Task(completed : true, title: 'Curso de ccs'),
];

// dd($tasks);

$coursesCompleted = array_filter($tasks, function($task){
    return $task->completed;
});

// echo "COMPLETED \n";    
// foreach ($coursesCompleted as $courseCompleted) {
//     echo $courseCompleted->title . "\n";
// }

$coursesIncompleted = array_filter($tasks, function($task){
    return !$task->completed;
});

// echo "\nINCOMPLETED \n";
// foreach ($coursesIncompleted as $courseIncompleted){
//     echo $courseIncompleted->title . "\n";
// }

require 'Views/index.view.php';