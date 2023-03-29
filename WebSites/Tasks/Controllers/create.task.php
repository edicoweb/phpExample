<?php
App::get('database')->create('tasks', [
    'title' => $_POST['title'],
    'completed' => $_POST['completed']
]);

header('Location: /');