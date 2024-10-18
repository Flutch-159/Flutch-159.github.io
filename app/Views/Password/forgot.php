<?= $this->extend('layouts/default')?>

<?= $this->section('title')?>Olvido su clave<?= $this->endSection()?>

<?= $this->section('content')?>

<h1 class="title">Olvido su clave</h1>

<?= form_open("/password/processforgot") ?>

    <div class="field">
        <label class="label"for="email">Correo</label>
        <input class="input"type="text" name="email" id="email" value="<?=old('email')?>">
    </div>

    <div class="field is-grouped">
            <div class="control">
                <button class="button is-primary">Enviar</button>
            </div>
        </div> 
</form>

<?= $this->endSection() ?>