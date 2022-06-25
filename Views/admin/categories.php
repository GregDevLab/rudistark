<table class="table table-striped">
    <thead>
        <th>ID</th>
        <th>Nom</th>
        <th>Actions</th>
    </thead>
    <tbody>
        <?php foreach ($categories as $categorie) : ?>
            <tr>
                <td><?= $categorie->id ?></td>
                <td><?= $categorie->nom ?></td>
                <td>
                    <a href="/categories/modifier/<?= $categorie->id ?>" class="btn btn-warning">Modifier</a><a href="/admin/supprimeCategorie/<?= $categorie->id ?>" class="btn btn-danger">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>