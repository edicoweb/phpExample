<?php
class Task{
    public $title;
    public $completed;

    // Contructor property promotion
    public function __construct($title, $completed = false){
        $this->title = $title;
        $this->completed = $completed;
    }
}

