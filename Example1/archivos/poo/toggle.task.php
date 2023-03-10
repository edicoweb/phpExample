<?php
$query = require 'core/boostrap.php';

$query->update('tasks', $_POST['id'], [
    'completed'=>$_POST['completed'],
]);

header('Location: index.php');