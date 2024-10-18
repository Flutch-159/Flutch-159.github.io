<?php

namespace App\Models;

class TaskModel extends \CodeIgniter\Model
{
    protected $table = 'task';

    protected $allowedFields = ['descripcion', 'user_id'];

    protected $returnType ='App\Entities\Task';

    protected $useTimestamps = true;

    protected $validationRules = [
        'descripcion' => 'required'
    ]; 

    protected $validationMessages = [
        'descripcion' => [
            'required' => 'Porfavor ingresar una descripción'
        ]
    ];

    public function paginateTasksByUserId($id)
    {
        return $this->where('user_id', $id)
                    ->orderBy('created_at')
                    ->paginate(5);
    }

    public function getTaskByUserId($id, $user_id)
    {
        return $this->where('id', $id)
                    ->where('user_id', $user_id)
                    ->first();
    }

    public function search($term, $user_id)
    {

        if ($term === null) {
            return [];
        }

        return $this->select('id, descripcion')
                    ->where('user_id', $user_id)
                    ->like('descripcion', $term)
                    ->get()
                    ->getResultArray();
    }
}