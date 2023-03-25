<?php
$query->create('tasks', [
    'title' => $_POST['title'],
    'completed' => $_POST['completed']
]);

header('Location: /');