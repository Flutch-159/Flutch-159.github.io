<?= $this->extend('layouts/default')?>

<?= $this->section('title')?>Usuarios<?= $this->endSection()?>

<?= $this->section('content')?>

<h1 class="title">Usuarios</h1>

<a class="button is-link" href="<?= site_url("/admin/users")?>">&laquo; Regresar al Inicio</a>

<div class="content">
<dl>
    <dt class="has-text-weight-bold">Nombre</dt>
    <dd><?= esc($user->name)?> </dd>

    <dt class="has-text-weight-bold">Correo</dt>
    <dd><?= esc($user->email)?> </dd>

    <dt class="has-text-weight-bold">Activo</dt>
    <dd><?= $user->is_active ? 'si' : 'no' ?></dd>
    
    <dt class="has-text-weight-bold">Administrador</dt>
    <dd><?= $user->is_admin ? 'si' : 'no' ?></dd>
    
    <dt class="has-text-weight-bold">Creado en</dt>
    <dd><?= $user->created_at?> </dd>

    <dt class="has-text-weight-bold">Actualizado en</dt>
    <dd><?= $user->updated_at?> </dd>
</dl>
</div>

<a class="button is-link" href="<?= site_url('/admin/users/edit/' .  $user->id) ?>">Editar</a>

<?php if($user->id != current_user()->id): ?>

    <a class="button is-link" href="<?= site_url('/admin/users/delete/' . $user->id) ?>">Eliminar</a>

<?php endif; ?>

<?= $this->endSection()?>