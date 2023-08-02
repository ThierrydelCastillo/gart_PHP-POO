<?php
namespace App;

use PDO;

class Database {

    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_host;
    private $pdo;

    public function __construct($db_name, $db_user = 'root', $db_pass = 'root', $db_host = 'localhost')
    {
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;
    }

    private function getPDO()
    {
        if ($this->pdo === null) {
            $this->pdo = new PDO("mysql:dbname=$this->db_name;host:$this->db_host", $this->db_user, $this->db_pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
        return $this->pdo;
    }

    public function query($statement, $class_name, $one = false)
    {
        $statement = $this->getPDO()->query($statement);
        $statement->setFetchMode(PDO::FETCH_CLASS, $class_name);
        if ($one) {
            $data = $statement->fetch();
        } else {
            $data = $statement->fetchAll();
        }
        return $data;
    }

    public function prepare($statement, $params, $class_name, $one = false)
    {
        $statement = $this->getPDO()->prepare($statement);
        $statement->execute($params);
        $statement->setFetchMode(PDO::FETCH_CLASS, $class_name);
        if ($one) {
            $data = $statement->fetch();
        } else {
            $data = $statement->fetchAll();
        }
        
        return $data;
    }
}