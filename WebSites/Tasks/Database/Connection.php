<?php
class Connection {
    public static function start($config){
        try {
            return new PDO("{$config['dbtype']}:host={$config['host']}; dbname={$config['dbname']}", $config['user'], $config['pass']);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}