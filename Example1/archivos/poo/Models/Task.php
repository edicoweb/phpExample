<?php
class Task{
    public $title;
    public $completed;

    // Contructor property promotion
    public function __construct($title, $completed = false){
        $this->title = $title;
        $this->completed = $completed;
    }

    public function save($nameFile){
        $file = fopen($nameFile, 'w');
        fwrite($file, "Titulo: {$this->title} \n Complete: " . ($this->completed ? 'SI' : 'NO'));
        fclose($file);
    }
}

$task = new Task('Ir al supermercado');
$task->save("task-1.txt");