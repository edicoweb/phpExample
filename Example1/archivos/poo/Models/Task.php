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
    
}

// Constructor Property Promotion
/**
class Task {
    public function __construct(public $title, public $completed = false){
        
    }
}
**/