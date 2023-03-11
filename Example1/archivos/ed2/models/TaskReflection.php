<?php
require __DIR__ . '/../functions/function.php';

class Model{
    public function buildString(){   
        $me = new ReflectionClass($this);
        $properties = $me->getProperties();

        $string = "";
        foreach ($properties as $property) {
            $propertyName = $property->name;
            $propertyValue = $this->$propertyName;
            $string = $string . "{$propertyName}: " . (is_bool($propertyValue) ? var_export($propertyValue, true) : $propertyValue) . "\n";
        }
        return $string;
        // return "Titulo: {$this->title} \n" . 
        // " Complete: " . ($this->completed ? 'SI' : 'NO');
    }

    public function save($nameFile = null){
        if (is_null($nameFile)) {
            $me = new ReflectionClass($this);
            $fileName = $me->getName();
            $nameFile = lcfirst($fileName). ".txt";
        }

        $file = fopen($nameFile, 'w');
        fwrite($file, $this->buildString() );
        fclose($file);
    }
}

class Task extends Model{
    public $title;
    public $completed;

    // Contructor property promotion
    public function __construct($title, $completed = false){
        $this->title = $title;
        $this->completed = $completed;
    }
}


class Exam extends Model{

    // Contructor property promotion
    public function __construct(
        public $topic,
        public $info,
        public $completed = false){}
}


$task = new Task('Aprobar el curso de php');
$task->save("task-1.txt");

$exam = new Exam('Aprobar el Examen', 'Php 8 primer marcial', true);
$exam->save('exam-1.txt');