<?php
$query = require 'core/boostrap.php';

$query->delete('tasks', $_POST['id']);

header('Location: index.php');