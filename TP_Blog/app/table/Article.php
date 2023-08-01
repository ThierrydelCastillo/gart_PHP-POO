<?php

namespace App\Table;

class Article {

    public function __get($name)
    {
        $method = 'get' . ucfirst($name); 
        $this->$name = $this->$method(); // Evite de rappeler __get() si déjà existant
        return $this->$method();
    }

    public function getUrl()
    {
        return 'index.php?p=article&id=' . $this->id;
    }

    public function getExtrait()
    {
        $html = '<p>' . substr($this->contenu, 0, 100) . '...</p>';
        $html .= '<p><a href="'. $this->getURL() .'">Voir la suite</a></p>';
        return $html;
    }

    public function getTitre()
    {
        return $this->titre;
    }

}