<table class="table table-striped">
    <thead>
        <th>ID</th>
        <th>E-mail</th>
        <th>Roles</th>
    </thead>
    <tbody>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?= $user->id ?></td>
                <td><?= $user->email ?></td>
                <td><?= $user->roles ?></td>
                <td>
                    <a href="/admin/supprimeUser/<?= $user->id ?>" class="btn btn-danger">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>

    </tbody>
</table>