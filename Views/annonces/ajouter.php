<h1>Ajouter une annonce</h1>
<?php if ($exception) : ?>
    <div class="alert alert-danger" role="alert">
        <?= $exception ?>
    </div>
<?php endif ?>
<?= $form ?>