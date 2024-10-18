<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?> Resetear contraseña<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>Resetear contraseña</h1>

<p>Contraseña reseteada satisfactoriamente</p>

<p><a href="<?= site_url("/login") ?>">Iniciar Sesión</a></p>

<?= $this->endSection() ?>