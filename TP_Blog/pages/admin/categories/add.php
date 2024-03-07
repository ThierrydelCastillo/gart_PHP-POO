<?php
$table = App::getInstance()->getTable('Category');

if(!empty($_POST)) {
    $result = $table->create([
        'titre' => $_POST['titre'],
    ]);
    if($result){
        Header('Location: admin.php?p=categories.index');
    }
}

$form = new \Core\HTML\BootstrapForm($_POST);
?>

<form method="post">
    <?= $form->input('titre', 'Nom de la catégorie'); ?>
    <button class="btn btn-primary">Sauvegarder</button>
</form>