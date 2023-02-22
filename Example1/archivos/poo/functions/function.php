<?php
function dd($value){
    return die(var_dump($value));
}

function dbConnect($db_host, $db_name, $db_user, $db_pass){
    try{
        return new PDO("mysql:host=$db_host; dbname=$db_name", "$db_user", "$db_pass");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        echo "Este es un error ".$e->getMessage();
    }
}

function getTasks($pdo){
    $query = $pdo->prepare("SELECT * FROM tasks");
    $query->execute();
    return $query->fetchAll(PDO::FETCH_OBJ);
}