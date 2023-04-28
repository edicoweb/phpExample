<?php
$task = Task::find($_POST['id']);
$task->delete();

// App::get('database')->delete('tasks', $_POST['id']);

header('Location: /');