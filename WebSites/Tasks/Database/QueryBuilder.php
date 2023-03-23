<?php
class QueryBuilder{
    public $pdo;
    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function selectAll($table){
        $query = $this->pdo->prepare("SELECT * FROM {$table}");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}