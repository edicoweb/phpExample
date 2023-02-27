<?php
Class QueryBuilder {

    protected $pdo;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function selectAll($table, $class){
        $query = $this->pdo->prepare("SELECT * FROM $table");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, $class);
    }

    public function create($table, $params){
        $cols = implode(', ', array_keys($params));
        $placeholders = ':'.implode(', :', array_keys($params));
        $sql = "INSERT INTO $table ($cols) VALUES ($placeholders)";
        try {
            $query = $this->pdo->prepare($sql);
            $query->execute($params);
        } catch (\PDOExeption $e) {
            die($e->getMessage());
        }
    }

}

