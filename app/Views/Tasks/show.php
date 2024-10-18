<?= $this->extend('layouts/default')?>

<?= $this->section('title')?>Tareas<?= $this->endSection()?>

<?= $this->section('content')?>

<h1>Tareas</h1>

<a class="button is-link" href="<?= site_url("/tasks")?>">&laquo; Regresar al Inicio</a>

<div class="content">
<dl>
    <dt class="has-text-weight-bold">ID</dt>
    <dd><?= $task->id?> </dd>

    <dt class="has-text-weight-bold">descripción</dt>
    <dd><?= esc($task->descripcion)?> </dd>

    <dt class="has-text-weight-bold">Creado en</dt>
    <dd><?= $task->created_at->humanize()  ?> </dd>

    <dt class="has-text-weight-bold">Actualizado en</dt>
    <dd><?= $task->updated_at->humanize()  ?> </dd>
</dl>
</div>

<a  class="button is-link" href="<?= site_url('/tasks/edit/' .  $task->id) ?>">Editar</a>
<a class="button is-link" href="<?= site_url('/tasks/delete/' . $task->id) ?>">Eliminar</a>

<?= $this->endSection()?>