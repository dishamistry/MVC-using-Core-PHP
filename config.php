<?php

return[

    'database' => [

        'name' => 'pdo_database',
        'username' => 'root',
        'password' => '',
        'connection' => 'mysql:host=localhost',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]

    ]

];