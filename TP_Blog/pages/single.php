<?php

use App\App;
use App\Table\{Article,Categorie};

$post = Article::find($_GET['id']) ;
if ($post === false) {
    App::notFound();
}
App::setTitle($post->titre);
?>

<h2><?= $post->titre ?></h2>

<p><em><?= $post->categorie ?></em></p>

<p><?= $post->contenu ?></p>