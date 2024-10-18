<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Borrar Usuario<?= $this->endSection() ?>

<?= $this->section("content") ?>
<h1 class="title">Borrar Usuario</h1>

<p>Estas seguro?</p>

<?= form_open("/admin/users/delete/" . $user->id) ?>
    
    <button>Si</button>
    <a href="<?= site_url('/admin/users/show/' . $user->id) ?>">Cancelar</a>
</form>

<?= $this->endSection() ?>