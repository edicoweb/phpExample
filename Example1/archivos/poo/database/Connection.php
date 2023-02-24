<?php
class connection {
    public static function start($db_host, $db_name, $db_user, $db_pass)
    {
        try{
            return new PDO("mysql:host=$db_host; dbname=$db_name", "$db_user", "$db_pass");
        } catch(PDOException $e){
            echo "Este es un error ".$e->getMessage();
        }
    }
}