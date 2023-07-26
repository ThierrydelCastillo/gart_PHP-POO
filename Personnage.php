<?php

class Personnage {

    public $vie = 20;
    public $atk = 20;
    public $nom;

    public function __construct(string $name)
    {
        $this->nom = $name;
    }
    
    public function crier()
    {
        echo "LEROY JENKINS !";
    }

    public function regenerer($vie = null)
    {
        if (is_null($vie)){
            $this->vie = 100;
        } else {
            $this->vie += $vie;
        }
    }

    public function mort()
    {
        return $this->vie <= 0;
    }

    public function attaque(Personnage $cible)
    {
        $cible->vie -= $this->atk;
    }
}