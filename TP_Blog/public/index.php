<?php

require '../app/Autoloader.php';
App\Autoloader::register();
$app = App\App::getInstance();
$app->title = 'titre de test';
?>
