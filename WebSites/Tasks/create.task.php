<?php
require 'functions/function.php';
$query = require 'boostrap.php';

$query->create('tasks', [
    'title' => $_POST['title'],
    'completed' => $_POST['completed']
]);

header('Location: index.php');