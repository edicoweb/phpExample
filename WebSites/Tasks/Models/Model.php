<?php
class Model {
    protected $properties = [];
    protected $table;

    public function __construct($properties = []){
        $this->properties = $properties;
    }

    public static function create($properties){
        $model = new static($properties);
        $model->save();

        return $model;
    }

    public function save(){
        if (empty($this->table)) {
            throw new Exception("El nombre de la tabla no ah sido definida", 1);
        }

        App::get('database')->create($this->table, $this->properties);
    }
}