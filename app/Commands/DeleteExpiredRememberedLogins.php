<?php

namespace App\Commands;

use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;
use App\Models\RememberedLoginModel;

class DeleteExpiredRememberedLogins extends BaseCommand
{
    protected $group       = 'Auth';
    protected $name        = 'auth:cleanup';
    protected $description = 'Borra los registros de inicio de sesión recordados caducados.';

    public function run(array $params)
    {
        $model = new RememberedLoginModel;

        $rows = $model->deleteExpired();

        echo "$rows filas borradas.\n";
    }
}