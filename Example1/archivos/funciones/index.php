<?php

$language = 'PHP';

$tasks = [
    [
        'title' => 'Curso de PHP',
        'completed' => false
    ],
    [
        'title' => 'Curso de html',
        'completed' => true
    ],
    [
        'title' => 'curso de css',
        'completed' => true
    ]
];

// array_filter($array, function (){}) funcion anonima o tambien conocido como callback

$completedTasks = array_filter($tasks, function ($task) {
    return $task['completed'];
});

$pendingTasks = array_filter($tasks, function ($task){
    return !$task['completed'];
});

require 'task.php';
