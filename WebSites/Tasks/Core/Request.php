<?php
//returns the url
class Request{
    public static function url(){
        return trim($_SERVER['REQUEST_URI'], '/');
    }
}