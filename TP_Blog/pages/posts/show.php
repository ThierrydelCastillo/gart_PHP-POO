<?php

$app = App::getInstance();
$post = $app->getTable('Post')->findWithCategory($_GET['id']);
if($post === false) {
    $app->notFound();
}
$app->title = $post->titre;
?>

<h2><?= $post->titre ?></h2>

<p><em><?= $post->categorie ?></em></p>

<p><?= $post->contenu ?></p>