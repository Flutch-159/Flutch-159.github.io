<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?> Resetear contraseña<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>Resetear contraseña</h1>

<?php if(session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach ?>
    </ul>
<?php endif?>

<?= form_open("/password/processreset/$token") ?>

    <div>
        <label for="password">Contraseña</label>
        <input type="password" name="password">
    </div>

    <div>
        <label for="password_confirmation">Repita la contraseña</label>
        <input type="password" name="password_confirmation">
    </div>

    <button>Resetear Contraseña</button>

</form>

<?= $this->endSection() ?>