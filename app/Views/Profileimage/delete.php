<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Borrar foto de perfil<?= $this->endSection() ?>

<?= $this->section("content") ?>
<h1>Borrar foto de perfil</h1>

<p>Estas seguro?</p>

<?= form_open("/profileimage/delete") ?>
    
    <button>Si</button>
    <a href="<?= site_url('/profile/show/') ?>">Cancelar</a>
</form>

<?= $this->endSection() ?>