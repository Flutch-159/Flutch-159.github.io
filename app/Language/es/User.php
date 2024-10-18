<?php

return [
    'email' => [
            'is_unique' => 'Este correo electronico ya esta registrado'
        ],
        'password_confirmation' => [
            'required' => 'Porfavor, repite la contraseña',
            'matches' => 'Porfavor, mete la misma contraseña denuevo'
        ]
];