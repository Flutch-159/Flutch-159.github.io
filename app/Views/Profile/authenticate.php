<?= $this->extend('layouts/default')?>

<?= $this->section('title')?>Editar Perfil<?= $this->endSection()?>

<?= $this->section('content')?>

<h1 class="title">Editar Perfil</h1>

<p>Porfavor ingrese su contraseña para continuar</p>

<?= form_open("/profile/processauthenticate")?>
    <div class="field">
        <label class="label" for="password">Contraseña</label>
        <input class="input" type="password" name="password">
    </div>

    <div class="field is-grouped">
        <div class="control">
            <button class="button is-primary">Enviar</button>
        </div>
        <div class="control">
            <a class="button" href="<?= site_url('/profile/show') ?>">Cancelar</a>
        </div>
    </div>
</form>

<?= $this->endSection()?>