<?= $this->extend('layouts/default')?>

<?= $this->section('title')?>Nueva Tarea<?= $this->endSection()?>

<?= $this->section('content')?>

<h1 class="title">Nueva tarea</h1>

<?php if(session()->has('errors')): ?>

    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error;?></li>
        <?php endforeach;?>
    </ul>
<?php endif ?> 

<?= form_open("/tasks/create") ?>

    <?= $this->include('Tasks/form')?>

    <div class="field is-grouped">
        <div class="control">
            <button class="button is-primary">Guardar</button>
        </div>
        <div class="control">
            <a class="button" href="<?= site_url("/tasks") ?>">Cancelar</a>
        </div>
    </div>

</form>

<?= $this->endSection()?>