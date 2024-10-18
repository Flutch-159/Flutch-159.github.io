<?= $this->extend('layouts/default')?>

<?= $this->section('title')?>Editar Perfil<?= $this->endSection()?>

<?= $this->section('content')?>

<h1 class="title">Editar perfil</h1>

<?php if(session()->has('errors')): ?>

    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error;?></li>
        <?php endforeach;?>
    </ul>
<?php endif ?> 

<?= form_open("/profile/update") ?>

    <div class="field">
        <label class="label" for="name">Nombre</label>
        <input class="input" type="text" name="name" id="name" value="<?=old('name', esc($user->name))?>">
    </div>

    <div class="field">
        <label class="label" for="email">Correo</label>
        <input class="input" type="text" name="email" id="email" value="<?=old('email', esc($user->email))?>">
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