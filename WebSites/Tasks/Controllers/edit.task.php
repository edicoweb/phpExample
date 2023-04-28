<?php 
// Buscamos el Task
$task = Task::find($_POST['id']);
// Actualizamos el Task
$task->update([
    'completed' => $_POST['completed'],
]);

header('Location: /');