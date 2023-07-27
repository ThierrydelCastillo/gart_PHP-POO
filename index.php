<?php

require 'Personnage.php';

$merlin = new Personnage("Merlin");
$harry = new Personnage("Harry");

$merlin->setNom('Marlin');

var_dump($merlin->getNom());
var_dump($merlin->getAtk());
?>

