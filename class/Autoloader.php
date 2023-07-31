<?php

class Autoloader {

    static function register() {
        //spl_autoload_register(array(__CLASS__, 'autoload')); //code Grafikart
        spl_autoload_register('self::autoload'); // parametre de type callable
    }

    static function autoload($class_name){
        require 'class/' . $class_name . '.php';
    }

}