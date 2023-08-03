<?php

require '../app/Autoloader.php';
App\Autoloader::register();

$app = App\App::getInstance();
$table = $app->getTable('post');
var_dump($table->all());
?>
