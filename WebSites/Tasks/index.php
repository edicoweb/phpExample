<?php
require 'functions/function.php';

class Task {
    public $title;
    public $completed = false;

    public function title($title){
        $this->title = $title;
    }
}

$task = new Task;
$task->title('Hola');
dd($task);

$tasks = [
    [
        'title' => 'Estudiar PHP',
        'completed' => true,
    ], 
    [
        'title' => 'Ir al supermercado',
        'completed' => false,
    ],
    [
        'title' => 'dormir',
        'completed' => true,
    ]
];

$completedTasks = array_filter($tasks, function($task){ return $task['completed']; });
$pendingTasks = array_filter($tasks, function($task){ return !$task['completed']; });

require 'views/index.view.php';