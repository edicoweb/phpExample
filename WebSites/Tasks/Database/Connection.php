<?php
class Connection {
    public static function start(){
        try {
            return new PDO("mysql:host=127.0.0.1; dbname=dbtest", "root", "");
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}