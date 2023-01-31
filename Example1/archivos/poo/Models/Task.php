<?php

class Task {
    // Propiedades
    public $title;
    public $completed;
    // Metodos
    //Constructor
    public function __construct($title, $completed = false){
        $this->title = $title;
        $this->completed = $completed;
    }

    public function buildString(){
        return "Title: {$this->title} \n" .
                "Completed: " . ($this->completed ? "Si" : "No");
    }

    public function save($name){
        $file = fopen($name, 'w');
        fwrite($file, $this->buildString());
        fclose($file);
    }
    
}

// Constructor Property Promotion
/**
class Task {
    public function __construct(public $title, public $completed = false){
        
    }
}
**/

$task = new Task("Ir al supermercado", true);
$task->save("task-1.txt");

