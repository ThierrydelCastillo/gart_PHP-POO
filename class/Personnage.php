<?php
namespace Tutoriel;

class Personnage {

    protected static $max_vie = 120;

    protected $vie = 80;
    protected $atk = 20;
    protected $nom;

    public function __construct(string $name)
    {
        $this->nom = $name;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    
    public function getNom()
    {
        return $this->nom;
    }

    public function getVie()
    {
        return $this->vie;
    }

    public function getAtk()
    {
        return $this->atk;
    }

    public function crier()
    {
        echo "LEROY JENKINS !";
    }

    public function regenerer($vie = null)
    {
        if (is_null($vie)){
            $this->vie = self::$max_vie;
        } else {
            $this->vie += $vie;
        }
    }

    public function mort()
    {
        return $this->vie <= 0;
    }

    protected function empecher_negatif()
    {
        if ($this->vie < 0){
            $this->vie = 0;
        }
    }

    public function attaque(Personnage $cible)
    {
        $cible->vie -= $this->atk;
        $cible->empecher_negatif();
    }
}