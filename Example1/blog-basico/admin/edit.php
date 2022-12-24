<?php
session_start();

require 'config.php';
require '../function.php';

$conexion = conexion($bd_config);

if (!$conexion) {
    reader('Location: ../error.php');
}

require '../views/admin_edit.view.php';
?>