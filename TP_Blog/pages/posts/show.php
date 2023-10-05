<?php

$app = App::getInstance();
$post = $app->getTable('Post')->find($_GET['id']);
if($post === false) {
    $app->notFound();
}
$app->title = $post->titre;
?>

<h2><?= $post->titre ?></h2>

<p><?= $post->contenu ?></p>