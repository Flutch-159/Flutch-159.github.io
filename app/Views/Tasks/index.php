<?= $this->extend("layouts/default") ?>
<?= $this->section("title") ?>Tareas<?= $this->endSection() ?>
<?= $this->section("content") ?>

    <h1>Tareas</h1>

    <a class="button"href="<?= site_url("/tasks/new") ?>">Nueva Tarea</a>

    <div>
        <label for="query">Search</label>
        <input type="query" id="query">
    </div>

    <?php if ($tasks): ?>
        <ul>
            <?php foreach($tasks as $task): ?>

                <li>
                    <a href="<?= site_url("/tasks/show/" . $task->id) ?>">
                    <?= esc($task->descripcion) ?>
                    </a>
                </li>

            <?php endforeach;?>
        </ul>

    <?= $pager->simpleLinks()?>

    <?php else: ?>

        <p>No se encontraron tareas.</p>
        
    <?php endif; ?>

    <script src="<?= site_url('/js/auto-complete.min.js') ?>"></script>

    <script>
        var searchUrl = "<?= site_url('/tasks/search?q=') ?>";
        var showUrl = "<?= site_url('/tasks/show/') ?>";
        var data;
        var i;

        var searchAutoComplete = new autoComplete({
            selector: 'input[name="query"]',
            cache: false,
            source: function(term, response) {

                var request = new XMLHttpRequest();

                request.open('GET', searchUrl + term, true);

                request.onload = function() {

                    data = JSON.parse(this.response);

                    i = 0;

                    var suggestions = data.map(task => task.descripcion);

                    response(suggestions);
                };

                request.send();
            },
            renderItem: function (item, search) {

                var id = data[i].id;

                i++;

                return '<div class="autocomplete-suggestion" data-id="' + id + '">' + item + '</div>';
            },
            onSelect: function(e, term, item){

                window.location.href = showUrl + item.getAttribute('data-id');
            }
        });

    </script>

<?= $this->endSection() ?>