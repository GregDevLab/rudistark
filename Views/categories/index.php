<h1>Liste des categories</h1>

<?php foreach ($categories as $categorie) : ?>
    <article>
        <h2><a href="/categories/lire/<?= $categorie->id ?>"> <?= $categorie->nom ?><a /></h2>
    </article>
<?php endforeach; ?>