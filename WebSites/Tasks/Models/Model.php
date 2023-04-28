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

    public function update($properties){
        App::get('database')->update($this->getTable(), $this->properties['id'], $properties);
        $this->setProperties($properties);
        return $this;
    }

    public function delete(){
        App::get('database')->delete($this->getTable(), $this->properties['id']);
        return $this;
    }

    public static function find($id){
        $model = new static;
        $properties = App::get('database')->find($model->getTable(), $id);
        $model->setProperties($properties);
        return $model;
    }

    public function save(){
        if (empty($this->table)) {
            throw new Exception("El nombre de la tabla no ah sido definida", 1);
        }

        App::get('database')->create($this->table, $this->properties);
    }

    //El proposito de este modelo es retornar el valor de la tabla
    public function getTable(){
        return $this->table;
    }

    public function setProperties($properties){
        $this->properties = array_merge($this->properties, $properties);
        return $this;
    }
}