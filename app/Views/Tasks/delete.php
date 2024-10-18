<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Borrar tarea<?= $this->endSection() ?>

<?= $this->section("content") ?>
<h1 class="title">Borrar Tarea</h1>

<p>Estas seguro?</p>

<?= form_open("/tasks/delete/" . $task->id) ?>
    
    <button>Si</button>
    <a href="<?= site_url('/tasks/show/' . $task->id) ?>">Cancelar</a>
</form>

<?= $this->endSection() ?>