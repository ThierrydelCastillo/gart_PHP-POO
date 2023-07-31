<?php
namespace Tutoriel;

require 'class/autoloader.php';
Autoloader::register();

$merlin = new Personnage('Merlin');
$harry = new Personnage('Harry');
$legolas = new Archer('Legolas');

$legolas->attaque($harry);

var_dump($merlin, $harry, $legolas);