<?php
namespace App;

class App {

    public $title = 'Mon super site';
    private static $_instance;
    private $db_instance;

    public static function getInstance()
    {
        if (is_null(self::$_instance))
        {
            self::$_instance = new App();
        }
        return self::$_instance;
    }

    public function getTable($name)
    {
        $class_name = 'App\\Table\\' . ucfirst($name) . 'Table';
        return new $class_name();
    }

    public function getDb()
    {
        $config = Config::getInstance();
        if (is_null($this->db_instance)) {
            $this->db_instance = new Database($config->get('db_name'));
        }
        return $this->db_instance;
    }

}