<?= $this->extend('layouts/default')?>

<?= $this->section('title')?>Editar Contraseña<?= $this->endSection()?>

<?= $this->section('content')?>

<h1 class="title">Editar Contraseña</h1>

<?php if(session()->has('errors')): ?>

    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error;?></li>
        <?php endforeach;?>
    </ul>
<?php endif ?> 

<?= form_open("/profile/updatepassword") ?>

    <div class="field">
        <label class="label" for="current_password">Contraseña actual</label>
        <input class="input" type="password" name="current_password">
    </div>

    <div class="field">
        <label class="label" for="password">Nueva Contraseña</label>
        <input class="input" type="password" name="password">
    </div>

    <div class="field">
        <label class="label" for="password_confirmation">Repita nuevamente la Contraseña</label>
        <input class="input" type="password" name="password_confirmation">
    </div>
    
    <div class="field is-grouped">
        <div class="control">
            <button class="button is-primary">Guardar</button>
        </div>
        <div class="control">
            <a class="button" href="<?= site_url("/profile/show/") ?>">Cancelar</a>
        </div>
    </div>
    

</form>

<?= $this->endSection()?>