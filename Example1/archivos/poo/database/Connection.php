<?php
class connection {
    public static function start($config)
    {
        try{
            return new PDO("{$config['type']}:host={$config['host']}; dbname={$config['dbname']}", $config['user'], $config['password']);
        } catch(PDOException $e){
            echo "Este es un error ".$e->getMessage();
        }
    }
}