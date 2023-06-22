<?php
require 'admin/config.php';
require 'functions/function.php';

$conexion = conexion($dbConfig);
if(!$conexion){
    header("Location: error.php");
}


require "views/blog.view.php";