<?php

require '../app/Autoloader.php';
App\Autoloader::register();

$app = App\App::getInstance();
$db = $app->getDb();
$post = $app->getTable('post');

?>
