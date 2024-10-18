<?= $this->extend("layouts/default") ?>
<?= $this->section("title") ?>Usuarios<?= $this->endSection() ?>
<?= $this->section("content") ?>

    <h1 class="title">Usuarios</h1>

    <a href="<?= site_url("/admin/users/new") ?>">Nuevo Usuario</a>

    <?php if ($users): ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Activo</th>
                    <th>Administrador</th>
                    <th>Creado en</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user): ?>

                    <tr>
                        <td> 
                            <a href="<?= site_url("/admin/users/show/" . $user->id) ?>">
                            <?= esc($user->name) ?>
                            </a>
                        </td>
                        <td><?= esc($user->email) ?></td>
                        <td><?= $user->is_active ? 'si' : 'no' ?></td>
                        <td><?= $user->is_admin ? 'si' : 'no' ?></td>
                        <td><?= $user->created_at ?></td> 
                    </tr>

                <?php endforeach;?>
            </tbody>
        </table>

    <?= $pager->simpleLinks()?>

    <?php else: ?>

        <p>No se encontraron Usuarios.</p>
        
    <?php endif; ?>

<?= $this->endSection() ?>