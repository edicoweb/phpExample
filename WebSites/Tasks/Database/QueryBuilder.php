<?php
class QueryBuilder{
    public $pdo;
    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function selectAll($table){
        $query = $this->pdo->prepare("SELECT * FROM {$table}");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($table, $id){
        $query = $this->pdo->prepare("SELECT * FROM {$table} WHERE id={$id} LIMIT 0,1");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC)[0];
    }

    public function findBy($table, $params){
        $cols = array_keys($params);
        $cols = implode(' AND ', array_map(function($col){ return "{$col}=:{$col}"; }, $cols));
        $query = $this->pdo->prepare("SELECT * FROM {$table} WHERE {$cols}");
        $query->execute($params);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($table, $params){
        $cols = implode(', ', array_keys($params));
        $placeholders = ':'.implode(', :', array_keys($params));
        $sql = "INSERT INTO $table ($cols) VALUES ($placeholders)";
        try {
            $query = $this->pdo->prepare($sql);
            return $query->execute($params);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function update($table, $id, $params){
        $cols = array_keys($params);
        $cols = implode(', ', array_map(function($col){ return "{$col}=:{$col}"; }, $cols));
        $sql = "UPDATE {$table} SET {$cols} WHERE id = :id";
        try {
            $query = $this->pdo->prepare($sql);
            return $query->execute([...$params, 'id' => $id]);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function delete($table, $id){
        $sql = "DELETE FROM {$table} WHERE id = :id";
        try {
            $query = $this->pdo->prepare($sql);
            return $query->execute(['id' => $id]);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}