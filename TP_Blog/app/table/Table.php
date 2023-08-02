<?php
namespace App\Table;

use App\App;

class Table {

    public static function query($statement, $params = null, $one = false)
    {
        if ($params) {
            return App::getDB()->prepare($statement, $params, get_called_class(), $one);
        } else {
            return App::getDB()->query($statement, get_called_class(), $one);
        }
    }
    
    public static function find($id)
    {
        return static::query(
            "SELECT *   
            FROM " . static::$table . " 
            WHERE id = ?
        ", [$id], true);
    }

    public static function all()
    {
        return static::query(
            "SELECT *   
            FROM " . static::$table . "
            ");
    }

    public function __get($name)
    {
        $method = 'get' . ucfirst($name);
        $this->$name = $this->$method(); // Evite de rappeler __get() si déjà existant
        return $this->$name;
    }

}