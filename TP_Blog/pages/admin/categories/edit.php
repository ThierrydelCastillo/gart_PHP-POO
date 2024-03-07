<?php
$table = App::getInstance()->getTable('Category');

if(!empty($_POST)) {
    $result = $table->update($_GET['id'], [
        'titre' => $_POST['titre'],
    ]);
    if($result){
        ?>
            <div class="alert alert-success">
                La catégorie a bien été modifiée
            </div>
        <?php
    }
}

$category = $table->find($_GET['id']);
$form = new \Core\HTML\BootstrapForm($category);
?>

<form method="post">
    <?= $form->input('titre', 'Nom de la catégorie'); ?>
    <button class="btn btn-primary">Sauvegarder</button>
</form>